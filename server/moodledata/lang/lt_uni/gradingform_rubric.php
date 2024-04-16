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
 * Strings for component 'gradingform_rubric', language 'lt_uni', version '4.2'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Pridėti kriterijų';
$string['alwaysshowdefinition'] = 'Leisti vartotojams peržiūrėti rubriką naudojamą modulyje (kitu atveju rubrika bus matoma tik po vertinimo)';
$string['backtoediting'] = 'Grįžti į redagavimą';
$string['confirmdeletecriterion'] = 'Ar jūs įsitikinęs kad norite pašalinti šį kriterijų?';
$string['confirmdeletelevel'] = 'Ar jūs įsitikinęs kad norite pašalinti šį lygi?';
$string['criterionaddlevel'] = 'Pridėti lygi';
$string['criteriondelete'] = 'Pašalinti kriterijų';
$string['criterionempty'] = 'Spustelėkite kriterijaus redagavimui';
$string['criterionmovedown'] = 'Perkelti žemyn';
$string['criterionmoveup'] = 'Perkelti aukštyn';
$string['definerubric'] = 'Apibrėžkite „rubric"';
$string['description'] = 'Apibrėžimas';
$string['enableremarks'] = 'Leisti vertintojui pridėti teksto pastabas kiekvienam kriterijui';
$string['err_mintwolevels'] = 'Kiekvienas kriterijus turi turėti bent tu lygius';
$string['err_nocriteria'] = '„Rubric" turi turėti bent vieną kriterijų';
$string['err_nodefinition'] = 'Lygio apibrėžimas negali būti tuščias';
$string['err_nodescription'] = 'Kriterijaus apibrėžimas negali būti tuščias';
$string['err_scoreformat'] = 'Taškų skaičius kiekvienam lygiui turi būti teigiamas sveikasis skaičius.';
$string['err_totalscore'] = 'Didžiausias galimas taškų skaičius kai  vertinama pagal „rubric" turi būti didesnis už 0';
$string['gradingof'] = '{$a} vertinimas';
$string['leveldelete'] = 'Pašalinti lygi';
$string['levelempty'] = 'Spustelėkite lygio redagavimui';
$string['name'] = 'Pavadinimas';
$string['needregrademessage'] = '„Rubric“ aprašymas buvo pakeistas po to kai studentas buvo įvertintas.Studentas negali matyti šios „rubric“ tol kol nepažymėsite jos ir neatnaujinsite įvertinimo.';
$string['pluginname'] = '„Rubric"';
$string['previewrubric'] = 'Peržiūrėti rubriką';
$string['regrademessage1'] = 'Jūs žadate išsaugoti pakeitimus į „rubric“ kuri jau buvo naudojama įvertinimui. Prašau nurodyti ar reikia jau esančius įvertinimus atnaujinti. jei nustatysite tai, „rubric“ bus slepiamas nuo studentų tol kol jie bus pervertinti.';
$string['regrademessage5'] = 'Jūs ketinate išsaugoti reikšmingus pokyčius „rubruc“ kuris jau yra naudojamas vertinimui. Įvertinimų knygos reikšmė nepakis, bet „rubric“ bus paslėptas nuo studentų kol jie bus pervertinti.';
$string['regradeoption0'] = 'Nežymėti pervertinimui';
$string['regradeoption1'] = 'Žymėti pervertinimui';
$string['restoredfromdraft'] = 'Pastaba: Paskutinis bandymas įvertinti šį asmenį nebuvo tinkamai išsaugotas, todėl vertinimo juodraštis buvo atkurtas. Jei jūs norite atšaukti šios pakeitimus spauskite „Atšaukti“ mygtuką žemiau.';
$string['rubric'] = '„Rubric“';
$string['rubricmapping'] = 'Balas į įvertinimų atvaizdavimo taisykles';
$string['rubricmappingexplained'] = 'Mažiausias galimas įvertinimas šiai „rubric“ yra <b>{$a->minscore} taškų</b> ir jis bus konvertuotas į mažiausią galimą įvertinimą šiam moduliu ( kuris yra 0, nebent yra naudojama skalė). Didžiausias įvertinimas <b>{$a->maxscore} taškai</b> bus konvertuoti į maksimalų įvertinimą. <br/> Tarpiniai įvertinimai bus konvertuojami atitinkamai ir suapvalinti į artimiausią galimą įvertinimą. <br/> Jei skalė yra naudojama vietoj įvertinimo tai įvertis bus konvertuotas į skalės elementus kaip nuoseklūs sveikieji skaičiai.';
$string['rubricnotcompleted'] = 'Prašau pasirinkti ką nors kiekvienam kriterijui';
$string['rubricoptions'] = '„Rubric“ nustatymai';
$string['rubricstatus'] = 'Dabartinės „rubric“ statusas';
$string['save'] = 'Išsaugoti';
$string['saverubric'] = 'Išsaugoti „rubric“ ir parengti ją';
$string['saverubricdraft'] = 'Išsaugoti kaip juodraštį';
$string['scorepostfix'] = '{$a} taškai';
$string['showdescriptionstudent'] = 'Rodyti „rubric“ aprašymą tiems kurie yra vertinami';
$string['showdescriptionteacher'] = 'Rodyti „rubric“ aprašymą per įvertinimą';
$string['showremarksstudent'] = 'Rodyti pastabas tiems kurie yra vertinami';
$string['showscorestudent'] = 'Rodyti taškus kiekvienam lygiui tiems kurie yra vertinami';
$string['showscoreteacher'] = 'Rodyti taškus kiekvienam lygiui per vertinimą';
$string['sortlevelsasc'] = 'Rūšiavimo tvarka lygiams:';
$string['sortlevelsasc0'] = 'Mažėjimo tvarka pagal taškus';
$string['sortlevelsasc1'] = 'Didėjimo tvarka pagal taškus';
