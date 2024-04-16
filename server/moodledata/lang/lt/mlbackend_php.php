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
 * Strings for component 'mlbackend_php', language 'lt', version '4.2'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Tik dalis duomenų rinkinio buvo įvertinta dėl jo dydžio. Nustatykite $CFG->mlbackend_php_no_memory_limit, jei esate tikri, kad jūsų sistema gali susidoroti su {$a} duomenų rinkiniu.';
$string['errorcantloadmodel'] = 'Modelio failas {$a} neegzistuoja. Modelis turi būti apmokytas prieš naudojant jį prognozėms.';
$string['errorlowscore'] = 'Įvertinto modelio numatymo tikslumas nėra labai didelis, todėl kai kurios prognozės gali būti netikslios. Modelio balas = {$a->score}, minimalus balas = {$a->minscore}';
$string['errornotenoughdata'] = 'Nepakanka duomenų šiam modeliui įvertinti naudojant pateiktą analizės intervalą.';
$string['errornotenoughdatadev'] = 'Vertinimo rezultatai per daug skyrėsi. Kad modelis būtų tinkamas, rekomenduojama surinkti daugiau duomenų. Įvertinimo rezultatų standartinis nuokrypis = {$a->deviation}, didžiausias rekomenduojamas standartinis nuokrypis = {$a->accepteddeviation}';
$string['errorphp7required'] = 'PHP mašininio mokymosi programai reikalinga PHP 7';
$string['pluginname'] = 'PHP mašininio mokymosi programa';
$string['privacy:metadata'] = 'PHP mašininio mokymosi backend papildinys nesaugo jokių asmeninių duomenų.';
