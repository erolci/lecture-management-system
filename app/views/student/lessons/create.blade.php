<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Add new lesson</title>

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

                <h5>Add New Lesson</h5>

                <div class="clearfix" style="height: 25px;"></div>

                <form class="form-horizontal" method="post" action="/student/lessons">

                  {{-- Error Messages --}}
                  @include('includes.errorMessages')

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Choose Lesson</h3>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th></th>
                              <th>Code</th>
                              <th>Name</th>
                              <th>Mandatory</th>
                              <th>Day</th>
                              <th>Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($lessons->count() > 0)
                                @foreach ($lessons as $lesson)
                                    <tr>
                                      <td class="text-center"><input type="radio" name="lesson_id" value="{{$lesson->id}}" required="required" />
                                      <td>{{$lesson->code}}</td>
                                      <td>{{$lesson->name}}</td>
                                      <td>{{$lesson->is_mandatory == 1 ? 'Yes' : 'No'}}</td>
                                      <td>{{trans('global.days.' . $lesson->day)}}</td>
                                      <td>{{$lesson->hour}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="6">Lesson is not found</td></tr>
                            @endif
                        </tbody>
                    </table>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Choose Faculty Member</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>E-Mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($facultyMembers->count() > 0)
                                @foreach ($facultyMembers as $facultyMember)
                                    <tr>
                                        <td class="text-center"><input type="radio" name="faculty_member_id" value="{{$facultyMember->id}}" required="required" />
                                        <td>{{$facultyMember->code}}</td>
                                        <td>{{$facultyMember->name}}</td>
                                        <td>{{$facultyMember->surname}}</td>
                                        <td>{{$facultyMember->mail}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="5">Faculty member is not found</td></tr>
                            @endif
                        </tbody>
                    </table>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Choose Classroom</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Code</th>
                                <th>Floor Code</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($classrooms->count() > 0)
                                @foreach ($classrooms as $classroom)
                                    <tr>
                                        <td class="text-center"><input type="radio" name="classroom_id" value="{{$classroom->id}}" required="required" />
                                        <td>{{$classroom->code}}</td>
                                        <td>{{$classroom->parent_code}}</td>
                                        <td>{{$classroom->name}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="4">Classroom is not found</td></tr>
                            @endif
                        </tbody>
                    </table>
                  </div>

                  <!-- Button (Double) -->
                  <a href="/student/lessons" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-success">Save</button>

                </form>

                <div class="clearfix" style="height: 45px;"></div>


            </div>

        </div>

    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
