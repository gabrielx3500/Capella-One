<?php get_header();?>

<!-- banner -->
	<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.html">Home</a></li>
				<li class="active">Single Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
				<div class="single-left">
				<div class="single-left1">
				
				</div>
				
				<div class="messaje404">
					<p><?php _e("Search Result for","Capella") ;?></p>
					<span class="text-info"><?php the_search_query();?></span>
				</div>

				
			</div>

			</div>

</div>
</div>
<?php get_footer();?>