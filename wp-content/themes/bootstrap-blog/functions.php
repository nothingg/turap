<?php
	
	function wpt_theme_styles() {
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

		wp_enqueue_style( 'Sans_css', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext' );
		wp_enqueue_style( 'Merriweather_css', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' );
		wp_enqueue_style( 'bootstrapcdn', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	}
	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	function wpt_theme_script()
	{
		wp_enqueue_script('main_js',get_template_directory_uri().'/js/jquery/jquery-1.11.1.min.js',array('jquery'),'',true);
		wp_enqueue_script('jquery_js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
		wp_enqueue_script('themes_js',get_template_directory_uri().'/js/modules/color-themes.js',array('jquery'),'',true);
		wp_enqueue_script('cookie_js',get_template_directory_uri().'/js/cookie.js','','',true);

	}
	add_action('wp_enqueue_scripts','wpt_theme_script');


	