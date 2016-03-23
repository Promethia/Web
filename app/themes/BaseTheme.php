<?php

class BaseTheme {
	public function __construct() {
		$this->title = null;
		$this->description = null;
		$this->descriptionMeta = null;
		$this->header = asset("assets/img/headers/landing.png");
		$this->stylesheets = array();
		$this->scripts = array();
		$this->view_header = true;
		$this->view_headerBuffer = true;
		$this->view_content = true;
		$this->view_footer = true;
	}

	public function pageTitle() {
		if($this->title) {
			return $this->title . " | Promethia Minecraft";
		} else {
			return "Promethia Minecraft";
		}
	}

	public function pageStylesheets() {
		$base = array(
			'/assets/css/bootstrap.min.css',
			'/assets/css/icons.css',
			'/assets/css/animate.css',
			'/assets/css/promethia.css',
		);

		$stylesheets = array_merge($base, $this->stylesheets);

		return $stylesheets;
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
				'/assets/js/promethia.js',
			);

		$scripts = array_merge($base, $this->scripts);

		return $scripts;
	}
}
