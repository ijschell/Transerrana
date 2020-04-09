<?php 
    $posts = get_posts(array(
        "post_type"     =>      "redes_sociales",
        "post_status"   =>      "publish",
        "numberposts"   =>      -1
    ));
?>

    <footer>
        <div class="container-fluid">

            <!-- <ul>
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
            </ul> -->

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

    <!-- whatsapp float -->
    <?php 
    $whatsapp = array(
        "name"        => "whatsapp",
        "post_type"   => "redes_sociales",
        "post_status" => "publish",
        "numberposts" => 1
    );
    $whatsapp = get_posts($whatsapp);
    ?>
    <a id="float_whatsapp" target="_blank" data-tooltip-stickto="right" data-tooltip-animate-function="foldin" data-tooltip="¡Envianos un Whatsapp ahora!" href="<?php echo get_post_meta($whatsapp[0]->ID, "url")[0]; ?>">
        <img src="<?php echo get_the_post_thumbnail_url( $whatsapp[0]->ID, "medium" ) ?>" alt="<?php echo $whatsapp[0]->post_title ?>">
    </a>

    <?php

    wp_footer();

    $video_popup = get_posts(array(
        "post_type"     =>      "video_popup",
        "numberposts"   =>      1
    ));    

    $video_url = get_post_meta($video_popup[0]->ID, "video");

    if(!empty($video_url)){

        $video_url = $video_url[0];
        parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars );
        $ID = $my_array_of_vars['v'];
        ?>
        <div id="popup_video" style="display: none">
            <iframe src="https://www.youtube.com/embed/<?php echo $ID ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div data-fancybox data-src="#popup_video" id="popup_video_button"></div>
        <script>

            if(Cookies.get('pop_video') != 'true'){
                Cookies.set('pop_video', 'true');
                document.getElementById('popup_video_button').click();
            }
            
        </script>
        <?php
    }
    ?>

</body>
</html>