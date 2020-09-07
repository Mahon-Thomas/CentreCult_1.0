<?php

class Reservation
{

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function addReserve($add){
        
        $strSQL = "INSERT INTO `reservation` (`id_uti`, `id_posts`, `date`, `heure`) VALUES (?, ?, ?, ?);";
        $tabValeur = array(
        $add['id_user'],
        $add['id_post'],
        $add['date'],
        $add['heure']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }

    function verifReserve($reserv){

        $strSQL = "SELECT * FROM  reservation,postes WHERE id_posts = postes.id_post AND date = :date AND heure = :heure AND id_posts = :id_post";
        $tabValeur = array(
        "date" => $reserv['date'],
        "heure" => $reserv['heure'],
        "id_post" => $reserv['id_post']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }

    function getDatenow(){
        $strSQL = "SELECT `id_res`, `id_uti`, `id_post`, `date`, `heure`, `nom`, `prenom`, `nom_post`
        FROM reservation, utilisateurs, postes
        WHERE id_uti = utilisateurs.id
        AND id_posts = postes.id_post
        AND date = DATE(NOW())";
        $tabValeur = array("*");
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
    }

    function getDateexp(){
        $strSQL = "SELECT `id_res`, `id_uti`, `id_post`, `date`, `heure`, `nom`, `prenom`, `nom_post`
        FROM reservation, utilisateurs, postes
        WHERE id_uti = utilisateurs.id
        AND id_posts = postes.id_post
        AND date < DATE(NOW())";
        $tabValeur = array("*");
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
    }

    function getReserves(){

        $strSQL = "SELECT `id_res`, `id_uti`, `id_post`, `date`, `heure`, `nom`, `prenom`, `nom_post`
        FROM reservation, utilisateurs, postes
        WHERE id_uti = utilisateurs.id
        AND id_posts = postes.id_post
        AND date > DATE(NOW())
        ORDER BY date ASC";
        $tabValeur = array("*");
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
    }

    function getDeleteReserve($id){
        $strSQL = "DELETE FROM reservation WHERE id_res = ?";
        $tabValeur = array($id['id_res']);
        $del = $this->ds->Requete($strSQL, $tabValeur);
        return $del;
    }


}
?>