<style type="text/css">
	{literal}
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
{/literal}
</style>
<div class="home-banner">
	<div class="container-fluid">
    	<div class="col-md-6">
        	<div class="counter">
                <div class="counter-box" {if $totalwork ==0 } style="display: none;"{/if}>
                    <div class="counter-box-number">{$totalwork}</div>
                    <div class="counter-box-title">Completed Jobs</div>
                    <hr>
                    <div class="counter-box-description"><p>Bathroom by Freddy, testimonials are great, but you can't get away from the real thing.</p></div>
                </div>
                <div class="counter-box" {if $totalreviws ==0 } style="display: none;"{/if}>
                    <div class="counter-box-number">{$totalreviws}</div>
                    <div class="counter-box-title">Reviews</div>
                    <hr>
                    <div class="counter-box-description">
                    <p>{floatval($reviews_average['average_rating'])} Rating </p>
                    <p>Opened 18 December 2019</p>
                    <fieldset class="rating">
                    <input type="radio" id="star5" name="rating10" value="5" {if $reviews_average['average_rating'] ==5 } checked="checked" {/if} /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    
    				<input type="radio" id="star4half" name="rating9" value="4 and a half" {if $reviews_average['average_rating'] >=4.5 } checked="checked" {/if}  /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating8" value="4" {if $reviews_average['average_rating'] >=4 } checked="checked" {/if}  /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    
    				<input type="radio" id="star3half" name="rating7" value="3 and a half" {if $reviews_average['average_rating']>=3.5 } checked="checked" {/if}  /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating6" value="3" {if $reviews_average['average_rating'] >=3 } checked="checked" {/if} /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    
    				<input type="radio" id="star2half" name="rating5" value="2 and a half" {if $reviews_average['average_rating']>=2.5 } checked="checked" {/if}  /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating4" value="2" {if $reviews_average['average_rating'] >=2 } checked="checked" {/if}  /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    				<input type="radio" id="star1half" name="rating3" value="1 and a half" {if $reviews_average['average_rating']>=1.5 } checked="checked" {/if} /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating"2 value="1" {if $reviews_average['average_rating'] >=1 } checked="checked" {/if}  /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    				<input type="radio" id="starhalf" name="rating1" value="half" {if $reviews_average['average_rating'] >=1 } checked="checked" {/if}  /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset></div>
                </div>
                
                <div class="counter-box" {if $totalquotes ==0 } style="display: none;"{/if}>
                    <div class="counter-box-number">{$totalquotes}</div>
                    <div class="counter-box-title">Quotes Delivered</div>
                    <hr>
                    <div class="counter-box-description"><p>Our company is different we provide you with 3 quotes, from three levels of teams.</p></div>
                </div>
                <div class="counter-box" {if $totalfencer ==0 } style="display: none;"{/if}>
                    <div class="counter-box-number">{$totalfencer}</div>
                    <div class="counter-box-title">Bathroom/s</div>
                    <hr>
                    <div class="counter-box-description"><p>Professional Bathroom are joining us on a daily bases.</p></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    	<div class="col-md-6">
        	<div class="contractors">
                <h1 class="stroke-double" title="O O O O O O O O O O O O O O O O O O">Bathroom Contractors Near you</h1>
                <ul class="stroke-double" title="O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O O  O O O O O O O O O O O  O O O O O O O O O O O  O O O O O O ">
                    <li>Receive 3 quotes from 3 team members</li>
                    <li>One site Inspection only</li>
                    <li>Work posted daily, Get the best for your Bathroom work!</li>
                </ul>
                <div class="col-sm-6">
                    <a href="/our-work/"><button class="view-btn1">View my Work</button></a>
                </div>
                <div class="col-sm-6">
                    <a href="/the-team/"><button class="view-btn2">View Team</button></a>
                </div>
                <div class="col-sm-12">
                    <a href="/get-quote/"><button class="view-btn1">Get Started</button></a>
                </div>
            </div>
        </div>
    </div>
        <a href="#WHATWEDO"><div  class="animated bounce scroll"><img src="{$smarty.const.root_img}scroll.png" class="img-responsive"></div></a>
</div>

<div class="unwrap">

<section class="home-mobbanner">
    <div class="mob-buttons-holder">
    <div class="container">
        	<div class="col-xs-12">
            	<h2>Bathroom Contractors Near you</h2>
                <ul>
                    <li>Receive 3 quotes from 3 team members</li>
                    <li>One site Inspection only</li>
                    <li>Work posted daily, Get the best for your bathroom work!</li>
                </ul>
            </div>
        	<div class="col-xs-6">
        	<a href="/our-work/"><button class="view-btn1">View my Work</button></a>
        </div>
        <div class="col-xs-6">
        	<a href="/the-team/"><button class="view-btn2">View Team</button></a>
        </div>
        <div class="col-sm-12">
        	<a href="/get-quote/"><button class="view-btn1">Get Started</button></a>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
</section>

<section class="welcome">

  <div class="container margin-section">

    <div class="row">

    <div class="col-md-6">
				<iframe src="https://player.vimeo.com/video/332640011" width="100%" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
			<div class="col-md-6 align-center">

    	<h2 class="orangebold-head">{$painting_h}</h2>

        <p>{$painting_p}</p>

    </div>

      </div>

  </div>

</section>



<section id="WHATWEDO">

      <div class="align-center">

        <div class="container">

            <h3 class="orangebold-head">{$we_h}</h3>

        </div>

    </div>

	<div class="align-center">

        <div class="container">

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>

    </div>
</section>
<section id="getintouch">
	<div class="align-center">

        <div class="container">

            <h2 class="orangebold-head">{$get_h}</h2>
            
            <p>Call us on 07451-279908 to get ideas for your bathroom and book a free quote.</p>

            <h4 class="wow fadeIn" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">OTHERWISE CALL OUR FRIENDLY STAFF ON 07451-0279908 FOR INFORMATION OR TO BOOK AN ONSITE VISIT.</h4>

        </div>

    </div>
</section>
<section>
    <div class="align-center">

        <div class="container">

            <h3>Tell us what type of service you need</h3>
            <p>Pick a service that best suit your needs</p>

        </div>

    </div>

		<div class="container">

      <div class="row">

      	<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".1s">

				<div class="hover panel">

                	<div class="front">

                    	<div class="box1">
                            <div class="box-icon">

                            	<img src="{$smarty.const.root_img}Bathrooms-By-Fred-1.png" />

                            </div>

                        	<h2 class="title-orange">NEW BATHROOMS &amp; ENSUITES</h2>


                        </div>

                    </div>

                    <div class="back">

                    	<div class="box2">


                        	<h2 class="title-orange2">NEW BATHROOMS &amp; ENSUITES</h2>

                            <div class="short-desc">

                            <p>Our builder works with the wet area trades team to design, build and instal your new bathrooms and ensuites, for residential or commercial premises.</p>

                            </div>

                            <a href="{$smarty.const.siteurl}new-bathrooms-and-ensuites" class="readmore">Read More</a>

                        </div>

                    </div>

               	</div>

			</div>

            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".1s">

				<div class="hover panel">

                	<div class="front">

                    	<div class="box1">

                            <div class="box-icon">

                            	<img src="{$smarty.const.root_img}Bathrooms-By-Fred-2.png" />

                            </div>
                        	<h2 class="title-orange">RENOVATIONS &amp; EXTENSIONS</h2>


                        </div>

                    </div>

                    <div class="back">

                    	<div class="box2">


                        	<h2 class="title-orange2">RENOVATIONS &amp; EXTENSIONS</h2>

                            <div class="short-desc">

                            <p>We can do the smallest renovation eg re-tiling or carpentry, to extending and re-fitting your existing bathroom in your choice of style upgrade.</p>

                            </div>

                            <a href="{$smarty.const.siteurl}bathroom-renovations-and-extensions" class="readmore">Read More</a>

                        </div>

                    </div>

               	</div>

			</div>

            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".1s">

				<div class="hover panel">

                	<div class="front">

                    	<div class="box1">

                            <div class="box-icon">

                            	<img src="{$smarty.const.root_img}Bathrooms-By-Fred-3.png" />

                            </div>
                        	<h2 class="title-orange">REPAIRS &amp; MAINTENANCE</h2>


                        </div>

                    </div>

                    <div class="back">

                    	<div class="box2">


                        	<h2 class="title-orange2">REPAIRS &amp; MAINTENANCE</h2>

                            <div class="short-desc">

                            <p>Wet areas are under stress and need periodic care and replacement of worn and damaged parts. We’ll repair and help you maintain your bathrooms looking great.</p>

                            </div>

                            <a href="{$smarty.const.siteurl}bathroom-repairs-and-maintenance" class="readmore">Read More</a>

                        </div>

                    </div>

               	</div>

			</div>

      </div>

    </div>

</section>

<section id="range">

    <div class="container">

      <div class="row">
			 <div class="align-center">
        
                <div class="container">
        
                    <h3>In Addition We Do</h3>
        
                </div>
        
            </div>
            

            <div class="col-md-12">

                <div class="row">
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/tiling.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Tiling:</strong> floor and wall tiling in ceramic, glass, metal and stone.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/masonry.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Masonry:</strong> brick, block and stone laying for walls, floors and partitions.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/floors.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Floors:</strong> properly waterproofed and drained floors in any suitable material.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/glass.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Glass:</strong> showers, doors, mirrors, splashbacks and windows, in clear, frosty or coloured.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/plumbing.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Plumbing:</strong> essential plumbing for bathrooms and toilets, plus a wide range of styles of taps, toilets &amp; bidets.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/basins.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Basins &amp; baths:</strong> freestanding or built-in vanity units, hand basins, splashbacks and baths.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/showers.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Showers:</strong> shower cubicles and alcoves pre-fabricated or built onsite in any material and fixtures.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/carpentry.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Carpentry:</strong> timber furnishings such as cupboards, vanity units, shelves, walls, partitions and doors. Request pre-fabricated or custom built.</p>
					</div>
                    </div>
					</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12">
                  	<div class="range">
					<div class="image">
                      <img src="{$smarty.const.root_img}/fans.png" class="img-responsive">
					</div>
                    <div class="name">
                        <p><strong>Fans, heaters &amp; lights:</strong> essential bathroom electrical wiring installation plus  choice of electrical fixture styles including outlets.</p>
					</div>
                    </div>
				</div>
                  <div class="col-sm-6 col-md-3 col-xs-6 col-xxs-12 ">
                  	<div class="range">
                        <div class="image">
                          <img src="{$smarty.const.root_img}/accessories.png" class="img-responsive">
                        </div>
                        <div class="name">
                            <p><strong>Accessories:</strong> We supply &amp; instal other useful bathroom equipment such as shower caddies, towel racks, toilet roll holders and hooks.</p>
                        </div>
                        </div>
					</div>
                </div>

            </div>



        </div>

    </div>

</section>

<section id="companyprofile">

	<div class="container">

		<div class="row">

        	<div class="col-md-8">

            	<h1 class="wow fadeIn" data-wow-delay=".1s">Why a management company?</h1>

            	<p class="wow fadeIn" data-wow-delay=".1s">We provide our residential and commercial clients with a one-stop-shop service for maintenance, repairs, renovations and new building projects in all the trades required.</p>

                <a href="https://freddyit.com/company-profile/">Read More</a>

            </div>

        	<div class="col-md-4">

            	<center><img src="{$smarty.const.root_img}professionalfreddy.png" class="wow fadeIn" data-wow-delay=".1s" /></center>

            </div>

        </div>

	</div>

</section>

<section class="home_services">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="wow fadeIn" data-wow-delay=".1s">We service the following areas:</h3>
      </div>
    </div>
    
    <div class="row">



    {if !empty($cats)}

   {foreach $cats as $cat} 
     <div class="col-md-4 col-sm-6 wow fadeIn locations" data-wow-delay=".1s">
                <h5> {$cat.area_template_name}</h5>
                 <!--  class="limit-text"    -->
                <div><p class="area-info-para">
           
              
                {foreach $cat.subcats as $subcat} 
                {if $subcat@iteration < 7}
               
{$subcat.town_name},
 {/if}

                {/foreach}....

             

            </p></div>
                <a href="#" class="readmore" data-toggle="modal" data-target="#{$cat.area_template_name}s">Read More</a> <a href="{$row['calendely_link']}"   class="free-quote" target="_blank">Book Obligation Free Quote</a>
              </div>
              

               
              <div id="{$cat.area_template_name}s" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{$cat.area_template_name}</h4>
                      </div>
                      <div class="modal-body">
                        <p>{if !empty($cat.subcats)}
               
                {foreach $cat.subcats as $subcat} 
               
               
{$subcat.town_name},


                {/foreach}

                {/if}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                
                  </div>
                </div>
                
    {/foreach}
    {/if}
             {if !empty($area_selection)} 
    
             {foreach from=$area_selection item=row}   
            {assign var="candy" value=$row['calandy']}
     {if !empty($row['area'])} 
              <div class="col-md-4 col-sm-6 wow fadeIn locations" data-wow-delay=".1s">
                <h5>{$row['area']}</h5>
                <div class="limit-text"><p class="area-info-para">{$row['subrub']}</p></div>
                <a href="#" class="readmore" data-toggle="modal" data-target="#{$row['area']}">Read More</a> <a href="{$row['calandy']}"   class="free-quote" target="_blank">Book Obligation Free Quote</a>
              </div>
              {/if}
                <div id="{$row['area']}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{$row['area']}</h4>
                      </div>
                      <div class="modal-body">
                        <p>{$row['subrub']}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                
                  </div>
                </div>
              {/foreach}
              {else}
                <p>No area data found </p>
              {/if}
              <div class="clearfix"></div>
              
        </div>

          
    
  </div>
</section>
	

</div>



<style>

.slide-content {

    padding: 100px 0px;

}



</style>



<script>

$(".call").click(function(){

    $("div").removeClass("open");

});



</script>

<script>

$("a[href^='#']").click(function(e) {

  e.preventDefault();



  var position = $($(this).attr("href")).offset().top;



  $("body, html").animate({

    scrollTop: position

  } /* speed */ );

});

</script>




<script>

	  setTimeout(function() {

	  $('.fake').fadeOut('fast');

	}, 2000); // <-- time in milliseconds

</script>

<script>

	$(document).ready(function(){

        $('.hover').hover(function(){

          $(this).addClass('flip');

        },function(){

          $(this).removeClass('flip');

        });

      });

    </script>



<script type="text/javascript">

$(".limit-text p").text(function(index, currentText) {
    return currentText.substr(0, 85)  + '…';
});
</script>