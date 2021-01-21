<?php

$team=get_singleteam($areaname,$tname);
$smarty->assign("seo_title", 'Bathroom by Freddy | '.$team[0][trade_type].' | '.$team[0][trade_area].' | '.$team[0][grade].'');

$smarty->assign("seo_desc", "Bathroom By Freddy Team Member (". $team[0][name] .") whos is a (".$team[0][grade].") Book (". $team[0][name] .") Today.");

$smarty->assign("seo_keywords", "Bathroom contractors");
//echo "AAA".$id;

// echo '<pre>';
// print_r($team);exit;
$smarty->assign("team",$team);


// Call Page Templates

$smarty->display('' . $config['smarty_templates'] . 'common/header_scripts.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/header.tpl');

$smarty->display('' . $config['smarty_templates'] . 'single-team.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer.tpl');

$smarty->display('' . $config['smarty_templates'] . 'common/footer_scripts.tpl');