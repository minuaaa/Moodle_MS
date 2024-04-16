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
 * Strings for component 'repository_onedrive', language 'lt', version '4.2'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Prieiga';
$string['both'] = 'Vidinis ir išorinis';
$string['cachedef_folder'] = '„OneDrive“ failų ID sistemos paskyroje esantiems aplankams';
$string['configplugin'] = 'Konfigūruoti OneDrive papildinį';
$string['confirmimportskydrive'] = 'Ar tikrai norite importuoti visus failus iš „Microsoft SkyDrive“ saugyklos į „Microsoft OneDrive“ saugyklą? Kad importuoti failai veiktų kaip anksčiau, „Microsoft OneDrive“ saugykla turi būti sukonfigūruota ir veikti. Įspėjimas: šio veiksmo anuliuoti negalima!';
$string['defaultreturntype'] = 'Numatytasis grąžinimo tipas';
$string['external'] = 'Išorinis (tik Moodle saugomos nuorodos)';
$string['fileoptions'] = 'Čia galima konfigūruoti grąžinamų failų tipus ir numatytuosius nustatymus. Atminkite, kad visi išoriškai susieti failai bus atnaujinti, kad savininkas būtų „Moodle“ sistemos paskyra.';
$string['importskydrivefiles'] = 'Importuoti failus iš „Microsoft SkyDrive“ saugyklos';
$string['internal'] = 'Vidinis (failai saugomi Moodle)';
$string['issuer'] = '„OAuth 2“ paslauga';
$string['issuer_help'] = 'Pasirinkite OAuth 2 paslaugą, sukonfigūruotą bendrauti su OneDrive API. Jei paslauga dar neegzistuoja, turėsite ją sukurti.';
$string['mysitenotfound'] = 'Niekada anksčiau nebuvote prisijungę prie OneDrive. Turite prisijungti prie OneDrive bent kartą, kad galėtumėte jį naudoti su Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Nuoroda į OAuth 2 paslaugų konfigūraciją">OAuth 2 paslaugų konfigūracija</a>';
$string['onedrive:view'] = 'Žiūrėti OneDrive';
$string['owner'] = 'Priklauso: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = '„Microsoft OneDrive“ saugykla saugo laikinus prieigos leidimus ir perduoda naudotojo duomenis iš „Moodle“ į nuotolinę sistemą.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = '„Microsoft OneDrive“ su laikinos prieigos suteikimo elemento ID.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = '„Microsoft OneDrive“ laikinosios prieigos suteikimo leidimo ID.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = '„Microsoft OneDrive“ laikinosios prieigos suteikimo sukūrimo data / laikas.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = '„Microsoft OneDrive“ laikinosios prieigos suteikimo modifikavimo data / laikas.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'Naudotojo, keičiančio Microsoft OneDrive laikinosios prieigos suteikimą, ID.';
$string['privacy:metadata:repository_onedrive:searchtext'] = '„Microsoft OneDrive“ saugyklos naudotojo paieškos teksto užklausa.';
$string['removetempaccesstask'] = 'Pašalinti laikiną rašymo prieigą iš valdomų nuorodų';
$string['searchfor'] = 'Ieškoti {$a}';
$string['servicenotenabled'] = 'Prieiga nesukonfigūruota.';
$string['skydrivefilesexist'] = '„Microsoft SkyDrive“ saugykla įjungta, tačiau ji nebenaudojama. Įsitikinkite, kad kuo greičiau failai būtų perkeliami iš „SkyDrive“ į „OneDrive“ saugyklą. Moodle 4.4 tai nebebus įmanoma.';
$string['skydrivefilesimported'] = 'Visi failai buvo importuoti iš „Microsoft SkyDrive“ saugyklos.';
$string['skydrivefilesnotimported'] = 'Kai kurių failų nepavyko importuoti iš „Microsoft SkyDrive“ saugyklos.';
$string['supportedreturntypes'] = 'Palaikomi failai';
