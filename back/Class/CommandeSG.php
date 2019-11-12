<?php

    class CommandeSG
    {

        // attributs 
        private $id_Commande;
        private $reference_Commande;
        private $date_Commande;


        //methods
        public function __construct()
        {
        }

        //methods gets
        public function getId_Commande()
        {
            return $this->id_Commande;
        }

        public function getReference_Commande()
        {
            return $this->reference_Commande;
        }

        public function getDate_Commande()
        {
            return $this->date_Commande;
        }
    
        //methods sets
        public function setId_Commande($id_Commande)
        {
            $this->id_Commande = $id_Commande;
            return $this;
        }
    
        public function setReference_Commande($reference_Commande)
        {
            $this->reference_Commande = $reference_Commande;
            return $this;
        }
    
        public function setDate_Commande($date_Commande)
        {
            $this->date_Commande = $date_Commande;
            return $this;
        }



    }
?>