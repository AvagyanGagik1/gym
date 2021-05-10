/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/admin/index.js ***!
  \*************************************/
$(document).ready(function () {
  $('.leftmenutrigger').on('click', function (e) {
    $('.side-nav').toggleClass("open");
    e.preventDefault();
  });
});
$(function () {
  var container = $('.container-image'),
      inputFile = $('#file'),
      img,
      btn,
      txt = 'Browse',
      txtAfter = 'Browse another pic';

  if (!container.find('#upload').length) {
    container.find('.input').append('<input type="button" value="' + txt + '" id="upload">');
    btn = $('#upload');
    container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="200">');
    img = $('#uploadImg');
  }

  btn.on('click', function () {
    img.animate({
      opacity: 0
    }, 300);
    inputFile.click();
  });
  inputFile.on('change', function (e) {
    console.log(e.target.files);
    container.find('label').html(inputFile.val());
    $('#default-image').remove();
    var i = 0;

    for (i; i < e.originalEvent.srcElement.files.length; i++) {
      var file = e.originalEvent.srcElement.files[i],
          reader = new FileReader();

      reader.onloadend = function () {
        img.attr('src', reader.result).animate({
          opacity: 1
        }, 700);
      };

      reader.readAsDataURL(file);
      img.removeClass('hidden');
    }

    btn.val(txtAfter);
  });
});
$('#pictures').change(function (e) {
  var _this = this;

  var file = Array.from(e.target.files);
  file.forEach(function (file) {
    var img = document.createElement('img'),
        div = document.createElement('div');
    readFile(file).then(function (file) {
      img.classList.add('img-fluid');
      img.src = file;
      return img;
    }).then(function (image) {
      img.src = resizeImage(image);
      div.classList.add('col-3');
      div.appendChild(img);
      $(_this).parent().append(div);
    });
  });
});
$('.custom-icon-remove').click(function () {
  remove($(this));
});
$('.remove-image').click(function () {
  var _this2 = this;

  var type = $(this).attr('data-type');
  var data = {
    'pictureId': $(this).attr('data-picture')
  };
  axios.post('/admin/' + type + '/picture/destroy', data).then(function () {
    $(_this2).parent('div').remove();
  });
});

function remove($this) {
  var id = $this.attr('data-id');
  var name = $this.attr('data-name');
  var type = $this.attr('data-type');
  $('#remove-title').html(name);
  $('.remove').empty().append("are you sure remove ".concat(name, " ").concat(type, "?"));
  $('#RemoveModal').modal('show');
  $('#remove-button').attr('data-id', id).click(function () {
    var id = $(this).attr('data-id');
    axios["delete"]("/admin/".concat(type, "/").concat(id)).then(function () {
      window.location.reload();
    });
  });
}

function readFile(file) {
  var reader = new FileReader();
  var deferred = $.Deferred();

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
  console.log(img);
  var canvas = document.createElement("canvas");
  canvas.style.backgroundColor = '#f8fafb';
  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0);
  var MAX_WIDTH = 500;
  var MAX_HEIGHT = 500;
  var width = img.width;
  var height = img.height;
  var x = 0;
  var y = 0;

  if (width > height) {
    if (width > MAX_WIDTH) {
      height *= MAX_WIDTH / width;
      width = MAX_WIDTH;
      y = (MAX_HEIGHT - height) / 2;
    }
  } else {
    if (height > MAX_HEIGHT) {
      width *= MAX_HEIGHT / height;
      height = MAX_HEIGHT;
      x = (MAX_WIDTH - width) / 2;
    }
  }

  canvas.width = 500;
  canvas.height = 500;
  ctx = canvas.getContext("2d");
  ctx.drawImage(img, x, y, width, height);
  return canvas.toDataURL("image/jpg");
}
/******/ })()
;