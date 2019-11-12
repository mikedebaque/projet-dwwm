<?php

include_once("CommandeUtilities.php");
include_once("AbstractDAO.php");
include_once("CommandeAccess.php");
include_once("CommandeSG.php");

$form = new CommandeForm();
$tabObj = new CommandeAccess();
$tabData = $tabObj->obtainAllFromCommande();

?>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Form">
        AJOUTER
    </button>
<?php
echo"<table class='table table-dark table-striped'> ";
echo"<tr>";
    echo"<th>Id Commande</th>";
    echo"<th>Référence Commande</th>";
    echo"<th>Date Commande</th>";
    //echo"<th></th>";
    //echo"<th></th>";
echo"</tr>";

foreach ($tabData as $tabObj) {
    echo "<td>" . $tabObj->getId_Commande() . "</td>";
    echo "<td>" . $tabObj->getReference_Commande() . "</td>";
    echo "<td>" . $tabObj->getDate_Commande() . "</td>"; ?>
<!-- insertion boutons ici dans la v2 -->

<?php
}
?>

<br>
<div id="Form" class="collapse">
<?php
    include_once('CommandForm.php');
    $formObj = new CommandForm();
    $formObj->insertForm();
?>
</div>