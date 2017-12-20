try {
  window.$ = window.jQuery = require('jquery');

  require('bootstrap-sass');
} catch (e) {}

$('#navbar-button').on('click', function () {
  $(this).toggleClass('opener').next().toggleClass('open-menu');
});