<?php

class Permission extends Eloquent {

	//CONFIGURATIONS
	protected $table = 'permissions';

	//RELATIONS
	public function ranks() {
		return $this->belongsToMany('Rank', 'rank_permissions');
	}

	//SCOPES

	//ATTRIBUTES
	public function getCreatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}
	public function getUpdatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}

	//MODULE RELATIONS

	//PLUGIN RELATIONS

}
