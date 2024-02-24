<div class="all">
	
	<header>

		<?php
		/**
		 * TODO
		 * 
		 * The Site Logo
		 */
		?>

		<?php
			wp_nav_menu(
				array(
					'theme_location'  	=> 'primary',
					'container'		  	=> 'nav',
					'container_id'    	=> '',
					'container_class' 	=> '',
					'menu_class'      	=> '',
					'list_item_class'	=> '',
					'fallback_cb'		=> false,
				)
			);
		?>

	</header>