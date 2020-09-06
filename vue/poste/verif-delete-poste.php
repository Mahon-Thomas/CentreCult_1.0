<div class="back">
<a href="index.php?action=tbl-delete-poste">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/pc-delete.png"width="140"/>
<h2> Supprimer le <?php echo $resPost[0]['nom_post'];?> ?</h2>

<p>Voulez-vous vraiment supprimer cet utilisateur ? </p>

<div class="choice">
<a class="btn btn-success btnyes" href="index.php?action=confirm-delete-poste"> Oui </a>
<b> ou </b>
<a class="btn btn-danger btnno" href="index.php?action=tbl-delete-poste"> Non </a>

</div>

</div>