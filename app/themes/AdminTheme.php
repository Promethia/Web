<?php

class AdminTheme extends BaseTheme {

	public function pageTitle() {
		if($this->title) {
			return $this->title . " | Promethia Admin";
		} else {
			return "Promethia Admin";
		}
	}

	public function pageScripts() {
		$base = array(
			'/assets/js/modernizr-custom.min.js',
			'/assets/js/jquery.min.js',
			'/assets/js/bootstrap.min.js',
			'/assets/js/wow.js',
			'/assets/js/hover-dropdown.js',
			'/assets/js/jquery.selectik.min.js',
			'/assets/js/appear.js',
			'/assets/js/promethia-admin.js',
		);

		$scripts = array_merge($base, $this->scripts);

		return $scripts;
	}

}
