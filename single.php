<?php
get_template_part('head');
?>

<?php
get_template_part('header');
?>

    <a href="/archive"><div class="back-to-all-events">
    ← Back To Archive
    </div></a>

	<div class="post-wrapper">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
            endwhile; endif;
        ?>
	</div>


<?php
get_template_part('foot');
?>