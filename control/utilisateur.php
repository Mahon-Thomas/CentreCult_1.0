<?php

class Utilisateur {

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function getUsers(){

        $strSQL = "SELECT * FROM utilisateurs ";
        $tabValeur = array("*");
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
      }
    function getUser($id){

        $strSQL = "SELECT * FROM utilisateurs WHERE id = ?";
        $tabValeur = array($id['ide']);
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
      }

      function getUserRes($id){

        $strSQL = "SELECT * FROM utilisateurs WHERE id = ?";
        $tabValeur = array($id);
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
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

    function edituser($edit){
    
        $strSQL = "UPDATE utilisateurs SET nom = :nom, prenom = :pnom , datenaiss = :date, adresse = :adresse WHERE id = :id;";
    
        $tabValeur = array(
          'pnom'  => $edit['prenom'], 
          'nom'   => $edit['nom'], 
          'id' => $edit['ide'],
          'date' => $edit['date'],
          'adresse' => $edit['adresse']
        );
       
        $update = $this->ds->Requete($strSQL, $tabValeur);
        
        return $update;
       
    
      }

      function deleteUser($id){

        $strSQL = "DELETE FROM utilisateurs WHERE id = ?";
        $tabValeur = array($id);
        $del = $this->ds->Requete($strSQL, $tabValeur);
        return $del;
      }



}