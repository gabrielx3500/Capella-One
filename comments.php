
   <div class="comments-grids">
    
 
            <div class="comments-grid">
                    <?php
                      foreach($comments as $comment){
   	                ?>
            <div class="comments-grid-left">
               <?php echo get_avatar( $comment, 32 ); ?>
      </div>
   	                       <div class="comments-grid-right">
                                 <h4><a href="<?php comment_author_url();?>"><?php comment_author();?></a></h4>
                                      <ul>
                                         <li><?php comment_date();?><i>|</i></li>
                                        
                                         <li><a href="#">Reply</a></li>
                                      </ul>
     
                                          <p><?php comment_text();?></p>
                           </div>
                           <div class="clearfix"> </div>
                       
                            	<?php
                                }
                              ?>
            </div>
   </div>


<?php

if(comments_open()){
?>	
<div class="leave-coment-form">
<h3>Leave a Comment</h3>
<form action="<?php echo site_url('wp-comments-post.php');?>" method="post" id="commentform">
   <input type="hidden" name="comment_post_ID" value='<?php echo $post->ID;?>' id='comment_post_ID'/>
 
     
     <input type="text" name="Name" placeholder="Name" required="">
  

  
   
     <input type="text" name="Email" placeholder="Email" required="">
   

    

   
    
     <textarea rows="7" cols="60" name="comment" placeholder="Your comment here..."></textarea>
  

    <div class="w3_single_submit">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
 

</form>
</div>
<?php
}else{
	_e('Comments are closed','theme');
}