import $ from 'jquery';
import datepickerFactory from 'jquery-datepicker';
import datepickerJAFactory from 'jquery-datepicker/i18n/jquery.ui.datepicker-ru';

datepickerFactory($);
datepickerJAFactory($);

$(document).ready(function () {
    axios.get('/profile/get/completed/workouts').then((response) => {
        response.data.map(i => {
            let date = new Date(i.created_at)
            $('.ui-datepicker-calendar').find('td').each(function () {
                if (Number($(this).attr('data-month')) === date.getMonth()
                    && Number($(this).attr('data-year')) === date.getFullYear()
                    && Number($(this).children('a').html()) === date.getDate()) {
                    $(this).addClass('active')
                }
            })
        })
    })
    setTimeout(()=>{

        $('.ui-corner-all').click(function (){
            axios.get('/profile/get/completed/workouts').then((response) => {
                response.data.map(i => {
                    let date = new Date(i.created_at)
                    $('.ui-datepicker-calendar').find('td').each(function () {
                        if (Number($(this).attr('data-month')) === date.getMonth()
                            && Number($(this).attr('data-year')) === date.getFullYear()
                            && Number($(this).children('a').html()) === date.getDate()) {
                            $(this).addClass('active')
                        }
                    })
                })
            })
        })
    })

})


$(function () {
    $('#datepicker').datepicker({regional: 'ru'}).change(function (){

    });
});
