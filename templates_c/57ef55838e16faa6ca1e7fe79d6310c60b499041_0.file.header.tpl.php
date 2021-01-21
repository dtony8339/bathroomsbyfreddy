<?php
/* Smarty version 3.1.31, created on 2020-05-17 21:29:08
  from "/home/ukbathroomsbyfr/public_html/templates/common/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec1aca475e803_29122210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ef55838e16faa6ca1e7fe79d6310c60b499041' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/common/header.tpl',
      1 => 1565865162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1aca475e803_29122210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-header">
    <div class="top-nav">
        <div>
            <div class="col-md-3">
                <div  class="top-nav-bg-logo">
                    Bathrooms
                </div>
                <a href="<?php echo @constant('siteurl');?>
"><img src="<?php echo @constant('root_img');?>
new-bathrooms-by-freedy-logo.png" alt="bathrooms" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
                <div class="top-nav-bg">
                    <div class="button">
                        CALL US NOW! 07451 - 279908 <span class="seperator">|</span> <a href="<?php echo @constant('siteurl');?>
get-quote/"> BOOK AN APPOINTMENT</a> <span class="seperator">|</span> 
                        <span class="networks">
                            <a href="#" data-toggle="dropdown">FREDDY NETWORK</a>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sites_menuurl']->value, 'rowurl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rowurl']->value) {
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['rowurl']->value['name'];?>
" target="_blank"><img src="https://admin.byfreddy.io/photo/avatar/<?php echo $_smarty_tpl->tpl_vars['rowurl']->value['service_logo'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['rowurl']->value['short_name'];?>
</p></a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        </span>
                    </div>
                </div>
                <nav class="navbar navbar-default">
                    <?php if ($_SESSION['temp_email'] != '') {?>
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
                                                    <input id="username" type="email" class="form-control" name="username_update" placeholder="Your Email" value="<?php echo $_SESSION['temp_email'];?>
" disabled>
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
                    <?php }?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo @constant('siteurl');?>
">home</a></li>
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
                            <?php if (!empty($_smarty_tpl->tpl_vars['our_work_menu_check']->value)) {?>
                                <li><a href="/our-work">Our Work</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['our_reviws_menu_check']->value > 0) {?>
                                <li><a href="<?php echo @constant('siteurl');?>
reviews/">reviews</a></li>
                            <?php }?>
                            <li><a href="/news">news</a></li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['team_menu_check']->value)) {?>
                                <li><a href="/the-team">The Team</a></li>
                            <?php }?>
                            <li><a href="/price-guide/">Price Guide</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact-us">contact us</a></li>
                            <?php if ($_SESSION['first_name'] == '') {?>
                                <li><a  data-toggle="modal" data-target="#sign_in" class="sign_link">Sign in</a></li>
                            <?php } else { ?>
                                <?php if ($_SESSION['email_test'] == '') {?>
                                    <li><a href="<?php echo @constant('siteurl');?>
profile/">Profile</a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo @constant('siteurl');?>
profile/?email=<?php echo $_SESSION['email_test'];?>
">Profile</a></li>
                                <?php }?>
                                <?php if ($_SESSION['social'] == 'google') {?>
                                    <li><a href="#" onclick="signOut()" >Sign Out</a></li>
                                <?php } else { ?>
                                    <li><a href="#" onclick="signoutuser()" >Sign Out</a></li>
                                <?php }?>
                            <?php }?>
                            <li><a href="<?php echo @constant('siteurl');?>
get-quote/" class="quote">GET QUOTE</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="nav-mob-buttons">
                        <div  class="button">
                            <?php if ($_SESSION['first_name'] == '') {?>
                                <a  data-toggle="modal" data-target="#sign_in" class="sign_link">Sign in</a>
                            <?php } else { ?>
                            <?php if ($_SESSION['email_test'] == '') {?>
                                <a href="<?php echo @constant('siteurl');?>
profile/">Profile</a>
                            <?php } else { ?>
                            <a href="<?php echo @constant('siteurl');?>
profile/?email=<?php echo $_SESSION['email_test'];?>
">Profile</a>
                            <?php }?>
                            <?php if ($_SESSION['social'] == 'google') {?>
                                <a href="#" onclick="signOut()" >Sign Out</a>
                            <?php } else { ?>
                                <a href="#" onclick="signoutuser()" >Sign Out</a>
                            <?php }?>
                            <?php }?> <a href="<?php echo @constant('siteurl');?>
get-quote/" class="quote">GET QUOTE</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="top-nav-mob">
        <div class="top-nav-bg">
            <div class="col-md-12">
                    <i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:02380989130">02380 - 989130</a> <span class="seperator">|</span> <a href="<?php echo @constant('siteurl');?>
get-quote/"><i class="fa fa-book" aria-hidden="true"></i> BOOK AN APPOINTMENT</a> 
                    </div>
                </div>
                <nav class="navbar navbar-default">
                    <?php if ($_SESSION['temp_email'] != '') {?>
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
                                                    <input id="username" type="email" class="form-control" name="username_update" placeholder="Your Email" value="<?php echo $_SESSION['temp_email'];?>
" disabled>
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
                    <?php }?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mob" aria-expanded="false" aria-controls="navbar-mob">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo @constant('siteurl');?>
"><img src="<?php echo @constant('root_img');?>
bathrooms-by-freedy-logo.png" alt="bathrooms" class="navbar-brand"></a>
                    </div>

                <div id="navbar-mob" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo @constant('siteurl');?>
">home</a></li>
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
                        <li><a href="<?php echo @constant('siteurl');?>
reviews/">reviews</a></li>
                        <li><a href="/news">news</a></li>
                        <li><a href="/the-team">The Team</a></li>
                        <li><a href="/price-guide/">Price Guide</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/contact-us">contact us</a></li>
                        <?php if ($_SESSION['first_name'] == '') {?>
                            <li><a  data-toggle="modal" data-target="#sign_in" class="sign_link">Sign in</a></li>
                        <?php } else { ?>
                            <?php if ($_SESSION['email_test'] == '') {?>
                                <li><a href="<?php echo @constant('siteurl');?>
profile/">Profile</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo @constant('siteurl');?>
profile/?email=<?php echo $_SESSION['email_test'];?>
">Profile</a></li>
                            <?php }?>
                            <?php if ($_SESSION['social'] == 'google') {?>
                                <li><a href="#" onclick="signOut()" >Sign Out</a></li>
                            <?php } else { ?>
                                <li><a href="#" onclick="signoutuser()" >Sign Out</a></li>
                            <?php }?>
                        <?php }?>
                        <li><a href="<?php echo @constant('siteurl');?>
get-quote/" class="quote">GET QUOTE</a></li>
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
</div><?php }
}
