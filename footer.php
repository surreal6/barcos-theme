			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container footer-div">

					<div class="row">
						<div class="two columns">
							<a><i class="fa fa-arrows fa-rotate-45" onclick="launchFullScreen(document.documentElement);"></i></a>
							<a href="wp-admin/"><i class="fa fa-home"></i></a>
						</div>
						<div class="two columns">
						</div>
						<div class="four columns">
							<!--  copyright -->
							<p class="copyright">
								All content &copy; <?php echo date('Y'); ?> CC-BY-NC-ND <a href=""><?php bloginfo('name'); ?></a>. 
							</p>
							<!-- /copyright -->
						</div>
						<div class="four columns">
							<!--  theme copyright -->
							<p class="copyright">
								Theme design &copy; <?php echo date('Y'); ?> CC-BY-SA <a href="http://surreal.asturnazari.com">Carlos Padial </a> <?php _e('Powered by', 'html5blank'); ?>
								<a href="//wordpress.org" title="WordPress"> WordPress </a> &amp;  <a href="//html5blank.com" title="HTML5 Blank"> HTML5 Blank </a>.
							</p>
							<!-- / theme copyright -->
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>


		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/polyfills.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sun.js"></script>

		<!-- analytics
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
