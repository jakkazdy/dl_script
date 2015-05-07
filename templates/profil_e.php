<div class="divinfo">
    <div class="divinfotext">Przed aktualizacją danych dokładnie sprawdź ich poprawność.</div>
</div>
      <div class="header">
        <h1 class="h1">Zmiana danych&nbsp;</h1>
      </div>
      <div class="w-row wykazrow">
        <div class="w-col w-col-4 col1">
          <p class="divinfotext">Po zmianie danych przez chwile możesz mieć zablokowaną możliwość wysyłania paczek.
            <br>Spowodowane to będzie aktualizacją bazy dla twojego regionu.
            <br>
            <br>Pamiętaj aby podawać zawsze poprawny kod pocztowy, inaczej niemożliwe będzie przedstawienie prawidłowego cennika dla twojego regionu.</p>
        </div>
        <div class="w-col w-col-8 col2 formcol">
          <div class="w-form">
            <form class="w-clearfix" action="<?=seo_url(['url'=>'ustawienia_e','int'=>1]);?>" method="POST">
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="name">Kod pocztowy:</label>
                </div>
                <div class="w-col w-col-6 col2">
                    <input type="hidden" name="send" value="edit_profil">
                  <input class="w-input inputform" type="text" value="<?=$user_date['postcode'];?>" placeholder="00-000" name="postcode" data-name="Name">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Miasto:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" name="city" value="<?=$user_date['city'];?>" type="text" placeholder="Kraków">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Ulica i numer:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" type="text" value="<?=$user_date['street'];?>" placeholder="ul. Krakowska 12" name="street">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Telefon:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" type="text" value="<?=$user_date['nr_kom'];?>" placeholder="000-000-000" name="nr_kom">
                </div>
              </div>
              <input class="w-button buttonsend sendpack" type="submit" value="Zmień dane">
            </form>
          </div>
        </div>
      </div>

