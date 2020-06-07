<?php 
$page = get_page_by_path("equipo");
?>

<section id="equipo">

    <div>
        <div class="container-fluid">

            <h2><?php echo $page->post_title ?></h2>
            <?php echo $page->post_content ?>

            <div class="team" data-aos="fade-up" style="background-image: url(<?php echo get_the_post_thumbnail_url( $page, "full" ) ?>)"></div>

        </div>
    </div>

</section>