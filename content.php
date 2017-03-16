  <div class="post-content">
   <div class="container">
       <div class="col-md-12  col-sm-12  col-xs-12 post-left">
       <article>
 <div class="post-header">
     <span class='cat'><?php the_category();?></span>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <span class='date'><i class="fa fa-calendar calendario">  <?php the_date();?></i></span><span class='comment'><i class="fa fa-comments-o" aria-hidden="true"><a href="<?php comments_link(); ?>"></a></i></span><span class='author'>
        <?php
    printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(             get_comments_number() ) ); ?>
      </a></i></span>
      <span class="user"><i class="fa fa-user">  <a href=''><?php the_author_posts_link();;?></a></i></span>
 </div>

<?php if ( has_post_thumbnail() ) {?>
	  <div class="tch-img">	
		<?php	the_post_thumbnail(); ?>
		</div>
		<?php } else { ?>
           
              <?php } ?>
	         <section class="tc-ch">
			<?php the_excerpt(); ?>
		     </section>
</article>
</div>
</div>
</div>
