<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
    try {

        if(isset($_REQUEST['action'])){
            session_start();
            require_once "./control/utilisateur.php";
            require_once "./control/poste.php";
            require_once "./control/reserve.php";
            $reserv = new Reservation();
            $post = new Postes();
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


            
            if(isset($_SESSION['userId'])){
                if ($_REQUEST['action'] == "Interface"){

                    include "vue/Interface.php";
        
                }

                if($_REQUEST['action'] == "Deconnexion") {

                    session_destroy();

                header("Location: ./");
                }

                if($_REQUEST['action'] == "Accueil"){
                    
                    include "./vue/Accueil.php";
                }
                

                // PARTIE AJOUT UTILISATEUR
                if($_REQUEST['action'] == "formAdd"){
                    include "./vue/user/form-user.php";
                }

                if($_REQUEST['action'] == "addUser"){

                    $uti->adduser($_POST);

                    header ("Location: index.php?action=Interface");
                    
                }
                // FIN AJOUT UTILISATEUR

                // PARTIE EDIT UTILISATEUR
                if($_REQUEST['action'] == 'tbl-edit') {
                    

                    $tbluser = $uti->getUsers();
                    include "./vue/user/edit-user.php";
                }

                if($_REQUEST['action'] == 'Modifier'){
                    $resUser = $uti->getUser($_POST);
                    include "./vue/user/editform-user.php";

                }

                if($_REQUEST['action'] == 'edituser'){
                    $uti->edituser($_POST);
                    $tbluser = $uti->getUsers();
                    include "./vue/user/edit-user.php";
                }
                // FIN EDIT UN UTILISATEUR

                // PARTIE SUPPRIMER UN UTILISATEUR
                if($_REQUEST['action'] == 'tbl-delete-user') {
                    $tbluser = $uti->getUsers();
                    include "./vue/user/delete-user.php";
                }

                if($_REQUEST['action'] == 'Supprimer'){
                    $_SESSION['supUser'] = $_POST['ide'];
                    $resUser = $uti->getUser($_POST);
                    
                    include './vue/user/verif-delete-user.php';
                }

                if($_REQUEST['action'] == 'confirm-delete'){

                    $id = $_SESSION['supUser'];
                    unset($_SESSION['supUser']);

                    $uti->deleteUser($id);
                    header ('Location: index.php?action=tbl-delete-user');
                }
                // FIN SUPPRIMER UN UTILISATEUR

                // PARTIE AJOUT UN POST
                if($_REQUEST['action'] == 'form-add-post'){
                    include "./vue/poste/form-add-poste.php";
                }

                if($_REQUEST['action'] == "addPoste"){

                    $respost = $post->getRefPoste($_POST);

                    if(empty($respost)){
                    $post->addpost($_POST);

                    header ("Location: index.php?action=Interface");
                    }else{
                        $unique = "La référence du poste existe déjà ! ";
                        include "./vue/poste/form-add-poste.php";
                    }
                }
                // FIN AJOUT UN POSTE

                // PARTIE MODIFIER UN POSTE
                if ($_REQUEST['action'] == "tbl-edit-post"){
                    $tblpost = $post->getPostes();
                    include "./vue/poste/edit-poste.php";
                }

                if($_REQUEST['action'] == 'Modifier le poste'){
                    $resPost = $post->getPoste($_POST);
                    include "./vue/poste/editform-poste.php";

                }

                if($_REQUEST['action'] == 'editposte'){

                    $post->editpost($_POST);
                    $tblpost = $post->getPostes();
                    include "./vue/poste/edit-poste.php";

                }
                // FIN MODIFIER UN POSTE

                // PARTIE SUPPRIMER UN POSTE
                if($_REQUEST['action'] == 'tbl-delete-poste') {
                    $tblpost = $post->getPostes();
                    include "./vue/poste/delete-poste.php";
                }

                if($_REQUEST['action'] == 'Supprimer le poste'){
                    $_SESSION['supPost'] = $_POST['ide'];
                    $resPost = $post->getPoste($_POST);
                    
                    include './vue/poste/verif-delete-poste.php';
                }

                if($_REQUEST['action'] == 'confirm-delete-poste'){

                    $id = $_SESSION['supPost'];
                    unset($_SESSION['supPost']);

                    $post->deletePost($id);
                    header ('Location: index.php?action=tbl-delete-poste');
                }
                // FIN SUPPRIMER UN POSTE

                // PARTIE RESERVATION DES POSTES
                if($_REQUEST['action'] == 'choiceUser'){
                    $tbluser = $uti->getUsers();
                    include "./vue/reservation/choiceuser.php";

                }

                if($_REQUEST['action'] == '+'){
                 
                    $_SESSION["id_user"] = $_POST['id_user'];
                    $_SESSION["nom_user"] = $_POST['nom'];
                    $_SESSION["prenom_user"] = $_POST['prenom'];

                    $tblpost = $post->getPostes();

                    include "./vue/reservation/choicepost.php";

                }

                if($_REQUEST['action'] == 'Selectionner'){
                    $_SESSION["id_post"] = $_POST['id_post'];
                    $_SESSION["nom_post"] = $_POST['nom_post'];
                    
                    $resPost = $post->getPosteRes($_SESSION["id_post"]);
                    $resUser = $uti->getUserRes($_SESSION["id_user"]);
                    include "./vue/reservation/choicedate.php";
                    
                }

                if($_REQUEST['action'] == 'Attribuer le poste'){
                    
                    $reserv->addReserve($_POST);
                    
                    header('Location: index.php?action=Interface');
                }
                // FIN RESERVATION DES POSTES

                // PARTIE LISTE RESERVATION

                if($_REQUEST['action'] == 'listereservation'){
                    $tblRes = $reserv->getReserves();
                    
                    include "./vue/reservation/listereservation.php";
                }

                if($_REQUEST['action'] == 'Annuler'){
                    $reserv->getDeleteReserve($_POST);
                    header ('Location: index.php?action=listereservation');
                }

            }else{

                header("Location: ./");
            
            }

        include "vue/Footer.php";

        }else{

            

            include "./vue/Header.php";

            include "./vue/Accueil.php";

            include "./vue/footer.php";

        }

    }catch (Exception $e) {
    erreur($e->getMessage());

    include "./vue/Accueil.php";
}  

?>