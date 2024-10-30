<?php
    /*
    Plugin Name: Cartmagnet publisher script
    Description: The plugin embedding cartmagnet script for publisher on each page
    Author: Tal Ben Shalom
    Version: 1.0
    Author URI: http://www.cartmagnet.com
    License: GPL2

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    */
    

function enqueue_cartmagnet_publisher_script() {
	wp_enqueue_script( 'cartmagnet_publisher_script', 'http://publisherjs.cartmagnet.com/cm.publisher.js', array(),null, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_cartmagnet_publisher_script' );


?>