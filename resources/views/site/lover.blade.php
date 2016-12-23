@extends('site/master')

@section('content')
    <div class="content clearfix">
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
            <p class="desc_details">O Raul é fotógrafo, mas além de tirar umas
              fotos incríveis, vive as festas e lugares mais <br>
              surreais que você pode imaginar. Ele sabe bem<br>
              como transformar tudo em verão e marcar <br>
              a estação pra sempre, por isso ele está aqui<br>
              com a gente, dá uma olhada.<br>

                <!-- <a href="#" class="bt_fechar" id="fechar_raul">fechar</a> -->
            </p>
        </section>
        
    </div>
@endsection
