//each template will call the 
<!DOCTYPE html>
<!-- Crossway - Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

	<head>
	
		<!-- Basic -->
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
		<meta name="description" content="<?php echo $meta_description ?>">		
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
			
		<!-- Libs CSS -->
		<link href="templates/templates/1/css/bootstrap.css" rel="stylesheet"> 		
		<link href="templates/templates/1/css/font-awesome.min.css" rel="stylesheet">
		<link href="templates/templates/1/css/flexslider.css" rel="stylesheet">
		<link href="templates/templates/1/css/owl.carousel.css" rel="stylesheet">	
		
		<!-- On Scroll Animations -->
		<link href="templates/templates/1/css/animate.css" rel="stylesheet">
		
		<!-- Template CSS -->
		
		<!-- Responsive CSS -->
		<link href="templates/templates/1/css/responsive.css" rel="stylesheet"> 
								
		<!-- Favicons -->	
		<link rel="shortcut icon" href="templates/templates/1/img/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="templates/templates/1/img/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="templates/templates/1/img/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="templates/templates/1/img/icons/apple-touch-icon.png">
			
		<!-- Google Fonts -->	
		<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
					
        <style>
        
/*Template Name: Crossway - Startup Landing Page Template
Theme URL: http://themeforest.net/user/DSA79/
Description: Crossway - Startup Landing Page Template
Author: DSA79
Author URL: http://themeforest.net/user/DSA79
Version: 1.1.0
Website: www.dsathemes.com
Tags: responsive, html5 template, one page, landing, startup, business, company, corporate, creative
*/



/* ------------------------------------------ */
/*             TABLE OF CONTENTS
/* ------------------------------------------ */

/*   01 - General & Basic Styles   */
/*   02 - Header & Navigation      */
/*   03 - Intro      			   */
/*   04 - About        			   */
/*   05 - Features                 */
/*   06 - FAQs		               */
/*   07 - Pricing	               */
/*   08 - Blog		               */
/*   09 - Clients                  */
/*   10 - Call to Action           */
/*   11 - Footer         		   */
/*   12 - Scroll to Top	   		   */
/*   13 - Contact Form Response    */
/*   14 - Breadcrumb		   	   */
/*   15 - What We Do  		 	   */
/*   16 - Our Skills		   	   */
/*   17 - Team   	 			   */
/*   18 - Statistic Banner   	   */
/*   19 - Right Sidebar   		   */
/*   20 - Blog Page   			   */
/*   21 - Single Post Page   	   */



/* ==========================================================================
   01. GENERAL & BASIC STYLES
   ========================================================================== */

/*------------------------------------------*/
/*	 Preload Animation 
/*------------------------------------------*/

#preloader{
	position: fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	z-index:99999; 
	background-color:#fff;
}

#status{
	position:absolute;
	top:50%; 
	left:50%; 
	margin:-100px 0 0 -100px;
	width:200px;
	height:200px;
	background-image:url(../img/icons/loader.gif);
	background-position:center;
	background-repeat:no-repeat;
	background-size:75px 75px;
}   
 
#content-wrapper, 
#about-page-wrapper {
	margin-top: 68px;
}  
 
/*------------------------------------------*/
/*	 Parallax Background Settings
/*------------------------------------------*/

.intro-parallax {
	background-attachment: fixed !important;
	background-position: center center;
	background-repeat: no-repeat;
}

#intro { 
	background-image: url(<?php echo $image_output[0]; ?>); 
}

.parallax {
	background-attachment: fixed !important;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

#features { 
	background-image: url(templates/templates/1//img/parallax_bg/features_bkg.jpg);  
}

#call-to-action { 
	background-image: url(templates/templates/1//img/parallax_bg/call_to_action_bkg.jpg); 
}

#statistic-banner { 
	background-image: url(templates/templates/1//img/parallax_bg/statistic_banner_bkg.jpg); 
}

/*------------------------------------------*/
/*	 Headers
/*------------------------------------------*/

h1, h2, h3, h4, h5, h6 {
	margin-top: 0; 
	margin-bottom: 10px;
}

/*------------------------------------------*/
/*	 Lists
/*------------------------------------------*/

ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

/*------------------------------------------*/
/*	 Link Setting
/*------------------------------------------*/

a {
	text-decoration: none;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

a:hover {
	color: #444;
	text-decoration: none;
}

a:focus {
	color: #f8f8f8;
	outline: none;
	border: none;
	text-decoration: none;
} 

/*------------------------------------------*/
/*	 Theme Button
/*------------------------------------------*/

.btn-theme {
	background-color: #428bca;
	color: #fff;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	padding: 8px 16px;
	-webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

.btn-theme:hover {
	background-color: #3071a9;
	color: #fff;
}

/*------------------------------------------*/
/*	 Black Button
/*------------------------------------------*/

.btn-black {
	background-color: #444;
	color: #fff;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	padding: 8px 16px;
	-webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

.btn-black:hover {
	background-color: #222;
	color: #fff;
}

/*------------------------------------------*/
/*	 Button Hover/Focus
/*------------------------------------------*/

.btn:focus {
	outline: none;
}

.btn:focus {
	color: #f8f8f8;
	text-decoration: none;
}

/*------------------------------------------*/
/*	 Section Titlebar
/*------------------------------------------*/

.titlebar {
	margin-bottom: 40px;
}

.titlebar h1 {
	color: #000;
	font-weight: 300;
	margin-top: 0;
	margin-bottom: 5px;
}

.titlebar p {
	color: #666;
	font-size: 18px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
}



/* ==========================================================================
   02. HEADER & NAVIGATION
   ========================================================================== */ 

/*------------------------------------------*/
/*	 Logo Image    
/*------------------------------------------*/

.navbar-brand {
	padding: 15px 15px 10px;
}   
      
/*------------------------------------------*/
/*	 Navigation Menu    
/*------------------------------------------*/

.navbar {	
	background-color: #f0f0f0;
	border-bottom: 1px solid #ddd;
}

.navbar-nav > li > a {
	color: #333;	
    display: block;
	padding: 0 15px;
	font-size: 14px;
	font-family: 'Lato', sans-serif;
	text-transform: uppercase;
	font-weight: 900;
	line-height: 65px;
	border-bottom: 3px solid transparent;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

.navbar-nav > li > a:hover,
.navbar-nav > li > a.selected-nav {
	background: none;
	color: #428bca;
}

/*------------------------------------------*/
/*	 Responsive Menu    
/*------------------------------------------*/

.navbar-toggle {
    position: relative;
    float: right;
    padding: 10px;
	margin: 12px 30px 12px 0;
    background-color: none;
	border: 2px solid #444;
}

.navbar-toggle .icon-bar {
	background-color: #444;
	height: 2px;
}



/* ==========================================================================
   03. INTRO
   ========================================================================== */
 
#intro {
	padding-top: 80px;
	padding-bottom: 80px;
	color: #fff;
} 

/*------------------------------------------*/
/*	  Intro Section Description
/*------------------------------------------*/

#intro_description h1 {
	font-size: 40px;
	margin-bottom: 30px;
}

.intro_feature {
	margin-bottom: 20px;
}

.intro_feature h4 {
	font-weight: 600;
}

.intro_feature i {
	margin-right: 5px;
}

.intro_feature p {
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	padding-left: 25px;
}

/*------------------------------------------*/
/*	  Intro Section Button
/*------------------------------------------*/

.intro_button {
	margin-top: 60px;
}

/*------------------------------------------*/
/*	  Register Form
/*------------------------------------------*/

#intro_form {
	padding-left: 100px;
}

.form_register {
	width: 100%;
	background: rgba(120, 120, 120, 0.45);
	margin: 0 auto;
    padding: 20px 20px 25px;
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.form_register h2 {
	color: #fff;
    text-align: center;
    line-height: 30px;
	font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/*------------------------------------------*/
/*	  Register Form Input
/*------------------------------------------*/

.form_register .form-control {
	height: 46px;
	margin-bottom: 20px;
	border: 1px solid #ddd;
	-webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

input[type="text"],
input[type="email"],
textarea {
	color: #444;
	-webkit-transition: all 300ms ease-in-out;
	-moz-transition: all 300ms ease-in-out;
	-o-transition: all 300ms ease-in-out;
	-ms-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
}

.form_register textarea {
	min-height: 140px;
}

/*------------------------------------------*/
/*	   Register Form Error Message 
/*------------------------------------------*/

.error {
	color: #fc0000;
	font-size: 13px;
	margin-bottom: 20px;
}


 
/* ==========================================================================
   04. ABOUT
   ========================================================================== */
  
#about-1 {
	padding-top: 60px;
	padding-bottom: 30px;
	border-bottom: 1px solid #cfcfcf;
}

#about-2 {
	padding-top: 70px;
	padding-bottom: 70px;
}

#about-1 .titlebar {
	margin-bottom: 30px;
}

#about-1 h4, #about-2 h4  {
	font-weight: 600;
	margin-bottom: 15px;	
}

/*------------------------------------------*/
/*	  About-1 Text
/*------------------------------------------*/

#about-1-text {
	padding-right: 35px;
}

/*------------------------------------------*/
/*	  Accordion
/*------------------------------------------*/

#accordion_holder {
	margin-top: 40px;
}

.accordion {
	margin-bottom: 40px;
}

#text_1,
#text_2,
#text_3,
#text_4 { 
	width: 100%;
	display: block; 
	float: left; 
	padding: 0; 
	margin: 3px 0; 	
	cursor: pointer; 	
}

.accordion a { 
	color: #666; 
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	line-height: 26px;
	padding: 10px 40px 10px 15px;
	text-decoration: none; 
	border-left: 4px solid transparent;
	display: block; 
	cursor: pointer; 
	background: rgba(170, 170, 170, 0.15) url(../img/icons/open.png) no-repeat center right;
	-webkit-transition: all 300ms ease-in-out;
	-moz-transition: all 300ms ease-in-out;
	-o-transition: all 300ms ease-in-out;
	-ms-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
}

.accordion li.active>a { 
	background: rgba(170, 170, 170, 0.15) url(../img/icons/close.png) no-repeat center right;  
	color: #151515;
	font-weight: 700;
	border-left: 4px solid #428bca;
	box-shadow: none;
}

/*------------------------------------------*/
/*	  Accordion Answer
/*------------------------------------------*/

.accordion li div { 
	background: #fff;
	line-height: 22px;
	padding: 10px 10px; 
	margin-bottom: 5px;
	display: block; 
	clear: both; 
	float: left; 
}

/*------------------------------------------*/
/*	 Video Holder
/*------------------------------------------*/

#video_holder p {
	margin-bottom: 30px;
}

/*------------------------------------------*/
/*	  Video Content Settings
/*------------------------------------------*/ 

.video-block {
	position: relative;
	padding-bottom: 54.25%;
	padding-top: 20px;
	margin-top: 20px;
	height: 0;
	overflow: hidden;
}

.video-block iframe,
.video-block object,
.video-block embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border:0;
}

/*------------------------------------------*/
/*	 About-2 Text
/*------------------------------------------*/

#about-2-text {
	padding-left: 60px;
}

/*------------------------------------------*/
/*	  Quote
/*------------------------------------------*/

#quote_holder {
	margin-top: 40px;
}

.quote-text {
	background: rgba(170, 170, 170, 0.15);
    border-left: none;
    color: rgba(85, 94, 106, 0.8);
    font-style: italic;
    line-height: 25px;
    margin: 0 0 30px 0;
    padding: 26px;
    position: relative;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 3px 0 rgba(182, 196, 209, 0.3);
    -moz-box-shadow: 0 3px 0 rgba(182, 196, 209, 0.3);
    box-shadow: 0 3px 0 rgba(182, 196, 209, 0.3);
}

.quote-text:before {
    border: 14px solid transparent;
    z-index: 3;
    border-top-color: #f2f2f2;
    top: auto;
    right: auto;
    bottom: -28px;
    left: 30px;
}

.quote-text:after {
    border: solid 14px transparent;
    z-index: 2;
    border-width: 18px;
    border-top-color: rgba(182, 196, 209, 0.3);
    top: auto;
    right: auto;
    bottom: -36px;
    left: 26px;
}

.quote-text:before,
.quote-text:after,
.quote-text-up:before,
.quote-text-up:after {
    content: "";
    display: block;
    height: 0;
    width: 0;
    position: absolute;
}

.quote-text a {
    color: #8c989e;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
}

.quote-text a:hover {
    text-decoration: none;
}

.flexslider .slides img { 
	float: left;
    margin-right: 15px;
    margin-left: 6px;
    width: 75px;
	box-shadow: 0 0 5px rgba(140, 140, 140, 0.8);
    -webkit-border-radius: 1000px;
    -moz-border-radius: 1000px;
    -ms-border-radius: 1000px;
    -o-border-radius: 1000px;
    border-radius: 1000px;
}

.quote-author {
    display: inline-block;
    font-size: 14px !important;
    line-height: 65px !important;
} 

.quote-author strong {
	color: #333;
	margin-right: 3px;
}

/*------------------------------------------*/
/*	  Full Info Button
/*------------------------------------------*/

#full-about-info {
	margin-top: 70px;
}

#full-about-info h3 {
	color: #222;
	font-weight: 300;
}

#full-about-info a {
	background-color: #428bca;
	color: #fff;
	font-size: 18px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	-webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
	margin-left: 8px;
	padding: 6px 12px;
}

#full-about-info a:hover {
	background-color: #3071a9;
}
 


/* ==========================================================================
   05. FEATURES
   ========================================================================== */
 
#features {
	padding-top: 60px;
	padding-bottom: 30px;
}

/*------------------------------------------*/
/*	  Feature Box
/*------------------------------------------*/

.feature-box {
	margin-bottom: 50px;
	padding-left: 5px;
	padding-right: 5px;
}

/*------------------------------------------*/
/*	  Feature Box Icon
/*------------------------------------------*/

.feature-box-icon {
    background-color: #666;
    display: block;
    width: 60px;
    height: 60px;
    position: absolute;
    left: 0px;
    top: 10px;
    border-radius: 30px;
    color: #FFF;
    line-height: 60px;
    text-align: center;
    font-size: 30px;
}

/*------------------------------------------*/
/*	  Feature Box Content
/*------------------------------------------*/

.feature-box-content {
	padding-left: 70px;
}

.feature-box-content h4 {
	font-family: 'Lato', sans-serif;
	font-weight: 700;
}


 
/* ==========================================================================
   06. FAQs
   ========================================================================== */
 
#faq {
	padding-top: 60px;
	padding-bottom: 50px;
	border-bottom: 1px solid #cfcfcf;
}

/*------------------------------------------*/
/*	  FAQs Titlebar
/*------------------------------------------*/

#faq .titlebar {
	margin-bottom: 30px;
}

/*------------------------------------------*/
/*	  FAQs Question
/*------------------------------------------*/

.question {
	margin-bottom: 20px;
}
  
.question h4 {
	font-weight: 600;
}

.question p {
	color: #666;
	font-family: 'Lato', sans-serif;
}



/* ==========================================================================
   07. PRICING 
   ========================================================================== */

#pricing {
	padding-top: 60px;
	padding-bottom: 30px;
} 

#pricing-table-holder {
	padding: 0 30px; 
}

#price_1, #price_2, #price_3 {
	margin-bottom: 50px;
}

.pricing-table {
	border: 1px solid #cfcfcf;
	-webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
}

/*------------------------------------------*/
/*	  Pricing Table Header
/*------------------------------------------*/

.pricing-table .price-header {
	border-bottom: 1px solid #cfcfcf;
	position: relative;
}

.pricing-table .plan-title {
	color: #333;
	font-size: 20px;
	font-weight: 300;
	text-transform: uppercase;
    padding: 30px 15px;
    margin: 0;
	-webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;	
}

/*------------------------------------------*/
/*	  Pricing Table Price Plan
/*------------------------------------------*/

.pricing-table .plan-price {
    background-color: #f3f3f3;
	margin: 0;
	line-height: normal;
    padding: 20px;
    border-top: 1px solid #cfcfcf;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;	
}

.pricing-table .plan-price h2 {
	color:  #222;
	font-size: 44px;
	font-weight: 400;
	margin-bottom: 0;
}

.pricing-table .plan-price span {
	color: #999;
	font-weight: 700;
	text-transform: uppercase;
}

/*------------------------------------------*/
/*	  Pricing Table Body
/*------------------------------------------*/

.pricing-table ul.features {
	font-size: 18px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
    padding: 5px 20px;
	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

.pricing-table ul.features li {
    border-top: 1px solid #e7e7e7;
    padding: 10px 25px; 
}

.pricing-table ul.features li:nth-child(1),
.pricing-table.featured ul.features li:nth-child(1) {
    border: none;
}

/*------------------------------------------*/
/*	  Pricing Table Footer
/*------------------------------------------*/

.pricing-table .price-footer {
    padding-top: 25px;
    padding-bottom: 25px;
    border-top: 1px solid #e7e7e7;
	-webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

/*------------------------------------------*/
/*	  Featured Table
/*------------------------------------------*/

.pricing-table.featured .price-header {
	border-bottom: 1px solid #428bca;
}

.pricing-table.featured .plan-title {
	background-color: #428bca;
	color: #f7f7f7;
}

.pricing-table.featured .plan-price {
	background-color: #428bca;
	color: #f7f7f7;
	border-top: 1px solid #2f689a;
}

.pricing-table.featured .plan-price h2,
.pricing-table.featured .plan-price span { 
		color: #f7f7f7;
}



/* ==========================================================================
   08. BLOG
   ========================================================================== */ 

#blog {
	background-color: #f0f0f0;
	padding-top: 60px;
	border-top: 1px solid #ddd;
}

#blog a:focus {
	color: #333;
}
     
/*------------------------------------------*/
/*	  Blog Post Titlebar
/*------------------------------------------*/ 

.blog-post-titlebar h4 {
	line-height: 24px;
	font-weight: 700;
}

.blog-post-titlebar a {
	color: #333;	
}

.blog-post-titlebar a:hover {
	color: #428bca;
}

/*------------------------------------------*/
/*	  Blog Post Description
/*------------------------------------------*/ 

.blog-post-desc {
	color: #666;
	font-family: 'Lato', sans-serif;
	margin-bottom: 15px;
}

/*------------------------------------------*/
/*	  Blog Post Meta
/*------------------------------------------*/ 

.blog-post-info {
	padding-bottom: 70px;
	color: #333;
	font-size: 13px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
}

/*------------------------------------------*/
/*	  Blog Video Post Settings
/*------------------------------------------*/ 

.blog-video-block {
	position: relative;
	padding-bottom: 65.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.blog-video-block iframe,
.blog-video-block object,
.blog-video-block embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border:0;
}

/*------------------------------------------*/
/*	  All Posts Button
/*------------------------------------------*/ 

#all-posts {
	margin-bottom: 60px;
}

#all-posts h3 {
	color: #222;
	font-weight: 300;
}

#all-posts a {
	background-color: #428bca;
	color: #fff;
	font-size: 18px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	-webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
	margin-left: 8px;
	padding: 6px 12px;
}

#all-posts a:hover {
	background-color: #3071a9;
}


 
/* ==========================================================================
   09. CLIENTS
   ========================================================================== */
 
#clients {
	padding-top: 60px;
	padding-bottom: 80px;
	border-top: 1px solid #ddd;
}	

#clients-titlebar {
	position: relative;
}	

/*------------------------------------------*/
/*	 Clients Carousel Navigation
/*------------------------------------------*/

.customNavigation {
	display: inline-block;
	position: absolute;
	top: 0;
	right: 10px;
}

.customNavigation .btn {
	padding: 4px 10px;
}

.customNavigation i {
	font-size: 20px;
	color: #fff;
}
  


/* ==========================================================================
   10. CALL TO ACTION
   ========================================================================== */

#call-to-action {
	padding-top: 100px;
	padding-bottom: 100px;
}

#call-to-action h1 {
	color: #fff;
	font-size: 40px;
	font-weight: 300;
	padding: 0 15%;
	margin-bottom: 15px;
}

#call-to-action p {
	color: #fff;
	font-size: 20px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	padding: 0 10%;
	margin-bottom: 30px;
}


   
/* ==========================================================================
   11. FOOTER
   ========================================================================== */
 
#footer {
	background-color: #1A1E23;
	padding: 60px 0 40px;
}   
  
/*------------------------------------------*/
/*	 Footer Navigation Menu
/*------------------------------------------*/  

.footer-nav li {
	float: left;
	padding: 5px 10px 10px;
}

.footer-nav li a {
	color: #999;
	font-size: 15px;
	font-family: 'Lato', sans-serif;
}

.footer-nav li a:hover {
	color: #428bca;
}

/*------------------------------------------*/
/*	 Footer Copy 
/*------------------------------------------*/  

#footer_copy p {
	color: #666;
	font-size: 13px;
	font-family: 'Lato', sans-serif;
	margin-left: 10px;
}

#footer_copy p span {
	color: #428bca;
}

/*------------------------------------------*/
/*	 Footer Social Icons  
/*------------------------------------------*/

#footer_icons {
	margin:3px 0;
}

.footer-socials {
	display: inline-block; 
}

.footer-socials li {
	float: left;
	width: auto !important;
    display: inline-block !important;
    vertical-align: top;
    clear: none !important;
	line-height: 70px;
}

.foo_social {
    width: 40px;
    height: 40px;
	text-align: center;
	color: #1A1E23;
	font-size: 20px;
    line-height: 40px;
	margin: 0 5px;
	background-color: #999;
	-webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    display: block;
    text-decoration: none;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

/*------------------------------------------*/
/*	 Footer Icons Hover 
/*------------------------------------------*/

.ico-facebook:hover {background-color: #3b5998;color: #f8f8f8;}
.ico-twitter:hover {background-color: #00a9ed;color: #f8f8f8;}
.ico-google-plus:hover {background-color: #cd1111;color: #f8f8f8;}
.ico-linkedin:hover {background-color: #015886;color: #f8f8f8;}
.ico-dribbble:hover {background-color: #d92d84;color: #f8f8f8;}
.ico-instagram:hover {background-color: #beb3a8;color: #f8f8f8;}
.ico-pinterest:hover {background-color: #ac281a;color: #f8f8f8;}
.ico-dropbox:hover {background-color: #008ad2;color: #f8f8f8;}
.ico-skype:hover {background-color: #00a9ed;color: #f8f8f8;}
.ico-youtube:hover {background-color: #cd1b20;color: #f8f8f8;}
.ico-tumblr:hover {background-color: #3a5976;color: #f8f8f8;}
.ico-vimeo:hover {background-color: #00adee;color: #f8f8f8;}
.ico-flickr:hover {background-color: #d2d2d2;color: #f8f8f8;}
.ico-github:hover {background-color: #222;color: #f8f8f8;}
.ico-renren:hover {background-color: #364a83;color: #f8f8f8;}
.ico-vk:hover {background-color: #3b5998;color: #f8f8f8;}
.ico-xing:hover {background-color: #015f5e;color: #f8f8f8;}
.ico-weibo:hover {background-color: #be4443;color: #f8f8f8;}
.ico-rss:hover {background-color: #ff6600;color: #f8f8f8;}

/*------------------------------------------*/
/*	 Footer Newsletter Form
/*------------------------------------------*/

.subscribe-form {
	margin: 5px auto 0;
    position: relative;
    z-index: 10;
	width: 90%;
}

#newsletter_form p {
	color: #666;
	font-size: 13px;
	line-height: 16px;
	font-family: 'Lato', sans-serif;
	text-align: center;
	margin-top: 10px;
}

#newsletter_form p span {
	color: #428bca;
}

.subscribe-input {
	width: 68%;
    height: 30px;
	background-color: #aaa;
	color: #ddd;
	font-size: 14px;
    font-weight: 300;
	padding-left: 10px;
	border: none;
}

.subscribe-submit {
	width: 32%;
	height: 30px;
	background: #383e46;
    color: #fff;
	font-size: 12px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	text-decoration:none;
	text-transform: uppercase;
	text-align:center;
    display: block;
    position: absolute;
    top: 0px;
    right: 0px;
    border:none;
    cursor: pointer;
    outline: 0;
	box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.2);
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

.subscribe-submit:active {
    outline: 0;
}

.subscribe-submit:hover {
	background: #428bca;
}


 
/* ==========================================================================
   12. SCROLL TO TOP
   ========================================================================== */

#scrollUp {
	display: none;
	width: 50px;
	height: 50px;
	position: fixed;
	bottom: 30px;
	right: 30px;
	background-image: url(../img/icons/back-to-top.png);
	background-repeat: no-repeat;
	background-position: 50% 48%;
	background-color:rgba(123, 123, 123, 0.65);	
	-webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
	-webkit-transition: all 250ms linear;
	-moz-transition: all 250ms linear;
	transition: all 250ms linear;	
}

#scrollUp:hover {
	background-color: rgba(66, 139, 202, 0.95);
}

nav a#pull {  
    display: none;  
}
 


/* ==========================================================================
   13. CONTACT FORM RESPONSE PAGE   
   ========================================================================== */
   
#form_response {
	margin: 50px auto; 
}

#form_response .img-responsive { display: inline-block; }

#form_response h1 {
	font-size: 40px; 
	font-weight: 700;
	margin-top: 10px;
}

#form_response p {
	font-size: 18px; 
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	margin-bottom: 20px;
}



/* ==========================================================================
   14. BREADCRUMB 
   ========================================================================== */

#breadcrumb-wrapper {
	background: url(../img/thumbs/breadcrumb_bg.jpg) 50% 50%; 
}

.breadcrumb {
	background: transparent;
	color: #fff;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 0;
	padding: 20px 0;
}

.breadcrumb > li {
	display: inline-block;
	line-height: 60px;
	text-shadow:none;
}

.breadcrumb > li + li:before {
    color: #fff;
}

.breadcrumb > li a {
	color: #fff;	
	font-size: 24px;
	font-weight: 700;
}

.breadcrumb > li a:hover {
	color: #444;
	text-decoration: none;
}

.breadcrumb > .active {
	color: #fff !important;
}



/* ==========================================================================
   15. WHAT WE DO
   ========================================================================== */
   
#what-we-do {
	padding-top: 40px;
	border-bottom: 1px solid #cfcfcf;	
}

/*------------------------------------------*/
/*	 Service List
/*------------------------------------------*/

#service-list {
	margin-top: 20px;
}

/*------------------------------------------*/
/*	 Service Box
/*------------------------------------------*/

.service-box {
	margin-bottom: 30px;
} 

.service-box-title {
	margin-bottom: 15px;
}

.service-box-icon {
    color: #FFF;
    background-color: #428bca;
    background-repeat: no-repeat;
	float: left;
    display: block;
    border-radius: 50%;
    margin-right: 10px;
    font-size: 24px;
    line-height: 50px;
    text-align: center;
    width: 50px;
    height: 50px;
    transition: all 0.2s linear 0s;
}

.service-box-title h4 {
    float: left;
    font-weight: 700;
    line-height: 50px;
	margin-bottom: 0;
}



/* ==========================================================================
   16. OUR SKILLS
   ========================================================================== */
   
#our-skills {
	background-color: #f0f0f0;
	border-bottom: 1px solid #cfcfcf;
	padding-top: 60px;
	padding-bottom: 80px;
}

/*------------------------------------------*/
/*	 Progress Bar
/*------------------------------------------*/

.progress {
	background: #e0e0e0;
	height: 36px;
	margin-bottom: 15px;
	border-radius: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.progress .progress-bar:after {
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	width: 0;
	height: 0;
	border-top: 36px solid transparent;
	border-right: 20px solid #e0e0e0;
}

.progress-bar {
	background: #428bca;
	height: 36px;
	position: relative;
	font-size: 14px;
	font-weight: 700;
	font-weight: 700;
	line-height: 36px;
	text-align: right;
	overflow: hidden;
	padding: 0 20px;
}

.progress-label {
	color: #fff;
	float: left;
}



/* ==========================================================================
   17. TEAM
   ========================================================================== */
   
#team {
	padding-top: 60px;
	padding-bottom: 10px;
}

.team-member {
	text-align: center;
	margin-bottom: 50px;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

/*------------------------------------------*/
/*	  Team Member Photo
/*------------------------------------------*/

.img-block { 
	margin: 10px 10px 20px 10px;
}

.img-block img {
	-webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
	box-shadow: 0px 0px 0px 0 rgba(10, 10, 10, 0.15);
	opacity: 1;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

/*------------------------------------------*/
/*	  Team Member Photo Hover
/*------------------------------------------*/

.team-member:hover .img-block img {
	box-shadow: 0px 0px 0px 10px rgba(10, 10, 10, 0.15);
	opacity: .85;
}

/*------------------------------------------*/
/*	  Team Member Meta
/*------------------------------------------*/

.team-img-meta h4 {
	font-weight: 700;
	margin-bottom: 5px;
}

.team-img-meta p {
	color: #428bca;
	font-size: 16px;
	margin-bottom: 5px;
	padding: 0 15%;
}

p.member-info {
	font-size: 14px;
	line-height: 20px;
	margin-bottom: 20px;
	padding: 0 5%;
}

/*------------------------------------------*/
/*	  Team Member Social Icons 
/*------------------------------------------*/

.team-member-socials {
	text-align: right;
	display: inline-block;
	margin: 0 auto;
}

.team-member-socials li {
	float: left;
    display: inline-block !important;
    vertical-align: top;
    width: auto !important;
    clear: none !important;
}

.page_social {
    width: 40px;
    height: 40px;
	color: #aaa;
	font-size: 14px; 
    text-align: center;
    line-height: 40px;
    display: block;
    text-decoration: none;
	margin: 0 3px 5px;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}



/* ==========================================================================
   18. STATISTIC BANNER
   ========================================================================== */

#statistic-holder {
	padding-top: 40px;
	padding-bottom: 80px;
} 
 
/*------------------------------------------*/
/*	  Statistic Banner Titlebar
/*------------------------------------------*/ 

#statistic-banner .titlebar {
	margin-top: 70px;
	margin-bottom: 0;
}

#statistic-banner .titlebar h1 {
	color: #fff;
	font-weight: 400;
}

/*------------------------------------------*/
/*	  Statistic Banner Content
/*------------------------------------------*/ 

.statistic-block {
	text-align: center;
}

.statistic-icon {
	color: #fff;
	font-size: 60px;
	font-family: 'Lato', sans-serif;
	line-height: 60px;	
}

.statistic-number {
	color: #fff;
	font-size: 80px;
	font-family: 'Lato', sans-serif;
	line-height: 90px;
	font-weight: 700;
}

.statistic-text {
	color: #fff;
	font-size: 26px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
}
 


/* ==========================================================================
   19. RIGHT SIDEBAR 
   ========================================================================== */   

#sidebar-right h4 {
	font-weight: 600;
	margin-bottom: 15px;
}

#sidebar-right .col-xs-12 {
	margin-bottom: 60px;
}

/*------------------------------------------*/
/*	 Blog Page Search Form
/*------------------------------------------*/

.form-control {
    color: #666;
    box-shadow: none;
}

.search-btn {
    background-color: #428bca;
    border-color: #3071a9;
    color: #fff;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

.search-btn:hover {
	background-color: #3071a9;
    border-color: #3071a9;
	color: #fff;
}

.input-group input[type="text"]:focus {
	color: #444;
	border-color: rgba(219, 79, 57, .35);
	outline: 0;
	-webkit-box-shadow: none;
    box-shadow: none;
}

/*------------------------------------------*/
/*	 Blog Categories / Blog Archive
/*------------------------------------------*/

ul.blog-category-list,
ul.blog-archive-list {
	padding: 5px 0 0;
}

ul.blog-category-list li i,
ul.blog-archive-list li i {
	color: #428bca;
	font-weight: 900;
	margin-right: 8px;
}

ul.blog-category-list > li,
ul.blog-archive-list > li {
	padding: 8px 0;
	border-bottom: 1px dashed #c0c0c0;
	-webkit-transition: all 300ms ease-in-out;
	-moz-transition: all 300ms ease-in-out;
	-o-transition: all 300ms ease-in-out;
	-ms-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;	
}

ul.blog-category-list > li:first-child,
ul.blog-archive-list > li:first-child {
	padding: 0 0 8px;
}

ul.blog-category-list > li:last-child,
ul.blog-archive-list > li:last-child {
	padding: 8px 0 0;
	border-bottom: none;
}

ul.blog-category-list > li a,
ul.blog-archive-list > li a,
ul.blog-category-list > li span,
ul.blog-archive-list > li span {
	color: #333;
	font-size: 15px;
	font-family: 'Lato', sans-serif;
}

ul.blog-category-list li a:hover,
ul.blog-archive-list > li a:hover {
	color: #428bca;
	text-decoration: none;
}

/*------------------------------------------*/
/*	 Blog Page Popular Posts
/*------------------------------------------*/

.popular-posts li { 
	padding: 10px 0;
	border-bottom: 1px dashed #c0c0c0;
}

.popular-posts li:first-child {
	padding: 0 0 10px;
}

.popular-posts li:last-child {
	padding: 10px 0 0;
	border-bottom: 0; 
}

/* Popular Post Summary
----------------------------------*/

.post-summary a { 
	color: #333;
	font-size: 14px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
}

.popular-posts .post-summary a:hover { 
	color: #428bca;
}

/* Popular Post Meta
----------------------------------*/
.popular-posts p { 
	color: #428bca;	
	font-size: 13px;
	font-family: 'Lato', sans-serif;
	font-weight: 600;
	margin: 4px 0;
}

/*------------------------------------------*/
/*	 Blog Page Popular Tags
/*------------------------------------------*/

.badge {
    font-size: 11px;
	font-family: 'Lato', sans-serif;
    font-weight: 600;
    color: #fff;
	border: 1px solid #428bca;
	background-color: #428bca;
    border-radius: 0px;
	margin-bottom: 5px;
	padding: 3px 6px;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;	
}

.badge a {
	color: #fff!important;
	font-size: 11px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	text-transform: uppercase;
	line-height: 1.42857;
}

.badge:hover {
	background-color: #3071a9;
	border-color: #3071a9;
    color: #fff;
}

.badge:hover a {
	color: #fff!important;
}

/*------------------------------------------*/
/*	 Blog Page Text Widget
/*------------------------------------------*/

#text-widget p {
	font-size: 14px;
	font-family: 'Lato', sans-serif;
}



/* ==========================================================================
   20. BLOG PAGE
   ========================================================================== */

#blog-page-wrapper, 
#single-post-wrapper {
	margin-top: 68px;
}

#blog-page {
	margin-top: 60px;
	margin-bottom: 40px;
}

#single-post-page {
	margin-top: 60px;
	margin-bottom: 10px;
}
   
#blog-large article {
	margin: 0 45px 60px 0;
	padding-bottom: 40px;
	border-bottom: 1px dashed #aaa;
}

.post-large .video-block {
	margin-top: 0px;
}

/*------------------------------------------*/
/*	 Blog Page Post Heading
/*------------------------------------------*/

.blog-item h3, .single-post h3 {
	font-weight: 600;
	margin-top: 30px;
	margin-bottom: 5px;
}

.blog-item.text h3, .single-post.text h3 {
	margin-top: 0;
}

/*------------------------------------------*/
/*	 Blog Page Post Meta
/*------------------------------------------*/

.post-meta {
	margin-bottom: 20px;
}

ul.post-meta-list li {
	color: #666;
	font-size: 15px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	float: left;
	margin-right: 8px;
}

ul.post-meta-list li a, 
.post-content a {
	color: #428bca;
	font-size: 14px;
	font-weight: 600;
	text-decoration: underline;
}

ul.post-meta-list li a:hover, 
.post-content a:hover {
	color: #3071a9;
	text-decoration: none;
}

/*------------------------------------------*/
/*	 Blog Page Flexslider
/*------------------------------------------*/

.blog-img-slider .slides {
	margin: 0;
}

/*------------------------------------------*/
/*	 Audio Content Settings
/*------------------------------------------*/ 

.audio-block iframe {
	width: 100%;
	height: 166px;
	border:0;
	border-radius: 0px 0px 0px 0px;
}

/*------------------------------------------*/
/*	 Blog Page Pagination
/*------------------------------------------*/

.pagination {
	margin-top: 0;
}

.pagination > li > a {
	background-color: transparent;
	border: 1px solid #ccc;
	color: #999;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 500;
	padding: 7px 12px;
	margin-left: 5px;
}

.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #999;
  cursor: not-allowed;
  background-color: #e8e8e8;
  border-color: #ccc;
}

.pagination > li:first-child > a {
  margin-left: 0;
  border-bottom-left-radius: 0px;
  border-top-left-radius: 0px;
}

.pagination > li:last-child > a {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}

.pagination > li > a:hover {
	background-color: #428bca;
	border-color: #428bca;
	color: #fff;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover {
	background-color: #3071a9;
	border-color: #3071a9;
	color: #fff;
	z-index: 2;
	cursor: default;
}


/* ==========================================================================
   21. SINGLE POST PAGE
   ========================================================================== */
  
#single-post article {
	margin: 0 45px 50px 0;
}

/*------------------------------------------*/
/*	 Single Post  Label 
/*------------------------------------------*/

.post-label {
	margin: 30px 0 40px;
	padding: 25px 0 20px;
	border-top:1px dashed #ddd;
	border-bottom:1px dashed #ddd;
}

.tags-label,
.social_label {
	color: #151515;
	font-size: 16px; 
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	float: left;
	margin-right: 15px;
}

.social_label {
	line-height: 36px;
}

/*------------------------------------------*/
/*	 Single Post Tags 
/*------------------------------------------*/

.post-tags-list {
	margin: 0px 0 10px;
}

.post-tags-list span a {
	color: #666;
	font-size: 15px;
	font-family: 'Lato', sans-serif;
	margin-right: 5px;
}

.post-tags-list span a:hover {
	color: #428bca;
}

/*------------------------------------------*/
/*	 Single Post Social
/*------------------------------------------*/

.share-links ul li {
	float: left;
    display: inline-block !important;
    vertical-align: top;
    width: auto !important;
    clear: none !important;
}

.post_social {
    width: 36px;
    height: 36px;
	color: #888;
	font-size: 15px;
    text-align: center;
    line-height: 36px;
    display: block;
	margin-right: 5px;
    text-decoration: none;
	-webkit-transition: all 250ms ease-in-out;
	-moz-transition: all 250ms ease-in-out;
	-o-transition: all 250ms ease-in-out;
	-ms-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}

/*------------------------------------------*/
/*	 Single Post Navigation
/*------------------------------------------*/

.post-nav {
	margin-bottom: 40px;
	padding: 20px 15px;
	background-color: #f0f0f0;
}

.post-nav span {
	color: #428bca;
	display: block;
	font-size: 14px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
}

.post-nav div {
    display: inline-block;
    position: relative;
    color: #999;
}

.post-nav div.post-next {
	text-align: right;
}

.post-nav div a {	
	color: #333;
	font-size: 13px;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	text-decoration: underline;
}

.post-nav div a:hover {
	color: #428bca;
}

/*------------------------------------------*/
/*	 Single Post Comments
/*------------------------------------------*/

#post_comments {
	margin-bottom: 40px;
}

#post_comments h3, #form_holder h3 {
	margin-bottom: 20px;
}

.post-comments p {
	color: #ccc;
	margin-bottom: 20px;
}

.comment {
    position: relative;
    padding-top: 20px;
	border-top: 1px dashed #aaa;
}

.comment-avatar {
    width: 60px;
    height: 60px;
    float: left;
    overflow: hidden;
}

.comment-content {
    margin-left: 79px;
	margin-bottom: 20px;
}

.comment-meta {
    margin-bottom: 10px;
}

.comment-name {
	color: #333;
	margin: 0;
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	text-decoration:none;
	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

.comment-name:hover {
	color: #428bca;
}

.comment-date {
	color: #666;
	font-size: 12px;
	font-weight: 700;
	text-transform: uppercase;
    margin-bottom: 5px;
}

.btn-reply a {
	background-color: #428bca;
	color:  #f8f8f8;
	font-size: 12px;	
	font-family: 'Lato', sans-serif;
	font-weight: 500;
	padding: 2px 4px;	
	text-transform: uppercase;
	-moz-border-radius: 2px;
	-webkit-border-radius:2px;
	border-radius:2px;
}

.btn-reply a:hover {
	background-color: #444;
}

.comment-reply {
    margin-left: 40px;
}

/*------------------------------------------*/
/*	  Comment Form Input
/*------------------------------------------*/

#comment-form {
	margin-top: 30px;
}

#comment-form .form-control {
	height: 40px;
	font-size: 14px;
	margin-bottom: 15px;
	border: 1px solid #bbb;
}

#comment-form textarea {
	min-height:180px;
}

/*------------------------------------------*/
/*	  Contact Form Input Focus
/*------------------------------------------*/

.form-control:focus {
    outline: 0px none;
    box-shadow: none;
}

/*------------------------------------------*/
/*	  Contact Form Submit Button
/*------------------------------------------*/

#form_btn {
	margin-top: 20px;
}


    </style>
	</head>
		
	<body>
	
	
		<!-- PRELOADER
		============================================= -->
				
		<div id="preloader">
			<div id="status"></div>
		</div>
		
	
		<!-- HEADER
		============================================= -->
		
		<header id="header">
		
			<div class="navbar navbar-fixed-top">	
				<div class="container">
				
					<!-- Logo & Responsive Menu -->
					<div class="navbar-header">
						<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-menu">
							<span class="sr-only">Toggle navigation</span> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#top-page-banner"><img src="img/logo.png" alt="logo" role="banner"></a>
					</div>	<!-- End navbar-header -->
					
					<!-- Navigation -->
					<nav id="navigation-menu" class="collapse navbar-collapse"  role="navigation">
					  <ul class="nav navbar-nav navbar-right">
						<li><a id="GoToHome" class="selected-nav" href="#intro">Home</a></li>
						<li><a id="GoToAbout" href="#about-1">About</a></li>	
						<li><a id="GoToFeatures" href="#features">Features</a></li>
						<li><a id="GoToFaq" href="#faq">FAQ</a></li>
						<li><a id="GoToPricing" href="#pricing">Pricing</a></li>
						<li><a id="GoToBlog" href="#blog">Blog</a></li>
						<li><a id="GoToClients" href="#clients">Clients</a></li>
					  </ul>
					</nav>	<!-- End navbar-collapse -->
					
				</div>	<!-- End container -->
			</div>	<!-- End navbar -->
			
		</header>	 <!-- END HEADER -->
	
	
		<!-- CONTENT WRAPPER
		============================================= -->
		
		<div id="content-wrapper">
		
		
			<!-- INTRO
			============================================= -->
			
			<section id="intro" class="intro-parallax">
				<div class="container">								
					<div class="row">
										
						<!-- Intro Section Description -->		
						<div id="intro_description" class="col-sm-7 col-md-7">
						
							<!-- Intro Section Title -->
							<h1><?php echo $output[0]; ?></h1>
								
							<!-- Description #1 -->	
							<div class="intro_feature">
								<h4><?php echo $output[1]; ?></h4>
								<p><?php echo $output[2]; ?></p>
							</div>
							
							<!-- Description #2 -->	
							<div class="intro_feature">
								<h4><?php echo $output[3]; ?></h4>
								<p><?php echo $output[4]; ?></p>
							</div>
							
							<!-- Description #3 -->	
							<div class="intro_feature">
								<h4><<?php echo $output[5]; ?></h4>
				
							</div>
							
								
						</div>	<!-- End Intro Section Description -->	
						
							
						<!-- Intro Section Form -->		
						<div id="intro_form" class="col-sm-5 col-md-5">
						
							<!-- Register Form -->
							<div class="form_register">
								<h2> Register Now! </h2>
								
								<form action="contact.php" name="contactform" class="row" method="post">
									
									<div id="input_name" class="col-md-12">
										<input id="name" class="form-control" type="text" name="first_name" placeholder="Full Name"> 
									</div>
										
									<div id="input_email" class="col-md-12">
										<input id="email" class="form-control" type="text" name="email" placeholder="Enter your email"> 
									</div>
									
									<div id="input_phone" class="col-md-12">
										<input id="phone" class="form-control" type="text" name="phone" placeholder="Phone Number"> 
									</div>

									<div id="input_message" class="col-md-12">
										<textarea id="comments" class="form-control" name="message" rows="6" placeholder="Your Suggestion ..."></textarea>
									</div> 
			
									<!-- Submit Button -->
									<div id="form_register_btn" class="text-center">
										<input class="btn btn-primary btn-lg" type="submit" value="Register" id="submit">
									</div>  
																	
								</form>	
								
							</div>	<!-- End Register Form -->							
						</div>	  <!-- End Intro Section Form -->
						
					
					</div>	<!-- End row -->						
				</div>	  <!-- End container -->		
			</section>  <!-- END INTRO -->
			
			
			<!-- ABOUT-1
			============================================= -->
			
			<section id="about-1">
				<div class="container">	
				
					<!-- Section Title -->	
					<div class="row">
						<div class="col-md-12 titlebar">
							<h1>Some <strong>words about</strong> us</h1>
							<p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
						</div>
					</div>	<!-- End Section Title -->	
					
				
					<div class="row">
					
						<!--  ABOUT-1 TEXT -->	
						<div id="about-1-text" class="col-md-6">	
						
							<h4>What we do?</h4>
							
							<p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni 
							   dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, 
							   Numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
														
							<!--  Accordion -->
							<div id="accordion_holder">	
								<h4>Why choose us?</h4>

								<ul class="accordion clearfix">
									
									<!-- Text #1 -->
									<li id="text_1">
										<a href="#text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>								
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											   Nostrud exercitation ullamco laboris aliquipea commodo consequat. 
											</p>
										</div>									
									</li>				
											
									<!-- Text #2 -->
									<li id="text_2">
										<a href="#text2">Aenean consequat lorem ut felis ullamcorper?</a>								
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
												Ut enim ad minim veniam. 										
											</p>
										</div>									
									</li>
											
									<!-- Text #3 -->
									<li id="text_3">
										<a href="#text3">Aenean rhoncus diam eleifend, pulvinar feugiat feugiat dolor?</a>								
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
												Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
											</p>
										</div>									
									</li>

								</ul>	
								
							</div>	<!--  End Accordion -->
							
						</div>	<!-- END ABOUT-1 TEXT --> 
						
						
						<!-- ABOUT-1 IMAGE --> 
						<div id="about-1-img" class="col-md-6 text-center">
							<img class="img-responsive" src="img/thumbs/startup.png" alt="image" />		
						</div>	<!-- END ABOUT-1 IMAGE --> 
						
					
					</div>	<!-- End row -->	
				</div>	  <!-- End container -->		
			</section>  <!-- END ABOUT-1 -->
			
			
			<!-- ABOUT-2
			============================================= -->
			
			<section id="about-2">
				<div class="container">					
					<div class="row">
					
						<!-- EMBEDDED VIDEO -->	
						<div id="video_holder" class="col-md-6">
							<h4>Discover more about us</h4>
							
							<p>Voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, 
							   Numquam eius modi tempora incidunt, aliquam quaerat voluptatem.
							</p>
							
							<div class="video-block">
								<iframe src="http://player.vimeo.com/video/69988283" width="370" height="250"></iframe>	
							</div>						
						</div>	<!-- END EMBEDDED VIDEO -->	
						
						
						<!--  ABOUT-2 TEXT -->	
						<div id="about-2-text" class="col-md-6">	
							<h4>Our Philosophy</h4>
							
							<p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni 
							   dolores ratione voluptatem nesciunt, neque porro quisquam dolore magnam aliquam quaerat voluptatem.
								Neque porro quisquam est, qui dolorem ipsum, quia dolor sit, 
							   Numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							
							<!--  Quote -->
							<div id="quote_holder">	
								<h4>What they say about us!</h4>
								
								<!-- Rotator Content -->
								<div class="flexslider">											
									<ul class="slides">
															
										<!--Testimonial #1 -->
										<li>
											<div class="testimonials">
												<blockquote class="quote-text">
												  <a href="#">@ Numquam eius modi tempora incidunt, labore dolore magnam aliquam quaerat voluptatem labore voluptatem.</a>
												</blockquote>
												<img class="quote-author-avatar" src="img/thumbs/user-1.jpg" alt="">
												<p class="quote-author">
												  <a href="#"><strong>John Doe</strong>@#johdoe</a>
												</p>											
											</div>
										</li>
																											
										<!--Testimonial #2 -->	
										<li>
											<div class="testimonials">
												<blockquote class="quote-text">
												  <a href="#">@Nemo voluptatem, quia voluptas, aspernatur consequuntur magni dolores ratione voluptatem nesciunt.</a>
												</blockquote>
												<img class="quote-author-avatar" src="img/thumbs/user-2.jpg" alt="">
												<p class="quote-author">
												  <a href="#"><strong>John Doe</strong>@#johdoe</a>
												</p>											
											</div>
										</li>
																											
										<!--Testimonial #3 -->
										<li>
											<div class="testimonials">
												<blockquote class="quote-text">
												  <a href="#">@Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia.</a>
												</blockquote>
												<img class="quote-author-avatar" src="img/thumbs/user-3.jpg" alt="">
												<p class="quote-author">
												  <a href="#"><strong>John Doe</strong>@#johdoe</a>
												</p>											
											</div>
										</li>
							
									</ul>												
								</div>	 <!-- End Rotator Content -->
								
							</div>	<!-- End Quote -->

						</div>	<!--  END ABOUT-2 TEXT -->
											
					</div>	<!-- End row -->
					
					
					<!-- FULL INFO BUTTON -->	
					<div id="full-about-info" class="row">
						<div class="col-sm-12 text-center">
							<h3>Do you want to get more info about us?<a href="about.html">Find Out More</a></h3>
						</div>
					</div>	<!-- END FULL INFO BUTTON -->
					
					
				</div>	  <!-- End container -->		
			</section>  <!-- END ABOUT-2 -->
			
			
			<!-- FEATURES
			============================================= -->
			
			<section id="features" class="parallax">
				<div class="container">	
				
					<!-- Section Title -->	
					<div class="row">
						<div class="col-md-12 titlebar">
							<h1>Our awesome <strong>features</strong></h1>
							<p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
						</div>
					</div>	<!-- End Section Title -->	
					
				
					<!-- FEATURES HOLDER -->	
					<div class="row">
						<div class="col-md-12">		
						
							<ul>
								<!-- Feature Icon 1 -->
								<li id="feature_1">       									
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											<i class="fa fa-flask"></i>
										</div>
												
										<div class="feature-box-content">
											<h4>Responsive Design</h4>
											 <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>
									</div>
								</li>
								
								<!-- Feature Icon 2 -->
								<li id="feature_2">       									
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											<i class="fa fa-globe"></i>
										 </div>
										 
										<div class="feature-box-content">
											<h4>Web Marketing</h4>
											<p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>
									</div>
								</li>
								
								<!-- Feature Icon 3 -->
								<li id="feature_3">       
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											<i class="fa fa-desktop"></i>
										</div>
										
										<div class="feature-box-content">
											<h4>Desktop Friendly</h4>
											<p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>
									</div>
								</li>
																
								<!-- Feature Icon 4 -->
								<li id="feature_4">
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											<i class="fa fa-cog"></i>
										</div>
										
										<div class="feature-box-content">
											<h4>Very easy to customize</h4>
											<p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>							
									</div>
								</li>
								
								<!-- Feature Icon 5 -->
								<li id="feature_5">       									
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											 <i class="fa fa-heart"></i>
										</div>
										
										<div class="feature-box-content">
											<h4>Clients Loving</h4>
											<p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>
									</div>
								</li>  
								
								<!-- Feature Icon 6 -->
								<li id="feature_6">       									
									<div class="col-sm-6 col-md-4 feature-box clearfix">	
										<div class="feature-box-icon">
											 <i class="fa fa-clock-o"></i>
										</div>
										
										<div class="feature-box-content">
											<h4>Supporting</h4>
											<p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
										</div>
									</div>
								</li>
								
							</ul>
						
						</div>	 <!-- End col-md-12 -->
					</div>	  <!-- END FEATURES HOLDER -->	
					
					
				</div>	   <!-- End container -->		
			</section>  <!-- END FEATURES -->
			
			
			<!-- FAQs
			============================================= -->
			
			<section id="faq">
				<div class="container">	
				
					<!-- Section Title -->	
					<div class="row">
						<div class="col-md-12 titlebar">
							<h1>Frequently <strong>asked questions</strong></h1>
							<p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
						</div>
					</div>	<!-- End Section Title -->
					
				
					<div class="row">
					
						<!-- Question #1-->
						<div id="question_1" class="col-md-6">	
							<div class="question">
								<h4>Aliquam dapibus interdum lobortis pretium ornare erat</h4>
								<p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
								   Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit
								   bibendum sit amet in odio. Integer congue leo metus, eu mollis lorem viverra nec.
								</p>
							</div>							
						</div>
						
						<!-- Question #2-->
						<div id="question_2" class="col-md-6">							
							<div class="question">
								<h4>Aliquam dapibus lobortis pretium ornare erat</h4>
								<p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
								   Vestibulum ante ipsum primis in faucibus bibendum sit amet in odio. Integer congue leo metus, eu mollis lorem viverra nec.
								</p>
							</div>
						</div>
						
					</div>	<!-- End row -->	
					
				
					<div class="row">
					
						<!-- Question #3-->
						<div id="question_3" class="col-md-6">	
							<div class="question">
								<h4>Aliquam dapibus interdum turpis, lobortis pretium</h4>
								<p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
								   Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit
								   bibendum sit amet in odio.
								</p>
							</div>							
						</div>
						
						<!-- Question #4-->
						<div id="question_4" class="col-md-6">							
							<div class="question">
								<h4>Aliquam interdum turpis, lobortis pretium ornare erat</h4>
								<p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros. Vestibulum ante ipsum primis in faucibus orci luctus et 
								   ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit bibendum sit amet in odio. Integer congue leo metus, mollis lorem viverra.
								</p>
							</div>
						</div>
					
					</div>	<!-- End row -->
					
					
				</div>	   <!-- End container -->		
			</section>  <!-- END FAQs -->
			
			
			<!-- PRICING
			============================================= -->
			
			<section id="pricing">
				<div class="container">	

					<!-- Section Tittle -->		
					<div class="row">
						<div class="col-sm-12 titlebar">
							<h1>Choose your <strong>packages & pricing</strong></h1>
							<p>Aliquam a augue suscipit, bibendum luctus neque. Vestibulum laoreet rhoncus ipsum, bibendum ullamcorper hendrerit tellus</p>
						</div>
					</div>	<!-- End Section Tittle -->	
					
					
					<!-- PRICING TABLE HOLDER -->				
					<div id="pricing-table-holder" class="row">				
				
						<!-- PRICE PLAN STANDARD -->
						<div id="price_1" class="col-xs-12 col-sm-4 col-md-4">							
							<div class="pricing-table text-center">	

								<!-- Table Header & Plan Price  -->
								<div class="price-header">
									<h4 class="plan-title">Standard Package</h4>
									<div  class="plan-price">
										<h2>$19.99</h2>
										<span>per month</span>
									</div>	
								</div>

								<!-- Plan Features  -->
								<ul class="features">
								  <li>Up to 10 Projects</li>
								  <li>10 GB of Storage</li>
								  <li>Up to 250 Users</li>
								  <li>25 GB Bandwidth</li>
								  <li>Security Suite</li>
								</ul>
								
								<!-- Table Button  -->
								<div class="price-footer">
									<a class="btn btn-black" href="#">Get Started!</a>
								</div>	
								
							</div> 
						</div>	  <!-- END PRICE PLAN STANDARD -->
						
										
						<!-- PRICE PLAN ADVANCED -->
						<div id="price_2" class="col-xs-12 col-sm-4 col-md-4">								
							<div class="pricing-table featured text-center">
							
								<!-- Table Header & Plan Price  -->
								<div class="price-header">
									<h4 class="plan-title">Advanced Package</h4>
									<div  class="plan-price">
										<h2>$29.99</h2>
										<span>per month</span>
									</div>	
								</div>

								<!-- Plan Features  -->
								<ul class="features">
								  <li>Unlimited Projects</li>
								  <li>50 GB of Storage</li>
								  <li>Up to 1000 Users</li>
								  <li>100 GB Bandwidth</li>
								  <li>Security Suite</li>
								</ul>
								
								<!-- Table Button  -->
								<div class="price-footer">
									<a class="btn btn-theme" href="#">Get Started!</a>
								</div>
								
							</div> 								  
						</div>	  <!-- END PRICE PLAN ADVANCED -->
						
										
						<!-- PRICE PLAN ULTIMATE -->
						<div id="price_3" class="col-xs-12 col-sm-4 col-md-4">								
							<div class="pricing-table text-center">	

								<!-- Table Header & Plan Price  -->
								<div class="price-header">
									<h4 class="plan-title">Ultimate Package</h4>
									<div  class="plan-price">
										<h2>$99.99</h2>
										<span>per month</span>
									</div>	
								</div>

								<!-- Plan Features  -->
								<ul class="features">
								  <li>Unlimited Projects</li>
								  <li>150 GB of Storage</li>
								  <li>Unlimited</li>
								  <li>500 GB Bandwidth</li>
								  <li>Security Suite</li>
								</ul>
								
								<!-- Table Button  -->
								<div class="price-footer">
									<a class="btn btn-black" href="#">Get Started!</a>
								</div>	
								
							</div> 								  
						</div>	  <!-- END PRICE PLAN ULTIMATE -->

					</div>	 <!-- END PRICING TABLE HOLDER -->
					
					
				</div>	   <!-- End container -->	
			</section>	 <!-- END PRICING -->
			
			
			<!-- BLOG
			============================================= -->
			
			<section id="blog">
				<div class="container">
				
					<!-- Section Tittle -->				
					<div class="row">
						<div class="col-sm-12 titlebar">
							<h1>Latest from <strong>the blog</strong></h1>
							<p>Praesent semper, lacus sed cursus porta, augue feugiat tincidunt ligula massa faucibus posuere cubilia </p>						
						</div>
					</div>	<!-- End Section Tittle -->	
					
				
					<div class="row">
					
						<!-- BLOG POST #1 -->
						<div class="col-sm-6 col-md-6">							
							<article id="blog_post_1" class="blog-post">
							
								<!-- Post Image -->
								<div class="col-md-12 col-lg-6">						
									<div class="blog-post-img">
										<img class="img-responsive" src="templates/templates/1/img/blog/img1.jpg" alt="Blog Image" />	
									</div>
								</div>
									
								<!-- Post Description -->
								<div class="col-md-12 col-lg-6">	
									
									<!-- Post Titlebar -->
									<div class="blog-post-titlebar">
										<h4><a href="single-post.html">Maecenas bibendum, interdum malesuada lorem</a></h4>
									</div>

									<!-- Post Summary -->
									<div class="blog-post-desc">
										<p>Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas... </p>
									</div>
										
									<!-- Post Meta -->
									<div class="blog-post-info">
										24 Apr 2014 / By <span class="theme-color">Admin</span> / <a href="single-post.html#post_comments" title="comments">19 Comments</a>
									</div>
										
								</div>	<!-- End Post Description -->
								
							</article>				
						</div>	<!-- END BLOG POST #1 -->
						
					
						<!-- BLOG POST #2 -->
						<div class="col-sm-6 col-md-6">								
							<article id="blog_post_2" class="blog-post">
							
								<!-- Post Image -->
								<div class="col-md-12 col-lg-6">		
									<div class="blog-post-img">
										<img class="img-responsive" src="templates/templates/1/img/blog/img2.jpg" alt="Blog Image" />	
									</div>
								</div>
								
								<!-- Post Description -->
								<div class="col-md-12 col-lg-6">
								
									<!-- Post Titlebar -->
									<div class="blog-post-titlebar">
										<h4><a href="single-post.html">Aliquam malesuada justo phasellus vitae </a></h4>
									</div>

									<!-- Post Summary -->
									<div class="blog-post-desc">
										<p>Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas... </p>
									</div>
									
									<!-- Post Meta -->
									<div class="blog-post-info">
										15 Apr 2014 / By <span class="theme-color">Admin</span> / <a href="single-post.html#post_comments" title="comments">23 Comments</a>
									</div>
									
								</div>	 <!-- End Post Description -->
								
							</article>	
						</div>	<!-- END BLOG POST #2 -->
						
					</div>	<!-- End row -->	 
					
					
					<div class="row">	
					
						<!-- BLOG POST #3 -->
						<div class="col-sm-6 col-md-6">													
							<article id="blog_post_3" class="blog-post">
							
								<!-- Post Video Link -->
								<div class="col-md-12 col-lg-6">
									<div class="blog-video-block">	
										<iframe src="http://player.vimeo.com/video/69988283" width="370" height="250"></iframe>	
									</div>
								</div>	
									
								<!-- Post Description -->
								<div class="col-md-12 col-lg-6">
									
									<!-- Post Titlebar -->
									<div class="blog-post-titlebar">
										<h4><a href="single-post.html">Standard post with embedded video from Vimeo</a></h4>
									</div>

									<!-- Post Summary -->
									<div class="blog-post-desc">
										<p>Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas... </p>
									</div>
										
									<!-- Post Meta -->
									<div class="blog-post-info">
										15 Apr 2014 / By <span class="theme-color">Admin</span> / <a href="single-post.html#post_comments" title="comments">33 Comments</a>
									</div>
										
								</div>	 <!-- End Post Description -->
								
							</article>	
						</div>	<!-- END BLOG POST #3 -->	
						
						
						<!-- BLOG POST #4 -->
						<div class="col-sm-6 col-md-6">						
							<article id="blog_post_4" class="blog-post">
							
								<!-- Post Image -->
								<div class="col-md-12 col-lg-6">					
									<div class="blog-post-img">
										<img class="img-responsive" src="templates/templates/1/img/blog/img3.jpg" alt="Blog Image" />	
									</div>
								</div>
								
								<!-- Post Description -->
								<div class="col-md-12 col-lg-6">
								
									<!-- Post Titlebar -->
									<div class="blog-post-titlebar">
										<h4><a href="single-post.html">Curabitur pulvinar tellus vitae sollicitudin pretium</a></h4>
									</div>

									<!-- Post Summary -->
									<div class="blog-post-desc">
										<p>Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas... </p>
									</div>
									
									<!-- Post Meta -->
									<div class="blog-post-info">
										25 Mar 2014 / By <span class="theme-color">Admin</span> / <a href="single-post.html#post_comments" title="comments">41 Comments</a>
									</div>
									
								</div>	 <!-- End Post Description -->
								
							</article>	
						</div>	<!-- END BLOG POST #4 -->
						
					</div>	<!-- End row -->
					
					
					<!-- ALL POSTS BUTTON -->	
					<div id="all-posts" class="row">
						<div class="col-sm-12 text-center">
							<h3>Do you want to get the all posts from our blog?<a href="blog.html">See All Posts</a></h3>
						</div>
					</div>	<!-- END ALL POSTS BUTTON -->
					
					
				</div>	 <!-- End container -->		
			</section>	<!-- END BLOG -->
			

			<!-- CLIENTS
			============================================= -->
			
			<section id="clients" class="parallax">
				<div class="container">	
					
					<!-- Section Title -->	
					<div id="clients-titlebar" class="row">
						<div class="col-sm-12 ">
						
							<div class="titlebar">	
								<h1>Some of <strong>our partners</strong></h1>
								<p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
								
								<!-- Clients Carousel Navigation -->	
								<div class="customNavigation">
									<a class="prev btn btn-primary"><i class="fa fa-angle-left"></i></a>
									<a class="next btn btn-primary"><i class="fa fa-angle-right"></i></a>
								</div>
							</div>

						</div>	
					</div>	<!-- End Section Title -->
					
						
					<!-- CLIENTS CAROUSEL -->
					<div id="clients-holder" class="row">
						<div class="col-md-12">

							<!-- Clients Carousel-->
							<div id="our-customers" class="owl-carousel">
									
								<!-- Client Logo #1-->
								<div id="client-logo-1" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-1.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #2-->
								<div id="client-logo-2" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-2.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #3-->
								<div id="client-logo-3" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-3.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #4-->
								<div id="client-logo-4" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-4.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #5-->
								<div id="client-logo-5" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-5.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #6-->
								<div id="client-logo-6" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-6.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #7-->
								<div id="client-logo-7" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-1.png" alt="customer_image">
								</div>
									
								<!-- Client Logo #8-->
								<div id="client-logo-8" class="item">
									<img class="img-responsive img-customer" src="templates/templates/1/img/thumbs/client-2.png" alt="customer_image">
								</div>

							</div>	<!-- End Clients Carousel-->							  
					
						</div>
					</div>	   <!-- END CLIENTS CAROUSEL -->	
					
					
				</div>	   <!-- End container -->		
			</section>  <!-- END CLIENTS -->
			
			
			<!-- CALL TO ACTION
			============================================= -->
			
			<section id="call-to-action" class="parallax">
				<div class="container">	
					<div class="row">
					
						<!-- Call To Action Content -->	
						<div class="col-sm-12 text-center">
						
							<h1>The Most <strong>Simple Way</strong> to launch your <strong>startup</strong></h1>
							<p>Praesent semper, lacus sed cursus porta, odio augue feugiat primis in faucibus ultrices posuere cubilia Curae; 
							   Integer congue leo metus, mollis lorem viverra.
							</p>
							
							<!-- Call To Action Button -->	
							<a class="btn btn-primary btn-lg">Download Now</a>
							
						</div>	<!-- End Call To Action Content -->	
					
					</div>	<!-- End row -->	
				</div>	   <!-- End container -->		
			</section>  <!-- END CALL TO ACTION -->
			
			
			<!-- FOOTER
			============================================= -->
			
			<footer id="footer">
				<div class="container">	
					<div class="row">
										
						<!-- Footer Navigation Menu -->
						<div id="footer_nav" class="col-sm-6 col-md-4">
							<ul class="footer-nav clearfix">
								<li><a href="about.html">About</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Terms</a></li>
							</ul>

							<div id="footer_copy">
								<p>&copy; Copyright 2014 <span>Crossway</span> All Right Reserved</p>
							</div>							
						</div>	<!-- End Footer Navigation Menu -->
						
												
						<!-- Footer Social Icons -->
						<div id="footer_icons" class="col-sm-6 col-md-4 text-center">																	
							<ul class="footer-socials clearfix">
								<li><a class="foo_social ico-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="foo_social ico-twitter" href="#"><i class="fa fa-twitter"></i></a></li>	
								<li><a class="foo_social ico-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="foo_social ico-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="foo_social ico-dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
											
							<!--									
								<li><a class="foo_social ico-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="foo_social ico-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>	
								<li><a class="foo_social ico-dropbox" href="#"><i class="fa fa-dropbox"></i></a></li>
								<li><a class="foo_social ico-skype" href="#"><i class="fa fa-skype"></i></a></li>
								<li><a class="foo_social ico-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a class="foo_social ico-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
								<li><a class="foo_social ico-vimeo" href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a class="foo_social ico-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
								<li><a class="foo_social ico-github" href="#"><i class="fa fa-github-alt"></i></a></li>
								<li><a class="foo_social ico-renren" href="#"><i class="fa fa-renren"></i></a></li>
								<li><a class="foo_social ico-vk" href="#"><i class="fa fa-vk"></i></a></li>
								<li><a class="foo_social ico-xing" href="#"><i class="fa fa-xing"></i></a></li>
								<li><a class="foo_social ico-weibo" href="#"><i class="fa fa-weibo"></i></a></li>
								<li><a class="foo_social ico-rss" href="#"><i class="fa fa-rss"></i></a></li>										
							-->										
							</ul>
						</div>	 <!-- End Footer Social Icons -->
						
						
						<!-- Newsletter Form -->						
						<div class="col-md-4">							
							<div id="newsletter_form" class="col-sm-12">
								<div class="clearfix">
									<form id="subscribe-form" class="subscribe-form pull-right" action="newsletter.php" method="post">
										<input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address...">
										<button type="submit" class="subscribe-submit">Subscribe</button>
									</form>
								</div>	
								<p id="newsletter-paragraph" class="pull-right">Join our newsletter subscription, <span>be always informed</span></p>
							</div>
						</div>	<!-- End Newsletter Form -->
						
											
					</div>	<!-- End row -->						
				</div>	  <!-- End container -->		
			</footer>	<!-- END FOOTER -->
			
		
		</div>	<!-- END CONTENT WRAPPER -->
	
	
		<!-- EXTERNAL SCRIPTS
		============================================= -->
		
		<script src="templates/templates/1/js/jquery-2.1.0.min.js" type="text/javascript"></script>
		<script src="templates/templates/1/js/bootstrap.min.js" type="text/javascript"></script>	
		<script src="templates/templates/1/js/retina.js" type="text/javascript"></script>	
		<script src="templates/templates/1/js/modernizr.custom.js" type="text/javascript"></script>	
		<script src="templates/templates/1/js/jquery.easing.js" type="text/javascript"></script>
		<script src="templates/templates/1/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<script src="templates/templates/1/js/jquery.validate.min.js" type="text/javascript"></script>
		<script defer src="templates/templates/1/js/jquery.flexslider.js" type="text/javascript"></script>
		<script src="templates/templates/1/js/jquery.accordion.source.js" type="text/javascript"></script>	
		<script src="templates/templates/1/js/owl.carousel.js" type="text/javascript"></script>
		<script src="templates/templates/1/js/waypoints.min.js" type="text/javascript"></script>	
		<script src="templates/templates/1/js/animations.js" type="text/javascript"></script>		
		<script src="templates/templates/1/js/custom.js" type="text/javascript"></script>
		

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
				
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
		
	
	</body>

</html>