try {
  window.$ = window.jQuery = require('jquery');
  require('bootstrap-sass');
  require('slick-carousel');
} catch (e) {
  console.error('Fuck yeah');
}
const mapstylesFull = [
  {
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#f5f5f5',
      },
    ],
  },
  {
    'elementType': 'labels.icon',
    'stylers': [
      {
        'visibility': 'off',
      },
    ],
  },
  {
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#616161',
      },
    ],
  },
  {
    'elementType': 'labels.text.stroke',
    'stylers': [
      {
        'color': '#f5f5f5',
      },
    ],
  },
  {
    'featureType': 'administrative.land_parcel',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#bdbdbd',
      },
    ],
  },
  {
    'featureType': 'poi',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#eeeeee',
      },
    ],
  },
  {
    'featureType': 'poi',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#757575',
      },
    ],
  },
  {
    'featureType': 'poi.park',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#e5e5e5',
      },
    ],
  },
  {
    'featureType': 'poi.park',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#9e9e9e',
      },
    ],
  },
  {
    'featureType': 'road',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#ffffff',
      },
    ],
  },
  {
    'featureType': 'road.arterial',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#757575',
      },
    ],
  },
  {
    'featureType': 'road.highway',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#dadada',
      },
    ],
  },
  {
    'featureType': 'road.highway',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#616161',
      },
    ],
  },
  {
    'featureType': 'road.local',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#9e9e9e',
      },
    ],
  },
  {
    'featureType': 'transit.line',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#e5e5e5',
      },
    ],
  },
  {
    'featureType': 'transit.station',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#eeeeee',
      },
    ],
  },
  {
    'featureType': 'water',
    'elementType': 'geometry',
    'stylers': [
      {
        'color': '#c9c9c9',
      },
    ],
  },
  {
    'featureType': 'water',
    'elementType': 'labels.text.fill',
    'stylers': [
      {
        'color': '#9e9e9e',
      },
    ],
  },
];

function togglePopup (obj) {
  $(obj).toggleClass('opener').
    next().
    toggleClass('open-menu').
    find('ul').
    toggleClass('covered');
}

function makeMap (e, t, o, n, a, q) {
  if (!t.length) {
    return;
  }

  var i = t.split(';'), c = {url: a, size: [60, 60], scaledSize: [30, 30], origin: [0, 0], anchor: [0, 57]},
    r = a.split(';');
  1 === r.length ? c.url = r[0] : 5 === r.length &&
    (c.url = r[0], c.size = r[1].split(',').map(Number), c.scaledSize = r[2].split(',').
      map(Number), c.origin = r[3].split(',').map(Number), c.anchor = r[4].split(',').map(Number));
  for (var d = i[0].split(','), s = {
    zoom: n,
    center: new google.maps.LatLng(56.83449998, 60.61172628),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigationControl: !1,
    streetViewControl: !1,
    mapTypeControl: !1,
    scaleControl: !1,
    scrollwheel: !1,
  }, l = new google.maps.Map(document.getElementById(e), s), u = new google.maps.LatLngBounds, p = [], h = 0; h <
       i.length; h++) {
    t = i[h].split(',');
    var m = new google.maps.LatLng(56.83449998, 60.61172628);
    u.extend(m);
    var f;
    f = a ? new google.maps.Marker({
      position: m,
      map: l,
      clickable: !1,
      icon: {
        url: '/img/map.png',
        size: new google.maps.Size(c.size[0], c.size[1]),
        scaledSize: new google.maps.Size(c.scaledSize[0], c.scaledSize[1]),
        origin: new google.maps.Point(c.origin[0], c.origin[1]),
        anchor: new google.maps.Point(c.anchor[0], c.anchor[1]),
      },
    }) : new google.maps.Marker({position: m, map: l, clickable: !1}), p.push(f);
  }
  if (i.length > 1 && l.setCenter(u.getCenter(), l.fitBounds(u)), o.length) {
    var g = o.split(','), k = [
      {
        featureType: 'landscape.man_made',
        stylers: [{saturation: g[0]}, {gamma: g[1]}, {lightness: g[2]}],
      }];
    l.setOptions({styles: k});
  }

  l.setOptions({styles: mapstylesFull});

  google.maps.event.addDomListener(window, 'resize', function () {
    var e = l.getCenter();
    google.maps.event.trigger(l, 'resize'), l.setCenter(e);
  });

  google.maps.event.addListenerOnce(l, 'tilesloaded', function () {
    q.removeClass('is-active');
  });

  return {map: l, markers: p};
}

function loadScript (url, callback) {
  const script = document.createElement('script');

  if (script.readyState) {
    script.onreadystatechange = function () {
      if (script.readyState === 'loaded' ||
        script.readyState === 'complete') {
        script.onreadystatechange = null;
        callback();
      }
    };
  } else {
    script.onload = function () {
      callback();
    };
  }

  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
}

$('#navbar-button').on('click', function () {
  togglePopup(this);
});

$(document).on('click', '.covered', function () {
  togglePopup('#navbar-button');
});

$('.gallery').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  centerMode: true,
  focusOnSelect: true,
  infinite: true,
  slidesToShow: 3,
  variableWidth: true,
});

$('.map-container').one('touchstart dragstart click', function () {
  const that = $(this);
  that.off('touchstart dragstart click');
  that.children('.loader').addClass('is-active');
  loadScript(
    `https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBQczVEHYVtk0-Y4XeWgvf52hEvM_xLU9o&language=${document.documentElement.lang}`,
    function () {
      const t = that.children('#map-google');
      makeMap(
        t.attr('id'),
        t.data('point'),
        t.data('mapstyle'),
        t.data('mapzoom'),
        t.data('icon'),
        that.children('.loader'),
      );
    });
});

$('body').scrollspy({
  target: '.navbar-fixed-top',
  offset: 75,
});

jQuery.easing['jswing'] = jQuery.easing['swing'];
jQuery.extend(jQuery.easing,
  {
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
      return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
    },
    easeInOutExpo: function (x, t, b, c, d) {
      if (t == 0) return b;
      if (t == d) return b + c;
      if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
      return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    },
  });

$('a.page-scroll').bind('click', function (e) {
  e.preventDefault();
  const that = $(this);
  $('html, body').stop().animate({
    scrollTop: $(that.attr('href')).offset().top - 60,
  }, 1000, 'easeInOutExpo');
});

const contact = $('#contact_dialog');

contact.on('submit', '#contact_form', function (e) {
  e.preventDefault();
  const form = $(this);

  $.ajax({
    url: form.attr('action'),
    type: 'POST',
    dataType: 'json',
    data: form.serialize(),
    beforeSend: function () {
      $('.form-group').removeClass('has-error');
    },
    success: function (data) {
      if (data.status && data.status === 'OK') {
        const title = contact.data('success-title');
        const text = contact.data('success-text');
        contact.
          find('.modal-title').
          html(title).
          parent().
          next().
          html(text);

        $('#submitForm').remove();
      }
    },
    error: function (jqXHR) {
      if (jqXHR.status === 422) {
        const err = jqXHR.responseJSON.error;
        for (let i = 0, count = err.length; i < count; i++) {
          $('input[name=' + err[i] + ']').
            parents('.form-group').
            addClass('has-error');
        }
      }
    },
  });
  e.preventDefault();
});

$('#submitForm').on('click', function () {
  $('#contact_form').submit();
});

