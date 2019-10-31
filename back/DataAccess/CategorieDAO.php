<?php
include_once (__DIR__.'/AbstractDAO.php');
class CategorieDAO extends AbstractDAO
{
    public function addCategorie($idCategorie, $nomCategorie)
    {
        $req = "INSERT INTO `categorie`(`ID_Categorie`, `Nom_Categorie`) VALUES (?,?)";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('is',$idCategorie,$nomCategorie);
        $this->queryDB($stmt);
        $db->close();
    }
    public function updateCategorie($idCategorie, $nomCategorie)
    {
        $req = "UPDATE `categorie` SET `Nom_Categorie`=? WHERE `ID_Categorie`=?";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('si',$nomCategorie,$idCategorie);
        $this->queryDB($stmt);
        $db->close();
    }
    public function delCategorie($idCategorie)
    {
        $req = "DELETE FROM `categorie` `ID_Categorie`=?";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('i',$idCategorie);
        $this->queryDB($stmt);
        $db->close();
    }
}
