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
							<div id="main-content" class="<?php echo $option['layout_front']; ?>">
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
																
																<div class="bodycontent">
																	<div id="maincontent-block">
																		<div class="blog infuse-home">
																			<div class="module-tm">
																				<div class="module-tl"></div>
																				<div class="module-tr"></div>
																			</div>
																			<div class="module-inner">
																			
																				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
																				query_posts('paged='.$paged.'&orderby='.$option['blog_order'].'&cat='.$option['blog_cat']); ?>
					
																				<?php while (have_posts()) : the_post(); ?>
																			
																				<!-- Begin Post -->
																			
																				<div class="leading infuse-home">
																					<div <?php post_class('infuse-home'); ?> id="post-<?php the_ID(); ?>">
																						
																						<?php if ($option['blog_title'] == 'true') { ?>
																	
																						<!-- Begin Title -->
																					
						   																<div class="article-rel-wrapper">
                                                                                            
						   																	<?php if ($option['blog_title_link'] == 'true') { ?>
						   																
																							<h2 class="contentheading">
																								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
																							</h2>
																								
																							<?php } else { ?>
																								
																							<h2 class="contentheading">
																								<?php the_title(); ?>
																							</h2>
																								
																							<?php } ?>
																								
																						</div>
																							
																						<!-- End Title -->
																							
																						<?php } ?>
																						
																						<?php if ($option['blog_meta'] == 'true') { ?>
																						
																						<!-- Begin Meta -->
																						
																						<div class="article-info-surround">
																						
																							<?php if ($option['blog_author'] == 'true') { ?>
																						
																							<!-- Begin Author -->
																						
																							<div class="article-info-right">
																								<span class="createdby"><?php the_author(); ?></span>
																							</div>
																							
																							<!-- End Author -->
																							
																							<?php } ?>
																							
																							<?php if ($option['blog_date'] == 'true') { ?>
																							
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
																						
																							<?php $thumb = get_post_meta($post->ID, 'thumb', TRUE); ?>
																							<?php if(function_exists('has_post_thumbnail') && has_post_thumbnail()) { ?>
																								
																								<!-- Begin Post Image -->
																								
																								<div class="photo">
																									<span class="fp-img2"><?php the_post_thumbnail(); ?></span>
																									<div class="clr"></div>
																									<div class="readon-wrap1">
																										<div class="readon1-l"></div>
																										<span class="readon1-m">
																											<span class="readon1-r"><a href="#" class="readon-main"><?php _re('Author:'); ?></a> <?php the_author_posts_link(); ?></span>
																										</span>
																									</div>
																									<div class="clr"></div>
																								</div>
																									
																								<!-- End Post Image -->
																								
																							<?php } else { ?>
																								
																								<?php if ($thumb != '') { ?>
																								
																									<!-- Begin Post Image -->
																									
																									<div class="photo">
																										<span class="fp-img2"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $thumb ?>&amp;w=<?php echo $option['thumb_width']; ?>&amp;h=<?php echo $option['thumb_height']; ?>&amp;zc=1&amp;q=75" alt="<?php the_title(); ?>" /></span>
																										<div class="clr"></div>
																										<div class="readon-wrap1">
																											<div class="readon1-l"></div>
																											<span class="readon1-m">
																												<span class="readon1-r"><a href="#" class="readon-main"><?php _re('Author:'); ?></a> <?php the_author_posts_link(); ?></span>
																											</span>
																										</div>
																										<div class="clr"></div>
																									</div>
																									
																									<!-- End Post Image -->
																								
																								<?php } ?>
																								
																							<?php } ?>
																						
																							<div class="post-content<?php if($thumb != '' || (function_exists('has_post_thumbnail') && has_post_thumbnail())) { echo ' has-thumb'; } ?>">
																							
																								<?php if ($option['blog_content'] == 'content') { ?>
																								
																								<?php the_content(_r('Read More...')); ?>
																													
																								<?php } else { ?>
																													
																								<?php the_excerpt(); ?>
																								<a href="<?php the_permalink(); ?>"><?php _re('Read More ...'); ?></a>
																														
																								<?php } ?>
																								
																								<div class="clr"></div>
																							
																							</div>
																						</div>
																						<div class="clr"></div>
																					</div>
																				</div>
																				<span class="leading_separator infuse-home">&nbsp;</span>
																				
																				<!-- End Post -->
																				
																				<?php endwhile;?>
																											
																				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
																						
																				<div class="pagination nav">
																					<div class="alignleft">
																						<?php next_posts_link('&laquo; '._r('Older Entries')); ?>
																					</div>
																					<div class="alignright">
																						<?php previous_posts_link(_r('Newer Entries').' &raquo;') ?>
																					</div>
																					<div class="clr"></div>
																				</div>
																							
																				<?php } ?>
																				
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
				        		
								        		<?php if($option['left_front_sidebar'] == 'true') { ?>
										    		
												<?php get_sidebar('left'); ?>
													
												<?php } ?>
								         
									   			<!-- End Left Column (col2) -->
									    		
									    		<!-- Begin Right Column (col3) -->
				
												<?php if($option['right_front_sidebar'] == 'true') { ?>
										    		
												<?php get_sidebar('right'); ?>
													
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