<!--Redirection vers les pages choisies-->
<div class="navbar">
    <a href="index.php?page=releves" class="navbar ongletbotOFF">Température</a>
    <a href="index.php?page=releves_historique" class="navbar ongletbotON">Historique</a>
    <a href="index.php?page=releves_niveau" class="navbar ongletbotOFF">Niveau Eau</a>
    <a href="index.php?page=releves_intrusion" class="navbar ongletbotOFF">Intrusions</a>
</div>

<div class="cadrefonction">


    <?php
    //Récupération de l'historique des données des capteurs via la BDD
    $resultats = $bdd->query('SELECT * FROM releves_capteurs WHERE id_capteur = 1 OR id_capteur = 2 ORDER BY date_releve DESC, heure_releve DESC LIMIT 300');
    $resultats->setFetchMode(PDO::FETCH_OBJ);

    //count
    ?>

<!--Affichage des données dans un tableau-->
    <br><br>
    <table class="table-releves">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Valeur</th>
                <th>Date</th>
                <th>Heure</th>
            </tr>
        </thead>
        <tbody id="post_content">
            <!-- Changement de couleur des lignes en fonction de la température -->
            <?php
            while ($releve = $resultats->fetch()) 
            {
                $color = "black";
                if($releve->valeurs / 10 <= 20 && $releve->valeurs / 10 >= 15){
                    $color = "green";
                }
                    
            ?>

                <tr bgcolor="<?php $color;?>">
                    <td><?php echo $releve->nom; ?></td>
                    <td><?php echo $releve->valeurs / 10; ?> °C</td>
                    <td><?php echo $releve->date_releve; ?></td>
                    <td><?php echo $releve->heure_releve; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
