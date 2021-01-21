<?php

$smarty->compile_check = false; 
$smarty->caching = true; 

$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');
if($id)
{
	
$result=get_PlumbersProjectId($id);

$name=get_PlumbersTrademan($id);
}
else
$result=get_PlumbersProject();
// echo '<pre>';
// print_r($result);exit;
$smarty->assign("project", $result);
if($id)
$smarty->assign("name", $name);




// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'ourworks.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');