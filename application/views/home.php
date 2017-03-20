<?php $this->load->view('components/start_head'); ?>
	<?php $this->load->view('components/load_css'); ?>
	
	<title>Science</title>
<?php $this->load->view('components/start_body'); ?>
	<?php //$this->load->view('components/svgs'); ?>
	<nav class="pages-nav">
		<?php $this->nav->anchor('home', 'Home'); ?>
		<?php $this->nav->anchor('moon', 'Phases of the Moon'); ?>
		<?php $this->nav->small('about', 'About'); ?>
		<?php $this->nav->small('license', 'License'); ?>
		<?php $this->nav->small('credits', 'Credits'); ?>
		<div class="pages-nav__item pages-nav__item--social">
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<?php $this->load->view('pages/moon'); ?>
		<?php $this->load->view('pages/home'); ?>
		<?php $this->load->view('pages/about'); ?>
		<?php $this->load->view('pages/credits'); ?>
		<?php $this->load->view('pages/license'); ?>
	</div>
	<button class="menu-button btn-flat" width="10px"><span>Menu</span></button>
	
	<?php $this->load->view('components/load_js'); ?>
<?php $this->load->view('components/end_body'); ?>