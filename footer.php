
<div class="ftr-fraseWrap" style="background: #0b2028;">
    <div class="div-center">
        <div class="ftr-frase">
            <span class="text">INSCREVA-SE PARA RECEBER NOVIDADES</span>
        </div>
        <div class="ftr-frase2">
            <span class="text"><input type="text" name="" class="newsinput" placeholder="  Nome"></span>
        </div>
        <div class="ftr-frase2">
               <span class="text"><input type="text" name="" class="newsinput" placeholder="  E-mail"></span>
        </div>

        <div class="ftr-frase3">
               <span class="text"><input type="button" name="" class="newsinputbutton" value="Enviar"  style="background: #14565E; border: solid 1px #0b2028;"></span>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<div id="contato" class="ftr-bg" style="background: #14565E;">
    <div class="div-center ftr-wrap">
        <div class="clearfix">
            <div class="ftr-endereco clearfix">
              
               <div class="divfooter lado1">
                    <strong class="titulofooter">ENDEREÇO</strong><br/><br/><br/>
                   <div>
        <hr style="width: 40px; border: solid 2px; color: #FFF; text-align: left; margin-top: -23px; margin-left: -2px; margin-bottom: 19px;"/>
    </div>
                    <a href="representante.php" class="linkfooter">Av. Maracanã, 76 - Jardim Floresta</a><br/>
                    <a href="representante.php" class="linkfooter">CEP: 12956-140 - Atibaia/SP, Brasil  </a><br/><br/>
                 </div>
                <div class="divfooter lado2">
                    <strong class="titulofooter">CONTATO</strong><br/><br/><br/>
                    <div>
        <hr style="width: 40px; border: solid 2px; color: #FFF; text-align: center; margin-top: -23px; margin-left: -2px; margin-bottom: 19px;"/>
    </div>
                   <a href="tel:+551131052697" class="linkfooter"><strong>Telefone:</strong> +55 (11) 97015 -5320</a><br/>
                   <a href="tel:+551131052697" class="linkfooter"><strong>E-mail:</strong>cognita.aep@gmail.com</a><br/><br/>
                </div>
               <div class="divfooter">
                    <strong class="titulofooter">EXPEDIENTE</strong><br/><br/><br/>
                   <div>
        <hr style="width: 40px; border: solid 2px; color: #FFF; text-align: right; margin-top: -23px; margin-left: -2px; margin-bottom: 19px;"/>
    </div>
                     <a href="produtos.php" class="linkfooter"><strong>Segunda á Sexta-feira</strong></a><br/>
                     <a href="produtos.php" class="linkfooter">das 08h ás 22h30.</a><br/><br/>
                   <a href="produtos.php" class="linkfooter"><strong>Sábado:</strong></a><br/>
                     <a href="produtos.php" class="linkfooter">das 09h ás 17h.</a><br/><br/>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="ftr-copyright " style="background: #0b2028;">
       &copy; Copyright 2018 MSC - Todos os direitos reservados.
    </div>
</body>
</html>
    <!--JavaScript:-->
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function(){ 

    var noticia = '<?php echo $_GET['noticia']; ?>';

    if ( noticia != '' )
     {
        $('html, body').animate({ scrollTop: 1500 }, 1000);
     }

   }); 
</script>



