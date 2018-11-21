// JavaScript Document
$(document).ready(function () {
    $('#ativarbusca').click(function(e) {
        $('.busca').addClass('is-active');

        e.preventDefault();
    });
    $('.busca__close').click(function(e) {
        $('.busca').removeClass('is-active');

        e.preventDefault();
    });
});