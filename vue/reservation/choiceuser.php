<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-form">

<h2> Choissisez un utilisateur </h2>

<table class="table table-sm">

<tr>
    <th ><b>id </b></th>
    <th ><b>Nom </b></th>
    <th ><b> Prénom </b></th>
    <th ><b> Date de naissance </b></th>
        
    <th ><b> Adresse </b></th>

</tr>

<?php
    foreach ($tbluser as $user) {
        $datenfr = date('d-m-Y', strtotime($user['datenaiss']));
            echo "<form action='index.php?action=choiceUser' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input  type='text' name='id_user' id='ide' value=".$user['id']." readonly></td>"
                ."<td><input  type='text' name='nom' id='nom' value=".$user['nom'] ." readonly></td>"  
                ."<td><input  type='text' name='prenom' id='nom' value=".$user['prenom'] ." readonly></td>"
                ."<td>".$datenfr."</td>"
                ."<td>".$user['adresse']."</td>"
                ."<td> <input class='btn btn-info' type='submit' name='action' value='+'></td></tr>";
            echo "</form>";
        }

?>


</table>


</div>