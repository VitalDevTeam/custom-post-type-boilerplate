<?php
/**
 * FAQ post type
 */

$faq_names = [
    'name'     => 'vtl_faq',
	'menu_name' => 'FAQs',
    'singular' => 'Question',
    'plural'   => 'Questions',
	'all_items' => 'All Questions',
    'slug'     => 'faq'
];

$faq_options = [
    'has_archive'         => true,
    'hierarchical'        => false,
    'labels'              => array('menu_name' => 'FAQs'),
    'menu_position'       => 21,
    'rewrite'             => array('with_front' => false),
    'show_in_nav_menus'   => true,
    'show_in_rest'        => false,
    'supports'            => array('title')
];

$faq = new PostType($faq_names, $faq_options);

$faq->icon('dashicons-editor-help');
$faq->placeholder('Enter question here');
$faq->columns()->hide(['wpseo-score', 'wpseo-score-readability']);

$faq_type_names = [
    'name'     => 'faq_category',
    'singular' => 'FAQ Category',
    'plural'   => 'FAQ Categories',
    'slug'     => 'faq-category'
];

$faq_type_options = [
    'heirarchical'      => true,
    'show_in_nav_menus' => true
];

$faq->taxonomy($faq_type_names, $faq_type_options);
