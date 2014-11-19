<?php

class AdminController extends BaseController {

	public function index()
	{
		//view
        return View::make('admin.index');
	}

}
