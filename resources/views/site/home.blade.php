@extends('site/master')

@section('content')
    <div class="initial">
        <header>
            <div class="row">
                <h1 class="col-sm-6 logo">Aperol Spritz</h1>
                <nav class="col-sm-6 pull-right">
                    <div class="nav-button pull-right">
                        <div class="hide">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <ul class="no-bullet">
                                <li class="list"><a href="#">APEROL SPRITZ</a></li>
                                <li class="list"><a href="#"> Embaixadores</a></li>
                                <li class="list"><a href="#">FESTAS com aperol</a></li>
                                <li class="list"><a href="#">kombi summer tour</a></li>
                                <li class="list"><a href="#">Post com #ENDLESSSUMMER</a></li>
                            </ul>
                            <div class="col-sm-12 col-lg-4 social-midia">
                                <span class="text-color-orange pull-center">SIGA APEROL</span>
                                <ul class="no-bullet">
                                    <li class="icon-instagram">
                                        <a href="#" target="_blank">Instagram</a>
                                    </li>
                                    <li class="icon-facebook">
                                        <a href="#" target="_blank">Facebook</a>
                                    </li>
                                </ul>
                                <span class="text-color-orange pull-center">#sebebernãodirija</span>
                            </div>
                        </div>
                    </div>
                </nav>
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
        <section class="step-07 clearfix">
            <h2 class="main_tit">FESTAS COM
              <strong>#APEROLSPRITZ</strong></h2>
            <div class="party">
                <h2 class="tit">REVEILON<br>
                  DO GOSTOSO</h2>
                <h4 class="sub_tit">SãO MIGUEL DO GOSTOSO - RN</h4>
                <p>O Reveillon mais Gostoso do Brasil nasce
                    <br> no ano de 2016, em uma das praias mais
                    <br> paradisíacas do nordeste Brasileiro.
                    <br> Serão 5 dias de diversão com muito sol,
                    <br> mar, praia, alegria, esporte
                    <br> e muita azaração
                    <a href="#" class="bt_oevento">O EVENTO</a></p>
            </div>
            <div class="party-calendar">
                <h3 class="tit">FESTAS</h3>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
                <a href="#">31/12 <span>Mareh-Cumuruxatiba/BA</span></a>
            </div>
        </section>
        <section class="step-08">
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
            <div class="kombi-calendar">
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
                <p> 31/12 <span>Mareh-Cumuruxatiba/BA</span><a href="#" class="bt_vejamapa">veja o mapa</a></p>
            </div>
        </section>
        <section class="step-09">
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
        </section>
    </div>
@endsection
