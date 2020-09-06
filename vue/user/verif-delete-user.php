<div class="back">
<a href="index.php?action=tbl-delete-user">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/rm-user.png"width="140"/>
<h2> Supprimer l'utilisateur <?php echo $resUser[0]['nom'];?> <?php  echo $resUser[0]['prenom']; ?> ?</h2>

<p>Voulez-vous vraiment supprimer cet utilisateur ? </p>

<div class="choice">
<a class="btn btn-success btnyes" href="index.php?action=confirm-delete"> Oui </a>
<b> ou </b>
<a class="btn btn-danger btnno" href="index.php?action=tbl-delete-user"> Non </a>

</div>

</div>