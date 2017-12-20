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

function makeMap (e, t, o, n, a) {
  if (t.length) {
    var i = t.split(';'), c = {url: a, size: [60, 60], scaledSize: [30, 30], origin: [0, 0], anchor: [0, 57]},
      r = a.split(';');
    1 == r.length ? c.url = r[0] : 5 == r.length &&
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
          url: './static/kap/map.png',
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
    return 'undefined' != typeof mapstylesFull &&
    l.setOptions({styles: mapstylesFull}), google.maps.event.addDomListener(window, 'resize', function () {
      var e = l.getCenter();
      google.maps.event.trigger(l, 'resize'), l.setCenter(e);
    }), {map: l, markers: p};
  }
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

