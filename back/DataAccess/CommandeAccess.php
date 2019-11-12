<?php
include_once('AbstractDAO.php');
include_once('CommandeUtilities.php');

    class CommandeAccess extends AbstractDAO {
        //attributes


        //methods
        public function obtainAllFromCommande(){
            //connexion BdD, exécution MySQL, placement en tableau, 
            //et return
            $BDD = $this->connexionDB();
            $result = $this->queryDB($BDD, "SELECT * FROM Commandes");
            $obtain = $this->fetchDB($result);
            $tabObj = new CommandeUtilities();
            $tabCreate = $tabObj->creerCommandeTab($obtain);
            return $tabCreate;
        }

        public function obtainTargetCommande($targetId){
            $Commande = new CommandeSG();
            $BDD=$this->connexionDB();
            $result = $this->queryDB($BDD, "select * from Commandes where ID_Commande = $targetId");
            $obtain = $this->fetchDB($result);
    
            $Commande->setId_Commande($obtain[0]['ID_Commande']);
            $Commande->setReference_Commande($obtain[0]['Ref_Commande']);
            $Commande->setDate_Commande($obtain[0]['Date_Commande']);
            return $Commande;
        }

    }