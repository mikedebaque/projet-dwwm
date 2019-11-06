<?php
session_start();
if(!isset($_SESSION['islogged']))
{
    $_SESSION['islogged'] = false;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include 'header.php' ?>
</head>
<?php
$errInscription = false;
function fillForm($inputName)
{
    switch($inputName)
    {
        case 'nomInscription':
            echo "value='".$_POST['nomInscription']."'";
            break;
        case 'prenomInscription':
            echo "value='".$_POST['prenomInscription']."'";
            break;
        case 'naissanceInscription':
            echo "value='".$_POST['naissanceInscription']."'";
            break;
        case 'emailInscription':
            echo "value='".$_POST['emailInscription']."'";
            break;
        case 'adresseInscription':
            echo "value='".$_POST['adresseInscription']."'";
            break;
        case 'cpInscription':
            echo "value='".$_POST['cpInscription']."'";
            break;
        case 'villeInscription':
            echo "value='".$_POST['villeInscription']."'";
            break;
        case 'telInscription':
            echo "value='".$_POST['telInscription']."'";
            break;
    }
}
include 'back\Traitement\traitementInscription.php';
?>

<body>
    <main class="container-fluid">
        <div class="row justify-content-center mr-0" style="background-color:#F1F3F5;">
            <form action="#" method="POST">
                <h1 class="d-flex justify-content-center">Inscription</h1>
                <!-- Radio genre -->
                <div class="col-12 d-flex justify-content-around">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexeInscription" id="femmeInscription" value="femme" checked>
                        <label class="form-check-label" for="femmeInscription">
                            Femme
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexeInscription" id="hommeInscription" value="homme">
                        <label class="form-check-label" for="hommeInscription">
                            Homme
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexeInscription" id="autreInscription" value="autre">
                        <label class="form-check-label" for="autreInscription">
                            Autre
                        </label>
                    </div>
                </div>
                <!-- Input nom et prénom -->
                <div>
                    <div class="form-group">
                        <label for="nomInscription">Nom :</label>
                        <input type="text" class="form-control" id="nomInscription" name="nomInscription" placeholder="Nom" <?php $errInscription==true?fillForm('nomInscription'):null; ?> required>
                    </div>
                    <div class="form-group">
                        <label for="prenomInscription">Prénom :</label>
                        <input type="text" class="form-control" id="prenomInscription" name="prenomInscription" placeholder="Prénom" <?php $errInscription==true?fillForm('prenomInscription'):null; ?> required>
                    </div>
                </div>
                <!-- Date de naissance -->
                <div>
                    <div class="form-group">
                        <label for="naissanceInscription">Date de naissance :</label>
                        <input type="date" class="form-control" id="naissanceInscription" name="naissanceInscription" <?php $errInscription==true?fillForm('naissanceInscription'):null; ?> required>
                    </div>
                </div>
                <!-- Adresse email -->
                <div>
                    <div class="form-group">
                        <label for="emailInscription">Adresse e-mail :</label>
                        <input type="email" class="form-control" id="emailInscription" name="emailInscription" placeholder="adresse@email.com" <?php $errInscription==true?fillForm('emailInscription'):null; ?> required>
                    </div>
                </div>
                <!-- Mot de passe -->
                <div class="form-row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="pcwInscription">Mot de passe :</label>
                        <input type="password" class="form-control" id="pcwInscription" name="pcwInscription" required>
                        <small class="text-muted">Votre mot de passe doit être composé d'au moins une majuscule, un chiffre et un caractère spécial.</small>
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="confirmpcwInscription">Confirmez votre mot de passe :</label>
                        <input type="password" class="form-control" id="confirmpcwInscription" name="confirmpcwInscription" required>
                    </div>
                </div>
                <!-- Adresse -->
                <div>
                    <div class="form-group">
                        <label for="adresseInscription">Adresse :</label>
                        <input type="text" class="form-control" id="adresseInscription" name="adresseInscription" placeholder="Votre adresse" <?php $errInscription==true?fillForm('adresseInscription'):null; ?> required>
                    </div>
                    <!-- CP et ville -->
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="cpInscription" name="cpInscription" placeholder="Code postale" <?php $errInscription==true?fillForm('cpInscription'):null; ?> required>
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="villeInscription" name="villeInscription" placeholder="Ville" <?php $errInscription==true?fillForm('villeInscription'):null; ?> required>
                        </div>
                    </div>
                </div>
                <!-- Telephone -->
                <div class="form-group">
                    <label for="adresseInscription">Telephone :</label>
                    <input type="tel" class="form-control" id="telInscription" name="telInscription" <?php $errInscription==true?fillForm('telInscription'):null; ?> placeholder="Telephone">
                </div>
                <!-- Boutons -->

                <div class="form-row">
                    <div class="col-12 d-flex justify-content-around">
                        <input type="reset" class="btn btn-outline-danger btn-lg" value="Annuler">
                        <input type="submit" class="btn btn-outline-success btn-lg" value="Envoyer">
                    </div>
                </div>
                <!-- <input type="submit" class="btn btn-primary" value="Envoyer"> -->
            </form>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>