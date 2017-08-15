<!-- Animation WOW  -->
new WOW().init();
<!-- Close bootstrap menu  -->
$(document).on('click', function () {
    $('.collapse').collapse('hide');
});

<!-- Up button  -->
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.UpTop').fadeIn();
        } else {
            $('.UpTop').fadeOut();
        }
    });
    $('.UpTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
});

<!-- Scrollign  -->
$(document).on("click", "a.p-scroll", function (event) {
    //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();
    //забираем идентификатор бока с атрибута href
    var id = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
    //анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({
        scrollTop: top
    }, 1600);
});