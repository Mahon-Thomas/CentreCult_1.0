<div class="back">
<a href="index.php?action=choiceUser">
<img src="./image/arrow.png" width="50"/>
</a>
</div>


<div class="content-edit">
    <img src="./image/booking.png"width="130"/>
    <h2> Finaliser l'attribution du poste </h2>

    <b> L'utilisateur selectionné </b>
    <p><?php echo $resUser[0]['nom'];?> <?php echo $resUser[0]['prenom'];?></p>

    <b> Le poste selectionné </b>
    <p><?php echo $resPost[0]['nom_post'];?></p>

    <b> choississez la date et l'horaire </b>
    <form action="index.php?action=confirmPoste" method="POST" class="form-connexion">
        <label for="id_user">Id utilisateur :</label>
        <input type="numeric" name='id_user' id='nom' value='<?php echo $_SESSION['id_user']; ?>' readonly>

        <label for="id_post"> Id du poste :</label>
        <input type="numeric" name='id_post' id='nom' value='<?php echo $_SESSION['id_post']; ?>' readonly>

        <label for="date"> Date </label>
        <input type="date" name='date' id='date'>

        <label for="heure_debut"> Heure début :</label>
        <input type="text" name='heure_debut' id='heure' placeholder="8:00" >

        <label for="heure_fin"> heure fin :</label>
        <input type="text" name='heure_fin' id='heure' placeholder="9:00" >


        <input class='btn btn-warning' type='submit' name='action' value='Attribuer le poste'>
    </form>