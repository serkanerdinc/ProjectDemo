{%extends file="$theme/template.tpl"%}
{%block name=content%}
<!-- SLIDER START -->
<div class="main-slider style-two default-banner">
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<!-- START REVOLUTION SLIDER 5.4.1 -->
			<div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
				<div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
					<ul>
						<!-- SLIDE 1 -->
						{%foreach from=$sliders item=slider%}
						   <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="{%base_url()%}upload/slider/{%$slider->slider%}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
								<!-- LAYERS -->
							</li>
						{%/foreach%}
						<!-- SLIDE 1 -->
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
					</div>
				</div>
			</div>
			<!-- END REVOLUTION SLIDER -->
		</div>
	</div>
</div>
<!-- SLIDER END -->

<!-- WHY CHOOSE US SECTION START  -->
<div class="section-full bg-gray p-t80 p-b120">
	<div class="container">
		<div class="section-content no-col-gap">
			<div class="row">
				<div class="col-md-12 col-sm-12 animate_line">
					<div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
						<div class="icon-content" style="text-align: left">
							<h5 class="wt-tilte">
								{%$page->name%}
							</h5>
							<p>
								{%$page->short_content%}
							</p>
							<a href="{%base_url()%}{%$page->page_type%}/{%$page->alias%}" class="site-button  m-r15 text-uppercase" style="font-weight:600;">
								Devamı
								<i class="fa fa-angle-double-right">
								</i>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-full p-t100">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7">
					<div class="section-head text-left">
						<h2 class="text-uppercase">
							HABERLER
						</h2>
						<div class="wt-separator-outer">
							<div class="wt-separator style-square">
								<span class="separator-left bg-primary">
								</span>
								<span class="separator-right bg-primary">
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-5">
					<div class="section-head text-right">
						<button class="site-button button-x1  m-r15 text-uppercase" id="nextPage" data-value="{%$news.page_id%}">
							<b>+</b>
						</button>
					</div>
				</div>
				<div class="col-md-7 col-sm-7">
					<div class="section-head text-left">
						<h2 id="news_name">
							{%$news.name%}
						</h2>
						<p id="news_content">
							{%$news.short_content%}
						</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-5">
					<div class="">
						<img id="news_pic" src="/upload/images/{%$news.post_image%}" style="height: 250px" alt=""/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{%/block%}

{%block name=script%}

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{%base_url()%}theme/{%$theme%}/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- REVOLUTION SLIDER FUNCTION  ===== -->

	<script type="text/javascript">
		var tpj = jQuery;
		var revapi1014;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_1014_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_1014_1");
			} else {
				revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "revolution/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "hermes",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div><div class="tp-arr-titleholder">{{title}}</div></div>',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							}
						}
					},
					viewPort: {
						enable: true,
						outof: "pause",
						visible_area: "80%",
						presize: false
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1240, 1240, 1240],
					gridheight: [440, 440, 440, 440],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						type: "mouse",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/

		$(document).ready(function(){
			$("#nextPage").click(function(){
				$.ajax({
					type: "GET",
					url: "/nextpage/news/"+$(this).attr('data-value'),
					data: "",
					dataType: 'json',
					success: function(response){
						$("#news_name").html(response.name);
						$("#news_content").html(response.short_content);
						$("#news_pic").attr("src","/upload/images/"+response.post_image);
						$("#nextPage").attr("data-value",response.page_id);
					}
				});
			});
		});
	</script>
{%/block%}
