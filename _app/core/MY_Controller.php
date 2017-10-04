<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

/**
 * Description of my_controller
 *
 * @author http://roytuts.com
 */
class MY_Controller extends MX_Controller
{

	protected $vars				= array();
	protected $top_nav			= array();
	protected $sidebar			= array();
	protected $data				= array();



    function __construct() {
        parent::__construct();
        if (version_compare(CI_VERSION, '2.1.0', '<')) {
            $this->load->library('security');
        }
		include_once(APPPATH.'core/MY_Constant.php');
		
		//fix callback form_validation
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;

		$this->vars['metaheaders']		= array();
		$this->vars['metaheaders'][]	= 'charset="utf-8"';
		$this->vars['metaheaders'][]	= 'http-equiv="Content-Type" content="text/html; charset=utf-8"';
		$this->vars['metaheaders'][]	= 'http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"';
		$this->vars['metaheaders'][]	= 'http-equiv="Pragma" content="no-cache"';
		$this->vars['metaheaders'][]	= 'http-equiv="Expires" content="0"';
		$this->vars['metaheaders'][]	= 'http-equiv="Cache-control" content="no-cache"';
		$this->vars['metaheaders'][]	= 'content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"';

		$this->vars['cssfiles']			= array();
		// $this->vars['cssfiles'][]		= css_sys_bootstrap.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_fontawesome.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_fontawesome_animate.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_font_ionicons.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_alt.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_alt_skin.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_alt_skin_blue.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_alt_icheck.sys_refresh;
		// $this->vars['cssfiles'][]		= css_sys_sweetalert.sys_refresh;


		$this->vars['jsfiles']			= array();
		// $this->vars['jsfiles'][]		= js_sys_jquery.sys_refresh;
		// $this->vars['jsfiles'][]		= js_sys_bootstrap.sys_refresh;
		// $this->vars['jsfiles'][]		= js_sys_alt_slimscroll.sys_refresh;
		// $this->vars['jsfiles'][]		= js_sys_alt_icheck.sys_refresh;
		// $this->vars['jsfiles'][]		= js_sys_sweetalert.sys_refresh;
		// $this->vars['jsfiles'][]		= js_sys_alt.sys_refresh;

		//pretty
		//$this->vars['jsfiles'][]		= js_sys_init.sys_refresh;

		//uglify
		// $this->vars['jsfiles'][]		= js_sys_init.sys_refresh;


		$this->vars['jscripts']			= array();
		$this->vars['jscripts'][]		= 'var base_url="'.base_url().'";';


		$this->vars['body']['id']	    = '';
		$this->vars['body']['class']	= ' skin-blue fixed sidebar-mini sidebar-mini-expand-feature ';
// 		$this->vars['body']['style']	= ' height: auto; min-height: 100%; ';
		$this->vars['body']['style']	= '';


		$this->top_nav['user_name']	=
		$this->sidebar['user_name']	= 'Alzen8work';

		$this->data['vars'] 	= $this->vars;
		$this->data['top_nav']  = $this->top_nav;
		$this->data['sidebar']  = $this->sidebar;
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
