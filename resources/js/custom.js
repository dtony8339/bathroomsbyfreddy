//Scroll Changes
$(window).scroll(function () {
	if ($(this).scrollTop() > 10) {
	    $('.navbar').addClass('scroll-header');
	} else if ($(window).scrollTop() == 00) {
	    $('.navbar').removeClass('scroll-header');
	}
});


//Tabs
jQuery(document).ready(function ($) {
    $('#tabs').tab();
});

$('#sign_in,#OFC,#video01').modal({
	console.log("alert");
    show: false,
    backdrop: 'static',
    keyboard: false
})

//Home Carousel Scripting
jQuery(document).ready(function ($) {
  var slide_height = $(".home-carousel .carousel-inner .item").height();
  var slide_width = $(".home-carousel .carousel-inner .item").width();
  $(".home-carousel .carousel-inner .item .slide-content").css("height", slide_height);
  $(".home-carousel .carousel-inner .item .slide-content").css("width", slide_width);
});
$(window).resize(function(){
  var slide_height = $(".home-carousel .carousel-inner .item").height();
  var slide_width = $(".home-carousel .carousel-inner .item").width();
  $(".home-carousel .carousel-inner .item .slide-content").css("height", slide_height);
  $(".home-carousel .carousel-inner .item .slide-content").css("width", slide_width);
});

//On Click Chat
$("#chatwithus").click(function(){
    $(".siButtonB").trigger('click');
});
	var root_url="{$smarty.const.siteurl}";
	$(document).ready(function() {
    //  console.log("test---"+root_url);  
    // process the form


    $('#pipefrom').submit(function(event) {

    	
    	//document.getElementById("submitform").disabled = true;
$( "#appointment1" ).fadeOut(400);
    	$( "#appointment2" ).fadeOut(400);
    	$( "#appointment3" ).fadeOut(400);
				$('#newgetquote').fadeOut(400);
    	 $( ".loader" ).fadeIn(400);
    	  $('#pipefrom').fadeOut(400);
    	  $( "#loadingmsg" ).fadeIn(400);
    	 window.scrollTo(0,0);



    	//var address = document.getElementById("address").value; 
    	//alert(address);
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        // var formData = {
        //     'name'              : $('input[name=name]').val(),
        //     'lname'              : $('input[name=lname]').val(),
        //     'email'             : $('input[name=email]').val(),
        //     'phone'              : $('input[name=phone]').val(),
        //     'code'             : $('input[name=code]').val(),
        //     'mobile'             : $('input[name=mobile]').val(),
        //     'subrub'             : $('input[name=subrub]').val(),
        //     'product'             : $('input[name=product]').val(),
        //     'address'              : address
        // };
 
        var formData = $("#pipefrom").serialize();
       //  console.log(''+root_url+'helpers/submitpipedrive_request.php');  
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : ''+root_url+'helpers/submitpipedrive_request.php', // the url where we want to POST
            data: formData, // our data object
           	// dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                console.log(data);

            	$( "#loadingmsg" ).fadeOut(400);
    	 

            	$("#pipefrom")[0].reset();
            	 $('.loader').hide(400);	
            	 document.getElementById("submitform").disabled = false;


              
              $('#pipefrom').fadeOut(400);
              setTimeout(function() {
				    $('#pipefrom').fadeIn(400);
				}, 8000);




              $( "#succ" ).fadeIn(400);

				setTimeout(function() {
				    $('#succ').fadeOut(400);
				}, 8000);
setTimeout(function() {
				   
				
				$('#appointment1').fadeIn(400);
				$('#appointment2').fadeIn(400);
				$('#appointment3').fadeIn(400);
				$('#newgetquote').fadeIn(400);
				}, 8000);

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });





//////CONTACT US FORM/////////////////////////////////////////////


    $('#pipefromContact').submit(function(event) {
        $( ".loader" ).fadeIn(400);
        $('#pipefromContact').fadeOut(400);
        $( "#loadingmsgC" ).fadeIn(400);
        window.scrollTo(0,0);
        //var address = document.getElementById("address").value; 
        var formData = $("#pipefromContact").serialize();
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : ''+root_url+'helpers/submitpipedrive_request_contact.php', // the url where we want to POST
            data: formData, // our data object
            // dataType    : 'json', // what type of data do we expect back from the server
            encode          : true

        })

            .done(function(data) {
                console.log(data);
                $( "#loadingmsgC" ).fadeOut(400);
                $("#pipefromContact")[0].reset();
                $('.loader').hide(400);    
                document.getElementById("submitformC").disabled = false;
                $('#pipefromContact').fadeOut(400);
                setTimeout(function() {
                $('#pipefromContact').fadeIn(400);
                }, 8000);
                $( "#succC" ).fadeIn(400);
                setTimeout(function() {
                $('#succC').fadeOut(400);
                }, 8000);
            });
            event.preventDefault();
    });



/////END CONTACT US FORM//////////////////////////////////////////







 $('#pipefrom2').submit(function(event) {

    	 event.preventDefault();
    	//document.getElementById("submitform").disabled = true;
$( "#appointment1" ).fadeOut(400);
    	$( "#appointment2" ).fadeOut(400);
    	$( "#appointment3" ).fadeOut(400);
				$('#newgetquote').fadeOut(400);
    	  $( ".loader" ).fadeIn(400);
    	  $('#pipefrom2').fadeOut(400);
    	  $( "#loadingmsg" ).fadeIn(400);
    	 window.scrollTo(0,0);



    	//var address = document.getElementById("address").value; 
    	
        var formData = $("#pipefrom2").serialize();

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : ''+root_url+'helpers/submitpipedrive_request_business.php', // the url where we want to POST
            data: formData, // our data object
           	// dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) { console.log(data);

            	$( "#loadingmsg" ).fadeOut(400);
    	 

            	$("#pipefrom2")[0].reset();
            	 $('.loader').hide(400);	
            	 document.getElementById("submitform").disabled = false;


              
              $('#pipefrom2').fadeOut(400);
              setTimeout(function() {
				    $('#pipefrom2').fadeIn(400);
				}, 8000);


              $( "#succ" ).fadeIn(400);

				setTimeout(function() {
				    $('#succ').fadeOut(400);
				}, 8000);
setTimeout(function() {
				   
				
				$('#appointment1').fadeIn(400);
				$('#appointment2').fadeIn(400);
				$('#appointment3').fadeIn(400);
				$('#newgetquote').fadeIn(400);
				}, 8000);

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

//////Landing FORM/////////////////////////////////////////////


    $('#pipefromContactl').submit(function(event) {
        gtag_report_conversion(window.location);
        $( ".loader" ).fadeIn(400);
        $('#pipefromContactl').fadeOut(400);
        $( "#loadingmsgC" ).fadeIn(400);
        window.scrollTo(0,0);
        //var address = document.getElementById("address").value; 
        var formData = $("#pipefromContactl").serialize();
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : ''+root_url+'helpers/submitpipedrive_request_landing.php', // the url where we want to POST
            data: formData, // our data object
            // dataType    : 'json', // what type of data do we expect back from the server
            encode          : true

        })

            .done(function(data) {
                console.log(data);
                $( "#loadingmsgC" ).fadeOut(400);
                $("#pipefromContactl")[0].reset();
                $('.loader').hide(400);    
                document.getElementById("submitforml").disabled = false;
                $('#pipefromContactl').fadeOut(400);
                setTimeout(function() {
                $('#pipefromContactl').fadeIn(400);
                }, 8000);
                $( "#succC" ).fadeIn(400);
                setTimeout(function() {
                $('#succC').fadeOut(400);
                }, 8000);
            });
            event.preventDefault();
    });



/////END CONTACT US FORM//////////////////////////////////////////
function gtag_report_conversion(url) {
var callback = function () {
  if (typeof(url) != 'undefined') {
    window.location = url;
  }
};
gtag('event', 'conversion', {
    'send_to': 'AW-753317577/4EWTCJSNhZ8BEMntmucC',
    'event_callback': callback
});
return false;
}