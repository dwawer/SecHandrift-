<?php /* Smarty version Smarty-3.1.21, created on 2015-06-23 19:52:02
         compiled from "D:\project\UMLproject\Smarty\templates\desTab2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187065582c4632950f3-71356972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ac6100c028ccc23bc43b008a4afc624e51fe37' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\desTab2.tpl',
      1 => 1435060319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187065582c4632950f3-71356972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5582c4632d3900_86172916',
  'variables' => 
  array (
    'name' => 0,
    'description' => 0,
    'content' => 0,
    'rid' => 0,
    'rename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5582c4632d3900_86172916')) {function content_5582c4632d3900_86172916($_smarty_tpl) {?><section id="productdesc" class="row">
    <div class="container">
      <div class="productdesc">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#description">商品详情</a>
          </li>
          <li><a href="#specification">留言</a>
          </li>
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="description">
            <h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
            <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 <br>
            <br>
            
          </div>
          <div class="tab-pane " id="specification">
            <ul class="productinfo">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
       
            </ul>
			<div class="control-group">
                     
                    </div>
			<section class="leavecomment">
                
               <form name="message" action="reply_message.php?rid=<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
" method="post">
                    <div class="control-group">
                      <label class="control-label" >回复<?php echo $_smarty_tpl->tpl_vars['rename']->value;?>
</label>
                      <div class="controls">
                        <textarea name="massagebox" id="message" style="width:700px;overflow-x:visible;overflow-y:visible;"  class="required"></textarea>
                      </div>
                    </div>
                    <div class="controls">
                      <input type="submit" name="public_message" id="submit_id" value="提交" class="btn btn-orange">
                      
                    </div>
               </form>   
              </section>
            
          </div>
          
          
        </div>
      </div>
    </div>
  </section><?php }} ?>
