<?php /* Smarty version Smarty-3.1.21, created on 2015-06-24 14:54:58
         compiled from "D:\project\UMLproject\Smarty\templates\newlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1679655813c05e56601-27491028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7464807998b0ae990859f1b8e3201b5bbca40a9e' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\newlist.tpl',
      1 => 1435128896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1679655813c05e56601-27491028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55813c05e8d114_38395050',
  'variables' => 
  array (
    'picture1' => 0,
    'id1' => 0,
    'name1' => 0,
    'class1' => 0,
    'price1' => 0,
    'picture2' => 0,
    'id2' => 0,
    'name2' => 0,
    'class2' => 0,
    'price2' => 0,
    'picture3' => 0,
    'id3' => 0,
    'name3' => 0,
    'class3' => 0,
    'price3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55813c05e8d114_38395050')) {function content_55813c05e8d114_38395050($_smarty_tpl) {?>        <div class="sidewidt">
            <h2 class="heading2"><span>最新商品</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['picture1']->value;?>
" alt="product" title="product">
                <a class="productname" href="showObject.php?id=<?php echo $_smarty_tpl->tpl_vars['id1']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</a>
                <span class="procategory"><?php echo $_smarty_tpl->tpl_vars['class1']->value;?>
</span>
                <span class="price">￥<?php echo $_smarty_tpl->tpl_vars['price1']->value;?>
</span>
              </li>
              <li>
                <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['picture2']->value;?>
" alt="product" title="product">
                <a class="productname" href="showObject.php?id=<?php echo $_smarty_tpl->tpl_vars['id2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</a>
                <span class="procategory"><?php echo $_smarty_tpl->tpl_vars['class2']->value;?>
</span>
                <span class="price">￥<?php echo $_smarty_tpl->tpl_vars['price2']->value;?>
</span>
              </li>
              <li>
                <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['picture3']->value;?>
" alt="product" title="product">
                <a class="productname" href="showObject.php?id=<?php echo $_smarty_tpl->tpl_vars['id3']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</a>
                <span class="procategory"><?php echo $_smarty_tpl->tpl_vars['class3']->value;?>
</span>
                <span class="price">￥<?php echo $_smarty_tpl->tpl_vars['price3']->value;?>
</span>
              </li>
            </ul>
          </div><?php }} ?>
