<?php /* Smarty version Smarty-3.1.21, created on 2015-06-23 21:43:47
         compiled from "D:\project\UMLproject\Smarty\templates\userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43055581e41e5fdd13-87334333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ac422bed17c4658e6dbe90d8af4959eb6201a8' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\userinfo.tpl',
      1 => 1435067024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43055581e41e5fdd13-87334333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5581e41e6309a9_48731864',
  'variables' => 
  array (
    'user' => 0,
    'email' => 0,
    'qq' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581e41e6309a9_48731864')) {function content_5581e41e6309a9_48731864($_smarty_tpl) {?>          <div class="sidewidt">
            <h2 class="heading2">个人信息</h2>
              <ul class="unstyled listoption5">
                <li>用户名:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</li>
                <li>邮箱:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</li>
                <li>QQ:<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
</li>
                <li>电话:<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</li>
                </br>
				<a href="editUser.php" class="btn btn-info">修改个人信息</a></br></br>
				<a href="publishObject.php" class="btn btn-info">发布新的商品</a>
                
              </ul>
          </div><?php }} ?>
