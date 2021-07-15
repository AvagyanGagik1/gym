import $ from 'jquery';
import datepickerFactory from 'jquery-datepicker';
import datepickerJAFactory from 'jquery-datepicker/i18n/jquery.ui.datepicker-ja';
datepickerFactory($);
datepickerJAFactory($);

$(function() {
    $('#datepicker').datepicker();
});
