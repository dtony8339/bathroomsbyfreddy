<?php
$smarty->assign("seo_title", 'Painting By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');

// echo $id;
// exit;
// $id = $_GET['mid'];
$result=get_BlogByID($id,1);
//$result=get_Blogs2($id,1);
$blog=[];
while ($row = mysqli_fetch_array($result)){	
	$blog[]=$row;
}
$result1=get_BlogByID($id,1);
$row1 = mysqli_fetch_array($result1);

$smarty->assign("seo_title", $row1['metatitle']);
//echo "AAAA".$metadescription=$row1['metadescription'];
$smarty->assign("seo_desc", $row1['metadescription']);

$smarty->assign("seo_keywords", $row1['metakeywords']);
// echo '<pre>';
// print_r($blog);exit;
$smarty->assign("blog", $blog);


//$smarty->display('' . $config['smarty_templates'] . 'test.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'news_details.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');
