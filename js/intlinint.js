
const input = document.querySelector("#phone");
    window.intlTelInput(input, {
    utilsScript: "path/to/utils.js"
});
// const secondInput = document.querySelector("#secondPhone");
//     window.intlTelInput(secondInput, {
//     utilsScript: "path/to/utils.js"
// });

// const thirdInput = document.querySelector("#thirdPhone");
//     window.intlTelInput(thirdInput, {
//     utilsScript: "path/to/utils.js"
// });


$(document).ready(function () {
  
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
    separateDialCode: true, // این تنظیمات کد کشور را جداگانه نمایش می‌دهد
    initialCountry: "IR", // می‌توانید کد کشور اولیه را به "auto" تنظیم کنید تا به طور خودکار کشور مرتبط با شماره تلفن وارد شده را نمایش دهد.
    preferredCountries: ["IR", "ca", "af", "gb", "us"]
    });

    // var secondInput = document.querySelector("#secondPhone");
    // var secondIti = window.intlTelInput(secondInput, {
    // separateDialCode: true, // این تنظیمات کد کشور را جداگانه نمایش می‌دهد
    // initialCountry: "IR", // می‌توانید کد کشور اولیه را به "auto" تنظیم کنید تا به طور خودکار کشور مرتبط با شماره تلفن وارد شده را نمایش دهد.
    // });


    // var thirdInput = document.querySelector("#thirdPhone");
    // var thirdIti = window.intlTelInput(thirdInput, {
    // separateDialCode: true, // این تنظیمات کد کشور را جداگانه نمایش می‌دهد
    // initialCountry: "IR", // می‌توانید کد کشور اولیه را به "auto" تنظیم کنید تا به طور خودکار کشور مرتبط با شماره تلفن وارد شده را نمایش دهد.
    // });

});



