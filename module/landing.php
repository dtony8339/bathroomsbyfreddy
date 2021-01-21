<?php
// SEO INFORMATION
$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", "");
$smarty->assign("seo_keywords", "");

//$result1=get_Blogpage(176,$link,$sublink,1);
$result1=get_Blogpage($link,$sublink,1,160);
$rowcount=mysqli_num_rows($result1);
if($rowcount==1)
{
$row1 = mysqli_fetch_array($result1);

$smarty->assign("seo_title", $row1['metatitle']);
$smarty->assign("seo_desc", $row1['metadescription']);

$smarty->assign("seo_keywords", $row1['metakeywords']);
$smarty->assign("headertitle", $row1['title']);
$smarty->assign("linktitle", $row1['linktitle']);
$smarty->assign("sublink", $row1['sublink']);
$smarty->assign("headerdescription", $row1['headerdescription']);
$smarty->assign("mainheader", $row1['mainheader']);
$smarty->assign("maintext", $row1['Content']);
$smarty->assign("featuretext", $row1['featuretext']);
$smarty->assign("featuredescription", $row1['featuredescription']);

$smarty->assign("featureproducttitle1", $row1['featureproducttitle1']);
$smarty->assign("featureproductsubtitle1", $row1['featureproductsubtitle1']);
$smarty->assign("featureproductlink1", $row1['featureproductlink1']);

$smarty->assign("file1", $row1['file1']);

$smarty->assign("featureproducttitle2", $row1['featureproducttitle2']);
$smarty->assign("featureproductsubtitle2", $row1['featureproductsubtitle2']);
$smarty->assign("featureproductlink2", $row1['featureproductlink2']);
$smarty->assign("file2", $row1['file2']);

$smarty->assign("mainlinktitle", $row1['mainlinktitle']);
$smarty->assign("mainlinktext", $row1['mainlinktext']);
$smarty->assign("mainlink", $row1['mainlink']);
$smarty->assign("phone", $row1['phone']);
$smarty->assign("topmessage", $row1['topmessage']);
$result=get_testimonials($row1['testimonial'],$row1['site_project']);
//print_r($result);
$testimonials=[];
while ($row = mysqli_fetch_array($result)){	
	$testimonials[]=$row;
}
$smarty->assign("testimonials", $testimonials);
$resultourwork=get_ourworkslanding($row1['ourworks']);
//print_r($resultourwork);

$smarty->assign("ourworks", $resultourwork);
$smarty->display('' . $config['smarty_templates'] . 'landing.tpl');
}
else
{
$smarty->assign("main_heading", "Some Thing Went Wrong!!!");
$smarty->assign("sub_heading", "<br><br>OOOPS The page is broken or not found<br><br> ");
$smarty->assign("navigation", "true");
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . '404.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');
}



