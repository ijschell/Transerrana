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
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/002-instagram.png'?>" alt="Instagram">
                </a>
                <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/001-logo-de-facebook.png'?>" alt="Facebook">
                </a>
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