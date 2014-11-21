<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Jenssegers\Mongodb\Model as Eloquent;

class Student extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $collection = 'students_collection';

    // Validation rules
    public static $rules = [
        'code' => 'required|digits:12|unique:students_collection,code',
        'name' => 'required|max:50|alpha',
        'surname' => 'required|max:50|alpha',
        'password' => 'required'
    ];

    // Fillable
    protected $fillable = ['code', 'name', 'surname', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Relations
     */
    public function selectedLessons() { return $this->embedsMany('SelectedLesson'); }
}
