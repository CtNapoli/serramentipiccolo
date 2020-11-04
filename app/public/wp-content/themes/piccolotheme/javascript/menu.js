jQuery(document).ready(function($) {
  
    $(".mobile-menu-toggle").on("click", function(e) {
        $(".menu").addClass("d-block");
    });
  
    $(".close").on("click", function(e) {
        $(".menu").removeClass("d-block");
    });

    $(".menu-header a").on("click", function(e) {
        $(".menu").removeClass("d-block");
    });
  
});
