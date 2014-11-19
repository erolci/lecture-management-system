<?php

class StudentController extends BaseController {

	public function dashboard()
	{
		User::where('name', 'John')->delete();
	}

}
