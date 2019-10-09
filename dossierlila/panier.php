<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <link rel="stylesheet" href="style.css">
       
        <title>Panier</title>
        
    </head>
    <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>



     <header class="sticky-top" >
        
        <nav class=" navbar-expand-lg navbar-dark bg-dark container-fluid">
            <div class="row">
            
                <!-- LOGO et Dropdown Rayons -->
                 <div class="col-sm-12 col-md-12 col-lg-4 nav justify-content-around">
                    <a class="navbar-brand" href="#"><img class="logo img-fluid" src="media/logo/logo-5.svg" alt="" width="128" height="60"></a>
                    <span class="pt-3"><button type="button" class="h-50 btn btn-outline-success dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Rayons</button></span>
                </div>
                <!-- Div searchbox -->
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-4 pt-3'>
                    <form class='navbar-form'>
                        <div class='input-group'>
                            <input class='form-control' type='text' name='search' placeholder='Rechercher...' />
                            <span class="input-group-btn">
                                <button type='submit' class='btn btn-outline-secondary'>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- Div icons -->
                 <div class="col-md-12 col-sm-12 col-lg-4 nav pt-2 justify-content-around">
                    <!-- icone panier -->
                    <span class="icon">
                        <button class="btn">
                            <i style="color:white;" class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                        
                        </button>
                    </span> -->
                    <!-- icone favoris avec popover -->
                   <span class="icon">
                        <button id="popoverfav" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                            <i style="color:#f263ce;" class="fa fa-heart fa-3x" aria-hidden="true"></i>
                        </button>
                    </span> 
                    <!-- icone profil -->
                     <span class="icon">
                        <button id="popoverprofil" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true"> -->
                            <i style="color:white;" class="fa fa-user-circle fa-3x" aria-hidden="true"></i> 
                         </button>
                    </span>
                </div>
            </div>
        </nav>  
        <!-- Menu déroulant rayons -->
         <div class="pos-f-t" id="menuRayons">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark">
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                </div>
            </div>
        </div>  


        <!-- FAV POPOVER CONTENT -->
         <div id="favpopover-content" hidden>
            <div>
                <p>Vous devez être connecté pour utiliser les favoris.</p>
                <input class="btn btn-success" type="submit" value="Je me connecte">
            </div>
        </div>
        <!-- PROFIL POPOVER CONTENT -->
       <div id="profilpopover-content" hidden>
            <div>
                <p>Je me connecte :</p>
                <form action="">
                    <div class="form-group">
                        <input class="form-control" type="email" name="" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="" id="" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Se souvenir de moi</label>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Je me connecte"> 
                     </div>
                </form>
                <hr>
                <div>
                    <p>Vous n'avez pas de compte ?</p>
                    <input class="btn btn-success" type="submit" value="Créer mon compte">
                </div>
            </div>
        </div> 


   </header> 
                  
                    <!-- conteneur de gauche -->
                    <div class="container-fluid">
                    <div class="row ">
                    <section  class="col-lg-8"> 
                    <div class="jumbotron">
                   
                    <img src="carrots-2387394_640.jpg" class="img-fluid" alt="carotte"><h4>Article</h4>Quantité -1+
        </div>

        <div class="jumbotron">
                    <img src="apple-1589874_640.jpg" class="img-fluid" alt="pommes"><h4>Article</h4>Quantité -1+

        </div>

        <div class="jumbotron">
                    <img src="fruit-1534494_640.jpg" class="img-fluid" alt="poires"><h4>Article</h4>Quantité -1+

        </div>

</section>

                <!-- conteneur de droite -->
                
                
                <div class="col-lg-4">
              
        <!-- <div id=menu  style="position:absolute;top:200px;width:200px"> -->
        
                <div class="jumbotron">
                <h3>Recapitulatif</h3><br/>
                <em>Total : xxxeuros</em><br/>
                <br/>
                <em>Reduction : xxxeuros</em><br/>
                <br/>
                <em>Montant Total : xxxeuros</em> <br/>
                <br/>
                 <em>Code Promo</em>
         
            </div>
                    </div>
    </div>      
                    
                    </div>

                </div>
        </div>
        </div>
        </div>
                </body>
            </html> 