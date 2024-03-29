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

            <div class="col-md-3">

                @include('includes.admin.sidebarMenu', ['sm' => 'lessons'])

            </div>

            <!-- content -->
            <div class="col-md-9">

                {{-- Success Messages --}}
                @include('includes.successMessages')

                <div class="pull-right">
                    <a href="/admin/lessons/create" class="btn btn-success">+ Add New Lesson</a>
                    <div class="clearfix" style="height: 10px;"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Mandatory</th>
                            <th>Day</th>
                            <th>Hour</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($lessons->count() > 0)
                            @foreach ($lessons as $lesson)
                                <tr>
                                    <td>{{$lesson->code}}</td>
                                    <td>{{$lesson->name}}</td>
                                    <td>{{$lesson->is_mandatory == 1 ? 'Yes' : 'No'}}</td>
                                    <td>{{trans('global.days.' . $lesson->day)}}</td>
                                    <td>{{$lesson->hour}}</td>
                                    <td>
                                        <a href="/admin/lessons/{{$lesson->_id}}" data-method="DELETE" class="rest btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6">Lesson is not found</td></tr>
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
