<?php
/* Smarty version 3.1.31, created on 2020-05-17 12:39:11
  from "/home/ukbathroomsbyfr/public_html/templates/common/footer_scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec1306f5eb273_20914872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff37271bed8a11ab26c933c074356d59d206e4c4' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/common/footer_scripts.tpl',
      1 => 1557222496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1306f5eb273_20914872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12608235115ec1306f5bb797_15828798';
?>
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
                        <!--  <li role="presentation">
              <a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a>
            </li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <div class="tabs-form-wrapper">
                                <form id="cpa-form" action="#">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="username" type="email" class="form-control" name="username" placeholder="Your Email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
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
                               <!--  <ul class="social-login-icon list-inline">
                                    <li style="    width: 100%;    margin-bottom: 35px;">Login With Social media</li>
                                    <li style="width: 29%;">
                                        <fb:login-button style="display:none;" size="large" scope="public_profile,email" id="fbclick" onlogin="checkLoginState();"> Facebook
                                        </fb:login-button>
                                        <div style="height:36px;width:120px;" class="abcRioButton abcRioButtonLightBlue" onclick="signinfacebook()">
                                            <div class="abcRioButtonIcon" style="padding:8px">
                                                <div style="width:18px;height:18px;" class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18"><img src="<?php echo @constant('root_img');?>
facebook.png"></div>
                                            </div>

                                            <span style="font-size:13px;line-height:34px;" class="abcRioButtonContents">Facebook</span> </div>
                                    </li>
                                    <li>   
                            <?php echo $_SESSION['first_name'];?>

                             <?php if ($_SESSION['first_name'] == '') {?>
                                        <div style="display:nonex;" class="g-signin2" data-onsuccess="onSignIn">Login with Google</div>
                                        <?php } else { ?>
                                        <div style="display:none;" class="g-signin2" onclick="onSignIn">Login with Google</div>
                                    <?php }?>
                                    </li>
                                </ul> -->
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
<?php if ($_SESSION['temp_email'] != '') {?>
    <!-- Modal -->
<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
<div class="modal fade" id="pass_check">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Temporary SignIn</h4>
      </div>
      <div class="modal-body">
         <div>
              <div class="text-center"><h4 class="text-danger">Your Account isn't Secured By Password</h4> </div>

              <form id="cpa-form2" action="#">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="username" type="email" class="form-control" name="username_update" placeholder="Your Email" value="<?php echo $_SESSION['temp_email'];?>
" disabled>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                      <input id="password" type="password" class="form-control" name="password_update" placeholder="Password" required="">
                  </div>
                  <input class="login_btn" type="submit" name="Login" value="Login">
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
   
    <?php }
echo '<script'; ?>
>
$('#video01').on('show.bs.modal', function (e) {
  $('#video01 .modal-body').html('<button type="button" class="close" data-dismiss="modal">&times;</button><iframe width="100%" height="400px" src="https://www.youtube.com/embed/cKVc4II5Z8M?autoplay=true" frameborder="0" allowfullscreen></iframe>');
});
//on close remove
$('#video01').on('hidden.bs.modal', function () {
   $('#video01 .modal-body').empty();
});

$('#code').select2();   
$('#pcode').select2();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function assignsubrub(id) {
    document.getElementById("subrub").value = id;
  }
   function myFunction() {
      var x = document.getElementById('phone-onclick');
      var y = document.getElementById('show');
      if (x.style.display === 'none') {
          x.style.display = 'block';
          y.style.display = 'none';
      } else {
          x.style.display = 'block';
      }
  }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
if (matchMedia) {
  const mq = window.matchMedia("(min-width: 991px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (mq.matches) {
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
  } else {
    // window width is less than 991px
  }

}

<?php echo '</script'; ?>
>
<style>
@media screen and (min-width: 768px) {
  .dropdown:hover>.dropdown-menu {
    display: block;
  }
}
</style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-130793969-7"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-130793969-7');
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
