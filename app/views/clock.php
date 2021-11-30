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
            <?php for($i=0;$i<4;$i++) { ?>
            <td> <?php  echo $fivehoursCase?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i=0;$i<4;$i++){ ?>
            <td> <?php  echo $hoursCase?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php  for($i=0;$i<11;$i++){ ?>
            <td> <?php  echo $fiveminutesCase ?> </td>
            <?php } ?>
        </tr>
        <tr>
            <?php  for ($i=0;$i<4;$i++){ ?>
            <td> <?php  echo $minutesCase?> </td>
            <?php } ?>
        </tr>
    </table>
</div>
</section>