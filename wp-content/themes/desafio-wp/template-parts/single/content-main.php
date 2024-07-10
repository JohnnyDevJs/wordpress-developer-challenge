<?php
/**
 * Single Content Main Template
 *
 * @package bx-desafio
 */


$video_id = get_the_ID();
$attachment_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($video_id), 'full');

if ($attachment_image_src) {
    $video_cover = "
    <button class='group open-modal w-full flex items-center relative justify-center p-0 overflow-hidden h-0 pb-[50%] before:pb-[50%]'>
      <svg class='absolute max-sm:w-12 max-sm:h-48 inset-0 z-10 m-auto' width='90' height='90' viewBox='0 0 90 90' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <path class=' custom-transition group-hover:fill-red-500' d='M44.781 0C35.9242 0.00019778 27.2663 2.62673 19.9023 7.54745C12.5382 12.4682 6.79868 19.4621 3.40946 27.6447C0.020246 35.8274 -0.866425 44.8314 0.861573 53.518C2.58957 62.2045 6.85463 70.1837 13.1174 76.4463C19.3802 82.7089 27.3594 86.9738 36.046 88.7016C44.7327 90.4294 53.7366 89.5425 61.9192 86.1532C70.1018 82.7638 77.0956 77.0241 82.0161 69.6599C86.9367 62.2957 89.563 53.6378 89.563 44.781C89.549 32.9085 84.8263 21.5262 76.4311 13.1312C68.0359 4.73613 56.6535 0.0137619 44.781 0ZM63.325 48.168L38.9 64.452C38.287 64.8613 37.5743 65.0964 36.8381 65.1323C36.1019 65.1682 35.3698 65.0035 34.7198 64.6557C34.0699 64.308 33.5267 63.7903 33.148 63.1579C32.7694 62.5255 32.5696 61.8021 32.57 61.065V28.5C32.5694 27.7633 32.7689 27.0402 33.1472 26.408C33.5255 25.7758 34.0684 25.2582 34.7178 24.9105C35.3673 24.5627 36.0991 24.3979 36.8349 24.4336C37.5708 24.4692 38.2832 24.7041 38.896 25.113L63.321 41.394C63.8787 41.7656 64.3361 42.2692 64.6524 42.8601C64.9687 43.451 65.1342 44.1108 65.1342 44.781C65.1342 45.4512 64.9687 46.111 64.6524 46.7019C64.3361 47.2928 63.8787 47.7964 63.321 48.168H63.325Z' fill='white'/>
      </svg>
      <figure class='rounded-[0.188rem] inset-0 absolute w-full h-full overflow-hidden'>
        <img class='w-full h-full object-cover' src='$attachment_image_src[0]' />
      </figure>
    </button>";
}

?>

<main class="my-12 max-md:my-8">
  <?php echo $video_cover; ?>
</main>