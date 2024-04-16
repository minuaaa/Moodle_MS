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
 * Strings for component 'lti', language 'lt_uni', version '4.2'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Priimti';
$string['accept_grades'] = 'Priimti įvertinimus iš įrankio';
$string['accept_grades_admin'] = 'Priimti įvertinimus iš įrankio';
$string['accept_grades_admin_help'] = 'Nurodyti kada įrankio tiekėjas gali pridėti, atnaujinti, skaityti ir ištrinti įvertinimus susijusius šio įrankio tipo kopijomis. Kai kurie įrankių tiekėjai palaiko pažymių atgalinį pranešimą į Moodle priklausomai nuo veiksmų su įrankiu, sukuriant labiau integruotą patirtį.';
$string['accept_grades_help'] = 'Nurodyti kada įrankio tiekėjas gali pridėti, atnaujinti, skaityti ir ištrinti įvertinimus susijusius šio įrankio tipo kopijomis. Kai kurie įrankių tiekėjai palaiko pažymių atgalinį pranešimą į Moodle priklausomai nuo veiksmų su įrankiu, sukuriant labiau integruotą patirtį. Šis nustatymas gali būti perrašytas įrankio nustatymuose.';
$string['action'] = 'Veiksmas';
$string['active'] = 'Veiklus';
$string['activity'] = 'Veikla';
$string['addnewapp'] = 'Įjungti išorines programas';
$string['addserver'] = 'Pridėti naują patikimą serverį';
$string['addtype'] = 'Pridėti išorinio įrankio nustatymus';
$string['allow'] = 'Leisti';
$string['allowsetting'] = 'Leisti įrankiu talpinti 8K nustatymų Moodle';
$string['always'] = 'Visada';
$string['automatic'] = 'Automatiškai, pagal paleidimo URL adresą';
$string['baseurl'] = 'Bazinis URL';
$string['basiclti_base_string'] = 'LTI OAuth bazinė eilutė';
$string['basiclti_endpoint'] = 'LTI paleidimo pabaigos taškas';
$string['basiclti_in_new_window'] = 'Jūsų veikla atsidarė naujame lange';
$string['basiclti_parameters'] = 'LTI paleidimo parametrai';
$string['basicltiactivities'] = 'LTI Veiklos';
$string['basicltifieldset'] = 'Individualaus pavyzdžio lauko rinkinio';
$string['basicltiintro'] = 'Veiklos aprašymas';
$string['basicltiname'] = 'Veiklos pavadinimas';
$string['basicltisettings'] = 'Bazinio mokymosi įrankio sąveikos nustatymai';
$string['cannot_delete'] = 'Jums negalima ištrinti šio įrankio nustatymų';
$string['cannot_edit'] = 'Jums negalima keisti šio įrankio nustatymų';
$string['comment'] = 'Komentaras';
$string['configpassword'] = 'Numatytas nuotolinio įrankio slaptažodis';
$string['configpreferheight'] = 'Numatytas pageidautinas aukštis';
$string['configpreferwidget'] = 'Nustatyti įtaisėlį kaip numatytą pradžią';
$string['configpreferwidth'] = 'Numatytas pageidautinas plotis';
$string['configresourceurl'] = 'Numatytas išteklius URL';
$string['configtoolurl'] = 'Numatytas išorinio įrankio URL';
$string['configtypes'] = 'Įjungti LTI aplikacijas.';
$string['course_tool_types'] = 'Kurso įrankio tipai';
$string['courseid'] = 'Kurso id numeris';
$string['coursemisconf'] = 'Kursas yra blogai sukonfigūruotas';
$string['createdon'] = 'Sukurtas';
$string['curllibrarymissing'] = 'PHP CURL biblioteka turi būti įrašyta jei nori naudotis LTI';
$string['custom'] = 'Individualūs parametrai';
$string['custom_config'] = 'Naudojama individuali įrankio konfigūracija';
$string['custom_help'] = 'Individualūs parametrai yra nustatymai naudojami įrankio tiekėjo. Pavyzdžiu, individualus parametras gali būti naudojamas parodyti specifinę informaciją iš tiekėjo. Saugiausia yra palikti  šį lauką nepakeistą, nebent liepus įrankio tiekėjui.';
$string['custominstr'] = 'Individualūs parametrai';
$string['debuglaunch'] = 'Derinimo nustatymai';
$string['debuglaunchoff'] = 'Normali paleistis';
$string['debuglaunchon'] = 'Derinimo paleistis';
$string['default'] = 'Numatyta';
$string['default_launch_container'] = 'numatytasis paleidimo konteineris';
$string['default_launch_container_help'] = 'Paleidimo konteineris paveikia įrankio ekraną kai paleidžiama iš šaltinio. Kai kurie paleidimo konteineriai suteikia ekranui daugiau vietos, o kiti labiau integruotą jausmą su Moodle aplinka. * **Numatytas** - Naudoti paleidimo konteinerį kuris nusakyta įrankio nustatymuose. * **Įdėti** - Įrankis yra vaizduojamas esamame Moodle lange, panašiai kaip dauguma kitų Veiklos tipų. * **Įdėti be bloko** - Įrankis yra atvaizduojamas esamame Moodle lange, tik su navigacijos kontrole puslapio viršuje.* **Naujas langas** - Įrankis atsidaro naujame lange, užimdamas visą laisvą vietą. Priklausomai nuo naršyklės, bus atidarytas naujas skirtukas arba iššoks naujas langas. Gali būti kad naršyklė neleis atidaryti naujo lango.';
$string['delegate'] = 'Deleguoti pas instruktorių';
$string['delete'] = 'Pašalinti';
$string['delete_confirmation'] = 'Ar jūs įsitikinęs kad norite pašalinti šio išorinio įrankio nustatymus?';
$string['deletetype'] = 'Pašalinti išorinio įrankio nustatymus';
$string['display_description'] = 'Rodyti veiklos aprašymą kai paleidžiama';
$string['display_description_help'] = 'Jei pasirinkta, veiklos aprašymas (nurodyta aukščiau) bus rodoma virš tiekėjo turinio. Aprašymas gali būti naudojamas duoti papildomas instrukcijas įrankio paleidikliams , bet nėra būtinas. Aprašymas niekada nėra rodomas kai įrankio paleidimo konteineris yra naujame lange.';
$string['display_name'] = 'Vaizduoti veiklos pavadinimą kai paleidžiama';
$string['display_name_help'] = 'Jei pasirinkta, veiklos vardas bus rodomas virš įrankio teikėjo turinio. Gali būti kad įrankio teikėjas taip pat rodys pavadinimą. Šis pasirinkimas gali užkirsti kelią veiklos pavadinimui būti rodomam du kartus. Pavadinimas niekada nėra rodomas kai paleidimo konteineris yra naujas langas.';
$string['domain_mismatch'] = 'Paleidimo URL adreso domenas neatitinka įrankio nustatymų.';
$string['donot'] = 'Nesiųsti';
$string['donotaccept'] = 'Nepriimti';
$string['donotallow'] = 'Neleisti';
$string['edittype'] = 'Redaguoti išorinio įrankio nustatymus';
$string['embed'] = 'Įdėti';
$string['embed_no_blocks'] = 'Įdėti be blokų';
$string['enableemailnotification'] = 'Siųsti pranešimus el. laišku';
$string['enableemailnotification_help'] = 'Jei įjungta, studentai gaus el. laiško patvirtinimą kai jų įrankio pateikimas buvo įvertintas.';
$string['errormisconfig'] = 'Prastai sukonfigūruotas įrankis. Prašau paprašyti savo Moodle administratoriaus sutvarkyti šią klaidą.';
$string['extensions'] = 'LTI išplėtimo paslauga';
$string['external_tool_type'] = 'Išorinio įrankio tipas';
$string['external_tool_type_help'] = 'Pagrindinė įrankio nustatymų paskirtis yra nustatyti saugų komunikavimo kanalą tarp Moodle ir įrankio teikėjo. Taip pat tai teikia galimybę numatytiesiems nustatymams ir nustatant papildomas paslaugas įrankiui. * **Automatiškai, pagal paleidimo URL adresą** - Šis nustatymas turi būti naudojamas beveiks visais atvejais. Moodle parinks jums tinkamiausius įrankio nustatymus pagal paleidimo URL adresą. Įrankiai sukonfigūruoti pagal administratorių ir kursą bus panaudoti. Kai paleidimo URL adresas yra konkretus, Moodle atsakys nesvarbu ar supras adresą ar ne. Jei Moodle neatpažins paleidimo URL adreso, jums gali reikėti rankiniu būdu pakeisti įrankio nustatymus.* **Konkretaus įrankio tipas** - Pasirenkant konkretų įrankio tipą, jūs galite priversti Moodle naudoti to įrankio konfigūraciją, kai komunikuojama su išorinio įrankio tiekėju. Jei paleidimo URL adresas nepriklauso įrankio tiekėjui, pasirodys įspėjimas. Kai kuriais atvejais paleidimo URL nėra būtinas, kai teikiamas konkretus įrankio tipas (jei nėra paleidžiama tam tikrų resursų tarp įrankio tiekėjo).* **Vartotojo nustatymas** - Norint nustatyti vartotojo įrankio nustatymus tik šiai kopijai, rodyti Papildomus pasirinkimus, ir įveskite vartotojo raktą ir bendrą slaptą raktą pats. Jei neturi vartotojo rakto ir bendro slapto rakto, jūs galite jo prašyti iš įrankio tiekėjo. Ne visi įrankiai reikalauja vartotojo rakto ir bendro slapto rakto, tais atvejais laukai gali būti palikti tušti. ###Įrankio tipo redagavime yra Trys piktogramos po išorinio įrankio  išplečiamuoju sąrašu:* **Pridėti** - Sukurti kurso lygio konfigūraciją. Visų išorinių įrankių kursai gali naudoti įrankio nustatymus. * **Redaguoti** - Pasirinkite kurso lygio įrankį iš išplečiamojo sąrašo, tada paspauskite šią piktogramą. Įrankio nustatymų detalės gali būti redaguojamos.* **Pašalinti** - Pašalinti pasirinkto kurso lygio įrankio tipą.';
$string['external_tool_types'] = 'Išorinių įrankių tipai';
$string['failedtoconnect'] = 'Moodle nepavyko susisiekti su "$a" sistema';
$string['filter_basiclti_configlink'] = 'Nustatyti jūsų norimas svetaines ir jų slaptažodžius';
$string['filter_basiclti_password'] = 'Slaptažodis yra privalomas';
$string['filterconfig'] = 'LTI administratorius';
$string['fixexistingconf'] = 'Naudokite esamus nustatymus blogai sukonfigūruotam pavyzdžiui';
$string['fixnew'] = 'Nauji nustatymai';
$string['fixnewconf'] = 'Nustatyti naujus nustatymus blogai sukonfigūruotam pavyzdžiui';
$string['fixold'] = 'Naudoti jau esamą';
$string['force_ssl'] = 'Priversti SSL';
$string['force_ssl_help'] = 'Pasirenkant šį nustatymą priverčia visus paleidimus šio įrankio tiekėjui naudoti SSL. Visų  voratinklio paslaugų užklausos iš įrankio tiekėjo naudos SSL. Jei naudojate šį nustatymą, patvirtinkite kad Moodle svetainė ir įrankio tiekėjas palaiko SSL.';
$string['forced_help'] = 'Šis nustatymas buvo priverstinai pridėtas į kursą arba svetainės lygio įrankio konfigūravimu. Jūs negalite jo keisti per šią grafinę sąsają.';
$string['global_tool_types'] = 'Globalių įrankių tipai';
$string['grading'] = 'Vertinimo maršrutai';
$string['icon_url'] = 'Piktogramos URL';
$string['icon_url_help'] = 'Piktogramos URL leidžia modifikuoti piktogramos pasirodymą kurso sąrašuose. Vietoj to kad naudoti numatytąją LTI piktogramą, piktograma piktograma kuri perteikia veiklos tipą gali būti apibūdinta.';
$string['invalidid'] = 'LTI ID buvo neteisingas';
$string['launch_in_moodle'] = 'Paleidimo įrankis moodle';
$string['launch_in_popup'] = 'Paleidimo įrankis iššokančiame lange';
$string['launch_url'] = 'Paleidimo URL adresas';
$string['launch_url_help'] = 'Paleidimo URL adresas parodo išorinio įrankio adresą, ir gali turėti papildomos informacijos, tokios kaip ištekliai parodymui. Jei jūs esate užtikrintas ką įvesti paleidimo URL adrese, prašau susisiekti su įrankio tiekėjo norint daugiau informacijos. Jei jūs pasirinkote konkretų įrankio tipą, jums gali nereikėti įvesti paleidimo URL adreso. Jei įrankio nuoroda yra naudojama tik paleisti įrankio tiekėjo sistemą, ir neiti prie konkrečių išteklių, tai gali būti sprendimas.';
$string['launchinpopup'] = 'Paleidimo konteineris';
$string['launchinpopup_help'] = 'Paleidimo konteineris paveikia įrankio ekraną kai paleidžiama iš šaltinio. Kai kurie paleidimo konteineriai suteikia ekranui daugiau vietos, o kiti labiau integruotą jausmą su Moodle aplinka. * **Numatytas** - Naudoti paleidimo konteinerį kuris nusakyta įrankio nustatymuose. * **Įdėti** - Įrankis yra vaizduojamas esamame Moodle lange, panašiai kaip dauguma kitų Veiklos tipų. * **Įdėti be bloko** - Įrankis yra atvaizduojamas esamame Moodle lange, tik su navigacijos kontrole puslapio viršuje.* **Naujas langas** - Įrankis atsidaro naujame lange, užimdamas visą laisvą vietą. Priklausomai nuo naršyklės, bus atidarytas naujas skirtukas arba iššoks naujas langas. Gali būti kad naršyklė neleis atidaryti naujo lango.';
$string['launchoptions'] = 'Paleidimo nustatymai';
$string['lti:addcoursetool'] = 'Vertinti LTI veiklą';
$string['lti:grade'] = 'Vertinti LTI veiklą';
$string['lti:manage'] = 'Redaguoti LTI veiklą';
$string['lti:requesttooladd'] = 'Patvirtinkite įrankį administratoriams konfigūruoti';
$string['lti:view'] = 'Peržiūrėti LTI veiklas';
$string['lti_administration'] = 'LTI administracija';
$string['lti_errormsg'] = 'Įrankis gražino tokią klaidos žinutę: "$a"';
$string['lti_launch_error'] = 'Įvyko klaida paleidžiant išorinį įrankį';
$string['lti_launch_error_tool_request'] = '<p> Pateikti prašymą administratoriui kad užbaigti įrankio konfigūraciją, spauskite  <a href="{$a->admin_request_url}" target="_top">čia</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p> Ši klaida gali būti rezultatas nerasto vartotojo rakto ar bendros paslapties įrankio tiekėjui. </p> <p> Jei turite vartotojo raktą raktą ir bendrą raktą, jūs galite įvesti jį kai redaguojate išorinio įrankio kopiją (įsitikinkite kad papildomi pasirinkimai yra matomi). <br /> Kitu atveju, jūs galite sukurti kurso lygio įrankio tiekėjo konfigūraciją <a href="{$a->course_tool_editor}">čia</a>. </p>';
$string['lti_tool_request_added'] = 'Įrankio nustatymų užklausa buvo sėkmingai priimta. Jums gali reikėti susisiekti su administratoriumi,kad užbaigti įrankio konfigūraciją.';
$string['lti_tool_request_existing'] = 'Įrankio konfigūracija įrankio domenui jau buvo pateikta.';
$string['main_admin'] = 'Bendra pagalba';
$string['main_admin_help'] = 'Išoriniai įrankiai leidžia Moodle vartotojams betarpiškai bendrauti su mokymosi ištekliais patalpintais nuotoliniu būdu. Per specialų paleidimo protokolą, išorinis įrankis turės priėjimą prie kai kurios bendros informacijos apie vartotojo paleidimą Pavyzdžiui, institucijos pavadinimas, kurso id, vartotojo id, ir kita informacija kaip vartotojo vardas ar el. pašto adresas. Įrankio tipai išvardinti čia yra suskirstyti į tris kategorijas: * **Aktyvus** - Šie įrankių tiekėjai buvo patvirtinti ir sukonfigūruoti administratoriaus. Jie gali būti naudojami iš bet kurio kurso šioje Moodle kopijoje. Jei vartotojo raktas ir bendra paslaptis yra įvesti, patikimas ryšys yra užmezgamas tarp Moodle kopijos ir išorinio įrankio, teikiant saugų komunikacijos kanalą. * **Laukiamas** - Šie įrankio tiekėjai ateina paketais, bet nebuvo sukonfigūruoti administratoriaus. Instruktoriai gali naudoti šį įrankį iš tų tiekėjų jei jie turi vartotojo raktus ir bendras paslaptis, arba jei nei vieno iš jų nereikia. * **Atmestas** - Šie įrankių tiekėjai yra pažymėti kaip tie kurių administratorius neturi jokio noro padaryti jos galimus visai Moodle kopijai. Instruktoriai gali naudoti įrankius iš šio tiekėjo jei jie turi vartotojo raktą arba bendrą paslaptį, arba jei nei vieno nereikalaujama.';
$string['miscellaneous'] = 'Kita';
$string['misconfiguredtools'] = 'Blogai sukonfigūruotas pavyzdys aptiktas';
$string['missingparameterserror'] = 'Puslapis yra blogai sukonfigūruotas: "$a"';
$string['module_class_type'] = 'Moodle modulio tipai';
$string['modulename'] = 'Išorinis įrankis';
$string['modulename_help'] = 'Išoriniai įrankiai leidžia Moodle vartotojams bendrauti su mokymosi ištekliais ir veiklomis kitose internetiniuose puslapiuose. Pavyzdžiui, išorinis įrankis gali suteikti priėjimą prie naujos veiklos tipo ar mokymosi medžiagos iš leidėjo. Kad nustatyti išorinio įrankio kopiją yra reikalingas įrankio tiekėjas kuris palaiko MĮS (Mokymosi įrankio sąveiką(angl. LTI)) . Jei susiradote įrankio tiekėją kuris palaiko MĮS, jis turėtų pateikti ir nurodymus kaip nusistatyti išorinio įrankio kopiją. Papildomai, įrankio tipus sukonfigūruotus puslapio administratoriaus taip pat bus galima naudoti. Išoriniai įrankiai skiriasi nuo URL išteklių: * **Žinantis kontekstą** - Išoriniai įrankiai turi priėjimą prie informacijos apie vartotoją(įstaiga, kursas, vardas ir kt. informacija) kuris paleido įrankį. * **Gili integracija** - Išorinis įrankis palaiko skaitymą, atnaujinimą ir įvertinimų ištrynimą susijusį su veiklos kopija. Daugiau integracijos punktų yra suplanuota naujausiuose leidimuose. * **Sauga** - Išorinio įrankio nustatymai sukuria patikimą ryšį tarp Moodle ir įrankio tiekėjo, leidžiančio apsaugotą ryšį tarp jų.';
$string['modulenamepluralformatted'] = 'LTI pavyzdžiai';
$string['never'] = 'Niekada';
$string['new_window'] = 'Naujas langas';
$string['no_lti_configured'] = 'Nėra jokio sukonfigūruoto aktyvaus išorinio įrankio.';
$string['no_lti_pending'] = 'Nėra nei vieno laukiančio išorinio įrankio.';
$string['no_lti_rejected'] = 'Nėra nei vieno atmesto išorinio įrankio.';
$string['noattempts'] = 'Nebuvo jokių bandymų šio įrankio kopijoj.';
$string['noltis'] = 'Nėra jokios LTI kopijos';
$string['noservers'] = 'Nerastas joks serveris';
$string['notypes'] = 'Šiuo metu nėra nei vienos LTI įrankio instaliacijos Moodle. Spauskite „Diegti“ nuorodą aukščiau, kad pridėti.';
$string['noviewusers'] = 'Nerastas nei vienas vartotojas su leidimu naudoti šį įrankį';
$string['optionalsettings'] = 'Papildomi nustatymai';
$string['organization'] = 'Organizacijos detalės';
$string['organizationdescr'] = 'Organizacijos aprašymas';
$string['organizationurl'] = 'Organizacijos URL';
$string['organizationurl_help'] = 'Bazinis šios Moodle kopijos URL. Jei šis laukas paliktas tuščias, numatyta reikšmė bus naudojama, priklausomai nuo svetainės nustatymų.';
$string['pagesize'] = 'Rodomos pateiktys per puslapį.';
$string['password'] = 'Bendra paslaptis';
$string['password_admin'] = 'Bendra paslaptis';
$string['password_admin_help'] = 'Bendra paslaptis gali būti laikoma kaip slaptažodis naudojamas patvirtinti priėjimą prie įrankio. Jis turėtų būti pateiktas kartu su vartotojo raktu iš įrankio tiekėjo. Įrankiai kurie nereikalauja saugios komunikacijos iš Moodle ir nepateikia papildomų paslaugų (tokių kaip vertinimų ataskaitos) gali nereikalauti bendros paslapties.';
$string['password_help'] = 'Iš anksto sukonfigūruotiems įrankiams nereikia įvesti bendros paslapties,  nes bendra paslaptis bus pateikta kaip dalis konfigūracijos proceso. Šis laukas turėtų būti įvestas jei kuriate sąsają į įrankio tiekėją kuris dar nėra sukonfigūruotas. Jei įrankio tiekėjas bus naudojamas daugiau nei vieną kartą šiame kurse, pridėti kurso įrankio konfigūraciją yra gera idėja. Bendra paslaptis gali būti laikoma slaptažodžiu patvirtinant priėjimą prie įrankio.  Ji turėtų būti pateikta kartu su vartotojo raktu iš įrankio tiekėjo. Įrankis kuris nereikalauja saugios komunikacijos iš Moodle ir neteikia papildomų paslaugų (tokių kaip vertinimo ataskaitos) gali nereikalauti bendros paslapties.';
$string['pending'] = 'Laukiama';
$string['pluginadministration'] = 'LTI administratorius';
$string['preferheight'] = 'Norimas aukštis';
$string['preferwidget'] = 'Norimas įtaiso paleidimas';
$string['preferwidth'] = 'Norimas plotis';
$string['press_to_submit'] = 'Spauskite kad paleisti šią veiklą';
$string['privacy'] = 'Privatu';
$string['quickgrade'] = 'Leisti greitąjį vertinimą';
$string['quickgrade_help'] = 'Jei įjungtas, keletas įrankių gali būti įvertinti per vieną puslapį. Pridėti įvertinimus ir komentarus tada spauskite „Išsaugoti visus mano atsiliepimus“ mygtuką kad išsaugotumėte šio puslapio pakeitimus.';
$string['redirect'] = 'Tuoj būsite peradresuoti, jei ne, spauskite mygtuką.';
$string['reject'] = 'Atmesti';
$string['rejected'] = 'Atmestas';
$string['resource'] = 'Išteklius';
$string['resourcekey'] = 'Vartotojo raktas';
$string['resourcekey_admin'] = 'Vartotojo raktas';
$string['resourcekey_admin_help'] = 'Vartotojo raktas gali būti laikomas vartotojo vardu kad patvirtinti priėjimą prie įrankio. Jis gali būti naudojamas įrankio tiekėjo kad unikaliai atpažinti  Moodle svetainę iš kurios vartotojai paleidžia įrankį. Vartotojo raktas privalo būti pateiktas įrankio tiekėjo. Kaip yra gaunamas vartotojo raktas skiriasi nuo įrankio tiekėjo. Tai gali būti automatinis procesas, arba gali būti reikalaujamas dialogas su įrankio tiekėju. Įrankiai kurie nereikalauja saugios komunikacijos iš Moodle ir nepateikia papildomų paslaugų (tokių kaip vertinimo ataskaitos) gali nereikalauti išteklių rakto.';
$string['resourcekey_help'] = 'Iš anksto sukonfigūruotiems įrankiams nėra būtina įvesti išteklių rakto, nes vartotojo raktas bus pateiktas kaip dalis konfigūracijos proceso. Šis laukas turėtų būti įvestas jei kuriate sąsają į įrankio tiekėją kuris dar nėra sukonfigūruotas. Jei įrankio tiekėjas bus naudojamas daugiau nei kartą šiame kurse, pridėti kurso įrankio konfigūraciją yra gera idėja. Vartotojo raktas gali būti laikomas kaip vartotojo vardas patvirtinti priėjimą prie įrankio. Jis gali būti naudojamas įrankio tiekėjo kad unikaliai atpažinti Moodle svetainę iš kurios vartotojas paleido įrankį. Vartotojo raktas privalo būti pateiktas įrankio tiekėjo. Vartotojo rakto gavimas skiriasi tarp įrankio tiekėjų. Tai gali būti automatinis procesas, arba tai gali reikalauti dialogo su įrankio tiekėju. Įrankiai kurie nereikalauja saugios komunikacijos iš Moodle ir neteikia papildomų paslaugų (tokių kaip įvertinimų ataskaitos) gali nereikalauti išteklių rakto.';
$string['resourceurl'] = 'Ištekliaus URL';
$string['return_to_course'] = 'Spauskite <a href="{$a->link}" target="_top">here</a>  kad sugrįžtumėte į kursą.';
$string['saveallfeedback'] = 'Išsaugoti visus mano atsiliepimus';
$string['secure_icon_url'] = 'Saugios piktogramos URL';
$string['secure_icon_url_help'] = 'Panašiai kaip piktogramos URL, bet naudojama kai į Moodle prieinama saugiai per SSL. Pagrindinė paskirtis yra neleisti naršyklei įspėti vartotojo kad puslapis buvo pasiektas naudojantis SSL, bet reikalauti rodyti nesaugų paveikslėlį';
$string['secure_launch_url'] = 'Saugus paleidimo URL adresas';
$string['secure_launch_url_help'] = 'Panašus į paleidimo URL, bet naudojamas vietoj jo kai reikalaujamas aukštas saugumas. Moodle naudos saugų paleidimo URL vietoj paleidimo URL kai Moodle svetainė bus prieinama per SSL, arba jei įrankis yra sukonfigūruotas visada pasileisti per SSL. Paleidimo URL gali būti nustatytas į https adresą kad versti leistis per SSL, ir šis laukas gali būti paliktas tuščias.';
$string['send'] = 'Siųsti';
$string['setupoptions'] = 'Sąrankos nustatymai';
$string['share_email'] = 'Dalintis paleidimo laišku su įrankiu.';
$string['share_email_admin'] = 'Dalintis paleidimo laišku su įrankiu.';
$string['share_email_admin_help'] = 'Nurodyti kada vartotojo el. pašto adresas, kuris paleidžia įrankį, turėtų būti dalinamasis su įrankio tiekėju. Įrankio tiekėjui gali reikėti el. pašto adreso kad išskirtų vartotojus su tokiu pačiu vardu, arba siųsti laiškus vartotojams pagal veiksmus su įrankiu.';
$string['share_email_help'] = 'Nurodyti kada vartotojo el. pašto adresas, kuris paleidžia įrankį, turėtų būti dalinamasis su įrankio tiekėju. Įrankio tiekėjui gali reikėti el. pašto adreso kad išskirtų vartotojus su tokiu pačiu vardu, arba siųsti laiškus vartotojams pagal veiksmus su įrankiu. Šis nustatymas gali būti perrašytas įrankio nustatymuose.';
$string['share_name'] = 'Dalintis paleidimo pavadinimą su įrankiu.';
$string['share_name_admin'] = 'Dalintis paleidimo pavadinimą su įrankiu.';
$string['share_name_admin_help'] = 'Nurodyti kada pilnas vartojo vardas kuris paleidžia įrankį turėtų būti dalinamasis su įrankio tiekėju. Įrankio tiekėjui gali reikėti prasmingo paleidiklio vardo.';
$string['share_name_help'] = 'Nurodyti kada pilnas vartojo vardas kuris paleidžia įrankį turėtų būti dalinamasis su įrankio tiekėju. Įrankio tiekėjui gali reikėti prasmingo paleidiklio vardo. Šis nustatymas gali būti perrašytas įrankio nustatymuose.';
$string['share_roster'] = 'Leisti įrankiui pasiekti šio kurso sąrašą.';
$string['share_roster_admin'] = 'Įrankis gali prieiti prie kurso sąrašo';
$string['share_roster_admin_help'] = 'Nusakykite ar įrankis gali prieiti prie sąrašo prisiregistravusių vartotojų kursuose, iš kurio šis įrankio tipas buvo paleistas.';
$string['share_roster_help'] = 'Nusakykite kada įrankis gali prieiti prie sąrašo kurse prisiregistravusių vartotojų. Šis nustatymas gali būti perrašytas įrankio nustatymuose.';
$string['size'] = 'Dydžio parametrai';
$string['submission'] = 'Pateikimas';
$string['submissions'] = 'Pateikimai';
$string['toggle_debug_data'] = 'Perjungti derinimo duomenis';
$string['tool_config_not_found'] = 'Įrankio konfigūracija nerasta šiam URL';
$string['tool_settings'] = 'Įrankio nustatymai';
$string['toolsetup'] = 'Išorinio įrankio nustatymai';
$string['toolurl'] = 'Įrankio bazinis URL';
$string['toolurl_help'] = 'Įrankio bazinis URL yra naudojamas sutikrinti įrankio paleidimo URL  į teisingą įrankio konfigūraciją. Uždedant URL  priešdėlį http(s) yra pasirinktina. Papildomai, bazinis URL yra naudojamas kaip paleidimo URL jei paleidimo URL nėra aprašytas išorinio įrankio kopijoje. <table> <thead> <tr> <td> <b>Base URL</b> </td> <td> <b>Matches</b> </td> </tr> </thead> <tbody> <tr> <td> tool.com </td> <td> tool.com, tool.com/quizzes, tool.com/quizzes/quiz.php?id=10, www.tool.com/quizzes </td> </tr> <tr> <td> www.tool.com/quizzes </td> <td> tool.com/quizzes, tool.com/quizzes/take.php?id=10, www.tool.com/quizzes </td> </tr> <tr> <td> quiz.tool.com </td> <td> quiz.tool.com, quiz.tool.com/take.php?id=10 </td> </tr> </tbody> </table> Jei dvi įrankio konfigūracijos yra tam pačiam domenui, labiausiai sutampantis bus naudojamas.';
$string['typename'] = 'Įrankio pavadinimas';
$string['typename_help'] = 'Įrankio pavadinimas yra naudojamas atpažinti įrankio tiekėją Moodle. Pavadinimas bus matomas instruktoriams, kai pridedami išoriniai įrankiai tarp kursų.';
$string['types'] = 'Tipas';
$string['update'] = 'Atnaujinti';
$string['using_tool_configuration'] = 'Naudojamos įrankio konfigūracijos:';
$string['validurl'] = 'Tinkamas URL turi prasidėti su http(s)://';
$string['viewsubmissions'] = 'Peržiūrėti pateiktis ir vertinimo langą';
