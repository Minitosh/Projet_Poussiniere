<!--Redirection vers les pages choisies-->
<div class="navbar">
       <a href="index.php?page=consignes" class="navbar ongletbotOFF">Température Air</a>
       <a href="index.php?page=consignes_tempeau" class="navbar ongletbotON">Température Eau</a>
       <a href="index.php?page=consignes_nourriture" class="navbar ongletbotOFF">Nourriture</a>
</div>

<!--Choix de la température de l'eau -->
<div class="cadrefonction">
    <br><br><br><br><br><br><br>
    <form class="select_air" method="get" action="#">
            <p>
                <label for="le_nom">Choix de la température de l'eau</label><br />
                <!--Defini la possibilité de rentrer une valeur comprise entre 15 et 20-->
                <input type="number" min="15" max="20" placeholder="Température" name="temperature_eau"/>
                
                <input type="submit" value="Sélectionner">
                
                <center>
                    <img src="images/icons/warning.png" width="auto" height="120"/>
                </center>
            </p>
        </form>
</div> 
