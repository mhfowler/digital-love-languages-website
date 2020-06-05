<?php
get_template_part('head');
?>

<div class="center-pane">

    <?php
    get_template_part('header');
    ?>

    <div class="post-outer-wrapper">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content-single', get_post_format() );
            endwhile; endif;
        ?>
    </div>

</div>

<?php
get_template_part('foot');
?>