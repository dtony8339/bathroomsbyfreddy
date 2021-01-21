<!--Start Top Banner-->
<section class="top-banner contact" style="background-image: url({$smarty.const.root_img}contact-banner.jpg);">
				<h1>Get in touch with us</h1>
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
<section class="content" id="content-contacts"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6">
            	<div class="row" id="contact-form">
                	<div class="col-md-6">
                    	<input type="text" placeholder="Name" />
                    </div>
                	<div class="col-md-6">
                    	<input type="text" placeholder="Last Name" />
                    </div>
                	<div class="col-md-6">
                    	<input type="text" placeholder="Phone Number" />
                    </div>
                	<div class="col-md-6">
                    	<input type="email" placeholder="Email Address" />
                    </div>
                	<div class="col-md-8">
                    	<input type="text" placeholder="Subject" />
                    </div>
                	<div class="col-md-4">
                    	<input type="submit"/>
                    </div>
                </div>
				<p class="contact_para_desc">{$contact_para_desc}</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {$contact_number}</p>
				<p class="cont-span"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; {$contact_para_desc3}</p>
				
				
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6">
				 <a href="{$smarty.const.siteurl}get-quote/"><img class="img-responsive" src="{$smarty.const.root_img}need-a-quote.jpg"></a>

			</div>
		</div>
		

	</div>
</section>
<!--End Content-->