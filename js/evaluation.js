// // $(document).ready(function () {
// //     $('.evaluationFormText').keypress(function () { 

// //     });
// // });

// const getUrlPass = () =>{
//     let queryString = window.location.search;
//     let urlParams = new URLSearchParams(queryString);
//     if(urlParams.get('step')==null){
//         let refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?step=1';
//         window.history.pushState({ path: refresh }, '', refresh);
//     }else{
//         console.log('why????');
//     }

// };



// $(document).ready(function(){
//     $('.step1 , .step2 , .step3 , .step4').addClass('forceRemover');
//     getUrlPass();
//     let queryString = window.location.search;
//     let urlParams = new URLSearchParams(queryString);
//     if(urlParams.get('step')==1){
//         $('.step1').removeClass('forceRemover');
//         $('#previousStep').css('opacity' , '0');
//         $('#previousStep').css('visibility' , 'hidden');
//         $('.evaluationSteps:nth-child(1)').addClass('activeStep');

//     }
//     else if(urlParams.get('step')==2){
//         $('.step1').addClass('forceRemover');
//         $('.step2').removeClass('forceRemover');
//         $('.evaluationSteps:nth-child(1)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(2)').addClass('activeStep');
//         // $('.checkoutSteps:nth-child(2)').addClass('checkoutStepsPassed');
//         // $('.checkoutSteps:nth-child(3)').addClass('checkoutStepsActive');
//     }
//     else if(urlParams.get('step')==3){
//         $('.step2').addClass('forceRemover');
//         $('.step3').removeClass('forceRemover');
//         $('.evaluationSteps:nth-child(1)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(2)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(3)').addClass('activeStep');
//         // $('.checkoutSteps:nth-child(2)').addClass('checkoutStepsPassed');
//         // $('.checkoutSteps:nth-child(3)').addClass('checkoutStepsActive');
//     }
//     else if(urlParams.get('step')==4){
//         $('.step3').addClass('forceRemover');
//         $('.step4').removeClass('forceRemover');
//         // $('.checkoutSteps:nth-child(4)').addClass('checkoutStepsActive');
//         // $('.checkoutSteps:nth-child(2)').addClass('checkoutStepsPassed');
//         // $('.checkoutSteps:nth-child(3)').addClass('checkoutStepsPassed');
//         // $('.checkoutSteps:nth-child(3)').addClass('checkoutStepsActive');
//         $('.evaluationSteps:nth-child(1)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(2)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(3)').addClass('prevStep');
//         $('.evaluationSteps:nth-child(4)').addClass('activeStep');
//         $('#nextStep').css('opacity' , '0');
//         $('#nextStep').css('visibility' , 'hidden');
//     }
//     $('#nextStep').click(function(){
//         if(urlParams.get('step')==1){
//             location.search = location.search.replace('?step=1', '?step=2');
//             // if($('#billing_first_name').val()!= '' && $('#billing_phone').val()!= '' /*&& $('#billing_email').val()!= ''*/ && $('#billing_state').val()!=null && $('#billing_state').val()!=-1 && $('#billing_city').val()!=null && $('#billing_city').val()!=-1 && $('#billing_address_1').val()!=''){
//             //     location.search = location.search.replace('?step=1', '?step=2');
//             // }
//             // else{
//             //     alert('لطفا مقادیر الزامی را پر کنید')
//             // }
//         }
//         else if(urlParams.get('step')==2){
//             location.search = location.search.replace('?step=2', '?step=3');
//         }
//         else if(urlParams.get('step')==3){
//             location.search = location.search.replace('?step=3', '?step=4');
//         }
//     });
//     $('#previousStep').click(function(){
//         if(urlParams.get('step')==1){
//             window.location.href = 'https://visaline.idechy.ir/evaluation-form/?step=1';
//         }
//         else if(urlParams.get('step')==2){
//             location.search = location.search.replace('?step=2', '?step=1');
//         }
//         else if(urlParams.get('step')==3){
//             location.search = location.search.replace('?step=3', '?step=2');  
//         }
//         else if(urlParams.get('step')==4){
//             location.search = location.search.replace('?step=4', '?step=3');  
//         }
//     });

// });



// // ذخیره اطلاعات مرحله اول فرم در Local Storage
// $('.cf7mls_next').click(function() {
//     var formData = $('form').serialize();
//     localStorage.setItem('formStep1Data', formData);
//     let currentStepIndex = ($('.cf7mls_current_fs').index()+1);
//     let lastStepIndex = ($('.cf7mls_current_fs').index()+2);
//     console.log(currentStepIndex);
//     $('.evaluationSteps:nth-child('+currentStepIndex+')').addClass('prevStep');
//     $('.evaluationSteps:nth-child('+lastStepIndex+')').addClass('activeStep');
//   });

//   $('.cf7mls_back').click(function(){
//     let nextStepIndex = ($('.cf7mls_current_fs').index()+1);
//     let currentStepIndex = ($('.cf7mls_current_fs').index());
//     $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('prevStep');
//     $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('activeStep');
//     $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('prevStep');
//     console.log(currentStepIndex);
//     console.log(lasttttStepIndex);
//     // $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('activeStep');

//   });
  
// // بازیابی اطلاعات مرحله اول فرم از Local Storage در صورت رفرش صفحه
// $(document).ready(function() {
//     var formDataStep1 = localStorage.getItem('formStep1Data');
//     if (formDataStep1) {
//       var formDataArray = formDataStep1.split('&');
//       $.each(formDataArray, function(index, field) {
//         var pair = field.split('=');
//         var fieldName = decodeURIComponent(pair[0]);
//         var fieldValue = decodeURIComponent(pair[1]);
//         $('form [name="' + fieldName + '"]').val(fieldValue);
//       });
//     }
//     $('form').on('submit', function() {
//         // حذف داده‌های مرتبط با فرم از Local Storage
//         localStorage.removeItem('formStep1Data');
//     });

//   });





// // ذخیره اطلاعات مرحله اول فرم در Session Storage
// $('.cf7mls_next').click(function() {
//   var formData = $('form').serialize();
//   sessionStorage.setItem('formStep1Data', formData);
//   let currentStepIndex = ($('.cf7mls_current_fs').index()+1);
//   let lastStepIndex = ($('.cf7mls_current_fs').index()+2);
//   console.log(currentStepIndex);
//   $('.evaluationSteps:nth-child('+currentStepIndex+')').addClass('prevStep');
//   $('.evaluationSteps:nth-child('+lastStepIndex+')').addClass('activeStep');
// });

// $('.cf7mls_back').click(function(){
//   let nextStepIndex = ($('.cf7mls_current_fs').index()+1);
//   let currentStepIndex = ($('.cf7mls_current_fs').index());
//   $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('prevStep');
//   $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('activeStep');
//   $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('prevStep');
//   console.log(currentStepIndex);
//   // $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('activeStep');
// });

// // بازیابی اطلاعات مرحله اول فرم از Session Storage در صورت رفرش صفحه
// $(document).ready(function() {
//   var formDataStep1 = sessionStorage.getItem('formStep1Data');
//   if (formDataStep1) {
//       var formDataArray = formDataStep1.split('&');
//       $.each(formDataArray, function(index, field) {
//           var pair = field.split('=');
//           var fieldName = decodeURIComponent(pair[0]);
//           var fieldValue = decodeURIComponent(pair[1]);
//           $('form [name="' + fieldName + '"]').val(fieldValue);
//       });
//   }
//   $('form').on('submit', function() {
//       // حذف داده‌های مرتبط با فرم از Session Storage
//       sessionStorage.removeItem('formStep1Data');
//   });
// });





// // ذخیره اطلاعات مرحله اول فرم و استپ فعلی در Session Storage
// $('.cf7mls_next').click(function() {
//   var formData = $('form').serialize();
//   let currentStepIndex = $('.cf7mls_current_fs').index();
//   let lastStepIndex = currentStepIndex + 1;
//   sessionStorage.setItem('formStep1Data', formData);
//   sessionStorage.setItem('currentStepIndex', currentStepIndex);
//   console.log(currentStepIndex);
//   $('.evaluationSteps:nth-child('+currentStepIndex+')').addClass('prevStep');
//   $('.evaluationSteps:nth-child('+lastStepIndex+')').addClass('activeStep');
// });

// $('.cf7mls_back').click(function(){
//   let nextStepIndex = $('.cf7mls_current_fs').index();
//   let currentStepIndex = nextStepIndex - 1;
//   sessionStorage.setItem('currentStepIndex', currentStepIndex);
//   $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('prevStep');
//   $('.evaluationSteps:nth-child('+nextStepIndex+')').removeClass('activeStep');
//   $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('prevStep');
//   console.log(currentStepIndex);
//   // $('.evaluationSteps:nth-child('+currentStepIndex+')').removeClass('activeStep');
// });

// // بازیابی اطلاعات مرحله اول فرم و استپ فعلی از Session Storage در صورت رفرش صفحه
// $(document).ready(function() {
//   var formDataStep1 = sessionStorage.getItem('formStep1Data');
//   var currentStepIndex = sessionStorage.getItem('currentStepIndex');
//   if (formDataStep1) {
//       var formDataArray = formDataStep1.split('&');
//       $.each(formDataArray, function(index, field) {
//           var pair = field.split('=');
//           var fieldName = decodeURIComponent(pair[0]);
//           var fieldValue = decodeURIComponent(pair[1]);
//           $('form [name="' + fieldName + '"]').val(fieldValue);
//       });

//       // تنظیم استپ فعلی با استفاده از مقدار currentStepIndex
//       if (currentStepIndex) {
//           let nextStepIndex = parseInt(currentStepIndex) + 1;
//           $('.evaluationSteps:nth-child('+nextStepIndex+')').addClass('activeStep');
//       }
//   }

//   $('form').on('submit', function() {
//       // حذف داده‌های مرتبط با فرم از Session Storage
//       sessionStorage.removeItem('formStep1Data');
//       sessionStorage.removeItem('currentStepIndex');
//   });
// });


// $.event.special.classChanged = {
//   setup: function () {
//     const element = this;
//     const observer = new MutationObserver(function (mutations) {
//       mutations.forEach(function (mutation) {
//         if (mutation.attributeName === "class") {
//           $(element).trigger("classChanged");
//         }
//       });
//     });

//     observer.observe(element, {
//       attributes: true,
//       attributeFilter: ["class"],
//     });
//   },
// };

// $(".cf7mls_current_fs").on("classChanged", function () {
//   console.log("Class has changed!");
//   // Add your event handling code here
// });





// ذخیره اطلاعات مرحله اول فرم و شماره مرحله فعلی در Session Storage
$('.cf7mls_next').click(function() {
  var formData = $('form').serialize();
  sessionStorage.setItem('formStep1Data', formData);
  let currentStepIndex = $('.cf7mls_current_fs').index();
  sessionStorage.setItem('currentStepIndex', currentStepIndex);
});

// بازیابی اطلاعات مرحله اول فرم و شماره مرحله فعلی از Session Storage در صورت رفرش صفحه
$(document).ready(function() {
  var formDataStep1 = sessionStorage.getItem('formStep1Data');
  if (formDataStep1) {
      var formDataArray = formDataStep1.split('&');
      $.each(formDataArray, function(index, field) {
          var pair = field.split('=');
          var fieldName = decodeURIComponent(pair[0]);
          var fieldValue = decodeURIComponent(pair[1]);
          $('form [name="' + fieldName + '"]').val(fieldValue);
      });
  }

  // بازگرداندن به مرحله فعلی
  var currentStepIndex = sessionStorage.getItem('currentStepIndex');
  if (currentStepIndex) {
      let nextStepIndex = parseInt(currentStepIndex) + 1;
      $('.evaluationSteps:nth-child('+nextStepIndex+')').addClass('activeStep');
  }

  $('form').on('submit', function() {
      // حذف داده‌های مرتبط با فرم از Session Storage
      sessionStorage.removeItem('formStep1Data');
      sessionStorage.removeItem('currentStepIndex');
  });

  // ذخیره شماره مرحله فعلی در Session Storage
  $('.cf7mls_next').click(function() {
      let currentStepIndex = $('.cf7mls_current_fs').index();
      sessionStorage.setItem('currentStepIndex', currentStepIndex);
  });
});



$(document).ready(function() {
    // Check if the user is on the third step of the form
    var currentStep = sessionStorage.getItem('formStep');
    if (currentStep) {
        // Remove the cf7mls_current_fs class from all steps
        $('.fieldset-cf7mls').removeClass('cf7mls_current_fs cf7mls_back_fs');

        // Add the cf7mls_back_fs class to all steps before the current step
        var currentStepValue = parseInt(currentStep);
        $('.fieldset-cf7mls').each(function() {
            var stepOrder = $(this).data('cf7mls-order');
            if (stepOrder < currentStepValue) {
                $(this).addClass('cf7mls_back_fs');
            }
        });

        // Add the cf7mls_current_fs class to the step corresponding to data-cf7mls-order value
        $('.fieldset-cf7mls[data-cf7mls-order="' + currentStep + '"]').addClass('cf7mls_current_fs');
    }

    // Add interaction with form step buttons
    $('.cf7mls_next').click(function() {
        var newStep = $(this).closest('.fieldset-cf7mls').data('cf7mls-order');
        sessionStorage.setItem('formStep', newStep);

        // Remove the cf7mls_current_fs class from all steps
        $('.fieldset-cf7mls').removeClass('cf7mls_current_fs cf7mls_back_fs');

        // Add the cf7mls_back_fs class to all steps before the current step
        var newStepValue = parseInt(newStep);
        $('.fieldset-cf7mls').each(function() {
            var stepOrder = $(this).data('cf7mls-order');
            if (stepOrder < newStepValue) {
                $(this).addClass('cf7mls_back_fs');
            }
        });

        // Add the cf7mls_current_fs class to the step corresponding to data-cf7mls-order value
        $('.fieldset-cf7mls[data-cf7mls-order="' + newStep + '"]').addClass('cf7mls_current_fs');
    });
});



$.event.special.classChanged = {
    setup: function () {
      const element = this;
      const observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
          if (mutation.attributeName === "class") {
            $(element).trigger("classChanged");
          }
        });
      });
  
      observer.observe(element, {
        attributes: true,
        attributeFilter: ["class"],
      });
    },
  };

  $(".fieldset-cf7mls").on("classChanged", function () {
    $('.evaluationSteps').removeClass('activeStep');
    $('.evaluationSteps').removeClass('prevStep');
    console.log($('.cf7mls_current_fs').index());
    let currentStepNav = ($('.cf7mls_current_fs').index()+1);
    $('.evaluationSteps:nth-child('+currentStepNav+')').addClass('activeStep');
    // Add your event handling code here
    let backElements = $('.cf7mls_back_fs');
    $.each(backElements,function () {
        $('.evaluationSteps').eq($(this).index()).addClass('prevStep');
    })
  });