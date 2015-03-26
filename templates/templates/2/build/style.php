/*-----------------------------------------------------------------------------------

	Theme Name: Canvas
	Theme URI: http://themes.semicolonweb.com/html/canvas
	Description: The Multi-Purpose Template
	Author: SemiColonWeb
	Author URI: http://themeforest.net/user/semicolonweb
	Version: 2.0

-----------------------------------------------------------------------------------*/


dl, dt, dd, ol, ul, li {
	margin: 0;
	padding: 0;
}

.clear {
	clear: both;
	display: block;
	font-size: 0px;
	height: 0px;
	line-height: 0;
	width: 100%;
	overflow:hidden;
}

::selection {
	background: #1ABC9C;
	color: #FFF;
	text-shadow: none;
}

::-moz-selection {
	background: #1ABC9C; /* Firefox */
	color: #FFF;
	text-shadow: none;
}

::-webkit-selection {
	background: #1ABC9C; /* Safari */
	color: #FFF;
	text-shadow: none;
}

:active,
:focus { outline: none !important; }


/* ----------------------------------------------------------------
	Typography
-----------------------------------------------------------------*/


body {
	line-height: 1.5;
	color: #555;
	font-family: 'Lato', sans-serif;
}

a {
	text-decoration: none !important;
	color: #1ABC9C;
}

a:hover { color: #222; }

a img { border: none; }

img { max-width: 100%; }

iframe { border: none !important; }


/* ----------------------------------------------------------------
	Basic Layout Styles
-----------------------------------------------------------------*/


h1,
h2,
h3,
h4,
h5,
h6 {
	color: #444;
	font-weight: 600;
	line-height: 1.5;
	margin: 0 0 30px 0;
	font-family: 'Raleway', sans-serif;
}

h5,
h6 { margin-bottom: 20px; }

h1 { font-size: 36px; }

h2 { font-size: 30px; }

h3 { font-size: 24px; }

h4 { font-size: 18px; }

h5 { font-size: 14px; }

h6 { font-size: 12px; }

h4 { font-weight: 600; }

h5,
h6 { font-weight: bold; }

h1 > span:not(.nocolor),
h2 > span:not(.nocolor),
h3 > span:not(.nocolor),
h4 > span:not(.nocolor),
h5 > span:not(.nocolor),
h6 > span:not(.nocolor) { color: #1ABC9C; }

p,
pre,
ul,
ol,
dl,
dd,
blockquote,
address,
table,
fieldset,
form { margin-bottom: 30px; }

small { font-family: 'Lato', sans-serif; }

.uppercase { text-transform: uppercase !important; }

.tright { text-align: right !important; }

.tleft { text-align: left !important; }

.fright { float: right !important; }

.fleft { float: left !important; }

.fnone { float: none !important; }

.ohidden {
	position: relative;
	overflow: hidden !important;
}

#wrapper {
	position: relative;
	float: none;
	width: 1220px;
	margin: 0 auto;
	background-color: #FFF;
	box-shadow: 0 0 10px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 0 10px rgba(0,0,0,0.1);
	-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.line,
.double-line {
	clear: both;
	position: relative;
	width: 100%;
	margin: 60px 0;
	border-top: 1px solid #EEE;
}

.line.line-sm { margin: 30px 0; }

span.middot {
	display: inline-block;
	margin: 0 5px;
}

.double-line { border-top: 3px double #E5E5E5; }

.emptydiv {
	display: block !important;
	position: relative !important;
}

.allmargin { margin: 50px !important; }

.leftmargin { margin-left: 50px !important; }

.rightmargin { margin-right: 50px !important; }

.topmargin { margin-top: 50px !important; }

.bottommargin { margin-bottom: 50px !important; }

.clear-bottommargin { margin-bottom: -50px !important; }

.allmargin-sm { margin: 30px !important; }

.leftmargin-sm { margin-left: 30px !important; }

.rightmargin-sm { margin-right: 30px !important; }

.topmargin-sm { margin-top: 30px !important; }

.bottommargin-sm { margin-bottom: 30px !important; }

.clear-bottommargin-sm { margin-bottom: -30px !important; }

.allmargin-lg { margin: 80px !important; }

.leftmargin-lg { margin-left: 80px !important; }

.rightmargin-lg { margin-right: 80px !important; }

.topmargin-lg { margin-top: 80px !important; }

.bottommargin-lg { margin-bottom: 80px !important; }

.clear-bottommargin-lg { margin-bottom: -80px !important; }

.nomargin {margin: 0 !important; }

.noleftmargin { margin-left: 0 !important; }

.norightmargin { margin-right: 0 !important; }

.notopmargin { margin-top: 0 !important; }

.nobottommargin { margin-bottom: 0 !important; }

.header-stick { margin-top: -50px !important; }

.content-wrap .header-stick { margin-top: -80px !important; }

.footer-stick { margin-bottom: -50px !important; }

.content-wrap .footer-stick { margin-bottom: -80px !important; }

.noborder { border: none !important; }

.noleftborder { border-left: none !important; }

.norightborder { border-right: none !important; }

.notopborder { border-top: none !important; }

.nobottomborder { border-bottom: none !important; }

.noradius { -webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -ms-border-radius: 0 !important; -o-border-radius: 0 !important; border-radius: 0 !important; }

.col-padding { padding: 60px; }

.nopadding { padding: 0 !important; }

.noleftpadding { padding-left: 0 !important; }

.norightpadding { padding-right: 0 !important; }

.notoppadding { padding-top: 0 !important; }

.nobottompadding { padding-bottom: 0 !important; }

.noabsolute { position: relative !important; }

.noshadow { box-shadow: none !important; }

.hidden { display: none !important; }

.nothidden { display: block !important; }

.inline-block {
	float: none !important;
	display: inline-block !important;
}

.center { text-align: center !important; }

.divcenter {
	position: relative !important;
	float: none !important;
	margin-left: auto !important;
	margin-right: auto !important;
}

.bgcolor,
.bgcolor #header-wrap { background-color: #1ABC9C !important; }

.color { color: #1ABC9C !important; }

.border-color { border-color: #1ABC9C !important; }

.nobg { background: none !important; }

.nobgcolor { background-color: transparent !important; }

.bgicon {
	display: block;
	position: absolute;
	bottom: -60px;
	right: -50px;
	font-size: 210px;
	color: rgba(0,0,0,0.1);
}

/* MOVING BG -  TESTIMONIALS */
.bganimate {
  -webkit-animation:BgAnimated 30s infinite linear;
	 -moz-animation:BgAnimated 30s infinite linear;
	  -ms-animation:BgAnimated 30s infinite linear;
	   -o-animation:BgAnimated 30s infinite linear;
		  animation:BgAnimated 30s infinite linear;
}
 @-webkit-keyframes BgAnimated {
  from  {background-position:0 0;}
  to    {background-position:0 400px;}
  }
 @-moz-keyframes BgAnimated {
  from  {background-position:0 0;}
  to    {background-position:0 400px;}
  }
 @-ms-keyframes BgAnimated {
  from  {background-position:0 0;}
  to    {background-position:0 400px;}
  }
 @-o-keyframes BgAnimated {
  from  {background-position:0 0;}
  to    {background-position:0 400px;}
  }
 @keyframes BgAnimated {
  from  {background-position:0 0;}
  to    {background-position:0 400px;}
  }


.input-block-level {
	display: block;
	width: 100% !important;
	min-height: 30px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.vertical-middle {
	height: auto !important;
	left: 0;
}

.magnific-max-width .mfp-content { max-width: 800px; }


/* ----------------------------------------------------------------
	Sections
-----------------------------------------------------------------*/


.section {
	position: relative;
	margin: 60px 0;
	padding: 60px 0;
	background-color: #F9F9F9;
	overflow: hidden;
}

.parallax {
	background-color: transparent;
	background-attachment: fixed;
	background-position: 50% 0;
	background-repeat: no-repeat;
	overflow: hidden;
}

.mobile-parallax,
.video-placeholder {
	background-size: cover !important;
	background-attachment: scroll !important;
	background-position: center center;
}

.section .container { z-index: 2; }

.section .container + .video-wrap { z-index: 1; }

.revealer-image {
	position: relative;
	bottom: -100px;
	transition: bottom .3s ease-in-out;
	-webkit-transition: bottom .3s ease-in-out;
	-o-transition: bottom .3s ease-in-out;
}

.section:hover .revealer-image { bottom: -50px; }


/* ----------------------------------------------------------------
	Columns & Grids
-----------------------------------------------------------------*/


.postcontent { width: 860px; }
.postcontent.bothsidebar { width: 580px; }
.sidebar { width: 240px; }
.col_full { width: 100%; }
.col_half { width: 48%; }
.col_one_third { width: 30.63%; }
.col_two_third { width: 65.33%; }
.col_one_fourth { width: 22%; }
.col_three_fourth { width: 74%; }
.col_one_fifth { width: 16.8%; }
.col_two_fifth { width: 37.6%; }
.col_three_fifth { width: 58.4%; }
.col_four_fifth { width: 79.2%; }
.col_one_sixth { width: 13.33%; }
.col_five_sixth { width: 82.67%; }
body.stretched .container-fullwidth {
	position: relative;
	padding: 0 60px;
	width: 100%;
}

.postcontent,
.sidebar,
.col_full,
.col_half,
.col_one_third,
.col_two_third,
.col_three_fourth,
.col_one_fourth,
.col_one_fifth,
.col_two_fifth,
.col_three_fifth,
.col_four_fifth,
.col_one_sixth,
.col_five_sixth {
	display: block;
	position: relative;
	margin-right: 4%;
	margin-bottom: 50px;
	float: left;
}

.postcontent,
.sidebar { margin-right: 40px; }

.col_full {
	clear: both;
	float: none;
	margin-right: 0;
}

.postcontent.col_last,
.sidebar.col_last { float: right; }

.col_last {
	margin-right: 0 !important;
	clear: right;
}


/* ----------------------------------------------------------------
	Flex Slider
-----------------------------------------------------------------*/


.fslider,
.fslider .flexslider,
.fslider .slider-wrap,
.fslider .slide,
.fslider .slide > a,
.fslider .slide > img,
.fslider .slide > a > img {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}

.fslider { min-height: 32px; }


.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  { outline: none; border: none; }
.slider-wrap,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none; border: none;}

.flexslider {position: relative;margin: 0; padding: 0;}
.flexslider .slider-wrap > .slide {display: none; -webkit-backface-visibility: hidden;}
.flexslider .slider-wrap img {width: 100%; display: block;}
.flex-pauseplay span {text-transform: capitalize;}

.slider-wrap:after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
html[xmlns] .slider-wrap {display: block;}
* html .slider-wrap {height: 1%;}

.no-js .slider-wrap > .slide:first-child {display: block;}

.flex-viewport {
	max-height: 2000px;
	-webkit-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}

.flex-control-nav {
	position: absolute;
	z-index: 10;
	text-align: center;
	top: 14px;
	right: 10px;
	margin: 0;
}

.flex-control-nav li {
	float: left;
	display: block;
	margin: 0 3px;
	width: 10px;
	height: 10px;
}

.flex-control-nav li a {
	display: block;
	cursor: pointer;
	text-indent: -9999px;
	width: 10px !important;
	height: 10px !important;
	border: 1px solid #FFF;
	border-radius: 50%;
	transition: all .3s ease-in-out;
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
}

.flex-control-nav li:hover a,
.flex-control-nav li a.flex-active { background-color: #FFF; }


/* ----------------------------------------------------------------
	Swiper Slider
-----------------------------------------------------------------*/


.swiper-container {
	margin:0 auto;
	position:relative;
	overflow:hidden;
	-webkit-backface-visibility:hidden;
	-moz-backface-visibility:hidden;
	-ms-backface-visibility:hidden;
	-o-backface-visibility:hidden;
	backface-visibility:hidden;
	/* Fix of Webkit flickering */
	z-index:1;
}

.swiper-wrapper {
	position:relative;
	width:100%;
	-webkit-transition-property:-webkit-transform, left, top;
	-webkit-transition-duration:0s;
	-webkit-transform:translate3d(0px,0,0);
	-webkit-transition-timing-function:ease;

	-o-transition-property:-o-transform, left, top;
	-o-transition-duration:0s;
	-o-transform:translate3d(0px,0,0);
	-o-transition-timing-function:ease;
	-o-transform:translate(0px,0px);

	transition-property:transform, left, top;
	transition-duration:0s;
	transform:translate3d(0px,0,0);
	transition-timing-function:ease;

	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

.swiper-free-mode > .swiper-wrapper {
	-webkit-transition-timing-function: ease-out;
	-o-transition-timing-function: ease-out;
	transition-timing-function: ease-out;
	margin: 0 auto;
}

.swiper-slide { float: left; }

/* IE10 Windows Phone 8 Fixes */
.swiper-wp8-horizontal { -ms-touch-action: pan-y; }
.swiper-wp8-vertical { -ms-touch-action: pan-x; }


/* ----------------------------------------------------------------
	Top Bar
-----------------------------------------------------------------*/


#top-bar {
	position: relative;
	border-bottom: 1px solid #EEE;
	height: 45px;
	line-height: 44px;
	font-size: 13px;
}


#top-bar .col_half { width: auto; }


/* ----------------------------------------------------------------
	Top Links
-----------------------------------------------------------------*/


.top-links {
	position: relative;
	float: left;
}

.top-links ul {
	margin: 0;
	list-style: none;
}

.top-links ul li {
	float: left;
	position: relative;
	height: 44px;
	border-left: 1px solid #EEE;
}

.top-links ul li:first-child,
.top-links ul ul li { border-left: 0 !important; }

.top-links li > a {
	display: block;
	padding: 0 12px;
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	height: 44px;
	color: #666;
}

.top-links li i {
	position: relative;
	top: 1px;
}

.top-links li i.icon-angle-down { margin: 0 0 0 2px !important; }

.top-links li i:first-child { margin-right: 2px; }

.top-links li.full-icon i {
	top: 2px;
	font-size: 14px;
	margin: 0;
}

.top-links li:hover { background-color: #EEE; }

.top-links ul ul,
.top-links ul div.top-link-section {
	display: none;
	pointer-events: none;
	position: absolute;
	z-index: 210;
	line-height: 1.5;
	background: #FFF;
	border: 0;
	top: 44px;
	left: 0;
	width: 140px;
	margin: 0;
	border-top: 1px solid #1ABC9C;
	border-bottom: 1px solid #EEE;
	box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
}

.top-links li:hover ul,
.top-links li:hover div.top-link-section { pointer-events: auto; }

.top-links ul ul li {
	float: none;
	height: 36px;
	border-top: 1px solid #F5F5F5;
	border-left: 1px solid #EEE;
}

.top-links ul ul li:hover { background-color: #F9F9F9; }

.top-links ul ul li:first-child {
	border-top: none !important;
	border-left: 1px solid #EEE;
}

.top-links ul ul a {
	height: 36px;
	line-height: 36px;
	font-size: 12px;
}

.top-links ul ul img {
	display: inline-block;
	position: relative;
	top: -1px;
	width: 16px;
	height: 16px;
	margin-right: 4px;
}

.top-links ul ul.top-demo-lang img {
	top: 4px;
	width: 16px;
	height: 16px;
}

.top-links ul div.top-link-section {
	padding: 25px;
	left: 0;
	width: 280px;
}

.fright .top-links ul div.top-link-section,
.top-links.fright ul div.top-link-section {
	left: auto;
	right: 0;
}


/* ----------------------------------------------------------------
	Top Social
-----------------------------------------------------------------*/

#top-social,
#top-social ul { margin: 0; }

#top-social li,
#top-social li a,
#top-social li .ts-icon,
#top-social li .ts-text {
	display: block;
	position: relative;
	float: left;
	width: auto;
	overflow: hidden;
	height: 44px;
	line-height: 44px;
}

#top-social li { border-left: 1px solid #EEE; }

#top-social li:first-child { border-left: 0 !important; }

#top-social li a {
	float: none;
	width: 40px;
	font-weight: bold;
	color: #666;
	-webkit-transition: color .3s ease-in-out, background-color .3s ease-in-out, width .3s ease-in-out;
	-o-transition: color .3s ease-in-out, background-color .3s ease-in-out, width .3s ease-in-out;
	transition: color .3s ease-in-out, background-color .3s ease-in-out, width .3s ease-in-out;
}

#top-social li a:hover {
	color: #FFF !important;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

#top-social li .ts-icon {
	width: 40px;
	text-align: center;
	font-size: 14px;
}


/* ----------------------------------------------------------------
	Top Login
-----------------------------------------------------------------*/

#top-login { margin-bottom: 0; }

#top-login .checkbox { margin-bottom: 10px; }

#top-login .form-control { position: relative; }

#top-login .form-control:focus { border-color: #CCC; }

#top-login .input-group#top-login-username { margin-bottom: -1px; }

#top-login #top-login-username input,
#top-login #top-login-username .input-group-addon {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

#top-login .input-group#top-login-password { margin-bottom: 10px; }

#top-login #top-login-password input,
#top-login #top-login-password .input-group-addon {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}


/* ----------------------------------------------------------------
	Header
-----------------------------------------------------------------*/


#header {
	position: relative;
	background-color: #FFF;
	border-bottom: 1px solid #F5F5F5;
}

#header .container { position: relative; }

#header.transparent-header {
	background: transparent;
	border-bottom: none;
	z-index: 199;
}

#header.semi-transparent { background-color: rgba(255,255,255,0.8); }

#header.transparent-header.floating-header { margin-top: 60px; }

#header.transparent-header.floating-header .container {
	width: 1220px;
	background-color: #FFF;
	padding: 0 40px;
	border-radius: 2px;
}

#header.transparent-header.floating-header.sticky-header .container {
	width: 1170px;
	padding: 0 15px;
}

#header.transparent-header + #slider,
#header.transparent-header + #page-title.page-title-parallax,
#header.transparent-header + #google-map,
#slider + #header.transparent-header {
	top: -100px;
	margin-bottom: -100px;
}

#header.transparent-header.floating-header + #slider,
#header.transparent-header.floating-header + #google-map {
	top: -160px;
	margin-bottom: -160px;
}

#header.transparent-header + #page-title.page-title-parallax .container {
	z-index: 5;
	padding-top: 100px;
}

#header.full-header { border-bottom-color: #EEE; }

body.stretched #header.full-header .container {
	width: 100%;
	padding: 0 30px;
}

#header.transparent-header.full-header #header-wrap { border-bottom: 1px solid rgba(0,0,0,0.1); }

#slider + #header.transparent-header.full-header #header-wrap {
	border-top: 1px solid rgba(0,0,0,0.1);
	border-bottom: none;
}


/* ----------------------------------------------------------------
	Logo
-----------------------------------------------------------------*/


#logo {
	position: relative;
	float: left;
	font-family: 'Raleway', sans-serif;
	font-size: 36px;
	line-height: 100%;
	margin-right: 40px;
}

#header.full-header #logo {
	padding-right: 30px;
	margin-right: 30px;
	border-right: 1px solid #EEE;
}

#header.transparent-header.full-header #logo { border-right-color: rgba(0,0,0,0.1); }

#logo a {
	display: block;
	color: #000;
}

#logo img {
	display: block;
	max-width: 100%;
}

#logo a.standard-logo { display: block; }

#logo a.retina-logo { display: none; }


/* ----------------------------------------------------------------
	Header Right Area
-----------------------------------------------------------------*/


.header-extras {
	float: right;
	margin: 30px 0 0;
}

.header-extras li {
	float: left;
	margin-left: 20px;
	height: 40px;
	overflow: hidden;
	list-style: none;
}

.header-extras li i { margin-top: 3px !important; }

.header-extras li:first-child { margin-left: 0; }

.header-extras li .he-text {
	float: left;
	padding-left: 10px;
	font-weight: bold;
	font-size: 14px;
	line-height: 1.43;
}

.header-extras li .he-text span {
	display: block;
	font-weight: 400;
	color: #1ABC9C;
}


/* ----------------------------------------------------------------
	Primary Menu
-----------------------------------------------------------------*/


#primary-menu {
	float: right;
	height: 100px;
}

#header.full-header #primary-menu > ul {
	float: left;
	padding-right: 15px;
	margin-right: 15px;
	border-right: 1px solid #EEE;
}

#header.transparent-header.full-header #primary-menu > ul { border-right-color: rgba(0,0,0,0.1); }

#primary-menu-trigger,
#page-submenu-trigger {
	opacity: 0;
	pointer-events: none;
	cursor: pointer;
	font-size: 14px;
	position: absolute;
	top: 50%;
	margin-top: -25px;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}

#primary-menu ul {
	list-style: none;
	height: 100px;
	margin: 0;
}

#primary-menu > ul { float: left; }

#primary-menu ul li {
	position: relative;
	float: left;
	margin-left: 2px;
}

#primary-menu ul li.mega-menu { position: inherit; }

#primary-menu ul li:first-child { margin-left: 0; }

#primary-menu ul li a {
	display: block;
	height: 100px;
	line-height: 100px;
	padding: 0 15px;
	color: #444;
	font-weight: bold;
	font-size: 13px;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-family: 'Raleway', sans-serif;
	-webkit-transition: height .4s ease, line-height .4s ease, margin .4s ease, padding .4s ease;
	-o-transition: height .4s ease, line-height .4s ease, margin .4s ease, padding .4s ease;
	transition: height .4s ease, line-height .4s ease, margin .4s ease, padding .4s ease;
}

#primary-menu ul li span { display: none; }

#primary-menu ul li i {
	position: relative;
	font-size: 14px !important;
	top: 1px;
	line-height: 99px;
	width: 14px;
	text-align: center;
	margin-right: 6px;
	-webkit-transition: line-height .4s ease;
	-o-transition: line-height .4s ease;
	transition: line-height .4s ease;
}

#primary-menu > ul > li:hover a,
#primary-menu > ul > li.current a { color: #1ABC9C; }

#primary-menu > ul > li.sub-menu > a > div { }

#primary-menu ul ul,
#primary-menu ul li .mega-menu-content {
	display: none;
	position: absolute;
	width: 220px;
	background-color: #FFF;
	box-shadow: 0px 13px 42px 11px rgba(0, 0, 0, 0.05);
	border: 1px solid #EEE;
	border-top: 2px solid #1ABC9C;
	height: auto;
	z-index: 199;
	top: 100px;
	left: 0;
	margin: 0;
}

#primary-menu ul ul ul {
	top: -2px !important;
	left: 218px;
}

#primary-menu ul ul.menu-pos-invert,
#primary-menu ul li .mega-menu-content.menu-pos-invert {
	left: auto;
	right: 0;
}

#primary-menu ul ul ul.menu-pos-invert { right: 218px; }

#primary-menu ul ul li {
	float: none;
	margin: 0;
}

#primary-menu ul ul li:first-child { border-top: 0; }

#primary-menu ul ul a {
	font-size: 12px;
	font-weight: 600;
	height: 42px !important;
	line-height: 42px !important;
	color: #666 !important;
	padding-top: 0 !important;
	padding-bottom: 0 !important;
	border: 0 !important;
	letter-spacing: 0;
	font-family: 'Lato', sans-serif;
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#primary-menu ul ul li:hover > a {
	background-color: #F9F9F9;
	padding-left: 18px;
	color: #1ABC9C !important;
}

#primary-menu ul ul i { line-height: inherit; }

#primary-menu ul ul > li.sub-menu > a,
#primary-menu ul ul > li.sub-menu:hover > a {
	background-image: url("images/icons/submenu.png");
	background-position: right center;
	background-repeat: no-repeat;
}


/* ----------------------------------------------------------------
	Mega Menu
-----------------------------------------------------------------*/


#primary-menu ul li .mega-menu-content,
#primary-menu ul li.mega-menu-small .mega-menu-content { width: 400px; }

#primary-menu ul li.mega-menu .mega-menu-content,
.floating-header.sticky-header #primary-menu ul li.mega-menu .mega-menu-content {
	margin: 0 15px;
	width: 1140px;
	top: 100px;
}

.floating-header #primary-menu ul li.mega-menu .mega-menu-content {
	margin: 0;
	width: 1220px;
}

body.stretched .container-fullwidth #primary-menu ul li.mega-menu .mega-menu-content { margin: 0 60px; }

body.stretched #header.full-header #primary-menu ul li.mega-menu .mega-menu-content { margin: 0 30px; }

#primary-menu ul li.mega-menu .mega-menu-content.style-2 { padding: 0 10px; }

#primary-menu ul li .mega-menu-content ul {
	display: block;
	position: relative;
	top: 0;
	min-width: inherit;
}

#primary-menu ul li .mega-menu-content > ul { float: left; }

#primary-menu ul li .mega-menu-content ul:not(.megamenu-dropdown) {
	display: block !important;
	opacity: 1 !important;
	top: 0;
	left: 0;
}

#primary-menu ul li .mega-menu-content.col-2 > ul,
#primary-menu ul li .mega-menu-content.col-3 > ul,
#primary-menu ul li .mega-menu-content.col-4 > ul,
#primary-menu ul li .mega-menu-content.col-5 > ul {
	width: 50%;
	margin: 0;
	border-left: 1px solid #F2F2F2;
}

#primary-menu ul li .mega-menu-content.col-3 > ul { width: 33.33%; }

#primary-menu ul li .mega-menu-content.col-4 > ul { width: 25%; }

#primary-menu ul li .mega-menu-content.col-5 > ul { width: 20%; }

#primary-menu ul li .mega-menu-content > ul:first-child { border-left: 0; }

#primary-menu ul li .mega-menu-content ul a {
	height: 42px;
	line-height: 42px;
}

#primary-menu ul li .mega-menu-content ul {
	width: 100%;
	border: 0;
	box-shadow: none;
	background-color: transparent;
}

#primary-menu ul li .mega-menu-content.style-2 > ul { padding: 30px 20px; }

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title { margin-top: 20px; }

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:first-child { margin-top: 0; }

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a {
	font-size: 13px;
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
	letter-spacing: 1px;
	text-transform: uppercase !important;
	margin-bottom: 15px;
	color: #444 !important;
	padding: 0;
	height: auto !important;
	line-height: 1.3 !important;
}

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:hover > a {
	background-color: transparent;
	font-weight: bold;
	padding: 0;
	color: #444 !important;
}

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover { color: #1ABC9C !important; }

#primary-menu ul ul i { line-height: inherit; }

#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title.sub-menu > a,
#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title.sub-menu:hover > a { background: none; }

#primary-menu ul li .mega-menu-content.style-2 li { border: 0; }

#primary-menu ul li .mega-menu-content.style-2 ul a {
	padding-left: 5px;
	height: 36px !important;
	line-height: 36px !important;
}

#primary-menu ul li .mega-menu-content.style-2 ul a:hover { padding-left: 12px; }


/* Primary Menu - Style 2
-----------------------------------------------------------------*/

#primary-menu.style-2 {
	float: none;
	max-width: none;
	border-top: 1px solid #F5F5F5;
}

#primary-menu.style-2 > div > ul { float: left; }

#primary-menu.style-2,
#primary-menu.style-2 > div > ul,
#primary-menu.style-2 > div > ul > li > a { height: 60px; }

#logo + #primary-menu.style-2 {
	height: 100px;
	border-top: 0;
}

#primary-menu.style-2 > div > ul > li > a { line-height: 60px; }

#primary-menu.style-2 > div > ul > li > a i { line-height: 59px; }

#primary-menu.style-2 ul ul,
#primary-menu.style-2 ul li .mega-menu-content { top: 60px; }

#logo + #primary-menu.style-2 > ul > li > ul,
#logo + #primary-menu.style-2 ul li .mega-menu-content { top: 100px; }

#primary-menu.style-2 > div #top-search,
#primary-menu.style-2 > div #top-cart,
#primary-menu.style-2 > div #side-panel-trigger {
	margin-top: 20px;
	margin-bottom: 20px;
}

#primary-menu > div > ul > li:hover a,
#primary-menu > div > ul > li.current a { color: #1ABC9C; }

body:not(.device-sm):not(.device-xs):not(.device-xxs) #primary-menu.style-2.center > ul,
body:not(.device-sm):not(.device-xs):not(.device-xxs) #primary-menu.style-2.center > div {
	float: none;
	display: inline-block;
	width: auto;
	text-align: left;
}


/* Primary Menu - Style 3
-----------------------------------------------------------------*/

#primary-menu.style-3 > ul > li > a {
	height: 44px;
	line-height: 44px;
	margin: 28px 0;
	border-radius: 2px;
}

#primary-menu.style-3 > ul > li > a i { line-height: 43px; }

#primary-menu.style-3 > ul > li:hover > a {
	color: #444;
	background-color: #F5F5F5;
}

#primary-menu.style-3 > ul > li.current > a {
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	background-color: #1ABC9C;
}


/* Primary Menu - Style 4
-----------------------------------------------------------------*/

#primary-menu.style-4 > ul > li > a {
	height: 44px;
	line-height: 42px;
	margin: 28px 0;
	border-radius: 2px;
	border: 1px solid transparent;
}

#primary-menu.style-4 > ul > li > a i { line-height: 41px; }

#primary-menu.style-4 > ul > li:hover > a,
#primary-menu.style-4 > ul > li.current > a { border-color: #1ABC9C; }


/* Primary Menu - Style 5
-----------------------------------------------------------------*/

#primary-menu.style-5 > ul {
	padding-right: 10px;
	margin-right: 5px;
	border-right: 1px solid #EEE;
}

#primary-menu.style-5 > ul > li { margin-left: 15px; }

#primary-menu.style-5 > ul > li:first-child { margin-left: 0; }

#primary-menu.style-5 > ul > li > a { line-height: 1; }

#primary-menu.style-5 > ul > li > a > div {
	padding: 25px 0;
	line-height: 1;
}

#primary-menu.style-5 > ul > li > a i {
	display: block;
	width: auto;
	top: 0;
	margin: 0 0 8px;
	font-size: 28px !important;
	line-height: 1;
	text-align: center;
}


/* Primary Menu - Style 6
-----------------------------------------------------------------*/

#primary-menu.style-6 > ul > li > a { position: relative; }

#primary-menu.style-6 > ul > li > a:after,
#primary-menu.style-6 > ul > li.current > a:after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 2px;
	width: 0;
	border-top: 2px solid #1ABC9C;
	-webkit-transition: width .3s ease;
	-o-transition: width .3s ease;
	transition: width .3s ease;
}

#primary-menu.style-6 > ul > li.current > a:after,
#primary-menu.style-6 > ul > li:hover > a:after { width: 100%; }


/* Primary Menu - Sub Title
-----------------------------------------------------------------*/

#primary-menu.sub-title > ul > li,
#primary-menu.sub-title.style-2 > div > ul > li {
	background: url("images/icons/menu-divider.png") no-repeat right center;
	margin-left: 1px;
}

#primary-menu.sub-title ul li:first-child {
	padding-left: 0;
	margin-left: 0;
}

#primary-menu.sub-title ul li a {
	height: auto;
	line-height: 14px;
	padding: 27px 20px 32px;
	text-transform: uppercase;
	border-top: 5px solid transparent;
}

#primary-menu.sub-title ul li span {
	display: block;
	margin-top: 10px;
	line-height: 12px;
	font-size: 11px;
	font-weight: 400;
	color: #888;
	text-transform: capitalize;
}

#primary-menu.sub-title ul li i { line-height: 13px; }

#primary-menu.sub-title > ul > li:hover > a,
#primary-menu.sub-title > ul > li.current > a,
#primary-menu.sub-title > div > ul > li:hover > a,
#primary-menu.sub-title > div > ul > li.current > a {
	background-color: #1ABC9C;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	border-top-color: rgba(0,0,0,0.1);
}

#primary-menu.sub-title > ul > li:hover span,
#primary-menu.sub-title > ul > li.current span,
#primary-menu.sub-title.style-2 > div > ul > li:hover span,
#primary-menu.sub-title.style-2 > div > ul > li.current span { color: #EEE; }

#primary-menu.sub-title.style-2 ul ul span { display: none; }


/* Primary Menu - Style 2 with Sub Title
-----------------------------------------------------------------*/

#primary-menu.sub-title.style-2 > div > ul > li { background-position: left center; }

#primary-menu.sub-title.style-2,
#primary-menu.sub-title.style-2 > div > ul,
#primary-menu.sub-title.style-2 > div > ul > li > a { height: 80px; }

#primary-menu.sub-title.style-2 div ul ul,
#primary-menu.sub-title.style-2 ul li .mega-menu-content { top: 80px; }

#primary-menu.sub-title.style-2 ul li .mega-menu-content ul { top: 0; }

#primary-menu.sub-title.style-2 > div #top-search,
#primary-menu.sub-title.style-2 > div #top-cart,
#primary-menu.sub-title.style-2 > div #side-panel-trigger {
	float: right;
	margin-top: 30px;
	margin-bottom: 30px;
}

#primary-menu.sub-title.style-2 div ul li:first-child,
#primary-menu.sub-title.style-2 > div > ul > li:hover + li,
#primary-menu.sub-title.style-2 > div > ul > li.current + li { background-image: none; }

#primary-menu.sub-title.style-2 > div > ul > li > a {
	height: auto;
	line-height: 14px;
	padding: 17px 20px 22px;
}


/* Primary Menu - Overlay Menu
-----------------------------------------------------------------*/


@media (min-width: 992px) {

.overlay-menu:not(.top-search-open) #primary-menu-trigger {
	opacity: 1;
	pointer-events: auto;
	left: auto;
	right: 75px;
	width: 20px;
	height: 20px;
	line-height: 20px;
	margin-top: -10px;
}

.overlay-menu:not(.top-search-open) .full-header #primary-menu-trigger { right: 90px; }

.overlay-menu #primary-menu > #overlay-menu-close {
	opacity: 0;
	pointer-events: none;
	position: fixed;
	top: 25px;
	left: auto;
	right: 25px;
	width: 48px;
	height: 48px;
	line-height: 48px;
	font-size: 24px;
	text-align: center;
	color: #444;
	z-index: 300;
	-webkit-transform: translateY(-80px);
	-ms-transform: translateY(-80px);
	-o-transform: translateY(-80px);
	transform: translateY(-80px);
	-webkit-transition: opacity .4s ease, transform .45s .15s ease;
	-o-transition: opacity .4s ease, transform .45s .15s ease;
	transition: opacity .4s ease, transform .45s .15s ease;
}

.overlay-menu #primary-menu > ul {
	opacity: 0 !important;
	pointer-events: none;
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100% !important;
	z-index: 299;
	background: rgba(255,255,255,0.95);
	-webkit-transition: opacity .7s ease;
	-o-transition: opacity .7s ease;
	transition: opacity .7s ease;
}

.overlay-menu #primary-menu > ul.show {
	opacity: 1 !important;
	display: inherit !important;
	pointer-events: auto;
}

.overlay-menu #primary-menu > ul.show ~ #overlay-menu-close {
	opacity: 1;
	-webkit-transition: opacity .7s .4s ease, transform .45s .15s ease;
	-o-transition: opacity .7s .4s ease, transform .45s .15s ease;
	transition: opacity .7s .4s ease, transform .45s .15s ease;
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	transform: translateY(0);
	pointer-events: auto;
}

.overlay-menu #primary-menu > ul > li {
	float: none;
	text-align: center;
	max-width: 400px;
	margin: 0 auto;
}

.overlay-menu #primary-menu > ul > li > a {
	height: 60px !important;
	line-height: 60px !important;
	font-size: 24px;
	letter-spacing: 2px;
	text-transform: none;
	opacity: 0;
	-webkit-transform: translateY(-80px);
	-ms-transform: translateY(-80px);
	-o-transform: translateY(-80px);
	transform: translateY(-80px);
	-webkit-transition: opacity .7s .15s ease, transform .45s .15s ease, color .2s linear;
	-o-transition: opacity .7s .15s ease, transform .45s .15s ease, color .2s linear;
	transition: opacity .7s .15s ease, transform .45s .15s ease, color .2s linear;
}

.overlay-menu #primary-menu > ul.show > li > a {
	opacity: 1;
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	transform: translateY(0);
}

}


/* ----------------------------------------------------------------
	Top Search
-----------------------------------------------------------------*/


#top-search,
#top-cart,
#side-panel-trigger {
	float: right;
	margin: 40px 0 40px 15px;
}

#top-cart { position: relative; }

#top-search a,
#top-cart a,
#side-panel-trigger a {
	display: block;
	position: relative;
	width: 14px;
	height: 14px;
	font-size: 14px;
	line-height: 20px;
	text-align: center;
	color: #333;
	-webkit-transition: color .3s ease-in-out;
	-o-transition: color .3s ease-in-out;
	transition: color .3s ease-in-out;
}

#top-search a { z-index: 11; }

#top-search a i {
	position: absolute;
	top: 0;
	left: 0;
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}

body.top-search-open #top-search a i.icon-search3,
#top-search a i.icon-line-cross { opacity: 0; }

body.top-search-open #top-search a i.icon-line-cross {
	opacity: 1;
	z-index: 11;
	font-size: 16px;
}

#top-cart a:hover { color: #1ABC9C; }

#top-search form {
	opacity: 0;
	z-index: -2;
	position: absolute;
	width: 100% !important;
	height: 100% !important;
	padding: 0 15px;
	margin: 0;
	top: 0;
	left: 0;
	-webkit-transition: opacity .3s ease-in-out;
	-o-transition: opacity .3s ease-in-out;
	transition: opacity .3s ease-in-out;
}

body.top-search-open #top-search form {
	opacity: 1;
	z-index: 10;
}

#top-search form input {
	box-shadow: none !important;
	pointer-events: none;
	border-radius: 0;
	border: 0;
	outline: 0 !important;
	font-size: 32px;
	padding: 10px 80px 10px 0;
	height: 100%;
	background-color: transparent;
	color: #333;
	font-weight: 700;
	margin-top: 0 !important;
	font-family: 'Raleway', sans-serif;
	letter-spacing: 2px;
}

body:not(.device-sm):not(.device-xs):not(.device-xxs) #header.full-header #top-search form input { padding-left: 40px; }

body:not(.device-sm):not(.device-xs):not(.device-xxs) .container-fullwidth #top-search form input { padding-left: 60px; }

body.top-search-open #top-search form input { pointer-events: auto; }

body:not(.device-sm):not(.device-xs):not(.device-xxs) #header.transparent-header:not(.sticky-header):not(.full-header):not(.floating-header) #top-search form input { border-bottom: 2px solid rgba(0,0,0,0.1); }

#top-search form input::-moz-placeholder {
	color: #555;
	opacity: 1;
	text-transform: uppercase;
}
#top-search form input:-ms-input-placeholder {
	color: #555;
	text-transform: uppercase;
}
#top-search form input::-webkit-input-placeholder {
	color: #555;
	text-transform: uppercase;
}

#primary-menu .container #top-search form input,
.sticky-header #top-search form input { border: none !important; }


/* ----------------------------------------------------------------
	Top Cart
-----------------------------------------------------------------*/


#top-cart { margin-right: 0; }

#top-cart > a > span {
	display: block;
	position: absolute;
	top: -7px;
	left: auto;
	right: -14px;
	font-size: 10px;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	width: 16px;
	height: 16px;
	line-height: 16px;
	text-align: center;
	background-color: #1ABC9C;
	border-radius: 50%;
}

#top-cart .top-cart-content {
	opacity: 0;
	z-index: -2;
	position: absolute;
	width: 280px;
	background-color: #FFF;
	box-shadow: 0px 20px 50px 10px rgba(0, 0, 0, 0.05);
	border: 1px solid #EEE;
	border-top: 2px solid #1ABC9C;
	top: 60px;
	right: -15px;
	left: auto;
	margin: -10000px 0 0;
	-webkit-transition: opacity .5s ease, top .4s ease;
	-o-transition: opacity .5s ease, top .4s ease;
	transition: opacity .5s ease, top .4s ease;
}

.style-2 .container #top-cart .top-cart-content { top: 40px; }

.style-2.sub-title .container #top-cart .top-cart-content { top: 50px; }

#top-cart.top-cart-open .top-cart-content {
	opacity: 1;
	z-index: 11;
	margin-top: 0;
}

.top-cart-title {
	padding: 12px 15px;
	border-bottom: 1px solid #EEE;
}

.top-cart-title h4 {
	margin-bottom: 0;
	font-size: 15px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.top-cart-items { padding: 15px; }

.top-cart-item {
	padding-top: 15px;
	margin-top: 15px;
	border-top: 1px solid #F5F5F5;
}

.top-cart-item:first-child {
	padding-top: 0;
	margin-top: 0;
	border-top: 0;
}

.top-cart-item-image {
	float: left;
	margin-right: 15px;
	width: 48px !important;
	height: 48px !important;
	border: 2px solid #EEE;
	-webkit-transition: border-color .2s linear;
	-o-transition: border-color .2s linear;
	transition: border-color .2s linear;
}

.top-cart-item-image a,
.top-cart-item-image img {
	display: block;
	width: 44px !important;
	height: 44px !important;
}

.top-cart-item-image:hover { border-color: #1ABC9C; }

.top-cart-item-desc {
	position: relative;
	overflow: hidden;
}

.top-cart-item-desc a {
	text-align: left !important;
	font-size: 13px !important;
	width: auto !important;
	height: auto !important;
	font-weight: 600;
}

.top-cart-item-desc a:hover { color: #1ABC9C !important; }

.top-cart-item-desc span.top-cart-item-price {
	display: block;
	line-height: 20px;
	font-size: 12px !important;
	color: #999;
}

.top-cart-item-desc span.top-cart-item-quantity {
	display: block;
	position: absolute;
	font-size: 12px !important;
	right: 0;
	top: 2px;
	color: #444;
}

.top-cart-action {
	padding: 15px;
	border-top: 1px solid #EEE;
}

.top-cart-action span.top-checkout-price {
	font-size: 20px;
	color: #1ABC9C;
}


/* ----------------------------------------------------------------
	Sticky Header
-----------------------------------------------------------------*/

#header,
#header-wrap,
#logo img,
#primary-menu:not(.style-2),
#primary-menu:not(.style-2) > ul {
	height: 100px;
	-webkit-transition: height .4s ease, opacity .3s ease;
	-o-transition: height .4s ease, opacity .3s ease;
	transition: height .4s ease, opacity .3s ease;
}

#header.sticky-style-2 { height: 161px; }

#header.sticky-style-3 { height: 181px; }

#header.sticky-style-2 #header-wrap,
#header.sticky-style-3 #header-wrap { height: 60px; }

#primary-menu > ul > li > ul,
#primary-menu > ul > li > .mega-menu-content,
#primary-menu > ul > li.mega-menu > .mega-menu-content {
	-webkit-transition: top .4s ease;
	-o-transition: top .4s ease;
	transition: top .4s ease;
}

#top-search,
#top-cart {
	-webkit-transition: margin .4s ease, opacity .3s ease;
	-o-transition: margin .4s ease, opacity .3s ease;
	transition: margin .4s ease, opacity .3s ease;
}

body:not(.top-search-open) #header-wrap #logo,
body:not(.top-search-open) #primary-menu > ul,
body:not(.top-search-open) #primary-menu > .container > ul,
body:not(.top-search-open) #top-cart,
body:not(.top-search-open) #side-panel-trigger {
	opacity: 1;
	-webkit-transition: height .4s ease, margin .4s ease, opacity .2s .2s ease;
	-o-transition: height .4s ease, margin .4s ease, opacity .2s .2s ease;
	transition: height .4s ease, margin .4s ease, opacity .2s .2s ease;
}

body.top-search-open #header-wrap #logo,
body.top-search-open #primary-menu > ul,
body.top-search-open #primary-menu > .container > ul,
body.top-search-open #top-cart,
body.top-search-open #side-panel-trigger { opacity: 0; }

#header.sticky-header.semi-transparent { background-color: transparent; }

#header-wrap { position: relative; }

#header.sticky-header #header-wrap {
	z-index: 199;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background-color: #FFF;
	box-shadow: 0 0 10px rgba(0,0,0,0.1);
	-webkit-backface-visibility: hidden;
}

#header.semi-transparent.sticky-header #header-wrap { background-color: rgba(255,255,255,0.8) }

#header.sticky-header:not(.static-sticky),
#header.sticky-header:not(.static-sticky) #header-wrap,
#header.sticky-header:not(.static-sticky):not(.sticky-style-2) #logo img,
#header.sticky-header:not(.static-sticky) #primary-menu,
#header.sticky-header:not(.static-sticky) #primary-menu > ul,
#header.sticky-header:not(.static-sticky) #primary-menu > ul > li > a { height: 60px; }

#header.sticky-header:not(.static-sticky).sticky-style-2 { height: 161px; }

#header.sticky-header:not(.static-sticky) #primary-menu > ul > li > a { line-height: 60px; }

#header.sticky-header:not(.static-sticky) #primary-menu > ul > li > a i { line-height: 59px; }

#header.sticky-header:not(.static-sticky) #primary-menu > ul > li > ul,
#header.sticky-header:not(.static-sticky) #primary-menu > ul > li > .mega-menu-content,
#header.sticky-header:not(.static-sticky) #primary-menu > ul > li.mega-menu > .mega-menu-content { top: 60px; }

#header.sticky-header:not(.static-sticky) #top-search,
#header.sticky-header:not(.static-sticky) #top-cart,
#header.sticky-header:not(.static-sticky) #side-panel-trigger {
	margin-top: 20px !important;
	margin-bottom: 20px !important;
}

#header.sticky-header:not(.static-sticky) #top-cart .top-cart-content { top: 40px; }

#header.sticky-header.sticky-style-2 #primary-menu { border-top: 0; }

/* Primary Menu - Style 3
-----------------------------------------------------------------*/

#header.sticky-header:not(.static-sticky) #primary-menu.style-3 > ul > li > a {
	margin: 0;
	border-radius: 0;
}

/* Primary Menu - Style 4
-----------------------------------------------------------------*/

#header.sticky-header:not(.static-sticky) #primary-menu.style-4 > ul > li > a {
	height: 36px;
	line-height: 34px;
	margin: 12px 0;
}

#header.sticky-header:not(.static-sticky) #primary-menu.style-4 > ul > li > a i { line-height: 33px; }

/* Primary Menu - Style 5
-----------------------------------------------------------------*/

#header.sticky-header:not(.static-sticky) #primary-menu.style-5 > ul > li { margin-left: 2px; }

#header.sticky-header:not(.static-sticky) #primary-menu.style-5 > ul > li:first-child { margin-left: 0; }

#header.sticky-header:not(.static-sticky) #primary-menu.style-5 > ul > li > a { line-height: 60px; }

#header.sticky-header:not(.static-sticky) #primary-menu.style-5 > ul > li > a > div {
	padding: 0;
	line-height: 60px;
}

#header.sticky-header:not(.static-sticky) #primary-menu.style-5 > ul > li > a i {
	display: inline-block;
	width: 14px;
	top: 1px;
	margin: 0 5px 0 0;
	font-size: 14px !important;
	line-height: 59px;
}

/* Primary Menu - Sub Title
-----------------------------------------------------------------*/

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > ul > li,
#header.sticky-header:not(.static-sticky) #primary-menu.sub-title.style-2 > div > ul > li {
	background: none !important;
	margin-left: 2px;
}

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > ul > li:first-child,
#header.sticky-header:not(.static-sticky) #primary-menu.sub-title.style-2 > div > ul > li:first-child { margin-left: 0; }

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > ul > li > a {
	height: 60px;
	line-height: 60px;
	padding: 0 15px;
	text-transform: none;
	font-size: 14px;
	border-top: 0;
}

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title ul li span { display: none; }

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > ul > li > a i { line-height: 59px; }

#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > div > ul > li > ul,
#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > div > ul > li > .mega-menu-content,
#header.sticky-header:not(.static-sticky) #primary-menu.sub-title > div > ul > li.mega-menu > .mega-menu-content { top: 58px; }


/* ----------------------------------------------------------------
	Page Menu
-----------------------------------------------------------------*/

#page-menu,
#page-menu-wrap {
	position: relative;
	height: 44px;
	line-height: 44px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

#page-menu-wrap { background-color: #1ABC9C; }

#page-menu.sticky-page-menu #page-menu-wrap {
	position: fixed;
	z-index: 99;
	top: 60px;
	left: 0;
	width: 100%;
	box-shadow: 0 0 15px rgba(0,0,0,0.3);
	-webkit-backface-visibility: hidden;
}

#page-submenu-trigger {
	top: 0;
	margin-top: 0;
	left: auto;
	right: 15px;
	width: 40px;
	height: 44px;
	line-height: 44px;
}

#page-menu .menu-title {
	float: left;
	color: #FFF;
	font-size: 20px;
	font-weight: 300;
}

#page-menu .menu-title span { font-weight: 600; }

#page-menu nav {
	position: relative;
	float: right;
}

#page-menu nav ul {
	margin-bottom: 0;
	height: 44px;
}

#page-menu nav li {
	position: relative;
	float: left;
	list-style: none;
}

#page-menu nav li a {
	display: block;
	height: 44px;
	line-height: 44px;
	padding: 0 17px;
	color: #FFF;
	font-size: 14px;
}

body:not(.device-touch) #page-menu nav li a {
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#page-menu nav li a:hover,
#page-menu nav li.current a { background-color: rgba(0,0,0,0.15); }


/* Page Menu - Dots Style
-----------------------------------------------------------------*/

#page-menu.dots-menu,
#page-menu.dots-menu #page-menu-wrap {
	position: fixed;
	z-index: 99;
	top: 50%;
	left: auto;
	right: 20px;
	width: 24px;
	height: auto;
	line-height: 1.5;
	background-color: transparent;
	text-shadow: none;
}

#page-menu.dots-menu #page-menu-wrap {
	position: relative;
	box-shadow: none;
}

#page-menu.dots-menu .menu-title { display: none; }

#page-menu.dots-menu nav {
	float: none;
	width: 24px;
}

#page-menu.dots-menu nav ul { height: auto; }

#page-menu.dots-menu nav ul li {
	float: none;
	width: 14px;
	height: 14px;
	margin: 10px 6px;
}

#page-menu.dots-menu nav li a {
	position: relative;
	width: 10px;
	height: 10px;
	line-height: 1.5;
	padding: 0;
	margin: 0 2px;
	background-color: rgba(0,0,0,0.4);
	border-radius: 50%;
	color: #777;
}

#page-menu.dots-menu nav li a:hover { background-color: rgba(0,0,0,0.7) }

#page-menu.dots-menu nav li.current a { background-color: #1ABC9C; }

#page-menu.dots-menu nav li .dots-menu-caption {
	position: absolute;
	width: auto;
	top: -11px;
	right: 25px;
	background-color: #1ABC9C;
	color: #FFF;
	padding: 5px 14px;
	white-space: nowrap;
	pointer-events: none;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
	border-radius: 2px;
	opacity: 0;
}

body:not(.device-touch) #page-menu.dots-menu nav li .dots-menu-caption {
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#page-menu.dots-menu nav li .dots-menu-caption:after {
	position: absolute;
	content: '';
	top: 50%;
	margin-top: -6px;
	left: auto;
	right: -5px;
	width: 0;
	height: 0;
	border-top: 7px solid transparent;
	border-bottom: 7px solid transparent;
	border-left: 6px solid #1ABC9C;
}

#page-menu.dots-menu nav li a:hover + .dots-menu-caption {
	opacity: 1;
	right: 30px;
}


/* ----------------------------------------------------------------
	One Page
-----------------------------------------------------------------*/

.one-page-arrow {
	position: absolute;
	z-index: 3;
	bottom: 20px;
	left: 50%;
	margin-left: -16px;
	width: 32px;
	height: 32px;
	font-size: 32px;
	text-align: center;
	color: #222;
}


/* ----------------------------------------------------------------
	Side Header
-----------------------------------------------------------------*/

@media (min-width: 992px) {


.side-header #header {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 10;
	width: 260px;
	height: 100%;
	background-color: #FFF;
	border: none;
	border-right: 1px solid #EEE;
	overflow: hidden;
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.065);
}

.side-header #header-wrap {
	width: 300px;
	height: 100%;
	overflow: auto;
	padding-right: 40px;
}

.side-header #header .container {
	width: 260px !important;
	padding: 0 30px !important;
	margin: 0 !important;
}

.side-header #logo {
	float: none;
	margin: 60px 0 40px;
}

.side-header #logo img { height: auto !important; }

.side-header #logo:not(.nobottomborder):after,
.side-header #primary-menu:not(.nobottomborder):after {
	display: block;
	content: '';
	width: 20%;
	border-bottom: 1px solid #E5E5E5;
}

.side-header .center #logo:after { margin: 0 auto; }

.side-header #primary-menu { margin-bottom: 30px; }

.side-header #primary-menu:not(.nobottomborder):after { margin-top: 40px; }

.side-header #primary-menu,
.side-header #primary-menu ul {
	float: none;
	height: auto;
}

.side-header #primary-menu ul li {
	float: none;
	margin: 15px 0 0;
}

.side-header #primary-menu ul li:first-child { margin-top: 0; }

.side-header #primary-menu ul li a {
	height: 25px;
	line-height: 25px;
	padding: 0;
	text-transform: uppercase;
}

.side-header #primary-menu ul li i { line-height: 24px; }

.side-header #primary-menu ul ul {
	position: relative;
	width: 100%;
	background-color: transparent;
	box-shadow: none;
	border: none;
	height: auto;
	z-index: 1;
	top: 0;
	left: 0;
	margin: 5px 0;
	padding-left: 12px;
}

.side-header #primary-menu ul ul ul {
	top: 0 !important;
	left: 0;
}

.side-header #primary-menu ul ul.menu-pos-invert {
	left: 0;
	right: auto;
}

.side-header #primary-menu ul ul ul.menu-pos-invert { right: auto; }

.side-header #primary-menu ul ul li {
	margin: 0;
	border: 0;
}

.side-header #primary-menu ul ul li:first-child { border-top: 0; }

.side-header #primary-menu ul ul a {
	font-size: 12px;
	height: auto !important;
	line-height: 24px !important;
	padding: 2px 0 !important;
}

.side-header #primary-menu ul ul li:hover > a {
	background-color: transparent !important;
	color: #444 !important;
}

.side-header #primary-menu ul > li.sub-menu > a,
.side-header #primary-menu ul > li.sub-menu:hover > a { background-image: none !important; }

.side-header #primary-menu ul > li.sub-menu > a:after {
	position: absolute;
	content: '\e7a5';
	top: 1px;
	right: 0;
	-webkit-transition: transform .2s linear;
	-o-transition: transform .2s linear;
	transition: transform .2s linear;
}

.side-header #primary-menu ul > li.sub-menu:hover > a:after {
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg);
}

.side-header:not(.open-header) #wrapper {
	margin: 0 0 0 260px !important;
	width: auto !important;
}

.side-header:not(.open-header) #wrapper .container {
	width: auto;
	margin: 0 40px;
}


/* Side Header - Push Header
-----------------------------------------------------------------*/

.side-header.open-header.push-wrapper { overflow-x: hidden; }

.side-header.open-header #header { left: -260px; }

.side-header.open-header.side-header-open #header { left: 0; }

.side-header.open-header #wrapper { left: 0; }

.side-header.open-header.push-wrapper.side-header-open #wrapper { left: 260px; }

#header-trigger { display: none; }

.side-header.open-header #header-trigger {
	display: block;
	position: fixed;
	cursor: pointer;
	top: 20px;
	left: 20px;
	z-index: 11;
	font-size: 16px;
	width: 32px;
	height: 32px;
	line-height: 32px;
	background-color: #FFF;
	text-align: center;
	border-radius: 2px;
}

.side-header.open-header.side-header-open #header-trigger { left: 280px; }

.side-header.open-header #header-trigger i:nth-child(1),
.side-header.open-header.side-header-open #header-trigger i:nth-child(2) { display: block; }

.side-header.open-header.side-header-open #header-trigger i:nth-child(1),
.side-header.open-header #header-trigger i:nth-child(2) { display: none; }


.side-header.open-header #header,
.side-header.open-header #header-trigger,
.side-header.open-header.push-wrapper #wrapper {
	-webkit-transition: left .4s ease;
	-o-transition: left .4s ease;
	transition: left .4s ease;
}


/* Side Header - Right Aligned
-----------------------------------------------------------------*/

.side-header.side-header-right #header {
	left: auto;
	right: 0;
	border: none;
	border-left: 1px solid #EEE;
}

.side-header.side-header-right:not(.open-header) #wrapper { margin: 0 260px 0 0 !important; }

.side-header.side-header-right.open-header #header {
	left: auto;
	right: -260px;
}

.side-header.side-header-right.open-header.side-header-open #header {
	left: auto;
	right: 0;
}

.side-header.side-header-right.open-header.push-wrapper.side-header-open #wrapper { left: -260px; }

.side-header.side-header-right.open-header #header-trigger {
	left: auto;
	right: 20px;
}

.side-header.side-header-right.open-header.side-header-open #header-trigger {
	left: auto;
	right: 280px;
}

.side-header.side-header-right.open-header #header,
.side-header.side-header-right.open-header #header-trigger {
	-webkit-transition: right .4s ease;
	-o-transition: right .4s ease;
	transition: right .4s ease;
}


}


/* ----------------------------------------------------------------
	Side Push Panel
-----------------------------------------------------------------*/

body.side-push-panel { overflow-x: hidden; }

body.side-push-panel #side-panel {
	position: fixed;
	top: 0;
	right: -300px;
	z-index: 399;
	width: 300px;
	height: 100%;
	background-color: #F5F5F5;
	overflow: hidden;
}

body.side-push-panel #wrapper,
body.side-push-panel #header.sticky-header .container { right: 0; }

body.side-push-panel #side-panel .side-panel-wrap {
	position: absolute;
	top: 0;
	left: auto;
	bottom: 0;
	right: 0;
	width: 300px;
	height: 100%;
	overflow-y: hidden;
	padding: 50px 40px;
	-webkit-backface-visibility: hidden;
}

body.side-push-panel.device-touch #side-panel .side-panel-wrap { overflow-y: scroll; }

body.side-push-panel #side-panel .widget {
	margin-top: 40px;
	padding-top: 40px;
	border-top: 1px solid #E5E5E5;
}

body.side-push-panel #side-panel .widget:first-child {
	padding-top: 0;
	border-top: 0;
	margin: 0;
}

body.side-push-panel.side-panel-open #side-panel { right: 0; }

body.side-push-panel.side-panel-open #wrapper,
body.side-push-panel.side-panel-open #header.sticky-header .container { right: 300px; }

body.side-push-panel #side-panel-trigger {
	display: block;
	cursor: pointer;
	z-index: 11;
	margin-right: 5px;
}

#side-panel-trigger-close a { display: none; }

body.side-push-panel #side-panel,
body.side-push-panel #wrapper,
body.side-push-panel #header .container {
	-webkit-transition: right .4s ease;
	-o-transition: right .4s ease;
	transition: right .4s ease;
}

body.side-push-panel .body-overlay {
	opacity: 0;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.6);
	z-index: -1;
	pointer-events: none;
	-webkit-backface-visibility: hidden;
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}

body.side-push-panel.side-panel-open .body-overlay {
	opacity: 1;
	z-index: 298;
	pointer-events: auto;
}

body.side-push-panel.side-panel-open:not(.device-xxs):not(.device-xs):not(.device-sm) .body-overlay:hover { cursor: url('images/icons/close.png') 15 15, default; }


/* ----------------------------------------------------------------
	Slider
-----------------------------------------------------------------*/


#slider {
	position: relative;
	width: 100%;
	overflow: hidden;
}

.slider-parallax {
	visibility: visible;
	-webkit-transform: translate(0,0);
	-ms-transform: translate(0,0);
	-o-transform: translate(0,0);
	transform: translate(0,0);
	-webkit-backface-visibility: hidden;
}


/* Boxed Slider
-----------------------------------------------------------------*/

.boxed-slider { padding-top: 40px; }


/* Flex Slider - Thumbs
-----------------------------------------------------------------*/

.fslider[data-animation="fade"] .flexslider { height: auto !important; }

.flex-control-nav.flex-control-thumbs {
	position: relative;
	top: 0;
	left: 0;
	right: 0;
	margin: 2px -2px -2px 0;
	height: 75px;
}

.flex-control-nav.flex-control-thumbs li { margin: 0 2px 2px 0; }

.flex-control-nav.flex-control-thumbs li img {
	cursor: pointer;
	text-indent: -9999px;
	border: 0;
	border-radius: 0;
	margin: 0;
	opacity: 0.5;
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.flex-control-nav.flex-control-thumbs li,
.flex-control-nav.flex-control-thumbs li img {
	display: block;
	width: 100px !important;
	height: 75px !important;
}

.flex-control-nav.flex-control-thumbs li:hover img,
.flex-control-nav.flex-control-thumbs li img.flex-active {
	border-width: 0;
	opacity: 1;
}


/* Flex Thumbs - Flexible
-----------------------------------------------------------------*/

.fslider.flex-thumb-grid .flex-control-nav.flex-control-thumbs {
	margin: 2px -2px -2px 0;
	height: auto;
}

.fslider.flex-thumb-grid .flex-control-nav.flex-control-thumbs li {
	width: 25% !important;
	height: auto !important;
	margin: 0;
	padding: 0 2px 2px 0;
}

.fslider.flex-thumb-grid.grid-3 .flex-control-nav.flex-control-thumbs li { width: 33.30% !important; }
.fslider.flex-thumb-grid.grid-5 .flex-control-nav.flex-control-thumbs li { width: 20% !important; }
.fslider.flex-thumb-grid.grid-6 .flex-control-nav.flex-control-thumbs li { width: 16.66% !important; }
.fslider.flex-thumb-grid.grid-8 .flex-control-nav.flex-control-thumbs li { width: 12.5% !important; }
.fslider.flex-thumb-grid.grid-10 .flex-control-nav.flex-control-thumbs li { width: 10% !important; }
.fslider.flex-thumb-grid.grid-12 .flex-control-nav.flex-control-thumbs li { width: 8.33% !important; }

.fslider.flex-thumb-grid .flex-control-nav.flex-control-thumbs li img {
	width: 100% !important;
	height: auto !important;
}


/* Swiper Slider
-----------------------------------------------------------------*/

.swiper_wrapper {
	width: 100%;
	height: 500px;
	overflow: hidden;
}

.full-screen .swiper_wrapper { height: auto; }

.swiper_wrapper .swiper-container {
	position: relative;
	width:100%;
	height:100%;
	margin: 0;
	background: url('images/pattern2.png') repeat;
}

.swiper_wrapper .swiper-slide {
	position: relative;
	margin: 0;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	overflow: hidden;
}

.swiper-slide [data-caption-animate] { -webkit-backface-visibility: hidden; }

.swiper-slide .video-wrap,
.section .video-wrap,
.swiper-slide .yt-bg-player,
.section .yt-bg-player {
	position: absolute;
	width: 100%;
	height: 100%;
	z-index: -1;
	top: 0;
	left: 0;
}

#slider .container {
	position: relative;
	height: 100%;
}

#slider.canvas-slider .swiper-slide img { width: 100%; }

#slider.canvas-slider a {
	display: block;
	height: 100%;
}


/* Revolution Slider
-----------------------------------------------------------------*/

.boxedcontainer {
	max-width: 1140px;
	margin:auto;
}

.tp-banner-container{
	width:100%;
	position:relative;
	padding:0;
}

.tp-banner{
	width:100%;
	position:relative;
}

.tp-banner-fullscreen-container {
	width:100%;
	position:relative;
	padding:0;
}

.tp-banner .button { height: auto !important; }

.tparrows.preview2:after { line-height: 1 !important; }


/* Video Overlay
-----------------------------------------------------------------*/

.video-wrap {
	overflow: hidden;
	width: 100%;
	position: relative;
}

.video-wrap video {
	position: relative;
	z-index: 1;
	width: 100%;
}

.video-overlay,
.video-placeholder {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 5;
	background: transparent url('images/grid.png') repeat;
	-webkit-backface-visibility: hidden;
}

.video-placeholder {
	z-index: 4;
	background-repeat: no-repeat !important;
}


/* Slider Caption
-----------------------------------------------------------------*/

.slider-caption,
.nivo-caption,
.flex-caption {
	position: absolute;
	top: 0;
	left: 15px;
	z-index: 20;
	max-width: 550px;
	color: #EEE;
	font-size: 22px;
	font-weight: 300;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
	-webkit-transition: top .3s ease;
	-o-transition: top .3s ease;
	transition: top .3s ease;
}

.slider-caption:not(.dark),
.slider-caption:not(.dark) h2 {
	color: #222;
	text-shadow: none;
}

.slider-caption h2 {
	font-size: 64px;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-weight: 700;
	line-height: 1;
	margin-bottom: 30px;
}

.slider-caption p {
	margin-bottom: 10px;
	font-size: 24px;
}

.slider-caption.slider-caption-right {
	left: auto;
	right: 15px;
}

.slider-caption.slider-caption-center {
	position: relative;
	max-width: 800px;
	text-align: center;
	margin: 0 auto;
	left: 0;
	right: 0;
}

.slider-caption-bg {
	padding: 5px 12px;
	border-radius: 2px;
	background-color: rgba(0,0,0,0.6);
	top: auto;
	bottom: 50px;
	left: 50px;
}

.slider-caption-bg.slider-caption-bg-light {
	background-color: rgba(255,255,255,0.8);
	color: #333;
	font-weight: 400;
	text-shadow: none;
}

.slider-caption-top-left {
	top: 50px;
	bottom: auto;
}

.slider-caption-top-right {
	top: 50px;
	bottom: auto;
	left: auto;
	right: 50px;
}

.slider-caption-bottom-right {
	left: auto;
	right: 50px;
}


/* Slider Arrows
-----------------------------------------------------------------*/

#slider .owl-theme .owl-controls { margin: 0; }

#slider-arrow-left,
#slider-arrow-right,
.camera_prev,
.camera_next,
#slider .owl-prev,
#slider .owl-next,
.flex-prev,
.flex-next,
.nivo-prevNav,
.nivo-nextNav,
.slider-arrow-top-sm,
.slider-arrow-bottom-sm {
	position: absolute;
	cursor: pointer;
	z-index: 10;
	top: 50%;
	left: 0;
	margin-top: -26px;
	background-color: rgba(0,0,0,0.3);
	width: 52px;
	height: 52px;
	border: 0;
	border-radius: 0 3px 3px 0;
	-webkit-transition: background-color .3s ease-in-out;
	-o-transition: background-color .3s ease-in-out;
	transition: background-color .3s ease-in-out;
}

.slider-arrow-top-sm,
.slider-arrow-bottom-sm {
	top: auto;
	bottom: 57px;
	left: auto;
	right: 20px;
	margin: 0;
	width: 32px;
	height: 32px;
	border-radius: 3px 3px 0 0;
}

.slider-arrow-bottom-sm {
	bottom: 20px;
	border-radius: 0 0 3px 3px;
}

.fslider[data-thumbs="true"] .flex-prev,
.fslider[data-thumbs="true"] .flex-next { margin-top: -64px; }

#slider .owl-prev,
#slider .owl-next {
	-webkit-transition: background-color .3s ease-in-out;
	-o-transition: background-color .3s ease-in-out;
	transition: background-color .3s ease-in-out;
}

#slider-arrow-right,
.camera_next,
#slider .owl-next,
.flex-next,
.nivo-nextNav {
	left: auto;
	right: 0;
	border-radius: 3px 0 0 3px;
}

#slider-arrow-left i,
#slider-arrow-right i,
.camera_prev i,
.camera_next i,
#slider .owl-prev i,
#slider .owl-next i,
.flex-prev i,
.flex-next i,
.nivo-prevNav i,
.nivo-nextNav i,
.slider-arrow-top-sm i,
.slider-arrow-bottom-sm i {
	line-height: 50px;
	width: 34px;
	height: 52px;
	color: #DDD;
	color: rgba(255,255,255,0.8);
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
	font-size: 34px;
	text-align: center;
	margin-left: 7px;
}


.slider-arrow-top-sm i,
.slider-arrow-bottom-sm i {
	width: 32px;
	height: 32px;
	margin: 0;
	line-height: 30px;
	font-size: 18px;
	color: #FFF;
	color: rgba(255,255,255,1);
}

.flex-prev i { margin-left: 9px; }

#slider .owl-prev i { margin-left: 0; }

#slider-arrow-right i,
.camera_next i,
.nivo-nextNav i { margin-left: 10px; }

.flex-next i { margin-left: 11px; }

#slider .owl-next i { margin-right: 4px; }

#slider .owl-controls .owl-nav {
	opacity: 0;
	-webkit-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
}

#slider .owl-controls .owl-nav div,
#slider:hover .owl-controls .owl-nav { opacity: 1; }

#slider-arrow-left:hover,
#slider-arrow-right:hover,
.camera_prev:hover,
.camera_next:hover,
#slider .owl-prev:hover,
#slider .owl-next:hover,
.flex-prev:hover,
.flex-next:hover,
.nivo-prevNav:hover,
.nivo-nextNav:hover,
.slider-arrow-top-sm:hover,
.slider-arrow-bottom-sm:hover { background-color: rgba(0,0,0,0.6) !important; }


/* Slide Number
-----------------------------------------------------------------*/

#slide-number {
	position: absolute;
	opacity: 0;
	top: auto;
	right: 20px;
	bottom: 20px;
	z-index: 20;
	width: 36px;
	height: 40px;
	text-align: center;
	color: rgba(255,255,255,0.8);
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
	font-size: 18px;
	font-weight: 300;
	-webkit-transition: all .3s linear;
	-o-transition: all .3s linear;
	transition: all .3s linear;
}

#slider:hover #slide-number { opacity: 1; }

#slide-number-current,
#slide-number-total {
	position: absolute;
	line-height: 1;
	top: 5px;
	left: 0;
}

#slide-number-total {
	top: auto;
	bottom: 5px;
	left: auto;
	right: 0;
}

#slide-number span {
	display: block;
	font-size: 32px;
	line-height: 40px;
}


/* Pagination
-----------------------------------------------------------------*/

#slider .owl-dots {
	position: absolute;
	width: 100%;
	z-index: 20;
	margin: 0;
	top: auto;
	bottom: 15px;
}

#slider .owl-controls .owl-dots span {
	width: 10px;
	height: 10px;
	margin: 0 3px;
	opacity: 1;
	background-color: transparent;
	border: 1px solid #FFF;
}

#slider .owl-dots .owl-dot.active span,
#slider .owl-dots .owl-dot:hover span { background-color: #FFF !important; }


/* ----------------------------------------------------------------
	Page Title
-----------------------------------------------------------------*/


#page-title {
	position: relative;
	padding: 50px 0;
	background-color: #F5F5F5;
	border-bottom: 1px solid #EEE;
}

#page-title .container { position: relative; }

#page-title h1 {
	padding: 0;
	margin: 0;
	line-height: 1;
	font-weight: 600;
	letter-spacing: 1px;
	color: #333;
	font-size: 28px;
	text-transform: uppercase;
}

#page-title span {
	display: block;
	margin-top: 10px;
	font-weight: 300;
	color: #777;
	font-size: 18px;
}

.breadcrumb {
	position: absolute !important;
	width: auto !important;
	top: 50% !important;
	left: auto !important;
	right: 15px !important;
	margin: -10px 0 0 0 !important;
	background-color: transparent !important;
	padding: 0 !important;
	font-size: 12px;
}

body.stretched .container-fullwidth .breadcrumb { right: 60px !important; }

#header.transparent-header + #page-title.page-title-parallax .breadcrumb { margin-top: 35px !important; }

.breadcrumb a { color: #555; }

.breadcrumb a:hover { color: #1ABC9C; }

.breadcrumb i { width: auto !important; }

/* Page Title - Dark
-----------------------------------------------------------------*/

#page-title.page-title-dark {
	background-color: #333;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15) !important;
	border-bottom: none;
}

#page-title.page-title-dark h1 { color: rgba(255,255,255,0.9) !important; }

#page-title.page-title-dark span { color: rgba(255,255,255,0.7); }

#page-title.page-title-dark .breadcrumb > .active { color: rgba(255,255,255,0.6); }

#page-title.page-title-dark .breadcrumb a { color: rgba(255,255,255,0.8); }

#page-title.page-title-dark .breadcrumb a:hover { color: rgba(255,255,255,0.95); }

/* Page Title - Right Aligned
-----------------------------------------------------------------*/

#page-title.page-title-right { text-align: right; }

#page-title.page-title-right .breadcrumb {
	left: 15px !important;
	right: auto !important;
}

/* Page Title - Center Aligned
-----------------------------------------------------------------*/

#page-title.page-title-center { text-align: center; }

#page-title.page-title-center span {
	max-width: 700px;
	margin-left: auto;
	margin-right: auto;
}

#page-title.page-title-center .breadcrumb {
	position: relative !important;
	top: 0 !important;
	left: 0 !important;
	right: 0 !important;
	margin: 20px 0 0 !important;
}

/* Page Title - Background Pattern
-----------------------------------------------------------------*/

#page-title.page-title-pattern {
	background-image: url('images/pattern.png');
	background-repeat: repeat;
	background-attachment: fixed;
}

/* Page Title - Parallax Background
-----------------------------------------------------------------*/

#page-title.page-title-parallax {
	padding: 100px 0;
	text-shadow: none;
	border-bottom: none;
}

#page-title.page-title-parallax h1 {
	font-size: 40px;
	font-weight: 600;
	letter-spacing: 2px;
}

#page-title.page-title-parallax span { font-size: 22px; }

#page-title.page-title-parallax .breadcrumb { font-size: 13px; }

#page-title.page-title-parallax {
	background-color: transparent;
	background-image: url('images/parallax/parallax-bg.jpg');
	background-attachment: fixed;
	background-position: 50% 0;
	background-repeat: no-repeat;
}


/* Page Title - Mini
-----------------------------------------------------------------*/

#page-title.page-title-mini { padding: 20px 0; }

#page-title.page-title-mini h1 {
	font-weight: 600;
	font-size: 18px;
	color: #444;
}

#page-title.page-title-mini span { display: none; }


/* Page Title - No Background
-----------------------------------------------------------------*/

#page-title.page-title-nobg {
	background: transparent !important;
	border-bottom: 1px solid #F5F5F5;
}


/* Page Title - Video
-----------------------------------------------------------------*/

#page-title.page-title-video {
	background: none;
	position: relative;
	overflow: hidden;
}

#page-title.page-title-video .container { z-index: 3; }

#page-title.page-title-video .video-wrap {
	position: absolute;
	width: 100%;
	top: 0;
	left: 0;
}

#page-title.page-title-video .video-wrap video { width: 100%; }


/* ----------------------------------------------------------------
	Content
-----------------------------------------------------------------*/


#content {
	position: relative;
	overflow: hidden;
	background-color: #FFF;
}

#content p { line-height: 1.8; }

.content-wrap {
	position: relative;
	padding: 80px 0;
}

#content .container { position: relative; }


/* ----------------------------------------------------------------
	Portfolio
-----------------------------------------------------------------*/


/* Portfolio - Filter
-----------------------------------------------------------------*/

#portfolio-filter {
	position: relative;
	margin: 0 0 40px 0;
	list-style: none;
	border: 1px solid rgba(0,0,0,0.07);
	float: left;
	border-radius: 4px;
}

#portfolio-filter li {
	float: left;
	position: relative;
}

#portfolio-filter li a {
	display: block;
	position: relative;
	padding: 12px 18px;
	font-size: 13px;
	line-height: 15px;
	color: #666;
	border-left: 1px solid rgba(0,0,0,0.07);
}

#portfolio-filter li:first-child a {
	border-left: none;
	border-radius: 4px 0 0 4px;
}

#portfolio-filter li:last-child a { border-radius: 0 4px 4px 0; }

#portfolio-filter li a:hover { color: #1ABC9C; }

#portfolio-filter li.activeFilter a {
	color: #FFF !important;
	background-color: #1ABC9C;
	margin: -1px 0;
	padding: 13px 18px;
}

#portfolio-filter li.activeFilter a { font-weight: bold; }


.bothsidebar #portfolio-filter li a { padding: 12px 14px; }

.bothsidebar #portfolio-filter li.activeFilter a { padding: 13px 18px; }


/* Portfolio - Shuffle Icon
-----------------------------------------------------------------*/

#portfolio-shuffle {
	float: right;
	width: 41px;
	height: 41px;
	border: 1px solid rgba(0,0,0,0.07);
	font-size: 14px;
	text-align: center;
	line-height: 41px;
	color: #333;
	border-radius: 4px;
	cursor: pointer;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}

#portfolio-shuffle:hover {
	background-color: #1ABC9C;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}


/* Portfolio - Items
-----------------------------------------------------------------*/

#portfolio {
	position: relative;
	margin: 0 -12px -12px 0;
}

body:not(.device-touch) #portfolio {
	-webkit-transition: height .4s linear;
	-o-transition: height .4s linear;
	transition: height .4s linear;
}

.portfolio-item {
	position: relative;
	float: left;
	width: 276px;
	margin: 0 12px 12px 0;
}

.portfolio-notitle .portfolio-item,
.portfolio-notitle .iportfolio { overflow: hidden; }

.portfolio-item .portfolio-image {
	position: relative;
	overflow: hidden;
}

.portfolio-item .portfolio-image,
.portfolio-item .portfolio-image a,
.portfolio-item .portfolio-image img {
	display: block;
	width: 276px;
	height: 207px;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-notitle .portfolio-image img {
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}


/* Portfolio - Item Title
-----------------------------------------------------------------*/

.portfolio-desc {
	z-index: 3;
	padding: 15px 5px 10px;
}

.portfolio-desc h3 {
	margin: 0;
	padding: 0;
	font-size: 19px;
}

.portfolio-desc h3 a { color: #222; }

.portfolio-desc h3 a:hover { color: #1ABC9C; }

.portfolio-desc span {
	display: block;
	margin-top: 3px;
	color: #888;
}

.portfolio-desc span a { color: #888; }

.portfolio-desc span a:hover { color: #000; }

.portfolio-notitle .portfolio-desc {
	position: absolute;
	display: block !important;
	width: 100%;
	height: 78px;
	padding: 15px 5px;
	top: auto;
	bottom: -79px;
	left: 0;
	background-color: #FFF;
	border-bottom: 1px solid #EEE;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-notitle .portfolio-desc {
	-webkit-transition: bottom .2s ease-in-out;
	-o-transition: bottom .2s ease-in-out;
	transition: bottom .2s ease-in-out;
}

.portfolio-full.portfolio-notitle .portfolio-desc,
.portfolio-nomargin.portfolio-notitle .portfolio-desc {
	bottom: -78px;
	border-bottom: 0;
}

.portfolio-notitle .portfolio-item:hover .portfolio-desc,
.portfolio-notitle .iportfolio:hover .portfolio-desc { bottom: 0 !important; }

.bothsidebar .portfolio-notitle .portfolio-item:hover .portfolio-image img {
	-webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	transform: translateY(0);
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-notitle .portfolio-item:hover .portfolio-image img,
body:not(.device-touch):not(.device-xs):not(.device-xxs) .bothsidebar .portfolio-3.portfolio-notitle .portfolio-item:hover .portfolio-image img,
body:not(.device-touch):not(.device-xs):not(.device-xxs) .bothsidebar .portfolio-2.portfolio-notitle .portfolio-item:hover .portfolio-image img,
body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-notitle .iportfolio:hover .portfolio-image img {
	-webkit-transform: translateY(-20px);
	-moz-transform: translateY(-20px);
	-ms-transform: translateY(-20px);
	-o-transform: translateY(-20px);
	transform: translateY(-20px);
}

body.device-touch.device-xs .portfolio-notitle .portfolio-desc,
body.device-touch.device-xxs .portfolio-notitle .portfolio-desc { display: none !important; }


/* Portfolio - No Margin
-----------------------------------------------------------------*/

#portfolio.portfolio-nomargin,
#portfolio.portfolio-full { margin: 0 !important; }

.portfolio-nomargin .portfolio-item {
	width: 284px;
	margin: 0 !important;
}

.portfolio-nomargin .portfolio-item .portfolio-image,
.portfolio-nomargin .portfolio-item .portfolio-image a,
.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 284px;
	height: 213px;
}

.portfolio-nomargin .portfolio-desc { padding: 15px 10px 15px; }


/* Portfolio - 100% Full Width
-----------------------------------------------------------------*/

#portfolio.portfolio-full {
	margin: 0 !important;
	width: 100.4%;
}

.portfolio-full .portfolio-item {
	width: 25%;
	margin: 0 !important;
	overflow: hidden !important;
}

.portfolio-full .portfolio-item-sizer { width: 25%; }

.portfolio-full .portfolio-item .portfolio-image,
.portfolio-full .portfolio-item .portfolio-image > a,
.portfolio-full .portfolio-item .portfolio-image .slide a,
.portfolio-full .portfolio-item .portfolio-image img {
	width: 100% !important;
	height: auto !important;
}

.portfolio-full .portfolio-desc { padding: 15px; }


/* Portfolio - Sidebar
-----------------------------------------------------------------*/

.postcontent #portfolio { margin: 0 -12px -12px 0; }

.postcontent .portfolio-item {
	width: 206px;
	margin: 0 12px 12px 0;
}

.postcontent .portfolio-item .portfolio-image,
.postcontent .portfolio-item .portfolio-image a,
.postcontent .portfolio-item .portfolio-image img {
	width: 206px;
	height: 155px;
}

.postcontent .portfolio-desc h3 { font-size: 17px; }

.postcontent .portfolio-desc span { font-size: 12px; }


/* Portfolio - Sidebar - No Margin
-----------------------------------------------------------------*/

.postcontent .portfolio-nomargin .portfolio-item { width: 214px; }

.postcontent .portfolio-nomargin .portfolio-item .portfolio-image,
.postcontent .portfolio-nomargin .portfolio-item .portfolio-image a,
.postcontent .portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 214px;
	height: 161px;
}


/* Portfolio - Sidebar - No Title
-----------------------------------------------------------------*/

.postcontent .portfolio-notitle .portfolio-desc {
	height: 70px;
	bottom: -71px;
}

.postcontent .portfolio-full.portfolio-notitle .portfolio-desc,
.postcontent .portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -70px; }

.postcontent .portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -50px !important; }


/* Portfolio - Both Sidebars
-----------------------------------------------------------------*/

.bothsidebar #portfolio { margin: 0; }

.bothsidebar .portfolio-item {
	width: 145px;
	margin: 0;
}

.bothsidebar .portfolio-item .portfolio-image,
.bothsidebar .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-item .portfolio-image img {
	width: 145px;
	height: 108px;
}

.bothsidebar .portfolio-desc { display: none !important; }


/* Portfolio - Masonry
-----------------------------------------------------------------*/

.portfolio-masonry .portfolio-item .portfolio-image,
.portfolio-masonry .portfolio-item .portfolio-image > a,
.portfolio-masonry .portfolio-item .portfolio-image .slide a,
.portfolio-masonry .portfolio-item .portfolio-image img { height: auto !important; }

.portfolio-masonry.mixed-masonry {  }

.portfolio-masonry.mixed-masonry .portfolio-item,
.portfolio-masonry.mixed-masonry .portfolio-item .portfolio-image,
.portfolio-masonry.mixed-masonry .portfolio-item .portfolio-image > a,
.portfolio-masonry.mixed-masonry .portfolio-item .portfolio-image .slide a,
.portfolio-masonry.mixed-masonry .portfolio-item .portfolio-image img {  }


/* Portfolio - Items - 3 Columns
-----------------------------------------------------------------*/

#portfolio.portfolio-3 { margin: 0 -15px -15px 0; }

.portfolio-3 .portfolio-item {
	width: 370px;
	margin: 0 15px 15px 0;
}

.portfolio-3 .portfolio-item .portfolio-image,
.portfolio-3 .portfolio-item .portfolio-image a,
.portfolio-3 .portfolio-item .portfolio-image img {
	width: 370px;
	height: 278px;
}


/* Portfolio - Items - 3 Columns - No Margin
-----------------------------------------------------------------*/

.portfolio-3.portfolio-nomargin .portfolio-item { width: 379px; }

.portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image,
.portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image a,
.portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 379px;
	height: 284px;
}


/* Portfolio - Sidebar - Items - 3 Columns
-----------------------------------------------------------------*/

.postcontent #portfolio.portfolio-3 { margin: 0 -16px -16px 0; }

.postcontent .portfolio-3 .portfolio-item {
	width: 276px;
	margin: 0 16px 16px 0;
}

.postcontent .portfolio-3 .portfolio-item .portfolio-image,
.postcontent .portfolio-3 .portfolio-item .portfolio-image a,
.postcontent .portfolio-3 .portfolio-item .portfolio-image img {
	width: 276px;
	height: 207px;
}

.postcontent .portfolio-3 .portfolio-desc h3 { font-size: 18px; }

.postcontent .portfolio-3 .portfolio-desc span { font-size: 13px; }


/* Portfolio - Sidebar - Items - 3 Columns - No Margin
-----------------------------------------------------------------*/

.postcontent .portfolio-3.portfolio-nomargin .portfolio-item { width: 285px; }

.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image,
.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image a,
.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 285px;
	height: 214px;
}


/* Portfolio - Sidebar - Items - 3 Columns - No Title
-----------------------------------------------------------------*/

.postcontent .portfolio-3.portfolio-notitle .portfolio-desc {
	height: 72px;
	bottom: -73px;
}

.postcontent .portfolio-3.portfolio-full.portfolio-notitle .portfolio-desc,
.postcontent .portfolio-3.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -72px; }

.postcontent .portfolio-3.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -40px !important; }


/* Portfolio - Both Sidebars - Items - 3 Columns
-----------------------------------------------------------------*/

.bothsidebar #portfolio.portfolio-3 { margin: 0 -11px -11px 0; }

.bothsidebar .portfolio-3 .portfolio-item {
	width: 186px;
	margin: 0 11px 11px 0;
}

.bothsidebar .portfolio-3 .portfolio-item .portfolio-image,
.bothsidebar .portfolio-3 .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-3 .portfolio-item .portfolio-image img {
	width: 186px;
	height: 140px;
}

.bothsidebar .portfolio-3 .portfolio-desc { display: block !important; }

.bothsidebar .portfolio-3 .portfolio-desc h3 { font-size: 15px; }

.bothsidebar .portfolio-3 .portfolio-desc span { font-size: 12px; }


/* Portfolio - Both Sidebars - Items - 3 Columns - No Margin
-----------------------------------------------------------------*/

.bothsidebar .portfolio-3.portfolio-nomargin .portfolio-item { width: 192px; }

.bothsidebar .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image,
.bothsidebar .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 192px;
	height: 144px;
}


/* Portfolio - Both Sidebars - Items - 3 Columns - No Title
-----------------------------------------------------------------*/

.bothsidebar .portfolio-3.portfolio-notitle .portfolio-desc {
	height: 68px;
	bottom: -69px;
}

.bothsidebar .portfolio-3.portfolio-full.portfolio-notitle .portfolio-desc,
.bothsidebar .portfolio-3.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -68px; }

.bothsidebar .portfolio-3.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -50px !important; }


/* Portfolio - Items - 2 Columns
-----------------------------------------------------------------*/

#portfolio.portfolio-2 { margin: 0 -20px -20px 0; }

.portfolio-2 .portfolio-item {
	width: 560px;
	margin: 0 20px 20px 0;
}

.portfolio-2 .portfolio-item .portfolio-image,
.portfolio-2 .portfolio-item .portfolio-image a,
.portfolio-2 .portfolio-item .portfolio-image img {
	width: 560px;
	height: 420px;
}

.portfolio-2 .portfolio-desc { padding: 20px 5px 10px; }

.portfolio-2 .portfolio-desc h3 { font-size: 21px; }

.portfolio-2 .portfolio-desc span {
	margin-top: 4px;
	font-size: 14px;
}


/* Portfolio - Items - 2 Columns - No Margin
-----------------------------------------------------------------*/

.portfolio-2.portfolio-nomargin .portfolio-item { width: 569px; }

.portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image,
.portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image a,
.portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 569px;
	height: 427px;
}

.portfolio-2.portfolio-nomargin .portfolio-desc { padding: 20px 15px 20px; }


/* Portfolio - Items - 2 Columns - No Title
-----------------------------------------------------------------*/

.portfolio-2.portfolio-notitle .portfolio-desc {
	height: 90px;
	bottom: -91px;
}

.portfolio-2.portfolio-full.portfolio-notitle .portfolio-desc,
.portfolio-2.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -90px; }


/* Portfolio - Sidebar - Items - 2 Columns
-----------------------------------------------------------------*/

.postcontent #portfolio.portfolio-2 { margin: 0 -20px -20px 0; }

.postcontent .portfolio-2 .portfolio-item {
	width: 420px;
	margin: 0 20px 20px 0;
}

.postcontent .portfolio-2 .portfolio-item .portfolio-image,
.postcontent .portfolio-2 .portfolio-item .portfolio-image a,
.postcontent .portfolio-2 .portfolio-item .portfolio-image img {
	width: 420px;
	height: 315px;
}

.postcontent .portfolio-2 .portfolio-desc h3 { font-size: 21px; }

.postcontent .portfolio-2 .portfolio-desc span { font-size: 14px; }


/* Portfolio - Sidebar - Items - 2 Columns - No Margin
-----------------------------------------------------------------*/

.postcontent .portfolio-2.portfolio-nomargin .portfolio-item { width: 429px; }

.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image,
.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image a,
.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 429px;
	height: 322px;
}

.postcontent .portfolio-2.portfolio-nomargin .portfolio-desc { padding-bottom: 20px; }


/* Portfolio - Sidebar - Items - 2 Columns - No Title
-----------------------------------------------------------------*/

.postcontent .portfolio-2.portfolio-notitle .portfolio-desc {
	height: 90px;
	bottom: -91px;
}

.postcontent .portfolio-2.portfolio-full.portfolio-notitle .portfolio-desc,
.postcontent .portfolio-2.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -90px; }

.postcontent .portfolio-2.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -40px !important; }


/* Portfolio - Both Sidebars - Items - 2 Columns
-----------------------------------------------------------------*/

.bothsidebar #portfolio.portfolio-2 { margin: 0 -20px -20px 0; }

.bothsidebar .portfolio-2 .portfolio-item {
	width: 280px;
	margin: 0 20px 20px 0;
}

.bothsidebar .portfolio-2 .portfolio-item .portfolio-image,
.bothsidebar .portfolio-2 .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-2 .portfolio-item .portfolio-image img {
	width: 280px;
	height: 210px;
}

.bothsidebar .portfolio-2 .portfolio-desc {
	display: block !important;
	padding-top: 15px;
	padding-bottom: 0;
}

.bothsidebar .portfolio-2 .portfolio-desc h3 { font-size: 19px; }

.bothsidebar .portfolio-2 .portfolio-desc span { font-size: 13px; }


/* Portfolio - Both Sidebars - Items - 2 Columns - No Margin
-----------------------------------------------------------------*/

.bothsidebar .portfolio-2.portfolio-nomargin .portfolio-item { width: 289px; }

.bothsidebar .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image,
.bothsidebar .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 289px;
	height: 217px;
}

.bothsidebar .portfolio-2.portfolio-nomargin .portfolio-desc { padding-bottom: 15px; }


/* Portfolio - Both Sidebars - Items - 2 Columns - No Title
-----------------------------------------------------------------*/

.bothsidebar .portfolio-2.portfolio-notitle .portfolio-desc {
	height: 75px;
	bottom: -76px;
}

.bothsidebar .portfolio-2.portfolio-full.portfolio-notitle .portfolio-desc,
.bothsidebar .portfolio-2.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -75px; }

.bothsidebar .portfolio-2.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -40px !important; }


/* Portfolio - Items - 5 Columns
-----------------------------------------------------------------*/

#portfolio.portfolio-5 { margin: 0 -10px -10px 0; }

.portfolio-5 .portfolio-item {
	width: 220px;
	margin: 0 10px 10px 0;
}

.portfolio-5 .portfolio-item .portfolio-image,
.portfolio-5 .portfolio-item .portfolio-image a,
.portfolio-5 .portfolio-item .portfolio-image img {
	width: 220px;
	height: 165px;
}

.portfolio-5 .portfolio-desc h3 { font-size: 17px; }


/* Portfolio - Items - 5 Columns - No Margin
-----------------------------------------------------------------*/

.portfolio-5.portfolio-nomargin .portfolio-item { width: 227px; }

.portfolio-5.portfolio-nomargin .portfolio-item .portfolio-image,
.portfolio-5.portfolio-nomargin .portfolio-item .portfolio-image a,
.portfolio-5.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 227px;
	height: 170px;
}


/* Portfolio - Items - 5 Columns - No Title
-----------------------------------------------------------------*/

.portfolio-5.portfolio-notitle .portfolio-desc {
	height: 71px;
	bottom: -72px;
}

.portfolio-5.portfolio-full.portfolio-notitle .portfolio-desc,
.portfolio-5.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -71px; }

.portfolio-5.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -30px !important; }


/* Portfolio - Sidebar - Items - 5 Columns
-----------------------------------------------------------------*/

.postcontent #portfolio.portfolio-5 { margin: 0; }

.postcontent .portfolio-5 .portfolio-item {
	width: 172px;
	margin: 0;
}

.postcontent .portfolio-5 .portfolio-item .portfolio-image,
.postcontent .portfolio-5 .portfolio-item .portfolio-image a,
.postcontent .portfolio-5 .portfolio-item .portfolio-image img {
	width: 172px;
	height: 128px;
}

.postcontent .portfolio-5 .portfolio-desc h3 { font-size: 15px; }

.postcontent .portfolio-5 .portfolio-desc span { font-size: 12px; }

.postcontent .portfolio-5 .portfolio-desc { padding: 15px 10px; }


/* Portfolio - Sidebar - Items - 5 Columns - No Title
-----------------------------------------------------------------*/

.postcontent .portfolio-5.portfolio-notitle .portfolio-desc {
	height: 68px;
	bottom: -69px;
}

.postcontent .portfolio-5.portfolio-full.portfolio-notitle .portfolio-desc,
.postcontent .portfolio-5.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -68px; }

.postcontent .portfolio-5.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -50px !important; }


/* Portfolio - Items - 6 Columns
-----------------------------------------------------------------*/

#portfolio.portfolio-6 { margin: 0 -6px -6px 0; }

.portfolio-6 .portfolio-item {
	width: 185px;
	margin: 0 6px 6px 0;
}

.portfolio-6 .portfolio-item .portfolio-image,
.portfolio-6 .portfolio-item .portfolio-image a,
.portfolio-6 .portfolio-item .portfolio-image img {
	width: 185px;
	height: 139px;
}

.portfolio-6 .portfolio-desc h3 { font-size: 15px; }

.portfolio-6 .portfolio-desc span { font-size: 12px; }


/* Portfolio - Items - 6 Columns - No Margin
-----------------------------------------------------------------*/

.portfolio-6.portfolio-nomargin .portfolio-item { width: 189px; }

.portfolio-6.portfolio-nomargin .portfolio-item .portfolio-image,
.portfolio-6.portfolio-nomargin .portfolio-item .portfolio-image a,
.portfolio-6.portfolio-nomargin .portfolio-item .portfolio-image img {
	width: 189px;
	height: 142px;
}


/* Portfolio - Items - 6 Columns - No Title
-----------------------------------------------------------------*/

.portfolio-6.portfolio-notitle .portfolio-desc {
	height: 68px;
	bottom: -69px;
}

.portfolio-6.portfolio-full.portfolio-notitle .portfolio-desc,
.portfolio-6.portfolio-nomargin.portfolio-notitle .portfolio-desc { bottom: -68px; }

.portfolio-6.portfolio-notitle .portfolio-item:hover .portfolio-overlay a { margin-top: -40px !important; }


/* Portfolio - Items - 1 Column
-----------------------------------------------------------------*/

#portfolio.portfolio-1 { margin: 0 0px -40px 0; }

.portfolio-1 .portfolio-item {
	float: none;
	width: 100%;
	margin: 0 0 40px 0;
	padding-bottom: 40px;
	border-bottom: 1px solid #EEE;
}

.portfolio-1 .portfolio-item .portfolio-image {
	float: left;
	margin-right: 40px;
}

.portfolio-1 .portfolio-item.alt .portfolio-image {
	float: right;
	margin: 0 0 0 40px;
}

.portfolio-1 .portfolio-item .portfolio-image,
.portfolio-1 .portfolio-item .portfolio-image a,
.portfolio-1 .portfolio-item .portfolio-image img {
	display: block;
	width: 720px;
	height: 400px;
}

.portfolio-1 .portfolio-desc {
	float: left;
	width: 380px;
	padding: 10px 0;
}

.portfolio-1 .alt .portfolio-desc { float: right; }

.portfolio-1 .portfolio-desc h3 { font-size: 22px; }

.portfolio-1 .portfolio-desc span {
	margin-top: 6px;
	font-size: 14px;
}

.portfolio-1 .portfolio-desc p {
	margin: 20px 0 25px;
	font-size: 14px;
}

.portfolio-1 .portfolio-desc li { margin: 3px 0; }


/* Portfolio - Items - 1 Column - Sidebar
-----------------------------------------------------------------*/

.postcontent .portfolio-1 .portfolio-item .portfolio-image,
.postcontent .portfolio-1 .portfolio-item .portfolio-image a,
.postcontent .portfolio-1 .portfolio-item .portfolio-image img {
	width: 540px;
	height: 300px;
}

.postcontent .portfolio-1 .portfolio-desc { width: 280px; }


/* Portfolio - Items - 1 Column - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar .portfolio-1 .portfolio-item .portfolio-image { margin-right: 20px; }

.bothsidebar .portfolio-1 .portfolio-item.alt .portfolio-image { margin: 0 0 0 20px; }

.bothsidebar .portfolio-1 .portfolio-item .portfolio-image,
.bothsidebar .portfolio-1 .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-1 .portfolio-item .portfolio-image img {
	width: 320px;
	height: 178px;
}

.bothsidebar .portfolio-1 .portfolio-desc {
	display: block !important;
	width: 240px;
}

.bothsidebar .portfolio-1 .portfolio-desc h3 { font-size: 19px; }

.bothsidebar .portfolio-1 .portfolio-desc span {
	margin-top: 5px;
	font-size: 13px;
}

.bothsidebar .portfolio-1 .portfolio-desc p {
	margin: 15px 0 0 0;
	font-size: 13px;
}

.bothsidebar .portfolio-1 .portfolio-desc ul,
.bothsidebar .portfolio-1 .portfolio-desc .btn { display: none; }


/* Portfolio - Items - 1 Column - Full Width
-----------------------------------------------------------------*/

#portfolio.portfolio-1.portfolio-fullwidth { margin: 0 0 -60px 0; }

.portfolio-1.portfolio-fullwidth .portfolio-item {
	margin-bottom: 60px;
	padding-bottom: 0;
	border-bottom: 0;
	overflow: hidden;
}

.portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image {
	float: none;
	margin: 0 !important;
}

.portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image,
.portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image a,
.portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image img {
	width: 1140px;
	height: 500px;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image img {
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.portfolio-1.portfolio-fullwidth .portfolio-item:hover .portfolio-image img {
	-webkit-transform: translateX(-60px);
	-moz-transform: translateX(-60px);
	-ms-transform: translateX(-60px);
	-o-transform: translateX(-60px);
	transform: translateX(-60px);
}

.portfolio-1.portfolio-fullwidth .portfolio-item.alt:hover .portfolio-image img {
	-webkit-transform: translateX(60px);
	-moz-transform: translateX(60px);
	-ms-transform: translateX(60px);
	-o-transform: translateX(60px);
	transform: translateX(60px);
}

.portfolio-1.portfolio-fullwidth .portfolio-desc {
	position: absolute;
	float: none;
	width: 380px;
	height: 100%;
	padding: 30px;
	background-color: #F9F9F9;
	top: 0;
	left: auto;
	right: -380px;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-1.portfolio-fullwidth .portfolio-desc {
	-webkit-transition: right .3s ease-in-out;
	-o-transition: right .3s ease-in-out;
	transition: right .3s ease-in-out;
}

.portfolio-1.portfolio-fullwidth .portfolio-item:hover .portfolio-desc { right: 0; }

.portfolio-1.portfolio-fullwidth .alt .portfolio-desc {
	left: -380px;
	right: auto;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-1.portfolio-fullwidth .alt .portfolio-desc {
	-webkit-transition: left .3s ease-in-out;
	-o-transition: left .3s ease-in-out;
	transition: left .3s ease-in-out;
}

.portfolio-1.portfolio-fullwidth .portfolio-item.alt:hover .portfolio-desc { left: 0; }

.portfolio-1.portfolio-fullwidth .portfolio-overlay a { left: 33%; }

.portfolio-1.portfolio-fullwidth .alt .portfolio-overlay a {
	left: auto;
	right: 33%;
}


/* Portfolio - Items - 1 Column - Full Width - Sidebar
-----------------------------------------------------------------*/

.postcontent #portfolio.portfolio-1.portfolio-fullwidth { margin: 0 0 -40px 0; }

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item { margin-bottom: 40px; }

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image,
.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image a,
.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image img {
	width: 860px;
	height: 377px;
}

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item:hover .portfolio-image img {
	-webkit-transform: translateX(-40px);
	-moz-transform: translateX(-40px);
	-ms-transform: translateX(-40px);
	-o-transform: translateX(-40px);
	transform: translateX(-40px);
}

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item.alt:hover .portfolio-image img {
	-webkit-transform: translateX(40px);
	-moz-transform: translateX(40px);
	-ms-transform: translateX(40px);
	-o-transform: translateX(40px);
	transform: translateX(40px);
}

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-desc {
	width: 320px;
	padding: 25px;
	right: -320px;
}

.postcontent .portfolio-1.portfolio-fullwidth .alt .portfolio-desc {
	left: -320px;
	right: auto;
}

.postcontent .portfolio-1.portfolio-fullwidth .portfolio-overlay a { left: 32%; }

.postcontent .portfolio-1.portfolio-fullwidth .alt .portfolio-overlay a {
	left: auto;
	right: 32%;
}


/* Portfolio - Items - 1 Column - Full Width - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar #portfolio.portfolio-1.portfolio-fullwidth { margin: 0 0 -40px 0; }

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item { margin-bottom: 40px; }

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image,
.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image a,
.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image img {
	width: 580px;
	height: 254px;
}

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item:hover .portfolio-image img {
	-webkit-transform: translateX(-20px);
	-moz-transform: translateX(-20px);
	-ms-transform: translateX(-20px);
	-o-transform: translateX(-20px);
	transform: translateX(-20px);
}

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-item.alt:hover .portfolio-image img {
	-webkit-transform: translateX(20px);
	-moz-transform: translateX(20px);
	-ms-transform: translateX(20px);
	-o-transform: translateX(20px);
	transform: translateX(20px);
}

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-desc {
	width: 240px;
	padding: 20px;
	right: -240px;
}

.bothsidebar .portfolio-1.portfolio-fullwidth .alt .portfolio-desc {
	left: -240px;
	right: auto;
}

.bothsidebar .portfolio-1.portfolio-fullwidth .portfolio-overlay a { left: 29%; }

.bothsidebar .portfolio-1.portfolio-fullwidth .alt .portfolio-overlay a {
	left: auto;
	right: 29%;
}


/* Portfolio - Parallax
-----------------------------------------------------------------*/

#portfolio.portfolio-parallax { margin: 0 !important; }

#portfolio.portfolio-parallax .portfolio-item {
	float: none;
	width: 100% !important;
	height: 500px !important;
	margin: 0 !important;
}

#portfolio.portfolio-parallax .portfolio-item .portfolio-image {
	width: 100% !important;
	height: 500px !important;
}

#portfolio.portfolio-parallax .portfolio-desc {
	position: absolute;
	top: 50%;
	left: 0;
	margin-top: -57px;
	width: 100%;
	text-align: center;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
	padding: 0;
	opacity: 0;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) #portfolio.portfolio-parallax .portfolio-desc {
	-webkit-transition: opacity .15s ease-in-out;
	-o-transition: opacity .15s ease-in-out;
	transition: opacity .15s ease-in-out;
}

#portfolio.portfolio-parallax .portfolio-item:hover .portfolio-desc { opacity: 1; }

#portfolio.portfolio-parallax .portfolio-desc h3 {
	font-size: 44px;
	font-weight: 300;
	letter-spacing: -1px;
}

#portfolio.portfolio-parallax .portfolio-desc h3 a { color: #FFF; }

#portfolio.portfolio-parallax .portfolio-desc h3 a:hover { color: #DDD; }

#portfolio.portfolio-parallax .portfolio-desc span {
	margin-top: 12px;
	font-size: 16px;
	color: #CCC;
}

#portfolio.portfolio-parallax .portfolio-desc span a { color: #DDD; }

#portfolio.portfolio-parallax .portfolio-desc span a:hover { color: #BBB; }

#portfolio.portfolio-parallax .portfolio-desc .portfolio-divider {
	width: 100%;
	text-align: center;
	margin: 15px 0 0;
}

#portfolio.portfolio-parallax .portfolio-desc .portfolio-divider div {
	display: inline-block;
	width: 50px;
	height: 0;
	border-bottom: 1px solid #FFF;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) #portfolio.portfolio-parallax .portfolio-desc .portfolio-divider div {
	-webkit-transition: width .5s ease-in-out;
	-o-transition: width .5s ease-in-out;
	transition: width .5s ease-in-out;
}

#portfolio.portfolio-parallax .portfolio-item:hover .portfolio-desc .portfolio-divider div { width: 120px; }

#portfolio.portfolio-parallax .portfolio-overlay { background-color: rgba(0,0,0,0.4); }


/* Portfolio - Overlay
-----------------------------------------------------------------*/

.portfolio-overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: 2;
	text-align: center;
	background-color: rgba(0,0,0,0.5);
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-overlay {
	-webkit-transition: opacity .4s ease-in-out;
	-o-transition: opacity .4s ease-in-out;
	transition: opacity .4s ease-in-out;
}

.portfolio-item:hover .portfolio-overlay,
.iportfolio:hover .portfolio-overlay { opacity: 1; }

.portfolio-overlay a {
	position: absolute;
	top: 50%;
	left: 50%;
	background-color: #F5F5F5;
	width: 40px !important;
	height: 40px !important;
	margin: -28px 0 0 -44px;
	font-size: 18px;
	line-height: 40px;
	text-align: center;
	color: #444;
	border-radius: 50%;
	-webkit-backface-visibility: hidden;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-overlay a {
	-webkit-transition: color .2s linear, background-color .2s linear, margin-top .2s linear, opacity .2s linear;
	-o-transition: color .2s linear, background-color .2s linear, margin-top .2s linear, opacity .2s linear;
	transition: color .2s linear, background-color .2s linear, margin-top .2s linear, opacity .2s linear;
}

.portfolio-overlay a.left-icon {  }

.portfolio-overlay a.right-icon {
	left: auto;
	right: 50%;
	margin-left: 0;
	margin-right: -44px;
}

.portfolio-overlay a.center-icon {
	display: block;
	margin: -20px 0 0 -20px;
	opacity: 0;
}

.portfolio-item:hover a.center-icon,
.iportfolio:hover a.center-icon { opacity: 1; }

.portfolio-overlay a:hover {
	color: #1ABC9C;
	background-color: #EEE;
}

.portfolio-item:hover .portfolio-overlay a.left-icon,
.portfolio-item:hover .portfolio-overlay a.right-icon,
.iportfolio:hover .portfolio-overlay a.left-icon,
.iportfolio:hover .portfolio-overlay a.right-icon { margin-top: -18px; }

.portfolio-overlay a i.icon-line-play {
	position: relative;
	left: 2px;
}


.portfolio-overlay .portfolio-desc {
	position: relative;
	padding: 0 !important;
	margin: 0;
	text-align: center;
}

.portfolio-overlay .portfolio-desc a {
	display: inline;
	position: relative;
	top: 0;
	left: 0;
	margin: 0;
	font-size: inherit;
	width: auto !important;
	height: auto !important;
	line-height: 1;
	background-color: transparent !important;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
}

.portfolio-overlay .portfolio-desc h3 {
	font-weight: 600;
	color: #F5F5F5 !important;
	line-height: 1;
}

.portfolio-overlay .portfolio-desc h3 a { color: #F5F5F5 !important; }

.portfolio-overlay .portfolio-desc span {
	margin-top: 7px;
	color: #DDD !important;
}

.portfolio-overlay .portfolio-desc span a {
	color: #DDD !important;
	font-size: inherit;
}

.portfolio-overlay .portfolio-desc ~ a {
	display: inline-block;
	position: relative;
	top: 0;
	left: 0;
	margin: 20px 0 0 !important;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .portfolio-overlay .portfolio-desc ~ a {
	-webkit-transition: color .2s linear, background-color .2s linear, opacity .2s linear;
	-o-transition: color .2s linear, background-color .2s linear, opacity .2s linear;
	transition: color .2s linear, background-color .2s linear, opacity .2s linear;
}

.portfolio-overlay .portfolio-desc ~ a.right-icon {
	left: 0;
	right: 0;
	margin-left: 5px !important;
	margin-right: 0 !important;
}

.portfolio-overlay .portfolio-desc a:hover { background: transparent; }

body.device-touch.device-xs .portfolio-notitle .portfolio-overlay,
body.device-touch.device-xxs .portfolio-notitle .portfolio-overlay { display: none !important; }


/* Portfolio Single
-----------------------------------------------------------------*/

.portfolio-single {}


/* Portfolio Single - Image
-----------------------------------------------------------------*/

.portfolio-single-image > a,
.portfolio-single-image .slide a,
.portfolio-single-image img,
.portfolio-single-image iframe,
.portfolio-single-image video {
	display: block;
	width: 100%;
}

.portfolio-single-image-full {
	position: relative;
	height: 600px;
	overflow: hidden;
	margin: -80px 0 80px !important;
}

.portfolio-single-video { height: auto !important; }


/* Portfolio Single - Gallery Thumbs
-----------------------------------------------------------------*/

.portfolio-single-image-full .swiper-container {
	width:100%;
	height:600px;
	background-color: #333;
}

.portfolio-single-image-full .swiper-nested-1,
.portfolio-single-image-full .swiper-nested-2 { width:100%; }

.portfolio-single-image-full .swiper-slide { overflow: hidden; }

.portfolio-single-image-full .swiper-slide img {
	width: 100%;
	height: auto;
}


/* Portfolio & Blog Single - Masonry
-----------------------------------------------------------------*/

.masonry-thumbs { position: relative; }

.masonry-thumbs a {
	position: relative;
	float: left;
	width: 25%;
	overflow: hidden;
}

.masonry-thumbs.col-2 a { width: 50%; }

.masonry-thumbs.col-3 a { width: 33.30%; }

.masonry-thumbs.col-4 a { width: 25%; }

.masonry-thumbs.col-5 a { width: 20%; }

.masonry-thumbs.col-6 a { width: 16.60%; }

.masonry-thumbs a,
.masonry-thumbs img {
	display: block;
	height: auto !important;
}

.masonry-thumbs img {
	width: 100%;
	border-radius: 0 !important;
	padding: 0 1px 1px 0;
}

.masonry-thumbs .overlay { padding: 0 1px 1px 0; }


/* Portfolio Single - Content
-----------------------------------------------------------------*/

.portfolio-single-content { font-size: 14px; }

.portfolio-single-content h2 {
	margin: 0 0 20px;
	padding: 0;
	font-size: 20px;
	font-weight: 600 !important;
}


.portfolio-ajax-modal { width: 1000px !important; }

.modal-padding { padding: 40px; }

.ajax-modal-title {
	background-color: #F9F9F9;
	border-bottom: 1px solid #EEE;
	padding: 25px 40px;
}

.ajax-modal-title h2 {
	font-size: 26px;
	margin-bottom: 0;
}


#portfolio-ajax-wrap {
	position: relative;
	max-height: 0;
	overflow: hidden;
	-webkit-transition: max-height .4s ease;
	-o-transition: max-height .4s ease;
	transition: max-height .4s ease;
}

#portfolio-ajax-wrap.portfolio-ajax-opened { max-height: 1200px; }

#portfolio-ajax-container {
	display: none;
	padding-bottom: 60px;
}

#portfolio-ajax-single h2 { font-size: 26px; }


/* Portfolio Single - Meta
-----------------------------------------------------------------*/

.portfolio-meta,
.portfolio-share {
	list-style: none;
	font-size: 14px;
}

.portfolio-meta li {
	margin: 10px 0;
	color: #666;
}

.portfolio-meta li:first-child { margin-top: 0; }

.portfolio-meta li span {
	display: inline-block;
	width: 150px;
	font-weight: bold;
	color: #333;
}

.portfolio-meta li span i {
	position: relative;
	top: 1px;
	width: 14px;
	text-align: center;
	margin-right: 7px;
}

.well .line {
	margin: 20px 0;
	border-color: #E5E5E5;
}


/* Portfolio Single Navigation
-----------------------------------------------------------------*/

#portfolio-navigation {
	position: absolute;
	top: 50%;
	left: auto;
	right: 10px;
	max-width: 96px;
	height: 24px;
	margin-top: -12px;
}

.page-title-right #portfolio-navigation {
	left: 10px;
	right: auto;
}

.page-title-center #portfolio-navigation {
	position: relative;
	top: 0;
	left: 0;
	margin: 20px auto 0;
}

#portfolio-navigation a {
	display: block;
	float: left;
	margin-left: 12px;
	width: 24px;
	height: 24px;
	text-align: center;
	color: #444;
	transition: color .3s linear;
	-webkit-transition: color .3s linear;
	-o-transition: color .3s linear;
}

.page-title-dark #portfolio-navigation a { color: #EEE; }

.page-title-parallax #portfolio-navigation a { color: #FFF; }

#portfolio-navigation a i {
	position: relative;
	top: -1px;
	font-size: 24px;
	line-height: 1;
}

#portfolio-navigation a i.icon-angle-left,
#portfolio-navigation a i.icon-angle-right {
	font-size: 32px;
	top: -6px;
}

#portfolio-navigation a i.icon-angle-right { left: -1px; }

#portfolio-navigation a:first-child { margin-left: 0; }

#portfolio-navigation a:hover { color: #1ABC9C; }

#portfolio-ajax-show #portfolio-navigation {
	top: 0;
	margin-top: 0;
}


/* Individual Portfolio Item
-----------------------------------------------------------------*/

.iportfolio {
	position: relative;
	float: none;
	width: 100%;
	margin: 0;
}

.iportfolio .portfolio-image {
	position: relative;
	overflow: hidden;
}

.iportfolio .portfolio-image,
.iportfolio .portfolio-image a,
.iportfolio .portfolio-image img {
	display: block;
	width: 100%;
	height: auto;
}


/* ----------------------------------------------------------------
	Blog
-----------------------------------------------------------------*/


#posts { position: relative; }

.entry {
	position: relative;
	margin: 0 0 50px;
	padding: 0 0 50px;
	border-bottom: 2px solid #F5F5F5;
}

.entry-image { margin-bottom: 30px; }

.entry-image,
.entry-image > a,
.entry-image .slide a,
.entry-image img {
	display: block;
	position: relative;
	width: 100%;
	height: auto;
}

.entry-image iframe { display: block; }

.entry-image img { border-radius: 3px; }

.entry-title h2 {
	margin: 0;
	font-size: 24px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.entry-title h2 a { color: #333; }

.entry-title h2 a:hover { color: #1ABC9C; }

.entry-meta {
	margin: 10px -10px -15px 0;
	list-style: none;
}

.single-post .entry-meta { margin-bottom: 20px; }

.entry-meta li {
	float: left;
	font-size: 13px;
	line-height: 14px;
	margin: 0 10px 15px 0;
	color: #999;
	font-family: 'Crete Round', serif;
	font-style: italic;
}

.entry-meta li:before {
	content: '/';
	display: inline-block;
	margin-right: 10px;
	opacity: 0.5
}

.entry-meta li i {
	position: relative;
	top: 1px;
	font-size: 14px;
	margin-right: 3px;
}

.entry-meta li a { color: #999; }

.entry-meta li a:hover { color: #1ABC9C; }

.entry-meta li:first-child:before { display: none; }

.entry-meta li ins {
	font-weight: 600;
	text-decoration: none;
}

.entry-c {
	position: relative;
	overflow: hidden;
}

#posts .entry-content { margin-top: 30px; }

.single-post .entry-content .entry-image { max-width: 350px; }

.entry-content { position: relative; }

.entry-link {
	display: block;
	background-color: #F5F5F5;
	padding: 30px 0;
	text-align: center;
	color: #444;
	font-family: 'Raleway', sans-serif;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 24px;
	font-weight: 700;
	border-radius: 3px;
}

body:not(.device-touch) .entry-link {
	-webkit-transition: background-color .3s ease-in-out;
	-o-transition: background-color .3s ease-in-out;
	transition: background-color .3s ease-in-out;
}

.entry-link:hover {
	color: #FFF;
	background-color: #1ABC9C;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.entry-link span {
	display: block;
	margin-top: 5px;
	font-family: 'Crete Round', serif;
	font-style: italic;
	font-weight: normal;
	text-transform: none;
	letter-spacing: 0;
	font-size: 14px;
	color: #AAA;
}

.entry-link:hover span { color: #EEE; }

.entry blockquote p {
	font-weight: 400;
	font-family: 'Crete Round', serif;
	font-style: italic;
}


/* Small Thumbs
-----------------------------------------------------------------*/

.small-thumbs .entry-image,
.ievent .entry-image {
	float: left;
	width: 300px;
	margin: 0 30px 0 0;
}

.small-thumbs .entry-image img,
.ievent .entry-image img { border-radius: 0; }

.small-thumbs .entry-c .entry-image,
.ievent .entry-c .entry-image {
	float: none;
	width: 100%;
	margin: 0 0 20px 0;
}

.small-thumbs .entry-c .entry-image img,
.ievent .entry-c .entry-image img { border-radius: 5px; }

.small-thumbs .entry-title h2,
.ievent .entry-title h2 {
	font-size: 20px;
	font-weight: 600;
}


/* Small Thumbs - Right
-----------------------------------------------------------------*/

.small-thumbs.alt .entry-image {
	float: right;
	margin: 0 0 0 30px;
}

.small-thumbs.alt .entry-c .entry-image {
	float: none;
	margin: 0 0 20px 0;
}


/* Small Thumbs - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar .small-thumbs .entry-image {
	width: 200px;
	margin: 0 25px 0 0;
}

.bothsidebar .small-thumbs.alt .entry-image { margin: 0 0 0 25px; }

.bothsidebar .small-thumbs .entry-c .entry-image {
	width: 100%;
	margin: 0 0 20px 0;
}

.bothsidebar .small-thumbs .entry-title h2 { font-size: 18px; }


/* Blog - Grid
-----------------------------------------------------------------*/

.post-grid { margin-right: -28px; }

.post-grid .entry {
	float: left;
	width: 264px;
	margin-right: 28px;
}

.post-grid .entry-image,
.post-grid .entry-image img { height: 148px; }

.post-grid .entry-image img { border-radius: 0; }

.post-grid .entry-title h2 {
	font-size: 17px;
	font-weight: 600;
}

.post-grid .entry-link { font-size: 24px; }

.post-grid .entry-link span { font-size: 13px; }


/* Blog - Grid - 3 Columns
-----------------------------------------------------------------*/

.post-grid.grid-3 { margin-right: -30px; }

.post-grid.grid-3 .entry {
	width: 360px;
	margin-right: 30px;
}

.post-grid.grid-3 .entry-image,
.post-grid.grid-3 .entry-image img { height: 202px; }

.post-grid.grid-3 .entry-title h2 { font-size: 18px; }


/* Blog - Grid - 3 Columns - Sidebar
-----------------------------------------------------------------*/

.postcontent .post-grid.grid-3 { margin-right: -25px; }

.postcontent .post-grid.grid-3 .entry {
	width: 270px;
	margin-right: 25px;
}

.postcontent .post-grid.grid-3 .entry-image,
.postcontent .post-grid.grid-3 .entry-image img { height: 152px; }

.postcontent .post-grid.grid-3 .entry-title h2 { font-size: 16px; }


/* Blog - Grid - 2 Columns
-----------------------------------------------------------------*/

.post-grid.grid-2 { margin-right: -40px; }

.post-grid.grid-2 .entry {
	width: 550px;
	margin-right: 40px;
}

.post-grid.grid-2 .entry-image,
.post-grid.grid-2 .entry-image img { height: 309px; }

.post-grid.grid-2 .entry-title h2 { font-size: 20px; }


/* Blog - Grid - 2 Columns - Sidebar
-----------------------------------------------------------------*/

.postcontent .post-grid.grid-2 .entry { width: 410px; }

.postcontent .post-grid.grid-2 .entry-image,
.postcontent .post-grid.grid-2 .entry-image img { height: 230px; }

.postcontent .post-grid.grid-2 .entry-title h2 { font-size: 18px; }


/* Blog - Grid - 2 Columns - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar .post-grid.grid-2 .entry { width: 270px; }

.bothsidebar .post-grid.grid-2 .entry-image,
.bothsidebar .post-grid.grid-2 .entry-image img { height: 152px; }

.bothsidebar .post-grid.grid-2 .entry-title h2 { font-size: 16px; }


/* Blog - Masonry
-----------------------------------------------------------------*/

.post-masonry .entry-image,
.post-masonry .entry-image img { height: auto !important; }


/* Blog - Masonry Full
-----------------------------------------------------------------*/

.post-masonry-full { margin: -80px 0 -80px -1px !important; }

.post-masonry-full .entry {
	width: 24.9% !important;
	margin: 0 !important;
	padding: 40px 30px;
	border-bottom: 1px dashed;
	border-left: 1px dashed;
	border-color: #E5E5E5;
}

.post-masonry-full.grid-3 .entry { width: 33.30% !important; }


/* Blog - Timeline
-----------------------------------------------------------------*/

.timeline-border {
	position: absolute;
	top: 0;
	left: 50%;
	margin-left: -71px;
	width: 0;
	border-left: 1px dashed #CCC;
	height: 100%;
}

.post-timeline { margin-right: -140px !important; }

.post-timeline .entry {
	width: 500px !important;
	margin-right: 140px !important;
}

.entry.entry-date-section {
	width: 100% !important;
	margin: 50px -70px 80px;
	padding: 0;
	border: 0;
	text-align: center;
}

.entry.entry-date-section span {
	display: inline-block;
	padding: 10px 15px;
	background-color: #FFF;
	border: 2px solid #EEE;
	font-size: 18px;
	font-weight: bold;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-family: 'Raleway', sans-serif;
}

.post-timeline .entry-timeline {
	display: none;
	position: absolute;
	border: 2px solid #CCC;
	background-color: #FFF;
	padding-top: 0;
	text-indent: -9999px;
	top: 40px;
	left: auto;
	right: -76px;
	width: 13px;
	height: 13px;
	border-radius: 50%;
	font-size: 26px;
	font-weight: bold;
	color: #AAA;
	text-align: center;
	line-height: 1;
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.entry.entry-date-section + .entry .entry-timeline { top: 70px; }

.post-timeline .entry-timeline div.timeline-divider {
	position: absolute;
	top: 4px;
	left: -58px;
	width: 50px;
	height: 0;
	border-top: 1px dashed #CCC;
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.post-timeline .alt .entry-timeline {
	right: auto;
	left: -77px;
}

.post-timeline .alt .entry-timeline div.timeline-divider {
	left: auto;
	right: -58px;
}

.post-timeline .entry-timeline span {
	display: block;
	margin-top: 3px;
	font-size: 13px;
	font-weight: normal;
}

.post-timeline .entry:hover .entry-timeline,
.post-timeline .entry:hover .timeline-divider {
	border-color: #1ABC9C;
	color: #1ABC9C;
}


/* Blog - Timeline - Sidebar
-----------------------------------------------------------------*/

.postcontent .timeline-border {
	left: 32px;
	margin-left: 0;
}

.postcontent .post-timeline {
	padding-left: 100px;
	margin-right: 0 !important;
}

.postcontent .post-timeline .entry {
	width: 100% !important;
	margin-right: 140px !important;
}

.postcontent .post-timeline .entry-timeline {
	display: block;
	border: 3px solid #CCC;
	background-color: #FFF;
	padding-top: 10px;
	text-indent: 0;
	top: 20px;
	left: -100px;
	right: auto;
	width: 64px;
	height: 64px;
	font-size: 24px;
}

.postcontent .post-timeline .entry-timeline div.timeline-divider {
	top: 29px;
	left: 64px;
	width: 32px;
}


/* Individual Post
-----------------------------------------------------------------*/

.ipost .entry-image img { border-radius: 0; }

.ipost .entry-title h3,
.ipost .entry-title h4 {
	margin: 0;
	font-size: 16px;
	font-weight: 600;
}

.ipost .entry-title h4 { font-size: 15px; }

.ipost .entry-title h3 a,
.ipost .entry-title h4 a { color: #333; }

.ipost .entry-title h3 a:hover,
.ipost .entry-title h4 a:hover { color: #1ABC9C; }

.ipost .entry-meta { margin-right: -10px; }

.ipost .entry-meta li {
	font-size: 13px;
	margin-right: 10px;
}

.ipost .entry-content { margin-top: 20px; }

.ipost .entry-content p { margin-bottom: 0; }


.more-link {
	display: inline-block;
	border-bottom: 1px solid #1ABC9C;
	padding: 0 2px;
	font-family: 'Crete Round', serif;
	font-style: italic;
}

.more-link:hover { border-bottom-color: #555; }


/* Related Posts
-----------------------------------------------------------------*/

.overlay-icon {
	position: absolute;
	left: auto;
	right: 0;
	top: auto;
	bottom: 0;
	width: 48px;
	height: 48px;
	background-color: rgba(0,0,0,0.2);
	text-align: center;
}

.overlay-icon i {
	line-height: 48px;
	font-size: 28px;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}


/* Small Post
-----------------------------------------------------------------*/

.spost,
.mpost {
	margin-top: 20px;
	padding-top: 20px;
	border-top: 1px dashed #E5E5E5;
}

.mpost {
	margin-top: 25px;
	padding-top: 25px;
}

.spost:first-child,
.mpost:first-child {
	margin-top: 0;
	padding-top: 0;
	border-top: 0;
}

.spost .entry-image,
.mpost .entry-image {
	float: left;
	margin: 0 15px 0 0;
	text-align: center;
}

.spost .entry-image,
.spost .entry-image a,
.spost .entry-image img,
.spost .entry-image i {
	width: 48px;
	height: 48px;
}

.spost .entry-image a i,
.mpost .entry-image a i {
	font-size: 28px;
	line-height: 48px;
	color: #666;
	background-color: #EEE;
}

.spost .entry-title h4,
.mpost .entry-title h4 {
	margin: 0;
	font-size: 14px;
	font-weight: 600;
}

.spost .entry-title h4 a,
.mpost .entry-title h4 a { color: #333; }

.spost .entry-title h4 a:hover,
.mpost .entry-title h4 a:hover { color: #1ABC9C; }

.spost .entry-meta { margin: 8px -10px 0 0; }

.spost .entry-meta li,
.mpost .entry-meta li {
	font-size: 13px;
	margin: 0 10px 0 0;
}


/* Medium Post
-----------------------------------------------------------------*/

.mpost .entry-image { margin-right: 20px; }

.mpost .entry-image,
.mpost .entry-image a,
.mpost .entry-image img,
.mpost .entry-image i {
	width: 170px;
	height: 128px;
}

.mpost .entry-image a,
.mpost .entry-image img { border-radius: 2px; }

.mpost .entry-image a i {
	font-size: 42px;
	line-height: 128px;
}

.mpost .entry-title h4 {
	margin: 0;
	font-size: 17px;
	font-weight: 600;
}

.mpost .entry-meta { margin-top: 5px; }

.mpost .entry-meta li i { margin-right: 2px; }

.mpost .entry-content { margin-top: 15px; }

.post-navigation + .line { margin: 40px 0 50px; }


/* ----------------------------------------------------------------
	Blog - Author
-----------------------------------------------------------------*/

.author-image {
	float: left;
	width: 84px;
	height: 84px;
	margin-right: 15px;
}

.author-image img {
	width: 84px;
	height: 84px;
}


/* ----------------------------------------------------------------
	Comments List
-----------------------------------------------------------------*/


#comments {
	position: relative;
	margin-top: 50px;
	padding-top: 50px;
	border-top: 1px solid #EEE;
}

.commentlist {
	list-style: none;
	padding-bottom: 50px;
	margin: 0 0 50px;
	border-bottom: 1px solid #EEE;
}

#reviews .commentlist {
	padding-bottom: 30px;
	margin: 0 0 20px;
}

.commentlist ul { list-style: none; }

.commentlist li,
.commentlist li ul,
.commentlist li ul li { margin: 30px 0 0 0; }

.commentlist ul:first-child { margin-top: 0; }

.commentlist li {
	position: relative;
	margin: 30px 0 0 30px;
}

#reviews .commentlist li { margin-top: 20px; }

.comment-wrap {
	position: relative;
	border: 1px solid #E5E5E5;
	border-radius: 5px;
	padding: 20px 20px 20px 35px;
}

.commentlist ul .comment-wrap {
	margin-left: 25px;
	padding-left: 20px;
}

#reviews .comment-wrap {
	border: 0;
	padding: 10px 0 0 35px;
}

.commentlist > li:first-child,
#reviews .commentlist > li:first-child {
	padding-top: 0;
	margin-top: 0;
}

.commentlist li .children { margin-top: 0; }

.commentlist li li .children { margin-left: 30px; }

.commentlist li .comment-content,
.pingback {
	position: relative;
	overflow: hidden;
}

.commentlist li .comment-content p,
.pingback p { margin: 20px 0 0 0; }

.commentlist li .comment-content { padding: 0 0 0 15px; }

.commentlist li .comment-meta {
	float: left;
	margin-right: 0;
	line-height: 1;
}

.comment-avatar {
	position: absolute;
	top: 15px;
	left: -35px;
	padding: 4px;
	background: #FFF;
	border: 1px solid #E5E5E5;
	border-radius: 50%;
}

.comment-avatar img {
	display: block;
	border-radius: 50%;
}

.commentlist li .children .comment-avatar { left: -25px; }

.comment-content .comment-author {
	margin-bottom: -10px;
	font-size: 16px;
	font-weight: bold;
	color: #555;
}

.comment-content .comment-author a {
	border: none;
	color: #333;
}

.comment-content .comment-author a:hover { color: #1ABC9C; }

.comment-content .comment-author span { display: block; }

.comment-content .comment-author span,
.comment-content .comment-author span a {
	font-size: 12px;
	font-weight: normal;
	font-family: 'Crete Round', serif;
	font-style: italic;
	color: #AAA;
}

.comment-content .comment-author span a:hover { color: #888; }

.comment-reply-link,
.review-comment-ratings {
	display: block;
	position: absolute;
	top: 4px;
	left: auto;
	text-align: center;
	right: 0px;
	width: 14px;
	height: 14px;
	color: #CCC;
	font-size: 14px;
	line-height: 1;
}

.review-comment-ratings {
	width: auto;
	color: #333;
}

.comment-reply-link:hover { color: #888; }


/* ----------------------------------------------------------------
	Comment Form
-----------------------------------------------------------------*/


#respond,
#respond form { margin-bottom: 0; }

.commentlist li #respond { margin: 30px 0 0; }

.commentlist li li #respond { margin-left: 30px; }

#respond p { margin: 10px 0 0 0; }

#respond p:first-child { margin-top: 0; }

#respond label small {
	color: #999;
	font-weight: normal;
}

#respond input[type="text"],
#respond textarea { margin-bottom: 0; }

#respond .col_one_third,
#respond .col_full { margin-bottom: 20px; }

.fb-comments,
.fb_iframe_widget,
.fb-comments > span,
.fb_iframe_widget > span,
.fb-comments > span > iframe,
.fb_iframe_widget > span > iframe {
	display: block !important;
	width: 100% !important;
	margin: 0;
}


/* Post Elements
-----------------------------------------------------------------*/

img.alignleft,
div.alignleft {
	float: left;
	margin: 5px 20px 13px 0;
	max-width: 100%;
}

div.alignleft > img,
div.alignnone > img,
div.aligncenter > img,
div.alignright > img {
	display: block;
	float: none;
}

img.alignnone,
img.aligncenter,
div.alignnone,
div.aligncenter {
	display: block;
	margin: 10px 0;
	float: none;
}

img.aligncenter,
div.aligncenter,
div.aligncenter img {
	margin-left: auto;
	margin-right: auto;
	clear: both;
}

img.alignright,
div.alignright {
	float: right;
	margin: 5px 0 13px 20px;
}

.wp-caption {
	text-align: center;
	margin: 10px 20px 13px 20px;
	font-family: 'Lato', Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}

.wp-caption img,
.wp-caption img a {
	display: block;
	margin: 0;
}

p.wp-caption-text {
	display: inline-block;
	margin: 10px 0 0 0;
	padding: 5px 10px;
	background-color: #EEE;
	border-radius: 50px;
}

.wp-smiley {
	max-height: 13px;
	margin: 0 !important;
}


/* Infinity Scroll - Message Style
-----------------------------------------------------------------*/

#infscr-loading,
#portfolio-ajax-loader {
	position: fixed;
	z-index: 20;
	top: 50%;
	left: 50%;
	width: 48px;
	height: 48px;
	margin: -24px 0 0 -24px;
	background-color: rgba(0,0,0,0.7);
	border-radius: 3px;
	line-height: 48px;
	font-size: 24px;
	color: #FFF;
	text-align: center;
}

#infscr-loading img,
#portfolio-ajax-loader img {
	display: none;
	width: 24px;
	height: 24px;
	margin: 12px;
}

#portfolio-ajax-loader { display: none; }

#portfolio-ajax-loader img { display: block; }


/* ----------------------------------------------------------------
	Shop
-----------------------------------------------------------------*/


#shop {
	position: relative;
	margin: 0 -20px -20px 0;
}

.product {
	position: relative;
	float: left;
	margin: 0 20px 20px 0;
	width: 270px;
}

.product-image {
	position: relative;
	width: 100%;
	height: 360px;
	overflow: hidden;
}

.product-image > a,
.product-image .slide a,
.product-image img {
	display: block;
	width: 100%;
	height: 100%;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .product-image > a {
	-webkit-transition: all .5s ease;
	-o-transition: all .5s ease;
	transition: all .5s ease;
}

.product-image > a:nth-of-type(2) {
	opacity: 0;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
}

.product-image:hover > a:nth-of-type(2) {
	opacity: 1;
	z-index: 2;
}

.product-desc {
	padding: 15px 0;
	font-size: 14px;
}

.product-title { margin-bottom: 7px; }

.product-title h3 {
	margin: 0;
	font-size: 20px;
}

.product-title h3 a,
.single-product .product-title h2 a { color: #333; }

.product-title h3 a:hover,
.single-product .product-title h2 a:hover { color: #1ABC9C; }

.product-price {
	font-size: 18px;
	font-weight: 600;
	color: #444;
	margin-bottom: 4px;
}

.product-price del {
	font-weight: 400;
	font-size: 90%;
	color: #888;
}

.product-price ins {
	text-decoration: none;
	color: #1ABC9C;
}

.product-overlay {
	position: absolute;
	width: 100%;
	height: 44px;
	line-height: 44px;
	top: auto;
	bottom: -44px;
	left: 0;
	z-index: 6;
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .product-overlay {
	-webkit-transition: bottom .3s ease-in-out;
	-o-transition: bottom .3s ease-in-out;
	transition: bottom .3s ease-in-out;
}

.product:hover .product-overlay { bottom: 0; }

.product-overlay a {
	display: block;
	float: left;
	width: 50%;
	font-size: 13px;
	color: #333;
	background-color: #F5F5F5;
	text-align: center;
	border-right: 1px solid rgba(0,0,0,0.1);
}

body:not(.device-touch):not(.device-xs):not(.device-xxs) .product-overlay a {
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.product-overlay a.item-quick-view { border-right: 0; }

.product-overlay a i {
	position: relative;
	top: 1px;
	font-size: 14px;
	margin-right: 3px;
}

.product-overlay a:hover {
	background-color: #333;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.sale-flash {
	position: absolute;
	top: 10px;
	left: 10px;
	padding: 6px 10px;
	background-color: #1ABC9C;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	border-radius: 2px;
	z-index: 5;
}

.sale-flash.out-of-stock { background-color: #777; }


/* Shop - 3 Columns
-----------------------------------------------------------------*/

#shop.product-3 { margin: 0 -30px -30px 0; }

.product-3 .product {
	margin: 0 30px 30px 0;
	width: 360px;
}

.product-3 .product-image { height: 480px; }


/* Shop - 3 Columns - Sidebar
-----------------------------------------------------------------*/

.postcontent #shop.product-3 { margin: 0 -25px -25px 0; }

.postcontent .product-3 .product {
	margin: 0 25px 25px 0;
	width: 270px;
}

.postcontent .product-3 .product-image { height: 360px; }


/* Shop - 2 Columns - Sidebar
-----------------------------------------------------------------*/

.postcontent #shop.product-2 { margin: 0 -40px -40px 0; }

.postcontent .product-2 .product {
	margin: 0 40px 40px 0;
	width: 410px;
}

.postcontent .product-2 .product-image { height: 547px; }


/* Shop - 2 Columns - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar #shop.product-2 { margin: 0 -40px -20px 0; }

.bothsidebar .product-2 .product {
	margin: 0 40px 20px 0;
	width: 270px;
}

.bothsidebar .product-2 .product-image { height: 360px; }


/* Shop - 1 Column
-----------------------------------------------------------------*/

#shop.product-1 { margin: 0 0 -40px 0; }

.product-1 .product {
	float: none;
	margin: 0 0 40px 0;
	width: 100%;
}

.product-1 .product-image {
	float: left;
	width: 300px;
	height: 400px;
	margin-right: 30px;
}

.product-1 .product.alt .product-image {
	float: right;
	margin: 0 0 0 30px;
}

.product-1 .product-desc {
	padding: 0;
	position: relative;
	overflow: hidden;
}

.product-1 .product-title h3 { font-size: 22px; }

.product-1 .product-desc .product-price { font-size: 20px; }

.product-1 .product-desc .product-rating { margin-bottom: 15px; }


/* Shop - 1 Column - Both Sidebar
-----------------------------------------------------------------*/

.bothsidebar .product-1 .product {
	border-top: 1px solid #F5F5F5;
	padding-top: 40px;
}

.bothsidebar .product-1 .product:first-child {
	border-top: 0;
	padding-top: 0;
}

.bothsidebar .product-1 .product-image {
	width: 240px;
	height: 320px;
}

.bothsidebar .product-1 .product-title h3 { font-size: 20px; }

.bothsidebar .product-1 .product-desc .product-price { font-size: 16px; }


/* Shop - Single
-----------------------------------------------------------------*/

.single-product .product {
	width: 100%;
	margin: 0;
}

.shop-quick-view-ajax,
.portfolio-ajax-modal {
	position: relative;
	background-color: #FFF;
	width: 800px;
	margin: 0 auto;
}

.single-product .product-image,
.single-product .product-image img { height: auto; }

.single-product .product-desc { padding: 0; }

.single-product .product-title h2 {
	font-size: 28px;
	margin-bottom: 8px;
}

.single-product .product-price {
	float: left;
	font-size: 24px;
	color: #1ABC9C;
	margin-bottom: 0;
}

.single-product .product-rating {
	float: right;
	position: relative;
	top: 9px;
}

.single-product .product-desc .line { margin: 20px 0; }

.quantity {
	float: left;
	margin-right: 30px;
}

.quantity .qty {
	float: left;
	width: 50px;
	height: 40px;
	line-height: 40px;
	border: 0;
	border-left: 1px solid #DDD;
	border-right: 1px solid #DDD;
	background-color: #EEE;
	text-align: center;
	margin-bottom: 0;
}

.quantity .plus,
.quantity .minus {
	display: block;
	float: left;
	cursor: pointer;
	border: 0px transparent;
	padding: 0;
	width: 36px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	background-color: #EEE;
	font-size: 16px;
	font-weight: bold;
	transition: background-color .2s linear;
	-webkit-transition: background-color .2s linear;
	-o-transition: background-color .2s linear;
}

.quantity .plus:hover,
.quantity .minus:hover { background-color: #DDD; }

.quantity .qty:focus,
.quantity .plus:focus,
.quantity .minus:focus {
	box-shadow: none !important;
	outline: 0 !important;
}

.single-product .add-to-cart.button {
	height: 40px;
	line-height: 40px;
}

.product-meta {
	font-size: 13px;
	color: #777;
}

.product-meta > .panel-body { margin-bottom: -5px; }

.product-meta > .panel-body > span {
	display: block;
	margin-bottom: 5px;
}


.single-product .feature-box.fbox-plain.fbox-small { padding-left: 26px; }

.single-product .feature-box.fbox-plain.fbox-small .fbox-icon { width: 20px; }

.single-product .feature-box.fbox-plain.fbox-small h3 {
	font-size: 15px;
	font-weight: bold;
	line-height: 18px;
	margin-bottom: 7px;
}

.single-product .feature-box.fbox-plain.fbox-small p { margin-left: -26px; }

.single-product .feature-box.fbox-plain.fbox-small .fbox-icon i { font-size: 18px; }


/* Individual Product
-----------------------------------------------------------------*/

.product.iproduct {
	float: none;
	margin: 0;
	width: 100%;
}

.iproduct .product-image,
.iproduct .product-image a,
.iproduct .product-image img { height: auto; }


/* ----------------------------------------------------------------
	Cart
-----------------------------------------------------------------*/


.cart .remove {
	font-size: 14px;
	color: #FF0000;
}

.cart .remove:hover { color: #000; }

.cart th {
	padding: 12px 15px !important;
	font-size: 14px;
	color: #555;
}

.cart td {
	padding: 12px 15px !important;
	vertical-align: middle !important;
	border-color: #E5E5E5 !important;
}

.cart-product-thumbnail a {
	display: block;
	width: 68px;
}

.cart-product-thumbnail img {
	display: block;
	width: 64px;
	height: 64px;
	border: 2px solid #EEE;
}

.cart-product-thumbnail img:hover { border-color: #1ABC9C; }

.cart-product-name a,
.product-name a {
	font-weight: bold;
	font-size: 13px;
	color: #333;
}

.cart-product-name a:hover,
.product-name a:hover { color: #666; }

.cart-product-price,
.cart-product-quantity,
.cart-product-subtotal { text-align: center !important; }

.cart-product-quantity .quantity {
	display: inline-block;
	margin: 0;
	float: none;
}

td.actions {
	padding: 20px 15px !important;
	vertical-align: top !important;
	background-color: #F5F5F5;
}


/* ----------------------------------------------------------------
	Events
-----------------------------------------------------------------*/


.events .entry,
.ievent {
	padding: 20px;
	background-color: #F9F9F9;
	border-bottom: 3px solid #EEE;
}

.events .entry-image .entry-date,
.ievent .entry-image .entry-date {
	position: absolute;
	top: 10px;
	left: 10px;
	background-color: rgba(0,0,0,0.7);
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	width: 60px;
	height: 64px;
	text-align: center;
	padding-top: 7px;
	font-size: 26px;
	line-height: 1;
}

.events .entry-image .entry-date span,
.ievent .entry-image .entry-date span {
	display: block;
	font-size: 15px;
	margin-top: 5px;
}

.events .entry-c,
.ievent .entry-c { padding: 5px 0; }

.single-event .entry-image img { border-radius: 0; }

.single-event .events-meta { font-size: 14px; }

.single-event .events-meta .iconlist li,
.parallax .iconlist li { margin: 5px 0; }

.single-event .entry-overlay,
.parallax .entry-overlay-meta {
	position: absolute;
	top: auto;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 80px;
	background-color: rgba(0,0,0,0.85);
	text-align: center;
	line-height: 80px;
	font-size: 22px;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	z-index: 5;
}

.single-event .countdown {
	display: inline-block;
	position: relative;
	top: 7px;
}

.single-event .countdown-section {
	padding: 0 15px;
	border-left-color: rgba(255,255,255,0.3);
	color: #CCC;
}

.single-event .countdown-amount { color: #FFF; }

.parallax .entry-overlay,
.parallax .entry-overlay-meta {
	background: transparent;
	width: auto;
	text-align: right;
	bottom: 30px;
	left: auto;
	right: 30px;
}

.parallax .entry-overlay-meta {
	padding: 20px;
	font-size: 14px;
	text-align: left;
	right: 38px;
	bottom: 130px;
	width: 368px;
	height: auto;
	line-height: inherit;
	background-color: rgba(0,0,0,0.7);
	border-radius: 3px;
}

.parallax.overlay-left .entry-overlay,
.parallax.overlay-left .entry-overlay-meta {
	right: auto;
	left: 30px;
}

.parallax.overlay-left .entry-overlay-meta { left: 38px; }

.parallax.overlay-center .entry-overlay,
.parallax.overlay-center .entry-overlay-meta {
	bottom: 100px;
	right: auto;
	left: 50%;
	margin-left: -192px;
}

.parallax.overlay-center .entry-overlay-meta {
	top: 100px;
	bottom: auto;
	margin-left: -184px;
}

.parallax .entry-overlay-meta h2 {
	font-size: 20px;
	text-transform: uppercase;
	border-bottom: 1px dashed rgba(255,255,255,0.2);
	padding-bottom: 17px;
}

.parallax .entry-overlay-meta h2 a { color: #FFF; }

.parallax .entry-overlay-meta h2 a:hover { color: #DDD; }

.parallax .countdown { top: 0; }

.parallax .countdown-section {
	border-left: 0;
	width: 80px;
	height: 80px;
	margin: 0 8px;
	font-size: 13px;
	background-color: rgba(0,0,0,0.7);
	border-radius: 3px;
	padding-top: 14px;
}

.parallax .countdown-amount {
	font-size: 28px;
	margin-bottom: 6px;
}


/* Individual Events
-----------------------------------------------------------------*/

.ievent {
	position: relative;
	margin-top: 20px;
}

.ievent:first-child { margin-top: 0; }

.ievent .entry-image {
	width: 30%;
	margin-right: 20px;
}

.ievent .entry-content { margin-top: 20px; }

.ievent .entry-title h2 { font-size: 18px; }

.ievent .entry-meta { margin-right: -10px; }

.ievent .entry-meta li {
	font-size: 13px;
	margin-right: 10px;
	padding-left: 10px;
}

.ievent .entry-meta li:first-child { padding-left: 0; }


/* ----------------------------------------------------------------
	Countdown
-----------------------------------------------------------------*/

.countdown { display: block; }

.countdown-row {
	display: block;
	position: relative;
	text-align: center;
}

.countdown-section {
	display: inline-block;
	font-size: 11px;
	line-height: 1;
	text-align: center;
	width: 25%;
	border-left: 1px dotted #BBB;
	color: #888;
	text-transform: capitalize;
}

.countdown-section:first-child { border-left: 0; }

.countdown-amount {
	display: block;
	font-size: 20px;
	color: #333;
	margin-bottom: 5px;
}

.countdown-descr {
	display: block;
	width: 100%;
}


/* Countdown - Medium
-----------------------------------------------------------------*/

.countdown-medium .countdown-section { font-size: 14px; }

.countdown-medium .countdown-amount {
	font-size: 30px;
	margin-bottom: 7px;
}


/* Countdown - Large
-----------------------------------------------------------------*/

.countdown-large .countdown-section { font-size: 18px; }

.countdown-large .countdown-amount {
	font-size: 44px;
	font-weight: 600;
	margin-bottom: 8px;
}


/* Countdown - Inline
-----------------------------------------------------------------*/

.countdown.countdown-inline { display: inline-block; }

.countdown.countdown-inline .countdown-row {
	display: inline-block;
	text-align: center;
}

.countdown.countdown-inline .countdown-section {
	display: inline-block;
	font-size: inherit;
	line-height: inherit;
	width: auto;
	border: none;
	color: inherit;
	margin-left: 7px;
	text-transform: lowercase;
}

.countdown.countdown-inline .countdown-section:first-child { margin-left: 0; }

.countdown.countdown-inline .countdown-amount {
	display: inline-block;
	font-size: inherit;
	color: inherit;
	font-weight: bold;
	margin: 0 3px 0 0;
}

.countdown.countdown-inline .countdown-descr {
	display: inline-block;
	width: auto;
}


/* Countdown - Coming Soon
-----------------------------------------------------------------*/

body:not(.device-xs):not(.device-xxs) .countdown.countdown-large.coming-soon .countdown-section {
	border: none;
	padding: 15px;
}

body:not(.device-xs):not(.device-xxs) .countdown.countdown-large.coming-soon .countdown-amount {
	height: 140px;
	line-height: 140px;
	border-radius: 50%;
	background-color: rgba(0,0,0,0.2);
	margin-bottom: 15px !important;
}


/* ----------------------------------------------------------------
	Buttons
-----------------------------------------------------------------*/


.button {
	display: inline-block;
	position: relative;
	cursor: pointer;
	outline: none;
	white-space: nowrap;
	margin: 5px;
	padding: 0 22px;
	font-size: 14px;
	height: 40px;
	line-height: 40px;
	background-color: #1ABC9C;
	color: #FFF;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 1px;
	border: none;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

body:not(.device-touch) .button {
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

.button-dark { background-color: #444; }

.button-light {
	background-color: #EEE;
	color: #333;
	text-shadow: none !important;
}

.button:hover {
	background-color: #444;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.button.button-dark:hover { background-color: #1ABC9C; }

.button.button-mini {
	padding: 0 14px;
	font-size: 11px;
	height: 28px;
	line-height: 28px;
}

.button.button-small {
	padding: 0 17px;
	font-size: 12px;
	height: 34px;
	line-height: 34px;
}

.button.button-large {
	padding: 0 26px;
	font-size: 16px;
	height: 46px;
	line-height: 46px;
}

.button.button-xlarge {
	padding: 0 32px;
	font-size: 18px;
	letter-spacing: 2px;
	height: 52px;
	line-height: 52px;
}

.button.button-desc {
	text-align: left;
	padding: 24px 34px;
	font-size: 22px;
	height: auto;
	line-height: 1;
	font-family: 'Raleway', sans-serif;
}

.button.button-desc span {
	display: block;
	margin-top: 10px;
	font-size: 14px;
	font-weight: 400;
	letter-spacing: 1px;
	font-family: 'Crete Round', serif;
	font-style: italic;
	text-transform: none;
}

.button i {
	position: relative;
	top: 1px;
	line-height: 1;
	margin-right: 5px;
}

.button.tright i { margin: 0 0 0 5px; }

.button-mini i { margin-right: 3px; }

.button-mini.tright i { margin: 0 0 0 3px; }

.button-small i { margin-right: 4px; }

.button-small.tright i { margin: 0 0 0 4px; }

.button-xlarge i {
	top: 2px;
	margin-right: 8px;
}

.button-xlarge.tright i { margin: 0 0 0 8px; }

.button.button-desc i {
	top: 1px;
	font-size: 48px;
	width: 48px;
	text-align: center;
	margin-right: 12px;
}

.button.button-desc.tright i { margin: 0 0 0 12px; }

.button.button-desc div { display: inline-block; }

.button.button-rounded { border-radius: 3px; }


/* Buttons - Border
-----------------------------------------------------------------*/

.button.button-border {
	border: 2px solid #444;
	background-color: transparent;
	color: #333;
	line-height: 36px;
	font-weight: 600;
	text-shadow: none;
}

.button.button-border.button-mini { line-height: 24px; }

.button.button-border.button-small { line-height: 30px; }

.button.button-border.button-large { line-height: 42px; }

.button.button-border.button-xlarge { line-height: 48px; }

.button.button-border.button-desc { line-height: 1; }

.button.button-border:hover {
	background-color: #444;
	color: #FFF;
	border-color: transparent !important;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.button.button-border.button-light {
	border-color: #EEE;
	color: #EEE;
}

.button.button-border.button-light:hover {
	background-color: #EEE;
	color: #333;
	text-shadow: none;
}


/* Buttons - Border
-----------------------------------------------------------------*/

.button.button-3d {
	border-radius: 3px;
	border-bottom: 3px solid rgba(0,0,0,0.15);
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}

.button.button-3d:hover {
	background-color: #1ABC9C !important;
	opacity: 0.9;
}

.button.button-3d.button-light:hover,
.button.button-reveal.button-light:hover {
	text-shadow: none;
	color: #333;
}


/* Buttons - Icon Reveal
-----------------------------------------------------------------*/

.button.button-reveal {
	padding: 0 28px;
	overflow: hidden;
}

.button.button-reveal i {
	display: block;
	position: absolute;
	top: 0;
	left: -32px;
	width: 32px;
	height: 40px;
	line-height: 40px;
	margin: 0;
	text-align: center;
	background-color: rgba(0,0,0,0.1);
}

.button.button-reveal.button-border i { top: -2px; }

.button.button-reveal.tright i {
	left: auto;
	right: -32px;
}

.button.button-reveal.button-3d i,
.button.button-reveal.button-rounded i { border-radius: 3px 0 0 3px; }

.button.button-reveal.button-3d.tright i,
.button.button-reveal.button-rounded.tright i { border-radius: 0 3px 3px 0; }

.button.button-reveal span {
	display: inline-block;
	position: relative;
	left: 0;
}

body:not(.device-touch) .button.button-reveal i,
body:not(.device-touch) .button.button-reveal span {
	-webkit-transition: left 0.3s ease, right 0.3s ease;
	-o-transition: left 0.3s ease, right 0.3s ease;
	transition: left 0.3s ease, right 0.3s ease;
}

.button.button-reveal.button-mini { padding: 0 17px; }

.button.button-reveal.button-mini i {
	left: -22px;
	width: 22px;
	height: 28px;
	line-height: 28px;
}

.button.button-reveal.button-mini.tright i {
	left: auto;
	right: -22px;
}

.button.button-reveal.button-small { padding: 0 22px; }

.button.button-reveal.button-small i {
	left: -26px;
	width: 26px;
	height: 34px;
	line-height: 34px;
}

.button.button-reveal.button-small.tright i {
	left: auto;
	right: -26px;
}

.button.button-reveal.button-large { padding: 0 32px; }

.button.button-reveal.button-large i {
	left: -38px;
	width: 38px;
	height: 46px;
	line-height: 46px;
}

.button.button-reveal.button-large.tright i {
	left: auto;
	right: -38px;
}

.button.button-reveal.button-xlarge { padding: 0 40px; }

.button.button-reveal.button-xlarge i {
	left: -44px;
	width: 44px;
	height: 52px;
	line-height: 52px;
}

.button.button-reveal.button-xlarge.tright i {
	left: auto;
	right: -44px;
}

.button.button-reveal:hover i { left: 0; }

.button.button-reveal.tright:hover i {
	left: auto;
	right: 0;
}

.button.button-reveal:hover span { left: 16px; }

.button.button-reveal.button-mini:hover span { left: 11px; }

.button.button-reveal.button-small:hover span { left: 13px; }

.button.button-reveal.button-large:hover span { left: 19px; }

.button.button-reveal.button-xlarge:hover span { left: 22px; }

.button.button-reveal.tright:hover span { left: -16px; }

.button.button-reveal.button-mini.tright:hover span { left: -11px; }

.button.button-reveal.button-small.tright:hover span { left: -13px; }

.button.button-reveal.button-large.tright:hover span { left: -19px; }

.button.button-reveal.button-xlarge.tright:hover span { left: -22px; }


/* Buttons - Promo 100% Width
-----------------------------------------------------------------*/

.button.button-full {
	display: block !important;
	white-space: normal;
	margin: 0;
	height: auto;
	line-height: 1.6;
	padding: 30px 0;
	font-size: 30px;
	font-weight: 300;
	text-transform: none;
	border-radius: 0;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.button.button-full.button-light { border-bottom: 1px solid rgba(0,0,0,0.15); }

.button.button-full strong {
	font-weight: 600;
	border-bottom: 2px solid #EEE;
}

body:not(.device-touch) .button.button-full strong {
	-webkit-transition: border .2s ease-in-out;
	-o-transition: border .2s ease-in-out;
	transition: border .2s ease-in-out;
}

.button.button-full.button-light strong { border-bottom-color: #333; }

.button.button-full.button-light:hover strong { border-bottom-color: #EEE; }


/* Buttons - Colors
-----------------------------------------------------------------*/

.button-red { background-color: #C02942; }
.button-3d.button-red:hover,
.button-reveal.button-red:hover { background-color: #C02942 !important; }

.button-teal { background-color: #53777A; }
.button-3d.button-teal:hover,
.button-reveal.button-teal:hover { background-color: #53777A !important; }

.button-yellow { background-color: #ECD078; }
.button-3d.button-yellow:hover,
.button-reveal.button-yellow:hover { background-color: #ECD078 !important; }

.button-green { background-color: #59BA41; }
.button-3d.button-green:hover,
.button-reveal.button-green:hover { background-color: #59BA41 !important; }

.button-brown { background-color: #774F38; }
.button-3d.button-brown:hover,
.button-reveal.button-brown:hover { background-color: #774F38 !important; }

.button-aqua { background-color: #40C0CB; }
.button-3d.button-aqua:hover,
.button-reveal.button-aqua:hover { background-color: #40C0CB !important; }

.button-lime { background-color: #AEE239; }
.button-3d.button-lime:hover,
.button-reveal.button-lime:hover { background-color: #AEE239 !important; }

.button-purple { background-color: #5D4157; }
.button-3d.button-purple:hover,
.button-reveal.button-purple:hover { background-color: #5D4157 !important; }

.button-leaf { background-color: #A8CABA; }
.button-3d.button-leaf:hover,
.button-reveal.button-leaf:hover { background-color: #A8CABA !important; }

.button-pink { background-color: #F89FA1; }
.button-3d.button-pink:hover,
.button-reveal.button-pink:hover { background-color: #F89FA1 !important; }

.button-dirtygreen { background-color: #1693A5; }
.button-3d.button-dirtygreen:hover,
.button-reveal.button-dirtygreen:hover { background-color: #1693A5 !important; }

.button-blue { background-color: #1265A8; }
.button-3d.button-blue:hover,
.button-reveal.button-blue:hover { background-color: #1265A8 !important; }

.button-amber { background-color: #EB9C4D; }
.button-3d.button-amber:hover,
.button-reveal.button-amber:hover { background-color: #EB9C4D !important; }

.button-black { background-color: #111; }
.button-3d.button-black:hover,
.button-reveal.button-black:hover { background-color: #111 !important; }

.button-white { background-color: #F9F9F9; }
.button-3d.button-white:hover,
.button-reveal.button-white:hover { background-color: #F9F9F9 !important; }


/* Buttons - No Hover
-----------------------------------------------------------------*/

.button.button-nohover:hover {
	opacity: inherit !important;
	background-color: inherit !important;
	color: inherit !important;
	border-color: inherit !important;
}


/* ----------------------------------------------------------------
	Promo Boxes
-----------------------------------------------------------------*/


.promo {
	position: relative;
	padding: 30px 200px 30px 0;
}

.promo h3 {
	font-weight: bold;
	margin-bottom: 0;
}

.promo > span,
.promo > .container > span {
	display: block;
	color: #444;
	font-weight: 300;
	font-size: 16px;
	margin-top: 6px;
}

.promo a.button {
	position: absolute;
	top: 50%;
	margin: 0;
	margin-top: -18px;
	left: auto;
	right: 0;
}

.promo a.button.button-mini { margin-top: -12px; }

.promo a.button.button-small { margin-top: -15px; }

.promo a.button.button-large { margin-top: -22px; }

.promo a.button.button-xlarge { margin-top: -25px; }

.promo a.button.button-desc { margin-top: -40px; }


/* Promo Uppercase
-----------------------------------------------------------------*/

.promo-uppercase { text-transform: uppercase; }

.promo-uppercase h3 { font-size: 22px; }

.promo-uppercase > span,
.promo-uppercase > .container > span { font-size: 15px; }


/* Promo - with Border
-----------------------------------------------------------------*/

.promo.promo-border {
	border: 1px solid #E5E5E5;
	border-radius: 3px;
	padding-left: 30px;
}

.promo.promo-border a.button { right: 30px; }


/* Promo - Light
-----------------------------------------------------------------*/

.promo.promo-light {
	background-color: #F5F5F5;
	border-radius: 3px;
	padding-left: 30px;
}

.promo.promo-light a.button { right: 30px; }


/* Promo - Dark
-----------------------------------------------------------------*/

.promo.promo-dark {
	border: 0 !important;
	background-color: #333;
	padding: 30px 200px 30px 30px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	border-radius: 3px;
}

.promo.promo-dark h3 { color: #FFF; }

.promo.promo-dark > h3 span,
.promo.promo-dark > .container > h3 span {
	padding: 2px 8px;
	border-radius: 3px;
	background-color: rgba(0,0,0,0.15);
	color: #FFF;
	font-weight: 400;
}

.promo.promo-dark > span,
.promo.promo-dark > .container > span {
	color: #CCC;
	margin-top: 8px;
}

.promo.promo-dark a.button { right: 30px; }


/* Promo - Flat
-----------------------------------------------------------------*/

.promo.promo-flat { background-color: #1ABC9C; }

.promo.promo-flat > span,
.promo.promo-flat > .container > span { color: rgba(255,255,255,0.9); }

.promo.promo-flat a.button:not(.button-border) {
	background-color: rgba(0,0,0,0.2);
	color: #FFF;
}

.promo.promo-flat a.button:hover {
	background-color: #FFF;
	border-color: #FFF;
	color: #444;
	text-shadow: none;
}


/* Promo - 100% Full Width
-----------------------------------------------------------------*/

.promo-full {
	border-radius: 0 !important;
	border-left: 0 !important;
	border-right: 0 !important;
	padding: 40px 0 !important;
}

.promo-full a.button { right: 15px !important; }

.promo-full.promo-right a.button {
	right: auto !important;
	left: 15px !important;
}

/* Promo - Parallax
-----------------------------------------------------------------*/

.promo.parallax { padding: 80px 0 !important; }


/* Promo - Right Align
-----------------------------------------------------------------*/

.promo.promo-right {
	text-align: right;
	padding: 30px 0 30px 200px;
}

.promo.promo-right a.button {
	left: 0;
	right: auto;
}


/* Promo - with Border & Right Align
-----------------------------------------------------------------*/

.promo.promo-right.promo-border:not(.promo-mini),
.promo.promo-dark.promo-right:not(.promo-mini) { padding-right: 30px; }

.promo.promo-right.promo-border a.button,
.promo.promo-dark.promo-right a.button { left: 30px; }


/* Promo - Center Align
-----------------------------------------------------------------*/

.promo.promo-center {
	text-align: center;
	padding: 30px 20px;
}

.promo.promo-center a.button {
	position: relative;
	top: 0;
	margin: 20px 0 0;
	left: 0 !important;
	right: 0;
}


/* Promo - Mini
-----------------------------------------------------------------*/

.promo.promo-mini {
	text-align: left;
	padding: 20px 25px;
}

.promo.promo-mini h3 {
	font-size: 20px;
	line-height: 1.5;
}

.promo.promo-mini.promo-uppercase h3 { font-size: 18px; }

.promo.promo-mini.promo-dark h3 { line-height: 1.7; }

.promo.promo-mini a.button {
	position: relative;
	top: 0;
	margin: 20px 0 0;
	left: 0 !important;
	right: 0;
}


/* Promo - Mini - Center Align
-----------------------------------------------------------------*/

.promo.promo-mini.promo-center { text-align: center; }


/* Promo - Mini - Right Align
-----------------------------------------------------------------*/

.promo.promo-mini.promo-right { text-align: right; }


/* ----------------------------------------------------------------
	Featured Boxes
-----------------------------------------------------------------*/


.feature-box {
	position: relative;
	margin-top: 20px;
	padding: 0 0 0 80px;
}

.feature-box:first-child { margin-top: 0; }

.feature-box .fbox-icon {
	display: block;
	position: absolute;
	width: 64px;
	height: 64px;
	top: 0;
	left: 0;
}

.feature-box .fbox-icon a,
.feature-box .fbox-icon i,
.feature-box .fbox-icon img {
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
	color: #FFF;
}

.feature-box .fbox-icon i,
.feature-box .fbox-icon img {
	border-radius: 50%;
	background-color: #1ABC9C;
}

.feature-box .fbox-icon i {
	font-style: normal;
	font-size: 28px;
	text-align: center;
	line-height: 64px;
}

.feature-box h3 {
	font-size: 16px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px;
	margin-bottom: 0;
	color: #333;
}

.feature-box p {
	margin: 8px 0 0 0;
	color: #999;
}

.feature-box .before-heading { font-size: 14px; }


/* Feature Box - Icon Large
-----------------------------------------------------------------*/

.feature-box.fbox-large { padding: 0 0 0 115px; }

.feature-box.fbox-large .fbox-icon {
	width: 96px;
	height: 96px;
}

.feature-box.fbox-large .fbox-icon i {
	font-size: 42px;
	line-height: 96px;
}


/* Feature Box - Icon Outline
-----------------------------------------------------------------*/

.feature-box.fbox-outline .fbox-icon {
	border: 1px solid #1ABC9C;
	border-radius: 50%;
	padding: 3px;
}

.feature-box.fbox-outline .fbox-icon i { line-height: 56px; }


/* Feature Box - Icon Outline Large
-----------------------------------------------------------------*/

.feature-box.fbox-outline.fbox-large .fbox-icon { padding: 4px; }

.feature-box.fbox-outline.fbox-large .fbox-icon i { line-height: 86px; }


/* Feature Box - Icon Rounded
-----------------------------------------------------------------*/

.feature-box.fbox-rounded .fbox-icon { border-radius: 3px !important; }

.feature-box.fbox-rounded .fbox-icon i,
.feature-box.fbox-rounded .fbox-icon img { border-radius: 3px !important; }


/* Feature Box - Icon Rounded & Large
-----------------------------------------------------------------*/

.feature-box.fbox-rounded.fbox-large .fbox-icon { border-radius: 4px !important; }

.feature-box.fbox-rounded.fbox-large .fbox-icon i,
.feature-box.fbox-rounded.fbox-large .fbox-icon img { border-radius: 4px !important; }


/* Feature Box - Light Background
-----------------------------------------------------------------*/

.feature-box.fbox-light.fbox-outline .fbox-icon { border-color: #E5E5E5; }

.feature-box.fbox-light .fbox-icon i,
.feature-box.fbox-light .fbox-icon img {
	border: 1px solid #E5E5E5;
	background-color: #F5F5F5;
	color: #444;
}

.feature-box.fbox-light .fbox-icon i { line-height: 62px; }

.feature-box.fbox-light.fbox-outline .fbox-icon i { line-height: 54px; }

.feature-box.fbox-light.fbox-large .fbox-icon i { line-height: 96px; }

.feature-box.fbox-light.fbox-outline.fbox-large .fbox-icon i { line-height: 84px; }


/* Feature Box - Dark Background
-----------------------------------------------------------------*/

.feature-box.fbox-dark.fbox-outline .fbox-icon { border-color: #444; }

.feature-box.fbox-dark .fbox-icon i,
.feature-box.fbox-dark .fbox-icon img { background-color: #333; }


/* Feature Box - Border
-----------------------------------------------------------------*/

.feature-box.fbox-border .fbox-icon {
	border: 1px solid #1ABC9C;
	border-radius: 50%;
}

.feature-box.fbox-border .fbox-icon i,
.feature-box.fbox-border .fbox-icon img {
	border: none;
	background-color: transparent !important;
	color: #1ABC9C;
}

.feature-box.fbox-border .fbox-icon { padding: 0; }

.feature-box.fbox-border .fbox-icon i { line-height: 62px !important; }

.feature-box.fbox-border.fbox-large .fbox-icon i { line-height: 94px !important; }


/* Feature Box - Border - Light
-----------------------------------------------------------------*/

.feature-box.fbox-border.fbox-light .fbox-icon { border-color: #E5E5E5; }

.feature-box.fbox-border.fbox-light .fbox-icon i,
.feature-box.fbox-border.fbox-light .fbox-icon img { color: #888; }


/* Feature Box - Border - Dark
-----------------------------------------------------------------*/

.feature-box.fbox-border.fbox-dark .fbox-icon { border-color: #333; }

.feature-box.fbox-border.fbox-dark .fbox-icon i,
.feature-box.fbox-border.fbox-dark .fbox-icon img { color: #444; }


/* Feature Box - Plain
-----------------------------------------------------------------*/

.feature-box.fbox-plain .fbox-icon {
	border: none !important;
	height: auto !important;
}

.feature-box.fbox-plain .fbox-icon i,
.feature-box.fbox-plain .fbox-icon img {
	border: none !important;
	background-color: transparent !important;
	color: #1ABC9C;
	border-radius: 0;
}

.feature-box.fbox-plain .fbox-icon i {
	font-size: 48px;
	line-height: 1 !important;
}

.feature-box.fbox-plain .fbox-icon img { height: 64px; }

.feature-box.fbox-plain.fbox-image .fbox-icon { width: auto; }

.feature-box.fbox-plain.fbox-image .fbox-icon img {
	width: auto;
	display: inline-block;
}

.feature-box.fbox-plain.fbox-small { padding-left: 42px; }

.feature-box.fbox-plain.fbox-small .fbox-icon { width: 28px; }

.feature-box.fbox-plain.fbox-small h3 {
	font-size: 15px;
	line-height: 26px;
	margin-bottom: 10px;
}

.feature-box.fbox-plain.fbox-small p { margin-left: -42px; }

.feature-box.fbox-plain.fbox-small .fbox-icon i { font-size: 28px; }

.feature-box.fbox-plain.fbox-small .fbox-icon img { height: 28px; }

.feature-box.fbox-plain.fbox-large .fbox-icon i { font-size: 72px; }

.feature-box.fbox-plain.fbox-large .fbox-icon img { height: 96px; }

.feature-box.fbox-plain.fbox-light .fbox-icon i,
.feature-box.fbox-plain.fbox-light .fbox-icon img { color: #888; }

.feature-box.fbox-plain.fbox-dark .fbox-icon i,
.feature-box.fbox-plain.fbox-dark .fbox-icon img { color: #444; }


/* Feature Box - Center
-----------------------------------------------------------------*/

.feature-box.fbox-center {
	padding: 0;
	text-align: center;
}

.feature-box.fbox-center.fbox-small { padding-left: 0 !important; }

.feature-box.fbox-center .fbox-icon {
	position: relative;
	width: 96px;
	height: 96px;
	margin: 0 auto 30px;
}

.feature-box.fbox-center .fbox-icon i {
	font-size: 42px;
	line-height: 96px;
}

.feature-box.fbox-center.fbox-outline .fbox-icon i { line-height: 88px; }

.feature-box.fbox-center p {
	font-size: 14px;
	margin-top: 15px;
}


/* Feature Box - Center & Large Icons
-----------------------------------------------------------------*/

.feature-box.fbox-center.fbox-large .fbox-icon {
	width: 128px;
	height: 128px;
}

.feature-box.fbox-center.fbox-large .fbox-icon i {
	font-size: 70px;
	line-height: 128px;
}

.feature-box.fbox-center.fbox-large.fbox-outline .fbox-icon i { line-height: 118px; }

.feature-box.fbox-center.fbox-light .fbox-icon i { line-height: 94px; }

.feature-box.fbox-center.fbox-light.fbox-outline .fbox-icon i { line-height: 86px; }

.feature-box.fbox-center.fbox-light.fbox-outline.fbox-large .fbox-icon i { line-height: 114px; }

.feature-box.fbox-center.fbox-border .fbox-icon i { line-height: 94px !important; }

.feature-box.fbox-center.fbox-large.fbox-border .fbox-icon i { line-height: 126px !important; }

.feature-box.fbox-center.fbox-plain .fbox-icon i { font-size: 84px; }

.feature-box.fbox-center.fbox-plain .fbox-icon img { height: 96px; }

.feature-box.fbox-center.fbox-large.fbox-plain .fbox-icon i { font-size: 112px; }

.feature-box.fbox-center.fbox-large.fbox-plain .fbox-icon img { height: 128px; }


/* Feature Box - Center & Large Icons
-----------------------------------------------------------------*/

.feature-box.fbox-center.fbox-small .fbox-icon {
	width: 64px;
	height: 64px;
}

.feature-box.fbox-center.fbox-small .fbox-icon i {
	font-size: 28px;
	line-height: 64px;
}

.feature-box.fbox-center.fbox-small.fbox-outline .fbox-icon i { line-height: 58px; }

.feature-box.fbox-center.fbox-light.fbox-outline.fbox-small .fbox-icon i { line-height: 54px; }

.feature-box.fbox-center.fbox-small.fbox-border .fbox-icon i { line-height: 62px !important; }

.feature-box.fbox-center.fbox-small.fbox-plain .fbox-icon i { font-size: 56px; }

.feature-box.fbox-center.fbox-small.fbox-plain .fbox-icon img { height: 64px; }

.feature-box.fbox-center.fbox-small p {
	font-size: 14px;
	margin-top: 10px;
}

.feature-box.fbox-center.fbox-plain.fbox-small p { margin-left: 0; }


/* Feature Box - Right
-----------------------------------------------------------------*/

.feature-box.fbox-right {
	padding: 0 80px 0 0;
	text-align: right;
}

.feature-box.fbox-right.fbox-large { padding-right: 115px; }

.feature-box.fbox-right .fbox-icon {
	left: auto;
	right: 0;
}

.feature-box.fbox-right.fbox-plain.fbox-small { padding: 0 42px 0 0; }

.feature-box.fbox-right.fbox-plain.fbox-small p { margin: 0 -42px 0 0; }


/* Feature Box - Subtitle
-----------------------------------------------------------------*/

.feature-box h3 + .fbox-icon { margin-top: 20px !important; }

.feature-box h3 span.subtitle {
	display: block;
	margin-top: 5px;
	color: #444;
	font-weight: 300;
	text-transform: none;
}

.feature-box.fbox-center:not(.fbox-bg) h3:after {
	content: '';
	display: block;
	margin: 20px auto;
	width: 30px;
	border-top: 2px solid #555;
	-webkit-transition: width .3s ease;
	-o-transition: width .3s ease;
	transition: width .3s ease;
}

.feature-box.fbox-center:not(.fbox-bg):hover h3:after { width: 50px; }

.feature-box.fbox-center.noborder:not(.fbox-bg) h3:after,
.feature-box.fbox-center.nobottomborder:not(.fbox-bg) h3:after { display: none; }

.feature-box.fbox-center.fbox-italic p {
	font-style: italic;
	font-family: 'Lato', sans-serif;
}


/* Feature Box - Background
-----------------------------------------------------------------*/

.feature-box.fbox-bg.fbox-center {
	margin-top: 68px;
	padding: 68px 30px 30px;
	background-color: #FFF;
	border: 1px solid #E5E5E5;
	border-radius: 5px;
}

.feature-box.fbox-bg.fbox-center:first-child { margin-top: 48px; }

.feature-box.fbox-bg.fbox-center.fbox-large {
	margin-top: 84px;
	padding-top: 84px;
}

.feature-box.fbox-bg.fbox-center.fbox-large:first-child { margin-top: 64px; }

.feature-box.fbox-bg.fbox-center .fbox-icon {
	position: absolute;
	top: -48px;
	left: 50%;
	margin: 0 0 0 -48px;
}

.feature-box.fbox-bg.fbox-center.fbox-large .fbox-icon {
	top: -64px;
	left: 50%;
	margin-left: -64px;
}

.feature-box.fbox-bg.fbox-center.fbox-plain .fbox-icon,
.feature-box.fbox-bg.fbox-center.fbox-border .fbox-icon,
.feature-box.fbox-bg.fbox-center.fbox-outline .fbox-icon { background-color: #FFF; }


/* Animated Icon Hovers
-----------------------------------------------------------------*/

.fbox-effect .fbox-icon i { z-index: 1; }

.fbox-effect .fbox-icon i:after {
	pointer-events: none;
	position: absolute;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	content: '';
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

.fbox-rounded.fbox-effect .fbox-icon i:after { border-radius: 3px; }

.fbox-effect .fbox-icon i {
	-webkit-transition: background-color 0.3s, color 0.3s;
	-o-transition: background-color 0.3s, color 0.3s;
	transition: background-color 0.3s, color 0.3s;
}

.fbox-effect .fbox-icon i:after {
	top: -3px;
	left: -3px;
	padding: 3px;
	box-shadow: 0 0 0 2px #333;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
	-webkit-transform: scale(.8);
	-moz-transition: -moz-transform 0.3s, opacity 0.3s;
	-moz-transform: scale(.8);
	-ms-transform: scale(.8);
	transition: transform 0.3s, opacity 0.3s;
	transform: scale(.8);
	opacity: 0;
}

.fbox-effect .fbox-icon i:hover,
.fbox-effect:hover .fbox-icon i {
	background-color: #333;
	color: #FFF;
}

.fbox-effect.fbox-dark .fbox-icon i:after { box-shadow: 0 0 0 2px #1ABC9C; }

.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-effect.fbox-dark:hover .fbox-icon i { background-color: #1ABC9C; }

.fbox-effect .fbox-icon i:hover:after,
.fbox-effect:hover .fbox-icon i:after {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}

/* Icon Effects - Bordered
-----------------------------------------------------------------*/

.fbox-border.fbox-effect .fbox-icon i {
	-webkit-transition: color 0.5s, box-shadow 0.5s, background-color 0.5s;
	-o-transition: color 0.5s, box-shadow 0.5s, background-color 0.5s;
	transition: color 0.5s, box-shadow 0.5s, background-color 0.5s;
}

.fbox-border.fbox-effect .fbox-icon i:after {
	top: -2px;
	left: -2px;
	padding: 2px;
	z-index: -1;
	box-shadow: none;
	background-image: url('images/icons/iconalt.svg');
	background-position: center center;
	background-size: 100% 100%;
	-webkit-transition: -webkit-transform 0.5s, opacity 0.5s, background-color 0.5s;
	-o-transition: -moz-transform 0.5s, opacity 0.5s, background-color 0.5s;
	transition: transform 0.5s, opacity 0.5s, background-color 0.5s;
}

.fbox-border.fbox-rounded.fbox-effect .fbox-icon i:after { border-radius: 3px; }

.fbox-border.fbox-effect .fbox-icon i:hover,
.fbox-border.fbox-effect:hover .fbox-icon i {
	color: #FFF;
	box-shadow: 0 0 0 1px #333;
}

.fbox-border.fbox-effect .fbox-icon i:after {
	-webkit-transform: scale(1.3);
	-moz-transform: scale(1.3);
	-ms-transform: scale(1.3);
	transform: scale(1.3);
	opacity: 0;
	background-color: #333;
}

.fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i { box-shadow: 0 0 0 1px #1ABC9C; }

.fbox-border.fbox-effect.fbox-dark .fbox-icon i:after { background-color: #1ABC9C; }

.fbox-border.fbox-effect .fbox-icon i:hover:after,
.fbox-border.fbox-effect:hover .fbox-icon i:after {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}


/* Media Featured Box
-----------------------------------------------------------------*/

.feature-box.media-box { padding: 0; }

.feature-box.media-box .fbox-media { margin: 0 0 25px; }

.feature-box.media-box .fbox-media,
.feature-box.media-box .fbox-media a,
.feature-box.media-box .fbox-media img {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
}

.feature-box.media-box .fbox-media iframe { display: block; }

.feature-box.media-box p { margin-top: 17px; }

.feature-box.media-box.fbox-bg .fbox-media { margin: 0; }

.feature-box.media-box.fbox-bg .fbox-desc {
	padding: 25px;
	background-color: #FFF;
	border: 1px solid #E5E5E5;
	border-top: 0;
	border-radius: 0 0 5px 5px;
}

.feature-box.media-box.fbox-bg .fbox-media img { border-radius: 5px 5px 0 0; }


/* ----------------------------------------------------------------
	Process Steps
-----------------------------------------------------------------*/

.process-steps {
	margin: 0 0 40px;
	list-style: none;
}

.process-steps li {
	float: left;
	position: relative;
	width: 25%;
	text-align: center;
	overflow: hidden;
}

.process-steps.process-2 li { width: 50%; }
.process-steps.process-3 li { width: 33.33%; }
.process-steps.process-5 li { width: 20%; }

.process-steps li .i-circled { margin-bottom: 0 !important; }

.process-steps li .i-bordered { background-color: #FFF; }

.process-steps li h5 {
	margin: 15px 0 0 0;
	font-size: 16px;
	font-weight: 300;
}

.process-steps li.active h5,
.process-steps li.ui-tabs-active h5 {
	font-weight: 600;
	color: #1ABC9C;
}

.process-steps li.active a,
.process-steps li.ui-tabs-active a {
	background-color: #1ABC9C !important;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	border-color: #1ABC9C !important;
}

.process-steps li:before,
.process-steps li:after {
	content: '';
	position: absolute;
	top: 30px;
	left: 0;
	margin-left: -26px;
	width: 50%;
	border-top: 1px dashed #DDD;
}

.process-steps li:after {
	left: auto;
	right: 0;
	margin: 0 -26px 0 0;
}

.process-steps li:first-child:before,
.process-steps li:last-child:after { display: none; }


/* ----------------------------------------------------------------
	Alerts
-----------------------------------------------------------------*/


.style-msg,
.style-msg2 {
	display: block;
	color: #444;
	border-left: 4px solid rgba(0,0,0,0.1);
	margin-bottom: 20px;
}

.style-msg2 { border-left: 4px solid rgba(0,0,0,0.2); }

.successmsg {
	background: #C5EBD4;
	color: #184B21;
}

.errormsg {
	background: #FFCCCC;
	color: #740D0A;
}

.infomsg {
	background: #B9DFF4;
	color: #124F70;
}

.alertmsg {
	background: #FCE0B6;
	color: #975E06;
}

.style-msg .sb-msg,
.style-msg2 .msgtitle,
.style-msg2 .sb-msg {
	display: block;
	padding: 15px;
	border-left: 1px solid rgba(255,255,255,0.5);
	font-size: 13px;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.6);
}

.style-msg2 .msgtitle {
	background: rgba(0,0,0,0.15);
	border-top: none;
	border-bottom: none;
	font-size: 14px;
	font-weight: bold;
}

.style-msg-light .sb-msg,
.style-msg-light .msgtitle {
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
}

.style-msg2 .sb-msg { font-weight: normal; }

.style-msg2 ol,
.style-msg2 ul { margin: 0 0 0 30px; }

.style-msg2 ol { list-style-type: decimal; }

.style-msg2 ul { list-style-type: disc; }

.alert i,
.sb-msg i,
.msgtitle i {
	position: relative;
	top: 1px;
	font-size: 14px;
	width: 14px;
	text-align: center;
	margin-right: 5px;
}


/* ----------------------------------------------------------------
	Styled Icons
-----------------------------------------------------------------*/


.i-rounded,
.i-plain,
.i-circled,
.i-bordered,
.social-icon {
	display: block;
	float: left;
	margin: 4px 11px 7px 0;
	text-align: center !important;
	font-size: 28px;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	cursor: pointer;
	font-style: normal;
}

body:not(.device-touch) .i-rounded,
body:not(.device-touch) .i-plain,
body:not(.device-touch) .i-circled,
body:not(.device-touch) .i-bordered,
body:not(.device-touch) .social-icon {
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.i-rounded,
.i-circled,
.i-bordered {
	width: 52px !important;
	height: 52px !important;
	line-height: 52px !important;
	background-color: #444;
	border-radius: 3px;
}

.i-bordered {
	border: 1px solid #555;
	line-height: 50px !important;
	background-color: transparent !important;
	color: #444;
	text-shadow: none;
}

.i-plain {
	width: 36px !important;
	height: 36px !important;
	font-size: 28px;
	line-height: 36px !important;
	color: #444;
	text-shadow: 1px 1px 1px #FFF;
}

.i-plain:hover { color: #777; }

.i-circled { border-radius: 50%; }

.i-light {
	background-color: #F5F5F5;
	color: #444;
	text-shadow: 1px 1px 1px #FFF;
	box-shadow: inset 0 0 15px rgba(0,0,0,0.2);
}

.i-alt {
	background-image: url('images/icons/iconalt.svg');
	background-position: center center;
	background-size: 100% 100%;
}


.i-rounded:hover,
.i-circled:hover {
	background-color: #1ABC9C;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	box-shadow: 0 0 0 rgba(0,0,0,0.2);
}

.i-bordered:hover {
	background-color: #444 !important;
	color: #FFF;
	border-color: #444;
}


/* Icon Size - Small
-----------------------------------------------------------------*/

.i-small.i-rounded,
.i-small.i-plain,
.i-small.i-circled,
.i-small.i-bordered {
	margin: 4px 11px 7px 0;
	font-size: 14px;
}

.i-small.i-rounded,
.i-small.i-circled,
.i-small.i-bordered {
	width: 28px !important;
	height: 28px !important;
	line-height: 28px !important;
}

.i-small.i-bordered { line-height: 26px !important; }

.i-small.i-plain {
	width: 18px !important;
	height: 18px !important;
	font-size: 14px;
	line-height: 18px !important;
}


/* Icon Size - Small
-----------------------------------------------------------------*/

.i-medium.i-rounded,
.i-medium.i-plain,
.i-medium.i-circled,
.i-medium.i-bordered {
	margin: 6px 13px 9px 0;
	font-size: 21px;
}

.i-medium.i-rounded,
.i-medium.i-circled,
.i-medium.i-bordered {
	width: 36px !important;
	height: 36px !important;
	line-height: 36px !important;
}

.i-medium.i-bordered { line-height: 34px !important; }

.i-medium.i-plain {
	width: 28px !important;
	height: 28px !important;
	font-size: 20px;
	line-height: 28px !important;
}


/* Icon Size - Large
-----------------------------------------------------------------*/

.i-large.i-rounded,
.i-large.i-plain,
.i-large.i-circled,
.i-large.i-bordered {
	margin: 4px 11px 7px 0;
	font-size: 42px;
}

.i-large.i-rounded,
.i-large.i-circled,
.i-large.i-bordered {
	width: 64px !important;
	height: 64px !important;
	line-height: 64px !important;
}

.i-large.i-bordered { line-height: 62px !important; }

.i-large.i-plain {
	width: 48px !important;
	height: 48px !important;
	font-size: 42px;
	line-height: 48px !important;
}


/* Icon Size - Extra Large
-----------------------------------------------------------------*/

.i-xlarge.i-rounded,
.i-xlarge.i-plain,
.i-xlarge.i-circled,
.i-xlarge.i-bordered {
	margin: 4px 11px 7px 0;
	font-size: 56px;
}

.i-xlarge.i-rounded,
.i-xlarge.i-circled,
.i-xlarge.i-bordered {
	width: 84px !important;
	height: 84px !important;
	line-height: 84px !important;
}

.i-xlarge.i-bordered { line-height: 82px !important; }

.i-xlarge.i-plain {
	width: 64px !important;
	height: 64px !important;
	font-size: 56px;
	line-height: 64px !important;
}


/* ----------------------------------------------------------------
	Icon Overlay
-----------------------------------------------------------------*/

.i-overlay {
	display: block;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	text-align: center;
	background: rgba(0,0,0,0.2) url('images/grid.png') repeat;
}

.i-overlay img,
.i-overlay i {
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -24px 0 0 -24px;
	width: 48px !important;
	height: 48px !important;
	font-size: 48px;
	line-height: 1;
	color: #E5E5E5;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
}

.i-overlay i {
	margin: -18px 0 0 -18px;
	width: 36px;
	height: 36px;
	line-height: 36px;
	font-size: 24px;
}

.on-hover.i-overlay { opacity: 0; }

body:not(.device-touch) .on-hover.i-overlay {
	-webkit-transition: opacity 0.3s linear;
	-o-transition: opacity 0.3s linear;
	transition: opacity 0.3s linear;
}

.on-hover.i-overlay:hover { opacity: 1; }


/* ----------------------------------------------------------------
	Social Icons
-----------------------------------------------------------------*/


.social-icon {
	margin: 0 5px 5px 0;
	width: 40px;
	height: 40px;
	font-size: 20px;
	line-height: 38px !important;
	color: #555;
	text-shadow: none;
	border: 1px solid #AAA;
	border-radius: 3px;
	overflow: hidden;
}


/* Social Icons - Rounded
-----------------------------------------------------------------*/

.si-rounded { border-radius: 50%; }

/* Social Icons - Borderless
-----------------------------------------------------------------*/

.si-borderless { border-color: transparent !important; }

/* Social Icons - Dark
-----------------------------------------------------------------*/

.si-dark {
	background-color: #444;
	color: #FFF !important;
	border-color: transparent;
}

/* Social Icons - Light
-----------------------------------------------------------------*/

.si-light {
	background-color: rgba(0,0,0,0.05);
	color: #666 !important;
	border-color: transparent;
}

/* Social Icons - Colored
-----------------------------------------------------------------*/

.si-colored { border-color: transparent !important; }

.si-colored i { color: #FFF; }

/* Social Icons - Large
-----------------------------------------------------------------*/

.social-icon.si-large {
	margin: 0 10px 10px 0;
	width: 56px;
	height: 56px;
	font-size: 30px;
	line-height: 54px !important;
}

/* Social Icons - Small
-----------------------------------------------------------------*/

.social-icon.si-small {
	width: 32px;
	height: 32px;
	font-size: 14px;
	line-height: 30px !important;
}

.social-icon i {
	display: block;
	position: relative;
}

body:not(.device-touch) .social-icon i {
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.social-icon i:last-child { color: #FFF !important; }

.social-icon:hover i:first-child { margin-top: -38px; }

.social-icon.si-large:hover i:first-child { margin-top: -54px; }

.social-icon.si-small:hover i:first-child { margin-top: -30px; }

.social-icon:hover {
	color: #555;
	border-color: transparent;
}

.si-colored.social-icon { border-color: transparent; }

/* Social Icons - Sticky
-----------------------------------------------------------------*/

.si-sticky {
	position: fixed;
	top: 50%;
	left: 5px;
	width: 36px;
	z-index: 100;
}

/* Social Icons - Sticky Right
-----------------------------------------------------------------*/

.si-sticky.si-sticky-right {
	left: auto;
	right: 8px;
}

/* Social Icons - Share
-----------------------------------------------------------------*/

.si-share {
	position: relative;
	padding-left: 5px;
	border-top: 1px solid #EEE;
	border-bottom: 1px solid #EEE;
}

.si-share span {
	line-height: 36px;
	font-weight: bold;
	font-size: 13px;
}

.si-share div { float: right; }

.si-share .social-icon {
	margin: -1px 0;
	border-radius: 0;
	font-size: 15px;
}

.si-facebook:hover,
.si-colored.si-facebook { background-color: #3B5998 !important; }
.si-delicious:hover,
.si-colored.si-delicious { background-color: #205CC0 !important; }
.si-paypal:hover,
.si-colored.si-paypal { background-color: #00588B !important; }
.si-flattr:hover,
.si-colored.si-flattr { background-color: #F67C1A !important; }
.si-android:hover,
.si-colored.si-android { background-color: #A4C639 !important; }
.si-smashmag:hover,
.si-colored.si-smashmag { background-color: #E53B2C !important; }
.si-gplus:hover,
.si-colored.si-gplus { background-color: #DD4B39 !important; }
.si-wikipedia:hover,
.si-colored.si-wikipedia { background-color: #333 !important; }
.si-stumbleupon:hover,
.si-colored.si-stumbleupon { background-color: #F74425 !important; }
.si-foursquare:hover,
.si-colored.si-foursquare { background-color: #25A0CA !important; }
.si-call:hover,
.si-colored.si-call { background-color: #444 !important; }
.si-ninetyninedesigns:hover,
.si-colored.si-ninetyninedesigns { background-color: #F26739 !important; }
.si-forrst:hover,
.si-colored.si-forrst { background-color: #5B9A68 !important; }
.si-digg:hover,
.si-colored.si-digg { background-color: #191919 !important; }
.si-spotify:hover,
.si-colored.si-spotify { background-color: #81B71A !important; }
.si-reddit:hover,
.si-colored.si-reddit { background-color: #C6C6C6 !important; }
.si-blogger:hover,
.si-colored.si-blogger { background-color: #FC4F08 !important; }
.si-cc:hover,
.si-colored.si-cc { background-color: #688527 !important; }
.si-dribbble:hover,
.si-colored.si-dribbble { background-color: #EA4C89 !important; }
.si-evernote:hover,
.si-colored.si-evernote { background-color: #5BA525 !important; }
.si-flickr:hover,
.si-colored.si-flickr { background-color: #FF0084 !important; }
.si-google:hover,
.si-colored.si-google { background-color: #DD4B39 !important; }
.si-instapaper:hover,
.si-colored.si-instapaper { background-color: #333 !important; }
.si-klout:hover,
.si-colored.si-klout { background-color: #FF5F52 !important; }
.si-linkedin:hover,
.si-colored.si-linkedin { background-color: #0E76A8 !important; }
.si-vk:hover,
.si-colored.si-vk { background-color: #2B587A !important; }
.si-rss:hover,
.si-colored.si-rss { background-color: #EE802F !important; }
.si-skype:hover,
.si-colored.si-skype { background-color: #00AFF0 !important; }
.si-twitter:hover,
.si-colored.si-twitter { background-color: #00ACEE !important; }
.si-youtube:hover,
.si-colored.si-youtube { background-color: #C4302B !important; }
.si-vimeo:hover,
.si-colored.si-vimeo { background-color: #86C9EF !important; }
.si-aim:hover,
.si-colored.si-aim { background-color: #FCD20B !important; }
.si-yahoo:hover,
.si-colored.si-yahoo { background-color: #720E9E !important; }
.si-email3:hover,
.si-colored.si-email3 { background-color: #6567A5 !important; }
.si-macstore:hover,
.si-colored.si-macstore { background-color: #333333 !important; }
.si-myspace:hover,
.si-colored.si-myspace { background-color: #666666 !important; }
.si-podcast:hover,
.si-colored.si-podcast { background-color: #E4B21B !important; }
.si-cloudapp:hover,
.si-colored.si-cloudapp { background-color: #525557 !important; }
.si-dropbox:hover,
.si-colored.si-dropbox { background-color: #3D9AE8 !important; }
.si-ebay:hover,
.si-colored.si-ebay { background-color: #89C507 !important; }
.si-github:hover,
.si-colored.si-github { background-color: #171515 !important; }
.si-googleplay:hover,
.si-colored.si-googleplay { background-color: #DD4B39 !important; }
.si-itunes:hover,
.si-colored.si-itunes { background-color: #222 !important; }
.si-plurk:hover,
.si-colored.si-plurk { background-color: #CF5A00 !important; }
.si-pinboard:hover,
.si-colored.si-pinboard { background-color: #0000E6 !important; }
.si-soundcloud:hover,
.si-colored.si-soundcloud { background-color: #FF7700 !important; }
.si-tumblr:hover,
.si-colored.si-tumblr { background-color: #34526F !important; }
.si-wordpress:hover,
.si-colored.si-wordpress { background-color: #1E8CBE !important; }
.si-yelp:hover,
.si-colored.si-yelp { background-color: #C41200 !important; }
.si-intensedebate:hover,
.si-colored.si-intensedebate { background-color: #009EE4 !important; }
.si-eventbrite:hover,
.si-colored.si-eventbrite { background-color: #F16924 !important; }
.si-scribd:hover,
.si-colored.si-scribd { background-color: #666666 !important; }
.si-stripe:hover,
.si-colored.si-stripe { background-color: #008CDD !important; }
.si-print:hover,
.si-colored.si-print { background-color: #111 !important; }
.si-dwolla:hover,
.si-colored.si-dwolla { background-color: #FF5C03 !important; }
.si-statusnet:hover,
.si-colored.si-statusnet { background-color: #131A30 !important; }
.si-acrobat:hover,
.si-colored.si-acrobat { background-color: #D3222A !important; }
.si-drupal:hover,
.si-colored.si-drupal { background-color: #27537A !important; }
.si-buffer:hover,
.si-colored.si-buffer { background-color: #333333 !important; }
.si-pocket:hover,
.si-colored.si-pocket { background-color: #EE4056 !important; }
.si-bitbucket:hover,
.si-colored.si-bitbucket { background-color: #0E4984 !important; }
.si-stackoverflow:hover,
.si-colored.si-stackoverflow { background-color: #EF8236 !important; }
.si-hackernews:hover,
.si-colored.si-hackernews { background-color: #FF6600 !important; }
.si-xing:hover,
.si-colored.si-xing { background-color: #126567 !important; }
.si-instagram:hover,
.si-colored.si-instagram { background-color: #3F729B !important; }
.si-quora:hover,
.si-colored.si-quora { background-color: #A82400 !important; }
.si-openid:hover,
.si-colored.si-openid { background-color: #E16309 !important; }
.si-steam:hover,
.si-colored.si-steam { background-color: #111 !important; }
.si-amazon:hover,
.si-colored.si-amazon { background-color: #E47911 !important; }
.si-disqus:hover,
.si-colored.si-disqus { background-color: #E4E7EE !important; }
.si-plancast:hover,
.si-colored.si-plancast { background-color: #222 !important; }
.si-appstore:hover,
.si-colored.si-appstore { background-color: #000 !important; }
.si-pinterest:hover,
.si-colored.si-pinterest { background-color: #C8232C !important; }
.si-fivehundredpx:hover,
.si-colored.si-fivehundredpx { background-color: #111 !important; }


/* ----------------------------------------------------------------
	Toggle
-----------------------------------------------------------------*/


.toggle {
	display: block;
	position: relative;
	margin: 0 0 20px 0;
}

.toggle .togglet,
.toggle .toggleta {
	display: block;
	position: relative;
	line-height: 24px;
	padding: 0 0 0 24px;
	margin: 0;
	font-size: 16px;
	font-weight: 600;
	color: #444;
	cursor: pointer;
}

.toggle .togglet i {
	position: absolute;
	top: 0;
	left: 0;
	width: 16px;
	text-align: center;
	font-size: 16px;
	line-height: 24px;
}

.toggle .toggleta { font-weight: bold; }

.toggle .togglet i.toggle-open,
.toggle .toggleta i.toggle-closed { display: none; }

.toggle .toggleta i.toggle-open { display: block; }

.toggle .togglec {
	display: block;
	position: relative;
	padding: 10px 0 0 24px;
}


/* Toggle - with Title Background
-----------------------------------------------------------------*/

.toggle.toggle-bg .togglet,
.toggle.toggle-bg .toggleta {
	background-color: #EEE;
	line-height: 44px;
	padding: 0 0 0 36px;
	border-radius: 2px;
}

.toggle.toggle-bg .togglet i {
	left: 14px;
	line-height: 44px;
}

.toggle.toggle-bg .togglec { padding: 12px 0 0 36px; }


/* Toggle - Bordered
-----------------------------------------------------------------*/

.toggle.toggle-border {
	border: 1px solid #CCC;
	border-radius: 4px;
}

.toggle.toggle-border .togglet,
.toggle.toggle-border .toggleta {
	line-height: 44px;
	padding: 0 15px 0 36px;
}

.toggle.toggle-border .togglet i {
	left: 14px;
	line-height: 44px;
}

.toggle.toggle-border .togglec { padding: 0 15px 15px 36px; }


/* Toggle - FAQs
-----------------------------------------------------------------*/

.faqs .toggle {
	border-bottom: 1px solid #EEE;
	padding-bottom: 12px;
	margin-bottom: 12px;
}

.faqs .toggle .togglet,
.faqs .toggle .toggleta { font-size: 15px; }

.faqs .toggle .togglet i {
	top: 1px;
	font-size: 14px;
}

.faqs .toggle .togglec { padding-bottom: 10px; }


/* ----------------------------------------------------------------
	Accordions
-----------------------------------------------------------------*/

.accordion { margin-bottom: 20px; }

.acctitle {
	display: block;
	position: relative;
	line-height: 24px;
	margin: 0;
	font-size: 14px;
	font-weight: bold;
	color: #444;
	cursor: pointer;
	border-top: 1px dotted #DDD;
	padding: 10px 0 10px 20px;
}

.acctitlec { cursor: auto; }

.acctitle:first-child { border-top: none; }

.acctitle i {
	position: absolute;
	top: 0;
	left: 0;
	width: 14px;
	text-align: center;
	font-size: 14px;
	line-height: 44px;
}

.acctitle i.acc-open,
.acctitlec i.acc-closed { display: none; }

.acctitlec i.acc-open { display: block; }

.acc_content {
	position: relative;
	padding: 0 0 15px 20px;
}


/* Accordion - with Title Background
-----------------------------------------------------------------*/

.accordion.accordion-bg .acctitle,
.accordion.accordion-bg .acctitlec {
	background-color: #EEE;
	line-height: 44px;
	padding: 0 0 0 36px;
	margin-bottom: 5px;
	border-top: 0;
}

.accordion.accordion-bg .acctitle i {
	left: 14px;
	line-height: 44px;
}

.accordion.accordion-bg .acc_content { padding: 10px 0 15px 36px; }


/* Accordion - Bordered
-----------------------------------------------------------------*/

.accordion.accordion-border {
	border: 1px solid #DDD;
	border-radius: 4px;
}

.accordion.accordion-border .acctitle,
.accordion.accordion-border .acctitlec {
	border-color: #CCC;
	line-height: 44px;
	padding: 0 15px 0 36px;
}

.accordion.accordion-border .acctitle i {
	left: 14px;
	line-height: 44px;
}

.accordion.accordion-border .acc_content { padding: 0 15px 15px 36px; }


/* Accordion - Large
-----------------------------------------------------------------*/

.accordion.accordion-lg .acctitle {
	font-size: 23px;
	line-height: 44px;
	padding-left: 30px;
	font-weight: 400;
}

.accordion.accordion-lg .acctitle i {
	width: 20px;
	font-size: 20px;
	line-height: 64px;
}

.accordion.accordion-lg .acc_content { padding: 10px 0 30px 30px; }


/* ----------------------------------------------------------------
	Tabs
-----------------------------------------------------------------*/


.tabs {
	position: relative;
	margin: 0 0 30px 0;
}

ul.tab-nav {
	margin: 0;
	border-bottom: 1px solid #DDD;
	list-style: none;
}

ul.tab-nav li {
	float: left;
	border: 1px solid #DDD;
	border-bottom: 0;
	border-left: 0;
	height: 41px;
}

ul.tab-nav li:first-child {
	margin-left: 15px;
	border-left: 1px solid #DDD;
}

ul.tab-nav li a {
	display: block;
	padding: 0 15px;
	color: #444;
	height: 40px;
	line-height: 40px;
	background-color: #F2F2F2;
	font-size: 14px;
	font-weight: bold;
}

ul.tab-nav li.ui-tabs-active a {
	position: relative;
	top: 1px;
	background-color: #FFF;
}


/* Tabs - Navigation Style 2
-----------------------------------------------------------------*/


ul.tab-nav.tab-nav2 {
	border-bottom: 0;
}

ul.tab-nav.tab-nav2 li {
	border: 0;
	margin-left: 10px;
}

ul.tab-nav.tab-nav2 li:first-child {
	margin-left: 0;
	border-left: 0;
}

ul.tab-nav.tab-nav2 li a {
	background-color: #F5F5F5;
	border-radius: 2px;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

ul.tab-nav.tab-nav2 li.ui-state-active a {
	top: 0;
	background-color: #1ABC9C;
	color: #FFF;
}


/* Tabs - Content Area
-----------------------------------------------------------------*/

.tab-container {
	position: relative;
	padding: 20px 0 0;
}

ul.tab-nav li a i {
	position: relative;
	top: 1px;
	font-size: 14px;
	margin-right: 3px;
}

/* Tabs - Bordered
-----------------------------------------------------------------*/

.tabs-bordered ul.tab-nav li:first-child { margin-left: 0; }

.tabs-bordered .tab-container {
	border: 1px solid #DDD;
	border-top: 0;
	padding: 20px;
}


/* Tabs - Side Tabs
-----------------------------------------------------------------*/

.side-tabs ul.tab-nav {
	float: left;
	width: 200px;
	padding: 20px 0;
	border-bottom: 0;
	border-right: 1px solid #DDD;
}

.side-tabs ul.tab-nav li {
	float: none;
	border: 1px solid #DDD;
	border-right: 0;
	border-top: 0;
	height: auto;
}

.side-tabs ul.tab-nav li:first-child {
	margin-left: 0;
	border-top: 1px solid #DDD;
	border-left: 1px solid #DDD;
}

.side-tabs ul.tab-nav li a {
	height: auto;
	line-height: 44px;
}

.side-tabs ul.tab-nav li.ui-tabs-active a {
	top: 0;
	right: -1px;
}

.side-tabs .tab-container {
	overflow: hidden;
	padding: 15px 0 0 20px;
}


/* Tabs - Side Tabs & Nav Style 2
-----------------------------------------------------------------*/

.side-tabs ul.tab-nav.tab-nav2 { border: 0; }

.side-tabs ul.tab-nav.tab-nav2 li {
	border: 0;
	margin: 6px 0 0;
}

.side-tabs ul.tab-nav.tab-nav2 li:first-child { margin-top: 0; }

.side-tabs ul.tab-nav.tab-nav2 li a { box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); }

.side-tabs ul.tab-nav.tab-nav2 li.ui-state-active a { right: 0; }


/* Tabs - Side Tabs & Bordered
-----------------------------------------------------------------*/

.tabs-bordered.side-tabs ul.tab-nav {
	position: relative;
	padding: 0;
	z-index: 2;
	margin-right: -1px;
}

.tabs-bordered.side-tabs ul.tab-nav li a {
	height: auto;
	line-height: 44px;
}

.tabs-bordered.side-tabs ul.tab-nav li.ui-tabs-active a {
	right: -1px;
	border-right: 1px solid #FFF;
}

.tabs-bordered.side-tabs .tab-container {
	overflow: hidden;
	padding: 20px;
	border-top: 1px solid #DDD;
}


/* ----------------------------------------------------------------
	Side Navigation
-----------------------------------------------------------------*/


.sidenav {
	width: 100%;
	padding: 0;
	background-color: #FFF;
	list-style-type: none !important;
	border-radius: 4px;
}

.sidenav > li > a {
	display: block;
	margin: 0 0 -1px;
	padding: 11px 14px;
	font-size: 14px;
	border: 1px solid #E5E5E5;
	border-right-width: 2px;
	color: #666;
}

.sidenav > li:first-child > a { border-radius: 4px 4px 0 0; }

.sidenav > li:last-child > a {
	border-radius: 0 0 4px 4px;
	border-bottom-width: 2px;
}

.sidenav > .ui-tabs-active > a,
.sidenav > .ui-tabs-active > a:hover {
	position: relative;
	z-index: 2;
	border-color: rgba(0,0,0,0.1) !important;
	color: #FFF !important;
	font-weight: 600;
	background-color: #1ABC9C !important;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.sidenav li i {
	position: relative;
	top: 1px;
	margin-right: 6px;
	font-size: 14px;
	text-align: center;
	width: 16px;
}

/* Chevrons */
.sidenav .icon-chevron-right {
	float: right;
	margin-top: 2px;
	margin-right: -6px;
	opacity: .4;
	font-size: 12px !important;
}

.sidenav > li > a:hover {
	background-color: #F5F5F5;
	color: #222;
}

.sidenav a:hover .icon-chevron-right { opacity: .5; }

.sidenav .ui-tabs-active .icon-chevron-right,
.sidenav .ui-tabs-active a:hover .icon-chevron-right { opacity: 1; }


/* ----------------------------------------------------------------
	FAQ List
-----------------------------------------------------------------*/


.faqlist li {
	margin-bottom: 5px;
	font-size: 15px;
}

.faqlist li a { color: #444; }

.faqlist li a:hover { color: #1ABC9C !important; }


/* ----------------------------------------------------------------
	Clients
-----------------------------------------------------------------*/


.clients-grid,
.testimonials-grid {
	list-style: none;
	overflow: hidden;
}

.clients-grid li,
.testimonials-grid li {
	float: left;
	position: relative;
	width: 20%;
	padding: 20px 0;
}

.clients-grid.grid-2 li {
	width: 50%;
	padding: 25px 0;
}

.clients-grid.grid-3 li { width: 33.33%; }

.clients-grid.grid-4 li { width: 25%; }

.clients-grid.grid-6 li { width: 16.66%; }

.clients-grid li a { opacity: 0.6; }

body:not(.device-touch) .clients-grid li a {
	-webkit-transition: all .5s ease;
	-o-transition: all .5s ease;
	transition: all .5s ease;
}

.clients-grid li a:hover { opacity: 1; }

.clients-grid li a,
.clients-grid li img {
	display: block;
	width: 75%;
	margin-left: auto;
	margin-right: auto;
}

.clients-grid li a img { width: 100%; }

.clients-grid li:before,
.clients-grid li:after,
.testimonials-grid li:before,
.testimonials-grid li:after {
	content: '';
	position: absolute;
}

.clients-grid li:before,
.testimonials-grid li:before {
	height: 100%;
	top: 0;
	left: -1px;
	border-left: 1px dashed #DDD;
}

.clients-grid li:after,
.testimonials-grid li:after {
	width: 100%;
	height: 0;
	top: auto;
	left: 0;
	bottom: -1px;
	border-bottom: 1px dashed #DDD;
}


/* ----------------------------------------------------------------
	Testimonials
-----------------------------------------------------------------*/

/* Testimonials - Grid
-----------------------------------------------------------------*/

.testimonials-grid li {
	width: 50%;
	padding: 25px;
}

.testimonials-grid.grid-3 li { width: 33.33%; }

.testimonials-grid li .testimonial {
	padding: 0;
	background-color: transparent !important;
	border: 0 !important;
	box-shadow: none !important;
}


/* Testimonials - Item
-----------------------------------------------------------------*/

.testimonial {
	position: relative;
	padding: 20px;
	background-color: #FFF;
	border: 1px solid rgba(0,0,0,0.1);
	border-radius: 5px;
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.testi-image {
	float: left;
	margin-right: 15px;
}

.testi-image,
.testi-image a,
.testi-image img,
.testi-image i {
	display: block;
	width: 64px;
	height: 64px;
}

.testi-image i {
	text-align: center;
	background-color: #EEE;
	border-radius: 50%;
	line-height: 64px;
	font-size: 28px;
	color: #888;
	text-shadow: 1px 1px 1px #FFF;
}

.testi-image img { border-radius: 50%; }

.testi-content {
	position: relative;
	overflow: hidden;
}

.testi-content p {
	margin-bottom: 0;
	font-family: 'Crete Round', serif;
	font-style: italic;
}

.testi-content p:before,
.testi-content p:after { content: '"'; }

.testi-meta {
	margin-top: 10px;
	font-size: 13px;
	font-weight: bold;
	text-transform: uppercase;
}

.testi-meta:before { content: '\2013'; }

.testi-meta span {
	display: block;
	font-weight: normal;
	color: #999;
	font-size: 12px;
	text-transform: none;
	padding-left: 10px;
}


/* Twitter - Small Scroller
-----------------------------------------------------------------*/

.testimonial.twitter-scroll .testi-content p:before,
.testimonial.twitter-scroll .testi-content p:after,
.testimonial.twitter-scroll .testi-meta:before { content: ''; }

.testimonial.twitter-scroll .testi-meta span { padding-left: 0; }

.testimonial.twitter-scroll .testi-meta span a { color: #999; }

.testimonial.twitter-scroll .testi-meta span a:hover { color: #222; }


/* Testimonials - Full Width
-----------------------------------------------------------------*/

.testimonial.testimonial-full { padding: 30px; }

.testimonial.testimonial-full[data-animation="fade"] { padding: 30px; }

.testimonial.testimonial-full[data-animation="fade"] .flexslider { overflow: visible !important; }

.testimonial-full .testi-image {
	float: none;
	margin: 0 auto 20px;
}

.testimonial-full .testi-image,
.testimonial-full .testi-image a,
.testimonial-full .testi-image img,
.testimonial-full .testi-image i {
	display: block;
	width: 72px;
	height: 72px;
}

.testimonial-full .testi-image i { line-height: 72px; }

.testimonial-full .testi-content {
	text-align: center;
	font-size: 18px;
}

.testimonial-full .testi-meta { margin-top: 15px; }

.testimonial-full .testi-meta span { padding-left: 0; }


/* Testimonial - Section Scroller
-----------------------------------------------------------------*/

.section > .testimonial {
	padding: 0;
	background-color: transparent !important;
	border: 0 !important;
	box-shadow: none !important;
	max-width: 800px;
	margin: 0 auto;
}

.section > .testimonial[data-animation="fade"] { padding: 0; }

.section > .testimonial .testi-content { font-size: 22px; }

.section > .testimonial .testi-meta,
.section > .testimonial .testi-meta span { font-size: 14px; }


/* Testimonial - Pagination
-----------------------------------------------------------------*/

.testimonial .flex-control-nav {
	top: auto;
	bottom: 6px;
	right: 0;
}

.testimonial .flex-control-nav li {
	margin: 0 2px;
	width: 6px;
	height: 6px;
}

.testimonial .flex-control-nav li a {
	width: 6px !important;
	height: 6px !important;
	border: none;
	background-color: #1ABC9C;
	opacity: 0.5;
}

.testimonial .flex-control-nav li:hover a { opacity: 0.75; }
.testimonial .flex-control-nav li a.flex-active { opacity: 1; }


/* Testimonial - Full Scroller
-----------------------------------------------------------------*/

.testimonial.testimonial-full .flex-control-nav {
	position: relative;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	height: 6px;
	margin-top: 20px;
}

.testimonial.testimonial-full .flex-control-nav li {
	display: inline-block;
	float: none;
}


/* ----------------------------------------------------------------
	Team
-----------------------------------------------------------------*/


.team,
.team-image { position: relative; }

.team-image > a,
.team-image img {
	display: block;
	width: 100%;
}

.team-desc { text-align: center; }

.team-desc.team-desc-bg {
	background-color: #FFF;
	padding: 10px 0 30px;
}

.team .si-share {
	margin-top: 30px;
	text-align: left;
}

.team .si-share .social-icon {
	font-size: 14px;
	width: 34px;
}

.team-title {
	position: relative;
	padding-top: 20px;
}

.team-title h4 {
	display: block;
	margin-bottom: 0;
	font-size: 19px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 700;
}

.team-title span {
	display: block;
	color: #1ABC9C;
	font-weight: 400;
	font-family: 'Crete Round', serif;
	font-style: italic;
	font-size: 15px;
	margin-top: 5px;
}

.team-content {
	margin-top: 15px;
	color: #777;
}

.team-content p:last-child { margin-bottom: 0; }

.team-overlay,
.team-overlay:before {
	opacity: 0;
	position: absolute;
	z-index: 2;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	text-align: center;
}

body:not(.device-touch) .team-overlay {
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}

.team-overlay:before {
	content: '';
	z-index: auto;
	background-color: #FFF;
	opacity: 0.75;
}

.team-overlay .social-icon {
	float: none;
	position: relative;
	z-index: 3;
	margin: 0 3px !important;
	display: inline-block;
}

.team:hover .team-overlay { opacity: 1; }


/* Team Center
-----------------------------------------------------------------*/

.team.center .team-title:after {
	left: 50%;
	margin-left: -40px;
}


/* Team List
-----------------------------------------------------------------*/

.team.team-list .team-image {
	float: left;
	width: 250px;
	margin-right: 30px;
}

.team.team-list .team-desc {
	position: relative;
	overflow: hidden;
	text-align: left;
}

.team.team-list .team-title { padding-top: 0; }

.team .team-desc > .social-icon { margin-top: 20px; }

.team .team-content ~ .social-icon { margin-top: 30px; }

.team:not(.team-list) .social-icon {
	display: inline-block;
	float: none;
	margin-left: 6px;
	margin-right: 6px;
}


/* ----------------------------------------------------------------
	Pricing Boxes
-----------------------------------------------------------------*/

.pricing { position: relative; }

.pricing [class^=col-] {
	padding: 0;
	margin-top: 20px;
}


/* Pricing Boxes
-----------------------------------------------------------------*/

.pricing-box {
	position: relative;
	border: 1px solid rgba(0,0,0,0.075);
	border-radius: 3px;
	text-align: center;
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	background-color: #F5F5F5;
}


/* Pricing Boxes - Title
-----------------------------------------------------------------*/

.pricing-title {
	padding: 15px 0;
	background-color: #F9F9F9;
	border-radius: 3px 3px 0 0;
	text-shadow: 1px 1px 1px #FFF;
	border-bottom: 1px solid rgba(0,0,0,0.05);
}

.pricing-title h3 {
	margin: 0;
	font-size: 20px;
	letter-spacing: 1px;
	font-weight: bold;
	text-transform: uppercase;
	color: #555;
}

.pricing-title span {
	display: block;
	color: #999;
	font-weight: 300;
	font-size: 14px;
	margin-top: 3px;
	text-transform: uppercase;
}


/* Pricing Boxes - Price
-----------------------------------------------------------------*/

.pricing-price {
	position: relative;
	padding: 25px 0;
	color: #333;
	font-weight: 300;
	font-size: 64px;
	line-height: 1;
}

.pricing-price:after {
	content: '';
	position: absolute;
	width: 100px;
	border-top: 1px solid rgba(0,0,0,0.1);
	top: auto;
	bottom: 0;
	left: 50%;
	margin-left: -50px;
}

.pricing-price span {
	display: inline-block;
	vertical-align: top;
	margin: 7px 3px 0 0;
	font-size: 28px;
	font-weight: normal;
}

.pricing-price span.price-tenure {
	vertical-align: baseline;
	font-size: 16px;
	font-weight: normal;
	color: #999;
	margin: 0 0 0 3px;
}


/* Pricing Boxes - Features
-----------------------------------------------------------------*/

.pricing-features { border-bottom: 1px solid rgba(0,0,0,0.075); }

.pricing-features ul {
	margin: 0;
	padding: 15px 0;
	list-style: none;
}

.pricing-features li {
	padding: 6px 0;
	font-size: 14px;
}


/* Pricing Boxes - Action
-----------------------------------------------------------------*/

.pricing-action { padding: 15px 30px; }


/* Pricing Boxes - Best Price
-----------------------------------------------------------------*/

.pricing-box.best-price {
	background-color: #FFF;
	box-shadow: 0 0 8px rgba(0,0,0,0.1);
	z-index: 10;
}

.pricing-box.best-price { margin: -20px -1px 0 -1px; }

.pricing-box.best-price .pricing-title {
	background-color: #FFF;
	padding: 20px 0;
}

.pricing-box.best-price .pricing-title h3 { font-size: 22px; }

.pricing-box.best-price .pricing-price {
	color: #1ABC9C;
	font-size: 72px;
}


/* Pricing Boxes - Minimal
-----------------------------------------------------------------*/

.pricing-box.pricing-minimal .pricing-price {
	background-color: #FFF;
	border-bottom: 1px solid rgba(0,0,0,0.075);
}

.pricing-box.pricing-minimal .pricing-price:after { display: none; }


/* Pricing Boxes - 5 Columns
-----------------------------------------------------------------*/

.pricing.pricing-5 .pricing-box {
	float: left;
	width: 20%;
	margin-top: 20px;
}

.pricing.pricing-5 .pricing-box.best-price { margin-top: 0; }

.pricing.pricing-5 .pricing-box:nth-child(5) { margin-left: -1px; }

.pricing.pricing-5 .pricing-title h3 { font-size: 18px; }

.pricing.pricing-5 .best-price .pricing-title h3 { font-size: 20px; }


/* Pricing Boxes - Extended
-----------------------------------------------------------------*/

.pricing-box.pricing-extended {
	background-color: #FFF;
	text-align: left;
}

.pricing-box.pricing-extended .pricing-desc {
	float: left;
	width: 75%;
	padding: 25px;
}

.pricing-box.pricing-extended .pricing-title {
	background-color: transparent;
	padding-top: 0;
	text-align: left;
}

.pricing-box.pricing-extended .pricing-features { border: 0; }

.pricing-box.pricing-extended .pricing-features ul { padding: 15px 0 0 0; }

.pricing-box.pricing-extended .pricing-features li {
	padding: 6px 0;
	font-size: 15px;
	width: 50%;
	float: left;
}

.pricing-box.pricing-extended .pricing-features ul li i {
	position: relative;
	top: 1px;
	width: 16px;
	margin-right: 2px;
}

.pricing-box.pricing-extended .pricing-action-area {
	position: absolute;
	top: 0;
	left: auto;
	right: 0;
	width: 25%;
	height: 100%;
	border-left: 1px solid rgba(0,0,0,0.05);
	background-color: #F9F9F9;
	padding: 30px;
	border-radius: 0 3px 3px 0;
	text-align: center;
}

.pricing-box.pricing-extended .pricing-action-area .pricing-price,
.pricing-box.pricing-extended .pricing-action-area .pricing-action { padding: 0; }

.pricing-box.pricing-extended .pricing-action-area .pricing-price { padding-bottom: 20px; }

.pricing-box.pricing-extended .pricing-action-area .pricing-price:after { display: none; }

.pricing-box.pricing-extended .pricing-action-area .pricing-price span.price-tenure {
	display: block;
	margin: 10px 0 0 0;
	font-weight: 300;
	text-transform: uppercase;
	font-size: 14px;
}

.pricing-box.pricing-extended .pricing-meta {
	color: #999;
	font-weight: 300;
	font-size: 14px;
	letter-spacing: 1px;
	text-transform: uppercase;
	padding-bottom: 10px;
}

.table-comparison,
.table-comparison th { text-align: center; }

.table-comparison th:first-child,
.table-comparison td:first-child {
	text-align: left;
	font-weight: bold;
}


/* ----------------------------------------------------------------
	Counter
-----------------------------------------------------------------*/


.counter {
	font-size: 42px;
	font-weight: 600;
	font-family: 'Raleway', sans-serif;
}

.counter.counter-small { font-size: 28px; }

.counter.counter-large { font-size: 56px; }

.counter.counter-xlarge {
	font-size: 64px;
	font-weight: 400;
}

.counter.counter-inherit {
	font-size: inherit;
	font-weight: inherit;
}

.counter + h5 {
	font-weight: 400;
	text-transform: uppercase;
	letter-spacing: 1px;
	margin-top: 10px;
}

.counter.counter-lined + h5:before {
	display: block;
	position: relative;
	margin: 20px auto 25px auto;
	content: '';
	width: 15%;
	border-top: 2px solid #444;
	opacity: 0.9;
}

.counter.counter-small + h5 { font-size: 13px; }

.counter.counter-large + h5,
.counter.counter-xlarge + h5 {
	font-size: 15px;
	font-weight: 300;
}

.widget .counter + h5 { opacity: 0.7; }


/* ----------------------------------------------------------------
	Animated Rounded Skills
-----------------------------------------------------------------*/


.rounded-skill {
	display: inline-block;
	margin: 0 15px 15px;
}

body:not(.device-touch) .rounded-skill {
	-webkit-transition: opacity .4s ease;
	-o-transition: opacity .4s ease;
	transition: opacity .4s ease;
}

.rounded-skill + h5 { margin-bottom: 0; }

.easyPieChart {
	display: inline-block;
	position: relative;
	text-align: center;
	font-size: 22px;
	font-weight: bold;
	color: #333;
}

.easyPieChart i { font-size: 42px; }

.easyPieChart canvas {
	position: absolute;
	top: 0;
	left: 0;
}


/* ----------------------------------------------------------------
	Skills Bar
-----------------------------------------------------------------*/


.skills {
	margin: 0;
	list-style: none;
	padding-top: 25px;
}

.skills li {
	position: relative;
	margin-top: 38px;
	height: 4px;
	background-color: #F5F5F5;
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	border-radius: 2px;
}

.skills li:first-child { margin-top: 0; }

.skills li .progress {
	position: absolute;
	top: 0;
	left: 0;
	width: 0;
	height: 100%;
	background-color: #1ABC9C;
	overflow: visible !important;
	border-radius: 2px;
	-webkit-transition: width 1.2s ease-in-out;
	-o-transition: width 1.2s ease-in-out;
	transition: width 1.2s ease-in-out;
}

.skills li .progress-percent {
	position: absolute;
	top: -28px;
	right: 0;
	background-color: #333;
	color: #F9F9F9;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	height: 22px;
	line-height: 22px;
	padding: 0px 5px;
	font-size: 11px;
	border-radius: 2px;
}

.skills li .progress-percent .counter {
	font-weight: 400;
	font-family: 'Lato', sans-serif;
}

.progress-percent:after, .progress-percent:before {
	top: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.progress-percent:after {
	border-top-color: #333;
	border-width: 4px;
	left: 50%;
	margin-left: -4px;
}

.progress-percent:before {
	border-top-color: #333;
	border-width: 5px;
	left: 50%;
	margin-left: -5px;
}

.skills li > span {
	position: absolute;
	z-index: 1;
	top: -23px;
	left: 0;
	line-height: 20px;
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;
	color: #222;
}


/* ----------------------------------------------------------------
	Owl Carousel CSS
-----------------------------------------------------------------*/

.owl-carousel .animated {
	-webkit-animation-duration: 1000ms;
	animation-duration: 1000ms;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.owl-carousel .owl-animated-in { z-index: 0; }

.owl-carousel .owl-animated-out { z-index: 1; }

.owl-carousel .fadeOut  {
	-webkit-animation-name: fadeOut;
	animation-name: fadeOut;
}

@-webkit-keyframes fadeOut {
	0% { opacity: 1; }
	100% { opacity: 0; }
}

@keyframes fadeOut {
	0% { opacity: 1; }
	100% { opacity: 0; }
}

.owl-height {
	-webkit-transition:height 500ms ease-in-out;
	-o-transition:height 500ms ease-in-out;
	transition:height 500ms ease-in-out
}

.owl-carousel {
	display:none;
	-webkit-tap-highlight-color:transparent;
	position:relative;
	z-index:1;
	-webkit-backface-visibility: hidden;
}

.owl-carousel .owl-stage {
	position:relative;
	-ms-touch-action:pan-Y
}

.owl-carousel .owl-stage:after {
	content:".";
	display:block;
	clear:both;
	visibility:hidden;
	line-height:0;
	height:0
}

.owl-carousel .owl-stage-outer {
	position:relative;
	overflow:hidden;
	-webkit-transform:translate3d(0px,0,0);
	cursor:move;
	cursor:-webkit-grab;
	cursor:-o-grab;
	cursor:-ms-grab;
	cursor:grab
}

.owl-carousel .owl-controls .owl-dot,
.owl-carousel .owl-controls .owl-nav .owl-next,
.owl-carousel .owl-controls .owl-nav .owl-prev {
	cursor:pointer;
	cursor:hand;
	-webkit-user-select:none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none
}

.owl-carousel.owl-loaded { display:block }

.owl-carousel.owl-loading {
	display:block;
	min-height: 100px;
	background: url('images/preloader.gif') no-repeat center center
}

.owl-carousel.owl-hidden { opacity:0 }

.owl-carousel .owl-refresh .owl-item { display:none }

.owl-carousel .owl-item {
	position:relative;
	min-height:1px;
	float:left;
	-webkit-backface-visibility:hidden;
	-webkit-tap-highlight-color:transparent;
	-webkit-touch-callout:none;
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none
}

.owl-carousel .owl-item img {
	display:block;
	width:100%;
	-webkit-transform-style:preserve-3d;
}

#slider .owl-carousel .owl-item img { -webkit-backface-visibility: hidden; }

.owl-carousel.owl-text-select-on .owl-item {
	-webkit-user-select:auto;
	-moz-user-select:auto;
	-ms-user-select:auto;
	user-select:auto
}

.owl-carousel .owl-grab {
	cursor:move;
	cursor:-webkit-grab;
	cursor:-o-grab;
	cursor:-ms-grab;
	cursor:grab
}

.owl-carousel.owl-rtl { direction:rtl }

.owl-carousel.owl-rtl .owl-item { float:right }

.no-js .owl-carousel { display:block }

.owl-carousel .owl-item .owl-lazy {
	opacity:0;
	-webkit-transition:opacity 400ms ease;
	-o-transition:opacity 400ms ease;
	transition:opacity 400ms ease
}

.owl-carousel .owl-item img { transform-style:preserve-3d }

.owl-carousel .owl-video-wrapper {
	position:relative;
	height:100%;
	background:#111
}

.owl-carousel .owl-video-play-icon {
	position: absolute;
	height: 64px;
	width: 64px;
	left: 50%;
	top: 50%;
	margin-left: -32px;
	margin-top: -32px;
	background: url("images/icons/play.png") no-repeat;
	cursor: pointer;
	z-index: 1;
	-webkit-backface-visibility: hidden;
	-webkit-transition: scale 100ms ease;
	-o-transition: scale 100ms ease;
	transition: scale 100ms ease;
}

.owl-carousel .owl-video-play-icon:hover {
	-webkit-transition:scale(1.3,1.3);
	-o-transition:scale(1.3,1.3);
	transition:scale(1.3,1.3)
}

.owl-carousel .owl-video-playing .owl-video-play-icon,
.owl-carousel .owl-video-playing .owl-video-tn { display:none }

.owl-carousel .owl-video-tn {
	opacity:0;
	height:100%;
	background-position:center center;
	background-repeat:no-repeat;
	-webkit-background-size:contain;
	-moz-background-size:contain;
	-o-background-size:contain;
	background-size:contain;
	-webkit-transition:opacity 400ms ease;
	-o-transition:opacity 400ms ease;
	transition:opacity 400ms ease
}

.owl-carousel .owl-video-frame {
	position:relative;
	z-index:1
}


/* Owl Carousel - Controls
-----------------------------------------------------------------*/

.owl-theme .owl-controls {
	text-align: center;
	-webkit-tap-highlight-color: transparent;
}

/* Owl Carousel - Controls - Arrows
-----------------------------------------------------------------*/

.owl-theme .owl-controls .owl-nav [class*=owl-] {
	position: absolute;
	top: 50%;
	margin-top: -18px;
	left: -36px;
	zoom: 1;
	width: 36px;
	height: 36px;
	line-height: 32px;
	border: 1px solid rgba(0,0,0,0.2);
	color: #666;
	background-color: #FFF;
	font-size: 18px;
	border-radius: 50%;
	opacity: 0;
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.owl-theme .owl-controls.with-carousel-dots .owl-nav [class*=owl-] { margin-top: -39px; }

.owl-carousel-full .owl-controls .owl-nav [class*=owl-] {
	margin-top: -30px;
	left: 0 !important;
	height: 60px;
	line-height: 60px;
	border: none;
	color: #EEE;
	background-color: rgba(0,0,0,0.4);
	font-size: 28px;
	border-radius: 0 3px 3px 0;
}

.owl-carousel-full .owl-controls.with-carousel-dots .owl-nav [class*=owl-] { margin-top: -46px; }

.owl-theme .owl-controls .owl-nav .owl-next {
	left: auto;
	right: -36px;
}

.owl-carousel-full .owl-controls .owl-nav .owl-next {
	left: auto !important;
	right: 0 !important;
	border-radius: 3px 0 0 3px;
}

.owl-theme:hover .owl-controls .owl-nav [class*=owl-] {
	opacity: 1;
	left: -18px;
}

.owl-theme:hover .owl-controls .owl-nav .owl-next {
	left: auto;
	right: -18px;
}

.owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
	background-color: #1ABC9C !important;
	color: #FFF !important;
	text-decoration: none;
}

.owl-theme .owl-controls .owl-nav .disabled { display: none !important; }


/* Owl Carousel - Controls - Dots
-----------------------------------------------------------------*/

.owl-theme .owl-dots .owl-dot {
	display: inline-block;
	zoom: 1;
	margin-top: 30px;
	*display: inline;
}

.owl-theme .owl-dots .owl-dot span {
	display: block;
	width: 8px;
	height: 8px;
	margin: 0 4px;
	opacity: 0.5;
	border-radius: 50%;
	background-color: #1ABC9C;
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span { opacity: 1; }


/* ----------------------------------------------------------------
	Overlays
-----------------------------------------------------------------*/


.overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.overlay .overlay-wrap,
.text-overlay {
	opacity: 0;
	position: relative;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.6);
}

body:not(.device-touch) .overlay .overlay-wrap,
body:not(.device-touch) .text-overlay {
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.overlay .overlay-wrap i {
	position: absolute;
	opacity: 0.8;
	font-size: 24px;
	line-height: 1;
	width: 24px;
	height: 24px;
	text-align: center;
	top: 50%;
	margin-top: -12px;
	left: 50%;
	margin-left: -12px;
	color: #FFF;
}

.overlay:hover .overlay-wrap,
.overlay:hover .text-overlay { opacity: 1; }


.text-overlay {
	position: absolute;
	opacity: 0.85;
	top: auto;
	bottom: 0;
	height: auto;
	padding: 40px 15px 15px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.85) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.85))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%); /* IE10+ */
	background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.85) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 ); /* IE6-9 */
}

.text-overlay-title h2,
.text-overlay-title h3,
.text-overlay-title h4 {
	margin: 0;
	color: #F5F5F5;
}

.text-overlay-title h2 { font-size: 28px; }

.text-overlay-title h3 {
	font-size: 17px;
	font-weight: 600;
}

.text-overlay-title h2,
.text-overlay-title h3,
.text-overlay-title h4,
.text-overlay-meta {
	max-width: 100%;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
}

.text-overlay-meta {
	color: #CCC;
	font-size: 13px;
}

.text-overlay-meta span i {
	position: relative;
	top: 1px;
	font-size: 14px;
}


/* News Carousel Overlays
-----------------------------------------------------------------*/

.news-carousel .text-overlay { padding: 40px 30px 25px; }

.news-carousel .text-overlay-title { margin: 15px 0 10px; }

.news-carousel .text-overlay-title h2,
.news-carousel .text-overlay-title h3,
.news-carousel .text-overlay-title h4 {
	line-height: 1.2;
	text-overflow: none;
	white-space: normal;
}

.news-carousel .text-overlay-meta { font-size: 14px; }

.news-carousel .rounded-skill {
	position: absolute;
	margin: 0 !important;
	top: 30px;
	right: 30px;
	color: #FFF;
	font-weight: 600;
}


/* ----------------------------------------------------------------
	Forms
-----------------------------------------------------------------*/

.sm-form-control {
	display: block;
	width: 100%;
	height: 38px;
	padding: 8px 14px;
	font-size: 15px;
	line-height: 1.42857143;
	color: #555555;
	background-color: #ffffff;
	background-image: none;
	border: 2px solid #DDD;
	border-radius: 0 !important;
	-webkit-transition: border-color ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s;
	transition: border-color ease-in-out .15s;
}

.sm-form-control:focus {
	border-color: #AAA;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.sm-form-control::-moz-placeholder {
	color: #999;
	opacity: 1;
}

.sm-form-control:-ms-input-placeholder { color: #999; }
.sm-form-control::-webkit-input-placeholder { color: #999; }

.sm-form-control[disabled],
.sm-form-control[readonly],
fieldset[disabled] .sm-form-control {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}

.sm-form-control { height: auto; }

.form-control { border-radius: 3px; }

.form-control:active,
.form-control:focus {
	border-color: #999;
	box-shadow: none;
}

label {
	display: inline-block;
	font-size: 13px;
	font-weight: 700;
	font-family: 'Raleway', sans-serif;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: #555;
	margin-bottom: 10px;
	cursor: pointer;
}

label.label-muted {
	color: #999;
	font-weight: normal;
	margin-right: 5px;
}

form .col_full,
form .col_half,
form .col_one_third,
form .col_two_third,
form .col_three_fourth,
form .col_one_fourth,
form .col_one_fifth,
form .col_two_fifth,
form .col_three_fifth,
form .col_four_fifth,
form .col_one_sixth,
form .col_five_sixth { margin-bottom: 25px; }


/* ----------------------------------------------------------------
	Contact Form
-----------------------------------------------------------------*/


#contact-form-overlay,
#contact-form-overlay-mini {
	position: relative;
	max-width: 800px;
	background-color: #FFF;
	padding: 40px;
	margin: 0 auto;
	z-index: 10;
	border-radius: 4px;
	box-shadow: 0 1px 10px rgba(0,0,0,0.15);
}

#contact-form-overlay-mini {
	float: right;
	width: 380px;
	margin: 0;
}

label.error {
	margin-top: 5px;
	color: #E42C3E;
	font-weight: 400;
}

label.error { display: none !important; }

.form-control.error,
.sm-form-control.error { border-color: #E42C3E; }


/* ----------------------------------------------------------------
	Google Maps
-----------------------------------------------------------------*/


#google-map {
	position: relative;
	width: 100%;
	height: 450px;
}

.gmap img { max-width: none !important; }

.gm-style .gm-style-iw h3 span {
	font-size: inherit;
	font-family: inherit;
}

#map-overlay {
	position: relative;
	padding: 100px 0;
}

#map-overlay #google-map {
	position: absolute;
	height: 100%;
	top: 0;
	left: 0;
}

.gmap .gmnoprint,
.gmap .gm-style-cc { display: none !important; }


/* ----------------------------------------------------------------
	Google Custom Search
-----------------------------------------------------------------*/


#content .cse .gsc-control-cse,
#content .gsc-control-cse,
#content .gsc-above-wrapper-area,
#content .gsc-adBlock,
#content .gsc-thumbnail-inside,
#content .gsc-url-top,
#content .gsc-table-result,
#content .gsc-webResult,
#content .gsc-result { padding: 0 !important; }

#content .gsc-selected-option-container { width: auto !important; }

#content .gsc-result-info { padding-left: 0 !important; }

#content .gsc-above-wrapper-area-container,
#content .gsc-table-result { margin-bottom: 10px; }

#content .gcsc-branding { display: none; }

#content .gsc-results,
#content .gsc-webResult { width: 100% !important; }

#content .gs-no-results-result .gs-snippet,
#content .gs-error-result .gs-snippet { margin: 0 !important; }


/* ----------------------------------------------------------------
	Heading Styles
-----------------------------------------------------------------*/


/* Block Titles
-----------------------------------------------------------------*/

.title-block {
	padding: 2px 0 3px 20px;
	border-left: 7px solid #1ABC9C;
	margin-bottom: 30px;
}

.title-block-right {
	padding: 2px 20px 3px 0;
	border-left: 0;
	border-right: 7px solid #1ABC9C;
	text-align: right;
}

.title-block h1,
.title-block h2,
.title-block h3,
.title-block h4 { margin-bottom: 0; }

.title-block > span {
	display: block;
	margin-top: 4px;
	color: #555;
	font-weight: 300;
}

.title-block h1 + span { font-size: 22px; }

.title-block h2 + span { font-size: 19px; }

.title-block h3 + span { font-size: 17px; }

.title-block h4 + span {
	font-size: 15px;
	margin-top: 3px;
}


/* Heading Block - with Subtitle
-----------------------------------------------------------------*/

.heading-block { margin-bottom: 50px; }

.heading-block h1,
.heading-block h2,
.heading-block h3,
.heading-block h4,
.emphasis-title h1,
.emphasis-title h2 {
	margin-bottom: 0;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: #333;
}

.emphasis-title h1,
.emphasis-title h2 {
	font-weight: 400;
	letter-spacing: 0;
	text-transform: none;
}

.heading-block h1 { font-size: 32px; }

.heading-block h2 { font-size: 30px; }

.heading-block h3 { font-size: 26px; }

.heading-block h4 {
	font-size: 20px;
	font-weight: 700;
}

.heading-block > span:not(.before-heading) {
	display: block;
	margin-top: 10px;
	font-weight: 300;
	color: #777;
}

.heading-block .before-heading { margin-bottom: 7px; }

.heading-block.center > span,
.heading-block.title-center > span,
.center .heading-block > span {
	max-width: 700px;
	margin-left: auto;
	margin-right: auto;
}

.heading-block h1 + span { font-size: 24px; }

.heading-block h2 + span { font-size: 22px; }

.heading-block h3 + span,
.heading-block h4 + span { font-size: 20px; }

.heading-block ~ p:not(.lead) { font-size: 15px; }

.heading-block:after {
	content: '';
	display: block;
	margin-top: 30px;
	width: 40px;
	border-top: 2px solid #444;
}

.center .heading-block:after,
.heading-block.center:after,
.heading-block.title-center:after { margin: 30px auto 0; }

.heading-block.noborder:after,
.heading-block.nobottomborder:after { display: none; }

.heading-block.border-color:after { border-color: #1ABC9C; }


/* Emphasis Title
-----------------------------------------------------------------*/

.emphasis-title { margin: 0 0 50px; }

.emphasis-title h1,
.emphasis-title h2 {
	font-size: 64px;
	letter-spacing: -2px;
}

.emphasis-title h1 strong,
.emphasis-title h2 strong { font-weight: 700; }


/* Justify Border Title
-----------------------------------------------------------------*/

.fancy-title {
	position: relative;
	margin-bottom: 30px;
}

.fancy-title h1,
.fancy-title h2,
.fancy-title h3,
.fancy-title h4,
.fancy-title h5,
.fancy-title h6 {
	position: relative;
	display: inline-block;
	background-color: #FFF;
	padding-right: 15px;
	margin-bottom: 0;
}

.fancy-title h4,
.fancy-title h5,
.fancy-title h6 { padding-right: 10px; }

.fancy-title.title-double-border:before,
.fancy-title.title-border:before,
.fancy-title.title-border-color:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 0;
	border-top: 3px double #E5E5E5;
	left: auto;
	top: 46%;
	right: 0;
}

.fancy-title.title-border:before {
	top: 49%;
	border-top: 1px solid #EEE;
}

.fancy-title.title-border-color:before {
	top: 49%;
	border-top: 1px solid #1ABC9C;
	opacity: 0.6;
}


/* Fancy Title - Center Align
-----------------------------------------------------------------*/

.title-center { text-align: center; }

.title-center h1,
.title-center h2,
.title-center h3 { padding: 0 15px; }

.title-center h4,
.title-center h5,
.title-center h6 { padding: 0 10px; }


/* Fancy Title - Right Align
-----------------------------------------------------------------*/

.title-right { text-align: right; }

.title-right h1,
.title-right h2,
.title-right h3 { padding: 0 0 0 15px; }

.title-right h4,
.title-right h5,
.title-right h6 { padding: 0 0 0 10px; }


/* Fancy Title - Bottom Short Border
-----------------------------------------------------------------*/

.fancy-title.title-bottom-border h1,
.fancy-title.title-bottom-border h2,
.fancy-title.title-bottom-border h3,
.fancy-title.title-bottom-border h4,
.fancy-title.title-bottom-border h5,
.fancy-title.title-bottom-border h6 {
	display: block;
	background: transparent;
	padding: 0 0 10px;
	border-bottom: 2px solid #1ABC9C;
}


/* Fancy Title - Bottom Short Border
-----------------------------------------------------------------*/

.fancy-title.title-dotted-border { background: url('images/icons/dotted.png') repeat-x center; }


/* Sub Heading
-----------------------------------------------------------------*/

.before-heading {
	display: block;
	margin: 0 0 5px;
	font-size: 16px;
	font-family: 'Crete Round', serif;
	font-style: italic;
	font-weight: 400;
	color: #999;
}


/* ----------------------------------------------------------------
	Divider
-----------------------------------------------------------------*/


.divider {
	position: relative;
	overflow: hidden;
	margin: 35px 0;
	color: #E5E5E5;
	width: 100%;
}

.divider.divider-margin { margin: 70px 0; }

.divider:after,
.divider.divider-center:before,
.divider.divider-center.divider-short:before {
	content: '';
	position: absolute;
	width: 100%;
	top: 8px;
	left: 30px;
	height: 0;
	border-top: 1px solid #EEE;
}

.divider.divider-thick:after,
.divider.divider-center.divider-thick:before,
.divider.divider-center.divider-short.divider-thick:before { border-top-width: 3px; }

.divider.divider-short:after { width: 30%; }

.divider.divider-vshort:after { width: 12%; }

.divider i {
	position: relative;
	width: 18px;
	height: 18px;
	line-height: 1;
	font-size: 18px !important;
	text-align: center;
}

.divider a {
	position: relative;
	display: inline-block;
	color: inherit;
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.divider a:hover { color: #888; }


/* Divider - Icon Align Right
-----------------------------------------------------------------*/

.divider.divider-right { text-align: right; }

.divider.divider-right:after {
	left: auto;
	right: 30px;
}


/* Divider - Icon Align Center
-----------------------------------------------------------------*/

.divider.divider-center,
.divider.divider-center.divider-short { text-align: center; }

.divider.divider-center:before {
	left: -50% !important;
	right: 0;
	margin-left: -20px;
}

.divider.divider-center:after {
	left: 50% !important;
	right: 0;
	margin-left: 20px;
}


/* Short Divider - Icon Align Center
-----------------------------------------------------------------*/

.divider.divider-center.divider-short:before {
	left: auto !important;
	right: 50%;
	margin-right: 20px;
	width: 15%;
}

.divider.divider-center.divider-short:after {
	left: 50% !important;
	right: auto !important;
	margin-left: 20px;
	width: 15%;
}

.divider.divider-center.divider-vshort:before,
.divider.divider-center.divider-vshort:after { width: 6%; }


/* Divider - Rounded Icon
-----------------------------------------------------------------*/

.divider.divider-rounded { color: #BBB; }

.divider.divider-rounded:after,
.divider.divider-rounded.divider-center:before,
.divider.divider-rounded.divider-short:before,
.divider.divider-border:after,
.divider.divider-border.divider-center:before,
.divider.divider-border.divider-short:before {
	top: 19px;
	left: 40px;
}

.divider.divider-rounded i,
.divider.divider-border i {
	width: 40px;
	height: 40px;
	line-height: 40px;
	background-color: #F5F5F5;
	border-radius: 50%;
}

.divider.divider-rounded.divider-right:after,
.divider.divider-border.divider-right:after {
	left: auto;
	right: 40px;
}


/* Divider - Rounded & Border
-----------------------------------------------------------------*/

.divider.divider-border { color: #E5E5E5; }

.divider.divider-border i {
	line-height: 38px;
	background-color: transparent;
	border: 1px solid #EEE;
}


/* Divider - Line Only
-----------------------------------------------------------------*/

.divider.divider-line:before,
.divider.divider-line:after {
	margin-left: 0 !important;
	margin-right: 0 !important;
}



/* ----------------------------------------------------------------
	Quotes & Blockquotes
-----------------------------------------------------------------*/


blockquote p { margin-bottom: 15px; }

blockquote.pull-left {
	max-width: 300px;
	margin: 5px 20px 10px 0;
	padding-right: 0;
}

blockquote.pull-right {
	max-width: 300px;
	margin: 5px 0 10px 20px;
	padding-left: 0;
}

.quote {
	border: none !important;
	position: relative;
}

.quote p { position: relative; }

.quote:before {
	font-family: 'font-icons';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	content: "\e7ad";
	position: absolute;
	width: 48px;
	height: 48px;
	line-height: 48px;
	font-size: 42px;
	top: 0;
	left: 0;
	color: #EEE;
}

.quote.blockquote-reverse:before {
	content: "\e7ae";
	left: auto;
	right: 0;
}


/* ----------------------------------------------------------------
	Dropcaps & Highlights
-----------------------------------------------------------------*/


.dropcap {
	float: left;
	font-size: 42px;
	line-height: 1;
	margin: 0 5px 0 0;
	text-transform: uppercase;
}

.highlight {
	padding: 2px 5px;
	background-color: #444;
	color: #FFF;
	border-radius: 2px;
}


/* ----------------------------------------------------------------
	Magazine Specific Classes
-----------------------------------------------------------------*/

.top-advert {
	float: right;
	padding: 5px;
	border-left: 1px solid #EEE;
	border-right: 1px solid #EEE;
}

.top-advert a,
.top-advert img { display: block; }

.bnews-title {
	display: block;
	float: left;
	margin-top: 2px;
	padding-top: .3em;
	text-transform: uppercase;
}

.bnews-slider {
	float: left;
	width: 970px;
	margin-left: 20px;
	min-height: 0;
}


/* ----------------------------------------------------------------
	Text Rotater
-----------------------------------------------------------------*/

.text-rotater {}

.text-rotater > .t-rotate > .animated { display: inline-block; }


/* ----------------------------------------------------------------
	Go To Top
-----------------------------------------------------------------*/


#gotoTop {
	display: none;
	z-index: 299;
	position: fixed;
	width: 40px;
	height: 40px;
	background-color: #333;
	background-color: rgba(0,0,0,0.3);
	font-size: 20px;
	line-height: 36px;
	text-align: center;
	color: #FFF;
	top: auto;
	left: auto;
	right: 30px;
	bottom: 50px;
	cursor: pointer;
	border-radius: 2px;
}

body:not(.device-touch) #gotoTop {
	transition: background-color .2s linear;
	-webkit-transition: background-color .2s linear;
	-o-transition: background-color .2s linear;
}

.stretched #gotoTop { bottom: 30px; }

#gotoTop:hover { background-color: #1ABC9C; }


/* ----------------------------------------------------------------
	Error 404
-----------------------------------------------------------------*/


.error404 {
	display: block;
	font-size: 216px;
	font-weight: 600;
	color: #DDD;
	line-height: 1.35;
	letter-spacing: 4px;
}

.error404-wrap .container { z-index: 7; }

.error404-wrap .error404 {
	line-height: 0.9;
	margin-bottom: 40px;
	font-weight: bold;
	font-size: 244px;
	color: #FFF !important;
	opacity: 0.2;
	text-shadow: 1px 1px 5px rgba(0,0,0,0.4);
}

.error404-wrap .heading-block h4 {
	font-weight: 300;
	margin-bottom: 8px;
}

.error404-wrap .heading-block span { font-size: 17px; }

.error404-wrap form { max-width: 500px; }


/* ----------------------------------------------------------------
	Landing Pages
-----------------------------------------------------------------*/

.landing-wide-form {
	background: rgba(0,0,0,0.3);
	padding: 30px;
	border-radius: 3px;
}

.landing-form-overlay {
	position: absolute;
	z-index: 10;
	top: auto;
	left: auto;
	right: 0;
	bottom: -154px;
	background-color: rgba(0,0,0,0.6);
	border-radius: 3px 3px 0 0;
}

.landing-video {
	z-index: 1;
	width: 560px;
	height: 315px;
	margin: 22px 0 0 95px;
	overflow: hidden;
}

.landing-promo h3 { font-size: 26px; }

.landing-promo > .container > span { font-size: 17px; }


/* ----------------------------------------------------------------
	Preloaders
-----------------------------------------------------------------*/


.preloader,
.preloader2,
.form-process {
	display: block;
	width: 100%;
	height: 100%;
	background: url("images/preloader.gif") center center no-repeat #FFF;
}

.preloader2 { background-color: transparent; }

.form-process {
	display: none;
	position: absolute;
	z-index: 3;
	background-color: rgba(255,255,255,0.7);
}


/* ----------------------------------------------------------------
	Toastr Notifications
-----------------------------------------------------------------*/


.toast-title { font-weight: bold; }

.toast-message {
	-ms-word-wrap: break-word;
	word-wrap: break-word;
}

.toast-message a,
.toast-message label { color: #ffffff; }

.toast-message a:hover {
	color: #cccccc;
	text-decoration: none;
}

.toast-close-button {
	position: absolute;
	right: 5px;
	top: 3px;
	font-size: 14px;
	color: #ffffff;
	opacity: 0.8;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
	filter: alpha(opacity=80);
}

.toast-close-button:hover,
.toast-close-button:focus {
	color: #000000;
	text-decoration: none;
	cursor: pointer;
	opacity: 0.5;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
	filter: alpha(opacity=50);
}


button.toast-close-button {
	padding: 0;
	cursor: pointer;
	background: transparent;
	border: 0;
	-webkit-appearance: none;
}

.toast-top-full-width {
	top: 10px;
	right: 0;
	width: 100%;
}

.toast-bottom-full-width {
	bottom: 10px;
	right: 0;
	width: 100%;
}

.toast-top-left {
	top: 12px;
	left: 12px;
}

.toast-top-right {
	top: 12px;
	right: 12px;
}

.toast-bottom-right {
	right: 12px;
	bottom: 12px;
}

.toast-bottom-left {
	bottom: 12px;
	left: 12px;
}

#toast-container {
	position: fixed;
	z-index: 1999;
}

#toast-container * {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

#toast-container > div {
	margin: 0 0 6px;
	padding: 15px;
	width: 300px;
	border-radius: 3px;
	background-position: 15px center;
	background-repeat: no-repeat;
	color: #ffffff;
	opacity: 0.8;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
	filter: alpha(opacity=80);
}

#toast-container > div i {
	position: relative;
	top: 1px;
	width: 16px;
	text-align: center;
	margin-right: 3px;
}

#toast-container > :hover {
	opacity: 1;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
	filter: alpha(opacity=100);
	cursor: pointer;
}

#toast-container.toast-top-full-width > div,
#toast-container.toast-bottom-full-width > div {
	width: 96%;
	margin: auto;
}

.toast { background-color: #030303; }

.toast-success { background-color: #51a351; }

.toast-error { background-color: #bd362f; }

.toast-info { background-color: #2f96b4; }

.toast-warning { background-color: #f89406; }


@media all and (min-width: 240px) and (max-width: 479px) {
	#toast-container > div {
		padding: 8px;
		width: 18em;
	}
}

@media all and (min-width: 480px) and (max-width: 767px) {
	#toast-container > div {
		padding: 15px;
		width: 25em;
	}
}


/* ----------------------------------------------------------------
	Footer
-----------------------------------------------------------------*/


#footer {
	position: relative;
	background-color: #EEE;
	border-top: 5px solid rgba(0,0,0,0.2);
}

#footer .footer-widgets-wrap {
	position: relative;
	padding: 80px 0;
}

.footer-widgets-wrap .col_full,
.footer-widgets-wrap .col_half,
.footer-widgets-wrap .col_one_third,
.footer-widgets-wrap .col_two_third,
.footer-widgets-wrap .col_three_fourth,
.footer-widgets-wrap .col_one_fourth,
.footer-widgets-wrap .col_one_fifth,
.footer-widgets-wrap .col_two_fifth,
.footer-widgets-wrap .col_three_fifth,
.footer-widgets-wrap .col_four_fifth,
.footer-widgets-wrap .col_one_sixth,
.footer-widgets-wrap .col_five_sixth { margin-bottom: 0; }

#copyrights {
	padding: 40px 0;
	background-color: #DDD;
	font-size: 14px;
	line-height: 1.8;
}

#copyrights i.footer-icon {
	position: relative;
	top: 1px;
	font-size: 14px;
	width: 14px;
	text-align: center;
	margin-right: 3px;
}

.copyright-links a {
	display: inline-block;
	margin: 0 3px;
	color: #333;
	border-bottom: 1px dotted #444;
}

.copyright-links a:hover {
	color: #555;
	border-bottom: 1px solid #666;
}

.copyrights-menu { margin-bottom: 10px; }

.copyrights-menu a {
	font-size: 14px;
	margin: 0 10px;
	border-bottom: 0 !important;
}

#copyrights .col_half { margin-bottom: 0 !important; }

#copyrights a:first-child { margin-left: 0; }

#copyrights .tright a:last-child { margin-right: 0; }

.footer-logo {
	display: block;
	margin-bottom: 30px;
}


/* ----------------------------------------------------------------
	Widgets
-----------------------------------------------------------------*/


.widget {
	position: relative;
	margin-top: 50px;
}

.sidebar-widgets-wrap .widget {
	padding-top: 50px;
	border-top: 1px solid #EEE;
}

.widget:first-child { margin-top: 0; }

.sidebar-widgets-wrap .widget:first-child {
	padding-top: 0;
	border-top: 0;
}

.widget > h4 {
	margin-bottom: 25px;
	font-size: 15px;
	font-weight: 600;
	letter-spacing: 2px;
	text-transform: uppercase;
}

.sidebar-widgets-wrap .widget > h4 { letter-spacing: 1px; }

.widget p:not(.lead) { font-size: 14px; }


/* Tag Cloud
-----------------------------------------------------------------*/


.tagcloud { margin-bottom: -2px; }

.tagcloud a {
	display: block;
	float: left;
	margin-right: 4px;
	margin-bottom: 4px;
	padding: 3px 6px;
	border: 1px solid #E5E5E5;
	font-size: 13px !important;
	color: #666;
	border-radius: 2px;
}

body:not(.device-touch) .tagcloud a {
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.tagcloud a:hover {
	border-color: #1ABC9C !important;
	color: #1ABC9C !important;
}


/* Widget - Links
-----------------------------------------------------------------*/

.widget_nav_menu ul,
.widget_nav_menu li,
.widget_links ul,
.widget_links li,
.widget_meta ul,
.widget_meta li,
.widget_archive ul,
.widget_archive li,
.widget_recent_comments ul,
.widget_recent_comments li,
.widget_recent_entries ul,
.widget_recent_entries li,
.widget_categories ul,
.widget_categories li,
.widget_pages ul,
.widget_pages li,
.widget_rss ul,
.widget_rss li {
	list-style: none;
	margin: 0;
}

.widget_nav_menu li,
.widget_links li,
.widget_meta li,
.widget_archive li,
.widget_recent_comments li,
.widget_recent_entries li,
.widget_categories li,
.widget_pages li,
.widget_rss li { padding: 4px; }

.widget_nav_menu li a,
.widget_links li a,
.widget_meta li a,
.widget_archive li a,
.widget_recent_entries li a,
.widget_categories li a,
.widget_pages li a,
.widget_rss li a,
.widget_recent_comments li {
	display: inline-block;
	padding: 0 3px 0 12px;
}

.widget_recent_comments li {
	display: block;
	background: url("images/icons/widget-comment.png") left top no-repeat;
	padding: 4px 0 4px 20px;
}

.widget_nav_menu li a,
.widget_links li a,
.widget_meta li a,
.widget_archive li a,
.widget_recent_entries li a,
.widget_categories li a,
.widget_pages li a,
.widget_rss li a,
.widget_recent_comments li a {
	background: url("images/icons/widget-link.png") left top no-repeat;
	border: none !important;
	color: #444;
	font-size: 14px;
}

.widget_nav_menu li a:hover,
.widget_links li a:hover,
.widget_meta li a:hover,
.widget_archive li a:hover,
.widget_recent_entries li a:hover,
.widget_categories li a:hover,
.widget_pages li a:hover,
.widget_rss li a:hover,
.widget_recent_comments li a:hover { color: #000; }

.widget_recent_comments li a {
	display: inline;
	padding: 0;
	background: none !important;
}

.widget_nav_menu > ul > li:first-child,
.widget_links > ul > li:first-child,
.widget_meta > ul > li:first-child,
.widget_archive > ul > li:first-child,
.widget_recent_comments > ul > li:first-child,
.widget_recent_entries > ul > li:first-child,
.widget_categories > ul > li:first-child,
.widget_pages > ul > li:first-child,
.widget_rss > ul > li:first-child { border-top: 0 !important; }

.widget_nav_menu > ul,
.widget_links > ul,
.widget_meta > ul,
.widget_archive > ul,
.widget_recent_comments > ul,
.widget_recent_entries > ul,
.widget_categories > ul,
.widget_pages > ul,
.widget_rss > ul { margin-top: -4px !important; }

.widget_nav_menu ul ul,
.widget_links ul ul,
.widget_meta ul ul,
.widget_archive ul ul,
.widget_recent_comments ul ul,
.widget_recent_entries ul ul,
.widget_categories ul ul,
.widget_pages ul ul,
.widget_rss ul ul { margin-left: 15px; }


/* Widget - Testimonial & Twitter
-----------------------------------------------------------------*/

.widget .testimonial.no-image .testi-image { display: none; }

.widget .testimonial.twitter-scroll .testi-image { margin-right: 10px; }

.widget .testimonial:not(.twitter-scroll) .testi-image,
.widget .testimonial:not(.twitter-scroll) .testi-image a,
.widget .testimonial:not(.twitter-scroll) .testi-image img {
	width: 42px;
	height: 42px;
}

.widget .testimonial.twitter-scroll .testi-image,
.widget .testimonial.twitter-scroll .testi-image a,
.widget .testimonial.twitter-scroll .testi-image img,
.widget .testimonial.twitter-scroll .testi-image i {
	width: 28px;
	height: 28px;
}

.widget .testimonial.twitter-scroll .testi-image i {
	background-color: #EEE;
	line-height: 28px;
	font-size: 14px;
	color: #888;
}

.widget .testimonial p { font-size: 14px; }


/* Widget - Quick Contact Form
-----------------------------------------------------------------*/

.quick-contact-widget .form-control,
.quick-contact-widget .input-group,
.quick-contact-widget .sm-form-control { margin-bottom: 10px; }

.quick-contact-widget .input-group .form-control { margin-bottom: 0; }

.quick-contact-widget form,
#template-contactform { position: relative; }


/* Newsletter Widget
-----------------------------------------------------------------*/

.subscribe-widget h5 {
	font-weight: 300;
	font-size: 14px;
	line-height: 1.5;
}


/* Twitter Feed Widget
-----------------------------------------------------------------*/

.widget-twitter-feed li { margin: 15px 0 0 0; }

.widget-twitter-feed li:first-child { margin-top: 0; }

.widget-twitter-feed small {
	display: block;
	margin-top: 3px;
}

.widget-twitter-feed small a { color: #999; }


/* Small Post
-----------------------------------------------------------------*/

.widget-twitter-feed li { margin: 15px 0 0 0; }

.widget-twitter-feed li:first-child { margin-top: 0; }

.widget-twitter-feed small {
	display: block;
	margin-top: 3px;
}

.widget-twitter-feed small a { color: #999; }


/* ----------------------------------------------------------------
	Wedding
-----------------------------------------------------------------*/


.wedding-head {
	position: relative;
	line-height: 1;
	font-size: 80px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
}

.wedding-head .first-name,
.wedding-head .last-name,
.wedding-head .and {
	display: inline-block;
	margin-right: 15px;
	font-weight: bold;
	text-align: right;
	text-transform: uppercase;
	font-family: 'Raleway', sans-serif;
	letter-spacing: 2px;
}

.wedding-head .last-name {
	margin: 0 0 0 15px;
	text-align: left;
}

.wedding-head .first-name span,
.wedding-head .last-name span {
	display: block;
	margin-top: 10px;
	font-size: 56px;
	font-weight: 400;
	font-style: italic;
	font-family: 'Crete Round', serif;
	text-transform: none;
}

.wedding-head .and {
	margin: 0;
	font-size: 200px;
	font-family: 'Times New Roman', serif;
}


/* ----------------------------------------------------------------
	Bootstrap Specific
-----------------------------------------------------------------*/

.table .success { color: #3c763d; }

.table .info { color: #31708f; }

.table .warning { color: #8a6d3b; }

.table .danger { color: #a94442; }

.btn-link { color: #1ABC9C; }

.btn-link:hover,
.btn-link:focus { color: #222; }

.boot-tabs { margin-bottom: 20px !important; }

.carousel-control .icon-chevron-left,
.carousel-control .icon-chevron-right {
	position: absolute;
	top: 47.5%;
	z-index: 5;
	display: inline-block;
}

.carousel-control .icon-chevron-left { left: 50%; }

.carousel-control .icon-chevron-right { right: 50%; }

.responsive-utilities th small {
	display: block;
	font-weight: 400;
	color: #999;
}

.show-grid [class^=col-] {
	padding-top: 10px;
	padding-bottom: 10px;
	background-color: #EEE;
	border: 1px solid #DDD;
}

.img-circle { border-radius: 50% !important; }

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
	color: #FFF !important;
	background-color: #1ABC9C !important;
	border-color: #1ABC9C !important;
}

label.radio,
label.checkbox { padding-left: 20px; }

.input-group-lg > .input-group-addon { line-height: 1; }


/* ----------------------------------------------------------------
	Stretched Layout
-----------------------------------------------------------------*/


.stretched #wrapper {
	width: 100%;
	margin: 0;
	box-shadow: none;
}


/* ----------------------------------------------------------------
	Page Transitions
-----------------------------------------------------------------*/

body:not(.no-transition) #wrapper,
.animsition-overlay {
	position: relative;
	opacity: 0;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.css3-spinner {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 1000;
	text-align: center;
	background-color: #FFF;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.css3-spinner > div {
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -9px;
	margin-left: 13px;
	width: 18px;
	height: 18px;
	background-color: #DDD;
	border-radius: 100%;
	display: inline-block;
	-webkit-animation: bouncedelay 1.4s infinite ease-in-out;
	animation: bouncedelay 1.4s infinite ease-in-out;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.css3-spinner .css3-spinner-bounce1 {
	margin-left: -31px;
	-webkit-animation-delay: -0.32s;
	animation-delay: -0.32s;
}

.css3-spinner .css3-spinner-bounce2 {
	margin-left: -9px;
	-webkit-animation-delay: -0.16s;
	animation-delay: -0.16s;
}

@-webkit-keyframes bouncedelay {
	0%, 80%, 100% { -webkit-transform: scale(0.0) }
	40% { -webkit-transform: scale(1.0) }
}

@keyframes bouncedelay {
  0%, 80%, 100% {
	transform: scale(0.0);
	-webkit-transform: scale(0.0);
  } 40% {
	transform: scale(1.0);
	-webkit-transform: scale(1.0);
  }
}


.css3-spinner > .css3-spinner-flipper {
	width: 32px;
	height: 32px;
	margin-top: -16px;
	margin-left: -16px;
	border-radius: 0;
	-webkit-animation: rotateplane 1.2s infinite ease-in-out;
	animation: rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes rotateplane {
	0% { -webkit-transform: perspective(120px) }
	50% { -webkit-transform: perspective(120px) rotateY(180deg) }
	100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes rotateplane {
	0% {
		transform: perspective(120px) rotateX(0deg) rotateY(0deg);
		-webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
	} 50% {
		transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
		-webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
	} 100% {
		transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
		-webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
	}
}

.css3-spinner > .css3-spinner-double-bounce1,
.css3-spinner > .css3-spinner-double-bounce2 {
	width: 40px;
	height: 40px;
	margin-top: -20px;
	margin-left: -20px;
	border-radius: 50%;
	opacity: 0.6;
	-webkit-animation: cssspinnerbounce 2.0s infinite ease-in-out;
	animation: cssspinnerbounce 2.0s infinite ease-in-out;
}

.css3-spinner > .css3-spinner-double-bounce2 {
	-webkit-animation-delay: -1.0s;
	animation-delay: -1.0s;
}

@-webkit-keyframes cssspinnerbounce {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

@keyframes cssspinnerbounce {
  0%, 100% {
	transform: scale(0.0);
	-webkit-transform: scale(0.0);
  } 50% {
	transform: scale(1.0);
	-webkit-transform: scale(1.0);
  }
}

.css3-spinner > .css3-spinner-rect1,
.css3-spinner > .css3-spinner-rect2,
.css3-spinner > .css3-spinner-rect3,
.css3-spinner > .css3-spinner-rect4,
.css3-spinner > .css3-spinner-rect5 {
	height: 30px;
	width: 6px;
	margin-top: -15px;
	margin-left: -21px;
	border-radius: 0;
	-webkit-animation: stretchdelay 1.2s infinite ease-in-out;
	animation: stretchdelay 1.2s infinite ease-in-out;
}

.css3-spinner > .css3-spinner-rect2 {
	margin-left: -12px;
	-webkit-animation-delay: -1.1s;
	animation-delay: -1.1s;
}

.css3-spinner > .css3-spinner-rect3 {
	margin-left: -3px;
	-webkit-animation-delay: -1.0s;
	animation-delay: -1.0s;
}

.css3-spinner > .css3-spinner-rect4 {
	margin-left: 6px;
	-webkit-animation-delay: -0.9s;
	animation-delay: -0.9s;
}

.css3-spinner > .css3-spinner-rect5 {
	margin-left: 15px;
	-webkit-animation-delay: -0.8s;
	animation-delay: -0.8s;
}

@-webkit-keyframes stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes stretchdelay {
  0%, 40%, 100% {
	transform: scaleY(0.4);
	-webkit-transform: scaleY(0.4);
  }  20% {
	transform: scaleY(1.0);
	-webkit-transform: scaleY(1.0);
  }
}


.css3-spinner > .css3-spinner-cube1,
.css3-spinner > .css3-spinner-cube2 {
	width: 16px;
	height: 16px;
	border-radius: 0;
	margin-top: -20px;
	margin-left: -20px;
	-webkit-animation: cubemove 1.8s infinite ease-in-out;
	animation: cubemove 1.8s infinite ease-in-out;
}

.css3-spinner > .css3-spinner-cube2 {
	-webkit-animation-delay: -0.9s;
	animation-delay: -0.9s;
}

@-webkit-keyframes cubemove {
  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
  100% { -webkit-transform: rotate(-360deg) }
}

@keyframes cubemove {
  25% {
	transform: translateX(42px) rotate(-90deg) scale(0.5);
	-webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
  } 50% {
	transform: translateX(42px) translateY(42px) rotate(-179deg);
	-webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
  } 50.1% {
	transform: translateX(42px) translateY(42px) rotate(-180deg);
	-webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
  } 75% {
	transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
	-webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  } 100% {
	transform: rotate(-360deg);
	-webkit-transform: rotate(-360deg);
  }
}


.css3-spinner > .css3-spinner-scaler {
	width: 40px;
	height: 40px;
	margin-top: -20px;
	margin-left: -20px;
	-webkit-animation: scaleout 1.0s infinite ease-in-out;
	animation: scaleout 1.0s infinite ease-in-out;
}

@-webkit-keyframes scaleout {
  0% { -webkit-transform: scale(0.0) }
  100% {
	-webkit-transform: scale(1.0);
	opacity: 0;
  }
}

@keyframes scaleout {
  0% {
	transform: scale(0.0);
	-webkit-transform: scale(0.0);
  } 100% {
	transform: scale(1.0);
	-webkit-transform: scale(1.0);
	opacity: 0;
  }
}



/* ----------------------------------------------------------------
	HTML5 Youtube Video Backgrounds
-----------------------------------------------------------------*/


.mb_YTVPlayer :focus { outline: 0; }

.mb_YTVPlayer {
	display:block;
	transform:translateZ(0);
	transform-style: preserve-3d;
	perspective: 1000;
	backface-visibility: hidden;
	transform:translate3d(0,0,0);
	animation-timing-function: linear;
}

.mb_YTVPlayer.fullscreen {
	display:block!important;
	position: fixed!important;
	width: 100%!important;
	height: 100%!important;
	top: 0!important;
	left: 0!important;
	margin: 0!important;
	border: none !important;
}

.mb_YTVPlayer.fullscreen .mbYTP_wrapper { opacity:1 !important; }


.mbYTP_wrapper iframe { max-width: 4000px !important; }

.inline_YTPlayer {
	margin-bottom: 20px;
	vertical-align:top;
	position:relative;
	left:0;
	overflow: hidden;
	border-radius: 4px;
	-moz-box-shadow: 0 0 5px rgba(0,0,0,.7);
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,.7);
	box-shadow: 0 0 5px rgba(0,0,0,.7);
	background: rgba(0,0,0,.5);
}

.inline_YTPlayer img {
	border: none!important;
	-moz-transform: none!important;
	-webkit-transform: none!important;
	-o-transform: none!important;
	transform: none!important;
	margin:0!important;
	padding:0!important
}

