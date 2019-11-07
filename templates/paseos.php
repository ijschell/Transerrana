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
                        <p>desde $<?php echo get_post_meta($value->ID, "precio")[0] ?></p>
                    </div>
                </div>

                <div class="body">

                    <div class="header">
                        <div class="column">
                            <p class="title">Días</p>
                            <p><?php echo get_post_meta($value->ID, "dias")[0] ?></p>
                        </div>
                        <div class="column">
                            <p class="title">Grupo máx.</p>
                            <p><?php echo get_post_meta($value->ID, "maximo")[0] ?></p>
                        </div>
                        <div class="column">
                            <p class="title">Dificultad</p>
                            <p><?php echo get_post_meta($value->ID, "dificultad")[0] ?></p>
                        </div>
                    </div>

                    <div class="title">
                        <h4><?php echo $value->post_title ?></h4>
                    </div>

                    <div class="description">
                        <h5><?php echo get_post_meta($value->ID, "lugar")[0] ?></h5>
                        <?php echo $value->post_content ?>
                    </div>

                </div>

            </div>

            <?php

        }
        ?>

    </div>

</section>