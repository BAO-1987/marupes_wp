<?php

$widgets = [
  'widget-address.php',
  'widget-mail.php',
  'widget-phone.php',
  'widget-social.php',
];

foreach ($widgets as $w) {
  require_once(__DIR__ . '/inc/' . $w);
}

add_action('after_setup_theme', 'gm_setup');
add_action('wp_enqueue_scripts', 'conect_scripts');
add_action('wp_enqueue_scripts', 'remove_block_css', 100);
add_action('widgets_init', 'gm_register');
add_action('after_setup_theme', 'gm_show_sidebar');
add_action('init', 'gm_register_types');


add_filter('script_loader_tag', 'change_my_script', 10, 3);
add_filter('show_admin_bar', '__return_false');
add_filter('nav_menu_css_class', 'my_nav_special_class', 10, 2);
add_filter('upload_mimes', 'cc_mime_types');

function gm_show_sidebar()
{
  remove_theme_support('widgets-block-editor');
}

function remove_block_css()
{
  wp_dequeue_style('classic-theme-styles');
  wp_dequeue_style('wp-block-library'); // Wordpress core
  wp_dequeue_style('wp-block-library-theme'); // Wordpress core
  wp_dequeue_style('wc-block-style'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}

function conect_scripts()
{
  wp_enqueue_style(
    'wp-style-vendor',
    _gm_assets_path('css/reset.css'),
    [],
    '1.0',
    'all'
  );

  wp_enqueue_style(
    'wp-style-main',
    _gm_assets_path('css/style.css'),
    [],
    '1.0',
    'all'
  );

  wp_dequeue_style('wp-block-library'); // Wordpress core
  wp_dequeue_style('wp-block-library-theme'); // Wordpress core
  wp_dequeue_style('wc-block-style'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme

  wp_enqueue_script('rs-script-vendor', _gm_assets_path('js/vendor.js'));
  wp_enqueue_script('rs-script-main', _gm_assets_path('js/main.js'));

  // отменяем зарегистрированный jQuery
  wp_deregister_script('jquery-core');
  wp_deregister_script('jquery');
}

function gm_setup()
{
  register_nav_menu('menu-header', 'Головне меню');

  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function _gm_assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

function change_my_script($tag, $handle, $src)
{

  if ('rs-script-vendor'   === $handle) {
    // return str_replace( ' src', ' async src', $tag );
    return str_replace(' src', ' defer src', $tag);
  }
  if ('rs-script-main'  === $handle) {
    // return str_replace( ' src', ' async src', $tag );
    return str_replace(' src', ' defer src', $tag);
  }
  if ('rs-script-fancy'  === $handle) {
    // return str_replace( ' src', ' async src', $tag );
    return str_replace(' src', ' defer src', $tag);
  }

  return $tag;
}

function my_nav_special_class($classes, $item)
{
  $classes[] = 'nav__item';
  return $classes;
}


function gm_register()
{
  register_sidebar(array(
    'name'          => 'Поле адреси',
    'id'            => "address",
    'before_widget'  =>  null,
    'after_widget'   => null,
    'before_sidebar' => '',
    'after_sidebar'  => '',
  ));

  register_sidebar([
    'name' => 'Пошта (Email)',
    'id' => 'email',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Контакти',
    'id' => 'phone_number',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Опис компанії (Сторінка контакти)',
    'id' => 'desc',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Опис компанії (Футер)',
    'id' => 'desc_footer',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Соціальні мережі',
    'id' => 'social',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_widget('gm_widget_address');
  register_widget('gm_widget_email');
  register_widget('gm_widget_contacts');
  register_widget('gm_widget_social');
}


function gm_register_types()
{
  register_post_type('city', [
    'labels' => [
      'name'               => 'Гелій в місті', // основное название для типа записи
      'singular_name'      => 'Гелій в місті', // название для одной записи этого типа
      'add_new'            => 'Додати нове місто', // для добавления новой записи
      'add_new_item'       => 'Додати нове місто', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редгувати місто', // для редактирования типа записи
      'new_item'           => 'Нове місто', // текст новой записи
      'view_item'          => 'Перегляд', // для просмотра записи этого типа.
      'search_items'       => 'Шукати', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзині', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Гелій в місті', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-smiley',
    'hierarchical'        => false,
    'supports'            => ['title'],
    'has_archive' => true
  ]);
}
function current_page($var = '')
{
  if (empty($var)) {
    global $wp_query;
    if (!isset($wp_query->max_num_pages))
      return;
    $pages = $wp_query->max_num_pages;
  } else {
    global $$var;
    if (!is_a($$var, 'WP_Query'))
      return;
    if (!isset($$var->max_num_pages) || !isset($$var))
      return;
    $pages = absint($$var->max_num_pages);
  }
  if ($pages < 1)
    return;
  $page = get_query_var('paged') ? get_query_var('paged') : 1;
  echo  $page;
}

function total_pages($var = '')
{
  if (empty($var)) {
    global $wp_query;
    if (!isset($wp_query->max_num_pages))
      return;
    $pages = $wp_query->max_num_pages;
  } else {
    global $$var;
    if (!is_a($$var, 'WP_Query'))
      return;
    if (!isset($$var->max_num_pages) || !isset($$var))
      return;
    $pages = absint($$var->max_num_pages);
  }
  if ($pages < 1)
    return;
  $page = get_query_var('paged') ? get_query_var('paged') : 1;
  echo  $pages;
}
