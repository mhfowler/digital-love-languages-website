
 <div class="accordion-wrapper top-left header-link">
            <a class="accordion broider" href="/lessons">
                <section class="accordion-item">Lessons
                   <div class="accordion-item-content">
                 		<div class="accordion-item-content">
							 <?php
                                    $args = array(
                                      'numberposts' => 100,
                                      'category_name'   => 'Tutorial',
                                      'orderby' => 'post_date',
                                      'order' => 'ASC',
                                      'post_status' => 'publish'
                                    );

                                    $latest_posts = get_posts( $args );

                                    if (empty($latest_posts)) {
                                        echo '<p class="accordion-link"> no lessons yet </p>';
                                    }
                                    else {
                                        foreach($latest_posts as $item) {
                                            $raw_date = $item->post_date;
                                            $date = date_format(date_create($raw_date),"n.j.y");
                                            $title = $item->post_title;
                                            $link = get_permalink($item);
//                                             echo "<p class='lesson-link' data-link='$link'><a href='$link'><span>$title</span></a></p>";
                                            echo "<p class='accordion-link' data-link='$link'>$title</p>";
                                        }
                                    }
                                 ?>
						</div>
                     </div>
                     </section>
                </a>
		</div>