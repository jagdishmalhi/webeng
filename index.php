<?php 
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("location:my-account.php");
	}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">

<!-- Mirrored from cakeart.foobla.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2017 15:57:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    	<base  />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>CakeArt | Home</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="component/search/index1791.php?id=1&amp;Itemid=437&amp;format=opensearch" rel="search" title="Search CakeArt" type="application/opensearchdescription+xml" />
	<link rel="stylesheet" href="components/com_sppagebuilder/assets/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="components/com_sppagebuilder/assets/css/animate.min.css" type="text/css" />
	<link rel="stylesheet" href="components/com_sppagebuilder/assets/css/sppagebuilder.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/jquery.fancybox-1.3.402a6.css?vmver=9293" type="text/css" />
	<link rel="stylesheet" href="components/com_virtuemart/assets/css/chosen02a6.css?vmver=9293" type="text/css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=greek-ext" type="text/css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,regular,700&amp;subset=greek-ext" type="text/css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico:regular&amp;subset=latin" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/owl.carousel.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/jquery.fancybox-1.3.4.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/legacy.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/template.css" type="text/css" />
	<link rel="stylesheet" href="templates/cakeart/css/presets/preset4.css" type="text/css" class="preset" />
	<link rel="stylesheet" href="media/mod_cmc/css/cmc.css" type="text/css" />
	<link rel="stylesheet" href="media/mod_cmc/css/bootstrap-form.css" type="text/css" />
	<style type="text/css">
body{font-family:Roboto, sans-serif; font-size:15px; font-weight:normal; }
h1{font-family:Roboto Slab, sans-serif; font-size:28px; font-weight:700; }
h2{font-family:Roboto Slab, sans-serif; font-size:24px; font-weight:700; }
h3{font-family:Roboto Slab, sans-serif; font-size:20px; font-weight:700; }
h4{font-family:Roboto Slab, sans-serif; font-size:18px; font-weight:700; }
h5{font-family:Roboto Slab, sans-serif; font-weight:normal; }
.sp-megamenu-parent{font-family:Roboto Slab, sans-serif; font-size:14px; font-weight:normal; }
.sp_ob_homeslider .sppb-item .sppb-carousel-caption .sppb-carousel-pro-text h2{font-family:Pacifico, sans-serif; font-weight:normal; }
 .box_featured .sppb-feature-box-title{font-family:Pacifico, sans-serif; font-weight:normal; }
 .sp_ob_opening_slider .sppb-carousel-inner .sppb-item .sppb-carousel-caption h2{font-family:Pacifico, sans-serif; font-weight:normal; }
 #sp-page-title .sp-page-title h1{font-family:Pacifico, sans-serif; font-weight:normal; }
#sp-top-bar{ background-image:url("images/bg-header-top.jpg");background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position:0 0;color:#aaaaaa; }
#sp-top-bar a{color:#aaaaaa;}
#sp-top-bar a:hover{color:#ffffff;}
#sp-social{ background-color:#f9f5ef;padding:32px 0 20px 0; }
#sp-bottom{ background-image:url("images/wave-line.png");background-color:#1b1b1b;color:#aaaaaa;padding:60px 0px 30px 0px; }
#sp-bottom a{color:#ffffff;}
#sp-bottom a:hover{color:#e47277;}
#sp-footer{ background-color:#1b1b1b;color:#666666;padding:15px 0; }
#sp-footer a{color:#ffffff;}
	</style>
	<script src="media/jui/js/jquery.min.js" type="text/javascript"></script>
	<script src="media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
	<script src="media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery-ui.mine17e.js?vmver=1.9.2" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery.ui.autocomplete.php.js" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery.noconflict.js" type="text/javascript" async="async"></script>
	<script src="components/com_virtuemart/assets/js/vmsite02a6.js?vmver=9293" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/fancybox/jquery.fancybox-1.3.4.packa909.js?vmver=1.3.4" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/vmprices02a6.js?vmver=9293" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/main.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/jquery.counterup.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/jquery.waypoints.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
	<script src="templates/cakeart/js/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
	<script src="media/system/js/mootools-core.js" type="text/javascript"></script>
	<script src="media/system/js/core.js" type="text/javascript"></script>
	<script src="media/system/js/punycode.js" type="text/javascript"></script>
	<script src="media/system/js/validate.js" type="text/javascript"></script>
	<script src="media/mod_cmc/js/cmc.js" type="text/javascript"></script>
	<script src="media/system/js/html5fallback.js" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/chosen.jquery.min02a6.js?vmver=9293" type="text/javascript"></script>
	<script src="modules/mod_vm_ajax_cart_ob/assets/js/update_cart02a6.js?vmver=9293" type="text/javascript"></script>
	<script type="text/javascript">
if (typeof Virtuemart === "undefined")
	Virtuemart = {};Virtuemart.vmSiteurl = vmSiteurl = 'index.php' ;
Virtuemart.vmLang = vmLang = "&lang=en";
Virtuemart.vmLangTag = vmLangTag = "en";
Itemid = '&Itemid=437';
Virtuemart.addtocart_popup = "1" ; 
usefancy = true;
jQuery(document).ready(function() {

    new cmc("#cmc-signup-118");

});
	</script>
	<script type="text/javascript">
		(function() {
			Joomla.JText.load({"JLIB_FORM_FIELD_INVALID":"Invalid field:&#160"});
		})();
	</script>
	<meta content="Home" property="og:title" />
	<meta content="website" property="og:type"/>
	<meta content="http://cakeart.foobla.com/" property="og:url" />

   
    </head>
<body class="site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
<div id="back-to-top"><i class="fa fa-angle-double-up"></i></div>
    <div class="body-innerwrapper">
        <section id="sp-top-bar">
        	<div class="container">
        		<div class="row">
        			<div id="sp-top1" class="col-sm-6 col-md-6">
        				<div class="sp-column ">
        					<ul class="sp-contact-info">
        						<li class="sp-contact-phone"><i class="fa fa-phone"></i> Call Us: <a href="tel:+2288724444">+2288724444</a></li>
        					</ul>
        				</div>
        			</div>
        			<div id="sp-top2" class="col-sm-6 col-md-6">
        				<div class="sp-column ">
        					<div class="sp-module ">
        						<div class="sp-module-content">
        							<ul class="nav menu">
										<li class="item-513">
											<?php  
												// if (isset($_GET["msg"]) != "") {
												// 	echo $_GET["msg"];
												// 	?>
												 		<span>Welcome <?php echo $_SESSION['username']; ?></span>
												 	<?php
												// }
												// else{
													
												// 	if(!isset($_SESSION["username"]))
												// 	{
												// 		?>
												 		<!-- <a href="my-account.php">Login</a> -->
												 		<?php
												// 	}												
												// }
											?>
											</li>
										<!-- <li class="item-514"><a href="#" >FAQ's</a></li>
										<li class="item-515"><a href="#" >Help</a></li> -->
										<li class="">
											<a href="logout.php">Logout</a>										
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<header id="sp-header">
			<div class="container">
				<div class="row">
					<div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3">
						<div class="sp-column ">
							<a class="logo" href="index.php">
								<h1><img class="sp-default-logo" src="images/logo.png" alt="CakeArt"></h1></a>
						</div>
					</div>
					<div id="sp-menu" class="col-xs-4 col-sm-9 col-md-9"><div class="sp-column ">
						<div class='sp-megamenu-wrapper'>
							<a id="offcanvas-toggler" class="visible-xs visible-sm" href="#"><i class="fa fa-bars"></i></a>
							<ul class="sp-megamenu-parent menu-fade hidden-xs hidden-sm">
								<li class="sp-menu-item current-item active"><a  href="index.php" >Home</a></li>
								<li class="sp-menu-item"><a  href="blog.php" >Blog</a></li>
								<li class="sp-menu-item"><a  href="recipes.php" >Recipes</a></li>
								<li class="sp-menu-item"><a  href="shop.php" >Shop</a></li>
								<li class="sp-menu-item sp-has-child"><a  href="#" >Features</a>
									<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
										<div class="sp-dropdown-inner">
											<ul class="sp-dropdown-items">
												<li class="sp-menu-item"><a  href="features/about-us.php" >About us</a></li>
												<li class="sp-menu-item"><a  href="features/page-with-left-sidebar.php" >Page with left sidebar</a></li>
												<li class="sp-menu-item"><a  href="features/page-with-right-sidebar.php" >Page with right sidebar</a></li>
												<li class="sp-menu-item"><a  href="features/404-page.php" >404 Page</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="sp-menu-item"><a  href="contact.php" >Contact</a></li>
							</ul>
						</div>
						<div class="sp-module ob_cart">
							<div class="sp-module-content">
								<div class="vmCartModule" id="vmCartModule">
									<div class="minicart_hover" id="header-mini-cart">
										<span class="cart-items-number">
											<img alt="" src="images/icon-cart.png">
											<span class="wrapper-items-number">
												<span class="items-number total_products">0</span>
											</span>
										</span>
										<div class="clear"></div>
									</div>

									<div id="hiddencontainer" style=" display: none; ">
										<ul class="cart_list">
											<li class="cart_list product_list_widget vmcontainer">
												<span class="image_ajax_cart">
												</span>
												<span class="product_name"></span>
												<span class="quantity"></span>&nbsp;x&nbsp;

																	<div class="subtotal_with_tax" style="float: right;"></div>
																<div class="clear"></div>
											</li>
										</ul>
									</div>

									<div class="shopping_cart_content vm_cart_products">

		
		
									<div class="null_cart">No products in cart</div>

		

								</div>

								<div style="clear:both;"></div>
								<div class="payments-signin-button" ></div>
									<noscript>Please wait	</noscript>
								</div>

<script id="updateChosen_js" type="text/javascript">//<![CDATA[ 
if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
	Virtuemart.updateChosenDropdownLayout = function() {
		var vm2string = {editImage: 'edit image',select_all_text: 'Select all',select_some_options_text: 'Available for all'};
		jQuery("select.vm-chzn-select").each( function () {
			var swidth = jQuery(this).css("width")+10;
			jQuery(this).chosen({enable_select_all: true,select_all_text : vm2string.select_all_text,select_some_options_text:vm2string.select_some_options_text,disable_search_threshold: 5, width: swidth});
		});
	}
	jQuery(document).ready( function() {
		Virtuemart.updateChosenDropdownLayout($);
	}); //]]>
</script>
<script id="vm.countryState_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready( function($) {
			$("#virtuemart_country_id_field").vm2front("list",{dest : "#virtuemart_state_id_field",ids : "",prefiks : ""});
		}); //]]>
</script>
<script id="vm.countryStateshipto__js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready( function($) {
			$("#shipto_virtuemart_country_id_field").vm2front("list",{dest : "#shipto_virtuemart_state_id_field",ids : "",prefiks : "shipto_"});
		}); //]]>
</script>

<script id="vm.CartModule.UpdateModule_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function(){
    jQuery("body").live("updateVirtueMartCartModule", function(e) {
        jQuery("#vmCartModule").updateVirtueMartCartModule();
    });
}); //]]>
</script>
								</div>
							</div>
							<div class="sp-module  search_top"><div class="sp-module-content"><!--BEGIN Search Box -->

<div class="icon_top">
<button data-toggle="modal" data-target="#searchModal">
	<i class="fa fa-search fa-lg"></i>
</button>
</div>
<!-- Modal -->
<div id="searchModal" class="modal search_products fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<div class="content_search">
				<form id="form_search_top" action="http://cakeart.foobla.com/shop/search" method="get">
					<div class="search">
						<input name="keyword" id="mod_virtuemart_search" maxlength="20" class="inputbox search_top" type="text" size="20" placeholder="Search..." />					</div>
					<input type="hidden" name="limitstart" value="0" />
					<input type="hidden" name="option" value="com_virtuemart" />
					<input type="hidden" name="view" value="category" />
					<input type="hidden" name="virtuemart_category_id" value="0"/>
					
				</form>
				</div>
			</div>
		</div>

	</div>
</div></div></div></div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "></div></div></div></section><section id="sp-main-body"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>

<div id="sp-page-builder" class="sp-page-builder  page-1">
		
	<div class="page-content">
		<section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms"><div style="background-image: url('images/2016/03/23/bg-slide-1.jpg');" class="sppb-carousel sp_ob_homeslider sppb-slide " data-sppb-ride="sppb-carousel"><div class="sppb-carousel-inner sppb-text-center"><div class="sppb-item one_img"><div class="sppb-carousel-item-inner"><div class="sppb-carousel-img"><img alt="" src="images/2016/03/23/cake.png"></div><div class="sppb-carousel-caption sppb-text-left"><div class="sppb-carousel-pro-text"><h2>Strawberry Cupcakes</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="recipes.php" class="sppb-btn sppb-btn-default sppb-btn-" role="button"><i class="fa fa-angle-right"></i> See the recipe</a></div></div></div></div><div class="sppb-item one_img"><div class="sppb-carousel-item-inner"><div class="sppb-carousel-img"><img alt="" src="images/2016/04/08/1.png"></div><div class="sppb-carousel-caption sppb-text-left"><div class="sppb-carousel-pro-text"><h2>Celebration Cakes</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="recipes.php" class="sppb-btn sppb-btn-default sppb-btn-" role="button"><i class="fa fa-angle-right"></i> See the recipe</a></div></div></div></div><div class="sppb-item one_img"><div class="sppb-carousel-item-inner"><div class="sppb-carousel-img"><img alt="" src="images/2016/04/08/slider2.png"></div><div class="sppb-carousel-caption sppb-text-left"><div class="sppb-carousel-pro-text"><h2>Pretty Cake</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="recipes.php" class="sppb-btn sppb-btn-default sppb-btn-" role="button"><i class="fa fa-angle-right"></i> See the recipe</a></div></div></div></div></div><a class="sppb-carousel-arrow left sppb-carousel-control" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="sppb-carousel-arrow right sppb-carousel-control" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></div></div></div></div></section><section  class="sppb-section box_featured" style=""><div class="sppb-container"><div class="sppb-row"><div class="sppb-col-sm-4"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content"><div class="sppb-media"><div class="pull-left"><span style="display:inline-block;;"><img class="sppb-img-responsive" src="images/2016/03/23/iconbox1.jpg" alt=""></span></div><div class="sppb-media-body"><h1 class="sppb-feature-box-title sppb-media-heading" style="">Products</h1><div class="sppb-addon-text">Lorem ipsum dolor sit amet consectetuer aliquet.</div></div></div></div></div></div></div><div class="sppb-col-sm-4"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content"><div class="sppb-media"><div class="pull-left"><span style="display:inline-block;;"><img class="sppb-img-responsive" src="images/2016/03/23/iconbox2.jpg" alt=""></span></div><div class="sppb-media-body"><h1 class="sppb-feature-box-title sppb-media-heading" style="">Cake Class</h1><div class="sppb-addon-text">Lorem ipsum dolor sit amet consectetuer aliquet.</div></div></div></div></div></div></div><div class="sppb-col-sm-4"><div class="sppb-addon-container" style=""><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content"><div class="sppb-media"><div class="pull-left"><span style="display:inline-block;;"><img class="sppb-img-responsive" src="images/2016/03/23/iconbox3.jpg" alt=""></span></div><div class="sppb-media-body"><h1 class="sppb-feature-box-title sppb-media-heading" style="">Recipes</h1><div class="sppb-addon-text">Lorem ipsum dolor sit amet consectetuer aliquet.</div></div></div></div></div></div></div></div></div></section><section  class="sppb-section " style=""><div class="sppb-container"><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style=""><div class="sc-heading sppb-text-center "><h3 class="heading__primary">Recent recipes</h3><div class="separator"><img src="images/cupcake.png" alt=""></div></div><div class="sppb-addon sppb-addon-module "><div class="sppb-addon-content"><div class="latestnews recipes_layout">
    <div class="row">
            <div class="col-sm-6 col-md-3">
            <article>
            <div class="item">
                <div class="content-inner">
                    <div class="content-wrap">
                        <div class="recipe_image">
                            <a href="recipe/chocolate/79-hats-off-to-the-graduate-cake.php">
                                <img src="images/2016/04/21/recipe1-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-header">
                            <div class="rating_recipes">
                                	<div class="post_rating" id="post_vote_79">
		<div class="voting-symbol">
			<span class="star" data-number="5"></span><span class="star active" data-number="4"></span><span class="star active" data-number="3"></span><span class="star active" data-number="2"></span><span class="star active" data-number="1"></span>		</div>
		<span class="ajax-loader fa fa-spinner fa-spin"></span>
		<span class="voting-result"></span>
	</div>
	                            </div>
                            <h2>
                                <a href="recipe/chocolate/79-hats-off-to-the-graduate-cake.php">
                                    Hats Off To The Graduate Cake</a>
                            </h2>
                            <ul class="article-info">
                                <li class="createdby" itemscope="" itemtype="http://schema.org/Person">
                                    <span>By </span>
                                    <a href="index.php"><span class="author_post" itemprop="name" data-toggle="tooltip" title="" data-original-title="Written by ">Super User</span></a>
                                </li>
                                                                    <li class="cook-time">
                                        <i class="fa fa-clock-o"></i>
                                        10 minutes                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        </div>
            <div class="col-sm-6 col-md-3">
            <article>
            <div class="item">
                <div class="content-inner">
                    <div class="content-wrap">
                        <div class="recipe_image">
                            <a href="recipe/pizzas/80-spiced-cider-punch.php">
                                <img src="images/2016/04/21/maxresdefault.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-header">
                            <div class="rating_recipes">
                                	<div class="post_rating" id="post_vote_80">
		<div class="voting-symbol">
			<span class="star" data-number="5"></span><span class="star active" data-number="4"></span><span class="star active" data-number="3"></span><span class="star active" data-number="2"></span><span class="star active" data-number="1"></span>		</div>
		<span class="ajax-loader fa fa-spinner fa-spin"></span>
		<span class="voting-result"></span>
	</div>
	                            </div>
                            <h2>
                                <a href="recipe/pizzas/80-spiced-cider-punch.php">
                                    Spiced Cider Punch</a>
                            </h2>
                            <ul class="article-info">
                                <li class="createdby" itemscope="" itemtype="http://schema.org/Person">
                                    <span>By </span>
                                    <a href="index.php"><span class="author_post" itemprop="name" data-toggle="tooltip" title="" data-original-title="Written by ">Super User</span></a>
                                </li>
                                                                    <li class="cook-time">
                                        <i class="fa fa-clock-o"></i>
                                        10 minutes                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        </div>
            <div class="col-sm-6 col-md-3">
            <article>
            <div class="item">
                <div class="content-inner">
                    <div class="content-wrap">
                        <div class="recipe_image">
                            <a href="recipe/stater/81-diploma-cake.php">
                                <img src="images/2016/04/05/recipe3.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-header">
                            <div class="rating_recipes">
                                	<div class="post_rating" id="post_vote_81">
		<div class="voting-symbol">
			<span class="star" data-number="5"></span><span class="star active" data-number="4"></span><span class="star active" data-number="3"></span><span class="star active" data-number="2"></span><span class="star active" data-number="1"></span>		</div>
		<span class="ajax-loader fa fa-spinner fa-spin"></span>
		<span class="voting-result"></span>
	</div>
	                            </div>
                            <h2>
                                <a href="recipe/stater/81-diploma-cake.php">
                                    Diploma Cake</a>
                            </h2>
                            <ul class="article-info">
                                <li class="createdby" itemscope="" itemtype="http://schema.org/Person">
                                    <span>By </span>
                                    <a href="index.php"><span class="author_post" itemprop="name" data-toggle="tooltip" title="" data-original-title="Written by ">Super User</span></a>
                                </li>
                                                                    <li class="cook-time">
                                        <i class="fa fa-clock-o"></i>
                                        10 minutes                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        </div>
            <div class="col-sm-6 col-md-3">
            <article>
            <div class="item">
                <div class="content-inner">
                    <div class="content-wrap">
                        <div class="recipe_image">
                            <a href="recipe/chocolate/102-agave-holiday-ham-glaze.php">
                                <img src="images/2016/04/21/recipe7-11.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-header">
                            <div class="rating_recipes">
                                	<div class="post_rating" id="post_vote_102">
		<div class="voting-symbol">
			<span class="star" data-number="5"></span><span class="star active" data-number="4"></span><span class="star active" data-number="3"></span><span class="star active" data-number="2"></span><span class="star active" data-number="1"></span>		</div>
		<span class="ajax-loader fa fa-spinner fa-spin"></span>
		<span class="voting-result"></span>
	</div>
	                            </div>
                            <h2>
                                <a href="recipe/chocolate/102-agave-holiday-ham-glaze.php">
                                    Agave Holiday Ham Glaze</a>
                            </h2>
                            <ul class="article-info">
                                <li class="createdby" itemscope="" itemtype="http://schema.org/Person">
                                    <span>By </span>
                                    <a href="index.php"><span class="author_post" itemprop="name" data-toggle="tooltip" title="" data-original-title="Written by ">Super User</span></a>
                                </li>
                                                                    <li class="cook-time">
                                        <i class="fa fa-clock-o"></i>
                                        1 minute                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        </div>
        </div>
    <div class="btn_all">
        <a href="recipes.php">View all</a>
    </div>
</div>

<div>
	<h1>Jagdish</h1>

<div class="products">
	
    <li class="product">
    <form method="post" action="cart_update.php">
    <div class="product-content"><h3></h3>
    <div class="product-thumb"></div>
    <div class="product-desc"></div>
    <div class="product-info">
    
    
    <fieldset>
    
    <label>
        <span>Color</span>
        <select name="product_color">
        <option value="Black">Black</option>
        <option value="Silver">Silver</option>
        </select>
    </label>
    
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
    </label>
    
    </fieldset>
    <input type="hidden" name="product_code" value="{$obj->product_code}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
</ul>

</div>
</div>

</div></div></div></div></div></div></section><section  class="sppb-section " style=""><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style=""><div class="sppb-carousel sp_ob_opening_slider sppb-slide " data-sppb-ride="sppb-carousel"><ol class="sppb-carousel-indicators"></ol><div class="sppb-carousel-inner sppb-text-left"><div class="sppb-item"><div class="sppb-carousel-item-inner"><div class="bg_img"><img src="images/2016/03/24/slider222.jpg" alt=""></div><div class="sppb-carousel-caption sppb-text-center"><div class="sppb-carousel-pro-text"><h5>Class opening</h5><h2>Snack cake</h2><div class="time"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.773px" height="45.773px" viewBox="0 0 45.773 45.773" style="enable-background:new 0 0 45.773 45.773;" xml:space="preserve">
									<g><g><path d="M5.081,13.737c2.582-3.942,6.609-6.849,11.32-7.988c0.363-0.087,0.662-0.344,0.802-0.689
											c0.141-0.346,0.107-0.738-0.091-1.055C15.604,1.601,12.936,0,9.888,0C5.176,0,1.354,3.82,1.354,8.532c0,2,0.691,3.837,1.845,5.29
											c0.231,0.293,0.589,0.455,0.962,0.438S4.877,14.048,5.081,13.737z"></path><path d="M35.886,0c-3.034,0-5.693,1.586-7.204,3.974c-0.2,0.316-0.235,0.711-0.094,1.059c0.142,0.349,0.442,0.605,0.809,0.691
											c4.724,1.112,8.765,3.999,11.369,7.928c0.207,0.312,0.552,0.505,0.927,0.518c0.375,0.014,0.731-0.154,0.961-0.451
											c1.105-1.436,1.766-3.232,1.766-5.186C44.417,3.82,40.598,0,35.886,0z"></path><path d="M41.752,26.132c0-3.294-0.857-6.39-2.351-9.084c-2.769-4.99-7.742-8.577-13.595-9.475c-0.933-0.143-1.88-0.24-2.853-0.24
											c-1.016,0-2.006,0.104-2.979,0.26C14.146,8.528,9.198,12.13,6.458,17.126c-1.467,2.676-2.304,5.744-2.304,9.006
											c0,5.586,2.463,10.597,6.343,14.041l-1.584,2.231c-0.682,0.961-0.456,2.291,0.505,2.975c0.375,0.266,0.806,0.395,1.233,0.395
											c0.668,0,1.326-0.313,1.741-0.898l1.583-2.23c2.669,1.457,5.728,2.287,8.978,2.287c3.249,0,6.308-0.83,8.977-2.287l1.583,2.23
											c0.416,0.586,1.073,0.898,1.741,0.898c0.427,0,0.857-0.129,1.232-0.395c0.961-0.684,1.188-2.014,0.506-2.975l-1.584-2.231
											C39.288,36.729,41.752,31.718,41.752,26.132z M22.954,39.674c-7.468,0-13.542-6.074-13.542-13.542
											c0-2.328,0.591-4.519,1.629-6.435c1.976-3.644,5.58-6.269,9.826-6.93c0.682-0.106,1.375-0.178,2.087-0.178
											c0.67,0,1.325,0.065,1.97,0.16c4.282,0.628,7.925,3.253,9.924,6.913c1.05,1.923,1.647,4.126,1.647,6.469
											C36.495,33.6,30.421,39.674,22.954,39.674z"></path><path d="M30.54,29.3l-5.166-3.19c-0.107-0.604-0.434-1.125-0.893-1.494l0.236-6.482c0.029-0.828-0.617-1.523-1.444-1.554
											c-0.825-0.038-1.523,0.616-1.554,1.444l-0.237,6.489c-0.641,0.452-1.063,1.196-1.063,2.041c0,1.381,1.119,2.499,2.5,2.499
											c0.393,0,0.76-0.099,1.09-0.26l4.955,3.062c0.246,0.15,0.519,0.223,0.787,0.223c0.503,0,0.993-0.252,1.278-0.711
											C31.465,30.66,31.245,29.736,30.54,29.3z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
								</svg><p>08:00 AM Monday<br />05:00 PM Monday</p></div><div class="btn_item"><a href="blog/84-snack-cake.php" class="ob-btn sppb-btn-style2 sppb-btn- " role="button">Join now</a></div></div></div></div></div><div class="sppb-item"><div class="sppb-carousel-item-inner"><div class="bg_img"><img src="images/2016/04/21/class.jpg" alt=""></div><div class="sppb-carousel-caption sppb-text-center"><div class="sppb-carousel-pro-text"><h5>Class opening</h5><h2>Spicy macadamia pretzels</h2><div class="time"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.773px" height="45.773px" viewBox="0 0 45.773 45.773" style="enable-background:new 0 0 45.773 45.773;" xml:space="preserve">
									<g><g><path d="M5.081,13.737c2.582-3.942,6.609-6.849,11.32-7.988c0.363-0.087,0.662-0.344,0.802-0.689
											c0.141-0.346,0.107-0.738-0.091-1.055C15.604,1.601,12.936,0,9.888,0C5.176,0,1.354,3.82,1.354,8.532c0,2,0.691,3.837,1.845,5.29
											c0.231,0.293,0.589,0.455,0.962,0.438S4.877,14.048,5.081,13.737z"></path><path d="M35.886,0c-3.034,0-5.693,1.586-7.204,3.974c-0.2,0.316-0.235,0.711-0.094,1.059c0.142,0.349,0.442,0.605,0.809,0.691
											c4.724,1.112,8.765,3.999,11.369,7.928c0.207,0.312,0.552,0.505,0.927,0.518c0.375,0.014,0.731-0.154,0.961-0.451
											c1.105-1.436,1.766-3.232,1.766-5.186C44.417,3.82,40.598,0,35.886,0z"></path><path d="M41.752,26.132c0-3.294-0.857-6.39-2.351-9.084c-2.769-4.99-7.742-8.577-13.595-9.475c-0.933-0.143-1.88-0.24-2.853-0.24
											c-1.016,0-2.006,0.104-2.979,0.26C14.146,8.528,9.198,12.13,6.458,17.126c-1.467,2.676-2.304,5.744-2.304,9.006
											c0,5.586,2.463,10.597,6.343,14.041l-1.584,2.231c-0.682,0.961-0.456,2.291,0.505,2.975c0.375,0.266,0.806,0.395,1.233,0.395
											c0.668,0,1.326-0.313,1.741-0.898l1.583-2.23c2.669,1.457,5.728,2.287,8.978,2.287c3.249,0,6.308-0.83,8.977-2.287l1.583,2.23
											c0.416,0.586,1.073,0.898,1.741,0.898c0.427,0,0.857-0.129,1.232-0.395c0.961-0.684,1.188-2.014,0.506-2.975l-1.584-2.231
											C39.288,36.729,41.752,31.718,41.752,26.132z M22.954,39.674c-7.468,0-13.542-6.074-13.542-13.542
											c0-2.328,0.591-4.519,1.629-6.435c1.976-3.644,5.58-6.269,9.826-6.93c0.682-0.106,1.375-0.178,2.087-0.178
											c0.67,0,1.325,0.065,1.97,0.16c4.282,0.628,7.925,3.253,9.924,6.913c1.05,1.923,1.647,4.126,1.647,6.469
											C36.495,33.6,30.421,39.674,22.954,39.674z"></path><path d="M30.54,29.3l-5.166-3.19c-0.107-0.604-0.434-1.125-0.893-1.494l0.236-6.482c0.029-0.828-0.617-1.523-1.444-1.554
											c-0.825-0.038-1.523,0.616-1.554,1.444l-0.237,6.489c-0.641,0.452-1.063,1.196-1.063,2.041c0,1.381,1.119,2.499,2.5,2.499
											c0.393,0,0.76-0.099,1.09-0.26l4.955,3.062c0.246,0.15,0.519,0.223,0.787,0.223c0.503,0,0.993-0.252,1.278-0.711
											C31.465,30.66,31.245,29.736,30.54,29.3z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
								</svg><p>10:00 AM Friday<br />08:00 PM Friday</p></div><div class="btn_item"><a href="blog/85-spicy-macadamia-pretzels.php" class="ob-btn sppb-btn-style2 sppb-btn- " role="button">Join now</a></div></div></div></div></div><div class="sppb-item"><div class="sppb-carousel-item-inner"><div class="bg_img"><img src="images/2016/04/21/slider333.jpg" alt=""></div><div class="sppb-carousel-caption sppb-text-center"><div class="sppb-carousel-pro-text"><h5>Class opening</h5><h2>Baking fun with John Doe</h2><div class="time"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.773px" height="45.773px" viewBox="0 0 45.773 45.773" style="enable-background:new 0 0 45.773 45.773;" xml:space="preserve">
									<g><g><path d="M5.081,13.737c2.582-3.942,6.609-6.849,11.32-7.988c0.363-0.087,0.662-0.344,0.802-0.689
											c0.141-0.346,0.107-0.738-0.091-1.055C15.604,1.601,12.936,0,9.888,0C5.176,0,1.354,3.82,1.354,8.532c0,2,0.691,3.837,1.845,5.29
											c0.231,0.293,0.589,0.455,0.962,0.438S4.877,14.048,5.081,13.737z"></path><path d="M35.886,0c-3.034,0-5.693,1.586-7.204,3.974c-0.2,0.316-0.235,0.711-0.094,1.059c0.142,0.349,0.442,0.605,0.809,0.691
											c4.724,1.112,8.765,3.999,11.369,7.928c0.207,0.312,0.552,0.505,0.927,0.518c0.375,0.014,0.731-0.154,0.961-0.451
											c1.105-1.436,1.766-3.232,1.766-5.186C44.417,3.82,40.598,0,35.886,0z"></path><path d="M41.752,26.132c0-3.294-0.857-6.39-2.351-9.084c-2.769-4.99-7.742-8.577-13.595-9.475c-0.933-0.143-1.88-0.24-2.853-0.24
											c-1.016,0-2.006,0.104-2.979,0.26C14.146,8.528,9.198,12.13,6.458,17.126c-1.467,2.676-2.304,5.744-2.304,9.006
											c0,5.586,2.463,10.597,6.343,14.041l-1.584,2.231c-0.682,0.961-0.456,2.291,0.505,2.975c0.375,0.266,0.806,0.395,1.233,0.395
											c0.668,0,1.326-0.313,1.741-0.898l1.583-2.23c2.669,1.457,5.728,2.287,8.978,2.287c3.249,0,6.308-0.83,8.977-2.287l1.583,2.23
											c0.416,0.586,1.073,0.898,1.741,0.898c0.427,0,0.857-0.129,1.232-0.395c0.961-0.684,1.188-2.014,0.506-2.975l-1.584-2.231
											C39.288,36.729,41.752,31.718,41.752,26.132z M22.954,39.674c-7.468,0-13.542-6.074-13.542-13.542
											c0-2.328,0.591-4.519,1.629-6.435c1.976-3.644,5.58-6.269,9.826-6.93c0.682-0.106,1.375-0.178,2.087-0.178
											c0.67,0,1.325,0.065,1.97,0.16c4.282,0.628,7.925,3.253,9.924,6.913c1.05,1.923,1.647,4.126,1.647,6.469
											C36.495,33.6,30.421,39.674,22.954,39.674z"></path><path d="M30.54,29.3l-5.166-3.19c-0.107-0.604-0.434-1.125-0.893-1.494l0.236-6.482c0.029-0.828-0.617-1.523-1.444-1.554
											c-0.825-0.038-1.523,0.616-1.554,1.444l-0.237,6.489c-0.641,0.452-1.063,1.196-1.063,2.041c0,1.381,1.119,2.499,2.5,2.499
											c0.393,0,0.76-0.099,1.09-0.26l4.955,3.062c0.246,0.15,0.519,0.223,0.787,0.223c0.503,0,0.993-0.252,1.278-0.711
											C31.465,30.66,31.245,29.736,30.54,29.3z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
								</svg><p>09:00 AM Saturday<br />04:00 PM Monday</p></div><div class="btn_item"><a href="blog/86-baking-fun-with-john-doe.php" class="ob-btn sppb-btn-style2 sppb-btn- " role="button">Join now</a></div></div></div></div></div></div></div></div></div></div></section><section  class="sppb-section " style=""><div class="sppb-container"><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style=""><div class="sppb-empty-space  clearfix" style="margin-bottom:23px;"></div><div class="sc-heading sppb-text-center "><h3 class="heading__primary">New products</h3><div class="separator"><img src="images/cupcake.png" alt=""></div></div>






<script id="ready.vmprices_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {

		Virtuemart.product($("form.product"));
}); //]]>
</script>
    <div class="slide_product_home">
        <div class="grid_products ">
            <div class="owl-carousel">
                                                            <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline23"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/chocolate/sirloin-cake-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/tiramisu-12_350x235.jpg" alt="tiramisu-12" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/chocolate/sirloin-cake-detail.php" >Tiramisu</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$18</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity23" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="23"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="23"/>
			<input type="hidden" name="pname" value="Tiramisu"/>
			<input type="hidden" name="pid" value="23"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline23">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop23" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/tiramisu-12.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop23" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop23" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Tiramisu</h3>
			<div class="product_meta">
				<span class="sku">SKU: VL1</span>
				<span class="cats">Categories:
					<a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>, <a href="shop/desserts.php" rel="tag">Desserts</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$18</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity23" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="23"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="23"/>
			<input type="hidden" name="pname" value="Tiramisu"/>
			<input type="hidden" name="pid" value="23"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/chocolate/sirloin-cake-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline22"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/celebration/cheese-burger-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/Tartufo-600x500_350x235.jpg" alt="Tartufo-600x500" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/celebration/cheese-burger-detail.php" >Tartufo di Pizzo</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$15</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity22" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="22"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="22"/>
			<input type="hidden" name="pname" value="Tartufo di Pizzo"/>
			<input type="hidden" name="pid" value="22"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline22">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop22" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/Tartufo-600x500.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop22" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop22" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Tartufo di Pizzo</h3>
			<div class="product_meta">
				<span class="sku">SKU: HA4554</span>
				<span class="cats">Categories:
					<a href="shop/celebration.php" rel="tag">Celebration</a>, <a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$15</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity22" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="22"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="22"/>
			<input type="hidden" name="pname" value="Tartufo di Pizzo"/>
			<input type="hidden" name="pid" value="22"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/celebration/cheese-burger-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline21"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/celebration/brith-cake-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/Strawberry-Cupcake-600x600_350x235.jpg" alt="Strawberry-Cupcake-600x600" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/celebration/brith-cake-detail.php" >Strawberry Cupcakes</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$11</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity21" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="21"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="21"/>
			<input type="hidden" name="pname" value="Strawberry Cupcakes"/>
			<input type="hidden" name="pid" value="21"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline21">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop21" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/Strawberry-Cupcake-600x600.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop21" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop21" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Strawberry Cupcakes</h3>
			<div class="product_meta">
				<span class="sku">SKU: SN56</span>
				<span class="cats">Categories:
					<a href="shop/celebration.php" rel="tag">Celebration</a>, <a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$11</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity21" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="21"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="21"/>
			<input type="hidden" name="pname" value="Strawberry Cupcakes"/>
			<input type="hidden" name="pid" value="21"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/celebration/brith-cake-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline20"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/celebration/christmas-cake-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/sachertorte31-600x540_350x235.jpg" alt="sachertorte31-600x540" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/celebration/christmas-cake-detail.php" >Sachertorte</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$13</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity20" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="20"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="20"/>
			<input type="hidden" name="pname" value="Sachertorte"/>
			<input type="hidden" name="pid" value="20"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline20">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop20" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/sachertorte31-600x540.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop20" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop20" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Sachertorte</h3>
			<div class="product_meta">
				<span class="sku">SKU: VL44</span>
				<span class="cats">Categories:
					<a href="shop/celebration.php" rel="tag">Celebration</a>, <a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>, <a href="shop/desserts.php" rel="tag">Desserts</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$13</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity20" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="20"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="20"/>
			<input type="hidden" name="pname" value="Sachertorte"/>
			<input type="hidden" name="pid" value="20"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/celebration/christmas-cake-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline19"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/chocolate/roller-coaster-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/cake2_350x235.jpg" alt="cake2" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/chocolate/roller-coaster-detail.php" >Roller Coaster</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$9</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity19" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="19"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="19"/>
			<input type="hidden" name="pname" value="Roller Coaster"/>
			<input type="hidden" name="pid" value="19"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline19">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop19" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/cake2.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop19" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop19" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Roller Coaster</h3>
			<div class="product_meta">
				<span class="sku">SKU: C54</span>
				<span class="cats">Categories:
					<a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$9</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity19" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="19"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="19"/>
			<input type="hidden" name="pname" value="Roller Coaster"/>
			<input type="hidden" name="pid" value="19"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/chocolate/roller-coaster-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline18"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/chocolate/yummy-cakes-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/panna-cotta-600x600_350x235.jpg" alt="panna-cotta-600x600" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/chocolate/yummy-cakes-detail.php" >Panna Cotta</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$20</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity18" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="18"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="18"/>
			<input type="hidden" name="pname" value="Panna Cotta"/>
			<input type="hidden" name="pid" value="18"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline18">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop18" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/panna-cotta-600x600.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop18" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop18" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Panna Cotta</h3>
			<div class="product_meta">
				<span class="sku">SKU: AL45</span>
				<span class="cats">Categories:
					<a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/cupcake.php" rel="tag">Cupcake</a>, <a href="shop/desserts.php" rel="tag">Desserts</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$20</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity18" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="18"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="18"/>
			<input type="hidden" name="pname" value="Panna Cotta"/>
			<input type="hidden" name="pid" value="18"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/chocolate/yummy-cakes-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline17"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/desserts/mint-milkshake-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/Strawberry-Cupcake-600x600_350x235.jpg" alt="Strawberry-Cupcake-600x600" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/desserts/mint-milkshake-detail.php" >Mint Milkshake</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$7</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity17" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="17"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="17"/>
			<input type="hidden" name="pname" value="Mint Milkshake"/>
			<input type="hidden" name="pid" value="17"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline17">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop17" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/Strawberry-Cupcake-600x600.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop17" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop17" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Mint Milkshake</h3>
			<div class="product_meta">
				<span class="sku">SKU: DM443</span>
				<span class="cats">Categories:
					<a href="shop/desserts.php" rel="tag">Desserts</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$7</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity17" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="17"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="17"/>
			<input type="hidden" name="pname" value="Mint Milkshake"/>
			<input type="hidden" name="pid" value="17"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/desserts/mint-milkshake-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                                                    <div class="item">
                                        <div class="wrap">
    <div class="feature-image">
        <div class="icon">
            <a class="various1" href="#inline16"><i class="fa fa-search"></i></a>
        </div>
        <a href="shop/chocolate/pound-cake-detail.php" class="link_product">
        <img src="images/stories/virtuemart/product/resized/Limburg-pie-600x600_350x235.jpg" alt="Limburg-pie-600x600" class="featuredProductImage" />        </a>
    </div>
    <div class="stats">
        <div class="title-product">
            <a href="shop/chocolate/pound-cake-detail.php" >Limburg Pie</a>        </div>
        <div class="product-price">
            <div itemscope="" itemtype="http://schema.org/Offer">
                <p class="price">

			<ins><span class="amount">$9</span></ins>
	</p>

                <meta itemprop="price" content="0">
                <meta itemprop="priceCurrency" content="">
                <link itemprop="availability" href="http://schema.org/InStock">
            </div>
        </div>
        <div class="product-options">
                            <span class="vmicon vm2-" title=""></span>
            <div class="star-rating">		<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
	</div>            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
            </div>
            <div class="cart">
                	<div class="addtocart-area ">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity16" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="hidden" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="16"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="16"/>
			<input type="hidden" name="pname" value="Limburg Pie"/>
			<input type="hidden" name="pid" value="16"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div style="display: none;">
        <div id="inline16">
            <div class="modal-body">
            <div class="content_pop ob_lightbox_shop">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarouselpop16" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
										<div class="item active">
						<img src="images/stories/virtuemart/product/Limburg-pie-600x600.jpg" alt="">
					</div>
									</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselpop16" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarouselpop16" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>

			</div>
		</div>
		<div class="col-md-6">
			<h3 class="product_title entry-title">Limburg Pie</h3>
			<div class="product_meta">
				<span class="sku">SKU: AD54</span>
				<span class="cats">Categories:
					<a href="shop/chocolate.php" rel="tag">Chocolate</a>, <a href="shop/desserts.php" rel="tag">Desserts</a>				</span>
			</div>
			<div itemscope="" itemtype="http://schema.org/Offer">

				<p class="price">

			<ins><span class="amount">$9</span></ins>
	</p>


				<meta itemprop="price" content="0">
				<meta itemprop="priceCurrency" content="">
				<link itemprop="availability" href="http://schema.org/InStock">

			</div>
			<div class="star-rating">
						<div class="ratingbox dummy" title="Not Rated Yet" >

		</div>
				</div>
				<div class="addtocart-area is_qty">
		<form method="post" class="product js-recalculate" action="http://cakeart.foobla.com/component/virtuemart/">
			<div class="vm-customfields-wrap">
							</div>			
				
	<div class="addtocart-bar">
								<!-- <label for="quantity16" class="quantity_box">Quantity: </label> -->
				<span class="quantity-box">
				<input type="number" class="quantity-input js-recalculate" name="quantity[]"
					data-errStr="You can buy this product only in multiples of %s pieces!" step="1"
					value="1"  />
			</span>

			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />				</span> 			<input type="hidden" name="virtuemart_product_id[]" value="16"/>
			<noscript><input type="hidden" name="task" value="add"/></noscript> 
	</div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="16"/>
			<input type="hidden" name="pname" value="Limburg Pie"/>
			<input type="hidden" name="pid" value="16"/>
			<input type="hidden" name="Itemid" value="437"/>		</form>

	</div>

			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetuer adipisc in elit, sed diam non ummy nibh in euismod tincidunt ut liber tempor laoreet. Nullam viverra orci id lectus aliquam luctus. Aliquam elementum gravida lacus non accumsan. Nullam ultrices purus ac porta tincidunt. Nullam vel scelerisque dui, posuere pulvinar arcu.</p>
			</div>
						<div class="clear"></div>
		</div>
		<a href="shop/chocolate/pound-cake-detail.php" target="_top" class="quick-view-detail">View detail</a>
	</div>
</div>                </div>
        </div>
    </div>
</div>                                    </div>
                                            </div>
            <div class="controls_navi"></div>
            <div class="dot_navi"></div>
        </div>
    </div>
    </div></div></div></div></section><section  class="sppb-section " style="margin:0 0 -80px 0;padding:80px 0;color:#ffffff;background-color:#e47277;background-image:url(images/2016/03/24/wave-line.png);"><div class="sppb-container"><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container" style=""><div class="sppb-carousel sppb-testimonial-pro sppb-slide  sppb-text-center" ><h3>What client's say?</h3><div class="sppb-carousel-inner"><div class="sppb-item"><img class="sppb-img-responsive sppb-avatar " src="images/2016/03/24/testimonials.jpg" alt=""><div class="sppb-testimonial-message">Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque. Curabitur quis nisl in leo euismod venenatis eu in diam. pellentesque.</div><div class="sppb-testimonial-client"><h5>- John Doe -</h5></div></div><div class="sppb-item"><img class="sppb-img-responsive sppb-avatar " src="images/2016/03/24/12.jpg" alt=""><div class="sppb-testimonial-message">Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque. Curabitur quis nisl in leo euismod venenatis eu in diam. pellentesque.</div><div class="sppb-testimonial-client"><h5>- John Doe -</h5></div></div></div><ol class="sppb-carousel-indicators"></ol></div></div></div></div></div></section>	</div>
</div>

</div></div></div></section><section id="sp-social"><div class="container"><div class="row"><div id="sp-position1" class="col-xs-10 col-sm-6 col-md-8"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<div id="cmc-signup-118"

     class="cmc-signup ">


    

    <div class="cmc-error alert alert-error" style="display:none"></div>

    <div class="cmc-saved alert alert-success" style="display:none">

        Thank you! Please check your email and confirm the newsletter subscription.
    </div>

    <div class="cmc-updated" style="display:none">

        Your subscription was updated
    </div>

    
        <form action="http://cakeart.foobla.com/component/cmc/?format=raw&amp;task=subscription.save"
              method="post"

              id="cmc-signup-form-118"

              class="form-validate"

              name="cmc118">


            <div class="row">

                <div class="col-md-6 col-sm-12 label_form">

                    <div class="burst">
                        <div>
                            <div><span><i class="fa fa-envelope"></i></span></div>
                        </div>
                    </div>

                    


                    
                        <div class="span12">

                            


                            
                                <div class="control-group">

                                    <div class="control-label">

                                        <span class="spacer"><span class="before"></span><span class="text"><label id="jform_cmc_intro_text-lbl" class=""><span class="title_cmc">Get our newsletter</span> <span class="sutitle_cmc">Sign up with your email to get fresh updates.</span></label></span><span class="after"></span></span>
                                    </div>

                                    <div class="controls">

                                         
                                    </div>

                                </div>

                            
                                <div class="control-group">

                                    <div class="control-label">

                                        
                                    </div>

                                    <div class="controls">

                                        <input type="hidden" name="jform[cmc][listid]" id="jform_cmc_listid" value="aeab708a10" />
                                    </div>

                                </div>

                            
                        </div>

                    
                </div>


                <div class="col-md-6 col-sm-12 form_cmc">

                    
                    
                        <div class="span12">


                            


                            
                                <div class="control-group">

                                    <div class="controls">

                                        <input type="text" name="jform[cmc_groups][EMAIL]" id="jform_cmc_groups_EMAIL" value="" class="inputbox input-medium cmc_req validate-email required" placeholder="Email Address *" required aria-required="true" />
                                        
                                            <div class="help-inline alert alert-error cmc-exist hide">

                                                It seems that you have already subscribed to this list.
                                                <a href="index.php">Click here to update your profile.</a>

                                            </div>

                                        
                                    </div>

                                </div>

                            
                        </div>

                    
                    <input type="hidden" class="cmc_exist" name="jform[exists]"
                           value="0"/>


                    <input type="hidden" name="88a0223a8b397bd150a88b708206908a" value="1" />


                    

                    <button class="btn btn-primary validate" type="submit">

                        <img width="20" height="17" class="cmc-spinner" alt=""

                             src="images/mail-icon.png">

                    </button>


                    
                </div>

            </div>


        </form>


        
</div>

</div></div></div></div><div id="sp-position2" class="col-xs-10 col-sm-6 col-md-4"><div class="sp-column "><ul class="social-icons"><li><div class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></div></li><li><div class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></div></li><li><div class="google"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></div></li><li><div class="pinterest"><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a></div></li><li><div class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></div></li></ul></div></div></div></div></section><section id="sp-bottom"><div class="container"><div class="row"><div id="sp-bottom1" class="col-xs-10 col-sm-6 col-md-4"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">About us</h3><div class="sp-module-content">

<div class="custom"  >
	<p>Ball tip biltong pork belly frankfurter shankle jerky leberkas pig kielbasa kay boudin alcatra short loin.</p>
<p>Jowl salami leberkas turkey pork brisket meatball turducken flank bilto porke belly ball tip. pork belly frankf urtane bilto</p>
<p>Phone: +61 3 8376 6284<br />Email: <a href="mailto:info@cakeart.com">info@cakeart.com</a></p>
<p>329 Queensberry Street, North Melbourne <br />VIC 3051, Australia.</p></div>
</div></div></div></div><div id="sp-bottom2" class="col-xs-10 col-sm-6 col-md-2"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Links</h3><div class="sp-module-content"><ul class="nav menu">
<li class="item-570 current active"><a href="index.php" >Home</a></li><li class="item-571"><a href="features/about-us.php" >About us</a></li><li class="item-572"><a href="recipes.php" >Recipes</a></li><li class="item-573"><a href="blog.php" >Blog</a></li><li class="item-574"><a href="contact.php" >Contact</a></li></ul>
</div></div></div></div><div id="sp-bottom3" class="col-xs-10 col-sm-6 col-md-2"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Services</h3><div class="sp-module-content"><ul class="nav menu">
<li class="item-575"><a href="shipment.php" >Shipment</a></li><li class="item-576"><a href="chef-talks.php" >Chef Talks</a></li><li class="item-577"><a href="live-support.php" >Live support</a></li><li class="item-578"><a href="privacy.php" >Privacy</a></li></ul>
</div></div></div></div><div id="sp-bottom4" class="col-xs-10 col-sm-6 col-md-4"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Latest News</h3><div class="sp-module-content"><div class="latestnews recentArticle">
                <div class="item">

                <div class="row">
                                        <div class="thumb col-sm-4">
                        <a href="blog/83-socola/84-snack-cake.php">
                            <img src="images/slider222.jpg" alt="">
                        </a>
                    </div>
                                        <div class="introtext col-sm-8">
                        <a class="titleArticle" href="blog/83-socola/84-snack-cake.php">
                            Snack Cake                        </a>
                        <span class="date">April 14, 2016</span>
                    </div>
                </div>
            </div>
                <div class="item">

                <div class="row">
                                        <div class="thumb col-sm-4">
                        <a href="blog/81-ice/85-spicy-macadamia-pretzels.php">
                            <img src="images/class.jpg" alt="">
                        </a>
                    </div>
                                        <div class="introtext col-sm-8">
                        <a class="titleArticle" href="blog/81-ice/85-spicy-macadamia-pretzels.php">
                            Spicy macadamia pretzels                        </a>
                        <span class="date">March 3, 2016</span>
                    </div>
                </div>
            </div>
                <div class="item">

                <div class="row">
                                        <div class="thumb col-sm-4">
                        <a href="blog/80-cream/87-banana-split-ice-cream.php">
                            <img src="images/img_gallery_3.jpg" alt="">
                        </a>
                    </div>
                                        <div class="introtext col-sm-8">
                        <a class="titleArticle" href="blog/80-cream/87-banana-split-ice-cream.php">
                            Banana Split Ice Cream Cake                        </a>
                        <span class="date">February 2, 2016</span>
                    </div>
                </div>
            </div>
    </div>
</div></div></div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright"> Designed by <a href="https://foobla.com/">foobla</a>. Powered by Joomla.</span></div></div></div></div></footer>
        <div class="offcanvas-menu">
            <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
            <div class="offcanvas-inner">
                                    <div class="sp-module "><h3 class="sp-module-title">Search</h3><div class="sp-module-content"><div class="search">
	<form action="http://cakeart.foobla.com/" method="post">
		<input name="searchword" id="mod-search-searchword" maxlength="200"  class="inputbox search-query" type="text" size="20" placeholder="Search ..." />		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="437" />
	</form>
</div>
</div></div><div class="sp-module "><div class="sp-module-content"><ul class="nav menu">
<li class="item-437 default current active"><a href="index.php" >Home</a></li><li class="item-492"><a href="blog.php" >Blog</a></li><li class="item-544"><a href="recipes.php" >Recipes</a></li><li class="item-530"><a href="shop.php" >Shop</a></li><li class="item-279 deeper parent"><a href="#" >Features</a><ul class="nav-child unstyled small"><li class="item-551"><a href="features/about-us.php" >About us</a></li><li class="item-552"><a href="features/page-with-left-sidebar.php" >Page with left sidebar</a></li><li class="item-553"><a href="features/page-with-right-sidebar.php" >Page with right sidebar</a></li><li class="item-488"><a href="features/404-page.php" >404 Page</a></li></ul></li><li class="item-550"><a href="contact.php" >Contact</a></li></ul>
</div></div>
                            </div>
        </div>
    </div>
        
</body>

<!-- Mirrored from cakeart.foobla.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2017 16:00:36 GMT -->
</html>