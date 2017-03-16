<div class="container">
   <div class="col-md-12  col-sm-12  col-xs-12 post-single">
      <div class="tc-content">
       <article>
          <div class="post-header">
             <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
<?php if ( has_post_thumbnail() ) {?>
  <div class="tch-img">	
	<?php	the_post_thumbnail(); ?>
  </div>
	<?php } else { ?>
  <?php } ?>
	<section class="tc-ch">
		<?php the_content(); ?>
	</section>
</article>
      </div>
   </div>
</div>

