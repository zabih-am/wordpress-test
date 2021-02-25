<?php
include 'constants.php';
include 'app/autoloader.php';
include 'app/classes/class-posttypes.php';

add_action('after_setup_theme' , 'Initializer::setup');
add_filter('show_admin_bar', '__return_false');
add_action('init', 'PostType::make_product_post_type');
add_action('add_meta_boxes' , 'MetaBoxes::register_product_price_meta_box');
add_action('save_post' , 'MetaBoxes::save_product_price');
