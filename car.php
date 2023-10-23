<?php
session_start();

if(isset($_POST['logout'])) {
    // Détruire la session lorsqu'un utilisateur se déconnecte
    session_destroy();  
    header('Location:connexion.php');
}

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> SUPERCAR VOITURES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>supercarmaj@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 style = "color: #dc3545" > SUPERCAR 
                        <font style="vertical-align: inherit;"><img src="img/logo.png" width="80px" height="80px"></font>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Acceuil</a>
                 
                    <a href="car.php" class="nav-item nav-link">Voitures</a>

                    <a href="traitement/dmdessai_vierge.php" class="nav-item nav-link">Demande d'essai</a>

                    <a href="service.php" class="nav-item nav-link">Services</a>

                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                    <div class="nav-item dropdown">
                        <?php
                        if(isset($_SESSION['prenom'])) {
                            echo '<a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown"><i class="fas fa-user"></i>'. $_SESSION['prenom'] .'</a>';
                            echo '<div class="dropdown-menu rounded-0 m-0">';
                            echo '<form method="post"><button type="submit" class="dropdown-item" name="logout">Déconnexion</button></form>';
                            echo '</div>';
                        } else {
                            echo '<a href="connexion.php" class="nav-link"><i class="fas fa-user"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    
    
      
    
    <!-- Search Start -->
    
            
        <form action="recherche/recherche.php" method="post">
    
        <div class="container-fluid bg-white pt-3 px-lg-5">
             <div class="row mx-n2">
                     <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                          <select class="custom-select px-4 mb-3" style="height: 50px;" name="voiture_marque">
                              <option selected value="">Marque de la voiture</option>
                          
                              <option value="Ford">Ford</option>
                             <option value="Mazda">Mazda</option>
                            <option value="Man">Man</option>
                             <option value="Mercedes-Benz">Mercedes-Benz</option>
                              <option value="Mitsubishi">Mitsubishi</option>
                             <option value="Nissan">Nissan</option>
                             <option value="Peugeot">Peugeot</option>
                               <option value="Renault">Renault</option>
                              <option value="Toyota">Toyota</option>
                            <option value="Volkswagen">Volkswagen</option>
                         </select>
                     </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                         <div class="" id="" data-target-input="nearest">
                              <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Nom de la voiture" name="voiture_nom">
                         </div>
                   </div>
                   <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                        <select class="custom-select px-4 mb-3" style="height: 50px;" name="transmission">
                            <option selected value="" >Transmission</option>    
                            <option value="Automatique">Automatique</option>
                            <option value="Manuelle">Manuelle</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                        <select class="custom-select px-4 mb-3" style="height: 50px;" name="carburant">
                            <option selected value="" >Carburant</option>
                            <option value="Essence">Essence</option>
                            <option value="Diesel">Diesel</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                        <select class="custom-select px-4 mb-3" style="height: 50px;" name="type">
                            <option selected value="">Type de la voiture</option>
                            <option value="CUV">CUV</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Fourgon">Fourgon</option>
                        </select>
                    </div>
            
           
                      <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                          <button type="submit" class="btn btn-primary btn-block mb-3"  style="height: 50px;" value="Rechercher" >Rechercher</button>     
                     </div>      
               </div>
          </div>
        </form>

    <!-- Search End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Liste</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Pickup</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="#fourgon">Fourgon</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="#suv">CUV</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->

        <!-- Categorie 4x4-->
    <!-- Rent A Car Start -->
    
    <div class="container-fluid py-5" id="pickup">
    <div class="container pt-5 pb-3">

    <?php
$conn = mysqli_connect("localhost", "root", "", "supercar");
$sql_categorie = "SELECT * FROM voiture_categorie";
$result_categorie = $conn->query($sql_categorie);

echo '<div class="container">';
if ($result_categorie->num_rows > 0) {
    while ($row_categorie = mysqli_fetch_assoc($result_categorie)) {
        echo '<h1 class="display-4 text-uppercase text-center mb-5">' . $row_categorie['nom_categorie'] . '</h1>';
        echo '<div class="row">';
        $sql_voiture = "SELECT v.*, i.*

        FROM voiture v

        INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture

        INNER JOIN voiture_categorie vc ON v.voiture_type = vc.nom_categorie

        WHERE vc.nom_categorie = '" . $row_categorie['nom_categorie'] . "' AND (i.sre LIKE '%(1)%' OR i.sre NOT LIKE '%(1)%')

        GROUP BY v.id_voiture";
        $result_voiture = $conn->query($sql_voiture);
        if ($result_voiture->num_rows > 0) {
            while ($row_voiture = mysqli_fetch_assoc($result_voiture)) {
                echo '<div class="col-lg-4 col-md-6 mb-2">';
                echo '    <div class="rent-item mb-4">';
                echo '      <form action="detail/detail_voiture.php" method="post">';
                echo '       <img class="img-fluid mb-4" src="' . $row_voiture['sre'] . '" alt="">';
                echo '       <h4 class="text-uppercase mb-4">' . $row_voiture['voiture_marque'] . ' &nbsp' . $row_voiture['voiture_name'] . '</h4>';           
                echo '       <p style="color:#898a94"> Puissance: ' . $row_voiture['voiture_puissance'] . '</p>';
                echo '       <div class="d-flex justify-content-center mb-4">';
                echo '            <div class="px-2">';
                echo '                <i class="fa fa-car text-primary mr-1"></i>';
                echo '                <span style="color:#898a94">' . $row_voiture['voiture_annee'] . '</span>';
                echo '            </div>';
                echo '           <div class="px-2 border-left border-right">';
                echo '                <i class="fa fa-cogs text-primary mr-1"></i>';
                echo '                <span style="color:#898a94">' . $row_voiture['voiture_transmission'] . '</span>';
                echo '           </div>';
                
                echo '       </div>';          
                echo '      <input type="submit" class="btn btn-primary px-3" value="Voir plus de détail">';
                echo '      <input type="hidden" value="'.$row_voiture['id_voiture'].'" name="id_voiture">';
                echo '      </form>';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo '<h1 class="display-4 text-uppercase text-center mb-5">Aucun résultat</h1>';
        }
        echo '</div>';
    }
} else {
    echo '<h1 class="display-4 text-uppercase text-center mb-5">Aucun résultat</h1>';
}
echo '</div>';
mysqli_close($conn);

  ?>
    </div>
</div>

    <!-- Rent A Car End -->


     <!-- Vendor Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
               
            </div>
        </div>
    </div>
    <!-- Vendor End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Contactez-nous</h4>
                <p class="mb-2" style="color:#898a94"><i class="fa fa-map-marker-alt text-white mr-3"></i>Av des Capucines, Quatres Bornes, Mauritius</p>
                <p class="mb-2" style="color:#898a94"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p style="color:#898a94"><i class="fa fa-envelope text-white mr-3"></i>supercarmaj@gmail.com</p>
                
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Liens utiles</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Politique de confidentialité</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Termes & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Retour & Remboursement</a>
        
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="E-mail">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">S'enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Supercar</a>. Tous droits reservés.</p>
        <p class="m-0 text-center text-body"><a href="https://htmlcodex.com"></a></p>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>