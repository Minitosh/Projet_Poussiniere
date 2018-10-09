<?php
//Connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateurprojet', 'utilisateurprojet', 'Nantes44');
?>


<?php
//Envoi de la température de l'air choisie à la BDD
if(!empty($_GET["choix_temperature"])){
	$requete = $bdd->prepare('INSERT consigne_temperature SET temperature = ?, dateheure = NOW()');
    $requete->execute(array($_GET["choix_temperature"]));
}
?>

<?php
//Envoi de la température de l'eau choisie à la BDD
if(!empty($_GET["temperature_eau"])){
	$requete = $bdd->prepare('INSERT consigne_eau SET temperature = ?, dateheure = NOW()');
    $requete->execute(array($_GET["temperature_eau"]));
}

?>

<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Poussinière</title>


    </head>
    <body>
        <br><br
        <div class="body">
<!--Affichage des differents onglets -->
            <a href="index.php?page=accueil" class="buttontop <?php if (isset($_GET['page']) && ($_GET['page'] == 'accueil')) echo 'onglettopON';?>">ACCUEIL</a>
            <a href="index.php?page=releves" class="buttontop <?php if (isset($_GET['page']) && ($_GET['page'] == 'releves')) echo 'onglettopON';?>
                                                              <?php if (isset($_GET['page']) && ($_GET['page'] == 'releves_historique')) echo 'onglettopON';?>
                                                              <?php if (isset($_GET['page']) && ($_GET['page'] == 'releves_niveau')) echo 'onglettopON';?>
                                                              <?php if (isset($_GET['page']) && ($_GET['page'] == 'releves_intrusion')) echo 'onglettopON';?>">RELEVES</a>
            <a href="index.php?page=consignes" class="buttontop <?php if (isset($_GET['page']) && ($_GET['page'] == 'consignes')) echo 'onglettopON';?>
                                                                <?php if (isset($_GET['page']) && ($_GET['page'] == 'consignes_tempeau')) echo 'onglettopON';?>
                                                                <?php if (isset($_GET['page']) && ($_GET['page'] == 'consignes_nourriture')) echo 'onglettopON';?>">CONSIGNES</a>
            <a href="index.php?page=autres" class="buttontop <?php if (isset($_GET['page']) && ($_GET['page'] == 'autres')) echo 'onglettopON';?>">AUTRES</a>
        </div>

<?php
//Redirection vers cette page
    if (isset($_GET['page'])) include($_GET['page'] . '.inc.php');
    else include('accueil.inc.php');
?>

<!--Affichage de l'horloge-->
    </body>
     <script type="text/javascript">
            function horloge() {
                var div = document.getElementById("horloge");
                var heure = new Date();
                var hours = (heure.getHours() < 10) ? "0" + heure.getHours() : heure.getHours();
                var minutes = (heure.getMinutes() < 10) ? "0" + heure.getMinutes() : heure.getMinutes();
                var seconds = (heure.getSeconds() < 10) ? "0" + heure.getSeconds() : heure.getSeconds();
                div.firstChild.nodeValue = hours + ":" + minutes + ":" + seconds;
                window.setTimeout("horloge()", 1000);
            }
            horloge();
        </script>
</html>
