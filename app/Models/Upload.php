<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
	protected $table = 'uploads';
	
	protected $fillable = [

		'file_id',
		'file_name',
		'file_path',
		'url',
		
	];
	
	public function user()
	{
		return $this->belongsTo('App\Models\Status', 'user_id');
	}
	
	public function uploads()
	{
		return $this->hasMany('App\Models\Upload', 'user_id');
	}
	
	

	

	
}