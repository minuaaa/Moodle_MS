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
 * Strings for component 'enrol_self', language 'lt_uni', version '4.2'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = 'Pasirinktinis pasveikinimo pranešimas';
$string['defaultrole'] = 'Numatytasis vaidmens priskyrimas';
$string['defaultrole_desc'] = 'Pasirinkti vaidmenį, kurį reikia priskirti vartotojams įsiregistruojant';
$string['enrolenddate'] = 'Pabaigos data';
$string['enrolenddate_help'] = 'Jei įjungta, vartotojai gali save registruoti tik iki šios datos.';
$string['enrolenddaterror'] = 'Registracijos pabaigos data negali būti ankstesnė nei pradžios data';
$string['enrolme'] = 'Įregistruoti mane';
$string['enrolperiod'] = 'Registracijos laikotarpis';
$string['enrolperiod_desc'] = 'Numatytoji registracijos laikotarpio trukmė (sekundėmis).';
$string['enrolperiod_help'] = 'Laikas iki kada registracija yra įgalinta, pradedant nuo tada kai vartotojai save priregistravo.Jei išjungta, tai registracijos trukmė neapibrėžta.';
$string['enrolstartdate'] = 'Pradžios data';
$string['enrolstartdate_help'] = 'Jei įjungta, vartotojai gali registruoti save  tik nuo šios dienos.';
$string['groupkey'] = 'Naudoti grupinės registracijos raktus';
$string['groupkey_desc'] = 'Naudoti grupinės registracijos raktus pagal numatytuosius nustatymus.';
$string['groupkey_help'] = 'Šalia prieigos prie kursų apribojimo tik tiems, kas žino raktą, papildomai naudojamas grupinės registracijos raktas reikš, kad vartotojai bus automatiškai įtraukiami į grupę, kai įsiregistruos į kursus. Norint naudoti grupinės registracijos raktą, registracijos raktas turi būti nurodytas ir kursų, ir grupės parametruose';
$string['longtimenosee'] = 'Išregistruoti neaktyvius praėjus';
$string['longtimenosee_help'] = 'Vartotojai ilgą laiką neprisijungę prie kursų automatiškai išregistruojami. Šiame parametre nurodomas laiko limitas.';
$string['maxenrolled'] = 'Maks. įregistruotų vartotojų skaičius';
$string['maxenrolled_help'] = 'Nurodo maksimalų vartotojų, kurie gali įsiregistruoti, skaičių. 0 reiškia, kad apribojimų nėra';
$string['maxenrolledreached'] = 'Maksimalus vartotojų, kuriems leidžiama įsiregistruoti, skaičius jau pasiektas.';
$string['nopassword'] = 'Įsirašymo raktas nereikalingas';
$string['password'] = 'Registracijos raktas';
$string['password_help'] = 'Registracijos raktas leidžia apriboti prieigą prie kursų tik tiems, kas žino raktą. Jei laukas paliekamas tuščias, į kursus gali įsiregistruoti bet kuris vartotojas. Jei nurodytas registracijos raktas, bet kurio į kursus bandančio įsiregistruoti vartotojo bus reikalaujama pateikti raktą. Atminkite, kad registracijos raktą vartotojui reikia pateikti tik VIENĄ KARTĄ – įsiregistruojant į kursus.';
$string['passwordinvalid'] = 'Klaidingas registracijos raktas, bandykite dar kartą';
$string['passwordinvalidhint'] = 'Šis registracijos raktas klaidingas, bandykite dar kartą<br /> (Užuomina – jis pradedamas {$a})';
$string['pluginname'] = 'Savarankiška registracija';
$string['pluginname_desc'] = 'Įsiregistravimo papildinys leidžia vartotojams pasirinkti, kuriuose kursuose jie nori dalyvauti. Kursai gali būti apsaugoti registracijos raktu. Viduje registracija atliekama naudojant rankinį registracijos papildinį, kuris turi būti įjungtas tuose pačiuose kursuose.';
$string['requirepassword'] = 'Reikalauti registracijos rakto';
$string['requirepassword_desc'] = 'Reikalauti registracijos į naujus kursus rakto ir neleisti pašalinti registracijos rakto iš esamų kursų.';
$string['role'] = 'Priskirti vaidmenį';
$string['self:config'] = 'Konfigūruoti įregistravimo egzempliorius';
$string['self:manage'] = 'Valdyti įregistruotus vartotojus';
$string['self:unenrol'] = 'Išregistruoti vartotojus iš kursų';
$string['self:unenrolself'] = 'Išsiregistruoti iš kursų';
$string['sendcoursewelcomemessage'] = 'Siųsti kursų pasveikinimo pranešimą';
$string['sendcoursewelcomemessage_help'] = 'Jei įjungta, vartotojai gaus pasveikinimo pranešimą el. paštu, kai įsiregistruos į kursus.';
$string['showhint'] = 'Rodyti užuominą';
$string['showhint_desc'] = 'Rodyti pirmą svečio prieigos rakto raidę.';
$string['status'] = 'Leisti savarankišką registraciją';
$string['status_desc'] = 'Pagal numatytuosius nustatymus leisti vartotojams įsiregistruoti į kursus';
$string['status_help'] = 'Šis parametras nustato, ar vartotojas gali išsiregistruoti iš kursų (taip pat išregistruoja vartotojus, jei jie neturi reikiamų teisių).';
$string['unenrol'] = 'Išregistruoti vartotoją';
$string['unenrolselfconfirm'] = 'Ar tikrai norite išsiregistruoti iš kursų {$a}?';
$string['unenroluser'] = 'Ar tikrai norite išregistruoti "{$a->user}" iš paskaitos "{$a->course}"?';
$string['usepasswordpolicy'] = 'Naudoti slaptažodžio strategiją';
$string['usepasswordpolicy_desc'] = 'Naudoti standartinę registracijos raktų slaptažodžio strategiją.';
$string['welcometocourse'] = 'Sveiki, čia {$a}';
$string['welcometocoursetext'] = 'Sveiki, čia {$a->coursename}! Jei to dar nepadarėte, turite redaguoti savo profilio puslapį, kad galėtume daugiau apie jus sužinoti: {$a->profileurl}.';
