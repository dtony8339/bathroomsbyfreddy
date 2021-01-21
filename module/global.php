<?php
$result=get_ProductBathrooms(1);
$product_bathrooms=[];

while ($row = mysqli_fetch_array($result)){
	$product_bathrooms[]=$row;
}

$our_work_menu_check=get_PlumbersProject();
$smarty->assign("products", $product_bathrooms);
$smarty->assign("our_work_menu_check", $our_work_menu_check);
$smarty->assign("session_fname", $_SESSION["name"]);
$team_menu_check=get_team();
$smarty->assign("team_menu_check", $team_menu_check);
$our_reviws_menu_check=get_reviws_count();
$smarty->assign("our_reviws_menu_check", $our_reviws_menu_check);

$results = json_decode(file_get_contents('https://admin.byfreddy.io/index.php/admin_modules/area_selection/get?id=1'));

$area_selection = array();
foreach($results as $result){
	$area_selection[] = (array)$result;
}

$smarty->assign("area_selection", $area_selection);

$countries = json_decode(file_get_contents('https://admin.byfreddy.io/assets/js/mobile_code.js'));
$filtered = array();

foreach($countries as $country) {
	array_push($filtered, (int)$country->country_code);
}

$filter_final = array_map(function($e) use (&$countries) {

    foreach($countries as $key => $country) {
        if ($e == $country->country_code) {
            $e = $country;
            unset($countries[$key]);
            break;
        }
    }
    return $e;
}, array_unique($filtered));


$smarty->assign("mobile_code", $filter_final);
$client_country=ip_info($_SERVER['REMOTE_ADDR'], "Country");
$smarty->assign("client_country_name", $client_country);
$sites_menuurl=get_sites();
$smarty->assign("sites_menuurl", $sites_menuurl);

?>