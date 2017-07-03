<?php

$lang['msg[being_used_1]'] 			= 'this ';
$lang['msg[being_used_2]'] 			= ' is already being used.';

//app default configs
$lang['app[skin]'] 		='skin-1'; //no-skin //skin-1 //skin-2 //skin-3 no-skin
$lang['app[name]'] 		='Alzen | ';
$lang['app[name_full]']	='Alzen Management System';
$lang['app[copyright]'] ='Copyright © 2017 Alzen8work';
$lang['app[welcome]'] 	='welcome';
$lang['app[slogan]'] 	='';
$lang['alog[added]'] 	='added';
$lang['alog[edited]'] 	='edited';
$lang['alog[deleted]'] 	='deleted';

// need move to MY_Constants.php
$upload_root 					= APPPATH.'../uploads/';
$upload_root_public				= base_url('uploads');
$lang['dir[uploads]']			= $upload_root;
$lang['dir[upload_profile]']	= $upload_root.'profile/';
$lang['url[upload_profile]']	= $upload_root_public.'/profile/';
$lang['dir[upload_company]']	= $upload_root.'company/';
$lang['url[upload_company]']	= $upload_root_public.'/company/';
$lang['dir[temp]']				= APPPATH.'../temp/';
