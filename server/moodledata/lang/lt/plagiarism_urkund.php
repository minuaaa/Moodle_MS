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
 * Strings for component 'plagiarism_urkund', language 'lt', version '4.2'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Leisti visus palaikomus failų tipus';
$string['allowallsupportedfiles_help'] = 'Tai leidžia dėstytojui apriboti, kurie failų tipai bus siunčiami apdorojimui į URKUND. Tai netrukdo studentams įkelti skirtingus failų tipus į užduotį.';
$string['assessmentresubmitted'] = 'Užduotis buvo pateikta pakartotinai';
$string['attempts'] = 'Padaryti bandymai';
$string['charcount'] = 'Minimalus simbolių skaičius';
$string['charcount_help'] = 'Tai nustato minimalų simbolių skaičių, prieš turinį siunčiant URKUND.';
$string['confirmresetall'] = 'Tai atkurs visus failus būsenoje: {$a}';
$string['debugfilter'] = 'Filtruoti failus pagal';
$string['defaultsdesc'] = 'Šie nustatymai yra numatytieji nustatymai, įjungiant URKUND Užduoties modulyje';
$string['defaultupdated'] = 'Atnaujintos numatytosios vertės';
$string['deletedwarning'] = 'Failo negalima rasti - jis gali būti pašalintas vartotojo';
$string['errorcode_3'] = 'Klaida 3 - mažiau nei 450 simbolių ir 20 žodžių';
$string['file'] = 'Failas';
$string['filedeleted'] = 'Failas pašalintas iš eilės';
$string['filereset'] = 'Failas buvo iš naujo nustatytas, kad jį vėl būtų galima pateikti URKUND';
$string['fileresubmitted'] = 'Pateiktas failas eilėje, pakartotiniam pateikimui';
$string['filesresubmitted'] = 'Iš naujo pateikti {$ a} failai';
$string['filter30'] = 'Neįtraukti senesnių nei 30 dienų';
$string['filter7'] = 'Neįtraukti senesnių nei 7 dienų';
$string['filter90'] = 'Neįtraukti senesnių nei 90 dienų';
$string['getallscores'] = 'Gauti visus balus';
$string['getscore'] = 'Gauti balą';
$string['getscores'] = 'Gauti balus';
$string['id'] = 'ID';
$string['identifier'] = 'Identifikatorius';
$string['module'] = 'Modulis';
$string['modulenotfound'] = 'Nepavyko rasti {$a-> module} modulio, kurio ID {$a-> modid}.';
$string['name'] = 'Vardas';
$string['nofilter'] = 'Filtro nėra';
$string['noreceiver'] = 'Gavėjo adresas nebuvo nurodytas';
$string['pending'] = 'Šis failas laukia pateikimo URKUND';
$string['pluginname'] = 'URKUND (plagiato) sutapties papildinys';
$string['previouslysubmitted'] = 'Anksčiau pateiktas kaip';
$string['privacy:metadata:core_files'] = 'Failai ir tekstas, pridedami prie veiklos modulių, kuriuose įjungtas „Urkund“ papildinys.';
$string['privacy:metadata:plagiarism_urkund_client'] = 'Informacija apie vartotoją siunčiama į išorinį „Urkund“ API';
$string['privacy:metadata:plagiarism_urkund_client:email'] = 'Vartotojo el. paštas';
$string['privacy:metadata:plagiarism_urkund_client:file'] = 'Fizinė teksto ar failo turinio, nusiųsto į Urkundą, kopija';
$string['privacy:metadata:plagiarism_urkund_client:filename'] = 'Pateikto failo vardas.';
$string['privacy:metadata:plagiarism_urkund_files'] = 'Saugo informaciją apie pateiktus failus.';
$string['privacy:metadata:plagiarism_urkund_files:lastmodified'] = 'Laikas, kada paskutinį kartą įrašas buvo atnaujintas';
$string['privacy:metadata:plagiarism_urkund_files:similarityscore'] = 'Sutapimo balas pateiktas Urkund';
$string['privacy:metadata:plagiarism_urkund_files:userid'] = 'Moodle vartotojo ID';
$string['processing'] = 'Šis failas buvo pateiktas URKUND, dabar laukiama, kol bus galima atlikti analizę';
$string['receivernotvalid'] = 'Tai nėra teisingas gavėjo adresas.';
$string['regenerationrequested'] = 'Visos ataskaitos buvo pažymėtos atnaujinimui. Gali praeiti šiek tiek laiko, kol bus atnaujintos ataskaitos.';
$string['report'] = 'ataskaita';
$string['restrictcontent'] = 'Pateikite pridedamus failus ir tiesioginį tekstą';
$string['restrictcontentfiles'] = 'Pateikite tik pridėtus failus';
$string['restrictcontentno'] = 'Pateikti viską';
$string['restrictcontenttext'] = 'Pateikti tik tekstą';
$string['restrictfiles'] = 'Pateiktini failų tipai';
$string['resubmit'] = 'Pateikti pakartotinai';
$string['resubmitall'] = 'Pateikite viską iš naujo su būsena: {$a}';
$string['resubmitclose'] = 'Pateikite iš naujo po uždarymo datos';
$string['resubmitdue'] = 'Pateikti iš naujo po termino';
$string['resubmittourkund'] = 'Pakartotinai generuoti visas URKUND ataskaitas';
$string['savedconfigfailed'] = 'Įvestas neteisingas vartotojo vardo ir slaptažodžio derinys, URKUND buvo išjungtas, bandykite dar kartą.';
$string['savedconfigsuccess'] = 'Sutapties nustatymai išsaugoti';
$string['scoreavailable'] = 'Šį failą apdorojo URKUND ir ataskaita dabar prieinama.';
$string['scorenotavailableyet'] = 'Šis failas dar nebuvo apdorotas URKUND.';
$string['sendfiles'] = 'Siųsti eilėje esančius failus';
$string['showall'] = 'Rodyti visas klaidas';
$string['showwhencutoff'] = 'Po veiklos nutraukimo datos';
$string['showwhendue'] = 'Pasibaigus veiklos terminui';
$string['similarity'] = 'URKUND';
$string['status'] = 'Būsena';
$string['studentdisclosure'] = 'Studentų atskleidimas';
$string['studentdisclosuredefault'] = 'Visi įkelti failai bus pateikti plagiato aptikimo tarnybai URKUND.
Jei norite, kad jūsų dokumentai nebūtų naudojami kaip analizės šaltinis kitose organizacijose ne šioje svetainėje, galite naudoti atsisakymo nuorodą, pateiktą po to, kai bus sugeneruota ataskaita.';
$string['studentemailsubject'] = 'Failą apdorojo URKUND';
$string['submitondraft'] = 'Įkelti failą, kai jis yra įkeliamas pirmą kartą';
$string['submitonfinal'] = 'Įkelti failą, kai besimokantysis pateikia jį vertinimui';
$string['timesubmitted'] = 'Pateikimo laikas';
$string['toolarge'] = 'Šis failas yra per didelis, kad būtų galima apdoroti URKUND';
$string['unknownwarning'] = 'Įvyko klaida bandant nusiųsti šį failą į URKUND';
$string['unknownwarninggetscore'] = 'Įvyko klaida bandant gauti šio failo rezultatą iš URKUND';
$string['unsupportedfiletype'] = 'Failo tipas nėra palaikomas URKUND';
$string['updateallowedfiletypes'] = 'Atnaujinkite leidžiamus failų tipus ir ištrinkite Urkund įrašus, susijusius su ištrintomis veiklomis.';
$string['urkund'] = 'URKUND (plagiato) sutapties papildinys';
$string['urkund:advancedsettings'] = 'Leisti dėstytojui peržiūrėti išplėstinius modulio parametrus iš URKUND';
$string['urkund:resetfile'] = 'Leisti dėstytojui iš naujo pateikti failą  URKUND po klaidos';
$string['urkund:resubmitallfiles'] = 'Leisti dėstytojui pakartotinai pateikti visus failus URKUND';
$string['urkund:viewreport'] = 'Leiskite dėstytojui peržiūrėti visą URKUND ataskaitą';
$string['urkund_advanceditems'] = 'Nustatymų rinkinys, kurį reikia laikyti išplėstiniu';
$string['urkund_api'] = 'URKUND integracijos adresas';
$string['urkund_api_help'] = 'Tai yra URKUND API adresas';
$string['urkund_draft_submit'] = 'Kada failas turėtų būti pateiktas';
$string['urkund_enableplugin'] = 'Įgalinti URKUND  {$a}';
$string['urkund_hidefilename'] = 'Slėpti pateikimo failo vardą';
$string['urkund_lang'] = 'Kalba';
$string['urkund_lang_help'] = 'Kalbos kodas, pateiktas URKUND';
$string['urkund_password'] = 'Slaptažodis';
$string['urkund_password_help'] = 'URKUND suteiktas slaptažodis norint pasiekti API';
$string['urkund_receiver'] = 'Gavėjo adresas';
$string['urkund_receiver_help'] = 'Tai unikalus adresas, kurį dėstytojui pateikė URKUND';
$string['urkund_resubmit_on_close'] = 'Pakartotinis pateikimas uždarant';
$string['urkund_show_student_report'] = 'Rodyti sutapties ataskaitą studentui';
$string['urkund_show_student_score'] = 'Rodyti sutapties skaičių studentui';
$string['urkund_show_student_score_help'] = 'Sutapties balas yra procentinė išraiška pateikto failo sutapties su kitu turiniu.';
$string['urkund_studentemail'] = 'Siųsti laišką besimokančiajam';
$string['urkund_username'] = 'Vartotojo vardas';
$string['urkund_username_help'] = 'Vartotojo vardas, kurį suteikė URKUND, kad būtų galima pasiekti API';
$string['urkund_userpref'] = 'Naudokite paskutinį išsaugotą gavėją';
$string['urkunddebug'] = 'Klaidų šalinimas';
$string['urkunddefaults'] = 'URKUND numatytieji nustatymai';
$string['urkunddefaults_assign'] = 'Numatyti parametrai';
$string['urkundfiles'] = 'Urkund failai';
$string['useurkund'] = 'Įgalinti URKUND';
