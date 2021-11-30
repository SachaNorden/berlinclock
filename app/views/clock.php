<section id="contenu">
    <h2>Accueil</h2>
    <p>Bienvenue sur l'horloge de berlin</p>
    <p>DEKIMPE Thomas Norden Sacha .</p>
<div class="center">
    <table>
        <tr>
            <td><?php  echo $secondeCase?></td>
        </tr>
        <tr>
            <?php for($i=0;$i<$fivehoursCase;$i++) { ?>
            <td> <?php  echo 1?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i=0;$i<$hoursCase;$i++){ ?>
            <td> <?php  echo 1?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php  for($i=0;$i<$fiveminutesCase;$i++){ ?>
            <td> <?php  echo 1 ?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php  for ($i=0;$i<$minutesCase;$i++){ ?>
            <td> <?php  echo 1?> </td>
            <?php } ?>
        </tr>
    </table>
</div>
</section>