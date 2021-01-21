<?php
/* Smarty version 3.1.31, created on 2020-05-17 21:29:08
  from "/home/ukbathroomsbyfr/public_html/templates/common/header_scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec1aca46a6675_42847449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9033af4408b16530ae0978145454b3fee7ffbfce' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/common/header_scripts.tpl',
      1 => 1558963542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1aca46a6675_42847449 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bathrooms By Freddy</title>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seo_desc']->value;?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo @constant('root_img');?>
favicon.ico" type="image/x-icon">
<!--Include Bootstrap CSS-->
	<link rel="stylesheet" href="<?php echo @constant('root_css');?>
bootstrap.min.css">

	<!--Include Custom CSS-->
	<link rel="stylesheet" href="<?php echo @constant('root_css');?>
style.css">
	
	<!--Include Fontawesome CSS-->
	<link rel="stylesheet" href="<?php echo @constant('root_css');?>
font-awesome.min.css">
	<link href="<?php echo @constant('root_css');?>
select2.min.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo @constant('root_img');?>
favicon.ico" type="image/x-icon">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLipBUfCo0peHy8RvaO4UH3-W_1Fi9WA&libraries=places"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	function geolocate()
	{
	  var input = document.getElementById('address');
        var searchBox = new google.maps.places.SearchBox(input);
	}
	<?php echo '</script'; ?>
>
    
<!-- Global site tag (gtag.js) - Google Ads: 753317577 -->
<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=AW-753317577"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-753317577');

<?php echo '</script'; ?>
>
</head>

<body>
<?php }
}
