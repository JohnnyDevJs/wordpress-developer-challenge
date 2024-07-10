<?php
/**
 * Front-Page Template
 *
 * @package bx-desafio
 */

get_header();

get_template_part('template-parts/home/content', 'hero');
get_template_part('template-parts/home/content', 'segments');

get_footer();
