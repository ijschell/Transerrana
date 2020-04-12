<?php 
$grupos = get_page_by_path("travesias-para-grupos");
$imagen_grupos = get_the_post_thumbnail_url($grupos, "medium");
$empresas = get_page_by_path("travesias-para-empresas");
$imagen_empresas = get_the_post_thumbnail_url($empresas, "medium");
?>

<section id="paseosGrupos">

    <div class="container-fluid">

        <div class="flex">

            <div>

                <h2><?php echo $grupos->post_title ?></h2>

                <div class="image" style="background-image: url(<?php echo $imagen_grupos ?>)"></div>

                <div class="description"><?php echo $grupos->post_content ?></div>
                
            </div>

            <div>
            
                <h2><?php echo $empresas->post_title ?></h2>

                <div class="image" style="background-image: url(<?php echo $imagen_empresas ?>)"></div>

                <div class="description"><?php echo $empresas->post_content ?></div>

            </div>

        </div>

    </div>

</section>