<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Classroom extends Eloquent {

    protected $collection = 'classrooms_collection';

	// Validation rules
	public static $rules = [
        'code' => 'required|unique:classrooms_collection,code',
        'name' => 'required|max:50',
        'type' => 'required'
	];

	// Fillable
	protected $fillable = ['code', 'name', 'parent_code', 'type'];

}
