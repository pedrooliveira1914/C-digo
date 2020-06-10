$(document).ready(function(){
   $(window).on('scroll', function(){
        if( $(this).scrollTop() >= 120 ){
            $('.header').addClass('fixo');
        }
       else{
           $('.header').removeClass('fixo');
       }
   }); 

   $("#video").click(function(){
       $("#divideo").hide();
       $("#videohide").show();
   });

   

   $(".plusfaq").click(function(){
         var id = $(this).attr('id');
         var href =  $(this).attr('href');
         var css = $('.'+id).css("display");

         if(css == 'none')
         {
            $('.'+id).show('slow');
            $('#'+id).html('-')
         }else{
            $('.'+id).hide('slow');
            $('#'+id).html('+')
         }

   });

    $(".clickproduto").click(function(){
         var id = $(this).attr('id');
         var css = $('.'+id).css("display");

         if(css == 'none')
         {
            $('.'+id).show('slow');
         }else{
            $('.'+id).hide('slow');
         }

   });

      $("#bannerclick").click(function(){
            window.location = "produtos.php";
        });

    /*Menu:*/
$('.hdr-menu-icon').one('click', showMenu);

 $('#divmenu').addClass('aparecemenu');

function showMenu(e){
    e.preventDefault();
    e.stopPropagation();
    $('#divmenu').show('slow');
    $('body').one('click', hideMenu);
}

function hideMenu(e){
   $('#divmenu').hide('slow');
    $('.hdr-menu-icon').one('click', showMenu);
}

});

/*****Rolagem Animada:*****/
RolagemAnimada = function(){
    $('#menu-servicos .ancora').on('click', function(evento){
        evento.preventDefault();
        window.history.pushState({url: '' + $(this).attr('href') + ''}, 'IMA ECO: ' + $(this).attr('title') , $(this).attr('href'));
        $('html, body').animate( {scrollTop:$(this.hash).offset().top}, 1000 );
    });
};

MenuServicoFixo = function(){
    menuServicos = document.getElementById('menu-servicos');
    menuServicosArray = document.querySelectorAll('#menu-servicos .ancora');
    textosServicosArray = new Array();
    for(i=0; i<menuServicosArray.length; i++){
        var elemento = document.getElementById( '' + menuServicosArray[i].getAttribute('href').replace('#', '') );
        var dTopo = 0;
        do{
            dTopo += elemento.offsetTop  || 0;
            elemento = elemento.offsetParent;
        }while(elemento);
        textosServicosArray[i] = dTopo;
    }

    window.onscroll = function(){
        if( this.scrollY >= 500 ){
            document.getElementById('menu-servicos').style.position = 'fixed';
			document.getElementById('menu-servicos').style.margin = '35px 35px';
        }
        else if( this.scrollY < 500 ){
            document.getElementById('menu-servicos').style.position = 'absolute';
			document.getElementById('menu-servicos').style.margin = '12px 35px';
        }
        for(i = menuServicosArray.length-1; i>=0; i--){
            if( textosServicosArray[i] <= window.scrollY ){
                $('#menu-servicos a hr').removeClass('menuservico');
                menuServicosArray[i].querySelector('hr').classList.add('menuservico');
                break;
            }
        }
    };
};