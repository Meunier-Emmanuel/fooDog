<header id="masthead" class="site-header header-three" style="background-image: url(<?php echo esc_url( get_header_image());?>);">
		<div class="logo-area">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-6 order-md-2 align-self-center order-lg-0 col-lg-4">
					<div class="social-link-top">
					<?php 
					$facebook = get_theme_mod( 'facebook' );
					$twitter = get_theme_mod('twitter');
					$googleplus = get_theme_mod('googleplus');
					$pinterest = get_theme_mod('pinterest');
					$youtube = get_theme_mod('youtube');
					$instagram = get_theme_mod('instagram');
					$github = get_theme_mod('github');
					$stumbleupon = get_theme_mod('stumbleupon');
					$tumblr = get_theme_mod('tumblr');
					$wordpress = get_theme_mod('wordpress');
					$weixin = get_theme_mod('weixin');
					$snapchat = get_theme_mod('snapchat');
					$qq = get_theme_mod('qq');
					$reddit = get_theme_mod('reddit');
					$linkedin = get_theme_mod('linkedin');
					if(!empty($facebook)) : ?>
					<a href="<?php echo esc_url( $facebook ); ?>" class="fa fa-facebook"></a>
					<?php endif; if(!empty($twitter)): ?>
					<a href="<?php echo esc_url( $twitter ); ?>" class="fa fa-twitter"></a>
					<?php endif; if(!empty($googleplus)) :?>
					<a href="<?php echo esc_url( $googleplus ); ?>" class="fa fa-google-plus"></a>
					<?php endif; if(!empty($pinterest)) : ?>
					<a href="<?php echo esc_url( $pinterest ); ?>" class="fa fa-pinterest"></a>
					<?php endif; if(!empty($youtube)) :?>
					<a href="<?php echo esc_url( $youtube ); ?>" class="fa fa-youtube"></a>
					<?php endif; if(!empty($linkedin)) :?>
					<a href="<?php echo esc_url( $linkedin ); ?>" class="fa fa-linkedin"></a>
					<?php endif; if(!empty($instagram)) :?>
					<a href="<?php echo esc_url( $instagram ); ?>" class="fa fa-instagram"></a>
					<?php endif; if(!empty($github)) :?>
					<a href="<?php echo esc_url( $github ); ?>" class="fa fa-github"></a>
					<?php endif; if(!empty($stumbleupon)) :?>
					<a href="<?php echo esc_url( $stumbleupon ); ?>" class="fa fa-stumbleupon"></a>
					<?php endif; if(!empty($tumblr)) :?>
					<a href="<?php echo esc_url( $tumblr ); ?>" class="fa fa-tumblr"></a>
					<?php endif; if(!empty($wordpress)) :?>
					<a href="<?php echo esc_url( $wordpress ); ?>" class="fa fa-wordpress"></a>
					<?php endif; if(!empty($weixin)) :?>
					<a href="<?php echo esc_url( $weixin ); ?>" class="fa fa-weixin"></a>
					<?php endif; if(!empty($snapchat)) :?>
					<a href="<?php echo esc_url( $snapchat ); ?>" class="fa fa-snapchat"></a>
					<?php endif; if(!empty($qq)) :?>
					<a href="<?php echo esc_url( $qq ); ?>" class="fa fa-qq"></a>
					<?php endif; if(!empty($reddit)) :?>
					<a href="<?php echo esc_url( $reddit ); ?>" class="fa fa-reddit"></a>
					<?php endif;?>
					</div>
				</div>
				<div class="col-md-3 align-self-center col-6 order-md-1 order-lg-1 col-lg-4 text-center">
					<div class="site-branding">
						<?php
						if ( has_custom_logo() ) :
							the_custom_logo();
						endif;
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
					
						$blogshop_description = get_bloginfo( 'description', 'display' );
						if ( $blogshop_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo esc_html( $blogshop_description ); /* WPCS: xss ok. */ ?></p>
							<?php
						endif;
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-3 col-6 align-self-center order-md-3 order-lg-3 col-lg-4 text-right header-three-search">
					<div class="row">
						<div class="col-sm-6 col-6 col-md-8 col-lg-10 text-right pr-0">
							<?php if (class_exists('woocommerce')): ?>
							<div class="mini-shop-btn">
								<div class="mini-shopping-cart-wrapper">
			                        <div class="mini-shopping-cart-inner">
			                           <div class="btn-icon">
			                           	<a href="<?php echo esc_url( wc_get_cart_url() );?>" class="fa fa-shopping-cart"></a>
			                           </div>
			                            <div id="minicarcount"></div>
			                        </div>
			                    </div>
							</div>
							<?php endif; ?>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-2 col-6 pl-0">
							<div class="search-popup">
			                    <div><i class="fa fa-search"></i></div>
			                </div>
							<div class="searchform-area">
							 	<div class="search-close">
							 		<i class="fa fa-times"></i>
							 	</div>
							 	<div class="search-form-inner">
								 	<div class="container">
										<div class="row">
											<div class="col-md-12">
												<?php get_search_form(); ?>
											</div>
										</div>
									</div>
								</div>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="mainmenu" class="menu-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-12 text-center">
						<div class="cssmenu" id="cssmenu">
							<?php
								wp_nav_menu(array(
									'theme_location'	=>	'main-menu',
									'container'			=>	'ul',
								));
							?>    
	                    </div>
					</div>
				</div>
			</div>
		</div>










		
	</header><!-- #masthead -->