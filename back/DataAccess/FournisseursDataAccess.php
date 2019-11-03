<?php

include_once 'AbstractDataAccess.php';
include_once 'FournisseursUtility.php';


class FournisseursDataAccess extends AbstractDataAccess
{

    public function trouverFournisseurParNumero($id_fournisseur)
    {
        $fournisseur = new Fournisseurs;
        $connect=$this->connexion();
        $resultSet = $this->executerQuery($connect, "select * from fournisseur where id_fournisseur = $id_fournisseur");
        $rs = $this->fetchResults($resultSet);

        $fournisseur->setId_fournisseur($rs[0]['id_fournisseur']);
        $fournisseur->setNom_entreprise_fournisseur($rs[0]['nom_entreprise_fournisseur']);
        $fournisseur->setAdresse_fournisseur($rs[0]['adresse_fournisseur']);
        $fournisseur->setEmail_fournisseur($rs[0]['email_fournisseur']);
        $fournisseur->setTel_port_fournisseur($rs[0]['tel_port_fournisseur']);
        $fournisseur->setTel_fixe_fournisseur($rs[0]['tel_fixe_fournisseur']);
        $fournisseur->setId_ville($rs[0]['id_ville']);
        return $fournisseur;
    }

    public function rechercherTousLesFournisseurs(){
        $connect = $this->connexion();
        $resultSet = $this->executerQuery($connect, "select * from fournisseur" );
        $fournisseursTrouves = $this->fetchResults($resultSet);
        $fournisseursUtility = new FournisseursUtility();
        $tableau = $fournisseursUtility->creerTableauObjets($fournisseursTrouves);
        return $tableau;

    }
 
    Public function modification($id_fournisseur,$nom_entreprise_fournisseur,$adresse_fournisseur,$email_fournisseur,$tel_port_fournisseur,$tel_fixe_fournisseur,$id_ville)
    {
        $connect=$this->connexion();
        $modification="UPDATE fournisseur set id_fournisseur=?,nom_entreprise_fournisseur=?,adresse_fournisseur=?,email_fournisseur=?,tel_port_fournisseur=?,tel_fixe_fournisseur=?,id_ville=? where id_fournisseur=?";
        $stmt=$connect->prepare($modification);
        $stmt->bind_param("isssiiii",$id_fournisseur,$nom_entreprise_fournisseur,$adresse_fournisseur,$email_fournisseur,$tel_port_fournisseur,$tel_fixe_fournisseur,$id_ville,$id_fournisseur);
        $stmt->execute();
        $connect->close();
    }

    public function ajout($id_fournisseur,$nom_entreprise_fournisseur,$adresse_fournisseur,$email_fournisseur,$tel_port_fournisseur,$tel_fixe_fournisseur,$id_ville){
        $connect=$this->connexion();
        $ajout="INSERT INTO fournisseur (id_fournisseur,nom_entreprise_fournisseur,adresse_fournisseur,email_fournisseur,tel_port_fournisseur,tel_fixe_fournisseur,id_ville)
        VALUES (?,?,?,?,?,?,?)";
        $stmt = $connect->prepare($ajout);
        $stmt->bind_param("isssiii", $id_fournisseur, $nom_entreprise_fournisseur, $adresse_fournisseur, $email_fournisseur, $tel_port_fournisseur, $tel_fixe_fournisseur, $id_ville);
        $stmt->execute();
        $connect->close();
    }

         public function suppression($id_fournisseur){
        $connect=$this->connexion();
        $suppression="Delete from fournisseur where id_fournisseur=?";
        $stmt=$connect->prepare($suppression);
        $stmt->bind_param("i",$id_fournisseur);
        $stmt->execute();
        $connect->close();
    }
  
    
}
