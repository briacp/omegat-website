<div class="container">

<h2>OmegaT HowTo: De OmegaT tokenizer gebruiken</h2>

<p><strong>De plug-in Tokenizer werd in OmegaT geïntegreerd in versie 3.0.0. De volgende informatie is daarom alleen van toepassing als u een eerdere versie gebruikt van OmegaT dan 3.0.0.<br/> Als u de plug-in Tokenizer heeft gebruikt met een eerdere versie van OmegaT en hebt bijgewerkt naar versie 3.0.0 of later van OmegaT, verwijder dan de bestanden voor de plug-in Tokenizer uit uw map plug-in.</strong></p>

<p>De OmegaT Tokenizer is een plug-in voor OmegaT. het biedt betere fuzzy overeenkomsten en overeenkomsten uit woordenlijsten in OmegaT, door de bronnen ("stammen") van de bronwoorden te berekenen. Het zal bijvoorbeeld vervoegde woorden in tekst herkennen en het overeenkomende item uit de woordenlijst weergeven, zelfs als de woordenlijst alleen de niet-vervoegde vorm van een woord bevat.</p>

<h3>Voorbereiding</h3>

<p>Vóór het gebruiken van de Tokenizer met OmegaT dient u er voor te zorgen dat uw versie van OmegaT geschikt en voorbereid is om er mee te gebruiken.</p>

<p><strong>Webstart-versie van OmegaT</strong>: de Tokenizer is niet compatibel met de Webstart-versie van OmegaT. Installeer de standaard versie van OmegaT (laatste bèta versie) voor uw systeem als u de Tokenizer wilt gebruiken.</p>

<p><strong>OmegaT versie 2.1.0 en ouder</strong>: de huidige Tokenizer is niet compatibel met deze versies. (De Tokenizer kan worden gebruikt met de versies 2.0.x en 2.1.0, maar dat vereist zowel een andere versie van de Tokenizer, als ook een andere procedure voor de installatie.) Gebruikers worden geadviseerd bij te werken naar de laatste bèta versie van OmegaT.</p>

<p><strong>Windows-versies van OmegaT</strong>: om OmegaT (elke versie) te kunnen laten werken met de Tokenizer, moet die worden gestart vanuit een opstartbestand. Een bestand voor opstarten wordt niet meegeleverd met de versies van OmegaT voor Windows. Indien u de versie van Windows met JRE gebruikt, download het bestand <a href="/resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; Indien u de versie van Windows zonder JRE gebruikt, download dan het bestand <a href="/resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Plaats, na het downloaden, het bestand in de hoofdmap van OmegaT (de map die het bestand OmegaT.jar bevat).</p>

<p><strong>Platform-neutrale versie (op Windows)</strong>: lokaliseer uw bestand om OmegaT op te starten (OmegaT.bat).</p>

<p><strong>Linux-versies/systemen</strong>: lokaliseer uw opstarbestand voor OmegaT (OmegaT of OmegaT.sh).</p>

<p>Controleer of OmegaT wordt gestart als u het opstartbestand uitvoert:<br/> - Op Linux, op de opdrachtregel<br/> - Op Windows, door te klikken op het opstartbestand</p>


<h3>Installeren van de Tokenizer</h3>

<p>Installeer, na de voorbereiding voor de installatie (zie boven), de Tokenizer als volgt:</p>

<p>1. Download the 
<?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>tokenizer zip package (for OmegaT version 2.1.1 and later)<?php echo $endlink ?>.</p>

<p>2. Pak de bestanden van het Tokenizer zip-pakket uit.</p>

<p>3. Maak, in de hoofdmap van het programma OmegaT (d.i. de map die het bestand OmegaT.jar bevat), een submap genaamd "plugins", als een submap met die naam daar nog niet bestaat. Kopieer de bestanden die u heeft uitgepakt uit het Tokenizer-pakket direct in deze submap.</p>

<p>4. Open ur bestand voor het opstarten in een tekstbewerker. Windows-gebruikers (in het bijzonder): klik <strong>niet</strong> eenvoudigweg op dit bestand. Start, in plaats daarvan, een tekstbewerker (zoals Notepad of Wordpad), en open het bestand om op te starten met Bestand &gt; Openen. Het zou ook mogelijk kunnen zijn om met rechts te klikken op het bestand en dan een tekstbewerker te selecteren waarmee het geopend kan worden.</p>

<p>5. Het bestand om op te starten bevat de opdracht om OmegaT te starten. De basisvorm van deze opdracht is:</p>

<p>java -jar OmegaT.jar</p>

<p>Afhankelijk van de configuratie van uw systeem zou de opdracht om te starten enigszins kunnen verschillen.</p>

<p>6. Kies een tokenizer uit de volgende lijst, overeenkomstig uw <strong>bron</strong>taal:</p>

<p>org.omegat.plugins.tokenizer.LuceneArabicTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneBrazilianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCJKTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCzechTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneDutchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGermanTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGreekTokenizer<br/>
org.omegat.plugins.tokenizer.LucenePersianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneSmartChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneRussianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneThaiTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDutchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballEnglishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFinnishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGerman2Tokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGermanTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballHungarianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballItalianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballNorwegianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPorterTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPortugueseTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRomanianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRussianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSpanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSwedishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Voeg het argument --ITokenizer= gevolgd door de volledige naam van deze tokenizer (door de gehele regel te kopiëren en een spatie in te voegen) toe aan het einde van de opdracht om te starten in uw bestand voor het opstarten van OmegaT.</p>

<p>Bijvoorbeeld: om de Engelse tokenizer (voor het vertalen vanuit het Engels) te gebruiken, zou uw opdracht om starten nu kunnen zijn:</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>Of indein u vanuit het Turks vertaald, zou het nu kunnen zijn:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Belangrijk: deze hele opdracht moet op één regel staan (zelfs als het lijkt alsof die op twee regels staat in de weergave waarin u dit leest).</p>

<p>7. Voer dit bestand uit en OmegaT zou nu moeten starten met de functie Tokenizer. Controleer, om te testen, of items uit de woordenlijst worden weergegeven zelfs als het huidige segment in OmegaT een term in een vervoegde vorm bevat van die in de woordenlijst.</p>

<p>8. Indien u verschillende tokenizers wilt gebruiken omdat u uit meer dan één taal vertaalt, maak dan een afzonderlijk bestand om OmegaT op te starten voor elke tokenizer die u wilt gebruiken. Geef de bestanden om op te starten toepasselijke namen, bijvoorbeeld "OmegaT-EN.bat" voor het bestand om op te starten dat de opdracht met de Engelse tokenizer bevat en "OmegaT-TR.bat" voor het bestand om op te starten dat de opdracht met de Turkse tokenizer bevat.</p>

<p>9. In sommige gevallen zou u kunnen merken dat de tokenizer voor de brontaal botst met de spellingscontrole door de doeltaal. U kunt dit probleem elimineren door ook een tokenizer voor de doeltaal te specificeren (indienn beschikbaar), met het argument --ITokenizerTarget=.</p>

<p>Als u bijvoorbeeld vertaalt vanuit Chinees naar Nederlands, probeer dan:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Na het maken van een opstartbestand zoals hierboven beschreven kunt u uw systeem zo configureren dat OmegaT eenvoudiger wordt gestart, bijvoorbeeld door een snelkoppeling te maken. Een snelkoppeling maken in Windows:</p>

<p>Klik met rechts op het opstartbestand (OmegaT.bat), en houd de rechter muisknop ingedrukt, sleep het bestand naar een handige locatie, zoals uw bureaublad. Wanneer u de rechter muisknop loslaat opent een dialoogvenster met een aantal opties. Kies "Snelkoppeling maken".</p>
<p>Als alternatief, klik met rechts op het opstartbestand. Selecteer: "Kopiëren naar", selecteer dan "Bureaublad (snelkoppeling maken)".</p>
<p>Na het maken en testen van de snelkoppeling kunt u het aan het menu Start toevoegen door het daarheen te slepen.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>

