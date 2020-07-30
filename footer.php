
<footer class="text-center">
 <!-- Footer -->
 <section style="background: grey;">
		<div class="container">
			<div class="row text-muted">
				<?php if ( has_nav_menu( 'footer-menu' ) ) : 
					wp_nav_menu( array( 
						'theme_location' => 'footer-menu', 
						'container_class' => 'navbar-collapse collapse footer-menu-class',
						'container'         => 'ul',
						'menu_class'        => 'nav navbar-nav' ) ); 
					endif;
				?>
			</div>
			<div class="row">
				
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" >
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook" style="color:white;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter" style="color:white;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram" style="color:white;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus" style="color:white;"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope" style="color:white;"></i></a></li>
					</ul>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p style="color:white;">&copy ShopCrazy 2019 All right Reversed</p>
				</div>
			</div>	
		</div>
	</section>
</footer>


<?php wp_footer(); ?>
</body>
</html>