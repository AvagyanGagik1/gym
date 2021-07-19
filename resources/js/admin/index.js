$(document).ready(function () {
    let key = 0
    $('.leftmenutrigger').on('click', function (e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
    });
    $('#cloneVideoDiv').click(function () {
        let clonedDiv = $('#videoDiv').clone()
        clonedDiv.children('div').children('input').val('')
        $('.video-create').append(clonedDiv)
    });
    $('#cloneTaskDiv').click(function () {
        let cloneTaskDiv = $('#taskDiv').clone()
        cloneTaskDiv.children('.subtask').children().each(function () {
            if ($(this).attr('data-cloned')) {
                $(this).remove()
            }
        })
        cloneTaskDiv.attr('data-key', Number($(this).parent().children(':last').attr('data-key')) + 1)
        cloneTaskDiv.children('.subtask').children('div').attr('data-key', Number($(this).parent().children(':last').attr('data-key')) + 1)
        cloneTaskDiv.children('div').children('input').val('')
        setTimeout(() => {
            cloneTaskDiv.children('.subtask').children('button').click(function () {
                // console.log($(this).parent().parent())
                let cloneSubTaskDiv = $('#subTaskDiv').clone()
                cloneSubTaskDiv.children('div').val('')
                // console.log(cloneSubTaskDiv.children())
                cloneSubTaskDiv.attr('data-cloned', 'true')
                cloneSubTaskDiv.attr('data-key', Number($(this).parent().parent().attr('data-key')))
                $(this).parent().append(cloneSubTaskDiv)
            })
        }, 0)

        $('.task-create').append(cloneTaskDiv)
    });
    $('.cloneSubTaskDiv').click(function () {
        let cloneSubTaskDiv = $('#subTaskDiv').clone()
        cloneSubTaskDiv.attr('data-cloned', 'true')
        cloneSubTaskDiv.attr('data-key', Number($(this).parent().parent().attr('data-key')))
        cloneSubTaskDiv.children('div').children('input').val('')
        $(this).parent().append(cloneSubTaskDiv)
    })
    $('#workoutForm').submit(function (e) {
        let tasks = []
        let tmp = {}
        e.preventDefault()
        $('.tasks').each(function (index) {
            tmp.key = $(this).parent().parent().attr('data-key')
            if ($(this).attr('data-lang') === 'ru' ) {
                tmp.name_ru = $(this).val()
            }
            if ($(this).attr('data-lang') === 'en') {
                tmp.name_en = $(this).val()
            }
            if ($(this).attr('data-lang') === 'blr') {
                tmp.name_blr = $(this).val()
            }

            tmp.subtasks = []
            if(e.target.action)
            if((Number(index)+1) % 3 === 0 ) {
                tasks.push({name_ru:tmp.name_ru,name_en:tmp.name_en,name_blr:tmp.name_blr,key:tmp.key,subtasks:[]})
                console.log(tasks)
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
            axios.post(e.target.action, data).then((response) => {
                console.log(response)
            })
    })
    $('.approved').change(function (){
        console.log('dsd')
        let id = $(this).attr('data-id')
        console.log()
        axios.post('/admin/change/comment/'+id+'/status',{approved:$(this).is(':checked')}).then((response)=>{
            console.log(response.data)
        })
    })
});
$(function () {
    let container = $('.container-image'), inputFile = $('#file'), img, btn, txt = 'Browse',
        txtAfter = 'Browse another pic';

    if (!container.find('#upload').length) {
        container.find('.input').append('<input type="button" value="' + txt + '" id="upload">');
        btn = $('#upload');
        container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="200">');
        img = $('#uploadImg');
    }

    btn.on('click', function () {
        img.animate({opacity: 0}, 300);
        inputFile.click();
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
    console.log(img)
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
