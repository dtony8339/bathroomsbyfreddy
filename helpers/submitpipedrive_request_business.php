<?php 
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require "../config.inc.php";
 $site_root="https://bathroomsbyfreddy.co.uk/";

 //$site_root="http://localhost/professionalfreddy/";

GLOBAL $conn;
//echo $_POST['product'] ;
foreach($_POST['pproduct'] as $selected){
 $product = $product." - ".$selected;

}
//echo $product;

 $product=substr($product,2);

 $note_product ="interested in :".$product;

$inquery = $_POST['inquery'];

$cname  = $_POST['cname'];


////////caddress//////
$caddress ='';

$l1= $_POST['first_line3'];
$l2= $_POST['second_line3'];
$l3= $_POST['third_line3'];
$pt= $_POST['post_town3'];


$chk_addressc = $_POST['chk_show_hide2'];

if($chk_addressc!=1){
  $caddress =  $_POST['first_line2'].' '.$_POST['second_line2'].' '.$_POST['third_line2'].' '.$_POST['post_town2'];
    
}else{
  $caddress =  '';
}
// echo $caddress;exit;
 // $caddress  = $_POST['caddress'];
////////caddress//////

 $cphone  = $_POST['cphone'];

 $cemail  = $_POST['cemail'];

 

 $pname  = $_POST['pname'];

 $plname  = $_POST['plname'];



 $name =  $pname." ".$plname;

 $email  = $_POST['pemail'];

 //$phone =  $_POST['phone'];

 $code =  $_POST['code'];

if ($code == NULL || empty($code) ) {

    $code = 61;

}

 $mobile =  $_POST['pmobile'];



$mob = $mobile[0]; 

$str = substr($mobile, 1);





if ($mob == '0') {  

$mobile =  substr($mobile, 1);

}









 $mobile = $code."".$mobile;



 $mobile = ltrim($mobile, '+'); 




////////paddress////////////
 $address ='';


$chk_addressp = $_POST['chk_show_hide3'];

if($chk_addressp!=1){
  $address =  $_POST['first_line3'].' '.$_POST['second_line3'].' '.$_POST['third_line3'].' '.$_POST['post_town3'];
    
}else{
  $address =  '';
}

 // $address =  $_POST['paddress'];
////////paddress////////////

 $subrub =  $_POST['psubrub'];



$assoc_query = "SELECT * from siteassociate where id = 160";

$assoc_result = mysqli_query($conn,$assoc_query);

$accoc_row = mysqli_fetch_array($assoc_result);



if ($subrub==0) {



 $subrub =$accoc_row['trade_type'];

$calendy = file_get_contents('https://admin.byfreddy.io/api/calendly/link');



}else{

  $result = json_decode(file_get_contents('https://admin.byfreddy.io/api/calendly/link/' . $subrub));

  $subrub = $result->subrub;

  $calendy = $result->calendy;

}



//$dealname = $cname." - ".$subrub; 
$dealname2 = $cname." - ".$_POST['post_town3']." - ".$subrub; 
$dealname =str_replace(' -  - ',' - ', $dealname2);


// $dealname = $cname." - ".$address." - ".$subrub; 

// your API token goes here

$api_token = "75ee7f4c914d217264c98db6ecbf108ebd8655e7";

 

 

// main data about the organization

$organization = array(

 'name' => $cname,

 'address' => $caddress,

 'ba54b22a81205ddb0b6bc12a48fa4b2a26a3d4e8' => $cemail, 

 '967056d34ddee53be33d2fdb00b74b1c15988e9b' => $cphone 

);

 

// main data about the person. org_id is added later dynamically

$person = array(

 'name' => $name,

 'email' => $email,

 'phone' => $mobile,
//'company' => '157',
 //'ctry' => 'UNITED KINGDOM',
  '21821ace8e72a61dda693f0b925379606b04a10d' => $address,

  '5deab41e45d762fa377460da8fee689e73c1bd71' => '27',

  'postal_address' => $address

 );

 

// main data about the deal. person_id and org_id is added later dynamically

$deal = array(

 'title' => $dealname,

 'value' => '0',

  //old au stage id 'stage_id' => '69'

 'stage_id' => '449'

);

 

// try adding an organization and get back the ID

$org_id = create_organization($api_token, $organization);

 

// if the organization was added successfully add the person and link it to the organization

if ($org_id) {

 $person['org_id'] = $org_id;

 // try adding a person and get back the ID

 $person_id = create_person($api_token, $person);

 $person_id = $person_id;

 

 // if the person was added successfully add the deal and link it to the organization and the person

 if ($person_id) {

 $my_p_id =$person_id;

  $deal['org_id'] = $org_id;

  $deal['person_id'] = $person_id;

  // try adding a person and get back the ID

  $deal_id = create_deal($api_token, $deal);

 



  $note = array(

   'content' => $note_product.'<br>'.$inquery,

   'deal_id' => $deal_id

  ); 







 $note_id = create_note($api_token, $note);



$follower_url = "https://api.pipedrive.com/v1/deals/$deal_id/followers?api_token=" . $api_token;

  $follower = array(

      'user_id' => 3005219,

      'deal_id' => $deal_id

  );

  $follower_id = create_follower($api_token, $follower,  $follower_url);



  $follower_per_url = "https://api.pipedrive.com/v1/persons/$person_id/followers?api_token=" . $api_token;



   $person_follower = array(

      'user_id' => 3005219,

      'person_id' => $person_id

  );



  $person_follower_id = create_person_follower($api_token, $person_follower, $follower_per_url);





  if ($deal_id) {

   echo "Deal was added successfully!";

  }

 } else {

  echo "There was a problem with adding the person!";

 }

 

} else {

 echo "There was a problem with adding the organization!";

}

 

//create_person($api_token, $person);

//create_deal($api_token, $deal);

function create_follower($api_token, $follower, $follower_url)

{

    

    

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $follower_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POST, true);

    

    curl_setopt($ch, CURLOPT_POSTFIELDS, $follower);

    $output = curl_exec($ch);

    $info   = curl_getinfo($ch);

    curl_close($ch);

    

    // create an array from the data that is sent back from the API

    $result = json_decode($output, 1);

    // check if an id came back

    if (!empty($result['data']['id'])) {

        echo $follower_id = $result['data']['id'];

        return $follower_id;

    } else {



        return false;

    }

}

function create_person_follower($api_token, $person_follower, $follower_per_url)

{

    

    

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $follower_per_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POST, true);

    

    curl_setopt($ch, CURLOPT_POSTFIELDS, $person_follower);

    $output = curl_exec($ch);

    $info   = curl_getinfo($ch);

    curl_close($ch);

    

    // create an array from the data that is sent back from the API

    $result = json_decode($output, 1);

    // check if an id came back

    if (!empty($result['data']['id'])) {

        echo $person_follower_id = $result['data']['id'];

        return $person_follower_id;

    } else {



        return false;

    }

}

 function create_note($api_token, $note)

{

 $url = "https://api.pipedrive.com/v1/notes?api_token=" . $api_token;

 

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 curl_setopt($ch, CURLOPT_POST, true);

 

 curl_setopt($ch, CURLOPT_POSTFIELDS, $note);

 $output = curl_exec($ch);

 $info = curl_getinfo($ch);

 curl_close($ch);

 

 // create an array from the data that is sent back from the API

 $result = json_decode($output, 1);

 // check if an id came back

 if (!empty($result['data']['id'])) {

  $note_id = $result['data']['id'];

  return $note_id;

 } else {

  return false;

 }

}



 

function create_organization($api_token, $organization)

{

 $url = "https://api.pipedrive.com/v1/organizations?api_token=" . $api_token;

 

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 curl_setopt($ch, CURLOPT_POST, true);

 

 curl_setopt($ch, CURLOPT_POSTFIELDS, $organization);

 $output = curl_exec($ch);

 $info = curl_getinfo($ch);

 curl_close($ch);

 // create an array from the data that is sent back from the API

 $result = json_decode($output, 1);

 // check if an id came back

 if (!empty($result['data']['id'])) {

  $org_id = $result['data']['id'];

  return $org_id;

 } else {

  return false;

 }

}

 

function create_person($api_token, $person)

{

 $url = "https://api.pipedrive.com/v1/persons?api_token=" . $api_token;

 

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 curl_setopt($ch, CURLOPT_POST, true);

 

 curl_setopt($ch, CURLOPT_POSTFIELDS, $person);

 $output = curl_exec($ch);

 $info = curl_getinfo($ch);

 curl_close($ch);

 

 // create an array from the data that is sent back from the API

 $result = json_decode($output, 1);

 // check if an id came back

 if (!empty($result['data']['id'])) {

  $person_id = $result['data']['id'];

  return $person_id;

 } else {

  return false;

 }

}

 

function create_deal($api_token, $deal)

{

 $url = "https://api.pipedrive.com/v1/deals?api_token=" . $api_token;

 

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 curl_setopt($ch, CURLOPT_POST, true);

 

 curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);

 $output = curl_exec($ch);

 $info = curl_getinfo($ch);

 curl_close($ch);

 

 // create an array from the data that is sent back from the API

 $result = json_decode($output, 1);

 // check if an id came back

 if (!empty($result['data']['id'])) {

  $deal_id = $result['data']['id'];

  return $deal_id;

 } else {

  return false;

 }

}


// Insert User In The System



$dynamicstring = $mobile;

$newstring = substr($dynamicstring, -4);

$password = $newstring;



$date = date("Y-m-d");





     $sqll = "INSERT INTO `clients` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `mobile`, `address`, `subrub`, `date`) VALUES (NULL, '$name', '$password', '$name', '$lname', '$email', '$phone', '$mobile', '$address', '$subrub', '$date')";

// $sqll = "INSERT INTO `clients` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `mobile`, `address`, `subrub`, `date`) VALUES (NULL, '1', '', '', '', '', '', '', '', '', '');";



   $result = mysqli_query($conn,$sqll);



   $last_id = mysqli_insert_id($sqll);











// Insert Cron SMS In The System





   $NewDate = Date('Y-m-d', strtotime("+7 days"));

   $sqll = "INSERT INTO `client_cron_sms` (`id`, `client_id`, `name_rem`, `sms_date`, `status`) VALUES (NULL, '$last_id', 'First Reminder', '$NewDate', 'Pending')";

   $result = mysqli_query($conn,$sqll);





   $NewDate = Date('Y-m-d', strtotime("+14 days"));

   $sqll = "INSERT INTO `client_cron_sms` (`id`, `client_id`, `name_rem`, `sms_date`, `status`) VALUES (NULL, '$last_id', 'Second Reminder', '$NewDate', 'Pending')";

   $result = mysqli_query($conn,$sqll);







      $NewDate = Date('Y-m-d', strtotime("+20 days"));

   $sqll = "INSERT INTO `client_cron_sms` (`id`, `client_id`, `name_rem`, `sms_date`, `status`) VALUES (NULL, '$last_id', 'Third Reminder', '$NewDate', 'Pending')";

   $result = mysqli_query($conn,$sqll);



//Send Email





//Global SMS 



    $sqlp = "SELECT * FROM notification_sms WHERE id = 5";

      $resultp = mysqli_query($conn,$sqlp);  



       if (mysqli_num_rows($resultp) > 0) {

                 while($rowp = mysqli_fetch_array($resultp)) {               

             $content = $rowp["content"];  

              $subject = $rowp["heading"];  

             }

       }







 $content_main = str_replace("|calendylink|",$calendy,$content);            

            







//$text ="Hi its Sam From Professional Freddy %26 Jims Fencing Chatswood.%0aMake an appointment by going to ".$calendy." %0aPlease select the right area%0aThanks";





$text = urlencode($content_main);



$user='klzr55gc';

$pass='e90qgjMF';

//$from='61427913270';

$from='Freddy';

$to=$mobile;
//$text='Click here '.$calendy;



// for($i =0; $i < ceil(strlen($text) / 150); $i++){

//  $msg = substr($text, ($i * 150), ($i * 150) + 150);

//  file_get_contents("https://www.smsglobal.com/http-api.php?action=sendsms&user=$user&password=$pass&from=$from&to=$to&text=$msg");

// }
//echo "https://api.smsglobal.com/http-api.php?action=sendsms&user=$user&password=$pass&from=$from&to=$to&text=$text&maxsplit=2";

echo file_get_contents("https://api.smsglobal.com/http-api.php?action=sendsms&user=$user&password=$pass&from=$from&to=$to&text=$text&maxsplit=2");
















///Send Email 



   

      $sqlp2 = "SELECT * FROM notification_email WHERE id = 5";

        $resultp2 = mysqli_query($conn,$sqlp2);



      if (mysqli_num_rows($resultp2) > 0) {

          

          while($rowp2 = mysqli_fetch_array($resultp2)) {      



             $content2 = $rowp2["content"];  



              $subject2 = $rowp2["heading"];  

              $fromemail = $rowp2["email_id"];

        $sqlp = 'SELECT * FROM email_from WHERE id = "'.$fromemail.'"  ';

         $resultp4 = mysqli_query($conn,$sqlp);

         $resultp3 = mysqli_fetch_array($resultp4);

          $fromemail = $resultp3["emailform"];

             }   

       }





//$strreplace = "https://calendly.com/professionalfreddyjayson";



 //$content_main2 = str_replace("|calendylink|",$calendy,$content2);            

 $sqlsites = "SELECT * FROM siteassociate where (country = 'UNITED KINGDOM' OR country='UK')  AND (project_name Like '%byFreddy%' OR name Like '%byFreddy%')  order by project_name ASC";

    $resultsites = mysqli_query($conn, $sqlsites);
    $sitesurl='';
while($rowsites = mysqli_fetch_array($resultsites)) {
$sitesurl.='<div style="width:75px; height:100px; float:none; display:inline-block;"><a href='.$rowsites['name'].' target="_blank"><img src="https://admin.byfreddy.io/photo/avatar1/'.$rowsites['submenulogo'].'" style="width: 50px;" /></a><br />
<a href='.$rowsites['name'].' style="text-decoration:none; color:#FFF;" target="_blank">'.$rowsites['short_name'].'</a></div>';

}

//echo $sitesurl;
$content_main2 = str_replace("|freedynetwork|",$sitesurl,$content2);           



require_once '../resources/mandrill-api-php/src/Mandrill.php'; //Not required with Composer

$mandrill = new Mandrill('nzgIsPE-NBZZWB88ynwEig');







$myInput = $email;





try {

    $mandrill = new Mandrill('nzgIsPE-NBZZWB88ynwEig');

    $message = array(

        'html' => $content_main2,

        'text' => 'Example text content',

        'subject' => $subject2,

        'from_email' => $fromemail,

        'from_name' => 'Professional Freddy',

        'to' => array(

            array(

                'email' => $myInput,

                'name' => 'Recipient Name',

                'type' => 'to'

            )

        ),

        'headers' => array('Reply-To' => 'admin@freddyit.com'),

        'important' => false,

        'track_opens' => null,

        'track_clicks' => null,

        'auto_text' => null,

        'auto_html' => null,

        'inline_css' => null,

        'url_strip_qs' => null,

        'preserve_recipients' => null,

        'view_content_link' => null,

        'tracking_domain' => null,

        'signing_domain' => null,

        'return_path_domain' => null              

        

        

    );

    $async = false;

    $ip_pool = 'Main Pool';

    $send_at = '';

    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);

   // print_r($result);

    /*

    Array

    (

        [0] => Array

            (

                [email] => recipient.email@example.com

                [status] => sent

                [reject_reason] => hard-bounce

                [_id] => abc123abc123abc123abc123abc123

            )

    

    )

    */

} catch(Mandrill_Error $e) {

    // Mandrill errors are thrown as exceptions

    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();

    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'

    throw $e;

}



GLOBAL $conn;

   //   $sqlperson = "UPDATE pipedrive_person SET ctry ='United Kingdom' , company='160' WHERE id='$person_id' ";

   // // $result = mysql_query($sql);

   //  $result = mysqli_query($conn, $sqlperson);

   //   GLOBAL $conn;
   //   $sqlupd_deal = "UPDATE pipedrive_deal SET  site_id='160' WHERE id=' $deal_id' ";
   //  $result2 = mysqli_query($conn, $sqlupd_deal);



   GLOBAL $conn;
     $sqlperson = "UPDATE pipedrive_person SET ctry ='United Kingdom' , company='160' , post_town = '$pt' , address_line1='$l1' , address_line2 ='$l2' , address_line3 ='$l3' WHERE id='$my_p_id' ";
    $result = mysqli_query($conn, $sqlperson);



 GLOBAL $conn;
     $sqlupd_deal = "UPDATE pipedrive_deal SET  site_id='160' , post_town = '$pt' , address_line1='$l1' , address_line2 ='$l2' , address_line3='$l3', service_address ='$address' WHERE id=' $deal_id' ";
    $result2 = mysqli_query($conn, $sqlupd_deal);









?>