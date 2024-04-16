<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'install', language 'lt_uni', version '4.2'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Nurodytas administratoriaus katalogas yra klaidingas';
$string['admindirname'] = 'Administratoriaus katalogas';
$string['admindirsetting'] = 'Labai mažai žiniatinklio pagrindinių kompiuterių naudoja /admin kaip specialų URL, kad galėtumėte pasiekti valdymo skydą ar pan. Deja, dėl to kyla konfliktas su „Moodle“ administratoriaus puslapių standartine vieta. Tai galite ištaisyti, jei diegdami pervardysite administratoriaus katalogą ir tą naują pavadinimą įdėsite čia. Pavyzdžiui, <br /> <br /><b>moodleadmin</b><br /> <br />. Taip bus ištaisyti administratoriaus saitai „Moodle“.';
$string['admindirsettinghead'] = 'Nustatomas administratoriaus katalogas...';
$string['admindirsettingsub'] = 'Labai mažai žiniatinklio pagrindinių kompiuterių naudoja /admin kaip specialų URL, kad galėtumėte pasiekti valdymo skydą ar pan. Deja, dėl to kyla konfliktas su „Moodle“ administratoriaus puslapių standartine vieta. Tai galite ištaisyti, jei diegdami pervardysite administratoriaus katalogą ir tą naują pavadinimą įdėsite čia. Pavyzdžiui, <br /> <br /><b>moodleadmin</b><br /> <br />. Taip bus ištaisyti administratoriaus saitai „Moodle“.';
$string['chooselanguage'] = 'Pasirinkite kalbą';
$string['chooselanguagesub'] = 'Pasirinkite diegimo kalbą. Ši kalba bus naudojama ir kaip numatytoji svetainės kalba, nors vėliau ją bus galima pakeisti.';
$string['clialreadyconfigured'] = 'Failas config.php jau yra, prašau naudoti admin/cli/install_database.php jei norite įrašyti šią svetainę.';
$string['clialreadyinstalled'] = 'Failas config.php jau yra. Jei norite atnaujinti svetainę, naudokite admin/cli/upgrade.php.';
$string['cliinstallfinished'] = 'Įdiegta sėkmingai.';
$string['cliinstallheader'] = '„Moodle“ {$a} komandų eilutės diegimo programa';
$string['climustagreelicense'] = 'Naudodami neinteraktyvųjį režimą, turite sutikti su licencijos sąlygomis nurodydami parinktį --agree-license';
$string['clitablesexist'] = 'Duomenų bazės lentelės jau yra, „cli“ diegimo tęsti negalima.';
$string['compatibilitysettings'] = 'Tikrinami PHP parametrai...';
$string['compatibilitysettingshead'] = 'Tikrinami PHP parametrai...';
$string['compatibilitysettingssub'] = 'Serveris turi būti patikrintas visais šiais testais, kad „Moodle“ veiktų tinkamai';
$string['configfilenotwritten'] = 'Diegimo programos scenarijui nepavyko automatiškai sukurti config.php failo, kuriame būtų jūsų pasirinkti parametrai, tikriausiai dėl to, kad negalima įrašyti į „Moodle“ katalogą. Galite rankiniu būdu nukopijuoti šį kodą į šakniniame „Moodle“ kataloge esantį failą, pavadintą config.php.';
$string['configfilewritten'] = 'config.php sėkmingai sukurtas';
$string['configurationcomplete'] = 'Konfigūravimas atliktas';
$string['configurationcompletehead'] = 'Konfigūravimas atliktas';
$string['configurationcompletesub'] = '„Moodle“ bandė įrašyti konfigūraciją į failą, esantį šakniniame „Moodle“ diegimo kataloge.';
$string['databasehead'] = 'Duomenų bazės parametrai';
$string['databasehost'] = 'Duomenų bazės pagrindinis kompiuteris';
$string['databasesocket'] = '„Unix“ lizdas';
$string['databasetypesub'] = '„Moodle“ palaiko kelių tipų duomenų bazių serverius. Jei nežinote, kurį tipą naudoti, kreipkitės į serverio administratorių.';
$string['databaseuser'] = 'Duomenų bazės vartotojas';
$string['dataroot'] = 'Duomenų katalogas';
$string['datarooterror'] = 'Nurodyto „duomenų katalogo“ nepavyko rasti arba sukurti. Pataisykite kelią arba tą katalogą sukurkite rankiniu būdu.';
$string['datarootpermission'] = 'Duomenų katalogo leidimai';
$string['datarootpublicerror'] = 'Nurodytas „duomenų katalogas“ yra tiesiogiai pasiekiamas internetu. Turite naudoti kitą katalogą.';
$string['dbconnectionerror'] = 'Nepavyksta prisijungti prie nurodytos duomenų bazės. Patikrinkite duomenų bazės parametrus.';
$string['dbcreationerror'] = 'Duomenų bazės kūrimo klaida. Nepavyko sukurti pateikto duomenų bazės pavadinimo naudojant pateiktus parametrus';
$string['dbhost'] = 'Pagrindinis serveris';
$string['dbport'] = 'Prievadas';
$string['dbprefix'] = 'Lentelių priešvardis';
$string['directorysettings'] = '<p>Patvirtinkite šio „Moodle“ diegimo vietas.</p> <p><b>Žiniatinklio adresas:</b> nurodykite visą žiniatinklio adresą, kur bus galima pasiekti „Moodle“. Jei svetainę galima pasiekti per kelis URL, pasirinkite patį įprasčiausią, kurį naudos klausytojai. Neįtraukite baigiamojo pasvirojo brūkšnio.</p> <p><b>„Moodle“ katalogas:</b> nurodykite šio diegimo visą katalogo kelią. Įsitikinkite, kad teisingos didžiosios / mažosios raidės.</p> <p><b>Duomenų katalogas:</b> reikalinga vieta, kur „Moodle“ galėtų saugoti įkeltus failus. Iš šio katalogo turi galėti skaityti IR Į JĮ  ĮRAŠYTI žiniatinklio serverio vartotojas (paprastai „nobody“ arba „apache“), bet jis neturi būti tiesiogiai pasiekiamas per žiniatinklį. Diegimo programa bandys jį sukurti, jei jo dar nėra.</p>';
$string['directorysettingshead'] = 'Patvirtinkite šio „Moodle“ diegimo vietas';
$string['directorysettingssub'] = '<b>Žiniatinklio adresas:</b> nurodykite visą žiniatinklio adresą, kur bus galima pasiekti „Moodle“. Jei svetainę galima pasiekti per kelis URL, pasirinkite patį įprasčiausią, kurį naudos studentai. Neįtraukite baigiamojo pasvirojo brūkšnio. <br /> <br /> <b>„Moodle“ katalogas:</b> nurodykite šio diegimo visą katalogo kelią. Įsitikinkite, kad teisingos didžiosios / mažosios raidės. <br /> <br /> <b>Duomenų katalogas:</b> reikiama vieta, kur „Moodle“ galėtų saugoti įkeltus failus. Iš šio katalogo turi galėti skaityti IR Į JĮ  ĮRAŠYTI žiniatinklio serverio vartotojas (paprastai „nobody“ arba „apache“), bet jis neturi būti tiesiogiai pasiekiamas per žiniatinklį. Diegimo programa bandys jį sukurti, jei jo dar nėra.</p>';
$string['dirroot'] = '„Moodle“ katalogas';
$string['dirrooterror'] = 'Atrodo, kad neteisingas parametras „Moodle“ katalogas“ – čia nepavyksta rasti „Moodle“ diegimo. Toliau pateikta reikšmė nustatyta iš naujo.';
$string['downloadlanguagebutton'] = 'Atsisiųsti &quot;{$a}&quot; kalbos paketą';
$string['downloadlanguagehead'] = 'Atsisiųsti kalbos paketą';
$string['downloadlanguagenotneeded'] = 'Galite tęsti diegimo procesą naudodami numatytąjį kalbos paketą „{$a}“.';
$string['downloadlanguagesub'] = 'Dabar galite pasirinkti atsisiųsti kalbos paketą ir tęsti diegimo procesą šia kalba.<br /><br />Jei nepavyksta atsisiųsti kalbos paketo, diegimo procesas bus tęsiamas anglų kalba. (Pasibaigus diegimo procesui galėsite atsisiųsti ir įdiegti papildomus kalbų paketus.';
$string['doyouagree'] = 'Ar sutinkate? (Taip / ne)';
$string['environmenthead'] = 'Tikrinama aplinka...';
$string['environmentsub'] = 'Tikriname, ar įvairūs jūsų sistemos komponentai atitinka sistemos reikalavimus';
$string['environmentsub2'] = 'Kiekvienas „Moodle“ leidimas turi minimalius PHP versijos ir privalomų PHP plėtinių skaičiaus reikalavimus. Prieš kiekvieną diegimą ir versijos naujinimą, išsamiai tikrinama aplinka. Jei nežinote, kaip įdiegti naują versiją arba įjungti PHP plėtinius, kreipkitės į serverio administratorių.';
$string['errorsinenvironment'] = 'Aplinkos patikra nepavyko!';
$string['fail'] = 'Nepavyko';
$string['fileuploads'] = 'Failų įkėlimas';
$string['fileuploadserror'] = 'Tai turi būti įjungta';
$string['fileuploadshelp'] = '<p>Atrodo, kad serveryje išjungtas failų įkėlimas.</p> <p>„Moodle“ vis dar galima įdiegti, bet be šios galimybės negalėsite įkelti kursų failų ar naujų vartotojų profilių vaizdų.</p> <p>Norėdami įjungti failų įkėlimą jūs (ar sistemos administratorius) turėsite redaguoti pagrindinį sistemos php.ini failą ir pakeisti <b>file_uploads</b> parametrą į 1.</p>';
$string['inputdatadirectory'] = 'Duomenų katalogas:';
$string['inputwebadress'] = 'Žiniatinklio adresas:';
$string['inputwebdirectory'] = '„Moodle“ katalogas:';
$string['installation'] = 'Diegimas';
$string['langdownloaderror'] = 'Deja, {$a} kalbos atsisiųsti nepavyko. Diegimo procesas bus tęsiamas anglų kalba.';
$string['langdownloadok'] = '{$a} kalba sėkmingai įdiegta. Diegimo procesas bus tęsiamas šia kalba.';
$string['memorylimit'] = 'Atminties limitas';
$string['memorylimiterror'] = 'Nustatytas gana mažas PHP atminties limitas. Vėliau gali kilti problemų.';
$string['memorylimithelp'] = '<p>Serverio PHP atminties limitas dabar nustatytas kaip {$a}.</p> <p>Vėliau dėl to „Moodle“ gali iškilti atminties problemų, ypač jei įjungta daug modulių ir (arba) yra daug vartotojų.</p> <p>Rekomenduojame sukonfigūruoti didesnį PHP limitą, jei galima, pvz., 40M. Galite pabandyti tai atlikti keliais būdais:</p> <ol> <li>Jei galite, pakartotinai sukompiliuokite PHP naudodami <i>--enable-memory-limit</i>. Taip „Moodle“ pati galės nustatyti atminties limitą.</li> <li>Jei turite prieigą prie php.ini failo, galite pakeisti <b>memory_limit</b> parametro reikšmę į 40M ar pan. Jei prieigos neturite, galite paprašyti, kad tai padarytų administratorius.</li> <li>Kai kuriuose PHP serveriuose „Moodle“ kataloge galite sukurti .htaccess failą, kuriame būtų ši eilutė : <blockquote><div>php_value memory_limit 40M</div></blockquote> <p>Tačiau kai kuriuose serveriuose dėl to neveiks <b>visi</b> PHP puslapiai (peržiūrėdami puslapius matysite klaidą), todėl the .htaccess failą teks pašalinti.</p></li> </ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP nėra tinkamai sukonfigūruotas naudojant „MySQLi“ plėtinį, kad galėtų palaikyti ryšį su „MySQL“. Patikrinkite php.ini failą arba iš naujo sukompiliuokite PHP. „MySQLi“ plėtinio nėra PHP 4.';
$string['nativemysqli'] = 'Patobulintas MySQL (prigimtinis / mysql)';
$string['nativemysqlihelp'] = 'Dabar reikia sukonfigūruoti duomenų bazę, kur bus saugoma dauguma „Moodle“ duomenų. Duomenų bazę galima sukurti, jei duomenų bazės vartotojas turi reikiamas teises, taip pat jau turi  būti vartotojo vardas ir slaptažodis. Lentelių priešvardis yra pasirinktinis.';
$string['nativeoci'] = '„Oracle“ (prigimtinis / oci)';
$string['nativeocihelp'] = 'Dabar reikia sukonfigūruoti duomenų bazę, kurioje bus saugoma dauguma „Moodle“ duomenų. Ši duomenų bazė jau turi būti sukurta, taip pat turi būti sukurtas vartotojo vardas ir slaptažodis jai pasiekti. Lentelių priešvardis yra privalomas.';
$string['nativepgsql'] = '„PostgreSQL“ (prigimtinis / pgsql)';
$string['nativepgsqlhelp'] = 'Dabar reikia sukonfigūruoti duomenų bazę, kurioje bus saugoma dauguma „Moodle“ duomenų. Ši duomenų bazė jau turi būti sukurta, taip pat turi būti sukurtas vartotojo vardas ir slaptažodis jai pasiekti. Lentelių priešvardis yra privalomas.';
$string['nativesqlsrv'] = '„SQL*Server“ „Microsoft“ (prigimtinis / sqlsrv)';
$string['nativesqlsrvhelp'] = 'Dabar reikia sukonfigūruoti duomenų bazę, kurioje bus saugoma dauguma „Moodle“ duomenų. Ši duomenų bazė jau turi būti sukurta, taip pat turi būti sukurtas vartotojo vardas ir slaptažodis jai pasiekti. Lentelių priešvardis yra privalomas.';
$string['ociextensionisnotpresentinphp'] = 'PHP nėra tinkamai sukonfigūruotas naudojant OCI8 plėtinį, kad galėtų palaikyti ryšį su „Oracle“. Patikrinkite php.ini failą arba iš naujo sukompiliuokite PHP.';
$string['pass'] = 'Perduoti';
$string['pathserrcreatedataroot'] = 'Diegimo programa negali sukurti duomenų katalogo ({$a->dataroot}).';
$string['pathshead'] = 'Patvirtinti kelius';
$string['pathsrodataroot'] = 'Į šakninį duomenų katalogą negalima įrašyti.';
$string['pathsroparentdataroot'] = 'Į pirminį katalogą ({$a->parent}) negalima įrašyti. Diegimo programa negali sukurti katalogo ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Labai mažai žiniatinklio pagrindinių kompiuterių naudoja /admin kaip specialų URL, kad galėtumėte pasiekti valdymo skydą ar pan. Deja, dėl to kyla konfliktas su „Moodle“ administratoriaus puslapių standartine vieta. Tai galite ištaisyti, jei diegdami pervardysite administratoriaus katalogą ir tą naują pavadinimą įdėsite čia. Pavyzdžiui, <em>moodleadmin</em>. Taip bus ištaisyti administratoriaus saitai „Moodle“.';
$string['pathssubdataroot'] = 'Reikalinga vieta, kur „Moodle“ galėtų saugoti įkeltus failus. Iš šio katalogo turi galėti skaityti IR Į JĮ  ĮRAŠYTI žiniatinklio serverio vartotojas (paprastai „nobody“ arba „apache“), bet jis neturi būti tiesiogiai pasiekiamas per žiniatinklį. Diegimo programa bandys jį sukurti, jei jo dar nėra.';
$string['pathssubdirroot'] = 'Visas „Moodle“ diegimo katalogo kelias.';
$string['pathssubwwwroot'] = 'Visas žiniatinklio adresas, kur bus galima pasiekti „Moodle“. „Moodle“ negalima pasiekti naudojant kelis adresus. Jei jūsų svetainė turi kelis viešuosius adresus, turite nustatyti nuolatinį peradresavimą iš jų visų, išskyrus šį vieną. Jei svetainę galima pasiekti tiek iš intraneto, tiek iš interneto, čia naudokite viešąjį adresą ir nustatykite DNS, kad intraneto vartotojai taip pat galėtų naudoti viešąjį adresą. Jei adresas klaidingas, naršyklėje pakeiskite URL, kad pakartotinai paleidus diegti būtų naudojama kita reikšmė.';
$string['pathsunsecuredataroot'] = 'Šakninio duomenų katalogo kelias nesaugus';
$string['pathswrongadmindir'] = 'Nėra administratoriaus katalogo';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP nėra tinkamai sukonfigūruotas naudojant PGSQL plėtinį, kad galėtų palaikyti ryšį su „PostgreSQL“. Patikrinkite php.ini failą arba iš naujo sukompiliuokite PHP.';
$string['phpversionhelp'] = '<p>„Moodle“ reikalauja, kad PHP versija būtų bent 4.3.0 arba 5.1.0 (5.0.x versijoje yra daug problemų).</p> <p>Dabar naudojate versiją {$a}</p> <p>Turite atnaujinti PHP versiją arba perkelti į pagrindinį kompiuterį, kuriame veikia naujesnė PHP versija!<br /> (Jei naudojate 5.0.x versiją, taip pat galite paleisti senesnę 4.4.x versiją)</p>';
$string['releasenoteslink'] = 'Norėdami gauti informacijos apie šią „Moodle“ versiją, žr. leidimo pastabas, esančias {$a}';
$string['safemode'] = 'Saugusis režimas';
$string['safemodeerror'] = 'Jei įjungtas saugusis režimas, gali kilti „Moodle“ problemų';
$string['safemodehelp'] = '<p>Jei bus įjungtas saugusis režimas, gali kilti įvairių „Moodle“ problemų, pvz., tikriausiai nebus leista kurti naujų failų.</p> <p>Saugusis režimas paprastai įjungiamas tik paranoiškuose žiniatinklio serveriuose, todėl „Moodle“ svetainei turėsite rasti naują žiniatinklio išteklių nuomos paslaugą teikiančią įmonę.</p> <p>Jei norite, galite bandyti tęsti diegimą, bet vėliau gali kilti problemų.</p>';
$string['sessionautostart'] = 'Automatinis seanso paleidimas';
$string['sessionautostarterror'] = 'Tai turi būti išjungta';
$string['sessionautostarthelp'] = '<p>„Moodle“ reikalauja seansų palaikymo ir be jų neveiks.</p> <p>Seansus galima įjungti php.ini faile. Ieškokite session.auto_start parametro.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP nėra tinkamai sukonfigūruotas naudojant „SQLite“ plėtinį. Patikrinkite php.ini failą arba iš naujo sukompiliuokite PHP.';
$string['upgradingqtypeplugin'] = 'Klausimo / tipo naujinimo papildinys';
$string['welcomep20'] = 'Matote šį puslapį, nes į kompiuterį sėkmingai įdiegėte ir paleidote <strong>{$a->packname} {$a->packversion}</strong> paketą. Sveikiname!';
$string['welcomep30'] = 'Šiame <strong>{$a->installername}</strong> leidime yra taikomosios programos, skirtos aplinkai, kurioje veiks <strong>Moodle</strong>, sukurti:';
$string['welcomep40'] = 'Pakete taip pat yra <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Visoms šio paketo taikomosioms programoms taikomos atitinkamos licencijos. Visas <strong>{$a->installername}</strong> paketas yra <a href="http://www.opensource.org/docs/definition_plain.html">atvirojo kodo</a> ir platinamas pagal <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licenciją.';
$string['welcomep60'] = 'Šiuose puslapiuose bus pateikta keletas paprastų veiksmų, kad būtų galima sukonfigūruoti ir nustatyti <strong>Moodle</strong> kompiuteryje. Galite priimti numatytuosius parametrus arba pasirinktinai juos pakeisti, kad atitiktų jūsų poreikius.';
$string['welcomep70'] = 'Norėdami tęsti <strong>Moodle</strong> sąranką, spustelėkite žemiau esantį mygtuką Kitas.';
$string['wwwroot'] = 'Žiniatinklio adresas';
$string['wwwrooterror'] = 'Atrodo, kad žiniatinklio adresas neleistinas – ten nėra šio „Moodle“ diegimo. Toliau pateikta reikšmė nustatyta iš naujo.';
