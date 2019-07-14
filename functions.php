<?php
	
	// Theme Initial Setup
	if ( !function_exists('prologue_theme_setup') ) :
		function prologue_theme_setup() {
			add_theme_support('title-tag');
		}
	endif;

	add_action( 'after_setup_theme', 'prologue_theme_setup' );