<?php

class Reservation
{

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function addReserve($add){
        
        $strSQL = "INSERT INTO `reservation` (`id_uti`, `id_post`, `date`, `heure_debut`, `heure_fin`) VALUES (?, ?, ?, ?, ?);";
        $tabValeur = array(
        $add['id_user'],
        $add['id_post'],
        $add['date'],
        $add['heure_debut'],
        $add['heure_fin']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }

}
?>