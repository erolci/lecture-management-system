<?php

use Jenssegers\Mongodb\Model as Eloquent;

class FacultyMember extends Eloquent {

    protected $collection = 'faculty_members_collection';

	// validation rules
	public static $rules = [
		'code' => 'required|digits:5|unique:faculty_members_collection,code',
        'name' => 'required|max:50|alpha',
        'surname' => 'required|max:50',
        'mail' => 'required|email',
        'started_date' => 'required'
	];

	// Fillable
	protected $fillable = ['code', 'name', 'surname', 'mail', 'started_date'];

}
