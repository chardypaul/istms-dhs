<?php
use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\widgets\ActiveForm;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;
AppAsset::register($this);
$this->title = 'Home | ISTMS-DHS';
?>
<head>
    <script src="js/wow.js"></script>
</head>
    <header id="index">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">ISTMS - Document Handling System</h1>
                <hr>
                <p>A System made for the DILG - Information System and Technology Management Service (ISTMS) to organize and to manage their documents easily.</p>
                <a href="#about" class="page-scroll btn btn-primary btn-xl sr-button">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us!</h2>
                    <hr class="light">
                    <p class="text-faded">This website is use to view the documents inside the ISTMS Department.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
     <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-files-o text-primary sr-icons"></i>
                        <h3>View</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-download text-primary sr-icons"></i>
                        <h3>Download</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                        <h3>Ewan ko kay caones haha</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section id="contact" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact us!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
