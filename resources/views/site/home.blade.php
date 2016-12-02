@extends('site/master')

@section('content')
    <div class="initial">
        <header>
            <div id="menu" class="pull-right">
              <ul class="bmenu">
                <li><a href="#aperolspritz">APEROL SPRITZ</a></li>
                <li><a href="#aperollovers"> Aperol Lovers</a></li>
                <li><a href="#festascomaperol">FESTAS com aperol</a></li>
                <li><a href="#kombisummertour">kombi summer tour</a></li>
                <li><a href="#endlesssummer">Post com #ENDLESSSUMMER</a></li>
              </ul>
            </div>
            <div class="row" id="aperolspritz">
                <h1 class="col-sm-6 logo">Aperol Spritz</h1>

                <button id="bt-menu" class="c-hamburger c-hamburger-b-htx">
                  <span>toggle menu</span>
                </button>


                <div class="row">
                    <div class="endless_summer col-sm-5">
                    {{ Html::image('assets/images/endless_summer.png', '', array('class' => '')) }}
                    </div>
                    <div class="text-head col-sm-4">
                        <h2>COMO ETERNIZAR <br>O SEU VERÃO</h2>
                        <p>Verão é olho no olho, muita água,
                            <br> esquecer o caminho de volta pra casa,
                            <br> sorrir com quase nada, amar todo
                            <br> mundo com mais calor.<strong>
                            <br> Aqui é o lugar pra você fazer
                            <br> a estação não ter fim.</strong></p>
                    </div>
                    <div class="col-sm-12 text-center scroll-down">
                        <span> SCROLL DOWN <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="content">
        <section class="step-02">
            <div class="clearfix">
                <div class="col-md-02 text-doit">
                    <h3>Em uma taça<br>
                  com gelo<br>
                  e uma fatia<br>
                  de laranja<br>
                  coloque:
                </h3>
                </div>
                <div class="doit">
                {{ Html::image('assets/images/facaoseu.png', '', array('class' => '')) }}
                </div>
            </div>
            <div class="recipe clearfix">
                <div class="part3">partes de
                    <br> prosecco</div>
                <div class="part2">partes de
                    <br> Aperol</div>
                <div class="part1">parte de água
                    <br> com gás</div>
            </div>
        </section>
        <section class="step step-03" id="aperollovers">
            <!-- Influencer  -->
            {{ Html::image('assets/images/raul.png', '', array('class' => 'tit')) }}
            <div class="foto">
            {{ Html::image('assets/images/foto_raul.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Um cara que não tem tempo ruim.
                <br> Parece até que todo dia pra ele
                <br> é verão. Play na trilha do Raul.
                <!-- <a href="#" class="bt_mais" id="detalhes_raul">MAIS</a> -->
            </p>
            <p class="desc_details">O Raul é fotógrafo, mas além de tirar umas
              fotos incríveis, vive as festas e lugares mais <br>
              surreais que você pode imaginar. Ele sabe bem<br>
              como transformar tudo em verão e marcar <br>
              a estação pra sempre, por isso ele está aqui<br>
              com a gente, dá uma olhada.<br>

                <!-- <a href="#" class="bt_fechar" id="fechar_raul">fechar</a> -->
            </p>
        </section>
        <section class="step step-04">
            <!-- Influencer  -->
            {{ Html::image('assets/images/maga.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_maga.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Rapidinho você já percebe que ela
                <br>está sempre fazendo alguma coisa
                <br>diferente. <!-- Ouça a playlist dela aqui. -->
                <!-- <a href="#" class="bt_mais">MAIS</a> -->
            </p>
        </section>
        <section class="step step-05">
            <!-- Influencer  -->
            {{ Html::image('assets/images/andre.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_andre.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Quando você vê o que ele está
                <br> fazendo dá até aquela vontade
                <br> de tentar também. <!-- Pra melhorar
                <br> no calor, tem também a playlist. -->
                <!-- <a href="#" class="bt_mais">MAIS</a> -->
            </p>
        </section>
        <section class="step step-06">
            <!-- Influencer  -->
            {{ Html::image('assets/images/luiza.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_luiza.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Enquanto você lê aqui, provavelmente
                <br>ela está fazendo alguma coisa que
                <br>você vai querer participar.
                <br><!-- Ouça a playlist do verão dela. -->
                <!-- <a href="#" class="bt_mais">MAIS</a> -->
            </p>
        </section>
        <section class="step-07 clearfix" id="festascomaperol">
            <h2 class="main_tit">FESTAS COM
              <strong>#APEROLSPRITZ</strong></h2>
            <div class="party">
                <h2 class="tit">REVEILON<br>
                  DO GOSTOSO <br><span class="sub_tit">SãO MIGUEL DO GOSTOSO - RN</span></h2>
                <p id="partyText">O Reveillon mais Gostoso do Brasil nasce
                    <br> no ano de 2016, em uma das praias mais
                    <br> paradisíacas do nordeste Brasileiro.
                    <br> Serão 5 dias de diversão com muito sol,
                    <br> mar, praia, alegria, esporte
                    <br> e muita azaração
                    </p>
                    <a href="#festascomaperol" class="bt_oevento">O EVENTO</a>
            </div>
            <div class="party-calendar">
                <h3 class="tit">FESTAS</h3>
                <a href="#" data-tit="Reveillon Mareh" data-sub="Cumuruxatiba/BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium neque quasi cumque mollitia officiis deserunt id fugit assumenda repudiandae obcaecati, provident expedita rerum recusandae facere distinctio, cum sunt ipsum voluptatem." data-link="#festascomaperol" class="bt_detalhes_calendar">26/12 a 04/01 <span> Cumuruxatiba/BA</span></a>
                <a href="#" data-tit="Reveillon Tikal" data-sub="Barra Grande/ BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">27/12 a 02/01<span> Barra Grande/ BA</span></a>
                <a href="#" data-tit="REVEILON DO GOSTOSO" data-sub="São Miguel do Gostoso/RN" data-desc="O REVEILLON MAIS GOSTOSO DO BRASIL NASCE NO ANO DE 2016, EM UMA DAS PRAIAS MAIS PARADISÍACAS DO NORDESTE BRASILEIRO. SERÃO 5 DIAS DE DIVERSÃO COM MUITO SOL, MAR, PRAIA, ALEGRIA, ESPORTE E MUITA AZARAÇÃO" data-link="" class="bt_detalhes_calendar">27/12 a 01/01 <span> São Miguel do Gostoso/RN</span></a>
                <a href="#" data-tit="Reveillon Taipe" data-sub="Trancoso/BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">31/12 <span>Trancoso/BA</span></a>
                <a href="#" data-tit="Reveillon Vai Tapajós" data-sub="Alter do Chão/PA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">26/12 a 02/01 <span> Alter do Chão/PA</span></a>
                <a href="#" data-tit="Reveillon da Gavea" data-sub=" Rio de Janeiro/RJ" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">31/12 <span>Rio de Janeiro/RJ</span></a>
            </div>
        </section>
        <section class="step-08" id="kombisummertour">
            <h2 class="main_tit">KOMBI
              <strong>SUMMER TOUR</strong></h2>
            <div class="kombi-desc">
                <p>Nesse verão a nossa Kombi vai
                    <br> rodar pelos pontos mais agitados
                    <br> do Brasil para eternizar
                    <br> a melhor estação do ano com você.
                    <br> <strong>Quer saber por onde ela vai passar?
                    <br> Dá uma olhada.</strong>
                </p>
            </div>
            <div class="kombi">{{ Html::image('assets/images/kombi.jpg', '', array('class' => '')) }}</div>
            <div class="mapas">
              <iframe id="mapa" class="active" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1247996139637!2d-34.88783198461048!3d-8.088753394176441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f38b35faae5%3A0xf49b97bbd48b9663!2sHaus+%7C+Lajetop+%26+Beergarden!5e0!3m2!1spt-BR!2sbr!4v1480673284725" width="553" height="367" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="kombi-calendar">
                <p class="active"> 07/12 <span>Pina, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1247996139637!2d-34.88783198461048!3d-8.088753394176441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f38b35faae5%3A0xf49b97bbd48b9663!2sHaus+%7C+Lajetop+%26+Beergarden!5e0!3m2!1spt-BR!2sbr!4v1480673284725" class="bt_vejamapa">veja o mapa</a></p>
                <p> 08/12 <span>Boa Viagem, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.734266583387!2d-34.906071984610364!3d-8.128513994148607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1fb57fde8bb1%3A0x5bbc3810408e71b0!2sQuintal+Estelita!5e0!3m2!1spt-BR!2sbr!4v1480673852830" class="bt_vejamapa">veja o mapa</a></p>
                <p> 09/12 <span>Boa Viagem, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.734266583387!2d-34.906071984610364!3d-8.128513994148607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1fb57fde8bb1%3A0x5bbc3810408e71b0!2sQuintal+Estelita!5e0!3m2!1spt-BR!2sbr!4v1480673852830" class="bt_vejamapa">veja o mapa</a></p>
                <p> 10/12 <span>Pina, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.971410715156!2d-34.889486384610294!3d-8.104393194165503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f0dadaca23f%3A0x12e6fe35800eeef6!2sCervejaria+Alphaiate!5e0!3m2!1spt-BR!2sbr!4v1480673915009" class="bt_vejamapa">veja o mapa</a></p>
                <p> 11/12 <span>Pina, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.971410715156!2d-34.889486384610294!3d-8.104393194165503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f0dadaca23f%3A0x12e6fe35800eeef6!2sCervejaria+Alphaiate!5e0!3m2!1spt-BR!2sbr!4v1480673915009" class="bt_vejamapa">veja o mapa</a></p>
                <p> 15/12 <span>Manaira, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.16096848944!2d-34.82919958461523!3d-7.107336394867437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd18671d5f51%3A0x5ff948306e4e73d9!2sThe+W+Restaurante!5e0!3m2!1spt-BR!2sbr!4v1480673987403" class="bt_vejamapa">veja o mapa</a></p>
                <p> 16/12 <span>Manaira, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.16096848944!2d-34.82919958461523!3d-7.107336394867437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd18671d5f51%3A0x5ff948306e4e73d9!2sThe+W+Restaurante!5e0!3m2!1spt-BR!2sbr!4v1480673987403" class="bt_vejamapa">veja o mapa</a></p>
                <p> 17/12 <span>Cabedelo, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.829758578746!2d-34.83229828461556!3d-7.029287194922634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acde44c582b275%3A0x7f756be4d16d6036!2sLovina!5e0!3m2!1spt-BR!2sbr!4v1480674085841" class="bt_vejamapa">veja o mapa</a></p>
                <p> 18/12 <span>Cabedelo, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.829758578746!2d-34.83229828461556!3d-7.029287194922634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acde44c582b275%3A0x7f756be4d16d6036!2sLovina!5e0!3m2!1spt-BR!2sbr!4v1480674085841" class="bt_vejamapa">veja o mapa</a></p>
            </div>
        </section>
        <section class="step-09" id="endlesssummer">
            <div class="text">
                <h2 class="tit">#Endless<br>
                  summer</h2>
                <p>Já está eternizando o seu
                    <br> verão? Então poste uma
                    <br> foto com <strong>#EndlessSummer</strong>
                    <br>
                    <span>que você pode aparecer <br>
                    aqui no mural.</span></p>
            </div>
            <div class="mural">
                @foreach($posts as $post)
                    <div class="insta">
                      <a target="_blank" href="{!!$post->link!!}" style="background-image:url({!!$post->image!!});"></a>
                  </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
