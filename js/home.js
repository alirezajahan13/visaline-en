var $ = jQuery;

$(document).ready(function(){
  // $('.bookAppointmentSection input[type=submit]').click(function(e){
  //   let homeConsName = $('.bookAppointmentSection span[data-name=your-name] input').val();
  //   let homeConsPhone = $('.bookAppointmentSection span[data-name=your-number] input').val();
  //   e.preventDefault();
  //   window.location.href = 'https://visaline.idechy.ir/book-consultation/?csname='+homeConsName+'&csphone='+homeConsPhone;
  // });
  // $('.contactUsForm input[type=submit]').click(function(e){
  //   let contactPageConsName = $('.contactUsForm span[data-name=your-name] input').val();
  //   let contactPageConsPhone = $('.contactUsForm span[data-name=your-number] input').val();
  //   let contactPageConsMassage = $('.contactUsForm span[data-name=your-message] textarea').val();
  //   e.preventDefault();
  //   window.location.href = 'https://visaline.idechy.ir/book-consultation/?cucsname=' + contactPageConsName + '&cucsphone=' + contactPageConsPhone + '&cucsmassage=' + contactPageConsMassage;
  // });

// custom-script.js
if($('body').hasClass('page-id-35')){
  $('.contactUsForm input[type=submit]').click(function(e) {
    // جلوگیری از ارسال فرم
    e.preventDefault();

    // دریافت مقادیر فرم ۱
    var name = $('input[name="your-name"]').val();
    var number = $('input[name="your-number"]').val();
    var text = $('textarea[name="your-message"]').val();

    // ذخیره مقادیر در sessionStorage
    sessionStorage.setItem('form1_name', name);
    sessionStorage.setItem('form1_number', number);
    sessionStorage.setItem('form1_text', text);

    // ریدایرکت به صفحه فرم ۲
    window.location.href = 'https://visaline.idechy.ir/book-consultation/';
  });
}



if($('body').hasClass('page-id-10')){
  $('.bookAppointmentSection input[type=submit]').click(function(e) {
    // جلوگیری از ارسال فرم
    e.preventDefault();


    // دریافت مقادیر فرم ۱
    var nameHome = $('input[name=your-name]').val();
    var numberHome = $('input[name=your-number]').val();

    // ذخیره مقادیر در sessionStorage
    sessionStorage.setItem('formHome_name', nameHome);
    sessionStorage.setItem('formHome_number', numberHome);

    // ریدایرکت به صفحه فرم ۲
    window.location.href = 'https://visaline.idechy.ir/book-consultation/';


  });
  $('.contactUsHomeForm input[type=submit]').click(function(e) {
    // جلوگیری از ارسال فرم
    e.preventDefault();

    // دریافت مقادیر فرم ۱
    var nameCuHome = $('input[name="yourCu-name"]').val();
    var numberCuHome = $('input[name="yourCu-number"]').val();
    var textCuHome = $('textarea[name="your-message"]').val();
    console.log(nameCuHome);
    console.log(numberCuHome);
    console.log(textCuHome);

    // ذخیره مقادیر در sessionStorage
    sessionStorage.setItem('formCuHome_name', nameCuHome);
    sessionStorage.setItem('formCuHome_number', numberCuHome);
    sessionStorage.setItem('formCuHome_text', textCuHome);

    // ریدایرکت به صفحه فرم ۲
    window.location.href = 'https://visaline.idechy.ir/book-consultation/';
  });
}
// if($('body').hasClass('home')){
  
// }





  $('.mobileMenuClickPArent #openCloseMenu #openMenuMob').click(function(){
      $('.mobileMenuClickPArent .mobile-menu').slideDown();
      $('.mainOverlay').slideDown();
      $('#openCloseMenu #openMenuMob').hide(200);
      $('#openCloseMenu #closeMenuMob').show(200);
  });
  $('.mobileMenuClickPArent #openCloseMenu #closeMenuMob').click(function(){
      $('.mobileMenuClickPArent .mobile-menu').slideUp();
      $('.mainOverlay').slideUp();
      $('#openCloseMenu #closeMenuMob').hide(200);
      $('#openCloseMenu #openMenuMob').show(200);
  });
  $('.mainOverlay').click(function(){ 
    $('.mobileMenuClickPArent .mobile-menu').slideUp();
    $('.mainOverlay').slideUp();
    $('#openCloseMenu #closeMenuMob').hide(200);
    $('#openCloseMenu #openMenuMob').show(200);
  });
  // $('.stickyMobileMenuClickPArent #openCloseMenu #openMenuMob').click(function(){
  //     $('.stickyMobileMenuClickPArent .mobile-menu').slideDown();
  //     $('#openCloseMenu #openMenuMob').hide(200);
  //     $('#openCloseMenu #closeMenuMob').show(200);
  // });
  // $('.stickyMobileMenuClickPArent #openCloseMenu #closeMenuMob').click(function(){
  //     $('.stickyMobileMenuClickPArent .mobile-menu').slideUp();
  //     $('#openCloseMenu #closeMenuMob').hide(200);
  //     $('#openCloseMenu #openMenuMob').show(200);
  // });
  $('.mobile-menu>ul>.menu-item-has-children>a').click(function(){ 
    $('.mobile-menu>ul>.menu-item-has-children>ul').slideUp(300);
    $(this).find('.menu-icon svg').css('fill' , '#054078');
      if($(this).siblings("ul").css('display') == 'block'){
          // console.log(click);
          $(this).siblings('ul').slideUp(400);
          $('.menu-icon svg').css('fill' , '#d1ab66');
      }
      else{
          $(this).siblings('ul').slideToggle(400);
      }
  });
  
  // $('.menu-item-has-children').click(function(){
  //   $(this).toggleClass('changeColorIconMobMenu');
  // });

  let svgCode = '<svg xmlns="http://www.w3.org/2000/svg" fill="#d1ab66" width="18" height="18" viewBox="0 0 29 29" xml:space="preserve"><path d="m20.5 11.5-6 6-6-6"/></svg>';
  $('.mobile-menu>ul>.menu-item-has-children>a').append(svgCode);
  if($(window).width() <768){
    let mobHeaderHeight = $('.mobileMenuHeader').outerHeight(true) + 15;
    $('body').css('padding-top',mobHeaderHeight);
  }
  


  $('.searchIcon').click(function(){
    $('.searchParent').slideDown(300);
    $('.searchOverlay').slideDown(300);
  });
    $('.closeIcon').click(function(){
      $('.searchParent').slideUp(300);
      $('.searchOverlay').slideUp(300);
    });
    $('.closeBtn').click(function(){
      $('.searchParent').slideUp(300);
      $('.searchOverlay').slideUp(300);
    })
    $('.searchOverlay').click(function(){
      $('.searchParent').slideUp(300);
      $('.searchOverlay').slideUp(300);
    })
});