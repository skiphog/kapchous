try {
  window.$ = window.jQuery = require('jquery');
  require('bootstrap-sass');
  require('slick-carousel');
} catch (e) {
  console.error('Fuck yeah');
}

function togglePopup (obj) {
  $(obj).toggleClass('opener').
    next().
    toggleClass('open-menu').
    find('ul').
    toggleClass('covered');
}

$('#navbar-button').on('click', function () {
  togglePopup(this);
});

$(document).on('click', '.covered', function () {
  togglePopup('#navbar-button');
});

$('.gallery').slick({
  //adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 4000,
  centerMode: true,
  focusOnSelect: true,
  infinite: true,
  slidesToShow: 3,
  variableWidth: true,
});