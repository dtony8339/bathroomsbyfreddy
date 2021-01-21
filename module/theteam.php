<?php
$smarty->assign("seo_title", 'Bathrooms By Freddy');
$smarty->assign("seo_desc", '');
$smarty->assign("seo_keywords", '');

/*
$result=get_OurProducts(1,0);
$our_products=[];
while ($row = mysql_fetch_array($result)){	
	$our_products[]=$row;
}
$smarty->assign("our_products", $our_products);
/***************************/

// Team content 

$smarty->assign("contact_number","<span><i class='fa fa-phone'></i> &nbsp; 02380-989130</span>");
$smarty->assign("team_h3_heading","About Our Professional Fencing Sydney Team");
$smarty->assign("team_para_desc","Here at Professional Fencing Sydney we have a cooperative team to cover every role:");
$smarty->assign("team_list_desc","2 supervisors");
$smarty->assign("team_list_desc1","a head fencer");
$smarty->assign("team_list_desc2","site managers");
$smarty->assign("team_list_desc3","3 teams of fencers on the road - all professionally trained by the senior members of the team");
$smarty->assign("team_h3_heading1","Our ethic");
$smarty->assign("team_para_desc1","We're the best!<br>
				We pride ourselves on our fast response and efficient completion of your job.<br>
				We can custom make any combination of materials, fences and gates.");

$smarty->assign("team_h3_heading2","How we work");
$smarty->assign("team_para_desc2","We will send one of our professional fencers to complete your job from start to finish. Unlike many solitary contractors, our response to you will be timely. This is because our big team can do 3 - 4 jobs per day.");

$smarty->assign("team_h3_heading3","Our portfolio");
$smarty->assign("team_para_desc3","Have a look at our <a href='{$siteurl}ourworks/'>portfolio</a> of completed jobs.<br>
				We are happy to show you further examples of our work. Just get in touch with us and let us know what you want.");
$smarty->assign("team_para_desc4","Otherwise call our friendly Professional Fencing Sydney staff on 02-9625 4244  for information or to book an onsite visit.");
$smarty->assign("team_para_desc5","We're here for you from Crow's Nest to Hornsby, Cremorne to Avalon, and Gladesville to Epping.<br>
				See our <a href='{$siteurl}'>Home page</a> for other locations around Sydney.");

$smarty->assign("team_getqt","Click here for an obligation-free quote");
$team=get_team();
// echo '<pre>';
// print_r($team);exit;
$smarty->assign("team",$team);

// Call Page Templates

$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'theteam.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');