<?php
	$bower = site_url("public/bower_components/");
	$b_libraries = array(
		"materialize/dist/js/materialize.min.js",
		"animejs/anime.min.js",
		"particles.js/particles.min.js",
		"victor/build/victor.js",
		//"parallax/deploy/parallax.min.js",
		//"vivus/dist/vivus.min.js",
		"smoothstate/jquery.smoothState.min.js",
		//"anijs/dist/anijs-min.js",
		//"animsition/dist/js/animsition.min.js",
		//"chart.js/dist/chart.min.js",
		//"chartist/dist/chartist.min.js",
		//"cta/dist/cta.min.js",
		//"impress-js/js/impress.js",
		//"KUTE.js/kute.js",
		//"letteringjs/jquery.lettering.js",
		//"textillate/jquery.textillate.js",
		//"loaders.css/loaders.css.js",
		//"real-shadow/realshadow-min.js",
	);
	
	foreach($b_libraries as $path){
?>
	<script src="<?php echo $bower.$path; ?>"></script>
<?php
	}
	$extern = site_url("public/extern/");
	$e_libraries = array(
		//"d3/d3.min.js",
		//"xchart/xcharts.min.js",
		//"raphael.js",
		//"morris.js/morris.min.js",
		//"flot/jquery.flot.min.js",
		"stacknav/js/classie.js",
		"stacknav/js/main.js",
	);
	foreach($e_libraries as $path){
?>
	<script src="<?php echo $extern.$path; ?>"></script>
<?php
	}
?>
	<script src="<?php //echo site_url("public/assets/js/main.js"); ?>"></script>