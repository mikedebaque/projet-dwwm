<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <h1><strong>Gestion des Fournisseurs</strong></h1>
        </div>
        <?php
include_once 'FournisseursUtility.php';
include_once 'FournisseursDataAccess.php';

$fournisseursDataAccess = new FournisseursDataAccess();
if (isset($_GET['todo']) && $_GET['todo'] == 'ajout') {
    if (isset($_POST['id_fournisseur']) && isset($_POST['id_ville'])) {
        $id_fournisseur = $_POST['id_fournisseur'];
        $nom_entreprise_fournisseur = $_POST['nom_entreprise_fournisseur'];
        $adresse_fournisseur = $_POST['adresse_fournisseur'];
        $email_fournisseur = $_POST['email_fournisseur'] ;
        $tel_port_fournisseur = $_POST['tel_port_fournisseur'] ? $_POST['tel_port_fournisseur'] : 'null';
        $tel_fixe_fournisseur = $_POST['tel_fixe_fournisseur'] ? $_POST['tel_fixe_fournisseur'] : 'null';
        $id_ville = $_POST['id_ville'] ;

        $fournisseursDataAccess->ajout($id_fournisseur, $nom_entreprise_fournisseur, $adresse_fournisseur, $email_fournisseur, $tel_port_fournisseur, $tel_fixe_fournisseur, $id_ville);
    }
}
    if (isset($_GET['todo']) && $_GET['todo'] == 'supp') {
        $fournisseursDataAccess->suppression($_GET['id_fournisseur']);
    }
    if (isset($_GET['todo']) && $_GET['todo'] == 'modif') {
        if (isset($_POST['id_fournisseur']) && isset($_POST['id_ville'])) {
            $id_fournisseur = $_POST['id_fournisseur'];
            $nom_entreprise_fournisseur = $_POST['nom_entreprise_fournisseur'];
            $adresse_fournisseur = $_POST['adresse_fournisseur'];
            $email_fournisseur = $_POST['email_fournisseur'] ;
            $tel_port_fournisseur = $_POST['tel_port_fournisseur'] ? $_POST['tel_port_fournisseur'] : 'null';
            $tel_fixe_fournisseur = $_POST['tel_fixe_fournisseur'] ? $_POST['tel_fixe_fournisseur'] : 'null';
            $id_ville = $_POST['id_ville'] ;

            $fournisseursDataAccess->modification($id_fournisseur, $nom_entreprise_fournisseur, $adresse_fournisseur, $email_fournisseur, $tel_port_fournisseur, $tel_fixe_fournisseur, $id_ville);
        }
    }
        $data = $fournisseursDataAccess->rechercherTousLesFournisseurs();
    
    
    ?>
<div class="row no-gutters">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-bordered">
                <div class="form-group"><a href="FormulaireFournisseurs.php" style='text-align-right' button class="btn btn-info btn-lg active" role="button" aria-pressed="true" type="button">Ajouter un Fournisseur</button></a>
                </div>

<?php
echo "<th>Numéro du Fournisseur</th>";
    echo "<th>Nom</th>";
    echo "<th>Adresse</th>";
    echo "<th>Email</th>";
    echo "<th>N° de Téléphone Portable</th>";
    echo "<th>N° de Téléphone Fixe</th>";
    echo "<th>N° Ville</th>";
    echo "<th>Editer</th><th>Supprimer</th>";
   
    
    foreach ($data as $objetFournisseur) {
        echo "<tr>
<td>" . $objetFournisseur->getId_fournisseur() . "</td>
<td>" . $objetFournisseur->getNom_entreprise_fournisseur() . "</td>
<td>" . $objetFournisseur->getAdresse_fournisseur() . "</td>
<td>" . $objetFournisseur->getEmail_fournisseur() . "</td>
<td>" . $objetFournisseur->getTel_port_fournisseur() . "</td>
<td>" . $objetFournisseur->getTel_fixe_fournisseur() . "</td>
<td>" . $objetFournisseur->getId_ville() . "</td>";
        echo "<td> <a href='FormulaireFournisseurs.php?id_fournisseur=" . $objetFournisseur->getId_fournisseur() . "&todo=modif'> <button class='btn btn-secondary' > Edit </button> </a></td>";
        echo "<td> <a href='TraitementFournisseurs.php?id_fournisseur=" . $objetFournisseur->getId_fournisseur() . "&todo=supp'><button  class='btn btn-warning'> Delete </button> </a></td>";
    }

        ?>
    </body>

</html>
