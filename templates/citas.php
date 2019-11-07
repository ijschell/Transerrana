<?php 

$posts = get_posts(array(
    "post_type"     =>      "comentarios_clientes",
    "post_status"   =>      "publish",
    "numberposts"   =>      -1
));

?>

<section id="citas" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/assets/images/background-bike.jpg' ?>">

    <div class="overlay">

        <div class="centerContainer">

            <div class="center">

                <?php 
                foreach ($posts as $key => $value) {
                    
                    ?>
                    <div class="item">
                        <span class="dashicons dashicons-editor-quote"></span>
                        <p class="text"><?php echo $value->post_content ?></p>
                        <p class="name">- <?php echo $value->post_title ?></p>
                    </div>
                    <?php

                }
                ?>                

            </div>

        </div>

    </div>

</section>