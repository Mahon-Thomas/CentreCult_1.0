<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-form">
    <img src="./image/add1.png" width="156"/>
    <h2> Ajouter un utilisateur </h2>

    <form action="index.php?action=addUser" method="POST" class="form-connexion">
        
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required>
    

        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="date"> Date de naissance : </label>
        <input type="date" name="date" id="date" required>

        <label for="adresse">Adresse : </label>
        <input type="text" name="adresse" id="adresse" required>

        <input type="submit" value="Ajouter">

    </form>

</div>