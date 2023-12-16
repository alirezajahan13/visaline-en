var $ = jQuery;

$(document).ready(function(){
    $(window).on('scroll', function(){
        if ($(document).scrollTop() >= 150){
            $('.stickyMenu').addClass('showStickyMenu');
        }
        else{
            $('.stickyMenu').removeClass('showStickyMenu');
        }
    });
    // $(window).on('scroll', function(){
    //     if ($(document).scrollTop() >= 100){
    //         $('.stickyMenuMobile').addClass('showStickyMenu');
    //     }
    //     else{
    //         $('.stickyMenuMobile').removeClass('showStickyMenu');
    //     }
    // });
    $('.faqItem .faqHeader').click(function(){
        $('.faqAnswer').slideUp(300);
        if($(this).siblings('.faqAnswer').is(':visible')){
            $(this).siblings('.faqAnswer').slideUp(300);
        }
        else{
            $(this).siblings('.faqAnswer').slideDown(300);
        }
    })
});