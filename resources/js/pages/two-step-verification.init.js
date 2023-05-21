/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: two step verification Init Js File
*/



// move next
function moveToNext(elem, count){
    if(elem.value.length > 0) {
        document.getElementById("digit"+count+"-input").focus();
    }
}