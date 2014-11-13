<?php

class DashboardController extends BaseController {

	public function dashboard()
	{
		User::where('name', 'John')->delete();
	}

}
