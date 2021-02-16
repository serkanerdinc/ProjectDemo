<!DOCTYPE html>
<html lang="tr">
	<head>
		<!-- META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{%$settings->title%} {%if isset($title) %} | {%$title%}{%/if%}</title>
		<meta name="keywords" content="{%if isset($keywords) %}{%$keywords%}{%/if%}">
		<meta name="description" content="{%if isset($description) %}{%$description%}{%/if%}" />

		<meta name="viewport" content="width=device-width, initial-scale=1">


		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/fontawesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/flaticon.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/loader.min.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/style.css">
		<link rel="stylesheet" class="skin" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/skin/skin-1.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/css/custom.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/css/settings.css">
		<link rel="stylesheet" type="text/css" href="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/css/navigation.css">

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div class="page-wraper">
			<!-- HEADER START -->
			<header class="site-header header-style-1 ">
				<div class="sticky-header main-bar-wraper">
					<div class="main-bar bg-white">
						<div class="container">
							<div class="logo-header">
								<a href="{%base_url()%}">
									<img src="{%base_url()%}theme/{%$theme%}/images/logo.png" style="height: 100px" alt="" />
								</a>
							</div>

							<!-- NAV Toggle Button -->
							<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- MAIN Vav -->

							<div class="header-nav navbar-collapse collapse ">
								<ul class=" nav navbar-nav">
									{%foreach from=$menus[0] item=menu%}
									   	<li>
											<a href="{%$menu->url%}">{%$menu->name%}{%if (array_key_exists($menu->menu_id,$menus))%}<i class="fa fa-chevron-down"></i>{%/if%}</a>
											{%if (array_key_exists($menu->menu_id,$menus))%}
												<ul class="sub-menu">
													{%foreach from=$menus[$menu->menu_id] item=menu2%}
													   	<li >
															<a href="{%$menu2->url%}">{%$menu2->name%}{%if (array_key_exists($menu2->menu_id,$menus))%}<i class="fa fa-chevron-down"></i>{%/if%}</a>
															{%if (array_key_exists($menu2->menu_id,$menus))%}
																<ul class="sub-menu">
																	{%foreach from=$menus[$menu2->menu_id] item=menu3%}
																	   	<li >
																			<a href="{%$menu3->url%}">{%$menu3->name%}{%if (array_key_exists($menu3->menu_id,$menus))%}<i class="fa fa-chevron-down"></i>{%/if%}</a>
																		</li>
																	{%/foreach%}
																</ul>
															{%/if%}
														</li>
													{%/foreach%}
												</ul>
											{%/if%}
										</li>
									{%/foreach%}
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- HEADER END -->

			<!-- CONTENT START -->
			<div class="page-content">
				<!--content start-->
				{%block name=content%}

				{%/block%}
				<!--content stop-->

				<!-- FOOTER START -->
				<footer class="site-footer footer-light">

					<!-- FOOTER COPYRIGHT -->
					<div class="footer-bottom overlay-wraper">
						<div class="overlay-main bg-black" style="opacity:0;"></div>
						<div class="constrot-strip"></div>
						<div class="container p-t30">
							<div class="row">
								<div class="wt-footer-bot-left">
									<span class="copyrights-text">
										© Egegen
									</span>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!-- FOOTER END -->

				<!-- SCROLL TOP BUTTON -->
				<button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>
			</div>
		</div>

		<!-- JAVASCRIPT  FILES ========================================= -->

		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/bootstrap-select.min.js">		</script><!-- FORM JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
		<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
		<script type="text/javascript"  src="{%base_url()%}theme/{%$theme%}/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
		{%block name=script%}
		{%/block%}

	</body>
</html>
