/*

* Template Name: massively-page

*/




<!DOCTYPE HTML>
<html>
	<head>
		<title><?php the_title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1><?php echo get_theme_mod('cust_header_number');?><br />
						<?php echo get_theme_mod('header_right_title');?></h1>
						<p><?php echo get_theme_mod('header_title');?><a href="https://twitter.com/ajlkn">@sabur</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						<?php echo get_theme_mod('header_title_tops');?><a href="https://html5up.net/license"><?php echo get_theme_mod('header_title_bottom');?></a>.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>
				<!-- Header -->
					<header id="header">
						<a href="" class="logo">Massively</a>
					</header>


				<!-- Nav -->
					<nav id="nav">
						<?php

						$menu = array(

							'theme_location'	=> 'primary',
							'menu_class'		=> 'links',

						);

						wp_nav_menu($menu);


					 ?>

						<ul class="icons text-right">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

			<?php

				global $post;
				$args = array( 'posts_per_page' => 1, 'post_type'=> 'generic', 'orderby' => 'menu_order', 'order' => 'ASC' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>

				<?php
					 $btn_text= get_post_meta($post->ID, 'btn_text', true);
					 $btn_link= get_post_meta($post->ID, 'btn_link', true);
				?>
				<article class="post featured">
					<header class="major">
						<span class="date"><?php the_date(); ?></span>
						<h2><a href="#">
						<?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					</header>
					<a href="#" class="image main"><img <?php if(has_post_thumbnail()){ the_post_thumbnail('full'); }?></a>
					<ul class="actions special">
						<li><a href="<?php echo $btn_link; ?>" class="button large"><?php echo $btn_text; ?></a></li>
					</ul>
				</article>

				<?php endforeach; wp_reset_query(); ?>


						<!-- Posts -->
							<section class="posts">
								<?php

						global $post;
						$args = array( 'posts_per_page' => 6, 'post_type'=> 'damble', 'orderby' => 'menu_order', 'order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>

						<?php
							 $btn_text= get_post_meta($post->ID, 'btn_text', true);
							 $btn_link= get_post_meta($post->ID, 'btn_link', true);
						?>
					<article>
							<header>
									<span class="date"><?php echo get_the_date(); ?></span>
											<h2><a href="#">
												<?php the_title(); ?></a></h2>
													</header>
															<a href="#" class="image fit"><img <?php if(has_post_thumbnail()){ the_post_thumbnail('large'); }?></a>
															<?php the_content(); ?>
										<ul class="actions special">
									<li><a href="<?php echo $btn_link; ?>" class="button"><?php echo $btn_text; ?></a></li>
								</ul>
						</article>

						<?php endforeach; wp_reset_query(); ?>

							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>

					<!-- Footer -->
						<footer id="footer">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="3"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" /></li>
									</ul>
								</form>
							</section>
							<section class="split contact">
								<section class="alt">
									<h3>Address</h3>
									<p>1234 Somewhere Road #87257<br />
									Nashville, TN 00000-0000</p>
								</section>
								<section>
									<h3>Phone</h3>
									<p><a href="#">(000) 000-0000</a></p>
								</section>
								<section>
									<h3>Email</h3>
									<p><a href="#">info@untitled.tld</a></p>
								</section>
								<section>
									<h3>Social</h3>
									<ul class="icons alt">
										<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</section>
							</section>
						</footer>

					<!-- Copyright -->
						<div id="copyright">
							<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
						</div>

					</div>


					<?php wp_footer(); ?>
					</body>
					</html>
