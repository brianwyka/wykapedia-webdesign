        
        <div class="contain-to-grid" id="footer-contain-to-grid">
            <footer class="row">
                <div class="large-12 columns">
                    <div class="row">
                    
                    	<div class="spacer-small"></div>
            
                        <div class="large-6 medium-6 small-12 columns">
                            <p>&copy;<?php echo date('Y'); ?> wykaPedia Web Design</p>
                        </div>
            
                        <div class="large-6 medium-6 small-12 columns">
                            <ul class="inline-list right">
                                <li><a href="tel:1-203-362-7124">Call</a></li>
                                <li><a href="mailto:webdesign@wykapedia.org">Email</a></li>
                            </ul>
                        </div>
                        
                    	<div class="spacer-large"></div>
            
                    </div>
                </div>
            </footer>
        </div>

        <script src="/js/bodylibs.min.js"></script>
		<script type="text/javascript">$(document).foundation();</script>
		<script type="text/javascript">
			$(document).ready(function () {
				var page = '<?php echo $_PATH; ?>';
				if (jQuery.isFunction(Page[page])) {
					Page[page]();	
				}
			});
		</script>

    </body>
    
</html>