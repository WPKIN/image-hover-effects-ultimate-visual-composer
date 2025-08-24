<?php

namespace OXI_FLIP_BOX_PLUGINS\Includes\Admin;

/**
 * Admin Menu Class
 *
 * @since 2.10.1
 */
class Menu{

	public function __construct() {
		add_action( 'admin_menu', [ $this, 'regiter_admin_menu' ] );
	}

	public function regiter_admin_menu() {
		
	}
}