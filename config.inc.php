<?php
//require "../ProfessionalFreddyau/config.inc.php";
ob_start();
error_reporting(0);
session_start();

//ini_set("date.timezone", "Asia/Karachi");
//date_default_timezone_set("Asia/Karachi");

//DATABASE SETTINGS

// $config['host'] 		= 'localhost';
// $config['user'] 		= 'root';
// $config['pass'] 		= '';
// $config['dbname']	 	= 'professionalfencing_db';
$config['host'] 		= '10.131.137.35';
$config['user'] 		= 'byfreddyprod';
$config['pass'] 		= 'eBTo_012Abus0159510';
$config['dbname']		= 'BY_FREDDY';

// for development
//  $config['host'] 		= '10.131.137.35';
//  $config['user'] 		= 'development';
//  $config['pass'] 		= 'eBTo_521Abus8500156';
// $config['dbname']		= 'BY_FREDDY_BACKUP';


$conn 		= mysqli_connect($config['host'],$config['user'],$config['pass'],$config['dbname']);
//$config['db'] 			= mysqli_select_db($config['dbname'],$config['link']);

/*
$config['host'] 		= '10.131.51.6';
$config['user'] 		= 'sl1ght';
$config['pass'] 		= '1z2x3c@!!sL1ght@';
$config['dbname']	 	= 'professionalfencing_db';
$config['link'] 		= mysql_connect($config['host'],$config['user'],$config['pass']);
$config['db'] 			= mysql_select_db($config['dbname'],$config['link']);
*/


//HTTP REGUEST URLS FOR CSS, IMAGES AND JS newsite\resources
$config['siteurl'] 				= "https://".$_SERVER['SERVER_NAME']."/";
$siteurl 						= $config['siteurl'];
$config['sourceRoot']           = $_SERVER['DOCUMENT_ROOT'].'/';
$config['siteurl_admin'] 	    = $config['siteurl']."administrator/";
$config['root_img'] 			= $config['siteurl']."resources/img/";
$config['root_product_img'] 	= $config['siteurl']."resources/category_images/";
$config['root_product_img'] 	= $config['siteurl']."resources/product_images/";
$config['root_blog_img'] 		= $config['siteurl']."resources/blog_images/";
$config['root_css'] 			= $config['siteurl']."resources/css/";
$config['root_js'] 				= $config['siteurl']."resources/js/";
$config['core_action'] 			= $config['siteurl']."action/";


///////////////////Smarty Variables 
$config['web_pages'] = $config['sourceRoot'] . "module/";
$config['web_helpers'] = $config['sourceRoot'] . "helpers/";
$config['smarty_lib'] = $config['sourceRoot'] . "libs/";
$config['smarty_templates'] = $config['sourceRoot'] . "templates/";
$config['smarty_config'] = $config['sourceRoot'] . "config/";

define('siteurl', $config['siteurl']);
define('root_css', siteurl . 'resources/css/');
define('root_fonts', siteurl . 'resources/fonts/');
define('root_js', siteurl . 'resources/js/');
define('root_img', siteurl . 'resources/img/');
define('root_cat_img', siteurl . 'resources/category_images/');
define('root_product_img', siteurl . 'resources/product_images/');
define('root_blog_img', siteurl . 'resources/blog_images/');
define('root_action', siteurl . 'action/');
//define('core',$config['action'] );
define('smarty_config', $config['smarty_config']);

/////////////END 

/////////////////////////// Website Title & SLogon
define('slogan', '');  
/////////////END

$site_mantain = 0; // Set 1 for mantainance

if($site_mantain) {
	if($_GET['status']=="backup"){
		$_SESSION['sitelive'] = "maintenance";
	}else{
		if (strstr($_SERVER['SCRIPT_NAME'], 'manager/')==FALSE) {
			if(!isset($_SESSION['sitelive'])) {
				echo "<br><br><br><br><br><br>
				<center><h1>Hello Everyone, <br><br> We are upgrading our website with some new features pleas check back the website in short time..Thankyou for your paitiences.</h1></center>";
				exit;
			}
		}
	}
}



?>
