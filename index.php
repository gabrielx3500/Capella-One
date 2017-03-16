<?php get_header(); ?>

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
			
			<!--Pagination-->
			
         
			<!--<ul class="pagination myPagination">-->
			<div class="row text-center">
              <div class="col-lg-12">
               <ul class="pagination">
			   <li><?php pagination('&laquo;', '&raquo;'); ?></li>
			   </ul>
			  </div>
			     <!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			
			<div class="w3-agileits-subscribe-form">
				<form action="#" method="post">
					<input type="text" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->
			</div>  
			
			
            <!--End Pagination-->  
				<?php endif; ?>
				 
	

<?php get_footer(); ?>
