<?php /* Smarty version Smarty-3.1.21, created on 2015-06-18 05:13:08
         compiled from "D:\project\UMLproject\Smarty\templates\userCenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305945581e2e40f0ee3-22621855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f49df57fe14cbd1cb4d2dbca6446b6fbf3cc21d' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\userCenter.tpl',
      1 => 1434563352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305945581e2e40f0ee3-22621855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5581e2e41279f9_18803776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581e2e41279f9_18803776')) {function content_5581e2e41279f9_18803776($_smarty_tpl) {?><?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/check.js"><?php echo '</script'; ?>
>
<body onLoad="javascript:register.name.focus()">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 <form id="register" name="register" action="reg_chk.php" method="post" onSubmit="return chkinput(this)">
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2>新用户注册</h2></td>
    </tr>
    <tr>
      <td width="81" height="40"><div align="right">用户名：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="name" name="name" type="text" onBlur="javascript:chkname(register)"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" /><input id="c_name" name="c_anme" type="hidden" value="not" >&nbsp;<font color="#FFC0CB">*</font></td>
      <td height="40"><div id="name1"><font color="#999999">请输入用户名</font></div></td>
    </tr>
    <tr>
      <td height="40"><div align="right">注册密码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="pwd1" name="pwd1" type="password"  onBlur="javascript:chkpwd1(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td width="152"><div id="pwd11"><font color="#999999">请输入密码</font></div></td>
    </tr>
    <tr>
      <td height="40"><div align="right">确认密码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="pwd2" name="pwd2" type="password" onBlur=" javascript:chkpwd2(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td height="40"><div id="pwd21"><font color="#999999">确认密码</font></div></td>
    </tr>
   
    <tr>
      <td height="40"><div align="right">移动电话：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="tel" type="text" name="tel" onBlur="javascript:chktel(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td height="40"><div id="tel1"><font color="#999999">请输入移动电话</font></div></td>
    </tr>
    
    <tr>
      <td height="40"><div align="right">QQ号码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="qq" type="text" name="qq" onBlur="javascript:chkqq(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="40"><div id="qq1"><font color="#999999">请输入QQ号</font></div></td>
    </tr>
    <tr>
      <td height="40"><div align="right">E-mail：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="email" type="text" name="email" onBlur="javascript:chkemail(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="40"><div id="email1"><font color="#999999">请输入Email</font></div></td>
    </tr>
   
    <tr>
      <td height="40" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit"  class="btn btn-orange" onSubmit="return chkinput(this)" value="提交"/>
        &nbsp;&nbsp;
        <input type="reset"  class="btn btn-orange"  value="重写" /></td>
      <td height="40" colspan="3"><div style="color:#FFC0CB">带“*”号的为必填项</div></td>
    </tr>
  </form>
</table>
<?php }} ?>
