<?php
    /* Template Name: Home */
    get_header();
?>
	<div class="banner">
		<img src="<?php echo get_template_directory_uri() ?>/img/banner.jpg" alt="" class="img-responsive">
	</div>
		<div class="content">

			<div class="grid">
			<?php
			// WP_Query arguments
			$args = array (
				'nopaging'               => false,
				'paged'                  => 'paged',
				'posts_per_page'         => '16',
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); ?>
							<!-- open/close -->
		<div class="overlay overlay-scale">
			<button type="button" class="overlay-close">Close</button>
      <div class="info"><h3>Content goes here</h3><p>interesting text about information on an infographic</p>
        <!-- Contenedor -->
	<ul id="accordion" class="accordion">
        <h1><i class="fa fa-download"></i>Download</h1>
		<li>
			<div class="link">iPhone<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Photoshop</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Maquetacion web</a></li>
			</ul>
		</li>
		<li class="default open">
			<div class="link">iPad<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Javascript</a></li>
				<li><a href="#">jQuery</a></li>
				<li><a href="#">Frameworks javascript</a></li>
			</ul>
		</li>
		<li>
			<div class="link">Android Phone<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Tablets</a></li>
				<li><a href="#">Dispositivos mobiles</a></li>
				<li><a href="#">Medios de escritorio</a></li>
				<li><a href="#">Otros dispositivos</a></li>
			</ul>
		</li>
		<li><div class="link">Android Tablet<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Google</a></li>
				<li><a href="#">Bing</a></li>
				<li><a href="#">Yahoo</a></li>
				<li><a href="#">Otros buscadores</a></li>
			</ul>
		</li>
        <li><div class="link">Desktop<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Google</a></li>
				<li><a href="#">Bing</a></li>
				<li><a href="#">Yahoo</a></li>
				<li><a href="#">Otros buscadores</a></li>
			</ul>
		</li>
	</ul>
      </div>
				<div class="grid__item" id="trigger-overlay">
					<a href="<?php the_post_thumbnail_url(); ?>" class="img-wrap"> <?php the_post_thumbnail(); ?>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="artist"><?php $the_artist = get_field('artist_name'); echo $the_artist['user_firstname'].' '.$the_artist['user_lastname']  ?></div>
						<div class="description description--grid">

							<div class="wall-info ">
								<div class="liked"></div>
								<div class="col2">

									<?php /*<ul id="accordion" class="accordion">
								        <h1><i class="fa fa-download"></i>Download</h1>
										<li class="default open">
											<!-- <div class="link">iPhone<i class="fa fa-chevron-down"></i></div> -->
											 <?php if( have_rows('available_size') ): ?>
											 <div class="pure-menu custom-restricted-width">

											<ul class="submenu">
											<?php while( have_rows('available_size') ): the_row();
												$image = get_sub_field('screen_size');?>
												<li class="slide">
													<?php if( $image ): ?>
														<a href="<?php echo $image['url']; ?>">
													<?php endif; ?>
														<?php echo $image['title'] ?>
													<?php if( $image ): ?>
														</a>
													<?php endif; ?>
												</li>
											<?php endwhile; ?>
											</ul>
										<?php endif; ?>
										</li>
									</ul> */ ?>

								</div>
								<div class="col2">
									<h3><?php the_title(); ?></h3>
									<?php $artist_name = get_field('artist_name'); ?>

									<h4 class="artist">By <?php echo $artist_name['display_name']; ?></h4>
									<a href="<?php the_field('website'); ?>" title="" class="link"><?php the_field('website'); ?></a>
									<?php the_content();?>
								</div>
							</div>


							<!-- <div class="details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div> -->
						</div>
					</a>
				</div>
				<?php
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata(); ?>



			</div><!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
		<!-- /content -->

<?php get_footer(); ?>
