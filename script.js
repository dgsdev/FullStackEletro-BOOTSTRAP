var type = function (e, t) {
    var o = 0;
    function n() {
      o < t.length &&
        ((e.innerHTML += t.charAt(o)), (o += 1), setTimeout(n, 50 + o));
    }
    (e.innerHTML = ""),
      setTimeout(function () {
        n();
      }, 800);
  },
  animeScroll = function () {
    var e = window.pageYOffset + 0.75 * window.innerHeight,
      t = 0;
    target.forEach(function (o) {
      e > o.offsetTop &&
        setTimeout(function () {
          o.classList.add(animationClass);
        }, 200 * ++t);
    });
  },
  _debounce = function (e, t, o) {
    var n = void 0;
    return function () {
      for (var i = arguments.length, r = Array(i), s = 0; s < i; s++)
        r[s] = arguments[s];
      var a = this,
        l = o && !n;
      clearTimeout(n),
        (n = setTimeout(function () {
          (n = null), o || e.apply(a, r);
        }, t)),
        l && e.apply(a, r);
    };
  },
  text = document.querySelector('.efeito');
if (text) {
  var finalText = text.innerHTML;
  type(text, finalText);
}
text = document.querySelector('.efeito2');
if (text) {
  var finalText = text.innerHTML;
  type(text, finalText);
}