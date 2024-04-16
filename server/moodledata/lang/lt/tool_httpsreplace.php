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
 * Strings for component 'tool_httpsreplace', language 'lt', version '4.2'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Užbaigtas';
$string['count'] = 'Įterpto turinio elementų skaičius';
$string['disclaimer'] = 'Suprantu šios operacijos riziką';
$string['doclink'] = 'HTTPS konvertavimo įrankis';
$string['doit'] = 'Atlikti konvertavimą';
$string['domain'] = 'Probleminis domenas';
$string['domainexplain'] = 'Kai svetainė perkeliama iš HTTP į HTTPS, visas įterptas HTTP turinys nustos veikti. Šis įrankis leidžia automatiškai konvertuoti HTTP turinį į HTTPS.

Prieš atliekant konvertavimą, turinys bus nuskaitytas, siekiant rasti URL, kurie po konvertavimo gali neveikti. Galbūt norėsite patikrinti, ar kiekviename iš jų yra pasiekiamas HTTPS, arba rasti alternatyvių išteklių.';
$string['domainexplainhelp'] = 'Šie domenai yra jūsų turinyje, bet nepalaiko HTTPS turinio. Perėjus prie HTTPS, turinys iš šių svetainių nebebus rodomas Moodle naudotojams, turintiems saugias šiuolaikines naršykles. Gali būti, kad šios svetainės laikinai arba visam laikui nepasiekiamos ir neveiks su nė vienu saugos parametru. Tęskite tik peržiūrėję šiuos rezultatus ir nustatę, ar šis išorėje priglobtas turinys nėra esminis. Pastaba: šis turinys vis tiek nebeveiks perėjus prie HTTPS.';
$string['httpwarning'] = 'Šis egzempliorius vis dar veikia HTTP. Vis tiek galite paleisti šį įrankį ir išorinis turinys bus pakeistas į HTTPS, tačiau vidinis turinys liks HTTP. Norėdami konvertuoti vidinį turinį, perjungę į HTTPS turėsite dar kartą paleisti šį scenarijų.';
$string['notimplemented'] = 'Atsiprašome, ši funkcija neįdiegta jūsų duomenų bazės tvarkyklėje.';
$string['oktoprocede'] = 'Nuskaitymas neranda jokių problemų su jūsų turiniu. Galite atnaujinti bet kokį HTTP turinį, kad galėtumėte naudoti HTTPS.';
$string['pageheader'] = 'Atnaujinti išoriškai priglobto turinio URL į HTTPS';
$string['pluginname'] = 'HTTPS konvertavimo įrankis';
$string['privacy:metadata'] = '';
$string['replacing'] = 'HTTP turinys pakeičiamas HTTPS...';
$string['searching'] = 'Searching {$a}';
$string['takeabackupwarning'] = 'Įspėjimas: paleidus šį įrankį pakeitimų atšaukti negalima. Prieš tęsiant rekomenduojama pasidaryti atsarginę svetainės kopiją, nes yra nedidelė rizika, kad bus pakeistas netinkamas turinys.';
$string['toolintro'] = 'Jei planuojate konvertuoti svetainę į HTTPS, galite naudoti  <a href="{$a}">HTTPS konvertavimo įrankis</a>, kad įterptąjį turinį konvertuotumėte į HTTPS.';
