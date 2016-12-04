"use strict";
document.addEventListener('DOMContentLoaded', function (event) {
    console.log('DOM fully loaded and parsed');

    var hoge = 'Hoge';
  var el = document.querySelector('.title');
    el.addEventListener("click", function(){
        alert('Laravel!!!')
    }, false );


});
