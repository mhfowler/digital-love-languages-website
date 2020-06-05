<?php
get_template_part('head');
?>

<div class="center-pane">

    <?php
    get_template_part('header');
    ?>

    <div class="page-wrapper info-page">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'page-content', get_post_format() );
            endwhile; endif;
        ?>
    </div>

</div>

<?php
get_template_part('foot');
?>