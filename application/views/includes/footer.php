<div class="saperator-tp-bt-15 clearfix"></div>
<section class="footer-custom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="lead">Copyright &copy; 2017. All rights reserved. Developed by Innovion Technologies </p>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/waves.js"></script>
<script src="<?php echo base_url();?>assets/dir/js/jquery.flexisel.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".navbar-nav li").hover(function(){
			$(this).toggleClass("open");
		})
	})
	$(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,            
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script>
	num = '300';
	console.log(num);
	$(window).bind('scroll', function() {
		var scrolltp = $(window).scrollTop();
		if (scrolltp > num) {
			$('nav').addClass('fixed');
		}
		<!-- else { -->
			<!-- num = $('#flexiselDemo3').offset().top; -->
			<!-- $('nav').removeClass('fixed'); -->
			<!-- } -->
		});
	</script>
</body>
</html>