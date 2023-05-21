/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: Kanbanboard Init Js File
*/

dragula([
    document.getElementById("todo-task"), 
    document.getElementById("inprogress-task"),
    document.getElementById("hold-task"),
    document.getElementById("completed-task")
]);