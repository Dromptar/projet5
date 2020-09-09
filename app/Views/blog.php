<?php $title = 'Actividades'; ?>
   
<?php ob_start(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets/img/robotitorz.jpeg" style="background-image: url(assets/img/robotitorz.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
            <?php foreach($posts as $post) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <?= view_cell('\App\Libraries\Blog::postItem', ['title' => $post]); ?>   
                    </div>
                </div>
             <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>