<?php
/* Smarty version 3.1.31, created on 2020-05-17 11:17:31
  from "/home/ukbathroomsbyfr/public_html/templates/reviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec11d4b4b0563_48092695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c2951d2321fddba49f29a96699f5e1769aef89b' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/reviews.tpl',
      1 => 1565865162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec11d4b4b0563_48092695 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ukbathroomsbyfr/public_html/libs/plugins/modifier.date_format.php';
echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://paintingbyfreddy.co.uk/resources/swal/swal.css">
<?php echo '<script'; ?>
 src="https://paintingbyfreddy.co.uk/resources/swal/swal.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('status', $_GET['success']);
?>
<input type="hidden" name="success" id="success" value="<?php echo $_smarty_tpl->tpl_vars['success']->value;?>
">

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
  var status = $('#success').val();
    if(status==1){
        $('#Added').modal('show');
    }else if(status==2){
        $('.Added2').modal('show');
    }
});

    
<?php echo '</script'; ?>
>


    <style type="text/css">
         .main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #fff;
            z-index: 22222;
        }
        .top-nav {
            transition: height ease-in-out .3s;
        }
        .scrolled .top-nav {
            height: 120px;
        }
        .scrolled .top-nav img {
            max-height: 85px;
            transition: max-height ease-in-out .3s;
            -webkit-transition: max-height ease-in-out .3s;
        }
        .navbar-default {
            margin-bottom: 0;
        }
    </style>

<section class="top-reviews">
	<div class="container">
    	<a href="#">Site Appointments</a> <span class="seperator">|</span> <a href="#">Jobs</a> <span class="seperator">|</span> <a href="#">Start</a>
    </div>
</section>
<section class="review-banner">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">
				<h2>BY FREDDY REVIEWS</h2>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating10" value="5" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] == 5) {?> checked="checked" <?php }?> /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    
    				<input type="radio" id="star4half" name="rating9" value="4 and a half" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 4.5) {?> checked="checked" <?php }?>  /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating8" value="4" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 4) {?> checked="checked" <?php }?>  /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    
    				<input type="radio" id="star3half" name="rating7" value="3 and a half" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 3.5) {?> checked="checked" <?php }?>  /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating6" value="3" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 3) {?> checked="checked" <?php }?> /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    
    				<input type="radio" id="star2half" name="rating5" value="2 and a half" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 2.5) {?> checked="checked" <?php }?>  /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating4" value="2" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 2) {?> checked="checked" <?php }?>  /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    				<input type="radio" id="star1half" name="rating3" value="1 and a half" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 1.5) {?> checked="checked" <?php }?> /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating"2 value="1" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 1) {?> checked="checked" <?php }?>  /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    				<input type="radio" id="starhalf" name="rating1" value="half" <?php if ($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating'] >= 1) {?> checked="checked" <?php }?>  /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                <p><?php echo floatval($_smarty_tpl->tpl_vars['reviews_average']->value['average_rating']);?>
 Rating   |   <?php echo 1000+$_smarty_tpl->tpl_vars['reviews_gt_five_counter']->value;?>
 Reviews</p>
                <!-- <p>4.53 Rating   |   2,166 Reviews</p> -->

			</div>

		</div>

	</div>

</section>

<section class="content"> 
	<div class="container" id="clientreviews">

    <?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('i', 1);
?> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
      
		<div class="col-md-4 col-sm-6 col-xs-12">
        	<div class="client-review">
            	<fieldset class="rating">
                    <input type="radio" id="star5" name="rating5<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="5" <?php if ($_smarty_tpl->tpl_vars['row']->value['stars'] == 5) {?> checked="checked" <?php }?> /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    
    				<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating4<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="4" <?php if ($_smarty_tpl->tpl_vars['row']->value['stars'] == 4) {?> checked="checked" <?php }?>  /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    
    				<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating3<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="3" <?php if ($_smarty_tpl->tpl_vars['row']->value['stars'] == 3) {?> checked="checked" <?php }?> /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    
    				<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['stars'] == 2) {?> checked="checked" <?php }?>  /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    				<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating1<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['stars'] == 1) {?> checked="checked" <?php }?>  /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    				<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
                <h3 class="client-name"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['row']->value['comments'];?>
</p>
                
                <div class="row meta">
                    <div class="col-md-6">
                        <!-- <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
    </a> <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a> -->
                    </div>
                    <div class="col-md-6">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['added_at'],"%b %e, %Y");?>

                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
        <div class="col-xs-12 text-center">
            <div class="pagination_div">
                <input type='hidden' id='current_page' class="" />
                <input type='hidden' id='show_per_page' />
                <div id='page_navigation'></div>
            </div>
        </div>
	</div>
</section>

<style type="text/css">
    .admin-prompt-info {
        width: 100%;
        max-width: 400px;
        margin: 20px auto;
        text-align:left;
    }
    .admin-prompt {
        text-align: center;
        letter-spacing: 1px;
        font-size: 16px;
    }
    .admin-prompt h1 {
        text-transform: uppercase;
        font-size: 28px;
        font-weight: bold;
    }
    .admin-prompt-icon {
        margin: 20px auto;
        animation: breathing 1s ease-out infinite normal;
    }
    .admin-prompt .btn {
        background: #f00;
        color: white;
        font-size: 22px;
        text-transform: uppercase;
        padding: 5px 30px;
        font-weight: bold;
        margin: 20px 0;
    }
    .admin-prompt .btn.confirm {
        background: #00ae00;
    }
    .admin-prompt .modal-body {
        padding: 50px 50px 60px;
    }

    #Added .close {
    background: red;
    padding: 6px 10px;
    border-radius: 100%;
    color: white;
    opacity: .8;
    position: absolute;
    top: -10px;
    right: -10px;
}

    @keyframes breathing {
      0% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    
      25% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    
      60% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    
      100% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
        opacity: .8;
      }
    }
</style>


<div class="modal fade admin-prompt" id="Added" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1>Review Already Added</h1>
          <div class="admin-prompt-icon warning">
                <img src="https://admin.byfreddy.io/photo/success.png">
          </div>
          <p>You have already submitted your review. Thank you.</p>
        </div>
       
      </div>
      
    </div>
  </div>

  <div class="modal fade admin-prompt Added2" id="Added" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1>Information Added</h1>
          <div class="admin-prompt-icon warning">
                <img src="https://admin.byfreddy.io/photo/success.png">
          </div>
          <p>You have successfully submitted your review!</p>
        </div>
       
      </div>
      
    </div>
  </div>


<!--End Content-->


	<style>
		.content{
			background:#f2f4f5;	
			padding: 60px 0;
			margin: 0;
		}
	#myPager li a {
		border: none;
		color: #747271;
		letter-spacing: 1px;
	}
	#myPager li.active a {
		background: #f79122;
		color: white;
		border-radius: 5px;
	}
	.review-banner .rating {
		margin: auto;
		font-size: 30px;
		width: 230px;
	}
	</style>
   
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
	.btn-default {
		background: #f79122;
		color: white;
		border: none;
	}
    a.btn-default:hover {
        background-color: #fff;
        color: #f79122;
    }
    .btn-primary {
        color: #f79122;
        background-color: #fff;
        border-color: #f79122;
    }

</style>


	
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready( ()=> {
        let height = $(window).width() >= 992 ? $('.top-nav').innerHeight() : $('.top-nav-mob').innerHeight();
        $('body').css('padding-top', height);
        if($(window).width() >= 992) {
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
                var header = $('.main-header')
                if(scroll >=  50) {
                    header.addClass("scrolled");
                } else {
                    header.removeClass("scrolled");
                }
            });
        }
    })

    makePager = function(page){
        var show_per_page = 9;
        var number_of_items = $('#clientreviews .client-review').size();
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

    var pageSize = 9;
    showPage = function (page) {
            $("#clientreviews .client-review").hide();
            $('#current_page').val(page);
            $("#clientreviews .client-review").each(function (n) {
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
<?php }
}
