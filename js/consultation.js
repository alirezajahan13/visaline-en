var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

$(document).ready(function () {
  // if(getUrlParameter('csname')){
  //   $('.bookConsultationForm span[data-name=bookName] input').val(getUrlParameter('csname'));
  // }
  // if(getUrlParameter('csphone')){
  //   $('.bookConsultationForm span[data-name=bookPhone] input').val(getUrlParameter('csphone'));
  // }
  if(getUrlParameter('cucsname')){
    $('.bookConsultationForm span[data-name=bookName] input').val(getUrlParameter('cucsname'));
  }
  if(getUrlParameter('cucsphone')){
    $('.bookConsultationForm span[data-name=bookPhone] input').val(getUrlParameter('cucsphone'));
  }
  if(getUrlParameter('cucsmassage')){
    $('.bookConsultationForm input[name="bookMassage"]').val(getUrlParameter('cucsmassage'));
  }
    $('#nameClient').html(getUrlParameter('csname'));
    if ($('body').hasClass('page-id-130')){
      var wpcf7Elm = document.querySelector( '.wpcf7' );
      wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        let bookConsName = $('.bookConsultationForm span[data-name=bookName] input').val();
        window.location.href = 'https://visaline.idechy.ir/successfully/?csname='+bookConsName;
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
        let bookConsName = $('.bookConsultationForm span[data-name=bookName] input').val();
        window.location.href = 'https://visaline.idechy.ir/unsuccessfully/?csname='+bookConsName;
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
        let bookConsName = $('.bookConsultationForm span[data-name=bookName] input').val();
        window.location.href = 'https://visaline.idechy.ir/unsuccessfully/?csname='+bookConsName;
      }, false );
    }
    
    $('#nameClientEval').html(getUrlParameter('evlname'));      
    if ($('body').hasClass('page-id-137')){
      var wpcf7Elm = document.querySelector( '.wpcf7' );
      wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        let evaluName = $('.evaluationFormContainer .evaluationFormStep1Section1 span[data-name=evalName] input').val();
        window.location.href = 'https://visaline.idechy.ir/success-eform/?evlname='+evaluName;
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
        let evaluName = $('.evaluationFormContainer .evaluationFormStep1Section1 span[data-name=evalName] input').val();
        window.location.href = 'https://visaline.idechy.ir/unsuccess-eform/?evlname='+evaluName;
      }, false );
    }
    if ($('body').hasClass('page-id-130')){
          // دریافت مقادیر از sessionStorage
          var form1_name = sessionStorage.getItem('form1_name') || '' || sessionStorage.getItem('formHome_name') || sessionStorage.getItem('formCuHome_name');
          var form1_number = sessionStorage.getItem('form1_number') || '' || sessionStorage.getItem('formHome_number') || sessionStorage.getItem('formCuHome_number');
          var form1_text = sessionStorage.getItem('form1_text') || '' || sessionStorage.getItem('formCuHome_text');
          // var formHome_name =  || '';
          // var formHome_number =  || '';

      
          // وارد کردن مقادیر در ایپوت‌های فرم ۲
          $('input[name="bookName"]').val(form1_name);
          $('input[name="bookPhone"]').val(form1_number);
          $('input[name="bookMassage"]').val(form1_text);

          // $('input[name="bookName"]').val(formHome_name);
          // $('input[name="bookPhone"]').val(formHome_number);
    }
    // if ($('body').hasClass('page-id-10')){
    //       // دریافت مقادیر از sessionStorage
    //       var formCuHome_name = sessionStorage.getItem('formCuHome_name') || '';
    //       var formCuHome_number = sessionStorage.getItem('formCuHome_number') || '';
    //       var formCuHome_text = sessionStorage.getItem('formCuHome_text') || '';
      
    //       // وارد کردن مقادیر در ایپوت‌های فرم ۲
    //       $('input[name="bookName"]').val(formCuHome_name);
    //       $('input[name="bookPhone"]').val(formCuHome_number);
    //       $('input[name="bookMassage"]').val(formCuHome_text);
    // }
    // if ($('body').hasClass('page-id-10')){
    //       // دریافت مقادیر از sessionStorage
      
    //       // وارد کردن مقادیر در ایپوت‌های فرم ۲

    // }
});


$(window).on('load', function(){
  let intlcountrycode = $('.iti__selected-dial-code').text();
  $('input[name="countryCode"]').val(intlcountrycode);
});

$(document).on('countrychange', function(){
  let intlcountrycode = $('.iti__selected-dial-code').text();
  $('input[name="countryCode"]').val(intlcountrycode);
});