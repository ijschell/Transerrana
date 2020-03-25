<?php 
    $posts = get_posts(array(
        "post_type"     =>      "redes_sociales",
        "post_status"   =>      "publish",
        "numberposts"   =>      -1
    ));
?>

    <footer>
        <div class="container-fluid">

            <ul>
                <li>
                    <a href="#">Sobre nosotros</a>
                </li>
                <li>
                    <a href="#">Paseos</a>
                </li>
                <li>
                    <a href="#">Galería</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>

            <div class="social">
                <?php 
                foreach ($posts as $key => $value) {
                    ?>
                    <a href="<?php echo get_post_meta($value->ID, "url")[0] ?>" target="_blank" data-tooltip-stickto="top" data-tooltip-animate-function="foldin" data-tooltip="Visita nuestro <?php echo $value->post_title ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $value->ID, "medium" ) ?>" alt="<?php echo $value->post_title ?>">
                    </a>
                    <?php
                }
                ?>
            </div>

            <?php
            $contact = get_posts(array(
                "post_type"     =>      "datos_de_contacto",
                "numberposts"   =>      -1
            ));
            ?>

            <div class="copyright">
                <p>&copy; Todos los derechos reservados.</p>                
                <?php 
                if(count($contact) > 0){

                    foreach ($contact as $key => $value) {

                        $prefix = "tel:";

                        if($value->post_title == "Email"){
                            $prefix = "mailto:";
                        }

                        ?>
                        <p>
                            <a href="<?php echo $prefix . get_post_meta($value->ID, "info")[0]; ?>">
                                <?php echo get_post_meta($value->ID, "info")[0]; ?>
                            </a>
                        </p>
                        <?php
                    }

                }
                ?>
            </div>

            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo_solo.png' ?>" alt="Transerrana">
            </div>

        </div>
    </footer>

    <?php 

    // echo get_template_directory() . "/templates/box_proximas_travesias.php";

    // get modal travesias
    // include_once(get_template_directory() . "/templates/box_proximas_travesias.php");

    wp_footer();
    ?>

</body>
</html>