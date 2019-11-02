<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo("title") ?></title>
    <meta name="description" content="<?php echo bloginfo("description")?>">
    <?php 
    wp_head();
    ?>
</head>
<body data-ajax="<?php echo site_url() ?>" <?php echo body_class() ?>>
    <header>        
        <div class="container-fluid">
            <div>
                <div>
                    <h1><span>Transerrana</span></h1>
                </div>
                <div>
                    <ul id="menu">
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
                    <a href="#" class="search">
                        <span class="dashicons dashicons-search"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>

