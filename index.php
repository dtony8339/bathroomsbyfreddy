<?php

 require "config.inc.php";

 
require "helpers/functions.php";

echo 'a';
require(''   . $config['smarty_lib'] . 'Smarty.class.php');
// Smarty Template Engine
echo 'b';

$smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;



// END

//require('' . $config['web_pages'] . 'global.php');
require('module/global.php');

die('test');


if (!isset($_GET['route'])) {


    //include("" . $config['web_pages'] . "home.php");
    include("module/home.php");

    exit;

}elseif (!is_numeric($_GET['mid']) && isset($_GET['mid'])) {
 

    //echo $_GET['mid'];
   // exit;
   $id=(isset($_GET['mid'])?$_GET['mid']:null);

  

     include("" . $config['web_pages'] . "news_details.php");

   


    exit;



}elseif (!is_numeric($_GET['tlink']) && isset($_GET['tlink']) && $_GET['route']!='theteam') {
    


    $link=(isset($_GET['route'])?$_GET['route']:null);
    $sublink=(isset($_GET['tlink'])?$_GET['tlink']:null);
        include("" . $config['web_pages'] . "landing.php");



    exit;



}  else {

    

    $page = $_GET['route'];
  

    switch ($page) {

        case "areas":
            include("" . $config['web_pages'] . "areas.php");
            break;

        case "get-quote":
            include("" . $config['web_pages'] . "get-quote.php");
            break;

        case "contact-us":
            include("" . $config['web_pages'] . "contactus.php");
            break;

        case "the-team":
            include("" . $config['web_pages'] . "theteam.php");
            break;
case "theteam":           

         $areaname=(isset($_GET['areaname'])?$_GET['areaname']:null);
$tname=(isset($_GET['tname'])?$_GET['tname']:null);
            include("" . $config['web_pages'] . "single-team.php");         

            break;
        case "price-guide":
            include("" . $config['web_pages'] . "price-guide.php");
            break;

        case "news":
            include("" . $config['web_pages'] . "news.php");
            break;

        case "our-work":
            include("" . $config['web_pages'] . "ourworks.php");
            break;

		case "product-1":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
			include("" . $config['web_pages'] . "product_1.php");
            break;

        

        case "about-us":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "about-us.php");
            break;

        case "vanity-units-basins-and-baths":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "vanity-units-basins-and-baths.php");
            break;

        case "showers-glass-and-accessories":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "showers-glass-and-accessories.php");
            break;

        case "bathroom-plumbing":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-plumbing.php");
            break;

        case "bathroom-masonry-tiling-and-floors":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-masonry-tiling-and-floors.php");
            break;

        case "bathroom-electricals":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-electricals.php");
            break;

        case "bathroom-carpentry":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-carpentry.php");
            break;

        case "bathroom-renovations-and-extensions":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-renovations-and-extensions.php");
            break;

        case "bathroom-repairs-and-maintenance":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "bathroom-repairs-and-maintenance.php");
            break;

        case "new-bathrooms-and-ensuites":
         $id=(isset($_GET['mid'])?$_GET['mid']:null);
            include("" . $config['web_pages'] . "new-bathrooms-and-ensuites.php");
            break;
case "reviews":

         $id=(isset($_GET['mid'])?$_GET['mid']:null);

            include("" . $config['web_pages'] . "reviews.php");        

            break;
        default:
            include("" . $config['web_pages'] . "404.php");
            break;
    }
}

?>
