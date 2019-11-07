<?php 
$page = get_page_by_path("equipo");

$posts = get_posts(array(
    "post_type"     =>      "equipo",
    "post_status"   =>      "publish",
    "numberposts"   =>      -1
));

?>

<section id="equipo">

    <div>
        <div class="container-fluid">

            <h2><?php echo $page->post_title ?></h2>
            <?php echo $page->post_content ?>

            <div class="team" data-aos="fade-up">
                
                <?php 
                foreach ($posts as $key => $value) {
                    if($key <= 2){
                        ?>
                        <div class="item">
                            <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $value->ID, "medium") ?>)"></div>
                            <h5><?php echo $value->post_title ?></h5>
                            <p><?php echo get_post_meta($value->ID, "cargo")[0] ?></p>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>

        </div>
    </div>

    <div class="bgGrey">

        <div class="container-fluid">

            <!-- <h2>Equipo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

            <div class="team" data-aos="fade-up">

                <?php 
                foreach ($posts as $key => $value) {
                    if($key > 2){
                        ?>
                        <div class="item">
                            <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $value->ID, "medium_large" ) ?>)"></div>
                            <div class="body">
                                <h5><?php echo $value->post_title ?></h5>
                                <div class="date"><?php echo get_post_meta($value->ID, "date")[0] ?></div>
                                <?php echo $value->post_content ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>

        </div>

    </div>

</section>