<div class="page" id="page-moon" >
	<ul id="scene">
		<li class="layer" data-depth="0.00"><div id="stars1"></div></li>
	</ul>
	<div class="arrownav nav-roundslide">
		<a class="prev" id="moon-prev">
			<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-left-4"></svg></span>
			<h3>Previous Slide</h3>
		</a>
		<a class="next" id="moon-next">
			<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-right-4"></svg></span>
			<h3>Next slide</h3>
		</a>
	</div>
	<style>
		#impress-moon .step{
			position: relative;
			width: 900px;
			padding: 40px;
			margin: 20px auto;

			-webkit-box-sizing: border-box;
			-moz-box-sizing:    border-box;
			-ms-box-sizing:     border-box;
			-o-box-sizing:      border-box;
			box-sizing:         border-box;
		}
		
		.impress-enabled .step {
			margin: 0;
			opacity: 0.3;

			-webkit-transition: opacity 1s;
			-moz-transition:    opacity 1s;
			-ms-transition:     opacity 1s;
			-o-transition:      opacity 1s;
			transition:         opacity 1s;
		}

		.impress-enabled .step.active { opacity: 1 }
	</style>
	<div id="impress-moon">
		<div id="moon-1" class="step" data-x="0">
			<h1 style="left:50%;" align="center">Phases of the Moon</h1>
		</div>
		<div id="moon-2" class="step" data-x="1500">
			<div class="row">
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/full-moon.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
			</div>
			<h4 align="center">The shape of the moon is round. However, its shape seems to
change from time to time. There are times the moon looks round as a
plate. Sometimes it appears like a banca. These apparent changes in
the moon’s shape are called phases.</h4>
		</div>
		<div id="moon-3" class="step" data-x="3000">
			<div class="row">
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/sun.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/half-moon-left.png'); ?>" style="width:50%; padding-top:25%;">
				</div>
			</div>
			<h4 align="center">The moon shines by the reflected sunlight. Only one half of it is
lighted at any time. So, as the moon rotates and revolves around the
Earth, the moon changes its position in relation to the observer on
Earth.</h4>
		</div>
		<div id="moon-4" class="step" data-x="4500">
			<div class="row">
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/new-moon.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
			</div>
			<h4>
			When the moon is between the sun and earth, we cannot see it
because the sun shines on the side of the moon away from the earth.
This phase is called the new moon.
			</h4>
		</div>
		<div id="moon-5" class="step" data-x="6000">
			<div class="row">
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/crescent-moon-left.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/crescent-moon-right.png'); ?>" style="width:100%">
				</div>
			</div>
			<h4 align="center">
			After one or two days, we see a small edge of the moon lighted.
This is called the crescent moon. After about a week, half of the moon
is lighted. This phase is called the first quarter.
			</h4>
		</div>
		<div id="moon-6" class="step" data-x="7500">
			<div class="row">
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/gibbous-moon-left.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/gibbous-moon-right.png'); ?>" style="width:100%">
				</div>
			</div>
			<h4 align="center">
			After a few days, we
see more than half of the moon lighted. This is called the gibbous
moon.
			</h4>
		</div>
		<div id="moon-7" class="step" data-x="9000">
			<div class="row">
				<div class="col s4">
				</div>
				<div class="col s4">
					<img src="<?php echo site_url('public/assets/images/moon/full-moon.png'); ?>" style="width:100%">
				</div>
				<div class="col s4">
				</div>
			</div>
			<h4 align="center">
		After one week, the whole side of the moon facing the earth
becomes lighted. This happens when the earth is between the sun and
the moon. This phase is called the full moon.
			</h4>
		</div>
    </div>
</div>

