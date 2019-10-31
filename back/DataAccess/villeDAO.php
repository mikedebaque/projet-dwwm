<?php
include_once __DIR__.'/AbstractDAO.php';

class villeDAO extends AbstractDAO
{
    public function addVille($ville,$cp)
    {
        $req = "INSERT INTO `villes`(`Nom_Ville`, `CP_Ville`) VALUES (?,?)";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('ss',$ville,$cp);
        $this->queryDB($stmt);
        $db->close();
    }
    // Verif si la ville existe dans la DB, si oui retourne son ID sinon return false
    public function isVilleExist($ville,$cp)
    {
        $req = "SELECT * FROM `villes` WHERE Nom_Ville = ? and CP_Ville = ?";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('ss',$ville,$cp);
        $data = $this->fetchDB($stmt);
        if(empty($data))
        {
            return false;
        }
        else
        {
            return $data[0]['ID_Ville'];
        }
    }
}