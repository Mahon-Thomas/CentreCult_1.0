<?php

class Utilisateur {

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function adduser($add){
        
        $strSQL = "INSERT INTO utilisateurs (nom, prenom, datenaiss, adresse) VALUES (?, ?, ?, ?)";
        $tabValeur = array(
        $add['nom'],
        $add['prenom'],
        $add['date'],
        $add['adresse']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }



}