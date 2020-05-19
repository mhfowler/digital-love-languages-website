<div class="blog-post">
    <img class="cover-img" src="<?php the_field('cover_image'); ?>"/>

	<h2 class="event-post-title"><?php the_title(); ?></h2>

    <p class="event-date"><?php the_field('event_date'); ?></p>

    <div class="event-content">
        <?php the_content(); ?>
    </div>


</div><!-- /.blog-post -->