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
        <title>Articles</title>
        <meta name='description' content=''>
        <meta name='viewport' content='max-width=device-max-width, initial-scale=1'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel='stylesheet' href='articles_style.css'>

        </i>

        


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='#'>upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        

            <div class='container-fluid'>
            <!-- container du liseret -->
            ";
            include_once("header.php");

//                <!-- le liseret avec l'image de catégorie -->
//                <div class='row'>
//                    <div class='col-md-12 mb-md-12 mb-12'>
//                    <div class='jumbotron'>
//                        <div class='d-flex justify-content-center'><img src='../medias/category_img.png' class='img-fluid' alt='Image de la catégorie' style='max-width: 50%; height: 50%;'></div>
//                    </div>
//                </div>



            <!-- nouvelle ligne de produits -->
            <div class='container-fluid d-flex justify-content-around'>
              <!-- le flex dans le container permet de centrer les articles -->
            <div class='row'>
                <!-- une colonne = un article, agencement 4+4+4 = 12 -->

                <!-- objet 1 -->
                                                        ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "
                    
                <!-- objet 2 -->
                                                            ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "

                <!-- objet 3 -->
                                                            ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "

            <!-- balise fermante ligne -->
            </div>


            <!-- balise fermante container -->    
            </div>



                        <!-- nouvelle ligne de produits -->
                        <div class='container-fluid d-flex justify-content-around'>
                          <!-- le flex dans le container permet de centrer les articles -->
                        <div class='row'>
                            <!-- une colonne = un article, agencement 4+4+4 = 12 -->

                            <!-- objet 1 -->
                                                                    ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "
                                
                            <!-- objet 2 -->
                                    ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "
                                                      
            
            
                            <!-- objet 3 -->
                                    ";
                                    showArticle("2.50€", "Testing", "../medias/article_example.jpg", "Test description");
                                    echo "
            
                        <!-- balise fermante ligne -->
                        </div>
            
            
                        <!-- balise fermante container -->    
                        </div>
            
        
        <script src='' async defer></script>
    </body>
</html>
";

function showArticle($prix, $nomArticle, $lienImg, $description){
    echo "
    <div class='col-md-4 mb-md-4 mb-4 text-center'>
                                            <div class='card' style='width: 18rem;'>
                                                    <img src='$lienImg' class='card-img-top img-fluid' alt='article image'>
                                                    <div class='card-body'>
                                                        <h5 class='card-title text-primary'>$nomArticle</h5>
                                                        <p class='card-text'>$description</p>
                                                        <div class='row d-flex justify-content-between'>
                                                                <h5 class=''>$prix</h5>
                                                                <a href='#' class='btn btn-primary'>Acheter</a>
                                                          </div>
                                                    </div>
                                            </div>
                                    </div>
    ";
}
//fermeture du PHP (le ";)
?>