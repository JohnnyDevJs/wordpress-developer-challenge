<?php

/**
 * Content Hero
 *
 * @package bx-desafio
 */

$args = [
    'post_type' => 'video',
    'order' => 'ASC',
    'posts_per_page' => 1,
    'category_name' => 'destaque',
];

$video_highlight = get_posts($args);

if ($video_highlight) {
    foreach ($video_highlight as $video) {
        $id = $video->ID;
        $cover = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
        $cover = $cover ? $cover[0] : '';
        $title = $video->post_title;
        $url = esc_url(get_permalink($id));
        $term = bx_desafio_term_name($id);
        ?>

<section style="background-image:url(<?php echo $cover; ?>);"
  class='bg-cover relative h-[62.5rem] max-md:h-[40.5rem] before:content-[ ] before:w-full before:top-0 before:h-full before:bg-black/50 before:absolute'>

  <div class="custom-container h-full">
    <div class="max-w-3xl relative z-10 flex flex-col items-start h-full justify-center gap-8 pt-44 max-md:pt-16">
      <ul class="flex items-center gap-3">
        <li class="opacity-0 animate-[slideUp_.6s_linear_forwards]">
          <?php echo bx_desafio_term_name($id); ?>
        </li>
        <li class="opacity-0 animate-[slideUp_.6s_linear_forwards] animation-delay-200">
          <?php echo bx_desafio_video_duration($id); ?>
        </li>
      </ul>
      <h1
        class="opacity-0 max-md:text-[2.5rem] max-md:w-72 max-md:leading-10 text-white font-black text-[6.25rem] leading-[6.25rem] -ml-[.4rem] max-md:-ml-[.2rem] animate-[slideUp_.4s_linear_forwards] animation-delay-300">
        <?php echo $title; ?>
      </h1>
      <a class="opacity-0 max-md:hidden custom-button size-lg primary animate-[slideUp_.4s_linear_forwards] animation-delay-400"
        href="<?php echo $url; ?>">
        Mais informações
      </a>

      <a class="opacity-0 custom-button md:hidden size-lg primary animate-[slideUp_.4s_linear_forwards] animation-delay-400"
        href="#">
        Assistir
      </a>
    </div>
  </div>

</section>
<?php
    }
}

?>