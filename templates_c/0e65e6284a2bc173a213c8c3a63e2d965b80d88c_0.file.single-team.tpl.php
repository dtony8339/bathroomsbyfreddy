<?php
/* Smarty version 3.1.31, created on 2020-05-16 11:05:27
  from "/home/ukbathroomsbyfr/public_html/templates/single-team.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ebfc8f7e2f830_79982846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e65e6284a2bc173a213c8c3a63e2d965b80d88c' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/single-team.tpl',
      1 => 1552457663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebfc8f7e2f830_79982846 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ukbathroomsbyfr/public_html/libs/plugins/modifier.truncate.php';
?>
<link rel="stylesheet" href="<?php echo @constant('root_css');?>
lightbox.min.css">

<link rel="stylesheet" href="<?php echo @constant('root_css');?>
font-awesome.min.css">

<link rel="stylesheet" href="<?php echo @constant('root_css');?>
prettyPhoto.css">

<link rel="stylesheet" href="<?php echo @constant('root_css');?>
swiper.min.css">

<link rel="stylesheet" href="<?php echo @constant('root_css');?>
style.css">

	<style>
		h2.ourmate-title {
			text-align: left;
		}
		h2.ourmate-title span {
			padding: 0 15px 0 0;
		}
		.single-dp {
			width: 250px;
			height: 250px;
			margin: 10px auto;
			border-radius: 100%;
			overflow: hidden;
			background: #BFCBD5;
		}
		.single-dp img {
			width: 100%;
			height: auto;
		}
		.single-grade {
			width: 80px;
			height: 80px;
			text-align: center;
			background: #f79122;
			border-radius: 10px;
			color: white;
			font-size: 20px;
			margin: 10px;
			padding: 10px;
			font-family: 'RobotoCondensed-Light';
		}
		.single-grade span {
			font-size: 30px;
			line-height: 30px;
			font-weight: bold;
		}
		.folio-item .item-info {
			background: #000;
			border-top: 5px solid #f79122;
		}
		.folio-item .item-info p.truncate {
			text-align: center;
			color: white;
		}
		.pagination_div {
			text-align: center;
		}
		.btn-primary {
			background: #f79122;
			border: #f79122;
		}
		.single-tab-nav a {
			color: #c0c1c2;
			margin: 0 10px;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		.single-tab-nav a.active{
			color:#78838b;
		}
		.single-tab-nav {
			text-align: center;
			color: #c0c1c2;
		}
		.tab-content {
			width: 100%;
			max-width: 1170px;
			margin: 20px auto;
		}
		.single-jobs {
			text-align: center;
			border: 2px solid #ebebeb;
			padding: 50px;
			margin: 20px auto;
			max-width: 250px;
			font-family: 'Roboto';
		}
		.single-jobs-amount {
			color: #f79122;
			font-size: 40px;
			font-weight: bold;
			line-height: normal;
		}
		.single-jobs h3 {
			margin: 0;
			color: #78838b;
			text-transform: capitalize;
			font-weight: bold;
		}
		.rating {
			border: none;
			margin: auto;
			float: none;
			text-align: center;
			width: 133px;
			pointer-events: none;
		}
	</style>

<section id="single-info">
	<?php if (!empty($_smarty_tpl->tpl_vars['team']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<div class="container">
    	<h2 class="ourmate-title"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span></h2>
        <div class="row">
        	<div class="col-md-8">
            	<h4>ABOUT ME</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['row']->value['about_us'];?>
</p>
            </div>
            <div class="col-md-4">
            	<div class="single-dp">
                	<img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['image'])) {?>https://trade.byfreddy.io/photo/tradesman/_thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];
}
if (empty($_smarty_tpl->tpl_vars['row']->value['image'])) {
echo @constant('root_img');?>
profile.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
                </div>
            </div>
            <div class="col-md-12">
            	<div class="single-grade">
                	<span><?php echo $_smarty_tpl->tpl_vars['row']->value['grade'];?>
</span> GRADE
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php }?>
</section>
<section id="single-tab">
	<div class="single-tab-nav"><a data-toggle="tab" class="active" href="#mywork">My Work</a>  | <a data-toggle="tab" href="#testimonials">Testimonials</a> | <a data-toggle="tab" href="#jobs">Jobs</a></div>
    
      <div class="tab-content">
        <div id="mywork" class="tab-pane fade in active">
        	<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['work'])) {?>
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['work'], 'work');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['work']->value) {
?>
        	<div class="col-md-3">
            	<a class="folio-item example-image-link mysliderdata" data-id="<?php echo $_smarty_tpl->tpl_vars['work']->value['id'];?>
" data-toggle="modal" data-target=".bs-example-modal-lg">
                	<img src="<?php if (!empty($_smarty_tpl->tpl_vars['work']->value['top_img'])) {?>https://admin.byfreddy.io<?php echo $_smarty_tpl->tpl_vars['work']->value['top_img'];
}
if (empty($_smarty_tpl->tpl_vars['work']->value['top_img'])) {
echo @constant('root_img');?>
work1.jpg<?php }?>" class="example-image">
                    	<div class="item-info">
                        	<div class="eli-width">
                            	<p class="truncate title"><strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['work']->value['title'],40);?>
</strong></p>
                                <p class="truncate location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['work']->value['location'],40);?>
</p>
                            </div>
                        </div>
               </a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
           
            <div class="clearfix"></div>
            <div class="pagination_div">
                <input type='hidden' id='current_page' class="" />
                <input type='hidden' id='show_per_page' />
                <div id='page_navigation'></div>
            </div>
                <?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">



	var root_url="{$smarty.const.siteurl}";

	



	$(document).on("click", ".mysliderdata", function () {

		var myBookId = $(this).data('id');

		var formData = {

			'id': myBookId

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
            <?php echo '<script'; ?>
 type="text/javascript">
			  makePager = function(page){
		
					var show_per_page = 8;
		
					var number_of_items = $('#mywork .col-md-3').size();
		
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
		
					$("#mywork .col-md-3").hide();
		
					$('#current_page').val(page);
		
					$("#mywork .col-md-3").each(function (n) {
		
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
        </div>
        <div id="testimonials" class="tab-pane fade">
        	<!-- <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating1" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating1" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating1" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating1" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating1" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating2" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating2" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating2" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating2" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating2" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating3" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating3" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating3" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating3" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating3" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating4" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating4" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating4" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating4" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating4" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating5" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating5" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating5" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating5" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating5" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating6" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating6" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating6" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating6" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating6" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client-review">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating7" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating7" value="4"  checked/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating7" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating7" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating7" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <h3 class="client-name">Client Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    
                    <div class="row meta">
                        <div class="col-md-6">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
        </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6">
                            Jan. 24, 2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="pagination_div">
                <input type='hidden' id='current_page2' class="" />
                <input type='hidden' id='show_per_page2' />
                <div id='page_navigation2'></div>
            </div> -->
        </div>
        <div id="jobs" class="tab-pane fade">
        	<div class="col-sm-3">
            	<div class="single-jobs">
            		<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['totalquoted'])) {?>
            		<div class="single-jobs-amount"><?php echo $_smarty_tpl->tpl_vars['row']->value['totalquoted'];?>
</div>
        	

<?php }?>
                    <h3>Quoted</h3>
                </div>
            </div>
        	<div class="col-sm-3">
            	<div class="single-jobs">
                	<div class="single-jobs-amount">0</div>
                    <h3>Completed</h3>
                </div>
            </div>
        	<div class="col-sm-3">  
            	<div class="single-jobs">
                	<div class="single-jobs-amount">0</div>
                    <h3>Reviews</h3>
                </div>
            </div>
        	<div class="col-sm-3">  
            	<div class="single-jobs">
                	<div class="single-jobs-amount"><?php echo count($_smarty_tpl->tpl_vars['row']->value['work']);?>
</div>
                    <h3>My Work</h3>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        
      </div>
    </div>
</section>



<?php echo '<script'; ?>
>
	$(function() {                       
	  $(".single-tab-nav a").click(function() {  
	  	$(".single-tab-nav a").removeClass("active");
		$(this).addClass("active");     
	  });
	});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
makePager2 = function(page2){

			var show_per_page2 = 6;

            var number_of_items2 = $('#testimonials .client-review').size();

            var number_of_pages2 = Math.ceil(number_of_items2 / show_per_page2);

            var number_of_pages2_todisplay2 = 5;

            var navigation_html2 = '';

            var current_page2 = page2;

            var current_link2 = (number_of_pages2_todisplay2 >= current_page2 ? 1 : number_of_pages2_todisplay2 + 1);

            if (current_page2 > 1)

                current_link2 = current_page2;

            if (current_link2 != 1) navigation_html2 += "<a class='btn btn-default' href=\"javascript:first2();\">« Start&nbsp;</a>&nbsp;<a class='btn btn-default' href=\"javascript:previous2();\">« Prev&nbsp;</a>&nbsp;";

            if (current_link2 == number_of_pages2 - 1) current_link2 = current_link2 - 3;

            else if (current_link2 == number_of_pages2) current_link2 = current_link2 - 4;

            else if (current_link2 > 2) current_link2 = current_link2 - 2;

            else current_link2 = 1;

            var pages2 = number_of_pages2_todisplay2;

            while (pages2 != 0) {

                if (number_of_pages2 < current_link2) { break; }

                if (current_link2 >= 1)

                    navigation_html2 += "<a class='" + ((current_link2 == current_page2) ? "btn btn-primary " : "btn btn-default") + "' href=\"javascript:showPage2(" + current_link2 + ")\" longdesc='" + current_link2 + "'>" + (current_link2) + "</a>&nbsp;";

                current_link2++;

                pages2--;

            }

            if (number_of_pages2 > current_page2){

                navigation_html2 += "<a class='btn btn-default' href=\"javascript:next2()\">Next »</a>&nbsp;<a class='btn btn-default' href=\"javascript:last2(" + number_of_pages2 + ");\">Last »</a>";

            }

                    $('#page_navigation2').html(navigation_html2);

      }

      var pageSize2 = 6;

      showPage2 = function (page2) {

            $("#testimonials .client-review").hide();

            $('#current_page2').val(page2);

            $("#testimonials .client-review").each(function (n) {

                if (n >= pageSize2 * (page2 - 1) && n < pageSize2 * page2)

                    $(this).show();

            });

        makePager2(page2);

       }

        showPage2(1);

       next2 = function () {

            new_page2 = parseInt($('#current_page2').val()) + 1;

            showPage2(new_page2);

        }

        last2 = function (number_of_pages2) {

            new_page2 = number_of_pages2;

            $('#current_page2').val(new_page2);

            showPage2(new_page2);

        }

        first2 = function () {

            var new_page2 = "1";

            $('#current_page2').val(new_page2);

            showPage2(new_page2);    

      }

        previous2 = function () {

            new_page2 = parseInt($('#current_page2').val()) - 1;

            $('#current_page2').val(new_page2);

            showPage2(new_page2);

      }
<?php echo '</script'; ?>
>

<?php }
}
