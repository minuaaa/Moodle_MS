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
 * Strings for component 'report_security', language 'lt_uni', version '4.2'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Rekomenduojame įdiegus pakeisti config.php failo teises, kad failo negalėtų modifikuoti žiniatinklio serveris. Atminkite, kad serverio saugos šis veiksmas žymiai nepagerins, tačiau dėl to jis gali lėčiau veikti arba riboti bendrąjį naudojimąsi juo.</p>';
$string['check_configrw_name'] = 'Config.php, į kurį galima rašyti';
$string['check_configrw_ok'] = 'PHP scenarijai negali modifikuoti config.php.';
$string['check_configrw_warning'] = 'PHP scenarijai gali modifikuoti config.php.';
$string['check_cookiesecure_details'] = '<p>Jei įjungsite „https“ ryšį, rekomenduojame įjungti ir saugos slapukus. Taip pat turėtumėte nustatyti, kad visada būtų peradresuojama iš „http“ į „https“.</p>';
$string['check_cookiesecure_error'] = 'Įjunkite saugos slapukus';
$string['check_cookiesecure_name'] = 'Saugos slapukai';
$string['check_cookiesecure_ok'] = 'Saugos slapukai įjungti.';
$string['check_crawlers_details'] = '<p>Parametras Atidaryti „Google“ įjungia paieškos variklius, leidžiančius svečiams pasiekti kursus. Nėra prasmės įjungti šį parametrą, jei yra išjungta svečio prisijungimo galimybė.</p>';
$string['check_crawlers_error'] = 'Prieiga per paieškos variklius leidžiama, tačiau svečio prisijungimo galimybė yra išjungta.';
$string['check_crawlers_info'] = 'Paieškos variklius galima pasiekti turint svečio prieigą.';
$string['check_crawlers_name'] = 'Atidaryti „Google“';
$string['check_crawlers_ok'] = 'Prieiga per paieškos variklius neįjungta.';
$string['check_defaultuserrole_details'] = '<p>Visiems prisijungusiems vartotojams suteikiamos numatytojo vartotojo vaidmens galimybės. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Iš senstelėjusių numatytojo vartotojo vaidmens tipų palaikomas tik <em>Autentifikuotasis vartotojas</em>. Kursų peržiūros galimybė neturi būti įjungta.</p>';
$string['check_defaultuserrole_error'] = 'Numatytasis vartotojo vaidmuo {$a} neteisingai apibrėžtas!';
$string['check_defaultuserrole_name'] = 'Numatytasis visų vartotojų vaidmuo';
$string['check_defaultuserrole_notset'] = 'Nenustatytas numatytasis vaidmuo.';
$string['check_defaultuserrole_ok'] = 'Numatytojo visų vartotojų vaidmens apibrėžimas yra geras.';
$string['check_displayerrors_details'] = '<p>Nerekomenduojama įjungti PHP parametro <code>display_errors</code> gamybos svetainėse, nes klaidų pranešimai gali atskleisti slaptos informacijos apie jūsų serverį.</p>';
$string['check_displayerrors_error'] = 'Įjungtas PHP parametras, įgalinantis rodyti klaidas. Rekomenduojama jį išjungti.';
$string['check_displayerrors_name'] = 'PHP klaidų rodymas';
$string['check_displayerrors_ok'] = 'PHP klaidų rodymo funkcija išjungta.';
$string['check_emailchangeconfirmation_details'] = '<p>Rekomenduojama nustatyti, kad vartotojams savo profilyje pakeitus el. pašto adresą būtų privalomas patvirtinimo el. paštu žingsnis. Jei tai išjungta, pašto šiukšlintojai gali bandyti per serverį siųsti pašto šiukšles.</p> <p>Taip pat el. pašto laukas gali būti užrakintas, kad jo nepasiektų autentifikavimo papildiniai; ši galimybė čia neapsvarstyta.</p>';
$string['check_emailchangeconfirmation_error'] = 'Vartotojai gali įvesti norimą el. pašto adresą.';
$string['check_emailchangeconfirmation_info'] = 'Vartotojai gali įvesti tik tokius el. pašto adresus, kurių domenai yra leidžiami naudoti.';
$string['check_emailchangeconfirmation_name'] = 'El. pašto keitimo patvirtinimas';
$string['check_emailchangeconfirmation_ok'] = 'Patvirtinimas, kad keičiamas el. pašto adresas vartotojo profilyje.';
$string['check_embed_details'] = '<p>Labai pavojinga leisti įdėti neribotą kiekį objektų – bet kuris registruotasis vartotojas gali paleisti XSS ataką prieš kitus serverio vartotojus. Šis parametras turėtų būti išjungtas gamybos serveriuose.</p>';
$string['check_embed_error'] = 'Įjungta galimybė įdėti neribotą kiekį objektų – tai labai pavojinga daugumai serverių.';
$string['check_embed_name'] = 'Leisti EMBED ir OBJECT';
$string['check_embed_ok'] = 'Galimybė įdėti neribotą kiekį objektų išjungta.';
$string['check_frontpagerole_details'] = 'p>Numatytasis pradinio puslapio vaidmuo suteikiamas visiems registruotiesiems vartotojams, kad jie galėtų atlikti veiksmus pradiniame puslapyje. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Rekomenduojama šiam tikslui sukurti atskirą vaidmenį ir nenaudoti senstelėjusio tipo vaidmens.</p>';
$string['check_frontpagerole_error'] = 'Aptiktas neteisingai apibrėžtas pradinio puslapio vaidmuo {$a}!';
$string['check_frontpagerole_name'] = 'Pradinio puslapio vaidmuo';
$string['check_frontpagerole_notset'] = 'Nenustatytas pradinio puslapio vaidmuo.';
$string['check_frontpagerole_ok'] = 'Pradinio puslapio vaidmens apibrėžimas yra geras.';
$string['check_guestrole_details'] = '<p>Svečio vaidmuo naudojamas svečiams, neprisijungusiems vartotojams ir laikinajai svečio prieigai prie kursų. Įsitikinkite, kad šiam vaidmeniui nepriskirtos jokios rizikingos galimybės.</p> <p>Iš senstelėjusių tipų, tinkamų svečio vaidmeniui, palaikomas tik <em>Svečias</em>.</p>';
$string['check_guestrole_error'] = 'Svečio vaidmuo {$a} neteisingai apibrėžtas!';
$string['check_guestrole_name'] = 'Svečio vaidmuo';
$string['check_guestrole_notset'] = 'Nenustatytas svečio vaidmuo.';
$string['check_guestrole_ok'] = 'Svečio vaidmens apibrėžimas yra geras.';
$string['check_mediafilterswf_details'] = '<p>Labai pavojinga leisti automatiškai įdėti .swf – bet kuris registruotasis vartotojas gali paleisti XSS ataką prieš kitus serverio vartotojus. Išjunkite šį parametrą gamybos serveriuose.</p>';
$string['check_mediafilterswf_error'] = 'Įjungtas „flash“ medijų filtras – tai labai pavojinga daugumai serverių.';
$string['check_mediafilterswf_name'] = 'Įjungtas .swf medijų filtras';
$string['check_mediafilterswf_ok'] = '„Flash“ medijų filtras neįjungtas.';
$string['check_openprofiles_details'] = '<p>Atidarytais vartotojų profiliais gali piktnaudžiauti pašto šiukšlintojai. Rekomenduojama įjungti arba <code>Reikalauti, kad vartotojai prisijungtų prie profilių</code>, arba <code>Reikalauti, kad vartotojai prisijungtų</code>.</p>';
$string['check_openprofiles_error'] = 'Visi gali peržiūrėti vartotojų profilius neprisijungę.';
$string['check_openprofiles_name'] = 'Atidaryti vartotojų profiliai';
$string['check_openprofiles_ok'] = 'Reikalaujama prisijungti norint peržiūrėti vartotojų profilius.';
$string['check_passwordpolicy_details'] = '<p>Rekomenduojama nustatyti slaptažodžio strategiją, nes dažniausiai neteisėta prieiga gaunama atspėjus slaptažodį. Neiškelkite per griežtų reikalavimų, nes tada vartotojams bus sudėtinga prisiminti savo slaptažodį ir jie arba jį pamirš, arba turės užsirašyti.</p>';
$string['check_passwordpolicy_error'] = 'Nenustatyta slaptažodžio strategija.';
$string['check_passwordpolicy_name'] = 'Slaptažodžio strategija';
$string['check_passwordpolicy_ok'] = 'Slaptažodžio strategija įjungta.';
$string['check_riskadmin_detailsok'] = '<p>Patikrinkite pateiktą sistemos administratorių sąrašą:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Patikrinkite pateiktą sistemos administratorių sąrašą:</p>{$a->admins} <p>Rekomenduojama priskirti administratoriaus vaidmenį tik sistemos kontekste. Šiems vartotojams priskirtas (nepalaikomas) administratoriaus vaidmuo kituose kontekstuose:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratoriai';
$string['check_riskadmin_ok'] = 'Serverio administratorių rasta {$a}.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) peržiūrėti vaidmens priskyrimą</a>';
$string['check_riskadmin_warning'] = 'Serverio administratorių rasta {$a->admincount}, o nepalaikomų administratoriaus vaidmens priskyrimų rasta {$a->unsupcount}.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Šie atlikti pakeitimai suteikia vartotojams galimybę įtraukti vartotojo duomenis kuriant atsargines duomenų kopijas. Įsitikinkite, kad ši teisė yra reikalinga.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Šiuo metu šie sistemos vaidmenys suteikia vartotojams galimybę įtraukti vartotojo duomenis kuriant atsargines duomenų kopijas. Įsitikinkite, kad ši teisė yra reikalinga.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Aukščiau nurodyti vaidmenys arba pakeitimai vietinėje sistemoje toliau išvardytų vartotojų paskyroms šiuo metu suteikia teisę kurti atsargines kopijas, apimančias šiuose kursuose įregistruotųjų vartotojų asmeninius duomenis. Įsitikinkite, kad tos paskyros (a) yra patikimos ir (b) apsaugotos stipriais slaptažodžiais:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Jokie vaidmenys nesuteikia aiškių teisių kurti atsarginių vartotojo duomenų kopijų. Tačiau atminkite, kad administratoriai, turėdami galimybes daryti „viską“, vis dar gali jas kurti.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} kontekste {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href=rdblquote{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Vartotojo duomenų atsarginė kopija';
$string['check_riskbackup_ok'] = 'Jokie vaidmenys nesuteikia aiškių teisių daryti atsargines vartotojo duomenų kopijas';
$string['check_riskbackup_unassign'] = 'Jokie vaidmenys nesuteikia aiškių teisių kurti atsarginių vartotojo duomenų kopijų';
$string['check_riskbackup_warning'] = 'Vaidmenų rasta {$a->rolecount}, pakeitimų rasta {$a->overridecount}, o vartotojų rasta {$a->usercount} – visi jie turi galimybę kurti atsargines vartotojo duomenų kopijas.';
$string['check_riskxss_details'] = '<p>RISK_XSS nurodo visas rizikingas galimybes, kuriomis gali naudotis tik patikimi vartotojai.</p> <p>Patikrinkite toliau pateiktą vartotojų sąrašą, kad būtumėte tikri, jog visiškai pasitikite jų veikla šiame serveryje:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS patikimi vartotojai';
$string['check_riskxss_warning'] = 'RISK_XSS – vartotojų, kurie turi būti patikimi, rasta {$a}.';
$string['check_unsecuredataroot_details'] = '<p>Neturi būti galima pasiekti šakninio duomenų katalogo per žiniatinklį. Geriausias būdas užtikrinti, kad katalogas yra nepasiekiamas, yra naudoti katalogą už viešai prieinamo žiniatinklio katalogo ribų.</p> <p>Jei perkelsite katalogą, atitinkamai turėsite atnaujinti <code>$CFG->dataroot</code> parametrą faile <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Šakninis katalogas <code>{$a}</code> yra netinkamoje vietoje ir jis yra viešai prieinamas žiniatinklyje!';
$string['check_unsecuredataroot_name'] = 'Nesaugus šakninis duomenų katalogas';
$string['check_unsecuredataroot_ok'] = 'Neturi būti galima pasiekti šakninio duomenų katalogo per žiniatinklį.';
$string['check_unsecuredataroot_warning'] = 'Šakninis katalogas <code>{$a}</code> yra netinkamoje vietoje ir jis gali būti viešai prieinamas žiniatinklyje!';
$string['configuration'] = 'Konfigūracija';
$string['description'] = 'Aprašas';
$string['details'] = 'Išsami informacija';
$string['issue'] = 'Problema';
$string['pluginname'] = 'Saugos apžvalga';
$string['security:view'] = 'Peržiūrėti saugos ataskaitą';
$string['timewarning'] = 'Duomenų apdorojimas gali trukti ilgai, būkite kantrūs...';
