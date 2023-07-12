<?php

/**
 * 導航欄logo
 */
function logo_ft()
{
  $src = get_option_ft('logo_src') ?
    '<img src="' . get_option_ft('logo_src') . '" alt="' . get_bloginfo('name') . '" class="headerlogo">'
    :
    bloginfo('name');
  return $src;
}

if (function_exists('register_nav_menus')) {
  register_nav_menus(
    array(
      'navs'   => '導航爛d(`･∀･)b',
    )
  );
}
function nav_menu_ft($location = 'navs', $dropdowns = 'dropdown')
{
  $menu = '' . str_replace("</ul></div>", "", preg_replace(
    "/<div[^>]*><ul[^>]*>/",
    "",
    wp_nav_menu(array(
      'theme_location' => $location,
      'fallback_cb' => 'bootstrap_5_wp_nav_menu_walker::fallback',
      'depth' => 0,
      'menu_class' => $dropdowns,
      'walker' => new bootstrap_5_wp_nav_menu_walker(),
      'echo' => false
    ))
  )) . '';
  return $menu;
}
