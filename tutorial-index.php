<?php
/*
Template Name: Tutorial Index
*/
?>

<?php
get_template_part('head');
?>

<div class="center-pane">

    <?php
    get_template_part('header');
    ?>

    <div class="blog-index-wrapper">
        <?php
            $args = array(
              'numberposts' => 100,
              'category_name'   => 'Tutorial',
              'orderby' => 'post_date',
              'order' => 'DESC',
              'post_status' => 'publish'
            );

            $latest_posts = get_posts( $args );

            if (empty($latest_posts)) {
                echo '<p class="table-of-contents"> waiting to be written </p>';
            }
            else {

                echo '<p class="table-of-contents"> Tutorials </p>';

                foreach($latest_posts as $item) {
                    $raw_date = $item->post_date;
                    $date = date_format(date_create($raw_date),"n.j.y");
                    $title = $item->post_title;
                    $link = get_permalink($item);
//                     echo "<div class='post-link'><a href='$link'><span>$title ($date)</span></a></div>";
                    echo "<div class='post-link'><a href='$link'><span>$title</span></a></div>";
//                     echo '<pre>'; var_dump($item);
                }
            }
         ?>
    </div>

</div>

<?php
get_template_part('foot');
?>