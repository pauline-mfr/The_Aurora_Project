<footer class="mt-5">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-4">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-lg-4">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-lg-4">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <p>Tous Droits Réservés, &copy; <?php echo date('Y') ?> - <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name')  ?></a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>