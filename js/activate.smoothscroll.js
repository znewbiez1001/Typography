
 $(document).ready(function() {
      $("#click").click(function() {
        $('html, body').animate({
          scrollTop: $("#sub").offset().top
        }, 1000);
      });
    });