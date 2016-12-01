    $(document).ready(function() {
        $('a').click(function(e) {
            e.preventDefault();
        });

          $('#detalhes_raul').click(function(e) {
            e.preventDefault();
            $('.step-03').addClass('active');
        });
          $('#fechar_raul').click(function(e) {
            e.preventDefault();
            $('.step-03').removeClass('active');
        });
    });
