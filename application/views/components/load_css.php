	
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php 
	$extern = site_url("public/extern/");
	$e_libraries = array(
		//"morris.js/morris.css",
		//"xchart/xcharts.min.css",
		"stacknav/css/component.css",
		//"arrownav/css/component.css",
	);
	foreach($e_libraries as $path){
?>
		<link rel="stylesheet" href="<?php echo $extern.$path;?>">
<?php 
	}
	$bower = site_url("public/bower_components/");
	$b_libraries = array(
		"materialize/dist/css/materialize.min.css",
		//"animate.css/animate.min.css",
		//"chartist/dist/chartist.min.css",
		//"loaders.css/loaders.min.css",
	);
	foreach($b_libraries as $path){
?>
		<link rel="stylesheet" href="<?php echo $bower.$path;?>">
<?php
	}
?>	
		<link rel="stylesheet" href="<?php echo site_url('public/assets/font/roboto.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('public/assets/css/main.css');?>">
	
		<script src="<?php echo site_url("public/bower_components/jquery/dist/jquery.min.js");?>"></script>
		
	<script src="<?php echo site_url("public/node_modules/three/build/three.js");?>"></script>
	<script src="<?php echo site_url("public/assets/js/AdditiveBlendingShader.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/VolumetericLightShader.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/PassThroughShader.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/EffectComposer.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/RenderPass.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/ShaderPass.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/CopyShader.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/HorizontalBlurShader.js"); ?>"></script>
	<script src="<?php echo site_url("public/assets/js/lib/VerticalBlurShader.js"); ?>"></script>