<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>COGNITA</title>
       <!-- <base href="http://localhost/cognita/"/>   -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="MobileOptimized" content="width"/>
	<meta name="HandheldFriendly" content="true"/>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="theme-color" content="#000"/>
	<link rel="apple-touch-icon" href="img/favicon.png"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="MSC Advogados"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="blue-translucent"/>
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png"/>
	<meta name="msapplication-TileImage" content="img/favicon.png"/>
    <meta name="msapplication-TileColor" content="#000"/>
    
	<meta name="description" content="MSC Advogados"/>
	<meta name="keywords" content="MSC Advogados"/>

    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700" rel="stylesheet"/> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet"> 
	<link href="css/cognita.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    
      //  $('.header_menu a[href^="#"]').on('click', function(e) {
	//e.preventDefault();
	//var id = $(this).attr('href'),
			//targetOffset = $(id).offset().top;
			
	//$('html, body').animate({ 
		//scrollTop: targetOffset - 100
	//}, 500);
//});
        
        
        
       const menuItems = document.querySelectorAll('.header_menu a[href^="#"]');

function getScrollTopByHref(element) {
	const id = element.getAttribute('href');
	return document.querySelector(id).offsetTop;
}

function scrollToPosition(to) {
  
  smoothScrollTo(0, to);
}

function scrollToIdOnClick(event) {
	event.preventDefault();
	const to = getScrollTopByHref(event.currentTarget)- 80;
	scrollToPosition(to);
}

menuItems.forEach(item => {
	item.addEventListener('click', scrollToIdOnClick);
});


function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 400;

  
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60); 
}; 
        
        
        
        
 
    </script>
</head>
    
    
    
<body>
    <div class="hdr-barraTopo">
    <div class="div-center">
<!--    <i class="hdr-search-icon" data-show-item="hdr-search">&#8981;</i>-->
        <span style="text-align: left; color: #A9A9A9; font-size: 12px; margin-right: 420px">Cognita Assesoria Educacional e Psicopedagógica - Consultor Educacional</span>
        <span class="anumero"><a href="tel:+551155550188" ><span style="vertical-align: 3px; font-size: 12px;">+55 (11) <strong>97015-5320</strong></span></a></span>
        <a href="javascript:;" style="margin-left: 15px;"><span><img src="img/mail.png" class="icones"></span></a>
        <a href="javascript:;"><span><img src="img/in.png" class="icones"></span></a>
        <a href="https://www.facebook.com/msc.sociedade.de.advogados"><span><img src="img/facebook.png" class="icones"></span></a>
    </div>
</div>

<div class="menubg header">
<div class="div-center">
    <nav class="header_menu ">
        <a href="" class="header_logo"><img src="images/Desktop/Logo/P%C3%A1g-%C3%BAnica-Desk.png" class="imglogo" style=" width: 71%;margin-top:1px;margin-right: 70px;"></a>
             <i id="iconemob" class="hdr-menu-icon" data-show-item="hdr-menu">&#9776;</i>

            <ul class="aparecemenu" id="divmenu">
                <li id="pg-home" style="width: 78px; margin-left: 106px; color: #0b2028;"><a href="#">Home</a></li>
                <li id="pg-quemsomos" style="width: 150px; color: #0b2028;"><a href="#quemsomos">Quem Somos</a></li>
                <li id="pg-contato" style="color: #0b2028;"><a href="#nossosservicos">Serviços</a></li>
                <li id="pg-contato" style="width: 85px; color: #0b2028;"><a href="#equipe">Equipe</a></li>
                <li id="pg-contato" style="border-right: none; color: #0b2028;"><a href="#contato">Contato</a></li>
            </ul>
    </nav>
</div>
</div>


