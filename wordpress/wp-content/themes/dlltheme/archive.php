<?php /* Template Name: Archive Template */ ?>

<?php
get_template_part('head');
?>

<?php
get_template_part('header');
?>

	<div class="page-wrapper">
        tastes soon forgotten, archives destroyed, heart waves remain

        <?php echo do_shortcode("[SimpleYearlyArchive]"); ?>
	</div>

<?php
get_template_part('footer');
?>

<?php
get_template_part('foot');
?>