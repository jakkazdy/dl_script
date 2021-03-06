


            
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Mar 25 2015 22:29:45 GMT+0000 (UTC) -->
<html data-wf-site="550b264242dd862c6ca4982b" data-wf-page="550b4541702f83b966563088">
<head>
  <meta charset="utf-8">
  <title>DostawyLokalne.pl</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/dostawylokalne.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<body>
  <div class="w-section w-clearfix">
    <div class="menu">
      <ul class="menulist">
        <li class="mlogoimg"><img class="logoimg" src="images/logo.png" alt="550b2acb5b7ee5ba660e4847_logo.png">
        </li>
        <li class="mlogotext"><img class="imgsmart" src="images/logotyp.png" width="263" alt="550b3e3e836b5b2f6c2ce086_logotyp.png">
        </li>
        <li class="menufree"></li>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'index', 'int'=>1]);?>">Strona główna</a>
        </li>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'pack_send', 'int'=>1]);?>">Wyślij paczke</a>
        </li>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'pack_info', 'int'=>1]);?>">Zarządzaj paczkami</a>
        </li>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'pack_search', 'int'=>1]);?>#">Sprawdź paczke</a>
        </li>
        <li class="menuspace"></li>
        <?php
            if($U->level==2){
        ?>
        
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'ustawienia_dostaw', 'int'=>1]);?>">Obszar dostaw</a>
        </li>
        <?php
            }
        ?>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'ustawienia', 'int'=>1]);?>">Ustawienia</a>
        </li>
        <li class="menubutton"><a class="amenubutton" href="<?=seo_url(['url'=>'logout', 'int'=>1]);?>">Wyloguj się</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="w-section smartmenu">
    <div class="w-nav" data-collapse="tiny" data-animation="default" data-duration="400" data-contain="1">
      <div class="w-container connavbar">
        <a class="w-nav-brand" href="#"><img class="smartlogo" src="images/logotyp.png" alt="550b3e3e836b5b2f6c2ce086_logotyp.png">
        </a>
        <nav class="w-nav-menu" role="navigation">
            <a class="w-nav-link smartmenuli" href="#">Strona główna</a>
            <a class="w-nav-link smartmenuli" href="#">Wyslij paczkę</a>
            <a class="w-nav-link smartmenuli" href="#">Zarządzaj paczkami</a>
            <a class="w-nav-link smartmenuli" href="#">Sprawdź paczkę</a>
            <a class="w-nav-link smartmenuli" href="#">Panel Klienta</a>
            <a class="w-nav-link smartmenuli" href="#">Ustawienia</a>
            <a class="w-nav-link smartmenuli" href="#">Wyloguj się</a>
        </nav>
        <div class="w-nav-button smartnavbutton">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>