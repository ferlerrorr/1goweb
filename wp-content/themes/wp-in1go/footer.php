<footer>
  <div class="footer" style="overflow:hidden;">
		<div class="footercontainer">
			<div class="row">
				<div class="col-lg-4 col-sm-4 col-xs-12" id = "anc">
					<div class="single_footer">
						<h4>COMPANY</h4>
						<ul>
							<li><a href="<?=bloginfo('url');?>/partners/">Partners</a></li>
							<li><a href="<?=bloginfo('url');?>/clients/">Clients</a></li>
							<li><a href="<?=bloginfo('url');?>/careers/">Careers</a></li>
							<li><a href="<?=bloginfo('url');?>/about-us/">About Us</a></li>
							<li><a href="<?=bloginfo('url');?>/message-us/">Contact US</a></li>
						</ul>
					</div>
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-4 col-xs-12" id = "anc1">
					<div class="single_footer single_footer_address">
						<h4>SOLUTIONS</h4>
						<ul>
							<li><a href="<?=bloginfo('url');?>/logistics/">logistics</a></li>
							<li><a href="<?=bloginfo('url');?>/sales-and-distribution/">Sales & Distribution</a></li>
							<li><a href="<?=bloginfo('url');?>/warehouse-and-inventory-management/">Warehouse & Inventory Management</a></li>
							<li><a href="<?=bloginfo('url');?>/marketing-services/">Marketing Services</a></li>
							<li><a href="<?=bloginfo('url');?>/it-outsourcing/">IT Outsourcing</a></li>
							<li><a href="<?=bloginfo('url');?>/professional-services/">Professional Services</a></li>
						</ul>
					</div>
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single_footer single_footer_address">
						<h4>CONNECT WITH US</h4>
					</div>
					<div class="social_profile">
						<ul>
							<li><a href="https://www.facebook.com/in1gotech/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCWu79HfXHYax8e-wnLhJU3g/videos" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/in1gotech"target="_blank"><i class="fab fa-linkedin-in" ></i></a></li>
						</ul>
						<div class="signup_form">
							<img src="<?=bloginfo('url');?>/wp-content/themes/wp-in1go/img/TR-Testmark.svg" alt="TR-Testmark 9000011826" class="cert">
						</div>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12"  style="
    			padding-right: 15%;">
					<p class="copyright" id = "copys">Copyright © <?=date ('Y');?><a href="<?=bloginfo('url');?>/"  style="font-size: 15px !important;"> In1Go</a> | <a href="<?=bloginfo('url');?>/privacy-policy/" style="font-size: 15px !important;">Privacy Policy</a></p>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</div>
	
</footer>
 <?php wp_footer();?>
<!-- Messenger Chat Plugin Code -->
	
	<div title="chatbot" id="fb-root"></div>
    <div class="fb-customerchat"  id="fb-customer-chat"></div>

	<!-- Your Chat Plugin code -->
	 <script>
 	
      let chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100677485664957");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

 <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>