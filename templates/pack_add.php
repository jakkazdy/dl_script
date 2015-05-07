
    <div class="divinfo">
        <div class="divinfotext">Zawsze sprawdzaj wpisany przez Ciebie kodu pocztowego!</div>
      </div>
      <div class="header">
        <h1 class="h1">Wyślij przesyłkę&nbsp;</h1>
      </div>
      <div class="w-row wykazrow">
        <div class="w-col w-col-4 col1">
          <p class="divinfotext">Koszt wysyłki zależy od firm kurierskich. W twoim rejonie koszt dostawy waha się od 5 zł do 15 zł.
            <br>
            <br>Aby przekazać koszt wysyłki wystarczy wpisać swój kod pocztowy i kod pocztowy klienta.
            <br>Możesz skorzystać z naszego API.
            <br>Więcej możesz poczytać w zakładce dla sklepów.
            <br>
            <br>Pamiętaj ze wysyłki poza obszar miasta/gminy będzie dłuższa niż 1 godzina a ceny wysyłki zaczynają si od 15 złotych.
            <br>
            <br>Dokładny cennik przygotowany dla twojego regionu znajdziesz w zakładce Cennik.</p>
        </div>
        <div class="w-col w-col-8 col2 formcol">
          <div class="w-form">
            <form class="w-clearfix" action="<?=seo_url(['url'=>'pack_send', 'int'=>1]);?>" method="post">
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="name">Imię i nazwisko:</label>
                </div>
                <div class="w-col w-col-6 col2">
                    <input type="hidden" name="send" value="pack_send">
                  <input class="w-input inputform" id="name" type="text" placeholder="Jan Kowalski" name="DAname" data-name="Name">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Adres email:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="email-8" name="DAemail" type="email" placeholder="adres@dostawylokalne.pl" name="email-8" data-name="Email 8" required="required">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Nazwa Firmy:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="name-38" type="text" placeholder="Niewymagane" name="DAname_corp" data-name="Name 38">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Numer telefonu:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="name-33" type="text" placeholder="000-000-000" name="DAnr_kom" data-name="Name 33">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Adres:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="name-28" type="text" placeholder="ul. Krakowska 12" name="DAstreet" data-name="Name 28">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Kod pocztowy:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="name-23" type="text" placeholder="00-000" name="DApostcode" data-name="Name 23">
                </div>
              </div>
              <div class="w-row">
                <div class="w-col w-col-6 col2">
                  <label class="namelabel sendpack" for="email">Miasto:</label>
                </div>
                <div class="w-col w-col-6 col2">
                  <input class="w-input inputform" id="name-12" type="text" placeholder="Kraków" name="DAcity" data-name="Name 12">
                </div>
              </div>
              <input class="w-button buttonsend sendpack" name="submit2" type="submit" value="Wyślij paczkę" data-wait="Please wait...">
              <input class="w-button buttonsend sendpack" name="submit" type="submit" value="Zaplanuj wysyłkę" data-wait="Please wait...">
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
      </div>
