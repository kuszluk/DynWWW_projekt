<?php

require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości i info dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
        (isset($_REQUEST['kwota_kredytu']) ? : die("Odmowa dostępu. Przejdź do <a href='../'>strony głównej</a> kalkulatora!"));


		$this->form->kwota = ($_REQUEST['kwota_kredytu'] ? $_REQUEST['kwota_kredytu'] : null);
		$this->form->oprocentowanie = ($_REQUEST['oprocentowanie_roczne'] ? $_REQUEST['oprocentowanie_roczne'] : null);
		$this->form->okres_splaty = ($_REQUEST['okres_splaty'] ? $_REQUEST['okres_splaty'] : null);

    }
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->oprocentowanie ) && isset ( $this->form->okres_splaty ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            $this->msgs->addError('Błędne wywołanie aplikacji');
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
        if ($this->form->okres_splaty == "") {
            $this->msgs->addError('Nie podano okresu spłaty');
        }
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota ) || ! is_numeric ( $this->form->oprocentowanie ) || ! is_numeric ( $this->form->okres_splaty )) {
				$this->msgs->addError('Wartości muszą być liczbami');
			}

		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			// Konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
            $this->form->okres_splaty = intval($this->form->okres_splaty);
				
			// Wykonanie operacji
            $this->form->oprocentowanie /=1200;

            $this->result->result = $this->form->kwota * $this->form->oprocentowanie * (pow(1 + $this->form->oprocentowanie, $this->form->okres_splaty) / (pow(1 + $this->form->oprocentowanie, $this->form->okres_splaty) - 1));
            $this->result->koszt = ($this->result->result*$this->form->okres_splaty) - $this->form->kwota;
            $this->result->wartosc = $this->result->koszt + $this->form->kwota;


            $this->form->oprocentowanie *=1200;


            // Formatowanie wyników
            $this->result->koszt = number_format($this->result->koszt, 2, ',', ' ');
            $this->result->result = number_format( $this->result->result, 2, ',', ' ');
            $this->result->wartosc = number_format( $this->result->wartosc, 2, ',', ' ');

		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();

		$smarty->assign('conf',$conf);
        $smarty->assign('app_url',$conf->app_url);
        $smarty->assign('root_path',$conf->app_root);

        $smarty->assign('page_title','Kalkulator kredytowy- Smarty!');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result->result);
        $smarty->assign('koszt',$this->result->koszt);
        $smarty->assign('wartosc',$this->result->wartosc);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
