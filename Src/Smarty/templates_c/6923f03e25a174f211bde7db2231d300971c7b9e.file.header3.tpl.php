<?php /* Smarty version Smarty-3.1.21, created on 2015-07-25 11:49:14
         compiled from "D:\project\UMLproject\Smarty\templates\header3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2126055a8dc89c0d933-23326422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6923f03e25a174f211bde7db2231d300971c7b9e' => 
    array (
      0 => 'D:\\project\\UMLproject\\Smarty\\templates\\header3.tpl',
      1 => 1437793686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126055a8dc89c0d933-23326422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a8dc89c4c143_57559637',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a8dc89c4c143_57559637')) {function content_55a8dc89c4c143_57559637($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sechandrift</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link  rel='stylesheet' type='text/css'>
<linkrel='stylesheet' type='text/css'>
<linkrel='stylesheet' type='text/css'><link href="static/css/bootstrap.css" rel="stylesheet">
<link href="static/css/bootstrap-responsive.css" rel="stylesheet">
<link href="static/css/style.css" rel="stylesheet">
<link href="static/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="static/css/jquery.fancybox.css" rel="stylesheet">
<link href="static/css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
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
                  <li><a class="myaccount" href="index.php">登陆</a>
                  </li>
				  <li><a class="checkout" href="userRegister.php">注册</a>
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
</header><?php }} ?>
