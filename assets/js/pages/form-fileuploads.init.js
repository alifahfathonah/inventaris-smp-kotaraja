!(function (t) {
  "use strict";
  function e() {
    this.$body = t("body");
  }
  (e.prototype.init = function () {
    (Dropzone.autoDiscover = !1),
      t('[data-plugin="dropzone"]').each(function () {
        var e = t(this).attr("action"),
          o = t(this).data("previewsContainer"),
          i = { url: e };
        o && (i.previewsContainer = o);
        var r = t(this).data("uploadPreviewTemplate");
        r && (i.previewTemplate = t(r).html());
        t(this).dropzone(i);
      });
  }),
    (t.FileUpload = new e()),
    (t.FileUpload.Constructor = e);
})(window.jQuery),
  (function () {
    "use strict";
    window.jQuery.FileUpload.init();
  })(),
  0 < $('[data-plugins="dropify"]').length &&
    $('[data-plugins="dropify"]').dropify({
      messages: {
        default: "Pilih Gambar",
        replace: "Klik Untuk Mengganti Gambar",
        remove: "Hapus",
        error: "Ooops, ada yang salah.",
      },
      error: { fileSize: "Gambar tidak boleh lebih besar dari 1 MB" },
    });
