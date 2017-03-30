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
        <div class="single-left text-justify">
         <?php if ( has_post_thumbnail() ) {?>
        <div class="single-left1">
          <?php the_post_thumbnail(); ?>
            <?php } else { ?>
          <?php } ?>

          <h3>Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</h3>
         
          <p>  <?php the_content(); ?></p>
        </div>
       
       
      
      </div>

      </div>
      <!-- //btm-wthree-left -->
      
      <div class="clearfix"></div>
    </div>
  </div>
