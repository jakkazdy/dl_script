<span style="color:white;"><br /><br /><?php

echo''
. 'Index:<br/>'
        . '<a href="index.php?url=index">Index</a><br/>'
        . '<a href="index.php?url=login">Logowanie</a><br/>'
        . '<a href="index.php?url=logout">Wyloguj</a><br/>'
        . '<a href="index.php?url=register">Rejestracja</a><br/>'
        . 'USER class==1'
        . '<a href="index.php?url=profil">Profil</a><br/>'
        . '<a href="index.php?url=profil_e">Edytuj profil</a><br/>'
        . '<a href="index.php?url=profil_h">Zmiana hasła</a><br/>'
        
        . 'USER==1 OR USER==2'
        . '<a href="index.php?url=pack_send">PACK add/send</a><br/>'
        . '<a href="index.php?url=pack_info">PACK info</a><br/>'
        . '<a href="index.php?url=pack_close">PACK close</a><br/>';

echo'$_SESSION:</br>';
echo'NowyKod';
print_r($_SESSION);
echo'</br>';
echo'$view:</br>';
print_r($view);
echo'</br>';
echo'$p_post:</br>';
print_r($p_post);
echo'</br>';echo'</br>';
?></span>
<h1>Myśle że ten znak się przyda - a tutaj zmiana na 1001</h1>