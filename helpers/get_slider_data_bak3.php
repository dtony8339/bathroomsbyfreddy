<?php 
$ref_id= $_POST['id'];
require "../config.inc.php"; 
?>

<link rel="stylesheet" href="https://fontawesome.com/v3.2.1/assets/font-awesome/css/font-awesome.css">

<link rel="stylesheet" href="https://dev.bathroomsbyfreddy.co.uk/resources/css/swiper.min.css">





<!-- Demo styles -->

<style>
.gallery-thumbs .swiper-slide img {

    height: auto !important;
    width: 100% !important;
    max-height: none !important;

}
.swiper-container { width: 100%; height: auto; margin-left: auto; margin-right: auto; }

.swiper-slide { background-size: cover; background-position: center; }

.swiper-button-white { background: #f3f3f3; color: #f79122; font-size: 34px; padding: 15px 8px; background-image: none !important; width: auto; height: auto; top: -85px; }

.swiper-button-white:hover { background: #f79122; color: #fff; }

.swiper-button-next { }

.swiper-button-prev {  }



.gallery-top { height: 80%; width: 100%; }

.gallery-thumbs { height: 20%; box-sizing: border-box; padding: 0px 0; max-width: 85%; overflow: hidden; margin:0 auto; }

.gallery-thumbs .swiper-slide { height: 100%; opacity: 0.4; border-radius: 0px; }

.gallery-thumbs .swiper-slide-active { opacity: 1; }

.gallery-thumbs .swiper-slide.swiper-slide-active { border-radius: 0px; border: solid 3px #f79122; }



.bannerslide { position: relative; min-height: 300px; max-height: 500px; }



.projecttext { background-color: rgb( 247, 145, 34 ); opacity: 0.749; position: absolute; bottom: 100px; left: 5.5%; font-size: 1.6vw; font-family: "Myriad Pro"; color: rgb( 0, 0, 0 ); padding: 5px; padding: 6px 23px; }

.projecttext .titletext { font-size: 1.8vw; font-weight: bold; }



.subtext { background-color: rgb( 0, 0, 0 ); opacity: 0.749; position: absolute; left: 5.5%; bottom: 55px; font-size: 1.6vw; color: #FFF !important; padding: 6px 23px; }

.subtext .titletext { font-size: 1.8vw; font-weight: bold; }



.arowbox { width: 100%; height: auto; position: relative; }



.modal-content{ border-radius:0px;}

.modal-header{ border:none; padding:5px;}

.modal-body {

    position: relative;

    padding: 0px;

    width: 100%;

}

.bannerslide {

  

    margin-top: 20px;

}



.close {

    float: right;

    font-size: 55px;

    font-weight: 700;

    line-height: 1;

    color: #f7f3f3;

    text-shadow: 0 1px 0 #fff;

    filter: alpha(opacity=20);

    opacity: .2;

    background: #f79122 !important;

    width: 40px;

    height: 40px;

    opacity: 1;

    top: 5px;

    position: absolute;

    right: 3px;

    padding: 0px !important;

    line-height: 10px; z-index:99999;

}

@media only screen and (max-width: 1200px) {

    

	.bannerslide { position: relative; height: 400px; }

	.swiper-button-next{ margin-top: -20px; margin-right: -10px}

	.swiper-button-prev { margin-top: -20px; margin-left: -10px}

	.gallery-thumbs { height: 20%; box-sizing: border-box; padding: 10px 0; max-width: 85%; overflow: hidden; margin:0 auto; }

}



@media only screen and (max-width: 992px) {

    

	.bannerslide { position: relative; min-height: 200px;max-height: 400px; }

	.swiper-button-next{ margin-top: 8px; margin-right: -10px}

	.swiper-button-prev { margin-top: 8px; margin-left: -10px}

	.gallery-thumbs { height: 20%; box-sizing: border-box; padding: 10px 0; max-width: 85%; overflow: hidden; margin:0 auto; }

}



@media only screen and (max-width: 980px) {

    

	.bannerslide { position: relative; min-height: 200px;max-height: 400px; }

	.swiper-button-next{ margin-top: 5px; margin-right: -10px}

	.swiper-button-prev { margin-top: 5px; margin-left: -10px}

}



@media only screen and (max-width: 767px) {

 	/*.swiper-button-next{ margin-top: 0px; margin-right: -10px}

 	.swiper-button-prev { margin-top: 0px; margin-left: -10px}*/

	.swiper-button-next, .swiper-button-prev { display:none;  }

	.gallery-thumbs{ width:100%;}



}

    

@media only screen and (max-width: 600px) {

.bannerslide { position: relative; min-height: 200px;max-height: 400px; }

.subtext,

.projecttext {font-size: 3.6vw; }



.projecttext .titletext,

.subtext .titletext { font-size: 5vw; }



 }

    

@media only screen and (max-width: 479px) { 

    

.subtext {  bottom: 30px;  }

.bannerslide { position: relative; min-height: 200px; }



.projecttext { bottom: 36px; left: 0; line-height: 5vw; }

.subtext { bottom: 0px; left: 0; padding: 1px 10px; }



}
.swiper-container.gallery-top.swiper-container-horizontal img {

    width: auto;

}
</style>





<?php $row1=get_PlumbersProject($ref_id)[0];	?>

  

<div class="swiper-container gallery-top" style="margin-top: 187px !important;">

	<div class="swiper-wrapper">

		<?php $project_img = get_PlumbersProjectImg($_REQUEST['id']);

			$count=0;

			

			while ($row = mysqli_fetch_array($project_img)){

				if($count == 0){

					$content = '';

					$isactive = 'active';

				}else{

					$isactive = '';

				}

				$count++;

				

				if (strstr($row['img'], 'https://')) { ?>

					<div class="swiper-slide"><img src='<?= $row["img"] ?>'></div>

					

					<?php }else{ ?>

					

					<div class="swiper-slide bannerslide thumbnail" style="border:none; padding:0px;"><img src='https://admin.byfreddy.io<?= $row["img"] ?>' style="margin-top: -10%;max-height: 500px">

						<div class="slidetextbox">

							<p class="projecttext"><span class="titletext"> Project Name: </span>

								<?= $row1['title'] ?>

							</p>

							<p class="subtext"><span class="titletext"> Area: </span>

								<?= $row1['suburb'] ?>

							</p>

						</div>

					</div>

					<?php } 

			} ?>

    </div>

</div>

  

  <!-- Swiper JS -->

  
<?php 
$co =get_PlumbersProjectImg_counter($_REQUEST['id']);
if($co >2 ){


?>

<div class="gallery-thumbs">

	<div class="swiper-wrapper">

		<?php $project_img = get_PlumbersProjectImg($_REQUEST['id']);

			$count=0;

			

			while ($row = mysqli_fetch_array($project_img)){

				if($count == 0){

					$content = '';

					$isactive = 'active';

				}else{

					$isactive = '';

				}

				$count++; 



				if (strstr($row['img'], 'https://')) { ?>

					<div class="swiper-slide thumbnail col-xs-3 col-sm-3 col-md-3 " style="width: 183.5px;"><img src='<?= $row["img"] ?>' width="300"></div>

				<?php }else{ ?>

					<div class="swiper-slide thumbnail  col-xs-3 col-sm-3 col-md-3 " style="width: 183.5px;"><img src='https://admin.byfreddy.io<?= $row["img"] ?>' style="max-height:130px"></div>

				<?php } 

			} ?>

	</div>

</div>
<?php } ?>


<div style="clear:both; display:block; width:100%;"></div>
<?php 
$co =get_PlumbersProjectImg_counter($_REQUEST['id']);
if($co >1 ){
?>
	<div class="arowbox">

		<div class="swiper-button-next swiper-button-white "><i class="icon-chevron-right"></i></div>

		<div class="swiper-button-prev swiper-button-white"><i class="icon-chevron-left"></i></div>

	</div>
<?php } ?>

    

<script src="//cdn.shopify.com/s/files/1/0659/4529/t/75/assets/swiper.min.js?10728068994914913511">

</script>


<script src="https://dev.bathroomsbyfreddy.co.uk/resources/js/swiper.js"></script>

<!-- Initialize Swiper --> 

<script>

    var galleryTop = new Swiper('.gallery-top', {

      spaceBetween: 10,

      loop:true,

      loopedSlides: 5, //looped slides should be the same

      navigation: {

        nextEl: '.swiper-button-next',

        prevEl: '.swiper-button-prev',

      },

    });

    var galleryThumbs = new Swiper('.gallery-thumbs', {

      spaceBetween: 10,

      slidesPerView: 4,

      touchRatio: 0.2,

      loop: true,

      loopedSlides: 5, //looped slides should be the same

      slideToClickedSlide: true,

    });

    galleryTop.controller.control = galleryThumbs;

    galleryThumbs.controller.control = galleryTop;



  </script>
  <?php
  function get_PlumbersProjectImg($ref_id=0){

		GLOBAL $conn;

	if ($ref_id==0){

		//$sql = "SELECT * FROM `plumbers_project_img` ORDER BY id DESC";

		$sql = "SELECT * FROM `work_project_img` ORDER BY id DESC";

	}else{

		//$sql = "SELECT * FROM `plumbers_project_img` WHERE ref_id=$ref_id ORDER BY `plumbers_project_img`.`img` ASC";

		$sql = "SELECT * FROM `work_project_img` WHERE ref_id=$ref_id ORDER BY id DESC";

	}

	$result = mysqli_query($conn, $sql);

    // echo '<pre>';

    // print_r($result);exit;

	

	return $result;

}
function get_PlumbersProject($ref_id=0){

	GLOBAL $conn;

	if ($ref_id==0){

		//$sql = "SELECT * FROM `plumbers_project` ORDER BY `plumbers_project`.`id` DESC Limit 4";

		$sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' ORDER BY id DESC";

	}else{

		//$sql = "SELECT * FROM `plumbers_project` WHERE id=$ref_id";

		$sql = "SELECT * FROM work_project WHERE project_type = 'BathroomsByFreddy' and id=$ref_id";

	}

	/*$result = mysql_query($sql) or die(mysql_error());
	return $result;*/
	//$result = mysql_query($sql) or die(mysql_error());	
	$result = mysqli_query($conn, $sql);

	while($data=mysqli_fetch_assoc($result)){

		$date = new DateTime($data['date']);

        $data['date_added'] = $date->format("F, Y");

		$data['top_img'] = getTopImage("work_project_img",$data['id']);

		$data['count_image'] = get_PlumbersProjectImg_counter($data['id']);

		$tmp[] = $data;

	}

	

    return $tmp;

}
function getTopImage($table,$id){

	GLOBAL $conn;

	$sql = "SELECT * FROM $table where ref_id = $id ORDER BY id";

	$result = mysqli_query($conn, $sql);

	//$result = mysql_query($sql) or die(mysql_error());

	

	if(mysqli_num_rows($result)){

		$row = mysqli_fetch_assoc($result);

		return $row['img'];

	}

	

	return "";

}

function get_PlumbersProjectImg_counter($id){

	GLOBAL $conn;

    $sql = "SELECT count(ref_id) as imagecount FROM `work_project_img` WHERE ref_id = '$id' ORDER BY id DESC";

    

    $result = mysqli_query($conn, $sql);



    $row = mysqli_fetch_array($result);

    return $row['imagecount'];

}
  ?>