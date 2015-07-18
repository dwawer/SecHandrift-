<?php /* Smarty version Smarty-3.1.21, created on 2015-06-18 17:21:55
         compiled from "D:\project\UMLproject\Smarty\templates\publicMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22847558228e3e0b601-38505011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee16137b33b7b8f029c9704ee58e3960c627b71' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\publicMessage.tpl',
      1 => 1434619275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22847558228e3e0b601-38505011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_558228e413a296_87192543',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558228e413a296_87192543')) {function content_558228e413a296_87192543($_smarty_tpl) {?>               
	<form name="message" action="message.php" method="post">
			<textarea  name = "massagebox" rows="6" cols="40" id="message" name="messagee">
	       </textarea>
		   <input name="public_message" type="submit" value="发布">
    </form><?php }} ?>
