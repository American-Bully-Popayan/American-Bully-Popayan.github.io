<?php
    header("Content-Type: text/javascript")
?>

$( document ).ready(function() {

$('nav ul li > a:not(:only-child)').click(function(e) {
  $(this).siblings('.nav-submenu').toggle();
  $('.nav-submenu').not($(this).siblings()).hide();
  e.stopPropagation();
});

$('html').click(function() {
  $('.nav-submenu').hide();
});

$('#nav-boton').click(function() {
  $('nav ul').toggle()
  $('#nav-boton').toggleClass("activo");
})

});

$(document).ready(function() {


    var Menu = {

        body: $('.menu'),
        button: $('.button-submenu'),
        tools: $('.tools')

    };

    Menu.button.click(function () {
        Menu.body.toggleClass('menu--closed');
        Menu.body.toggleClass('menu--open');
        Menu.tools.toggleClass('tools--visible');
        Menu.tools.toggleClass('tools--hidden');
    });


});
(function($) {
  $(function() {
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
  });
})(jQuery);
particlesJS(
    {
      "particles": {
        "number": {
          "value": 10,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#FDBC0D"
        },
        "shape": {
          "type": "image",
          "stroke": {
            "width": 10,
            "color": "#4a9ae9"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "Media/iconos/pataDePerro-min.png",
            "width": 200,
            "height": 200
          }
        },
        "opacity": {
          "value": 0.7,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 50,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": false,
            "mode": "repulse"
          },
          "onclick": {
            "enable": false,
            "mode": "push"
          },
          "resize": false
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    }
  )
  