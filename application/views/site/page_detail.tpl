{%extends file="$theme/template.tpl"%}
{%block name=content%}
<!-- BREADCRUMB ROW -->
<div class="bg-gray-light p-tb20">
	<div class="container">
		<ul class="wt-breadcrumb breadcrumb-style-1">
			<li><a href="/">Anasayfa</a></li>
			<li>{%$page->name%}</li>
		</ul>
	</div>
</div>
<!-- BREADCRUMB ROW END -->   
<!-- SECTION CONTENT START -->
<div class="section-full p-t80 p-b50">
	<div class="container">
		<!-- BLOG START -->
		<div class="blog-post date-style-1 blog-detail">
			<div class="wt-post-title ">
			<h3 class="post-title"><a href="javascript:void(0);">{%$page->name%}</a></h3>
		</div>
		<div class="wt-post-text">
			<p>
				{%$page->content%}
			</p>
		</div>
	</div>
	</div>
</div>
<!-- BLOG END -->
{%/block%}
