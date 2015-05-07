    <div class="divinfo">
        <div class="divinfotext">Witaj w rejestracji! Aby zarejestrować się jako firma <a href="<?=seo_url(['url'=>'register_b2b','int'=>1]);?>">przejdź tutaj</a>.&nbsp;</div>
    </div>
    <div class="w-container conform">
      <div class="divlogin">
        <div class="header">
          <h1 class="h1 h1a">Rejestracja</h1>
        </div>
        <div class="w-form">
            <form class="formspace"action="<?=seo_url(['url'=>'register','int'=>1]);?>" method="POST" >
            <input type="hidden" name="send" value="register"/>
            <label class="namelabel formwidth" for="name">Imię i nazwisko:</label>
            <input class="w-input inputform" id="name" type="text" placeholder="Jan Nowak" name="name" data-name="Name">
            <label class="namelabel formwidth" for="email">Adres email:</label>
            <input class="w-input inputform" id="name" type="email" placeholder="adres@dostawylokalne.pl" name="email" required="required">
            <label class="namelabel formwidth" for="postcode">Kod pocztowy:</label>
            <input class="w-input inputform" id="name-8" type="text" placeholder="00-000" name="postcode" data-name="Kod pocztowy">
            <label class="namelabel formwidth" for="field">Skąd o nas wiesz:</label>
            <select class="w-select inputform" id="field" name="field">
              <option value="">Wybierz...</option>
              <option value="f1">Od znajomych</option>
              <option value="f2">Z reklamy na mieście</option>
              <option value="f3">Z reklamy w internecie</option>
              <option value="f4">Z youtube.com</option>
              <option value="f5">Inne źródło</option>
            <input class="w-button buttonsend" name="submitb2b" type="submit" value="Zarejestruj firmę" data-wait="Trwa wysyłanie..." wait="Trwa wysyłanie...">
            <input class="w-button buttonsend" name="submit" type="submit" value="Zarejestruj się" data-wait="Trwa wysyłanie..." wait="Trwa wysyłanie...">
            
            </form>
        </div>
        <div class="divinfotext">Zapomniałeś hasła? Przypomnij!&nbsp;&nbsp;–&nbsp;&nbsp;Nie masz konta? Zarejestruj się!</div>
      </div>
    </div>
