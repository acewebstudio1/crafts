<?php
/*
Template Name: Home Page
 */
get_header(); ?>
<?php $option = get_option('infuse-options'); ?>
<?php if(is_active_sidebar('top_menu') || is_active_sidebar('showcase') || is_active_sidebar('user_1')) { ?>
<!-- Begin Showcase -->

  <div class="show-tm">
    <div class="show-tl"></div>

    <div class="show-tr"></div>
  </div>

  <div class="show-m">
    <div class="show-l">
      <div class="show-r">     
        <?php if(is_active_sidebar('top_menu')) { ?>
    
        <!-- Begin Top Menu Widget Position -->

        <div id="horiz-menu" class="fusion">
          <div class="wrapper">
            <div class="padding">
              <div id="horizmenu-surround">
                <?php dynamic_sidebar('Top Menu'); ?>
              </div>

              <div class="clr"></div>
            </div>
          </div>
        </div><!-- End Top Menu Widget Position -->
        <?php } ?><?php if(is_front_page()) { ?>
        <!-- Begin Showcase Widget Position -->
          <div class="clr"></div>
        <div class="feature-module">
       <?php echo get_royalslider(1); ?>
        </div>
        
          <div class="sale-banner">
            
  <a title="Sale!" href="<?php echo types_render_field("sale-promo-link", array("output"=>"raw")); ?>">
  
  <?php echo(types_render_field("sale-promo-image", array("alt"=>"Sale!","title"=>"Sale!"))); ?>
  
   </a>
        </div> <div class="clr"></div>
        
        <!-- End Showcase Widget Position -->
        <?php } ?><?php if(is_front_page() && is_active_sidebar('user_1')) { ?>
        <!-- Begin User 1 Widget Positions -->
        <?php dynamic_sidebar('User 1'); ?><!-- End User 1 Widget Positions -->
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="show-bm">
    <div class="show-bl"></div>

    <div class="show-br"></div>
  </div><!-- End Showcase -->
  <?php } ?><?php if(is_front_page() && is_active_sidebar('user_2')) { ?>
  <!-- Begin User 2 Widget Position -->

  <div class="show-tm">
    <div class="show-tl"></div>

    <div class="show-tr"></div>
  </div>

  <div class="show-m">
    <div class="show-l">
      <div class="show-r">
        <div class="scroller-module">
          <?php dynamic_sidebar('User 2'); ?>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>

  <div class="show-bm">
    <div class="show-bl"></div>

    <div class="show-br"></div>
  </div><!-- End User 2 Widget Position -->
  <?php } ?><!-- Begin Main Body -->

  <div class="main-tm">
    <div class="main-tl"></div>

    <div class="main-tr"></div>
  </div>

  <div class="main-m">
    <div class="main-l">
      <div class="main-r">
        <div id="main-body">
          <div id="main-content" class="<?php echo $option['layout_subpage']; ?>">
            <div class="colmask leftmenu <?php if (rok_isIe(6)) echo ' wrapper'; ?>">
              <?php if (!rok_isIe(6)):?>

              <div class="wrapper">
                <?php endif; ?>

                <div class="colmid">
                  <div class="colright">
                    <!-- Begin Main Column (col1wrap) -->

                    <div class="col1wrap">
                      <div class="col1pad">
                        <div class="col1">
                          <div id="maincol">
                            <?php if(is_front_page() && (is_active_sidebar('user_3') || is_active_sidebar('user_4'))) { ?><!-- Begin User 3 & User 4 Widget Positions -->

                            <div id="mainmodules" class="spacer w49">
                              <?php if(is_active_sidebar('user_3')) { ?>
                              <!-- Begin User 3 Widget -->

                              <div class="block first">
                                <?php add_filter('widget_title','empty_title_swap'); ?><?php dynamic_sidebar('User 3'); ?><?php remove_filter('widget_title','empty_title_swap'); ?>
                              </div><!-- End User 3 Widget -->
                              <?php } ?><?php if(is_active_sidebar('user_4')) { ?>
                              <!-- Begin User 4 Widget -->

                              <div class="block last">
                                <?php add_filter('widget_title','empty_title_swap'); ?><?php dynamic_sidebar('User 4'); ?><?php remove_filter('widget_title','empty_title_swap'); ?>
                              </div><!-- End User 4 Widget -->
                              <?php } ?>
                            </div>

                            <div class="clr"></div>
                            <!-- End User 3 & User 4 Widget Positions -->
                            <?php } ?><!-- Begin Posts Wrapper -->
                            <?php if(!is_front_page() && $option['breadcrumbs'] == 'true') { ?>

                            <div id="breadcrumbs">
                              <a href="<?php bloginfo('url');?>" id=
                              "breadcrumbs-home" name="breadcrumbs-home"></a>
                              <span class="breadcrumbs pathway"><?php
                                                                                                                                                                                      
                                                                          $breadcrumbs_path = get_bloginfo('template_directory');
                                                                              $parent_id  = $post->post_parent;
                                                                                  $breadcrumbs = array();
                                                                                  while ($parent_id) {
                                                                                      $page = get_page($parent_id);
                                                                                      $breadcrumbs[] = '<a href="'.get_permalink($page->ID).'" title="" class="pathway">'.get_the_title($page->ID).'</a>';
                                                                                      $parent_id  = $page->post_parent;
                                                                                          }
                                                                                     $breadcrumbs = array_reverse($breadcrumbs);
                                                                          foreach ($breadcrumbs as $crumb) echo $crumb.'<img alt="" src="'.$breadcrumbs_path.'/images/arrow.png"/>';
                                                                                                                                                                                      
                                                                                                                                                              ?>
                              <span class="no-link"><?php the_title(); ?></span></span>
                            </div><?php } ?>

                            <div class="bodycontent">
                              <div id="maincontent-block">
                                <div class="custom-page">
                                  <div class="module-tm">
                                    <div class="module-tl"></div>

                                    <div class="module-tr"></div>
                                  </div>

                                  <div class="module-inner">
                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- Begin Post -->

                                    <div class="leading">
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                        <?php if ($option['page_title'] == 'true') { ?>
                                        <!-- Begin Title -->

                                        <div class="article-rel-wrapper">
                                          <h1 class="contentheading">
                                          <?php the_title(); ?></h1>
                                        </div><!-- End Title -->
                                        <?php } ?><?php if ($option['page_meta'] == 'true') { ?><!-- Begin Meta -->

                                        <div class="article-info-surround">
                                          <?php if ($option['page_meta_author'] == 'true') { ?><!-- Begin Author -->

                                          <div class="article-info-right">
                                            <span class=
                                            "createdby"><?php the_author(); ?></span>
                                          </div><!-- End Author -->
                                          <?php } ?><?php if ($option['page_meta_date'] == 'true') { ?><!-- Begin Date & Time -->

                                          <div class="iteminfo">
                                            <div class="article-info-left">
                                              <span class="createdate"><span class=
                                              "date1"><?php the_time('M j'); ?></span>
                                              <span class="date2"><span class=
                                              "date-div">|</span><?php the_time('H:i'); ?></span></span>

                                              <div class="clr"></div>
                                            </div>
                                          </div><!-- End Date & Time -->
                                          <?php } ?>
                                        </div><!-- End Meta -->
                                        <?php } ?>

                                        <div class="main-content">
                                          <div class="post-content">
                                            <?php if($option['page_tweetmeme'] == 'true') { ?>

                                            <div class="tweetmeme png">
                                              <script type="text/javascript" src=
                                              "http://tweetmeme.com/i/scripts/button.js">
</script>
                                            </div><?php } ?>
                                            
                                            <div class="top-home-text">
                                            <?php echo types_render_field("home-page-top-text", array("output"=>"raw")); ?>
                                            </div>
<div class="clr"></div>

<div class="enter grey"><a href="/store/">ENTER THE ARTS AND CRAFTS STORE</a></div>
<div class="clr"></div>
                                            
                          <div class="featured-categories">
                    <div class="featured-category">
<a href="<?php echo types_render_field("featured-category-1-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-1-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-1", array("output"=>"raw")); ?></span></a>
                                              </div>
                    <div class="featured-category">
  <a href="<?php echo types_render_field("featured-category-2-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-2-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-2", array()); ?></span></a>                                         
                                              </div>
                    <div class="featured-category">
<a href="<?php echo types_render_field("featured-category-3-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-3-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-3", array("output"=>"raw")); ?></span></a>                                  
                                              </div>
                    <div class="featured-category last">
 <a href="<?php echo types_render_field("featured-category-4-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-4-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-4", array("output"=>"raw")); ?></span></a>                                           
                                              </div>
                    <div class="clear15"></div>
                    <div class="featured-category">
<a href="<?php echo types_render_field("fearured-category-5-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-5-image", array()); ?>
                                <span><?php echo types_render_field("fearured-category-5", array("output"=>"raw")); ?></span></a>
                                              </div>
                    <div class="featured-category">
  <a href="<?php echo types_render_field("featured-category-6-link", array("output"=>"raw")); ?>"><?php echo types_render_field("fearured-category-6-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-6", array()); ?></span></a>                                         
                                              </div>
                    <div class="featured-category">
<a href="<?php echo types_render_field("featured-category-7-link", array("output"=>"raw")); ?>"><?php echo types_render_field("featured-category-7-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-7", array("output"=>"raw")); ?></span></a>                                  
                                              </div>
                    <div class="featured-category last">
 <a href="<?php echo types_render_field("featured-category-8-link", array("output"=>"raw")); ?>"><?php echo types_render_field("featured-category-8-image", array()); ?>
                                <span><?php echo types_render_field("featured-category-8", array("output"=>"raw")); ?></span></a>                                           
                                              </div>
                    
                    <div class="clr"></div>
                          </div> <div class="clr"></div>
                              <?php the_content(); ?>

                                            <div class="clr">
                                            </div><?php wp_link_pages('before=<div class="pagination"><span class="pagination-name">'._r('Pages:').'</span><span class="pagination-numbers">&after=</span></div><br />'); ?><?php edit_post_link(_r('Edit this entry.'), '<div class="edit-me">', '</div>'); ?><?php if(comments_open()) { ?><a name="comments"
                                            id="comments"></a>
                                            <?php comments_template(); ?> <?php } ?>

                                            <div class="clr"></div>
                                          </div>
                                        </div>

                                        <div class="clr"></div>
                                      </div>
                                    </div><!-- End Post -->
                                    <?php endwhile; ?><?php else : ?>

                                    <div class="attention">
                                      <div class="icon">
                                        <?php _re('Sorry, no pages matched your criteria.'); ?>
                                      </div>
                                    </div><?php endif; ?>
                                  </div>

                                  <div class="module-bm">
                                    <div class="module-bl"></div>

                                    <div class="module-br"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="clr"></div><!-- End Posts Wrapper -->
                            <?php if(is_front_page()) { ?>
			<!-- Begin User 5 & User 6 Widget Positions -->
                        
                        
<?php
$args = array(
	'post_type' => 'featured',
	'post_status'=>'publish', 
	'order' => 'DESC'
);
$query_features = new WP_Query($args);
?>
                            
      <div id="featured">
				<h3>You might be interested in these as well:</h3>
                                
			<?php while ($query_features->have_posts() ) : $query_features->the_post(); ?>
	
				<div class="featured-block">
                                  <?php $title = get_the_title(); ?>
                                  
<div class='ecwid-Product'><form>

<div style='text-align: center; padding-bottom: 10px;'>
<a title="<?php echo $title; ?>" href="<?php echo types_render_field("url", array("output"=>"raw")); ?>">
<?php echo(types_render_field("featured-image", array("alt"=>"$title", "title" => "$title", "proportional"=>"true"))); ?></a>
</div>

<div class='ecwid-productBrowser-head homepage'><?php the_title(); ?></div>

<div class="ecwid-productBrowser-price homepage"><span>&pound;</span>
<?php echo types_render_field("price", array("output"=>"raw")); ?></div>
</form></div>

			        </div>
                                
<?php endwhile;
wp_reset_postdata(); ?>

	
                            </div>

                            <div class="clr"></div>
                            <!-- End User 5 & User 6 Widget Positions -->
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Main Column (col1wrap) -->
                    <!-- Begin Left Column (col2) -->
                    <?php if($option['left_sub_sidebar'] == 'true') { ?><?php get_sidebar('left-sub'); ?><?php } ?><!-- End Left Column (col2) -->
                    <!-- Begin Right Column (col3) -->
                    <?php if($option['right_sub_sidebar'] == 'true') { ?><?php get_sidebar('right-sub'); ?><?php } ?><!-- End Right Column (col3) -->
                  </div>
                </div>
              </div><?php if (!rok_isIe(6)):?>
            </div><?php endif; ?>
          </div><!-- Begin Main Bottom -->
          <!-- End Main Bottom -->
        </div>
      </div>
    </div>
  </div>

  <div class="main-bm">
    <div class="main-bl"></div>

    <div class="main-br"></div>
  </div><!-- End Main Body -->
  <?php get_footer(); ?>