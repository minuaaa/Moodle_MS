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
 * Strings for component 'plugin', language 'lt', version '4.2'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Veiksmai';
$string['availability'] = 'Prieinamumas';
$string['cancelinstallall'] = 'Atšaukti naujus diegimus ({$a})';
$string['cancelinstallhead'] = 'Atšaukiamas papildinių diegimas';
$string['cancelinstallinfo'] = 'Šie papildiniai dar nėra visiškai įdiegti, todėl jų diegimas gali būti atšauktas. Norėdami tai padaryti, pašalinkite įskiepių aplankus iš serverio dabar. Įsitikinkite, kad tai tikrai yra tai, kad norite išvengti atsitiktinio duomenų praradimo (pvz., kodo modifikacijų).';
$string['cancelinstallinfodir'] = 'Aplankas bus panaikintas: {$a}';
$string['cancelinstallone'] = 'Atšaukti šį diegimą';
$string['cancelupgradeall'] = 'Atšaukti atnaujinimus ({$a})';
$string['cancelupgradehead'] = 'Atkuriama ankstesnė papildinių versija';
$string['cancelupgradeone'] = 'Atšaukti šį atnaujinimą';
$string['checkforupdates'] = 'Tikrinti ar yra atnaujinimų';
$string['checkforupdateslast'] = 'Paskutinis patikrinimas atliktas {$a}';
$string['dependencyavailable'] = 'Galima';
$string['dependencyfails'] = 'Nepavyksta';
$string['dependencyinstall'] = 'Įdiegti';
$string['dependencyinstallhead'] = 'Trūkstamų priklausomybių įdiegimas';
$string['dependencyinstallmissing'] = 'Įdiegti trūkstamas priklausomybes ({$a})';
$string['dependencymissing'] = 'Trūkstamas';
$string['dependencyunavailable'] = 'Negalima';
$string['dependencyupload'] = 'Įkelti';
$string['dependencyuploadmissing'] = 'Įkelti ZIP failus';
$string['detectedmisplacedplugin'] = 'Papildinys "{$a->component}" yra įdiegtas neteisingai "{$a->current}", laukiama vieta yra "{$ a-> expected}"';
$string['displayname'] = 'Papildinio pavadinimas';
$string['err_response_curl'] = 'Nepavyko gauti galimų naujinimų duomenų – netikėta cURL klaida.';
$string['err_response_format_version'] = 'Netikėta atsakymo formato versija. Pabandykite dar kartą patikrinti, ar nėra galimų naujinimų.';
$string['err_response_http_code'] = 'Nepavyko gauti galimų naujinimų duomenų – netikėtas HTTP atsako kodas.';
$string['filterall'] = 'Rodyti visus';
$string['filtercontribonly'] = 'Rodyti tik papildomus papildinius';
$string['filterupdatesonly'] = 'Rodyti tik atnaujinamus';
$string['incompatibleversion'] = 'Nesuderinama Moodle versija: {$a}';
$string['isenabled'] = 'Įjungta?';
$string['misdepinfoplugin'] = 'Papildinio info';
$string['misdepinfoversion'] = 'Versijos info';
$string['misdepsavail'] = 'Galimos trūkstamos priklausomybės';
$string['misdepsunavail'] = 'Negalimos trūkstamos priklausomybės';
$string['misdepsunavaillist'] = 'Nerasta jokios versijos, atitinkančios priklausomybės reikalavimus: {$a}.';
$string['misdepsunknownlist'] = 'Nėra papildinių kataloge: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Šio tipo papildiniai nėra įrašyti';
$string['notdownloadable'] = 'Negalima parsiųsti paketo';
$string['notdownloadable_help'] = 'ZIP paketo su atnaujinimu negalima atsisiųsti automatiškai.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Pastabos';
$string['notsupported'] = 'Papildinys gali būti nesuderinamas su Moodle versija {$a}';
$string['notwritable'] = 'Papildinių failai neįrašomi';
$string['notwritable_help'] = 'Papildinių failų žiniatinklio serveris neįrašo. Žiniatinklio serverio procesas turi turėti rašymo prieigą prie papildinio aplanko ir viso jo turinio. Taip pat gali prireikti rašymo prieigos prie nurodyto papildinio tipo šakninio aplanko.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Visi papildiniai';
$string['overviewext'] = 'Papildomi papildiniai';
$string['overviewupdatable'] = 'Galimi atnaujinimai';
$string['packagesdebug'] = 'Derinimo išvestis įjungta';
$string['packagesdownloading'] = 'Atsiunčiama {$a}';
$string['packagesextracting'] = 'Išskleidžiama {$a}';
$string['packagesvalidating'] = 'Patvirtinama {$a}';
$string['packagesvalidatingfailed'] = 'Diegimas nutrauktas dėl patvirtinimo nesėkmės';
$string['packagesvalidatingok'] = 'Patvirtinimas sėkmingas, diegimas gali būti tęsiamas';
$string['plugincheckall'] = 'Visi papildiniai';
$string['plugincheckattention'] = 'Papildiniai, reikalaujantys dėmesio';
$string['pluginchecknone'] = 'Dabar nėra papildinių, reikalaujančių Jūsų dėmesio';
$string['pluginchecknotice'] = 'Šiame puslapyje rodomi papildiniai, kuriems gali prireikti jūsų dėmesio atnaujinant, pvz., nauji papildiniai, kuriuos reikia atnaujinti, trūkstami papildiniai ir tt. Papildomi papildiniai rodomi, jei yra jų naujinimas. Prieš tęsiant Moodle naujinimą, rekomenduojama patikrinti, ar yra naujesnių įskiepių versijų, ir atnaujinti jų šaltinio kodą.';
$string['plugindisable'] = 'Išjungti';
$string['plugindisabled'] = 'Išjungtas';
$string['pluginenable'] = 'Įjungti';
$string['pluginenabled'] = 'Įjungtas';
$string['release'] = 'Leidimas';
$string['requiredby'] = 'Reikalaujamas: {$a}';
$string['requires'] = 'Reikalauja';
$string['rootdir'] = 'Katalogas';
$string['settings'] = 'Nustatymai';
$string['source'] = 'Šaltinis';
$string['sourceext'] = 'Plėtiniai';
$string['sourcestd'] = 'Standartas';
$string['status'] = 'Būsena';
$string['status_delete'] = 'Bus pašalinti';
$string['status_downgrade'] = 'Aukštesnė versija jau yra įrašyta!';
$string['status_missing'] = 'Trūksta iš disko!';
$string['status_new'] = 'Bus įrašyti';
$string['status_nodb'] = 'Nėra duomenų bazės';
$string['status_upgrade'] = 'Bus atnaujinti';
$string['status_uptodate'] = 'Naujausios versijos';
$string['supportedconversions'] = 'Palaikomos dokumento konversijos';
$string['supportedmoodleversions'] = 'Palaikomos „Moodle“ versijos';
$string['systemname'] = 'Identifikatorius';
$string['type_antivirus'] = 'Antivirusinės papildinys';
$string['type_antivirus_plural'] = 'Antivirusinės papildiniai';
$string['type_auth'] = 'Atpažinimo metodas';
$string['type_auth_plural'] = 'Atpažinimo metodai';
$string['type_availability'] = 'Prieinamumo ribojimas';
$string['type_availability_plural'] = 'Prieinamumo ribojimai';
$string['type_block'] = 'Blokas';
$string['type_block_plural'] = 'Blokai';
$string['type_cachelock'] = 'Talpyklos užrakto tvarkytuvas';
$string['type_cachelock_plural'] = 'Talpyklos užrakto tvarkytuvai';
$string['type_cachestore'] = 'Talpyklos saugykla';
$string['type_cachestore_plural'] = 'Talpyklos saugyklos';
$string['type_calendartype'] = 'Kalendoriaus tipas';
$string['type_calendartype_plural'] = 'kalendoriaus tipai';
$string['type_contentbank'] = 'Interaktyvaus turinio bankas';
$string['type_contentbank_plural'] = 'Interaktyvaus turinio banko papildinys';
$string['type_contenttype'] = 'Interaktyvaus turinio bankas';
$string['type_contenttype_plural'] = 'Interaktyvaus turinio banko papildinys';
$string['type_coursereport'] = 'Kurso ataskaita';
$string['type_coursereport_plural'] = 'Kurso ataskaitos';
$string['type_customfield'] = 'Pasirinktinis laukas';
$string['type_customfield_plural'] = 'Pasirinktiniai laukai';
$string['type_dataformat'] = 'Duomenų formatas';
$string['type_dataformat_plural'] = 'Duomenų formatai';
$string['type_editor'] = 'Rengyklė';
$string['type_editor_plural'] = 'Rengyklės';
$string['type_enrol'] = 'Registracijos metodas';
$string['type_enrol_plural'] = 'Registracijos metodai';
$string['type_fileconverter'] = 'Dokumento konverteris';
$string['type_fileconverter_plural'] = 'Dokumento konverteriai';
$string['type_fileconvertermanage'] = 'Valdyti dokumento konverterius';
$string['type_filter'] = 'Teksto filtras';
$string['type_filter_plural'] = 'Teksto filtrai';
$string['type_format'] = 'Kurso formatas';
$string['type_format_plural'] = 'Kurso formatai';
$string['type_gradeexport'] = 'Įvertinimų eksportavimo metodas';
$string['type_gradeexport_plural'] = 'Įvertinimų eksportavimo metodai';
$string['type_gradeimport'] = 'Įvertinimų importavimo metodas';
$string['type_gradeimport_plural'] = 'Įvertinimų importavimo metodai';
$string['type_gradereport'] = 'Įvertinimų žurnalo ataskaita';
$string['type_gradereport_plural'] = 'Įvertinimų žurnalo ataskaitos';
$string['type_gradingform'] = 'Išplėstinio vertinimo metodas';
$string['type_gradingform_plural'] = 'Išplėstinio vertinimo metodai';
$string['type_h5plib'] = 'H5P framework';
$string['type_h5plib_plural'] = 'H5P frameworks';
$string['type_local'] = 'Vietinis papildinys';
$string['type_local_plural'] = 'Vietiniai papildiniai';
$string['type_media'] = 'Grotuvas';
$string['type_media_plural'] = 'Grotuvai';
$string['type_message'] = 'Pranešimų papildinys';
$string['type_message_plural'] = 'Pranešimų papildiniai';
$string['type_mlbackend'] = 'Mašininio mokymosi "backends" programa';
$string['type_mlbackend_plural'] = 'Mašininio mokymosi "backends" programos';
$string['type_mnetservice'] = 'MNet paslauga';
$string['type_mnetservice_plural'] = 'MNet paslaugos';
$string['type_mod'] = 'Užsiėmimo modulis';
$string['type_mod_plural'] = 'Užsiėmimo moduliai';
$string['type_paygw'] = 'Mokėjimo būdas';
$string['type_paygw_plural'] = 'Mokėjimo būdai';
$string['type_paygwmanage'] = 'Tvarkyti mokėjimo būdus';
$string['type_plagiarism'] = 'Plagiato uždraudimo papildinys';
$string['type_plagiarism_plural'] = 'Plagiatų uždraudimo papildiniai';
$string['type_portfolio'] = 'Portfelis';
$string['type_portfolio_plural'] = 'Portfeliai';
$string['type_profilefield'] = 'Profilio srities tipas';
$string['type_profilefield_plural'] = 'Profilio srities tipai';
$string['type_qbank'] = 'Klausimų banko papildinys';
$string['type_qbank_plural'] = 'Klausimų banko papildiniai';
$string['type_qbehaviour'] = 'Klausimo elgsena';
$string['type_qbehaviour_plural'] = 'Klausimo elgsenos';
$string['type_qformat'] = 'Klausimo importo/ eksporto formatas';
$string['type_qformat_plural'] = 'Klausimo importo/ eksporto formatai';
$string['type_qtype'] = 'Klausimo tipas';
$string['type_qtype_plural'] = 'Klausimo tipai';
$string['type_report'] = 'Svetainės ataskaita';
$string['type_report_plural'] = 'Svetainės ataskaitos';
$string['type_repository'] = 'Talpykla';
$string['type_repository_plural'] = 'Talpyklos';
$string['type_search'] = 'Paieškos variklis';
$string['type_search_plural'] = 'Paieškos varikliai';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temos';
$string['type_tool'] = 'Administratoriaus įrankis';
$string['type_tool_plural'] = 'Administratoriaus įrankiai';
$string['type_webservice'] = 'Interneto paslaugų protokolas';
$string['type_webservice_plural'] = 'Interneto paslaugų protokolai';
$string['uninstall'] = 'Pašalinti';
$string['uninstallconfirm'] = 'Ketinate pašalinti papildinį <em>{$a->name}</em>. Tai visiškai ištrins viską, kas yra duomenų bazėje, susijusioje su šiuo papildiniu, įskaitant jo konfigūraciją, žurnalo įrašus, įskiepio valdomus naudotojo failus ir t. t. Kelio atgal nebus, o pati Moodle nekuria jokios atkūrimo atsarginės kopijos. Ar tikrai norite tęsti?';
$string['uninstalldelete'] = 'Visi su papildiniu <em>{$a->name}</em> susiję duomenys buvo ištrinti iš duomenų bazės. Kad papildinys nebūtų įdiegtas iš naujo, jo aplankas <em>{$a->rootdir}</em> turi būti rankiniu būdu pašalintas iš serverio. Pati Moodle negali pašalinti aplanko dėl rašymo teisių.';
$string['uninstalldeleteconfirm'] = 'Visi su papildiniu <em>{$a->name}</em> susiję duomenys buvo ištrinti iš duomenų bazės. Kad papildinys pats neįsidiegtų iš naujo, jo aplankas <em>{$a->rootdir}</em> turi būti pašalintas iš serverio. Ar norite dabar pašalinti papildinio aplanką?';
$string['uninstalldeleteconfirmexternal'] = 'Atrodo, kad dabartinė papildinio versija buvo gauta per šaltinio kodo valdymo sistemos ({$a}) patikrą. Jei pašalinsite papildinio aplanką, galite prarasti svarbius vietinius kodo pakeitimus. Prieš tęsdami įsitikinkite, kad tikrai norite pašalinti papildinio aplanką.';
$string['uninstallextraconfirmblock'] = 'Yra {$a->instances} šio bloko egzempliorių (-iai).';
$string['uninstallextraconfirmenrol'] = 'Yra {$a->enrolments} naudotojų registracijų (-os).';
$string['uninstallextraconfirmmod'] = 'Yra {$a->instances} šio modulio egzempliorių {$a->courses} kursuose.';
$string['uninstalling'] = 'Išdiegiamas {$a->name}';
$string['updateavailable'] = 'Galima nauja versija {$a}!';
$string['updateavailable_moreinfo'] = 'Daugiau informacijos...';
$string['updateavailable_release'] = 'Leidimas {$a}';
$string['updatepluginconfirm'] = 'Papildinio atnaujinimo patvirtinimas';
$string['updatepluginconfirmexternal'] = 'Atrodo, kad dabartinė papildinio versija buvo gauta per šaltinio kodo valdymo sistemos ({$a}) patikrą. Jei įdiegsite šį naujinimą, nebegalėsite gauti papildinio naujinimų iš šaltinio kodo valdymo sistemos. Prieš tęsdami įsitikinkite, kad tikrai norite atnaujinti papildinį.';
$string['updatepluginconfirminfo'] = 'Ketinate įdiegti naują papildinio <strong>{$a->name}</strong> versiją. ZIP paketas su papildinio versija {$a->version} bus atsisiųstas iš <a href="{$a->url}">{$a->url}</a> ir išskleistas į jūsų Moodle diegimą kad būtų galima atnaujinti jūsų diegimą.';
$string['updatepluginconfirmwarning'] = 'Atkreipkite dėmesį, kad prieš atnaujinimą Moodle automatiškai nepadarys atsarginės duomenų bazės kopijos. Primygtinai rekomenduojame dabar pasidaryti visos momentinės kopijos atsarginę kopiją, kad išspręstumėte retą atvejį, kai naujajame kode yra klaidų, dėl kurių jūsų svetainė tampa nepasiekiama arba netgi sugadina duomenų bazę. Tęskite savo rizika.';
$string['validationmsg_componentmatch'] = 'Pilnas komponento pavadinimas';
$string['validationmsg_componentmismatchname'] = 'Papildinio pavadinimo neatitikimas';
$string['validationmsg_componentmismatchname_help'] = 'Kai kuriuose ZIP paketuose, pvz., sugeneruotuose „Github“, gali būti neteisingas šakninio katalogo pavadinimas. Turite pataisyti šakninio katalogo pavadinimą, kad jis atitiktų deklaruotą papildinio pavadinimą.';
$string['validationmsg_componentmismatchname_info'] = 'Papildinys deklaruoja, kad jo pavadinimas yra „{$a}“, bet tai neatitinka šakninio katalogo pavadinimo.';
$string['validationmsg_componentmismatchtype'] = 'Papildinio tipo neatitikimas';
$string['validationmsg_componentmismatchtype_info'] = 'Numatytas tipas „{$a->expected}“, bet papildinys deklaruoja, kad jo tipas yra „{$a->found}“.';
$string['validationmsg_filenotexists'] = 'Išarchyvuotas failas nerastas';
$string['validationmsg_filesnumber'] = 'Pakete nerasta pakankamai failų';
$string['validationmsg_filestatus'] = 'Nepavyko išskleisti visų failų';
$string['validationmsg_filestatus_info'] = 'Bandant išskleisti failą {$a->file} įvyko klaida \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Rastas kalbos failas';
$string['validationmsg_maturity'] = 'Deklaruojamas brandos lygis';
$string['validationmsg_maturity_help'] = 'Įskiepis gali deklaruoti savo brandumo lygį. Jei prižiūrėtojas mano, kad papildinys yra stabilus, deklaruotas brandumo lygis bus MATURITY_STABLE. Visi kiti brandumo lygiai (pvz., alfa arba beta) turėtų būti laikomi nestabiliais ir pateikiamas įspėjimas.';
$string['validationmsg_missingcomponent'] = 'Papildinys nedeklaruoja savo komponento pavadinimo';
$string['validationmsg_missingcomponent_help'] = 'Visi papildiniai turi pateikti visą savo komponento pavadinimą per `$plugin->component` deklaraciją version.php faile.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Anglų kalbos failo pavadinimo neatitikimas';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Nurodytam papildinio tipui trūksta numatyto failo anglų kalba {$a}.';
$string['validationmsg_missinglangenfile'] = 'Nerastas anglų kalbos failas';
$string['validationmsg_missinglangenfolder'] = 'Trūksta anglų kalbos aplanko';
$string['validationmsg_missingversion'] = 'Papildinys nedeklaruoja savo versijos';
$string['validationmsg_missingversionphp'] = 'Failas version.php nerastas';
$string['validationmsg_multiplelangenfiles'] = 'Rasti keli anglų kalbos failai';
$string['validationmsg_onedir'] = 'Netinkama ZIP paketo struktūra.';
$string['validationmsg_onedir_help'] = 'ZIP pakete turi būti tik vienas šakninis katalogas, kuriame yra papildinio kodas. To šakninio katalogo pavadinimas turi sutapti su papildinio pavadinimu.';
$string['validationmsg_pathwritable'] = 'Rašyti prieigos patikrinimą';
$string['validationmsg_pluginversion'] = 'Papildinio versija';
$string['validationmsg_pluginversiontoolow'] = 'Aukštesnė šio papildinio versija jau įdiegta';
$string['validationmsg_release'] = 'Papildinio leidimas';
$string['validationmsg_requiresmoodle'] = 'Reikalinga „Moodle“ versija';
$string['validationmsg_rootdir'] = 'Diegiamo papildinio pavadinimas';
$string['validationmsg_rootdir_help'] = 'ZIP paketo šakninio katalogo pavadinimas sudaro įdiegiamo papildinio pavadinimą. Jei pavadinimas neteisingas, prieš diegdami papildinį galbūt norėsite pervardyti ZIP šakninį katalogą.';
$string['validationmsg_rootdirinvalid'] = 'Neteisingas papildinio pavadinimas';
$string['validationmsg_rootdirinvalid_help'] = 'Šakninio katalogo pavadinimas ZIP pakete pažeidžia formalius sintaksės reikalavimus. Kai kuriuose ZIP paketuose, pvz., sugeneruotuose „Github“, gali būti neteisingas šakninio katalogo pavadinimas. Turite pataisyti šakninio katalogo pavadinimą, kad jis atitiktų papildinio pavadinimą.';
$string['validationmsg_targetexists'] = 'Tikslinė vieta jau yra ir bus pašalinta';
$string['validationmsg_targetexists_help'] = 'Papildinio katalogas jau yra ir bus pakeistas papildinio paketo turiniu.';
$string['validationmsg_targetnotdir'] = 'Tikslinė vieta, kurią užima failas';
$string['validationmsg_unknowntype'] = 'Nežinomas įskiepio tipas';
$string['validationmsg_versionphpsyntax'] = 'Nepalaikoma sintaksė aptikta faile version.php';
$string['validationmsglevel_debug'] = 'Derinimas';
$string['validationmsglevel_error'] = 'Klaida';
$string['validationmsglevel_info'] = 'Gerai';
$string['validationmsglevel_warning'] = 'Įspėjimas';
$string['version'] = 'Versija';
$string['versiondb'] = 'Dabartinė versija';
$string['versiondisk'] = 'Nauja versija';
