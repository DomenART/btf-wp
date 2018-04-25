<?php
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('technics',
        array(
        'labels' => array(
            'name' => 'Техника',
            'all_items' => 'Вся техника',
            'singular_name' => 'Техника',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить технику',
            'edit' => 'Редактировать',
            'edit_item' => 'Редактировать технику',
            'new_item' => 'Новый техника',
            'view' => 'Смотреть',
            'view_item' => 'Смотреть технику',
            'search_items' => 'Искать технику',
            'not_found' => 'Техника не найдена',
            'not_found_in_trash' => 'Нет техники в корзине'
        ),
		'show_in_rest' => true,
        'public' => true,
        'hierarchical' => false,
        'has_archive' => false,
    	'menu_position' => 5,
    	'menu_icon' => 'dashicons-admin-tools', 
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));
}

?>
