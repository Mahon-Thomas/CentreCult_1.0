<?php

class Membre
{

    function __construct()
    {
        require_once "./model/model.php";
        $this->ds = new DB();
    }

    public function verifLogin($login, $password) {
        $passwordHash = sha1($password);
        $strSQL = "select * FROM admin WHERE login = ? AND mdp = ?";
        $paramTab = array($login, $passwordHash);
        $membreResultat = $this->ds->Requete($strSQL, $paramTab);
        if(!empty($membreResultat)) {
            $_SESSION["userId"] = $membreResultat;
            return true;
        }
    }
    
}
