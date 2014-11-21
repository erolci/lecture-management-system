<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Lessons</title>

  @include('includes.head')

</head>
<body>

    <div class="container">

        <div class="row">
          <div class="col-md-12">

            @include('includes.navbar')

          </div>
        </div>

        <div class="row">

            <!-- content -->
            <div class="col-md-12">

                {{-- Success Messages --}}
                @include('includes.successMessages')

                <div class="pull-left">
                    <h5>Selected Lessons</h5>
                </div>

                <div class="pull-right">
                    <a href="/student/lessons/create" class="btn btn-success">+ Add New Lesson</a>
                    <div class="clearfix" style="height: 10px;"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Lesson Code</th>
                            <th>Name</th>
                            <th>Mandatory</th>
                            <th>Day</th>
                            <th>Hour</th>
                            <th>Classroom</th>
                            <th>Faculty Member</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($selectedLessons->count() > 0)
                            @foreach ($selectedLessons as $selectedLesson)
                                <tr>
                                    <td>{{ $selectedLesson->lesson->code }}</td>
                                    <td>{{ $selectedLesson->lesson->name }}</td>
                                    <td>{{ $selectedLesson->lesson->is_mandatory == 1 ? 'Yes' : 'No' }}</td>
                                    <td>{{ trans('global.days.' . $selectedLesson->lesson->day) }}</td>
                                    <td>{{ $selectedLesson->lesson->hour }}</td>
                                    <td>{{ $selectedLesson->classroom->name }}</td>
                                    <td>{{ $selectedLesson->facultyMember->name }} {{ $selectedLesson->facultyMember->surname }}</td>
                                    <td>
                                        <a href="/student/lessons/{{$selectedLesson->id}}" data-method="DELETE" class="rest btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="8">Selected lesson is not found</td></tr>
                        @endif
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
