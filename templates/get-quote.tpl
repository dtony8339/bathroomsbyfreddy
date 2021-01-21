<style>

{literal}
body{
	background:#f8f8f8
}
.navbar.navbar-default {
    margin: 0;
}
#quotepage input[type=number], #quotepage input[type=text], #quotepage input[type=email], #quotepage select, #quotepage textarea {

    border: 1px solid #9999 !important;

    margin: 5px 0 !important;

    border-radius: 0 !important;

    padding: 15px !important;

    height: auto !important;

    font-size: 16px !important;

    letter-spacing: 2px !important;
	-webkit-appearance: none;

}
select::-ms-expand { display: block; }
.content {

    background: #f8f8f8;
    margin: 0;
    padding: 0 0 100px;

}
{/literal}

</style>


<script src="{$smarty.const.siteurl}resources/js/postcodes.min.js"></script>
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

                        	<img src="{$smarty.const.root_img}/emailphone.webp" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                        	<img data-src="{$smarty.const.root_img}/professionalfreddy.webp" class="img-responsive lazyload">

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

                        	<img src="{$smarty.const.root_img}/emailphone.webp" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                        	<img data-src="{$smarty.const.root_img}/professionalfreddy.webp" class="img-responsive lazyload">

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

            	<div class="addphone"><a href="javascript:void(0)" onClick="myFunction()" id="#show">Add Home Number</a></div>

                <div id="phone-onclick" class="form-group" style="display: none;">

                  <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">

                </div>

                <div class="clearfix"></div>

               <!--  <textarea class="form-control" rows="5" id="address" autocomplete="off" onFocus="geolocate()" name="address" placeholder="Address"></textarea> -->
               {literal}
                      <style>
                        #idpc_dropdown {
                            /* display: inline-block;*/
                            width: 100% !important; 
                            margin-top: 10px;
                        }
                        #idpc_input {
                            width: 75% !important;
                            display: inline-block !important;
                        }
                        #idpc_button {
                            background: #f79221;
							border: none;
							padding: 16px 15px;
							font-size: 16px;
							letter-spacing: 2px;
							text-transform: uppercase;
							color: white;
							margin: 0 10px;
                            /*display: inline-block;*/
                        }
						#ind_address_section, #prop_address_section, #busi_address_section {
							background: rgba(0,0,0,.08);
							padding: 10px 0 20px;
							margin: 20px auto;
						}
						.checkbox-address {
							background: rgba(0,0,0,.08);
							padding: 10px 10px 5px;
							margin: 15px 0;
						}
						#ind_address_section .addphone, #prop_address_section .addphone, #busi_address_section .addphone {
							text-transform: uppercase;
						}
                    </style>
                    {/literal}
                    <div class="checkbox-address">
                        <input name="chk_show_hide" id="chk_show_hide" type="checkbox" value="1" onclick="show_hide_address();">
                        <label class="checkbox-inlinex">
                            Enquiry only. I dont what to give my address!
                        </label>
					</div>
                    <div id="address_api_section">
                        <div id="lookup_field"></div>
                        <div class="row" id="ind_address_section" style="display: none;">
                        	<div class="col-md-12">
                            	<div class="addphone"><a href="javascript:void(0)">Address</a></div>
                            </div>
                            <div class="col-md-4">
                             <input  id="first_line" name="first_line" type="text" value="" class="form-control" placeholder="Address Line One"> 
                             </div>
                             <div class="col-md-4">
                                <input  id="second_line" name="second_line" type="text" value=""  class="form-control" placeholder="Address Line Two">
                             </div>
                             <div class="col-md-4">
                                <input  id="third_line" name="third_line" type="text" value="" class="form-control" placeholder="Address Line Three">
                             </div>
                             <div class="col-md-4">
                                <input  id="post_town" name="post_town" type="text" value="" class="form-control" placeholder="Post Town">
                             </div>
                             <div class="col-md-4">
                                <input  id="postcode" name="postcode" class="form-control" type="text" value="" placeholder="Postcode">
                             </div>
                   		</div>

     <!--  <textarea class="form-control" rows="5" id="address" autocomplete="off" onFocus="geolocate()" name="address" placeholder="Address"></textarea> -->
 </div>

            </div>

        	<div class="col-md-12">

		    	<h4>what are you interested in?</h4>

                <div class="row">

                {if !empty($products)}

                    {foreach from=$products item=row}

                        <div class="col-sm-4">

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
                <div class="checkbox-address"> 
                    <label class="checkbox-inlinex">Please tell us little about the work that is needed.</label></div>
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

        <!-- <div class="col-md-12">

		  <textarea class="form-control" rows="5" id="caddress" name="caddress" placeholder="Business Address"></textarea>
          </div> -->
          <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="checkbox-address">
            <input name="chk_show_hide2" id="chk_show_hide2" type="checkbox" value="1" onclick="show_hide_address2();">
            <label class="checkbox-inlinex">
                Enquiry only. I dont what to give my business address!
            </label>
            </div>
    <div  id="address_api_section2">
        <div id="lookup_field2"></div>
        <div class="row" id="busi_address_section" style="display: none;">
        	<div class="col-md-12">
            	<div class="addphone"><a href="javascript:void(0)">Address</a></div>
            </div>
            <div class="col-md-4">
             <input  id="first_line2" name="first_line2" type="text" value="" class="form-control" placeholder="Address Line One"> 
         	</div>
            <div class="col-md-4">
            	<input  id="second_line2" name="second_line2" type="text" value=""  class="form-control" placeholder="Address Line Two">
           	</div>
            <div class="col-md-4">
            	<input  id="third_line2" name="third_line2" type="text" value="" class="form-control" placeholder="Address Line Three">
            </div>
            <div class="col-md-4">
            	<input  id="post_town2" name="post_town2" type="text" value="" class="form-control" placeholder="Post Town">
            </div>
            <div class="col-md-4">
            	<input  id="postcode2" name="postcode2" type="text" value="" class="form-control" placeholder="Postcode">
           	</div>
       </div>
	</div>
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

      	<!-- <div class="col-md-12">

		  <textarea class="form-control" rows="5" id="paddress" name="paddress" placeholder="Property Address"></textarea>
          </div> -->
          <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="checkbox-address">
        <input name="chk_show_hide3" id="chk_show_hide3" type="checkbox" value="1" onclick="show_hide_address3();">
        <label class="checkbox-inlinex">
            Enquiry only. I dont what to give my property address!
        </label>
        </div>
    <div id="address_api_section3">
        <div id="lookup_field3"></div>
        <div class="row" id="prop_address_section" style="display: none;">
        	<div class="col-md-12">
            	<div class="addphone"><a href="javascript:void(0)">Address</a></div>
            </div>
            <div class="col-md-4">
            	<input  id="first_line3" name="first_line3" type="text" value="" class="form-control" placeholder="Address Line One"> 
         	</div>
            <div class="col-md-4">
            	<input  id="second_line3" name="second_line3" type="text" value=""  class="form-control" placeholder="Address Line Two">
            </div>
            <div class="col-md-4">
            	<input  id="third_line3" name="third_line3" type="text" value="" class="form-control" placeholder="Address Line Three">
            </div>
            <div class="col-md-4">
            	<input  id="post_town3" name="post_town3" type="text" value="" class="form-control" placeholder="Post Town">
            </div>
            <div class="col-md-4">
            	<input  id="postcode3" name="postcode3" type="text" value="" class="form-control" placeholder="Postcode">
            </div>
       </div>
       </div>
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

			    



			    	

			    	 <div class="col-sm-4">

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

                <div class="checkbox-address"> <label class="checkbox-inlinex">Please tell us little about the work that is needed.</label></div>

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

label.checkbox-inlinex {
    letter-spacing: 1px;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
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
.checkbox-inlinex input {
    margin-right: 10px;
}
</style>

{literal}
<script>
 function  show_hide_address(){
    if($('#chk_show_hide').is(':checked')){
        $("#address_api_section").hide();
        $('#first_line').val("");
        $('#second_line').val("");
        $('#third_line').val("");
        $('#post_town').val("");
        $('#postcode').val("");
    }else{
        $("#address_api_section").show();
    }
}

function  show_hide_address2(){
    if($('#chk_show_hide2').is(':checked')){
        $("#address_api_section2").hide();
        $('#first_line2').val("");
        $('#second_line2').val("");
        $('#third_line2').val("");
        $('#post_town2').val("");
        $('#postcode2').val("");
    }else{
        $("#address_api_section2").show();
    }
}


function  show_hide_address3(){
    if($('#chk_show_hide3').is(':checked')){
        $("#address_api_section3").hide();
        $('#first_line3').val("");
        $('#second_line3').val("");
        $('#third_line3').val("");
        $('#post_town3').val("");
        $('#postcode3').val("");
    }else{
        $("#address_api_section3").show();
    }
}












</script>
{/literal}



{literal}
<script> 

    // $("#lookup_field").css("background-color", "yellow");
    $('#lookup_field').setupPostcodeLookup({
      api_key: 'ak_j3coitzhxQ1ggewYs0KLne4qsPANI',
      output_fields: {
        line_1: '#first_line',  
        line_2: '#second_line',         
        line_3: '#third_line',
        post_town: '#post_town',
        postcode: '#postcode'
    },
    onSearchCompleted:function(){
        $("#lookup_field select").change(function () {
            $('#ind_address_section').show();
        });
    }
});


    $('#lookup_field2').setupPostcodeLookup({
      api_key: 'ak_j3coitzhxQ1ggewYs0KLne4qsPANI',
      output_fields: {
        line_1: '#first_line2',  
        line_2: '#second_line2',         
        line_3: '#third_line2',
        post_town: '#post_town2',
        postcode: '#postcode2'
    },
    onSearchCompleted:function(){ 
        $("#lookup_field2 select").change(function () {
            $('#busi_address_section').show();
        });
    }
});

    $('#lookup_field3').setupPostcodeLookup({
      api_key: 'ak_j3coitzhxQ1ggewYs0KLne4qsPANI',
      output_fields: {
        line_1: '#first_line3',  
        line_2: '#second_line3',         
        line_3: '#third_line3',
        post_town: '#post_town3',
        postcode: '#postcode3'
    },
    onSearchCompleted:function(){ 
        $("#lookup_field3 select").change(function () {
            $('#prop_address_section').show();
        });
    }
});

</script>
{/literal}

<!--End Content-->