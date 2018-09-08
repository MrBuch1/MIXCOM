jQuery(document).ready(function ($) {
  $(".scroll").click(function (event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top
    }, 1200);
  });
});

addEventListener("load", function () {
  setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
  window.scrollTo(0, 1);
}


$(document).ready(function () {
  $("#owl-demo , #owl-demo1").owlCarousel({
    items: 1,
    lazyLoad: true,
    autoPlay: true,
  });
});


$(document).ready(function () {
  $("#owl-demo3").owlCarousel({
    items: 4,
    lazyLoad: true,
    autoPlay: true,
    navigation: false,
    pagination: false,
  });
});

$(function () {
  var pull = $('#pull');
  menu = $('nav ul');
  menuHeight = menu.height();
  $(pull).on('click', function (e) {
    e.preventDefault();
    menu.slideToggle();
  });
  $(window).resize(function () {
    var w = $(window).width();
    if (w > 320 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });
});

$(document).ready(function () {
  $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true // 100% fit in a container
  });
});
$('.example1').wmuSlider();




<
script type = "text/javascript" >
  $(document).ready(function () {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
    };
    */

    $().UItoTop({
      easingType: 'easeOutQuart'
    });

  });


startList = function () {
  if (document.all && document.getElementById) {
    navRoot = document.getElementById("menuDropDown");
    for (i = 0; i < navRoot.childNodes.length; i++) {
      node = navRoot.childNodes[i];
      if (node.nodeName == "LI") {
        node.onmouseover = function () {
          this.className += " over";
        }
        node.onmouseout = function () {
          this.className = this.className.replace(" over", "");
        }
      }
    }
  }
}
window.onload = startList; <
/script>