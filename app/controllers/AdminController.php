<?php

class AdminController extends BaseController {

	public function dashboard()
	{
		User::where('name', 'John')->delete();
	}

}
