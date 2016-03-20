<?php

class RankBenefit extends Eloquent {

	//CONFIGURATIONS
	protected $table = 'ranks_benefits';

	//RELATIONS
	public function rank() {
		return $this->belongsTo('Rank');
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
