<?php

class Rank extends Eloquent {

	//CONFIGURATIONS
	protected $table = 'ranks';

	//RELATIONS
	public function members() {
		return $this->hasMany('Member');
	}
	public function benefits() {
		return $this->hasMany('RankBenefit');
	}
	public function requirements() {
		return $this->hasMany('RankRequirements');
	}
	public function permissions() {
		return $this->belongsToMany('Permission', 'rank_permissions');
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
