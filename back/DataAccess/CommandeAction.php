<?php
include_once('AbstractDAO.php');
include_once('CommandeUtilities.php');

    class CommandeAction extends AbstractDAO {

        Public function CommandeEdit($id_Commande,$reference_Commande,$date_Commande){
            //ouverture database
            $BDD = $this->connexionDB();
            //execution requête en décomposée
            $update = "UPDATE Commandes set ID_Commande=?, 
            Ref_Commande=?, Date_Commande=? 
            where ID_Commande=?";
            $establish=$BDD->prepare($update);
            //quoi mettre pour un date?
            $establish->bind_param("iis",
            $id_Commande, $reference_Commande, $date_Commande);
            $establish->execute();
            // fermeture database
            $BDD->close();
        }

        public function CommandeDelete($id_Commande){
            //ouverture database
            $BDD = $this->connexion();
            $delete = "DELETE from Commandes where ID_Commande=?";
            $establish=$BDD->prepare($delete);
            $establish->bind_param("i",$id_Commande);
            $establish->execute();
            // fermeture database
            $BDD->close();
        }
        
        public function CommandeAdd($id_Commande,$reference_Commande,$date_Commande){
            $BDD=$this->connexion();
            $add="INSERT INTO fournisseur (ID_Commande, Ref_Commande, 
            Date_Commande)
            VALUES (?,?,?)";
            $stmt = $BDD->prepare($add);
            $stmt->bind_param("iis", $id_Commande, $reference_Commande, 
            $date_Commande);
            $stmt->execute();
            $BDD->close();
        }

    }

?>