<!--Start Top Banner-->
<section class="contact-banner ourteam">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="banner_title">{$contact_h3_heading}</h1>
				
			</div>
		</div>
	</div>
</section>
<!--End Top Banner-->





<!--Start Breadcrumbs-->

<!-- <section>

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<ul class="crumb">

					<li><a href="{$smarty.const.siteurl}">Home</a></li>

					<li>Contact Us</li>

				</ul>

			</div>

		</div>

	</div>

</section> -->

<!--End Breadcrumbs-->



<!--Start Content-->
<section class="content contact-us"> 
	<div class="container">
		<center>
		<h2 class="ourmate-title">DO YOU NEED QUOTE?</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
		irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
		cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="gap20"></div>
		<a href="{$smarty.const.siteurl}get-quote/" class="need_quote" >Get Qoute</a>
		<div class="gap20"></div>
		</center>
		
		<div class="gap20"></div>
		<h3>CONTACT US</h3>
		<div class="gap20"></div>
	</div>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6">	
				<p class="contact_para_desc">{$contact_para_desc}</p>
				<div class="gap20"></div>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$contact_number}</p>
				<p class="cont-span"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; {$contact_para_desc3}</p>
				<p class="cont-span"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; {$contact_para_desc4}</p>
				<div class="gap20"></div>
				<img src="{$smarty.const.root_img}maps.jpg" alt="" class="maps img-responsive"  />
			</div>	
			<div class="col-md-6 col-sm-6 col-lg-6">	
            	<div class="row" id="contact-form">
				
	            	<form action="#" method="POST" id="pipefromContact" class="Individual-form">
	                	<div class="col-md-6">
							<label for="name">First Name*</label>
	                    	<input type="text" placeholder="" id="name" name="name" required="required" />
	                    </div>
	                	<div class="col-md-6">
							<label for="lname">Last Name*</label>
	                    	<input type="text" placeholder="" id="lname" name="lname" required="required" />
	                    </div>
	                	<div class="col-md-6">
							<label for="mobile">Phone Number*</label>
	                    	<input type="text" placeholder=""  id="mobile" name="mobile" />
	                    </div>
	                	<div class="col-md-6">
							<label for="email">Email Address*</label>
	                    	<input type="email" placeholder="" id="email" name="email" />
	                    </div>
	                	<div class="col-md-6">
							<label for="email">Subject*</label>
	                    	<input type="text" placeholder="" name="subject" id="subject" />
	                    </div>
	                    <div class="col-md-12">
		                    <div> 
	                    	<label>Please tell us little about the work that is needed.</label>
	                    	</div>
	                    	<textarea class="form-control" rows="5" name="inquery" tabindex="7"></textarea>
	                    </div>
	                	<div class="col-md-12">
	                    	<!-- <input type="submit" name="btn-submit" /> -->
	                    	 <input id="submitformC" type="submit" class="btn btn-info" value="Submit">
	                    </div>
	                </form>
                </div>
			</div>	
	</div>	
</div>	
</section>
<section class="contact-usInfo"> 
<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6">	
			<div class="near-u">
				 <h1>Contact Us near by <br><span class="gold">your location</span> </h1>
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
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6">	
			<div class="contactInfo">
			<div class="gap20"></div>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$contact_number}</p>
				<p class="cont-span"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; {$contact_para_desc3}</p>
				<p class="cont-span"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; {$contact_para_desc4}</p>
				<div class="gap20"></div>
			</div>
		</div>
	</div>
</div>
</section>


<section class="content" id="content-contacts" style="display:none;"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6">
            	<div class="row" id="contact-form">
	            	<form action="#" method="POST" id="pipefromContact" class="Individual-form">
	                	<div class="col-md-6">
	                    	<input type="text" placeholder="Name" id="name" name="name" required="required" />
	                    </div>
	                	<div class="col-md-6">
	                    	<input type="text" placeholder="Last Name" id="lname" name="lname" required="required" />
	                    </div>
	                	<div class="col-md-6">
	                    	<input type="text" placeholder="Phone Number"  id="mobile" name="mobile" />
	                    </div>
	                	<div class="col-md-6">
	                    	<input type="email" placeholder="Email Address" id="email" name="email" />
	                    </div>
	                	<div class="col-md-6">
	                    	<input type="text" placeholder="Subject" name="subject" id="subject" />
	                    </div>
	                    <div class="col-md-12">
		                    <div> 
	                    	<label>Please tell us little about the work that is needed.</label>
	                    	</div>
	                    	<textarea class="form-control" rows="5" name="inquery" tabindex="7"></textarea>
	                    </div>
	                	<div class="col-md-4">
	                    	<!-- <input type="submit" name="btn-submit" /> -->
	                    	 <input style="margin-top: 25px;" id="submitformC" type="submit" class="btn btn-info" value="Submit">
	                    </div>
	                </form>
                </div>

				<p class="contact_para_desc">{$contact_para_desc}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$contact_number}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$hampshire}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$berkshire}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$surrey}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$wiltshire}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$cheshire}</p>
				<p class="cont-span"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; {$contact_para_desc3}</p>
			</div>

			<div class="col-md-6 col-sm-6 col-lg-6">
				 <a href="{$smarty.const.siteurl}get-quote/"><img class="img-responsive" src="{$smarty.const.root_img}need-a-quote.jpg"></a>
			</div>
		</div>

		



	</div>

</section>

<!--End Content-->