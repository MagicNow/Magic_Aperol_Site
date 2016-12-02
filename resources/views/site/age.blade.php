@extends('site/master')

@section('content')
    <div class="initial">
        <div class="age-gate">
            <div class="row">
                <h1 class="col-sm-12 logo">Aperol Spritz</h1>
                <h2 class="col-sm-12 text-color-orange">BEM-VINDO</h2>
                <div class="col-sm-12 selection">
                    <p class="col-sm-12">Você tem mais<br> de 18 anos?</p>
                    <a href="#" id="sim" class="button--orange">
                        SIM <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="#" id="nao" class="button--orange">
                        NÃO <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="col-sm-12" id="nope">
                    <p class="col-sm-12">Acesso não autorizado</p>

                </div>
            </div>
        </div>
    </div>
@endsection
