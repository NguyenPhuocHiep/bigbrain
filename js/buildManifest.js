self.__BUILD_MANIFEST = (function (a, b) {
  return {
    __rewrites: [
      {
        source: "/:lang(vi){/}?",
        destination: a,
      },
      {
        source: "/:lang(vi)/:path*",
        destination: b,
      },
      {
        source: "/:lang(en){/}?",
        destination: a,
      },
      {
        source: "/:lang(en)/:path*",
        destination: b,
      },
    ],
    "/": ["css/fe18527bc7b012ce1062.css", "js/index-e7b2b3b117776667b23c.js"],
    "/_error": ["js/error-637ac9cdd9d5ec57177f.js"],
    sortedPages: [a, "/app", "/error"],
  };
})("/", "/:path*");
self.__BUILD_MANIFEST_CB && self.__BUILD_MANIFEST_CB();
