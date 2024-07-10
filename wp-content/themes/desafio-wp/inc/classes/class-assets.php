<?php
/**
 * Enqueue Theme Assets
 *
 * @package bx-desafio
 */

namespace BX_DESAFIO_THEME\Inc;

use BX_DESAFIO_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /*
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register styles.
        wp_register_style('app', BX_DESAFIO_PUBLIC_URI . '/css/app.css', [], filemtime(BX_DESAFIO_PUBLIC_PATH . '/css/app.css'), 'all');

        // Enqueue Styles.
        wp_enqueue_style('app');
    }

    public function register_scripts()
    {
        // Register scripts.
        wp_register_script(
            'app',
            BX_DESAFIO_PUBLIC_URI . '/js/app.js',
            ['jquery'],
            filemtime(BX_DESAFIO_PUBLIC_PATH . '/js/app.js'),
            true
        );

        wp_register_script(
            'slick',
            'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
            ['jquery'],
            '1.9.0',
            true
        );

        // Enqueue Scripts.
        wp_enqueue_script('slick');
        wp_enqueue_script('app');
    }
}