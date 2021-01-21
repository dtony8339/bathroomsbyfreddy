<?php
$smarty->compile_check = false; 

$smarty->caching = true; 



$smarty->assign("seo_title", 'Bathrooms By Freddy');

$smarty->assign("seo_desc", "");

$smarty->assign("seo_keywords", "");



if($id)

{ 

$result=get_FencingProjectId($id);

$name=get_TradesmanName($id);

}

else

$result=get_FencingProject();

/*$fencing_project=[];

while ($row = mysql_fetch_array($result)){	

	$fencing_project[]=$row; 

}*/

// print_r($result);

// exit();

if($id)

$smarty->assign("name", $name);

$smarty->assign("fencing_project", $result);

//$smarty->assign("fencing_project", $fencing_project);

/***************************/









// Call Page Templates

$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');

$smarty->display('' . $config['smarty_templates'] . 'ourworks.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');