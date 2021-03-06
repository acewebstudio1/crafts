<?php
/**
 * The template for displaying Category Archive pages.
 *

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
        <?php } ?><?php if(is_front_page() && is_active_sidebar('showcase')) { ?>
        <!-- Begin Showcase Widget Position -->

        <div class="feature-module">
          <?php dynamic_sidebar('Showcase'); ?>
        </div><!-- End Showcase Widget Position -->
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
                              <a href="<?php bloginfo('url'); ?>" id=
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
                                    <div class="article-rel-wrapper">

                                	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                       		                       	<?php /* If this is a category archive */ if (is_category()) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Category:'); ?> <?php single_cat_title(); ?></h2>
                       		                       	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Posts Tagged'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                       		                       	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F jS, Y'); ?></h2>
                       		                  	     	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F, Y'); ?></h2>
                       		                       	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('Y'); ?></h2>
                       		                       	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
                       		                       		<h2 class="componentheading"><?php _re('Author Archive'); ?></h2>
                       		                       	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                       		                       <h2 class="componentheading"><?php _re('Blog Archives'); ?></h2>
                       		                      		<?php } ?>

                                	</div>
                                    <?php

                                        $cat = get_query_var('cat');
                                        $catObj = get_category($cat);
                                        global $wpdb;
                                        $table_values=$wpdb->prefix . "ccf_Value";
                                        //echo $table_values;
                                        $sql = "select * from " . $table_values . " where field_name = 'Ecwid Category ID' and term_id = " . $catObj->term_id;
                                        $res = $wpdb->get_row($sql);
                                        //print_r($res);
                                        $ecwidCatId = $res->field_value;
                                        //global $wp_query;
                                        //print_r($wp_query);
                                        // is cURL installed yet?
                                        if (!function_exists('curl_init')){
                                            die('Sorry cURL is not installed!');
                                        }

                                        // OK cool - then let's create a new cURL resource handle
                                        $ch = curl_init();
                                        $url = 'http://app.ecwid.com/api/v1/617007/products?category=' . $ecwidCatId . '&hidden_products=false';

                                        // Now set some options (most are optional)

                                        // Set URL to download
                                        curl_setopt($ch, CURLOPT_URL, $url);



                                        // Include header in result? (0 = yes, 1 = no)
                                        curl_setopt($ch, CURLOPT_HEADER, 0);

                                        // Should cURL return or print out the data? (true = return, false = print)
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                                        // Timeout in seconds
                                        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

                                        // Download the given URL, and return output
                                        $output = curl_exec($ch);

                                        $prodArray = json_decode($output);
                                        //print '<pre>';
                                        //print_r($prodArray);
                                        //print '</pre>';

                                        // Close the cURL resource, and free system resources
                                        curl_close($ch);


                                    ?>
                                    <?php if (is_array($prodArray)) : ?><!-- Begin Post -->

                                    <div class="leading">
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                        <?php if ($option['page_title'] == 'true') { ?>
                                        <!-- Begin Title -->

                                        <div class="article-rel-wrapper">


                                    <h1 class="contentheading">

                                          <?php the_title(); ?>

                                    </h1>


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

                                            <?php //the_content(); ?>

                                            <div>

                                              <div class="<?php if(!is_page(36)) { ?>category <?php } ?>">
                                               <?php $category_id = types_render_field('category-id', array()); ?>
<!--
<script type="text/javascript" src="http://app.ecwid.com/script.js?617007" charset="utf-8"></script>
<script type='text/javascript'>
//xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","style=","defaultCategoryId=<?php echo $category_id; ?>");
</script>-->
                                                <!--The code will be here!-->

                                                    <div style="clear: both;" class="featured-categories">
                                                <?php
                                                    //$meta = get_post_meta(801);
                                                    //print_r($meta);
                                                    foreach($prodArray as $key=>$catObj):

                                                        //find wp product of this product
                                                         $args = array(
                                                                         'post_type' => 'products',
                                                                         'meta_query' => array(
                                                                             array(
                                                                                 'key' => 'wpcf-ecwid-product-id',
                                                                                 'value' => $catObj->id
                                                                             )
                                                                         )
                                                                      );
                                                         $query = new WP_Query($args);
                                                         if ( $query->have_posts() ) {
                                                          	while ( $query->have_posts() ) {
                                                          		$query->the_post();
                                                          		$catObj->url = get_permalink();
                                                          	}
                                                         }
                                                ?>
                                                        <div class="featured-category" style="margin-bottom: 8px; width: 148px;">
                                                            <div class="prodOmg"><a href="<?php print $catObj->url; ?>"><img src="<?php print $catObj->thumbnailUrl; ?>" /></a></div>
                                                            <div class="prodTitle"><a href="<?php print $catObj->url; ?>"><?php print $catObj->name; ?></a></div>
                                                            <div class="prodPrice">Price:&nbsp;$&nbsp;<?php print $catObj->price; ?></div>
                                                        </div>
                                                <?php
                                                    endforeach;
                                                ?>
                                                    </div>

                                              </div>

                                            </div>

                                            <div class="clr"></div>
                                          </div>
                                        </div>

                                        <div class="clr"></div>
                                      </div>
                                    </div><!-- End Post -->
                                    <?php //endwhile; ?><?php else : ?>

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
                            <?php if(is_front_page() && (is_active_sidebar('user_5') || is_active_sidebar('user_6'))) { ?><!-- Begin User 5 & User 6 Widget Positions -->

                            <div id="mainmodules2" class="spacer w49">
                              <?php if(is_active_sidebar('user_5')) { ?>
                              <!-- Begin User 5 Widget -->

                              <div class="block first">
                                <?php add_filter('widget_title','empty_title_swap'); ?><?php dynamic_sidebar('User 5'); ?><?php remove_filter('widget_title','empty_title_swap'); ?>
                              </div><!-- End User 5 Widget -->
                              <?php } ?><?php if(is_active_sidebar('user_6')) { ?>
                              <!-- Begin User 6 Widget -->

                              <div class="block last">
                                <?php add_filter('widget_title','empty_title_swap'); ?><?php dynamic_sidebar('User 6'); ?><?php remove_filter('widget_title','empty_title_swap'); ?>
                              </div><!-- End User 6 Widget -->
                              <?php } ?>
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