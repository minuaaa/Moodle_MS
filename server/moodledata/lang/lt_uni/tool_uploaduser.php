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
 * Strings for component 'tool_uploaduser', language 'lt_uni', version '4.2'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Leisti ištrynimus';
$string['allowrenames'] = 'Leisti pervardinimus';
$string['allowsuspends'] = 'Leisti paskyrų sulaikymą ir aktyvavimą';
$string['csvdelimiter'] = 'CSV skyriklis';
$string['defaultvalues'] = 'Numatytos reikšmės';
$string['deleteerrors'] = 'Šalinti klaidas';
$string['encoding'] = 'Kodavimas';
$string['errors'] = 'Klaidos';
$string['nochanges'] = 'Jokių pakeitimų';
$string['pluginname'] = 'Vartotojo įkėlimai';
$string['renameerrors'] = 'Pervardinti klaidas';
$string['requiredtemplate'] = 'Būtina. Jums galite naudoti šabloninę sintaksę čia (%l = lastname, %f = firstname, %u = username). Žiūrėti pagalbą jei reikia daugiau informacijos.';
$string['rowpreviewnum'] = 'Peržiūrėti eilutes';
$string['uploadpicture_baduserfield'] = 'Nurodytas vartotojo atributas negaliojantis. Prašau bandyti vėliau.';
$string['uploadpicture_cannotmovezip'] = 'Nepavyko perkelti zip failo į laikiną aplanką.';
$string['uploadpicture_cannotprocessdir'] = 'Nepavyko apdoroti išskleistų failų.';
$string['uploadpicture_cannotsave'] = 'Nepavyko išsaugoti paveikslėlio vartotojui {$a}. Patikrinkite originalų paveikslėlį.';
$string['uploadpicture_cannotunzip'] = 'Nepavyko išskleisti paveikslėlių failo.';
$string['uploadpicture_invalidfilename'] = 'Paveikslėlio failas {$a} turi negaliojančių ženklų varde. Praleidžiama.';
$string['uploadpicture_overwrite'] = 'Perrašyti esantį vartotojo paveikslėlį?';
$string['uploadpicture_userfield'] = 'Vartotojo atributas naudojamas sutikrinti paveikslėlius:';
$string['uploadpicture_usernotfound'] = 'Vartotojas su \'{$a->userfield}\' reikšme  \'{$a->uservalue}\' neegzistuoja. Praleidžiama.';
$string['uploadpicture_userskipped'] = 'Praleidžiamas vartotojas {$a} (jau turi paveikslėlį).';
$string['uploadpicture_userupdated'] = 'Paveikslėlis atnaujintas vartotojui {$a}';
$string['uploadpictures'] = 'Įkelti vartotojų paveikslėlius';
$string['uploadpictures_help'] = 'Vartotojo paveikslėliai gali būti įkelti kaip zip formato failai ar kaip paveikslėliai. Paveikslėliai turi būti pavadinti vartotojo-atributas.plėtinys, pvz.: vartotojas1234.jpg , kur vartotojo vardas yra vartotojas1234';
$string['uploadusers'] = 'Įkelti vartotojus';
$string['uploadusers_help'] = 'Vartotojai gali būti įkelti (papildoma registracija į kursą) per tekstinį failą. Failo formatas turėtų būti: *Vienoje eilutėje yra vienas įrašas *Kiekvienas įrašas yra serija duomenų atskirtų kableliu (ar kitu skyrikliu) *Pirmajame įraše yra laukų vardai nusakantys likusio failo formatą *Privalomi laukai yra vartotojo vardas, slaptažodis, vardas, pavardė, el. paštas';
$string['uploaduserspreview'] = 'Įkelti vartotojo peržiūrą';
$string['uploadusersresult'] = 'Įkelti vartotojo rezultatus';
$string['useraccountupdated'] = 'Vartotojas atnaujintas';
$string['useraccountuptodate'] = 'Vartojo duomenys nauji';
$string['userdeleted'] = 'Vartotojas ištrintas';
$string['userrenamed'] = 'Vartotojas pervadintas';
$string['userscreated'] = 'Vartotojas sukurtas';
$string['usersdeleted'] = 'Vartotojas ištrintas';
$string['usersrenamed'] = 'Vartotojas pervadintas';
$string['usersskipped'] = 'Vartotojas praleistas';
$string['usersupdated'] = 'Vartotojas atnaujintas';
$string['usersweakpassword'] = 'Vartotojas turi silpną slaptažodį';
$string['uubulk'] = 'Ieškoti masinių operacijų';
$string['uubulkall'] = 'Visi vartotojai';
$string['uubulknew'] = 'Nauji vartotojai';
$string['uubulkupdated'] = 'Atnaujinti vartotojai';
$string['uucsvline'] = 'CSV linija';
$string['uulegacy1role'] = '(Originalus studentas) typeN=1';
$string['uulegacy2role'] = '(Orginalus dėstytojas) typeN=2';
$string['uulegacy3role'] = '(Orginalus neredaguojantis dėstytojas) typeN=3';
$string['uunoemailduplicates'] = 'Uždrausti elektroninio pašto dublikatus';
$string['uuoptype'] = 'Įkeliamas tipas';
$string['uuoptype_addinc'] = 'Pridėti visus, jei reikės, papildyti skaičiais vartotojo vardus';
$string['uuoptype_addnew'] = 'Pridėti tik naujus, praleiti egzistuojančius';
$string['uuoptype_addupdate'] = 'Pridėti naujus ir atnaujinti egzistuojančius vartotojus';
$string['uuoptype_update'] = 'Atnaujinti tik egzistuojančius vartotojus';
$string['uupasswordcron'] = 'Sugeneruota kron metu';
$string['uupasswordnew'] = 'Naujo vartotojo slaptažodis';
$string['uupasswordold'] = 'Egzistuojančio vartotojo slaptažodis';
$string['uustandardusernames'] = 'Standartizuoti vartotojų vardai';
$string['uuupdateall'] = 'Perrašyti su failu ir numatytomis reikšmėmis';
$string['uuupdatefromfile'] = 'Perrašyti sufailu';
$string['uuupdatemissing'] = 'Užpildyti nerastas reikšmes iš failo ar numatytų reikšmių';
$string['uuupdatetype'] = 'Egzistuojančių vartotojų duomenys';
$string['uuusernametemplate'] = 'Vartototjų vardų šablonai';
