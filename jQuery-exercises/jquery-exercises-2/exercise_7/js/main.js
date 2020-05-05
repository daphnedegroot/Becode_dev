$(document).ready(function () {
  //Summary of series 1 and 2. The instructions can be found in the HTML file
   //exercise 1.
   $('ol li:nth-child(1)').on('click', function () {
      $('body').css({"font-size" : "120%"});
   });

   //exercise 2.
   $('ol li:nth-child(2)').on('click', function () {
      $('body').css({"font-size" : "80%"});
   });

   //exercise 3.
   $('ol li:nth-child(3)').on('click', function () {
      $('.green').toggleClass('bold');
   });

   //exercise 4.
   $('ol li:nth-child(4)').on('click', function () {
      $('.red').toggleClass('addCss');
   });

   //exercise 5.
   $('ol li:nth-child(5)').on('mouseover', function () {
      $('img').attr('src', 'images/koala.jpg');
   });

   $('ol li:nth-child(5)').on('mouseleave', function () {
      $('img').attr('src', 'images/jquery-logo.png');
   });

   //exercise 6.
   $('a').on('mouseover', function () {
      $(this).attr('title', $(this).attr('href'));
   });

   //exercise 7.
   $('ol li:nth-child(7)').one('click', function () {
      $('#content h2:first').prepend('<h2>Chapter 1:</h2>');
      $('#content h2:eq(2)').prepend('<h2>Chapter 2:</h2>');
   });







});