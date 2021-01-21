<?php
// echo 'reviws loading...';exit;
$success = $_GET['success'];
$smarty->assign("seo_title", 'Bathrooms Contractors for all indoor and outdoor jobs home and business');

$smarty->assign("seo_desc", "Our experienced Bathrooms contractors do commercial, residential and rural new fitouts, renovations, and repairs.");

$smarty->assign("seo_keywords", "Bathrooms contractors");
$smarty->assign("success", $success);

$reviews=get_reviws();
$smarty->assign("reviews",$reviews);
$reviews_gt_five_counter=get_reviws_count();
$smarty->assign("reviews_gt_five_counter",$reviews_gt_five_counter);
$reviews_average = get_reviws_average();
$smarty->assign("reviews_average",$reviews_average);


// Call Page Templates

$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');

$smarty->display('' . $config['smarty_templates'] . 'reviews.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');