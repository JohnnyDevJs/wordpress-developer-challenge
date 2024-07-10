<?php
/**
 * Single Content Header Template
 *
 * @package bx-desafio
 */

$video_id = get_the_ID();
$video_title = get_the_title();

?>

<header class="max-w-5xl w-full m-auto space-y-4 max-md:space-y-0">
  <ul class="flex items-center gap-3">
    <li>
      <?php echo bx_desafio_term_name($video_id); ?>
    </li>
    <li>
      <?php echo bx_desafio_video_duration($video_id); ?>
    </li>
  </ul>
  <h1 class="text-[4.375rem] text-white font-black leading-[4.5rem] md:-ml-1 max-md:text-[1.75rem]">
    <?php echo $video_title; ?></h1>
</header>