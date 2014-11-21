<?php

class FacultyMembersController extends \BaseController {

	/**
	 * Display a listing of facultymembers
	 *
	 * @return Response
	 */
	public function index()
	{
		$facultyMembers = FacultyMember::all();

		return View::make('admin.faculty_members.index', compact('facultyMembers'));
	}

	/**
	 * Show the form for creating a new facultymember
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.faculty_members.create');
	}

	/**
	 * Store a newly created facultymember in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), FacultyMember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		FacultyMember::create($data);

		return Redirect::to('admin/faculty_members');
	}

	/**
	 * Display the specified facultymember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$facultyMember = FacultyMember::findOrFail($id);

		return View::make('admin.faculty_members.show', compact('facultyMember'));
	}

	/**
	 * Show the form for editing the specified facultymember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$facultyMember = FacultyMember::find($id);

		return View::make('admin.faculty_members.edit', compact('facultyMember'));
	}

	/**
	 * Update the specified facultymember in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$facultyMember = FacultyMember::findOrFail($id);

		$validator = Validator::make($data = Input::all(), FacultyMember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$facultyMember->update($data);

		return Redirect::to('admin/faculty_members');
	}

	/**
	 * Remove the specified facultymember from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		FacultyMember::destroy($id);

		return Redirect::to('admin/faculty_members');
	}

}
