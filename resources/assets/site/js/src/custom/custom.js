$(document).ready(function() {
    //age gate
    $("#sim").click(function(e) {
      e.preventDefault();
        $.post("/age", function() {
            location.reload();
        });
    });

    $("#nao").click(function(e) {
        e.preventDefault();
        $('.selection').fadeOut('fast');
        $('#nope').fadeIn('slow');
    });

});
