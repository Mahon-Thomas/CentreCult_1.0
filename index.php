<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
    try {

        if(isset($_REQUEST['action'])){
            session_start();
            require_once "./control/utilisateur.php";
            $uti = new Utilisateur();
            include "./vue/Header.php";
            

            if($_REQUEST['action'] == "Connexion"){
                

                require_once "control/membre.php";
                $membre = new Membre();

                $username = filter_var($_POST["login"], FILTER_SANITIZE_STRING);
                $password = filter_var($_POST["mdp"], FILTER_SANITIZE_STRING);

                $isLoggedIn = $membre->verifLogin($username, $password);

          
            if (!$isLoggedIn) {

                $_SESSION["erreurMessage"] = "Les informations d'identification sont invalides !";

                include "vue/Accueil.php";
                
            
            }else{
    
                header ("Location: index.php?action=Interface");
            }


            }
            
            if ($_REQUEST['action'] == "Interface"){

                include "vue/Interface.php";

            }

            if($_REQUEST['action'] == "Deconnexion") {

                session_destroy();

            header("Location: index.php?action=Accueil");
            }

            if($_REQUEST['action'] == "Accueil"){
                
                include "./vue/Accueil.php";
            }

            if($_REQUEST['action'] == "formAdd"){
                include "./vue/form-user.php";
            }

            if($_REQUEST['action'] == "addUser"){

                $uti->adduser($_POST);

                header ("Location: index.php?action=Interface");
                
            }

            if($_REQUEST['action'] == 'tbl-edit') {
                

                $tbluser = $uti->getUsers();
                include "./vue/edit-user.php";
            }

            if($_REQUEST['action'] == 'Modifier'){
                $resUser = $uti->getUser($_POST);
                include "./vue/editform-user.php";

            }

            if($_REQUEST['action'] == 'edituser'){
                $uti->edituser($_POST);
                $tbluser = $uti->getUsers();
                include "./vue/edit-user.php";
            }

            if($_REQUEST['action'] == 'tbl-delete-user') {
                $tbluser = $uti->getUsers();
                include "./vue/delete-user.php";
            }

            if($_REQUEST['action'] == 'Supprimer'){
                $_SESSION['supUser'] = $_POST['ide'];
                $resUser = $uti->getUser($_POST);
                
                include './vue/verif-delete-user.php';
            }

            if($_REQUEST['action'] == 'confirm-delete'){

                $id = $_SESSION['supUser'];
                unset($_SESSION['supUser']);

                $uti->deleteUser($id);
                header ('Location: index.php?action=tbl-delete-user');
            }

        include "vue/Footer.php";

        }else{

            

            include "./vue/Header.php";

            include "./vue/Accueil.php";

            include "./vue/footer.php";

        }

    }catch (Exception $e) {
    erreur($e->getMessage());
}  

?>