
<h3>Formas de pagamento</h3>

<!--INICIO CODIGO PAGSEGURO -->
<a href = 'https://pagseguro.uol.com.br' target = '_blank'><img alt = 'Logotipos de meios de pagamento do PagSeguro' src = 'https://p.simg.uol.com.br/out/pagseguro/i/banners/pagamento/todos_animado_125_150.gif' title = 'Este site aceita pagamentos com Visa, MasterCard, Diners, American Express, Hipercard, Aura, Elo, PLENOCard, PersonalCard, BrasilCard, FORTBRASIL, Cabal, Bradesco, Itaú, Banco do Brasil, Banrisul, Banco HSBC, Oi Paggo, saldo em conta PagSeguro e boleto.' border = '0'></a>
<!--FINAL CODIGO PAGSEGURO -->
<img src = 'images/boleto.png' width = '80' height = '51' alt = 'Pague no boleto bradesco' />
<!--<object type = 'application/x-shockwave-flash' data = 'https://a248.e.akamai.net/f/248/96284/12h/www.bcash.com.br/webroot/banners/site/parcele/parcele_125x125.swf?varnum=12' width = '125' height = '125'><param name = 'movie' value = 'https://a248.e.akamai.net/f/248/96284/12h/www.bcash.com.br/webroot/banners/site/parcele/parcele_125x125.swf?varnum=12' /><param name = 'wmode' value = 'transparent'/></object> -->
<img src = 'images/entrega_correios.png' width = '116' height = '76' alt = 'Entrega com correios' />
<img src = 'images/compra_segura.png' width = '100' height = '102' alt = 'Compra segura' />
</div>
</div>
</div>

<script type = "text/javascript">
    var pagina_atual = "carrinho";
    var retiradaNoLocal = false;
</script>
<script src="js/jquery.maskedinput.js?1352918249" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.validate.js?1352918250"></script>
<script src="js/todos_modelos.js?1365004317" type="text/javascript"></script>
<script type="text/javascript" src="js/modelo3/geral.js?1352918254"></script>
<script type="text/javascript">
    $(function () {
        MudaValorCaptura();
        $("input[name=formaPagamento]").change(function () {
            MudaValorCaptura()
        });
        $("input[name=formaPagamento]").click(function () {
            MudaValorCaptura()
        });
        function MudaValorCaptura() {
            var ValorRadio;
            $('input[name=formaPagamento]').each(function () {
                if ($(this).is(':checked'))
                    ValorRadio = $(this).val();
            });
            if (ValorRadio == 'A') {
                $("#indicadorAutorizacao").attr('value', '2');//autenticada e nao autenticada
                $("#mastercard").remove();
                $("#elo").remove();
                $("#diners").remove();
            } else {
                $("#indicadorAutorizacao").attr('value', '');
                $('option', "#codigoBandeira").remove();
                $('#codigoBandeira').append('<option value="" >Selecione</option>');
                $('#codigoBandeira').append('<option value="visa" id="visa">Visa</option>');
                $('#codigoBandeira').append('<option value="mastercard" id="mastercard">Master Card</option>');
                $('#codigoBandeira').append('<option value="diners" id="diners">Diners</option>');
                $('#codigoBandeira').append('<option value="elo" id="elo">Elo</option>');
            }
        }
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-25697048-47']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script></body>
</html>

<?php
>


<?/php>