			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<div class="footer-left">
						<a href="#"><img src="<?= get_template_directory_uri() . "/library/images/logoTreintadias.png" ?>" alt="Logo Treinta Días" class="pull-left logo" ></img></a>

						<div class="footer-info">
							<p>Boulevard Paseo de los Jardines 27</p>
							<p>Colonia Valle Escondido , Hermosillo, Sonora, Mexico, C.P. 83207</p>
							<p class="footer-info source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
						</div>

					</div>

					<nav role="navigation-footer" class="footer-right">
						<?php wp_nav_menu(array(
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>

							<nav class="nav-footer" >
								<?php

								$args = array(
										'theme-location' => 'footer-nav',
										'menu-class' => 'menu-footer'
										);
										?>
								<?php wp_nav_menu() ?>

							</nav>

							<nav class="footer-social">

										<ul class="nav" >
					                                      <li>
					                                          <a href="#"><i class="fa fa-facebook"></i></a>
					                                      </li>
					                                      <li>
					                                          <a href="#"><i class="fa fa-twitter"></i></a>
					                                      </li>
					                                      <li>
					                                          <a href="#"><i class="fa fa-dot-circle-o"></i></a>
					                                      </li>
			                                    	</ul>

			                                    <div class="nav-info" >
			                                        <p>No pierdas pisada!</p>
			                                        <p>Síguenos en nuestras redes</p>
			                                    </div>

							</nav>


					</nav>
				</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
