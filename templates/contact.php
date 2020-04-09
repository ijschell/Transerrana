<?php 
$page = get_page_by_path("contacto");
?>

<div id="contact" class="bgGrey">

    <div class="container-fluid">

        <h2><?php echo $page->post_title ?></h2>

        <div class="flex">

            <div class="left">
                <?php echo $page->post_content ?>
            </div>

            <div class="right">
                <?php echo do_shortcode('[contact-form-7 id="82" title="Formulario de contacto 1"]'); ?>
            </div>

        </div>

    </div>

</div>