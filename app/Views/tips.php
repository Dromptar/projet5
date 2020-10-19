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

    <!-- Register Section Begin -->
    <section class="register-section classes-page spad">
        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Crea tu cuenta !</h2>
                                <p>La primera clase con nosotros es gratis ! </p>
                            </div>
                            <form  class="register-form" method="POST" action="register">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">Pseudo</label>
                                        <input type="text" id="name" name="pseudo">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">E-mail</label>
                                        <input type="text" id="email" name="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last-name">contrasena</label>
                                        <input type="password" id="last-name" name="pass">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile">Telefono</label>
                                        <input type="text" id="mobile" name="phone">
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