<?php
/**
 * Taxonomy Video Type
 *
 * @package bx-desafio
 */

get_header();

$term = get_queried_object();
$name = $term->name;

?>

<section class="mt-48 max-md:mt-24">
  <div class="custom-container flex md:gap-8 text-white max-lg:flex-col">

    <?php get_template_part('template-parts/taxonomy/content', 'info'); ?>
    <?php echo bx_desafio_segments_list($name); ?>

  </div>
</section>

<?php get_footer(); ?>