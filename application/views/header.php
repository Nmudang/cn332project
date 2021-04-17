<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="en-US">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Clothes Collection</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?=base_url('public/layout/styles/layout.css');?>" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('public/images/demo/backgrounds/01.png');"> 
<!-- ################################################################################################ -->
	<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
		<div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
			<li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
			<li><i class="far fa-envelope rgtspace-5"></i> clothes@collection.com</li>
        </ul>
        <!-- ################################################################################################ -->
		</div>
		<div class="fl_right"> 
			<!-- ################################################################################################ -->
			<ul class="nospace">
				<li><a href="."><i class="fas fa-home"></i></a></li>
				<li><a href="." title="Help Centre"><i class="far fa-life-ring"></i></a></li>
				<li><a href="." title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
				<li><a href="." title="Sign Up"><i class="fas fa-edit"></i></a></li>
				<li id="searchform">
					<div>
						<form action="#" method="post">
							<fieldset>
								<legend>Quick Search:</legend>
								<input type="text" placeholder="Enter search term&hellip;">
								<button type="submit"><i class="fas fa-search"></i></button>
							</fieldset>
						</form>
					</div>
				</li>
			</ul>
			<!-- ################################################################################################ -->
		</div>
    </div>
	</div>
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div class="wrapper row1">
	<header id="header" class="hoc clear">
		<div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href=".">Clothes Collection</a></h1>
        <!-- ################################################################################################ -->
		</div>
		<nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
			<li class="active"><a href=".">Home</a></li>
			<li><a href="#">Account</a></li>
			<li><a class="drop" href="#">Shop</a>
				<ul>
					<li><a href="<?=base_url('main/product');?>">Shirts</a></li>
					<li><a href="<?=base_url('main/product');?>">Trousers</a></li>
					<li><a href="<?=base_url('main/product');?>">Dresses</a></li>
					<li><a href="<?=base_url('main/product');?>">Bags</a></li>
					<li><a href="<?=base_url('main/product');?>">Shoes</a></li>
					<li><a href="<?=base_url('main/product');?>">Accessories</a></li>
				</ul>
        	</li>
			<li><a href="#">Favorites</a></li>
			<li><a href="#">Cart</a></li>
			<li><a class="drop" href="#">MyCollection</a>
				<ul>
					<li><a href="#">Beach</a></li>
					<li><a class="drop" href="#">Earth Tone</a>
						<ul>
							<li><a href="#">Shirts</a></li>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">Bags</a></li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
        <!-- ################################################################################################ -->
		</nav>
    </header>
	</div>
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
		<h3 class="heading">Clothes Collection by you</h3>
		<p>Design your life, create by yourself.</p>
		<footer>
        <ul class="nospace inline pushright">
			<li><a class="btn" href="#">Account</a></li>
			<li><a class="btn inverse" href="#">My collection</a></li>
        </ul>
		</footer>
	</article>
    <!-- ################################################################################################ -->
	</div>
	<!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->