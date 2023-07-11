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
      tolerance: {
        down: 10,
        up: 20
      },
    })
    headroom.init()
  }

}(window.jQuery)