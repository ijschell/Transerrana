<?php 
$gallery = get_posts(array(
    "name"      =>      "galeria-de-imagenes"
));

$gallery = get_post_meta( $gallery[0]->ID, "vdw_gallery_id" );

$images = array();

foreach ($gallery[0] as $key => $value) {
    array_push($images, array(
        "thumbnail"     =>      wp_get_attachment_image_src($value, "thumbnail"),
        "full"          =>      wp_get_attachment_image_src($value, "full"),
    ));
}

?>

<section id="gallery">

    <div class="sliderGallery">

        <?php 
        foreach ($images as $key => $value) {
            ?>
            <div class="item" style="background-image: url(<?php echo $value["thumbnail"][0] ?>)">
                <a data-fancybox="gallery" href="<?php echo $value["full"][0] ?>"></a>
            </div>
            <?php
        }
        ?>

    </div>

</section>