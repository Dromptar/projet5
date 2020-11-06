<?php $title = 'Connectate'; ?>
   
<?php ob_start(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets/img/robotitorz.jpeg" style="background-image: url(assets/img/robotitorz.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Connectate</h2>
                        <div class="breadcrumb-option">
                            <a href="/home"><i class="fa fa-home"></i> Home</a>
                            <span>Connectate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Register Section Begin -->
    <section class="register-section classes-page spad">
        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Ingreso!</h2>
                            </div>
                            <form  class="register-form" method="POST" action="connection">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">Pseudo</label>
                                        <input type="text" id="name" name="username">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last-name">Contrasena</label>
                                        <input type="password" id="last-name" name="pass">
                                    </div>
                                </div>
                                <button type="submit" class="register-btn">A Entrenar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="register-pic">
                            <img src="assets/img/parana/team2.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->

    
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>