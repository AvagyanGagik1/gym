$(document).ready(function () {
    let key = 0
    $('.leftmenutrigger').on('click', function (e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
    });
    $('.cloneVideoDiv').click(cloneVideoDiv);
    $('.cloneTaskDiv').click(cloneTaskDiv);
    $('.cloneSubTaskDiv').click(cloneSubtaskDiv)
    $('#workoutForm').submit(function (e) {
        let tasks = []
        let tmp = {}
        e.preventDefault()
        $('.tasks').each(function (index) {
            tmp.key = $(this).parent().parent().attr('data-key')
            if ($(this).attr('data-lang') === 'ru') {
                tmp.name_ru = $(this).val()
            }
            if ($(this).attr('data-lang') === 'en') {
                tmp.name_en = $(this).val()
            }
            if ($(this).attr('data-lang') === 'blr') {
                tmp.name_blr = $(this).val()
            }

            tmp.subtasks = []
            if (e.target.action)
                if ((Number(index) + 1) % 3 === 0) {
                    tasks.push({
                        name_ru: tmp.name_ru,
                        name_en: tmp.name_en,
                        name_blr: tmp.name_blr,
                        key: tmp.key,
                        subtasks: []
                    })
                }
        })
        $('.subtask').each(function () {
            $(this).children('div').each(function () {
                tasks.forEach((i) => {
                    if (i.key === $(this).attr('data-key'))
                        $(this).children('div').children('input').each(function () {
                            i.subtasks.push({'value': $(this).val(), 'lang': $(this).attr('data-lang')})
                        })
                })
            })

        })
        let data = new FormData(e.target)
        data.append('tasks', JSON.stringify(tasks))
        axios.post(e.target.action, data).then(response => {
            window.location='/admin/program/after/'+response.data.id
            // console.log(response.data.id)
        }).catch((error)=>{
            for (const [key, value] of Object.entries(error.response.data.errors)) {
                if(key === 'name_ru'){
                    $('.name_ru').html(value).removeClass('d-none')
                }else if(key === 'name_en'){
                    $('.name_en').html(value).removeClass('d-none')
                }else if(key === 'name_blr'){
                    $('.name_blr').html(value).removeClass('d-none')
                }else if(key === 'calories'){
                    $('.calories').html(value).removeClass('d-none')
                }else if(key.includes('link')){
                    $('.link').html(value).removeClass('d-none')
                }else if(key.includes('task') && !key.indexOf('t')){
                    $('.taskSpan').html(value).removeClass('d-none')
                }else if(key.includes('subtask')){
                    $('.subtaskSpan').html(value).removeClass('d-none')
                }
            }
        })
    })
    $('.approved').change(function () {
        let id = $(this).attr('data-id')
        axios.post('/admin/change/comment/' + id + '/status', {approved: $(this).is(':checked')}).then((response) => {
            window.location = '/admin/workOut'
        })
    })

});
$(function () {
    let container = $('.container-image'),containerClass = $('.container-image-class'), inputFile = $('#file'), img,imgClass,btnClass, btn, txt = 'Browse',
        txtAfter = 'Browse another pic',
        inputFileClass = $('.file');

    if (!container.find('#upload').length) {
        container.find('.input').append('<input type="button" value="' + txt + '" id="upload">');
        btn = $('#upload');
        container.prepend('<img src="" class="hidden " alt="Uploaded file" id="uploadImg" width="200">');
        img = $('#uploadImg');
    }
    if (!containerClass.find('.upload').length) {
        containerClass.find('.input').append('<input type="button" value="' + txt + '" class="upload">');
        btnClass = $('.upload');
        containerClass.prepend('<img src="" class="hidden uploadImg" alt="Uploaded file" width="200">');
        imgClass = $('.uploadImg');
    }

    btn.on('click', function () {
        img.animate({opacity: 0}, 300);
        inputFile.click();
    });
    btnClass.on('click', function () {
        imgClass.animate({opacity: 0}, 300);
        inputFileClass.click();
    });

    inputFileClass.on('change', function (e) {
        console.log('pix')
        container.find('label').html(inputFileClass.val());
        $('#default-image').remove()

        var i = 0;
        for (i; i < e.originalEvent.srcElement.files.length; i++) {
            var file = e.originalEvent.srcElement.files[i],
                reader = new FileReader();

            reader.onloadend = function () {
                imgClass.attr('src', reader.result).animate({opacity: 1}, 700);
            }
            reader.readAsDataURL(file);
            imgClass.removeClass('hidden');
        }

        btnClass.val(txtAfter);
    });
    inputFile.on('change', function (e) {
        container.find('label').html(inputFile.val());
        $('#default-image').remove()

        var i = 0;
        for (i; i < e.originalEvent.srcElement.files.length; i++) {
            var file = e.originalEvent.srcElement.files[i],
                reader = new FileReader();

            reader.onloadend = function () {
                img.attr('src', reader.result).animate({opacity: 1}, 700);
            }
            reader.readAsDataURL(file);
            img.removeClass('hidden');
        }

        btn.val(txtAfter);
    });
});

function cloneTaskDiv() {
    let cloneTaskDiv = $('.taskDiv').first().clone()
    cloneTaskDiv.attr('data-cloned', true)
    cloneTaskDiv.find('input').val('')
    cloneTaskDiv.children('.subtask').children().each(function () {
        if ($(this).attr('data-cloned')) {
            $(this).remove()
        }
    })
    cloneTaskDiv.attr('data-key', Number($(this).parent().children(':last').attr('data-key')) + 1)
    cloneTaskDiv.children('.subtask').children('div').attr('data-key', Number($(this).parent().children(':last').attr('data-key')) + 1)
    cloneTaskDiv.children('.subtask').children('#subTaskDiv').children('div').children('input').val('')
    cloneTaskDiv.children('div').children('input').val('')
    cloneTaskDiv.append(`
        <i class="deleteTaskDiv fas fa-backspace"></i>
    `)
    cloneTaskDiv.find('.deleteTaskDiv').click(deleteTaskDiv)
    setTimeout(() => {
        cloneTaskDiv.children('.subtask').children('button').click(cloneSubtaskDiv)
    }, 0)

    $(this).parent().append(cloneTaskDiv)
}

function cloneSubtaskDiv() {
    let cloneSubTaskDiv = $('.subTaskDiv').first().clone()
    cloneSubTaskDiv.attr('data-cloned', 'true')
    console.log(cloneSubTaskDiv)
    cloneSubTaskDiv.find('input').val('')
    cloneSubTaskDiv.attr('data-key', Number($(this).parent().parent().attr('data-key')))
    cloneSubTaskDiv.children('div').children('input').val('')
    cloneSubTaskDiv.append(`
        <i class="deleteTaskDiv fas fa-backspace"></i>
    `)
    cloneSubTaskDiv.find('.deleteTaskDiv').click(deleteTaskDiv)
    $(this).parent().append(cloneSubTaskDiv)
}

function deleteVideoInput(){
   $(this).parent().parent().remove()
}
function deleteTaskDiv(){

   $(this).parent().remove()
}

function cloneVideoDiv() {
    let clonedDiv = $(this).parent().children('.videoDiv').first().clone()
    clonedDiv.children('div').children('input').val('')
    clonedDiv.attr('data-cloned', true)
    clonedDiv.children('div').append(`
        <i class="deleteVideoInput fas fa-backspace"></i>
    `)
    clonedDiv.find('.deleteVideoInput').click(deleteVideoInput)
    $(this).parent().append(clonedDiv)
}

$('#pictures').change(function (e) {
    const file = Array.from(e.target.files)


    file.forEach(file => {
        let img = document.createElement('img'),
            div = document.createElement('div');
        readFile(file)
            .then((file) => {
                img.classList.add('img-fluid')
                img.src = file
                return img
            })
            .then((image) => {
                img.src = resizeImage(image)
                div.classList.add('col-3')
                div.appendChild(img)
                $(this).parent().append(div)
            })
    })
})

$('.custom-icon-remove').click(function () {
    remove($(this))
})

$('.remove-image').click(function () {
    const type = $(this).attr('data-type')
    const data = {
        'pictureId': $(this).attr('data-picture')
    }
    axios.post('/admin/' + type + '/picture/destroy', data).then(() => {
        $(this).parent('div').remove()
    })
})

function remove($this) {
    let id = $this.attr('data-id')
    let name = $this.attr('data-name')
    let type = $this.attr('data-type')
    $('#remove-title').html(name)
    $('.remove').empty().append(`are you sure remove ${name} ${type}?`)
    $('#RemoveModal').modal('show')
    $('#remove-button').attr('data-id', id).click(function () {
        let id = $(this).attr('data-id')
        axios.delete(`/admin/${type}/${id}`).then(() => {
            window.location.reload()
        })
    })
}

function readFile(file) {
    const reader = new FileReader();
    const deferred = $.Deferred();

    reader.onload = function (event) {
        deferred.resolve(event.target.result);
    };

    reader.onerror = function () {
        deferred.reject(this);
    };

    if (/^image/.test(file.type)) {
        reader.readAsDataURL(file);
    } else {
        reader.readAsText(file);
    }

    return deferred.promise();
}

function resizeImage(img) {

    const canvas = document.createElement("canvas");
    canvas.style.backgroundColor = '#f8fafb';
    let ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);

    const MAX_WIDTH = 500;
    const MAX_HEIGHT = 500;
    let width = img.width;
    let height = img.height;
    let x = 0
    let y = 0

    if (width > height) {
        if (width > MAX_WIDTH) {
            height *= MAX_WIDTH / width;
            width = MAX_WIDTH;
            y = (MAX_HEIGHT - height) / 2
        }
    } else {
        if (height > MAX_HEIGHT) {
            width *= MAX_HEIGHT / height;
            height = MAX_HEIGHT;
            x = (MAX_WIDTH - width) / 2
        }
    }
    canvas.width = 500;
    canvas.height = 500;
    ctx = canvas.getContext("2d");
    ctx.drawImage(img, x, y, width, height)
    return canvas.toDataURL("image/jpg");
}

$('.customSelectCheckForTraining').click(function () {

    if ($(this).find(':checked').val() !== 'Hall') {
        $('.cloneVideoDiv').addClass('d-none')
        $('.task-create').remove()
        $(document).find('.video-create').children().each(function () {
            if ($(this).attr('data-cloned')) {
                $(this).remove()
            }
        })
    } else if (!$(document).find('.task-create').length) {
        let taskCreate = `
        <div class="task-create d-flex flex-column">
                <button type="button" class="btn btn-sm btn-primary ml-auto mb-2" id="cloneTaskDiv">Добавить задание
                </button>
                <div class="form-group row pb-3" id="taskDiv" data-key="0">
                    <label for="task_ru" class="col-sm-2 col-form-label font-weight-bold">Задание (ru):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_ru" name="task[]" data-lang="ru" value="">
                                            </div>
                    <label for="task_en" class="col-sm-2 col-form-label font-weight-bold">Задание (en):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_en" name="task[]" data-lang="en" value="">
                                            </div>
                    <label for="task_blr" class="col-sm-2 col-form-label font-weight-bold">Задание (blr):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_blr" name="task[]" data-lang="blr" value="">
                                            </div>
                    <div class="subtask col-8 ml-auto d-flex flex-column mt-2">
                        <button type="button" class="btn btn-sm btn-success ml-auto mb-2 cloneSubTaskDiv">Добавить
                            Подзадание
                        </button>
                        <div class="form-group row pb-3" id="subTaskDiv" data-key="0">
                            <label for="subTask_ru" class="col-sm-2 col-form-label font-weight-bold">Подзадане (ru):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask_ru" data-lang="ru" name="subTask[]" value="">
                                                            </div>
                            <label for="subTask_en" class="col-sm-2 col-form-label font-weight-bold">Подзадание (en):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask" data-lang="en" name="subTask[]" value="">
                                                            </div>
                            <label for="subTask_blr" class="col-sm-2 col-form-label font-weight-bold">Подзадание (blr):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask_blr" data-lang="blr" name="subTask[]" value="">
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `
        $('.video-create').after(taskCreate)
        $('.cloneVideoDiv').removeClass('d-none')
        $('.cloneTaskDiv').click(cloneTaskDiv);
        $('.cloneSubTaskDiv').click(cloneSubtaskDiv)
    }
})









// $('#create-workout').click(function () {
//     let workoutClone = $('.workout-clone[data-id="1"]').clone()
//     let id = Number($('.workout-clone').last().attr('data-id'))
//     workoutClone.children('input').each().val('')
//     workoutClone.children('.training-header').html('тренировка ' + Number(id + 1))
//     workoutClone.attr('data-id', id + 1)
//
//     workoutClone.children('.task-create').children('.taskDiv').children('.col-sm-10').each(function () {
//         $(this).children('input').attr('name', 'task' + (id + 1) + '[]').val('')
//     })
//     workoutClone.children('.task-create').children('.taskDiv').children('.subtask').find('input').each(function () {
//         $(this).attr('name', 'subTask' + (id + 1) + '[]').val('')
//     })
//     workoutClone.children('.task-create').children().each(function () {
//         if ($(this).attr('data-cloned')) {
//             $(this).remove()
//         }
//     })
//     workoutClone.children('.task-create').children('.taskDiv').children('.subtask').children().each(function () {
//         if ($(this).attr('data-cloned')) {
//             $(this).remove()
//         }
//     })
//     workoutClone.children('.video-create').children().each(function () {
//         if ($(this).attr('data-cloned')) {
//             $(this).remove()
//         }
//     })
//
//     $('.workouts').append(workoutClone)
//     setTimeout(function () {
//         workoutClone.find('.cloneTaskDiv').click(cloneTaskDiv);
//         workoutClone.find('.cloneSubTaskDiv').click(cloneSubtaskDiv)
//         workoutClone.find('.cloneVideoDiv').click(cloneVideoDiv);
//     })
// })
