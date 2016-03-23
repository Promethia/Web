<?php

class AdminTheme extends BaseTheme {

	public function pageTitle() {
		if($this->title) {
			return $this->title . " | Promethia Admin";
		} else {
			return "Promethia Admin";
		}
	}

}
