require('./bootstrap');

window.$ = window.jQuery = require('jquery');

$(function() {
    // 在DOM載入完成後執行的程式碼
    console.log($)
      $('.nav-link').on('click', function () {
      $('.nav-link').not(this).siblings('.collapse').collapse('hide');
      });  
  });

$(".query").on('click',function(){
    console.log("aaa")


    
})