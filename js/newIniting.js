const inputContact = document.querySelector("#phoneContact");
    window.intlTelInput(inputContact, {
    utilsScript: "path/to/utils.js"
});


$(document).ready(function () {
  
    var inputContact = document.querySelector("#phoneContact");
    var itiContact = window.intlTelInput(inputContact, {
    separateDialCode: true,
    initialCountry: "IR", 
    preferredCountries: ["IR", "ca", "af", "gb", "us"]
    });

});