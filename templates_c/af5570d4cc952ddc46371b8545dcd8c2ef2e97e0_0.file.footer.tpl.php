<?php
/* Smarty version 3.1.31, created on 2021-01-31 14:12:49
  from "C:\xampp\htdocs\bathroomsbyfreddy\templates\common\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6016acd1047676_74218440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5570d4cc952ddc46371b8545dcd8c2ef2e97e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bathroomsbyfreddy\\templates\\common\\footer.tpl',
      1 => 1612087971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6016acd1047676_74218440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer-widget">
	<div class="container">
    	<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
        	<h3>Homeowners</h3>
            <ul>
            	<li><a href="#">Post a job</li>
                <li><a href="#">How it works</li>
                <li><a href="#">Find tradesmen</li>
                <li><a href="#">Homeowner support</li>
                <li><a href="#">Competitions</li>
            </ul>
        </div>
    	<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
        	<h3>Advice Centre</h3>
            <ul>
            	<li><a href="#">Advice guides</a></li>
            	<li><a href="#">Hiring advice</a></li>
            	<li><a href="#">Pricing guides</a></li>
            	<li><a href="#">Trade jargon</a></li>
            	<li><a href="#">Ask a tradesman</a></li>
            </ul>
        </div>
    	<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
        	<h3>Tradesmen</h3>
            <ul>
            	<li><a href="#">Trade sign up</a></li>
            	<li><a href="#">How it works</a></li>
            	<li><a href="#">Completed jobs</a></li>
            	<li><a href="#">Recent feedback</a></li>
            	<li><a href="#">Tradesman support</a></li>
            </ul>
        </div>
    	<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
        	<h3>Company</h3>
            <ul>
            	<li><a href="#">Our mission</a></li>
            	<li><a href="#">Testimonials</a></li>
            	<li><a href="#">Careers</a></li>
            	<li><a href="#">Contact us</a></li>
            	<li><a href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</div>
<footer class="stackfooter">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      	&copy; 2019 freddyit.com    Terms and conditions   Privacy notice   Cookie policy<br>
REGISTERED IN ENGLAND NO. 11723808
      </div>
      <div class="col-sm-6 icons">
      	<a href="#" target="_blank"><img src="https://freddyit.com/resources/img/logo.png"></a> <a href="https://www.facebook.com/paintingbyfreddyuk/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </div>
    </div>
</footer>

<!--Jquery-->

  <!--Bootstrap JS-->

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
jquery.plugin.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
jquery.countdown.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
select2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
jquery.lazyloadxt.js"><?php echo '</script'; ?>
>



<!--Script for Scroll Fix-->

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
custom.js"><?php echo '</script'; ?>
>

<!-- Social Intents www.socialintents.com -->

    <!--<?php echo '<script'; ?>
 type='text/javascript'>

  

        localStorage.removeItem("si_convert-2c9fa7465c3c6e61015c43cd4c25058d");

        localStorage.removeItem("si_cvid-2c9fa7465c3c6e61015c43cd4c25058d");

        sessionStorage.removeItem("socialintents_vs_chat");

        sessionStorage.removeItem("si_settings_chat-2c9fa7465c3c6e61015c43cd4c25058d");

        (function() {function socialintents(){

                var siJsHost = (("https:" === document.location.protocol) ? "https://" : "http://");

                var s = document.createElement('script');s.type = 'text/javascript';s.async = true;s.src = siJsHost+'www.socialintents.com/api/chat/socialintentsp.js#2c9fa7465c3c6e61015c43cd4c25058d';

                var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);

        };

        if (window.attachEvent)window.attachEvent('onload', socialintents);else window.addEventListener('load', socialintents, false);

        })();

  

    <?php echo '</script'; ?>
>-->

<?php echo '<script'; ?>
>



	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-90766101-6', 'auto');

  ga('send', 'pageview');



<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

var root_url="<?php echo @constant('siteurl');?>
";



    $(document).ready(function() {









        $("#cpa-form2").submit(function(e) {

            e.preventDefault();





            $(".loader2").fadeIn(400);





            var formData = {

                'email': $('input[name=username_update]').val(),

                'pass': $('input[name=password_update]').val(),

                'social': $('input[name=socialmedia_name]').val()



            };



            //alert(formData);





            $.ajax({

                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)

                    url: ''+root_url+'action/updatepass.php', // the url where we want to POST

                    data: formData, // our data object

                    dataType: 'json', // what type of data do we expect back from the server

                    encode: true

                })

                // using the done promise callback

                .done(function(data) {



                    var state = data['success'];



                    $('.loader2').hide(400);



                    if (state == "1") {

                        //   var name = data['name'];

                        window.location.href = ""+root_url+"profile/";

                    }



                });

        });









        $("#cpa-form").submit(function(e) {

            e.preventDefault();



            // alert('here');

            $(".loader").fadeIn(400);





            var formData = {

                'email': $('input[name=username]').val(),

                'pass': $('input[name=password]').val()

            };



            //alert(formData);





            $.ajax({

                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)

                    url: ''+root_url+'action/loginmanual.php', // the url where we want to POST

                    data: formData, // our data object

                    dataType: 'json', // what type of data do we expect back from the server

                    encode: true

                })

                // using the done promise callback

                .done(function(data) {



                    var state = data['success'];



                    $('.loader').hide(400);



                    if (state == "11") {



                        setTimeout(function() {

                            $('#alertbox').hide('slow');

                        }, 4000);





                        $('#alertbox').show('slow');

                        $('#alertboxmsg').html('Username / Password is incorrect !');



                    }





                    if (state == "1") {





                        //   var name = data['name'];





                        // location.reload();

                        window.location.href = ""+root_url+"profile/";









                    }









                });







        });









    });



    function signoutuser() {



        // alert(id);





        $.ajax({

                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)

                url: ''+root_url+'action/signout.php', // the url where we want to POST

                encode: true

            })

            // using the done promise callback

            .done(function(data) {



                //alert(data);

                //  signOut();

                //disconnect_FB();



                //location.reload();

                    window.location.href = ""+root_url+"";



            });







    }



  

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>



    function signOut() {

        var auth2 = gapi.auth2.getAuthInstance();

        auth2.signOut().then(function() {

            console.log('User signed out.');

            //disconnect_FB();

            //location.reload();





            signoutuser();

        });

    }



<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    
        $(document).ready(function() {
            if($('.serivces_submenu li').length >= 1) {
                if (active_item) {
                    $('.serivces_submenu li:nth-child('+active_item+')').addClass("active");
                }
            }
        });
    
<?php echo '</script'; ?>
>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<?php echo '<script'; ?>
>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2260973753936080"
  theme_color="#ff7e29">
</div>

<?php }
}
