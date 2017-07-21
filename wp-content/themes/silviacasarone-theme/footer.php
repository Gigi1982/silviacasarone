			<!-- footer -->
			<footer class="footer" role="contentinfo">
                <div class="container">
                    <!-- copyright -->
                    <div class="footer-left-bar pull-left">
                        <span class="copyright">
                            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                        </span>
                        <span class="separator">|</span> <span> P.I. 11727750017 </span> <span class="separator">|</span>
                        <?php html5blank_nav_footer(); ?>
                    </div>
                    
                    <nav class="nav navbar-nav navbar-right">
                        <ul class="list-unstyled list-inline social-footer">
                            <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon icon-linkedin"></i></a></li>
                        </ul>
                    </nav>
                </div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
