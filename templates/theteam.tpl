<link rel="stylesheet" href="{$smarty.const.root_css}lightbox.min.css">

<link rel="stylesheet" href="{$smarty.const.root_css}font-awesome.min.css">

<link rel="stylesheet" href="{$smarty.const.root_css}prettyPhoto.css">

<link rel="stylesheet" href="{$smarty.const.root_css}swiper.min.css">

<link rel="stylesheet" href="{$smarty.const.root_css}style.css">

<style>

{literal}



.customButton {

    background-color: #f79121;

    padding: 2%;

    border-radius: 6px;

    color: #fff;

    font-size: 14px;

    font-weigth: bold;

    font-weight: bold;

    /* margin-right: 0%; */

    align-content: right;

    float: center;

}

.mate-link{

  padding:3%;

}

.teamfreddy-img img {

    width: 100%;

    height: 250px;

}
.single-grade {
    width: 80px;
    height: 80px;
    text-align: center;
    background: #f79122;
    border-radius: 10px;
    color: white;
    font-size: 20px;
    margin: 10px auto;
    padding: 10px;
    font-family: 'Roboto';
}
.single-grade span {
    font-size: 30px;
    line-height: 30px;
    font-weight: bold;
}
.stats {
    text-transform: uppercase;
}
.teamfreddy-modal .mate-work-img img {
    height: 200px !important;
    width: auto !important;
}
.teamfreddy-modal .mate-work-img{
  text-align:center;
  background:#000000;
}
.teamfreddy-modal .mate-work-info {
    background: black;
}
.teamfreddy-modal .mymate-work {
    border-radius: 0;
}
.profile-img {
    width: 250px;
    height: 250px;
    margin: 20px auto;
    border-radius: 100%;
    overflow: hidden;
}
{/literal}

</style>


<!--Start Top Banner-->
<section class="contact-banner ourteam">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="banner_title">OUR PEOPLE</h1>				
			</div>
		</div>
	</div>
</section>
<!--End Top Banner-->


        <!-- Modal -->



<!--Start Breadcrumbs

<section>

  <div class="container">

    <div class="row">

      <div class="col-sm-12">

        <ul class="crumb">

          <li><a href="{$smarty.const.siteurl}">Home</a></li>

          <li>our work</li>

        </ul>

      </div>

    </div>

  </div>

</section>

<!--End Breadcrumbs-->



<!--Start Content-->

{*<?php*}

    {*{$team|@debug_print_var}*}

{*?>*}


<div class="padding">
<section class="content"> 

  <div class="container">

    <h2 class="team-title"><span>TEAM</span></h2>

        <div class="row" id="paginate" style="display:none">

      {if !empty($team)}

      {foreach from=$team item=row}

          <div class="col-lg-3 col-sm-6 teamfreddyitem">
              <div class="teamfreddy">
                  <div class="teamfreddy-img" style="background-image:url('{if !empty($row['image'])}https://trade.byfreddy.io/photo/tradesman/_thumb/{$row['image']}{/if}{if empty($row['image'])}{$smarty.const.root_img}teamfreddy-1.jpg{/if}');height: 250px;">
                    </div>
                    <div class="teamfreddy-info">
                      <p class="teamfreddy-name">{$row['name']}</p>
                        <p class="teamfreedy-loc"><i class="fa fa-map-marker"></i>{if !empty($row['trade_area'])} {$row['trade_area']} {else} {$row['city']} {/if}</p>
                    </div>
                </div>
                <center><button type="button" class="btn btn-primary teamfreddy-button" data-toggle="modal" data-target="#team{$row['id']}">
                  View
                </button></center>
            </div>

           <!--  <div class="col-lg-9 col-md-8 col-sm-12" style="padding-left: 30px;">
              <div class="profile-info">
                <h3>About Me</h3>
                <p>{$row['about_us']}</p>
              </div>
            </div> -->

      {/foreach}

    {/if}

    <!--End Portfoltio Item-->



  </div>

  <div class="pagination_div" style="display:none">

    <input type='hidden' id='current_page' class="" />

      <input type='hidden' id='show_per_page' />

      <div id='page_navigation'></div>

  </div>  

  </div>



<div class="team">

	<div class="teamPage">
	<div class="teamBox">
		<div class="photos">
			<img src="{$smarty.const.root_img}team-1.png" />
		</div>
		<div class="teamInfo">
			<h2>Arturs</h2>
			<p><i class="fa fa-map-marker blue" aria-hidden="true"></i> Berkshire</p>
			<div class="teamSM">
				<a href="#"><img src="{$smarty.const.root_img}icon-fb.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-insta.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-tw.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-envelope.png" /></a>
			</div>
				<div class="btn-gold">
				<a href="#">View</a>
			</div>
		</div>
	</div>
	
	<div class="teamBox">
		<div class="photos">
			<img src="{$smarty.const.root_img}team-2.png" />
		</div>
		<div class="teamInfo">
			<h2>Daniel</h2>
			<p><i class="fa fa-map-marker blue" aria-hidden="true"></i> Berkshire</p>
			<div class="teamSM">
				<a href="#"><img src="{$smarty.const.root_img}icon-fb.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-insta.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-tw.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-envelope.png" /></a>
			</div>
			<div class="btn-gold">
				<a href="#">View</a>
			</div>
		</div>
	</div>
	
	<div class="teamBox">
		<div class="photos">
			<img src="{$smarty.const.root_img}team-3.png" />
		</div>
		<div class="teamInfo">
			<h2>Sam Caye</h2>
			<p><i class="fa fa-map-marker blue" aria-hidden="true"></i> Berkshire</p>
			<div class="teamSM">
				<a href="#"><img src="{$smarty.const.root_img}icon-fb.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-insta.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-tw.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-envelope.png" /></a>
			</div>
						<div class="btn-gold">
				<a href="#">View</a>
			</div>
		</div>
	</div>	
	<div class="teamBox">
		<div class="photos">
			<img src="{$smarty.const.root_img}team-4.png" />
		</div>
		<div class="teamInfo">
			<h2>Jane Cooper</h2>
			<p><i class="fa fa-map-marker blue" aria-hidden="true"></i> Berkshire</p>
			<div class="teamSM">
				<a href="#"><img src="{$smarty.const.root_img}icon-fb.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-insta.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-tw.png" /></a>
				<a href="#"><img src="{$smarty.const.root_img}icon-envelope.png" /></a>
			</div>
					<div class="btn-gold">
				<a href="#">View</a>
			</div>
		</div>
	</div>	
		<div class="clear"></div>
	<div class="btn-page">
		<img src="{$smarty.const.root_img}arrow-left1.png" class="btn-prev" />
		<img src="{$smarty.const.root_img}arrow-right1.png" class="btn-next" />
	</div>
	<div class="clear"></div>
	</div>
</div>


</section>

<!--End Content-->





{if !empty($team)}

  {foreach from=$team item=row}

<!--modal-->

<div class="modal fade teamfreddy-modal" id="team{$row['id']}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="row">

          <div class="col-md-4">

            <div class="profile-img"><img src="{if !empty($row['image'])}https://trade.byfreddy.io/photo/tradesman/_thumb/{$row['image']}{/if}{if empty($row['image'])}{$smarty.const.root_img}teamfreddy-1.jpg{/if}" alt="" class="img-responsive"></div>
            <div class="single-grade">
                            <span>{$row['grade']}</span> GRADE
                        </div>
          </div>

          <div class="col-md-8">

            <div class="profile-info">

              <!-- <p class="stats"><strong>Name</strong> --> <!-- {$row['name']} --><!-- </p> -->

                          <p class="stats"><strong>Name </strong></p>
                          <p>{$row['name']} </p>

              <p class="stats"><strong>About Me</strong></p>

            

              <p>{$row['about_us']}</p>
                            <p class="stats"><strong>More About Me</strong></p>
                            <a href="/theteam/{$row['trade_area']}/{$row['name']}">Read More <i class="fa fa-external-link" aria-hidden="true"></i></a>

              <!-- <p class="stats"><strong>Title</strong> {$row['company_name']}</p> -->

              <!-- <p class="stats"><strong>Past Projects</strong> </p> -->

            </div>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12">

            <h2 class="ourmate-title left"><span>My Work</span></h2>

            {if !empty($row['work'])}

            <div class="row">

              {foreach from=$row['work'] item=work}

              <div class="col-sm-3">

                <div class="mymate-work">

                  <div class="mate-work-img">

                    <img src="{if !empty($work['top_img'])}https://admin.byfreddy.io{$work['top_img']}{/if}{if empty($work['top_img'])}{$smarty.const.root_img}work1.jpg{/if}" alt="">

                  </div>

                  <div class="mate-work-info">

                    <p class="mate-work-name">{$work['title']|truncate:40}</p>

                    <p class="mate-work-location"><i class="fa fa-map-marker"></i> {$work['location']|truncate:40}</p>

                  </div>  

                </div>

              </div>

              {/foreach}

            </div>

            <div class="row">

              <div class="col-md-12" align="center">

                <div class="mate-link">

                  <a class="customButton" href="/theteam/{$row['trade_area']}/{$row['name']}">View More</a>

                </div>

              </div>

            </div>

            {/if}

          </div>

            

        </div>

      </div>

      

    </div>

  </div>

</div>
</div>
  {/foreach}

{/if}



<!-- <footer>
  <div class="container" style="background-color: black;">
    <div class="row">
      <div class="col-sm-6">
        &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> ByFreddy.CO.UK    Terms and conditions   Privacy notice   Cookie policy<br>
Registered in England No. 05272398. UK VAT Registered: 850 4121 63
      </div>
      <div class="col-sm-6 icons">
        <a href="#" target="_blank"><img src="https://freddyit.com/resources/img/logo.png"></a> <a href="https://www.facebook.com/paintingbyfreddyuk/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </div>
    </div>
</footer> -->



<style>

.top-banner.ourteam {

  background-size: contain !important;

  background: url('{$smarty.const.root_img}team-freddy.jpg');

    background-position: center bottom;

    max-height: 400px !important;

    height: 100%;

    padding: 0;

   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e7e8ea+1,fbfbfb+50,e7e8ea+100 */

background-color: rgb(231,232,234); /* Old browsers */

background-color: -moz-linear-gradient(top, rgba(231,232,234,1) 1%, rgba(251,251,251,1) 50%, rgba(231,232,234,1) 100%); /* FF3.6-15 */

background-color: -webkit-linear-gradient(top, rgba(231,232,234,1) 1%,rgba(251,251,251,1) 50%,rgba(231,232,234,1) 100%); /* Chrome10-25,Safari5.1-6 */

background-color: linear-gradient(to bottom, rgba(231,232,234,1) 1%,rgba(251,251,251,1) 50%,rgba(231,232,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e7e8ea', endColorstr='#e7e8ea',GradientType=0 ); /* IE6-9 */

    background-repeat: no-repeat;

}

@media(max-width:1542px){

.top-banner.ourteam{

     max-height: 395px !important;

}

}

@media(max-width:1500px){

.top-banner.ourteam{

     max-height: 390px !important;

}

}

@media(max-width:1460px){

.top-banner.ourteam{

     max-height: 380px !important;

}

}

@media(max-width:1420px){

.top-banner.ourteam{

     max-height: 370px !important;

}

}

@media(max-width:1380px){

.top-banner.ourteam{

     max-height: 355px !important;

}

}

@media(max-width:1310px){

.top-banner.ourteam{

     max-height: 345px !important;

}

}

@media(max-width:1260px){

.top-banner.ourteam{

     max-height: 330px !important;

}

}

@media(max-width:1199px){

.top-banner.ourteam{

     max-height: 300px !important;

}

}

@media(max-width:1040px){

.top-banner.ourteam{

     max-height: 290px !important;

}

}

@media(max-width:980px){

.top-banner.ourteam {

     max-height: 270px !important;

}

}

@media(max-width:900px){

.top-banner.ourteam {

     max-height: 250px !important;

}

}

@media (max-width: 775px){

.top-banner.ourteam {

    max-height: 230px !important;

}

}

@media (max-width: 700px){

.top-banner.ourteam {

    max-height: 150px !important;

    margin-top: 80px;

     background-size: cover !important;

}

}

</style>

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
{literal}
<script type="text/javascript">

  

      makePager = function(page){

      var show_per_page = 8;

            var number_of_items = $('#paginate .teamfreddyitem').size();

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

      var pageSize = 8;

      showPage = function (page) {

            $("#paginate .teamfreddyitem").hide();

            $('#current_page').val(page);

            $("#paginate .teamfreddyitem").each(function (n) {

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