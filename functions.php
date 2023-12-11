<?php

if (!defined('pubsearch_THEME_VER')) {
    define('pubsearch_THEME_VER', '1.0.0');
}

function pubsearch_register_navigation_menus()
{
    register_nav_menus(
        array(
            'footer-meta' => esc_html__('Footer Meta', 'pubsearch')
        )
    );
}


function custom_publication_archive_query($query)
{
    if (is_post_type_archive('publication') && $query->is_main_query() && !is_admin()) {
        $tax_query = array(); // Initialize the tax_query array

        if (isset($_GET['year_of_publication'])) {
            // Modify the query to filter by year_of_publication
            $year = $_GET['year_of_publication'];
            // if it's all, don't filter
            if ($year != 'all') {
                $tax_query[] = array(
                    'taxonomy' => 'publication_year',
                    'field' => 'slug',
                    'terms' => $year
                );
            }
        }

        if (isset($_GET['category'])) {
            // Modify the query to filter by category
            $categories = $_GET['category'];

            if (!empty($categories)) {
                if (is_array($categories)) {
                    $tax_query[] = array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $categories, // An array of selected category terms
                        'operator' => 'IN' // Use IN to include posts in any of the selected categories
                    );
                } else {
                    // Handle a single category selection
                    $tax_query[] = array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $categories // Single category term
                    );
                }
            }
        }

        if (!empty($tax_query)) {
            // Set the combined tax_query to the main query
            $query->set('tax_query', $tax_query);
        }
    }
}


add_action('pre_get_posts', 'custom_publication_archive_query');

function pubsearch_enqueue_global_scripts()
{
    wp_enqueue_style('pubsearch_style', get_stylesheet_uri(), array(), pubsearch_THEME_VER);
}

function pubsearch_theme_support()
{
    add_theme_support('post-thumbnails');

    // Add default posts and comments RSS feed links to head.
    // add_theme_support( 'automatic-feed-links' );

    pubsearch_register_navigation_menus();

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support('customize-selective-refresh-widgets');
}


function pubsearch_run_hooks()
{
    add_action('after_setup_theme', 'pubsearch_theme_support');
    add_action('wp_enqueue_scripts', 'pubsearch_enqueue_global_scripts');
}

pubsearch_run_hooks();

function isHTMX()
{
    return isset($_SERVER['HTTP_HX_REQUEST']);
}


function enable_beaver_builder_for_single_post()
{
    // Check if Beaver Builder is active.
    if (class_exists('FLBuilder')) {
        // Check if this is a single post.
        if (is_single()) {
            // Add Beaver Builder content.
            FLBuilder::render_content_by_id(get_the_ID());
        }

        
    }
}
add_action('custom_single_pub_content', 'enable_beaver_builder_for_single_post');

function pub_pod_filter($query)
{
    if (!is_admin() && $query->is_main_query() && is_home()) {
        $query->set('post_type', array('publication'));
    }
}

add_action('pre_get_posts', 'pub_pod_filter');

add_theme_support('fl-builder');
