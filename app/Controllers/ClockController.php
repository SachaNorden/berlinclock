<?php
class ClockController {

    public function __construct() {

    }

    public function run() {
        $fivehours=4;
        $hours=4;
        $fiveminutes=11;
        $minutes=4;
        # Le contrôleur d'acceuil se termine en écrivant la vue accueil
        require_once(VIEWS_PATH.'clock.php');
    }

}
?>