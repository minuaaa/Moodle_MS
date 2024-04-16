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
 * Strings for component 'tool_qeupgradehelper', language 'lt_uni', version '4.2'.
 *
 * @package     tool_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Veiksmas';
$string['alreadydone'] = 'Viskas buvo sukonvertuota';
$string['areyousure'] = 'Ar jūs tikras?';
$string['areyousuremessage'] = 'Ar norite tęsti atnaujindami visus {$a->numtoconvert} bandymus klausimyne \'{$a->name}\' kurse  {$a->shortname}?';
$string['areyousureresetmessage'] = 'Klausimynas  \'{$a->name}\' kurse {$a->shortname} turi {$a->totalattempts}, iš kurių  {$a->convertedattempts} buvo atnaujinti iš senos sistemos. Iš jų {$a->resettableattempts} gali būti perkrauti, tolimesnei pakartotiniai konversijai. Ar norite tęsti?';
$string['attemptstoconvert'] = 'Bandymai reikalaujantys konvertavimo';
$string['backtoindex'] = 'Atgal į pradinį puslapį';
$string['conversioncomplete'] = 'Konvertavimas baigtas';
$string['convertattempts'] = 'Konvertavimo bandymai';
$string['convertedattempts'] = 'Sukonvertuoti bandymai';
$string['convertquiz'] = 'Konvertuoti bandymus...';
$string['cronenabled'] = 'Kronas įjungtas';
$string['croninstructions'] = 'Jūs galite įjungti cron, kad automatiškai užbaigtų atnaujinimą sekantį po dalinio atnaujinimo. Cron pasileis tarp nustatytų valandų (pagal serverio laiką). Kiekvieną kartą kai cron pasijungia, jis dirbs tol kol laiko limitas pasibaigs, tada jis baigs darbą ir lauks kito karto. Net jei jūs nustatėte cron, jis nieko nedarys, nebent aptiks kad pagrindinis atnaujinimas į 2.1 buvo baigtas.';
$string['cronprocesingtime'] = 'Apdoroti laiką kiekvieno krono pasileidimo metu';
$string['cronsetup'] = 'Konfigūruoti kroną';
$string['cronsetup_desc'] = 'Galite konfigūruoti kroną norint pabaigti atnaujinimą';
$string['cronstarthour'] = 'Pradžios valanda';
$string['cronstophour'] = 'Pabaigos valanda';
$string['extracttestcase'] = 'Išskleisti testų atvejį';
$string['extracttestcase_desc'] = 'Naudokite pavyzdinius duomenis iš duomenų bazės. Tai padės jums atlikti testus kurie gali būti panaudoti testuojant atnaujinimus';
$string['gotoindex'] = 'Atgal į kvizų sąrašą, kurie gali būti atnaujinti';
$string['gotoquizreport'] = 'Eiti į šio kvizo ataskaitas norint peržiūrėti atnaujinimus';
$string['gotoresetlink'] = 'Eiti į kvizų sąrašą, kurie gali būti perkrauti';
$string['includedintheupgrade'] = 'Įtrauktą į atnaujinimą?';
$string['invalidquizid'] = 'Blogas kvizo ID. Arba kvizas neegzistuoja, arba jis neturi bandymų, kurie gali būti sukonvertuoti';
$string['listpreupgrade'] = 'Rodyti kvizus ir jų bandymus';
$string['listpreupgrade_desc'] = 'Tai parodys trumpą ataskaitą visų klausimynų sistemoje ir kiek bandymų jie turi. Tai padės jums suprasti kokį atnaujinimą turite padaryti.';
$string['listpreupgradeintro'] = 'Tai yra kiekis klausimyno bandymų kurį jums reikės apdoroti kai jūs atnaujinsite svetainę. Kelios dešimtys tūkstančių yra ne problema. Labiau jums reiktų pagalvoti kiek laiko reikės atnaujinimui.';
$string['listtodo'] = 'Rodyti kvizus kuriems vis dar reikia atnaujinimo';
$string['listtodo_desc'] = 'Tai jums parodys ataskaitą apie visus sistemos kvizus, kurie turi atliktus bandymus ir kurie turi būti atnaujinti naujam klausimų varikliui';
$string['listtodointro'] = 'Čia yra kvizai su bandymais, kurie turi būti sukonvertuoti. Jūs galite juos sukonvertuoti spaudžiant ant nuorodos';
$string['listupgraded'] = 'Rodyti atnaujintus kvizus, kurie gali būti perkrauti';
$string['listupgraded_desc'] = 'Tai parodys jums ataskaitą visų klausimynų sistemoje, kurių bandymai buvo atnaujinti ir kurių senieji duomenys dar tebėra, todėl atnaujinimas gali būti pakartotas ar perdarytas.';
$string['listupgradedintro'] = 'Čia yra visi klausimynai kurie turi bandymų ir buvo atnaujinti, ir senieji bandymų duomenys yra, todėl jie gali būti atstatyti, ir atnaujinimas perdarytas.';
$string['noquizattempts'] = 'Jūsų puslapis neturi jokių kvizų atlikimo bandymų';
$string['nothingupgradedyet'] = 'Jokie atnaujinti bandymai negali būti perkrauti';
$string['notupgradedsiterequired'] = 'Šis kodas gali veikti tik prieš tai, kai puslpis bus atnaujintas';
$string['numberofattempts'] = 'Kvizo bandymų skaičius';
$string['oldsitedetected'] = 'Čia puslapsi, kuris nebuvo atnaujintas, kad įtraukti naują klausimų variklį';
$string['outof'] = '{$a->some} iš {$a->total}';
$string['pluginname'] = 'Klausimų variklio antaujinimo pagalba';
$string['pretendupgrade'] = 'Atlikti paleidimą bandymam atnaujinti';
$string['pretendupgrade_desc'] = 'Atnaujinimas padaro tris dalykus: Įkelia esančius duomenis iš duomenų bazės; pertvarko juos; tada surašo pertvarkytus duomenis į DB. Šis scenarijus patikrins pirmąsias dvi dalis šio proceso.';
$string['questionsessions'] = 'Klausimų sesijos';
$string['quizid'] = 'Kvizo ID';
$string['quizupgrade'] = 'Kvizo atnaujinimo statusas';
$string['quizzesthatcanbereset'] = 'Šie kvizai turi sukonvertuotus bandymus, kuriuos jūs galite perkrauti';
$string['quizzestobeupgraded'] = 'Visi kvizai su atnaujinimais';
$string['quizzeswithunconverted'] = 'Šie kvizai turi bandymų, kurie turi būti sukonvertuoti';
$string['resetcomplete'] = 'Perkrovimas vaigtas';
$string['resetquiz'] = 'Perkrauti bandymus...';
$string['resettingquizattempts'] = 'Perkraunami kvizo bandymai';
$string['resettingquizattemptsprogress'] = 'Bandymai perkrauti {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = 'Tai yra puslapis kuris buvo atnaujintas ir turi naują klausimų varikliuką.';
$string['upgradedsiterequired'] = 'Šis scenarijus gali veikti tik atnaujinus svetainę.';
$string['upgradingquizattempts'] = 'Atnaujinami bandymai klausimynui \'{$a->name}\' kurse {$a->shortname}';
$string['veryoldattemtps'] = 'Jūsų svetainė turi {$a} klausimyno bandymus kurie niekada nebuvo pilnai atnaujinti per atnaujinimą iš Moodle 1.4 į Moodle 1.5. Šie atnaujinimai bus sprendžiami prieš pagrindinį atnaujinimą. Jums reikia apsvarstyti kiek papildomai laiko tai užims.';
