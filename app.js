
$(document).ready(function() {
    console.log('++ jquery is working heyyyyy')









    $(".header-link").hover(
      function () {
        $(".header-link").addClass('invert');
      },
      function () {
        $(".header-link").removeClass('invert');
      }
      );



          $(".notes").hover(
            function () {
              $(".private").addClass('show');
            },
            function () {
              $(".private").removeClass('show');
            }
            );







});
