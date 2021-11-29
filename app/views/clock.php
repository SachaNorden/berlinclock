<section id="contenu">
    <h2>Accueil</h2>
    <p>Bienvenue sur l'horloge de berlin</p>
    <p>DEKIMPE Thomas.</p>

    <table>
        <tr>
            <td><?php  echo 'Y'?></td>
        </tr>
        <tr>
            <?php  foreach ($fivehours as $i => $value) ?>
            <td> <?php  echo 'R'?> </td>
        </tr>
        <tr>
            <?php  foreach ($hours as $i => $value) ?>
            <td> <?php  echo 'R'?> </td>
        </tr>
        <tr>
            <?php  foreach ($fiveminutes as $i => $value) ?>
            <td> <?php  echo 'R'?> </td>
        </tr>
        <tr>
            <?php  foreach ($minutes as $i => $value) ?>
            <td> <?php  echo 'R'?> </td>
        </tr>
    </table>
</section>