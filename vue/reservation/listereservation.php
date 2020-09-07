<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-form">

<h2> Liste des réservations </h2>
<table class="table table-sm">

    <tr>
        <th ><b> id de réservation </b></th>
        <th ><b> Nom</b></th>
        <th ><b> Prénom</b></th>
        <th ><b> Poste </b></th>
        <th ><b> Date </b></th>
        <th ><b> Heure</b></th>

    </tr>
<?php
    
   foreach ($tblRes as $Res) {
    $datenfr = date('d/m/Y', strtotime($Res['date']));
     echo "<form action='index.php?action=listereservation' method='POST'>";
     echo "<tr>";
     echo "<td><input  type='text' name='id_res' id='ide' value=".$Res['id_res']." readonly></td>";
     echo "<td>".$Res['nom']."</td>";
     echo "<td>".$Res['prenom']."</td>";
     echo "<td>".$Res['nom_post']."</td>";
     echo "<td>".$datenfr."</td>";
     echo "<td>".$Res['heure']."</td>";
     echo "<td><input class='btn btn-danger' type='submit' name='action' value='Annuler'></td>";
     echo "</tr>";
    }


    echo "</form>";
    echo "</table>";
?>

</div>