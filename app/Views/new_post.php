<?php $title = 'New Post'; ?>
   
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

    <section class="register-section classes-page spad">
        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Create a new post !</h2>
                            </div>
                            <form action="post" class="register-form" action="/blog/newPost">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">Title</label>
                                        <input type="text" id="name" name="title">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Content</label>
                                        <textarea id="" name="content"></textarea>
                                    </div>
                                <button type="submit" class="register-btn">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>