<?php 
	class Nav extends CI_Model{
		function anchor($id, $name){
			echo '<div class="pages-nav__item"><a class="link link--page" href="#page-'.$id.'">'.$name.'</a></div>';
		}
		
		function small($id, $name){
			echo '<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-'.$id.'">'.$name.'</a></div>';
		}
		
		function social($link, $icon, $name){
			echo '<a class="link link--social link--faded" href="'.$link.'"><i class="material-icons">'.$icon.'</i><span class="text-hidden">'.$name.'</span></a>';
		}
	}
?>