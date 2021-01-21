<?php
$smarty->assign("seo_title", 'News' . slogan);
$smarty->assign("seo_desc", "");
$smarty->assign("seo_keywords", "");


$result=get_Blogs(160,1);
$blogs=[];
while ($row = mysqli_fetch_array($result)){	
	$blogs[]=$row;
}
// echo '<pre>';
// print_r($blogs);exit;
$smarty->assign("blogs", $blogs);

$result=get_sidebar_Blogs(160,1);
//  echo '<pre>';
//  print_r(mysqli_fetch_array($result));exit;
$blog=[];
while ($row = mysqli_fetch_array($result)){
    $blog[]=$row;
}

$smarty->assign("sidebar_blog", $blog);

// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'news.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');