<?php

include_once 'Fournisseurs.php';

class FournisseursUtility{
public function creerTableauObjets($tab){
    $tableau=[];

    foreach ($tab as $value){
        $objetFournisseur = new Fournisseurs;
        $objetFournisseur->setId_fournisseur($value['id_fournisseur']);
        $objetFournisseur->setNom_entreprise_fournisseur($value['nom_entreprise_fournisseur']);
        $objetFournisseur->setAdresse_fournisseur($value['adresse_fournisseur']);
        $objetFournisseur->setEmail_fournisseur($value['email_fournisseur']);
        $objetFournisseur->setTel_port_fournisseur($value['tel_port_fournisseur']);
        $objetFournisseur->setTel_fixe_fournisseur($value['tel_fixe_fournisseur']);
        $objetFournisseur->setId_ville($value['id_ville']);
        array_push($tableau,$objetFournisseur);
    }

return $tableau;
}
}
?>
