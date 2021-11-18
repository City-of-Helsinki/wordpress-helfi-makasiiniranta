<?php
get_header();

/**
  * Hook: helsinki_content_before
  *
  */
do_action("helsinki_content_before");

while ( have_posts() ) {

	the_post();

	/**
      * Hook: helsinki_content
      *
      */
    do_action("helsinki_content");

}

?>

<div class="content__container hds-container hds-container--narrow">

    <div class="load-pdf-cont">
        
        <?php if(get_field("pdf")){ ?>
               <a class="a-button" href="<?php the_field("pdf");?>" target="_blank"> Load pdf</a>
        <?php } ?>
        
        
    </div>
    
    </div>
<?php

/**
  * Hook: helsinki_content_after
  *
  */
do_action("helsinki_content_after");

get_footer(); ?>
