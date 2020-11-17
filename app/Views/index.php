<?php $title = 'Accueil'; ?>
   
<?php ob_start(); ?>


    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="assets/img/parana/berducB&W.jpeg" style="background-image: url(assets/img/parana/berducB&W.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>FITNESS ELEMENTS</span>
                        <h1>Recipe Search and Diet</h1>
                        <p>Edamam Recipe Search and Diet te permite encontrar <br />recetas para mejorar tu alimentacion</p>
                        <a href="#" class="primary-btn">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="assets/img/coach.jpeg" alt="">
                        <!--<a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="assets/img/play.png" alt="">
                        </a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>A propone de la clase</h2>
                        <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                            sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                            cursus a amet.</p>
                        <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida
                            quam semper libero sit amet. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                            rhoncus, gravida quam semper libero sit amet.</p>
                        <a href="/about" class="primary-btn">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="assets/img/parana/JPHome2BW.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="assets/img/services/service-icon-1.png" alt="">
                                    <h4>Fun</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="assets/img/services/service-icon-3.png" alt="">
                                    <h4>Tonifica</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="assets/img/services/service-icon-2.png" alt="">
                                    <h4>Intenso</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="assets/img/services/service-icon-4.png" alt="">
                                    <h4>Quema calorias</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Actividades recientes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php foreach($posts as $post) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog-item">
                            <?= view_cell('\App\Libraries\Blog::postItem', $post); ?>   
                            </div>
                        </div>
                     <?php endforeach; ?>
                 
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

       

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>