/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: setting init js
*/


flatpickr('#datepicker-range', {
    mode: "range",
    altInput: true,
    altFormat: 'Y'
});

new Choices('#choices-multiple-skill-input',{
        removeItemButton: true,
    }
);