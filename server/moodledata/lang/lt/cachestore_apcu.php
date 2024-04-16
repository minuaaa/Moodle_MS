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
 * Strings for component 'cachestore_apcu', language 'lt', version '4.2'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Atminkite, kad APCu yra tinkamas pasirinkimas tik vieno mazgo svetainėms arba talpykloms, kurias galima saugoti vietoje.
Norėdami gauti daugiau informacijos, žr. <a href="{$a}">APC naudotojo talpyklos dokumentus</a>.';
$string['notice'] = 'Pastebėti';
$string['pluginname'] = 'APC naudotojo talpykla (APCu)';
$string['prefix'] = 'Prefiksas';
$string['prefix_help'] = 'Aukščiau pateiktas priešdėlis naudojamas visiems raktams, saugomiems šiame APC saugyklos egzemplioriuje. Pagal numatytuosius nustatymus naudojamas duomenų bazės priešdėlis.';
$string['prefixinvalid'] = 'Pasirinktas priešdėlis neteisingas. Galite naudoti tik a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Pasirinktas priešdėlis nėra unikalus. Pasirinkite unikalų priešdėlį.';
$string['privacy:metadata'] = 'APC naudotojo talpyklos (APCu) papildinys trumpai saugo duomenis kaip savo talpyklos funkcijos dalį, tačiau šie duomenys reguliariai išvalomi ir jokiu būdu nesiunčiami iš išorės.';
$string['testperformance'] = 'Bandyti našumą';
$string['testperformance_desc'] = 'Jei įjungta, APCu našumas bus įtrauktas peržiūrint našumo tikrinimo puslapį. Nerekomenduojama to įjungti produkciniame.';
