<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
    
     <!-- start container -->
    <div id="container" class="inner_page">
    	<!-- start leftcol -->
        <div id="leftcol">
        	<!-- start sub nav -->
            <?php wp_nav_menu( array( 'container_id' => 'sub_nav', 'theme_location' => 'primary_nav' ) ); ?>            	
            <!-- end sub nav -->
        </div>
        <!-- end leftcol -->
        <!-- start midcol -->
        <div id="rightcol">
            <!-- start content -->
            <div class="content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>
               <?php /*?> <div align="center">
                 <?php $gallery = get_post_meta($post->ID, 'gallery', true); ?>
							<?php
							$gal = $gallery;
							$gal = apply_filters('the_content', '[galleryview id='.$gal.']' );
							echo $gal;
							?>
                 </div><?php */?>
                
                <!-- <div id="gallery" class="ad-gallery">
                      <div class="ad-image-wrapper"> </div>
                      <div class="ad-nav">
                        <div class="ad-thumbs">
                          <ul class="ad-thumb-list">                          
                  
							<?php /*?>
							
							   <?php $gallery = get_post_meta($post->ID, 'gallery', true); ?>
							<?php
							$gal = $gallery;
							$gal = apply_filters('the_content', '[nggallery id='.$gal.']' );
							echo $gal;
							?>
							
							
							<?php $gal = get_post_meta($post->ID, 'gallery_img', false); ?>
                                <?php foreach($gal as $gallery) {
                            echo '<li><a href="'.$gallery.'"><img class="image0" src="'.$gallery.'" alt=""width="70" height="50" /></a></li>';
                            } ?><?php */?>
                          
                           </ul>
                       </div>
                     </div>
                   <div class="ad-controls"></div>
                </div> 	
                -->
       

           <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
            </div>
            <!-- end content -->
        </div>
        <!-- end midcol -->
        <div class="clear"></div>
        <?php // <!-- start slide show --> include_once('includes/slideshow.php');  <!-- end slide show -->  ?>
    </div>
    <!-- end container -->
    <?php get_footer(); ?>