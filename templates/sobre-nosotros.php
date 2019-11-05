<?php 
$page = get_page_by_path("sobre-nosotros");

// var_dump($page);

?>

<section id="sobreNosotros">

    <div class="container-fluid">

        <h2 class="without"><?php echo $page->post_title ?></h2>
        <?php echo $page->post_content ?>

    </div>

    <div class="bgGrey">

        <div class="container-fluid" data-aos="fade-right">

            <div class="item">
                <div>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/mountains-icon.png" ?>" alt="Montañas">
                </div>
                <h4>Recorridos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fuga accusantium, quam veniam placeat et quaerat praesentium cum voluptatum itaque quod iste accusamus architecto. Eligendi soluta corrupti cum suscipit alias?</p>
            </div>
            
            <div class="item">
                <div>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/map-icon.png" ?>" alt="Mapa">
                </div>
                <h4>Guías</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fuga accusantium, quam veniam placeat et quaerat praesentium cum voluptatum itaque quod iste accusamus architecto. Eligendi soluta corrupti cum suscipit alias?</p>
            </div>

            <div class="item">
                <div>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/bike-icon.png" ?>" alt="Bicicleta">
                </div>
                <h4>Alquiler de bicis</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fuga accusantium, quam veniam placeat et quaerat praesentium cum voluptatum itaque quod iste accusamus architecto. Eligendi soluta corrupti cum suscipit alias?</p>
            </div>

        </div>

    </div>

</section>