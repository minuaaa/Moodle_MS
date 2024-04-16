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
 * Strings for component 'webservice', language 'lt_uni', version '4.2'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Prieigos valdymo išimtis';
$string['actwebserviceshhdr'] = 'Aktyvūs žiniatinklio tarnybos protokolai';
$string['addaservice'] = 'Įtraukti tarnybą';
$string['addcapabilitytousers'] = 'Tikrinti vartotojų galimybes';
$string['addcapabilitytousersdescription'] = 'Vartotojai turi dvi galimybes – webservice:createtoken ir naudojamus protokolus atitinkanti galimybė, pvz., webservice/rest:use, webservice/soap:use. Norėdami jas pasiekti, sukurkite žiniatinklio tarnybų vaidmenį su leidžiamomis atitinkamomis galimybėmis ir priskirkite jį žiniatinklio tarnybos vartotojui kaip sistemos vaidmenį.';
$string['addfunction'] = 'Įtraukti funkciją';
$string['addfunctionhelp'] = 'Pasirinkite į tarnybą įtrauktiną funkciją.';
$string['addfunctions'] = 'Įtraukti funkcijas';
$string['addfunctionsdescription'] = 'Pasirinkite reikiamas naujai sukurtos tarnybos funkcijas.';
$string['addrequiredcapability'] = 'Priskirti reikiamą galimybę / panaikinti jos priskyrimą';
$string['addservice'] = 'Įtraukti naują tarnyba: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Įtraukti funkcijas į tarnybą {$a}';
$string['allusers'] = 'Visi vartotojai';
$string['apiexplorer'] = 'API naršyklė';
$string['apiexplorernotavalaible'] = 'API naršyklė dar neprieinama.';
$string['arguments'] = 'Argumentai';
$string['authmethod'] = 'Autentifikavimo metodas';
$string['cannotcreatetoken'] = 'Nėra leidimo sukurti voratinklio paslaugos atpažinimo ženklą paslaugai {$a}.';
$string['cannotgetcoursecontents'] = 'Nepavyko gauti kurso turinio';
$string['checkusercapability'] = 'Tikrinti vartotojo galimybę';
$string['checkusercapabilitydescription'] = 'Vartotojai privalo turėti atitinkamas galimybes, atsižvelgiant į naudojamus protokolus, pvz., webservice/rest:use, webservice/soap:use. Norėdami jas pasiekti, sukurkite žiniatinklio tarnybų vaidmenį su leidžiamomis atitinkamomis galimybėmis ir priskirkite jį žiniatinklio tarnybos vartotojui kaip sistemos vaidmenį.';
$string['configwebserviceplugins'] = 'Dėl saugos priežasčių turi būti įjungti tik tie protokolai, kurie naudojami.';
$string['context'] = 'Kontekstas';
$string['createservicedescription'] = 'Tarnyba yra žiniatinklio tarnybos funkcijų rinkinys. Leisite vartotojui pasiekti naują tarnybą. <strong>Tarnybos įtraukimo</strong> puslapyje pažymėkite parinktis Įjungti ir Įgaliotieji vartotojai. Pasirinkite Nėra būtinos galimybės.';
$string['createserviceforusersdescription'] = 'Tarnyba yra žiniatinklio tarnybos funkcijų rinkinys. Leisite vartotojams pasiekti naują tarnybą. <strong>Tarnybos įtraukimo</strong> puslapyje pažymėkite parinktį Įjungti ir panaikinkite parinkties Įgaliotieji vartotojai žymėjimą. Pasirinkite Nėra būtinos galimybės.';
$string['createtoken'] = 'Kurti atpažinimo ženklą';
$string['createtokenforuser'] = 'Kurti vartotojo atpažinimo ženklą';
$string['createtokenforuserdescription'] = 'Sukurkite žiniatinklio tarnybos vartotojo atpažinimo ženklą.';
$string['createuser'] = 'Sukukite konkretų vartotoją';
$string['createuserdescription'] = '„Moodle“ valdančiai sistemai nurodyti būtinas žiniatinklio tarnybų vartotojas.';
$string['criteriaerror'] = 'Trūksta teisių, ieškoti pagal kriterijus.';
$string['default'] = '{$a} numatytosios reikšmės';
$string['deleteaservice'] = 'Naikinti tarnybą';
$string['deleteservice'] = 'Naikinti tarnybą: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Panaikinus tarnybą, taip pat bus panaikinti su šia tarnyba susiję atpažinimo ženklai. Ar tikrai norite naikinti išorinę tarnybą {$a}?';
$string['deletetokenconfirm'] = 'Ar tikrai norite naikinti šį žiniatinklio tarnybos <strong>{$a->service}</strong> atpažinimo ženklą, skirtą <strong>{$a->user}</strong>?';
$string['disabledwarning'] = 'Visi žiniatinklio tarnybų protokolai yra išjungti. Parametrą Įjungti žiniatinklio tarnybas galima rasti dalyje Išplėstinės funkcijos.';
$string['doc'] = 'Dokumentacija';
$string['docaccessrefused'] = 'Negalite peržiūrėti šio atpažinimo ženklo dokumentacijos';
$string['downloadfiles'] = 'Galima parsisiųsti failus';
$string['downloadfiles_help'] = 'Jei įjungtas, bet kuris vartotojas gali parsisiųsti failus su savo saugos raktu. Žinoma, jie yra apriboti failams kuriuos jie gali siųstis toje svetainėje.';
$string['editaservice'] = 'Redaguoti tarnybą';
$string['editservice'] = 'Redaguoti tarnybą: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Įjungta';
$string['enabledocumentation'] = 'Įjungti programų kūrėjų dokumentaciją';
$string['enabledocumentationdescription'] = 'Prieinama išsami įjungtų protokolų žiniatinklio tarnybų informacija.';
$string['enableprotocols'] = 'Įjungti protokolus';
$string['enableprotocolsdescription'] = 'Turi būti įjungtas bent vienas protokolas. Dėl saugos priežasčių reikia įjungti tik tuos protokolus, kurie bus naudojami.';
$string['enablews'] = 'Įjungti žiniatinklio tarnybas';
$string['enablewsdescription'] = 'Žiniatinklio tarnybas reikia įjungti dalyje Išplėstinės funkcijos.';
$string['entertoken'] = 'Įveskite saugos raktą / atpažinimo ženklą:';
$string['error'] = 'Klaida: {$a}';
$string['errorcatcontextnotvalid'] = 'Kategorijos kontekste (category id:{$a->catid}) funkcijų vykdyti negalite. Konteksto klaidos pranešimas: {$a->message}';
$string['errorcodes'] = 'Klaidos pranešimas';
$string['errorcoursecontextnotvalid'] = 'Kursų kontekste (course id:{$a->courseid}) funkcijų vykdyti negalite. Konteksto klaidos pranešimas: {$a->message}';
$string['errorinvalidparam'] = 'Parametras {$a} yra netinkamas.';
$string['errornotemptydefaultparamarray'] = 'Žiniatinklio tarnybos aprašo parametras, kurio pavadinimas {$a}, yra viena arba kelios struktūros.  Numatytoji reikšmė gali būti tik tuščias masyvas. Patikrinkite žiniatinklio tarnybos aprašą.';
$string['erroroptionalparamarray'] = 'Žiniatinklio tarnybos aprašo parametras, kurio pavadinimas {$a}, yra viena arba kelios struktūros. Jis negali būti nustatytas kaip VALUE_OPTIONAL. Patikrinkite žiniatinklio tarnybos aprašą.';
$string['execute'] = 'Vykdyti';
$string['executewarnign'] = 'ĮSPĖJIMAS! Jei paspausite vykdyti, duomenų bazė bus modifikuota ir automatiškai nebus galima sugrąžinti pakeitimų.';
$string['externalservice'] = 'Išorinė tarnyba';
$string['externalservicefunctions'] = 'Išorinės tarnybos funkcijos';
$string['externalservices'] = 'Išorinės tarnybos';
$string['externalserviceusers'] = 'Išorinės tarnybos vartotojai';
$string['failedtolog'] = 'Nepavyko prisijungti';
$string['filenameexist'] = 'Toks failo vardas jau yra: {$a}';
$string['forbiddenwsuser'] = 'Nepavyko sukurti atpažinimo ženklo nepatvirtinta, pašalintam, sulaikytam ar svečio vartotojui';
$string['function'] = 'Funkcija';
$string['functions'] = 'Funkcijos';
$string['generalstructure'] = 'Bendroji struktūra';
$string['information'] = 'Informacija';
$string['installexistingserviceshortnameerror'] = 'Interneto paslauga su trumpiniu "{$a}" jau yra. Negalima įrašyti ar atnaujinti kitos interneto paslaugos su šiuo trumpiniu.';
$string['installserviceshortnameerror'] = 'Kodavimo klaida : paslaugos trumpinyje "{$a}" turi būti tik skaičiai, raidės ir _-..';
$string['invalidextparam'] = 'Neteisingas išorinis API parametras: {$a}';
$string['invalidextresponse'] = 'Neteisingas išorinis API atsakas: {$a}';
$string['invalidiptoken'] = 'Netinkamas atpažinimo ženklas – jūsų IP nepalaikomas';
$string['invalidtimedtoken'] = 'Netinkamas atpažinimo ženklas – baigėsi jo galiojimo laikas';
$string['invalidtoken'] = 'Netinkamas atpažinimo ženklas – nerastas';
$string['iprestriction'] = 'IP apribojimas';
$string['iprestriction_help'] = 'Vartotojas turės iškviesti žiniatinklio tarnybą naudodamas išvardytus IP.';
$string['key'] = 'Raktas';
$string['keyshelp'] = 'Raktai naudojami „Moodle“ paskyrai pasiekti iš išorinių taikomųjų programų.';
$string['manageprotocols'] = 'Tvarkyti protokolus';
$string['managetokens'] = 'Tvarkyti atpažinimo ženklus';
$string['missingcaps'] = 'Trūkstamos galimybės';
$string['missingcaps_help'] = 'Būtinų tarnybos galimybių, kurių neturi pasirinktas vartotojas, sąrašas. Norint naudoti šią tarnybą, į vartotojo vaidmenį reikia įtraukti trūkstamas galimybes.';
$string['missingpassword'] = 'Nėra slaptažodžio';
$string['missingrequiredcapability'] = 'Sugebėjimas {$a} yra reikalingas.';
$string['missingusername'] = 'Nėra vartotojo vardo';
$string['missingversionfile'] = 'Kodavimo klaida: version.php failas nerastas komponentui {$a}';
$string['nofunctions'] = 'Šioje tarnyboje nėra funkcijų.';
$string['norequiredcapability'] = 'Nėra būtinos galimybės';
$string['notoken'] = 'Atpažinimo ženklų sąrašas tuščias.';
$string['onesystemcontrolling'] = 'Viena „Moodle“ valdanti sistema su atpažinimo ženklu';
$string['onesystemcontrollingdescription'] = 'Toliau pateikti veiksmai padės nustatyti sistemos „Moodle“ žiniatinklio tarnybą „Moodle“ valdyti. Šie veiksmai taip pat padės nustatyti rekomenduojamą atpažinimo ženklų (saugos raktų) autentifikavimo metodą.';
$string['operation'] = 'Operacija';
$string['optional'] = 'Pasirinktinai';
$string['passwordisexpired'] = 'Slaptažodžio galiojimo laikas pasibaigęs.';
$string['phpparam'] = 'XML-RPC (PHP struktūra)';
$string['phpresponse'] = 'XML-RPC (PHP struktūra)';
$string['postrestparam'] = 'REST PHP kodas (POST užklausa)';
$string['potusers'] = 'Neįgaliotieji vartotojai';
$string['potusersmatching'] = 'Atitinkantys neįgaliotieji vartotojai';
$string['print'] = 'Spausdinti viską';
$string['protocol'] = 'Protokolas';
$string['removefunction'] = 'Šalinti';
$string['removefunctionconfirm'] = 'Ar tikrai norite iš tarnybos {$a->service} šalinti funkciją {$a->function}?';
$string['requireauthentication'] = 'Šiam metodui būtinas autentifikavimas su xxx teise.';
$string['required'] = 'Būtina';
$string['requiredcapability'] = 'Būtina galimybė';
$string['requiredcapability_help'] = 'Jei nustatyta, tarnybą gali pasiekti tik vartotojai, turintys būtiną galimybę.';
$string['requiredcaps'] = 'Būtinos galimybės';
$string['resettokenconfirm'] = 'Ar tikrai norite iš naujo nustatyti šį <strong>{$a->user}</strong> žiniatinklio tarnybos raktą, skirtą <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Ar tikrai norite iš naujo nustatyti šį raktą? Visi įrašyti saitai, kuriuose yra senas raktas, nebeveiks.';
$string['response'] = 'Atsakas';
$string['restoredaccountresetpassword'] = 'Atkurtoms paskyrom reikia iš naujo nustatyti slaptažodį prieš gaunant atpažinimo ženklą.';
$string['restparam'] = 'REST (POST parametrai)';
$string['restrictedusers'] = 'Tik įgaliotieji vartotojai';
$string['restrictedusers_help'] = 'Šis parametras nustato, ar visi vartotojai, turintys teisę kurti žiniatinklio tarnybų atpažinimo ženklus, gali generuoti šios tarnybos atpažinimo ženklą savo saugos raktų puslapyje, ar tai daryti gali tik įgaliotieji vartotojai.';
$string['securitykey'] = 'Saugos raktas (atpažinimo ženklas)';
$string['securitykeys'] = 'Saugos raktai';
$string['selectauthorisedusers'] = 'Pasirinkti įgaliotuosius vartotojus';
$string['selectedcapability'] = 'Pasirinkta';
$string['selectedcapabilitydoesntexit'] = 'Dabar nustatytos būtinos galimybės ({$a}) nebėra. Pakeiskite ją ir įrašykite keitimus.';
$string['selectservice'] = 'Pasirinkite tarnybą';
$string['selectspecificuser'] = 'Pasirinkite konkretų vartotoją';
$string['selectspecificuserdescription'] = 'Įtraukti žiniatinklio tarnybų vartotoją kaip įgaliotąjį vartotoją.';
$string['service'] = 'Tarnyba';
$string['servicehelpexplanation'] = 'Tarnyba yra funkcijų rinkinys. Tarnybą gali pasiekti visi vartotojai arba tik nurodyti vartotojai.';
$string['servicename'] = 'Tarnybos pavadinimas';
$string['servicenotavailable'] = 'Voratinklio paslauga negalima (jos nėra arba ji išjungta)';
$string['servicesbuiltin'] = 'Įtaisytosios tarnybos';
$string['servicescustom'] = 'Pasirinktinės tarnybos';
$string['serviceusers'] = 'Įgaliotieji vartotojai';
$string['serviceusersettings'] = 'Vartotojų parametrai';
$string['serviceusersmatching'] = 'Atitinkantys įgaliotieji vartotojai';
$string['serviceuserssettings'] = 'Keisti įgaliotųjų vartotojų parametrus';
$string['simpleauthlog'] = 'Paprasto autentifikavimo prisijungimas';
$string['step'] = 'Veiksmas';
$string['supplyinfo'] = 'Daugiau informacijos';
$string['testauserwithtestclientdescription'] = 'Naudodami žiniatinklio tarnybos tikrinimo klientą, modeliuokite išorinę prieigą prie tarnybos. Prieš pradėdami modeliuoti prisijunkite kaip vartotojas, turintis galimybę moodle/webservice:createtoken, ir naudodami Mano profilio parametrus gaukite saugos raktą (atpažinimo ženklą). Šį atpažinimo ženklą naudosite tikrinimo kliente. Be to, tikrinimo kliente pasirinkite ir įjunkite protokolą su atpažinimo ženklų autentifikavimu. <strong>ĮSPĖJIMAS: tikrinamos funkcijos BUS VYKDOMOS naudojant šį vartotoją, todėl būkite atidūs pasirinkdami, ką tikrinsite!</strong>';
$string['testclient'] = 'Žiniatinklio paslaugų tikrinimo klientas';
$string['testclientdescription'] = '* Žiniatinklio tarnybų tikrinimo klientas <strong>TIKRAI</strong> <strong>vykdo</strong> funkcijas. Netikrinkite funkcijų, kurių neišmanote. <br/>* Į tikrinimo klientą dar neįdiegtos visos žiniatinklio tarnybos funkcijos. <br/>* Norėdami patikrinti, ar vartotojas negali pasiekti kai kurių funkcijų, galite patikrinti kelias funkcijas, kurios jums neleidžiamos.<br/>* Norėdami aiškiau matyti klaidų pranešimus, nustatykite derinimą kaip <strong>{$a->mode}</strong>, {$a->atag}<br/>* Pasiekti {$a->amfatag}.';
$string['testwithtestclient'] = 'Tikrinti tarnybą';
$string['testwithtestclientdescription'] = 'Naudodami žiniatinklio tarnybos tikrinimo klientą, modeliuokite išorinę prieigą prie tarnybos.. Naudokite įjungtą protokolą su atpažinimo ženklų autentifikavimu. <strong>ĮSPĖJIMAS: tikrinamos funkcijos BUS VYKDOMOS naudojant šį vartotoją, todėl būkite atidūs pasirinkdami, ką tikrinsite!!</strong>';
$string['token'] = 'Atpažinimo ženklas';
$string['tokenauthlog'] = 'Atpažinimo ženklų autentifikavimas';
$string['tokencreatedbyadmin'] = 'Nustatyti iš naujo gali tik administratorius (*)';
$string['tokencreator'] = 'Kūrėjas';
$string['unknownoptionkey'] = 'Nežinomas nustatymo raktas ({$a})';
$string['updateusersettings'] = 'Atnaujinti';
$string['userasclients'] = 'Vartotojai kaip klientai su atpažinimo ženklais';
$string['userasclientsdescription'] = 'Toliau pateikti veiksmai padės nustatyti vartotojų kaip klientų „Moodle“ žiniatinklio tarnybas. Šie veiksmai taip pat padės nustatyti rekomenduojamą atpažinimo ženklų (saugos raktų) autentifikavimo metodą. Šiuo atveju vartotojas sukurs savo atpažinimo ženklą saugos raktų puslapyje naudodamas Mano profilio parametrus.';
$string['usermissingcaps'] = 'Trūkstamos galimybės: {$a}';
$string['usernameorid'] = 'Vartotojo vardas/ Vartotojo id';
$string['usernameorid_help'] = 'Įveskite vartotojo vardą arba vartotojo id.';
$string['usernameoridnousererror'] = 'Nerastas nei vienas vartotojas su vartotojo vardu/ vartotojo id.';
$string['usernameoridoccurenceerror'] = 'Daugiau nei vienas vartotojas buvo rastas su tokiu vartotojo vardu. Prašau įvesti vartotojo id.';
$string['usernotallowed'] = 'Šioje tarnyboje šis vartotojas neleidžiamas. Pirmiausia {$a} leidžiamų vartotojų administravimo puslapyje turite nustatyti vartotoją kaip leidžiamą.';
$string['usersettingssaved'] = 'Vartotojų parametrai įrašyti';
$string['validuntil'] = 'Galioja iki';
$string['validuntil_help'] = 'Jei nustatyta, po šios datos šiam vartotojui tarnyba bus išjungta.';
$string['webservice'] = 'Žiniatinklio tarnyba';
$string['webservices'] = 'Žiniatinklio tarnybos';
$string['webservicesoverview'] = 'Apžvalga';
$string['webservicetokens'] = 'Žiniatinklio tarnybų atpažinimo ženklai';
$string['wrongusernamepassword'] = 'Neteisingas vartotojo vardas arba slaptažodis';
$string['wsaccessuserdeleted'] = 'Atmestas voratinklio paslaugos priėjimas pašalintam vartotojui : {$a}';
$string['wsaccessuserexpired'] = 'Atmestas voratinklio paslaugos priėjimas su pasibaigusio galiojimo slaptažodžiu vartotojui: {$a}';
$string['wsaccessusernologin'] = 'Atmestas voratinklio paslaugos priėjimas dar neužsiregistravusiam vartotojui: {$a}';
$string['wsaccessusersuspended'] = 'Atmestas voratinklio paslaugos priėjimas sustabdytam vartotojui: {$a}';
$string['wsaccessuserunconfirmed'] = 'Atmestas voratinklio paslaugos priėjimas nepatvirtintam vartotojui: {$a}';
$string['wsclientdoc'] = '„Moodle“ žiniatinklio tarnybų kliento dokumentacija';
$string['wsdocapi'] = 'API dokumentacija';
$string['wsdocumentation'] = 'Žiniatinklio tarnybos dokumentacija';
$string['wsdocumentationdisable'] = 'Žiniatinklio tarnybos dokumentacija išjungta.';
$string['wsdocumentationintro'] = 'Jei norite skurti klientą, patariame perskaityti {$a->doclink}';
$string['wsdocumentationlogin'] = 'arba įveskite savo žiniatinklio tarnybos paslaugos vartotojo vardą ir slaptažodį';
$string['wspassword'] = 'Žiniatinklio tarnybos slaptažodis';
$string['wsusername'] = 'Žiniatinklio tarnybos vartotojo vardas';
