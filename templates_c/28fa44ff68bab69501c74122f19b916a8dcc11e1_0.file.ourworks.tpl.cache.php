<?php
/* Smarty version 3.1.31, created on 2020-05-17 12:39:11
  from "/home/ukbathroomsbyfr/public_html/templates/ourworks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec1306f573b07_34595408',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '28fa44ff68bab69501c74122f19b916a8dcc11e1' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/ourworks.tpl',
      1 => 1565865162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1306f573b07_34595408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2396792305ec1306f541348_21201969';
?>
<link rel="stylesheet" href="<?php echo @constant('root_css');?>
lightbox.min.css">
<link rel="stylesheet" href="<?php echo @constant('root_css');?>
font-awesome.min.css">
<link rel="stylesheet" href="<?php echo @constant('root_css');?>
prettyPhoto.css">

<!--Start Breadcrumbs-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
                <div class="work-header">
                     <h2>“Price Is What You Pay, Value Is What You Get”</h2> Warren Buffet</h2>
                    <p>Feel free to browse through Bathrooms By Freddy photo gallery to get the best ideas for fencing solutions including garden and commercial premises.</p>
                </div>
			</div>
		</div>
	</div>
</section>

<!--End Breadcrumbs-->

<style type="text/css">
.top-nav, .top-nav-mob {
    position: fixed;
    top: 0;
    z-index: 1040;
    width: 100%;
    background: #fff;
}
.bannerslide{
	background: #666 !important;
	overflow: hidden;
}
.gallery-thumbs .swiper-slide {
    max-height: 100px;
    overflow: hidden;
}
#page_navigation a {
    background: #f79122;
    color: white;
    border: none;
}
.folio-item{
	overflow:hidden;
}
.folio-item .item-info p {

    color: white;

}
.folio-item .item-info {
    background: rgba(0,0,0,.8);
}
.folio-date{
	position: relative;
	left: 0px;
	top: 0px;
	background-color: rgb( 247, 145, 34 );
	color:white;
	z-index: 1000;
	margin-bottom: -20px;
	padding: 5px 15px;
	font-style: italic;
}
.folio-date-img-count{
	float:right;
}
	.modal-header .close {

	    margin-top: -4%;

	    margin-right: -.4%;

	}

@media only screen and (max-width: 992px) {

   

	.modal-header .close {

	    margin-top: -6%;

	    margin-right: -.4%;

	}

}

@media only screen and (max-width: 767px) {

   

	.modal-header .close {

	    margin-top: -3%;

	    margin-right: -.4%;

	}

}

@media only screen and (max-width: 600px) {

   

	.modal-header .close {

	    margin-top: -4%;

	    margin-right: -.4%;

	}

}

</style>



<!-- Small modal -->



<!--Start Content-->

<section class="content"> 
	<div class="container">
		<!-- <div style="background-color: rgb( 247, 145, 34 );height: 45px;width: 45px;border-radius: 50%;float: right;position: relative;right: 50px;top: 45px;z-index: 1000;margin-bottom: -20px"><?php echo '/*%%SmartyNocache:2396792305ec1306f541348_21201969%%*/<?php echo \'<?=\';?>/*/%%SmartyNocache:2396792305ec1306f541348_21201969%%*/';?>
 $no_image; <?php echo '/*%%SmartyNocache:2396792305ec1306f541348_21201969%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2396792305ec1306f541348_21201969%%*/';?>
</div> -->
		<!--Begin Portfoltio Item-->
		<div class="row" id="paginate">
			<?php if (!empty($_smarty_tpl->tpl_vars['fencing_project']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fencing_project']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>	
					<div class="col-lg-3 col-md-4 col-sm-6"> 
						<?php if (empty($_smarty_tpl->tpl_vars['row']->value['top_img'])) {?>
							<a class="folio-item example-image-link mysliderdata" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
								<img src="<?php echo @constant('root_img');?>
no_img.jpeg" class="example-image">
								<div class="item-info">
									<div class="eli-width">
										<p class="truncate"><strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</strong></p>
										<p class="truncate"><em><?php echo $_smarty_tpl->tpl_vars['row']->value['suburb'];?>
</em></p>
									</div>
								</div>
							</a>
						<?php } else { ?>
							<a class="folio-item example-image-link mysliderdata" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" data-toggle="modal" data-target=".bs-example-modal-lg">
								<div class="folio-date"><?php echo $_smarty_tpl->tpl_vars['row']->value['date_added'];?>
 <span class="folio-date-img-count"><?php echo $_smarty_tpl->tpl_vars['row']->value['count_image'];?>
 photos</span></div>
								<img src="https://admin.byfreddy.io<?php echo $_smarty_tpl->tpl_vars['row']->value['top_img'];?>
" class="example-image">
								<div class="item-info">
									<div class="eli-width">
										<p class="truncate"><strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</strong></p>
										<p class="truncate"><em><?php echo $_smarty_tpl->tpl_vars['row']->value['suburb'];?>
</em></p>
									</div>
								</div>
							</a>
						<?php }?>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php }?>
		<!--End Portfoltio Item-->
	</div>
	<div class="pagination_div">
		<input type='hidden' id='current_page' class="" />
	    <input type='hidden' id='show_per_page' />
	    <div id='page_navigation'></div>
	</div>
</section>
<!--End Content-->

<?php echo '<script'; ?>
 src="{$smarty.const.root_js}lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="{$smarty.const.root_js}resources/js/swiper.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">



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

                dataType 	: 'html',

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
		$(document).ready( ()=> {
		let height = $(window).width() >= 992 ? $('.top-nav').innerHeight() : $('.top-nav-mob').innerHeight();
		$('body').css('padding-top', height);
	})
<?php echo '</script'; ?>
>



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




<?php echo '<script'; ?>
 type="text/javascript">

	

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

<?php echo '</script'; ?>
>



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
<?php }
}
