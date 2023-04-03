<?php
    function simtail_theme_styles_scripts() {
        wp_register_style('theme_style', get_stylesheet_uri(), array(), filectime(get_stylesheet_directory().'/style.css'));
        wp_register_script('theme_script', get_stylesheet_directory_uri() . '/simtail.js', array('jquery'), filectime(get_stylesheet_directory().'/simtail.js'));
        wp_enqueue_style('theme_style');
        wp_enqueue_script(array('jquery'));
        wp_enqueue_script('theme_script');
    }
    add_action('wp_enqueue_scripts', 'simtail_theme_styles_scripts');

    function simtail_admin_styles_scripts() {
        wp_register_style('admin_style',  get_stylesheet_directory_uri() . '/simtail-admin.css', array(), filectime(get_stylesheet_directory().'/simtail-admin.css'));
        wp_register_style('admin_script',  get_stylesheet_directory_uri() . '/simtail-admin.js', array('jquery'), filectime(get_stylesheet_directory().'/simtail-admin.js'));
        wp_enqueue_style('admin_style');
        wp_enqueue_style('admin_style');
    }
    add_action('admin_enqueue_scripts', 'simtail_admin_styles_scripts');

    function simtail_register_elementor_locations($elementor_theme_manager) {
        $elementor_theme_manager->register_all_core_location();
    }
    add_action('elementor/theme/register_locations', 'simtail_register_elementor_locations');