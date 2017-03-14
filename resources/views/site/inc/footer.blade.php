    <footer>

            {{ Html::image('assets/images/logo_aperol.png', '', array('class' => 'logo', 'id' => 'logofooter')) }}
            <div class="col-xs-12 col-lg-4 text-center contact">
                <span class="text-color-orange">
                  SAC: Tel: <a href="tel:08007737599">0800 7737599</a>
                  e-mail: <a href="mailto:camparibrasil@campari.com" target="_blank">camparibrasil@campari.com</a>
                </span>
                <span class="text-color-orange highlight">SE BEBER, NÃO DIRIJA. NÃO COMPARTILHE ESSE CONTEÚDO COM MENORES DE 18 ANOS.<br>
                Conteúdo destinado apenas a maiores de 18 anos. Conteúdo impróprio pode ser removido.</span>
                </div>
            <div class="col-12 col-lg-4 social-midia">
                <span class="text-color-orange">SIGA APEROL</span>
                <ul class="no-bullet">
                    <li class="icon-instagram">
                        <a href="https://www.instagram.com/APEROLSPRITZBRASIL/" target="_blank">Instagram</a>
                    </li>
                    <li class="icon-facebook">
                        <a href="https://www.facebook.com/aperolspritz.bra/?fref=ts" target="_blank">Facebook</a>
                    </li>
                </ul>
            </div>

    </footer>

  	<script type="text/javascript">
        var baseUrl = '{{ route("home") }}';
    </script>
    {{ HTML::script('/assets/site/js/app.js') }}
</body>

</html>
