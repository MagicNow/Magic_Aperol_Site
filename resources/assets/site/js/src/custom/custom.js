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
    var $self, $element, $mask, $text;

    $(window).stellar({
        hideDistantElements: false
    });

    $('#calendar').eCalendar({
        textArrows: { previous: '', next: '' },
        events: [
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 02), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 03), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 04), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 10), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 05, 11), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 11), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 15), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'SELVAGEM (SP) ', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 05, 17), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'RIO SUNSET', description: '', datetime: new Date(2017, 05, 17), url: 'https://www.facebook.com/festariosunset/?fref=ts', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 17), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'FUNN FESTIVAL (BSB)', description: 'Em comemoração à Semana Mundial do Meio Ambiente, apresentamos Funn Festival, um festival amigo da Natureza.Inspirado em grandes festivais europeus, será possível curtir aquele friozinho maravilhoso de Junho com variedade de rótulos de vinho ou, até mesmo, tomar uma cerveja especial no aconchegante Bier Garden, devidamente inspirado nos nossos amigos germânicos. Para completar a experiência, tudo isso ocorrerá em um dos maiores parques urbanos do mundo. Isso mesmo! No nosso Parque da Cidade em Brasília!', datetime: new Date(2017, 05, 18), url: 'http://www.funnfestival.com.br/', url_blank: true },
            { title: 'TAMO GIGANTE', description: 'Muita gente falou,muito nós ouvimos! Cada história com um fim,  cada história com um culpado, uma história melhor que a outra! Mas sempre tivemos um sentimento muito especial que nos unia, a PAIXÃO por festas!Essa paixão uniu novamente dois grupos.. Sendo assim, senhoras e senhores, em um LOCAL INÉDITO em São Paulo, um Estádio onde nunca houve uma festa antes.... é com muito prazer que anunciamos que, pelo bem da nação, a @agencianewfun e a @fun2ubrasil  se uniram para uma noite PERFEITA!  Com vocês... @TamoGigante !', datetime: new Date(2017, 05, 23), url: 'https://www.agencianewfun.com.br/tamogigante', url_blank: true },
            { title: 'SELVAGEM (RJ)', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 05, 24), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 05, 25), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'BAILA COMIGO (RJ)', description: 'A chamada novidade teria tudo pra ser uma coisa rara nos dias de hoje, mas um dos aspectos mais fascinantes deste universo é exatamente sua capacidade de desafiar a criatividade humana, de modo que se é muito raro que se invente algo absolutamente desconhecido, é cada vez mais comum que a mescla de gêneros e estilos dê origem a projetos surpreendentes – e que soem novos ritmos aos nossos ouvidos. Assim é que os estilos vão se misturando, influenciando uns aos outros e os resultados de uniões muitas vezes improváveis se convertem em grandes sucessos. Foi tendo essa reflexão que pensamos, vamos unir ritmos musicais super dançantes, e desafiar nossa criatividade criando um novo conceito de evento ?Nossa musa inspiradora foi a rainha do Rock Nacional, Rita Lee. Temos uma trilha sonora que transita por vários gêneros, num hibridismo envolvente, oriunda de fontes como o Tropicalismo, Música Brasileira, R&B, Future Bass, Black Music, Reggaeton e Tropical House.Nosso segredo é uma loucura gostosa, com sabor de tutti frutti. Baila comigo!?', datetime: new Date(2017, 06, 01), url: 'https://www.facebook.com/BailaCmg/?fref=ts', url_blank: true },
            { title: 'SELVAGEM (RJ)', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 06, 15), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'SELVAGEM (SP) ', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 06, 22), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'OUTROS 500 (RJ)', description: 'Um fenômeno chamado OUTROS 500! #FestaOutros500', datetime: new Date(2017, 06, 22), url: 'https://www.facebook.com/festaoutros500/?fref=ts', url_blank: true },
            { title: 'FEXTINHA', description: 'O jeito é de festa do interior, mas a vibe é de agito open air, sem hora para acabar. Essa é a FEXTINHA, projeto idealizado para ser festa com clima de diversão, bagunça e sacanagem, além de muita bebida e música alta, no volume máximo, pra todo mundo cantar e dançar até o fim – e ainda deixar aquele gostinho de quero mais!  Com duração de 12 horas, vale chegar cedo para não perder nenhum detalhe, e levar o óculos de sol na bolsa. A intenção é vero sol nascer e ter animação até o meio dia do dia seguinte. Nós somos a FEXTINHA!', datetime: new Date(2017, 07, 04), url: 'https://www.agencianewfun.com.br/fextinha', url_blank: true },
            { title: 'POSTAL (SP)', description: 'A gente acredita que uma boa festa não precisa de muito: um lugar especial, os amigos ao redor e aquela música que te coloca um sorriso no rosto. Assim a gente até consegue beber menos e se divertir mais. Hoje é dia de Postal.', datetime: new Date(2017, 07, 05), url: 'Https://www.facebook.com/festapostal/?fref=ts', url_blank: true },
            { title: 'TARDEZINHA (SP)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 07, 05), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'BABEL (SP)', description: '', datetime: new Date(2017, 07, 12), url: 'https://www.facebook.com/marehmusic/', url_blank: true },
            { title: 'SELVAGEM (SP) ', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 07, 12), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'SELVAGEM (RJ)', description: 'Selvagem é o nome da dupla formada pelos DJs Millos Kaiser e Trepanado, bem como suas festas que acontecem em São Paulo e no Rio de Janeiro.Quando se trata de música, canalizam-a com uma abordagem anárquica, misturando discoteca, casa, rock, techno, funk e alma de todas as épocas e lugares.', datetime: new Date(2017, 07, 26), url: 'https://www.facebook.com/festaselvagem/', url_blank: true },
            { title: 'VERÃO NA LAJE (RJ)', description: 'O verão na laje mais charmosa da cidade. O projeto surge com o intuito de unir o verão, roda de samba, uma boa mpb e um funk para agitar a pista.', datetime: new Date(2017, 08, 02), url: 'https://www.facebook.com/veraonalaje/', url_blank: true },
            { title: 'RIO SUNSET (RJ)', description: '', datetime: new Date(2017, 08, 08), url: 'https://www.facebook.com/festariosunset/?fref=ts', url_blank: true },
            { title: 'BAILA COMIGO (RJ)', description: 'A chamada novidade teria tudo pra ser uma coisa rara nos dias de hoje, mas um dos aspectos mais fascinantes deste universo é exatamente sua capacidade de desafiar a criatividade humana, de modo que se é muito raro que se invente algo absolutamente desconhecido, é cada vez mais comum que a mescla de gêneros e estilos dê origem a projetos surpreendentes – e que soem novos ritmos aos nossos ouvidos. Assim é que os estilos vão se misturando, influenciando uns aos outros e os resultados de uniões muitas vezes improváveis se convertem em grandes sucessos. Foi tendo essa reflexão que pensamos, vamos unir ritmos musicais super dançantes, e desafiar nossa criatividade criando um novo conceito de evento ?Nossa musa inspiradora foi a rainha do Rock Nacional, Rita Lee. Temos uma trilha sonora que transita por vários gêneros, num hibridismo envolvente, oriunda de fontes como o Tropicalismo, Música Brasileira, R&B, Future Bass, Black Music, Reggaeton e Tropical House.Nosso segredo é uma loucura gostosa, com sabor de tutti frutti. Baila comigo!?', datetime: new Date(2017, 08, 16), url: 'https://www.facebook.com/BailaCmg/?fref=ts', url_blank: true },
            { title: 'RIO SUNSET (SP)', description: '', datetime: new Date(2017, 08, 30), url: 'https://www.facebook.com/festariosunset/?fref=ts', url_blank: true },
            { title: 'ERREJOTA (RJ)', description: 'Que o Rio é abençoado por Deus e bonito por natureza não é novidade pra ninguém, mas não é só isso. O estilo de vida do povo carioca também inspira o mundo, e nada melhor que uma festa para captar essa essência! Bem-Vindo à ERREJOTA, a festa mais carioca do mundo!', datetime: new Date(2017, 09, 07), url: 'https://www.facebook.com/festaerrejota/?fref=ts', url_blank: true },
            { title: 'POSTAL (SP)', description: 'A gente acredita que uma boa festa não precisa de muito: um lugar especial, os amigos ao redor e aquela música que te coloca um sorriso no rosto. Assim a gente até consegue beber menos e se divertir mais. Hoje é dia de Postal.', datetime: new Date(2017, 09, 21), url: 'Https://www.facebook.com/festapostal/?fref=ts', url_blank: true },
            { title: 'VERÃO NA LAJE (RJ)', description: 'O verão na laje mais charmosa da cidade. O projeto surge com o intuito de unir o verão, roda de samba, uma boa mpb e um funk para agitar a pista.', datetime: new Date(2017, 09, 21), url: 'https://www.facebook.com/veraonalaje/', url_blank: true },
            { title: 'TAMO GIGANTE', description: 'Muita gente falou,muito nós ouvimos! Cada história com um fim,  cada história com um culpado, uma história melhor que a outra! Mas sempre tivemos um sentimento muito especial que nos unia, a PAIXÃO por festas!Essa paixão uniu novamente dois grupos.. Sendo assim, senhoras e senhores, em um LOCAL INÉDITO em São Paulo, um Estádio onde nunca houve uma festa antes.... é com muito prazer que anunciamos que, pelo bem da nação, a @agencianewfun e a @fun2ubrasil  se uniram para uma noite PERFEITA!  Com vocês... @TamoGigante !', datetime: new Date(2017, 09, 27), url: 'https://www.agencianewfun.com.br/tamogigante', url_blank: true },
            { title: 'BABEL (SP)', description: '', datetime: new Date(2017, 10, 11), url: 'https://www.facebook.com/marehmusic/', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 10, 12), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'FEXTINHA DE RODEIO', description: 'O jeito é de festa do interior, mas a vibe é de agito open air, sem hora para acabar. Essa é a FEXTINHA, projeto idealizado para ser festa com clima de diversão, bagunça e sacanagem, além de muita bebida e música alta, no volume máximo, pra todo mundo cantar e dançar até o fim – e ainda deixar aquele gostinho de quero mais!  Com duração de 12 horas, vale chegar cedo para não perder nenhum detalhe, e levar o óculos de sol na bolsa. A intenção é vero sol nascer e ter animação até o meio dia do dia seguinte. Nós somos a FEXTINHA!', datetime: new Date(2017, 10, 24), url: 'https://www.agencianewfun.com.br/fextinha', url_blank: true },
            { title: 'BAILA COMIGO (RJ)', description: 'A chamada novidade teria tudo pra ser uma coisa rara nos dias de hoje, mas um dos aspectos mais fascinantes deste universo é exatamente sua capacidade de desafiar a criatividade humana, de modo que se é muito raro que se invente algo absolutamente desconhecido, é cada vez mais comum que a mescla de gêneros e estilos dê origem a projetos surpreendentes – e que soem novos ritmos aos nossos ouvidos. Assim é que os estilos vão se misturando, influenciando uns aos outros e os resultados de uniões muitas vezes improváveis se convertem em grandes sucessos. Foi tendo essa reflexão que pensamos, vamos unir ritmos musicais super dançantes, e desafiar nossa criatividade criando um novo conceito de evento ?Nossa musa inspiradora foi a rainha do Rock Nacional, Rita Lee. Temos uma trilha sonora que transita por vários gêneros, num hibridismo envolvente, oriunda de fontes como o Tropicalismo, Música Brasileira, R&B, Future Bass, Black Music, Reggaeton e Tropical House.Nosso segredo é uma loucura gostosa, com sabor de tutti frutti. Baila comigo!?', datetime: new Date(2017, 10, 25), url: 'https://www.facebook.com/BailaCmg/?fref=ts', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 10, 26), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 11, 02), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
            { title: 'OUTROS 500 (RJ)', description: 'Um fenômeno chamado OUTROS 500! #FestaOutros500', datetime: new Date(2017, 11, 09), url: 'https://www.facebook.com/festaoutros500/?fref=ts', url_blank: true },
            { title: 'POSTAL (SP)', description: 'A gente acredita que uma boa festa não precisa de muito: um lugar especial, os amigos ao redor e aquela música que te coloca um sorriso no rosto. Assim a gente até consegue beber menos e se divertir mais. Hoje é dia de Postal.', datetime: new Date(2017, 11, 15), url: 'Https://www.facebook.com/festapostal/?fref=ts', url_blank: true },
            { title: 'TARDEZINHA (RJ)', description: 'O tradicional fim de tarde carioca. Cerveja gelada, a legitima roda de samba do Thiaguinho e os melhores Djs do Rio! Simples assim!', datetime: new Date(2017, 11, 16), url: 'https://www.facebook.com/Tardezinha/', url_blank: true },
        ]
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

    $fillerLine.find('.filler').css("background-color", function(index) {
        return $(this).parent().find('.text').css('color'); // set color to filler by color text
    });
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

function scrollIn($all_elements) {
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
        hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    }
    lum = lum || 0;
    // convert to decimal and change luminosity
    var rgb = "#",
        c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i * 2, 2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00" + c).substr(c.length);
    }
    return rgb;
}
