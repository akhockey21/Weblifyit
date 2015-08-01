body {
	background-color: <?php APRColors::get($user, 'body_background', true); ?>;
	color: #87919f;
	font-family: "Open Sans", Arial, sans-serif;
	font-size: 13px;
	line-height: 22px;
	margin: 0;
	padding: 30px 0 0;
}

html.no-page-top body > .body {
	padding-top: 100px;
}

/* Header */
#header {
	background: none repeat scroll 0 0 <?php APRColors::get($user, 'header_background', true); ?>;
	border-bottom: 3px solid #e5e7e9;
	clear: both;
	padding: 4px 0 8px;
	position: fixed;
	top: 0;
	transition: all 0.2s ease 0s;
	width: 100%;
	z-index: 1001;
}

#header > .container {
	margin-bottom: -35px;
	position: relative;
	display: table;
	max-width: 1170px;
}

#header > .navbar-collapse > .container {
	position: relative;
}

#header .header-top {
	background: #F6F8FB;
	width: 100%;
	z-index: 1002;
	margin: -4px 0 12px;
	min-height: 50px;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

#header .header-top p {
	float: left;
	font-size: 0.9em;
	line-height: 50px;
	margin: 0;
}

#header .header-top ul.social-icons {
	float: right;
	list-style: none;
	margin: 0 0 0 25px;
	padding: 0;
	position: relative;
	top: 11px;
	right: 11px;
}

#header .header-top ul.social-icons li {
	display: inline-block;
	margin: 0;
	padding: 0;
}

#header .header-top ul.social-icons li a {
	display: inline-block;
	width: 28px;
	color: #2D343E;
	height: 25px;
	text-align: center;
	line-height: 25px;
	font-size: 14px;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

#header .header-top i.fa {
	margin-left: 6px;
	margin-right: 6px;
	position: relative;
	top: 1px;
}

#header .header-top nav {
	float: right;
}

#header .header-top nav i.fa {
	top: 0;
}

#header .header-top nav ul.nav-top li a, #header .header-top nav ul.nav-top li span {
	color: #999;
	font-size: 0.9em;
	line-height: 30px;
	padding: 0 6px;
}

#header .header-top nav ul.nav-top li a:before {
	display: none;
}

#header .header-top.color nav ul.nav-top li a, #header .header-top.color nav ul.nav-top li span {
	color: #FFF;
}

#header .header-top.color ul.social-icons li a {
	color: #FFF;
}

#header .search {
	float: right;
	position: relative;
}

#header .search a {
	display: block;
	width: 25px;
	height: 25px;
	text-align: center;
	line-height: 25px;
	color: #2D343E;
	position: relative;
	z-index: 9999;
	-webkit-transform: translate3d(0, 0, 0);
}

#header .search .search-input {
	position: absolute;
	right: -12px;
	top: 20px;
	background: #434A54;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	padding: 6px;
	width: 260px;
	z-index: 9998;
	filter: alpha(opacity=0);
	opacity: 0;
	display: none;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

#header .search .search-input.active {
	top: 40px;
	filter: alpha(opacity=100);
	opacity: 100;
}

#header .search .search-input input {
	border: 0 none;
	border-radius: 4px 0 0 4px;
	height: 45px;
	margin: -1px 0 0;
}

#header .search .search-input .btn {
	padding-top: 12px;
	padding-bottom: 11px;
	margin-top: -1px;
}

#header .search .search-input:after {
	display: block;
	content: " ";
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-bottom: 10px solid #434A54;
	position: absolute;
	top: -8px;
	right: 15px;
}

#header nav {
	float: right;
}

#header nav ul.nav-main {
	margin: -7px 10px 8px 0;
}

#header nav ul.nav-main > li + li {
	margin-left: -4px;
}

#header nav ul.nav-main > li > a:before {
	background: #F1f1f1;
	display: block;
	content: " ";
	width: 1px;
	height: 20px;
	position: absolute;
	right: 0;
	top: 10px;
}

#header nav ul.nav-main li a {
	color: <?php APRColors::get($user, 'menu_link_color', true) ?>;
	font-size: 1.1em;
	font-style: normal;
	font-weight: 100;
	line-height: 20px;
	margin-left: 3px;
	margin-right: 3px;
	padding: 10px 13px;
}

#header nav ul.nav-main li a:hover {
	background-color: transparent;
}

#header nav ul.nav-main li ul a {
	text-transform: none;
	font-weight: normal;
	font-size: 0.9em;
}

#header nav ul.nav-main li.dropdown.open a.dropdown-toggle {
	border-radius: 5px 5px 0px 0px;
	background-color: #CCC;
}

#header nav ul.nav-main li.dropdown:hover > a {
	padding-bottom: 11px;
	margin-bottom: -1px;
}

#header nav ul.nav-main li.dropdown:hover > a:after {
	display: block;
	content: " ";
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-bottom: 10px solid #434A54;
	position: absolute;
	bottom: -3px;
	left: 40%;
}

#header nav ul.nav-main li.dropdown:hover > ul {
	display: block;
}

#header nav ul.nav-main li.dropdown:hover a.dropdown-toggle {
	border-radius: 5px 5px 0px 0px;
}

#header nav ul.nav-main li.active a {
	background-color: transparent;
}

#header nav ul.nav-main li a.dropdown-toggle.extra {
	display: none;
}

#header nav ul.nav-main ul.dropdown-menu {
	background-color: #434a54;
	border: 0;
	border-radius: 6px;
	margin: 0 0 0 3px;
	padding: 10px 5px;
	top: auto;
}

#header nav ul.nav-main ul.dropdown-menu li:hover > a {
	filter: none;
	background: #393f48;
	padding-left: 16px;
	padding-right: 16px;
}

#header nav ul.nav-main ul.dropdown-menu li:last-child > a {
	border-bottom: 0;
}

#header nav ul.nav-main ul.dropdown-menu > li > a {
	color: #ececed;
	font-weight: 400;
	padding-bottom: 4px;
	padding-top: 4px;
	text-transform: none;
	position: relative;
	padding: 8px 20px 8px 12px;
	font-size: 0.9em;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

#header nav ul.nav-main ul.dropdown-menu ul.dropdown-menu {
	border-radius: 6px;
	margin-left: 0;
	margin-top: -5px;
}

#header nav ul.nav-main .dropdown-submenu {
	position: relative;
}

#header nav ul.nav-main .dropdown-submenu > .dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	border-radius: 0 6px 6px 6px;
}

#header nav ul.nav-main .dropdown-submenu > a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #cccccc;
	margin-top: 5px;
	margin-right: -10px;
}

#header nav ul.nav-main .dropdown-submenu.pull-left {
	float: none;
}

#header nav ul.nav-main .dropdown-submenu.pull-left > .dropdown-menu {
	left: -100%;
	margin-left: 10px;
	border-radius: 6px 0 6px 6px;
}

#header nav ul.nav-main .dropdown-submenu:hover > .dropdown-menu {
	display: block;
}

#header nav ul.nav-main .dropdown-submenu:hover > a:after {
	border-left-color: #FFF;
}

#header nav ul.nav-top {
	margin: 10px 0 -20px;
}

#header nav ul.nav-top li span {
	display: block;
	line-height: 14px;
	margin-bottom: 2px;
	margin-right: 0;
	margin-top: 0;
	padding: 8px 2px 8px 12px;
}

#header nav ul.nav-top li a, #header nav ul.nav-top li span {
	color: #999;
	font-size: 0.9em;
	padding: 6px 10px;
	background: transparent;
}

#header nav ul.nav-top li a:hover, #header nav ul.nav-top li span:hover {
	color: #666;
}

#header nav ul.nav-top li i {
	margin-right: 6px;
	position: relative;
	top: 1px;
}

#header .nav-main-collapse {
	overflow-y: visible;
}

#header .nav-main-collapse.in {
	overflow-y: visible;
}

/* Logo */
#header .logo {
	background: #fff;
	border-bottom: 3px solid #e5e7e9;
	border-radius: 6px;
	color: #000;
	display: block;
	float: left;
	height: 100%;
	margin: 7px -32px -25px 0;
	padding: 10px 30px 20px;
	transition: all 0.2s ease 0s;
	z-index: 100;
}

#header .logo a {
	position: relative;
	z-index: 1;
}

#header .logo img {
	position: relative;
	color: transparent;
}

/* Header Container */
.header-container {
	min-height: 76px;
	position: relative;
}

/* Responsive Nav Button */
.btn-responsive-nav {
	display: none;
}

/* Sticky Menu */
#header.fixed {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 1001;
}

body.sticky-menu-active #header {
	padding: 5px;
	top: -10px;
	position: fixed;
}

body.sticky-menu-active #header .logo {
	padding-bottom: 15px;
}

body.sticky-menu-active #header .header-top {
	margin-top: -40px;
}

/* Header Mega Menu */
@media (min-width: 992px) {
	#header nav.mega-menu .nav, #header nav.mega-menu .dropup, #header nav.mega-menu .dropdown, #header nav.mega-menu .collapse {
		position: static;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item .mega-menu-sub-title {
		color: #ececed;
		display: block;
		font-size: 1em;
		font-weight: 600;
		padding-bottom: 5px;
		text-transform: uppercase;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item .mega-menu-sub-title .not-included {
		color: #b7b7b7;
		display: block;
		font-size: 0.8em;
		font-style: normal;
		margin: -8px 0 -4px;
		padding: 0;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item ul.dropdown-menu {
		background: #434a54 !important;
		color: #87919f;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item ul.sub-menu {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item ul.sub-menu a {
		color: #afafaf;
		margin: 0 0 0 -8px;
		padding: 3px 8px;
		text-transform: none;
		font-size: 0.9em;
		display: block;
		font-weight: normal;
		border-radius: 4px;
		border: 0;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-item:hover ul.sub-menu li:hover a:hover {
		text-decoration: none;
	}

	#header nav.mega-menu ul.nav-main li.mega-menu-fullwidth ul.dropdown-menu {
		border-radius: 6px;
	}

	#header nav.mega-menu .navbar-inner, #header nav.mega-menu .container {
		position: relative;
	}

	#header nav.mega-menu .dropdown-menu {
		left: auto;
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;
	}

	#header nav.mega-menu .dropdown-menu > li {
		display: block;
	}

	#header nav.mega-menu .mega-menu-content {
		padding: 20px 30px;
	}

	#header nav.mega-menu .mega-menu-content:before {
		display: table;
		content: "";
		line-height: 0;
	}

	#header nav.mega-menu .mega-menu-content:after {
		display: table;
		content: "";
		line-height: 0;
		clear: both;
	}

	#header nav.mega-menu.navbar .nav > li > .dropdown-menu:after, #header nav.mega-menu.navbar .nav > li > .dropdown-menu:before {
		display: none;
	}

	#header nav.mega-menu .dropdown.mega-menu-fullwidth .dropdown-menu {
		width: 100%;
		left: 0;
		right: 0;
	}

	#header nav.mega-menu nav.pull-right .dropdown-menu {
		right: 0;
	}

	#header.flat-menu nav.mega-menu ul.nav-main li.mega-menu-fullwidth ul.dropdown-menu {
		border-radius: 0;
	}
}
/* Responsive */
@media (max-width: 991px) {
	.sticky-menu-deactive {
		padding-top: 0 !important;
	}

	.sticky-menu-deactive section.page-top {
		margin-top: 0;
	}

  /* Header */
	#header {
		position: relative;
		clear: both;
	}

	#header > .container {
		margin-bottom: 0;
	}

	#header .social-icons, #header .search {
		display: none;
	}

	#header .nav-collapse {
		background: #171717;
		width: 100%;
		clear: both;
		width: 100%;
	}

	#header .nav-collapse .container .nav-main {
		float: left;
		width: 100%;
	}

	#header .nav-main-collapse {
		top: 12px;
		position: relative;
		background: #171717;
		max-height: none;
		width: 100%;
		overflow: hidden;
		overflow-y: hidden;
		overflow-x: hidden;
	}

	#header .nav-main-collapse.collapse {
		display: none !important;
	}

	#header .nav-main-collapse.in {
		width: 100%;
		overflow: hidden;
		overflow-y: hidden;
		overflow-x: hidden;
		display: block !important;
	}

	#header .nav-main {
		padding: 10px 0;
		clear: both;
		display: block;
		float: none;
		width: 100%;
	}

	#header .nav-main ul {
		padding: 0;
		margin: 0;
	}

	#header .nav-main ul li {
		padding: 0;
		margin: 0;
		clear: both;
		float: none;
		display: block;
		border-bottom: 1px solid #2A2A2A;
	}

	#header .nav-main ul li:last-child {
		border-bottom: none;
	}

	#header .nav-main ul ul {
		margin-left: 20px !important;
	}

	#header .nav-main ul.nav-main {
		float: none;
		position: static;
		margin: 8px 0;
		margin-right: -10px;
	}

	#header .nav-main ul.dropdown-menu {
		position: static;
		clear: both;
		float: none;
		display: none !important;
	}

	#header .nav-main li.resp-active > ul.dropdown-menu {
		display: block !important;
	}

	#header .nav-main li.dropdown a.dropdown-toggle.extra {
		float: right;
		position: relative;
		width: 30px;
		height: 30px;
		text-align: center;
		line-height: 30px;
		margin: 3px 0 -38px 0;
		z-index: 10;
		display: block;
	}

	#header .nav-main li a.dropdown-toggle.disabled .fa {
		display: none;
	}

	#header .nav-main li.dropdown:hover > a:after,
  #header .nav-main > li > a:before {
		display: none !important;
	}

	#header nav ul.nav-main > li + li {
		margin-left: 0;
	}

	#header nav ul.nav-main li a {
		color: #FFF;
		clear: both;
		float: none;
		display: block;
		padding: 9px 8px;
		border: 0;
		border-top: 0;
		margin: 0;
	}

	#header nav ul.nav-main li a i.fa-angle-down {
		position: absolute;
		right: 5px;
		top: 10px;
	}

	#header nav ul.nav-main li.dropdown:hover > a {
		margin-bottom: -2px;
	}

	#header nav ul.nav-main ul.dropdown-menu {
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;
	}

	#header nav ul.nav-main ul.dropdown-menu li > a {
		padding: 9px 8px;
		border: 0;
		border-top: 0;
		margin: 0;
		border-bottom: none;
	}

	#header nav ul.nav-main ul.sub-menu {
		padding: 0;
		margin: 0 0 10px 0;
	}

	#header nav ul.nav-main .dropdown-submenu > a:after {
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid #FFF;
	}

	#header nav ul.nav-main .dropdown-submenu:hover > a:after {
		border-left-color: transparent;
	}

	#header.flat-menu > .container {
		margin-bottom: 0;
	}

	#header.flat-menu nav ul.nav-main {
		padding: 0;
		margin: 0;
	}

	#header.flat-menu nav ul.nav-main li a {
		color: #FFF !important;
	}

	#header.center nav ul.nav-main > li {
		display: block;
	}

	body #header nav ul.nav-main ul.dropdown-menu {
		background: none !important;
		background-color: transparent !important;
	}

	body #header nav ul.nav-main li.dropdown.open .dropdown-toggle, body #header nav ul.nav-main li a, body #header nav ul.nav-main li > a:hover, body #header nav ul.nav-main li.active a, body #header nav ul.nav-main li.dropdown:hover a {
		background: none !important;
		background-color: transparent !important;
	}

	body #header nav ul.nav-main ul.dropdown-menu li:hover > a, body #header nav ul.nav-main li.dropdown:hover ul.dropdown-menu li > a:hover {
		background: none !important;
		background-color: transparent !important;
	}

	body #header.flat-menu nav ul.nav-main li.dropdown:hover a {
		background: none !important;
		background-color: transparent !important;
	}

	body #header.flat-menu nav ul.nav-main li a, body #header.flat-menu nav ul.nav-main li.dropdown:hover > a {
		padding: 9px 8px;
		border: 0;
		border-top: 0;
		margin: 0;
	}

	body #header.single-menu nav ul.nav-main li.active > a {
		padding: 9px 8px;
		border: 0;
		border-top: 0;
		margin: 0;
	}

	body #header.flat-menu nav ul.nav-main li > a:hover, body #header.flat-menu nav ul.nav-main li.dropdown:hover a {
		background: transparent !important;
	}

	html.boxed #header.single-menu > .container, html.boxed #header.flat-menu > .container {
		height: 95px;
		margin-bottom: 10px;
	}

	html.boxed #header.single-menu ul.nav-main, html.boxed #header.flat-menu ul.nav-main {
		margin: 5px 25px 5px 0;
	}

	html.boxed #header.single-menu nav ul.nav-main > li > a, html.boxed #header.flat-menu nav ul.nav-main > li > a {
		padding: 9px 8px !important;
	}

	body.sticky-menu-active #header,
  #header.fixed {
		position: fixed;
	}

	body.sticky-menu-active #header .nav-main-collapse,
  #header.fixed .nav-main-collapse {
		max-height: 300px;
	}

	body.sticky-menu-active #header .nav-main-collapse.in,
  #header.fixed .nav-main-collapse.in {
		overflow: hidden !important;
		overflow-x: hidden !important;
		overflow-y: auto !important;
	}

	body.sticky-menu-active #header .logo img,
  #header.fixed .logo img {
		margin-top: -12px;
	}

  /* Responsive Button Nav */
	.btn-responsive-nav {
		background: #171717;
		border-bottom-color: #030303 !important;
		top: 15px;
		display: block;
		position: absolute;
		right: 20px;
		color: #FFF;
		z-index: 1;
	}

	.btn-responsive-nav:hover, .btn-responsive-nav:active, .btn-responsive-nav:focus {
		color: #CCC;
		outline: none;
	}

	#header.single-menu .btn-responsive-nav {
		top: 30px;
	}

	#header.flat-menu .btn-responsive-nav, #header.center .btn-responsive-nav {
		top: 35px;
	}

  /* Logo */
	#header h1.logo img {
		max-width: 180px;
		max-height: none !important;
		height: auto !important;
	}

	#header.center h1.logo {
		text-align: left;
	}

  /* Nav Top */
	#header .header-top ul.nav-top {
		float: left;
		margin: 7px 0 0 -15px;
		min-height: 5px;
	}

	body section.page-top .slider-container + .page-top-info {
		margin-bottom: -45px;
		margin-top: -85px;
	}
}

@media (max-width: 767px) {
  /* Header */
	#header {
		display: block;
	}

	#header > .container {
		width: 100%;
	}

	#header .social-icons {
		display: none;
	}

	#header nav ul.nav-top {
		float: right;
		margin-right: 0;
	}

	#header.center nav {
		width: auto;
	}

  /* Responsive Button Nav */
	.btn-responsive-nav {
		top: 15px;
	}

	body section.page-top .slider-container + .page-top-info {
		margin-bottom: -35px;
		margin-top: -15px;
	}
}

@media (max-width: 479px) {
	#header nav ul.nav-top, #header .header-top {
		display: none;
	}
}

@media (max-width: 600px) {
  /* Header */
	#header nav ul.nav-top li {
		display: none;
	}

	#header nav ul.nav-top li .phone {
		display: block;
	}
}
/* Page Top */
section.page-top {
	background: transparent;
	margin: 40px 0 50px;
	min-height: 50px;
	padding: 0 0 5px 0;
	text-align: left;
}

section.page-top .slider {
	height: 200px;
	overflow: hidden;
	clear: both;
	filter: alpha(opacity=0);
	opacity: 0;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

section.page-top .slider.revslider-initialised {
	filter: alpha(opacity=100);
	opacity: 1;
}

section.page-top .tp-loader {
	display: none;
}

section.page-top .page-top-info ul.breadcrumb {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	margin: -3px 0 0;
	padding: 1px 10px;
	position: relative;
	display: inline-block;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
	top: -30px;
	filter: alpha(opacity=0);
	opacity: 0;
}

section.page-top .page-top-info ul.breadcrumb > li {
	text-shadow: none;
	color: #DFDFDF;
	font-size: 75%;
}

section.page-top .page-top-info ul.breadcrumb > li span.label {
	font-size: 100%;
}

section.page-top .page-top-info h2 {
	background: #2D343E;
	color: #FFF;
	display: inline-block;
	font-weight: 200;
	font-size: 3.2em;
	line-height: 1em;
	position: relative;
	letter-spacing: -2px;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
	top: 30px;
	padding: 10px;
	filter: alpha(opacity=0);
	opacity: 0;
}

section.page-top .page-top-info.init ul.breadcrumb, section.page-top .page-top-info.init h2 {
	filter: alpha(opacity=100);
	opacity: 1;
	top: 0;
	clear: both;
}

section.page-top .page-top-info.init a {
	color: #FFF;
}

section.page-top .slider-container + .page-top-info {
	margin-top: -130px;
	margin-bottom: 20px;
	position: relative;
	z-index: 100;
}

section.page-top .parallax {
	min-height: 300px;
	margin-top: -20px;
}

section.page-top .parallax + .page-top-info {
	margin-top: -200px;
	margin-bottom: 0;
	position: relative;
	z-index: 100;
}

/* Page Top Basic */
section.page-top.basic {
	background: #2D343E;
	margin: 40px 0 50px;
	padding-top: 50px;
}

section.page-top.basic .page-top-info h2 {
	margin-bottom: 25px;
	padding: 0;
}

section.page-top.basic .page-top-info ul.breadcrumb {
	background: transparent !important;
}

/* Responsive */
@media (max-width: 479px) {
	.page-top {
		padding: 16px 0;
	}

	.page-top h2 {
		line-height: 37px;
	}
}
/* Parallax */
.parallax {
	background-position: 50% 50%;
	background-repeat: no-repeat;
	margin: 70px 0;
	padding: 50px 0;
	position: relative;
}

.parallax.parallax-ready {
	background-attachment: fixed;
}

.parallax.parallax-disabled {
	background-attachment: scroll !important;
	background-position: 50% 50% !important;
}

.parallax blockquote {
	border: 0;
	padding: 0 10%;
}

.parallax blockquote i.fa-quote-left {
	font-size: 34px;
	position: relative;
	left: -5px;
}

.parallax blockquote p {
	font-size: 24px;
	line-height: 30px;
}

.parallax blockquote span {
	font-size: 16px;
	line-height: 20px;
	color: #999;
	position: relative;
	left: -5px;
}

/* Responsive */
@media (max-width: 991px) {
	.parallax {
		background-attachment: scroll !important;
		background-position: 50% 50% !important;
	}
}
/* Section Featured */
section.featured {
	clear: both;
	background: #F0F0ED;
	border-top: 5px solid #ECECE8;
	margin: 35px 0;
	padding: 50px 0;
}

section.featured.footer {
	margin: 30px 0 -70px;
}

section.featured.map {
	background-image: url(../img/map-bottom.png);
	background-position: center 0;
	background-repeat: no-repeat;
	margin-top: 0;
	border-top: 0;
}

/* Section Highlight */
section.highlight {
	clear: both;
	background: #CCC;
	boder-left: 0;
	boder-right: 0;
	border: 3px solid #CCC;
	margin: 35px 0 45px;
	padding: 40px 0;
	color: #FFF;
}

section.highlight > p, section.highlight > a {
	color: #FFF;
}

section.highlight h1, section.highlight h2, section.highlight h3, section.highlight h4, section.highlight h5 {
	color: #FFF;
}

section.highlight .img-thumbnail {
	background-color: #FFF !important;
	border-color: #FFF !important;
}

section.highlight.footer {
	margin: 45px 0 -70px;
}

section.highlight.top {
	margin-top: 0;
}

/* Call To Action */
section.call-to-action {
	position: relative;
	clear: both;
	overflow: hidden;
	background: #C9D0DA;
	border: 0;
	padding: 40px 0 30px;
	border-bottom: 3px solid #B6BDC7;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}

section.call-to-action h3 {
	text-transform: none;
	color: #121212;
	padding-bottom: 0;
	margin-bottom: 0;
}

section.call-to-action h3 .btn {
	margin-left: 10px;
}

section.call-to-action.footer {
	margin: 10px 0 -20px;
}

section.call-to-action.footer.footer {
	margin-top: 65px;
}

/* Sidebar */
aside ul.nav-list > li > a {
	color: #666;
	font-size: 0.9em;
}

/* Home Slider - Revolution Slider */
.slider-container {
	background: #666;
	max-height: 580px;
	overflow: hidden;
	padding: 0;
	position: relative;
	z-index: 1;
	background: transparent;
}

.slider-container ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.slider-container .tp-caption {
	filter: alpha(opacity=0);
	opacity: 0;
}

.slider-container .tp-caption a {
	color: #FFF;
}

.slider-container .tp-caption a:hover {
	color: #FFF;
}

.slider-container-fullscreen {
	max-height: none;
}

.slider-container-fullscreen .slider {
	max-height: none;
}

.slider {
	max-height: 580px;
	position: relative;
}

.slider > ul > li > img {
	visibility: hidden;
}

.slider .tp-bannertimer {
	display: none;
}

.slider a.main-button {
	font-family: 'Oswald', sans-serif;
	font-size: 26px;
	font-weight: 300;
	line-height: 20px;
	padding: 20px 55px;
}

.tp-bannershadow {
	display: none;
}

/* Revolution Slider - Basics */
.slider-container .tp-caption.fullscreenvideo {
	left: 0 !important;
}

.slider-container .top-label {
	color: #9a9a9a;
	font-size: 32px;
	font-weight: 300;
	font-family: 'Alegreya SC', sans-serif;
	-webkit-text-stroke: 0.2px;
}

.slider-container .top-label.md {
	font-size: 28px;
	-webkit-text-stroke: 0;
}

.slider-container .main-label {
	color: #222831;
	font-size: 130px;
	line-height: 150px;
	font-weight: 900;
	-webkit-text-stroke: 0.6px;
}

.slider-container .main-label.md {
	font-size: 100px;
	line-height: 100px;
}

.slider-container .bottom-label {
	color: #666;
	font-size: 20px;
	font-weight: 100;
	-webkit-text-stroke: 0.2px;
}

.slider-container .bottom-label.md {
	font-size: 16px;
	line-height: 16px;
}

.slider-container .top-line {
	height: 1px;
	width: 200px;
	background: #B7BDC0;
}

.slider-container.light .top-label, .slider-container.light .main-label, .slider-container.light .bottom-label {
	color: #333;
}

.slider-container.light .tp-caption a {
	color: #333;
}

.slider-container.light .tp-caption a:hover {
	color: #333;
}

.slider-container .top-label.white, .slider-container .main-label.white, .slider-container .bottom-label.white {
	color: #FFF;
}

.slider-container .tp-caption a.white {
	color: #FFF;
}

.slider-container .tp-caption a.white:hover {
	color: #FFF;
}

.slider-container .top-label.dark, .slider-container .main-label.dark, .slider-container .bottom-label.dark {
	color: #444;
}

.slider-container .tp-caption a.dark {
	color: #444;
}

.slider-container .tp-caption a.dark:hover {
	color: #444;
}

.slider-container .top-label.text-bg, .slider-container .main-label.text-bg, .slider-container .bottom-label.text-bg {
	padding: 10px;
}

.slider-container .tp-caption a.text-bg {
	padding: 10px;
}

.slider-container .tp-caption a.text-bg:hover {
	padding: 10px;
}

/* Slider Overlay*/
.slider-overlay {
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	z-index: 1000;
	background: transparent;
	filter: alpha(opacity=75);
	opacity: 0.75;
}

.home-top {
	background-image: url(../img/home-bg.jpg);
	background-position: center 0;
	background-repeat: no-repeat;
	margin-bottom: 60px;
	margin-top: 30px;
	position: relative;
}

.home-top.clean {
	background: none;
}

/* Responsive */
@media (max-width: 991px) {
	.home-top {
		margin-top: 0;
	}
}
/* Main Carousel */
.main-carousel {
	margin-top: -60px;
	overflow: hidden;
	padding-bottom: 120px;
	padding-top: 120px;
	position: relative;
	visibility: hidden;
	width: 100%;
}

.main-carousel .owl-controls {
	text-align: right;
	position: absolute;
	bottom: -165px;
	right: 15px;
}

.main-carousel .owl-pagination {
	visibility: hidden;
}

.main-carousel .owl-buttons {
	display: none;
}

.main-carousel .owl-carousel .owl-wrapper-outer {
	overflow: visible;
}

.main-carousel .owl-carousel .owl-item > div {
	position: relative;
	padding: 10px;
}

.main-carousel .carousel-overlay {
	position: absolute;
	top: -15%;
	width: 100%;
	left: 0;
	right: 0;
	bottom: -100px;
	height: 115%;
	display: none;
	background: transparent;
	z-index: 10;
}

.main-carousel .img-thumbnail {
	padding: 13px;
	min-width: 250px;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
}

.main-carousel .img-thumbnail .thumb-info-image img {
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
}

.main-carousel a.thumb-info {
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
}

.main-carousel a.thumb-info .thumb-info-image:before {
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
}

.main-carousel a.carousel-nav {
	width: 70px;
	position: absolute;
	top: 50%;
	left: 10px;
	bottom: 0;
	background: #F7F9FC;
	height: 70px;
	z-index: 11;
	display: block;
	filter: alpha(opacity=100);
	opacity: 100;
	padding: 0;
	border-top: 0;
	text-align: center;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
	font-size: 22px;
	color: #787F89;
	line-height: 68px;
	-moz-transform: scale(0.8);
	-webkit-transform: scale(0.8);
	transform: scale(0.8);
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

.main-carousel a.carousel-nav:hover {
	-moz-transform: scale(1);
	-webkit-transform: scale(1);
	transform: scale(1);
}

.main-carousel a.carousel-nav.next {
	left: auto;
	right: 10px;
}

.main-carousel .carousel-nav-overlay.prev {
	width: 90px;
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	background: transparent;
	height: 100%;
	z-index: 10;
}

.main-carousel .carousel-nav-overlay.next {
	width: 90px;
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	background: transparent;
	height: 100%;
	z-index: 10;
	left: auto;
	right: 0;
}

.main-carousel .carousel-clone {
	position: absolute;
	top: 120px;
	width: 100%;
	left: 0;
	-moz-transform: scale(0.6);
	-webkit-transform: scale(0.6);
	transform: scale(0.6);
	-webkit-filter: blur(3px);
}

.main-carousel .carousel-clone .owl-carousel {
	filter: alpha(opacity=0) !important;
	opacity: 0 !important;
	-moz-transition: opacity 1s;
	-o-transition: opacity 1s;
	-webkit-transition: opacity 1s;
	transition: opacity 1s;
}

.main-carousel .carousel-clone .owl-carousel.owl-carousel-init {
	filter: alpha(opacity=22) !important;
	opacity: 0.22 !important;
}

.main-carousel .carousel-clone .img-thumbnail {
	background: #EDEDED;
}

.main-carousel .carousel-clone-overlay {
	position: absolute;
	top: -18%;
	width: 100%;
	left: 0;
	right: 0;
	bottom: -100px;
	height: 120%;
	background: transparent;
}

.main-carousel-tooltip {
	background: #222831;
	position: absolute;
	top: -9999px;
	left: -9999px;
	padding: 10px;
	color: #C7CDD3;
	width: 200px;
	text-align: center;
	min-height: 35px;
	z-index: 10;
	font-size: 0.9em;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

.main-carousel-tooltip:after {
	display: block;
	content: " ";
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 10px solid #222831;
	position: absolute;
	bottom: -8px;
	left: 50%;
	margin-left: -10px;
}

/* Home Player */
.home-player {
	background: #EDEFF2;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
	width: 90px;
	height: 90px;
	margin: 0 auto;
	text-align: center;
	padding-top: 5px;
	position: relative;
	top: 45px;
}

.home-player a.home-player-icon {
	font-size: 80px;
	display: block;
	-webkit-transform: translate3d(0, 0, 0);
}

.home-player a.home-player-icon i.fa {
	-webkit-text-stroke: 0.5px;
}

/* Page 404 */
.page-not-found {
	margin: 50px 0;
}

.page-not-found h2 {
	font-size: 140px;
	font-weight: 600;
	letter-spacing: -10px;
	line-height: 140px;
}

.page-not-found h4 {
	color: #87919f;
}

.page-not-found p {
	font-size: 1.4em;
	line-height: 36px;
}

/* Responsive */
@media (max-width: 479px) {
	.page-not-found {
		margin: 0;
	}

	.page-not-found h2 {
		font-size: 100px;
		letter-spacing: 0;
		line-height: 100px;
	}
}
/* #Footer */
#footer {
	background: #2d343e;
	border-top: 4px solid #2d343e;
	font-size: 0.9em;
	margin-top: 70px;
	padding: 80px 0 0;
	position: relative;
	clear: both;
}

#footer p {
	color: #7a8089;
}

#footer a:hover {
	color: #CCC;
}

#footer form {
	filter: alpha(opacity=85);
	opacity: 0.85;
}

#footer h1, #footer h2, #footer h3, #footer h4, #footer a {
	color: #FFF !important;
}

#footer h4 {
	font-family: "Oswald",sans-serif;
	font-size: 1.8em;
	font-weight: 200;
}

#footer h5 {
	color: #CCC !important;
}

#footer ul.nav-list.primary > li a {
	border-bottom: 1px solid rgba(255, 255, 255, 0.1);
	line-height: 20px;
	padding-bottom: 11px;
}

#footer ul.nav-list.primary > li:last-child a {
	border-bottom: 0;
}

#footer ul.nav-list.primary > li a:hover {
	background-color: rgba(255, 255, 255, 0.05);
}

#footer ul.list.icons li {
	margin-bottom: 5px;
}

#footer .container .row > div {
	margin-bottom: 25px;
}

#footer .container input:focus {
	box-shadow: none;
}

#footer .alert a {
	color: #222 !important;
}

#footer .alert a:hover {
	color: #666 !important;
}

#footer .twitter .fa {
	clear: both;
	font-size: 1.5em;
	position: relative;
	top: 3px;
}

#footer .twitter .time {
	color: #999;
	display: block;
	font-size: 0.9em;
	padding-top: 3px;
	margin-bottom: 20px;
}

#footer .twitter .time:last-child {
	margin-bottom: 0;
}

#footer .twitter ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

#footer .twitter-account {
	color: #FFF;
	display: block;
	font-size: 0.9em;
	margin: -15px 0 5px;
	filter: alpha(opacity=55);
	opacity: 0.55;
}

#footer .twitter-account:hover {
	filter: alpha(opacity=100);
	opacity: 1;
}

#footer .contact {
	list-style: none;
	margin: 0;
	padding: 0;
}

#footer .contact i {
	display: block;
	float: left;
	font-size: 1.2em;
	margin: 7px 8px 10px 0;
	position: relative;
	text-align: center;
	top: -2px;
	width: 16px;
}

#footer .contact i.fa-envelope {
	font-size: 1em;
	top: 0;
}

#footer .contact p {
	margin-bottom: 10px;
}

#footer .logo {
	display: block;
}

#footer .logo.push-bottom {
	margin-bottom: 12px;
}

#footer .footer-copyright {
	background: #272d35;
	border-top: 4px solid #272d35;
	margin-top: 40px;
	padding: 30px 0 10px;
}

#footer .footer-copyright nav {
	float: right;
}

#footer .footer-copyright nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

#footer .footer-copyright nav ul li {
	border-left: 1px solid #505050;
	display: inline-block;
	line-height: 12px;
	margin: 0;
	padding: 0 8px;
}

#footer .footer-copyright nav ul li:first-child {
	border: medium none;
	padding-left: 0;
}

#footer .footer-copyright p {
	color: #5b616a;
	margin: 0;
	padding: 0;
}

#footer .phone {
	color: #FFF;
	font-size: 26px;
	font-weight: bold;
	display: block;
	padding-bottom: 15px;
	margin-top: -5px;
}

#footer .social-icons {
	clear: both;
	float: right;
	list-style: none;
	margin: 0;
	padding: 0;
}

#footer .social-icons li {
	display: inline-block;
	margin: 0;
	padding: 0;
}

#footer .social-icons li a {
	display: inline-block;
	width: 35px;
	color: #5B616A !important;
	height: 25px;
	text-align: center;
	line-height: 25px;
	font-size: 20px;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

#footer .recent-work li {
	float: left;
	width: 30%;
	margin: 10px 3% 0 0;
}

#footer .recent-work li .thumb-info {
	float: left;
	display: inline-block;
	background: transparent;
	border: 0;
}

#footer .recent-work li:hover img {
	-webkit-transform: none;
	-moz-transform: none;
	-ms-transform: none;
	-o-transform: none;
	transform: none;
	opacity: 1;
	filter: none;
	-webkit-filter: none;
}

#footer .recent-work img {
	width: 100%;
	filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
	filter: gray;
	-webkit-filter: grayscale(100%);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	width: 100%;
	opacity: 0.5;
}

#footer .view-more-recent-work {
	padding: 12px;
}

/* Responsive */
@media (max-width: 991px) {
	#footer .phone {
		font-size: 20px;
	}
}

@media (max-width: 767px) {
  /* Footer */
	#footer .phone {
		font-size: 20px;
	}
}
/* Boxed Layout */
html.boxed body {
	background-color: transparent;
	background-position: 0 0;
	background-repeat: repeat;
	padding-top: 0 !important;
}

html.boxed .body {
	background-color: #edeff2;
	border-bottom: 5px solid #2d343e;
	border-radius: 5px;
	border-top: 5px solid #CCC;
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.15);
	margin: 25px auto;
	max-width: 1200px;
	height: auto;
}

html.boxed #header {
	position: relative;
}

html.boxed body.sticky-menu-active #header {
	left: 0;
	position: fixed;
}

html.boxed section.page-top {
	margin-top: -3px;
}

html.boxed.no-page-top body > .body {
	padding-top: 0 !important;
}

html.boxed .google-map {
	margin-top: -2px;
}

html.boxed .home-top {
	margin-top: -5px;
}

html.boxed .shop, html.boxed .blog-posts {
	margin-top: 45px;
}

html.boxed .sort-source-wrapper {
	margin-top: -10px;
}

html.boxed.no-page-top .portfolio-title {
	margin-top: 35px;
}

/* Responsive */
@media (max-width: 991px) {
	html.boxed .body {
		margin: 0 auto;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		border-radius: 0;
	}
}

@media (max-width: 767px) {
  /* Boxed */
	html.boxed {
		background: none !important;
	}
}


h3,
h4,
h5 {
	color: #0088cc;
}

a {
	color: <?php APRColors::get($user, 'link_color', true); ?>;
}

a:hover {
	color: <?php APRColors::get($user, 'link_hover_color', true); ?>;
}

a:active {
	color: #0077b3;
}

.alternative-font {
	color: #0088cc;
}

p.drop-caps:first-child:first-letter {
	color: #0088cc;
}

p.drop-caps.secundary:first-child:first-letter {
	background-color: #0088cc;
}

ul.nav-pills > li.active > a {
	background-color: #0088cc;
}

ul.nav-pills > li.active > a:hover,
ul.nav-pills > li.active > a:focus {
	background-color: #0088cc;
}

.sort-source-wrapper .nav > li.active > a {
	color: #0088cc;
}

.sort-source-wrapper .nav > li.active > a:hover,
.sort-source-wrapper .nav > li.active > a:focus {
	color: #0088cc;
}
/* Labels */
.label-primary {
	background-color: #0088cc;
}

.pagination > li > a,
.pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
	color: #0088cc;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
	background-color: #0088cc;
	border-color: #0088cc;
}

body.dark .pagination > li > a,
body.dark .pagination > li > span,
body.dark .pagination > li > a:hover,
body.dark .pagination > li > span:hover,
body.dark .pagination > li > a:focus,
body.dark .pagination > li > span:focus {
	color: #0088cc;
}

body.dark .pagination > .active > a,
body.dark .pagination > .active > span,
body.dark .pagination > .active > a:hover,
body.dark .pagination > .active > span:hover,
body.dark .pagination > .active > a:focus,
body.dark .pagination > .active > span:focus {
	background-color: #0088cc;
	border-color: #0088cc;
}

.btn-default,
.btn-default.btn-lg,
.btn-default.btn-sm,
.btn-default.btn-xs {
	border-color: #0088cc;
	background-color: transparent;
	color: #0088cc;
}

.btn-default:hover,
.btn-default.btn-lg:hover,
.btn-default.btn-sm:hover,
.btn-default.btn-xs:hover {
	border-color: #0099e6;
	background-color: rgba(13, 13, 13, 0);
	color: #0099e6;
}

.btn-default:focus,
.btn-default.btn-lg:focus,
.btn-default.btn-sm:focus,
.btn-default.btn-xs:focus {
	border-color: #0077b3;
	background-color: rgba(0, 0, 0, 0);
	color: #0077b3;
}

.btn-primary {
	border-color: #006699;
	background-color: #0088cc;
}

.btn-primary:hover {
	border-color: #0074ad;
	background-color: #008fd6;
}

.btn-primary:focus {
	border-color: #007ab8;
	background-color: #007ab8;
}

.btn-success {
	border-color: #87c940;
	background-color: #a0d468;
}

.btn-success:hover {
	border-color: #91cd50;
	background-color: #a5d670;
}

.btn-success:focus {
	border-color: #96cf58;
	background-color: #96cf58;
}

.btn-info {
	border-color: #22b1e3;
	background-color: #4fc1e9;
}

.btn-info:hover {
	border-color: #34b7e6;
	background-color: #58c4ea;
}

.btn-info:focus {
	border-color: #3dbbe7;
	background-color: #3dbbe7;
}

.btn-warning {
	border-color: #f6b81c;
	background-color: #f8c74d;
}

.btn-warning:hover {
	border-color: #f7be30;
	background-color: #f8ca57;
}

.btn-warning:focus {
	border-color: #f7c139;
	background-color: #f7c139;
}

.btn-danger {
	border-color: #d61629;
	background-color: #ea3547;
}

.btn-danger:hover {
	border-color: #e7192e;
	background-color: #eb3e4f;
}

.btn-danger:focus {
	border-color: #e82336;
}

.progress-bar-primary {
	background-color: #0088cc;
}

section.highlight {
	background-color: #0088cc !important;
	border-color: #0077b3 !important;
}

section.toggle label {
	color: #0088cc;
}

section.toggle.active > label {
	background-color: #0088cc;
	border-color: #0088cc;
	color: #FFF;
}

section.page-top .page-top-info ul.breadcrumb {
	background-color: #0088cc !important;
}

section.page-top.basic .page-top-info a {
	color: #0088cc !important;
}

.feature-box .feature-box-icon {
	background-color: #0088cc;
}

.featured-box-primary i.icon-featured,
.featured-box-primary i.image-icon {
	background-color: #0088cc;
}

.featured-box-primary i.icon-featured:after {
	border-color: #0088cc;
}

.featured-box-primary h4 {
	color: #0088cc;
}

.featured-box-primary .box-content {
	border-top-color: #0088cc;
}

.featured-box-secundary i.icon-featured,
.featured-box-secundary i.image-icon {
	background-color: #48cfad;
}

.featured-box-secundary i.icon-featured:after {
	border-color: #48cfad;
}

.featured-box-secundary h4 {
	color: #48cfad;
}

.featured-box-secundary .box-content {
	border-top-color: #48cfad;
}

.feature-box.secundary .feature-box-icon i.fa {
	color: #0088cc;
}

.featured-boxes.tertiary .featured-box-secundary i.icon-featured {
	border: 2px solid #48cfad;
	color: #48cfad;
}

.featured-box-tertiary i.icon-featured,
.featured-box-tertiary i.image-icon {
	background-color: #4fc1e9;
}

.featured-box-tertiary i.icon-featured:after {
	border-color: #4fc1e9;
}

.featured-box-tertiary h4 {
	color: #4fc1e9;
}

.featured-box-tertiary .box-content {
	border-top-color: #4fc1e9;
}

.featured-boxes.tertiary .featured-box-tertiary i.icon-featured {
	border: 2px solid #4fc1e9;
	color: #4fc1e9;
}

.featured-boxes.tertiary .featured-box-primary i.icon-featured {
	border: 2px solid #0088cc;
	color: #0088cc;
}

.featured-box-quartenary i.icon-featured,
.featured-box-quartenary i.image-icon {
	background-color: #ac92ec;
}

.featured-box-quartenary i.icon-featured:after {
	border-color: #ac92ec;
}

.featured-box-quartenary h4 {
	color: #ac92ec;
}

.featured-box-quartenary .box-content {
	border-top-color: #ac92ec;
}

.featured-boxes.tertiary .featured-box-quartenary i.icon-featured {
	border: 2px solid #ac92ec;
	color: #ac92ec;
}

.thumb-info .thumb-info-type {
	background-color: #0088cc;
}

.thumb-info .thumb-info-action-icon {
	background-color: #0088cc;
}

.thumb-info-social-icons a {
	background-color: #0088cc;
}

.thumb-info.secundary .thumb-info-title .thumb-info-type {
	background-color: #0088cc;
}

.thumbnail .zoom {
	background-color: #0088cc;
}

.img-thumbnail .zoom {
	background-color: #0088cc;
}

.inverted {
	background-color: #0088cc;
}

.tabs ul.nav-tabs a,
.tabs ul.nav-tabs a:hover {
	color: #0088cc;
}

.tabs ul.nav-tabs a:hover,
.tabs ul.nav-tabs a:focus {
	border-top-color: #0088cc;
}

.tabs ul.nav-tabs li.active a {
	border-top-color: #0088cc;
	color: #0088cc;
}

.tabs ul.nav-tabs.nav-justified a:hover,
.tabs ul.nav-tabs.nav-justified a:focus {
	border-top-color: #0088cc;
}

.tabs.tabs-bottom ul.nav-tabs li a:hover,
.tabs.tabs-bottom ul.nav-tabs li.active a,
.tabs.tabs-bottom ul.nav-tabs li.active a:hover,
.tabs.tabs-bottom ul.nav-tabs li.active a:focus {
	border-bottom-color: #0088cc;
}

.tabs.tabs-vertical.tabs-left ul.nav-tabs li a:hover,
.tabs.tabs-vertical.tabs-left ul.nav-tabs li.active a,
.tabs.tabs-vertical.tabs-left ul.nav-tabs li.active a:hover,
.tabs.tabs-vertical.tabs-left ul.nav-tabs li.active a:focus {
	border-left-color: #0088cc;
}

.tabs.tabs-vertical.tabs-right ul.nav-tabs li a:hover,
.tabs.tabs-vertical.tabs-right ul.nav-tabs li.active a,
.tabs.tabs-vertical.tabs-right ul.nav-tabs li.active a:hover,
.tabs.tabs-vertical.tabs-right ul.nav-tabs li.active a:focus {
	border-right-color: #0088cc;
}

ul.list.fas li i {
	color: #0088cc;
}

i.icon-featured {
	background-color: #0088cc;
}

.parallax blockquote i.fa-quote-left {
	color: #0088cc;
}

section.video blockquote i.fa-quote-left {
	color: #0088cc;
}

.icon-rounded {
	background-color: #0088cc;
}

ul.list.icons li i {
	color: #0088cc;
}

.panel-group .panel-heading a {
	color: #0088cc;
}

.panel-group.secundary .panel-heading {
	background-color: #0088cc !important;
}

#header nav ul.nav-main li.active > a {
	color: #0088cc !important;
}

#header .header-top.color {
	background-color: #0088cc !important;
}

.pricing-table .most-popular {
	border-color: #0088cc;
}

.pricing-table .most-popular h3 {
	background-color: #0088cc;
}

section.timeline .timeline-box.left:before,
section.timeline .timeline-box.right:before {
	background: #0088cc;
	box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px #0088cc;
}

.divider.colored .fa {
	color: #0088cc;
}

.recent-posts .date .month,
article.post .post-date .month {
	background-color: #0088cc;
}

.recent-posts .date .day,
article.post .post-date .day {
	color: #0088cc;
}

.slider .tp-bannertimer {
	background-color: #0088cc;
}

.home-intro p em {
	color: #00aaff;
}

.home-concept strong {
	color: #0088cc;
}

.text-bg {
	background-color: #0088cc;
}

.slider-overlay {
	background-color: #0088cc;
}

.shop ul.products li.product .onsale {
	background-color: #0088cc;
	border-bottom-color: #006da3;
}

.shop .star-rating span,
.shop .cart-totals tr.total .amount {
	color: #0088cc;
}

#footer .footer-ribbon {
	background: #0088cc;
}

#footer .footer-ribbon:before {
	border-right-color: #005580;
}

html.boxed .body {
	border-top-color: #0088cc;
}

/* Headings */
h1, h2, h3, h4, h5, h6 {
	color: #2d343e;
	font-weight: 200;
	letter-spacing: -1px;
	margin: 0;
}

h1 {
	font-size: 3.2em;
	line-height: 44px;
	margin: 0 0 44px 0;
}

h2 {
	font-size: 2.6em;
	font-weight: 300;
	line-height: 42px;
	margin: 0 0 32px 0;
}

h3 {
	color: #CCC;
	font-size: 1.8em;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 24px;
	margin-bottom: 33px;
	text-transform: uppercase;
}

h4 {
	color: #CCC;
	font-size: 1.4em;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 27px;
	margin: 0 0 14px 0;
}

h5 {
	color: #CCC;
	font-size: 1em;
	font-weight: 600;
	letter-spacing: normal;
	line-height: 18px;
	margin: 0 0 14px 0;
	text-transform: uppercase;
}

h6 {
	color: #333;
	font-size: 1em;
	font-weight: 400;
	letter-spacing: normal;
	line-height: 18px;
	margin: 0 0 14px 0;
}

h1.big {
	font-size: 4.2em;
	line-height: 54px;
}

h1.short {
	margin-bottom: 15px;
}

h2.short {
	margin-bottom: 15px;
}

h2.lead {
	font-size: 2.8em;
}

h3.short,
h4.short,
h5.short,
h6.short {
	margin-bottom: 9px;
}

h1.shorter,
h2.shorter,
h3.shorter,
h4.shorter,
h5.shorter,
h6.shorter {
	margin-bottom: 0;
}

h1.tall,
h2.tall,
h3.tall,
h4.tall,
h5.tall,
h6.tall {
	margin-bottom: 33px;
}

h1.taller,
h2.taller,
h3.taller,
h4.taller,
h5.taller,
h6.taller {
	margin-bottom: 44px;
}

h1.spaced,
h2.spaced,
h3.spaced,
h4.spaced,
h5.spaced,
h6.spaced {
	margin-top: 22px;
}

h1.more-spaced,
h2.more-spaced,
h3.more-spaced,
h4.more-spaced,
h5.more-spaced,
h6.more-spaced {
	margin-top: 44px;
}

h1.dark,
h2.dark,
h3.dark,
h4.dark,
h5.dark {
	color: #2d343e;
}

h1.white,
h2.white,
h3.white,
h4.white,
h5.white,
h6.white {
	color: #FFF;
}

h1.text-shadow,
h2.text-shadow,
h3.text-shadow,
h4.text-shadow,
h5.text-shadow,
h6.text-shadow {
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
}

h2 .inverted {
	min-height: 60px;
}

/* Modal Titles */
.modal-header h3 {
	color: #333;
	text-transform: none;
}

/* Responsive */
@media (max-width: 479px) {
	h2 {
		line-height: 40px;
	}
}

@media (max-width: 767px) {
	h1.big {
		font-size: 3.2em;
		line-height: 42px;
	}
}
/* Blockquote */
blockquote {
	font-size: 1em;
}

/* Paragraphs */
p {
	color: <?php APRColors::get($user, 'text_color', true); ?>;
	line-height: 24px;
	margin: 0 0 20px;
}

p.featured {
	font-size: 1.6em;
	line-height: 1.5em;
}

p.short {
	margin-bottom: 0;
}

p.tall {
	margin-bottom: 20px;
}

p.taller {
	margin-bottom: 40px;
}

p .alternative-font {
	display: inline-block;
	margin-bottom: -6px;
	margin-top: -20px;
	position: relative;
	top: 0px;
	font-size: 1.1em;
}

a, a:hover, a:focus {
	color: #CCC;
}

/* Labels */
.label-primary {
	background-color: #CCC;
}

.label-dark,
.label-dark:hover {
	background: #111;
	text-decoration: none;
	font-weight: normal;
}

/* Drop Caps */
p.drop-caps:first-child:first-letter {
	float: left;
	font-size: 75px;
	line-height: 60px;
	padding: 4px;
	margin-right: 5px;
	margin-top: 5px;
	font-family: Georgia;
}

p.drop-caps.secundary:first-child:first-letter {
	background-color: #CCC;
	color: #FFF;
	padding: 6px;
	margin-right: 5px;
	border-radius: 4px;
}

/* Alternative Font Style */
.alternative-font {
	color: #CCC;
	font-family: Georgia, sans-serif;
	font-size: 1.6em;
	font-style: italic;
}

.alternative-font.default {
	color: #000 !important;
}

/* Text Background */
body .text-bg-grey {
	background: #989898;
}

body .text-bg-white {
	background: #FFF;
}

body .text-bg-dark {
	background: #2D343E;
}

/* Navs */
ul.nav-list.primary > li {
	margin: 0;
	padding: 0;
}

ul.nav-list.primary > li a {
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
	border-bottom: 1px solid #EDEDDE;
	padding: 8px 5px 8px 2px;
}

ul.nav-list.primary > li:hover a, ul.nav-list.primary > li:focus a {
	background-color: #f6f6f6;
	padding-left: 12px;
}

ul.nav-pills > li.active > a {
	background-color: #f6f6f6;
}

/* Buttons */
.btn {
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
	border: 0;
	border-bottom: 3px solid #CCC;
	padding: 8px 18px;
	outline: 0;
}

.btn:focus {
	outline: 0;
}

.btn:active,
.btn.active {
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.btn-lg {
	border-bottom-width: 4px;
	padding: 12px 32px;
}

.btn-sm {
	border-bottom-width: 2px;
	padding: 6px 16px;
}

.btn-xs {
	border-bottom-width: 2px;
	padding: 3px 13px;
}

.btn-default {
	background: transparent;
	border: 2px solid #CCC;
}

.btn-default.btn-lg {
	border: 3px solid #CCC;
}

.btn-default.btn-sm {
	border: 1px solid #CCC;
}

.btn-default.btn-xs {
	border: 1px solid #CCC;
}

.btn-primary.disabled,
.btn-primary[disabled] {
	background-image: none;
}

.btn-default.disabled,
.btn-default[disabled] {
	background: transparent;
	color: #999;
}

.btn-icon i {
	margin-right: 10px;
}

.btn-icon-right i {
	margin-right: 0;
	margin-left: 10px;
}

.input-group-btn .btn {
	padding: 12px 18px 11px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active {
	background-color: #CCC;
	border-color: #CCC;
}

.btn-primary[disabled] {
	border-color: #CCC !important;
	background-color: #CCC;
	background-image: none;
}

.btn-icon i {
	margin-right: 10px;
}

.btn-icon-right i {
	margin-right: 0;
	margin-left: 10px;
}

/* Forms */
form label {
	font-weight: normal;
}

textarea {
	resize: vertical;
}

select {
	border: 1px solid #E5E7E9;
	border-radius: 6px;
	outline: none;
}

.label {
	font-weight: normal;
}

.form-group:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}

.form-control {
	border: 2px solid #e5e7e9;
	border-radius: 6px;
	box-shadow: none;
}

.form-control:focus {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	border-color: #CCC;
}

/* Forms Validations */
label.valid {
	display: inline-block;
	text-indent: -9999px;
}

label.error {
	color: #C10000;
	font-size: 0.9em;
	margin-top: -5px;
	padding: 0;
}

label.error#captcha-error {
	margin-top: 15px;
}

/* Captcha */
.captcha {
	clear: both;
	overflow: hidden;
	background: #F2F2F2;
	text-align: center;
	margin-bottom: 20px;
	max-width: 160px;
	height: 78px;
}

.captcha input {
	border: 0;
}

.captcha-input {
	position: relative;
	top: 15px;
	font-size: 14px;
}

.captcha-image {
	float: left;
	position: relative;
	top: -6px;
	left: -13px;
}

/* Icons */
.featured-icon {
	background: #CCC;
	border-radius: 35px;
	color: #FFF;
	display: inline-block;
	height: 35px;
	line-height: 35px;
	margin-right: 10px;
	position: relative;
	text-align: center;
	top: 5px;
	width: 35px;
}

.featured-icon i {
	color: #FFF;
	font-size: 0.9em;
	font-weight: normal;
}

/* Icons List */
ul.icons {
	list-style: none;
}

ul.icons [class^="fa-"] {
	margin-right: 5px;
}

/* Font Awesome List */
.fontawesome-icon-list [class*="col-md-"] {
	margin-bottom: 9px;
}

.fontawesome-icon-list > section {
	margin-top: 25px;
}

/* Icons Rounded */
.icon-rounded {
	border-radius: 25px;
	display: inline-block;
	height: 25px;
	line-height: 23px;
	text-align: center;
	width: 25px;
	border-bottom: 2px solid #FFF;
	color: transparent;
	margin: 0 3px 5px 0;
}

.icon-rounded .fa {
	color: #FFF;
	font-size: 0.9em;
	font-weight: normal;
}

/* Thumbnails */
.thumbnail {
	border: 0;
	padding: 0;
}

.thumbnail img {
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
}

.img-thumbnail {
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	padding: 0;
	position: relative;
	border: 0;
	border-bottom: 3px solid #E3E4E8;
}

.img-thumbnail .zoom {
	background: #CCC;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border-radius: 100%;
	bottom: 8px;
	color: #FFF;
	display: block;
	height: 30px;
	padding: 6px;
	position: absolute;
	right: 8px;
	text-align: center;
	width: 30px;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

.img-thumbnail .zoom i {
	font-size: 14px;
	left: 0;
	position: relative;
	top: -1px;
}

.img-thumbnail.portfolio-item {
	background: transparent;
	padding: 0;
	border: 0;
	margin: 0;
	border-radius: 0;
}

/* Thumbnail Gallery */
ul.thumbnail-gallery {
	list-style: none;
	margin: 10px 0;
	padding: 0;
}

ul.thumbnail-gallery li {
	display: inline-block;
	margin: 10px 10px 0 0;
	padding: 0;
}

/* Responsive */
@media (max-width: 991px) {
	.thumbnail {
		border: 0;
		text-align: center;
	}
}
/* List */
ul.list li {
	margin-bottom: 13px;
}

ul.list.icons li i {
	color: #CCC;
	margin-right: 5px;
}

ul.list.pull-left li {
	text-align: left;
}

/* Sitemap */
ul.sitemap > li > a {
	font-weight: bold;
}

ul.sitemap.list li {
	margin: 0 0 3px 0;
}

ul.sitemap.list ul {
	margin-bottom: 5px;
	margin-top: 5px;
}

/* Accordion */
.panel-group .panel {
	padding: 1px;
	border: 0;
}

.panel-group .panel-heading {
	padding: 0;
	margin: 3px;
	border-radius: 3px;
}

.panel-group .panel-heading a {
	display: block;
	padding: 10px 15px;
}

.panel-group .panel-heading a:hover, .panel-group .panel-heading a:focus {
	text-decoration: none;
}

.panel-group .panel-heading a [class^="icon-"] {
	margin-right: 4px;
	position: relative;
	top: 1px;
}

.panel-group.secundary .panel-heading a {
	color: #FFF;
}

/* Tabs */
.tabs {
	border-radius: 4px;
	margin-bottom: 35px;
}

.nav-tabs {
	margin: 0;
	font-size: 0;
	border-bottom-color: #EEE;
}

.nav-tabs li {
	display: inline-block;
	float: none;
}

.nav-tabs li:last-child a {
	margin-right: 0;
}

.nav-tabs li a {
	border-radius: 5px 5px 0 0;
	font-size: 14px;
	margin-right: 1px;
	padding: 15px 25px;
}

.nav-tabs li a, .nav-tabs li a:hover {
	background: #f5f7f7;
	border-bottom: none;
	border-left: 1px solid #EEE;
	border-right: 1px solid #EEE;
	border-top: 3px solid #EEE;
	color: #CCC;
}

.nav-tabs li a:hover {
	border-bottom-color: transparent;
	border-top: 3px solid #CCC;
}

.nav-tabs li a:active, .nav-tabs li a:focus {
	border-bottom: 0;
}

.nav-tabs li.active a,
.nav-tabs li.active a:hover,
.nav-tabs li.active a:focus {
	background: #FFF;
	border-left-color: #EEE;
	border-right-color: #EEE;
	border-top: 3px solid #CCC;
	color: #CCC;
}

.tab-content {
	border-radius: 0 0 4px 4px;
	background-color: #FFF;
	border: 1px solid #EEE;
	border-top: 0;
	padding: 15px;
}

/* Right Aligned */
.nav-tabs.nav-right {
	text-align: right;
}

/* Bottom Tabs */
.tabs.tabs-bottom .tab-content {
	border-radius: 4px 4px 0 0;
	border-bottom: 0;
	border-top: 1px solid #EEE;
}

.tabs.tabs-bottom .nav-tabs {
	border-bottom: none;
	border-top: 1px solid #EEE;
}

.tabs.tabs-bottom .nav-tabs li {
	margin-bottom: 0;
	margin-top: -1px;
}

.tabs.tabs-bottom .nav-tabs li:last-child a {
	margin-right: 0;
}

.tabs.tabs-bottom .nav-tabs li a {
	border-radius: 0 0 5px 5px;
	font-size: 14px;
	margin-right: 1px;
}

.tabs.tabs-bottom .nav-tabs li a, .tabs.tabs-bottom .nav-tabs li a:hover {
	border-bottom: 3px solid #EEE;
	border-top: 1px solid #EEE;
}

.tabs.tabs-bottom .nav-tabs li a:hover {
	border-bottom: 3px solid #CCC;
	border-top: 1px solid #EEE;
}

.tabs.tabs-bottom .nav-tabs li.active a,
.tabs.tabs-bottom .nav-tabs li.active a:hover,
.tabs.tabs-bottom .nav-tabs li.active a:focus {
	border-bottom: 3px solid #CCC;
	border-top-color: transparent;
}

/* Vertical */
.tabs-vertical {
	display: table;
	width: 100%;
	border-top: 1px solid #EEE;
}

.tabs-vertical .tab-content {
	display: table-cell;
	vertical-align: top;
}

.tabs-vertical .nav-tabs {
	border-bottom: none;
	display: table-cell;
	height: 100%;
	float: none;
	padding: 0;
	vertical-align: top;
}

.tabs-vertical .nav-tabs > li {
	display: block;
}

.tabs-vertical .nav-tabs > li a {
	border-radius: 0;
	display: block;
	padding-top: 10px;
}

.tabs-vertical .nav-tabs > li a, .tabs-vertical .nav-tabs > li a:hover, .tabs-vertical .nav-tabs > li a:focus {
	border-bottom: none;
	border-top: none;
}

.tabs-vertical .nav-tabs > li.active a,
.tabs-vertical .nav-tabs > li.active a:hover, .tabs-vertical .nav-tabs > li.active:focus {
	border-top: none;
}

/* Vertical - Left Side */
.tabs-left .tab-content {
	border-radius: 0 5px 5px 5px;
	border-left: none;
}

.tabs-left .nav-tabs > li {
	margin-right: -1px;
}

.tabs-left .nav-tabs > li:first-child a {
	border-radius: 5px 0 0 0;
}

.tabs-left .nav-tabs > li:last-child a {
	border-radius: 0 0 0 5px;
	border-bottom: 1px solid #eee;
}

.tabs-left .nav-tabs > li a {
	border-right: 1px solid #EEE;
	border-left: 3px solid #EEE;
	margin-right: 1px;
	margin-left: -3px;
}

.tabs-left .nav-tabs > li a:hover {
	border-left-color: #CCC;
}

.tabs-left .nav-tabs > li.active a,
.tabs-left .nav-tabs > li.active a:hover,
.tabs-left .nav-tabs > li.active a:focus {
	border-left: 3px solid #CCC;
	border-right-color: #FFF;
}

/* Vertical - Right Side */
.tabs-right .tab-content {
	border-radius: 5px 0 5px 5px;
	border-right: none;
}

.tabs-right .nav-tabs > li {
	margin-left: -1px;
}

.tabs-right .nav-tabs > li:first-child a {
	border-radius: 0 5px 0 0;
}

.tabs-right .nav-tabs > li:last-child a {
	border-radius: 0 0 5px 0;
	border-bottom: 1px solid #eee;
}

.tabs-right .nav-tabs > li a {
	border-right: 3px solid #EEE;
	border-left: 1px solid #EEE;
	margin-right: 1px;
	margin-left: 1px;
}

.tabs-right .nav-tabs > li a:hover {
	border-right-color: #CCC;
}

.tabs-right .nav-tabs > li.active a,
.tabs-right .nav-tabs > li.active a:hover,
.tabs-right .nav-tabs > li.active a:focus {
	border-right: 3px solid #CCC;
	border-left: 1px solid #FFF;
}

/* Justified */
.nav-tabs.nav-justified {
	margin-bottom: -1px;
}

.nav-tabs.nav-justified li {
	margin-bottom: 0;
}

.nav-tabs.nav-justified li:first-child a,
.nav-tabs.nav-justified li:first-child a:hover {
	border-radius: 5px 0 0 0;
}

.nav-tabs.nav-justified li:last-child a,
.nav-tabs.nav-justified li:last-child a:hover {
	border-radius: 0 5px 0 0;
}

.nav-tabs.nav-justified li a {
	border-bottom: 1px solid #DDD;
	border-radius: 0;
	margin-right: 0;
}

.nav-tabs.nav-justified li a:hover, .nav-tabs.nav-justified li a:focus {
	border-bottom: 1px solid #DDD;
}

.nav-tabs.nav-justified li.active a,
.nav-tabs.nav-justified li.active a:hover,
.nav-tabs.nav-justified li.active a:focus {
	background: #FFF;
	border-left-color: #EEE;
	border-right-color: #EEE;
	border-top-width: 3px;
}

.nav-tabs.nav-justified li.active a {
	border-bottom: 1px solid #FFF;
}

.nav-tabs.nav-justified li.active a, .nav-tabs.nav-justified li.active a:hover, .nav-tabs.nav-justified li.active a:focus {
	border-top-width: 3px;
}

.nav-tabs.nav-justified li.active a:hover {
	border-bottom: 1px solid #FFF;
}

/* Bottom Tabs with Justified Nav */
.tabs.tabs-bottom .nav.nav-tabs.nav-justified {
	border-top: none;
}

.tabs.tabs-bottom .nav.nav-tabs.nav-justified li a {
	margin-right: 0;
	border-top-color: transparent;
}

.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:first-child a {
	border-radius: 0 0 0 5px;
}

.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a {
	margin-right: 0;
	border-radius: 0 0 5px 0;
}

.tabs.tabs-bottom .nav.nav-tabs.nav-justified li.active a,
.tabs.tabs-bottom .nav.nav-tabs.nav-justified li.active a:hover,
.tabs.tabs-bottom .nav.nav-tabs.nav-justified li.active a:focus {
	border-top-color: transparent;
}

/* Responsive */
@media (max-width: 479px) {
	.tabs .nav.nav-tabs.nav-justified li {
		display: block;
		margin-bottom: -5px;
	}

	.tabs .nav.nav-tabs.nav-justified li a {
		border-top-width: 3px !important;
		border-bottom-width: 0 !important;
	}

	.tabs .nav.nav-tabs.nav-justified li:first-child a, .tabs .nav.nav-tabs.nav-justified li:first-child a:hover {
		border-radius: 5px 5px 0 0;
	}

	.tabs .nav.nav-tabs.nav-justified li:last-child a, .tabs .nav.nav-tabs.nav-justified li:last-child a:hover {
		border-radius: 0;
	}

	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li {
		margin-bottom: 0;
		margin-top: -5px;
	}

	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li a {
		border-bottom-width: 3px !important;
		border-top-width: 0 !important;
	}

	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:first-child a, .tabs.tabs-bottom .nav.nav-tabs.nav-justified li:first-child a:hover {
		border-radius: 0;
	}

	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a, .tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a:hover {
		border-radius: 0 0 5px 5px;
	}
}
/* Toggles */
.toggle {
	margin: 10px 0 0;
	position: relative;
	clear: both;
}

.toggle > input {
	cursor: pointer;
	filter: alpha(opacity=0);
	height: 45px;
	margin: 0;
	opacity: 0;
	position: absolute;
	width: 100%;
	z-index: 2;
}

.toggle > label {
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
	background: #fff;
	border-radius: 5px;
	color: #CCC;
	display: block;
	font-size: 1.1em;
	min-height: 20px;
	padding: 12px 20px 12px 10px;
	position: relative;
	cursor: pointer;
	font-weight: 400;
}

.toggle > label:-moz-selection {
	background: none;
}

.toggle > label i.fa-minus {
	display: none;
}

.toggle > label i.fa-plus {
	display: inline;
}

.toggle > label:selection {
	background: none;
}

.toggle > label:before {
	border: 6px solid transparent;
	border-left-color: transparent;
	content: '';
	margin-top: -6px;
	position: absolute;
	right: 4px;
	top: 50%;
}

.toggle > label:hover {
	background: #f5f5f5;
}

.toggle > label + p {
	color: #999;
	display: block;
	overflow: hidden;
	padding-left: 30px;
	text-overflow: ellipsis;
	white-space: nowrap;
	height: 25px;
}

.toggle > label i {
	font-size: 0.7em;
	margin-right: 8px;
	position: relative;
	top: -1px;
}

.toggle > .toggle-content {
	display: none;
}

.toggle > .toggle-content > p {
	margin-bottom: 0;
	padding: 10px 0;
}

.toggle.active i.fa-minus {
	display: inline;
}

.toggle.active i.fa-plus {
	display: none;
}

.toggle.active > label {
	background: #F4F4F4;
	border-color: #CCC;
}

.toggle.active > label:before {
	border: 6px solid transparent;
	border-top-color: #FFF;
	margin-top: -3px;
	right: 10px;
}

.toggle.active > p {
	white-space: normal;
}

.toggle > p.preview-active {
	height: auto;
	white-space: normal;
}

/* Owl Carousel */
.owl-carousel {
	position: relative;
	z-index: 1;
}

.owl-carousel .owl-wrapper-outer {
	border-radius: 4px;
}

.owl-carousel .thumbnail {
	max-width: 99%;
}

.owl-carousel .img-responsive {
	display: inline-block;
}

.owl-carousel-spaced {
	margin-left: -5px;
}

.owl-carousel-spaced .owl-item > div {
	margin: 5px;
}

.owl-theme .owl-controls {
	margin-top: 20px;
}

.owl-theme .owl-controls .owl-buttons div {
	border-radius: 4px;
	border-bottom: 2px solid transparent;
	filter: alpha(opacity=100);
	opacity: 1;
	padding: 1px 9px;
	margin: 2px;
}

/* Owl Carousel - Highlight */
.highlight .owl-theme .owl-controls .owl-page span {
	background-color: #FFF;
}

/* Responsive */
@media (max-width: 479px) {
	.owl-carousel-spaced {
		margin-left: 0;
	}
}
/* Video */
section.video {
	-webkit-transform: translate3d(0, 0, 0);
	background-position: 50% 50%;
	background-repeat: no-repeat;
	margin: 70px 0;
	padding: 50px 0;
	position: relative;
	overflow: hidden;
	width: 100%;
}

section.video blockquote {
	border: 0;
	padding: 0 10%;
}

section.video blockquote i.fa-quote-left {
	font-size: 34px;
	position: relative;
	left: -5px;
}

section.video blockquote p {
	color: #3f3f3f;
	font-family: "Oswald",sans-serif;
	font-size: 24px;
	line-height: 30px;
	font-weight: 300;
}

section.video blockquote span {
	color: #555;
	font-size: 16px;
	font-weight: 300;
	left: -5px;
	line-height: 20px;
	position: relative;
}

section.video .container {
	position: relative;
	z-index: 3;
}

section.video .video-overlay {
	background: transparent url(../img/video-overlay.png) repeat 0 0;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	z-index: 2;
}

html.boxed section.video > div:first-child {
	z-index: 0 !important;
}

html.boxed section.video > div:first-child video {
	z-index: 0 !important;
}

/* Popup */
.popup-inline-content {
	background: none repeat scroll 0 0 #FFF;
	margin: 40px auto;
	max-width: 1170px;
	padding: 20px 30px;
	position: relative;
	text-align: left;
	display: none;
}

/* Magnific Popup */
.mfp-wrap .popup-inline-content {
	display: block;
}

/* Miscellaneous */
body a {
	outline: none !important;
}

li {
	line-height: 24px;
}

.center {
	text-align: center;
}

.push-bottom {
	margin-bottom: 35px;
}

.push-top {
	margin-top: 35px;
}

.bold {
	font-weight: bold;
}

.inverted {
	color: #FFF;
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
}

.white {
	color: #fff;
}

/* Clearfix */
.clearfix {
	display: inline-block;
}

.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}

html[xmlns] .clearfix {
	display: block;
}

* html .clearfix {
	height: 1%;
}

/* Pagination */
.pagination > li > a,
.pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
	color: #CCC;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
	background-color: #CCC;
	border-color: #CCC;
}

/* Divider Line */
hr {
	background: #dddee2;
	border: 0;
	height: 1px;
	margin: 22px 0 22px 0;
}

hr.short {
	margin: 11px 0 11px 0;
}

hr.tall {
	margin: 44px 0 44px 0;
}

hr.taller {
	margin: 66px 0 66px 0;
}

hr.light {
	background-image: -webkit-linear-gradient(left, transparent, rgba(255, 255, 255, 0.2), transparent);
	background-image: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
}

hr.invisible {
	background: none;
}

/* Read More */
.read-more,
.learn-more {
	display: inline-block;
	white-space: nowrap;
}

/* Offset Anchor */
.offset-anchor {
	display: block;
	position: relative;
	visibility: hidden;
	top: -100px;
}

/* Responsive */
@media (max-width: 991px) {
	.offset-anchor {
		top: 0;
	}
}
/* Show Grid */
.show-grid [class*="col-md-"] .show-grid-block {
	background-color: #FFF;
	line-height: 40px;
	min-height: 40px;
	text-align: center;
	display: block;
}

/* Font Awesome */
.fontawesome-icon-list [class*="col-md-"] {
	margin-bottom: 9px;
}

.fontawesome-icon-list i {
	font-size: 1.3em;
	margin-right: 5px;
	display: inline-block;
	width: 30px;
	text-align: center;
	position: relative;
	top: 2px;
}

/* Divider */
.divider {
	border: 0;
	height: 1px;
	margin: 44px 0;
	background: #DDDEE2;
	text-align: center;
	position: relative;
	clear: both;
}

.divider.tall {
	margin: 66px 0 66px 0;
}

.divider .fa {
	text-align: center;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	background: #EDEFF2;
	border-radius: 50px;
	color: #BBB;
	display: inline-block;
	height: 50px;
	line-height: 50px;
	position: absolute;
	text-align: center;
	width: 50px;
	font-size: 20px;
	margin: 0 auto 0 -25px;
	top: -25px;
	left: 50%;
}

.divider.dark .fa {
	color: #2D343E;
}

.divider.white .fa {
	color: #FFF;
}

/* Sort Source Wrapper */
.sort-source-wrapper {
	background: #2d343e;
	margin: -53px 0 0;
	padding: 14px 0 12px;
	position: relative;
	z-index: 1000;
}

.sort-source-wrapper .nav {
	margin: 10px 0 0;
}

.sort-source-wrapper .nav > li > a {
	color: #FFF;
	background: transparent;
}

.sort-source-wrapper .nav > li > a:hover, .sort-source-wrapper .nav > li > a:focus {
	background: transparent;
}

.sort-source-wrapper .nav > li.active > a {
	background: transparent;
}

.sort-source-wrapper .nav > li.active > a:hover, .sort-source-wrapper .nav > li.active > a:focus {
	background: transparent;
}

/* Sort Source */
.sort-source {
	clear: both;
}

/* Sort Destination */
.sort-destination.full-width {
	position: relative;
}

.sort-destination.full-width .isotope-item {
	width: 20%;
	float: left;
}

.sort-destination.full-width .isotope-item.w2 {
	width: 40%;
}

.sort-destination.full-width .isotope-item .img-thumbnail {
	border: 0;
	padding: 0;
	margin: 0;
}

.sort-destination.full-width .isotope-item .img-thumbnail, .sort-destination.full-width .isotope-item a, .sort-destination.full-width .isotope-item .thumb-info img {
	border-radius: 0;
	float: left;
}

.sort-destination.full-width .isotope-item .thumb-info img {
	position: static;
	float: none;
}

.sort-destination.full-width .isotope-item .thumb-info .thumb-info-image:before {
	border-radius: 0;
}

.sort-source-wrapper + .sort-destination.full-width {
	margin: 0 0 -121px;
	top: -51px;
}

/* Responsive */
@media (max-width: 991px) {
	ul.sort-destination.isotope {
		overflow: visible !important;
		height: auto !important;
	}

	ul.sort-destination.isotope.full-width {
		overflow: hidden !important;
	}

	.isotope-hidden {
		display: none !important;
	}
}

@media (max-width: 767px) {
	.sort-source-wrapper {
		background: #171717;
		clear: both;
		margin-top: -35px;
	}

	.sort-source-wrapper .nav {
		margin: 0;
	}

	.sort-destination, .isotope-item {
		margin-left: auto !important;
		margin-right: auto !important;
	}

	.sort-destination.full-width {
		max-width: none;
		top: 0;
		margin-bottom: -30px;
	}

	.sort-destination.full-width .isotope-item {
		max-width: none;
	}

	.isotope-item {
		position: static !important;
		text-align: center;
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		-moz-transform: none !important;
		-ms-transform: none !important;
		-o-transform: none !important;
		-webkit-transform: none !important;
		transform: none !important;
	}

	.isotope-item.product {
		position: relative !important;
	}
}

@media (max-width: 479px) {
	.sort-destination, .isotope-item {
		margin-left: auto !important;
		margin-right: auto !important;
	}

	.sort-destination.full-width .isotope-item {
		position: static !important;
		clear: both;
		float: none;
		width: auto;
	}
}
/* Pricing Tables */
.pricing-table {
	margin: 10px 0;
	padding: 0 15px;
	text-align: center;
}

.pricing-table ul {
	list-style: none;
	margin: 20px 0 0 0;
	padding: 0;
}

.pricing-table li {
	border-top: 1px solid #ddd;
	padding: 10px 0;
}

.pricing-table h3 {
	background-color: #f6f8fa;
	border-radius: 2px 2px 0 0;
	font-size: 20px;
	font-weight: normal;
	margin: -20px -20px 50px -20px;
	padding: 20px;
}

.pricing-table h3 span {
	background: #FFF;
	border: 5px solid #FFF;
	border-radius: 100px;
	color: #87919f;
	display: block;
	font: bold 25px / 100px Georgia, Serif;
	height: 100px;
	margin: 20px auto -65px;
	width: 100px;
}

.pricing-table .most-popular {
	border: 3px solid #CCC;
	padding: 30px 20px;
	top: -10px;
	z-index: 2;
}

.pricing-table .most-popular h3 {
	background-color: #666;
	color: #FFF;
	padding-top: 30px;
}

.pricing-table .plan-ribbon-wrapper {
	height: 88px;
	overflow: hidden;
	position: absolute;
	right: -5px;
	top: -5px;
	width: 85px;
}

.pricing-table .plan-ribbon {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	background-image: -webkit-linear-gradient(top, #bfdc7a, #8ebf45);
	background-image: linear-gradient(to bottom, #bfdc7a, #8ebf45);
	background-color: #bfdc7a;
	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
	color: #333;
	font-size: 14px;
	left: -5px;
	padding: 7px 0;
	position: relative;
	text-align: center;
	top: 15px;
	width: 120px;
}

.pricing-table .plan-ribbon:before {
	left: 0;
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	bottom: -3px;
	content: "";
	position: absolute;
}

.pricing-table .plan-ribbon:after {
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	bottom: -3px;
	content: "";
	position: absolute;
	right: 0;
}

.pricing-table [class*="col-md-"] {
	padding-left: 0;
	padding-right: 0;
}

.pricing-table .plan {
	background: #FFF;
	border-radius: 5px;
	color: #333;
	margin-bottom: 35px;
	margin-right: 0;
	padding: 20px;
	position: relative;
}

.pricing-table .btn {
	margin-top: 5px;
}

/* Pricing Tables Boxed */
html.boxed .pricing-table .plan, html.boxed .pricing-table h3 {
	border-radius: 0;
}

/* Responsive */
@media (max-width: 767px) {
  /* Pricing Tables */
	.pricing-table {
		margin-left: 0px;
	}

	.pricing-table .plan {
		margin-right: 0;
	}

	html.boxed .pricing-table {
		margin-left: 0;
	}
}
/* Featured Box */
.featured-box {
	background: #F5F5F5;
	background-color: transparent;
	background: -webkit-linear-gradient(top, white 1%, #f9f9f9 98%) repeat scroll 0 0 transparent;
	background: linear-gradient(to bottom, white 1%, #f9f9f9 98%) repeat scroll 0 0 transparent;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border-bottom: 1px solid #DFDFDF;
	border-left: 1px solid #ECECEC;
	border-radius: 8px;
	border-right: 1px solid #ECECEC;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.04);
	margin-bottom: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 20px;
	min-height: 100px;
	position: relative;
	text-align: center;
	z-index: 1;
}

.featured-box h4 {
	font-size: 1.3em;
	font-weight: 400;
	letter-spacing: -0.7px;
	margin-top: 5px;
	text-transform: uppercase;
}

.featured-box .box-content {
	border-radius: 8px;
	border-top: 3px solid #33B8FF;
	border-top-width: 4px;
	padding: 30px 30px 10px 30px;
}

.featured-box .learn-more {
	display: block;
	margin-top: 10px;
}

/* Featured Boxes */
.featured-boxes .featured-box {
	margin-bottom: 30px;
	margin-top: 45px;
}

.featured-boxes .featured-box.info-content {
	text-align: left;
}

/* Primary */
.featured-box-primary i.icon-featured {
	background-color: #CCC;
}

.featured-box-primary h4 {
	color: #CCC;
}

.featured-box-primary .box-content {
	border-top-color: #CCC;
}

/* Secundary */
.featured-box-secundary i.icon-featured {
	background-color: #48cfad;
}

.featured-box-secundary h4 {
	color: #48cfad;
}

.featured-box-secundary .box-content {
	border-top-color: #48cfad;
}

/* Tertiary */
.featured-box-tertiary i.icon-featured {
	background-color: #4fc1e9;
}

.featured-box-tertiary h4 {
	color: #4fc1e9;
}

.featured-box-tertiary .box-content {
	border-top-color: #4fc1e9;
}

/* Quartenary */
.featured-box-quartenary i.icon-featured {
	background-color: #ac92ec;
}

.featured-box-quartenary h4 {
	color: #ac92ec;
}

.featured-box-quartenary .box-content {
	border-top-color: #ac92ec;
}

/* Featured Boxes Styles */
.featured-boxes.secundary .featured-box, .featured-boxes.tertiary .featured-box {
	background: none repeat scroll 0 0 transparent;
	border: 0 none;
	margin: -25px 0 0;
	box-shadow: none;
}

.featured-boxes.secundary .featured-box .box-content, .featured-boxes.tertiary .featured-box .box-content {
	border: 0 none;
	padding-bottom: 0;
	padding-top: 0;
}

.featured-boxes.secundary .featured-box, .featured-boxes.tertiary .featured-box {
	background: none;
	border: 0;
	margin: 0;
}

.featured-boxes.secundary .featured-box .box-content, .featured-boxes.tertiary .featured-box .box-content {
	border: 0;
	padding-top: 0;
	padding-bottom: 0;
}

.featured-boxes.secundary .featured-box i.icon-featured {
	display: inline-block;
	font-size: 30px;
	height: 75px;
	line-height: 75px;
	padding: 0;
	width: 75px;
	margin-top: 0;
}

.featured-boxes.tertiary .featured-box i.icon-featured {
	display: inline-block;
	font-size: 30px;
	height: 75px;
	line-height: 75px;
	padding: 0;
	width: 75px;
	margin-top: 0;
	background: transparent;
	border: 3px solid #CCC;
	color: #CCC;
	line-height: 68px;
}

.featured-boxes.tertiary .featured-box i.icon-featured:after {
	display: none;
}

/* Featured Boxes - Login */
.featured-boxes.login {
	margin-top: -30px;
}

.featured-boxes.login .featured-box {
	text-align: left;
}

.featured-boxes.cart .featured-box {
	text-align: left;
}

.featured-boxes .featured-box-cart {
	margin-top: 0;
}

/* Feature Box */
.feature-box {
	clear: both;
}

.feature-box .feature-box-icon {
	background: #CCC;
	border-radius: 35px;
	color: #FFF;
	display: inline-block;
	float: left;
	height: 35px;
	line-height: 35px;
	margin-right: 10px;
	position: relative;
	text-align: center;
	top: 5px;
	width: 35px;
}

.feature-box .feature-box-info {
	padding-left: 50px;
}

/* Secundary */
.feature-box.secundary h4 {
	color: #2d343e;
	font-family: 'Oswald', sans-serif;
	font-size: 1.6em;
	margin-bottom: 3px;
	font-weight: 300;
}

.feature-box.secundary .feature-box-icon {
	background: #BFBFBF;
	width: 50px;
	height: 50px;
	line-height: 50px;
	top: -8px;
	position: relative;
	left: 0;
}

.feature-box.secundary .feature-box-icon:before {
	background: #EAECEE;
	border: 1px solid #D2D2D2;
	width: 52px;
	height: 50px;
	display: block;
	content: "";
	position: absolute;
	top: -2px;
	left: -1px;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border-radius: 100%;
}

.feature-box.secundary .feature-box-icon i.fa {
	font-size: 21px;
	position: relative;
	left: 1px;
}

.feature-box.secundary .feature-box-info {
	padding-left: 67px;
}

/* Icon Featured */
.icon-featured {
	border-radius: 100%;
	color: #FFF;
	font-size: 40px;
	line-height: 110px;
	margin: 25px 0;
	padding: 25px;
	display: inline-block;
	padding: 0;
	width: 110px;
	height: 110px;
}

/* Thumb Info */
.thumb-info {
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	padding: 0;
	position: relative;
	border: 0;
	border-bottom: 3px solid #E3E4E8;
	background: #F7F9FC;
	display: block;
	overflow: hidden;
	position: relative;
	text-decoration: none;
	max-width: 100%;
	text-align: center;
}

.thumb-info .thumb-info-image {
	display: block;
	position: relative;
}

.thumb-info .thumb-info-image:before {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: #2D343E;
	width: 100%;
	height: 100%;
	filter: alpha(opacity=0);
	opacity: 0;
	-moz-border-radius: 6px 6px 0 0;
	-webkit-border-radius: 6px 6px 0 0;
	border-radius: 6px 6px 0 0;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

.thumb-info .thumb-info-image img {
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
}

.thumb-info .thumb-info-action {
	color: #fff;
	left: 0;
	position: absolute;
	right: 0;
	text-align: center;
	top: 38%;
}

.thumb-info .thumb-info-action em {
	font-style: normal;
	position: relative;
	font-size: 1.2em;
	font-weight: 100;
}

.thumb-info .thumb-info-action .thumb-info-action-left,
.thumb-info .thumb-info-action .thumb-info-action-right {
	float: left;
	overflow: hidden;
}

.thumb-info .thumb-info-action .thumb-info-action-left {
	text-align: right;
	width: 45%;
}

.thumb-info .thumb-info-action .thumb-info-action-right {
	text-align: left;
	margin-left: 2%;
	width: 53%;
}

.thumb-info .thumb-info-action .thumb-info-action-left em {
	left: 100%;
	-moz-transition: all 0.4s ease 0s;
	-o-transition: all 0.4s ease 0s;
	-webkit-transition: all 0.4s ease 0s;
	transition: all 0.4s ease 0s;
}

.thumb-info .thumb-info-action .thumb-info-action-right em {
	right: 200%;
	font-weight: 600;
	-moz-transition: all 0.6s ease 0s;
	-o-transition: all 0.6s ease 0s;
	-webkit-transition: all 0.6s ease 0s;
	transition: all 0.6s ease 0s;
}

.thumb-info .thumb-info-title {
	padding: 15px;
	text-align: left;
	display: block;
	background: #FFF;
}

.thumb-info .thumb-info-title .thumb-info-inner {
	display: block;
	color: #404751;
	font-size: 1.4em;
	font-weight: 600;
	letter-spacing: -1px;
	line-height: 1.1em;
	margin: 0;
	padding: 0;
}

.thumb-info .thumb-info-title .thumb-info-type {
	background: transparent;
	display: block;
	color: #9aa1ab;
	font-size: 0.9em;
}

.thumb-info:hover, .thumb-info:focus {
	text-decoration: none;
}

.thumb-info:hover .thumb-info-image:before, .thumb-info:focus .thumb-info-image:before {
	filter: alpha(opacity=80);
	opacity: 0.8;
}

.thumb-info:hover .thumb-info-action-left em, .thumb-info:focus .thumb-info-action-left em {
	left: 0;
}

.thumb-info:hover .thumb-info-action-right em, .thumb-info:focus .thumb-info-action-right em {
	right: 0;
}

/* Thumb Info Caption  */
.thumb-info-caption {
	padding: 10px 0;
}

.thumb-info-caption p {
	font-size: 0.9em;
	line-height: 20px;
	margin: 0 0 8px;
	padding: 10px;
}

/* Thumb Info Social Icons */
.thumb-info-social-icons {
	border-top: 1px solid #ececec;
	margin: 0;
	padding: 15px 0;
	display: block;
}

.thumb-info-social-icons a {
	background: #CCC;
	border-radius: 25px;
	display: inline-block;
	height: 30px;
	line-height: 30px;
	text-align: center;
	width: 30px;
}

.thumb-info-social-icons a:hover {
	text-decoration: none;
}

.thumb-info-social-icons a span {
	display: none;
}

.thumb-info-social-icons a i {
	color: #FFF;
	font-size: 0.9em;
	font-weight: normal;
}

/* Thumb Info Secundary */
.thumb-info.secundary {
	background: transparent;
	border: 0;
}

.thumb-info.secundary .thumb-info-title {
	text-align: center;
	background: transparent;
	padding: 0;
	margin: 0;
	position: absolute;
	top: 45%;
	width: 100%;
}

.thumb-info.secundary .thumb-info-title .thumb-info-inner {
	color: #FFF;
	top: -25px;
	position: relative;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
	filter: alpha(opacity=0);
	opacity: 0;
}

.thumb-info.secundary .thumb-info-title .thumb-info-type {
	background: #CCC;
	color: #FFF;
	border-radius: 4px;
	display: inline-block;
	padding: 3px 5px;
	font-size: 11px;
	margin-top: 5px;
	top: 25px;
	position: relative;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
	filter: alpha(opacity=0);
	opacity: 0;
}

.thumb-info.secundary:hover .thumb-info-title .thumb-info-inner,
.thumb-info.secundary:hover .thumb-info-title .thumb-info-type {
	top: 0;
	filter: alpha(opacity=100);
	opacity: 1;
}

/* Responsive */
@media (max-width: 991px) {
	.thumb-info .thumb-info-title {
		font-size: 14px;
	}

	.thumb-info .thumb-info-more {
		font-size: 11px;
	}
}
/* Timeline */
section.timeline {
	width: 75%;
	margin: 50px 13% 0;
	position: relative;
	float: left;
	padding-bottom: 120px;
}

section.timeline:after {
	background: #505050;
	background: -moz-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e5799), color-stop(100%, #7db9e8));
	background: -webkit-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
	background: -o-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
	background: -ms-linear-gradient(top, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%);
	background: linear, to bottom, rgba(80, 80, 80, 0) 0%, #505050 8%, #505050 92%, rgba(80, 80, 80, 0) 100%;
	content: "";
	display: block;
	height: 100%;
	left: 50%;
	margin-left: -2px;
	position: absolute;
	top: -60px;
	width: 3px;
	z-index: 0;
	filter: alpha(opacity=35);
	opacity: 0.35;
}

section.timeline .timeline-date {
	box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.04);
	position: relative;
	display: block;
	clear: both;
	width: 200px;
	height: 45px;
	padding: 5px;
	border: 1px solid #E5E5E5;
	margin: 0 auto 10px;
	text-shadow: 0 1px 1px #fff;
	border-radius: 4px;
	background: #FFF;
	z-index: 1;
}

section.timeline .timeline-date h3 {
	display: block;
	text-align: center;
	color: #757575;
	font-size: 0.9em;
	line-height: 32px;
}

section.timeline .timeline-title {
	background: #F4F4F4;
	padding: 12px;
}

section.timeline .timeline-title h4 {
	padding: 0;
	margin: 0;
	color: #171717;
	font-size: 1.4em;
}

section.timeline .timeline-title a {
	color: #171717;
}

section.timeline .timeline-title .timeline-title-tags {
	color: #B1B1B1;
	font-size: 0.9em;
}

section.timeline .timeline-title .timeline-title-tags a {
	color: #B1B1B1;
	font-size: 0.9em;
}

section.timeline .timeline-box {
	border-radius: 6px;
	margin: 20px 10px 10px 10px;
	padding: 10px;
	position: relative;
	width: 45.7%;
	float: left;
	z-index: 1;
	margin-bottom: 30px;
	background: #FFF;
}

section.timeline .timeline-box.left {
	clear: both;
}

section.timeline .timeline-box.left:before {
	background: none repeat scroll 0 0 #E5E5E5;
	border-radius: 50%;
	box-shadow: 0 0 0 3px #FFF, 0 0 0 6px #E5E5E5;
	content: "";
	display: block;
	height: 7px;
	margin-right: -5px;
	position: absolute;
	right: -6.8%;
	top: 22px;
	width: 8px;
}

section.timeline .timeline-box.left:after {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	background: #FFF;
	border-right: 1px solid #E5E5E5;
	border-top: 1px solid #E5E5E5;
	content: "";
	display: block;
	height: 14px;
	position: absolute;
	right: -8px;
	top: 20px;
	width: 14px;
	z-index: 0;
}

section.timeline .timeline-box.right {
	clear: right;
	float: right;
	right: -1px;
	margin-top: 40px;
}

section.timeline .timeline-box.right:before {
	background: none repeat scroll 0 0 #E5E5E5;
	border-radius: 50%;
	box-shadow: 0 0 0 3px #FFF, 0 0 0 6px #E5E5E5;
	content: "";
	display: block;
	height: 7px;
	margin-left: -5px;
	position: absolute;
	left: -7.2%;
	top: 32px;
	width: 8px;
}

section.timeline .timeline-box.right:after {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	background: #FFF;
	border-left: 1px solid #E5E5E5;
	border-bottom: 1px solid #E5E5E5;
	content: "";
	display: block;
	height: 14px;
	position: absolute;
	left: -8px;
	top: 30px;
	width: 14px;
	z-index: 0;
}

section.timeline .timeline-box .img-thumbnail {
	border-radius: 0;
	padding: 0;
	border: 0;
}

section.timeline .timeline-box .img-thumbnail img {
	border-radius: 0;
	padding: 0;
	border: 0;
}

section.timeline .timeline-box .thumb-info {
	float: left;
	margin-bottom: -5px;
	border: 0;
}

section.timeline .timeline-box .owl-carousel {
	border-radius: 0;
	padding: 0;
	border: 0;
	box-shadow: none;
}

/* Responsive */
@media (max-width: 991px) {
	section.timeline .timeline-box {
		float: none;
		clear: both;
		right: auto;
		left: auto;
		margin: 25px auto;
		max-width: 70%;
		width: auto;
	}

	section.timeline .timeline-box.right {
		float: none;
		clear: both;
		right: auto;
		left: auto;
		margin: 25px auto;
		max-width: 70%;
		width: auto;
	}

	section.timeline .timeline-box.left:after, section.timeline .timeline-box.right:after, section.timeline .timeline-box.left:before, section.timeline .timeline-box.right:before {
		display: none;
	}
}

@media (max-width: 479px) {
	section.timeline {
		width: auto;
		float: none;
		margin-left: 0;
		margin-right: 0;
	}

	section.timeline .timeline-box {
		margin: 15px auto;
		max-width: 90%;
	}

	section.timeline .timeline-box.right {
		margin: 15px auto;
		max-width: 90%;
	}

	article.post-large {
		margin-left: 0;
	}

	article.post-large .post-image, article.post-large .post-date {
		margin-left: 0;
	}
}
/* Testimonials */
blockquote.testimonial {
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	background: #E7E7E7;
	border: 0;
	border-bottom: 3px solid #E0E0E0;
	border-radius: 10px;
	color: #666;
	font-style: italic;
	margin: 0;
	padding: 20px;
	position: relative;
	text-align: left;
	clear: both;
}

blockquote.testimonial p {
	font-style: normal;
	letter-spacing: -1px;
	font-size: 14px;
}

/* Testimonials Arrow */
.testimonial-arrow-down {
	border-left: 15px solid transparent;
	border-right: 15px solid transparent;
	border-top: 15px solid #E7E7E7;
	height: 0;
	margin: 0 0 0 25px;
	width: 0;
	top: -3px;
	position: relative;
}

/* Testimonials Author */
.testimonial-author {
	margin: 8px 0 0 8px;
}

.testimonial-author .img-thumbnail {
	float: left;
	margin-right: 10px;
	width: auto;
	border-radius: 100%;
}

.testimonial-author .img-thumbnail img {
	max-width: 60px;
	border-radius: 100%;
}

.testimonial-author strong {
	color: #111;
	display: block;
	padding-top: 7px;
}

.testimonial-author span {
	color: #666;
	display: block;
	font-size: 12px;
}

.testimonial-author p {
	color: #999;
	margin: 0 0 0 25px;
	text-align: left;
}

/* Circular Bars */
.circular-bar {
	margin-bottom: 25px;
}

.circular-bar .circular-bar-chart {
	position: relative;
}

.circular-bar strong {
	display: block;
	font-weight: 600;
	font-size: 18px;
	line-height: 30px;
	position: absolute;
	top: 35%;
	width: 80%;
	left: 10%;
	text-align: center;
}

.circular-bar label {
	display: block;
	font-weight: 100;
	font-size: 17px;
	line-height: 20px;
	position: absolute;
	top: 50%;
	width: 80%;
	left: 10%;
	text-align: center;
}

/* Progress */
.progress {
	border-radius: 25px;
	height: 20px;
	background: #FAFAFA;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
	overflow: visible;
}

.progress-bar {
	background-color: #CCC;
	box-shadow: none;
	position: relative;
	border-radius: 25px;
}

.progress-bar-tooltip {
	position: absolute;
	padding: 4px 8px;
	background-color: #333;
	color: #FFF;
	line-height: 15px;
	font-size: 11px;
	display: block;
	position: absolute;
	top: -28px;
	right: 5px;
	border-radius: 3px;
	filter: alpha(opacity=0);
	opacity: 0;
}

.progress-bar-tooltip:after {
	border-color: #333 transparent;
	border-style: solid;
	border-width: 5px 5px 0;
	bottom: -5px;
	content: "";
	display: block;
	left: 13px;
	position: absolute;
	width: 0;
}

/* Counters */
.counters strong {
	display: block;
	font-weight: 600;
	font-size: 60px;
	line-height: 60px;
}

.counters label {
	font-family: "Alegreya SC",sans-serif;
	display: block;
	font-weight: 100;
	font-size: 20px;
	line-height: 20px;
}

/* Word Rotate */
.word-rotate {
	visibility: hidden;
	width: 100px;
	height: 0px;
	margin-bottom: -7px;
	display: inline-block;
	overflow: hidden;
	text-align: center;
	position: relative;
}

.word-rotate.active {
	visibility: visible;
	width: auto;
}

.word-rotate .word-rotate-items {
	position: relative;
	top: 0;
	width: 100%;
}

.word-rotate .word-rotate-items span {
	display: block;
	white-space: nowrap;
}

/* Word Rotate - Titles */
h1 .word-rotate {
	margin-bottom: -12px;
}

h2 .word-rotate {
	margin-bottom: -12px;
}

h2.word-rotator-title {
	line-height: 54px;
}

/* Scroll to Top */
html .scroll-to-top {
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
	background: #20252c;
	border-radius: 6px;
	bottom: 10px;
	color: #FFF;
	display: block;
	opacity: 0;
	padding: 12px 18px;
	position: fixed;
	right: 10px;
	text-align: center;
	text-decoration: none;
	z-index: 1040;
}

html .scroll-to-top:hover {
	filter: alpha(opacity=100);
	opacity: 1;
}

html .scroll-to-top.visible {
	filter: alpha(opacity=75);
	opacity: 0.75;
}

html .scroll-to-top span {
	display: inline-block;
	padding: 0 5px;
}

html.ie11 .scroll-to-top {
	right: 25px;
}

/* Responsive */
@media (max-width: 991px) {
	html .scroll-to-top.hidden-mobile {
		display: none !important;
	}
}
/* Portfolio */
.portfolio-title {
	margin-bottom: -10px;
}

.portfolio-title a {
	display: inline-block;
}

.portfolio-title .fa {
	font-size: 2.5em;
}

.portfolio-title .portfolio-nav,
.portfolio-title .portfolio-nav-all {
	margin-top: 11px;
}

.portfolio-title .portfolio-nav {
	text-align: right;
}

.portfolio-title .portfolio-nav a {
	width: 40%;
}

.portfolio-title .portfolio-nav-all .fa {
	font-size: 2.7em;
}

.portfolio-title .fa-angle-right {
	text-align: right;
}

.portfolio-title .portfolio-nav-prev {
	text-align: left;
}

/* Portfolio Info */
.portfolio-info {
	margin: 2px 0 10px;
	float: right;
}

.portfolio-info ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

.portfolio-info ul li {
	display: inline-block;
	border-right: 1px solid #E6E6E6;
	color: #B1B1B1;
	padding-right: 8px;
	margin-right: 8px;
	font-size: 0.9em;
}

.portfolio-info ul li:last-child {
	border-right: 0;
	padding-right: 0;
	margin-right: 0;
}

.portfolio-info ul li a {
	text-decoration: none;
	color: #B1B1B1;
}

.portfolio-info ul li a:hover .fa-heart {
	color: #E53F51;
}

.portfolio-info ul li .fa {
	margin-right: 4px;
}

/* Portfolio List */
ul.portfolio-list {
	list-style: none;
	margin: 0;
	padding: 0;
}

ul.portfolio-list .portfolio-item {
	margin-bottom: 35px;
}

/* Portfolio Details */
ul.portfolio-details {
	list-style: none;
	padding: 0;
	margin: 45px 0 0 5px;
	font-size: 0.9em;
}

ul.portfolio-details li {
	padding: 0;
	margin: 0 0 20px;
}

ul.portfolio-details p {
	padding: 0;
	margin: 0;
}

ul.portfolio-details blockquote {
	padding: 0 0 0 10px;
	margin: 15px 0 0;
	color: #999;
}

ul.portfolio-details ul.list-skills li {
	margin-right: 10px;
	margin-bottom: 5px;
}

/* Responsive */
@media (max-width: 991px) {
	.portfolio-nav, .portfolio-nav-all {
		display: none;
	}
}
/* Team List */
ul.team-list {
	list-style: none;
	margin: 0;
	padding: 0;
}

ul.team-list .team-item {
	margin-bottom: 35px;
	padding: 0;
	border-bottom: 3px solid #E3E4E8;
}

ul.team-list .team-item .thumb-info {
	border: 0;
}

ul.team-list .team-item .thumb-info-caption {
	padding: 0;
	margin: 0 13px 13px;
	display: block;
}

ul.team-list .team-item .thumb-info-caption p {
	padding: 0;
	margin: 0;
}

ul.team-list .team-item .thumb-info-social-icons {
	margin: 15px 0 0;
	display: block;
}

/* Responsive */
@media (max-width: 991px) {
	ul.team-list .team-item {
		margin: 0 auto 35px;
		max-width: 270px;
	}
}
/* Search Results */
.search-results {
	min-height: 300px;
}

/* Maps */
.google-map {
	background: #E5E3DF;
	height: 400px;
	margin: -65px 0 30px;
	width: 100%;
}

.google-map img {
	max-width: 9999px;
}

/* Map Overlay */
.map-overlay {
	margin-top: -390px;
}

.map-overlay .box-content {
	border-top: 0;
	text-align: left;
}

/* Maps - Parallax */
.parallax + .google-map {
	margin-top: -70px;
}

/*
Animate.css - http: //daneden.me/animate
Licensed under the MIT license

Copyright (c) 2013 Daniel Eden

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
.appear-animation {
	opacity: 0;
}

.appear-animation-visible {
	opacity: 1;
}

.animated,
.appear-animation {
	-webkit-animation-fill-mode: both;
	-moz-animation-fill-mode: both;
	-ms-animation-fill-mode: both;
	-o-animation-fill-mode: both;
	animation-fill-mode: both;
	-webkit-animation-duration: 1s;
	-moz-animation-duration: 1s;
	-ms-animation-duration: 1s;
	-o-animation-duration: 1s;
	animation-duration: 1s;
}

@-moz-keyframes flash {
	0%, 50%, 100% {
		opacity: 1;
	}

	25%, 75% {
		opacity: 0;
	}
}

@-o-keyframes flash {
	0%, 50%, 100% {
		opacity: 1;
	}

	25%, 75% {
		opacity: 0;
	}
}

@keyframes flash {
	0%, 50%, 100% {
		opacity: 1;
	}

	25%, 75% {
		opacity: 0;
	}
}

.flash {
	-webkit-animation-name: flash;
	-moz-animation-name: flash;
	-o-animation-name: flash;
	animation-name: flash;
}

@-webkit-keyframes shake {
	0%, 100% {
		-webkit-transform: translateX(0);
		opacity: 1;
	}

	10%, 30%, 50%, 70%, 90% {
		-webkit-transform: translateX(-10px);
	}

	20%, 40%, 60%, 80% {
		-webkit-transform: translateX(10px);
	}
}

@-moz-keyframes shake {
	0%, 100% {
		-moz-transform: translateX(0);
		opacity: 1;
	}

	10%, 30%, 50%, 70%, 90% {
		-moz-transform: translateX(-10px);
	}

	20%, 40%, 60%, 80% {
		-moz-transform: translateX(10px);
	}
}

@-o-keyframes shake {
	0%, 100% {
		-o-transform: translateX(0);
		opacity: 1;
	}

	10%, 30%, 50%, 70%, 90% {
		-o-transform: translateX(-10px);
	}

	20%, 40%, 60%, 80% {
		-o-transform: translateX(10px);
	}
}

@keyframes shake {
	0%, 100% {
		transform: translateX(0);
		opacity: 1;
	}

	10%, 30%, 50%, 70%, 90% {
		transform: translateX(-10px);
	}

	20%, 40%, 60%, 80% {
		transform: translateX(10px);
	}
}

.shake {
	-webkit-animation-name: shake;
	-moz-animation-name: shake;
	-o-animation-name: shake;
	animation-name: shake;
}

@-webkit-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {
		-webkit-transform: translateY(0);
		opacity: 1;
	}

	40% {
		-webkit-transform: translateY(-30px);
	}

	60% {
		-webkit-transform: translateY(-15px);
	}
}

@-moz-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {
		-moz-transform: translateY(0);
		opacity: 1;
	}

	40% {
		-moz-transform: translateY(-30px);
	}

	60% {
		-moz-transform: translateY(-15px);
	}
}

@-o-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {
		-o-transform: translateY(0);
		opacity: 1;
	}

	40% {
		-o-transform: translateY(-30px);
	}

	60% {
		-o-transform: translateY(-15px);
	}
}

@keyframes bounce {
	0%, 20%, 50%, 80%, 100% {
		transform: translateY(0);
		opacity: 1;
	}

	40% {
		transform: translateY(-30px);
	}

	60% {
		transform: translateY(-15px);
	}
}

.bounce {
	-webkit-animation-name: bounce;
	-moz-animation-name: bounce;
	-o-animation-name: bounce;
	animation-name: bounce;
}

@-webkit-keyframes tada {
	0% {
		-webkit-transform: scale(1);
	}

	10%, 20% {
		-webkit-transform: scale(0.9) rotate(-3deg);
	}

	30%, 50%, 70%, 90% {
		-webkit-transform: scale(1.1) rotate(3deg);
	}

	40%, 60%, 80% {
		-webkit-transform: scale(1.1) rotate(-3deg);
	}

	100% {
		-webkit-transform: scale(1) rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes tada {
	0% {
		-moz-transform: scale(1);
	}

	10%, 20% {
		-moz-transform: scale(0.9) rotate(-3deg);
	}

	30%, 50%, 70%, 90% {
		-moz-transform: scale(1.1) rotate(3deg);
	}

	40%, 60%, 80% {
		-moz-transform: scale(1.1) rotate(-3deg);
	}

	100% {
		-moz-transform: scale(1) rotate(0);
		opacity: 1;
	}
}

@-o-keyframes tada {
	0% {
		-o-transform: scale(1);
	}

	10%, 20% {
		-o-transform: scale(0.9) rotate(-3deg);
	}

	30%, 50%, 70%, 90% {
		-o-transform: scale(1.1) rotate(3deg);
	}

	40%, 60%, 80% {
		-o-transform: scale(1.1) rotate(-3deg);
	}

	100% {
		-o-transform: scale(1) rotate(0);
		opacity: 1;
	}
}

@keyframes tada {
	0% {
		transform: scale(1);
	}

	10%, 20% {
		transform: scale(0.9) rotate(-3deg);
	}

	30%, 50%, 70%, 90% {
		transform: scale(1.1) rotate(3deg);
	}

	40%, 60%, 80% {
		transform: scale(1.1) rotate(-3deg);
	}

	100% {
		transform: scale(1) rotate(0);
		opacity: 1;
	}
}

.tada {
	-webkit-animation-name: tada;
	-moz-animation-name: tada;
	-o-animation-name: tada;
	animation-name: tada;
}

@-webkit-keyframes swing {
	20%, 40%, 60%, 80%, 100% {
		-webkit-transform-origin: top center;
	}

	20% {
		-webkit-transform: rotate(15deg);
	}

	40% {
		-webkit-transform: rotate(-10deg);
	}

	60% {
		-webkit-transform: rotate(5deg);
	}

	80% {
		-webkit-transform: rotate(-5deg);
	}

	100% {
		-webkit-transform: rotate(0deg);
		opacity: 1;
	}
}

@-moz-keyframes swing {
	20% {
		-moz-transform: rotate(15deg);
	}

	40% {
		-moz-transform: rotate(-10deg);
	}

	60% {
		-moz-transform: rotate(5deg);
	}

	80% {
		-moz-transform: rotate(-5deg);
	}

	100% {
		-moz-transform: rotate(0deg);
		opacity: 1;
	}
}

@-o-keyframes swing {
	20% {
		-o-transform: rotate(15deg);
	}

	40% {
		-o-transform: rotate(-10deg);
	}

	60% {
		-o-transform: rotate(5deg);
	}

	80% {
		-o-transform: rotate(-5deg);
	}

	100% {
		-o-transform: rotate(0deg);
		opacity: 1;
	}
}

@keyframes swing {
	20% {
		transform: rotate(15deg);
	}

	40% {
		transform: rotate(-10deg);
	}

	60% {
		transform: rotate(5deg);
	}

	80% {
		transform: rotate(-5deg);
	}

	100% {
		transform: rotate(0deg);
		opacity: 1;
	}
}

.swing {
	-webkit-transform-origin: top center;
	-moz-transform-origin: top center;
	-o-transform-origin: top center;
	transform-origin: top center;
	-webkit-animation-name: swing;
	-moz-animation-name: swing;
	-o-animation-name: swing;
	animation-name: swing;
}

/* originally authored by Nick Pettit - https: //github.com/nickpettit/glide */
@-webkit-keyframes wobble {
	0% {
		-webkit-transform: translateX(0%);
	}

	15% {
		-webkit-transform: translateX(-25%) rotate(-5deg);
	}

	30% {
		-webkit-transform: translateX(20%) rotate(3deg);
	}

	45% {
		-webkit-transform: translateX(-15%) rotate(-3deg);
	}

	60% {
		-webkit-transform: translateX(10%) rotate(2deg);
	}

	75% {
		-webkit-transform: translateX(-5%) rotate(-1deg);
	}

	100% {
		-webkit-transform: translateX(0%);
		opacity: 1;
	}
}

@-moz-keyframes wobble {
	0% {
		-moz-transform: translateX(0%);
	}

	15% {
		-moz-transform: translateX(-25%) rotate(-5deg);
	}

	30% {
		-moz-transform: translateX(20%) rotate(3deg);
	}

	45% {
		-moz-transform: translateX(-15%) rotate(-3deg);
	}

	60% {
		-moz-transform: translateX(10%) rotate(2deg);
	}

	75% {
		-moz-transform: translateX(-5%) rotate(-1deg);
	}

	100% {
		-moz-transform: translateX(0%);
		opacity: 1;
	}
}

@-o-keyframes wobble {
	0% {
		-o-transform: translateX(0%);
	}

	15% {
		-o-transform: translateX(-25%) rotate(-5deg);
	}

	30% {
		-o-transform: translateX(20%) rotate(3deg);
	}

	45% {
		-o-transform: translateX(-15%) rotate(-3deg);
	}

	60% {
		-o-transform: translateX(10%) rotate(2deg);
	}

	75% {
		-o-transform: translateX(-5%) rotate(-1deg);
	}

	100% {
		-o-transform: translateX(0%);
		opacity: 1;
	}
}

@keyframes wobble {
	0% {
		transform: translateX(0%);
	}

	15% {
		transform: translateX(-25%) rotate(-5deg);
	}

	30% {
		transform: translateX(20%) rotate(3deg);
	}

	45% {
		transform: translateX(-15%) rotate(-3deg);
	}

	60% {
		transform: translateX(10%) rotate(2deg);
	}

	75% {
		transform: translateX(-5%) rotate(-1deg);
	}

	100% {
		transform: translateX(0%);
		opacity: 1;
	}
}

.wobble {
	-webkit-animation-name: wobble;
	-moz-animation-name: wobble;
	-o-animation-name: wobble;
	animation-name: wobble;
}

@-webkit-keyframes wiggle {
	0% {
		-webkit-transform: skewX(9deg);
	}

	10% {
		-webkit-transform: skewX(-8deg);
	}

	20% {
		-webkit-transform: skewX(7deg);
	}

	30% {
		-webkit-transform: skewX(-6deg);
	}

	40% {
		-webkit-transform: skewX(5deg);
	}

	50% {
		-webkit-transform: skewX(-4deg);
	}

	60% {
		-webkit-transform: skewX(3deg);
	}

	70% {
		-webkit-transform: skewX(-2deg);
	}

	80% {
		-webkit-transform: skewX(1deg);
	}

	90% {
		-webkit-transform: skewX(0deg);
	}

	100% {
		-webkit-transform: skewX(0deg);
		opacity: 1;
	}
}

@-moz-keyframes wiggle {
	0% {
		-moz-transform: skewX(9deg);
	}

	10% {
		-moz-transform: skewX(-8deg);
	}

	20% {
		-moz-transform: skewX(7deg);
	}

	30% {
		-moz-transform: skewX(-6deg);
	}

	40% {
		-moz-transform: skewX(5deg);
	}

	50% {
		-moz-transform: skewX(-4deg);
	}

	60% {
		-moz-transform: skewX(3deg);
	}

	70% {
		-moz-transform: skewX(-2deg);
	}

	80% {
		-moz-transform: skewX(1deg);
	}

	90% {
		-moz-transform: skewX(0deg);
	}

	100% {
		-moz-transform: skewX(0deg);
		opacity: 1;
	}
}

@-o-keyframes wiggle {
	0% {
		-o-transform: skewX(9deg);
	}

	10% {
		-o-transform: skewX(-8deg);
	}

	20% {
		-o-transform: skewX(7deg);
	}

	30% {
		-o-transform: skewX(-6deg);
	}

	40% {
		-o-transform: skewX(5deg);
	}

	50% {
		-o-transform: skewX(-4deg);
	}

	60% {
		-o-transform: skewX(3deg);
	}

	70% {
		-o-transform: skewX(-2deg);
	}

	80% {
		-o-transform: skewX(1deg);
	}

	90% {
		-o-transform: skewX(0deg);
	}

	100% {
		-o-transform: skewX(0deg);
		opacity: 1;
	}
}

@keyframes wiggle {
	0% {
		transform: skewX(9deg);
	}

	10% {
		transform: skewX(-8deg);
	}

	20% {
		transform: skewX(7deg);
	}

	30% {
		transform: skewX(-6deg);
	}

	40% {
		transform: skewX(5deg);
	}

	50% {
		transform: skewX(-4deg);
	}

	60% {
		transform: skewX(3deg);
	}

	70% {
		transform: skewX(-2deg);
	}

	80% {
		transform: skewX(1deg);
	}

	90% {
		transform: skewX(0deg);
	}

	100% {
		transform: skewX(0deg);
		opacity: 1;
	}
}

.wiggle {
	-webkit-animation-name: wiggle;
	-moz-animation-name: wiggle;
	-o-animation-name: wiggle;
	animation-name: wiggle;
	-webkit-animation-timing-function: ease-in;
	-moz-animation-timing-function: ease-in;
	-o-animation-timing-function: ease-in;
	animation-timing-function: ease-in;
}

/* originally authored by Nick Pettit - https: //github.com/nickpettit/glide */
@-webkit-keyframes pulse {
	0% {
		-webkit-transform: scale(1);
	}

	50% {
		-webkit-transform: scale(1.1);
	}

	100% {
		-webkit-transform: scale(1);
		opacity: 1;
	}
}

@-moz-keyframes pulse {
	0% {
		-moz-transform: scale(1);
	}

	50% {
		-moz-transform: scale(1.1);
	}

	100% {
		-moz-transform: scale(1);
		opacity: 1;
	}
}

@-o-keyframes pulse {
	0% {
		-o-transform: scale(1);
	}

	50% {
		-o-transform: scale(1.1);
	}

	100% {
		-o-transform: scale(1);
		opacity: 1;
	}
}

@keyframes pulse {
	0% {
		transform: scale(1);
	}

	50% {
		transform: scale(1.1);
	}

	100% {
		transform: scale(1);
		opacity: 1;
	}
}

.pulse {
	-webkit-animation-name: pulse;
	-moz-animation-name: pulse;
	-o-animation-name: pulse;
	animation-name: pulse;
}

@-webkit-keyframes fadeIn {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}

@-moz-keyframes fadeIn {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}

@-o-keyframes fadeIn {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}

@keyframes fadeIn {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}

.fadeIn {
	-webkit-animation-name: fadeIn;
	-moz-animation-name: fadeIn;
	-o-animation-name: fadeIn;
	animation-name: fadeIn;
}

@-webkit-keyframes fadeInUp {
	0% {
		opacity: 0;
		-webkit-transform: translateY(20px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInUp {
	0% {
		opacity: 0;
		-moz-transform: translateY(20px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInUp {
	0% {
		opacity: 0;
		-o-transform: translateY(20px);
	}

	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInUp {
	0% {
		opacity: 0;
		transform: translateY(20px);
	}

	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInUp {
	-webkit-animation-name: fadeInUp;
	-moz-animation-name: fadeInUp;
	-o-animation-name: fadeInUp;
	animation-name: fadeInUp;
}

@-webkit-keyframes fadeInDown {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-20px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInDown {
	0% {
		opacity: 0;
		-moz-transform: translateY(-20px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInDown {
	0% {
		opacity: 0;
		-o-transform: translateY(-20px);
	}

	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInDown {
	0% {
		opacity: 0;
		transform: translateY(-20px);
	}

	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInDown {
	-webkit-animation-name: fadeInDown;
	-moz-animation-name: fadeInDown;
	-o-animation-name: fadeInDown;
	animation-name: fadeInDown;
}

@-webkit-keyframes fadeInLeft {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-20px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeInLeft {
	0% {
		opacity: 0;
		-moz-transform: translateX(-20px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-o-keyframes fadeInLeft {
	0% {
		opacity: 0;
		-o-transform: translateX(-20px);
	}

	100% {
		opacity: 1;
		-o-transform: translateX(0);
	}
}

@keyframes fadeInLeft {
	0% {
		opacity: 0;
		transform: translateX(-20px);
	}

	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

.fadeInLeft {
	-webkit-animation-name: fadeInLeft;
	-moz-animation-name: fadeInLeft;
	-o-animation-name: fadeInLeft;
	animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInRight {
	0% {
		opacity: 0;
		-webkit-transform: translateX(20px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeInRight {
	0% {
		opacity: 0;
		-moz-transform: translateX(20px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-o-keyframes fadeInRight {
	0% {
		opacity: 0;
		-o-transform: translateX(20px);
	}

	100% {
		opacity: 1;
		-o-transform: translateX(0);
	}
}

@keyframes fadeInRight {
	0% {
		opacity: 0;
		transform: translateX(20px);
	}

	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

.fadeInRight {
	-webkit-animation-name: fadeInRight;
	-moz-animation-name: fadeInRight;
	-o-animation-name: fadeInRight;
	animation-name: fadeInRight;
}

@-webkit-keyframes fadeInUpBig {
	0% {
		opacity: 0;
		-webkit-transform: translateY(2000px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInUpBig {
	0% {
		opacity: 0;
		-moz-transform: translateY(2000px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInUpBig {
	0% {
		opacity: 0;
		-o-transform: translateY(2000px);
	}

	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInUpBig {
	0% {
		opacity: 0;
		transform: translateY(2000px);
	}

	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInUpBig {
	-webkit-animation-name: fadeInUpBig;
	-moz-animation-name: fadeInUpBig;
	-o-animation-name: fadeInUpBig;
	animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeInDownBig {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-2000px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInDownBig {
	0% {
		opacity: 0;
		-moz-transform: translateY(-2000px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInDownBig {
	0% {
		opacity: 0;
		-o-transform: translateY(-2000px);
	}

	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInDownBig {
	0% {
		opacity: 0;
		transform: translateY(-2000px);
	}

	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInDownBig {
	-webkit-animation-name: fadeInDownBig;
	-moz-animation-name: fadeInDownBig;
	-o-animation-name: fadeInDownBig;
	animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeftBig {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-2000px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeInLeftBig {
	0% {
		opacity: 0;
		-moz-transform: translateX(-2000px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-o-keyframes fadeInLeftBig {
	0% {
		opacity: 0;
		-o-transform: translateX(-2000px);
	}

	100% {
		opacity: 1;
		-o-transform: translateX(0);
	}
}

@keyframes fadeInLeftBig {
	0% {
		opacity: 0;
		transform: translateX(-2000px);
	}

	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

.fadeInLeftBig {
	-webkit-animation-name: fadeInLeftBig;
	-moz-animation-name: fadeInLeftBig;
	-o-animation-name: fadeInLeftBig;
	animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRightBig {
	0% {
		opacity: 0;
		-webkit-transform: translateX(2000px);
	}

	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeInRightBig {
	0% {
		opacity: 0;
		-moz-transform: translateX(2000px);
	}

	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-o-keyframes fadeInRightBig {
	0% {
		opacity: 0;
		-o-transform: translateX(2000px);
	}

	100% {
		opacity: 1;
		-o-transform: translateX(0);
	}
}

@keyframes fadeInRightBig {
	0% {
		opacity: 0;
		transform: translateX(2000px);
	}

	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

.fadeInRightBig {
	-webkit-animation-name: fadeInRightBig;
	-moz-animation-name: fadeInRightBig;
	-o-animation-name: fadeInRightBig;
	animation-name: fadeInRightBig;
}

@-webkit-keyframes bounceIn {
	0% {
		opacity: 0;
		-webkit-transform: scale(0.3);
	}

	50% {
		opacity: 1;
		-webkit-transform: scale(1.05);
	}

	70% {
		-webkit-transform: scale(0.9);
	}

	100% {
		-webkit-transform: scale(1);
		opacity: 1;
	}
}

@-moz-keyframes bounceIn {
	0% {
		opacity: 0;
		-moz-transform: scale(0.3);
	}

	50% {
		opacity: 1;
		-moz-transform: scale(1.05);
	}

	70% {
		-moz-transform: scale(0.9);
	}

	100% {
		-moz-transform: scale(1);
		opacity: 1;
	}
}

@-o-keyframes bounceIn {
	0% {
		opacity: 0;
		-o-transform: scale(0.3);
	}

	50% {
		opacity: 1;
		-o-transform: scale(1.05);
	}

	70% {
		-o-transform: scale(0.9);
	}

	100% {
		-o-transform: scale(1);
		opacity: 1;
	}
}

@keyframes bounceIn {
	0% {
		opacity: 0;
		transform: scale(0.3);
	}

	50% {
		opacity: 1;
		transform: scale(1.05);
	}

	70% {
		transform: scale(0.9);
	}

	100% {
		transform: scale(1);
		opacity: 1;
	}
}

.bounceIn {
	-webkit-animation-name: bounceIn;
	-moz-animation-name: bounceIn;
	-o-animation-name: bounceIn;
	animation-name: bounceIn;
}

@-webkit-keyframes bounceInUp {
	0% {
		opacity: 0;
		-webkit-transform: translateY(2000px);
	}

	60% {
		opacity: 1;
		-webkit-transform: translateY(-30px);
	}

	80% {
		-webkit-transform: translateY(10px);
	}

	100% {
		-webkit-transform: translateY(0);
		opacity: 1;
	}
}

@-moz-keyframes bounceInUp {
	0% {
		opacity: 0;
		-moz-transform: translateY(2000px);
	}

	60% {
		opacity: 1;
		-moz-transform: translateY(-30px);
	}

	80% {
		-moz-transform: translateY(10px);
	}

	100% {
		-moz-transform: translateY(0);
		opacity: 1;
	}
}

@-o-keyframes bounceInUp {
	0% {
		opacity: 0;
		-o-transform: translateY(2000px);
	}

	60% {
		opacity: 1;
		-o-transform: translateY(-30px);
	}

	80% {
		-o-transform: translateY(10px);
	}

	100% {
		-o-transform: translateY(0);
		opacity: 1;
	}
}

@keyframes bounceInUp {
	0% {
		opacity: 0;
		transform: translateY(2000px);
	}

	60% {
		opacity: 1;
		transform: translateY(-30px);
	}

	80% {
		transform: translateY(10px);
	}

	100% {
		transform: translateY(0);
		opacity: 1;
	}
}

.bounceInUp {
	-webkit-animation-name: bounceInUp;
	-moz-animation-name: bounceInUp;
	-o-animation-name: bounceInUp;
	animation-name: bounceInUp;
}

@-webkit-keyframes bounceInDown {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-2000px);
	}

	60% {
		opacity: 1;
		-webkit-transform: translateY(30px);
	}

	80% {
		-webkit-transform: translateY(-10px);
	}

	100% {
		-webkit-transform: translateY(0);
		opacity: 1;
	}
}

@-moz-keyframes bounceInDown {
	0% {
		opacity: 0;
		-moz-transform: translateY(-2000px);
	}

	60% {
		opacity: 1;
		-moz-transform: translateY(30px);
	}

	80% {
		-moz-transform: translateY(-10px);
	}

	100% {
		-moz-transform: translateY(0);
		opacity: 1;
	}
}

@-o-keyframes bounceInDown {
	0% {
		opacity: 0;
		-o-transform: translateY(-2000px);
	}

	60% {
		opacity: 1;
		-o-transform: translateY(30px);
	}

	80% {
		-o-transform: translateY(-10px);
	}

	100% {
		-o-transform: translateY(0);
		opacity: 1;
	}
}

@keyframes bounceInDown {
	0% {
		opacity: 0;
		transform: translateY(-2000px);
	}

	60% {
		opacity: 1;
		transform: translateY(30px);
	}

	80% {
		transform: translateY(-10px);
	}

	100% {
		transform: translateY(0);
		opacity: 1;
	}
}

.bounceInDown {
	-webkit-animation-name: bounceInDown;
	-moz-animation-name: bounceInDown;
	-o-animation-name: bounceInDown;
	animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-2000px);
	}

	60% {
		opacity: 1;
		-webkit-transform: translateX(30px);
	}

	80% {
		-webkit-transform: translateX(-10px);
	}

	100% {
		-webkit-transform: translateX(0);
		opacity: 1;
	}
}

@-moz-keyframes bounceInLeft {
	0% {
		opacity: 0;
		-moz-transform: translateX(-2000px);
	}

	60% {
		opacity: 1;
		-moz-transform: translateX(30px);
	}

	80% {
		-moz-transform: translateX(-10px);
	}

	100% {
		-moz-transform: translateX(0);
		opacity: 1;
	}
}

@-o-keyframes bounceInLeft {
	0% {
		opacity: 0;
		-o-transform: translateX(-2000px);
	}

	60% {
		opacity: 1;
		-o-transform: translateX(30px);
	}

	80% {
		-o-transform: translateX(-10px);
	}

	100% {
		-o-transform: translateX(0);
		opacity: 1;
	}
}

@keyframes bounceInLeft {
	0% {
		opacity: 0;
		transform: translateX(-2000px);
	}

	60% {
		opacity: 1;
		transform: translateX(30px);
	}

	80% {
		transform: translateX(-10px);
	}

	100% {
		transform: translateX(0);
		opacity: 1;
	}
}

.bounceInLeft {
	-webkit-animation-name: bounceInLeft;
	-moz-animation-name: bounceInLeft;
	-o-animation-name: bounceInLeft;
	animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
	0% {
		opacity: 0;
		-webkit-transform: translateX(2000px);
	}

	60% {
		opacity: 1;
		-webkit-transform: translateX(-30px);
	}

	80% {
		-webkit-transform: translateX(10px);
	}

	100% {
		-webkit-transform: translateX(0);
		opacity: 1;
	}
}

@-moz-keyframes bounceInRight {
	0% {
		opacity: 0;
		-moz-transform: translateX(2000px);
	}

	60% {
		opacity: 1;
		-moz-transform: translateX(-30px);
	}

	80% {
		-moz-transform: translateX(10px);
	}

	100% {
		-moz-transform: translateX(0);
		opacity: 1;
	}
}

@-o-keyframes bounceInRight {
	0% {
		opacity: 0;
		-o-transform: translateX(2000px);
	}

	60% {
		opacity: 1;
		-o-transform: translateX(-30px);
	}

	80% {
		-o-transform: translateX(10px);
	}

	100% {
		-o-transform: translateX(0);
		opacity: 1;
	}
}

@keyframes bounceInRight {
	0% {
		opacity: 0;
		transform: translateX(2000px);
	}

	60% {
		opacity: 1;
		transform: translateX(-30px);
	}

	80% {
		transform: translateX(10px);
	}

	100% {
		transform: translateX(0);
		opacity: 1;
	}
}

.bounceInRight {
	-webkit-animation-name: bounceInRight;
	-moz-animation-name: bounceInRight;
	-o-animation-name: bounceInRight;
	animation-name: bounceInRight;
}

@-webkit-keyframes rotateIn {
	0% {
		-webkit-transform-origin: center center;
		-webkit-transform: rotate(-200deg);
		opacity: 0;
	}

	100% {
		-webkit-transform-origin: center center;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes rotateIn {
	0% {
		-moz-transform-origin: center center;
		-moz-transform: rotate(-200deg);
		opacity: 0;
	}

	100% {
		-moz-transform-origin: center center;
		-moz-transform: rotate(0);
		opacity: 1;
	}
}

@-o-keyframes rotateIn {
	0% {
		-o-transform-origin: center center;
		-o-transform: rotate(-200deg);
		opacity: 0;
	}

	100% {
		-o-transform-origin: center center;
		-o-transform: rotate(0);
		opacity: 1;
	}
}

@keyframes rotateIn {
	0% {
		transform-origin: center center;
		transform: rotate(-200deg);
		opacity: 0;
	}

	100% {
		transform-origin: center center;
		transform: rotate(0);
		opacity: 1;
	}
}

.rotateIn {
	-webkit-animation-name: rotateIn;
	-moz-animation-name: rotateIn;
	-o-animation-name: rotateIn;
	animation-name: rotateIn;
}

@-webkit-keyframes rotateInUpLeft {
	0% {
		-webkit-transform-origin: left bottom;
		-webkit-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-webkit-transform-origin: left bottom;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes rotateInUpLeft {
	0% {
		-moz-transform-origin: left bottom;
		-moz-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-moz-transform-origin: left bottom;
		-moz-transform: rotate(0);
		opacity: 1;
	}
}

@-o-keyframes rotateInUpLeft {
	0% {
		-o-transform-origin: left bottom;
		-o-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-o-transform-origin: left bottom;
		-o-transform: rotate(0);
		opacity: 1;
	}
}

@keyframes rotateInUpLeft {
	0% {
		transform-origin: left bottom;
		transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		transform-origin: left bottom;
		transform: rotate(0);
		opacity: 1;
	}
}

.rotateInUpLeft {
	-webkit-animation-name: rotateInUpLeft;
	-moz-animation-name: rotateInUpLeft;
	-o-animation-name: rotateInUpLeft;
	animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInDownLeft {
	0% {
		-webkit-transform-origin: left bottom;
		-webkit-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-webkit-transform-origin: left bottom;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes rotateInDownLeft {
	0% {
		-moz-transform-origin: left bottom;
		-moz-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-moz-transform-origin: left bottom;
		-moz-transform: rotate(0);
		opacity: 1;
	}
}

@-o-keyframes rotateInDownLeft {
	0% {
		-o-transform-origin: left bottom;
		-o-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-o-transform-origin: left bottom;
		-o-transform: rotate(0);
		opacity: 1;
	}
}

@keyframes rotateInDownLeft {
	0% {
		transform-origin: left bottom;
		transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		transform-origin: left bottom;
		transform: rotate(0);
		opacity: 1;
	}
}

.rotateInDownLeft {
	-webkit-animation-name: rotateInDownLeft;
	-moz-animation-name: rotateInDownLeft;
	-o-animation-name: rotateInDownLeft;
	animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInUpRight {
	0% {
		-webkit-transform-origin: right bottom;
		-webkit-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-webkit-transform-origin: right bottom;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes rotateInUpRight {
	0% {
		-moz-transform-origin: right bottom;
		-moz-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-moz-transform-origin: right bottom;
		-moz-transform: rotate(0);
		opacity: 1;
	}
}

@-o-keyframes rotateInUpRight {
	0% {
		-o-transform-origin: right bottom;
		-o-transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		-o-transform-origin: right bottom;
		-o-transform: rotate(0);
		opacity: 1;
	}
}

@keyframes rotateInUpRight {
	0% {
		transform-origin: right bottom;
		transform: rotate(-90deg);
		opacity: 0;
	}

	100% {
		transform-origin: right bottom;
		transform: rotate(0);
		opacity: 1;
	}
}

.rotateInUpRight {
	-webkit-animation-name: rotateInUpRight;
	-moz-animation-name: rotateInUpRight;
	-o-animation-name: rotateInUpRight;
	animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateInDownRight {
	0% {
		-webkit-transform-origin: right bottom;
		-webkit-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-webkit-transform-origin: right bottom;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
}

@-moz-keyframes rotateInDownRight {
	0% {
		-moz-transform-origin: right bottom;
		-moz-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-moz-transform-origin: right bottom;
		-moz-transform: rotate(0);
		opacity: 1;
	}
}

@-o-keyframes rotateInDownRight {
	0% {
		-o-transform-origin: right bottom;
		-o-transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		-o-transform-origin: right bottom;
		-o-transform: rotate(0);
		opacity: 1;
	}
}

@keyframes rotateInDownRight {
	0% {
		transform-origin: right bottom;
		transform: rotate(90deg);
		opacity: 0;
	}

	100% {
		transform-origin: right bottom;
		transform: rotate(0);
		opacity: 1;
	}
}

.rotateInDownRight {
	-webkit-animation-name: rotateInDownRight;
	-moz-animation-name: rotateInDownRight;
	-o-animation-name: rotateInDownRight;
	animation-name: rotateInDownRight;
}

/*
Name: 			theme-blog.css
Written by: 	Okler Themes - (http://www.okler.net)
Version: 		2.1.0
*/
/* Posts */
.blog-posts article {
	border-bottom: 1px solid #DDD;
	margin-bottom: 50px;
	padding-bottom: 10px;
}

.blog-posts .pagination {
	margin: -10px 0 20px;
}

/* Post */
article.post h2 a {
	text-decoration: none;
}

article.post .post-meta {
	font-size: 0.9em;
	margin-bottom: 7px;
}

article.post .post-meta > span {
	display: inline-block;
	padding-right: 8px;
}

article.post .post-meta i {
	margin-right: 3px;
}

article.post .post-date {
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
	float: left;
	margin-right: 10px;
	text-align: center;
}

article.post .post-date .month {
	background: #CCC;
	border-radius: 0 0 2px 2px;
	box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.07) inset;
	color: #FFF;
	font-size: 0.9em;
	padding: 0 10px 2px;
}

article.post .post-date .day {
	background: #F4F4F4;
	border-radius: 2px 2px 0 0;
	color: #CCC;
	display: block;
	font-size: 16px;
	font-weight: 500;
	font-weight: bold;
	padding: 10px;
}

article.post .post-image .owl-carousel {
	width: 100.1%;
}

article .post-video {
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	padding: 0;
	background-color: #FFF;
	border: 1px solid #DDD;
	border-radius: 8px;
	display: block;
	height: auto;
	position: relative;
	margin: 0 0 30px 0;
	padding-bottom: 61%;
}

article .post-video iframe {
	bottom: 0;
	height: auto;
	left: 0;
	margin: 0;
	min-height: 100%;
	min-width: 100%;
	padding: 4px;
	position: absolute;
	right: 0;
	top: 0;
	width: auto;
}

article .post-audio {
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	padding: 0;
	background-color: #FFF;
	border: 1px solid #DDD;
	border-radius: 8px;
	display: block;
	height: auto;
	position: relative;
	margin: 0 0 30px 0;
	padding-bottom: 25%;
}

article .post-audio iframe {
	bottom: 0;
	height: auto;
	left: 0;
	margin: 0;
	min-height: 100%;
	min-width: 100%;
	padding: 4px;
	position: absolute;
	right: 0;
	top: 0;
	width: auto;
}

article.post-medium .post-image .owl-carousel {
	width: 100.2%;
}

article.post-large {
	margin-left: 60px;
}

article.post-large h2 {
	margin-bottom: 5px;
}

article.post-large .post-image, article.post-large .post-date {
	margin-left: -60px;
}

article.post-large .post-image {
	margin-bottom: 15px;
}

article.post-large .post-image.single {
	margin-bottom: 30px;
}

article.post-large .post-video {
	margin-left: -60px;
}

article.post-large .post-audio {
	margin-left: -60px;
}

/* Single Post */
.single-post article {
	border-bottom: 0;
	margin-bottom: 0;
}

article.blog-single-post .post-meta {
	margin-bottom: 20px;
}

/* Post Block */
.post-block {
	border-top: 1px solid #DDD;
	margin: 15px 0 0 0;
	padding: 20px 0 15px 0;
}

.post-block h3 {
	font-size: 1.8em;
	font-weight: 200;
	margin: 0 0 20px;
	text-transform: none;
}

.post-block h3 i {
	margin-right: 7px;
}

/* Post Author */
.post-author {
	margin: 15px 0 0 0;
}

.post-author img {
	max-height: 80px;
	max-width: 80px;
}

.post-author p {
	font-size: 0.9em;
	line-height: 22px;
	margin: 0;
	padding: 0;
}

.post-author p .name {
	font-size: 1.1em;
}

.post-author .img-thumbnail {
	display: inline-block;
	float: left;
	margin-right: 20px;
}

/* Post Share */
.post-share {
	margin: 55px 0 0 0;
	padding-bottom: 0;
}

/* Post Comments */
.post-comments {
	margin-top: 45px;
}

ul.comments {
	list-style: none;
	margin: 0;
	padding: 0;
}

ul.comments li {
	clear: both;
	padding: 10px 0 0 115px;
}

ul.comments li img.avatar {
	height: 80px;
	width: 80px;
}

ul.comments li ul.reply {
	margin: 0;
}

ul.comments li a {
	text-decoration: none;
}

ul.comments li .img-thumbnail {
	margin-left: -115px;
	position: absolute;
}

ul.comments li .comment {
	margin-bottom: 10px;
}

ul.comments .comment-arrow {
	border-bottom: 15px solid transparent;
	border-right: 15px solid #F4F4F4;
	border-top: 15px solid transparent;
	height: 0;
	left: -15px;
	position: absolute;
	top: 28px;
	width: 0;
}

ul.comments .comment-block {
	background: #F4F4F4;
	border-radius: 5px;
	padding: 20px 20px 30px;
	position: relative;
}

ul.comments .comment-block p {
	font-size: 0.9em;
	line-height: 21px;
	margin: 0;
	padding: 0;
}

ul.comments .comment-block .comment-by {
	display: block;
	font-size: 1em;
	line-height: 21px;
	margin: 0;
	padding: 0 0 5px 0;
}

ul.comments .comment-block .date {
	color: #999;
	font-size: 0.9em;
}

/* Leave a Comment */
.post-leave-comment {
	margin-top: 25px;
	padding-top: 45px;
}

.post-leave-comment h3 {
	margin: 0 0 40px;
}

/* Recent Posts */
.recent-posts h4 {
	margin-bottom: 7px;
}

.recent-posts article.recent-post h4 {
	margin: 0 0 3px 0;
}

.recent-posts article.recent-post h4 a {
	display: block;
}

.recent-posts .date {
	float: left;
	margin-right: 10px;
	margin-top: 8px;
	text-align: center;
}

.recent-posts .date .month {
	background: #CCC;
	border-radius: 0 0 2px 2px;
	box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.07) inset;
	color: #FFF;
	font-size: 0.9em;
	padding: 0 10px 2px;
}

.recent-posts .date .day {
	background: #F7F7F7;
	color: #CCC;
	display: block;
	font-size: 18px;
	font-weight: 500;
	font-weight: bold;
	padding: 8px;
}

section.featured .recent-posts .date .day {
	background: #FFF;
}

/* Simple Post List */
ul.simple-post-list {
	list-style: none;
	margin: 0;
	padding: 0;
}

ul.simple-post-list li {
	*zoom: 1;
	border-bottom: 1px dotted #E2E2E2;
	padding: 15px 0;
}

ul.simple-post-list li:before, ul.simple-post-list li:after {
	content: " ";
	display: table;
}

ul.simple-post-list li:after {
	clear: both;
}

ul.simple-post-list li:last-child {
	border-bottom: 0;
}

ul.simple-post-list .post-image {
	float: left;
	margin-right: 12px;
}

ul.simple-post-list .post-meta {
	color: #888;
	font-size: 0.8em;
}

/* Responsive */
@media (max-width: 479px) {
	ul.comments li {
		border-left: 8px solid #DDDDDD;
		clear: both;
		padding: 0 0 0 10px;
	}

	ul.comments li .img-thumbnail {
		display: none;
	}

	ul.comments .comment-arrow {
		display: none;
	}
}
/*
Name: 			theme-shop.css
Written by: 	Okler Themes - (http://www.okler.net)
Version: 		2.1.0
*/
/* Custom Font - Stars (From WooCommerce) */
@font-face {
	font-family: 'star';
  src: url("fonts/star.eot");
  src: url("fonts/star.eot?#iefix") format("embedded-opentype"), url("fonts/star.woff") format("woff"), url("fonts/star.ttf") format("truetype"), url("fonts/star.svg#star") format("svg");
  font-weight: normal;
  font-style: normal;
}
/* Shop - Mega Menu (Cart) */
#header nav.mega-menu .mega-menu-shop {
	margin-right: -20px;
	padding-left: 0;
	margin-left: 0;
}

#header nav.mega-menu .mega-menu-shop a {
	color: #444;
}

#header nav.mega-menu .mega-menu-shop table {
	width: 100%;
	margin-top: 0px;
}

#header nav.mega-menu .mega-menu-shop .dropdown-menu {
	width: 40%;
	right: 8px;
	border-radius: 6px;
}

#header nav.mega-menu .mega-menu-shop .dropdown-menu li table tr td a {
	background-color: transparent !important;
	color: #fff;
	padding: 0;
	margin: 0;
	display: block;
}

#header nav.mega-menu .mega-menu-shop .dropdown-menu li table tr td a:hover {
	text-decoration: none;
}

#header nav.mega-menu .mega-menu-shop .fa-shopping-cart {
	margin-right: 5px;
}

#header nav.mega-menu .mega-menu-shop .product-thumbnail {
	width: 120px;
}

#header nav.mega-menu .mega-menu-shop .product-actions {
	text-align: right;
	width: 80px;
}

#header nav.mega-menu .mega-menu-shop .actions-continue {
	margin-top: 10px;
	padding-top: 20px;
	border-top: 1px solid #373737;
	clear: both;
}

/* Shop - Base */
.shop {
	margin-top: 15px;
}

.shop ul.products {
	margin: 0;
	padding: 25px 0;
	list-style: none;
}

.shop ul.products:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}

.shop ul.products .product {
	position: relative;
	margin-bottom: 30px;
}

.shop ul.products .product a {
	text-decoration: none;
}

.shop ul.products .product .add-to-cart-product {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 6px 6px 0 0;
	padding: 8px 10px 5px;
	font-size: 0.9em;
	color: #FFF;
	background: #222;
	z-index: 1;
	filter: alpha(opacity=0);
	opacity: 0;
	-webkit-transform: translate3d(0, 0, 0);
}

.shop ul.products .product .add-to-cart-product .fa {
	margin-right: 3px;
	font-size: 1.1em;
}

.shop ul.products .product:hover .add-to-cart-product {
	filter: alpha(opacity=100);
	opacity: 1;
}

.shop ul.products .product:hover .add-to-cart-product:hover {
	background: #000;
}

.shop ul.products .product .price {
	display: block;
	min-height: 28px;
}

.shop ul.products .product .price del {
	color: rgba(145, 145, 145, 0.5);
	font-size: 0.7em;
	margin: -2px 0 0;
}

.shop ul.products .product .price ins {
	text-decoration: none;
}

.shop ul.products .product .price .amount {
	font-size: 1.3em;
}

.shop ul.products .product .onsale {
	position: absolute;
	background-image: none;
	border-radius: 100%;
	left: auto;
	right: 0;
	top: -15px;
	text-shadow: none;
	width: 40px;
	height: 40px;
	line-height: 40px;
	display: inline-block;
	text-align: center;
	z-index: 10;
	box-shadow: none;
	font-size: 0.9em;
	color: #FFF;
	border-bottom: 2px solid transparent;
}

/* Product Info */
.product-info {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	border-radius: 6px;
	padding: 0;
	position: relative;
	border: 1px solid #DDD;
	background: #F7F9FC;
	display: block;
	overflow: hidden;
	position: relative;
	text-decoration: none;
	max-width: 100%;
	text-align: center;
	padding: 0;
	text-decoration: none;
}

.product-info:hover {
	background-color: #FFF;
	text-decoration: none;
}

.product-info a {
	text-decoration: none;
	display: inline-block;
	width: 100%;
}

.product-info a:hover {
	text-decoration: none;
	display: inline-block;
	width: 100%;
}

.product-info img {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	border-radius: 6px 6px 0 0;
}

.product-info h4 {
	color: #404751;
	letter-spacing: -1px;
	font-weight: 600;
	font-size: 1.4em;
	line-height: 1.1em;
	margin: 0;
	padding: 0;
}

.product-info + .product-info {
	border-radius: 0 0 6px 6px;
	margin-top: -5px;
}

.product-info .product-info-image {
	display: block;
	position: relative;
}

.product-info .product-info-image:before {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	content: "";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: #333;
	width: 100%;
	height: 100%;
	filter: alpha(opacity=0);
	opacity: 0;
	border-radius: 6px 6px 0 0;
}

.product-info:hover .product-info-image:before {
	filter: alpha(opacity=80);
	opacity: 0.8;
}

.product-info .product-info-act {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	text-align: center;
	color: #FFF;
}

.product-info .product-info-act em {
	font-style: normal;
	position: relative;
	font-size: 1.2em;
	font-weight: 100;
}

.product-info .product-info-act-left, .product-info .product-info-act-right {
	float: left;
	overflow: hidden;
}

.product-info .product-info-act-left {
	text-align: right;
	width: 45%;
}

.product-info .product-info-act-left em {
	-webkit-transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
	left: 0%;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-info .product-info-act-right {
	text-align: left;
	margin-left: 2%;
	width: 53%;
}

.product-info .product-info-act-right em {
	-webkit-transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
	right: 0%;
	font-weight: 600;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-info:hover .product-info-act-left em {
	filter: alpha(opacity=100);
	opacity: 1;
}

.product-info:hover .product-info-act-right em {
	filter: alpha(opacity=100);
	opacity: 1;
}

.product-info .product-info-content {
	padding: 15px;
	text-align: left;
	display: block;
}

.product-info .product-info-caption {
	padding: 0 15px 15px;
	text-align: left;
	display: block;
}

.product-info .product-info-caption p {
	margin: 0;
	padding: 0 0 10px;
}

.product-info .product-info-extra {
	clear: both;
	padding: 10px 0 0;
	margin: 10px 0 0;
	border-top: 1px solid #EBEBF4;
	display: block;
}

.product-info .product-info-extra.social {
	text-align: center;
}

.product-info .product-info-extra.social a {
	border-right: 1px solid #EBEBF4;
	display: inline-block;
	margin-right: 10px;
	padding-right: 10px;
	font-size: 0.9em;
	color: #ACACAC;
	width: auto;
}

.product-info .product-info-extra.social a:last-child {
	border-right: 0;
	margin-right: 0;
	padding-right: 0;
}

.product-info .date {
	color: #9AA1AB;
	font-size: 0.9em;
}

.product-info.secundary .product-info-content {
	text-align: center;
}

.product-info.secundary .product-info-content h4 {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	color: #FFF;
	position: relative;
	top: -25%;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-info.secundary .product-info-content .date {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	position: relative;
	top: 25%;
	display: block;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-info.secundary .product-info-act {
	top: 30%;
}

.product-info.secundary .label {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	clear: both;
	display: inline-block;
	margin-top: 15px;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-info.secundary:hover .label {
	filter: alpha(opacity=100);
	opacity: 1;
}

.product-info.secundary:hover .product-info-content h4 {
	top: 0;
	filter: alpha(opacity=100);
	opacity: 1;
}

.product-info.secundary:hover .product-info-content .date {
	top: 0;
	filter: alpha(opacity=100);
	opacity: 1;
}

/* Rating */
.shop .review_num {
	margin-right: 10px;
	float: left;
	position: relative;
	top: -1px;
}

.shop .star-rating {
	float: none;
	position: relative;
	top: 2px;
	font-family: 'star';
	font-size: 1em;
	height: 1.2em;
	line-height: 1em;
	overflow: hidden;
	position: relative;
	width: 5.4em;
	margin-bottom: 25px;
}

.shop .star-rating:before {
	color: #E0DADF;
	content: "SSSSS";
	float: left;
	left: 0;
	position: absolute;
	top: 0;
}

.shop .star-rating span {
	float: left;
	left: 0;
	overflow: hidden;
	padding-top: 1.5em;
	position: absolute;
	top: 0;
}

.shop .star-rating span:before {
	content: "SSSSS";
	left: 0;
	position: absolute;
	top: 0;
}

.shop .summary .price {
	color: #444;
	font-size: 2em;
	letter-spacing: -1px;
	line-height: 30px;
	margin-top: 20px;
}

.shop .quantity {
	margin: 0 15px 25px 0;
	overflow: hidden;
	position: relative;
	width: 125px;
	height: 35px;
	float: left;
}

.shop .quantity .minus {
	background: #f4f4f4;
	border: 1px solid #C8BFC6;
	border-radius: 2px;
	box-shadow: none;
	color: #5E5E5E;
	cursor: pointer;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 35px;
	line-height: 13px;
	margin: 0;
	overflow: visible;
	outline: 0;
	padding: 0;
	position: absolute;
	text-align: center;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
	vertical-align: text-top;
	width: 35px;
}

.shop .quantity .plus {
	background: #f4f4f4;
	border: 1px solid #C8BFC6;
	border-radius: 2px;
	box-shadow: none;
	color: #5E5E5E;
	cursor: pointer;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 35px;
	line-height: 13px;
	margin: 0;
	overflow: visible;
	outline: 0;
	padding: 0;
	position: absolute;
	text-align: center;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
	vertical-align: text-top;
	width: 35px;
	right: 0;
	top: 0;
}

.shop .quantity .qty {
	border: 1px solid #CCC;
	box-shadow: none;
	float: left;
	height: 35px;
	padding: 0 39px;
	text-align: center;
	width: 125px;
	font-size: 1em;
}

.shop .quantity .qty::-webkit-inner-spin-button, .shop .quantity .qty::-webkit-outer-spin-button {
	-webkit-appearance: none;
	margin: 0;
}

.shop .quantity .qty::-ms-clear {
	display: none;
}

.shop .product_meta {
	clear: both;
}

.shop .tabs-product {
	margin-top: 35px;
}

.shop ul.comments .comment-arrow {
	border-right-color: #F5F7F7;
}

.shop ul.comments .comment-block {
	background: #F5F7F7;
}

.shop table.cart {
	width: 100%;
	margin: 0;
	text-align: left;
}

.shop table.cart img {
	height: auto;
	width: 55px;
}

.shop table.cart th {
	padding: 8px 10px;
}

.shop table.cart td {
	border-top: 1px solid #DCDCDC;
	padding: 8px 10px;
}

.shop table.cart td.actions {
	padding: 20px 10px;
}

.shop table.cart .remove .fa {
	font-size: 1.5em;
}

.shop table.cart .coupon {
	float: left;
}

.shop table.cart .product-remove {
	width: 1%;
}

.shop table.cart .product-thumbnail {
	width: 7%;
}

.shop table.cart .product-name {
	width: 60%;
}

.shop table.cart .quantity {
	top: 10px;
	position: relative;
}

.shop .actions-continue {
	float: right;
}

.shop .cart-totals {
	width: 100%;
}

.shop .cart-totals th, .shop .cart-totals td {
	border-top: 1px solid #DCDCDC;
	padding: 8px 10px;
}

.shop .cart-totals tr.total .amount {
	font-size: 2em;
	display: block;
	padding-top: 10px;
}

.shop ul.simple-post-list li {
	border: 0;
}

/* Product Thumb Info */
.product-thumb-info {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	border-radius: 6px;
	padding: 0;
	position: relative;
	border: 0;
	border-bottom: 3px solid #E3E4E8;
	background: #F7F9FC;
	display: block;
	overflow: hidden;
	position: relative;
	text-decoration: none;
	max-width: 100%;
	text-align: center;
	text-decoration: none;
}

.product-thumb-info:hover {
	background-color: #FFF;
	text-decoration: none;
}

.product-thumb-info a {
	text-decoration: none;
	display: inline-block;
	width: 100%;
}

.product-thumb-info a:hover {
	text-decoration: none;
	display: inline-block;
	width: 100%;
}

.product-thumb-info img {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	border-radius: 6px 6px 0 0;
}

.product-thumb-info h4 {
	color: #404751;
	letter-spacing: -1px;
	font-weight: 600;
	font-size: 1.4em;
	line-height: 1.1em;
	margin: 0;
	padding: 0;
}

.product-thumb-info + .product-thumb-info {
	border-radius: 0 0 6px 6px;
	margin-top: -5px;
}

.product-thumb-info .product-thumb-info-touch-hover {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	display: none;
	background-color: transparent;
}

.product-thumb-info.hover .product-thumb-info-touch-hover {
	display: block;
}

.product-thumb-info .product-thumb-info-image {
	display: block;
	position: relative;
}

.product-thumb-info .product-thumb-info-image:before {
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
	content: "";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: #171717;
	width: 100%;
	height: 100%;
	filter: alpha(opacity=0);
	opacity: 0;
	border-radius: 6px 6px 0 0;
}

.product-thumb-info:hover .product-thumb-info-image:before {
	filter: alpha(opacity=80);
	opacity: 0.8;
}

.product-thumb-info .product-thumb-info-action {
	position: absolute;
	top: 40%;
	left: 0;
	right: 0;
	text-align: center;
	color: #FFF;
	filter: alpha(opacity=0);
	opacity: 0;
}

.product-thumb-info:hover .product-thumb-info-action {
	filter: alpha(opacity=100);
	opacity: 1;
	top: 50%;
}

.product-thumb-info .product-thumb-info-action em {
	font-style: normal;
}

.product-thumb-info .product-thumb-info-content {
	padding: 15px;
	text-align: left;
	display: block;
}

.product-thumb-info .product-thumb-info-caption {
	padding: 0 15px 15px;
	text-align: left;
	display: block;
}

.product-thumb-info .product-thumb-info-caption p {
	margin: 0;
	padding: 0 0 10px;
}

.product-thumb-info .product-thumb-info-extra {
	clear: both;
	padding: 10px 0 0;
	margin: 10px 0 0;
	border-top: 1px solid #EBEBF4;
	display: block;
}

.product-thumb-info .product-thumb-info-extra.social a:last-child {
	border-right: 0;
	margin-right: 0;
	padding-right: 0;
}

/* Product Thumb Info - Full Width */
.full-width .product-thumb-info .product-thumb-info-image:before {
	border-radius: 0;
}

/* Responsive */
@media (max-width: 991px) {
	.shop .actions-continue {
		float: none;
	}

	.shop table.cart th.product-price, .shop table.cart td.product-price, .shop table.cart th.product-quantity, .shop table.cart td.product-quantity {
		display: none;
	}

	#header nav.mega-menu .mega-menu-shop a {
		color: #FFF;
	}

	#header nav.mega-menu .mega-menu-shop a .fa-angle-down {
		display: none !important;
	}

	#header nav.mega-menu .mega-menu-shop > ul.dropdown-menu {
		display: none !important;
	}
}
