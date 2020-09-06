<div class="back">
<a href="index.php?action=tbl-edit-post">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/pc-edit.png"width="150"/>
<h2> Modifier le poste </h2>

    
    <form action="index.php?action=editposte" method="POST" class="form-connexion">
        <label for="ide">ID : </label>
        <input class="ide" readonly type='text' name='ide' id='ide' value="<?php echo $resPost[0]['id_post'] ?>">

        <label for="nom_post">Nom du poste : </label>
        <input type="text" name="nom_post" id="nom_post" value="<?php echo $resPost[0]['nom_post']?>" required>


        <label for="prenom">Prénom : </label>
        <input type="text" name="ref_post" id="prenom" value="<?php echo $resPost[0]['ref_post']?>" required>


        <input type="submit" value="Sauvegarder">

    </form>
      </table>

</table>

</div>