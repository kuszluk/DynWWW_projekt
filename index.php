<?php
require_once dirname(__FILE__).'/config.php';

// Załaduj kontroler
require_once $conf->root_path.'/app/CalcCtrl.class.php';

// Utwórz obiekt i wyświetl widok
$ctrl = new CalcCtrl();
$ctrl->generateView();
