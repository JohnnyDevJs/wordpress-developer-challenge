<?php
/**
 * Register Taxonomies
 *
 * @package bx-desafio
 */

namespace BX_DESAFIO_THEME\Inc;

use BX_DESAFIO_THEME\Inc\Traits\Singleton;

class Taxonomies
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
        add_action('init', [$this, 'video_taxonomy_init'], 0);
        add_filter('term_link', [$this, 'video_taxonomy_term_link'], 10, 3);
    }

    public function video_taxonomy_init()
    {
        $labels = [
            'name' => _x('Segmentos', 'taxonomy general name', 'bx-desafio'),
            'singular_name' => _x('Segmento', 'taxonomy singular name', 'bx-desafio'),
            'search_items' => __('Buscar Segmentos', 'bx-desafio'),
            'popular_items' => __('Segmentos populares', 'bx-desafio'),
            'all_items' => __('Todos Segmentos', 'bx-desafio'),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __('Editar Segmento', 'bx-desafio'),
            'update_item' => __('Atualizar Segmento', 'bx-desafio'),
            'add_new_item' => __('Adicionar novo Segmento', 'bx-desafio'),
            'new_item_name' => __('Nome do novo Segmento', 'bx-desafio'),
            'separate_items_with_commas' => __('Separar Segmentos por vírgula', 'bx-desafio'),
            'add_or_remove_items' => __('Adicionar ou remover Segmentos', 'bx-desafio'),
            'choose_from_most_used' => __('Escolha entre o Segmento mais usado', 'bx-desafio'),
            'not_found' => __('Nenhum Segmento encontrado.', 'bx-desafio'),
            'menu_name' => __('Segmentos', 'bx-desafio'),
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => [ 'slug' => 'video_type', 'with_front' => false ],
        ];

        register_taxonomy('video_type', 'video', $args);
    }

    public function video_taxonomy_term_link($term_link, $term, $taxonomy)
    {
        if ($taxonomy === 'video_type') {
            return home_url(user_trailingslashit($term->slug));
        }

        return $term_link;
    }
}
