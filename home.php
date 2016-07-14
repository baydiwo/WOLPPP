<?php
    /* Template Name: Home */
    get_header();
?>
	<div class="banner">
		<img src="<?php echo get_template_directory_uri() ?>/img/banner.jpg" alt="" class="img-responsive">
	</div>
		<div class="content">
		<!-- open/close -->
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
				 $i = 0;
				while ( $query->have_posts()) {
					$i++;
					$query->the_post();  ?>
				<div class="grid__item" id="trigger-overlay-<?php echo $i; ?>">
					<a class="img-wrap"> <?php the_post_thumbnail(); ?>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="artist"><?php $the_artist = get_field('artist_name'); echo $the_artist['user_firstname'].' '.$the_artist['user_lastname']  ?></div>
					</a>
				</div>
				<!-- overlay div -->
				<div class="overlay overlay-scale" id="overlay-<?php echo $i; ?>">
					<button type="button" id="overlay-close-<?php echo $i; ?>" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="info">
						<div class="description description--grid">
							<div class="the-image">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="wall-info ">
								<div class="liked"></div>
								<div class="image-info">
									<h3><?php the_title(); ?></h3>
									<?php $artist_name = get_field('artist_name'); ?>

									<h4 class="artist">By <?php echo $artist_name['display_name']; ?></h4>
									<a href="<?php the_field('website'); ?>" title="" class="link"><?php the_field('website'); ?></a>
									<?php the_content();?>
								</div>
								<!-- Contenedor -->
								<ul id="accordion" class="accordion">
	                                <h1><i class="fa fa-download"></i>Download</h1>
	                                <?php if( have_rows('iphone') ): ?>
	                                <li>
	                                    <div class="link">iPhone<i class="fa fa-chevron-down"></i></div>
	                                    <ul class="submenu">
	                                    <?php while( have_rows('iphone') ): the_row();
	                                        $image = get_sub_field('iphone_screen_size');?>
	                                        <li>
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
	                                </li>
	                                <?php endif; ?>
	                                <?php if( have_rows('ipad') ): ?>
	                                <li>
	                                    <div class="link">Ipad<i class="fa fa-chevron-down"></i></div>
	                                    <ul class="submenu">
	                                    <?php while( have_rows('ipad') ): the_row();
	                                        $image = get_sub_field('ipad_screen_size');?>
	                                        <li>
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
	                                </li>
	                                <?php endif; ?>
	                                <?php if( have_rows('android') ): ?>
	                                <li>
	                                    <div class="link">Android<i class="fa fa-chevron-down"></i></div>
	                                    <ul class="submenu">
	                                    <?php while( have_rows('android') ): the_row();
	                                        $image = get_sub_field('android_screen_size');?>
	                                        <li>
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
	                                </li>
	                                <?php endif; ?>
	                                <?php if( have_rows('desktop') ): ?>
	                                <li>
	                                    <div class="link">Desktop<i class="fa fa-chevron-down"></i></div>
	                                    <ul class="submenu">
	                                    <?php while( have_rows('desktop') ): the_row();
	                                        $image = get_sub_field('desktop_screen_size');?>
	                                        <li>
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
	                                </li>
	                                <?php endif; ?>
	                            </ul>
							</div>
						</div>
					</div>
				</div>
				<!-- overlay -->
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
