<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Member extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	//CONFIGURATIONS
	protected $table = 'members';
	protected $hidden = array('password', 'remember_token');

	//RELATIONS

	//SCOPES

	//ATTRIBUTES
	public function getUuidAttribute($uuid) {
		return substr($uuid, 0, 8) . "-" . substr($uuid, 8, 4) . "-" . substr($uuid, 12, 4) . "-" . substr($uuid, 16, 4) . "-" . substr($uuid, 20);
	}
	public function getRankSinceAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}
	public function getCreatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}
	public function getUpdatedAtAttribute($date) {
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($_ENV['TIME_FORMAT']);
	}

	//MODULE RELATIONS
	//Ranks
	public function rank() {
		return $this->belongsTo('Rank');
	}
	public function rankTransactions() {
		return $this->hasMany('rankTransaction');
	}

	//PLUGIN RELATIONS

}
