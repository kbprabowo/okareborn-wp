<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('css', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('css');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', [], 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('fevicon', get_template_directory_uri() . '/images/fevicon.png', [], 1, 'all');
    wp_enqueue_style('fevicon');

    wp_register_style('scrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css', [], 1, 'all');
    wp_enqueue_style('scrollbar');

    wp_register_style('backupbootstrap', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', [], 1, 'all');
    wp_enqueue_style('backupbootstrap');

    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap', [], 1, 'all');
    wp_enqueue_style('fonts');

    wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', [], 1, 'all');
    wp_enqueue_style('owlcarousel');

    wp_register_style('owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', [], 1, 'all');
    wp_enqueue_style('owltheme');

    wp_register_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', [], 1, 'all');
    wp_enqueue_style('fancybox');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', [], 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Load scripts

function addjs()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', [], 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', [], 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', [], 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery3', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', [], 1, 1, 1);
    wp_enqueue_script('jquery3');

    wp_register_script('plugin', get_template_directory_uri() . '/js/plugin.js', [], 1, 1, 1);
    wp_enqueue_script('plugin');

    wp_register_script('scrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', [], 1, 1, 1);
    wp_enqueue_script('scrollbar');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', [], 1, 1, 1);
    wp_enqueue_script('custom');

    wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.js', [], 1, 1, 1);
    wp_enqueue_script('owlcarousel');

    wp_register_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', [], 1, 1, 1);
    wp_enqueue_script('fancybox');

    wp_register_script('customjs', get_template_directory_uri() . '/custom.js', [], 1, 1, 1);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'addjs');
