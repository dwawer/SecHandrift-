<?php /* Smarty version Smarty-3.1.21, created on 2015-06-24 17:05:53
         compiled from "D:\project\UMLproject\Smarty\templates\object.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2924455815b658ff9e2-80128100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa111fa6b64ae0c98e2fba629d465a58007aa07' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\object.tpl',
      1 => 1435136751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2924455815b658ff9e2-80128100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55815b6593e1e9_55984042',
  'variables' => 
  array (
    'path' => 0,
    'name' => 0,
    'price' => 0,
    'publisher' => 0,
    'telephone' => 0,
    'email' => 0,
    'QQ' => 0,
    'onshelfdisplay' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55815b6593e1e9_55984042')) {function content_55815b6593e1e9_55984042($_smarty_tpl) {?> <!-- Left Image-->
        <div class="span4">
          <ul class="thumbnails mainimage">
            <li class="span4">
			    </br></br>
                <img  src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" alt="" title="">
            </li>
          </ul>
        </div>
        <!-- Right Details-->
        <div class="span5">
          <div class="row">
            <div class="span5">
              <h1 class="productname"><span class="bgnone"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>￥<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</div>
                
						<div class="model-block">
						<p>
							<span>联系人： </span><?php echo $_smarty_tpl->tpl_vars['publisher']->value;?>

							</p>
						</div>
						<div class="contactm">							
							<p>
							<span>电话： </span><?php echo $_smarty_tpl->tpl_vars['telephone']->value;?>

							</p>
							<p>
							<span>邮箱： </span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>

							</p>
							<p>
							<span>QQ： </span><?php echo $_smarty_tpl->tpl_vars['QQ']->value;?>

							</p>
						</div>
						<div class="contactbtn">														
					    <?php echo $_smarty_tpl->tpl_vars['onshelfdisplay']->value;?>

						</div>
                <div class="clear"></div>
                <div class="control-group">
                  
                </div>
              </div>
              
            </div>
          </div>
        </div><?php }} ?>
