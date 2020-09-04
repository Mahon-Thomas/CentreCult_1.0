<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
    try {

        if(isset($_REQUEST['action'])){
            session_start();
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