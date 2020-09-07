<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-form">

<h2> Les réservations Aujourd'hui </h2>
<table class="table table-sm ">

    <tr>
        <th ><b> id de réservation </b></th>
        <th ><b> Nom</b></th>
        <th ><b> Prénom</b></th>
        <th ><b> Poste </b></th>
        <th ><b> Date </b></th>
        <th ><b> Heure</b></th>

    </tr>
<?php
    
   foreach ($tblDate as $date) {
    $datenfr = date('d/m/Y', strtotime($date['date']));
     echo "<form action='index.php?action=listereservation' method='POST'>";
     echo "<tr>";
     echo "<td>".$date['id_res']."</td>";
     echo "<td>".$date['nom']."</td>";
     echo "<td>".$date['prenom']."</td>";
     echo "<td>".$date['nom_post']."</td>";
     echo "<td>".$datenfr."</td>";
     echo "<td>".$date['heure']."</td>";
     echo "</tr>";
    }
    echo "</table>";
?>

<br /><br />

<h2> Les réservations future </h2>
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

<br /><br />

<h2> Les réservations Expirée </h2>
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
    
   foreach ($tblExp as $Exp) {
    $datenfr = date('d/m/Y', strtotime($Exp['date']));
     echo "<form action='index.php?action=listereservation' method='POST'>";
     echo "<tr>";
     echo "<td><input  type='text' name='id_res' id='ide' value=".$Exp['id_res']." readonly></td>";
     echo "<td>".$Exp['nom']."</td>";
     echo "<td>".$Exp['prenom']."</td>";
     echo "<td>".$Exp['nom_post']."</td>";
     echo "<td>".$datenfr."</td>";
     echo "<td>".$Exp['heure']."</td>";
     echo "</tr>";
    }


    echo "</form>";
    echo "</table>";
?>

</div>