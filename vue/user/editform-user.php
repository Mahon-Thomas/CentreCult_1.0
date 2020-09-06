<div class="back">
<a href="index.php?action=tbl-edit">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/user.png"width="150"/>
<h2> Modifier l'utilisateur </h2>

    
    <form action="index.php?action=edituser" method="POST" class="form-connexion">
        <label for="ide">ID : </label>
        <input class="ide" readonly type='text' name='ide' id='ide' value="<?php echo $resUser[0]['id'] ?>">

        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="<?php echo $resUser[0]['nom']?>" required>


        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $resUser[0]['prenom']?>" required>

        <label for="date"> Date de naissance : </label>
        <input type="date" name="date" id="date" value="<?php echo $resUser[0]['datenaiss']?>" required>

        <label for="adresse">Adresse : </label>
        <input type="text" name="adresse" id="adresse" value="<?php echo $resUser[0]['adresse']?>" required>

        <input type="submit" value="Valider">

    </form>
      </table>

</table>

</div>