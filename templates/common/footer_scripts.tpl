
<script type="text/javascript">
	
	function downloadJSAtOnload() {
	 var element = document.createElement("script");
	 element.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLipBUfCo0peHy8RvaO4UH3-W_1Fi9WA&libraries=places";
	 document.body.appendChild(element);
	 }
	 if (window.addEventListener)
	 window.addEventListener("load", downloadJSAtOnload, false);
	 else if (window.attachEvent)
	 window.attachEvent("onload", downloadJSAtOnload);
	 else window.onload = downloadJSAtOnload;
	</script>


	<script>

	function geolocate()

	{

	  var input = document.getElementById('address');

        var searchBox = new google.maps.places.SearchBox(input);

	}

	</script>

{literal}

	<!-- Google Tag Manager -->



<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->

{/literal}

{literal}
<script>

  // on preview show iframe

$('#video01').on('show.bs.modal', function (e) {

  $('#video01 .modal-body').html('<button type="button" class="close" data-dismiss="modal">&times;</button><iframe width="100%" height="400px" src="https://www.youtube.com/embed/cKVc4II5Z8M?autoplay=true" frameborder="0" allowfullscreen></iframe>');

});

//on close remove

$('#video01').on('hidden.bs.modal', function () {

   $('#video01 .modal-body').empty();

});


  function dologin()

 {

    var useremail = $("#lemail").val();

    var password = $("#lpassword").val();

  $.ajax({

   url: "/dologin.php",

   method:"POST",

   data:{email:useremail,password:password},

   success:function(data){

    alert(data);

    if(data>0)

    {

$("#userid").val(data);

$("#loginforms").hide();

//$("#creditcardforms").show();

document.getElementById('creditcardforms').style.display='block';

    }

    else

    {

        alert('Wrong username or password');

    }



   }

  });

 }

 

</script>
{/literal}


	

	



 <!-- Social Intents www.socialintents.com -->

   

   <!-- <script type='text/javascript'>

	{literal}

        localStorage.removeItem("si_convert-2c9fa7465c3c6e61015c43c5de50058a");

        localStorage.removeItem("si_cvid-2c9fa7465c3c6e61015c43c5de50058a");    

        sessionStorage.removeItem("socialintents_vs_chat");

        sessionStorage.removeItem("si_settings_chat-2c9fa7465c3c6e61015c43c5de50058a");

        (function() {function socialintents(){

                var siJsHost = (("https:" === document.location.protocol) ? "https://" : "http://");

                var s = document.createElement('script');s.type = 'text/javascript';s.async = true;s.src = siJsHost+'www.socialintents.com/api/chat/socialintentsp.js#2c9fa7465c3c6e61015c43c5de50058a';

                var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);

        };

        if (window.attachEvent)window.attachEvent('onload', socialintents);else window.addEventListener('load', socialintents, false);

        })();

		{/literal}

		

    </script>-->
{literal}
<script>

        function init(){

            var input1 = document.getElementById('address');

            var input2 = document.getElementById('caddress');

            var input3 = document.getElementById('paddress');

			

			input1.addEventListener('keyup',function(){

				$('.pac-container').css('z-index', '9999');

			});

            var autocomplete = new google.maps.places.Autocomplete(input1);

			

			input2.addEventListener('keyup',function(){

				$('.pac-container').css('z-index', '9999');

			});

            var autocomplete = new google.maps.places.Autocomplete(input2);

			

			input3.addEventListener('keyup',function(){

				$('.pac-container').css('z-index', '9999');

			});

            var autocomplete = new google.maps.places.Autocomplete(input3);

        }



</script>
{/literal}
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6w030WALwmibl59j5EgPuJvqH6pBeZ-Y&libraries=places&callback=init"

        async defer></script> -->





{literal}

<script type="text/javascript">

var root_url="{$smarty.const.siteurl}";





	$('iframe').load( function() {

	    $('iframe').contents().find("head")

	      .append($("<style type='text/css'>  .my-class{display:none;}  </style>"));

	});

















function assignsubrub(id) {

	document.getElementById("subrub").value = id;

	document.getElementById("psubrub").value = id;

}

    function myFunction() {

    /*
    var x = document.getElementById('phone-onclick');

    if (x.style.display === 'none') {

        x.style.display = 'block';

    } else {

        x.style.display = 'block';

    }
    */
     $('#phone-onclick').toggle();

}

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



</script>

{/literal}

<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
{literal}
<script>

$(document).ready(function(){ 
 

	$(window).scroll(function(){

			if ($(this).scrollTop() > 1) {

				$('.floating-nav').fadeOut();

				$('.navbar-default .navbar-nav.homenav').fadeIn('fast');

			} else {

				$('.floating-nav').fadeIn();

				$('.navbar-default .navbar-nav.homenav').fadeOut('fast');

			}

		});

});

</script>

{/literal}

{literal}
<script>

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



</script>
{/literal}



</body>

</html>



