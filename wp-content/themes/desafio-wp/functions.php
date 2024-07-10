<?php

/**
 * Theme Functions
 *
 * @package bx-desafio
 */

if (!defined('BX_DESAFIO_DIR_PATH')) {
    define('BX_DESAFIO_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('BX_DESAFIO_URI')) {
    define('BX_DESAFIO_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('BX_DESAFIO_PUBLIC_URI')) {
    define('BX_DESAFIO_PUBLIC_URI', untrailingslashit(get_template_directory_uri()) . '/public');
}

if (!defined('BX_DESAFIO_PUBLIC_PATH')) {
    define('BX_DESAFIO_PUBLIC_PATH', untrailingslashit(get_template_directory()) . '/public');
}

require_once BX_DESAFIO_DIR_PATH . '/inc/helpers/autoloader.php';
require_once BX_DESAFIO_DIR_PATH . '/inc/helpers/template-functions.php';

function bx_desafio_get_theme_instance()
{
    \BX_DESAFIO_THEME\Inc\BX_DESAFIO_THEME::get_instance();
}

bx_desafio_get_theme_instance();
