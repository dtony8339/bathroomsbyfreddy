<?php
// SEO INFORMATION
$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');

$smarty->assign('painting_h', 'Welcome to Bathrooms ByFreddy');
$smarty->assign('painting_p', "We love doing bathrooms! Our bathroom team has the benefit of experienced licensed builders who can build or renovate your bathroom from the ground up in any style.");
//content
$smarty->assign("we_h","WHAT WE DO");
$smarty->assign("we_p","The ByFreddy bathroom team does every aspect of bathrooms from construction to electrical, plumbing, tiling, stonework, carpentry, fixtures and glass. We do this for homes, businesses and rural properties. Our specialty is customisation, creating what you want. We'll do jobs from the smallest to the largest, be it renovation, new building, extending or repairing.");

$smarty->assign("get_h","Get In Touch");
$smarty->assign("get_p","Call us on 02-9098-6920 to get ideas for your bathroom and book a free quote.");
$results = json_decode(file_get_contents('https://admin.byfreddy.io/index.php/admin_modules/area_selection/get?id=160'));

$area_selection = array();
foreach($results as $result){
	$area_selection[] = (array)$result;
}
$smarty->assign("area_selection", $area_selection);
$cats_array=get_assigned();
$smarty->assign("cats", $cats_array);
$totalwork=get_ourworktotal();
$smarty->assign("totalwork", $totalwork);
$totalreviws=get_reviws_count();
$smarty->assign("totalreviws", $totalreviws);
$reviews_average = get_reviws_average();
$smarty->assign("reviews_average",$reviews_average);
$totalquotes=get_quotes_count();
$smarty->assign("totalquotes", $totalquotes);
$totalfencer=get_fencer_count();
$smarty->assign("totalfencer", $totalfencer);

// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'home.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');
