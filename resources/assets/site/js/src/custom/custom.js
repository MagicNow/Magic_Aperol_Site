(function() {

    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
        toggle.addEventListener("click", function(e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active"): this.classList.add("is-active");
        });
    }

})();

$(document).ready(function() {

    var $menu = $('#menu');
    var $fillerLine = $('.filler-line');
    var $content = $('.content-animate');
    var $party = $('.party-calendar-content');
    var $self, $element, $mask, $text;

    $(window).stellar({
        hideDistantElements: false
    });

    $(".bt_vejamapa").click(function(e) {
        e.preventDefault();
        var mapa = $(this).data('evento');
        $('#mapa').attr('src', mapa);
        $('.kombi-calendar p').removeClass('active');
        $(this).parent().addClass('active');
    });


    $("#bt-menu").click(function(e) {
        e.preventDefault();

        if ($menu.hasClass('active')) {
            $menu.removeClass('active');
        } else {
            $menu.addClass('active');
        }

    });
    $('#menu a[href*="#"]:not([href="#"])').click(function() {
        if ($menu.hasClass('active')) {
            $menu.removeClass('active');
            $('#bt-menu').removeClass('is-active');
        }
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    //age gate
    $("#sim").click(function(e) {
        e.preventDefault();
        location.href = 'home'
    });

    $("#nao").click(function(e) {
        e.preventDefault();
        $('.age-gate h2').hide();
        $('.selection').hide();
        $('#nope').fadeIn('slow');
    });

    $('.bt_mais').click(function(e) {
        e.preventDefault();
        var $step = $(this).parents().parents('.step');
        var $desc = $step.find('.desc_details');

        if ($desc.length > 0) {
            $step.addClass('active');
        }
    });

    $('.bt_fechar').click(function(e) {
        e.preventDefault();
        $(this).parents().parents('.step').removeClass('active');
    });

    $fillerLine.find('.filler').css("background-color", function( index ) {
        return $(this).parent().find('.text').css('color'); // set color to filler by color text
    });

    $party.niceScroll();

    $content
        .scrolling({
            checkScrolling: true
        })
        .on('scrollin', function(event, $all_elements) {
            $all_elements.each(function(index, el) {
                $self = $(el);

                // Text effects
                /*
                $mask = $self.find('.component.text-filler .filler-line .mask');
                $mask.removeAttr('style');
                */

                $text = $self.find('.text.mode-text');
                $text.removeAttr('style');



                if (!$self.hasClass('content-active')) {
                    $self.addClass('content-active');
                    // console.log($self.find('.component'));
                    $self.find('.component').each(function(index, el) {
                        $(this).find('.fade-animate').each(function(index, el) {
                            $element = $(el);
                            $element.addClass('animate');
                        });

                        /*
                        $(this).find('.filler-line').each(function(index, el) {
                            setTimeout(function () {
                                $element = $(el);
                                $element.addClass('animate');
                            }, index * 500)
                        });
                        */
                    });
                }
            });
        })
        .on('scrollout', function(event, $all_elements) {
            $self = $($all_elements[0]);

            $text = $self.find('.component.text-filler .filler-line .text');

            if ($text.length > 0) {
                $text.parents('.animate').removeClass('animate');
                $text.parents('.content-animate').removeClass('content-active');
            }

            // Text effects
            
            /*
            $mask = $self.find('.component.text-filler .filler-line .mask');

            if ($mask.length > 0) {
                $mask.css('transform', 'translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0)');

                $text = $self.find('.text.mode-text');
                $text.css('transform', 'translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0)');
                
                $mask.parents('.animate').removeClass('animate');
                $mask.parents('.content-animate').removeClass('content-active');
            }
            */
        });
});

function scrollIn ($all_elements) {
    $self = $($all_elements);

    if (!$self.hasClass('content-active')) {
        $self.find('.filler').each(function(index, el) {
            $element = $(el);
            $element.width('100%');
        });
    }
}

function ColorLuminance(hex, lum) {
    // validate hex string
    hex = String(hex).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
        hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
    }
    lum = lum || 0;
    // convert to decimal and change luminosity
    var rgb = "#", c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i*2,2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00"+c).substr(c.length);
    }
    return rgb;
}
