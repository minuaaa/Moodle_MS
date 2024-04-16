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
 * Strings for component 'tool_mfa', language 'lt', version '4.2'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alltime'] = 'Visą laiką';
$string['combination'] = 'Kombinacija';
$string['connector'] = 'IR';
$string['created'] = 'Sukurta';
$string['createdfromip'] = 'Sukurta iš IP';
$string['debugmode:heading'] = 'Derinimo režimas';
$string['devicename'] = 'Įrenginys';
$string['enablefactor'] = 'Įjungti faktorių';
$string['error:actionnotfound'] = 'Veiksmas „{$a}“ nepalaikomas';
$string['error:directaccess'] = 'Šis puslapis neturėtų būti pasiekiamas tiesiogiai';
$string['error:notenoughfactors'] = 'Nepavyksta autentifikuoti';
$string['event:userpassedmfa'] = 'Patikrinimas sėkmingai atliktas';
$string['event:userrevokedfactor'] = 'Faktoriaus atšaukimas';
$string['event:usersetupfactor'] = 'Faktoriaus nustatymai';
$string['factor'] = 'Faktorius';
$string['factorreport'] = 'Visos faktoriaus ataskaitos';
$string['factorrevoked'] = 'Faktorius „{$a}“ sėkmingai atšauktas.';
$string['fallback'] = 'Atsarginis faktorius';
$string['fallback_info'] = 'Šis faktorius yra atsarginis, jei nėra sukonfigūruoti jokie kiti faktoriai. Šis faktorius visada bus atmestas.';
$string['ipatcreation'] = 'IP adresas, kai sukurtas faktorius';
$string['lastverified'] = 'Paskutinį kartą patvirtinta';
$string['lockedusersforallfactors'] = 'Užrakinti naudotojai: Visi faktoriai';
$string['lockedusersforfactor'] = 'Užrakinti naudotojai: {$a}';
$string['mfa:mfaaccess'] = 'Sąveika su DFA';
$string['mfareports'] = 'DFA ataskaitos';
$string['na'] = 'n/a';
$string['needhelp'] = 'Reikia pagalbos?';
$string['nologinusers'] = 'Neprisijungęs';
$string['nonauthusers'] = 'Laukiama DFA';
$string['overall'] = 'Bendras';
$string['pending'] = 'Laukiama';
$string['performbulk'] = 'Masinis veiksmas';
$string['pluginname'] = 'Daugiafaktorinis autentifikavimas';
$string['preferences:activefactors'] = 'Aktyvūs faktoriai';
$string['preferences:availablefactors'] = 'Galimi faktoriai';
$string['preferences:header'] = 'Daugiafaktorinio autentifikavimo nuostatos';
$string['preferenceslink'] = 'Spustelėkite čia, jei norite pereiti į naudotojo nuostatas.';
$string['privacy:metadata:tool_mfa'] = 'Duomenys su sukonfigūruotais DFA faktoriais.';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktoriaus tipas';
$string['privacy:metadata:tool_mfa:id'] = 'Įrašo ID';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Laikas, kai naudotojas paskutinį kartą buvo patvirtintas naudojant šį faktorių';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Laiko faktorius paskutinį kartą buvo pakeistas';
$string['privacy:metadata:tool_mfa:userid'] = 'Naudotojo, kuriam priklauso faktorius, ID';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Paskutinio naudotojo autentiškumo patvirtinimo laikas';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Naudotojas, su kuriuo susijusi ši laiko žyma.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Faktorius, su kuriuo susijusi ši paslaptis.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Slaptas apsaugos kodas.';
$string['resetconfirm'] = 'Atstatyti naudotojo faktorių';
$string['resetfactor'] = 'Atstatyti naudotojo autentifikavimo faktorius';
$string['resetfactorconfirm'] = 'Ar tikrai norite iš naujo nustatyti šį {$a} faktorių?';
$string['resetfactorplaceholder'] = 'Naudotojo vardas arba el. pašto adresas';
$string['resetsuccess'] = '„{$a->username}“ naudotojui faktorius „{$a->factor}“ sėkmingai atstatytas.';
$string['resetuser'] = 'Naudotojas:';
$string['revoke'] = 'Atšaukti';
$string['revokefactor'] = 'Atšaukti faktorių';
$string['selectfactor'] = 'Pasirinkite faktorių, kurį norite atstatyti:';
$string['selectperiod'] = 'Pasirinkite ataskaitos grįžtamąjį laikotarpį:';
$string['settings:combinations'] = 'Gerų prisijungimo sąlygų santrauka';
$string['settings:debugmode'] = 'Įjungti derinimo režimą';
$string['settings:duration'] = 'Paslapties galiojimo trukmė';
$string['settings:duration_help'] = 'Generuojamų paslapčių galiojimo trukmė.';
$string['settings:enabled'] = 'DFA įskiepis įjungtas';
$string['settings:enablefactor'] = 'Įjungti faktorių';
$string['settings:general'] = 'Bendrieji DFA nustatymai';
$string['settings:weight'] = 'Faktoriaus svoris';
$string['setup'] = 'Nustatymai';
$string['setupfactor'] = 'Nustatyti faktorių';
$string['setuprequired'] = 'Naudotojo nustatymai';
$string['state:fail'] = 'Nepavyko';
$string['state:locked'] = 'Užrakinta';
$string['state:neutral'] = 'Neutralus';
$string['state:pass'] = 'Pavyko';
$string['state:unknown'] = 'Nežinomas';
$string['totalusers'] = 'Iš viso naudotojų';
$string['totalweight'] = 'Bendras svoris';
$string['userempty'] = 'Naudotojas laukelis negali būti tuščias.';
$string['userlogs'] = 'Naudotojo žurnalai';
$string['usernotfound'] = 'Nepavyksta rasti naudotojo.';
$string['usersauthedinperiod'] = 'Prisijungęs';
$string['verificationcode'] = 'Įveskite patvirtinimo kodą patvirtinimui';
$string['verificationcode_help'] = 'Patvirtinimo kodas, kurį pateikia dabartinis autentifikavimo faktorius.';
$string['weight'] = 'Svoris';
