<?php

class AdminHeartbeat extends Eloquent {

	//CONFIGURATIONS
	protected $table = 'admin_heartbeats';

	//SCOPES

	//ATTRIBUTES
	public function getCreatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}
	public function getUpdatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}

}
