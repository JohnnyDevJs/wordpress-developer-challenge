<?php
/**
 * Custom Template Functions For The Theme
 *
 * @package bx-desafio
 */

/**
 * Bx Desafio Logo Function
 *
 * @return void
 */
function bx_desafio_logo()
{
    $bx_desafio_logo_id = get_theme_mod('custom_logo');
    $bx_desafio_logo = wp_get_attachment_image_src($bx_desafio_logo_id, 'full');
    $home_url = esc_url(home_url());
    $site_name = get_bloginfo('name');

    $output = "<a class='m-0 flex max-md:w-[4.5rem] max-md:my-0 max-md:mx-auto h-6' href='$home_url'>";
    $output .= has_custom_logo() ? "<img class='m-0 w-[6.484rem] h-[2.078rem]' src='$bx_desafio_logo[0]' alt='$site_name' />" : "<h1 class='text-white text-4xl font-bold'>Play</h1>";
    $output .= '</a>';

    return $output;
}

/**
 * Bx Desafio Menu Function
 *
 * @return void
 */
function bx_desafio_menu($is_mobile = false)
{
    $term = get_queried_object() ? get_queried_object() : '';

    $menu_class = \BX_DESAFIO_THEME\Inc\Menus::get_instance();
    $header_menu_id = $menu_class->get_menu_id('bx-desafio-header-menu');
    $header_menu_items = wp_get_nav_menu_items($header_menu_id);

    if (!empty($header_menu_items) && is_array($header_menu_items)) :

        if($is_mobile) {
            $output = '<ul class="bg-black/90 w-full fixed bottom-0 z-10 h-20 flex items-center justify-between px-20 max-sm:px-16 md:hidden">';

            $icons = [
                '<svg width="24" height="22" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23.458 2.111C23.2946 2.02683 23.1113 1.9893 22.928 2.00253C22.7447 2.01576 22.5686 2.07924 22.419 2.186L17 6.057V3C17 2.20435 16.6839 1.44129 16.1213 0.87868C15.5587 0.316071 14.7956 0 14 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3L0 13C0 13.7956 0.31607 14.5587 0.87868 15.1213C1.44129 15.6839 2.20435 16 3 16H14C14.7956 16 15.5587 15.6839 16.1213 15.1213C16.6839 14.5587 17 13.7956 17 13V9.943L22.419 13.813C22.5881 13.9351 22.7915 14.0005 23 14C23.1592 13.9996 23.316 13.9619 23.458 13.89C23.6214 13.8058 23.7585 13.6782 23.8541 13.5212C23.9497 13.3642 24.0002 13.1838 24 13V3C24 2.81633 23.9494 2.63621 23.8538 2.4794C23.7582 2.32258 23.6213 2.19512 23.458 2.111ZM15 13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H3C2.73478 14 2.48043 13.8946 2.29289 13.7071C2.10536 13.5196 2 13.2652 2 13V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13ZM22 11.057L17.721 8L22 4.943V11.057Z" fill="white"/>
                </svg>',
                '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.82 0H3.18C2.33694 0.00105846 1.52871 0.336433 0.93257 0.93257C0.336433 1.52871 0.00105846 2.33694 0 3.18V18.82C0.00105846 19.6631 0.336433 20.4713 0.93257 21.0674C1.52871 21.6636 2.33694 21.9989 3.18 22H18.82C19.6631 21.9989 20.4713 21.6636 21.0674 21.0674C21.6636 20.4713 21.9989 19.6631 22 18.82V3.18C21.9989 2.33694 21.6636 1.52871 21.0674 0.93257C20.4713 0.336433 19.6631 0.00105846 18.82 0ZM17 7H20V10H17V7ZM15 10H7V2H15V10ZM5 10H2V7H5V10ZM2 12H5V15H2V12ZM7 12H15V20H7V12ZM17 12H20V15H17V12ZM20 3.18V5H17V2H18.82C19.1329 2.00026 19.4329 2.12467 19.6541 2.34591C19.8753 2.56714 19.9997 2.86713 20 3.18ZM3.18 2H5V5H2V3.18C2.00026 2.86713 2.12467 2.56714 2.34591 2.34591C2.56714 2.12467 2.86713 2.00026 3.18 2ZM2 18.82V17H5V20H3.18C2.86713 19.9997 2.56714 19.8753 2.34591 19.6541C2.12467 19.4329 2.00026 19.1329 2 18.82ZM18.82 20H17V17H20V18.82C19.9997 19.1329 19.8753 19.4329 19.6541 19.6541C19.4329 19.8753 19.1329 19.9997 18.82 20Z" fill="white"/>
                </svg>',
                '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C21.9966 8.08367 20.8365 5.28778 18.7744 3.22563C16.7122 1.16347 13.9163 0.00344047 11 0ZM11 20C9.21997 20 7.47992 19.4722 5.99987 18.4832C4.51983 17.4943 3.36628 16.0887 2.68509 14.4442C2.0039 12.7996 1.82567 10.99 2.17294 9.24419C2.5202 7.49836 3.37737 5.89471 4.63604 4.63604C5.89472 3.37737 7.49836 2.5202 9.24419 2.17293C10.99 1.82567 12.7996 2.0039 14.4442 2.68508C16.0887 3.36627 17.4943 4.51983 18.4832 5.99987C19.4722 7.47991 20 9.21997 20 11C19.9974 13.3861 19.0483 15.6738 17.361 17.361C15.6738 19.0483 13.3861 19.9974 11 20Z" fill="white"/>
                  <path d="M15.555 10.1679L9.555 6.16791C9.4044 6.06743 9.22935 6.00972 9.04852 6.00093C8.86769 5.99215 8.68786 6.03262 8.52823 6.11803C8.3686 6.20344 8.23516 6.33058 8.14213 6.4859C8.04909 6.64121 7.99997 6.81886 8 6.99991V14.9999C7.99997 15.1809 8.04909 15.3586 8.14213 15.5139C8.23516 15.6692 8.3686 15.7964 8.52823 15.8818C8.68786 15.9672 8.86769 16.0077 9.04852 15.9989C9.22935 15.9901 9.4044 15.9324 9.555 15.8319L15.555 11.8319C15.692 11.7406 15.8043 11.6169 15.8819 11.4717C15.9596 11.3266 16.0002 11.1645 16.0002 10.9999C16.0002 10.8353 15.9596 10.6732 15.8819 10.5281C15.8043 10.3829 15.692 10.2592 15.555 10.1679ZM10 13.1319V8.86891L13.2 10.9999L10 13.1319Z" fill="white"/>
                </svg>',
            ];

            foreach ($header_menu_items as $icon => $menu_item):

                $title = esc_html($menu_item->title);
                $url = esc_url(get_term_link(sanitize_title($title), 'video_type'));
                $active = sanitize_title($menu_item->title) === $term->slug ? 'text-red-500' : 'text-white';
                $active_svg = sanitize_title($menu_item->title) === $term->slug ? '[&>svg>path]:fill-red-500' : '[&>svg>path]:fill-white';

                $output .= '<li>';
                $output .= "<a href='$url' class='text-[0.563rem] group gap-1 custom-transition flex items-center flex-col'>";
                $output .= "<div class='$active_svg [&>svg>path]:group-hover:fill-red-500 [&>svg>path]:custom-transition'>$icons[$icon]</div>";
                $output .= "<span class='$active group-hover:text-red-500 custom-transition'>{$title}</span>";
                $output .= '</a>';
                $output .= '</li>';
            endforeach;

            $output .= '</ul>';

            return $output;
        }

        $output = "<ul class='flex items-center gap-14 max-md:hidden'>";

        foreach ($header_menu_items as $menu_item):
            $title = esc_html($menu_item->title);
            $url = esc_url(get_term_link(sanitize_title($title), 'video_type'));
            $active = sanitize_title($menu_item->title) === $term->slug ? 'text-red-500' : 'text-white';

            $output .=
            "<li>
              <a href='$url' class='$active text-[1.188rem] hover:text-red-500 custom-transition'>
                {$title}
              </a>
            </li>";
        endforeach;

        $output .= '</ul>';


        return $output;
    endif;
}

/**
 * Bx Desafio Menu Copyright Function
 *
 * @return void
 */
function bx_desafio_copyright()
{
    $site_name = get_bloginfo('name');

    $output = "<p class='text-white text-lg max-md:w-full max-md:justify-center max-md:text-xs flex gap-2'>© 2024 <span class='flex items-center gap-2 before:content-[ ] before:w-4 before:h-[0.125rem] before:bg-white before:flex after:content-[ ] after:w-4 after:h-[0.125rem] after:bg-white after:flex'>$site_name</span> Todos os direitos reservados.</p>";

    return $output;
}

/**
 * Bx Desafio Term Name Function
 *
 * @param $video_id
 * @param $taxonomy
 * @return mixed
 */
function bx_desafio_term_name($video_id)
{
    $terms = wp_get_post_terms($video_id, 'video_type');

    if (!empty($terms) && !is_wp_error($terms)):
        $term_name = $terms[0]->name;
        $url = esc_url(get_term_link(sanitize_title($terms[0]->slug), 'video_type'));
        $term = "
          <a href='$url' class='custom-button secondary size-sm z-10'>
            $term_name
          </a>
        ";

        return $term;
    endif;

    return null;
}

/**
 * Bx Desafio Video Duration Function
 *
 * @param [type] $video_id
 * @return void
 */
function bx_desafio_video_duration($video_id)
{
    $bx_desafio_video_duration = get_post_meta($video_id, '_bx_play_video_duration', true);
    $duration = $bx_desafio_video_duration . 'm';

    $output = "<span class='custom-button outline secondary size-sm w-[8.461rem] hover:!bg-transparent hover:!text-white'>$duration</span>";

    return $output;
}

/**
 * Bx Desafio Carousel Segments Function
 *
 * @return void
 */
function bx_desafio_carousel_segments($term_name)
{
    $output_array = [];

    $args = [
        'post_type' => 'video',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'category__not_in' => [1],
        'tax_query' => [
            [
                [
                    'taxonomy' => 'video_type',
                    'field' => 'name',
                    'terms' => $term_name,
                ],
            ]],
    ];

    $videos = get_posts($args);

    if ($videos) :
        $section_title = $term_name;
        $slug_title = sanitize_title($term_name);

        $output_array[] = '<div class="custom-fluid">';
        $output_array[] .= '<h1 class="text-[2.5rem] text-red-500 font-black mb-6 max-md:text-[1.438rem]">';
        $output_array[] .= $section_title;
        $output_array[] .= '</h1>';

        $output_array[] .= "<div class='flex relative overflow-hidden w-full' id='carousel_$slug_title'>";

        foreach ($videos as $video) :
            setup_postdata($video);

            $id = $video->ID;
            $title = $video->post_title;
            $cover = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
            $cover = $cover ? $cover[0] : '';
            $url = esc_url(get_permalink($id));

            $output_array[] .= '<div class="relative">';
            $output_array[] .= "<a class='h-full carousel-slide block group' href='$url'>";
            $output_array[] .= '<figure class="w-full h-full flex flex-col gap-6">';
            $output_array[] .= '<div class="h-[24.188rem] max-sm:h-[14.5rem] rounded-[0.188rem] overflow-hidden">';
            $output_array[] .= "<img class='w-full h-full object-cover group-hover:scale-110 custom-transition' src='$cover' alt='$title' />";
            $output_array[] .= '</div>';
            $output_array[] .= '<figcaption>';
            $output_array[] .= bx_desafio_video_duration($id);
            $output_array[] .= '<h2 class="text-3xl max-md:text-xl text-white font-black mt-2 leading-[1.875rem] group-hover:text-red-500 custom-transition">';
            $output_array[] .= $title;
            $output_array[] .= '</h2>';
            $output_array[] .= '</figcaption>';
            $output_array[] .= '</figure>';
            $output_array[] .= '</a>';
            $output_array[] .= '</div>';

        endforeach;
        wp_reset_postdata();

        $output_array[] = '</div>';
        $output_array[] = '</div>';

    endif;

    $output = implode(' ', $output_array);

    return $output;
}

/**
 * Bx Desafio Segments List Function
 *
 * @return void
 */
function bx_desafio_segments_list($term_name)
{
    $output_array = [];

    $args = [
        'post_type' => 'video',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => [
            [
                [
                    'taxonomy' => 'video_type',
                    'field' => 'name',
                    'terms' => $term_name,
                ],
            ]],
    ];

    $videos = get_posts($args);

    if ($videos) :

        $output_array[] .= '<ul class="flex-1 grid grid-cols-3 max-sm:grid-cols-2 gap-6 gap-y-20 mb-24">';

        foreach ($videos as $video) :
            setup_postdata($video);

            $id = $video->ID;
            $title = $video->post_title;
            $cover = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
            $cover = $cover ? $cover[0] : '';
            $url = esc_url(get_permalink($id));

            $output_array[] .= '<li class="relative">';
            $output_array[] .= "<a class='h-full carousel-slide block group' href='$url'>";
            $output_array[] .= '<figure class="w-full h-full flex flex-col gap-6">';
            $output_array[] .= '<div class="h-[24.188rem] max-sm:h-[14.5rem] rounded-[0.188rem] overflow-hidden">';
            $output_array[] .= "<img class='w-full h-full object-cover group-hover:scale-110 custom-transition' src='$cover' alt='$title' />";
            $output_array[] .= '</div>';
            $output_array[] .= '<figcaption>';
            $output_array[] .= bx_desafio_video_duration($id);
            $output_array[] .= '<h2 class="text-3xl max-md:text-xl text-white font-black mt-2 leading-[1.875rem] group-hover:text-red-500 custom-transition">';
            $output_array[] .= $title;
            $output_array[] .= '</h2>';
            $output_array[] .= '</figcaption>';
            $output_array[] .= '</figure>';
            $output_array[] .= '</a>';
            $output_array[] .= '</li>';

        endforeach;
        wp_reset_postdata();

        $output_array[] = '</ul>';

    endif;

    $output = implode(' ', $output_array);

    return $output;
}

/**
 * BX Desafio Video Modal Function
 *
 * @param [type] $video_url
 * @return void
 */
function bx_desafio_video_modal($video_url)
{
    $video_url = str_replace('watch?v=', 'embed/', $video_url);

    $output = "<div id='modal' class='bg-black/90 fixed inset-0 w-full h-full z-20 opacity-0 custom-transition invisible'>";
    $output .= "<button class='close-modal text-white top-6 right-6 text-5xl font-black absolute custom-transition hover:text-red-500'>x</button>";
    $output .= "<div class='custom-container flex items-center justify-center text-white h-full'>";
    $output .= '<div class="relative rounded-[0.188rem] block w-full p-0 overflow-hidden before:content-[  ] before:pt-[56.25%] before:block [&>iframe]:absolute [&>iframe]:inset-0 [&>iframe]:w-full [&>iframe]:h-full">';
    $output .= "<iframe src='$video_url'></iframe>";
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}
