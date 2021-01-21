<style>

{literal}
body{
	background:#f8f8f8
}
.navbar.navbar-default {
    margin: 0;
}
#quotepage input[type=number], #quotepage input[type=text], #quotepage input[type=email], #quotepage select, #quotepage textarea {

    border: 1px solid #9999;

    margin: 5px 0;

    border-radius: 0;

    padding: 15px;

    height: auto;

    font-size: 16px;

    letter-spacing: 2px;

}
.content {

    background: #f8f8f8;
    margin: 0;
    padding: 0 0 100px;

}
{/literal}

</style>



<div class="quote-header" id="appointment1">
            <div class="container">
                <div class="col-md-12">
                    <h2>Making a Free Appointment is Easy</h2>
                    <p>(Obligation-Free)</p>
                </div>
                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <div class="quote-step">
                        <div class="number"><span>Step</span> 01</div>
                        <p>Fill In Our Online Form</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <div class="quote-step">
                        <div class="number"><span>Step</span> 02</div>
                        <p>You Will Receive <strong>SMS</strong> And <strong>EMAIL</strong> With A Link</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <div class="quote-step">
                        <div class="number"><span>Step</span> 03</div>
                        <p>Select The <strong>Time</strong> And <strong>Day</strong></p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <div class="quote-step">
                        <div class="number"><span>Step</span> 04</div>
                        <p>Your All Done - <strong>Appointment Completed</strong></p>
                    </div>
                </div>
            </div>
</div>

<!--Start Content-->

<div class="container">

<div class="row">

        <div id="succ" class="alert alert-success" style="display:none;">

        <div class="row">

            	<div class="col-md-8">

                	<h1><span>Thanks!</span> for contacting us.</h1>

                    <div class="row">

                    	<div class="col-md-8">

                        	<h3>We will send and sms/email within 2 mins to book your appointment with us. We will contact you via phone within 6 hours.</h3>

                        </div>

                        <div class="col-md-4">

                        	<img src="{$smarty.const.root_img}/emailphone.png" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                        	<img src="{$smarty.const.root_img}/professionalfreddy.png" class="img-responsive">

                </div>

            </div>

        </div>

        <div id="loadingmsg" class="alert alert-success" style="display:none;">

        	<div class="row">

            	<div class="col-md-8">

                	<h1>We are sending your enquiry to our team, <span>please dont close this screen.</span></h1>

                    <div class="row">

                    	<div class="col-md-8">

                        	<h3>You should recieve a text msg with a link to our calander where by you can make your appoinment.</h3>

                        </div>

                        <div class="col-md-4">

                        	<img src="{$smarty.const.root_img}/emailphone.png" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                        	<img src="{$smarty.const.root_img}/professionalfreddy.png" class="img-responsive">

                </div>

            </div>

           

        </div>

            <div style="float: right;display:none; margin-right: 50%;" class="loader"></div>

            <br style"clear:both;">

      </div>

   </div>










<section class="content">

	<div class="container">

    <div class="row">

        

        

        <div class="col-md-12" id="appointment3"> 

        	<ul class="quote-tab">

              <li class="active"><a data-toggle="tab" href="#home">Individual</a></li>

              <li><a data-toggle="tab" href="#menu1">Business</a></li>

            </ul>

        </div>

        <div class="col-md-12">

        <div class="tab-content" id="quotepage">



  <div id="home" class="tab-pane fade in active">

  	<form action="#" method="POST" id="pipefrom" class="Individual-form">


    	<div class="row">

        	<div class="col-md-6">

            	 <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required >

            </div>

        	<div class="col-md-6">

            	 <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required >

            </div>

        	<div class="col-md-4">

            	 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >

            </div>

        	<div class="col-md-4">

            	 {$printed = array()}

				<select type="text" style="width:100%" id="code" name="code" class="form-control form-lg">

					<option disabled>Please select Country:</option>

					{foreach from=$mobile_code item=code}

						{if !isset($printed[$code->country])}	

                            <!--  $client_country_name  -->

                            <option  value="+{$code->country_code}" {if $code->country_code == '+44'} selected="selected" {/if} >{$code->country} (+{$code->country_code})</option>

							

						{/if}

					{/foreach}

				</select>	

            </div>

        	<div class="col-md-4">

            	<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">

            </div>

            

        	<div class="col-md-12">

            	<div class="addphone"><a href="#" onClick="myFunction()" id="#show">Add Home Number</a></div>

                <div id="phone-onclick" class="form-group" style="display: none;">

                  <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">

                </div>

                <div class="clearfix"></div>

                <textarea class="form-control" rows="5" id="address" autocomplete="off" onFocus="geolocate()" name="address" placeholder="Address"></textarea>

            </div>

        	<div class="col-md-12">

		    	<h4>what are you interested in?</h4>

                <div class="row">

                {if !empty($products)}

                    {foreach from=$products item=row}

                        <div class="col-sm-6">

                            <label class="checkbox-inlinex">

                                <input name="product[]" type="checkbox" value={$row['name']}>

                                {$row['name']}

                            </label>

                        </div>

                    {/foreach}

                {else}

                    0 results

                {/if}

            	</div>

            </div>

            <div>

            <div class="col-md-12">
                <div> 
                    <label>Please tell us little about the work that is needed.</label></div>
                        <textarea class="form-control" rows="5" name="inquery" tabindex="7"></textarea>
                </div>
            </div>

            <div class="col-md-12">

                <input type="hidden"  id="subrub" name="subrub" value="0">

                <input style="margin-top: 25px;" id="submitform" type="submit" class="btn btn-info" value="Submit">

            </div>

        </div>

      </form>

</div>

               



<div id="menu1" class="tab-pane fade">

    <form action="#" method="POST" id="pipefrom2" class="Business-form">

    	<div class="grey-title">BUSINESS</div>

            

      	

      	<div class="col-md-4">

        	<input type="text" class="form-control" id="cname" name="cname" placeholder="Company Name" required>

        </div>

      	<div class="col-md-4">

        	<input type="number" class="form-control" id="cphone" name="cphone" placeholder="Phone" required>

        </div>

      	<div class="col-md-4">

		  <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email" required>

        </div>

        <div class="col-md-12">

		  <textarea class="form-control" rows="5" id="caddress" name="caddress" placeholder="Business Address"></textarea>

		</div>



		<div class="clearfix"></div>

		<div class="grey-title">Contact Person</div>

      	<div class="col-md-4">

		  <input type="text" class="form-control" id="pname" name="pname" placeholder="First Name" required>

		 </div>

      	<div class="col-md-4">

		  <input type="text" class="form-control" id="plname" name="plname" placeholder="Last Name"required>

		</div>

      	<div class="col-md-4">

		  <input type="email" class="form-control" id="pemail" name="pemail" placeholder="Email" required>

		</div>

      	<div class="col-md-12">

		  <textarea class="form-control" rows="5" id="paddress" name="paddress" placeholder="Property Address"></textarea>

		</div>

      	<div class="col-md-6">

			{$printed = array()}

				<select type="text" style="width:100%" id="code" name="code" class="form-control form-lg">

					<option disabled>Please select Country:</option>

					{foreach from=$mobile_code item=code}

						{if !isset($printed[$code->country])}							

							<!--  $client_country_name  -->

                            <option  value="+{$code->country_code}" {if $code->country_code == '+44'} selected="selected" {/if} >{$code->country} (+{$code->country_code})</option>

								

						{/if}

					{/foreach}

				</select>					

		  <!--<input type="text" class="form-control" id="code" name="code" value="+61" >-->  

		</div>

      	<div class="col-md-6">

		  <input type="number" class="form-control" id="pmobile" name="pmobile" placeholder="Mobile">

		</div>

		<!-- <div class="form-group">

			<label for="usr">Phone:</label>

		  <input type="number" class="form-control" id="phone" name="phone" >



		</div> -->

		

      	<div class="col-md-12">

		    <h4>what are you interested in?</h4>

            {if !empty($products)}

				{foreach from=$products item=row}

			    



			    	

			    	<div class="checkbox">

						<label class="checkbox-inlinex">

						<input name="product[]" type="checkbox" value="{$row['name']}">{$row['name']}</label>

					</div>



			

			        

			    {/foreach}

			{else}

			    0 results

			{/if}

		</div>



        <div>

            <div class="col-md-12">

                <div> <label>Please tell us little about the work that is needed.</label></div>

                        <textarea class="form-control" rows="5" name="inquery" tabindex="7"></textarea>

                    </div>

                </div>

	    	<div style="clear:both;"></div>

		  	<input type="hidden"  id="psubrub" name="psubrub" value="0">

			<input style="margin-top: 25px;" id="submitform" type="submit" class="btn btn-info" value="Submit">

	</form>



  </div>



 </div>

        

        </div>

        

        

		

	</div>

		

    </div>

</section>

<style>

.top-banner.ourworks {

    background-size: contain !important;

    background: url({$smarty.const.root_img}fencing-banner.jpg);

    background-position: center;

    max-height: 400px !important;

    height: 100%;

    padding: 0;

}

@media(max-width:1199px){

.top-banner.ourworks {

     max-height: 300px !important;

}

}

@media(max-width:900px){

.top-banner.ourworks {

     max-height: 250px !important;

}

}

@media (max-width: 700px){

.top-banner.ourworks {

    max-height: 150px !important;

    margin-top: 100px;

}

}

.mt-5{

	margin-top:100px;

}

.select2-container--default .select2-selection--single .select2-selection__arrow {

    pointer-events: auto;

    height: 54px;

    background: #333;

    top: 0 !important;

}

#quotepage span.select2-selection.select2-selection--single,

.select2-container .select2-selection--single .select2-selection__rendered{

	pointer-events: none;

}

</style>







<!--End Content-->