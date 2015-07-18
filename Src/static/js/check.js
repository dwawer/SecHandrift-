// JavaScript Document
function chkname(form){
	if(form.name.value==""){
		name1.innerHTML="<font color=#FF0066>请输入用户名！</font>";
	}else if(form.name.value.length>255){
		name1.innerHTML="<font color=#FF0066>用户名长度应小于255！</font>";  
	}else{
		//name1.innerHTML="链接reg_chk前";
		var user = form.name.value;
		var url = getRootPath() + "/reg_chk.php?user=" + user;
		var xmlhttp = new XMLHttpRequest();
		name1.innerHTML=url;
		xmlhttp.open("GET",url,true);
		//name1.innerHTML="链接reg_chk之后";
		xmlhttp.onreadystatechange = function() {
					name1.innerHTML="调用ffution";
		    if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == 'UsernameRepeat'){
					name1.innerHTML="<font color=#FF0066>用户名被占用！</font>";
					return false;
				}else if(msg == 'UsernameOK'){
					name1.innerHTML="<font color=green>恭喜您，可以注册!</font>";
					form.c_name.value = "yes";
					
				}else{
					name1.innerHTML="<font color=green>"+msg+"</font>";
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkinput(form){
	if(form.name.value==""){
		form.name.focus();
		return false;
	}
	
	if(form.pwd1.value==""){
		form.pwd1.focus();
		return false;
	}
	if(form.pwd2.value==""){
		form.pwd2.focus();
		return false;
	}
	if(form.pwd2.value!=form.pwd1.value){
		form.pwd1.select();
		return false;
	}
	if(form.pwd1.value.length<6){
		form.pwd1.select();
		return false;
	}
	if(form.email.value==""){
		form.email.focus();
		return false;
	}
	if(isNaN(form.email.value)){
		form.email.select();
		return false;
	}
	if(isNaN(form.qq.value)){
		alert("QQ号码只能由数字组成！");
		form.qq.select();
		return false;
	}
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		form.email.select();
		return false;
	}
}

function chkinput2(form){
	if(form.objname.value==""){
		form.objname.focus();
		return false;
	}
	
	if(form.description.value==""){
		form.description.focus();
		return false;
	}
	
	if(form.description.value.length<60){
		form.description.select();
		return false;
	}
	
	if(form.type.value==""){
		form.type.focus();
		return false;
	}
	
	if(isNaN(form.classes.value)){
		form.classes.focus();
		return false;
	}
	if(isNaN(form.qq.value)){
		alert("QQ号码只能由数字组成！");
		form.qq.select();
		return false;
	}
}

function chkpwd1(form)
{
	if(form.pwd1.value==""){
		pwd11.innerHTML="<font color=#FF0066>密码格式错误！</font>";  
	}else if(form.pwd1.value.length<6){
		pwd11.innerHTML="<font color=#FF0066>注册密码长度应大于6位！</font>";  
	}else if(form.pwd1.value.length>255){
		pwd11.innerHTML="<font color=#FF0066>注册密码长度应小于255位！</font>";  
	}else{
		pwd11.innerHTML="<font color=green>输入正确</font>";  
	}
}
function chkpwd2(form){
	if(form.pwd2.value==""){
		pwd21.innerHTML="<font color=#FF0066>请输入确认密码！</font>";  
	}else if(form.pwd2.value.length<6){
		pwd21.innerHTML="<font color=#FF0066>确认密码长度应大于6位！</font>";  
	}else if(form.pwd1.value!=form.pwd2.value){
		pwd21.innerHTML="<font color=#FF0066>注册密码与确认密码不同！</font>"; 
	}else{
		pwd21.innerHTML="<font color=green>输入正确</font>";  
	}
}
function chkquestion(form){
	if(form.question.value==""){
		question1.innerHTML="<font color=#FF0066>请填写密保问题！</font>";    
	}else{
		question1.innerHTML="<font color=green>输入正确</font>";  
	}
}

function chktel(form){
   
    if(isNaN(form.tel.value)){
		tel1.innerHTML="<font color=#FF0066>联系电话只能由数字组成！</font>"; 
	}else if(form.tel.value.length<8 || form.tel.value.length>11 || form.tel.value.length == 6){
		tel1.innerHTML="<font color=#FF0066>联系电话位数不正确！</font>";
	}else{
		tel1.innerHTML="<font color=green>输入正确</font>";
	}
}
function chkqq(form){
	if(form.qq.value != "" && isNaN(form.qq.value)){
		qq1.innerHTML="<font color=#FF0066>联系QQ只能由数字组成！</font>"; 
	}else{
		qq1.innerHTML="<font color=green>输入正确</font>";
	}
}
function chkemail(form){
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if(form.email.value == ""){
		email1.innerHTML="<font color=#FF0066>请输入邮箱地址</font>"; 
	}else if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		email1.innerHTML="<font color=#FF0066>请输入正确的E-mail地址！</font>"; 
	}else{
		email1.innerHTML="<font color=green>输入正确</font>";
	}
}

function chkobjname(form)
{
	if(form.objname.value==""){
		inputobjname.innerHTML="<font color=#FF0066>未输入商品名称</font>";  
	}else{
		inputobjname.innerHTML="<font color=green>输入正确</font>";  
	}
}

function chkdescription(form)
{
	if(form.inputdescripion.value==""){
		inputdescripion.innerHTML="<font color=#FF0066>输入描述不为空</font>";  
	}else if(form.pwd1.value.length<60){
		inputdescripion.innerHTML="<font color=#FF0066>描述不少于30字</font>";  
	}else{
		inputdescripion.innerHTML="<font color=green>输入正确</font>";  
	}
}

function getRootPath(){
    var curWwwPath=window.document.location.href;
    var pathName=window.document.location.pathname;
    var pos=curWwwPath.indexOf(pathName);
    var localhostPaht=curWwwPath.substring(0,pos);
    var projectName=pathName.substring(0,pathName.substr(1).indexOf('/')+1);
    return(localhostPaht+projectName);
}

var objname = "";
function savePage(form)
{
   // objname = form.objname.value;
	//Session['objname'] = form.objname.value;
	alert("123");
	//alert("Session['objname']");
}
function setPage(form)
{
	form.objname.value = Session['objname'] ;
}