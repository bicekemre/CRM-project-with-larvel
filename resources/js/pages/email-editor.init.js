/*
Template Name: Vuesy - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in/
Contact: themesdesign.in@gmail.com
File: Email summernote Js File
*/

ClassicEditor
    .create( document.querySelector( '#email-editor' ) )
    .then( function(editor) {
        editor.ui.view.editable.element.style.height = '200px';
    })
    .catch( function(error) {
        console.error( error );
    });