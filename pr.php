<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nação Kitady-Studios</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Team-icons.css">
</head>

<body style="background: rgb(253,253,254);">
   
        <?php
        if (isset($_GET['p'])) {
            if ($_GET['p']=='login') {
                include "controller/paginas.php";
            }else {
                include "view/cabecalho.html";
                include "controller/paginas.php";
                include "docs/rodape.html";
            }
        
        }else {
            include "docs/cabecalho.html";
            include "controller/paginas.php";
            include "docs/rodape.html";
        }
    
        ?>

  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
    <script src="assets/js/Lightbox-Gallery-No-Gutters.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>