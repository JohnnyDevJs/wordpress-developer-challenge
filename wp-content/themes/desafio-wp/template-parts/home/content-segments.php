<?php

/**
 * Content Segments
 *
 * @package bx-desafio
 */

$video_types = get_terms(
    [
        'taxonomy' => 'video_type',
        'orderby' => 'id',
    ]
);

echo '<section class="flex flex-col gap-16 my-20">';

foreach ($video_types as $video_type):

    $name = $video_type->name;

    echo '<div class="carousel">';
    echo bx_desafio_carousel_segments($name);
    echo '</div>';

endforeach;

echo '</section>';