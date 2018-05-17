@extends('layouts.default')

@section('content')
<div class='wrapper content-home'>
  <div class="sidenav cfx">
    <a href="#page1">Wat is seksuele intimidatie?</a>
    <a href="#page2">Welk gedrag is strafbaar?</a>
    <a href="#page3">Hoe kan ik aangifte doen?</a>
  </div>

  <div class = 'aside cfx'>
    <div id="page1">
      <div class="content-split">
        <h1>Wat is seksuele intimidatie?</h1>
        <h3>Niet iedereen ervaart seksuele intimidatie op dezelfde manier. Toch zijn er enkele kernwoorden die telkens terugkomen. We stelden Antwerpenaren op straat en experten dezelfde vraag: "Wat is voor jou seksuele intimidatie?"</h3>
        <iframe class="iframe-content" src="https://www.youtube.com/embed/HWJLiDkvgQ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <p>Organisaties zoals Sensoa en Jong & Van Zin werken rond het thema. Hun definitie luidt: “Seksuele intimidatie zijn seksueel getinte gebaren, woorden, aanrakingen die je ongemakkelijk doen voelen. Het kan eender waar gebeuren, zowel in de publieke ruimte als op je werk of school, en door en bij zowel mannen als vrouwen.”</p>
      </div>
      <div class="content-split">
        <h2>Voorbeelden van seksuele intimidatie</h2>
        <ul>
          <li>seksueel getinte of seksistische opmerkingen (ook via sms, sociale media …)</li>
          <li>obscene gebaren en geluiden</li>
          <li>handtastelijkheden en opdringerig gedrag</li>
          <li>gluren of nafluiten</li>
          <li>oneerbare voorstellen en intieme vragen </li>
          <li>ongevraagd in de billen knijpen of naar borsten grijpen</li>
          <li>uitschelden voor hoer, slet ...</li>
          <li>naast of achter een vrouw blijven lopen of de pas aanpassen aan die van de vrouw</li>
          <li>in groep rond een vrouw gaan staan</li>
          <li>ongevraagd filmen met een smartphone</li>
          <li>...</li>
        </ul>
      </div>
      <div class="content-split">
        <h2>"Het is nooit jouw schuld"</h2>
        <p>Ongewenste intimiteiten of seksuele intimidatie lijken misschien onschuldig, maar kunnen zeer vervelend zijn, zeker als het herhaaldelijk gebeurt. Mensen gaan er zich ongemakkelijk, onzeker en onveilig door voelen. “Onthoud: het is nooit jouw schuld! En blijf er niet alleen mee zitten: praat erover, met de persoon die je lastigvalt of met mensen die je vertrouwt.” </p>
      </div>
    </div>

    <div id="page2">
      <div class="content-split">
        <h1>Welk gedrag is strafbaar?</h1>
        <h3>Ook al voelt niet iedereen zich even snel seksueel geïntimideerd, toch is ongewenst gedrag in bepaalde gevallen strafbaar.</h3>
        <p>U kan persoonlijk aangifte doen, maar de politie kan ook zelf een vaststelling doen en een proces verbaal opmaken zonder dat er een klacht is ingediend. Het gaat hier om ongewenst, storend, intimiderend of choquerend gedrag dat seksueel getint of geladen kan zijn en waarbij het slachtoffer zich in zijn rust gestoord voelt.</p>
        <p>Voor dit soort strafbaar gedrag spreekt de wet over:</p>
        <ul>
          <li>Belaging (Strafwetboek Art.442 bis): Alle gedrag dat de rust van de getroffen persoon ernstig verstoort zoals bijvoorbeeld achternalopen, omringen, intimiderende of beledigende sms-en of berichten op facebook sturen enzovoort.</li>
          <li>Voyeurisme (Strafwetboek Art.371): Personen observeren of doen observeren, maar ook beelden of geluidsopnamen van iemand maken, zonder dat hij/zij dat weet of daarvoor toestemming heeft gegeven.</li>
        </ul>
        <p>Als dit gedrag wordt gesteld ten opzichte van minderjarigen, geldt dat als verzwarende omstandigheid en zijn ook de straffen zwaarder.</p>
        <p>Bij ernstigere feiten, bijvoorbeeld bij geweld of bedreigingen, waarbij het slachtoffer zich voelt aangetast in zijn seksuele integriteit, is er sprake van <a href = 'https://www.allesoverseks.be/themas/seks-grenzen/over-je-grens/wat-is-aanranding-van-de-eerbaarheid' target="_blank">aanranding van de eerbaarheid.</a></p>
      </div>

      <div class = 'content-split'>
        <h2>Meer info over de wetgeving omtrent seksisme en seksuele intimidatie?</h2>
        <p><a href = 'https://www.allesoverseks.be/themas/seks-grenzen/seks-de-wet' target="_blank">Sensoa: Seks en de wet</a></p>
      </div>
    </div>

    <div id="page3">
      <div class="content-split">
        <h1>Hoe kan ik aangifte doen?</h1>
        <h3>Er wordt maar zelden klacht ingediend wegens seksuele intimidatie. Slachtoffers verdringen vaak wat er gebeurd is en dienen niet snel klacht in. Nochtans is aangifte of melding doen een belangrijke en vaak noodzakelijke stap. Zo kan de politie in geval van een misdrijf een onderzoek starten naar de daders en overlast op straat doelgericht aanpakken.</h3>
        <p>Aangifte doen kan op verschillende manieren.</p>
        <ul>
          <li>Bij strafbare feiten en voor dringende politiehulp bel onmiddellijk het noodnummer 101.</li>
          <li>Voor niet-dringende hulp:</li>
          <ul>
            <li>Bel de Blauwe Lijn 0800 123 12.</li>
            <li>Maak een <a href = 'https://www.politieantwerpen.be/afspraak' target="_blank">online afspraak met Politie Antwerpen.</a></li>
          </ul>
          <li>Bij het<a href = '' target="_blank"> Instituut voor de Gelijkheid van Vrouwen en Mannen.</a></li>
        </ul>
      </div>
    </div>

  </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type='text/javascript' src="{{ asset('js/dynamicpage.js') }}"></script>
@endsection
