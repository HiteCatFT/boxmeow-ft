<?php

function logo_ft()
{
  if (get_option_ft('logo_src')) {
    $src = '<img src="' . get_option_ft('logo_src') . '" alt="' . get_bloginfo('name') . '" class="headerlogo">';
  } else {
    $src = bloginfo('name');
  }
  return $src;
}
