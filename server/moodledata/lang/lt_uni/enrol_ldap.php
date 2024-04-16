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
 * Strings for component 'enrol_ldap', language 'lt_uni', version '4.2'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Priskiriama rolė \'{$a->role_shortname}\' vartotojui  \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nepavyko priskirti rolės \'{$a->role_shortname}\' vartotojui  \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p> Kursai gali būti sukurti automatiškai jeigu yra registracijų į kursą kurio dar nėra Moodle </p> <p> Jeigu jūs naudojate automatinį kursų sukūrimą, yra rekomenduojama kad jūs pašalintumėte šiuos sugebėjimus: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname ir moodle/course:changesummary, iš susijusių rolių kad išvengti pakeitimų keturiems aukščiau išvardintiems kursų laukams ( ID, trumpas vardas, pilnas vardas ir santrauka). </p>';
$string['autocreate_key'] = 'Automatinis sukūrimas';
$string['autocreation_settings'] = 'Automatinio kurso sukūrimo nustatymai';
$string['bind_dn'] = 'Jei norite naudoti įpareigotus vartotojus paieškai, nusakykite čia. Pvz.: cn=ldapuser,ou=public,o=org';
$string['bind_dn_key'] = 'Įpareigoto vartotojo atpažinimo vardas';
$string['bind_pw'] = 'Slaptažodis įpareigotam vartotojui';
$string['bind_pw_key'] = 'Slaptažodis';
$string['bind_settings'] = 'Įpareigojimo nustatymai';
$string['cannotcreatecourse'] = 'Nepavyko sukurti kurso:trūksta reikalingų duomenų iš LDAP įrašų!';
$string['category'] = 'Kategorija automatiškai sukurtiems kursams';
$string['category_key'] = 'Kategorij';
$string['contexts'] = 'LDAP kontekstas';
$string['couldnotfinduser'] = 'Nepavyko rasti vartotojo \'{$a}\', praleidžiama';
$string['course_fullname'] = 'Papildomai: LDAP atributas gauti pilną vardą iš';
$string['course_fullname_key'] = 'Pilnas vardas';
$string['course_idnumber'] = 'LDAP atributas gauti kurso ID numerį. Dažniausiai \'cn\' arba \'uid\'.';
$string['course_idnumber_key'] = 'ID numeris';
$string['course_search_sub'] = 'Ieškoti grupių narystės iš kontekstų';
$string['course_search_sub_key'] = 'Ieškoti kontekstų';
$string['course_settings'] = 'Kurso registracijos nustatymai';
$string['course_shortname'] = 'Papildomai: LDAP atributas gauti trumpą vardą iš';
$string['course_shortname_key'] = 'Trumpas vardas';
$string['course_summary'] = 'Papildoma: LDAP atributas gauti santrauka iš';
$string['course_summary_key'] = 'Santrauka';
$string['coursenotexistskip'] = 'Kursas \'{$a}\' neegzistuoja ir automatinis sukūrimas išjungtas, praleidžiama';
$string['createcourseextid'] = 'SUKURTI Vartotojas prisiregistravo prie neegzistuojančio kurso  \'{$a->courseextid}';
$string['createnotcourseextid'] = 'Vartotojas prisiregistravo prie neegzistuojančio kurso  \'{$a->courseextid}';
$string['creatingcourse'] = 'Sukuriamas kursas \'{$a}\'...';
$string['editlock'] = 'Užrakinti reikšmę';
$string['emptyenrolment'] = 'Tuščias registracija rolei  \'{$a->role_shortname}\' kurse  \'{$a->course_shortname}';
$string['enroluser'] = 'Registruoti vartotoją  \'{$a->user_username}\' į kursą \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Įjungta registracija vartotojams \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() nepalaiko pasirinkto vartotojo tipo: {$a}';
$string['extcourseidinvalid'] = 'Kurso išorinis id yra negaliojantis!';
$string['extremovedsuspend'] = 'Išjungta registracija vartotojui \'{$a->user_username}\' kurse  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Išjungta registracija ir pašalintos rolės vartotojui \'{$a->user_username}\' kurse  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Išregistruoti vartotoją \'{$a->user_username}\' iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Nepavyko!';
$string['general_options'] = 'Bendri nustatymai';
$string['group_memberofattribute'] = 'Vardas atributo kuris nusako kurios grupės duotas vartotojas ar grupė priklauso (pvz.: memberOf, groupMembership, ir pan.)';
$string['group_memberofattribute_key'] = '\'Member of\' atributas';
$string['host_url'] = 'Nusakykite LDAP pagrindinį kompiuterį URL adreso forma, pvz.: \'ldap://ldap.myorg.com/\' arba \'ldaps://ldap.myorg.com/';
$string['host_url_key'] = 'Pagrindinio kompiuterio URL';
$string['idnumber_attribute'] = 'Jei grupėje yra narių su išskirtiniu vardu, nusakykite tokį patį atributą jūs naudojote vartotojo \'ID NUMBER\' kartografavime LDAP patvirtinimo nustatymuose';
$string['idnumber_attribute_key'] = 'ID numerio atributas';
$string['ldap:manage'] = 'Tvarkyti LDAP registracijos reikalavimus';
$string['ldap_encoding'] = 'Nusakyti kodavimą naudojamą LDAP serverio. Greičiausiai bus utf-8, MS AD v2 naudoja numatytą kodavimo platformą tokia kaip cp1252, cp1250, ir pan.';
$string['ldap_encoding_key'] = 'LDAP atkodavimas';
$string['memberattribute'] = 'LDAP vartotojo atributas';
$string['memberattribute_isdn'] = 'Jei grupėje yra narių su išskirtiniais vardais, jums reikia tai nurodyti čia. Taip pat jums reikia nustatyti likusius šios sekcijos nustatymus';
$string['memberattribute_isdn_key'] = 'Nario atributas naudoja dn';
$string['nested_groups'] = 'Ar norite naudoti įdėtas grupes (grupės grupėse) registracijai?';
$string['nested_groups_key'] = 'Įdėtos grupės';
$string['nested_groups_settings'] = 'Įdėtų grupių nustatymai';
$string['nosuchrole'] = 'Nėra tokios rolės: \'{$a}';
$string['objectclass'] = 'objectClass naudota ieškoti kursų. Dažniausiai \'group\' arba \'posixGroup';
$string['objectclass_key'] = 'Objektų klasė';
$string['ok'] = 'Gerai!';
$string['opt_deref'] = 'Jei grupėje yra narių su išskirtiniais vardais, nusakykite kaip kitaip jie yra atpažįstami paieškoje. Pasirinkite vieną iš šių reikšmių: \'No\' (LDAP_DEREF_NEVER) arba \'Yes\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Slapyvardžiai';
$string['phpldap_noextension'] = '<em> PHP LDAP modulio nesimato. Prašau užtikrinti kad jis įrašytas ir įjungtas, jei jūs norite naudoti šį registracijos papildinį. </em>';
$string['pluginname'] = 'LDAP registracijos';
$string['pluginname_desc'] = '<p>Jūs galite naudoti LDAP serverį registracijos kontrolei. Manoma kad jūsų LDAP medyje yra grupės susietos su kursais ir kad kiekviena tų grupių/kursų turi narystės įrašus susietus su studentais</p><p>Kursai yra apibrėžt kaip grupės LDAP\'e, kur kiekviena grupė turi kelias narystės sritis (<em>member</em> arba <em>memberUid</em>) kuriuose yra unikalus vartotojo ID. </p><p> Jei norite naudoti LDAP registraciją jūsų vartotojai <strong>privalo</strong> turėti galiojantį ID numerio sritį. LDAP grupės privalo turėti tą ID numerį narių srityse jeigu nori kad tie vartotojai būtų priregistruoti. Dažniausiai tai suveiks gerai, jeigu jūs jau naudojate LDAP patvirtinimą.</p><p>Registracija bus atnaujinta kai vartotojas prisijungs. Jūs taip pat galite naudoti scenarijų kad registracijos būtu suderintos. Žiūrėkite <em>enrol/ldap/cli/sync.php</em>.</p><p>Šis papildinys taip pat gali būti nustatytas į režimą kai automatiškai yra sukuriamos naujos paskaitos kai naujos grupės atsiranda LDAP. </p>';
$string['pluginnotenabled'] = 'Papildinys neįjungtas!';
$string['role_mapping'] = '<p>Kiekvienai rolei kurią jūs norite priskirti iš LDAP, jums reikia apibūdinti turinio sąrašą kur rolės kursų grupės yra. Atskirti skirtingus turinius su \';\'.</p> <p> Jums taip pat reikia apibūdinti atributą kurį jūsų LDAP serveris naudoja laikyti narius grupėse. Dažniausiai  \'member\' arba \'memberUid\' </p>';
$string['role_mapping_key'] = 'Rolės atvaizdavimas iš LDAP';
$string['roles'] = 'Rolės atvaizdavimas';
$string['server_settings'] = 'LDAP serverio nustatymai';
$string['synccourserole'] = '== Sinchronizuojamas kursas \'{$a->idnumber}\' rolei \'{$a->role_shortname}';
$string['template'] = 'Papildoma: automatiškai sukurti kursai gali kopijuoti nustatymus iš šabloninio kurso';
$string['template_key'] = 'Šablonas';
$string['unassignrole'] = 'Atskiriama rolė  \'{$a->role_shortname}\' vartotojui  \'{$a->user_username}\'  iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Nepavyko atskirti rolės \'{$a->role_shortname}\' vartotojui  \'{$a->user_username}\'  iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Atskiriama rolė id  \'{$a->role_id}\' vartotojui id  \'{$a->user_id}';
$string['updatelocal'] = 'Atnaujinti vietinius duomenis';
$string['user_attribute'] = 'Jei grupės nariai turi išskirtinių vardų, apibūdinkite atributus naudojamus vardinti / ieškoti vartotojų. Jei jūs naudojate LDAP patvirtinimą, ši reikšmė turėtų sutapti su atributu apibūdintu \'ID Number\' atvaizdavimu LDAP patvirtinimo papildinyje.';
$string['user_attribute_key'] = 'ID numerio atributas';
$string['user_contexts'] = 'Jei grupėje yra narių su išskirtiniais vardais, nusakykite sąrašą konteksto kur vartotojai yra. Atskirti skirtingus kontekstus su \';\'. Pvz.: \'ou=users,o=org; ou=others,o=org';
$string['user_contexts_key'] = 'Kontekstai';
$string['user_search_sub'] = 'Jei grupėje yra narių su išskirtiniais vardais, apibūdinkite ar vartotojų paieška yra baigta kontekstuose taip pat.';
$string['user_search_sub_key'] = 'Ieškoti kontekstuose';
$string['user_settings'] = 'Vartotojo nustatymų peržvalga';
$string['user_type'] = 'Jei grupėje yra narių su išskirtiniais vardais, apibūdinkite kaip vartotojai yra saugojami LDAP';
$string['user_type_key'] = 'Vartotojo tipas';
$string['version'] = 'LDAP protokolo versija';
$string['version_key'] = 'Versija';
