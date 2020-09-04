<div class="content-form">
<h2> Connectez-vous ! </h2>

<form action="index.php?action=Connexion" method="POST" class="form-connexion">
 
    <label for="name">Identifiant : </label>
    <input type="text" name="login" id="login" required>
 

    <label for="mdp">mot de passe : </label>
    <input type="password" name="mdp" id="mdp" required>

    <?php
        if(isset($_SESSION["erreurMessage"])){

            echo $_SESSION["erreurMessage"];

            session_destroy();

        }
       

    ?>

    <input type="submit" value="Se Connecter">

</form>

</div>