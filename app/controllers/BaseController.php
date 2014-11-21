<?php

class BaseController extends Controller {

	public function __construct()
	{
		// global view variables
		View::share( '_successMessages', Session::get('_successMessages') );
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}
