<?php
$smarty->assign("seo_title", 'Indoor Romsey - Romsey Decor to Newbury to South Hampton we have you covered hampshire' . slogan);
$smarty->assign("seo_desc", "indoor romsey by freddy");
$smarty->assign("seo_keywords", "");
/*

$result=get_Blog(1,0);
$blog=[];
while ($row = mysql_fetch_array($result)){	
	$blog[]=$row;
}
$smarty->assign("blog", $blog);
/***************************/

// Contact content 


//$smarty->assign("contact_number","Main : 07451 - 279908");
$smarty->assign("contact_number","07451 - 279908");              
$smarty->assign("hampshire","Hampshire : 07451 - 270045");
$smarty->assign("berkshire","Berkshire : 07418 - 310455");
$smarty->assign("surrey","Surrey : 07418 -312588");
$smarty->assign("wiltshire","Wiltshire : 07418 - 312476");
$smarty->assign("cheshire","Cheshire : 07418 - 312487");
$smarty->assign("contact_h3_heading","GET IN TOUCH WITH US");
$smarty->assign("contact_para_desc","Are you looking for <span class='gold'>Painting expert?</span> Feel free to contact us for general inquiries or any questions regarding our services. ");
$smarty->assign("contact_para_desc1","For more informations regarding our services, please call our friendly staff on:");
$smarty->assign("contact_para_desc2","or email us at:");
$smarty->assign("contact_para_desc3","admin@freddyit.com"); 
$smarty->assign("contact_para_desc4","154, ARC aparti villa, Sanandreas, USA");
$smarty->assign("contact_link_text","<span class='cnt-big'>Click Here for an</span>
						<span class='cnt-small'>obligation-free quote</span>");




// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'contactus.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');