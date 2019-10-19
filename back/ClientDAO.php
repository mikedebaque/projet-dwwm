<?php
class ClientDAO
{
    private function connexion()
    {
        return mysqli_connect("localhost","root","","projet");
    }
    private function executeQuery($request)
    {
        $db = $this->connexion();
        return mysql_query($db, $request);
    }
    private function fetchQuery($request)
    {
        $rs = $this->executeQuery($request);
        return mysqli_fetch_all($rs,MYSQL_ASSOC);
    }

    private function addClient($nom,$prenom,$adresse,$email,$telPort='',$telFixe='',$date,$solde=0,$pcw,$ville)
    {
        $request="INSERT INTO `client`(`Nom_Client`, `Prenom_Client`,
         `Adresse_rue_Client`, `Email_Client`, `Tel_Port_Client`, `Tel_Fixe_Client`,
          `date_naissance_client`, `solde_client`, `password_client`, `ID_Ville`) 
          VALUES ($nom,$prenom,$adresse,$email,$telPort,$telFixe,$date,$solde,$pcw,$ville)";
        $this->executeQuery($request);
    }
    private function editClient($id,$nom,$prenom,$adresse,$email,$telPort='',$telFixe='',$date,$solde,$pcw,$ville)
    {
        $request = "UPDATE `client` SET 
        `Nom_Client`=$nom,`Prenom_Client`=$prenom,`Adresse_rue_Client`=$adresse,
        `Email_Client`=$email,`Tel_Port_Client`=$telPort,`Tel_Fixe_Client`=$telFixe,`date_naissance_client`=$date,
        `solde_client`=$solde,`password_client`=$pcw,`ID_Ville`=$ville WHERE `ID_Client`=$id";
        $this->executeQuery($request);
    }
    private function delClient($id)
    {
        $request = "DELETE FROM `client` WHERE `ID_Client`=$id";
        $this->executeQuery($request);
    }
}