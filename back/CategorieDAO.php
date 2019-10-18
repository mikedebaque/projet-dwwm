<?php
class CategorieDAO
{
    private function connexion()
    {
        return mysqli_connect("localhost", "root", "", "projet");
    }
    private function executeQuery($request)
    {
        $db = $this->connexion();
        return mysqli_query($db, $request);
    }
    private function fetchQuery($request)
    {
        $query=$this->executeQuery($request, $fetchBool=false);
        return mysqli_fetch_assoc($query, MYSQLI_ASSOC);
    }
    public function addCategorie($idCategorie, $nomCategorie)
    {
        $req = "INSERT INTO `categorie`(`ID_Categorie`, `Nom_Categorie`) VALUES ($idCategorie,'$nomCategorie')";
        $this->executeQuery($req);
    }
    public function updateCategorie($idCategorie, $nomCategorie)
    {
        $req = "UPDATE `categorie` SET `Nom_Categorie`=$nomCategorie WHERE `ID_Categorie`=$idCategorie";
        $this->executeQuery($req);
    }
    public function delCategorie($idCategorie)
    {
        $req = "DELETE FROM `categorie` `ID_Categorie`=$idCategorie";
        $this->executeQuery($req);
    }
}
