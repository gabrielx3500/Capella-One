    
    </div> <!-- /.container -->
 
<!-- Footer-->
<footer>
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('about-me') ) : ?>
                       <?php endif; ?>
					
				</div>
				<div class="col-md-4 w3-agile-grid">
					
					<div class="w3ls-post-grids">
						<div class="w3ls-post-grid">
						
							<div class="w3ls-post-img">
								<a href=""></a>
							</div>
				
							<div class="w3ls-post-info">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('last-post') ) : ?>
                                <?php endif; ?>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						
					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Address</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							
						
								 <!-- search -->
	                              <div class="subscribe">
	                                
			             		           	<div class="w3-capella-search-form">
				                                <form action="#" method="post">
					                                 <input type="text" placeholder="Search" name="Search" required="">
					                                 <button class="btn2"><i class="fa fa-search" aria-hidden="true"></i></button>
				                                </form>
			                                </div>
		                                
	                               </div>
                            	<!-- search -->
						
							<div class="clearfix"> </div>
						</div>
						
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right one tweet">
								<h6>Tweets</h6>
						<ul>
							<li>
								<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
								<i>http//example.com</i></a>
								<span>About 15 minutes ago<span>
							</span></span></li>
							<li>
								<a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
								<i>http//example.com</i></a>
								<span>About a day ago<span>
							</span></span></li>
								<li>
								<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
								<i>http//example.com</i></a>
								<span>About 15 minutes ago<span>
							</span></span></li>
							<li>
								<a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
								<i>http//example.com</i></a>
								<span>About a day ago<span>
							</span></span></li>
						</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
    	<p>© <?php echo date("Y") ?> Minimalist Blog Capella. All rights reserved</p>
	</div>
		</div>
</footer>
<!-- End Footer-->
    <?php wp_footer(); ?>
</body>
</html>

		