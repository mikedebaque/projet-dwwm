<?php
include_once __DIR__.'../DataAccess/ClientDAO.php';
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
            $_SESSION['logged'] = true;
        }
    }
}
