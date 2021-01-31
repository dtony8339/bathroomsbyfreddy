
<style>



</style>

<div class="main-header">
    <div class="top-nav">
	<div class="row">
			
			<div class="top-head">
				<div class="col-md-3">
				<div class="imghome">
				<a href="{$smarty.const.siteurl}"><img src="{$smarty.const.root_img}new-bathrooms-by-freedy-logo.png" alt="bathrooms" class="img-responsive"></a>
				</div>
				</div>

				<div class="col-md-3">
					<div class="call_us">
						<div class="row">
							<div class="col-xl-3">
								<img src="{$smarty.const.root_img}call_us.png" alt="call_us" class="img-responsive phone">
							</div>
							<div class="col-xl-2">
								<span class="seperator_img"><img src="{$smarty.const.root_img}separator.png" alt=""></span>
							</div>
							<div class="col-xl-7">
								<div class="txt-top">
									<span class="nmbr">07451 - 279908 </span><br><span class="url_home"><a href="{$smarty.const.siteurl}">www.bathroomsbyfreddy.co.uk</a></span>
								</div>
							</div>
						</div>
					</div>
				
				</div>	
				<div class="col-md-3">
					<div class="book_us">
						<img src="{$smarty.const.root_img}book_am_appointment.png" alt="book_us" class="img-responsive book">
						<span class="seperator_img"><img src="{$smarty.const.root_img}separator.png" alt=""></span>
						<div class="txt-top">
							<span class="appointment"><a href="{$smarty.const.siteurl}get-quote/"> Book an Appointment</a> </span>
						</div>
					</div>
				</div>
				<div class="col-md-3">

					<div class="fred_networks">
						<img src="{$smarty.const.root_img}network.png" alt="network" class="img-responsive network">
						<span class="seperator_img"><img src="{$smarty.const.root_img}separator.png" alt=""></span>
						<div class="txt-top">
						 <span class="networks">
						 <a href="#" class="frednet" onclick="myNetwork()">Freddy Network</a>
                            <!--
							<a href="#" data-toggle="dropdown" class="frednet" >Freddy Network</a>
							
                            <ul class="dropdown-menu">
                                {foreach from=$sites_menuurl item=rowurl}
                                <li>
                                    <a href="{$rowurl['name']}" target="_blank"><img src="https://admin.byfreddy.io/photo/avatar/{$rowurl['service_logo']}"><p>{$rowurl['short_name']}</p></a>
                                </li>
                                {/foreach}
                            </ul>
							-->
                        </span>
						</div>
					</div>

				</div>
			</div><!-- top-head" -->
		</div>
		</div>
		

<div class="network_frednet" id="network_frednet">
<div class="netlist">
	{foreach from=$sites_menuurl item=rowurl}
	<div>
	<a href="{$rowurl['name']}" target="_blank"><img src="https://admin.byfreddy.io/photo/avatar/{$rowurl['service_logo']}"><p>{$rowurl['short_name']}</p></a>
	</div>
	{/foreach}
</div>
</div>
			
<div class="navi">
<div class="mid-head">
 <nav class="navbar navbar-default">
                    {if $smarty.session.temp_email neq ''}
                        <div class="modal fade" id="pass_check">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Temporary SignIn</h4>
                                    </div>
                                <div class="modal-body">
                                    <div>
                                        <div class="text-center"><h4 class="text-danger">Your Account isn't Secured By Password</h4></div>
                                            <form id="cpa-form2" action="#">
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                                    <input id="username" type="email" class="form-control" name="username_update" placeholder="Your Email" value="{$smarty.session.temp_email}" disabled>
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password" type="password" class="form-control" name="password_update" placeholder="Password" required="">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="">
                                                </div>
                                                <div class="error-result">
                                                </div>
                                                <input class="login_btn" type="submit" name="Login" value="Secure"><button type="button" class="login_btn" data-dismiss="modal">Close</button>
                                            </form>
                                            <div id="alertbox2" class="alert alert-danger" style="margin-top:20px;display:none;">
                                                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                                                <i class="fa fa-ban-circle"></i><span id="alertboxmsg2">Your Alert Here</span>
                                            </div>
                                            <div style="float: right;display:none;" class="loader2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{$smarty.const.siteurl}" style='font-size:14px;'>home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style='font-size:14px;'> Products
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/bathroom-carpentry/">Bathroom Carpentry</a></li>
                                    <li><a href="/bathroom-electricals/">Bathroom Electricals</a></li>
                                    <li><a href="/bathroom-plumbing/">Bathroom Plumbing</a></li>
                                    <li><a href="/bathroom-masonry-tiling-and-floors/">Masonry, Tiling and Floors</a></li>
                                    <li><a href="/showers-glass-and-accessories/">Showers, Glass and Accessories</a></li>
                                    <li><a href="/vanity-units-basins-and-baths/">Vanity Units, Basins and Baths</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style='font-size:14px;'> Services
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/bathroom-renovations-and-extensions/">Renovations and Extensions</a></li>
                                    <li><a href="/bathroom-repairs-and-maintenance/">Repairs and Maintenance</a></li>
                                    <li><a href="/new-bathrooms-and-ensuites/">New Bathrooms and Ensuites</a></li>
                                </ul>
                            </li>
                            {if !empty($our_work_menu_check)}
                                <li><a href="/our-work" style='font-size:14px;'>Our Work</a></li>
                            {/if}
                            {if $our_reviws_menu_check >0 }
                                <li><a href="{$smarty.const.siteurl}reviews/" style='font-size:14px;'>reviews</a></li>
                            {/if}
                            <li><a href="/news" style='font-size:14px;'>news</a></li>
                            {if !empty($team_menu_check)}
                                <li><a href="/the-team" style='font-size:14px;'>The Team</a></li>
                            {/if}
                            <li><a href="/price-guide/" style='font-size:14px;'>Price Guide</a></li>
                            <li><a href="/about-us" style='font-size:14px;'>About Us</a></li>
                            <li><a href="/contact-us" style='font-size:14px;'>contact us</a></li>
                            {if $smarty.session.first_name eq ''}
                                <li><a  data-toggle="modal" data-target="#sign_in" class="sign_link" style='font-size:14px;'>Sign in</a></li>
                            {else}
                                {if $smarty.session.email_test eq ''}
                                    <li><a href="{$smarty.const.siteurl}profile/" style='font-size:14px;'>Profile</a></li>
                                {else}
                                    <li><a href="{$smarty.const.siteurl}profile/?email={$smarty.session.email_test}" style='font-size:14px;'>Profile</a></li>
                                {/if}
                                {if $smarty.session.social eq 'google'}
                                    <li><a href="#" onclick="signOut()" style='font-size:14px;'>Sign Out</a></li>
                                {else}
                                    <li><a href="#" onclick="signoutuser()" style='font-size:14px;'>Sign Out</a></li>
                                {/if}
                            {/if}
                           
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="nav-mob-buttons">
                        <div  class="button">
                            {if $smarty.session.first_name eq ''}
                                <a  data-toggle="modal" data-target="#sign_in" class="sign_link">Sign in</a>
                            {else}
                            {if $smarty.session.email_test eq ''}
                                <a href="{$smarty.const.siteurl}profile/">Profile</a>
                            {else}
                            <a href="{$smarty.const.siteurl}profile/?email={$smarty.session.email_test}">Profile</a>
                            {/if}
                            {if $smarty.session.social eq 'google'}
                                <a href="#" onclick="signOut()" >Sign Out</a>
                            {else}
                                <a href="#" onclick="signoutuser()" >Sign Out</a>
                            {/if}
                            {/if} <a href="{$smarty.const.siteurl}get-quote/" class="quote">GET QUOTE</a>
                        </div>
                    </div>
                </nav>
</div><!--top-head -->		
</div><!--navi -->		
		
		
	
    <div class="top-nav-mob">
        <div class="top-nav-bg">
            <div class="col-md-12">
                    <i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:02380989130">02380 - 989130</a> <span class="seperator">|</span> <a href="{$smarty.const.siteurl}get-quote/"><i class="fa fa-book" aria-hidden="true"></i> BOOK AN APPOINTMENT</a> 
                    </div>
                </div>
                <nav class="navbar navbar-default">
                    {if $smarty.session.temp_email neq ''}
                        <div class="modal fade" id="pass_check">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Temporary SignIn</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <div class="text-center">
                                                <h4 class="text-danger">Your Account isn't Secured By Password</h4>
                                            </div>
                                            <form id="cpa-form2" action="#">
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                                    <input id="username" type="email" class="form-control" name="username_update" placeholder="Your Email" value="{$smarty.session.temp_email}" disabled>
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password" type="password" class="form-control" name="password_update" placeholder="Password" required="">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="">
                                                </div>
                                                <div class="error-result">
                                                </div>
                                                <input class="login_btn" type="submit" name="Login" value="Secure"><button type="button" class="login_btn" data-dismiss="modal">Close</button>
                                            </form>
                                            <div id="alertbox2" class="alert alert-danger" style="margin-top:20px;display:none;">
                                                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                                                <i class="fa fa-ban-circle"></i><span id="alertboxmsg2">Your Alert Here</span>
                                            </div>
                                            <div style="float: right;display:none;" class="loader2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mob" aria-expanded="false" aria-controls="navbar-mob">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{$smarty.const.siteurl}"><img src="{$smarty.const.root_img}bathrooms-by-freedy-logo.png" alt="bathrooms" class="navbar-brand"></a>
                    </div>

                <div id="navbar-mob" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{$smarty.const.siteurl}">home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Products
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/bathroom-carpentry/">Bathroom Carpentry</a></li>
                                <li><a href="/bathroom-electricals/">Bathroom Electricals</a></li>
                                <li><a href="/bathroom-plumbing/">Bathroom Plumbing</a></li>
                                <li><a href="/bathroom-masonry-tiling-and-floors/">Masonry, Tiling and Floors</a></li>
                                <li><a href="/showers-glass-and-accessories/">Showers, Glass and Accessories</a></li>
                                <li><a href="/vanity-units-basins-and-baths/">Vanity Units, Basins and Baths</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Services
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/bathroom-renovations-and-extensions/">Renovations and Extensions</a></li>
                                <li><a href="/bathroom-repairs-and-maintenance/">Repairs and Maintenance</a></li>
                                <li><a href="/new-bathrooms-and-ensuites/">New Bathrooms and Ensuites</a></li>
                            </ul>
                        </li>
                        <li><a href="/our-work">Our Work</a></li>
                        <li><a href="{$smarty.const.siteurl}reviews/">reviews</a></li>
                        <li><a href="/news">news</a></li>
                        <li><a href="/the-team">The Team</a></li>
                        <li><a href="/price-guide/">Price Guide</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/contact-us">contact us</a></li>
                        {if $smarty.session.first_name eq ''}
                            <li><a  data-toggle="modal" data-target="#sign_in" class="sign_link">Sign in</a></li>
                        {else}
                            {if $smarty.session.email_test eq ''}
                                <li><a href="{$smarty.const.siteurl}profile/">Profile</a></li>
                            {else}
                                <li><a href="{$smarty.const.siteurl}profile/?email={$smarty.session.email_test}">Profile</a></li>
                            {/if}
                            {if $smarty.session.social eq 'google'}
                                <li><a href="#" onclick="signOut()" >Sign Out</a></li>
                            {else}
                                <li><a href="#" onclick="signoutuser()" >Sign Out</a></li>
                            {/if}
                        {/if}
                        <li><a href="{$smarty.const.siteurl}get-quote/" class="quote">GET QUOTE</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </nav>
        </div>        
    </div>
</div>
<div class="modal fade" id="sign_in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
                        </li>
                        <!-- 	<li role="presentation">
							<a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a>
						</li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <div class="tabs-form-wrapper">
                                <form id="cpa-form" action="#">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <input id="username" type="email" class="form-control" name="username" placeholder="Your Email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
                                    </div>
                                    <input class="login_btn" type="submit" name="Login" value="Login">
                                </form>
                                <input type="hidden" name="client_email" id="client_email">
                                <input type="hidden" name="client_pass" id="client_pass">
                                <input type="hidden" name="client_name" id="client_name">
                                <input type="hidden" name="socialmedia_name" id="socialmedia_name">
                                <hr>
                                <div id="status">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <br> Register Using
                            <br><br>
                            <!-- <div data-scope="public_profile,email" onlogin="checkLoginStateRegister();" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                             -->
                            <!--  <fb:login-button scope="public_profile,email" onlogin="checkLoginStateRegister();">  Facebook
                            </fb:login-button> -->
                            <br><br>
                            <!-- Or -->
                            <br><br>
                            <br>
                        </div>
                    </div>
                    <div style="float: right;display:none;" class="loader"></div>
                    <div id="alertbox" class="alert alert-danger" style="margin-top:20px;display:none;">
                        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                        <i class="fa fa-ban-circle"></i><span id="alertboxmsg">Your Alert Here</span>
                    </div>
                    <div id="successbox" class="alert alert-success" style="margin-top:20px;display:none;">
                        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                        <i class="fa fa-ban-circle"></i><span id="successboxmsg">Your Alert Here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>