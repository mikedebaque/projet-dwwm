<?php

//sert à appeler le formulaire HTML dans le code de la page
//à l'aide d'un appel méthode (lisibilité code)

    class CommandeForm{
    
    public function InsertForm(){ ?>
        <form method="post" action="CommandeAdd.php">
        Id Commande: <INPUT TYPE=number NAME='id_Command'><BR>
        Référence Commande: <INPUT TYPE=number NAME='reference_Commande'><BR>
        Date Commande: <INPUT TYPE=date NAME='date_Commande'><BR>
        <INPUT TYPE=SUBMIT VALUE='VALIDER' NAME='valider' >
        </form>
    <?php
    }

    public function UpdateForm(){ ?>
        <form method="post" action="CommandeAdd.php">
        Id Commande: <INPUT TYPE=number NAME='id_Command'><BR>
        Référence Commande: <INPUT TYPE=number NAME='reference_Commande'><BR>
        Date Commande: <INPUT TYPE=date NAME='date_Commande'><BR>
        <INPUT TYPE=SUBMIT VALUE='VALIDER' NAME='valider' >
        </form>
    <?php

    }
    
}
?>