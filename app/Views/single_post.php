<?php $title = 'single Post'; ?>
   
<?php ob_start(); ?>

  

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="/assets/img/robotitorz.jpeg" style="background-image: url(/assets/img/robotitorz.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bd-hero-text">
                        <span>Actividad</span>
                        <h2><?= $singlePost['post_title'] ?></h2>
                        <a href="/blog"><i class="fa fa-home"></i>Actividades</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->


    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-text">
                        <div class="bd-title">
                            <h1><?= $singlePost['post_title'] ?></h1>
                        </div>
                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="./uploads/images/blog/<?= $singlePost['picture']?>">
                                </div>
                                <div class="col-lg-6">
                                    <img src="/assets/img/blog/bd-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                            <?= $singlePost['post_content'] ?>
                            </div>
                        </div>
                        <div class="bd-quote">
                            <samp>"</samp>
                            <p>Quote</p>
                            <div class="quote-author">
                                <h5>quote author</h5>
                            </div>
                        </div>
                       
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Camera</a>
                                <a href="#">Photography</a>
                                <a href="#">Tips</a>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>                               
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ba-pic">
                                        <img src="/assets/img/admin.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="ba-text">
                                        <h5> <?= $singlePost['author'] ?></h5>
                                        <div class="bt-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h3>Leave A Comment</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section recommend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Lee tambien!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4><a href="#">10 States At Risk of Rural Hospital Closures</a></h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Sport</a>
                        </div>
                        <h4><a href="#">Diver who helped save Thai soccer team</a></h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Body</a>
                        </div>
                        <h4><a href="#">Man gets life in prison for stabbing</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <a href="/blog/deletePost/<?= $singlePost['post_id'] ?>" class="primary-btn">Delete</a>
    <a href="/blog/editPost/<?= $singlePost['post_id'] ?>" class="primary-btn">Edit</a>


<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>