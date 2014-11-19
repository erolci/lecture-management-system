<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Lesson extends Eloquent {

    protected $collection = 'lessons_collection';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}
