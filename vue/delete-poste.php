<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/pc-delete.png"width="140"/>
<h2> Supprimer un Poste </h2>


<table class="table table-sm">

    <tr>
        <th ><b>id du post</b></th>
        <th ><b>Nom du poste</b></th>
        <th ><b> Référence du poste </b></th>

    </tr>

    <?php
        foreach ($tblpost as $post) {
                echo "<form action='index.php?action=Delete-User' method='POST'>";
                echo 
                "<tr>" 
                    ."<td>"."<input readonly type='text' name='ide' id='ide' value=".$post['id_post']."></td>"
                    ."<td>".$post['nom_post'] ."</td>"  
                    ."<td>".$post['ref_post'] ."</td>"
                    ."<td> <input class='btn btn-danger' type='submit' name='action' value='Supprimer le poste'></td></tr>";
                echo "</form>";
            }

    ?>
      </table>

</table>

</div>