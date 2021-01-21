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

// Contact content 


$smarty->assign("contact_number","02380-989130");
$smarty->assign("contact_h3_heading","GET IN TOUCH WITH US");
$smarty->assign("contact_para_desc","Are you looking for Bathrooms expert? Feel free to contact us for general inquiries or any questions regarding our services. ");
$smarty->assign("contact_para_desc1","For more informations regarding our services, please call our friendly staff on:");
$smarty->assign("contact_para_desc2","or email us at:");
$smarty->assign("contact_para_desc3","admin@freddyit.com");
$smarty->assign("contact_link_text","<span class='cnt-big'>Click Here for an</span>
						<span class='cnt-small'>obligation-free quote</span>");




// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'contactus.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');