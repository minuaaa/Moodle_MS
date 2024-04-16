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
 * Strings for component 'feedback', language 'lt_uni', version '4.2'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Įtraukti klausimą į veiklą';
$string['add_pagebreak'] = 'Įtraukti puslapio lūžį';
$string['adjustment'] = 'Koregavimas';
$string['after_submit'] = 'Pateikus';
$string['allowfullanonymous'] = 'Leisti visiškai anonimiškai';
$string['analysis'] = 'Analizė';
$string['anonymous'] = 'Anonimiškai';
$string['anonymous_edit'] = 'Įrašų vartotojų vardai';
$string['anonymous_entries'] = 'Anoniminiai įrašai';
$string['anonymous_user'] = 'Anoniminis vartotojas';
$string['append_new_items'] = 'Pridėti naujų elementų';
$string['autonumbering'] = 'Automatiniai numeriai';
$string['autonumbering_help'] = 'Įjungia arba išjungia automatinius kiekvieno klausimo numerius';
$string['average'] = 'Vidurkis';
$string['bold'] = 'Paryškintasis';
$string['cannotsavetempl'] = 'įrašyti šablonų neleidžiama';
$string['captcha'] = 'CAPTCHA';
$string['captchanotset'] = 'CAPTCHA nenustatyta.';
$string['check'] = 'Keli pasirinkimai – keli atsakymai';
$string['check_values'] = 'Galimi atsakymai';
$string['checkbox'] = 'Keli pasirinkimai – leidžiami keli atsakymai (žymės langeliai)';
$string['choosefile'] = 'Pasirinkti failą';
$string['chosen_feedback_response'] = 'pasirinktas atsiliepimų atsakymas';
$string['complete_the_form'] = 'Atsakyti klausimus...';
$string['completed'] = 'užbaigta';
$string['completed_feedbacks'] = 'Pateikti atsakymai';
$string['completionsubmit'] = 'Laikyti užbaigtu, jei pateikti atsiliepimai';
$string['configallowfullanonymous'] = 'Jei nustatyta šios parinkties reikšmė Taip, atsiliepimą galima palikti prie štai neprisijungus. Tai turės įtakos tik pagrindiniame puslapyje esantiems atsiliepimams.';
$string['confirmdeleteentry'] = 'Ar tikrai norite naikinti šį įrašą?';
$string['confirmdeleteitem'] = 'Ar tikrai norite naikinti šį elementą?';
$string['confirmdeletetemplate'] = 'Ar tikrai norite naikinti šį šabloną?';
$string['confirmusetemplate'] = 'Ar tikrai norite naudoti šį šabloną?';
$string['continue_the_form'] = 'Tęsti formą';
$string['count_of_nums'] = 'Numerių skaičius';
$string['courseid'] = 'kurso ID';
$string['creating_templates'] = 'Įrašyti šiuos klausimus kaip naują šabloną';
$string['delete_entry'] = 'Naikinti įrašą';
$string['delete_item'] = 'Naikinti klausimą';
$string['delete_old_items'] = 'Naikinti senus elementus';
$string['delete_template'] = 'Naikinti šabloną';
$string['delete_templates'] = 'Naikinti šabloną...';
$string['depending'] = 'priklausomi elementai';
$string['depending_help'] = 'Priklausomi elementai leidžia jums rodyti elementus atsižvelgiant į kitų elementų reikšmes.<br /> <strong>Štai komponavimo versijos pavyzdys, kaip naudoti:</strong><br /> <ul> <li>Pirmiausia sukurkite elementą, nuo kurio reikšmės priklauso kiti elementai.</li> <li>Tada įtraukite puslapio lūžį.</li> <li>Įtraukite elementus, kurie priklauso nuo ankstesnių elementų reikšmių.<br /> Pasirinkite elemento kūrimo formą sąraše Priklausomas elementas ir įrašykite reikiamą reikšmę teksto lauke Priklausoma reikšmė.</li> </ul> <strong>Struktūra turėtų atrodyti taip:</strong> <ol> <li>Elemento K: ar turite automobilį? A: Taip / Ne</li> <li>Puslapio lūžis</li> <li>Elemento K: kokios spalvos jūsų automobilis?<br /> (šis elementas priklauso nuo 1 elemento, kai jo reikšmė yra Taip)</li> <li>Elementas K: kodėl neturite automobilio?<br /> (šis elementas priklauso nuo 1 elemento, kai jo reikšmė yra Ne)</li> <li> ... kiti elementai</li> </ol> Viskas. Sėkmės!';
$string['dependitem'] = 'priklausomas elementas';
$string['dependvalue'] = 'priklausoma reikšmė';
$string['description'] = 'Aprašas';
$string['do_not_analyse_empty_submits'] = 'Neanalizuoti tuščių pateikimų';
$string['drop_feedback'] = 'Šalinti iš šių kursų';
$string['dropdown'] = 'Keli pasirinkimai – leidžiamas vienas atsakymas (išplečiamasis sąrašas)';
$string['dropdown_values'] = 'Atsakymai';
$string['dropdownlist'] = 'Keli pasirinkimai – vienas atsakymas (išplečiamasis sąrašas)';
$string['dropdownrated'] = 'Išplečiamasis sąrašas (įvertintas)';
$string['edit_item'] = 'Redaguoti klausimą';
$string['edit_items'] = 'Redaguoti klausimus';
$string['email_notification'] = 'Siųsti pranešimų el. laiškus';
$string['email_notification_help'] = 'Jei jungta, administratoriai el. paštu gauna pranešimą apie atsiliepimų pateikimus.';
$string['emailteachermail'] = '{$a->username} baigė atsiliepimo veiklą: {$a->feedback} Atsiliepimą galite peržiūrėti čia: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} baigė atsiliepimo veiklą: <i>\'{$a->feedback}\'</i><br /><br /> Atsiliepimą galite peržiūrėti <a href="{$a->url}">čia</a>.';
$string['entries_saved'] = 'Jūsų atsakymai įrašyti. Dėkojame.';
$string['export_questions'] = 'Eksportuoti klausimus';
$string['export_to_excel'] = 'Eksportuoti į „Excel“';
$string['feedback:complete'] = 'Baigti atsiliepimą';
$string['feedback:createprivatetemplate'] = 'Kurti asmeninį šabloną';
$string['feedback:createpublictemplate'] = 'Kurti viešąjį šabloną';
$string['feedback:deletesubmissions'] = 'Naikinti baigtus pateikimus';
$string['feedback:deletetemplate'] = 'Naikinti šabloną';
$string['feedback:edititems'] = 'Redaguoti elementus';
$string['feedback:mapcourse'] = 'Susieti kursus su visuotiniais atsiliepimais';
$string['feedback:receivemail'] = 'Gauti pranešimą el. paštu';
$string['feedback:view'] = 'Peržiūrėti atsiliepimą';
$string['feedback:viewanalysepage'] = 'Peržiūrėti analizės puslapį po pateikimo';
$string['feedback:viewreports'] = 'Peržiūrėti ataskaitas';
$string['feedback_is_not_for_anonymous'] = 'atsiliepimas nėra skirtas anonimui';
$string['feedback_is_not_open'] = 'Atsiliepimas neatidarytas';
$string['feedbackclose'] = 'Uždaryti atsiliepimą';
$string['feedbackopen'] = 'Atidaryti atsiliepimą';
$string['file'] = 'Failas';
$string['filter_by_course'] = 'Filtruoti pagal kursus';
$string['handling_error'] = 'Apdorojant atsiliepimų modulio veiksmą įvyko klaida';
$string['hide_no_select_option'] = 'Slėpti parinktį Nepasirinkta';
$string['horizontal'] = 'horizontalus';
$string['import_questions'] = 'Importuoti klausimus';
$string['import_successfully'] = 'Importuota sėkmingai';
$string['importfromthisfile'] = 'Importuoti iš šio failo';
$string['info'] = 'Informacija';
$string['infotype'] = 'Informacijos tipas';
$string['insufficient_responses'] = 'nepakanka atsakymų';
$string['insufficient_responses_for_this_group'] = 'Yra nepakankamai šios grupės atsakymų';
$string['insufficient_responses_help'] = 'Yra nepakankamai šios grupės atsakymų. Jei norite, kad atsiliepimas būtų anoniminis, būtini mažiausiai 2 atsakymai.';
$string['item_label'] = 'Žyma';
$string['item_name'] = 'Klausimas';
$string['label'] = 'Žyma';
$string['mapcourse'] = 'Susieti atsiliepimą su kursais';
$string['mapcourse_help'] = 'Numatyta, kad atsiliepimų formos, kurios yra kuriamos jūsų pagrindiniame puslapyje, prieinamos visoje svetainėje ir naudojant atsiliepimų bloką bus rodomos visuose kursuose. Galite reikalauti, kad atsiliepimo forma būtų rodoma, nustatydami ją kaip statišką bloką arba apriboti kursus, kuriuose bus rodoma atsiliepimo forma, susiedami ją su konkrečiais kursais.';
$string['mapcourseinfo'] = 'Tai visos svetainės atsiliepimas, kuris naudojant atsiliepimų bloką prieinamas visuose kursuose. Tačiau susiedami kursus, galite apriboti, kuriems kursams jis bus rodomas. Ieškokite kursų ir susiekite jį su šiuo atsiliepimu.';
$string['mapcoursenone'] = 'Nesusieti jokie kursai. Atsiliepimas galimas visiems kursams';
$string['mapcourses'] = 'Susieti atsiliepimą su kursais';
$string['mappedcourses'] = 'Susieti kursai';
$string['maximal'] = 'maksimalus';
$string['messageprovider:message'] = 'Atsiliepimo priminimas';
$string['messageprovider:submission'] = 'Pranešimai apie atsiliepimus';
$string['mode'] = 'Režimas';
$string['modulename'] = 'Atsiliepimas';
$string['modulename_help'] = 'Atsiliepimų moduliai leidžia kurti pasirinktines apklausas.';
$string['modulenameplural'] = 'Atsiliepimas';
$string['move_item'] = 'Perkelti šį klausimą';
$string['multichoice'] = 'Keli pasirinkimai';
$string['multichoice_values'] = 'Kelių pasirinkimų reikšmės';
$string['multichoicerated'] = 'Keli pasirinkimai (įvertinta)';
$string['multichoicetype'] = 'Kelių pasirinkimų tipas';
$string['multiplesubmit'] = 'Keli pateikimai';
$string['multiplesubmit_help'] = 'Jei įjungta anoniminėse apklausose, vartotojai gali teikti atsiliepimą neribotą skaičių kartų.';
$string['name'] = 'Vardas';
$string['name_required'] = 'Būtinas vardas';
$string['next_page'] = 'Kitas puslapis';
$string['no_handler'] = 'Nėra veiksmų apdorojimo programos, skirtos';
$string['no_itemlabel'] = 'Nėra žymos';
$string['no_itemname'] = 'Nėra elemento pavadinimo';
$string['no_items_available_yet'] = 'Dar nenustatyti jokie klausimai';
$string['no_templates_available_yet'] = 'Dar nėra jokių šablonų';
$string['non_anonymous'] = 'Vartotojo vardas bus užregistruotas ir rodomas su atsakymais';
$string['non_anonymous_entries'] = 'neanoniminiai įrašai';
$string['non_respondents_students'] = 'ne respondentai klausytojai';
$string['not_completed_yet'] = 'Dar nebaigta';
$string['not_selected'] = 'Nepasirinkta';
$string['not_started'] = 'nepradėta';
$string['numeric'] = 'Skaitinis atsakymas';
$string['numeric_range_from'] = 'Intervalas nuo';
$string['numeric_range_to'] = 'Intervalas iki';
$string['of'] = 'iš';
$string['oldvaluespreserved'] = 'Visi seni klausimai ir priskirtos reikšmės bus išsaugotos';
$string['oldvalueswillbedeleted'] = 'Dabartiniai klausimai ir visi jūsų vartotojo atsakymai bus panaikinti';
$string['only_one_captcha_allowed'] = 'Atsiliepime gali būti tik viena CAPTCHA';
$string['overview'] = 'Apžvalga';
$string['page'] = 'Puslapis';
$string['page-mod-feedback-x'] = 'Bet kuris atsiliepimų modulio puslapis';
$string['page_after_submit'] = 'Puslapis po pateikimo';
$string['pagebreak'] = 'Puslapio lūžis';
$string['pluginadministration'] = 'Atsiliepimų administravimas';
$string['pluginname'] = 'Atsiliepimas';
$string['position'] = 'Vieta';
$string['previous_page'] = 'Ankstesnis puslapis';
$string['public'] = 'Vieša';
$string['question'] = 'Klausimas';
$string['questions'] = 'Klausimai';
$string['radio'] = 'Keli pasirinkimai – vienas atsakymas';
$string['radio_values'] = 'Atsakymai';
$string['ready_feedbacks'] = 'Paruošti atsiliepimai';
$string['required'] = 'Būtina';
$string['resetting_data'] = 'Iš naujo nustatyti atsakymus į atsiliepimus';
$string['resetting_feedbacks'] = 'Iš naujo nustatomi atsiliepimai';
$string['response_nr'] = 'Atsakymo numeris';
$string['responses'] = 'Atsakymai';
$string['responsetime'] = 'Atsakymų laikai';
$string['save_as_new_item'] = 'Įrašyti kaip naują klausimą';
$string['save_as_new_template'] = 'Įrašyti kaip naują šabloną';
$string['save_entries'] = 'Pateikite savo atsakymus';
$string['save_item'] = 'Įrašyti klausimą';
$string['saving_failed'] = 'Įrašyti nepavyko';
$string['search_course'] = 'Ieškoti kursų';
$string['searchcourses'] = 'Ieškoti kursų';
$string['searchcourses_help'] = 'Ieškoti kursų, kuriuos norite susieti su šiuo atsiliepimu, kodo arba pavadinimo.';
$string['selected_dump'] = 'Pasirinkti $SESSION kintamojo indeksai yra iškelti žemiau:';
$string['send'] = 'siųsti';
$string['send_message'] = 'siųsti žinutę';
$string['show_all'] = 'Rodyti viską';
$string['show_analysepage_after_submit'] = 'Rodyti analizės puslapį po pateikimo';
$string['show_entries'] = 'Rodyti atsakymus';
$string['show_entry'] = 'Rodyti atsakymą';
$string['show_nonrespondents'] = 'Rodyti ne respondentus';
$string['site_after_submit'] = 'Svetainė po pateikimo';
$string['sort_by_course'] = 'Rikiuoti pagal kursus';
$string['started'] = 'pradėta';
$string['subject'] = 'Tema';
$string['switch_item_to_not_required'] = 'perjungti į: atsakymas nebūtinas';
$string['switch_item_to_required'] = 'perjungti į: atsakymas būtinas';
$string['template'] = 'Šablonas';
$string['template_saved'] = 'Šablonas įrašytas';
$string['templates'] = 'Šablonai';
$string['textarea'] = 'Ilgesnis tekstinis atsakymas';
$string['textarea_height'] = 'Eilučių skaičius';
$string['textarea_width'] = 'Plotis';
$string['textfield'] = 'Trumpas tekstinis atsakymas';
$string['textfield_maxlength'] = 'Maksimalus leidžiamas simbolių skaičius';
$string['textfield_size'] = 'Teksto lauko plotis';
$string['there_are_no_settings_for_recaptcha'] = 'Nėra CAPTCHA parametrų';
$string['this_feedback_is_already_submitted'] = 'Jau užbaigėte šią veiklą.';
$string['typemissing'] = 'nėra reikšmės „type“';
$string['update_item'] = 'Įrašyti klausimo pakeitimus';
$string['url_for_continue'] = 'Mygtuko Tęsti URL';
$string['url_for_continue_help'] = 'Numatyta, kad pateikus atsiliepimą mygtuko Tęsti paskirties vieta yra kursų puslapis. Čia galite apibrėžti kitą mygtuko Tęsti paskirties vietos URL.';
$string['use_one_line_for_each_value'] = '<br />Naudoti vieną eilutę kiekvienam atsakymui!';
$string['use_this_template'] = 'Naudoti šį šabloną';
$string['using_templates'] = 'Naudoti šabloną';
$string['vertical'] = 'vertikalus';
