<div class="container">
       <div class="col-md-12  col-sm-12  col-xs-12 post-single">
            <div class="tc-content">
                   <article>
                       <div class="post-header">
                                 <span class='cat'><?php the_category();?></span>
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                               
                       </div><!--./post-header-->
                          <?php if ( has_post_thumbnail() ) {?>
                                       <div class="tch-img"> 
                                           <?php the_post_thumbnail(); ?>
                                       </div>
                               <?php } else { ?>
                                    <?php } ?>
                                        <?php the_content(); ?>
                   </article>                     
           </div><!--/.tc-content-->
      </div><!--/.post-single-->
</div><!-- /.container -->
