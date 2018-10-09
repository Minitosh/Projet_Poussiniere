<!--Redirection vers les pages choisies-->
<div class="navbar">
    <a href="index.php?page=releves" class="navbar ongletbotOFF">Température</a>
    <a href="index.php?page=releves_historique" class="navbar ongletbotOFF">Historique</a>
    <a href="index.php?page=releves_niveau" class="navbar ongletbotOFF">Niveau Eau</a>
    <a href="index.php?page=releves_intrusion" class="navbar ongletbotON">Intrusions</a>
</div>

<div class="cadrefonction">


    <?php
    //Récupération des intrusions via la BDD
    $resultats = $bdd->query('SELECT * FROM releves_alarmes ORDER BY date_releve DESC, heure_releve DESC LIMIT 50');
    $resultats->setFetchMode(PDO::FETCH_OBJ);

    //count
    ?>

<!--Affichage des données dans un tableau-->
    <br><br>
    <table class="table-releves">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date</th>
                <th>Heure</th>
            </tr>
        </thead>
        <tbody id="post_content">
            <?php
            while ($releve = $resultats->fetch()) {
                ?>

                <tr>
                    <td class="col-1"><?php echo $releve->nom; ?></td>
                    <td class="col-2"><?php echo $releve->date_releve; ?></td>
                    <td class="col-3"><?php echo $releve->heure_releve; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
