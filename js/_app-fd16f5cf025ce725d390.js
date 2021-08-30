_N_E = (window.webpackJsonp_N_E = window.webpackJsonp_N_E || []).push([
  [4],
  {
    0: function (e, t, r) {
      r("GcxT"), (e.exports = r("nOHt"));
    },
    "1TCz": function (e, t, r) {
      "use strict";

      function n(e, t, r) {
        return (
          t in e
            ? Object.defineProperty(e, t, {
                value: r,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = r),
          e
        );
      }
      r.r(t);
      var c = r("nKUr"),
        o = (r("q1tI"), r("t4Kt"), r("YRqr"));

      function i(e, t) {
        var r = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
          var n = Object.getOwnPropertySymbols(e);
          t &&
            (n = n.filter(function (t) {
              return Object.getOwnPropertyDescriptor(e, t).enumerable;
            })),
            r.push.apply(r, n);
        }
        return r;
      }

      function u(e) {
        for (var t = 1; t < arguments.length; t++) {
          var r = null != arguments[t] ? arguments[t] : {};
          t % 2
            ? i(Object(r), !0).forEach(function (t) {
                n(e, t, r[t]);
              })
            : Object.getOwnPropertyDescriptors
            ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
            : i(Object(r)).forEach(function (t) {
                Object.defineProperty(
                  e,
                  t,
                  Object.getOwnPropertyDescriptor(r, t)
                );
              });
        }
        return e;
      }
      t.default = function (e) {
        var t = e.Component,
          r = e.pageProps;
        return Object(c.jsx)(o.a, {
          isDark: !0,
          children: Object(c.jsx)(t, u({}, r)),
        });
      };
    },
    GcxT: function (e, t, r) {
      (window.__NEXT_P = window.__NEXT_P || []).push([
        "/_app",
        function () {
          return r("1TCz");
        },
      ]);
    },
    YRqr: function (e, t, r) {
      "use strict";
      r.d(t, "b", function () {
        return i;
      }),
        r.d(t, "a", function () {
          return u;
        });
      var n = r("nKUr"),
        c = r("q1tI"),
        o = Object(c.createContext)();

      function i() {
        return Object(c.useContext)(o);
      }

      function u(e) {
        var t = e.children,
          r = Object(c.useState)(!0),
          i = r[0],
          u = r[1];
        Object(c.useEffect)(
          function () {
            console.log(i),
              i
                ? document.body.classList.toggle("darkTheme", i)
                : document.body.classList.remove("darkTheme");
          },
          [i]
        );
        var s = {
          isDark: i,
          getTheme: function (e) {
            u(e);
          },
        };
        return Object(n.jsx)(o.Provider, {
          value: s,
          children: t,
        });
      }
    },
    t4Kt: function (e, t, r) {},
  },
  [[0, 0, 1, 2]],
]);
