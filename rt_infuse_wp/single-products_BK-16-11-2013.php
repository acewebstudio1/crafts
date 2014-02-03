<?php get_header();?>
			<?php $option = get_option('infuse-options');?>

			<?php if (is_active_sidebar('top_menu') || is_active_sidebar('showcase') || is_active_sidebar('user_1')) {?>

			<!-- Begin Showcase -->

			<div class="show-tm">
				<div class="show-tl"></div>
				<div class="show-tr"></div>
			</div>
			<div class="show-m">
				<div class="show-l">
					<div class="show-r">

						<?php if (is_active_sidebar('top_menu')) {?>

						<!-- Begin Top Menu Widget Position -->

						<div id="horiz-menu" class="fusion">
							<div class="wrapper">
								<div class="padding">
									<div id="horizmenu-surround">
										<?php dynamic_sidebar('Top Menu');?>
									</div>
									<div class="clr"></div>
								</div>
							</div>
						</div>

						<!-- End Top Menu Widget Position -->

						<?php }?>

						<?php if (is_front_page() && is_active_sidebar('showcase')) {?>

						<!-- Begin Showcase Widget Position -->

						<div class="feature-module">

							<?php dynamic_sidebar('Showcase');?>

						</div>

						<!-- End Showcase Widget Position -->

						<?php }?>

						<?php if (is_front_page() && is_active_sidebar('user_1')) {?>

						<!-- Begin User 1 Widget Positions -->

						<?php dynamic_sidebar('User 1');?>

						<!-- End User 1 Widget Positions -->

						<?php }?>

					</div>
				</div>
			</div>
			<div class="show-bm">
				<div class="show-bl"></div>
				<div class="show-br"></div>
			</div>

			<!-- End Showcase -->

			<?php }?>

			<?php if (is_front_page() && is_active_sidebar('user_2')) {?>

			<!-- Begin User 2 Widget Position -->

			<div class="show-tm">
				<div class="show-tl"></div>
				<div class="show-tr"></div>
			</div>
			<div class="show-m">
				<div class="show-l">
					<div class="show-r">
						<div class="scroller-module">

							<?php dynamic_sidebar('User 2');?>

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

			<?php }?>

			<!-- Begin Main Body -->

			<div class="main-tm">
				<div class="main-tl"></div>
				<div class="main-tr"></div>
			</div>
			<div class="main-m">
				<div class="main-l">
					<div class="main-r">
						<div id="main-body">
							<div id="main-content" class="<?php echo $option['layout_subpage'];?>">
								<div class="colmask leftmenu<?php if (rok_isIe(6)) echo ' wrapper';?>">
									<?php if (!rok_isIe(6)) : ?><div class="wrapper"><?php endif;?>
										<div class="colmid">
											<div class="colright">

												<!-- Begin Main Column (col1wrap) -->

												<div class="col1wrap">
													<div class="col1pad">
														<div class="col1">
															<div id="maincol">

																<?php if (is_front_page() && (is_active_sidebar('user_3') || is_active_sidebar('user_4'))) {?>

																<!-- Begin User 3 & User 4 Widget Positions -->

																<div id="mainmodules" class="spacer w49">

																	<?php if (is_active_sidebar('user_3')) {?>

																	<!-- Begin User 3 Widget -->

																	<div class="block first">

																		<?php add_filter('widget_title', 'empty_title_swap');?>

																		<?php dynamic_sidebar('User 3');?>

																		<?php remove_filter('widget_title', 'empty_title_swap');?>

																	</div>

																	<!-- End User 3 Widget -->

																	<?php }?>

																	<?php if (is_active_sidebar('user_4')) {?>

																	<!-- Begin User 4 Widget -->

																	<div class="block last">

																		<?php add_filter('widget_title', 'empty_title_swap');?>

																		<?php dynamic_sidebar('User 4');?>

																		<?php remove_filter('widget_title', 'empty_title_swap');?>

																	</div>

																	<!-- End User 4 Widget -->

																	<?php }?>

																</div>
																<div class="clr"></div>

																<!-- End User 3 & User 4 Widget Positions -->

																<?php }?>

																<!-- Begin Posts Wrapper -->

																<?php if (!is_front_page() && $option['breadcrumbs'] == 'true') {?>

																	<div id="breadcrumbs">

																		<a href="<?php bloginfo('url');?>" id="breadcrumbs-home"></a>

						                    							<span class="breadcrumbs pathway">

																		  <?php
																		  $breadcrumbs_path = get_bloginfo('template_directory');
																		  $parent_id = $post->post_parent;
																		  $breadcrumbs = array();
																		  while ($parent_id) {
																		    $page = get_page($parent_id);
																		    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '" title="" class="pathway">' . get_the_title($page->ID) . '</a>';
																		    $parent_id = $page->post_parent;
																		  }
																		  $breadcrumbs = array_reverse($breadcrumbs);
																		  foreach ($breadcrumbs as $crumb)
																		    echo $crumb . '<img alt="" src="' . $breadcrumbs_path . '/images/arrow.png"/>';
																		  ?>

																			<span class="no-link"><?php the_title();?></span>

																		</span>

					    											</div>

					    										<?php }?>

																<div class="bodycontent">
																	<div id="maincontent-block">
																		<div class="single-post">
																			<div class="module-tm">
																				<div class="module-tl"></div>
																				<div class="module-tr"></div>
																			</div>
																			<div class="module-inner">

																				<?php if (have_posts()) : while (have_posts()) : the_post();?>

																				<!-- Begin Post -->

																				<div class="leading">
																					<div <?php post_class();?> id="post-<?php the_ID();?>">

																						<?php if ($option['single_title'] == 'true') {?>

																						<!-- Begin Title -->

						   																<div class="article-rel-wrapper">

																							<h1 class="contentheading">
																								<?php the_title();?>
																							</h1>

																						</div>

																						<!-- End Title -->

																						<?php }?>

																						<?php if (0 && $option['single_meta'] == 'true') {?>

																						<!-- Begin Meta -->

																						<div class="article-info-surround">

																							<?php if ($option['single_meta_author'] == 'true') {?>

																							<!-- Begin Author -->

																							<div class="article-info-right">
																								<span class="createdby"><?php the_author();?></span>
																							</div>

																							<!-- End Author -->

																							<?php }?>

																							<?php if ($option['single_meta_date'] == 'true') {?>

																							<!-- Begin Date & Time -->

																							<div class="iteminfo">
																								<div class="article-info-left">
																									<span class="createdate">
																										<span class="date1"><?php the_time('M j');?></span>
																										<span class="date2">
																											<span class="date-div">|</span><?php the_time('H:i');?>
																										</span>
																									</span>
																									<div class="clr"></div>
																								</div>
																							</div>

																							<!-- End Date & Time -->

																							<?php }?>

																						</div>

																						<!-- End Meta -->

																						    <?php
																						  }
																						  ?>

																						<div class="main-content">
																							<div class="post-content">

																								  <?php
																								  if ($option['single_tweetmeme'] == 'true') {
																								    ?>

								    																<div class="tweetmeme png"><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>

							    																    <?php
							    																  }
							    																  $ecwidProductId = get_post_meta(get_the_id(), 'wpcf-ecwid-product-id', true);
							    																// OK cool - then let's create a new cURL resource handle
							    																  $ch = curl_init();
							    																//$url = 'http://app.ecwid.com/api/v1/617007/products?category=' . $ecwidCatId . '&hidden_products=false';
							    																  $url = 'http://app.ecwid.com/api/v1/617007/product?id=' . $ecwidProductId . '&hidden_products=false';
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
																								<?php ?>
                                                                                                <div class="mainSection">















    <div class="ecwid-productBrowser-detailsContainer">

      <div class="ecwid-productBrowser-categoryPath" aria-hidden="false">
        <span class="ecwid-productBrowser-categoryPath-categoryLabel gwt-InlineLabel">
          Category:
        </span>
        <div class="ecwid-productBrowser-categoryPath-categoryLink ecwid-productBrowser-categoryPath-storeLink" style="display: inline;">
          <a onclick="javascript: return false;" href="https://www.yourcraftsfair.com/our-store/">
            Store
          </a>
        </div>
        <span class="ecwid-productBrowser-categoryPath-separator ecwid-productBrowser-categoryPath-separator-first gwt-InlineLabel">
          &nbsp;&gt;&nbsp;
        </span>
        <div class="ecwid-productBrowser-categoryPath-categoryLink" style="display: inline;">
          <a onclick="javascript: return false;" href="https://www.yourcraftsfair.com/store/#%21/%7E/category/id=5460006&amp;offset=0&amp;sort=priceAsc">
            <?php print $prodArray->categories[0]->name; ?>
          </a>
        </div>
      </div>
      <div class="ecwid-productBrowser-details" style="padding-top: 50px;">
        <div class="ecwid-productBrowser-details-topPanel">
        </div>
        <div class="ecwid-productBrowser-details-rightPanel" style="width: 220px; float: right; background-color: #DADADA; padding: 10px 20px;">
          <table cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td align="left" style="vertical-align: top;">
                  <table cellspacing="0" cellpadding="0" style="width: 100%;">
                    <tbody>
                      <tr>
                        <td align="left" style="vertical-align: top;">
                          <div class="ecwid-productBrowser-backgroundedPanel">
                            <div style="width: 100%;">
                              <div class="ecwid-productBrowser-backgroundedPanelInner">
                                <div class="ecwid-productBrowser-sku">
                                  SKU  <?php print $prodArray->sku; ?>
                                </div>
                                <div class="ecwid-productBrowser-extraFields-side" style="display: none;" aria-hidden="true">
                                  <img width="10" height="10" src="Double%20Cat%20Calendar%20Light-colour_files/spacer.gif" style="display: block; height: 10px; width: 10px;" class="ecwid-SpacerImage">
                                </div>
                                <div class="ecwid-productBrowser-details-inStockLabel">
                                  In stock
                                </div>
                                <div class="ecwid-productBrowser-price notranslate">
                                  &pound;<?php print $prodArray->price; ?>
                                </div>
                                <div class="ecwid-productBrowser-details-taxes" style="display: none;" aria-hidden="true">
                                  <div class="ecwid-productBrowser-details-priceIncludesTaxesLabel">
                                    This price includes taxes:
                                  </div>
                                  <div class="ecwid-productBrowser-details-taxesList">
                                  </div>
                                </div>
                                <div class="ecwid-productBrowser-details-wholesale" style="display: none;" aria-hidden="true">
                                  <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <colgroup>
                                      <col>
                                    </colgroup>
                                    <tbody>
                                    </tbody>
                                  </table>
                                  <div class="ecwid-productBrowser-details-wholesale-saving" style="display: none;" aria-hidden="true">
                                  </div>
                                </div>

                                <div class="ecwid-productBrowser-details-optionsPanel">
                                </div>
                                <div class="ecwid-productBrowser-details-qtyPanel" aria-hidden="false">
                                  <table cellspacing="0" cellpadding="0" class="ecwid-fieldEnvelope ecwid-fieldEnvelope-hidden">
                                    <tbody>
                                      <tr>
                                        <td align="left" style="vertical-align: top;">
                                          <div class="ecwid-fieldEnvelope-around">
                                            <div>
                                              <div class="ecwid-productBrowser-details-qtyLabel">
                                                Qty(1 available) <input type="number" class="gwt-TextBox ecwid-productBrowser-details-qtyTextField" style="text-align: right; width: 32px;" maxlength="10" min="1" max="1" value="1">
                                              </div>
                                              <div class="ecwid-productBrowser-details-qtyAvailInfo" style="" aria-hidden="false">

                                              </div>

                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="left" style="vertical-align: top;">
                                          <div style="visibility: hidden; display: none;">
                                            <div class="ecwid-fieldEnvelope-label ecwid-fieldEnvelope-label-light" style="visibility: hidden; display: none;">
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="gwt-HTML" style="display: none;" aria-hidden="true">
                                </div>
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                  <colgroup>
                                    <col>
                                  </colgroup>
                                  <tbody>
                                    <tr>
                                      <td align="center">
                                        <div tabindex="0" class="ecwid-AddToBagButton ecwid-AddToBagButton-up" role="button" aria-pressed="false" aria-hidden="false">
                                          <input type="text" tabindex="-1" role="presentation" style="opacity: 0; height: 1px; width: 1px; z-index: -1; overflow: hidden; position: absolute;">
                                          <div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table cellspacing="0" cellpadding="0" style="width: 100%; display: none;" aria-hidden="true">
                                  <tbody>
                                    <tr>
                                      <td align="left" style="vertical-align: top;">
                                        <button type="button" class="gwt-Button ecwid-productBrowser-details-addMoreButton" style="display: none;" aria-hidden="true">
                                          Add More
                                        </button>
                                      </td>
                                      <td align="left" style="vertical-align: top;">
                                        <img width="5" height="1" src="Double%20Cat%20Calendar%20Light-colour_files/spacer.gif" style="display: block; height: 1px; width: 5px;" class="ecwid-SpacerImage">
                                      </td>
                                      <td align="right" style="vertical-align: top;">
                                        <button type="button" class="gwt-Button ecwid-productBrowser-details-openBagButton" style="display: none;" aria-hidden="true">
                                          Go to Checkout
                                        </button>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                  <colgroup>
                                    <col>
                                  </colgroup>
                                  <tbody>
                                    <tr>
                                      <td align="center">
                                        <div tabindex="0" class="ecwid-ContinueShoppingButton ecwid-ContinueShoppingButton-up" role="button" aria-pressed="false" style="display: none;" aria-hidden="true">
                                          <input type="text" tabindex="-1" role="presentation" style="opacity: 0; height: 1px; width: 1px; z-index: -1; overflow: hidden; position: absolute;">
                                          <div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="vertical-align: top;">
                          <div class="ecwid-ProductDetails-gray-panel-bottom" style="" aria-hidden="false">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="vertical-align: top;">
                          <div class="ecwid-productBrowser-ask-advice-panel">
                            <a class="gwt-Anchor" href="javascript:;">
                              Ask your friends for advice
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="vertical-align: top;">
                          <table cellspacing="0" cellpadding="0" style="width: 100%;" aria-hidden="false">
                            <tbody>
                              <tr>
                                <td align="left" style="vertical-align: top;">
                                  <div class="ecwid-productBrowser-sharePanel-header">
                                    <a class="ecwid-productBrowser-sharePanel-headerLabel" href="javascript:;">
                                      Share
                                    </a>
                                  </div>
                                </td>
                              </tr>
                              <tr style="display: none;">
                                <td align="center" style="vertical-align: middle; height: 100px;">
                                  <div class="ecwid-productBrowser-sharePanel-waiting">
                                    <div class="ecwid-productBrowser-sharePanel-waiting-icon">
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td align="left" style="vertical-align: top;">
                                  <div style="display: none; width: 0px;" aria-hidden="true">
                                    <div class="ecwid-productBrowser-sharePanel-buttonsContainer">
                                      <div>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td align="left" style="vertical-align: top;">
                  <a class="ecwid-poweredBy" href="http://www.ecwid.com/?utm_source=617007&amp;utm_medium=powered-by-link&amp;utm_campaign=Ecwid%2Bstores" target="_blank" style="display: none;" aria-hidden="true">
                    Powered by Ecwid
                  </a>
                </td>
              </tr>
              <tr>
                <td align="left" style="vertical-align: top;">
                  <div class="ecwid-productBrowser-details-GalleryPanel" style="display: none;" aria-hidden="true">
                    <div>
                    </div>
                    <div class="ecwid-productBrowser-details-GalleryPanel-linkContainer">
                      <table cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" style="vertical-align: middle;">
                              <a class="gwt-Anchor" href="javascript:;">
                                View detailed images
                              </a>
                            </td>
                            <td align="left" style="vertical-align: middle;">
                              <div class="gwt-HTML">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="ecwid-productBrowser-details-leftPanel" style="width: 450px; float: left;">
          <div style="overflow: auto; position: relative;">
            <div class="ecwid-productBrowser-details-thumbnail">
              <img class="gwt-Image" src="<?php print $prodArray->originalImageUrl; ?>" style="width: 397px;" alt="<?php print $prodArray->name; ?>" title="<?php print $prodArray->name; ?>" draggable="false">
            </div>
          </div>
          <div class="ecwid-productBrowser-details-descr">
            <div class="gwt-HTML" style="display: none;" aria-hidden="true">
            </div>
            <div class="ecwid-productBrowser-extraFields-center" style="display: none;" aria-hidden="true">
              <img width="10" height="10" src="Double%20Cat%20Calendar%20Light-colour_files/spacer.gif" style="display: block; height: 10px; width: 10px;" class="ecwid-SpacerImage">
            </div>
            <div class="gwt-HTML">
              <p>
                <?php print $prodArray->description; ?>
              </p>
            </div>
          </div>




        </div>
      </div>
    </div>























                                                                                                </div>

																								<div class="clr"></div>

																								<?php ?>

																								<?php ?>

																								<?php if (has_tag()) : ?>

																								<div class="tag-box">

																									<?php the_tags('<span>' . _r('TAGS:&nbsp;') . ' </span>', ', ', '');?>

																								</div>

																								<?php endif;?>

																								  <?php
																								  if (0 && $option['single_footer'] == 'true') {
																								    ?>

																								<br />
																								<div class="entry_post_footer">
																									<small>

																										    <?php
																										    _re('This entry was posted');
																										    ?>
																										    <?php
																										/* This is commented, because it requires a little adjusting sometimes.
																										You'll need to download this plugin, and follow the instructions:
																										http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
																										/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */
																										    ?>
																										<?php _re('on');?> <?php the_time('l, F jS, Y') ?> <?php _re('at');?> <?php the_time() ?>
																										<?php _re('and is filed under');?> <?php the_category(', ') ?>.
																										<?php _re('You can follow any responses to this entry through the');?>     <?php
     post_comments_feed_link('RSS 2.0');
     ?>
     <?php
     _re('feed');
     ?>
.

																										    <?php
																										    if (('open' == $post->comment_status) && ('open' == $post->ping_status)) {
																										// Both Comments and Pings are open
																										      ?>
																										<?php _re('You can');?> <a href="#respond"><?php _re('leave a response');?></a>, <?php _re('or');?> <a href="<?php trackback_url();?>" rel="trackback">
      <?php
      _re('trackback');
      ?>
</a>       <?php
       _re('from your own site.');
       ?>

																										      <?php
																										    }
																										    elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) {
																										// Only Pings are Open
																										      ?>
																										<?php _re('Responses are currently closed, but you can');?> <a href="<?php trackback_url();?> " rel="trackback">
      <?php
      _re('trackback');
      ?>
</a>       <?php
       _re('from your own site.');
       ?>

																										      <?php
																										    }
																										    elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) {
																										// Comments are open, Pings are not
																										      ?>
																										      <?php
																										      _re('You can skip to the end and leave a response. Pinging is currently not allowed.');
																										      ?>

																										      <?php
																										    }
																										    elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) {
																										// Neither Comments, nor Pings are open
																										      ?>
																										<?php _re('Both comments and pings are currently closed.');?>

																										<?php }edit_post_link(_r('Edit this entry'), '', '.');?>

																									</small>
																								</div>

																								<?php }?>

																								<?php if (comments_open()) {?>

																									<a name="comments"></a>

																									<?php comments_template();?>

																								<?php }?>

																								<div class="clr"></div>

																							</div>
																						</div>
																						<div class="clr"></div>
																					</div>
																				</div>

																				<!-- End Post -->

																				<?php endwhile;?>

																				<?php else : ?>

																				<div class="attention"><div class="icon"><?php _re('Sorry, no posts matched your criteria.');?></div></div>

																				<?php endif;?>

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

																<?php if (is_front_page() && (is_active_sidebar('user_5') || is_active_sidebar('user_6'))) {?>

																<!-- Begin User 5 & User 6 Widget Positions -->

																<div id="mainmodules2" class="spacer w49">

																	<?php if (is_active_sidebar('user_5')) {?>

																	<!-- Begin User 5 Widget -->

																	<div class="block first">

																		<?php add_filter('widget_title', 'empty_title_swap');?>

																		<?php dynamic_sidebar('User 5');?>

																		<?php remove_filter('widget_title', 'empty_title_swap');?>

																	</div>

																	<!-- End User 5 Widget -->

																	<?php }?>

																	<?php if (is_active_sidebar('user_6')) {?>

																	<!-- Begin User 6 Widget -->

																	<div class="block last">

																		<?php add_filter('widget_title', 'empty_title_swap');?>

																		<?php dynamic_sidebar('User 6');?>

																		<?php remove_filter('widget_title', 'empty_title_swap');?>

																	</div>

																	<!-- End User 6 Widget -->

																	<?php }?>

																</div>
																<div class="clr"></div>

																<!-- End User 5 & User 6 Widget Positions -->

																<?php }?>

															</div>
														</div>
													</div>
												</div>

												<!-- End Main Column (col1wrap) -->

												<!-- Begin Left Column (col2) -->

								        		<?php if ($option['left_sub_sidebar'] == 'true') {?>

												<?php get_sidebar('left-sub');?>

												<?php }?>

									   			<!-- End Left Column (col2) -->

									    		<!-- Begin Right Column (col3) -->

												<?php if ($option['right_sub_sidebar'] == 'true') {?>

												<?php get_sidebar('right-sub');?>

												<?php }?>

									    		<!-- End Right Column (col3) -->

											</div>
										</div>
									</div>
								<?php if (!rok_isIe(6)) : ?></div><?php endif;?>
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

<?php get_footer();?>