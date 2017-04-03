<?php
// dodaj konfiuguracje
require_once dirname(__FILE__).'\..\config.php';

// załaduj Smarty
require_once _ROOT_PATH.'/libs/Smarty.class.php';


// 1. Pobranie parametrów
function getParams(&$kwota,&$oprocentowanie,&$okres_splaty){
    $kwota = isset($_REQUEST ['kwota_kredytu']) ? $_REQUEST ['kwota_kredytu'] : null;
    $oprocentowanie = isset($_REQUEST ['oprocentowanie_roczne']) ? $_REQUEST ['oprocentowanie_roczne'] : null;
    $okres_splaty = isset($_REQUEST ['okres_splaty']) ? $_REQUEST ['okres_splaty'] : null;
}


// 2. Walidacja parametrów
function validate(&$kwota,&$oprocentowanie,&$okres_splaty,&$messages){

    // sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($kwota) && isset($oprocentowanie) && isset($okres_splaty))) {
        $messages [] = 'Nie podano parametru';
        return false;
    }

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ( $kwota == "") {
        $messages [] = 'Nie podano kwoty';
    }

    if ( $oprocentowanie == "") {
        $messages [] = 'Nie podano oprocentowania';
    }

    if ( $okres_splaty == "") {
        $messages [] = 'Nie podano okresu splaty';
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count ( $messages ) != 0) return false;

    // sprawdzenie, czy wartosci są liczbami całkowitymi
    if (!is_numeric( $kwota ) ||
        !is_numeric( $oprocentowanie ) ||
        !is_numeric( $okres_splaty ) ) {
        $messages [] = 'Wartości muszą być liczbami całkowitymi!';
    }

    if (count ( $messages ) != 0) return false;
    else return true;
}


// 3. Liczenie
function process(&$kwota,&$oprocentowanie,&$okres_splaty,&$result,&$koszt){

    //Konwersja parametrów na int
    $kwota = intval($kwota);
    $oprocentowanie = intval($oprocentowanie);
    $okres_splaty = intval($okres_splaty);

    //Wykonanie operacji
    $result = ($kwota/$okres_splaty) + ($oprocentowanie/100) * $okres_splaty;
    $koszt = ($result*$okres_splaty) - $kwota;
}


//Definicja zmiennych kontrolera
$kwota = null;
$oprocentowanie = null;
$okres_splaty = null;
$result = null;
$koszt = null;
$messages = array();

//Pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$oprocentowanie,$okres_splaty);
if ( validate($kwota,$oprocentowanie,$okres_splaty,$messages) ) {
    process($kwota,$oprocentowanie,$okres_splaty,$result,$koszt);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy- Smarty!');
$smarty->assign('page_description','opis');
$smarty->assign('page_header','header');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('result',$result);
$smarty->assign('koszt',$koszt);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');