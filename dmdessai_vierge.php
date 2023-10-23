<?php
session_start();

if(isset($_POST['logout'])) {
    // Détruire la session lorsqu'un utilisateur se déconnecte
    session_destroy();  
    header('Location:connexion.php');

}
if (!isset($_SESSION['prenom'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion.
    header('Location: traitement/dmdessai.php');
    exit();
 }

 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SUPERCAR DEMANDE D'ESSAI</title>
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
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Search Start -->


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Demande d'essai</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0"><a class="text-white" href="service.php">Services</a></h6>
    </div>
</div>
<!-- Page Header Start -->

<!--formulaire-->
<p> <center style="color:#898a94">Bienvenue sur notre formulaire de demande d'essai, pour être recontacté afin de convenir d'un RDV pour l'essai du véhicule de votre choix,<br> merci de remplir tous les champs du formulaire ci-dessous : </center></p>
<center>
    <br>

    <div class="col-md-7 col-lg-6 mb-2">
        <form action="traitement/traitement1.php" method="post">

            <div class="bg-secondary p-5">
            
                <h3 class="text-primary text-center mb-4">FORMULAIRE DE DEMANDE D'ESSAIS</h3>

                <div class="form-group">
                    <?php
                           
                            echo '<p style="color:#898a94">Marque de la voiture</p>';
                            echo '<div class="form-group">';
                            echo '<input type="text" class="form-control p-4" value='.$marque. ' name="marque">';
                            echo '</div>';

                            echo '<p style="color:#898a94">Nom de la voiture</p>';
                            echo '<div class="form-group">';
                            echo '<input type="text" class="form-control p-4" value='.$v_nom.' required name="v_nom">';
                            echo '</div>';

                            echo '<p style="color:#898a94">Type de la voiture</p>';
                            echo '<div class="form-group">';
                            echo '<input type="text" class="form-control p-4" value='.$type.' required name="type">';
                            echo '</div>';

                            echo '<p style="color:#898a94">Transmission</p>';
                            echo '<div class="form-group">';
                            echo '<input type="text" class="form-control p-4" value='.$transmission.' required name="transmission">';
                            echo '</div>';

                    ?>

                </div>
                <div class="form-group">
                    <p style="color:#898a94">Saisissez vos coordonnées</p>
                    <select class="custom-select px-4" style="height: 50px;" name="civilite">

                     <option value="M.">M.</option>
                        
                     <option value="Mme">Mme</option>
                        
                     <option value="Mlle">Mlle</option>
                        
                    </select>

                </div>
                <div class="form-group">
                    <input type="text" class="form-control p-4" placeholder="Nom*" required name="nom">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control p-4" placeholder="Prénom*" required name="prenom">
                </div>
           
            <p style="color:#898a94">Veuillez indiquez la date et l'heure de votre demande d'essais</p>
                <div class="form-group">
                    <div class="date" id="date1" data-target-input="nearest">
                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Date*"
                           data-toggle="datetimepicker"  name="dates">
                    </div>
                </div>
                <select  placeholder="Heure*"  class="custom-select px-4" style="height: 50px;" name="heure">
                    <option value="9h-10h">9h-10h</option>
                    <option value="11h-12h">11h-12h</option>
                    <option value="13h-14h">13h-14h</option>
                    <option value="15h-16h">15h-16h</option>
                    </select>
                
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Valider votre demande</button>
                    <input class="btn btn-primary btn-block" type="reset">
                </div>

            </div>

        </form>
</div>
</div>
</center>
<!--formulaire end-->

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