$(document).ready(function () {
   //When you click on a color button, you change the color of the text of the div
   $('.color').on('click', function(){
      if (this.id === "green"){
         $('#text').css({"color" : "green"});
      } else if (this.id === "red"){
         $('#text').css({"color" : "red"});
      } else if (this.id === "blue"){
         $('#text').css({"color" : "blue"});
      }
   });
});