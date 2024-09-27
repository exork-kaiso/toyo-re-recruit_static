<?php

	// body_class() にスラッグを追加しました。
	function pageName_class($classes = '') {
		if (is_page()) {
			$page = get_page(get_the_ID());
			$classes[] = $page->post_name;
		}
		return $classes;
	}
	add_filter('body_class','pageName_class');

	function toyo_re_recruit_scripts() {

		// スタイルシートの読み込み
		wp_enqueue_style( 'destyle', 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array(), "2024-09-27-02");
		wp_enqueue_style( 'scroll-hint', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), "2024-09-27-02");
		// wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), "1.0");
		wp_enqueue_style( 'common-style', get_stylesheet_directory_uri() . '/css/style.css', array(), "1.0");

		// スクリプトの読み込み
		wp_enqueue_script( 'scroll-hint', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array(), "1.0", array('strategy'=>'defer'));
		// wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), "1.0", array('strategy'=>'defer'));
		wp_enqueue_script( 'base-script', get_stylesheet_directory_uri() . '/script/script.js', array(), "1.0", array('strategy'=>'defer'));

		if ( is_front_page() ) {
			wp_enqueue_style( 'front-page', get_stylesheet_directory_uri() . '/css/front-page.min.css', array("common-style"), "2024-09-27-02");

			wp_enqueue_script( 'front-page-script', get_stylesheet_directory_uri() . '/script/front-page.js', array("base-script"), "1.0", array('strategy'=>'defer'));
		}

		if ( is_page('about') ) {
			wp_enqueue_style( 'about-style', get_stylesheet_directory_uri() . '/css/about.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('uniqueness') ) {
			wp_enqueue_style( 'uniqueness-style', get_stylesheet_directory_uri() . '/css/uniqueness.min.css', array("common-style"), "2024-09-27-02");

			wp_enqueue_script( 'uniqueness-script', get_stylesheet_directory_uri() . '/script/uniqueness.js', array("base-script"), "1.0", array('strategy'=>'defer'));
		}

		if ( is_page('message') ) {
			wp_enqueue_style( 'message', get_stylesheet_directory_uri() . '/css/message.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('crosstalk') ) {
			wp_enqueue_style( 'crosstalk', get_stylesheet_directory_uri() . '/css/crosstalk.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('recruitment') ) {
			wp_enqueue_style( 'recruitment-style', get_stylesheet_directory_uri() . '/css/recruitment.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('career') ) {
			wp_enqueue_style( 'career', get_stylesheet_directory_uri() . '/css/career.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('intern-lp') ) {
			wp_enqueue_style( 'intern-lp', get_stylesheet_directory_uri() . '/css/intern-lp.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('career-lp') ) {
			wp_enqueue_style( 'career-lp', get_stylesheet_directory_uri() . '/css/career-lp.min.css', array("common-style"), "2024-09-27-02");
		}

		if ( is_page('career-lp') ) {
			wp_enqueue_style( 'career-lp', get_stylesheet_directory_uri() . '/css/career-lp.min.css', array("common-style"), "1.0");
		}

		// 	wp_enqueue_script( 'accordion-script', get_stylesheet_directory_uri() . '/script/accordion.js', array(), "1.0", array('strategy'=>'defer'));
		// }

		// if ( is_post_type_archive('member') ) {
		// 	wp_enqueue_style( 'archive-member-style', get_stylesheet_directory_uri() . '/css/archive-member.min.css', array("common-style"), "2024-09-27-02");
		// 	wp_enqueue_script( 'checkbox-script', get_stylesheet_directory_uri() . '/script/checkbox.js', array(), "1.0", array('strategy'=>'defer'));
		// }

		if ( is_post_type_archive('people') || is_singular('people') ) {
			wp_enqueue_style( 'people', get_stylesheet_directory_uri() . '/css/people.min.css', array("common-style"), "2024-09-27-02");
		}

		// if ( is_post_type_archive('requirement') || is_singular('requirement') ) {
		// 	wp_enqueue_style( 'requirement-style', get_stylesheet_directory_uri() . '/css/requirement.min.css', array("common-style"), "2024-09-27-02");
		// }


	}
	add_action( 'wp_enqueue_scripts', 'toyo_re_recruit_scripts' );

	// タイトルの出力
	function title_setup(){
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'title_setup' );

	// 管理バーを非表示にする。
	add_filter( 'show_admin_bar', '__return_false' );
