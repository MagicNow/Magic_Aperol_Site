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
    var $content = $('.content');
    var $self, $element;

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
        console.log($(this).parents().parents('.step').addClass('active'))
        $(this).parents().parents('.step').addClass('active');
    });

    $('.bt_fechar').click(function(e) {
        e.preventDefault();
        $(this).parents().parents('.step').removeClass('active');
    });

    $fillerLine.find('.filler').css("background-color", function( index ) {
        return $(this).parent().find('.text').css('color'); // set color to filler by color text
    });

    $content
        .scrolling({ offsetTop: -200 })
        .on('scrollin', function(event, $all_elements) {
            // scrollIn($all_elements);
            $self = $($all_elements);

            if (!$self.hasClass('active')) {
                $self.addClass('active');
                $self.find('.component').each(function(index, el) {
                    $(this).find('.filler-line').each(function(index, el) {
                        setTimeout(function () {
                            $element = $(el);
                            $element.addClass('animate');
                            // $element.width('100%');

                            // setTimeout(function () {
                            //     $element.width(0);
                            // }, 400);
                        }, index * 500)
                    });
                });
            }
        });
});

function scrollIn ($all_elements) {
    $self = $($all_elements);

    if (!$self.hasClass('active')) {
        $self.find('.filler').each(function(index, el) {
            $element = $(el);
            $element.width('100%');
        });
        
        // setTimeout(function () {
        //     $self.find('.filler').width(0);
        // }, 400);

        // $self.addClass('active');
        // // console.log('console2', $self, count+1);

        // setTimeout(function () {
        //     scrollIn($all_elements, count+1);
        // }, (count+1) * 200)
    }
}
