<div class="back">
<a href="index.php?action=Interface">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/pc-edit.png"width="150"/>
<h2> Modifier un poste </h2>


<table class="table table-sm">

    <tr>
        <th ><b>id </b></th>
        <th ><b>Nom du poste</b></th>
        <th ><b> Référence du poste </b></th>

    </tr>

    <?php
        foreach ($tblpost as $post) {
          
                echo "<form action='index.php?action=formEditPost' method='POST'>";
                echo 
                "<tr>" 
                    ."<td>"."<input  type='text' name='ide' id='ide' value=".$post['id_post']." readonly></td>"
                    ."<td>".$post['nom_post'] ."</td>"  
                    ."<td>".$post['ref_post'] ."</td>"
                    ."<td> <input class='btn btn-warning' type='submit' name='action' value='Modifier le poste'></td></tr>";
                echo "</form>";
            }

    ?>
      </table>

</table>

</div>