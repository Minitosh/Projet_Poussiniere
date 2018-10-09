<!--Redirection vers les pages choisies-->
<div class="navbar">
       <a href="index.php?page=consignes" class="navbar ongletbotON">Température Air</a>
       <a href="index.php?page=consignes_tempeau" class="navbar ongletbotOFF">Température Eau</a>
       <a href="index.php?page=consignes_nourriture" class="navbar ongletbotOFF">Nourriture</a>
</div>

<!--Choix de la température de l'air -->
<div class="cadrefonction">
    <br><br><br><br><br><br><br>
    <form class="select_air" method="get" action="#">
            <p>
                <label for="le_nom">Choix de la température de l'air</label><br />
                <select name="choix_temperature" id="choix_temp">
                    <option selected="selected" disabled>Choisir une semaine</option>
                    <option value="35">Semaine 1 - 35°C</option>
                    <option value="32">Semaine 2 - 32°C</option>
                    <option value="29">Semaine 3 - 29°C</option>
                    <option value="26">Semaine 4 - 26°C</option>
                    <option value="23">Semaine 5 - 23°C</option>
                    <option value="20">Semaine 6 - 20°C</option>
                    <option value="18">Semaine 6+ - 15 à 20°C</option>
                </select>
                <input type="submit" value="Valider"/>
            </p>
        </form>
</div>   
