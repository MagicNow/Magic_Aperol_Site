@extends('site/master')

@section('content')
    <div class="initial">
        <header class="clearfix">
            <div id="menu" class="pull-right">
              <ul class="bmenu">
                <li><a href="#aperolspritz">APEROL SPRITZ</a></li>
                <!-- <li><a href="#aperollovers"> Aperol Lovers</a></li> -->
                <li><a href="#festascomaperol">FESTAS com aperol</a></li>
                <li><a href="#kombisummertour">kombi summer tour</a></li>
                <li><a href="#endlesssummer">Post com #ENDLESSSUMMER</a></li>
              </ul>
            </div>
            <div class="row" id="aperolspritz">
                   {{ Html::image('assets/images/logo_aperol.png', '', array('class' => 'logo', 'id' => 'logo')) }}

               {{ Html::image('assets/images/taca.png', '', array('class' => '', 'id' => 'taca')) }}

                <button id="bt-menu" class="c-hamburger c-hamburger--htx">
                  <span>toggle menu</span>
                </button>




                      <img src="http://localhost:8000/assets/images/endless_summer.png" class="endless_summer" alt="">

                    <div class="text-head-wrapper">
                      <div class="text-head">
                          <h2>COMO ETERNIZAR <br>O SEU VERÃO</h2>
                          <p>Verão é olho no olho, muita água,
                              <br> esquecer o caminho de volta pra casa,
                              <br> sorrir com quase nada, amar todo
                              <br> mundo com mais calor.<strong>
                              <br> Aqui é o lugar pra você fazer
                              <br> a estação não ter fim.</strong></p>
                      </div>
                      {{ Html::image('assets/images/aperol_.png', '', array('class' => '', 'id' => 'aperol')) }}
                    </div>
                    <div class="col-sm-12 text-center scroll-down">
                        <span> SCROLL DOWN <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </div>

            </div>
        </header>
    </div>
    <div class="content clearfix">
        <section class="step-02 clearfix">

                {{ Html::image('assets/images/laranja.png', '', array('class' => 'laranja', 'id' => 'laranja')) }}
                <div class="col-md-02 text-doit hidden-xs">
                    <h3>Em uma taça<br>
                    com gelo<br>
                    e uma fatia<br>
                    de laranja<br>
                    coloque:
                  </h3>
                </div>
                {{ Html::image('assets/images/facaoseu.png', '', array('class' => 'doit', 'id' => 'doit')) }}

                {{ Html::image('assets/images/gelo1.png', '', array('class' => 'gelo1', 'id' => 'gelo1')) }}
                {{ Html::image('assets/images/gelo2.png', '', array('class' => 'gelo2', 'id' => 'gelo2')) }}
                {{ Html::image('assets/images/taca.png', '', array('class' => 'taca2', 'id' => 'taca2')) }}
               <div class="col-md-02 text-doit visible-xs-block">
                    <h3>Em uma taça<br>
                    com gelo<br>
                    e uma fatia<br>
                    de laranja<br>
                    coloque:
                  </h3>
                </div>
                <div class="recipe clearfix ">
                    <div class="part3"><span>3</span> partes de
                        <br> prosecco</div>
                    <div class="part2"><span>2</span>  partes de
                        <br> Aperol</div>
                    <div class="part1"><span>1</span>  parte de água
                        <br> com gás</div>
                </div>


        </section>
        <section class="step-07 clearfix" id="festascomaperol">
            <h2 class="main_tit">FESTAS COM
              <strong>#APEROLSPRITZ</strong></h2>

              {{ Html::image('assets/images/ondas.png', '', array('class' => 'img-festas-onda img-responsive')) }}
              {{ Html::image('assets/images/foto_Festas.jpg', '', array('class' => 'img-festas img-responsive')) }}
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
                <a href="#" data-tit="Reveillon Mareh" data-sub="Cumuruxatiba/BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium neque quasi cumque mollitia officiis deserunt id fugit assumenda repudiandae obcaecati, provident expedita rerum recusandae facere distinctio, cum sunt ipsum voluptatem." data-link="#festascomaperol" class="bt_detalhes_calendar">26/12 a 04/01 <span> Reveillon Mareh - Cumuruxatiba/BA</span></a>
                <a href="#" data-tit="Reveillon Tikal" data-sub="Barra Grande/ BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">27/12 a 02/01<span>  Reveillon Tikal – Barra Grande/ BA</span></a>
                <a href="#" data-tit="REVEILON DO GOSTOSO" data-sub="São Miguel do Gostoso/RN" data-desc="O REVEILLON MAIS GOSTOSO DO BRASIL NASCE NO ANO DE 2016, EM UMA DAS PRAIAS MAIS PARADISÍACAS DO NORDESTE BRASILEIRO. SERÃO 5 DIAS DE DIVERSÃO COM MUITO SOL, MAR, PRAIA, ALEGRIA, ESPORTE E MUITA AZARAÇÃO" data-link="" class="bt_detalhes_calendar">27/12 a 01/01 <span>São Miguel do Gostoso/RN</span></a>
                <a href="#" data-tit="Reveillon Taipe" data-sub="Trancoso/BA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">31/12 <span>Reveillon Taipe – Trancoso/BA</span></a>
                <a href="#" data-tit="Reveillon Vai Tapajós" data-sub="Alter do Chão/PA" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">26/12 a 02/01 <span>Reveillon Vai Tapajós – Alter do Chão/PA</span></a>
                <a href="#" data-tit="Reveillon da Gavea" data-sub=" Rio de Janeiro/RJ" data-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-link="#festascomaperol" class="bt_detalhes_calendar">31/12 <span>Reveillon da Gavea - Rio de Janeiro/RJ</span></a>
            </div>
        </section>
        <section class="step-08 clearfix" id="kombisummertour">
            <h2 class="main_tit">KOMBI
              <strong>SUMMER TOUR</strong></h2>
            <div class="mapas clearfix">
              <iframe id="mapa" class="active" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1247996139637!2d-34.88783198461048!3d-8.088753394176441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f38b35faae5%3A0xf49b97bbd48b9663!2sHaus+%7C+Lajetop+%26+Beergarden!5e0!3m2!1spt-BR!2sbr!4v1480673284725" width="553" height="367" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="kombi-side clearfix">

               <div class="kombi-desc">
                  {{ Html::image('assets/images/kombi.jpg', '', array('class' => 'kombi')) }}
                  <p>Nesse verão a nossa Kombi vai
                      <br> rodar pelos pontos mais agitados
                      <br> do Brasil para eternizar
                      <br> a melhor estação do ano com você.
                      <br> <strong>Quer saber por onde ela vai passar?
                      <br> Dá uma olhada.</strong>
                  </p>

                  <div class="kombi-calendar">
                  <p class="active"> 07/12 <span>Pina, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1247996139637!2d-34.88783198461048!3d-8.088753394176441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f38b35faae5%3A0xf49b97bbd48b9663!2sHaus+%7C+Lajetop+%26+Beergarden!5e0!3m2!1spt-BR!2sbr!4v1480673284725" class="bt_vejamapa">veja o mapa</a></p>
                  <p> 08/12 e 09/12 <span>Boa Viagem, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.734266583387!2d-34.906071984610364!3d-8.128513994148607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1fb57fde8bb1%3A0x5bbc3810408e71b0!2sQuintal+Estelita!5e0!3m2!1spt-BR!2sbr!4v1480673852830" class="bt_vejamapa">veja o mapa</a></p>
                  <p> 10/12 e 11/12 <span>Pina, Recife/PE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.971410715156!2d-34.889486384610294!3d-8.104393194165503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f0dadaca23f%3A0x12e6fe35800eeef6!2sCervejaria+Alphaiate!5e0!3m2!1spt-BR!2sbr!4v1480673915009" class="bt_vejamapa">veja o mapa</a></p>
                  <p> 15/12 e 16/12 <span>Manaira, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.16096848944!2d-34.82919958461523!3d-7.107336394867437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd18671d5f51%3A0x5ff948306e4e73d9!2sThe+W+Restaurante!5e0!3m2!1spt-BR!2sbr!4v1480673987403" class="bt_vejamapa">veja o mapa</a></p>
                  <p> 17/12 e 18/12 <span>Cabedelo, João Pessoa/PB</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.829758578746!2d-34.83229828461556!3d-7.029287194922634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acde44c582b275%3A0x7f756be4d16d6036!2sLovina!5e0!3m2!1spt-BR!2sbr!4v1480674085841" class="bt_vejamapa">veja o mapa</a></p>
              </div>
              </div>


            </div>




        </section>
<section class="step-09 clearfix" id="endlesssummer">
                {{ Html::image('assets/images/gelo1.png', '', array('class' => 'gelo hidden-xs', 'id' => 'gelo')) }}
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
            <div class="mural clearfix">
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9Xv06h55A/"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/15035024_1861754220748848_3171278515630768128_n.jpg?ig_cache_key=MTM4NjM2ODcwMjAwMTY4NDAzMg%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9VSQ6Dl8I/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/14488366_1105184499598202_6753518962639634432_n.jpg?ig_cache_key=MTM4NjM1Nzg3NDM4MTE4NDc3Ng%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BMxeJz5g4ah/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14596721_551696518358978_2308530799747530752_n.jpg?ig_cache_key=MTM4MzAxOTE3NjE3NTgzMDY4OQ%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9VkvUAvD8/""><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15043968_135190050291188_9118560493936574464_n.jpg?ig_cache_key=MTM4NjM1OTE0Mzk3OTQ3OTI5Mg%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9WI0jgs5V/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15048135_1855332521378823_2793828869738594304_n.jpg?ig_cache_key=MTM4NjM2MTYyMzUwOTM4ODg4NQ%3D%3D.2);"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9iCsdhKAc/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14449119_1152950264759907_1169208755032686592_n.jpg?ig_cache_key=MTM4NjQxMzk3OTA2MDE4MzA2OA%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BNwHSWRlhjp/"><img src="https://scontent-gru2-1.cdninstagram.com/t51.2885-15/e35/15034563_349106235461087_5810160899658350592_n.jpg?ig_cache_key=MTQwMDY1MTUzMTMwNTc1MjgwOQ%3D%3D.22"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9V0DkBSiT/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15099503_161807730953219_1303356638274519040_n.jpg?ig_cache_key=MTM4NjM2MDE5NjUxNTA0NzU3MQ%3D%3D.2"></a>
                  </div>
                                    <div class="insta">
                      <a target="_blank" href="https://www.instagram.com/p/BM9WmKLhlBI/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15048015_198403187280821_4495248222377213952_n.jpg?ig_cache_key=MTM4NjM2MzYzOTU5NDExMTA0OA%3D%3D.2"></a>
                  </div>
                            </div>
                  {{ Html::image('assets/images/laranja.png', '', array('class' => 'laranja2', 'id' => 'laranja2')) }}
        </section>
    </div>
@endsection
