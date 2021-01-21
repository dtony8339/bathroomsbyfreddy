<!DOCTYPE html>
<html lang="en">
<head>
  <title>{$seo_title}</title>
    <meta name="description" content="{$seo_desc}">
    <meta name="keywords" content="{$seo_keywords}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{$smarty.const.root_img}favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{$smarty.const.root_css}lightbox.min.css">

<link rel="stylesheet" href="{$smarty.const.root_css}font-awesome.min.css">

<link rel="stylesheet" href="{$smarty.const.root_css}prettyPhoto.css">

<link rel="stylesheet" href="{$smarty.const.root_css}swiper.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/b06697df64.js" async defer></script>
  <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
  <style>
    {literal}
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900');
    body{
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: 1px;
        font-size: 16px;
    }
    header {
        padding: 30px 0;
    }
    .ph {
        text-align: right;
        font-size: 16px;
        letter-spacing: 1px;
        line-height: normal;
    }
    .ph-number {
        text-align: right;
        color: #f79122;
        font-size: 35px;
        line-height: normal;
    }
    #banner{
        background: url(https://freddyit.com/resources/img/header-bathroom-bg.jpg);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    #banner form {
        width: 100%;
        max-width: 400px;
        margin: auto;
        background: #f79122;
        padding: 30px 40px;
    }
    #banner form p {
        font-size: 18px;
        margin: 0;
        letter-spacing: 1px;
    }
    #banner form h2 {
        margin: 0;
        margin-bottom: 20px;
        color: white;
        letter-spacing: 1px;
    }
    #banner form label {
        width: 100%;
        color: white;
        font-size: 15px;
        letter-spacing: 1px;
        font-weight: normal;
    }
    #banner form input[type="text"] {
        width: 100%;
        padding: 7px 10px;
        border: none;
        margin-bottom: 10px;
    }
    #banner form label.check {
        width: 100%;
        color: white;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: normal;
        padding-left: 15px;
        text-indent: -15px;
    }
    #banner form input[type="submit"] {
        background: #d9c13f;
        width: 100%;
        border: 0;
        margin: 15px 0;
        padding: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
        font-size: 20px;
    }
    .text-banner {
        width: 100%;
        max-width: 350px;
        margin: 40px 0;
    }
    .text-banner h1 {
        font-size: 5em;
    }
    .text-banner p {
        font-size: 25px;
        margin-bottom: 20px;
    }
    #welcome h1 {
        color: #f79122;
    }
    #welcome {
        padding: 80px 0;
    }
    #feature h1 {
        text-transform: uppercase;
    }
    #feature {
        padding: 80px 0;
        background: #f6f6f6;
    }
    #feature img{
        margin: 10px auto;  
    }
    #cta p {
        color: white;
        font-size: 18px;
        margin-bottom: 40px;
    }
    #cta {
        padding: 80px 0;
        background: #f79122;
        text-align: center;
    }
    #cta h1 {
        color: white;
        font-size: 3em;
    }
    #cta button {
        color: #f79122;
        background: white;
        border: 0;
        padding: 15px 30px;
        font-size: 25px;
        font-weight: 400;
        border-radius: 5px;
    }
    #testimonials h1 {
        font-weight: bold;
        text-transform: uppercase;
    }
    #testimonials {
        padding: 80px 0;
    }
    .testi-box {
        margin: 15px auto;
        border: 1px solid #ccc;
        padding: 20px 25px;
        border-radius: 5px;
    }
    footer {
        background: #000;
        font-size: 12px;
        padding: 15px 0;
        text-transform: uppercase;
    }
    .logo img {
        filter: brightness(0) invert(1);
        max-height: 45px;
        float: right;
    }
    .logo {
        float: right;
    }
    .fa.fa-facebook {
        background: #337ab7;
        padding: 10px;
        margin: 10px;
        color: white;
    }
    footer p {
        margin: 10px 0;
    }
    header img {
        max-height: 100px;
    }
    @media(max-width:991px){
        header img {
            text-align: center;
            margin: auto;
        }
        .ph, .ph-number{
            text-align: center; 
        }
        .text-banner {
            text-align: center;
            margin: auto;
        }
        #welcome img {
            margin: auto;
        }
    }
    @media(max-width:500px){
        .text-banner h1 {
            font-size: 4em;
        }   
    }
    .service-box {
        height: 250px;
        background-size: cover !important;
        position: relative;
        width: 100%;
        max-width: 500px;
        margin: 20px auto;
    }
    .service-box-text {
        background: #f79122;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 20px 0;
        color: white;
    }
    .service-box-text h3 {
        margin: 0;
        color: white;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .service-box-text .strech {
        letter-spacing: 5px;
    }
    .rating { 
    border: none;
    width: 170px;
}
.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #f79122;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #f79122;  }
.folio-item { display: block; height: 270px; width: 264px; border: 1px solid #c9c9c9; cursor: pointer; position: relative; margin: 20px auto;  background:black;}

/***** CSS our works *****/

.folio-item { display: block; height: 270px; width: 264px; border: 1px solid #c9c9c9; cursor: pointer; position: relative; margin: 20px auto;  background:black;}



.folio-item img { width: 100%; height: 100%; }



.folio-item .item-info { position: absolute; bottom: 0px; background-color: rgba(0,0,0,0.6); height: 93px; width: 262px; padding: 10px 20px; }



.folio-item .item-info p { color: #fff; font-size: 16px; line-height: 20px; font-family: "SourceSansPro-Light"; margin: 5px 0px; }



.folio-item .item-info strong { font-family: "SourceSansPro-Semibold"; }



.folio-item:hover .item-info { position: absolute; bottom: 0px; height: 100%; width: 262px; padding: 10px 20px; background: rgba(0,0,0,0.6) url(../img/search-icon.png) no-repeat center 84px; padding-top: 55%; }



.folio-item:hover .item-info p.truncate { white-space: pre-line; text-overflow: ellipsis; }
.folio-date {
    position: relative;
    left: 0px;
    top: 0px;
    background-color: rgb( 247, 145, 34 );
    color: white;
    z-index: 1000;
    margin-bottom: -20px;
    padding: 5px 15px;
    font-style: italic;
}  
   {/literal}  
</style>
</head>
<body>
    <div class="top-address">
    <div class="container">
        {$topmessage}
    </div>
</div>
<header>
    <div class="container">
        <div class="col-md-3">
            <a href="https://bathroomsbyfreddy.co.uk"><img src="https://bathroomsbyfreddy.co.uk/resources/img/bathrooms-by-freedy-logo.png" alt="bathrooms" class="img-responsive"></a>
        </div>
        <div class="col-md-9">
            <div class="ph">CALL US NOW!</div>
            <div class="ph-number"><a href="tel:{$phone}" style="color: #f79122;text-decoration: none;">{$phone}</a>
            </div>
        </div>
    </div>
</header>
<section id="banner">
    <div class="container">
        <div class="col-md-6">
            <div class="text-banner">
                {$headertitle}
                {$headerdescription}
            </div>
        </div>
        
        <div class="col-md-6">
            <div id="loadingmsgC" class="alert alert-success" style="display:none; background: transparent !important;border: 0;">
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
            <div id="succC" class="alert alert-success" style="display:none; background: transparent !important;border: 0;">
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
        <div style="float: right;display:none; margin-right: 50%;" class="loader"></div>
            <form action="#" method="POST" id="pipefromContactl" class="Individual-form">
                <input type="hidden" placeholder="Subject" name="subject" id="subject" value="bathroomsbyfreddy.co.uk/{$linktitle}/{$sublink}" />
                <p>SIGN UP FOR</p>
                <h2>FREE QUOTE</h2>
                <label>Name</label>
                <input type="text" placeholder="Name" id="name" name="name" required="required" />
                <label>Email</label>
                <input type="text" placeholder="Email Address" id="email" name="email" required="required" />
                <label>&nbsp;</label>
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
                <label>Phone Number</label>
                <input type="text" placeholder="Phone Number"  id="mobile" name="mobile" required="required" />
                <label class="check"><input type="checkbox"> By clicking above, I authorize By Freddy to call me and send pre-recorded messages and text messages to me about By Freddy products and services at the telephone number I entered above, using an autodialer, even if I am on a national or state "Do Not Call" list. Message and data rates may apply. I understand that consent here is not a condition of purchase.</label>
                
                <input type="submit" id="submitforml" value="Get Quote">
            </form>
        </div>
    </div>
</section>
{if !empty($ourworks)}
<section>
   
    <div class="container">
        <h1>Our work</h1>
        <div class="row">

            {if !empty($ourworks)}

                {foreach from=$ourworks item=row}    

     

                    <div class="col-md-3 col-sm-6"> 

                        {if empty($row['top_img'])}

                            

                            <a class="folio-item example-image-link mysliderdata" data-id="{$row['id']}">

                                <img src="{$smarty.const.root_img}no_img.jpeg" class="example-image">

                                <div class="item-info">

                                    <div class="eli-width">

                                        <p class="truncate"><strong> {$row['title']}</strong></p>

                                        <p class="truncate"><em>{$row['suburb']}</em></p>

                                    </div>

                                </div>

                            </a>

                        

                        {else}

                            <a class="folio-item example-image-link mysliderdata" data-id="{$row['id']}" data-toggle="modal" data-target=".bs-example-modal-lg">



                                <div class="folio-date">{$row['date_added']} <span class="folio-date-img-count">{$row['count_image']} photos</span></div>

                                <img src="https://admin.byfreddy.io{$row['top_img']}" class="example-image">



                                <div class="item-info">

                                    <div class="eli-width">

                                        <p class="truncate"><strong> {$row['title']}</strong></p>

                                        <p class="truncate"><em>{$row['suburb']}</em></p>

                                    </div>

                                </div>

                            </a>

                        {/if}

                    </div>

                {/foreach}

                

            {/if}

        



    </div>
         </div>
</section>
{/if}
<section id="welcome">
    <div class="container">
        <div class="col-md-7">
            <h1> {$mainheader}</h1>
            {$maintext}
        </div>
        <div class="col-md-5">
            <img src="https://freddyit.com/resources/img/bathrooms-img.jpg" class="img-responsive">
        </div>
    </div>
</section>
<section id="feature">
    <div class="container">
            <h1>{$featuretext}</h1>
            {$featuredescription}

           <div class="row">
            {if !empty($file1)}
               
<div class="col-md-6">
    <a href="{$featureproductlink1}">
    <div class="service-box" style="background:url('https://admin.byfreddy.io/photo/blog/post_upload/{$file1}');">
                        <div class="service-box-text">
                            <h3>{$featureproducttitle1}</h3> <span class="strech">{$featureproductsubtitle1}</span>
                        </div>
                    </div>
                   </a> 
                </div>
                           

                            {/if}
                 {if !empty($file2)}

                              
<div class="col-md-6">
    <a href="{$featureproductlink2}">
    <div class="service-box" style="background:url('https://admin.byfreddy.io/photo/blog/post_upload/{$file2}');">
                        <div class="service-box-text">
                            <h3>{$featureproducttitle2}</h3> <span class="strech">{$featureproductsubtitle2}</span>
                        </div>
                    </div>
                </a>    
                </div>
                           

                            {/if}
               <!--  <div class="col-md-4">
                    <img src="https://freddyit.com/resources/img/industrial-automation.jpg" class="img-responsive">
                </div> -->
           </div>
        </div>
</section>
<section id="cta">
    <div class="container">
         <h1>{$mainlinktitle}</h1>
            {$mainlinktext}
        <a href="{$mainlink}"><button>GET STARTED NOW</button></a>
    </div>
</section>
<section id="testimonials">
    <div class="container">
        <h1>Testimonials</h1>
        
        {if !empty($testimonials)}

        
        <div class="row">
            {$i = 1} 
            {foreach from=$testimonials item=row}

            

                
            <div class="col-md-6">
                <div class="testi-box">
                    <fieldset class="rating">
                    <input type="radio" id="star5" name="rating5{$i}" value="5" {if $row['stars']==5 } checked="checked" {/if} /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating4{$i}" value="4" {if $row['stars']==4 } checked="checked" {/if}  /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating3{$i}" value="3" {if $row['stars']==3 } checked="checked" {/if} /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating2{$i}" value="2" {if $row['stars']==2 } checked="checked" {/if}  /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating1{$i}" value="1" {if $row['stars']==1 } checked="checked" {/if}  /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                    <p>{$row['comments']}</p>
                    <b>{$row['name']}</b>
                </div>
            </div>
             {$i = $i+1}
 {/foreach}
           
        </div>
        {/if}
    </div>
</section>
<footer>
    <div class="container">
        <div class="col-md-6">
            <p>© 2019 freddyit.com    Terms and conditions   Privacy notice   Cookie policy<br>
Registered in England No. 05272398. UK VAT Registered: 850 4121 63</p>
        </div>
        <div class="col-md-6">
            <div class="logo"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div><div class="logo"><img src="https://freddyit.com/resources/img/new-logo.png" class="img-responsive"></div>
        </div>
    </div>
</footer>
</body>
</html>
<script src="{$smarty.const.root_js}bootstrap.min.js"></script>

<script src="{$smarty.const.root_js}jquery.plugin.min.js"></script>

<script src="{$smarty.const.root_js}select2.min.js"></script>

<script src="{$smarty.const.root_js}jquery.lazyloadxt.js"></script>



<!--Script for Scroll Fix-->

<script src="{$smarty.const.root_js}custom.js"></script>
{literal}
<script src="https://mowingbyfreddy.co.uk/resources/js/lightbox-plus-jquery.min.js"></script>
{/literal}


{literal}
<script src="https://mowingbyfreddy.co.uk/resources/js/swiper.min.js"></script>
{/literal}

{literal}
<script type="text/javascript">



    var root_url="{$smarty.const.siteurl}";

    



    $(document).on("click", ".mysliderdata", function () {

        var myBookId = $(this).data('id');

        var formData = {

            'id23': myBookId

        };

        

        $.ajax({

                type        : 'post', 

                url         : 'https://bathroomsbyfreddy.co.uk/helpers/get_slider_data.php',  

                data        : formData,

                dataType    : 'html',

                beforeSend: function() { 

                        $('#loaderArea').show();

                        $('#loader').show();

                        $('#get_slider').hide();

                        $('.modal-header .close').hide(); 

                    },

                complete: function() { 

                        $('#loaderArea').hide(); 

                        $('#loader').hide(); 

                        $('#get_slider').show();

                        $('.modal-header .close').show(); 

                    }

            })

            .done(function(data) { 

                if(data !== ''){

                    $('#get_slider').css({"margin-top": "-22%"});

                    //$('button.close').css({"margin-top": "-4%","margin-right":"-.5%"});

                    $('#get_slider').html(data);



                }else{

                    console.log('NO IMAGE');

                }

                

            });

         event.preventDefault();

         

    });

</script>
{/literal}


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static" data-keyboard="false">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <div class="item-info col-xs-7  col-sm-7 col-centered text-center">

                    <!--<div class="modallogo" style=" height:auto; margin:10px; margin:0 auto; margin-top:10 margin-bottom:0px; "> <img src="https://professionalfencing.com.au/resources/img/logo-fence2.png" class="img-responsive"></div>-->

                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -5px !important;"><span aria-hidden="true">&times;</span></button>

            </div>

            

            <div class="modal-body" style="background:#fff;">

                <div class="loaderArea">

                    <div id="loader"></div>

                </div>

                <div id="get_slider"></div>

            </div>

        </div>

    </div>

</div>



<!-- for pagination -->
{literal}
<style type="text/css">

    .pagination_div{

        width:100%;

        text-align: center;

    }

    a.btn-default:hover{

        background-color: #2e6da4;

        color:#fff;

    }

</style>

{/literal}

{literal}
<script type="text/javascript">

    

      makePager = function(page){

            var show_per_page = 12;

            var number_of_items = $('#paginate a').size();

            var number_of_pages = Math.ceil(number_of_items / show_per_page);

            var number_of_pages_todisplay = 5;

            var navigation_html = '';

            var current_page = page;

            var current_link = (number_of_pages_todisplay >= current_page ? 1 : number_of_pages_todisplay + 1);

            if (current_page > 1)

                current_link = current_page;

            if (current_link != 1) navigation_html += "<a class='btn btn-default' href=\"javascript:first();\">« Start&nbsp;</a>&nbsp;<a class='btn btn-default' href=\"javascript:previous();\">« Prev&nbsp;</a>&nbsp;";

            if (current_link == number_of_pages - 1) current_link = current_link - 3;

            else if (current_link == number_of_pages) current_link = current_link - 4;

            else if (current_link > 2) current_link = current_link - 2;

            else current_link = 1;

            var pages = number_of_pages_todisplay;

            while (pages != 0) {

                if (number_of_pages < current_link) { break; }

                if (current_link >= 1)

                    navigation_html += "<a class='" + ((current_link == current_page) ? "btn btn-primary " : "btn btn-default") + "' href=\"javascript:showPage(" + current_link + ")\" longdesc='" + current_link + "'>" + (current_link) + "</a>&nbsp;";

                current_link++;

                pages--;

            }

            if (number_of_pages > current_page){

                navigation_html += "<a class='btn btn-default' href=\"javascript:next()\">Next »</a>&nbsp;<a class='btn btn-default' href=\"javascript:last(" + number_of_pages + ");\">Last »</a>";

            }

                    $('#page_navigation').html(navigation_html);

      }

      var pageSize = 12;

      showPage = function (page) {

            $("#paginate a").hide();

            $('#current_page').val(page);

            $("#paginate a").each(function (n) {

                if (n >= pageSize * (page - 1) && n < pageSize * page)

                    $(this).show();

            });

        makePager(page);

       }

        showPage(1);

       next = function () {

            new_page = parseInt($('#current_page').val()) + 1;

            showPage(new_page);

        }

        last = function (number_of_pages) {

            new_page = number_of_pages;

            $('#current_page').val(new_page);

            showPage(new_page);

        }

        first = function () {

            var new_page = "1";

            $('#current_page').val(new_page);

            showPage(new_page);    

      }

        previous = function () {

            new_page = parseInt($('#current_page').val()) - 1;

            $('#current_page').val(new_page);

            showPage(new_page);

      }

</script>
{/literal}

{literal}
<style>

/* Center the loader */

.loaderArea{

    margin-top: 10%;

}



#loader {

  position: relative;

  left: 50%;

  top: 100%;

  z-index: 1;

  width: 150px;

  height: 150px;

  margin: -75px 0 0 -75px;

  border: 16px solid #f3f3f3;

  border-radius: 50%;

  border-top: 16px solid rgb(247, 145, 34); 

  -webkit-animation: spin 2s linear infinite;

  animation: spin 2s linear infinite;

}



@-webkit-keyframes spin {

  0% { -webkit-transform: rotate(0deg); }

  100% { -webkit-transform: rotate(360deg); }

}



@keyframes spin {

  0% { transform: rotate(0deg); }

  100% { transform: rotate(360deg); }

}



/* Add animation to "page content" */

.animate-bottom {

  position: relative;

  -webkit-animation-name: animatebottom;

  -webkit-animation-duration: 1s;

  animation-name: animatebottom;

  animation-duration: 1s

}



@-webkit-keyframes animatebottom {

  from { bottom:-100px; opacity:0 } 

  to { bottom:0px; opacity:1 }

}



@keyframes animatebottom { 

  from{ bottom:-100px; opacity:0 } 

  to{ bottom:0; opacity:1 }

}



#myDiv {

  display: none;

  text-align: center;

}

.top-banner.ourworks {

    background-size: contain !important;

    background: url('https://fencingbyfreddy.co.uk/resources/img/ourwork-banner.jpg');

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

</style>
{/literal}