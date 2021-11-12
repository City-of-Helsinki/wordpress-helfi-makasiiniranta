<div class="container">
    <div class="row">
    <?php
    $args = array(
        'post_type' => 'jury',
        'posts_per_page' => -1
    );


    $query = new WP_Query($args);
       
    if ($query->have_posts() ) : 
        
        while ( $query->have_posts() ) : $query->the_post();?>
        
        <div class="col-12 col-sm-6 col-md-4 project">
               
                <div class="bcgr-project-image" style="background:url('<?php the_post_thumbnail_url('large'); ?>')"></div>
              
            
            
               <h3><?php the_title();?></h3> 
                   
            <?php the_excerpt();?>
              
            
            </div>
       <?php endwhile;

        wp_reset_postdata();
    endif;
    ?>
        </div>
</div>