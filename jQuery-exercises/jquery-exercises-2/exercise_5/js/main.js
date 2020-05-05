$(document).ready(function () {
   //When the user focuses on a field, set its edge to "1px solid green". When the field is no longer sharp, set the border to "1px solid red"
   $('input').focus(function () {
      $('input').css({"border" : "1px solid green", "outline" : "none"});
   });

   $('input').focusout(function () {
      $('input').css({"border" : "1px solid red", "outline" : "none"});
   });
});