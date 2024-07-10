<?php
/**
 * Register Columns
 *
 * @package bx-desafio
 */

namespace BX_DESAFIO_THEME\Inc;

use BX_DESAFIO_THEME\Inc\Traits\Singleton;

class Columns
{
    use Singleton;

    protected function __construct()
    {
        // load class

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_filter('manage_edit-video_columns', [$this, 'video_columns']);
        add_filter('manage_video_posts_custom_column', [$this, 'manage_video_columns'], 10, 2);
    }

    // Hero Columns
    public function video_columns($columns)
    {
        $columns = [
            'cb' => '&lt;input type="checkbox" />',
            'title' => __('Título', 'bx-desafio'),
            'content' => __('Conteúdo', 'bx-desafio'),
            'thumbnail' => __('Imagem', 'bx-desafio'),
            'url' => __('URL do vídeo', 'bx-desafio'),
            'duration' => __('Duração do vídeo', 'bx-desafio'),
            'segments' => __('Segmentos', 'bx-desafio'),
            'categories' => __('Categorias', 'bx-desafio'),
            'date' => __('Data'),
        ];

        return $columns;
    }

    public function manage_video_columns($column, $post_id)
    {
        switch ($column) {
            case 'content':
                $content = get_the_content();
                $content = wp_trim_words($content, 20, '...');
                echo $content;

                break;

            case 'thumbnail':
                $has_thumbnail = has_post_thumbnail();
                if ($has_thumbnail):
                    echo get_the_post_thumbnail($post_id, [100, 100]);
                endif;

                break;

            case 'url':
                $video_id = get_post_meta($post_id, '_bx_play_video_ID', true);
                echo $video_id;

                break;

            case 'duration':
                $video_duration = get_post_meta($post_id, '_bx_play_video_duration', true) . 'm';
                echo $video_duration;

                break;

            case 'segments':
                $terms = wp_get_post_terms($post_id, 'video_type');
                $term_id = $terms[0]->term_id;
                $term_link = "/wp-admin/term.php?taxonomy=video_type&tag_ID=$term_id";
                $segment = $terms[0]->name;

                echo "<a href='$term_link'>$segment</a>";

                break;

            default:
                break;
        }
    }
}
