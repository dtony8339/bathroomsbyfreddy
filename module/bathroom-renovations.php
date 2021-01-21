<?php

$smarty->assign("seo_title", 'Bathroom Renovations - Bathroom Experts | Bathrooms By Freddy');
$smarty->assign("seo_desc", 'Bathroom Renovations. We are experts in renovating, repairing and maintaining bathrooms. Affordable price packages available. Click here and get a quote today!');
$smarty->assign("seo_keywords", 'bathroom renovations, bathroom renovation, quotation for bathroom renovation, small bathroom renovations, whole bathroom renovation, bathroom renovations uk');
/*

$result=get_Blog(1,0);
$blog=[];
while ($row = mysql_fetch_array($result)){	
	$blog[]=$row;
}
$smarty->assign("blog", $blog);
/***************************/


//server content 




// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'bathroom-renovations-and-extensions.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');