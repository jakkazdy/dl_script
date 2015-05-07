<div class="divinfo">
    <div class="divinfotext">Jeszcze beta.</div>
</div><?php

print_r($B2B);

?>
<textarea><?php $nr=1;while($nr <= ($B2B->array_postcode[1]['many'])){if($nr==1){echo $B2B->array_postcode[1][array_postcode][$nr-1]['postcode'];
    }else{echo ', '.$B2B->array_postcode[1][array_postcode][$nr-1]['postcode'];}$nr++;}?></textarea>
    <div class="divinfo">
        <div class="divinfotext">Zarządzanie obszarem dostaw. Ceny dostaw w danych obszarach można zmienić w ustawieniach.&nbsp;</div>
    </div>
    <div class="w-row row">
      <div class="w-col w-col-6 col1">
        <div class="header">
          <h1 class="h1">Twoje strefy dostawy</h1>
        </div>
        <div class="divtext">
          <p class="ptextcol1">Pierwsza strefa dostawy
            <br>
            <br><textarea><?php $nr=1;while($nr <= ($B2B->array_postcode[1]['many'])){if($nr==1){echo $B2B->array_postcode[1][array_postcode][$nr-1]['postcode'];
    }else{echo ', '.$B2B->array_postcode[1][array_postcode][$nr-1]['postcode'];}$nr++;}?></textarea></p>
          <p class="ptextcol1">Druga strefa dostawy
            <br>
            <br><textarea><?php $nr=1;while($nr <= ($B2B->array_postcode[2]['many'])){if($nr==1){echo $B2B->array_postcode[2][array_postcode][$nr-1]['postcode'];
    }else{echo ', '.$B2B->array_postcode[2][array_postcode][$nr-1]['postcode'];}$nr++;}?></textarea></p>
          <p class="ptextcol1">Trzecia strefa dostawy
            <br>
            <br><textarea><?php $nr=1;while($nr <= ($B2B->array_postcode[3]['many'])){if($nr==1){echo $B2B->array_postcode[3][array_postcode][$nr-1]['postcode'];
    }else{echo ', '.$B2B->array_postcode[3][array_postcode][$nr-1]['postcode'];}$nr++;}?></textarea></p>
          <div class="w-form">
              <form class="formcodepost" action="<?=seo_url(['url'=>'pack_search','int'=>1]);?>" method="post">
              <label class="namelabel" for="name">Kod pocztowy:</label>
              <input class="w-input input" id="name" type="text" placeholder="00001" name="name" data-name="Name">
              <input class="w-button button" type="submit" value="Sprawdź" data-wait="Wysyłanie..." wait="Wysyłanie...">
            </form>
          </div>
        </div>
      </div>
      <div class="w-col w-col-6 col2">
        <div class="header">
            <h1 class="h1">Wyślij paczkę błyskawicznie!</h1>
        </div>
        <div class="w-clearfix divtext">
            <p class="ptextcol1">Dzięki dużej bazie lokalnych firm kurierskich paczkę na terenie jednego miasta(gminy) dostarczymy w godzinę!
                <br>
                <br>Sprawdź czy jesteśmy w twoim mieście!&nbsp;</p>
            <div class="w-form">
            <form class="formcodepost" id="email-form" name="email-form" data-name="Email Form" method="post">
                <label class="namelabel" for="name">Kod pocztowy:</label>
                <input class="w-input input" id="name" type="text" placeholder="00-000" name="name" data-name="Name">
                <input class="w-button button" type="submit" value="Sprawdź" data-wait="Wysyłanie..." wait="Wysyłanie...">
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
    </div>
