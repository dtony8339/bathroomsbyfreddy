<?php
/* Smarty version 3.1.31, created on 2020-05-14 19:12:51
  from "/home/ukbathroomsbyfr/public_html/templates/news_details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ebd9833127206_90238551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d6272fb96df48fba115d3d1b9c7b1908121237' => 
    array (
      0 => '/home/ukbathroomsbyfr/public_html/templates/news_details.tpl',
      1 => 1552457663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebd9833127206_90238551 (Smarty_Internal_Template $_smarty_tpl) {
?>

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

<section class="top_section">
  <div class="play_button">
    <!--<img data-toggle="modal" data-target="#video01" src="https://professionalfreddy.com/img/play-video-img.png">-->
  </div>
</section>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
<!--Start Content-->
<section class="padding">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-12">
  			<h1><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h1>
  		</div>
  	
    
      <div class="col-sm-12">
        <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['image'])) {?>
        <img src="https://admin.byfreddy.io/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" class="img-left">
        <?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['row']->value['Content'];?>
</p>
      </div>
    </div>
  </div>
</section>
<!--End Content-->
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
