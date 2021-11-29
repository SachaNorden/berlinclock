<?php
class ClockController {

    public function __construct() {

    }

    public function run() {

        # Le contrôleur d'acceuil se termine en écrivant la vue accueil
        require_once(VIEWS_PATH.'clock.php');
    }

}
?>