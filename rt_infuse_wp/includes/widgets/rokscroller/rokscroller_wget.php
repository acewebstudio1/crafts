<?php

class RokScrollerWidget extends WP_Widget {

	// RocketTheme RokScroller Widget
	// by Jakub Baran

    function RokScrollerWidget() {
    	$widget_ops = array('classname' => 'widget_rokscroller', 'description' => _r('RocketTheme RokScroller Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('widget-rokscroller', _r('RokScroller'), $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);
 		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
 		$rokscroller_post_title = empty($instance['rokscroller_post_title']) ? 'false' : $instance['rokscroller_post_title'];
 		$rokscroller_link_title = empty($instance['rokscroller_link_title']) ? 'false' : $instance['rokscroller_link_title'];
 		$rokscroller_link_image = empty($instance['rokscroller_link_image']) ? 'false' : $instance['rokscroller_link_image'];
 		$rokscroller_post_cat = empty($instance['rokscroller_post_cat']) ? '1' : $instance['rokscroller_post_cat'];
 		$rokscroller_post_count = empty($instance['rokscroller_post_count']) ? '14' : $instance['rokscroller_post_count'];
 		$rokscroller_post_order = empty($instance['rokscroller_post_order']) ? 'date' : $instance['rokscroller_post_order'];
 		$rokscroller_post_dis = empty($instance['rokscroller_post_dis']) ? 'content' : $instance['rokscroller_post_dis'];
 		$rokscroller_content_dis = empty($instance['rokscroller_content_dis']) ? 'false' : $instance['rokscroller_content_dis'];
 		$rokscroller_read_more = empty($instance['rokscroller_read_more']) ? 'false' : $instance['rokscroller_read_more'];
 		$rokscroller_read_more_label = empty($instance['rokscroller_read_more_label']) ? 'Read More' : $instance['rokscroller_read_more_label'];
 		$rokscroller_transition_dur = empty($instance['rokscroller_transition_dur']) ? '700' : $instance['rokscroller_transition_dur'];
 		$rokscroller_items_click = empty($instance['rokscroller_items_click']) ? '7' : $instance['rokscroller_items_click'];
 		$rokscroller_arrow_opa = empty($instance['rokscroller_arrow_opa']) ? '0.85' : $instance['rokscroller_arrow_opa'];
 		$rokscroller_thumb_w = empty($instance['rokscroller_thumb_w']) ? '104' : $instance['rokscroller_thumb_w'];
 		$rokscroller_thumb_h = empty($instance['rokscroller_thumb_h']) ? '46' : $instance['rokscroller_thumb_h'];

 		# Before the widget
 		echo $before_widget;

 		# The title
 		if ( $title )
 		echo $before_title . $title . $after_title;

  		# Content
  		
  		global $post, $more;
  		
  		?>
  		
  		<div class="scroller-bottom">
			<div class="scroller-bottom1">
				<div class="scroller-bottom2">
					<div class="scroller-top">
						<div class="scroller-top1">
							<div class="scroller-top2">
								
								<!-- Content START -->
								
								<div id="rokintroscroller">
								
									<?php $i = 1; ?>
		
							        <?php $rokscroller = new WP_Query('cat='.$rokscroller_post_cat.'&showposts='.$rokscroller_post_count.'&orderby='.$rokscroller_post_order);
				    				if($rokscroller->have_posts()) : while($rokscroller->have_posts()) : $rokscroller->the_post(); ?>
				    				
				    				<?php $image = get_post_meta($post->ID, 'image', TRUE); ?>
				    				
				    				<?php $more = 0; ?>
							        
							        <div class="scroller-item<?php if($i == 1) { echo ' first'; } elseif($i == $rokscroller_post_count) { echo ' last'; } ?>">
							        
										<?php if ($rokscroller_post_title == 'true') :?>
										
											<?php if ($rokscroller_link_title == 'true') :?>
											
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											
											<?php else: ?>
											
											<h2><?php the_title(); ?></h2>
											
											<?php endif; ?>
											
										<?php endif; ?>
										
										<?php if($image != '') { ?>
							        
							        	<div class="scroll-img">
							        	
							        		<?php if($rokscroller_link_image == 'true') { ?>
							        	
							        		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="scroll-img2" alt="<?php the_title(); ?>" src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image ?>&amp;w=<?php echo $rokscroller_thumb_w; ?>&amp;h=<?php echo $rokscroller_thumb_h; ?>&amp;zc=1&amp;q=75" /></a>
							        		
							        		<?php } else { ?>
							        		
							        		<img class="scroll-img2" alt="<?php the_title(); ?>" src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image ?>&amp;w=<?php echo $rokscroller_thumb_w; ?>&amp;h=<?php echo $rokscroller_thumb_h; ?>&amp;zc=1&amp;q=75" />
							        		
							        		<?php } ?>
							        		
							        	</div>
							        	
							        	<?php } ?>
										
										<?php if($rokscroller_content_dis == 'true') {
								
										        if($rokscroller_post_dis == 'content') {
								            
													remove_filter('the_content', 'wpautop');
								            
								            		the_content(false);
								            
								            		add_filter('the_content', 'wpautop');
								            
								            	} else {
								            
										            remove_filter('the_excerpt', 'wpautop');
								            
										            the_excerpt();
								            
										            add_filter('the_excerpt', 'wpautop');
								            
									            }
									    	}
									    ?>
							
							            <?php if ($rokscroller_read_more == 'true') :?>
							            <a href="<?php the_permalink(); ?>" class="readon3"><?php echo $rokscroller_read_more_label; ?></a> 
							            <?php endif; ?>
							       
							        </div>
							        
							        <?php $i++ ?>
							        
								    <?php endwhile; endif; ?>	
		
								</div>
								
								<!-- Content END -->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php wp_reset_query(); ?>
		
		<?php
	
    	# After the widget
    	echo $after_widget;
	}

    function update($new_instance, $old_instance) {
    
    	$instance = $old_instance;
    	$instance['title'] = stripslashes($new_instance['title']);
    	$instance['rokscroller_post_title'] = stripslashes($new_instance['rokscroller_post_title']);
    	$instance['rokscroller_link_title'] = stripslashes($new_instance['rokscroller_link_title']);
    	$instance['rokscroller_link_image'] = stripslashes($new_instance['rokscroller_link_image']);
    	$instance['rokscroller_post_cat'] = stripslashes($new_instance['rokscroller_post_cat']);
    	$instance['rokscroller_post_count'] = stripslashes($new_instance['rokscroller_post_count']);
    	$instance['rokscroller_post_order'] = stripslashes($new_instance['rokscroller_post_order']);
    	$instance['rokscroller_post_dis'] = stripslashes($new_instance['rokscroller_post_dis']);
    	$instance['rokscroller_content_dis'] = stripslashes($new_instance['rokscroller_content_dis']);
    	$instance['rokscroller_read_more'] = stripslashes($new_instance['rokscroller_read_more']);
    	$instance['rokscroller_read_more_label'] = stripslashes($new_instance['rokscroller_read_more_label']);
    	$instance['rokscroller_transition_dur'] = stripslashes($new_instance['rokscroller_transition_dur']);
    	$instance['rokscroller_items_click'] = stripslashes($new_instance['rokscroller_items_click']);
    	$instance['rokscroller_arrow_opa'] = stripslashes($new_instance['rokscroller_arrow_opa']);
    	$instance['rokscroller_thumb_w'] = stripslashes($new_instance['rokscroller_thumb_w']);
    	$instance['rokscroller_thumb_h'] = stripslashes($new_instance['rokscroller_thumb_h']);

 		return $instance;
	}

    function form($instance){
   		
   		//Defaults
   		
   		global $rokscroller_arrow_opa;
   		
  		$instance = wp_parse_args( (array) $instance, array('title'=>'', 'rokscroller_post_title'=>'false', 'rokscroller_link_image'=>'false', 'rokscroller_link_title'=>'false', 'rokscroller_post_cat'=>'1', 'rokscroller_post_count'=>'14', 'rokscroller_post_order'=>'date', 'rokscroller_post_dis'=>'content', 'rokscroller_content_dis'=>'false', 'rokscroller_read_more'=>'false', 'rokscroller_read_more_label'=>'Read More', 'rokscroller_transition_dur'=>'700', 'rokscroller_items_click'=>'7', 'rokscroller_arrow_opa'=>'0.85', 'rokscroller_thumb_w'=>'104', 'rokscroller_thumb_h'=>'46') );

   		$title = htmlspecialchars($instance['title']);
   		$rokscroller_post_title = htmlspecialchars($instance['rokscroller_post_title']);
   		$rokscroller_link_title = htmlspecialchars($instance['rokscroller_link_title']);
   		$rokscroller_link_image = htmlspecialchars($instance['rokscroller_link_image']);
   		$rokscroller_post_cat = htmlspecialchars($instance['rokscroller_post_cat']);
   		$rokscroller_post_count = htmlspecialchars($instance['rokscroller_post_count']);
   		$rokscroller_post_order = htmlspecialchars($instance['rokscroller_post_order']);
   		$rokscroller_post_dis = htmlspecialchars($instance['rokscroller_post_dis']);
   		$rokscroller_content_dis = htmlspecialchars($instance['rokscroller_content_dis']);
   		$rokscroller_read_more = htmlspecialchars($instance['rokscroller_read_more']);
   		$rokscroller_read_more_label = htmlspecialchars($instance['rokscroller_read_more_label']);
   		$rokscroller_transition_dur = htmlspecialchars($instance['rokscroller_transition_dur']);
   		$rokscroller_items_click = htmlspecialchars($instance['rokscroller_items_click']);
   		$rokscroller_arrow_opa = htmlspecialchars($instance['rokscroller_arrow_opa']);
   		$rokscroller_thumb_w = htmlspecialchars($instance['rokscroller_thumb_w']);
   		$rokscroller_thumb_h = htmlspecialchars($instance['rokscroller_thumb_h']);

    	# Output the options
    	
    	?>
    	
    	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _re('Title:'); ?>&nbsp;
    	<input style="width: 270px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label>
    	<br /><br />
    	<?php _re('Display Post Title:'); ?>
        <input id="<?php echo $this->get_field_id('rokscroller_post_title'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokscroller_post_title'); ?>" <?php if($rokscroller_post_title=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_post_title'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokscroller_post_title'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokscroller_post_title'); ?>" <?php if($rokscroller_post_title!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_post_title'); ?>0"><?php _re('No'); ?></label>
    	<br /><br />
    	<?php _re('Link Post Title:'); ?>
        <input id="<?php echo $this->get_field_id('rokscroller_link_title'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokscroller_link_title'); ?>" <?php if($rokscroller_link_title=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_link_title'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokscroller_link_title'); ?>0" type="radio" value="text" name="<?php echo $this->get_field_name('rokscroller_link_title'); ?>" <?php if($rokscroller_link_title!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_link_title'); ?>0"><?php _re('No'); ?></label>
    	<br /><br />
    	<?php _re('Link Image:'); ?>
        <input id="<?php echo $this->get_field_id('rokscroller_link_image'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokscroller_link_image'); ?>" <?php if($rokscroller_link_image=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_link_image'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokscroller_link_image'); ?>0" type="radio" value="text" name="<?php echo $this->get_field_name('rokscroller_link_image'); ?>" <?php if($rokscroller_link_image!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_link_image'); ?>0"><?php _re('No'); ?></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_post_cat'); ?>"><?php _re('Category:'); ?></label>&nbsp;
    	<?php wp_dropdown_categories('hide_empty=0&name=' . $this->get_field_name('rokscroller_post_cat') . '&orderby=name&selected='.$rokscroller_post_cat); ?>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_post_count'); ?>"><?php _re('Post Count:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('rokscroller_post_count'); ?>" name="<?php echo $this->get_field_name('rokscroller_post_count'); ?>" type="text" value="<?php echo $rokscroller_post_count; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_post_order'); ?>"><?php _re('Order:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokscroller_post_order'); ?>" name="<?php echo $this->get_field_name('rokscroller_post_order'); ?>">
      		<option value="author"<?php selected( $instance['rokscroller_post_order'], 'author' ); ?>><?php _re('Author'); ?></option>
      		<option value="date"<?php selected( $instance['rokscroller_post_order'], 'date' ); ?>><?php _re('Date'); ?></option>
      		<option value="title"<?php selected( $instance['rokscroller_post_order'], 'title' ); ?>><?php _re('Title'); ?></option>
      		<option value="modified"<?php selected( $instance['rokscroller_post_order'], 'modified' ); ?>><?php _re('Modified'); ?></option>
      		<option value="menu_order"<?php selected( $instance['rokscroller_post_order'], 'menu_order' ); ?>><?php _re('Menu Order'); ?></option>
      		<option value="parent"<?php selected( $instance['rokscroller_post_order'], 'parent' ); ?>><?php _re('Parent'); ?></option>
      		<option value="rand"<?php selected( $instance['rokscroller_post_order'], 'rand' ); ?>><?php _re('Random'); ?></option>
      		<option value="id"<?php selected( $instance['rokscroller_post_order'], 'id' ); ?>><?php _re('ID'); ?></option>
        </select>
        <br /><br />
        <label for="<?php echo $this->get_field_id('rokscroller_thumb_w'); ?>"><?php _re('Image Dimensions:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokscroller_thumb_w'); ?>" name="<?php echo $this->get_field_name('rokscroller_thumb_w'); ?>" type="text" value="<?php echo $rokscroller_thumb_w; ?>" />&nbsp;px</label>
    	&nbsp;&nbsp;x&nbsp;&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokscroller_thumb_h'); ?>" name="<?php echo $this->get_field_name('rokscroller_thumb_h'); ?>" type="text" value="<?php echo $rokscroller_thumb_h; ?>" />&nbsp;px
    	<br /><br />
        <?php _re('Display Post Content:'); ?>
        <input id="<?php echo $this->get_field_id('rokscroller_content_dis'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokscroller_content_dis'); ?>" <?php if($rokscroller_content_dis=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_content_dis'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokscroller_content_dis'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokscroller_content_dis'); ?>" <?php if($rokscroller_content_dis!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_content_dis'); ?>0"><?php _re('No'); ?></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_post_dis'); ?>"><?php _re('Type Of Content :'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokscroller_post_dis'); ?>" name="<?php echo $this->get_field_name('rokscroller_post_dis'); ?>">
      		<option value="content"<?php selected( $instance['rokscroller_post_dis'], 'content' ); ?>><?php _re('Content'); ?></option>
      		<option value="excerpt"<?php selected( $instance['rokscroller_post_dis'], 'excerpt' ); ?>><?php _re('Excerpt'); ?></option>
        </select>
    	<br /><br />
    	 <?php _re('Read More:'); ?>
        <input id="<?php echo $this->get_field_id('rokscroller_read_more'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokscroller_read_more'); ?>" <?php if($rokscroller_read_more=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_read_more'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokscroller_read_more'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokscroller_read_more'); ?>" <?php if($rokscroller_read_more!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokscroller_read_more'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_read_more_label'); ?>"><?php _re('Read More Label:'); ?>&nbsp;
    	<input style="width: 160px;" id="<?php echo $this->get_field_id('rokscroller_read_more_label'); ?>" name="<?php echo $this->get_field_name('rokscroller_read_more_label'); ?>" type="text" value="<?php echo $rokscroller_read_more_label; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_items_click'); ?>"><?php _re('Items Per Click:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('rokscroller_items_click'); ?>" name="<?php echo $this->get_field_name('rokscroller_items_click'); ?>" type="text" value="<?php echo $rokscroller_items_click; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_transition_dur'); ?>"><?php _re('Transition Duration:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('rokscroller_transition_dur'); ?>" name="<?php echo $this->get_field_name('rokscroller_transition_dur'); ?>" type="text" value="<?php echo $rokscroller_transition_dur; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokscroller_arrow_opa'); ?>"><?php _re('Arrow Opacity:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('rokscroller_arrow_opa'); ?>" name="<?php echo $this->get_field_name('rokscroller_arrow_opa'); ?>" type="text" value="<?php echo $rokscroller_arrow_opa; ?>" /></label>
    	<br /><br />

<?php
  	
	}
}

function RokScrollerInit() {
	register_widget('RokScrollerWidget');
}

function RokScrollerScripts() {
	global $wp_registered_widgets;
    $sidebars_widgets = wp_get_sidebars_widgets();
    unset($sidebars_widgets['wp_inactive_widgets']);
    foreach ( (array) $sidebars_widgets as $sidebar ) {
        foreach ((array)$sidebar as $id) {
            $widget_info =& $wp_registered_widgets[$id];
            if ($widget_info['name'] == "RokScroller"){
                $widget =& $widget_info['callback'][0];
                $instances = $widget->get_settings();
                $instance = $instances[$widget_info['params'][0]['number']];
			    echo "\n<script type=\"text/javascript\" src=\"".get_bloginfo('template_directory')."/includes/widgets/rokscroller/js/rokintroscroller.js\"></script>\n
			    <script type=\"text/javascript\">
			    window.addEvent((window.safari) ? 'load' : 'domready', function() {
					var rnu = new RokIntroScroller('rokintroscroller', {
						'arrows': {
							'effect': true,
							'opacity': ".$instance['rokscroller_arrow_opa']."
						},
						'scroll': {
							'duration': ".$instance['rokscroller_transition_dur'].",
							'itemsPerClick': ".$instance['rokscroller_items_click'].",
							'transition': Fx.Transitions.Quad.easeOut
						}
					});
				});
				</script>\n";
	        }
	    }
	}
}

add_action('widgets_init', 'RokScrollerInit');
add_action('wp_head', 'RokScrollerScripts');
?>