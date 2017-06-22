<?php

define('sys_refresh', 				'?86'); //commit revision
define('base_url',					base_url());
define('assets_root', 				base_url.'assets/');

define('sys_captcha_expiration',	'60'); // value in seconds
define('sys_captcha_img_path',		FCPATH.'temp/captcha/');
define('sys_captcha_img_url',		base_url.'temp/captcha');
define('sys_captcha_font_path',		FCPATH.'assets/fonts/Gabriola.ttf');

//jquery
define('jquery_dir', 					assets_root.'vendors/jquery/');
// define('js_sys_jquery', 				base_url.jquery_dir.'jquery.min.js');
define('js_sys_jquery', 				jquery_dir.'jquery-2.2.3.min.js');

//jquery UI
define('css_sys_jquery_ui',				jquery_dir."jquery-ui.min.css");
define('js_sys_jquery_ui', 				jquery_dir.'jquery-ui.min.js');

//bootstrap
define('bootstrap_dir', 				assets_root.'vendors/bootstrap/3.3.7/');
define('js_sys_bootstrap', 				bootstrap_dir.'js/bootstrap.min.js');
define('css_sys_bootstrap',				bootstrap_dir."css/bootstrap.min.css");

//sweetalert
define('sweetalert_dir', 				assets_root.'vendors/sweetalert/');  //http://t4t5.github.io/sweetalert/
define('css_sys_sweetalert',			sweetalert_dir."sweetalert.css");
define('js_sys_sweetalert', 			sweetalert_dir.'sweetalert.min.js');

//fontawesome
define('fontawesome_dir', 				assets_root.'vendors/fontawesome/');
define('css_sys_fontawesome',			fontawesome_dir."font-awesome.min.css");
define('css_sys_fontawesome_animate',	fontawesome_dir."font-awesome-animation.min.css");
define('css_sys_font_ionicons',			"//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css");

//------------------------------------------MODULE scripts ==============================================

// define('js_sys_common', 				assets_root.'js/common.js');
// define('js_sys_init', 			    	assets_root.'js/init.js');
// define('css_custom',					assets_root.'css/custom.css');

define('sys_row_count',				'3');
define('sys_minimum_age',			'16');
define('sys_max_male_age',			'59');
define('sys_max_female_age',		'54');
define('sys_action_log_read_more',	'54');
define('sys_default_currency',      'MYR');


//------------------------------------------THEME===============================================================
