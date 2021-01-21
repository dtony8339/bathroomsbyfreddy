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


//server content 


$smarty->assign("contact_number", "02380-989130");
$smarty->assign("service_h1_heading", "Lorem Ipsum ");
$smarty->assign("service_p_desc", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc1", "In vix summo fastidii deserunt. Ad sea paulo pertinax.");

$smarty->assign("service_data_desc", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc1", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc2", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc3", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc4", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc5", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc6", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc7", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc8", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc9", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc10", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");
$smarty->assign("service_data_desc11", "Duo quot tibique electram ei, eum in liber veritus, tale dictas at mei.");


$smarty->assign("service_p_desc2", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h2_heading", "Lorem Ipsum");
$smarty->assign("service_p_desc3", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading", "Lorem Ipsum");
$smarty->assign("service_p_desc4", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading1", "Lorem Ipsum");
$smarty->assign("service_p_desc5", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading2", "Lorem Ipsum");
$smarty->assign("service_p_desc6", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_data_desc12", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc13", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc14", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc15", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc16", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc17", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc18", "In vix summo fastidii deserunt. ");
$smarty->assign("service_data_desc19", "In vix summo fastidii deserunt. ");

$smarty->assign("service_h3_heading3", "Lorem Ipsum");
$smarty->assign("service_p_desc7", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading4", "Lorem Ipsum");
$smarty->assign("service_p_desc8", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading5", "Lorem Ipsum");
$smarty->assign("service_p_desc9", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc10", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc11", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading6", "Lorem Ipsum");
$smarty->assign("service_p_desc12", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading7", "Lorem Ipsum");
$smarty->assign("service_p_desc13", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading8", "Lorem Ipsum");
$smarty->assign("service_p_desc14", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading9", "Lorem Ipsum");
$smarty->assign("service_p_desc15", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading10", "Lorem Ipsum");
$smarty->assign("service_p_desc16", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");

$smarty->assign("service_h3_heading11", "Lorem Ipsum");
$smarty->assign("service_p_desc17", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc18", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc19", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading12", "Lorem Ipsum");
$smarty->assign("service_p_desc20", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc21", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc22", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc23", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");


$smarty->assign("service_h3_heading13", "Lorem Ipsum");
$smarty->assign("service_p_desc24", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");
$smarty->assign("service_p_desc25", "Lorem ipsum dolor sit amet, ne liber essent eam, vix ad natum ponderum accusamus, tempor iriure eum ad. In pri alii vitae. Salutandi percipitur disputationi mel no, per natum graeci eu. Mei et inermis epicurei reformidans, vis eros qualisque ei, ex cum inani offendit.");




// Call Page Templates
$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');
$smarty->display('' . $config['smarty_templates'] . 'product_1.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');
$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');