<?php
/**
 * Register Post Types
 *
 * @package bx-desafio
 */

namespace BX_DESAFIO_THEME\Inc;

use BX_DESAFIO_THEME\Inc\Traits\Singleton;

class Post_Types
{
    use Singleton;

    protected function __construct()
    {
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /*
         * Actions.
         */
        add_action('init', [$this, 'video_init']);
        add_filter('post_type_link', [$this, 'video_url_path'], 1, 2);
    }

    // Post Type Videos
    public function video_init()
    {
        $labels = [
            'name' => _x('Videos', 'Post type general name', 'bx-desafio'),
            'singular_name' => _x('Video', 'Post type singular name', 'bx-desafio'),
            'menu_name' => _x('Videos', 'Admin Menu text', 'bx-desafio'),
            'name_admin_bar' => _x('Video', 'Add New on Toolbar', 'bx-desafio'),
            'add_new' => __('Adicionar novo', 'bx-desafio'),
            'add_new_item' => __('Adicionar novo vídeo', 'bx-desafio'),
            'new_item' => __('Novo vídeo', 'bx-desafio'),
            'edit_item' => __('Editar vídeo', 'bx-desafio'),
            'view_item' => __('Ver vídeo', 'bx-desafio'),
            'all_items' => __('Todos os vídeos', 'bx-desafio'),
            'search_items' => __('Buscar vídeo', 'bx-desafio'),
            'parent_item_colon' => __('Pai vídeo:', 'bx-desafio'),
            'not_found' => __('Nenhum vídeo encontrado.', 'bx-desafio'),
            'not_found_in_trash' => __('Nenhum vídeo encontrado na Lixeira.', 'bx-desafio'),
            'featured_image' => _x('Imagem do vídeo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bx-desafio'),
            'set_featured_image' => _x('Definir a imagem do vídeo', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bx-desafio'),
            'remove_featured_image' => _x('Remover imagem', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bx-desafio'),
            'use_featured_image' => _x('Usar uma imagem', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bx-desafio'),
            'archives' => _x('Arquivos de vídeo', '', 'bx-desafio'),
            'insert_into_item' => _x('Inserir no vídeo', 'bx-desafio'),
            'uploaded_to_this_item' => _x('Carregar para esses vídeos', 'bx-desafio'),
            'filter_items_list' => _x('Filtrar lista de vídeos', 'bx-desafio'),
            'items_list_navigation' => _x('Navegação da lista de vídeos', 'bx-desafio'),
            'items_list' => _x('Lista de vídeo', '', 'bx-desafio'),
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => [ 'slug' => '%video_type%', 'with_front' => false ],
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 30,
            'menu_icon' => 'dashicons-format-video',
            'taxonomies' => ['category'],
            'supports' => ['title', 'editor', 'thumbnail'],

        ];

        register_post_type('video', $args);
    }

    public function video_url_path($post_link, $post)
    {
        if (is_object($post) && $post->post_type == 'video') {
            $terms = wp_get_object_terms($post->ID, 'video_type');
            if ($terms) {
                return str_replace('%video_type%', $terms[0]->slug, $post_link);
            }
        }

        return $post_link;
    }
}
