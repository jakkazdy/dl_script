

<div class="divinfo">
    <div class="divinfotext">Zostałeś zarejestrowany, wpisz dwukrotnie hasło które chcesz używać.</div>
</div>
      <div class="header">
        <h1 class="h1">Zapisz swoje hasło&nbsp;</h1>
      </div>
      <div class="w-row wykazrow">
        <div class="w-col w-col-4 col1">
          <p class="divinfotext">Wpisz dwukrotnie unikalne hasło do serwisu DostawyLokalne.pl
            <br><br>W przeciwnym razie twoje hasło zostanie wygenerowane automatycznie i otrzymasz je na adres email.
            <br><br>Pamiętaj aby nikomu nie podawać swojego hasła!
            </p>
        </div>
        <div class="w-col w-col-8 col2 formcol">
          <div class="w-form">
            <form class="w-clearfix" action="<?=seo_url(['url'=>'np2','int'=>1]);?>" method="POST">
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="name">Wpisz hasło:</label>
                </div>
                <div class="w-col w-col-6 col2">
                    <input type="hidden" name="send" value="new_password2"/>
                  <input class="w-input inputform" type="password" placeholder="******" name="p1" data-name="Name">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Powtórz hasło:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" name="p2" type="password" placeholder="******">
                </div>
              </div>
              <input class="w-button buttonsend sendpack" type="submit" value="Zapisz hasło">
            </form>
          </div>
        </div>
      </div>

