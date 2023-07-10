! function ($) {
  $(document).on('pjax:complete',
    function () {
      ajaxComt()
      init()
    })
  $(document).ready(function () {
    init()
  })

  const init = () => {
    headroom()
  }

  const headroom = () => {
    if ($('.headroom')[0]) {
      new Headroom(document.querySelector("#navbar-main"), {
        offset: 0,
        tolerance: {
          up: 30,
          down: 30
        },
      }).init()
    }
  }
}(window.jQuery)