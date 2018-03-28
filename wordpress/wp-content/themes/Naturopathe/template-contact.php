<?php
/**
Template Name: Contact
 */
get_header();
?>
    <div class="container">
        <div class="row">
            <h1>Ceci est un test de formulaire :</h1>
            <?php echo do_shortcode('[contact-form-7 id="64" title="Formulaire de contact"]'); ?>
        </div>
    </div>
<?php get_footer(); ?>