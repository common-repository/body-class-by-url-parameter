<?php
/*
Plugin Name: Body Class By URL Parameter
Description: It adds CSS classes to the body depending on the parameters included in the URL
Author: Jose Mortellaro
Author URI: https://josemortellaro.com
Version: 0.0.2
*/
/*  This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

add_filter( 'body_class',function( $classes ){
  if( !empty( $_GET ) ){
    foreach( $_GET as $k => $v ){
      $classes[] = 'bc-'.esc_attr( sanitize_text_field( $k.'-'.$v ) );
    }
  }
  return $classes;
} );
