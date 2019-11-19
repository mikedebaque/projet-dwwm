<?php
echo "

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8'> <![endif]-->
<!--[if IE 8]>         <html class='no-js lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js'> <!--<![endif]-->
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Paiement</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel='stylesheet' href='paiement_style.css'>
    </head>


    <body>
        <!--[if lt IE 7]>
            <p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='#'>upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- le titre Paiement -->
        <div class='container d-flex justify-content-center'>
            <div class='row'>
                <div class='column'>
                        <h1 class='text-center'>Paiement</h1>
                </div>
            </div>
        </div>

            <!-- FORMULAIRE -->
            <!-- début de l'encadré du formulaire -->
        <div class='container  body-content border mt-4' id='bgForm'>
            <div class='row d-flex justify-content-center'>
                <div class='column'>
                    <form>
                          <label for='adresse'></label>
                          <input type='text' class='text-center form-control' id='adresse' 
                          aria-describedby='adresseFact' placeholder='Adresse de facturation' readonly>
                          <small id='adFact' class='form-text text-muted'></small>
                        </div>
            </div>
            <div class='row d-flex justify-content-center'>
                    <div class='column'>
                        <form>
                            <label for='solde'></label>
                            <input type='text' class='text-center form-control' id='solde' 
                            aria-describedby='solde' placeholder='Solde actuel' readonly>
                            <small id='solF' class='form-text text-muted'></small>
  
                    </div>
                </div>
            <div class='row d-flex justify-content-center'>
                    <div class='column'>
                        <form>
                            <label for='montant'></label>
                            <input type='text' class='text-center form-control' id='montant' 
                            aria-describedby='montant_a_payer' placeholder='Montant à régler' readonly>
                            <small id='montF' class='form-text text-muted'></small>  
                    </div>
                </div>
            <div class='row'></div> <!-- espacement -->
            <div class='row mt-4 d-flex justify-content-center'>
                <h4>Réception de votre commande</h4>
            </div>
            <div class='row mt-2 d-flex justify-content-center'>
                <i>Choisissez un créneau préférentiel</i>
            </div>

            <!-- ATTENTION! code récupéré sur outil extérieur, à bien analyser en cas de retouche -->
            <div class='row mt-2'>
            <!-- Date sélection -->
                        <div class='col-sm-6'>
                        </div>
            <!-- Heure sélection -->
                        <div class='col-sm-6'>
                        </div>
            <!-- div de fin de ligne -->
            </div>

            <!-- boutons -->
            <div class='row d-flex justify-content-center mt-5'>
                <div class='column md-6'>
                    <button type='button' class='btn btn-outline-danger btn-lg mr-5'>Annuler</button>
                    </div>
                <div class='column md-6'>
                    <button type='button' class='btn btn-outline-success btn-lg'>Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

            
        


        

        
        <script src='' async defer></script>
    </body>


    <footer>
        <!-- espace complété plus tard -->
    </footer>
</html>
";
?>