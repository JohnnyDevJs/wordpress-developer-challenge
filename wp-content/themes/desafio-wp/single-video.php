<?php
/**
 * Single Video Template
 *
 * @package bx-desafio
 */

global $post;

get_header();

$video_id = $post->ID;
$video_url = get_post_meta($video_id, '_bx_play_video_ID', true);



if ($video_id) : ?>

<div class="custom-container mt-48 mb-24 max-md:mt-24 max-md:mb-12">
  <article class="">
    <?php
    var_dump($video_url);
    get_template_part('template-parts/single/content', 'header');
    get_template_part('template-parts/single/content', 'main');
    get_template_part('template-parts/single/content', 'footer');
    ?>
  </article>
</div>

<?php else : ?>
<p class="text-lg font-black text-white">Nenhum vídeo encontrado.</p>
<?php endif;

echo bx_desafio_video_modal($video_url);

get_footer();
