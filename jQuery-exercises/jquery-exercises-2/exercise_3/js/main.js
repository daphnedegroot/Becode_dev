$(document).ready(function () {
   //Show or hide the text by clicking on the supplied links.
   $('#show').on('click', function () {
      $('#text').show();
   });

   $('#hide').on('click', function () {
      $('#text').hide();
   });
});