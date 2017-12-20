try {
  window.$ = window.jQuery = require('jquery');

  require('bootstrap-sass');
} catch (e) {}

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