<?php get_header(); ?>

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
						</div>
						
						<!-- End Top Menu Widget Position -->
						
						<?php } ?>
						
						<?php if(is_front_page() && is_active_sidebar('showcase')) { ?>
						
						<!-- Begin Showcase Widget Position -->
						
						<div class="feature-module">
						
							<?php dynamic_sidebar('Showcase'); ?>

						</div>
						
						<!-- End Showcase Widget Position -->
						
						<?php } ?>
						
						<?php if(is_front_page() && is_active_sidebar('user_1')) { ?>
						
						<!-- Begin User 1 Widget Positions -->
						
						<?php dynamic_sidebar('User 1'); ?>
						
						<!-- End User 1 Widget Positions -->
						
						<?php } ?>
						
					</div>
				</div>
			</div>
			<div class="show-bm">
				<div class="show-bl"></div>
				<div class="show-br"></div>
			</div>
			
			<!-- End Showcase -->
			
			<?php } ?>
			
			<?php if(is_front_page() && is_active_sidebar('user_2')) { ?>
			
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
			</div>
			
			<!-- End User 2 Widget Position -->
			
			<?php } ?>
			
			<!-- Begin Main Body -->
			
			<div class="main-tm">
				<div class="main-tl"></div>
				<div class="main-tr"></div>
			</div>
			<div class="main-m">
				<div class="main-l">
					<div class="main-r">
						<div id="main-body">
							<div id="main-content" class="<?php echo $option['layout_subpage']; ?>">
								<div class="colmask leftmenu<?php if (rok_isIe(6)) echo ' wrapper'; ?>">
									<?php if (!rok_isIe(6)):?><div class="wrapper"><?php endif; ?>
										<div class="colmid">
											<div class="colright">
											
												<!-- Begin Main Column (col1wrap) -->
												
												<div class="col1wrap">
													<div class="col1pad">
														<div class="col1">
															<div id="maincol">
															
																<?php if(is_front_page() && (is_active_sidebar('user_3') || is_active_sidebar('user_4'))) { ?>
															
																<!-- Begin User 3 & User 4 Widget Positions -->
															
																<div id="mainmodules" class="spacer w49">
																
																	<?php if(is_active_sidebar('user_3')) { ?>
																	
																	<!-- Begin User 3 Widget -->
																	
																	<div class="block first">
																	
																		<?php add_filter('widget_title','empty_title_swap'); ?>
																		
																		<?php dynamic_sidebar('User 3'); ?>
																		
																		<?php remove_filter('widget_title','empty_title_swap'); ?>
																	
																	</div>
																	
																	<!-- End User 3 Widget -->
																	
																	<?php } ?>
																	
																	<?php if(is_active_sidebar('user_4')) { ?>
																	
																	<!-- Begin User 4 Widget -->
																	
																	<div class="block last">
																						
																		<?php add_filter('widget_title','empty_title_swap'); ?>
																		
																		<?php dynamic_sidebar('User 4'); ?>
																		
																		<?php remove_filter('widget_title','empty_title_swap'); ?>
																	
																	</div>
																							
																	<!-- End User 4 Widget -->
																	
																	<?php } ?>
																	
																</div>
																<div class="clr"></div>
																
																<!-- End User 3 & User 4 Widget Positions -->
																
																<?php } ?>
																
																<!-- Begin Posts Wrapper -->
																
																<?php if(!is_front_page() && $option['breadcrumbs'] == 'true') { ?>
												
																	<div id="breadcrumbs">
																	
																		<a href="<?php bloginfo('url'); ?>" id="breadcrumbs-home"></a>
																		
						                    							<span class="breadcrumbs pathway">
						                    																
																		<?php
				                    													
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
																												
																			<span class="no-link"><?php the_title(); ?></span>
																										
																		</span>
				
					    											</div>
					    											
					    										<?php } ?>
																
																<div class="bodycontent">
																	<div id="maincontent-block">
																		<div class="single-post">
																			<div class="module-tm">
																				<div class="module-tl"></div>
																				<div class="module-tr"></div>
																			</div>
																			<div class="module-inner">
																			
																				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
																			
																				<!-- Begin Post -->
																			
																				<div class="leading">
																					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																						
																						<?php if ($option['single_title'] == 'true') { ?>
																	
																						<!-- Begin Title -->
																					
						   																<div class="article-rel-wrapper">
																								
																							<h1 class="contentheading">
																								<?php the_title(); ?>
																							</h1>
																								
																						</div>
																							
																						<!-- End Title -->
																							
																						<?php } ?>
																						
																						<?php if ($option['single_meta'] == 'true') { ?>
																						
																						<!-- Begin Meta -->
																						
																						<div class="article-info-surround">
																						
																							<?php if ($option['single_meta_author'] == 'true') { ?>
																						
																							<!-- Begin Author -->
																						
																							<div class="article-info-right">
																								<span class="createdby"><?php the_author(); ?></span>
																							</div>
																							
																							<!-- End Author -->
																							
																							<?php } ?>
																							
																							<?php if ($option['single_meta_date'] == 'true') { ?>
																							
																							<!-- Begin Date & Time -->
																							
																							<div class="iteminfo">
																								<div class="article-info-left">
																									<span class="createdate">
																										<span class="date1"><?php the_time('M j'); ?></span>
																										<span class="date2">
																											<span class="date-div">|</span><?php the_time('H:i'); ?>
																										</span>
																									</span>
																									<div class="clr"></div>
																								</div>
																							</div>
																							
																							<!-- End Date & Time -->
																							
																							<?php } ?>
																							
																						</div>
																						
																						<!-- End Meta -->
																						
																						<?php } ?>
																						
																						<div class="main-content">
																							<div class="post-content">
																							
																								<?php if($option['single_tweetmeme'] == 'true') { ?>
	    																									
								    																<div class="tweetmeme png"><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>
							    																									
							    																<?php } ?>
																													
																								<?php the_content(); ?>
																									
																								<div class="clr"></div>
																									
																								<?php wp_link_pages('before=<div class="pagination"><span class="pagination-name">'._r('Pages:').'</span><span class="pagination-numbers">&after=</span></div><br />'); ?>
																																	
																								<?php edit_post_link(_r('Edit this entry.'), '<div class="edit-me">', '</div>'); ?>
																								
																								<?php if ( has_tag() ) : ?>
																														
																								<div class="tag-box">
																													
																									<?php the_tags('<span>'._r('TAGS:&nbsp;').' </span>', ', ', ''); ?>
																																
																								</div>
																
																								<?php endif; ?>
																									
																								<?php if ($option['single_footer'] == 'true') { ?>
																													
																								<br />				
																								<div class="entry_post_footer">
																									<small>
																									
																										<?php _re('This entry was posted'); ?>
																										<?php /* This is commented, because it requires a little adjusting sometimes.
																										You'll need to download this plugin, and follow the instructions:
																										http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
																										/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
																										<?php _re('on'); ?> <?php the_time('l, F jS, Y') ?> <?php _re('at'); ?> <?php the_time() ?>
																										<?php _re('and is filed under'); ?> <?php the_category(', ') ?>.
																										<?php _re('You can follow any responses to this entry through the'); ?> <?php post_comments_feed_link('RSS 2.0'); ?> <?php _re('feed'); ?>.
						
																										<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
																										// Both Comments and Pings are open ?>
																										<?php _re('You can'); ?> <a href="#respond"><?php _re('leave a response'); ?></a>, <?php _re('or'); ?> <a href="<?php trackback_url(); ?>" rel="trackback"><?php _re('trackback'); ?></a> <?php _re('from your own site.'); ?>
						
																										<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
																										// Only Pings are Open ?>
																										<?php _re('Responses are currently closed, but you can'); ?> <a href="<?php trackback_url(); ?> " rel="trackback"><?php _re('trackback'); ?></a> <?php _re('from your own site.'); ?>
						
																										<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
																										// Comments are open, Pings are not ?>
																										<?php _re('You can skip to the end and leave a response. Pinging is currently not allowed.'); ?>
							
																										<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
																										// Neither Comments, nor Pings are open ?>
																										<?php _re('Both comments and pings are currently closed.'); ?>
						
																										<?php } edit_post_link(_r('Edit this entry'),'','.'); ?>
						
																									</small>
																								</div>
																																	
																								<?php } ?>
																									
																								<?php if(comments_open()) { ?>
																			
																									<a name="comments"></a>
																																			
																									<?php comments_template(); ?>
																								
																								<?php } ?>
																							
																								<div class="clr"></div>
																							
																							</div>
																						</div>
																						<div class="clr"></div>
																					</div>
																				</div>
																				
																				<!-- End Post -->
																				
																				<?php endwhile; ?>
																
																				<?php else : ?>
																					
																				<div class="attention"><div class="icon"><?php _re('Sorry, no posts matched your criteria.'); ?></div></div>
																					
																				<?php endif; ?>
																				
																			</div>
																			<div class="module-bm">
																				<div class="module-bl"></div>
																				<div class="module-br"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="clr"></div>
																
																<!-- End Posts Wrapper -->
																
																<?php if(is_front_page() && (is_active_sidebar('user_5') || is_active_sidebar('user_6'))) { ?>
															
																<!-- Begin User 5 & User 6 Widget Positions -->
																
																<div id="mainmodules2" class="spacer w49">
																	
																	<?php if(is_active_sidebar('user_5')) { ?>
																	
																	<!-- Begin User 5 Widget -->
																	
																	<div class="block first">
																	
																		<?php add_filter('widget_title','empty_title_swap'); ?>
																		
																		<?php dynamic_sidebar('User 5'); ?>
																		
																		<?php remove_filter('widget_title','empty_title_swap'); ?>
																	
																	</div>
																	
																	<!-- End User 5 Widget -->
																	
																	<?php } ?>
																	
																	<?php if(is_active_sidebar('user_6')) { ?>
																	
																	<!-- Begin User 6 Widget -->
																	
																	<div class="block last">
																						
																		<?php add_filter('widget_title','empty_title_swap'); ?>
																		
																		<?php dynamic_sidebar('User 6'); ?>
																		
																		<?php remove_filter('widget_title','empty_title_swap'); ?>
																	
																	</div>
																							
																	<!-- End User 6 Widget -->
																	
																	<?php } ?>

																</div>
																<div class="clr"></div>
																
																<!-- End User 5 & User 6 Widget Positions -->
																
																<?php } ?>
																
															</div>
														</div>
													</div>
												</div>
												
												<!-- End Main Column (col1wrap) -->
												
												<!-- Begin Left Column (col2) -->
				        		
								        		<?php if($option['left_sub_sidebar'] == 'true') { ?>
										    		
												<?php get_sidebar('left-sub'); ?>
													
												<?php } ?>
								         
									   			<!-- End Left Column (col2) -->
									    		
									    		<!-- Begin Right Column (col3) -->
				
												<?php if($option['right_sub_sidebar'] == 'true') { ?>
										    		
												<?php get_sidebar('right-sub'); ?>
													
												<?php } ?>
									     
									    		<!-- End Right Column (col3) -->
											
											</div>
										</div>
									</div>
								<?php if (!rok_isIe(6)):?></div><?php endif; ?>
							</div>
							
							<!-- Begin Main Bottom -->
							
							<!-- End Main Bottom -->
							
						</div>
					</div>
				</div>
			</div>
			<div class="main-bm">
				<div class="main-bl"></div>
				<div class="main-br"></div>
			</div>
			
			<!-- End Main Body -->
		
<?php get_footer(); ?>