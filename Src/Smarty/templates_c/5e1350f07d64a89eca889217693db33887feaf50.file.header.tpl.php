<?php /* Smarty version Smarty-3.1.21, created on 2015-07-25 11:08:17
         compiled from "D:\project\UMLproject\Smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680755813555621016-12072627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e1350f07d64a89eca889217693db33887feaf50' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\header.tpl',
      1 => 1437793691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680755813555621016-12072627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55813555657b13_48061083',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55813555657b13_48061083')) {function content_55813555657b13_48061083($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sechandrift</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Crete+Round' rel='stylesheet' type='text/css'><link href="static/css/bootstrap.css" rel="stylesheet">
<link href="static/css/bootstrap-responsive.css" rel="stylesheet">
<link href="static/css/style.css" rel="stylesheet">
<link href="static/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="static/css/jquery.fancybox.css" rel="stylesheet">
<link href="static/css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<!-- Header Start -->
<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="home.php" class="logo pull-left"><img src="static/img/bluelogo.jpg" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="home.php">主页</a>
                  </li>
                  <li><a class="myaccount" href="userCenter.php">个人中心</a>
                  </li>
				  <li><a class="checkout" href="userLogout.php">登出</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
          <div class="pull-right">
			<form action="objectSearch.php" class="form-search top-search" method="post">
               <input name="searchbox" type="text" placeholder="请输入关键字" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
     <div class="headerdetails">
      <div class="pull-left">
        
      </div>
      <div class="pull-right">
        
      </div>
    </div>
    <div id="categorymenu">
      <nav class="subnav">
        <ul class="nav-pills categorymenu">
          <li><a class="active"  href="home.php">主页</a></li>
          <li><a href="objectSearchByType.php?type=出售">二手</a></li>
          <li><a href="objectSearchByType.php?type=漂流">漂流</a></li>
          <li><a href="objectSearchByClass.php?class=图书">图书</a></li>
          <li><a href="objectSearchByClass.php?class=女装">女装</a></li>
          <li><a href="objectSearchByClass.php?class=男装">男装</a></li>  
		  <li><a href="objectSearchByClass.php?class=单车">单车</a></li>		  
          <li><a href="objectSearchByClass.php?class=数码">数码</a></li>
		  <li><a href="objectSearchByClass.php?class=日用">家居日用</a></li>
		  <li><a href="objectSearchByClass.php?class=家电">家用电器</a></li>
        </ul>
      </nav>
    </div>
   </div>
</header><?php }} ?>
