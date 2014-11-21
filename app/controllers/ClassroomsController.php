<?php

class ClassroomsController extends \BaseController {

	/**
	 * Display a listing of classrooms
	 *
	 * @return Response
	 */
	public function index()
	{
		$classrooms = Classroom::orderBy('type', 'ASC')->get();

		return View::make('admin.classrooms.index', compact('classrooms'));
	}

	/**
	 * Show the form for creating a new classroom
	 *
	 * @return Response
	 */
	public function create()
	{
		$floors = Classroom::where('type', '0')->get();

		return View::make('admin.classrooms.create', compact('floors'));
	}

	/**
	 * Store a newly created classroom in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Classroom::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Classroom::create($data);

		return Redirect::to('admin/classrooms');
	}

	/**
	 * Display the specified classroom.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$classroom = Classroom::findOrFail($id);

		return View::make('admin.classrooms.show', compact('classroom'));
	}

	/**
	 * Show the form for editing the specified classroom.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$classroom = Classroom::find($id);

		return View::make('admin.classrooms.edit', compact('classroom'));
	}

	/**
	 * Update the specified classroom in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$classroom = Classroom::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Classroom::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$classroom->update($data);

		return Redirect::to('admin/classrooms');
	}

	/**
	 * Remove the specified classroom from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Classroom::destroy($id);

		return Redirect::to('admin/classrooms');
	}

}
