<?php

$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');
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
$smarty->display('' . $config['smarty_templates'] . 'new-bathrooms-and-ensuites.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');