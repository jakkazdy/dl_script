
      <div class="divinfo">
        <div class="divinfotext">Cześć! Pamiętaj o uzupełnieniu swojego profilu co przyśpieszy obsługę twojego konta i zwiększy wygodę.</div>
      </div>
      <div class="w-clearfix header">
        <h1 class="h1">Wykaz przesyłek</h1>
        <div class="w-form formfastsearch">
          <form id="email-form" name="email-form" data-name="Email Form">
            <input class="w-input inputform fs" id="name" type="text" placeholder="Wyszukaj przesyłkę" name="name" data-name="Name">
            <input class="w-button button" type="submit" value="Szukaj" data-wait="Wysyłanie..." wait="Wysyłanie...">
          </form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form :(</p>
          </div>
        </div>
      </div>
              <div class="w-row wykazrow">
        <div class="w-col w-col-1 wykazall wykaztitle">
          <div class="wykaztext">Kod</div>
        </div>
        <div class="w-col w-col-3 wykazall wykaztitle">
          <p class="wykaztext">Adres dostawy</p>
        </div>
        <div class="w-col w-col-2 wykazall wykaztitle">
          <p class="wykaztext">Dostawca</p>
        </div>
        <div class="w-col w-col-2 wykazall wykaztitle">
          <p class="wykaztext">Rodzaj</p>
        </div>
        <div class="w-col w-col-2 wykazall wykaztitle">
          <div class="wykaztext">Koszt/zysk</div>
        </div>
        <div class="w-col w-col-2 wykazall wykaztitle">
          <div class="wykaztext">Status</div>
        </div>
      </div>
<?php

while($row = $packinfo -> fetch()){
           
         echo' <div class="w-row wykazrow">
        <div class="w-col w-col-1 wykazall">
          <div class="wykaztext">WA
            <br>'.$row['id'].'</div>
        </div>
        <div class="w-col w-col-3 wykazall">
          <p class="wykaztext">'.$row['name'].'</h3>
                     '.$row['postcode'].'<br/>
                     '.$row['street'].'<br/>
                     Tel: '.$row['nr_kom'].'<br/></p>
        </div>
        <div class="w-col w-col-2 wykazall">
          <p class="wykaztext">SendKrk&nbsp;
            <br>Kurier ID:012
            <br>512-029-212</p>
        </div>
        <div class="w-col w-col-2 wykazall">
          <p class="wykaztext">Wysłanie</p>
        </div>
        <div class="w-col w-col-2 wykazall">
          <p class="wykaztext">- 20,50 zł</p>
        </div>
        <div class="w-col w-col-2 wykazall">
          <div class="wykaztext">';
         if($row['status']==1){
        echo 'Przesyłka zaplanowana.';
    }elseif($row['status']==2){
        echo 'Oczekuje na akceptację kuriera.';
    }elseif($row['status']==3){
        echo 'Kurier jedzie po przesyłkę.';
    }elseif($row['status']==4){
        echo 'Kurier odebrał przesyłkę.';
    }elseif($row['status']==5){
        echo 'Kurier jest w drodzę.';
    }elseif($row['status']==7){
        echo 'Dostarczona.';
    }elseif($row['status']==8){
        echo 'Dostarczona. Oczekuję na płatność pobraniową.';
    }elseif($row['status']==9){
        echo 'Dostarczona. Płatność pobraniowa dostarczona.';
    }
    echo'</div>
          <div class="editbutton">
            <div class="editbuttontext">';
    if($row['status']>4){
         echo'Podglad';
    }else{
        echo'Edytuj';
    }
    echo'</div>
          </div>
        </div>
      </div>';  
                    

    
}
?>
