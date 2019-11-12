<?php
include_once('CommandeSG.php');

    class CommandeUtilities {
        
        //attributes


        //methods
        public function creerCommandeTab($Commande)
        {
            //preparation array
            $tableau=[];
            //execution
            foreach ($Commande as $ligne) {
                $objetCommande=new CommandeSG();
                $objetCommande->setID_Commande($ligne['ID_Commande']);
                $objetCommande->setReference_Commande($ligne['Ref_Commande']);
                $objetCommande->setDate_Commande($ligne['Date_Commande']);
                array_push($tableau, $objetCommande);
            }
            //return vers CommandeAccess
            return $tableau;
        }


    }

?>