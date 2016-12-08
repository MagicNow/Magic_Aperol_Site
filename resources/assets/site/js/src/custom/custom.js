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

    var menu = $('#menu');

    $(".party-calendar a").click(function(e) {
        e.preventDefault();
    });

    $(".bt_vejamapa").click(function(e) {
        e.preventDefault();
        var mapa = $(this).data('evento');
        $('#mapa').attr('src', mapa);
        $('.kombi-calendar p').removeClass('active');
        $(this).parent().addClass('active');
    });

    $(".bt_detalhes_calendar").click(function(e) {
        e.preventDefault();
        var tit = $(this).data('tit');
        var sub = $(this).data('sub');
        var link = $(this).data('link');
        var desc = $(this).data('desc');

        var itemTit = $('.party .tit');
        var itemSub = $('.party .sub_tit');
        var itemLink = $('.party .bt_oevento');
        var itemDesc = $('#partyText');
        var party = $('.party');

        // $('.bt_detalhes_calendar').removeClass('active');
        // $(this).addClass('active');

        // party.fadeOut('fast', function() {
        //     itemTit.text(tit).append(itemSub.text(sub));
        //     itemLink.attr('href', link);
        //     itemDesc.text(desc);
        //     party.fadeIn('slow');
        // });

    });
    $('.kombi-calendar').niceScroll({ cursorcolor: "#fe5000" });
    $('#partyText').niceScroll({ cursorcolor: "#fe5000" });

    $("#bt-menu").click(function(e) {
        e.preventDefault();

        if (menu.hasClass('active')) {
            menu.removeClass('active');
        } else {
            menu.addClass('active');
        }

    });
    $('#menu a[href*="#"]:not([href="#"])').click(function() {
        if (menu.hasClass('active')) {
            menu.removeClass('active');
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

        location.href = 'home.html'

    });

    $("#nao").click(function(e) {
        e.preventDefault();

        $('.age-gate h2').hide();
        $('.selection').hide();
        $('#nope').fadeIn('slow');
    });




});
