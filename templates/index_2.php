
      <div class="divinfo">
        <div class="divinfotext">Cześć! Pamiętaj o uzupełnieniu swojego profilu swoimi danymi co przyśpieszy obsługę twojego konta i zwiększy wygodę.</div>
      </div>
      <div class="w-row row">
        <div class="w-col w-col-6 col1">
          <div class="header">
            <h1 class="h1">Status twoich zamówień</h1>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Zamówienia otwarte:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_stat['in_progress'];?></p>
            </div>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Zamówienia zamknięte:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_stat['pack_send'];?></p>
            </div>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Zamówienia planowane:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_stat['pending'];?></p>
            </div>
          </div>
          <p class="ptextcol1">Termin płatności za przesyłki to 7 dni od daty jego realizacji.
            <br>Pamiętaj o regularnym zasilaniu konta.</p>
        </div>
        <div class="w-col w-col-6 col2">
          <div class="header">
            <h1 class="h1">Płatności i faktury </h1>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Twoje saldo konta:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_money['money'];?> zł&nbsp;&nbsp;–&nbsp;&nbsp;<a href="#" class="link">Doładuj konto!</a>
              </p>
            </div>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Zaległe płatności:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_money['credits'];?> zł</p>
            </div>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Środki zablokowane:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_money['money_block'];?> zł</p>
            </div>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6 stat1"></div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><a class="link" href="#">Szczegółowe zestawienie</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    

<?php
include('pack_add_CA.php');
?>

<!--
<p><a href="index.php?url=pack_send">Wyślij paczkę</a></p>
<p><a href="index.php?url=pack_info">Zobacz status wysyłek</a></p>
<p><a href="index.php?url=pack_close">Dostarczone paczki</a></p>
-->