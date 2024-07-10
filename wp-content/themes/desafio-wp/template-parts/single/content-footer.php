<?php
/**
 * Single Content Footer Template
 *
 * @package bx-desafio
 */


$video_content = get_the_content();

if($video_content): ?>

<footer class="max-w-5xl w-full m-auto">
  <div class="text-lg text-white leading-9 max-md:text-xs max-md:leading-[1.375rem]">
    <?php echo $video_content; ?>
  </div>
</footer>

<?php
else: ?>
<p class="text-lg text-white font-black">Nenhuma descrição encontrada.</p>
<?php endif;
