			<!-- footer -->
			<footer class="footer" role="contentinfo">
        <div class='footer-info'>
					<div class='footer-erleben'>
						<h3>Romantik erleben.</h3>
						<div>Buchen Sie jetzt Ihren Aufenthalt zum besten Preis auf unserer Website.</div>
						<a href='<?php echo get_field('buchen','option')?>' class='whr-button'>JETZT BUCHEN</a>
					</div>
					<div class='footer-kontakt'>
						<h3>Kontakt</h3>
						<div><?php the_field('kontakt', 'option');?></div>
					</div>
					<div class='footer-adress'>
					  <h3>Adresse</h3>
						<div><?php the_field('adress', 'option');?></div>
					</div>
				</div>
		    <div class='footer-policy-container'>
					 <div class='footer-copyrights'>(c) 2021 Weinromantikhotel Richtershof</div>
					 <div class='footer-policy'> 
                                         <?php wp_nav_menu( array( 'menu' => 'footer-menu') ); ?>
                                         </div>
	      </div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
	
<noscript>

<img height="1" width="1" src="https://www.facebook.com/tr?id=625913922411694&ev=PageView&noscript=1"/>

</noscript>
		<div id="scrollUp"  class="scroll-up">

		</div>
	
	</body>

</html>
