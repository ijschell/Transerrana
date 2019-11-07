<?php 
$page = get_page_by_path("sobre-nosotros");

$posts = get_posts(array(
    "post_type"     =>      "sobre_nosotros_box",
    "post_status"   =>      "publish",
    "numberposts"   =>      -1
));

?>

<section id="sobreNosotros">

    <div class="container-fluid">

        <h2 class="without"><?php echo $page->post_title ?></h2>
        <?php echo $page->post_content ?>

    </div>

    <div class="bgGrey">

        <div class="container-fluid" data-aos="fade-right">

            <?php 
            foreach ($posts as $key => $value) {
                
                ?>
                <div class="item">
                    <div>
                        <img src="<?php echo get_the_post_thumbnail_url( $value->ID ) ?>" alt="<?php echo $value->post_title ?>">
                    </div>
                    <h4><?php echo $value->post_title ?></h4>
                    <?php echo $value->post_content ?>
                </div>    
                <?php

            }
            ?>

        </div>

    </div>

</section>