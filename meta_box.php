<?php 
add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );

function prefix_register_meta_boxes(){

    $meta_boxes[] = array(
        "title"         =>      "Información adicional",
        "post_types"    =>      "paseos_especiales",

        "fields"        =>      array(
            array(
                "name"      =>      "Desde",
                "desc"      =>      "A partir de qué precio?",
                "id"        =>      "precio",
                "type"      =>      "number"
            ),
            array(
                "name"      =>      "Lugar",
                "desc"      =>      "Lugar del recorrido.",
                "id"        =>      "lugar",
                "type"      =>      "text"
            ),
            array(
                "name"      =>      "Días",
                "desc"      =>      "Cantidad de días.",
                "id"        =>      "dias",
                "type"      =>      "number"
            ),
            array(
                "name"      =>      "Grupo máximo",
                "desc"      =>      "Cantidad máxima de personas.",
                "id"        =>      "maximo",
                "type"      =>      "number"
            ),
            array(
                "name"      =>      "Dificultad",
                "desc"      =>      "Seleccione la dificultad.",
                "id"        =>      "dificultad",
                "type"      =>      "text",
                "datalist"  =>      array(
                    "options"   =>      array(
                        "Fácil",
                        "Medio",
                        "Altura"
                    )
                )
            ),
        )

    );

    $meta_boxes[] = array(
        "title"         =>      "Información adicional",
        "post_types"    =>      "equipo",
        "fields"        =>      array(
            array(
                "name"      =>      "Cargo",
                "desc"      =>      "",
                "id"        =>      "cargo",
                "type"      =>      "text"
            ),
            array(
                "name"      =>      "Fecha",
                "desc"      =>      "",
                "id"        =>      "date",
                "type"      =>      "text"
            )
        )
    );

    $meta_boxes[] = array(
        "title"         =>      "Información adicional",
        "post_types"    =>      "redes_sociales",
        "fields"        =>      array(
            array(
                "name"      =>      "Url",
                "desc"      =>      "",
                "id"        =>      "url",
                "type"      =>      "text"
            )
        )
    );

    return $meta_boxes;

}
?>