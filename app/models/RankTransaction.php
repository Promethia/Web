<?php

class RankTransaction extends Eloquent {

	//CONFIGURATIONS
	protected $table = 'ranks_transactions';

	//RELATIONS
	public function member() {
		return $this->belongsTo('Member');
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
