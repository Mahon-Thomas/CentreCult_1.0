<?php

class Reservation
{

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function addReserve($add, $idpost, $iduser){
        $idp = intval($idpost);
        $idu = intval($iduser);
     
        $strSQL = "INSERT INTO reservation (id_uti, id_post, date, heure_debut, heure_fin) VALUES (?, ?, ?, ?, ?)";
        $tabValeur = array(
        $idu,
        $idp,
        $add['date'],
        $add['heure_debat'],
        $add['heure_fin']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }

}