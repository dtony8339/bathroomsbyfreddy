<?php
/* Smarty version 3.1.31, created on 2020-05-17 14:00:05
  from "/home/ukbathroomsbyfr/public_html/templates/contactus.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec14365d9d9d0_83785402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bca1a84decf679195bdd349bdc76e9a66c5250' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/contactus.tpl',
      1 => 1552457663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec14365d9d9d0_83785402 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Start Top Banner-->

<section class="top-banner contact" style="background-image: url(<?php echo @constant('root_img');?>
contact-banner.jpg);">

				<h1>Get in touch with us</h1>

</section>

<!--End Top Banner-->



<!--Start Breadcrumbs-->

<!-- <section>

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<ul class="crumb">

					<li><a href="<?php echo @constant('siteurl');?>
">Home</a></li>

					<li>Contact Us</li>

				</ul>

			</div>

		</div>

	</div>

</section> -->

<!--End Breadcrumbs-->



<!--Start Content-->

<div class="container">
	<div class="row">
		<div id="loadingmsgC" class="alert alert-success" style="display:none; background: transparent !important;border: 0;">
        	<div class="row">
            	<div class="col-md-8">
                	<h1>We are sending your enquiry to our team, <span>please dont close this screen.</span></h1>
                    <div class="row">
                    	<div class="col-md-8">
                        	<h3>You should recieve a text msg with a link to our calander where by you can make your appoinment.</h3>
                        </div>
                        <div class="col-md-4">
                        	<img src="<?php echo @constant('root_img');?>
/emailphone.png" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo @constant('root_img');?>
/professionalfreddy.png" class="img-responsive">
                </div>
            </div>
        </div>
		<div id="succC" class="alert alert-success" style="display:none; background: transparent !important;border: 0;">
        	<div class="row">
            	<div class="col-md-8">
                	<h1><span>Thanks!</span> for contacting us.</h1>
                    <div class="row">
                    	<div class="col-md-8">
                        	<h3>We will send and sms/email within 2 mins to book your appointment with us. We will contact you via phone within 6 hours.</h3>
                        </div>
                        <div class="col-md-4">
                        	<img src="<?php echo @constant('root_img');?>
/emailphone.png" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo @constant('root_img');?>
/professionalfreddy.png" class="img-responsive">
                </div>
            </div>
        </div>
        <div style="float: right;display:none; margin-right: 50%;" class="loader"></div>
        <br style"clear:both;">
    </div>
</div>

<section class="content" id="content-contacts"> 
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

				<p class="contact_para_desc"><?php echo $_smarty_tpl->tpl_vars['contact_para_desc']->value;?>
</p>
				<p class="cont-span"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; <?php echo $_smarty_tpl->tpl_vars['contact_number']->value;?>
</p>
				<p class="cont-span"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; <?php echo $_smarty_tpl->tpl_vars['contact_para_desc3']->value;?>
</p>
			</div>

			<div class="col-md-6 col-sm-6 col-lg-6">
				 <a href="<?php echo @constant('siteurl');?>
get-quote/"><img class="img-responsive" src="<?php echo @constant('root_img');?>
need-a-quote.jpg"></a>
			</div>
		</div>

		



	</div>

</section>

<!--End Content--><?php }
}
