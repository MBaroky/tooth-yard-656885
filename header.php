<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Tooth Yard</title>
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Jenine.css">
    <link rel="stylesheet" href="assets/css/Lenos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700,900&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57" lang="ar" style="font-family: Lenos;font-size: 20px;"><!--for active case and mobile detect: optional-->
<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>


    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container-fluid"><a class="navbar-brand" href="#page-top"><img src="assets/img/logo2.png"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav" id="header-nav" style="direction: rtl;">
                    <li class="nav-item <?= (strpos($activePage , 'index') !== false) ? 'active':''; ?>"><a class="nav-link" href="index.php">الرئيسية</a></li>
                    <li class="nav-item <?= (strpos($activePage , 'services') !== false) ? 'active':''; ?>"><a class="nav-link" href="services.php">الخدمات</a></li>
                    <li class="nav-item <?= (strpos($activePage , 'teeth') !== false) ? 'active':''; ?>"><a class="nav-link px-0" href="teeth.php">صحة الاسنان</a></li>
                    <li class="nav-item <?= (strpos($activePage , 'contact') !== false) ? 'active':''; ?>"><a class="nav-link" href="contact.php">اتصل بنا</a></li>
                </ul>
            </div><a class="btn btn-outline-primary btn-lg d-none d-lg-inline-block" role="button" id="header-phone" href="tel:01066771440">01066771440</a>
        </div>
    </nav>
    <!--end of header.php-->
