<?php
include_once (__DIR__.'/../DataAccess/ClientDAO.php');
include_once (__DIR__.'/../DataAccess/VilleDAO.php');

if((isset($_POST['nomInscription']) and !empty($_POST['nomInscription']))and
(isset($_POST['prenomInscription']) and !empty($_POST['prenomInscription']))and
(isset($_POST['emailInscription']) and !empty($_POST['emailInscription']))and
(isset($_POST['pcwInscription']) and !empty($_POST['pcwInscription']))and
(isset($_POST['confirmpcwInscription']) and !empty($_POST['confirmpcwInscription']))and
(isset($_POST['adresseInscription']) and !empty($_POST['adresseInscription']))and
(isset($_POST['naissanceInscription']) and !empty($_POST['naissanceInscription']))and
(isset($_POST['cpInscription']) and !empty($_POST['cpInscription']))and
(isset($_POST['villeInscription']) and !empty($_POST['villeInscription']))and
(isset($_POST['telInscription']) and !empty($_POST['telInscription'])))
{
    $nom = $_POST['nomInscription'];
    $prenom = $_POST['prenomInscription'];
    $email = $_POST['emailInscription'];
    $pcw = $_POST['pcwInscription'];
    $confirmPcw = $_POST['confirmpcwInscription'];
    $adresse = $_POST['adresseInscription'];
    $cp = $_POST['cpInscription'];
    $ville = ucfirst(strtolower($_POST['villeInscription']));
    $date = $_POST['naissanceInscription'];
    $tel = $_POST['telInscription'];
    $villeDAO = new villeDAO();
    $clientDAO = new ClientDAO();

    if(($clientDAO->isClientExist($email)==false) and (filter_var($email,FILTER_VALIDATE_EMAIL)!=false))
    {
        if(($pcw == $confirmPcw) and (filter_var($email,FILTER_VALIDATE_EMAIL)!=false))
        {
            $hashedPcw = password_hash($pcw,PASSWORD_DEFAULT);
            $isVilleExist = $villeDAO->isVilleExist($ville,$cp);
            if($isVilleExist)
            {
                $clientDAO->addClient($nom,$prenom,$adresse,$email,$tel,$date,$hashedPcw,$isVilleExist);
            }
            else
            {
                $villeDAO->addVille($ville,$cp);
                $isVilleExist = $villeDAO->isVilleExist($ville,$cp);
                $clientDAO->addClient($nom,$prenom,$adresse,$email,$tel,$date,$hashedPcw,$isVilleExist);
            }
        }
    }
    else
    {
        $errInscription = true;
        echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        Cette adresse email est déjà utilisé.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
    }
}