<?php
/* Smarty version 3.1.31, created on 2020-05-17 11:26:06
  from "/home/ukbathroomsbyfr/public_html/templates/news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ec11f4eb41b45_38456542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eeafd61a769c4c59810ce5e7dc42dbdc7db65b3' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/news.tpl',
      1 => 1555306716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec11f4eb41b45_38456542 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/ukbathroomsbyfr/public_html/libs/plugins/modifier.replace.php';
?>
<link rel="stylesheet" href="<?php echo @constant('root_css');?>
lightbox.min.css">

<style>



  .news img {

    width: 100%;

}

.news {

    padding: 10px;

    border-bottom: 1px solid #ccc;

    margin-bottom: 40px;

}



</style>





<!--End Top Banner-->





<!--Start Welcome-->

<section class="padding">

  <div class="container">

    <div class="row">

  		<div class="col-sm-12">

<div class="space25"></div>
<h2 class="ourmate-title"><span>News</span></h2>

  		</div>

  	</div>

<div class="space25"></div>

<!--PHP WHILE LOOP HERE-->  

  <div class="row">

            <div class="col-md-8">

       <?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

      <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['row']->value['id']);
?>

      <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['row']->value['title']);
?>

   

      <?php $_smarty_tpl->_assignInScope('short_content', $_smarty_tpl->tpl_vars['row']->value['short_content']);
?>

      <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['row']->value['image']);
?>

                <?php $_smarty_tpl->_assignInScope('author_name', $_smarty_tpl->tpl_vars['row']->value['author_name']);
?>

                <?php $_smarty_tpl->_assignInScope('blog_post_catagory', $_smarty_tpl->tpl_vars['row']->value['blog_ctgry']);
?>

         <?php $_smarty_tpl->_assignInScope('seotitle', $_smarty_tpl->tpl_vars['row']->value['title']);
?>



        <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['seotitle']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable1);
?>

        <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,' ','-');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable2);
?>

         <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,"'",'');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable3);
?>

         <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,"?",'');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable4);
?>

         <?php $_smarty_tpl->_assignInScope('linktitle', $_smarty_tpl->tpl_vars['row']->value['linktitle']);
?>



        <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['linktitle']->value);
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('linktitle', $_prefixVariable5);
?>

        <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['linktitle']->value,' ','-');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('linktitle', $_prefixVariable6);
?>

  <div class="col-md-6">

              <div class="ourwork">

                    <div class="">

                    <div class="image">

                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value)) {?>

                              <img src="https://admin.byfreddy.io/photo/blog/post_upload/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">

                            <?php } else { ?>

                              <img src="<?php echo @constant('root_img');?>
no_img.jpeg">

                            <?php }?>

                            <div class="overlay">

                              <a href="<?php echo @constant('siteurl');
echo $_smarty_tpl->tpl_vars['seotitle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['linktitle']->value;?>
.html">

                                  <i class="fa fa-link" aria-hidden="true"></i>

                                </a>

                                <a href="<?php echo @constant('root_img');?>
no_img.jpeg" data-lightbox="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">

                                    <i class="fa fa-search" aria-hidden="true"></i>

                                </a>

                          </div>

                    </div>

                        <div class="card-block news">

                          <p class="card-author">by <?php echo $_smarty_tpl->tpl_vars['author_name']->value;?>
</p>

                            <a href="<?php echo @constant('siteurl');
echo $_smarty_tpl->tpl_vars['seotitle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['linktitle']->value;?>
.html"><h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></a>

                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['short_content']->value;?>
</p>

                            <div class="row">

                              <div class="col-sm-9"><hr /></div>

                                <div class="col-sm-3"><p class="no-comments"><i class="fa fa-comment" aria-hidden="true"></i> 0</p></div>

                            </div>

                            <!--<a class="btn btn-lg btn-orange" href="<?php echo @constant('siteurl');?>
news_details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Read More</a>-->

                            <small><?php echo $_smarty_tpl->tpl_vars['blog_post_catagory']->value;?>
</small>

                        </div>

                    </div>

                </div>

            </div>

    <!--<div class="row news">

      <div class="col-sm-3">

        <img src="https://admin.professionalfreddy.com/photo/blog/post_upload/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="newslistimg">

      </div>

      <div class="col-sm-9">

        <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

        <p><?php echo $_smarty_tpl->tpl_vars['short_content']->value;?>
. . .</p>

        <p><a href="<?php echo @constant('siteurl');?>
news/<?php echo $_smarty_tpl->tpl_vars['seotitle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Continue reading >></a></p>

      </div>

    </div>-->

        

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


            <?php } else { ?>

            <h3 class="text-center">No Blog found</h3>

            <?php }?>

      </div>

          <div class="col-md-4">

              <div class="latest-post">

                  <div class="row">

                        <div class="col-md-12">

                          <h4>MY MATES POSTS</h4>

                        </div>

         

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_blog']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

     <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['row']->value['id']);
?>

        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['row']->value['title']);
?>

        <?php $_smarty_tpl->_assignInScope('short_content', $_smarty_tpl->tpl_vars['row']->value['short_content']);
?>

        <?php $_smarty_tpl->_assignInScope('Content', $_smarty_tpl->tpl_vars['row']->value['Content']);
?>

        <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['row']->value['image']);
?>

        <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['row']->value['status']);
?>

        <?php $_smarty_tpl->_assignInScope('category_id', $_smarty_tpl->tpl_vars['row']->value['category_id']);
?>

                    <?php $_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['row']->value['blog_ctgry']);
?>



        <?php $_smarty_tpl->_assignInScope('seotitle', $_smarty_tpl->tpl_vars['row']->value['title']);
?>



        <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['seotitle']->value);
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable7);
?>

        <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,' ','-');
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable8);
?>

         <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,"'",'');
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable9);
?>

         <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['seotitle']->value,"?",'');
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('seotitle', $_prefixVariable10);
?>
         <?php $_smarty_tpl->_assignInScope('extsiteurl', $_smarty_tpl->tpl_vars['row']->value['siteurl']);
?>
   <?php $_smarty_tpl->_assignInScope('linktitle', $_smarty_tpl->tpl_vars['row']->value['linktitle']);
?>



        <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['linktitle']->value);
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_assignInScope('linktitle', $_prefixVariable11);
?>

        <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['linktitle']->value,' ','-');
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_assignInScope('linktitle', $_prefixVariable12);
?>


                <div class="col-md-12">

                          <div class="col-sm-4 align-center">

                                <div class="lates-thumb">

                                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value)) {?>

                                            <img src="https://admin.byfreddy.io/photo/blog/post_upload/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">

                                        <?php } else { ?>

                                            <img src="https://paintingbyfreddy.co.uk/resources/img/no_img.jpeg">

                                        <?php }?>

                                        <div class="overlay">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['extsiteurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['seotitle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['linktitle']->value;?>
.html" target="_blank">

                                                <i class="fa fa-link" aria-hidden="true"></i>

                                            </a>

                                        </div>

                                     </div>

                            </div>

                            <div class="col-sm-8">

                              <h4 class="latest-category"><?php echo $_smarty_tpl->tpl_vars['catagory']->value;?>
</h4>

                              <a href="<?php echo $_smarty_tpl->tpl_vars['extsiteurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['seotitle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['linktitle']->value;?>
.html" target="_blank"><h3 class="latest-title"><?php echo ucfirst($_smarty_tpl->tpl_vars['title']->value);?>
</h3></a>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <hr />

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                    </div>

                </div>

            </div>

    </div>

<!--PHP WHILE LOOP END HERE-->  

  

 <!--Pagination start here-->  

 

<!--  <div class="row">

      <div class="col-sm-12">

        <ul class="pagination">

          <li><a href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>

          <li class="active"><a href="#">1</a></li>

          <li><a href="#">2</a></li>

          <li><a href="#">3</a></li>

          <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

        </ul>

      </div>

    </div>-->

 

 <!--pagination END here-->

  </div>

</section>

<!--End Welcome-->

<?php echo '<script'; ?>
 src="<?php echo @constant('root_js');?>
lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>

<style>
.no-comments a {
    color: white;
}
.overlay {

    transition: .5s ease;

    opacity: 0;

    position: absolute;

    left: 50%;

    top: 80px;

    transform: translate(-50%, -50%);

    -ms-transform: translate(-50%, -50%);

    text-align: center;

    width: 100%;

    height: 120%;

}



.lates-thumb .overlay {

    transition: .5s ease;

    opacity: 0;

    position: absolute;

    left: 50%;

    top: 40px;

    transform: translate(-50%, -50%);

    -ms-transform: translate(-50%, -50%);

    text-align: center;

    width: 100%;

    height: 100%;

    padding-bottom: 30px;

}

.image:hover .overlay, .lates-thumb:hover .overlay {

  opacity: 1;

}

.card-block {

    text-align: left;

}


.news a h4.card-title {
    color: #7c7b7b;
    font-family: 'PT Sans Narrow', sans-serif !important;
}
</style>

<?php echo '<script'; ?>
 type="text/javascript">

$(function(){

  $(".card-title").each(function(i){

    len=$(this).text().length;

    if(len>25)

    {

      $(this).text($(this).text().substr(0,25)+'...');

    }

  });

  $(".card-text").each(function(i){

    len2=$(this).text().length;

    if(len2>100)

    {

      $(this).text($(this).text().substr(0,100)+'...');

    }

  });

});

<?php echo '</script'; ?>
><?php }
}
