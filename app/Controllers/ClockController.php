<?php
class ClockController {

    public function __construct() {

    }

    public function run() {
        $seconde=date('s');
        $hours=date('H');
        $minutes=date('i');
        echo ($hours );
        echo(" ");
        echo ( $minutes);
        echo(" ");
        echo ($seconde);

        if($seconde%2==0){
            $secondeCase='0';
        }
        else $secondeCase='1';

        $fivehoursCase=$hours/5;
        $fivehoursCase=floor($fivehoursCase);

        $hoursCase=$hours%5;

        $fiveminutesCase=$minutes/5;
        $fiveminutesCase=floor($fiveminutesCase);

        $minutesCase=$minutes%5;

        # Le contrôleur d'acceuil se termine en écrivant la vue accueil
        require_once(VIEWS_PATH.'clock.php');
    }

}
?>