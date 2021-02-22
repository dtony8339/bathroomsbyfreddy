<?php

// SEO INFORMATION

$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');
		

//// Home page banner Steps
$smarty->assign("main_heading", "Some Thing Went Wrong!!!");
$smarty->assign("sub_heading", "<br><br>OOOPS The page is broken or not found<br><br> ");
$smarty->assign("navigation", "true");

///////////END

// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . '404.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');