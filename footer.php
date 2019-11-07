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
                    <a href="<?php echo get_post_meta($value->ID, "url")[0] ?>" target="_blank" title="Visita nuestro <?php echo $value->post_title ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $value->ID, "medium" ) ?>" alt="<?php echo $value->post_title ?>">
                    </a>
                    <?php
                }
                ?>
            </div>

            <div class="copyright">
                <p>&copy; Todos los derechos reservados.</p>
            </div>

            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo_solo.png' ?>" alt="Transerrana">
            </div>

        </div>
    </footer>

    <?php 
    wp_footer();
    ?>

</body>
</html>