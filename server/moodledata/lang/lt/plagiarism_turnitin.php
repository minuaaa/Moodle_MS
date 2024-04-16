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
 * Strings for component 'plagiarism_turnitin', language 'lt', version '4.2'.
 *
 * @package     plagiarism_turnitin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = 'Ar leisti pateikti bet kokio tipo failus?';
$string['allownonor_help'] = 'Šis failas nebuvo pateiktas Turnitin, nes jis priklauso užduočiai, kurios metu kursas buvo ištrintas. Eilutės ID: ({$a->id}) | Kurso modulio ID: ({$a->cm}) | Naudotojo ID: ({$a->userid})';
$string['anonblindmarkingnote'] = 'Pastaba: atskiras Turnitin anoniminio vertinimo nustatymas buvo pašalintas. Turnitin naudos Moodle aklojo vertinimo nustatymus, kad nustatytų anoniminio vertinimo nuostatas.';
$string['assigngeterror'] = 'Nepavyko gauti Turnitin duomenų';
$string['attachrubric'] = 'Naudoti rubriką šioje užduotyje';
$string['attachrubricnote'] = 'Pastaba: besimokantieji matys rubriką ir jos turinį prieš pateikimą.';
$string['because'] = 'Taip nutiko todėl, kad administratorius ištrynė laukiančią užduotį iš apdorojimo eilės ir nutraukė pateikimą Turnitin.<br /><strong>Failas vis dar egzistuoja Moodle. Susisiekite su savo instruktoriumi.</strong><br />Žr. toliau. dėl bet kokių klaidų kodų:';
$string['changerubricwarning'] = 'Pakeitus arba atjungus rubriką, iš šios užduoties darbų, įskaitant anksčiau pažymėtas rezultatų korteles, bus pašalinti visi esami rubrikos balai. Išliks bendrieji anksčiau įvertintų darbų pažymiai.';
$string['checkagainstnote'] = 'Pastaba: jei nepasirinkote „Taip“ bent vienoje iš toliau pateiktų „Tikrinti su...“ kategorijų, sutapties ataskaita NEBUS parengta.';
$string['classupdateerror'] = 'Nepavyko atnaujinti Turnitin Class duomenų';
$string['closebutton'] = 'Uždaryti';
$string['code'] = 'Kodas';
$string['compareinstitution'] = 'Palyginti pateiktus failus su šioje įstaigoje pateiktais dokumentais';
$string['config'] = 'Konfigūracija';
$string['configupdated'] = 'Konfigūracija atnaujinta';
$string['configureerror'] = 'Prieš naudodami šį modulį kurse, turite visiškai sukonfigūruoti jį kaip administratorius. Susisiekite su savo Moodle administratoriumi.';
$string['connecttest'] = 'Išbandyti Turnitin ryšį';
$string['connecttestcommerror'] = 'Nepavyko prisijungti prie Turnitin. Dar kartą patikrinkite API URL nustatymą.';
$string['connecttesterror'] = 'Nepavyko prisijungti prie Turnitin. Klaidos pranešimas:<br />';
$string['connecttestfailed'] = 'Nepavyko prisijungti.';
$string['connecttestsuccess'] = 'Ryšio bandymas sėkmingas';
$string['course'] = 'Kursas';
$string['coursegeterror'] = 'Nepavyko gauti kurso duomenų';
$string['createassignmenterror'] = 'Nepavyko sukurti Turnitin užduoties';
$string['cronsubmittedsuccessfully'] = 'Pateikimas: {$a->title} (TII ID: {$a->submissionid}) užduotyje {$a->assignmentname}, kurse {$a->coursename}, sėkmingai įkeltas į
 Turnitin.';
$string['dbexport'] = 'Duomenų bazės eksportas';
$string['dbexporttable'] = 'Eksportuoti {$a} duomenis';
$string['defaultinserterror'] = 'Bandant į duomenų bazę įterpti numatytosios nuostatos reikšmę įvyko klaida';
$string['defaults'] = 'Numatytieji parametrai';
$string['defaultsdesc'] = 'Šie nustatymai yra numatytieji nustatymai, nustatyti įjungiant Turnitin veikloje';
$string['defaultupdated'] = 'Turnitino numatytieji nustatymai atnaujinti';
$string['defaultupdateerror'] = 'Bandant atnaujinti numatytąją duomenų bazės nustatymo reikšmę įvyko klaida';
$string['deleteconfirm'] = 'Ar tikrai norite naikinti pateikimą?\\n\\nŠis veiksmas neatšaukiamas.';
$string['deleted'] = 'Panaikinta';
$string['deletesubmission'] = 'Naikinti pateikimą';
$string['diagnosticoptions_0'] = 'Išjungti';
$string['diagnosticoptions_1'] = 'Standartinis';
$string['diagnosticoptions_2'] = 'Derinimas';
$string['digital_receipt_subject'] = 'Tai jūsų Turnitin skaitmeninis kvitas';
$string['digitalreceipt'] = 'Skaitmeninis kvitas';
$string['draftsubmit'] = 'Kada failą įkelti į Turnitin?';
$string['editassignmenterror'] = 'Nepavyko redaguoti Turnitin užduoties';
$string['enablepseudo'] = 'Įgalinti Besimokančiojo Privatumą';
$string['erater'] = 'Įjungti gramatikos patikrą';
$string['erater_categories'] = 'Atsiliepimų kategorijos';
$string['erater_dictionary'] = 'Žodynas';
$string['erater_dictionary_en'] = 'Amerikos ir britų anglų kalbos žodynai';
$string['erater_dictionary_engb'] = 'Britų anglų kalbos žodynas';
$string['erater_dictionary_enus'] = 'Amerikos anglų kalbos žodynas';
$string['erater_grammar'] = 'Gramatika';
$string['erater_handbook'] = 'Gramatikos vadovas';
$string['erater_handbook_advanced'] = 'Pažengusieji';
$string['erater_handbook_elementary'] = 'Pagrindinė mokykla';
$string['erater_handbook_highschool'] = 'Aukštoji mokykla';
$string['erater_handbook_learners'] = 'Besimokantieji anglų kalba';
$string['erater_handbook_middleschool'] = 'Vidurinė mokykla';
$string['erater_mechanics'] = 'Mechanika';
$string['erater_spelling'] = 'Rašyba';
$string['erater_style'] = 'Stilius';
$string['erater_usage'] = 'Kalbos vartosena';
$string['errorcode0'] = 'Šis failas nebuvo pateiktas Turnitin. Susisiekite su savo sistemos administratoriumi';
$string['errorcode1'] = 'Šis failas nebuvo išsiųstas Turnitin, nes jame nėra pakankamai turinio, kad būtų galima parengti sutapties ataskaitą.';
$string['errorcode11'] = 'Šis failas nebuvo pateiktas Turnitin, nes jame trūksta duomenų';
$string['errorcode12'] = 'Šis failas nebuvo pateiktas Turnitin, nes jis priklauso užduočiai, kurios metu kursas buvo ištrintas. Eilutės ID: ({$a->id}) | Kurso modulio ID: ({$a->cm}) | Naudotojo ID: ({$a->userid})';
$string['errorcode13'] = 'Šio pateikimo ID – {$a->externalid} Turnitin nerastas. Nepavyko gauti sutapties procento ir kitų pateikimo duomenų.';
$string['errorcode14'] = 'Šis failas nebuvo pateiktas Turnitin, nes nepavyko rasti bandymo, kuriam jis priklauso';
$string['errorcode2'] = 'Šis failas nebus pateiktas Turnitin, nes viršija didžiausią leistiną {$a->maxfilesize} dydį';
$string['errorcode3'] = 'Šis failas nebuvo pateiktas Turnitin, nes naudotojas nesutiko su Turnitin galutinio naudotojo licencijos sutartimi.';
$string['errorcode4'] = 'Norėdami atlikti šią užduotį, turite įkelti palaikomo tipo failą. Priimtini failų tipai yra; .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps ir .rtf';
$string['errorcode9'] = 'Failo pateikti negalima, nes failų telkinyje nėra pasiekiamo turinio, kurį būtų galima pateikti.';
$string['errors'] = 'Klaidos';
$string['excludebiblio'] = 'Neįtraukti bibliografijos';
$string['excludepercent'] = 'Procentai';
$string['excludequoted'] = 'Neįtraukti citatų';
$string['excludesmallmatchesvalue'] = 'Neįtraukiamų sutapčių dydis';
$string['excludevalue'] = 'Neįtraukti mažų atitikimų';
$string['excludewords'] = 'Žodžiai';
$string['faultcode'] = 'Klaidos kodas';
$string['filedoesnotexist'] = 'Failas buvo panaikintas';
$string['genduedate'] = 'Parengti ataskaitas po pateikimo pabaigos datos (studentai gali teikti pakartotinai iki pateikimo pabaigos datos)';
$string['genimmediately1'] = 'Parengti ataskaitas iš karto po pateikimo (studentai negali teikti pakartotinai)';
$string['genimmediately2'] = 'Parengti ataskaitas iš karto po pateikimo (studentai gali teikti pakartotinai iki pateikimo pabaigos datos; po {$a->num_resubmissions} pakartotinių teikimų ataskaitos parengiamos per {$a->num_hours} val.)';
$string['grademark'] = 'GradeMark';
$string['id'] = 'Id';
$string['institutionalrepository'] = 'Institucinė saugykla (jei taikoma)';
$string['internetcheck'] = 'Tikrinti su interneto šaltiniais';
$string['invalidtablename'] = 'Lentelės {$a} nepavyko eksportuoti';
$string['journalcheck'] = 'Tikrinti su žurnalais, periodiniai<br />leidiniais ir publikacijomis';
$string['launchpeermarkmanager'] = 'Paleisti Peermark tvarkyklę';
$string['launchpeermarkreviews'] = 'Paleisti Peermark peržiūras';
$string['launchquickmarkmanager'] = 'Paleisti Quickmark tvarkyklę';
$string['launchrubricmanager'] = 'Paleisti rubrikos tvarkyklę';
$string['launchrubricview'] = 'Žiūrėti vertinimo rubriką';
$string['line'] = 'Eilutė';
$string['loadingdv'] = 'Įkeliama Turnitin dokumento peržiūra';
$string['locked_message'] = 'Užrakinta žinutė';
$string['locked_message_default'] = 'Šis parametras numatytas svetainės lygmeniu';
$string['locked_message_help'] = 'Jei kokie nors nustatymai užrakinti, rodomas šis pranešimas, nurodantis kodėl.';
$string['message'] = 'Žinutė';
$string['module'] = 'Modulis';
$string['nointegration'] = 'Neintegruoti';
$string['norepository'] = 'Nesaugoti talpykloje';
$string['norubric'] = 'Nenaudoti rubrikos';
$string['notavailableyet'] = 'Negalimas';
$string['notorcapable'] = 'Šiam failui negalima sukurti sutapties ataskaitos.';
$string['otherrubric'] = 'Naudoti kitam instruktoriui priklausančią rubriką';
$string['pending'] = 'Laukiama';
$string['pluginname'] = 'Turnitin plagiato įskiepis';
$string['pp_agreement'] = 'Atsisakymas / Sutikimas';
$string['pp_agreement_default'] = 'Aš patvirtinu, kad pateikiu savarankiškai parengtą darbą ir prisiimu visą atsakomybę už galimą autorinių teisių pažeidimą, susijusį su mano darbu.';
$string['pp_classcreationerror'] = 'Šios klasės nepavyko sukurti Turnitin. Daugiau informacijos rasite API žurnaluose';
$string['pp_createsubmissionerror'] = 'Nepavyko įkelti failą į Turnitin';
$string['pp_digital_receipt_message'] = 'Gerbiama(s) {$a->firstname} {$a->lastname},<br /><br />Jūs sėkmingai įkėlėte failą <strong>{$a->submission_title}</strong> į <strong>{$a->assignment_name}{$a->assignment_part}</strong> užduotį <strong>{$a->course_fullname}</strong> klasėje <strong>{$a->submission_date}</strong>. Jūsų pateikimo id yra <strong>{$a->submission_id}</strong>. Visą skaitmeninį kvitą (digital receipt) galite peržiūrėti ir išspausdinti pasirinkę print/download mygtuką Document Viewer skydelyje.<br /><br />Ačiū, kad naudojate Turnitin,<br /><br />Turnitin komanda';
$string['pp_submission_error'] = 'Turnitin praneša apie pateikimo klaidą:';
$string['pp_updatesubmissionerror'] = 'Nepavyko pakartotinai įkelti failo į Turnitin';
$string['ppassignmentcreateerror'] = 'Šio modulio nepavyko sukurti „Turnitin“. Daugiau informacijos rasite API žurnaluose';
$string['privacy:metadata:plagiarism_turnitin_files:submissionscore'] = 'Pateikimo sutapties balas.';
$string['privacy:metadata:plagiarism_turnitin_files:userid'] = 'Pateikimą pateikusio naudotojo ID.';
$string['queued'] = 'Eilėje';
$string['reportgenspeed'] = 'Sutapties ataskaitos parengimas';
$string['reportgenspeed_resubmission'] = 'Jau pateikėte šios užduoties dokumentą ir buvo sukurta sutapties ataskaita. Jei nuspręsite pateikti dokumentą iš naujo, jūsų ankstesnis pateikimas bus pakeistas ir bus sukurta nauja ataskaita. Po {$a->num_resubmissions} pakartotinio pateikimo turėsite palaukti {$a->num_hours} val. , kad pamatytumėte naują sutapties ataskaitą.';
$string['repositoryoptions_0'] = 'Leisti instruktoriui naudoti standartinės talpyklos parametrus';
$string['repositoryoptions_2'] = 'Pateikti visus dokumentus į standartinę talpyklą';
$string['repositoryoptions_3'] = 'Nepateikti jokių dokumentų į talpyklą';
$string['repositoryoptions_4'] = 'Pateikti visus dokumentus į institucijos talpyklą';
$string['resubmitselected'] = 'Pasirinktus failus pateikti pakartotinai';
$string['resubmitting'] = 'Teikiama pakartotinai';
$string['resubmittoturnitin'] = 'Pateikti pakartotinai į Turnitin';
$string['savesuccess'] = 'Keitimai išsaugoti';
$string['semptytable'] = 'Rezultatų nerasta.';
$string['sharedrubric'] = 'Bendrinta rubrika';
$string['similarity'] = 'Sutapimas';
$string['sinfo'] = 'Rodomi  _START_ - _END_ iš _TOTAL_ įrašų.';
$string['slengthmenu'] = 'Rodyti _MENU_ įrašų';
$string['snext'] = 'Kitas';
$string['spapercheck'] = 'Tikrinti su saugomais studentų darbais';
$string['sprevious'] = 'Ankstesnis';
$string['sprocessing'] = 'Įkeliami duomenys iš Turnitin...';
$string['ssearch'] = 'Paieška:';
$string['standardrepository'] = 'Standartinėje talpykloje';
$string['student'] = 'Besimokantysis';
$string['student_notread'] = 'Studentas neperžiūrėjo šio darbo.';
$string['student_read'] = 'Studentas peržiūrėjo darbą:';
$string['studentdataprivacy'] = 'Mokinių duomenų privatumo nustatymai';
$string['studentreports'] = 'Rodyti sutapties ataskaitas besimokantiesiems';
$string['studentreports_help'] = 'Leidžia rodyti Turnitin sutapties ataskaitas besimokantiesiems. Jei nustatyta „taip“, „Turnitin“ sugeneruotą sutapties ataskaitą gali peržiūrėti besimokantysis.';
$string['submitondraft'] = 'Įkelti failą, kai jis yra įkeliamas pirmą kartą';
$string['submitonfinal'] = 'Įkelti failą, kai besimokantysis pateikia jį vertinimui';
$string['submitpapersto'] = 'Saugoti besimokančiojo darbus';
$string['szerorecords'] = 'Nėra rodomų įrašų.';
$string['tiiaccountconfig'] = 'Turnitin paskyros konfigūracija';
$string['tiiaccountsettings'] = 'Turnitin paskyros nuostatos';
$string['tiiexplain'] = 'Turnitin yra komercinis produktas ir jūs turite turėti mokamą prenumeratą, kad galėtumėte naudotis šia paslauga, kad gautumėte daugiau informacijos, žr.  <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['transmatch'] = 'Vertimo atitikimas';
$string['turnitin'] = 'Turnitin';
$string['turnitin:enable'] = 'Įjungti Turnitin';
$string['turnitin:viewfullreport'] = 'Žiūrėti sutapties ataskaitą';
$string['turnitinaccountid'] = 'Turnitin paskyros ID';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitineula'] = 'Turnitin EULA';
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinpluginsettings'] = 'Turnitin sutapties patikros nustatymai';
$string['turnitinppulapost'] = 'Jūsų failas nebuvo įkeltas į Turnitin. Prašom spustelėti čia ir sutikti su mūsų EULA.';
$string['turnitinppulapre'] = 'Norėdami pateikti failą Turnitin, pirmiausia turite sutikti su mūsų EULA. Pasirinkę nepriimti mūsų EULA, failą pateiksite tik „Moodle“. Spustelėkite čia, kad sutiktumėte.';
$string['turnitinrefreshingsubmissions'] = 'Pateikimų atnaujinimas';
$string['turnitinrefreshsubmissions'] = 'Atnaujinti pateikimus';
$string['turnitinstatus'] = 'Turnitin statusas';
$string['turnitinuseanon'] = 'Naudoti anoniminį vertinimą';
$string['turnitinuseerater'] = 'Įjungti gramatikos grįžtamąjį ryšį';
$string['turnitinusegrademark'] = 'Įjungti GradeMark';
$string['usercreationerror'] = 'Turnitin naudotojo sukurti nepavyko';
$string['userfinderror'] = 'Bandant rasti naudotoją „Turnitin“ įvyko klaida';
$string['userupdateerror'] = 'Nepavyko atnaujinti naudotojo duomenų';
$string['useturnitin'] = 'Įjungti Turnitin';
$string['useturnitin_mod'] = 'Įjungti Turnitin {$a}';
