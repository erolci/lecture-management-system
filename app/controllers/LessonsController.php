<?php

class LessonsController extends \BaseController {

	/**
	 * Display a listing of lessons
	 *
	 * @return Response
	 */
	public function index()
	{
		$lessons = Lesson::all();

		return View::make('lessons.index', compact('lessons'));
	}

	/**
	 * Show the form for creating a new lesson
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lessons.create');
	}

	/**
	 * Store a newly created lesson in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Lesson::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Lesson::create($data);

		return Redirect::route('lessons.index');
	}

	/**
	 * Display the specified lesson.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$lesson = Lesson::findOrFail($id);

		return View::make('lessons.show', compact('lesson'));
	}

	/**
	 * Show the form for editing the specified lesson.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lesson = Lesson::find($id);

		return View::make('lessons.edit', compact('lesson'));
	}

	/**
	 * Update the specified lesson in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$lesson = Lesson::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Lesson::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$lesson->update($data);

		return Redirect::route('lessons.index');
	}

	/**
	 * Remove the specified lesson from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Lesson::destroy($id);

		return Redirect::route('lessons.index');
	}

}
