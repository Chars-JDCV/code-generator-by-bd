<?php
	include_once "head.php";
	include_once "menu2.0.php";
?> 
    
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
			$('.flexslider').flexslider({
				touch: true,
				pauseOnAction: false,
				pauseOnHover: false,
			});
		});
    </script>
<body class="body-template">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="assets/plugin/slider/imagenes/1.jpg" alt="">
				<section class="flex-caption">
				</section>
			</li>
			<li>
				<img src="assets/plugin/slider/imagenes/2.jpg" alt="">
				<section class="flex-caption">
				</section>
			</li>
			<li>
				<img src="assets/plugin/slider/imagenes/3.jpg" alt="">
				<section class="flex-caption">
				</section>
			</li>
		</ul>
	</div>
</body>
<?php
	include_once "foot.php";
?> 