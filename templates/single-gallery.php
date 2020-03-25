<?php 
$post = get_post();
$gallery = get_post_meta($post->ID, "gallery");
?>

<div id="wrapper_single" class="bgGrey">

    <div class="container-fluid">

        <h2 class="without"><?php echo $post->post_title ?></h2>

        <div class="content">
            <?php echo $post->post_content ?>
        </div>

        <div class="gallery">
            <?php
            foreach ($gallery as $key => $value) {
                
                $image = array(
                    "thumbnail"     =>      wp_get_attachment_image_src($value, "medium")[0],
                    "full"          =>      wp_get_attachment_image_src($value, "full")[0],
                );

                ?>
                <div style="background-image: url(<?php echo $image["thumbnail"] ?>)">
                    <a data-fancybox="gallery" href="<?php echo $image["full"] ?>"></a>
                </div>
                <?php

            }
            ?>
        </div>

    </div>

</div>