{literal}<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>{/literal}
<link rel="stylesheet" href="https://paintingbyfreddy.co.uk/resources/swal/swal.css">
{literal}<script src="https://paintingbyfreddy.co.uk/resources/swal/swal.js"></script>{/literal}

{assign var="status" value=$smarty.get.success}
<input type="hidden" name="success" id="success" value="{$success}">
{literal}
<script type="text/javascript">
    $(document).ready(function(){
  var status = $('#success').val();
    if(status==1){
        $('#Added').modal('show');
    }else if(status==2){
        $('.Added2').modal('show');
    }
});

    
</script>
{/literal}
{literal}
    <style type=text/css>
	body{
		padding-top:0!important;
	}
    .top-nav {
        transition: height ease-in-out .3s;
    }
    .scrolled .top-nav {
        height: 120px;
    }
    .scrolled .top-nav img {
        max-height: 85px;
        transition: max-height ease-in-out .3s;
        -webkit-transition: max-height ease-in-out .3s;
    }
    .navbar-default {
        margin-bottom: 0;
    }
    </style>
{/literal}

<!--Start Top Banner-->
<section class="review-banner ourteam">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 reviewsPage">
				<h1 class="banner_title">BY FREDDY REVIEWS</h1>		
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
                </fieldset>
				<center>
                <p>{floatval($reviews_average['average_rating'])} Rating   |   {1000+$reviews_gt_five_counter} Reviews</p>
				</center>
                <!-- <p>4.53 Rating   |   2,166 Reviews</p> -->

			</div>
		</div>
	</div>
</section>
<!--End Top Banner-->



<section class="top-reviews" style="display:none;">
    <div class="container">
        <a href="#">Site Appointments</a> <span class="seperator">|</span> <a href="#">Jobs</a> <span class="seperator">|</span> <a href="#">Start</a>
    </div>
</section>

<section class="content"> 
    <div class="container" id="clientreviews">

    {if !empty($reviews)}
    {$i = 1} 

    {foreach from=$reviews item=row}




        <div class="col-md-6">
            <div class="client-review">
				<div class="row">
					<div class="col-sm-4">
						<div class="ppics">
						{if $row['id'] == 194 }
							<img src="{$smarty.const.root_img}r1.png">
						{/if}
						{if $row['id'] == 193 }
							<img src="{$smarty.const.root_img}r2.png">
						{/if}
						{if $row['id'] == 191 }
							<img src="{$smarty.const.root_img}r3.png">
						{/if}
						{if $row['id'] == 181 }
							<img src="{$smarty.const.root_img}r4.png">
						{/if}
						{if $row['id'] == 188 }
							<img src="{$smarty.const.root_img}r5.png">
						{/if}
						{if $row['id'] == 186 }
							<img src="{$smarty.const.root_img}r6.png">
						{/if}
						{if $row['id'] == 173 }
							<img src="{$smarty.const.root_img}r7.png">
						{/if}
						{if $row['id'] == 171 }
							<img src="{$smarty.const.root_img}r8.png">
						{/if}
						
						
						
						</div>
					</div>
					<div class="col-sm-8">
					<div class="client-comments"><p>{$row['comments']}</p></div>
					<h3 class="client-name">{$row['name']}</h3>
					<fieldset class="rating">

                    <input type="radio" id="star5" name="rating5{$i}" value="5" {if $row['stars']==5 } checked="checked" {/if} /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating4{$i}" value="4" {if $row['stars']==4 } checked="checked" {/if}  /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating3{$i}" value="3" {if $row['stars']==3 } checked="checked" {/if} /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating2{$i}" value="2" {if $row['stars']==2 } checked="checked" {/if}  /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating1{$i}" value="1" {if $row['stars']==1 } checked="checked" {/if}  /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>               
				<div class="row meta">
			<span id="more">Read More  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
				</div>					  
                <div class="row meta" style="display:none;">
                    <div class="col-md-6">
              <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        {$row['added_at']|date_format:"%b %e, %Y"}
                    </div>
                </div>
					</div>
				</div>
				
				
                
            </div>
        </div>
        {$i = $i+1}
    {/foreach}
    {/if}



        <!-- <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="client-review">
                <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <h3 class="client-name">Client Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        Jan. 24, 2019
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-12 text-center">
              <div class="pagination_div">

                <input type='hidden' id='current_page' class="" />
        
                <input type='hidden' id='show_per_page' />
        
                <div id='page_navigation'></div>
        
            </div>
            </div>
    </div>
</section>
{literal}
<style type="text/css">
    .admin-prompt-info {
        width: 100%;
        max-width: 400px;
        margin: 20px auto;
        text-align:left;
    }
    .admin-prompt {
        text-align: center;
        letter-spacing: 1px;
        font-size: 16px;
    }
    .admin-prompt h1 {
        text-transform: uppercase;
        font-size: 28px;
        font-weight: bold;
    }
    .admin-prompt-icon {
        margin: 20px auto;
        animation: breathing 1s ease-out infinite normal;
    }
    .admin-prompt .btn {
        background: #f00;
        color: white;
        font-size: 22px;
        text-transform: uppercase;
        padding: 5px 30px;
        font-weight: bold;
        margin: 20px 0;
    }
    .admin-prompt .btn.confirm {
        background: #00ae00;
    }
    .admin-prompt .modal-body {
        padding: 50px 50px 60px;
    }

    #Added .close {
    background: red;
    padding: 6px 10px;
    border-radius: 100%;
    color: white;
    opacity: .8;
    position: absolute;
    top: -10px;
    right: -10px;
}

    @keyframes breathing {
      0% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    
      25% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    
      60% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    
      100% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    }
</style>
{/literal}

<div class="modal fade admin-prompt" id="Added" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1>Review Already Added</h1>
          <div class="admin-prompt-icon warning">
                <img src="https://admin.byfreddy.io/photo/success.png">
          </div>
          <p>You have already submitted your review. Thank you.</p>
        </div>
       
      </div>
      
    </div>
  </div>

  <div class="modal fade admin-prompt Added2" id="Added" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1>Information Added</h1>
          <div class="admin-prompt-icon warning">
                <img src="https://admin.byfreddy.io/photo/success.png">
          </div>
          <p>You have successfully submitted your review!</p>
        </div>
       
      </div>
      
    </div>
  </div>


<!--End Content-->

{literal}

    <style>
        .content{
            background:#f2f4f5; 
            padding: 60px 0;
            margin: 0;
        }
    #myPager li a {
        border: none;
        color: #747271;
        letter-spacing: 1px;
    }
    #myPager li.active a {
        background: #f79122;
        color: white;
        border-radius: 5px;
    }
    .review-banner .rating {
        margin: auto;
        font-size: 30px;
        width: 230px;
    }
    </style>
{/literal}   
<!-- for pagination -->
{literal}
<style type="text/css">

    .pagination_div{

        width:100%;

        text-align: center;

    }

    a.btn-default:hover{

        background-color: #2e6da4;

        color:#fff;

    }
    .btn-default {
        background: #f79122;
        color: white;
        border: none;
    }
    a.btn-default:hover {
    background-color: #fff;
    color: #f79122;
    }
    .btn-primary {
    color: #f79122;
    background-color: #fff;
    border-color: #f79122;
    }
</style>

{/literal}
    {literal}
<script type="text/javascript">
    $(document).ready( ()=> {
            let height = $(window).width() >= 992 ? $('.top-nav').innerHeight() : $('.top-nav-mob').innerHeight();
            $('body').css('padding-top', height);
            if($(window).width() >= 992) {
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
                    var header = $('.main-header')
                    if(scroll >=  50) {
                        header.addClass("scrolled");
                    } else {
                        header.removeClass("scrolled");
                    }
                });
            }
        })
    

      makePager = function(page){

            var show_per_page = 9;

            var number_of_items = $('#clientreviews .client-review').size();

            var number_of_pages = Math.ceil(number_of_items / show_per_page);

            var number_of_pages_todisplay = 5;

            var navigation_html = '';

            var current_page = page;

            var current_link = (number_of_pages_todisplay >= current_page ? 1 : number_of_pages_todisplay + 1);

            if (current_page > 1)

                current_link = current_page;

            if (current_link != 1) navigation_html += "<a class='btn btn-default' href=\"javascript:first();\">« Start&nbsp;</a>&nbsp;<a class='btn btn-default' href=\"javascript:previous();\">« Prev&nbsp;</a>&nbsp;";

            if (current_link == number_of_pages - 1) current_link = current_link - 3;

            else if (current_link == number_of_pages) current_link = current_link - 4;

            else if (current_link > 2) current_link = current_link - 2;

            else current_link = 1;

            var pages = number_of_pages_todisplay;

            while (pages != 0) {

                if (number_of_pages < current_link) { break; }

                if (current_link >= 1)

                    navigation_html += "<a class='" + ((current_link == current_page) ? "btn btn-primary " : "btn btn-default") + "' href=\"javascript:showPage(" + current_link + ")\" longdesc='" + current_link + "'>" + (current_link) + "</a>&nbsp;";

                current_link++;

                pages--;

            }

            if (number_of_pages > current_page){

                navigation_html += "<a class='btn btn-default' href=\"javascript:next()\">Next »</a>&nbsp;<a class='btn btn-default' href=\"javascript:last(" + number_of_pages + ");\">Last »</a>";

            }

                    $('#page_navigation').html(navigation_html);

      }

      var pageSize = 9;

      showPage = function (page) {

            $("#clientreviews .client-review").hide();

            $('#current_page').val(page);

            $("#clientreviews .client-review").each(function (n) {

                if (n >= pageSize * (page - 1) && n < pageSize * page)

                    $(this).show();

            });

        makePager(page);

       }

        showPage(1);

       next = function () {

            new_page = parseInt($('#current_page').val()) + 1;

            showPage(new_page);

        }

        last = function (number_of_pages) {

            new_page = number_of_pages;

            $('#current_page').val(new_page);

            showPage(new_page);

        }

        first = function () {

            var new_page = "1";

            $('#current_page').val(new_page);

            showPage(new_page);    

      }

        previous = function () {

            new_page = parseInt($('#current_page').val()) - 1;

            $('#current_page').val(new_page);

            showPage(new_page);

      }

</script>
<script type="text/javascript">
$(document).ready(function() {

  var maxLength = 100;
  $(".client-comments p").each(function() {
    var myStr = $(this).text();
    if ($.trim(myStr).length > maxLength) {
	
    var buttonMore = '<span class="dots">..</span><a href="javascript:void(0);" class="read-more">Read More</a>';
      var newStr = myStr.substring(0, maxLength);
      var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
      $(this).empty().html(newStr);
      $(this).append('<span class="more-text">' + removedStr + '</span>');
      $(this).append(buttonMore);
		
    }
	
  });
    $(document).on("click", ".read-more", function() {
        $(this).parents("div.col-md-4").addClass("col-md-8");
        $(this).parents("div.col-md-4").removeClass("col-md-4");
        $(this).siblings(".more-text").removeClass("more-text");
        $(this).siblings(".dots").hide('fast');
        $(this).remove();
  });
});
</script>
<style>
.col-md-4 .client-review{
    transition: all .2s;
}
.col-md-8 .client-review {
    max-width: none;
    transition: all .2s;
}
.client-comments .more-text,
.col-md-8 .client-comments .dots {
  display: none;
}
.col-md-8 .client-review .client-comments .more-text {
  display: block;
}
</style>
{/literal}