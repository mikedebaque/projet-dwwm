<?php
include_once (__DIR__.'/AbstractDAO.php');
class ClientDAO extends AbstractDAO
{
    public function addClient($nom,$prenom,$adresse,$email,$telPort=null,$date,$pcw,$ville,$telFixe=null,$solde=0)
    {
        $req="INSERT INTO `client`(`Nom_Client`, `Prenom_Client`,
         `Adresse_rue_Client`, `Email_Client`, `Tel_Port_Client`, `Tel_Fixe_Client`,
          `date_naissance_client`, `solde_client`, `password_client`, `ID_Ville`) 
          VALUES (?,?,?,?,?,?,?,?,?,?)";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('sssssssisi',$nom,$prenom,$adresse,$email,$telPort,$telFixe,$date,$solde,$pcw,$ville);
        $this->queryDB($stmt);
        $db->close();
    }
    public function editClient($id,$nom,$prenom,$adresse,$email,$telPort='',$telFixe='',$date,$solde,$pcw,$ville)
    {
        $req = "UPDATE `client` SET 
        `Nom_Client`=?,`Prenom_Client`=?,`Adresse_rue_Client`=?,
        `Email_Client`=?,`Tel_Port_Client`=?,`Tel_Fixe_Client`=?,`date_naissance_client`=?,
        `solde_client`=?,`password_client`=?,`ID_Ville`=? WHERE `ID_Client`=?";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('sssssssisii',$nom,$prenom,$adresse,$email,$telPort,$telFixe,$date,$solde,$pcw,$ville,$id);
        $this->queryDB($stmt);
        $db->close();
    }
    public function delClient($id)
    {
        $req = "DELETE FROM `client` WHERE `ID_Client`=?";
        $db = $this->connexionDB();
        $stmt = $db->prepare($req);
        $stmt->bind_param('i',$id);
        $this->queryDB($stmt);
        $db->close();
    }
}