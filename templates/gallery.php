<?php 
$galleries = get_posts(array(
    "post_type"     =>  "galerias_de_imagenes",
    "numberposts"   =>  -1
));

$images = array();

foreach ($galleries as $key => $value) {
    
    array_push($images, array(
        "thumbnail"     =>      get_the_post_thumbnail_url( $value->ID, "thumbnail" ),
        "title"     =>      $value->post_title,
        "url"       =>      get_the_permalink($value->ID)
    ));

}
?>

<section id="gallery">

    <div class="sliderGallery">

        <?php 
        foreach ($images as $key => $value) {
            ?>
            <div data-tooltip-stickto="top" data-tooltip-animate-function="foldin" data-tooltip="<?php echo $value["title"] ?>" class="item" style="background-image: url(<?php echo $value["thumbnail"] ?>)">
                <a href="<?php echo $value["url"] ?>"></a>
            </div>
            <?php
        }
        ?>

    </div>

</section>