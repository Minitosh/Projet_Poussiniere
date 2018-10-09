<!--Redirection vers les pages choisies-->
<div class="navbar">
       <a href="index.php?page=releves" class="navbar ongletbotOFF">Température</a>
       <a href="index.php?page=releves_historique" class="navbar ongletbotOFF">Historique</a>
       <a href="index.php?page=releves_niveau" class="navbar ongletbotON">Niveau Eau</a>
       <a href="index.php?page=releves_intrusion" class="navbar ongletbotOFF">Intrusions</a>
</div>

<div class="cadrefonction">
    <br><br><br><br><br><br>
    <?php
    //Récupération du niveau d'eau (1 ou 0) dans la BDD 
    $requete = $bdd->query('SELECT valeurs FROM releves_capteurs WHERE id_capteur = 3 ORDER BY heure_releve, date_releve DESC LIMIT 1');
                $data = $requete->fetch();
    //Changement de couleur/logo en fonction du niveau récupéré            
    if ($data['valeurs'] == 0)
    {
        echo '<div align="center"><font face="arial" size="10" color="red"> Niveau insuffisant !</font><br><br><br /> ';
        echo '<img src="images/icons/emptywater.png" /></div> ';
    }    
    else 
    {
        echo '<div align="center"><font face="arial" size="10" color="green"> Niveau bon </font><br><br><br /> ';
        echo '<img src="images/icons/fullwater.png" /></div> ';  
    }
    ?>
    
</div>
