<?php
include_once (__DIR__.'/../DataAccess/ClientDAO.php');
include_once (__DIR__.'/../DataAccess/VilleDAO.php');
function alertLogin()
{
    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        L'adresse email ou le mot de passe n'est pas correct.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
}
if(isset($_POST['email']) and !empty($_POST['email'])and
    isset($_POST['pcw']) and !empty($_POST['pcw']))
{
    $email = $_POST['email'];
    $pcw = $_POST['pcw'];
    $clientDAO = new ClientDAO();
    if($clientDAO->isClientExist($email))
    {
        $data = $clientDAO->isClientExist($email);
        if(password_verify($pcw,$data[0]['password_client']))
        {
            $_SESSION['islogged'] = true;
            foreach($data as $val)
            {
                $_SESSION['ID'] = $val['ID_Client'];
                $_SESSION['nom'] = $val['Nom_Client'];
                $_SESSION['prenom'] = $val['Prenom_Client'];
                $_SESSION['adresse'] = $val['Adresse_rue_Client'];
                $_SESSION['email'] = $val['Email_Client'];
                $_SESSION['dateNaissance'] = $val['date_naissance_client'];
                $_SESSION['solde'] = $val['solde_client'];
                $_SESSION['ville'] = $val['ID_Ville'];
            }
        }
        else
        {
            alertLogin();
        }
    }
    else
    {
        alertLogin();
    }
}
if(isset($_GET['deconnexion']))
{
        session_destroy();
        $_GET['deconnexion'] = false;
        header('Location:'.explode('?',$_SERVER['REQUEST_URI'])[0]);
}
