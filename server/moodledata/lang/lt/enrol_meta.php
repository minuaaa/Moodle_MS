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
 * Strings for component 'enrol_meta', language 'lt', version '4.2'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Pridėti į grupę';
$string['coursesort'] = 'Rikiuoti kurso sąrašą';
$string['coursesort_help'] = 'Tai nustato, ar kursų, kuriuos galima susieti, sąrašas yra rūšiuojamas pagal rūšiavimo tvarką (t. y. tvarka, nustatyta Svetainės administravimas > Kursai > Tvarkyti kursus ir kategorijas), ar abėcėlės tvarka pagal kurso nustatymą.';
$string['creategroup'] = 'Kurti naują grupę';
$string['defaultgroupnametext'] = '{$a->name} kursas {$a->increment}';
$string['enrolmetasynctask'] = 'Meta įregistravimo sinchronizavimo užduotis';
$string['linkedcourse'] = 'Susieti kursai';
$string['meta:config'] = 'Konfigūruoti įregistravimo į metakursus egzempliorius';
$string['meta:selectaslinked'] = 'Pasirinkti kursus kaip susietus metasaitais';
$string['meta:unenrol'] = 'Išregistruoti sulaikytus naudotojus';
$string['nosyncroleids'] = 'Vaidmenys, kurie nėra sinchronizuoti';
$string['nosyncroleids_desc'] = 'Pagal numatytuosius nustatymus visi kursų lygio vaidmenų priskyrimai sinchronizuojami iš pirminių kursų į antrinius. Čia pasirinkti vaidmenys nebus įtraukti į sinchronizavimo procesą. Dabartiniai vaidmenys bus atnaujinti kito „Cron“ vykdymo metu.';
$string['pluginname'] = 'Kursų metasaitas';
$string['pluginname_desc'] = 'Kursų metasaito registracijos papildinys sinchronizuoja registracijas ir vaidmenis į du skirtingus kursus.';
$string['privacy:metadata:core_group'] = 'Registracijos meta papildinys gali sukurti naują grupę arba naudoti esamą grupę, kad įtrauktų visus susieto kurso dalyvius.';
$string['syncall'] = 'Sinchronizuoti visus registruotus naudotojus';
$string['syncall_desc'] = 'Jei įjungta visi registruoti naudotojai yra sinchronizuojami netgi jei jie neturi jokios rolės savo pirminiame kurse, jei išjungta tik naudotojai turintys bent vieną sinchronizuotą rolę yra įregistruojami į kursą';
$string['wscannotcreategroup'] = 'Nėra leidimo kurti grupę susietame kurse, kurio ID = {$a}.';
$string['wsinvalidcourse'] = 'Kurso ID = {$a} nėra arba nėra leidimo susieti meta registracijoje.';
$string['wsinvalidmetacourse'] = 'Meta kurso ID = {$a} nėra arba nėra leidimo pridėti registracijos egzempliorių.';
$string['wsnoinstancesspecified'] = 'Jokių atvejų nenurodyta';
