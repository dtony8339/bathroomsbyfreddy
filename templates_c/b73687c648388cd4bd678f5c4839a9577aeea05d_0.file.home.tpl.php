<?php
/* Smarty version 3.1.31, created on 2021-01-31 14:19:14
  from "C:\xampp\htdocs\bathroomsbyfreddy\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6016ae52c8cd40_01227597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73687c648388cd4bd678f5c4839a9577aeea05d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bathroomsbyfreddy\\templates\\home.tpl',
      1 => 1612099004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6016ae52c8cd40_01227597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
	
	.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #fff;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #fff;  } 

</style>



<div class="home-banner">
<div class="grid">
	<div class="container-fluid">
    	<div class="col-md-6">
			<div class="leftbanner">
				<h1 class="banner_title">Bathroom Contractors <span>Near you </span></h1>
				<p class="banner_desc">We love doing bathrooms! Our bathroom team has the benefit of experienced licensed builders who can build or renovate your bathroom from the ground up in any style.</p>
				<a href="<?php echo @constant('siteurl');?>
/get-quote/" class="quote">GET QUOTE</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="rightbanner">
				<div  class="animated bounce scroll">
					<img src="<?php echo @constant('root_img');?>
bathrooms.png" class="img-responsive">
				</div>	
			</div>	
		</div>
		
	</div>
	<div class="gap20"></div>
	<div class="container-fluid">
    	<div class="col-md-4">
        	<div class="specialists">
                <div class="specialists-box" >
					<div  class="imgA">
						<img src="<?php echo @constant('root_img');?>
group.png" class="img-responsive">
					</div>
                    <div class="specialists-box-title">Receive 3 quotes from 3 team members</div>
                </div>
            </div>
		</div>
		<div class="col-md-4">
        	<div class="specialists">
                <div class="specialists-box" >
					<div  class="imgA">
						<img src="<?php echo @constant('root_img');?>
inspection.png" class="img-responsive">
					</div>
                    <div class="specialists-box-title">One site Inspection only</div>
                </div>
            </div>
		</div>
		<div class="col-md-4">
        	<div class="specialists">
                <div class="specialists-box" >
					<div  class="imgA">
						<img src="<?php echo @constant('root_img');?>
sticky-notes.png" class="img-responsive">
					</div>
                    <div class="specialists-box-title">Work posted daily, Get the best for your Bathroom work!</div>
                </div>
            </div>
		</div>
  		<div class="col-md-12">
			<div class="h2-title">
				<h2>Renowned specialists in Bathrooms</h2>
			</div>  	
		</div>  	
	</div>
</div>
</div>


<div class="welcome">
<div class="grid">
	<div class="container-fluid"> 
	<div class="col-md-12">
		<div class="title-page">
		<p>WELCOME TO </p>
		<h1 class="h1-title">BATHROOMS BYFREDDY</h1>
		</div>
	</div>
	<div class="col-md-6">
		<div class="leftpage">
		<img src="<?php echo @constant('root_img');?>
bathroom-img1.png" class="img-responsive">
		</div>	
	</div>	
	<div class="col-md-6">
		<div class="rightpage">
				<h3 class="h3-title">We Provide Best Service to Our<span> Customers</span></h3>
				<p class="banner_desc">We love doing bathrooms! Our bathroom team has the benefit of experienced licensed builders who can build or renovate your bathroom from the ground up in any style.</p>
			<p><a href="#" class="btn-gold more">Know more</a></p>
		</div>

	</div>
	</div>
</div>
</div>


<div class="what-to-do">
<div class="grid">
	<div class="container-fluid"> 
	<div class="col-md-12">
		<div class="title-page">
		<p>ABOUT</p>
		<h1 class="h1-title">WHAT WE DO</h1>
		<span class="banner_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span>
		</div>
	</div>
	</div>
	<div class="container-fluid"> 
	<div class="col-md-12">
		<div class="works">
			<ul>
				<li><a href="#" id="repair" class="active">Repair</a></li>
				<li><a href="#" id="maintenance" class="">Maintenance</a></li>
				<li><a href="#" id="renovation" class="">Renovation</a></li>
				<li><a href="#" id="planning" class="">Planning</a></li>
			</ul>
		</div>
	
		<div class="work-list">
			<div class="repair-list">
				<p class="banner_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>

				<ul class="checklist f-left">
				<li>Landscaping</li>
				<li>Fencing</li>
				<li>Flooring</li>
				<li>Painting</li>
				<li>Plumbing</li>
				<li>Kitchen</li>
				<li>Carpentry</li>
				</ul>
				<div class="rightpage">
				<img src="<?php echo @constant('root_img');?>
bathrooms-works.png" class="img-responsive img-works f-right">
				</div>
				<div class="clear"></div>
			</div>
			<div class="maintenance-list">
			<p class="banner_desc">Maintenance.</p>
			</div>
			<div class="renovation-list">
			<p class="banner_desc">Renovation</p>
			</div>
			<div class="planning-list">
			<p class="banner_desc">Planning.</p>
			</div>
		</div>	
	</div>	
	</div>	


</div>
</div>
<div class="gap20"></div>
<div class="clearfix"></div>
<div class="home-banner">
<div class="grid">
	<div class="container-fluid"> 
		<div class="achievement">
		
			<div class="title-page">
			<p>ACHIVEMENTS</p>
			<h1 class="h1-title">ACHIVEMENTS WE DID</h1>
			</div>		

		
		
			<div class="box first" >
			<div class="box-number">7</div>
				<div class="box-title">Completed Jobs</div>
				<hr>
				<div class="box-description">
					<p>Bathroom by Freddy, testimonials are great, but you can't get away from the real thing.</p>
				</div>
				<p><a href="#" class="links">Know more</a></p>
			</div>
			
			<div class="box" >
				<div class="box-number">61</div>
				<div class="box-title">Reviews</div>
				<hr>
				<div class="box-description">
					<p>4.7 Rating<br>Opened 18 December 2019</p>
				</div>
				<p><img src="<?php echo @constant('root_img');?>
5-star.png"></p>
				<p><a href="#" class="links">Know more</a></p>
			</div>
			
			<div class="box" >
				<div class="box-number">105</div>
				<div class="box-title">Quotes Deliverd</div>
				<hr>
				<div class="box-description">
					<p>Our company is different we provide you with 3 quotes, from three levels of teams.</p>
				</div>
				<p><a href="#" class="links">Know more</a></p>
			</div>
			 <div class="clearfix"></div>
		</div>
	</div>
</div>
</div>

<div class="gap20"></div>

<div class="tell-us">
<div class="grid">
	<div class="container-fluid"> 
		<div class="tell-us-page">
			<div class="title-page">
			<p>TELL US</p>
			<h1 class="h1-title">WHAT TYPE OF SERVICE YOU NEEDED</h1>
			<span class="desc">Pick a service that best suit your needs</span>
			</div>		
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="uleft">
				<div class="imgss f-left"><img src="<?php echo @constant('root_img');?>
new-bathrooms.png" ><p>NEW BATHROOMS </p></div>
				<div class="txtss f-right"><p>Our builder works with the wet area trades team to design, build and instal your new bathrooms and ensuites, for residential or commercial premises.&nbsp;&nbsp;&nbsp;</p>
				<p><a href="<?php echo @constant('siteurl');?>
new-bathrooms-and-ensuite" class="links">Know more &#8594;</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="ucenter">
					<div class="imgss f-left"><img src="<?php echo @constant('root_img');?>
new-reno.png" ><p>RENOVATION </p></div>
				<div class="txtss f-right"><p>We can do the smallest renovation eg re-tiling or carpentry, to extending and re-fitting your existing bathroom in your choice of style upgrade. &nbsp;&nbsp; &nbsp;</p>
				<p><a href="<?php echo @constant('siteurl');?>
bathroom-renovations-and-extensions" class="links">Know more &#8594;</a></p>
				</div>	
			</div>
		
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="uright">
						<div class="imgss f-left"><img src="<?php echo @constant('root_img');?>
new-repair.png" ><p>REPAIRS </p></div>
				<div class="txtss f-right"><p>Wet areas are under stress and need periodic care and replacement of worn and damaged parts. help you maintain your bathrooms looking great.</p>
				<p><a href="<?php echo @constant('siteurl');?>
bathroom-repairs-and-maintenance" class="links">Know more &#8594;</a></p>
				</div>
			</div>
		
		</div>
		
		
		<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>

<div class="service">
<div class="grid">
	<div class="container-fluid"> 
		<div class="title-page">
			<p>SERVICES</p>
			<h1 class="h1-title">YOU CHOOSE, IT’S NO PROBLEM, <br>JUST ASK</h1>	
		<p class="desc">Never feel embarrassed to ask us if your budget requires less expensive materials. We understand, we’ve <br>been there! We can give you a good quality job at a price that works for you. All our work is equally<br> backed and guaranteed!</P>			
		</div>		

		
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="grade">
				<h1>A GRADE</h1>
				<h3>Premium Service</h3>
				<p>10+ years Experience<br>Exceptional Quality Materials<br>Swifter Time-To -Completion</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="grade">
				<h1>B GRADE</h1>
				<h3>Advanced Service</h3>
				<p>5+ years Experience<br>Superior Quality Materials<br>Typical Time-To -Completion</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp usbox">
			<div class="grade">
				<h1>C GRADE</h1>
				<h3>Benchmark Service</h3>
				<p>1-2 years Experience<br>Industry Standard Quality Materials<br>Lengthier Time-To -Completion</p>
			</div>

		</div>
		
	</div>
	<div class="container-fluid"> 
		<div class="col-lg-12">
			<div class="grade1">
				<h1>A GRADE</h1>
				<p class="desc">This quote will be filled by our longest-experienced tradespeople. They’ve been on the job for over 10 years. It will also cover top quality materials should you desire them, which naturally cost more. </p>
			</div>
			<div class="grade1">
				<h1>B GRADE</h1>
				<p class="desc">These are tradespeople of intermediate experience - from 3 to 10 years on the job. Materials can also be intermediate - it all depends on your budget. B Grade is not the cheapest or the most expensive. However, you pay a little extra for quality.</p>
			</div>
			<div class="grade1">
				<h1>C GRADE</h1>
				<p class="desc">If anyone quotes you cheaper than our A or B, we can better that quote with our C Grade. You can expect a lower price because these younger tradespeople want to gain more experience. They have been on the job for 1 to 2 yrs.  </p>
			</div>
		</div>
	</div>
</div>
</div>	


<div class="in-add">
	<div class="grid">
		<div class="container-fluid"> 
		<div class="title-page">
			<p>IN ADDITION</p>
			<h1 class="h1-title">WE DO SERVICE LIKE</h1>		
		</div>
		
<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
			<div class="slider">
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
tiling.png" >
				</div>
				<div class="f-right">
					<p class="title">Tiling</p>
					<p class="desc">floor and wall tiling in ceramic, glass, metal and stone...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
masonry.png" >
				</div>
				<div class="f-right">
					<p class="title">Masonry</p>
					<p class="desc">brick, block and stone laying for walls, floors and partitions...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
floors.png" >
				</div>
				<div class="f-right">
					<p class="title">Flooring</p>
					<p class="desc">properly waterproofed and drained floors in any suitable material...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
glass.png" >
				</div>
				<div class="f-right">
					<p class="title">Glass House</p>
					<p class="desc">showers, doors, mirrors, splashbacks and windows, in clear, frosty or coloured...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
plumbing.png" >
				</div>
				<div class="f-right">
					<p class="title">Plumbing</p>
					<p class="desc">essential plumbing for bathrooms and toilets, plus a wide range of styles of taps...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
basins.png" >
				</div>
				<div class="f-right">
					<p class="title">Basin</p>
					<p class="desc">freestanding or built-in vanity units, hand basins, splashbacks and baths...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				
			</div>
			<div class="clearfix"></div>

		</div>
            </div>
             <div class="carousel-item">
			<div class="slider">
			
			<div class="clearfix"></div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
glass.png" >
				</div>
				<div class="f-right">
					<p class="title">Glass House</p>
					<p class="desc">showers, doors, mirrors, splashbacks and windows, in clear, frosty or coloured...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
plumbing.png" >
				</div>
				<div class="f-right">
					<p class="title">Plumbing</p>
					<p class="desc">essential plumbing for bathrooms and toilets, plus a wide range of styles of taps...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
basins.png" >
				</div>
				<div class="f-right">
					<p class="title">Basin</p>
					<p class="desc">freestanding or built-in vanity units, hand basins, splashbacks and baths...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
tiling.png" >
				</div>
				<div class="f-right">
					<p class="title">Tiling</p>
					<p class="desc">floor and wall tiling in ceramic, glass, metal and stone...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
masonry.png" >
				</div>
				<div class="f-right">
					<p class="title">Masonry</p>
					<p class="desc">brick, block and stone laying for walls, floors and partitions...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="slide sbox">
				<div class="f-left">
					<img src="<?php echo @constant('root_img');?>
floors.png" >
				</div>
				<div class="f-right">
					<p class="title">Flooring</p>
					<p class="desc">properly waterproofed and drained floors in any suitable material...</p>
					<p><a href="#" class="links">Know more &#8594;</a></p>
				</div>
				
			</div>

		</div>
            </div>
    
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

		</div>
	</div>
</div>

<div class="whyus">
	<div class="grid">
	<div class="container-fluid"> 
		<div class="col-lg-6">
			<img src="<?php echo @constant('root_img');?>
why-us.png" class="img-responsive">
		</div>
		<div class="col-lg-6">
			<div class="title-page">
				<h1 class="h1-title">WHY A MANAGEMENT <span class="gold">COMPANY</span>?</h1>		
				<p class="desc">We provide our residential and commercial clients with a one-stop-shop service for maintenance, repairs, renovations and new building projects in all the trades required.</p>
				<p><a href="https://freddyit.com/company-profile/" class="btn-gold more">Know more</a></p>
			</div>	
		</div>
	</div>
	</div>
</div>

<div class="service-area">
	<div class="grid">
	<div class="container-fluid"> 

		<div class="col-lg-12">
			<div class="title-page">
				<p>Service</p>
				<h1 class="h1-title">WE SERVICE AREAS LIKE</h1>		
			</div>	
		</div>
		<div class="col-lg-6">
			<div class="place">
				<select class="form-select">
					<option value="Hampshire">Hampshire</option>
					<option value="Berkshire">Berkshire</option>
					<option value="Wiltshire">Wiltshire</option>
					<option value="Oxfordshire">Oxfordshire</option>
					<option value="Gloucestershire">Gloucestershire</option>
					<option value="Lancashire">Lancashire</option>
					<option value="Surry">Surry</option>
				</select>
			</div>	
		</div>
		<div class="col-lg-6">
			<div class="place">
				<select class="form-select">
					<option value="Abbots Worthy">Abbots Worthy</option>
					<option value="Abbotstone">Abbotstone</option>
					<option value="Abbotts Ann">Abbotts Ann</option>
					<option value="Abbotts Ann Down">Abbotts Ann Down</option>
					<option value="Abbotts Barton">Abbotts Barton</option>
					<option value="Adbury">Adbury</option>
				</select>
			</div>	
		</div>
		<div class="col-lg-12">
			<div class="callus">
				<h1 class="h1-title">Call us on <span>07451-279908</span> to get ideas for your bathroom and book a free quote.</h1>		
			</div>	
		</div>
	</div>
	</div>
</div>


<div class="footer-area">
	<div class="grid">
	<div class="container-fluid"> 
		<div class="col-lg-4">
			
			<div class="area-l">
				<img src="<?php echo @constant('root_img');?>
call_us-1.png" class="f-left">
				<div class="areaP f-left">
					<h1>Phone</h1>
					<p>07451-0279908</p>
					<p>07451-0279908</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-lg-4">
			<div class="area-c">
				<h1>Request for Email</h1>
				<a href="https://www.bathromsbyfreddy.com">www.bathromsbyfreddy.com</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-lg-4">
			<div class="area-r">
				<img src="<?php echo @constant('root_img');?>
point.png" class="f-left">
				<div class="areaP f-left">
					<p>76, LPM aparti villa,</p>
					<p>SanAndreas, USA</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
	</div>
</div>
<div class="form-area">
	<div class="grid">
	<div class="container-fluid"> 
		<div class="col-lg-6">
			<div class="request">
				<h1>Request an <span><br>appointment</span></h1>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
			<div class="clearfix"></div>
			<div class="f-left">
				<h2>Give Us a Call</h2>
				<p>07451-0279908</p><p>07451-0279908</p>
			</div>
			<div class="f-right">
				<h2>Or a visite at:</h2>
				<a href="https://www.bathroomsbyfredy.com">www.bathroomsbyfredy.com</a>
			</div>
			</div>
		</div>	
		<div class="col-lg-6">
			<div class="request-form">
			<form>
			  <div class="form-group col-md-12">
				<label for="name">Name*</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="">
			  </div>
			  <div class="form-group">
				<div class="form-group col-md-6">
				<label for="inputEmail4">Email*</label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="">
				</div>
				<div class="form-group col-md-6">
				<label for="number">Phone Number*</label>
				<input type="email" class="form-control" id="number" placeholder="">
				</div>
			  </div>
				<div class="form-group col-md-12">
				<label for="exampleFormControlTextarea1">Message*</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
				</div>
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-gold">GET IN TOUCH</button>
				</div>
  
			</form>
			</div>
		</div>
	</div>
	</div>
</div>


<!-- -->




<style>

.slide-content {

    padding: 100px 0px;

}



</style>



<?php echo '<script'; ?>
>

$(".call").click(function(){

    $("div").removeClass("open");

});



<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

$("a[href^='#']").click(function(e) {

  e.preventDefault();



  var position = $($(this).attr("href")).offset().top;



  $("body, html").animate({

    scrollTop: position

  } /* speed */ );

});

<?php echo '</script'; ?>
>




<?php echo '<script'; ?>
>

	  setTimeout(function() {

	  $('.fake').fadeOut('fast');

	}, 2000); // <-- time in milliseconds

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

	$(document).ready(function(){

        $('.hover').hover(function(){

          $(this).addClass('flip');

        },function(){

          $(this).removeClass('flip');

        });

      });

    <?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">

$(".limit-text p").text(function(index, currentText) {
    return currentText.substr(0, 85)  + '…';
});
<?php echo '</script'; ?>
><?php }
}
