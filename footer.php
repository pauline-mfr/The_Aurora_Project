<footer class="mt-5">
    <div class="container-fluid pt-5">

        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <p>Tous Droits Réservés, &copy; <?php echo date('Y') ?> - <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name')  ?></a></p>
            <div class="float-right ml-3">
                <a href="#" class="to-the-top"><i class="far fa-arrow-alt-circle-up fa-2x" title="Retour vers le haut"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>