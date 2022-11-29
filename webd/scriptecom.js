$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      items: 4,
      autoPlay: 3000,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [979, 3],
      navigation: true,
      navigationText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
      ]
    });
  });