<?php 
$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');



// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'price-guide.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');

 ?>