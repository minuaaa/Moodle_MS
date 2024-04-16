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
 * Strings for component 'grading', language 'lt_uni', version '4.2'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' yra pasirinktas kaip aktyvus vertinimo metodas \'{$a->area}\' sričiai';
$string['activemethodinfonone'] = 'Nėra jokio pasirinkto išplėstinio vertinimo metodo pasirinktai sričiai \'{$a->area}\'. Bus pasirinktas paprastas tiesioginis vertinimas.';
$string['changeactivemethod'] = 'Pakeisti aktyvų vertinimo metodą į';
$string['clicktoclose'] = 'spauskite kad uždaryti';
$string['exc_gradingformelement'] = 'Negalima parodyti vertinimo formos elemento.';
$string['formnotavailable'] = 'Buvo pasirinktas išplėstinio vertinimo metodas, bet vertinimo forma dar nėra galima. Pirmiausia jums reikia apibūdinti ją per nuorodą Nustatymų bloke.';
$string['gradingformunavailable'] = 'Pastaba: išplėstinė vertinimo forma nėra paruošta šiuo metu. Paprasto vertinimo metodas bus naudojamas kol forma turės galiojantį statusą.';
$string['gradingmanagement'] = 'Išplėstinis vertinimas';
$string['gradingmanagementtitle'] = 'Išplėstinis vertinimas: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Įvertinimo metodas';
$string['gradingmethod_help'] = 'Pasirinkite išplėstinį vertinimo metodą kuris bus naudojamas apskaičiuoti įvertinimus duotame kontekste. Norint išjungti išplėstinį vertinimą ir perjungti atgal į numatytąjį vertinimo mechanizmą, pasirinkite „Paprastas tiesioginis įvertinimas”.';
$string['gradingmethodnone'] = 'Paprastas tiesioginis įvertinimas';
$string['gradingmethods'] = 'Įvertinimo metodai';
$string['manageactionclone'] = 'Sukurti naują vertinimo formą iš šablono';
$string['manageactiondelete'] = 'Pašalinti šiuo metu apibūdintą formą';
$string['manageactiondeleteconfirm'] = 'Jūs ketinate ištrini vertinimo formą  \'{$a->formname}\'  ir visą susijusią informaciją iš \'{$a->component} ({$a->area})\'. Prašau įsitikinti kad suprantate šias pasekmes: *Nėra jokio būdo atšaukti šią operaciją. *Jūs galite perjungti į kitą vertinimo metodą įskaitant ir „Paprastą tiesioginį vertinimą“ neištrinant šios formos. *Visa informacija apie tai kaip vertinimo formos buvo užpildytos dings. *Apskaičiuoti rezultatai išsaugoti vertinimų knygoje nebus paliesti. Bet paaiškinimas kaip jie buvo apskaičiuoti bus nepasiekiamas. *Ši operacija neturės efekto šios formos kopijoms kitose veiklose.';
$string['manageactiondeletedone'] = 'Forma buvo sėkminga pašalinta';
$string['manageactionedit'] = 'Redaguoti dabartinės formos aprašymą';
$string['manageactionnew'] = 'Nusakyti naują vertinimo formą nuo nulio';
$string['manageactionshare'] = 'Paskelbti formą kaip naują šabloną.';
$string['manageactionshareconfirm'] = 'Jūs ketinate išsaugoti vertinimo formos \'{$a}\' kopiją kaip naują viešą šabloną. Kiti vartotojai jūsų svetainėje galės sukurti vertinimo formas savo veiklose iš šio šablono.';
$string['manageactionsharedone'] = 'Forma buvo sėkmingai išsaugota kaip šablonas';
$string['noitemid'] = 'Vertinimas negalimas. Vertinimas elementas neegzistuoja.';
$string['nosharedformfound'] = 'Nerastas joks šablonas';
$string['searchownforms'] = 'įtraukti mano formas';
$string['searchtemplate'] = 'Vertinimo formų paieška';
$string['searchtemplate_help'] = 'Galite ieškoti vertinimo formų ir naudoti jas kaip šabloną naujai vertinimo formai. Paprasčiausiai įveskite žodžius kurie turėtų atsirasti kažkur formos pavadinime, apibūdinime ar pačioje formoje. Frazės paieškai , užklausą rašykite kabutėse. Pagal numatytą, tik vertinimo formos kurios buvo išsaugotos kaip bendri šablonai yra įtrauktos į paiešką. Jūs taip pat galite įtraukti į paiešką savo formas. Šiuo atveju, jūs tiesiog galėsite iš naujo panaudoti savo vertinimo formas nesidalinant jų. Tik formos pažymėtos kaip „Paruošta naudojimui“ gali būti iš naujo panaudotos šiuo keliu.';
$string['statusdraft'] = 'Juodraštis';
$string['statusready'] = 'Paruošta naudojimui';
$string['templatedelete'] = 'Pašalinti';
$string['templatedeleteconfirm'] = 'Jūs ketinate pašalinti bendrą šabloną \'{$a}\'.  Pašalinus šabloną, formos kurios buvo sukurtos iš jo nebus paveiktos.';
$string['templateedit'] = 'Redaguoti';
$string['templatepick'] = 'Naudoti šį šabloną';
$string['templatepickconfirm'] = 'Ar jūs norite naudoti vertinimo formą  \'{$a->formname}\' kaip šabloną naujai vertinimo formai  \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Naudoti šią formą kaip šabloną';
$string['templatesource'] = 'Vieta:  {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Nuosavos formos';
$string['templatetypeshared'] = 'Bendri šablonai';
