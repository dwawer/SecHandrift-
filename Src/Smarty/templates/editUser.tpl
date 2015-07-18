<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/check.js"></script>
<body onLoad="javascript:register.name.focus()">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 <form id="register" name="register" action="editUser.php" method="post" onSubmit="return chkinput(this)">
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2>更改{$user}的个人信息</h2></td>
    </tr>
    <tr>
      <td height="40"><div align="right">密码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="pwd1" name="pwd1" type="password" onBlur="javascript:chkpwd1(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td width="152"><div id="pwd11"><font color="#999999">请输入密码</font></div></td>
    </tr>
    <tr>
      <td height="40"><div align="right">确认密码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="pwd2" name="pwd2" type="password" onBlur=" javascript:chkpwd2(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td height="40"><div id="pwd21"><font color="#999999">确认密码</font></div></td>
    </tr>
	<tr>
      <td height="40"><div align="right">E-mail：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="email" type="text" name="email" value={$email} onBlur="javascript:chkemail(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="#FFC0CB">*</font></td>
      <td height="40"><div id="email1"><font color="#999999">请输入Email</font></div></td>
    </tr>
	
   
    <tr>
      <td height="40"><div align="right">移动电话：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="tel" type="text" name="tel" value={$telephone} onBlur="javascript:chktel(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="40"><div id="tel1"><font color="#999999">请输入移动电话</font></div></td>
    </tr>
    
    <tr>
      <td height="40"><div align="right">QQ号码：</div></td>
      <td height="40" colspan="3">&nbsp;
          <input id="qq" type="text" name="qq" value={$QQ}  onBlur="javascript:chkqq(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="40"><div id="qq1"><font color="#999999">请输入QQ号</font></div></td>
    </tr>
   
    <tr>
      <td height="40" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit"  class="btn btn-orange" name="submit" value="提交"/>
        &nbsp;&nbsp;
        <input type="reset"  class="btn btn-orange"  value="重写" /></td>
      <td height="40" colspan="3"><div style="color:#FFC0CB">带“*”号的为必填项</div></td>
    </tr>
  </form>
</table>
