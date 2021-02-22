<?php

function get_OurProductsPlumbers($active){

    GLOBAL $conn;
	$sql = "SELECT * FROM `our_products_plumbers` WHERE `is_active` = $active ORDER BY `is_active` ASC";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
function get_ProductBathrooms($active){
	GLOBAL $conn;
	$sql = "SELECT * FROM `company_products` WHERE `is_active` = $active AND `company_for` = 'BathroomsByFreddy' ORDER BY `is_active` ASC";
	
    return	$result = mysqli_query($conn, $sql)
    
}
function get_Blogpage($link,$sublink,$status,$site_project){

   GLOBAL $conn;

   //$sql = "SELECT * FROM `blog` where site_project='".$id."' and  AND types='Page' AND status=$status";
$sql = "SELECT * FROM `blog` where linktitle='".$link."' and sublink='".$sublink."'   AND site_project='".$site_project."' AND types='Page' AND status=$status";
   $result = mysqli_query($conn, $sql);



   return $result;

}
function get_testimonials($id,$siteid){

    GLOBAL $conn;

    //$sql = "SELECT * FROM `Reviews` where  id IN(".$id.")";
    $sql = "SELECT * FROM `Reviews` where company_id='".$siteid."' AND id IN(".$id.")";

    $result = mysqli_query($conn, $sql);

    

    return $result;

}
function getQuotes($email,$id){
    GLOBAL $conn;
	//$sql = "SELECT * FROM `quickbooks_quotes` LEFT JOIN pipedrive_email ON quickbooks_quotes.BillEmailAddress = pipedrive_email.value LEFT JOIN pipedrive_person ON pipedrive_person.id = pipedrive_email.person_id WHERE quickbooks_quotes.BillEmailAddress = 'waqarulhassan@gmail.com' AND pipedrive_person.company = 1 GROUP BY quickbooks_quotes.BillEmailAddress";
	if (empty($id)) {
		$sql = "SELECT qd.* FROM quotes_link_deal as qd LEFT JOIN pipedrive_person as pp ON qd.pipe_person_id = pp.id LEFT JOIN quickbooks_quotes as qq ON qd.quote_id = qq.q_quotes_id WHERE pp.company = 1 AND qd.approve = 1 AND qq.BillEmailAddress = '$email'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		//print_r($result);
    	return $result;
	}else{
		$sql = "SELECT qd.* FROM quotes_link_deal as qd LEFT JOIN pipedrive_person as pp ON qd.pipe_person_id = pp.id LEFT JOIN quickbooks_quotes as qq ON qd.quote_id = qq.q_quotes_id WHERE pp.company = $id AND qd.approve = 1 AND qq.BillEmailAddress = '$email'";
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
			return $result;
	}
	
}
function getQcTokens(){
    GLOBAL $conn;
	$sql = "SELECT * FROM `quickbooks_tokens`";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	//print_r($result);
    return $result;
}
function getUserId($id){
    GLOBAL $conn;
	if ($id == "all") {
		$sql = "select * from bloggers_users";
	}else{
		 $sql = "select * from bloggers_users where blogger_username = '$id'";
		// die();
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		if(mysqli_num_rows($result)){
			while ( $row = mysqli_fetch_assoc($result) ) {
				return $cus_id =  $row['id'];
			}
			
		 	
		 	//die();
		 	//$site =  $row['site_id'];
		}
      //return $result;
	}
}
function get_invoice_sum($email,$status){
    GLOBAL $conn;
	

	if($status=="all"){
        GLOBAL $conn;
	
		 $sql = "SELECT SUM(total) as finaltotal FROM `freshbook_invoices` WHERE `email` = '$email'";
	
	}elseif($status=="unpaid"){
	
		 $sql = "SELECT SUM(total) as finaltotal FROM `freshbook_invoices` WHERE `email` = '$email' AND  `status` != 'paid' ";
     }else{
	 
	  $sql = "SELECT SUM(total) as finaltotal FROM `freshbook_invoices` WHERE `email` = '$email' AND  `status` = '$status' ";
	 }
      $result = mysqli_query($conn,$sql) or die(mysqli_error());
      return $result;
}

function get_application($email){
    GLOBAL $conn;

	
	$sql = "SELECT * FROM `platform_clients` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    if(mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
		 $cus_id =  $row['id'];
		 $site =  $row['site_id'];
	}



	   $sql = "SELECT platform_apps.*,platform_permission.client_id FROM platform_permission INNER JOIN platform_apps ON platform_permission.app_id=platform_apps.id WHERE platform_permission.client_id = $cus_id AND platform_permission.site_id = 99";

		
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    return $result;

   
}


////////// List of Blogs
function get_OurProductsFreddy($active){
    GLOBAL $conn;
	$sql = "SELECT * FROM `our_products_freddy` WHERE `is_active` = $active ORDER BY `is_active` ASC";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
// function get_Blogs($pid,$status){
//  $sql = "SELECT blog_projects.site_project,blog.id,blog.title,blog.short_content,blog.Content,blog.image FROM blog LEFT JOIN blog_projects ON blog_projects.id = blog.project_id where blog_projects.site_project = $pid and blog.status = $status
// ";

// 	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
// 	return $result;
// }
function get_Blogs2($id,$status){
    GLOBAL $conn;
	$sql = "SELECT * FROM `blog` where id=$id AND status=$status";

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
function get_Work(){
    GLOBAL $conn;
	$sql = "SELECT work_project.*, work_project_img.* FROM work_project, work_project_img order by rand() limit 10";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
function get_TradeWork(){
    GLOBAL $conn;
	$sql = "SELECT work_project.*, work_project_img.* FROM work_project, work_project_img order by rand() limit 10";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
// function get_fencigWork($lim){
// 	$sql = "SELECT DISTINCT tvs1.*, tvs2.* FROM work_project tvs1 JOIN work_project_img tvs2 ON tvs1.id = tvs2.ref_id where tvs1.project_type='fencing' limit 4";
// 	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
// 	return $result;
// }
function get_Project($pro,$id=0){
    GLOBAL $conn;
	if ($id>0){
		//$sql = "SELECT * FROM fencing_project WHERE id=$id ";
		$sql = "SELECT * FROM work_project WHERE project_type = '$pro' and id = $id";
	}else{
		//$sql = "SELECT * FROM fencing_project ORDER BY id DESC";
		$sql = "SELECT * FROM work_project WHERE project_type = '$pro' ORDER BY `work_project`.`id` DESC limit 4";
	}
	
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
	while($data=mysqli_fetch_assoc($result)){
		$data['top_img'] = getTopImage("work_project_img",$data['id']);
		$tmp[] = $data;
	}
	
    return $tmp;
}

function getTopImage($table,$id){
    GLOBAL $conn;
	$sql = "SELECT * FROM $table where ref_id = $id ORDER BY id";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	if(mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
		return $row['img'];
	}
	
	return "";
}
function get_WorkProject($id=0){
    GLOBAL $conn;
	if ($id>0){
		//$sql = "SELECT * FROM fencing_project WHERE id=$id ";
		$sql = "SELECT * FROM work_project WHERE id = $id";
	}else{
		//$sql = "SELECT * FROM fencing_project ORDER BY id DESC";
		$sql = "SELECT * FROM work_project order by rand() limit 10";
	}
	
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
	while($data=mysqli_fetch_assoc($result)){
		$data['top_img'] = getWorkTopImage("work_project_img",$data['id']);
		$tmp[] = $data;
	}
	
    return $tmp;
}

function getWorkTopImage($table,$id){
    GLOBAL $conn;
	$sql = "SELECT * FROM $table where ref_id = $id ORDER BY id";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	if(mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
		return $row['img'];
	}
	
	return "";
}

function get_email($email){
    GLOBAL $conn;
	$sql = "SELECT * FROM `platform_clients` WHERE email = '$email'";
	 $result = mysqli_query($conn,$sql) or die(mysqli_error());
    return $result;
}



/*
Added by: Alexis
Date: 24 Nov 2017
*/

function getProject($id=0){
    GLOBAL $conn;
	if ($id==0){
		$sql="SELECT * FROM blog_projects ORDER BY title ASC";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		
		return $result; 
	}else{
		$sql="SELECT * FROM blog_projects WHERE id=$id";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		$row = mysqli_fetch_assoc($result);
		
		return $row; 
	}
	
}

function get_blog_cat(){
    GLOBAL $conn;
	$sql = "SELECT * FROM `blog_category`";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}


function get_blog2($user_id,$project_id){
	$user = strtolower(str_replace("_"," ",$user_id));
	$id = get_user_id($user);
	$sql = "SELECT count(1) AS n FROM `blog` WHERE user_id=$id AND project_id=$project_id";	
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	$row=mysqli_fetch_assoc($result);
	
	return $row['n'];
}

function get_user_id($user){
    GLOBAL $conn;
	$sql = "SELECT id FROM `bloggers_users` WHERE blogger_username='$user'";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	if(mysqli_num_rows($result) > 0 ){
		$row=mysqli_fetch_assoc($result);
		return $row['id'];
	}
	
	return 0;
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    GLOBAL $conn;
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
function get_sidebar_Blogs($id,$status){

    GLOBAL $conn;

    //$sql = "SELECT  blog_projects.site_project,blog_category.category as blog_ctgry,blog.id,blog.title,blog.short_content,blog.Content,blog.image FROM blog LEFT JOIN blog_projects ON blog_projects.id = blog.project_id JOIN blog_category on blog.category_id=blog_category.id where blog_projects.site_project != $id and blog.status = $status ORDER BY RAND() limit 3";

$sql = "SELECT blog_projects.site_project,blog_category.category as blog_ctgry,blog.id,blog.title,blog.linktitle,blog.short_content,blog.Content,blog.image,siteassociate.name as siteurl FROM blog INNER JOIN blog_projects ON blog_projects.id = blog.site_id INNER JOIN blog_category ON blog.category_id=blog_category.id INNER JOIN siteassociate ON blog_projects.site_project = siteassociate.id where siteassociate.id != $id and siteassociate.country='UNITED KINGDOM' and blog.status = $status ORDER BY RAND() limit 3";

    $result = mysqli_query($conn, $sql);



    return $result;

}
function get_Blogs($id,$status){

    GLOBAL $conn;

   

$sql = "SELECT blog_projects.site_project,blog.id,blog.title,blog.linktitle,blog.short_content,blog.Content,blog.image FROM blog INNER JOIN blog_projects ON blog_projects.id = blog.site_id INNER JOIN siteassociate ON blog_projects.site_project = siteassociate.id where siteassociate.id=$id and blog.status = $status";

    $result = mysqli_query($conn, $sql);

    

    return $result;

}

function get_team()
{

	GLOBAL $conn;
	//$sql = "SELECT tradesman.*FROM tradesman WHERE company_name='https://professionalplumbers.com.au/'";
    $sql = "SELECT *
    FROM tradesman  LEFT join OtherTrades on tradesman.id=OtherTrades.tradesid WHERE tradesman.company_name='https://bathroomsbyfreddy.co.uk' OR OtherTrades.sitename='https://bathroomsbyfreddy.co.uk'  ORDER BY image DESC, about_us DESC";
	$result = mysqli_query($conn, $sql);
	while($data= mysqli_fetch_array($result))
	{
        $sqlcompany = "SELECT company_name FROM tradesman_company WHERE tradesman_id=".$data['id']."";
        $resultcompany = mysqli_query($conn, $sqlcompany);
        $data3=mysqli_fetch_array($resultcompany);
        $data['name']=$data['name'];
        $data['grade']=$data['grade'];
        $data['company_name']=$data3['company_name'];
		$sql2 = "SELECT id, title,location FROM work_project WHERE tradesman_id=".$data['id']." order by id DESC limit 4 ";
		$result2 = mysqli_query($conn, $sql2);
		while($data2=mysqli_fetch_array($result2))
		{
			$data2['top_img'] = getTopImage("work_project_img",$data2['id']);
			$data['work'][]=$data2;	
		}
		$tmp[]=$data;
	}
	return $tmp;
}
function get_PlumbersProjectId($ref_id){
    GLOBAL $conn;
	$sql = "SELECT * FROM work_project WHERE project_type = 'plumbers' and tradesman_id=$ref_id";
	
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	while($data=mysqli_fetch_assoc($result)){
		$date = new DateTime($data['date']);
        $data['date_added'] = $date->format("F, Y");
		$data['top_img'] = getTopImage("work_project_img",$data['id']);
		$data['count_image'] = get_PlumbersProjectImg_counter($data['id']);
		$tmp[] = $data;
	}

    return $tmp;
}
function get_PlumbersTrademan($ref_id){
    GLOBAL $conn;
	echo $sql = "SELECT * FROM tradesman WHERE id=$ref_id";
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	while($data=mysqli_fetch_assoc($result)){
		$tmp= $data['name'];
	}
print_r($sql); exit();
    return $tmp;
}

function get_PlumbersProject($ref_id=0){
    GLOBAL $conn;

	if ($ref_id==0){
		//$sql = "SELECT * FROM `plumbers_project` ORDER BY `plumbers_project`.`id` DESC Limit 4";
		$sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' ORDER BY id DESC limit 4";
	}else{
		//$sql = "SELECT * FROM `plumbers_project` WHERE id=$ref_id";
		$sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' and id=$ref_id";
	}
	/*$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;*/
	
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	while($data=mysqli_fetch_assoc($result)){
		$date = new DateTime($data['date']);
        $data['date_added'] = $date->format("F, Y");
		$data['top_img'] = getTopImage("work_project_img",$data['id']);
		$data['count_image']  = get_PlumbersProjectImg_counter($data['id']);
		$tmp[] = $data;
	}
	
    return $tmp;
}

function get_PlumbersProjectImg_counter($id){
//echo 'this is couter function';
    GLOBAL $conn;

    $sql = "SELECT count(ref_id) as imagecount FROM `work_project_img` WHERE ref_id = '$id' ORDER BY id DESC";

    

    $result = mysqli_query($conn, $sql);



    $row = mysqli_fetch_array($result);

    return $row['imagecount'];

}

function get_PlumbersProjectImg($ref_id=0){
    GLOBAL $conn;

	if ($ref_id==0){
		//$sql = "SELECT * FROM `plumbers_project_img` ORDER BY id DESC";
		$sql = "SELECT * FROM `work_project_img` ORDER BY id DESC";
	}else{
		//$sql = "SELECT * FROM `plumbers_project_img` WHERE ref_id=$ref_id ORDER BY `plumbers_project_img`.`img` ASC";
		$sql = "SELECT * FROM `work_project_img` WHERE ref_id=$ref_id ORDER BY id DESC";
	}
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	
	return $result;
}
function get_singleteam($areaname,$tname)
{
    GLOBAL $conn;
    //$sql = "SELECT tradesman.*FROM tradesman WHERE company_name='https://professionalplumbers.com.au/'";
    $sql = "SELECT tradesman.* FROM tradesman LEFT join OtherTrades on tradesman.id=OtherTrades.tradesid WHERE company_name='https://bathroomsbyfreddy.co.uk'  and name='".$tname."' and trade_area='".$areaname." OR OtherTrades.sitename='https://bathroomsbyfreddy.co.uk' '";
    $result = mysqli_query($conn, $sql);
    while($data= mysqli_fetch_array($result))
    {
        $sqltotalq = "SELECT * FROM tradesman_deals WHERE tradesman_id=".$data['id']." and (price>0 OR phoneprice>0)";
        $resulttotalq = mysqli_query($conn, $sqltotalq);
        $totalquoted=mysqli_num_rows($resulttotalq);
        $sqlcompany = "SELECT company_name FROM tradesman_company WHERE tradesman_id=".$data['id']."";
        $resultcompany = mysqli_query($conn, $sqlcompany);
        $data3=mysqli_fetch_array($resultcompany);
        $data['name']=$data['name'];
        $data['grade']=$data['grade'];
        $data['totalquoted']=$totalquoted;
        $data['company_name']=$data3['company_name'];
        $sql2 = "SELECT id, title,location FROM work_project WHERE tradesman_id=".$data['id']." order by id DESC";
        $result2 = mysqli_query($conn, $sql2);
        while($data2=mysqli_fetch_array($result2))
        {
            $data2['top_img'] = getTopImage("work_project_img",$data2['id']);
            $data['work'][]=$data2; 
        }
        $tmp[]=$data;
    }
    return $tmp;
}
function get_BlogByID($id,$status){

    GLOBAL $conn;

    //$sql = "SELECT * FROM `blog` where id=$id AND status=$status";
$linktitle=str_replace('-', ' ', $id);
    $sql = "SELECT * FROM `blog` where linktitle='".$linktitle."' AND status=$status";

    $result = mysqli_query($conn, $sql);

    

    return $result;

}
function get_sites(){

    GLOBAL $conn;

   

$sql = "SELECT * FROM siteassociate where (country = 'UNITED KINGDOM' OR country='UK')  AND (project_name Like '%byFreddy%' OR name Like '%byFreddy%')  order by project_name ASC";

    $result = mysqli_query($conn, $sql);

    

    return $result;

}



function get_FencingProjectId($id){

        GLOBAL $conn;

        //$sql = "SELECT * FROM fencing_project ORDER BY id DESC";

        //$sql = "SELECT * FROM work_project WHERE project_type = 'FencingByFreddy' and tradesman_id=$id ORDER BY id DESC";

    $sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' and tradesman_id=$id ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);    

    while($data=mysqli_fetch_assoc($result)){



        $date = new DateTime($data['date']);

        $data['date_added'] = $date->format("F, Y");

        $data['top_img'] = getTopImage("work_project_img",$data['id']);

        $data['count_image'] = get_FencingProjectImg_counter($data['id']);

        $tmp[] = $data;

    }

    

    return $tmp;

}


function get_TradesmanName($id)

{

        GLOBAL $conn;

    $sql="select name from tradesman where id=$id";

    $$result = mysqli_query($conn, $sql);

    while($data=mysqli_fetch_assoc($result))

    {

        $name=$data['name'];

    }

    return $name;

}


function get_FencingProject($id=0){ 
    GLOBAL $conn;

    if ($id >0 ){ //echo 'here';exit;
        //$sql = "SELECT * FROM fencing_project WHERE id=$id ";

        $sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' and id = $id";

    }else{

        //$sql = "SELECT * FROM fencing_project ORDER BY id DESC";

        $sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' ORDER BY id DESC";

    }

    

    $result = mysqli_query($conn, $sql);

    while($data=mysqli_fetch_assoc($result)){



        $date = new DateTime($data['date']);

        $data['date_added'] = $date->format("F, Y");

        $data['top_img'] = getTopImage("work_project_img",$data['id']);

        $data['count_image'] = get_FencingProjectImg_counter($data['id']);

        $tmp[] = $data;

    }

    

    return $tmp;

}


function get_FencingProjectImg_counter($id){

    GLOBAL $conn;

    $sql = "SELECT count(ref_id) as imagecount FROM `work_project_img` WHERE ref_id = '$id' ORDER BY id DESC";

    

    $result = mysqli_query($conn, $sql);  



    $row = mysqli_fetch_array($result);

    return $row['imagecount'];

}
///////Reviews
function get_reviws(){
   GLOBAL $conn;
     $sql = "SELECT * FROM  Reviews WHERE company_id=160 ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $data[]= $row;
    }
    return $data;

}

function get_reviws_count(){
    GLOBAL $conn;
    $sql = "SELECT * FROM  Reviews WHERE company_id=160";
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    return $rowcount;   
}

function get_reviws_average(){
    GLOBAL $conn;
    $sql = "SELECT ROUND(avg(stars),1) as average_rating FROM reviews WHERE company_id=160";
   //echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    return $data;  
}
//////End Reviews
function get_ourworktotal(){ 
	GLOBAL $conn;

	$sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);
	$totalwork=mysqli_num_rows ($result);
	
    return $totalwork;

}
function get_quotes_count(){
    GLOBAL $conn;
    $sql = "SELECT * FROM  qc_quote_company WHERE site_id=160";
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    return $rowcount;   
}
function get_fencer_count(){
    GLOBAL $conn;
    $sql = "SELECT * FROM  tradesman WHERE trade_type='Bathrooms' and country='UNITED KINGDOM'";
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    return $rowcount;   
}
//////Assigned Area
function get_assigned()

{

	GLOBAL $conn;

	$sql = "SELECT areaid,companyid,status,area_templates.id as areaid,area_template_name FROM assignareacompany,area_templates WHERE companyid='160' and assignareacompany.areaid=area_templates.id  and status=1";
	
	$result = mysqli_query($conn, $sql);
$cats = array(); // init array 
	while($row_area= mysqli_fetch_assoc($result))

	{

		

		$sql2 = "SELECT * FROM area_town WHERE area_template_id=".$row_area['areaid']." order by town_name ASC";

		$result2 = mysqli_query($conn, $sql2);
$subcats = array(); // init array 
		while($row_town=mysqli_fetch_assoc($result2))

		{

		 $subcats[] = $row_town; 	

		}
		
   
$row_area['subcats'] = $subcats; 

     $cats[] = $row_area; 
	}
// 	echo '<pre>';
// print_r($cats);
    return $cats;

}
//////End Assigned Area
function get_ProjectImg_counter($id){
    GLOBAL $conn;
    $sql = "SELECT count(ref_id) as imagecount FROM `work_project_img` WHERE ref_id = '$id' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);
    return $row['imagecount'];
}
function get_ourworkslanding($id){

    GLOBAL $conn;

  

	
 $sql = "SELECT * FROM `work_project` where  id IN(".$id.")";
    $result = mysqli_query($conn, $sql);

	while($data=mysqli_fetch_assoc($result)){



        $date = new DateTime($data['date']);

        $data['date_added'] = $date->format("F, Y");

		$data['top_img'] = getTopImage("work_project_img",$data['id']);

        $data['count_image'] = get_ProjectImg_counter($data['id']);

		$tmp[] = $data;

	}

	

    return $tmp;
}
