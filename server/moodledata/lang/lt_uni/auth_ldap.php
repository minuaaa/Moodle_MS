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
 * Strings for component 'auth_ldap', language 'lt_uni', version '4.2'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_attrcreators'] = 'Sąrašas grupių ir kontekstų kurių nariai gali kurti atributus. Atskirkite skirtingas grupes su \';\' . Pvz. \'cn=teaches, ou=staff, o=myorg';
$string['auth_ldap_bind_dn'] = 'Jei jūs norite naudoti susietus vartotojus kitų vartotojų paieškai, aprašykite  čia. Pvz. \'cn=ldapuse. ou =public, o = org';
$string['auth_ldap_groupecreators'] = 'Sąrašas grupių ar kontekstų narių kurie gali kurti grupes. Atskirti skirtingas grupes su \';\'. Pvz.:  \'cn=teachers,ou=staff,o=myorg';
$string['auth_ldap_memberattribute_isdn'] = 'Perrašo narių atributų tvarkymo reikšmes, arba
0 arba 1.';
$string['auth_ldap_passtype_key'] = 'Slaptažodžio formatas';
$string['auth_ldap_preventpassindb_key'] = 'Slėpti slaptažodžius';
$string['auth_ldap_version_key'] = 'Versija';
$string['auth_ntlmsso_subnet'] = 'Jei nustatyta, tada bus bandomas SSO tik su klientais iš potinklio. Formatas : xxx.xxx.xxx.xxx/bitmask . Atskirti skirtingus potinklius su \',';
$string['noemail'] = 'Bandyta išsiųsti el. laišką, bet nepavyko!';
$string['updateremfail'] = 'Klaida atnaujinant LDAP įrašą. Klaidos kodas: {$a->errno}; Klaidos eilutė: {$a->errstring}<br/>Key ({$a->key}) - sena moodle reikšmė \'{$a->ouvalue}\' nauja reikšmė: \'{$a->nuvalue}';
$string['updateremfailamb'] = 'Nepavyko atnaujinti LDAP su dviprasmiška sritimi {$a->key}; sena moodle reikšmė: \'{$a->ouvalue}\', nauja reikšmė: \'{$a->nuvalue}';
