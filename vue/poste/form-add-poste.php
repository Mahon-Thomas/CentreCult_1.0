<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-form">
    <img src="./image/pc-add.png" width="150"/>
    <h2> Ajouter un poste </h2>

    <form action="index.php?action=addPoste" method="POST" class="form-connexion">
        
        <label for="nom_post">Nom du poste : </label>
        <input type="text" name="nom_post" id="nom_post" required>
    

        <label for="ref_post">Référence du poste: </label>
        <input type="text" name="ref_post" id="ref_post" required>

        <?php 
            if(isset($unique)){
                echo "<p> ".$unique."</p>";
            }
        ?>

        <input type="submit" value="Enregistrer">

    </form>

</div>