<form method="get" action="index.php">
    <fieldset>

    <legend>Connexion</legend>

    <?php
    if ($_GET['action'] === 'connect') {
        echo('
        <input type="hidden" name="controller" value="utilisateur1"/>
        <input type="hidden" name="action" value="connected"/>
        <input type="text" placeholder="Login"  name="loginUtilisateur" id="loginUtilisateur_id" required/>
        <input type="password" placeholder="Mot de passe" name="passUtilisateur" id="passUtilisateur_id" required/>
        <input type="submit" value="Se connecter"/> ');
    } else if ($_GET['action'] === 'connected') {
        if($u){
            echo('
        <p> '.htmlspecialchars($verif).' </p>
        <input type="hidden" name="controller" value="utilisateur1"/>
        <input type="hidden" name="action" value="connected"/>
        <input type="text" placeholder="Login"  name="loginUtilisateur" id="loginUtilisateur_id" value='.htmlspecialchars($_GET['loginUtilisateur']).' required/>
        <input type="password" placeholder="Mot de passe" name="passUtilisateur" id="passUtilisateur_id" required/>
        <input type="submit" value="Se connecter"/> ');
        }
        else{
            echo('
        <input type="hidden" name="controller" value="utilisateur1"/>
        <input type="hidden" name="action" value="connected"/>
        <input type="text" placeholder="Login"  name="loginUtilisateur" id="loginUtilisateur_id" required/>
        <input type="password" placeholder="Mot de passe" name="passUtilisateur" id="passUtilisateur_id" required/>
        <input type="submit" value="Se connecter"/> ');
        }

    }

    ?>
    </fieldset>
</form>

