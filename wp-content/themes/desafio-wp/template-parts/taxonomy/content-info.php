<?php
/**
 * Taxonomy Content Info
 *
 * @package box-desafio
 */

$term = get_queried_object();

$title = $term->name;
$description = $term->description;

?>

<aside class="w-[35rem] relative max-lg:w-full">
  <div class="lg:fixed lg:w-[inherit] max-lg:w-full flex flex-col max-md:gap-1">
    <h1 class="text-[2.5rem] text-red-500 font-black md:-mt-[.8rem] max-md:text-[1.438rem]">
      <?php echo $title; ?>
    </h1>

    <p class="text-lg max-md:text-xs max-md:leading-[1.375rem] leading-9 max-md:mb-4">
      <?php echo $description; ?>
    </p>
  </div>
</aside>