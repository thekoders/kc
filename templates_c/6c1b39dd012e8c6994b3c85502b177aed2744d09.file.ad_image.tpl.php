<?php /* Smarty version Smarty-3.0.8, created on 2017-04-04 10:43:12
         compiled from "./templates/ad/ad_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96741393458e32b68cf5937-28892829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1b39dd012e8c6994b3c85502b177aed2744d09' => 
    array (
      0 => './templates/ad/ad_image.tpl',
      1 => 1491282790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96741393458e32b68cf5937-28892829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/news_paper/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<div id="contents">
    <?php if ($_smarty_tpl->getVariable('error_report')->value=='on'){?>
        <div class="error_report">
            <strong><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</strong>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('warning_report')->value=='on'){?>
        <div class="warning_report" style="margin-bottom: 50px;">
            <strong><?php echo $_smarty_tpl->getVariable('warning_message')->value;?>
</strong>
        </div>
    <?php }?>


<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  Advertisements
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_image($_SESSION['id']);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>

</div>

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>