<div class="back">
<a href="index.php?action=choiceUser">
<img src="./image/arrow.png" width="50"/>
</a>
</div>

<div class="content-edit">
<img src="./image/pc-edit.png"width="150"/>
<h2> choississez un poste </h2>


<table class="table table-sm">

    <tr>
        <th ><b>id </b></th>
        <th ><b>Nom du poste</b></th>
        <th ><b> Référence du poste </b></th>

    </tr>

    <?php
   
        foreach ($tblpost as $post) {
          
                echo "<form action='index.php?action=choicePoste' method='POST'>";
                echo 
                "<tr>" 
                    ."<td>"."<input  type='text' name='id_post' id='ide' value=".$post['id_post']." readonly></td>"
                    ."<td><input  type='text' name='nom_post' id='nom' value=".$post['nom_post']." ></td>"  
                    ."<td>".$post['ref_post']."</td>"
                    ."<td> <input class='btn btn-secondary' type='submit' name='action' value='Selectionner'></td></tr>";
                echo "</form>";
            }

    ?>
      </table>

</table>

</div>