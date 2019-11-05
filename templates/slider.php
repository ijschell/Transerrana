<?php 
$posts = get_posts(array(
    "post_type"     =>      "slider",
    "post_status"   =>      "publish",
    "numberposts"   =>      -1
));

$data = array();

foreach ($posts as $key => $value) {
    
    array_push($data, array(
        "title"     =>      $value->post_title,
        "image"     =>      get_the_post_thumbnail_url($value->ID, "full")
    ));

}

?>

<div id="slider">

    <?php 
    foreach ($data as $key => $value) {
        ?>
        <div class="item" style="background-image: url(<?php echo $value["image"] ?>)">
            <h3><?php echo $value["title"] ?></h3>
        </div>
        <?php
    }
    ?>

</div>