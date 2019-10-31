<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css\header.css">
<script defer src="js\header.js"></script>
</head>

<body>
    <header class="sticky-top container-fluid bg-dark" style="color: white;">
        <!-- VERSION MOBILE -->
        <div class="d-block d-md-none">
            <div class="row">
                <!-- BURGER MENU -->
                <div class="col-4 d-flex justify-content-center">
                    <button class="navbar-toggler openbtn" onclick="openNav()" type="button">
                        <i style="color:white;" class="fa fa-bars fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- LOGO -->
                <div class="col-4 d-flex justify-content-center">
                    <a class="navbar-brand" href="#"><img class="logo img-fluid" src="media/logo/carrot.svg" alt="" width="70" height="60"></a>
                </div>
                <!-- RECHERCHE -->
                <div class="col-4 d-flex justify-content-center">
                    <button type='submit' class='btn'>
                        <i style="color:white;" class="fa fa-search fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- VERSION DESKTOP -->
        <div class="col-12 d-none d-md-block">
            <div class="row">
                <!-- DIV LOGO ET RAYONS -->
                <div class="col-4 mt-1 d-flex justify-content-around">
                    <a class="navbar-brand" href="#"><img class="logo img-fluid" src="media/logo/carrot.svg" alt="" width="70" height="60"></a>
                    <span class="pt-3"><button type="button" id="btnRayons" class="btn btn-outline-success dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Rayons</button></span>
                </div>
                <!-- DIV BARRE DE RECHERCHE -->
                <div class="col-4 mt-3">
                    <form class='navbar-form'>
                        <div class='input-group'>
                            <input class='form-control' type='text' name='search' placeholder='Rechercher...' />
                            <span class="input-group-btn">
                                <button type='submit' class='btn btn-secondary'>
                                    <i style="color:white;" class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- DIV ICONES PANIER,FAVORIS,PROFILE -->
                <div class="col-4 mt-2 d-flex justify-content-around">
                    <!-- icone panier -->
                    <span class="icon">
                        <button class="btn">
                            <i style="color:white;" class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                            <!-- <i style="color:white;" class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i> -->
                        </button>
                    </span>
                    <!-- icone favoris avec popover -->
                    <span class="icon">
                        <button id="popoverfav" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                            <i style="color:white;" class="fa fa-heart fa-3x" aria-hidden="true"></i>
                        </button>
                    </span>
                    <!-- icone profil -->
                    <span class="icon">
                        <button id="popoverprofil" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                            <i style="color:white;" class="fa fa-user fa-3x" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>


        <!-- Menu déroulant rayons -->
        <div class="pos-f-t menuRayons collapse" id="navbarToggleExternalContent" style="position: absolute; width: 25%;left:0%;">
            <div>
                <div class="bg-dark">
                    <div class="rayons" style="border-bottom: 1px solid black;">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons" style="border-bottom: 1px solid black;">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons" style="border-bottom: 1px solid black;">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons" style="border-bottom: 1px solid black;">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons" style="border-bottom: 1px solid black;">
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
        <div id="profilpopover-content" style="background-color: #343a40;width: 100%;min-width: 25%;min-height: 25%;" hidden>
            <div>
                <p>Je me connecte :</p>
                <form action="">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pcw" id="" required>
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
                    <a href="inscription.php" class="btn btn-success">Créer mon compte</a>
                </div>
            </div>
        </div>

        <!-- SIDEBAR BURGER -->
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></i></a>
            <a href="#">Rayons</a>
            <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Mon panier</a>
            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Mes favoris</a>
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Me connecter</a>
        </div>

    </header>
</body>