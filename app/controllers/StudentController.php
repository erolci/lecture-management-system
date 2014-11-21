<?php

class StudentController extends BaseController {

    /**
     * List lessons
     *
     * @return View
     */
	public function lessons()
	{
        // get student
        $student = Auth::student()->get();

        // get selected lessons
		$selectedLessons = $student->selectedLessons;

        return View::make('student.lessons.index', compact('selectedLessons'));
	}

    /**
     * Create form for new lesson
     *
     * @return View
     */
    public function createLesson()
    {
        $lessons = Lesson::all();
        $classrooms = Classroom::where('type', '1')->get();
        $facultyMembers = FacultyMember::all();

        return View::make('student.lessons.create', compact('lessons', 'classrooms', 'facultyMembers'));
    }

    /**
     * Store new lesson
     *
     * @return View
     */
    public function storeLesson()
    {
        // student
        $student = Auth::student()->get();

        // selected lesson info
        $selectedLessons = $student->selectedLessons;

        $totalSelectedLessons = $selectedLessons->count();
        $totalMandatorySelectedLessons = 0;
        $totalElectiveSelectedLessons = 0;

        foreach($selectedLessons as $selectedLesson)
        {
            if ($selectedLesson->lesson->is_mandatory == 1)
                $totalMandatorySelectedLessons++;
            else
                $totalElectiveSelectedLessons++;
        }

        // requested lesson
        $requestedLesson = Lesson::find(Input::get('lesson_id'));

        // selected lesson unique check
        if ($selectedLessons->where('lesson_id', $requestedLesson->id)->count() > 0) return Redirect::back()->withErrors(['message' => 'You can choose the same lesson only one time.'])->withInput();

        // check total lesson count
        if ($totalSelectedLessons >= 5) return Redirect::back()->withErrors(['message' => 'You can select only 5 lessons.'])->withInput();

        // check mandatory/elective lesson count
        if ($requestedLesson->is_mandatory == 1)
            if ($totalMandatorySelectedLessons >= 3) return Redirect::back()->withErrors(['message' => 'You can select only 3 mandatory lessons.'])->withInput();
        else
            if ($totalElectiveSelectedLessons >= 2) return Redirect::back()->withErrors(['message' => 'You can select only 2 elective lessons.'])->withInput();

        // validation
        $validator = Validator::make($data = Input::all(), SelectedLesson::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // Create a new selectedLesson
        $selectedLesson = new SelectedLesson($data);

        // Store selectedLesson
        $student->selectedLessons()->save($selectedLesson);

        return Redirect::to('student/lessons');
    }

    /**
     * Remove the specified lesson from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyLesson($id)
    {
        // get student
        $student = Auth::student()->get();

        // get selected lesson
        $selectedLesson = $student->selectedLessons()->find($id);

        // remove selected lesson
        $selectedLesson->delete();

        return Redirect::to('student/lessons');
    }
}
