<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/rm-user.png"width="140"/>
<h2> Modifier un utilisateur </h2>


<table class="table table-sm">

    <tr>
        <th ><b>id </b></th>
        <th ><b>Nom </b></th>
        <th ><b> Prénom </b></th>
        <th ><b> Date de naissance </b></th>
            
        <th ><b> Adresse email </b></th>

    </tr>

    <?php
        foreach ($tbluser as $user) {
            $datenfr = date('d-m-Y', strtotime($user['datenaiss']));
                echo "<form action='index.php?action=Delete-User' method='POST'>";
                echo 
                "<tr>" 
                    ."<td>"."<input readonly type='text' name='ide' id='ide' value=".$user['id']."></td>"
                    ."<td>".$user['nom'] ."</td>"  
                    ."<td>".$user['prenom'] ."</td>"
                    ."<td>".$datenfr."</td>"
                    ."<td>".$user['adresse']."</td>"
                    ."<td> <input class='btn btn-danger' type='submit' name='action' value='Supprimer'></td></tr>";
                echo "</form>";
            }

    ?>
      </table>

</table>

</div>