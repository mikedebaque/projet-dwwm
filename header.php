<header class="sticky-top">
    <nav class=" navbar-expand-lg navbar-dark bg-dark container-fluid">
        <div class="row">
            <!-- LOGO et Dropdown Rayons -->
            <div class="col-sm-12 col-md-12 col-lg-4 nav justify-content-around">
                <a class="navbar-brand" href="#"><img class="logo img-fluid" src="media/logo/logo-5.svg" alt="" width="128" height="60"></a>
                <span class="pt-3"><button type="button" id="btnRayons" class="h-50 btn btn-outline-success dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Rayons</button></span>
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
                        <!-- <i style="color:white;" class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i> -->
                    </button>
                </span>
                <!-- icone favoris avec popover -->
                <span class="icon">
                    <button id="popoverfav" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                        <i style="color:#f263ce;" class="fa fa-heart fa-3x" aria-hidden="true"></i>
                    </button>
                </span>
                <!-- icone profil -->
                <span class="icon">
                    <button id="popoverprofil" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                        <i style="color:white;" class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </div>
    </nav>
    <!-- Menu déroulant rayons -->
    <div class="pos-f-t menuRayons collapse" id="navbarToggleExternalContent">
        <div>
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
                <a href="inscription.php" class="btn btn-success">Créer mon compte</a>
            </div>
        </div>
    </div>
</header>