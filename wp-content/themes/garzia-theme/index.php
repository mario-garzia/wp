<?php get_header(); ?>
<div class="row">
    <div class="col-md-12 welcome">
        <h1><?php bloginfo('name') ?></h1>
        <h4><?php bloginfo('description') ?></h4>
    </div>
</div>
</div>
</div>
<div class="row" id="contact">
    <div class="col-lg-12 text-center">
        <h1>Contact us</h1>
        <h3>For information, suggestions, reports, and more</h3>
    </div>
</div>
<form>
    <?php echo do_shortcode('[contact-form-7 id="6" title="Modulo di contatto 1"]'); ?>
</form>
</div>
</div>
<?php get_footer(); ?>

