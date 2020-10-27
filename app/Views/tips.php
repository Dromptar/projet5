<?php $title = 'Tips'; ?>
   
<?php ob_start(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets/img/robotitorz.jpeg" style="background-image: url(assets/img/robotitorz.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Truquitos</h2>
                        <div class="breadcrumb-option">
                            <a href="/home"><i class="fa fa-home"></i> Home</a>
                            <span>Class</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="about-section about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="assets/img/truquito.jpg" alt="">
                        <!--<a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Bienvenidos a los "truquitos" del Coach!</h2>
                        <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                            sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                            cursus a amet.</p>
                        <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida
                            quam semper libero sit amet.</p>
                        <img src="img/about-signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <video src="assets/img/rutinaBrazos.mp4" controls></video>

    
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>