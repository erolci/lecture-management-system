<?php

use Jenssegers\Mongodb\Model as Eloquent;

class SelectedLesson extends Eloquent {

    protected $collection = 'selected_lessons_collection';

	// Validation rules
	public static $rules = [
        'lesson_id' => 'required',
        'classroom_id' => 'required',
        'faculty_member_id' => 'required'
	];

	// Fillable
	protected $fillable = ['lesson_id', 'classroom_id', 'faculty_member_id'];

    /**
     * Relations
     */
    public function lesson() { return $this->belongsTo('Lesson'); }
    public function classroom() { return $this->belongsTo('Classroom'); }
    public function facultyMember() { return $this->belongsTo('FacultyMember'); }
}
