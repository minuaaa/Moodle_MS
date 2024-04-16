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
 * Strings for component 'tool_xmldb', language 'lt_uni', version '4.2'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Faktiškas';
$string['aftertable'] = 'Po lentelės';
$string['back'] = 'Atgal';
$string['backtomainview'] = 'Atgal į pagrindinį';
$string['cannotuseidfield'] = 'Negalima įterpti "id" lauko. Tai automatiškai numeruojamas stulpelis';
$string['change'] = 'Pakeisti';
$string['charincorrectlength'] = 'Neteisingas lauko ilgis';
$string['check_bigints'] = 'Tikrinti neteisingas DB sveikų skaičių reikšmes';
$string['check_defaults'] = 'Tikrinti nenuseklių numatytų reikšmių';
$string['check_foreign_keys'] = 'Tikrinti svetimų raktų neatitikimų';
$string['check_indexes'] = 'Tikrinti nerastų DB indeksų';
$string['check_oracle_semantics'] = 'Ieškoti neteisingų ilgių semantikų';
$string['checkbigints'] = 'Patikrinti didelius sveikuosius skaičius';
$string['checkdefaults'] = 'Patikrinti numatytas reikšmes';
$string['checkforeignkeys'] = 'Patikrinti svetimus raktus';
$string['checkindexes'] = 'Patikrinti indeksus';
$string['checkoraclesemantics'] = 'Patikrinti semantikas';
$string['completelogbelow'] = '(žiūrėkite visą paieškos ataskaitą žemiau)';
$string['confirmcheckbigints'] = 'Ši funkcija ieškos <a href="http://tracker.moodle.org/browse/MDL-11038">potencialiai blogų sveikų skaičių reikšmių</a> jūsų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckdefaults'] = 'Ši funkcija ieškos neteisingų numatytų reikšmių jūsų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckforeignkeys'] = 'Ši funkcija ieškos neteisingų svetimų raktų jūsų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckindexes'] = 'Ši funkcija ieškos nerastų indeksų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckoraclesemantics'] = 'Ši funkcija ieškos <a href="http://tracker.moodle.org/browse/MDL-29322">Oracle stulpelių naudojančių BYTE semantiką</a> jūsų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmdeletefield'] = 'Ar jūs tikras, kad norite ištrinti šį lauką:';
$string['confirmdeleteindex'] = 'Ar jūs tikras, kad norite ištrinti šį indeksą:';
$string['confirmdeletekey'] = 'Ar jūs tikras, kad norite ištrinti šį raktą:';
$string['confirmdeletetable'] = 'Ar jūs tikras, kad norite ištrinti šią lentelę:';
$string['confirmdeletexmlfile'] = 'Ar jūs tikras, kad norite ištrinti šį failą:';
$string['confirmrevertchanges'] = 'Ar jūs tikras, kad norite atstatyti veiksmus atliktus ankščiau:';
$string['create'] = 'Kurti';
$string['createtable'] = 'Kurti lentelę';
$string['defaultincorrect'] = 'Neteisinga numatyta reikšmė';
$string['delete'] = 'Ištrinti';
$string['delete_field'] = 'Ištrinti lauką';
$string['delete_index'] = 'Ištrinti indeksą';
$string['delete_key'] = 'Ištrinti raktą';
$string['delete_table'] = 'Ištrinti lentelę';
$string['delete_xml_file'] = 'Ištrinti XML failą';
$string['docindex'] = 'Dokumentacijos indeksas:';
$string['documentationintro'] = 'Dokumentacija generuojama automatiškai iš XMLDB duomenyų bazės aprašymo. Ji prieinama tik angliškai';
$string['down'] = 'Žemyn';
$string['duplicate'] = 'Dublikuoti';
$string['duplicatefieldname'] = 'Dar veinas laukas su tokiu pavadinimu jau egzistuoja';
$string['duplicatefieldsused'] = 'Besidubliuojantys laukai naudojami';
$string['duplicatekeyname'] = 'Dar veinas laukas su tokiu raktu jau egzistuoja';
$string['duplicatetablename'] = 'Dar veinas laukas su tokiu pavadinimu jau egzistuoja';
$string['edit'] = 'Redaguoti';
$string['edit_field'] = 'Redaguoti lauką';
$string['edit_field_save'] = 'Išsaugoti lauką';
$string['edit_index'] = 'Redaguoti indeksą';
$string['edit_index_save'] = 'Išsaugoti indeksą';
$string['edit_key'] = 'Redaguoti raktą';
$string['edit_key_save'] = 'Išsaugoti raktą';
$string['edit_table'] = 'Redaguoti lentelę';
$string['edit_table_save'] = 'Išsaugoti lentelę';
$string['edit_xml_file'] = 'Redaguoti XML failą';
$string['enumvaluesincorrect'] = 'Neteisinigos lauko reikšmės';
$string['expected'] = 'Tikėtinas';
$string['extensionrequired'] = 'Atleiskite - PHP plėtinys \'{$a}\' reikalingas šiam veiksmui. Prašome suinstaliuoti plėtinį jei norite naudotis šiomis galimybėmis';
$string['field'] = 'Laukas';
$string['fieldnameempty'] = 'Lauko pavadinimas tuščias';
$string['fields'] = 'Laukai';
$string['fieldsnotintable'] = 'Laukai neegzistuoja lentelėje';
$string['fieldsusedinkey'] = 'Laukas naudojamas kaip raktas';
$string['filenotwriteable'] = 'Laukas neredaguojamas';
$string['fkviolationdetails'] = 'Svetimas raktas {$a->keyname} lentelėje {$a->tablename} pažeidžiamas {$a->numviolations} iš {$a->numrows} eilutės.';
$string['float2numbernote'] = 'Pastaba: Nors "float" laukai yra 100% palaikomi XMLDB, rekomenduojama migruoti į "number" lauką';
$string['floatincorrectdecimals'] = 'Netikslus dešimčių skaičius, realių skaičių tipo laukui';
$string['floatincorrectlength'] = 'Netirkus realių skaičių lauko ilgis';
$string['generate_all_documentation'] = 'Visa dokumentacija';
$string['generate_documentation'] = 'Dokumentacija';
$string['gotolastused'] = 'Eiti į paskutinį naudotą failą';
$string['incorrectfieldname'] = 'Neteisingas vardas';
$string['incorrecttablename'] = 'Neteisingas lentelės vardas';
$string['index'] = 'Indeksas';
$string['indexes'] = 'Indeksai';
$string['integerincorrectlength'] = 'Netikslus sveikų skaičių lauko ilgis';
$string['key'] = 'Raktas';
$string['keys'] = 'Raktai';
$string['listreservedwords'] = 'Rezervuotų žodžių sąrašas<br />(naudojamas <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> atnaujinimams)';
$string['load'] = 'Užkrauti';
$string['main_view'] = 'Pagrindinis vaizdas';
$string['masterprimaryuniqueordernomatch'] = 'Laukai jūsų svetimame rakte turi būti tokia pačia tvarka kaip ir unikalių raktų lentelėje';
$string['missing'] = 'Nerastas';
$string['missingindexes'] = 'Nerasti indeksai rasti';
$string['mustselectonefield'] = 'Jūs turite pasirinkti vieną lauką, kad matyti susijusius veiksmus';
$string['mustselectoneindex'] = 'Jūs turite pasirinkti vieną indeksą, kad matytumėte indeksų susijusius veiksmus';
$string['mustselectonekey'] = 'Jūs turite pasirinkti vieną raktą, kad matytumėte su raktais susijusius veiksmus';
$string['new_table_from_mysql'] = 'Nauja MySQL lentelė';
$string['newfield'] = 'Naujas laukas';
$string['newindex'] = 'Naujas indeksas';
$string['newkey'] = 'Naujas raktas';
$string['newtable'] = 'Nauja lentelė';
$string['newtablefrommysql'] = 'Nauja MySQL lentelė';
$string['nomasterprimaryuniquefound'] = 'Stuleplis, kuris siejasi su svetimu raktu turi būti įtrauktas pirminių arba unikalių raktų susiejimo letntelę. Pastaba: stulpelis esantis unikalus indeksas nėra gerai.';
$string['noviolatedforeignkeysfound'] = 'Nerasta pažeistų raktų';
$string['nowrongdefaultsfound'] = 'Nerasta nenuoseklių numatytų veiksmų, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['nowrongintsfound'] = 'Nerasta jokių blogų sveikų skaičių, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['nowrongoraclesemanticsfound'] = 'Nerasta Oracle stulpelių naudojančių BYTE semantiką, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['numberincorrectdecimals'] = 'Neteisingas laukui nurodytas dešimčių skaičius';
$string['numberincorrectlength'] = 'Neteisingas skaičių lauko ilgis';
$string['pendingchanges'] = 'Pastabas: Jūs padarėte pakeitimus šiam failui. Jie gali būti išsaugoti betkuriuo metu.';
$string['pendingchangescannotbesaved'] = 'Yra pakeitimų faile, bet jie negali būti išsaugoti. Įsitikinkite, kad tiek direktorija tiek "install.xml" failai turi rašymo teises';
$string['pendingchangescannotbesavedreload'] = 'Yra pakeitimų faile, bet jie negali būti išsaugoti. Įsitikinkite, kad tiek direktorija tiek "install.xml" failai turi rašymo teises. Po to perkraukite šį puslapį ir galėsite išsaugoti pakeitimus';
$string['pluginname'] = 'XMLDB redaktorius';
$string['reserved'] = 'Rezervuota';
$string['reservedwords'] = 'Rezervuoti žodžiai';
$string['revert'] = 'Sugražinti';
$string['revert_changes'] = 'Sugražinti pakeitimus';
$string['save'] = 'Išsaugoti';
$string['searchresults'] = 'Paieškos rezultatai';
$string['selectaction'] = 'Pasirinkite veiksmą:';
$string['selectdb'] = 'Pasirinkite duomenų bazę:';
$string['selectfieldkeyindex'] = 'Pasirinkite lauką/raktą/indeksą:';
$string['selectonecommand'] = 'Pasirinkite vieną veiksmą iš PHP kodo';
$string['selectonefieldkeyindex'] = 'Pasirinkite vieną laiką/raktą/indeksą iš PHP kodo';
$string['selecttable'] = 'Pasirinkite lentelę:';
$string['table'] = 'Lentelė';
$string['tablenameempty'] = 'Lentelės pavadinimas negali būti tuščias';
$string['tables'] = 'Lentelės';
$string['unload'] = 'Iškrauti';
$string['up'] = 'Aukštyn';
$string['view'] = 'Peržiūrėti';
$string['view_reserved_words'] = 'Peržiūrėti rezervuotus žodžius';
$string['view_structure_php'] = 'Peržiūrėti PHP struktūrą';
$string['view_structure_sql'] = 'Peržiūrėti SQL struktūrą';
$string['view_table_php'] = 'Peržiūrėti PHP lentelę';
$string['view_table_sql'] = 'Peržiūrėti SQL lentelę';
$string['viewedited'] = 'Peržiūrėti redaguotis';
$string['vieworiginal'] = 'Peržiūrėti orginalą';
$string['viewphpcode'] = 'Peržiūrėti PHP kodą';
$string['viewsqlcode'] = 'Peržiūrėti SQL kodą';
$string['violatedforeignkeys'] = 'Pažeisti svetimi raktai';
$string['violatedforeignkeysfound'] = 'Rasti pažeisti svetimi raktai';
$string['violations'] = 'Pažeidimai';
$string['wrong'] = 'Neteisinga';
$string['wrongdefaults'] = 'Rasti neteisingi standartai';
$string['wrongints'] = 'Rasti neteisingi sveikieji skaičiai';
$string['wronglengthforenum'] = 'Neteisingas lauko ilgis';
$string['wrongoraclesemantics'] = 'Rasta neteisinga Oracle BYTE semantika';
$string['wrongreservedwords'] = 'Šiuo metu naudojami rezervuoti žodžiai<br />(pastaba: lentelių vardai nėra svarbūs jei naudojate $CFG->prefix)';
$string['yesmissingindexesfound'] = 'Rasta nerastų indexu jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra nerastų indeksų.';
$string['yeswrongdefaultsfound'] = 'Rasta nenuoseklių numatytų reikšmių jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra nenuoseklių numatytų reikšmių.';
$string['yeswrongintsfound'] = 'Rasta neteisingų sveikųjų skaičių jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra neteisingų sveikųjų skaičių.';
$string['yeswrongoraclesemanticsfound'] = 'Rasta Oracle stulpelių naujančių BYTE semantiką jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra Oracle stulpelių naujančių BYTE semantiką.';
