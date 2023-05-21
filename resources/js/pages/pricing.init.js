/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: pricing init js
*/

function check() {
    var checkBox = document.getElementById("plan-switch");
    var month = document.getElementsByClassName("month");
    var annual = document.getElementsByClassName("annual");

    for (var i = 0; i < month.length; i++) {
        if (checkBox.checked == true) {
            annual[i].style.display = "block";
            month[i].style.display = "none";
        } else if (checkBox.checked == false) {
            annual[i].style.display = "none";
            month[i].style.display = "block";
        }
    }
}
check();