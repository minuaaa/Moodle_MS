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
 * Strings for component 'repository_nextcloud', language 'lt', version '4.2'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Vidinis ir išorinis';
$string['cannotconnect'] = 'Nepavyko nustatyti naudotojo tapatybės. Prisijunkite ir tada įkelkite failą.';
$string['chooseissuer'] = 'Išdavėjas';
$string['chooseissuer_help'] = 'Norėdami pridėti naują išdavėją, eikite į Svetainės administravimas / Serveris / OAuth 2 paslaugos.';
$string['configplugin'] = 'Nextcloud saugyklos konfigūracija';
$string['configuration_exception'] = 'Įvyko „OAuth 2“ kliento konfigūracijos klaida: {$a}';
$string['contactadminwith'] = 'Prašomo veiksmo atlikti nepavyko. Jei tai kartojasi, susisiekite su svetainės administratoriumi ir pateikite šią papildomą informaciją:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Prašomo failo nepavyko perkelti į aplanką {$a}.';
$string['defaultreturntype'] = 'Numatytasis grąžinimo tipas';
$string['endpointnotdefined'] = 'Galutinis taškas {$a} neapibrėžtas.';
$string['external'] = 'Išorinė (tik Moodle saugomos nuorodos)';
$string['externalpubliclinkwarning'] = 'Įspėjimas: šis failas taps viešas.';
$string['filenotaccessed'] = 'Nepavyko pasiekti prašomo failo. Patikrinkite, ar pasirinkote tinkamą failą ir ar esate autentifikuotas naudojant tinkamą paskyrą.';
$string['fileoptions'] = 'Čia galima konfigūruoti grąžinamų failų tipus ir numatytuosius nustatymus. Atminkite, kad visi išoriškai susieti failai bus atnaujinti, kad savininkas būtų „Moodle“ sistemos paskyra.';
$string['foldername'] = 'Aplanko, sukurto Nextcloud naudotojų privačioje erdvėje, kuriame yra visos prieigos kontroliuojamos nuorodos, pavadinimas.';
$string['foldername_help'] = 'Siekiant užtikrinti, kad naudotojai rastų su jais bendrinamus failus, bendrinimai išsaugomi tam tikrame aplanke.

Šis nustatymas nustato aplanko pavadinimą. Rekomenduojama pasirinkti pavadinimą, susietą su jūsų Moodle egzemplioriumi.';
$string['internal'] = 'Vidinis (failai saugomi Moodle)';
$string['invalidresponse'] = 'Netinkamas serverio atsakymas.';
$string['issuervalidation_invalid'] = 'Šiuo metu {$a} išdavėjas yra aktyvus, tačiau jis neįgyvendina visų būtinų galinių taškų. Saugykla neveiks.';
$string['issuervalidation_valid'] = 'Šiuo metu {$a} išdavėjas yra aktyvus.';
$string['issuervalidation_without'] = 'Dar nepasirinkote „Nextcloud“ serverio kaip „OAuth 2“ išdavėjo.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Žiūrėti Nextcloud';
$string['no_right_issuers'] = 'Nė vienas iš esamų leidėjų neįdiegė visų būtinų galinių taškų. Užregistruokite atitinkamą išdavėją.';
$string['noclientconnection'] = 'Nepavyko prisijungti prie „OAuth“ klientų.';
$string['notauthorized'] = 'Jūs neturite teisės vykdyti šios užklausos. Įsitikinkite, kad esate autentifikuotas naudojant tinkamą paskyrą.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Nuoroda į OAuth 2 paslaugų konfigūraciją">OAuth 2 paslaugų konfigūracija</a>';
$string['pathnotcreated'] = 'Sistemos paskyroje nepavyko sukurti aplanko kelio {$a}.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud saugykla';
$string['privacy:metadata'] = '„Nextcloud“ saugyklos papildinys nesaugo jokių asmeninių duomenų ir neperduoda naudotojo duomenų į nuotolinę sistemą.';
$string['request_exception'] = 'Užklausa {$an->instance} nepavyko. {$a->errormessage}';
$string['requestnotexecuted'] = 'Užklausos įvykdyti nepavyko. Jei tai kartojasi, susisiekite su svetainės administratoriumi.';
$string['right_issuers'] = 'Šie leidėjai įdiegia reikiamus galutinius taškus: <br> {$a}';
$string['supportedreturntypes'] = 'Palaikomi failai';
