<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Lesson extends Eloquent {

    protected $collection = 'lessons_collection';

	// Validation rules
	public static $rules = [
		'code' => 'required|unique:lessons_collection,code',
        'name' => 'required|max:50',
        'day' => 'required',
        'hour' => 'required'
	];

	// Fillable
	protected $fillable = ['code', 'name', 'day', 'hour', 'is_mandatory'];

}
