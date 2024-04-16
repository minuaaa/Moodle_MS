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
 * Strings for component 'enrol_authorize', language 'lt_uni', version '4.2'.
 *
 * @package     enrol_authorize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Kokio tipo kredito kortelės bus priimamos?';
$string['adminaccepts'] = 'Pasirinkti leidžiamus metodus ir jų tipus';
$string['adminauthorizeccapture'] = 'Užsakymo peržiūra ir planavimo-fiksavimo parametrai';
$string['adminauthorizeemail'] = 'Siuntimo el. paštu parametrai';
$string['adminauthorizesettings'] = 'Authorize.Net prekybinės sąskaitos parametrai';
$string['adminauthorizewide'] = 'Bendrieji parametrai';
$string['adminconfighttps'] = 'Įsitikinkite, kad jūsų "<a href="{$a->url}">prisijungimo https įjungtas</a>", kad galėtumėte naudoti šį priedą<br />Administravime >> Kintamieji >> Sauga >> HTTP sauga.';
$string['adminconfighttpsgo'] = 'Eikite į <a href="{$a->url}">saugos puslapį</a>, kad sukonfigūruotumėte šį priedą.';
$string['admincronsetup'] = 'cron.php priežiūros scenarijus nebuvo vykdomas bent 24 val.<br />„Cron“ turi būti įjungta, jei norite naudoti planavimo-fiksavimo funkciją.<br /><b>Įjunkite</b> Authorize.Net“ priedą ir tinkamai <b>nustatykite „Cron“</b> arba vėl<b>panaikinkite an_review žymėjimą</b>.<br />Jei išjungėte planavimą-fiksavimą ir operacijų neperžiūrėsite per 30 dienų, jos bus atšauktos.<br />Patikrinkite <b>an_review</b> ir įveskite <b>0 į lauką an_capture_day</b>, <br />jei norite <b>rankiniu būdu</b> priimti / atmesti mokėjimus per 30 dienų.';
$string['adminemailexpiredsort'] = 'Kai dėstytojams el. paštu išsiunčiami keli laukiantys užsakymai, kurių laikas baigiasi, kuris iš jų yra svarbus?';
$string['adminemailexpiredsortcount'] = 'Užsakymų skaičius';
$string['adminemailexpiredsortsum'] = 'Visa suma';
$string['adminemailexpsetting'] = '(0=išjungti el. laiškų siuntimą, numatytasis=2, maks.=5)<br />(Rankiniu  būdu užfiksuokite el. pašto siuntimo parametrus: „Cron“=įjungta, an_review=patikrinta, an_capture_day=0, an_emailexpired=1–5)';
$string['adminhelpcapturetitle'] = 'Planuojamo fiksavimo diena';
$string['adminhelpreviewtitle'] = 'Užsakymo peržiūra';
$string['adminneworder'] = 'Gerb. administratoriau, gavote naują laukiantį užsakymą: užsakymo ID {$a->orderid}, operacijos ID: {$a->transid}, vartotojas: {$a->user}, kursai: {$a->course}, suma: {$a->amount} PLANUOJAMAS FIKSAVIMAS ĮJUNGTAS?: {$a->acstatus} Jei planuojamas fiksavimas aktyvus, kredito kortelė užfiksuojama {$a->captureon}, o tada vartotojas įregistruojamas į kursus. Antraip galiojimo laikas baigsis {$a->expireon}, ir nuo šios dienos nebus galima užfiksuoti. Taip pat galite iš karto priimti / atmesti mokėjimą, kad galėtumėte įregistruoti klausytoją, spustelėję šį saitą: {$a->url}';
$string['adminnewordersubject'] = '{$a->course}, naujas laukiantis užsakymas: {$a->orderid}';
$string['adminpendingorders'] = 'Išjungėte planuojamo fiksavimo funkciją.<br />Visos {$a->count} operacijos (-ų), kurių būsena „Įgaliota / laukiama fiksavimo“ bus atšauktos, jei jų nepažymėjote.<br />Jei norite priimti / atmesti mokėjimus, eikite į puslapį <a href=rquote{$a->url}\'>Mokėjimų valdymas</a>.';
$string['adminteachermanagepay'] = 'Dėstytojai gali valdyti kurso mokėjimus.';
$string['allpendingorders'] = 'Visi laukiantys užsakymai';
$string['amount'] = 'Suma';
$string['anauthcode'] = 'Gauti įgaliojimo kodą';
$string['anauthcodedesc'] = 'Jei vartotojo kredito kortelės negalima užfiksuoti tiesiogiai internetu, gaukite įgaliojimo kodą iš kliento banko telefonu.';
$string['anavs'] = 'Adreso tikrinimo sistema';
$string['anavsdesc'] = 'Patikrinkite, ar suaktyvinote adreso tikrinimo sistemą (ATS) savo authorize.Net prekybinėje sąskaitoje. Vartotojui pildant mokėjimo formą sistema paprašys užpildyti adreso laukus, pvz., gatvės pavadinimas, regionas, šalis ir pašto kodas.';
$string['ancaptureday'] = 'Fiksavimo diena';
$string['ancapturedaydesc'] = 'Užfiksuokite kredito kortelę automatiškai, jei dėstytojas arba administratorius neperžiūri užsakymo per nurodytą skaičių dienų. „CRON“ TURI BŪTI ĮJUNGTA.<br />(0 dienų reiškia, kad planuojamas fiksavimas išjungtas ir kad dėstytojas arba administratorius peržiūri užsakymą rankiniu būdu. Operacija bus atšaukta, jei išjungsite planuojamą fiksavimą arba neperžiūrėsite užsakymo per 30 dienų.)';
$string['anemailexpired'] = 'Pranešimas apie galiojimo pabaigą';
$string['anemailexpireddesc'] = 'Tai naudinga pasirinkus funkciją Rankinis fiksavimas. Administratoriams pranešamas nurodytas dienų skaičius, po kurio baigsis laukiančių užsakymų galiojimo laikas.';
$string['anemailexpiredteacher'] = 'Pranešimas apie galiojimo pabaigą – dėstytojas';
$string['anemailexpiredteacherdesc'] = 'Jei įjungėte rankinį fiksavimą (žr. aukščiau) ir dėstytojai gali valdyti mokėjimus, taip pat jiems bus galima pranešti apie laukiančių užsakymų galiojimo pabaigą. Kiekvienam kursų dėstytojui bus išsiųstas el. laiškas apie baigusių galioti laukiančių užsakymų skaičių.';
$string['anlogin'] = 'Authorize.Net: prisijungimo vardas';
$string['anpassword'] = 'Authorize.Net: slaptažodis';
$string['anreferer'] = 'Nuoroda';
$string['anrefererdesc'] = 'Apibrėžkite URL nuorodą, jei ją nustatėte savo authorize.Net prekybinėje sąskaitoje. Bus išsiųsta į žiniatinklio užklausą įdėta eilutė Nuoroda: URL.';
$string['anreview'] = 'Peržiūrėti';
$string['anreviewdesc'] = 'Peržiūrėti užsakymą prieš apdorojant kredito kortelę.';
$string['antestmode'] = 'Bandymo režimas';
$string['antestmodedesc'] = 'Vykdyti operacijas tik bandymo režimu (pinigai nebus išimami)';
$string['antrankey'] = 'Authorize.Net: operacijos raktas';
$string['approvedreview'] = 'Patvirtinta peržiūra';
$string['authcaptured'] = 'Įgaliota / užfiksuota';
$string['authcode'] = 'Įgaliojimo kodas';
$string['authorize:config'] = 'Konfigūruoti Authorize.Net įregistravimo egzempliorius';
$string['authorize:manage'] = 'Valdyti įregistruotus vartotojus';
$string['authorize:managepayments'] = 'Valdyti mokėjimus';
$string['authorize:unenrol'] = 'Išregistruoti vartotojus iš kursų';
$string['authorize:unenrolself'] = 'Išsiregistruoti iš kursų';
$string['authorize:uploadcsv'] = 'Įkelti CSV failą';
$string['authorizedpendingcapture'] = 'Įgaliota / laukiama fiksavimo';
$string['authorizeerror'] = 'Authorize.Net klaida: {$a}';
$string['avsa'] = 'Adresas (gatvės) atitinka, pašto kodas neatitinka';
$string['avsb'] = 'Adreso informacija nepateikta';
$string['avse'] = 'Adreso tikrinimo sistemos klaida';
$string['avsg'] = 'Ne JAV kortelę išdavęs bankas';
$string['avsn'] = 'Neatitinka nei adresas (gatvės), nei pašto kodas';
$string['avsp'] = 'Adreso tikrinimo sistema nepriimtina';
$string['avsr'] = 'Bandykite dar kartą – sistema negalima arba baigėsi skirtasis laikas';
$string['avsresult'] = 'ATS rezultatas: {$a}';
$string['avss'] = 'Leidėjas nepalaiko paslaugos';
$string['avsu'] = 'Adreso informacija negalima';
$string['avsw'] = '9 skaitmenų pašto kodas atitinka, adresas (gatvės) neatitinka';
$string['avsx'] = 'Adresas (gatvės) ir 9 skaitmenų pašto kodas atitinka';
$string['avsy'] = 'Adresas (gatvės) ir 5 skaitmenų pašto kodas atitinka';
$string['avsz'] = '5 skaitmenų pašto kodas atitinka, adresas (gatvės) neatitinka';
$string['canbecredit'] = 'Gali būti grąžinta {$a->upto}';
$string['cancelled'] = 'Atšaukta';
$string['capture'] = 'Užfiksuoti';
$string['capturedpendingsettle'] = 'Užfiksuota / laukiama atsiskaitymo';
$string['capturedsettled'] = 'Užfiksuota / atsiskaityta';
$string['captureyes'] = 'Kredito kortelė bus užfiksuota, o klausytojas bus įregistruotas į kursus. Ar esate tikri?';
$string['cccity'] = 'Miestas';
$string['ccexpire'] = 'Galiojimo pabaigos data';
$string['ccexpired'] = 'Kredito kortelės galiojimo laikas baigėsi';
$string['ccinvalid'] = 'Klaidingas kortelės numeris';
$string['cclastfour'] = 'CC paskutiniai keturi';
$string['ccno'] = 'Kredito kortelės numeris';
$string['ccstate'] = 'Šalis';
$string['cctype'] = 'Kredito kortelės tipas';
$string['ccvv'] = 'Kortelės tikrinimas';
$string['ccvvhelp'] = 'Pažiūrėkite kitoje kortelės pusėje (paskutiniai 3 skaitmenys)';
$string['choosemethod'] = 'Jei žinote kursų įregistravimo raktą, įveskite jį žemiau.<br />Antraip turėsite sumokėti už šiuos kursus.';
$string['chooseone'] = 'Užpildykite vieną arba abu toliau pateiktus laukus. Slaptažodis nerodomas.';
$string['cost'] = 'Kaina';
$string['costdefaultdesc'] = '<strong>Kursų parametruose įveskite -1</strong>, kad naudotumėte šią numatytąją kainą kursų kainos laukui.';
$string['currency'] = 'Valiuta';
$string['cutofftime'] = 'Užbaigimo laikas';
$string['cutofftimedesc'] = 'Operacijos užbaigimo laikas. Kada surenkama paskutinė atsiskaitymo operacija?';
$string['dataentered'] = 'Įvesti duomenys';
$string['delete'] = 'Naikinti';
$string['description'] = 'Aprašas';
$string['echeckabacode'] = 'Banko ABA numeris';
$string['echeckaccnum'] = 'Banko sąskaitos numeris';
$string['echeckacctype'] = 'Banko sąskaitos tipas';
$string['echeckbankname'] = 'Banko pavadinimas';
$string['echeckbusinesschecking'] = 'Įmonės tikrinimas';
$string['echeckchecking'] = 'Tikrinimas';
$string['echeckfirslasttname'] = 'Banko sąskaitos savininkas';
$string['echecksavings'] = 'Santaupos';
$string['enrolenddate'] = 'Galutinė data';
$string['enrolenddaterror'] = 'Registracijos pabaigos data negali būti ankstesnė nei pradžios data';
$string['enrolname'] = 'Authorize.Net mokėjimų šliuzas';
$string['enrolperiod'] = 'Registracijos periodas';
$string['enrolstartdate'] = 'Pradžios data';
$string['expired'] = 'Šio rakto galiojimo laikas baigėsi';
$string['expiremonth'] = 'Galiojimo pabaigos mėnuo';
$string['expireyear'] = 'Galiojimo pabaigos metai';
$string['firstnameoncard'] = 'Vardas ant kortelės';
$string['haveauthcode'] = 'Jau turiu įgaliojimo kodą';
$string['howmuch'] = 'Kiek?';
$string['httpsrequired'] = 'Apgailestaudami jums pranešame, kad jūsų užklausos šiuo metu įvykdyti negalima. Šios svetainės konfigūracijos negalima tinkamai nustatyti.<br /><br />Neįveskite savo kredito kortelės numerio, jei nematote geltonos spynos naršyklės apačioje. Jei simbolis rodomas, reiškia, kad puslapyje šifruojami visi duomenys, siunčiami iš kliento į serverį ir atgal. Taigi informacija vykdant dviejų kompiuterių operaciją yra apsaugota, taigi jūsų kedito kortelės numeris negali būti užfiksuotas internetu.';
$string['invalidaba'] = 'Klaidingas ABA numeris';
$string['invalidaccnum'] = 'Klaidingas sąskaitos numeris';
$string['invalidacctype'] = 'Klaidingas sąskaitos tipas';
$string['isbusinesschecking'] = 'Ar įmonė tikrinama?';
$string['lastnameoncard'] = 'Pavardė kortelėje';
$string['logindesc'] = 'Ši parinktis turi būti ĮJUNGTA. <br /><br />Įsitikinkite, kad <a href="{$a->url}">ĮJUNGĖTE prisijungimo https</a> Administravime >> Kintamieji >> Sauga.<br /><br />Įjungus šią parinktį „Moodle“ naudos saugų https ryšį tik prisijungimo ir mokėjimo puslapiuose.';
$string['logininfo'] = 'Konfigūruojant Authorize.Net sąskaitą reikalingas prisijungimo vardas, be to, turite įvesti <strong>arba</strong> operacijos raktą, <strong>arba</strong> slaptažodį tinkamame lauke. Saugumo sumetimais rekomenduojame įvesti operacijos raktą.';
$string['methodcc'] = 'Kredito kortelė';
$string['methodccdesc'] = 'Pasirinkti kredito kortelę ir toliau pateiktus priimtinus tipus';
$string['methodecheck'] = 'El. čekis (ACH)';
$string['methodecheckdesc'] = 'Pasirinkti el. čekį ir toliau pateiktus priimtinus tipus';
$string['missingaba'] = 'Trūksta ABA numerio';
$string['missingaddress'] = 'Trūksta adreso';
$string['missingbankname'] = 'Trūksta banko pavadinimo';
$string['missingcc'] = 'Trūksta kortelės numerio';
$string['missingccauthcode'] = 'Trūksta įgaliojimo kodo';
$string['missingccexpiremonth'] = 'Trūksta galiojimo pabaigos mėnesio';
$string['missingccexpireyear'] = 'Trūksta galiojimo pabaigos metų';
$string['missingcctype'] = 'Trūksta kortelės tipo';
$string['missingcvv'] = 'Trūksta tvirtinimo numerio';
$string['missingzip'] = 'Trūksta pašto kodo';
$string['mypaymentsonly'] = 'Rodyti tik mano mokėjimus';
$string['nameoncard'] = 'Vardas ir pavardė ant kortelės';
$string['new'] = 'Naujas';
$string['nocost'] = 'Nėra kainos, susietos su registracija į šiuos kursus per Authorize.Net!';
$string['noreturns'] = 'Nėra grąžinimų!';
$string['notsettled'] = 'Neatsiskaityta';
$string['orderdetails'] = 'Išsami užsakymo informacija';
$string['orderid'] = 'Užsakymo ID';
$string['paymentmanagement'] = 'Mokėjimo valdymas';
$string['paymentmethod'] = 'Mokėjimo metodas';
$string['paymentpending'] = 'Laukiama jūsų mokėjimo už šiuos kursus su šiuo užsakymo numeriu {$a->orderid}. Žr. <a href=\'{$a->url}\'>Išsami užsakymo informacija</a>.';
$string['pendingecheckemail'] = 'Gerb., vadove, dabar yra {$a->count} laukiančių el. čekių ir turite įkelti CSV failą, kad vartotojas būtų įregistruotas. Spustelėkite saitą ir skaitykite pagalbos failą puslapyje: {$a->}';
$string['pendingechecksubject'] = '{$a->course}: laukiantys el. čekiai ({$a->count})';
$string['pendingordersemail'] = 'Gerb. administratoriau, kurso {$a->course} {$a->pending} operacijų galiojimas baigėsi, jei ne nepriėmėte mokėjimo per {$a->days} dienas (-ų). Tai yra įspėjimo pranešimas, nes neįjungėte planuojamo fiksavimo. Vadinasi turite priimti arba atmesti mokėjimus rankiniu būdu. Jei norite priimti / atmesti mokėjimus, eikite į {$a->url}. Jei norite įjungti planuojamą fiksavimą ir nebegauti jokių įspėjamųjų el. laiškų, eikite į {$a->enrolurl}';
$string['pendingordersemailteacher'] = 'Gerb. dėstytojau, kursų {$a->course} {$a->pending} operacijos, kurių kaina {$a->currency} {$a->sumcost} baigs galioti, jei nepriimsite mokėjimo per {$a->days} dienas (-ų). Turite priimti arba atmesti mokėjimus rankiniu būdu, nes administratorius neįjungė planuojamo fiksavimo. {$a->url}';
$string['pendingorderssubject'] = 'ĮSPĖJIMAS: {$a->course}, {$a->pending} užsakymo (-ų) galiojimas baigsis po {$a->days} dienos (-ų).';
$string['reason11'] = 'Pateikta dviguba operacija.';
$string['reason13'] = 'Prisijungimo prie prekybinės sąskaitos ID klaidingas arba sąskaita neaktyvi.';
$string['reason16'] = 'Operacija nerasta.';
$string['reason17'] = 'Prekybinė sąskaita nepriima šio tipo kredito kortelės.';
$string['reason245'] = 'Šio tipo el. čekis neleidžiamas, kai naudojamas mokėjimo šliuzo nuomojama mokėjimo forma.';
$string['reason246'] = 'Šio tipo el. čekis neleidžiamas.';
$string['reason27'] = 'Dėl operacijos kilo ATS neatitikimas. Pateiktas adresas neatitinka kortelės turėtojo sąskaitų siuntimo adreso.';
$string['reason28'] = 'Prekybinė sąskaita nepriima šio tipo kredito kortelės.';
$string['reason30'] = 'Klaidinga konfigūracija su procesoriumi. Susisiekite su prekybinės sąskaitos paslaugos teikėju.';
$string['reason39'] = 'Pateiktas valiutos kodas yra klaidingas, nepalaikomas, jo neleidžia ši prekybinė sąskaita arba jis neturi valiutos kurso.';
$string['reason43'] = 'Prekybinė sąskaita neteisingai nustatyta procesoriuje. Susisiekite su prekybinės sąskaitos paslaugos tiekėju.';
$string['reason44'] = 'Ši operacija atmesta. Kortelės kodo filtro klaida!';
$string['reason45'] = 'Ši operacija atmesta. Kortelės kodo / ATS filtro klaida!';
$string['reason47'] = 'Reikalaujama atsiskaitymo suma negali būti didesnė nei pradinė įgaliotoji suma.';
$string['reason5'] = 'Reikia galiojančios sumos.';
$string['reason50'] = 'Ši operacija laukia atsiskaitymo, jos grąžinti negalima.';
$string['reason51'] = 'Viso su šia operacija susijusio kredito suma yra didesnė nei pradinė operacijos suma.';
$string['reason54'] = 'Nurodyta operacija neatitinka kredito išdavimo kriterijų.';
$string['reason55'] = 'Kredito, susijusio su nurodyta operacija, suma viršys pradinę debeto sumą.';
$string['reason56'] = 'Ši prekybinė sąskaita priima tik el. čekių (ACH) operacijas. Kredito kortelių operacijos nepriimamos.';
$string['refund'] = 'Grąžinti';
$string['refunded'] = 'Grąžinta';
$string['returns'] = 'Grąžinimai';
$string['reviewfailed'] = 'Peržiūra nepavyko';
$string['reviewnotify'] = 'Jūsų mokėjimas bus peržiūrėtas. Iš dėstytojo laukiama el. laiško, kuris turėtų ateiti per kelias dienas.';
$string['sendpaymentbutton'] = 'Siųsti mokėjimą';
$string['settled'] = 'Atsiskaityta';
$string['settlementdate'] = 'Atsiskaitymo data';
$string['shopper'] = 'Pirkėjas';
$string['status'] = 'Leisti authorize.Net registraciją';
$string['subvoidyes'] = 'Grąžinimo operaciją ({$a->transid}) numatyta atšaukti, dėl to į jūsų sąskaita bus papildomai įdėta {$a->amount}. Ar tikrai to norite?';
$string['tested'] = 'Patikrinta';
$string['testmode'] = '[TESTAVIMO REŽIMAS]';
$string['testwarning'] = 'Panašu, kad fiksavimas / anuliavimas / grąžinimas atliekamas bandymo režimu, tačiau joks įrašas nebuvo atnaujintas duomenų bazėje arba įtrauktas į ją.';
$string['transid'] = 'Operacijos ID';
$string['underreview'] = 'Peržiūrima';
$string['unenrolselfconfirm'] = 'Ar tikrai norite išsiregistruoti iš kursų {$a}?';
$string['unenrolstudent'] = 'Išregistruoti klausytoją?';
$string['uploadcsv'] = 'Įkelti CSV failą';
$string['usingccmethod'] = 'Įregistruoti naudojant <a href="{$a->url}"><strong>kredito kortelę</strong></a>';
$string['usingecheckmethod'] = 'Įregistruoti naudojant <a href="{$a->url}"><strong>el. čekį</strong></a>';
$string['verifyaccount'] = 'Patikrinkite savo authorize.Net prekybinę sąskaitą';
$string['verifyaccountresult'] = '<b>Tikrinimo rezultatas:</b> {$a}';
$string['void'] = 'Anuliuoti';
$string['voidyes'] = 'Operacija bus atšaukta. Ar tikrai to norite?';
$string['welcometocoursesemail'] = 'Gerb. {$a->name}, dėkojame už jūsų mokėjimus. Įsiregistravote į šiuos kursus: {$a->courses} Galite peržiūrėti mokėjimų išsamią informaciją arba redaguoti savo profilį: {$a->paymenturl} {$a->profileurl}';
$string['youcantdo'] = 'Negalite atlikti šio veiksmo: {$a->action}';
$string['zipcode'] = 'Pašto kodas';
