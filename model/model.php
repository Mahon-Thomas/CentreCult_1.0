<?php
// Connexion à la BASE DE DONNÉES
class DB {
  private $cnx = null;
  private $resultat = null;

  function __construct(){

 $this->cnx = new PDO("mysql:host=mysql-thomasmahon.alwaysdata.net;dbname=thomasmahon_centrecult;charset=utf8", "213044", "centrecult" );
  }

  function __destruct(){
    if ($this->resultat!==null) { $this->resultat = null; }
    if ($this->cnx!==null) { $this->cnx = null; }
  }

  // Exécution de la requête préparée
  // La fonction peut être appelée plusieurs fois.
  function Requete($strSQL, $tblValeur){
    $this->resultat = $this->cnx->prepare($strSQL);
    $this->resultat->execute($tblValeur);
    return $this->resultat->fetchAll();
  }
}
?>
