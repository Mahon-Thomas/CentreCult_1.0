<?php

class Postes {

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    function getPostes(){

        $strSQL = "SELECT * FROM  postes";
        $tabValeur = array("*");
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
      }
    function getPoste($id){

        $strSQL = "SELECT * FROM postes WHERE id_post = ?";
        $tabValeur = array($id['ide']);
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
      }
      function getRefPoste($ref){

        $strSQL = "SELECT * FROM postes WHERE ref_post = ?";
        $tabValeur = array($ref['ref_post']);
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;
      }

    function addpost($add){
        
        $strSQL = "INSERT INTO postes (nom_post, ref_post) VALUES (?, ?)";
        $tabValeur = array(
        $add['nom_post'],
        $add['ref_post']
        );
        $res = $this->ds->Requete($strSQL, $tabValeur);
        return $res;

    }

    function editpost($edit){
    
        $strSQL = "UPDATE postes SET nom_post = :nom, ref_post = :ref WHERE id_post = :id;";
    
        $tabValeur = array(
          'nom'  => $edit['nom_post'], 
          'ref'   => $edit['ref_post'], 
          'id' => $edit['ide'],
        );
       
        $update = $this->ds->Requete($strSQL, $tabValeur);
        
        return $update;
       
    
      }

      function deletePost($id){

        $strSQL = "DELETE FROM postes WHERE id_post = ?";
        $tabValeur = array($id);
        $del = $this->ds->Requete($strSQL, $tabValeur);
        return $del;
      }



}