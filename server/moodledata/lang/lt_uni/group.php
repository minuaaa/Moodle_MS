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
 * Strings for component 'group', language 'lt_uni', version '4.2'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Pridėjo {$a}';
$string['addgroupstogrouping'] = 'Įtraukti grupę į grupavimą';
$string['addgroupstogroupings'] = 'Įtraukti / pašalinti grupes';
$string['adduserstogroup'] = 'Įtraukti / pašalinti vartotojus';
$string['allocateby'] = 'Priskirti narius';
$string['anygrouping'] = '[Bet koks grupavimas]';
$string['autocreategroups'] = 'Automatiškai kurti grupes';
$string['backtogroupings'] = 'Grįžti į grupavimus';
$string['backtogroups'] = 'Grįžti į grupes';
$string['badnamingscheme'] = 'Turi būti tik vienas simbolis @ arba vienas simbolis #';
$string['byfirstname'] = 'Abėcėlės tvarka pagal vardą, pavardę';
$string['bylastname'] = 'Abėcėlės tvarka pagal pavardę, vardą';
$string['createautomaticgrouping'] = 'Kurti automatinį grupavimą';
$string['creategroup'] = 'Kurti grupę';
$string['creategrouping'] = 'Kurti grupavimą';
$string['creategroupinselectedgrouping'] = 'Kurti grupę grupavime';
$string['createingrouping'] = 'Kurti grupavime';
$string['createorphangroup'] = 'Kurti vienišąją grupę';
$string['databaseupgradegroups'] = 'Dabartinė grupių versija yra {$a}';
$string['defaultgrouping'] = 'Numatytasis grupavimas';
$string['defaultgroupingname'] = 'Grupavimas';
$string['defaultgroupname'] = 'Grupė';
$string['deleteallgroupings'] = 'Naikinti visus grupavimus';
$string['deleteallgroups'] = 'Naikinti visas grupes';
$string['deletegroupconfirm'] = 'Ar tikrai norite naikinti grupę {$a}?';
$string['deletegrouping'] = 'Naikinti grupavimą';
$string['deletegroupingconfirm'] = 'Ar tikrai norite naikinti grupavimą {$a}? (Grupės nepanaikintos iš grupavimo.)';
$string['deletegroupsconfirm'] = 'Ar tikrai norite naikinti šias grupes?';
$string['deleteselectedgroup'] = 'Naikinti pasirinktą grupę';
$string['editgroupingsettings'] = 'Redaguoti grupavimo parametrus';
$string['editgroupsettings'] = 'Redaguoti grupės parametrus';
$string['enrolmentkey'] = 'Registracijos raktas';
$string['enrolmentkey_help'] = 'Registracijos raktas leidžia apriboti kursų prieigą, kad jie būtų pasiekiami tik žinantiems raktą. Jei nurodytas grupės registracijos raktas, tada įvedus raktą vartotojas ne tik įleidžiamas į kursus, bet ir automatiškai padaromas tos grupės nariu.';
$string['erroraddremoveuser'] = 'Įvyko klaida įtraukiant vartotoją {$a} į grupę arba šalinant iš grupės';
$string['erroreditgroup'] = 'Įvyko klaida kuriant / atnaujinat grupę {$a}';
$string['erroreditgrouping'] = 'Įvyko klaida kuriant / atnaujinat grupavimą {$a}';
$string['errorinvalidgroup'] = 'Įvyko klaida, neleistina grupė {$a}';
$string['errorselectone'] = 'Pasirinkite vieną grupę prieš pasirinkdami šią parinktį';
$string['errorselectsome'] = 'Pasirinkite vieną ar daugiau grupių prieš pasirenkant šią parinktį';
$string['evenallocation'] = 'Pastaba: kad grupavimas būtų priskiriamas tolygiai, faktinis ir nurodytasis grupės narių skaičius turi skirtis.';
$string['groupaddedsuccesfully'] = 'Grupė {$a} įtraukta sėkmingai';
$string['grouping_help'] = 'Grupavimas yra kursų grupių rinkinys. Jei pasirenkamas grupavimas, grupavimo grupėms priskirti klausytojai galės dirbti kartu.';
$string['groupingnameexists'] = 'Grupavimo pavadinimas {$a} jau yra šiuose kursuose, pasirinkite kitą.';
$string['groupingsonly'] = 'Tik grupavimai';
$string['groupmemberdesc'] = 'Standartinis grupės nario vaidmuo.';
$string['groupmemberssee'] = 'Rodyti grupės narius';
$string['groupmode_help'] = 'Šiame parametre yra 3 parinktys: *nėra grupių – nėra pogrupių, viskas sudaro vieną didelę visumą; *atskiros grupės – kiekvienas grupės narys gali matyti tik savo grupę, kitos grupės nematomos; *matomos grupės – kiekvienas grupės narys dirba savo grupėje, bet gali matyti ir kitas grupes. Grupės režimas, apibrėžtas kursų lygiu, yra numatytasis visų kursų veiklų režimas. Kiekvieną grupes palaikančią veiklą galima apibrėžti savos grupės režimu, net jei grupės režimas kursų lygiu taikomas priverstinai, kiekvienai veiklai skirto grupės režimo parametro nepaisoma.';
$string['groupmodeforce'] = 'Priverstinai taikyti grupės režimą';
$string['groupmodeforce_help'] = 'Jei grupės režimas taikomas priverstinai, kursų grupės režimas taikomas kiekvienai kursų veiklai. Tada grupės režimo parametrų kiekvienoje veikloje nepaisoma.';
$string['groupnameexists'] = 'Grupės pavadinimas {$a} jau yra šiuose kursuose, pasirinkite kitą.';
$string['groupnotamember'] = 'Atsiprašome, bet jūs nesate tos grupės narys';
$string['groupscount'] = 'Grupės ({$a})';
$string['groupsgroupings'] = 'Grupės ir grupavimai';
$string['groupsinselectedgrouping'] = 'Grupės, esančios:';
$string['groupsonly'] = 'Tik grupės';
$string['groupsseparate'] = 'Atskiros grupės';
$string['hidepicture'] = 'Slėpti paveikslėlį';
$string['importgroups_help'] = 'Grupes galima importuoti tekstiniu failu. Failo formatas turi būti toks: * kiekvienoje failo eilutėje turi būti vienas įrašas; * kiekvienas įrašas duomenų sekoje turi būti atskirtas kableliu; * pirmajame įraše turi būti laukų pavadinimų, apibrėžiančių kitų failo įrašų formatą, sąrašas; * būtinas lauko pavadinimas yra grupės pavadinimas; * pasirinktiniai lauko pavadinimai yra aprašas, registracijos raktas, paveikslėlis, paveikslėlio slėpimas.';
$string['javascriptrequired'] = 'Reikia, kad šiam puslapiui būtų įjungtas „JavaScript“.';
$string['members'] = 'Vienos grupės narių skaičius';
$string['membersofselectedgroup'] = 'Nariai, priklausantys:';
$string['namingscheme'] = 'Pavadinimo priskyrimo schema';
$string['namingscheme_help'] = 'Kuriant grupes, kurių pavadinimuose yra raidžių, galima naudoti simbolį @. Pavyzdžiui, grupė @ sugeneruos grupes, kurių pavadinimai grupė A, grupė B, grupė C, ... Grotelių simbolį (#) galima naudoti kuriant grupes, kurių pavadinimuose yra skaičiai. Pavyzdžiui, grupė # sugeneruos grupes, kurių pavadinimai grupė 1, grupė 2, grupė 3, ...';
$string['newpicture_help'] = 'Pasirinkite JPG arba PNG formato vaizdą. Vaizdas bus apkarpytas, kad sudarytų kvadratą, o jo dydis būtų 100x100 pikselių.';
$string['noallocation'] = 'Nėra priskyrimo';
$string['nogroups'] = 'Šiuose kursuose dar nenustatytos grupės';
$string['nogroupsassigned'] = 'Grupės nepriskirtos';
$string['nopermissionforcreation'] = 'Negalima sukurti grupės {$a}, nes neturite būtinų teisių';
$string['nosmallgroups'] = 'Stenkitės, kad paskutinė grupė nebūtų maža';
$string['notingrouping'] = '[Nėra grupavime]';
$string['nousersinrole'] = 'Nėra tinkamų pasirinkto vaidmens vartotojų';
$string['number'] = 'Grupių / narių skaičius';
$string['nummembers'] = 'Vienos grupės narių skaičius';
$string['potentialmembers'] = 'Potencialūs nariai: {$a}';
$string['potentialmembs'] = 'Potencialūs nariai';
$string['printerfriendly'] = 'Spausdintuvui pritaikytas ekranas';
$string['removefromgroup'] = 'Pašalinti vartotoją iš grupės {$a}';
$string['removefromgroupconfirm'] = 'Ar tikrai norite pašalinti vartotoją {$a->user} iš grupės {$a->group}?';
$string['removegroupfromselectedgrouping'] = 'Pašalinti grupę iš grupavimo';
$string['removeselectedusers'] = 'Pašalinti pasirinktus vartotojus';
$string['selectfromrole'] = 'Pasirinkti narius iš vaidmens';
$string['showmembersforgroup'] = 'Rodyti grupės narius';
$string['toomanygroups'] = 'Nepakanka vartotojų, kad būtų galima įdėti tiek grupių – pasirinktame vaidmenyje yra tik {$a} vartotojai (-ų).';
$string['usergroupmembership'] = 'Pasirinkto vartotojo narystė:';
