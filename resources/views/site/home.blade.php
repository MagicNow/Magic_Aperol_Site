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
        <section class="step step-03">
            <!-- Influencer  -->
            {{ Html::image('assets/images/andy.png', '', array('class' => 'tit')) }}
            <div class="foto">
            {{ Html::image('assets/images/foto_andy.png', '', array('class' => '')) }}
            </div>
            <p class="desc">É só ver as viagens dele que você sente
                <br> mais vontade de viver o verão. 
                <br> Play na trilha do Andy.
                <a href="#" class="bt_mais" id="detalhes_raul">MAIS</a>
            </p>
            <div class="desc_details">O Andy já passou por todos os cantos do mundo e sabe como fazer o verão não ter fim. Enquanto ele mostra o verão dele, você se inspira e eterniza o seu, sem medo de ser feliz.<br>
                <a href="#" class="bt_fechar" id="fechar_raul">fechar</a>
                <div class="insta">
                    <h2>#EndlessSummer</h2>
                    <div class="mural">
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNxcqHUBc3V/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15338534_605755209618859_4063660801481768960_n.jpg?ig_cache_key=MTQwMTAyNjk5ODQ2MTM4NjE5Nw%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNz4HjEBvF0/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15337129_304061466654518_6592449026090598400_n.jpg?ig_cache_key=MTQwMTcxMDcxODMzMTg0MjkzMg%3D%3D.2"></a>
                            </div>
                    
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BLuCz6BBkBJ/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14718292_327121344313030_7998886399887540224_n.jpg?ig_cache_key=MTM2NDA0MDEwMDIyMDM4NzQwMQ%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BN2MVdXBTEf/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15306788_182532032211558_6102819464401649664_n.jpg?ig_cache_key=MTQwMjM2MjU4NTE2NDM2MjAxNQ%3D%3D.2"></a>
                            </div>
                            
                            <div class="imagem big">
                                <a target="_blank" href="https://www.instagram.com/p/BNz4HjEBvF0/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15337129_304061466654518_6592449026090598400_n.jpg?ig_cache_key=MTQwMTcxMDcxODMzMTg0MjkzMg%3D%3D.2"></a>
                            </div>
                    </div>
                    <div class="playlist">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Apakohern%3Aplaylist%3A29V0RIuUOpwlOgIZ8MJ2IC" width="226" height="290" frameborder="0" allowtransparency="true"></iframe>
                        <div class="redes">
                            <a href="">{{ Html::image('assets/images/siga.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/instagram.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/facebook.png', '', array('class' => '')) }}</a>
                        </div>
                    </div>
                </div>
            </div>
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
                <a href="#" class="bt_mais">MAIS</a>
            </p>
            <div class="desc_details">A cool hunter toda colorida sabe bem como fazer um verão ser eterno. Agora ela está com a gente pra mostrar como está sendo o verão dela e te inspirar a eternizar o seu.<br>
                <a href="#" class="bt_fechar" id="fechar_raul">fechar</a>
                <div class="insta">
                    <h2>#EndlessSummer</h2>
                    <div class="mural">
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNsM5Ymg9XE/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15338344_1070818073047913_5976556965021614080_n.jpg?ig_cache_key=MTM5OTU1MDMwNDE4OTY2Njc1Ng%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNXPHHoAMQ7/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15035676_125309227954148_6453861121622278144_n.jpg?ig_cache_key=MTM5MzY0OTA2OTYxNTc5MzIxMQ%3D%3D.2"></a>
                            </div>
                    
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNXOAElgPv6/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15258715_367614400242038_1596692128518373376_n.jpg?ig_cache_key=MTM5MzY0NDE4NzI2OTc5MDcxNA%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNWaOdEgaS-/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14540638_1811763152412680_4169739501486211072_n.jpg?ig_cache_key=MTM5MzQxNjQ3NzIxMzgyODI4Ng%3D%3D.2"></a>
                            </div>
                            
                            <div class="imagem big">
                                <a target="_blank" href="https://www.instagram.com/p/BMo-qmQBwC8/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14606988_265810817150398_3449376479815663616_n.jpg?ig_cache_key=MTM4MDYyODg5MTk2MTg1MjA5Mg%3D%3D.2"></a>
                            </div>
                    </div>
                    <div class="playlist">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Apakohern%3Aplaylist%3A29V0RIuUOpwlOgIZ8MJ2IC" width="226" height="290" frameborder="0" allowtransparency="true"></iframe>
                        <div class="redes">
                            <a href="">{{ Html::image('assets/images/siga.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/instagram.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/facebook.png', '', array('class' => '')) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="step step-05">
            <!-- Influencer  -->
            {{ Html::image('assets/images/andre.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_andre.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Quando você vê o que ele está
                <br> fazendo dá até aquela vontade
                <br> de tentar também. Pra melhorar 
                <br> no calor, tem também a playlist.
                <a href="#" class="bt_mais">MAIS</a>
            </p>
            <div class="desc_details">O carioca viaja o mundo fotografando para as revistas fashion e segue à risca a missão de viver um verão eterno. Dá uma olhada na estação dele e diz se eternizar o seu verão não é uma boa ideia.<br>
                <a href="#" class="bt_fechar" id="fechar_raul">fechar</a>
                <div class="insta">
                    <h2>#EndlessSummer</h2>
                    <div class="mural">
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BJ9UOmOB83V/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14262756_1148773848535358_1180699552_n.jpg?ig_cache_key=MTMzMjMxMDAyODgxMjAxMzAxMw%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BJ8TDjkh1Fo/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14063133_913071248837198_1462068227_n.jpg?ig_cache_key=MTMzMjAyMzM5NzAzMDc3NzE5Mg%3D%3D.2"></a>
                            </div>
                    
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BH-cKl-hRCh/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/13767646_1148944195149430_791593759_n.jpg?ig_cache_key=MTI5NjU5NzYxNjAwMzcxNTIzMw%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BK6oqRgjmMD/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14374007_162860237498548_149776582037209088_n.jpg?ig_cache_key=MTM0OTU2OTg2NTIyOTE2NTMxNQ%3D%3D.2"></a>
                            </div>
                            
                            <div class="imagem big">
                                <a target="_blank" href="https://www.instagram.com/p/BN5DnL9D8Ex/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15403516_178364982631658_5328881819544715264_n.jpg?ig_cache_key=MTQwMzE2ODY0NTkzNzM0ODkxMw%3D%3D.2"></a>
                            </div>
                    </div>
                    <div class="playlist">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Apakohern%3Aplaylist%3A29V0RIuUOpwlOgIZ8MJ2IC" width="226" height="290" frameborder="0" allowtransparency="true"></iframe>
                        <div class="redes">
                            <a href="">{{ Html::image('assets/images/siga.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/instagram.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/facebook.png', '', array('class' => '')) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="step step-06">
            <!-- Influencer  -->
            {{ Html::image('assets/images/luiza.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_luiza.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Ela é uma mistura de viajante com
                <br>fotógrafa fashion. A mistura deu certo
                <br>e tem até trilha sonora.

                <a href="#" class="bt_mais">MAIS</a>
            </p>
            <div class="desc_details">Ela vive o verão dentro e fora da estação. Viaja o mundo inteiro e tira fotos de tirar o fôlego ao mesmo tempo. É só olhar pra Luiza que já dá vontade de viver um verão sem fim, eterno mesmo.<br>
                <a href="#" class="bt_fechar" id="fechar_raul">fechar</a>
                <div class="insta">
                    <h2>#EndlessSummer</h2>
                    <div class="mural">
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BN8E2zRjA92/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15337163_1364038893641353_837648300667568128_n.jpg?ig_cache_key=MTQwNDAxODU0MTkyNTc2NDk4Mg%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNpP3WwjWBr/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14515662_957404211070513_133645668420943872_n.jpg?ig_cache_key=MTM5ODcxODkzMzk4MTAyODQ1OQ%3D%3D.2"></a>
                            </div>
                    
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNm_YUOj5OD/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15276699_813098805510003_7798008090804092928_n.jpg?ig_cache_key=MTM5ODA4MzQ4MjI2MTg4NTgyNw%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNfg-Ypj0BM/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/15337100_1157172181066956_8413150250583195648_n.jpg?ig_cache_key=MTM5NTk3OTQzNDA3MTExMzgwNA%3D%3D.2"></a>
                            </div>
                            
                            <div class="imagem big">
                                <a target="_blank" href="https://www.instagram.com/p/BNCmaR3DUNn/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/e35/14561748_563806120490467_8090315486136369152_n.jpg?ig_cache_key=MTM4Nzg0MDU2NjgzNDU3ODI3OQ%3D%3D.2"></a>
                            </div>
                    </div>
                    <div class="playlist">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Apakohern%3Aplaylist%3A29V0RIuUOpwlOgIZ8MJ2IC" width="226" height="290" frameborder="0" allowtransparency="true"></iframe>
                        <div class="redes">
                            <a href="">{{ Html::image('assets/images/siga.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/instagram.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/facebook.png', '', array('class' => '')) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="step step-10">
            <!-- Influencer  -->
            {{ Html::image('assets/images/summer.png', '', array('class' => 'tit')) }}
              <div class="foto">
            {{ Html::image('assets/images/foto_summer.png', '', array('class' => '')) }}
            </div>
            <p class="desc">Se o lugar tem o espírito do verão,
                <br>ele está lá. Ouça a playlist que nosso
                <br>caçador fez pra você.

                <a href="#" class="bt_mais">MAIS</a>
            </p>
            <div class="desc_details">O The Summer Hunter é um perfil caçador de lugares com mais cara de verão possível. Já que é pra te ajudar a eternizar o seu verão, nada melhor que um especialista no assunto.<br>
                <a href="#" class="bt_fechar" id="fechar_raul">fechar</a>
                <div class="insta">
                    <h2>#EndlessSummer</h2>
                    <div class="mural">
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNb3EpNj0q_/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/s750x750/sh0.08/e35/15275702_334684303578231_3818140323150823424_n.jpg?ig_cache_key=MTM5NDk1MDcyMTI4ODIyNzUxOQ%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BNX-iRIjKuC/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/s750x750/sh0.08/e35/15099449_740504849436460_6125359160713281536_n.jpg?ig_cache_key=MTM5Mzg1NzY0MzQzNzQwMzAxMA%3D%3D.2"></a>
                            </div>
                    
                            <div class="imagem">
                                <a target="_blank" href="https://www.instagram.com/p/BNOrSEQja4n/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/s750x750/sh0.08/e35/15099611_1804824356426292_5210320699037581312_n.jpg?ig_cache_key=MTM5MTIzOTY5MjQyNzMwODU4Mw%3D%3D.2"></a>
                                <a target="_blank" href="https://www.instagram.com/p/BMUvk2njk2Y/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/s750x750/sh0.08/e35/14677358_1634227873543250_3509497230161608704_n.jpg?ig_cache_key=MTM3NDkzMzAyNjk4NzcyNDE4NA%3D%3D.2"></a>
                            </div>
                            
                            <div class="imagem big">
                                <a target="_blank" href="https://www.instagram.com/p/BLI1qwijkTu/"><img src="https://instagram.fpoa4-1.fna.fbcdn.net/t51.2885-15/s750x750/sh0.08/e35/14592165_1123629547685853_4286867631924838400_n.jpg?ig_cache_key=MTM1MzU2NzcyMjgyNzMwMjEyNg%3D%3D.2"></a>
                            </div>
                    </div>
                    <div class="playlist">
                        <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Apakohern%3Aplaylist%3A29V0RIuUOpwlOgIZ8MJ2IC" width="226" height="290" frameborder="0" allowtransparency="true"></iframe>
                        <div class="redes">
                            <a href="">{{ Html::image('assets/images/siga.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/instagram.png', '', array('class' => '')) }}</a>
                            <a href="">{{ Html::image('assets/images/facebook.png', '', array('class' => '')) }}</a>
                        </div>
                    </div>
                </div>
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
                @foreach ($posts as $post)
                    @if ($post->type === 'image')
                        <div class="insta">
                            <a target="_blank" href="{{ $post->link }}"><img src="{{ $post->image }}" alt="{{ $post->descricao }}"></a>
                        </div>
                    @endif
                @endforeach
            </div>
            <img src="assets/images/laranja.png " class="laranja2 " id="laranja2 " alt=" ">
        </section>
    </div>
@endsection
