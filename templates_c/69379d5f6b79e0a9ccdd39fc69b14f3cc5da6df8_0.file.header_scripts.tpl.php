<?php
/* Smarty version 3.1.31, created on 2021-02-03 12:41:25
  from "C:\xampp\htdocs\bathroomsbyfreddy\templates\common\header_scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_601a8be5828302_51221271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69379d5f6b79e0a9ccdd39fc69b14f3cc5da6df8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bathroomsbyfreddy\\templates\\common\\header_scripts.tpl',
      1 => 1612099004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601a8be5828302_51221271 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
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
