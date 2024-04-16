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
 * Strings for component 'enrol_flatfile', language 'lt_uni', version '4.2'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = 'Tekstinio failo, kurį naudojate failu pagrįstoms registracijoms ({$a}), negalima panaikinti „Cron“ procesu. Paprastai tai reiškia, kad šiam veiksmui atlikti netinkamos teisės. Pakoreguokite teises, kad „Moodle“ galėtų panaikinti failą, antraip jis gali būti pakartotinai apdorotas.';
$string['filelockedmailsubject'] = 'Svarbi klaida: registracijos failas';
$string['location'] = 'Failo vieta';
$string['mapping'] = 'Standartinio failo susiejimas';
$string['pluginname'] = 'Puslapis';
$string['pluginname_desc'] = 'Šiuo metodu bus pakartotinai tikrinamas ir apdorojamas specialiai formatuotas tekstinis failas jūsų nurodytoje vietoje. Laikoma, kad atskirtas kableliu failas vienoje eilutėje turi keturis ar šešis laukus: <pre class="informationbox"> * operation, role, idnumber(user), idnumber(course) [, starttime, endtime] where: * operation = add | del * role = student | teacher | teacheredit * idnumber(user) = idnumber in the user table NB not id * idnumber(course) = idnumber in the course table NB not id * starttime = start time (in seconds since epoch) - optional * endtime = end time (in seconds since epoch) - optional </pre> Pateikimas turėtų būti panašus į šį: <pre class="informationbox"> add, student, 5, CF101 add, teacher, 6, CF101 add, teacheredit, 7, CF101 del, student, 8, CF101 del, student, 17, CF101 add, student, 21, CF101, 1091115000, 1091215000 </pre>';
