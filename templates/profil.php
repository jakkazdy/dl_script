<div class="divinfo">
    <div class="divinfotext">Jesteś w ustawieniach swojego konta. Pamiętaj aby twoje dane były aktualne.</div>
</div>
      <div class="w-row row">
        <div class="w-col w-col-6 col1">
          <div class="header">
            <h1 class="h1">Dane osobowe</h1>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Imię i nazwisko:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$user_date['name'];?></p>
            </div>
          </div>
            <?php
            if($U->level==2){
                ?>
            <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Nzwa firmy:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$user_date['nameb2b'];?></p>
            </div>
          </div><div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">NIP:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$user_date['nipb2b'];?></p>
            </div>
          </div>
            <?php
            }
            ?>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Adres:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2">
                <?php
                    if(!empty($user_date['street'])){
                        echo $user_date['street'];
                    }else{
                        echo 'Uzupełnij adres!';
                    }
                ?></p>
            </div>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Numer telefonu:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2">
                <?php
                    if(!empty($user_date['nr_kom'])){
                        echo $user_date['nr_kom'];
                    }else{
                        echo 'Uzupełnij numer telefonu!';
                    }
                ?></p>
            </div>
          </div>
          <div class="w-row rawstat">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Kod pocztowy:&nbsp;</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$user_date['postcode'];?></p>
            </div>
          </div>

          <p class="ptextcol1"><a href="<?=seo_url(['url'=>'ustawienia_e','int'=>1]);?>" class="link"><?php if(empty($user_date['street'])){echo'Dodaj dane adresowe';}else{echo'Edytuj dane adresowe';} ?></a></p>
          <p class="ptextcol1"><a href="<?=seo_url(['url'=>'ustawienia_h','int'=>1]);?>" class="link">Zmiana hasła</a></p>
        </div>
        <div class="w-col w-col-6 col2">
          <div class="header">
            <h1 class="h1">Płatności i faktury </h1>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Dostępne środki:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=($view_user_money['money']-$view_user_money['money_block']);?> zł&nbsp;&nbsp;–&nbsp;&nbsp;<a href="#" class="link">Doładuj konto!</a>
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
            <div class="w-col w-col-6 stat1">
              <p class="ptextcol1">Twoje saldo:</p>
            </div>
            <div class="w-col w-col-6 stat2">
              <p class="ptextcol1 stat2"><?=$view_user_money['money'];?> zł&nbsp;&nbsp;–&nbsp;&nbsp;<a href="#" class="link">Doładuj konto!</a>
              </p>
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