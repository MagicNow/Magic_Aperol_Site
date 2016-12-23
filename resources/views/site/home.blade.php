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
                <img src="assets/images/logo_aperol.png" class="logo" id="logo" alt="">
                <img src="assets/images/taca.png" class="" id="taca" alt="">
                <button id="bt-menu" class="c-hamburger c-hamburger--htx">
                    <span>toggle menu</span>
                </button>
                <img src="assets/images/endless_summer.png" class="endless_summer" alt="">
                <div class="text-head-wrapper">
                    <div class="text-head">
                        <h2>COMO ETERNIZAR <br>O SEU VERÃO</h2>
                        <p><span class="strike">Verão é olho no olho, muita água,
                              <br> esquecer o caminho de volta pra casa,
                              <br> sorrir com quase nada, amar todo
                              <br> mundo com mais calor.<strong>
                              <br> Aqui é o lugar pra você fazer</span>
                            <br> a estação não ter fim.</strong>
                        </p>
                    </div>
                    <img src="assets/images/aperol_.png" class="" id="aperol" alt="">
                </div>
                <div class="col-sm-12 text-center scroll-down">
                    <span> SCROLL DOWN <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </div>
            </div>
        </header>
    </div>
    <div class="lovers">
        <section class="step step-03">
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
    </div>
    <div class="content clearfix">
        <section class="step-02 clearfix">
            <img src="assets/images/laranja.png" class="laranja" id="laranja" alt="">
            <div class="col-md-02 text-doit hidden-xs">
                <h3><span class="strike">Em uma taça<br>
                    com gelo<br>
                    e uma fatia<br>
                    de laranja</span><br>
                    coloque:
                  </h3>
            </div>
            <img src="assets/images/facaoseu.png" class="doit" id="doit" alt="">
            <img src="assets/images/gelo1.png" class="gelo1" id="gelo1" alt="">
            <img src="assets/images/gelo2.png" class="gelo2" id="gelo2" alt="">
            <img src="assets/images/taca.png" class="taca2" id="taca2" alt="">
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
                <div class="part2"><span>2</span> partes de
                    <br> Aperol</div>
                <div class="part1"><span>1</span> parte de água
                    <br> com gás</div>
            </div>
        </section>
        <section class="step-07 clearfix" id="festascomaperol">
            <h2 class="main_tit">FESTAS COM
              <strong>#APEROLSPRITZ</strong></h2>
            <img src="assets/images/ondas.png" class="img-festas-onda img-responsive" alt="">
            <img src="assets/images/foto_Festas.jpg" class="img-festas img-responsive" alt="">
            <div class="party">
                <h2 class="tit">Reveillon<br>
                  DO GOSTOSO <br><span class="sub_tit">SãO MIGUEL DO GOSTOSO - RN</span></h2>
                <p id="partyText"><span class="strike">O Reveillon mais Gostoso do Brasil nasce
                    <br> no ano de 2016, em uma das praias mais
                    <br> paradisíacas do nordeste Brasileiro.
                    <br> Serão 5 dias de diversão com muito sol,
                    <br> mar, praia, alegria, esporte</span>
                    <br> e muita azaração
                </p>
                <a href="#festascomaperol" class="bt_oevento">O EVENTO</a>
            </div>
            <div class="party-calendar">
                <h3 class="tit">FESTAS</h3>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span> Temporada Reveillon Tikal 2017 - Maraú /BA</span></a>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span>Reveillon do Gostoso - São Miguel do Gostoso/RN</span></a>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span>Reveillon MAREH NYE 2017 - Cumuruxatiba / BA</span></a>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span>Reveillon Taípe</span></a>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span>Réveillon Vai Tapajós 2017 - Alter Do Chão / AM</span></a>
                <a href="#" target="_blank" class="bt_detalhes_calendar"><span>Réveillon Cheers - Rio de Janeiro/ RJ</span></a>
                <p class="bt_detalhes_calendar">e muito mais...</p>
            </div>
        </section>
        <section class="step-08 clearfix" id="kombisummertour">
            <h2 class="main_tit">KOMBI
              <strong>SUMMER TOUR</strong></h2>
            <div class="mapas clearfix">
                <iframe id="mapa" class="active" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254303.97497739337!2d-35.870630494803336!3d-5.183846540103131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b40c17ac8d2db5%3A0x9d130d6f66deb617!2sS%C3%A3o+Miguel+do+Gostoso+-+RN!5e0!3m2!1spt-BR!2sbr!4v1482435332480" width="553" height="367" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="kombi-side clearfix">
                <div class="kombi-desc">
                    <img src="assets/images/kombi.jpg" class="kombi" alt="">
                    <p><span class="strike">Nesse verão a nossa Kombi vai
                      <br> rodar pelos pontos mais agitados
                      <br> do Brasil para eternizar
                      <br> a melhor estação do ano com você.</span>
                        <br> <span class="strike"><strong>Quer saber por onde ela vai passar?</strong></span>
                        <br> <strong>Dá uma olhada.</strong>
                    </p>
                    <div class="kombi-calendar">
                        <p class="active"> 23/12 a 01/01 <span>São Miguel do Gostoso</span>
                        <a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254303.97497739337!2d-35.870630494803336!3d-5.183846540103131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b40c17ac8d2db5%3A0x9d130d6f66deb617!2sS%C3%A3o+Miguel+do+Gostoso+-+RN!5e0!3m2!1spt-BR!2sbr!4v1482435332480" class="bt_vejamapa">veja o mapa</a></p>
                        <p> 05/01 <span>Kult Bar - Fortaleza/CE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3707396608465!2d-38.51169548524096!3d-3.729098897286884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7485cf63a62af%3A0x9b64fb9a1e6da86b!2sKult+Bar!5e0!3m2!1spt-BR!2sbr!4v1482435389693" class="bt_vejamapa">veja o mapa</a></p>
                        <p> 06/01 <span> Órbita Bar - Fortaleza/CE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.4037507244143!2d-38.52139868524111!3d-3.7218029972921776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74848d9289df5%3A0x24253774d75725fb!2s%C3%93rbita+Bar!5e0!3m2!1spt-BR!2sbr!4v1482435424919" class="bt_vejamapa">veja o mapa</a></p>
                        <p> 07/01 a 08/01<span>Guarderia Brasil - Fortaleza/CE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3042451459005!2d-38.45240768524095!3d-3.7437519972762763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7465172fc994b%3A0xf55dabc737354a61!2sGuarderia+Brasil!5e0!3m2!1spt-BR!2sbr!4v1482435456647" class="bt_vejamapa">veja o mapa</a></p>
                        <p> 12/01 a 13/01  <span> Colosso Lake Lounge - Fortaleza/CE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1348114839116!2d-38.47184468524094!3d-3.780832997249468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c745eece2c2e0f%3A0x2380683623a21b9c!2sColosso+Lake+Lounge!5e0!3m2!1spt-BR!2sbr!4v1482435498326" class="bt_vejamapa">veja o mapa</a></p>
                        <p> 14/01 a 15/01  <span> Cumbuco Duro Beach - Fortaleza/CE</span><a href="#" data-evento="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15927.317492325812!2d-38.726742!3d-3.626422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c8703a8c3589fc0!2sDuro+Beach+Hotel!5e0!3m2!1spt-BR!2sbr!4v1482435544645" class="bt_vejamapa">veja o mapa</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="step-09 clearfix" id="endlesssummer">
            <img src="assets/images/gelo1.png" class="gelo hidden-xs" id="gelo" alt="">
            <div class="text">
                <h2 class="tit">#Endless<br>
                  summer<br>@aperolspritzbrasil</h2>
                <p><strong class="strike">Já está eternizando o seu
                    <br> verão? Então poste uma
                    <br> foto com <b>#EndlessSummer</b></strong>
                    <br>
                    <span class="strike">que você pode aparecer</span>
                    <br>
                    <span>aqui no mural.</span></p>
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
                    <a target="_blank" href="https://www.instagram.com/p/BM9VkvUAvD8/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15043968_135190050291188_9118560493936574464_n.jpg?ig_cache_key=MTM4NjM1OTE0Mzk3OTQ3OTI5Mg%3D%3D.2 "></a>
                </div>
                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/p/BM9WI0jgs5V/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15048135_1855332521378823_2793828869738594304_n.jpg?ig_cache_key=MTM4NjM2MTYyMzUwOTM4ODg4NQ%3D%3D.2); "></a>
                </div>
                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/p/BM9iCsdhKAc/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14449119_1152950264759907_1169208755032686592_n.jpg?ig_cache_key=MTM4NjQxMzk3OTA2MDE4MzA2OA%3D%3D.2 "></a>
                </div>
                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/p/BNwHSWRlhjp/"><img src="https://scontent-gru2-1.cdninstagram.com/t51.2885-15/e35/15034563_349106235461087_5810160899658350592_n.jpg?ig_cache_key=MTQwMDY1MTUzMTMwNTc1MjgwOQ%3D%3D.22 "></a>
                </div>
                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/p/BM9V0DkBSiT/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15099503_161807730953219_1303356638274519040_n.jpg?ig_cache_key=MTM4NjM2MDE5NjUxNTA0NzU3MQ%3D%3D.2 "></a>
                </div>
                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/p/BM9WmKLhlBI/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15048015_198403187280821_4495248222377213952_n.jpg?ig_cache_key=MTM4NjM2MzYzOTU5NDExMTA0OA%3D%3D.2 "></a>
                </div>
            </div>
            <img src="assets/images/laranja.png " class="laranja2 " id="laranja2 " alt=" ">
        </section>
    </div>
@endsection
