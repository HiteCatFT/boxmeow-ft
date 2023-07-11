! function ($) {
  $(document).ready(function () {
    init()
  })

  const init = () => {
    headroom()
  }

  const headroom = () => {
    var header = document.querySelector("#navbar-main-ft");

    var headroom = new Headroom(header, {
      offset: 100,
      tolerance: {
        down: 30,
        up: 30
      },
    })
    headroom.init()
  }

}(window.jQuery)