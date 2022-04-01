<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
<link rel="dns-prefetch" href="https://in1gotech.com">
<meta charset="<?=bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Ferl John D. Javier">
<meta name="description" content="<?=bloginfo('description');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=bloginfo('name');?> | <?= is_front_page()? bloginfo('description'): wp_title('');?></title>
<!-- <link rel="preconnect" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" as="script">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<link rel='preconnect' href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap' as='style' onload="this.onload=null;this.rel='stylesheet'" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"></noscript>
	
<link rel="preconnect" href="https://use.fontawesome.com">
<link rel='preload' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' as='style' onload="this.onload=null;this.rel='stylesheet'" integrity="sha384DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<noscript><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"></noscript>


<link rel="preconnect" href="https://maxcdn.bootstrapcdn.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" media="print"         onload="if(media!=='all')media='all'">
	



<link rel="preconnect" href="https://www.gstatic.com">	
<link rel="preconnect" href="https://fonts.gstatic.com">	
<link rel="preconnect" href="https://www.google-analytics.com">
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://www.facebook.com">
<link rel="preconnect" href="https://web.facebook.com">
<link rel="preconnect" href="https://static.xx.fbcdn.net">
<link rel="preconnect" href="https://connect.facebook.net">
<?php wp_head();?>
</head>
<body>
<div id="wptime-plugin-preloader"></div>
<header class="header-active">
	<nav id="navbar">
  <ul class="menu">
    <li class="logo" style=" height: 58px; padding-left:60px;" ><a href="<?=bloginfo('url');?>" style ="padding:0px;">
          <img alt=""src="<?=bloginfo('url');?>/wp-content/themes/wp-in1go/img/1go-logo.svg">
      </a></li>
    <li class="item has-submenu" id="divi"><a  rel="nofollow" tabindex="0" onClick='(href="<?=bloginfo('url');?>/solutions/")'  id="div1" onclick="return true;">SOLUTIONS</a>
      <ul class="submenu">
       <li class="sub-item"><a href="<?=bloginfo('url');?>/logistics/">LOGISTICS</a></li>
        <li class="sub-item"><a href="<?=bloginfo('url');?>/sales-and-distribution/">SALES & DISTRIBUTION</a></li>
        <li class="sub-item"><a href="<?=bloginfo('url');?>/warehouse-and-inventory-management/">WAREHOUSE & INVENTORY MANAGEMENT</a></li>
        <li class="sub-item"><a href="<?=bloginfo('url');?>/marketing-services/">MARKETING SERVICES</a></li>
		    <li class="sub-item"><a href="<?=bloginfo('url');?>/it-outsourcing/">IT OUTSOURCING</a></li>
	    	<li class="sub-item"><a href="<?=bloginfo('url');?>/professional-services/">PROFESSIONAL SERVICES</a></li>
		  <li class="sub-item"><a href="<?=bloginfo('url');?>">HRIS</a></li>
      </ul>
    </li>
    <li class="item"><a href="<?=bloginfo('url');?>/partners/">PARTNERS</a></li>
    <li class="item"><a href="<?=bloginfo('url');?>/patrons/">CLIENTS</a></li>
  	<li class="item"><a href="<?=bloginfo('url');?>/blogs/">BLOG</a></li>
    <li class="item"><a href="<?=bloginfo('url');?>/careers/">CAREERS</a></li>
	  <li class="item"><a href="<?=bloginfo('url');?>/about-us/">ABOUT US</a></li>
    <li class="item" id="contactUS"><a href="<?=bloginfo('url');?>/message-us/">CONTACT US</a></li>
    <li class="toggle" ><a  rel="nofollow" href="#" onclick="return false;"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
</header>