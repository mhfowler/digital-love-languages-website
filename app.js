
$(document).ready(function() {
    console.log('++ jquery is working heyyyyy')




    $(".accordion-link").click(function(event) {
          event.preventDefault();
          var link = $(this).data('link');
          console.log(link);
          window.location.replace(link);
    });





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
