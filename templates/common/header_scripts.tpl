<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bathrooms By Freddy</title>
	<meta name="description" content="{$seo_desc}">
	<meta name="keywords" content="{$seo_keywords}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{$smarty.const.root_img}favicon.ico" type="image/x-icon">
<!--Include Bootstrap CSS-->
	<link rel="stylesheet" href="{$smarty.const.root_css}bootstrap.min.css">

	<!--Include Custom CSS-->
	<link rel="stylesheet" href="{$smarty.const.root_css}style.css">
	
	<!--Include Fontawesome CSS-->
	<link rel="stylesheet" href="{$smarty.const.root_css}font-awesome.min.css">
	<link href="{$smarty.const.root_css}select2.min.css" rel="stylesheet" />
    <link rel="icon" href="{$smarty.const.root_img}favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLipBUfCo0peHy8RvaO4UH3-W_1Fi9WA&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
	function geolocate()
	{
	  var input = document.getElementById('address');
        var searchBox = new google.maps.places.SearchBox(input);
	}
	</script>
    
<!-- Global site tag (gtag.js) - Google Ads: 753317577 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-753317577"></script>
<script>
{literal}
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-753317577');
{/literal}
</script>
</head>

<body>
