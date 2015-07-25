<?php /* Smarty version Smarty-3.1.21, created on 2015-07-24 16:45:50
         compiled from "D:\project\UMLproject\Smarty\templates\desTab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2386255815ec6cb2d76-83115481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da75d7f8f73075a5c0def9d72d18187b43e23c15' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\desTab.tpl',
      1 => 1437727497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2386255815ec6cb2d76-83115481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55815ec6ce59f7_21376250',
  'variables' => 
  array (
    'name' => 0,
    'description' => 0,
    'content' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55815ec6ce59f7_21376250')) {function content_55815ec6ce59f7_21376250($_smarty_tpl) {?><section id="productdesc" class="row">
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
                
               <form name="message" action="messageSubmit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
                    <div class="control-group">
                      <label class="control-label" >我要评论</label>
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
