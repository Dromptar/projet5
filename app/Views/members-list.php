<?php $title = 'Members'; ?>

<?php ob_start(); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="assets/img/robotitorz.jpeg" style="background-image: url(assets/img/robotitorz.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Admin Space</h2>
                    <div class="breadcrumb-option">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Class</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<p id="showMembers"><button class="showMembers">Muetrame los usuarios</button></p>

<section>
    <div id="members">
        <?php foreach ($members as $member) : ?>
            <p>
                <?= $member->username ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>



<script src="/assets/js/sweetAlert.js"></script>
<script src="/assets/js/adminSpace.js"></script>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>