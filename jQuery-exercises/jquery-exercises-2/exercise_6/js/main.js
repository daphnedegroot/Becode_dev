$(document).ready(function () {
   //When the mouse moves over a colored button, color the text. The text must turn black again when the mouse leaves the button.
   $('.color').mouseover(function () {
      if (this.id === "green"){
         $('#text').css({"color" : "green"});
      } else if (this.id === "red"){
         $('#text').css({"color" : "red"});
      } else if (this.id === "blue"){
         $('#text').css({"color" : "blue"});
      }
   });

   $('.color').mouseleave( function () {
      $('#text').css({"color" : "black"});
   });

});