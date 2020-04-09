<?php 
add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );

function prefix_register_meta_boxes(){

    $meta_boxes[] = array(
        "title"         =>      "Información adicional",
        "post_types"    =>      "paseos_especiales",

        "fields"        =>      array(
            array(
                "name"      =>      "Fecha",
                "desc"      =>      "Fecha y hora de la travesía.",
                "id"        =>      "fecha_hora",
                "type"      =>      "datetime"
            ),
            array(
                "name"      =>      "Video",
                "desc"      =>      "Inserte la URl del video en Youtube.",
                "id"        =>      "video",
                "type"      =>      "text"
            ),
            array(
                "name"      =>      "Sponsors",
                "desc"      =>      "Seleccione los sponsors para esta travesía.",
                "id"        =>      "sponsors",
                "type"      =>      "post",
                "post_type"     =>    "sponsors",
                "field_type"    =>    "checkbox_list"
            ),
            // array(
            //     "name"      =>      "Desde",
            //     "desc"      =>      "A partir de qué precio?",
            //     "id"        =>      "precio",
            //     "type"      =>      "number"
            // ),
            // array(
            //     "name"      =>      "Lugar",
            //     "desc"      =>      "Lugar del recorrido.",
            //     "id"        =>      "lugar",
            //     "type"      =>      "text"
            // ),
            // array(
            //     "name"      =>      "Días",
            //     "desc"      =>      "Cantidad de días.",
            //     "id"        =>      "dias",
            //     "type"      =>      "number"
            // ),
            // array(
            //     "name"      =>      "Grupo máximo",
            //     "desc"      =>      "Cantidad máxima de personas.",
            //     "id"        =>      "maximo",
            //     "type"      =>      "number"
            // ),
            // array(
            //     "name"      =>      "Dificultad",
            //     "desc"      =>      "Seleccione la dificultad.",
            //     "id"        =>      "dificultad",
            //     "type"      =>      "text",
            //     "datalist"  =>      array(
            //         "options"   =>      array(
            //             "Fácil",
            //             "Medio",
            //             "Altura"
            //         )
            //     )
            // ),
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
        "post_types"    =>      "sponsors",
        "fields"        =>      array(
            array(
                "name"      =>      "Url web",
                "desc"      =>      "Inserte la URL de la empresa sponsor.",
                "id"        =>      "url",
                "type"      =>      "text"
            )
        )
    );

    $meta_boxes[] = array(
        "title"         =>      "Información",
        "post_types"    =>      "datos_de_contacto",
        "fields"        =>      array(
            array(
                "name"      =>      "Información",
                "desc"      =>      "Ingrese aquí el número, email, fax o el dato que sea necesario.",
                "id"        =>      "info",
                "type"      =>      "text"
            )
        )
    );

    $meta_boxes[] = array(
        "title"         =>      "Información",
        "post_types"    =>      "video_popup",
        "fields"        =>      array(
            array(
                "name"      =>      "Url video",
                "desc"      =>      "Si existe una url de video de youtube en este campo el video se verá automáticamente en la web.",
                "id"        =>      "video",
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

    $meta_boxes[] = array(
        "title"         =>      "Galería de imágenes",
        "post_types"    =>      "galerias_de_imagenes",
        "fields"        =>      array(
            array(
                "name"      =>      "Imágenes",
                "desc"      =>      "Suba aquí todas las imágenes de esta travesía. (Max. 9)",
                "id"        =>      "gallery",
                "type"      =>      "image_advanced",
                'max_file_uploads' => 9,
            )
        )
    );

    return $meta_boxes;

}
?>