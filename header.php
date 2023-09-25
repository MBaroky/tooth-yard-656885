<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Tooth Yard</title>
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png?h=bc088946b1f960e7c180fd65c4e4348b">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png?h=bc088946b1f960e7c180fd65c4e4348b">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png?h=bc088946b1f960e7c180fd65c4e4348b">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png?h=bc088946b1f960e7c180fd65c4e4348b">
    <link rel="icon" type="image/png" sizes="66x67" href="assets/img/favicon.png?h=bc088946b1f960e7c180fd65c4e4348b">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=acd2ad5483c39228b0b05d99bccc69f5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700,900&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=54d09f91e88eea0a052c98a09c02ba2b">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=480c050ec93cb8dbdcc5f2e56b5165c7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57" lang="ar" style="font-family: Lenos;font-size: 20px;"><!--for active case and mobile detect: optional-->
<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>


    <nav class="navbar navbar-light navbar-expand-md fixed-top py-4" id="mainNav">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3"><a class="navbar-brand" href="#page-top"><img src="assets/img/logo2.png?h=4452706a2ae2b2db72d525a5c1181aec"></a></div>
                    <div class="col text-end d-md-flex justify-content-sm-end align-items-md-center"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right mt-2" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="height: 60px;"><i class="fa fa-align-justify"></i></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto" id="header-nav" style="direction: rtl;max-width: 550px;">
                                <li class="nav-item <?= (strpos($activePage , 'index') !== false) ? 'active':''; ?>"><a class="nav-link" href="index.php">الرئيسية</a></li>
                                <li class="nav-item <?= (strpos($activePage , 'services') !== false) ? 'active':''; ?>"><a class="nav-link" href="services.php">الخدمات</a></li>
                                <li class="nav-item <?= (strpos($activePage , 'teeth') !== false) ? 'active':''; ?>"><a class="nav-link px-0" href="teeth.php">صحة الاسنان</a></li>
                                <li class="nav-item <?= (strpos($activePage , 'contact') !== false) ? 'active':''; ?>"><a class="nav-link" href="contact.php">اتصل بنا</a></li>
                            </ul>
                        </div><a class="btn btn-outline-primary btn-lg d-none float-end d-lg-inline-block" role="button" id="header-phone" href="tel:01066771440">01066771440</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--end of header.php-->
