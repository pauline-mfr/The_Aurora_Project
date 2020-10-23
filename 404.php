<?php get_header()?>

<div class="container">
    <div class="d-flex justify-content-center">
        <h2>Erreur 404 : Page Non Trouvée</h2>
    </div>
    <div class="bg-light rounded pt-5 pb-5">
        <h2 class="text-center pl-5 pr-5 pt-5 pb-5">Désolé la page que vous recherchez n'est plus disponible.</h2>
        <div class="row">
            <div class="col-lg-5">
                <h4 class="pl-3">Effectuer une nouvelle recherche :</h4>
            </div>
            <div class="col-lg-5">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer()?>
