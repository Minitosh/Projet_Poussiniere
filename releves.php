<!--Redirection vers les pages choisies-->
<div class="navbar">
       <a href="index.php?page=releves" class="navbar ongletbotON">Température</a>
       <a href="index.php?page=releves_historique" class="navbar ongletbotOFF">Historique</a>
       <a href="index.php?page=releves_niveau" class="navbar ongletbotOFF">Niveau Eau</a>
       <a href="index.php?page=releves_intrusion" class="navbar ongletbotOFF">Intrusions</a>
</div>

<div class="cadrefonction">
    <br><br><br><br><br><br>
    <ul class="ul-releve">
        <li>
            Température actuelle de l'air :
            <span class="val">
                <?php
                //Récupération de la température de l'air la plus récente dans le BDD
                $requete = $bdd->query('SELECT valeurs FROM releves_capteurs WHERE id_capteur = 2 ORDER BY heure_releve DESC, date_releve LIMIT 1');
                $data = $requete->fetch();
                //Division de la valeur par 10
                echo $data['valeurs'] / 10;
                $requete->closeCursor();
                ?>°C
            </span>
        </li>
        <li>
            Température actuelle de l'eau :
            <span class="val">
                <?php
                //Récupération de la température de l'eau la plus récente dans le BDD
                $requete = $bdd->query('SELECT valeurs FROM releves_capteurs WHERE id_capteur = 1 ORDER BY heure_releve DESC, date_releve LIMIT 1');
                $data = $requete->fetch();
                //Division de la valeur par 10
                echo $data['valeurs'] / 10;
                $requete->closeCursor();
                ?>°C
            </span>

        </li>
    </ul>
</div>     
