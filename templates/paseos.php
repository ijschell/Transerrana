<?php 
$page = get_page_by_path("paseos-especiales");

$posts = get_posts(array(
    "post_type"     =>      "paseos_especiales",
    "post_status"   =>      "publish",
    "numberposts"   =>      -1
));

?>

<section id="paseosEspeciales" class="bgGrey">

    <div class="container-fluid">

        <h2><?php echo $page->post_title ?></h2>
        <?php echo $page->post_content ?>

    </div>

    <div class="paseosPrecios" data-aos="fade-up">

        <?php 
        foreach ($posts as $key => $value) {
            ?>

            <div class="item">

                <div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $value->ID, "medium_large" ) ?>)">

                    <div class="price">
                        <h3><?php echo $value->post_title ?></h3>
                    </div>

                    <div class="date">
                        <p>Fecha de salida</p>
                        <?php 
                        $date = new DateTime(get_post_meta($value->ID, "fecha_hora")[0]);
                        ?>
                        <p><?php echo $date->format("d-m-Y H:i") ?></p>
                    </div>

                </div>

                <div class="body">
                    
                    <a href="javascript:;" data-fancybox data-src="#<?php echo $value->post_name ?>">Más info</a>

                </div>

            </div>

            <?php
        }
        ?>

    </div>

</section>

<?php 

// here print template box expanded
foreach ($posts as $key => $value) {
?>
    <div class="box_trans" id="<?php echo $value->post_name ?>" style="display: none">

        <div class="title">
            <h4><?php echo $value->post_title ?></h4>
        </div>

        <div class="date">
            <?php 
            $date = new DateTime(get_post_meta($value->ID, "fecha_hora")[0]);
            ?>
            <p><?php echo $date->format("d/m/Y - G:i") . "hs"?></p>
            <!-- <p><?php echo $date->format("j") . " de " . $date->format("F") . " del " . $date->format("Y") ?></p> -->
        </div>

        <?php 
        if(get_post_meta($value->ID, "video")[0] != NULL){
            $url = get_post_meta($value->ID, "video")[0];
            parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
            $ID = $my_array_of_vars['v'];
            ?>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/<?php echo $ID ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php
        }else{
            echo "<div class=\"foto\" style=\"background-image: url(" . get_the_post_thumbnail_url($value->ID, "medium_large") . ")\"></div>";
        }
        ?>

        <div class="description">
            <h5>Descripción de la travesía</h5>
            <div>
                <?php echo $value->post_content ?>
            </div>
        </div>

        <?php
        $sponsors = get_post_meta($value->ID, "sponsors");
        if(count($sponsors) > 0){
            ?>
            <div class="sponsors">
                <h5>Sponsors de esta travesía</h5>
                <div class="slider_sponsors">
                    <?php 
                        foreach ($sponsors as $key1 => $value1) {
                        
                            $sponsor = get_post(intval($value1));

                            ?>
                            <div title="<?php echo $sponsor->post_title ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($sponsor->ID, "medium") ?>)">
                                <?php 
                                if(get_post_meta($sponsor->ID, "url")[0] != NULL){
                                    ?>
                                    <a target="_blank" href="<?php echo get_post_meta($sponsor->ID, "url")[0]; ?>"></a>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php

                        }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
<?php
}

// include_once(get_template_directory() . "/templates/box_proximas_travesias.php");
?>