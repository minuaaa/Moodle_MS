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
 * Strings for component 'quizaccess_ipaddresslist', language 'lt', version '4.2'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Pridėti lokaciją';
$string['allowedsubnets'] = 'Leidžiamos lokacijos';
$string['allowedsubnets_help'] = 'Prieiga prie testo gali būti ribojama tam tikrose vietose, atsižvelgiant į vartotojo IP adresą. Vietų sąrašą ir atitinkamus IP potinklius nustato svetainės administratorius. Jei norite neleisti šios vietos patikros, išjunkite vietos tikrinimą.';
$string['editsubnet'] = 'Lokacijos koregavimas';
$string['managesubnets'] = 'Lokacijų valdymas';
$string['pluginname'] = 'IP adresų sąrašo testo prieigos taisyklė';
$string['subnet'] = 'IP potinklis';
$string['subnet_help'] = 'Nurodykite kableliais atskirtą dalinių arba pilnų IP adresų sąrašą.

Pavyzdžiai:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'Šis testas prieinamas tik iš tam tikrų vietų, o šis įrenginys nepatenka į leidžiamų sąrašą.';
