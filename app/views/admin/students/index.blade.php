<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Students</title>

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

                @include('includes.admin.sidebarMenu', ['sm' => 'students'])

            </div>

            <!-- content -->
            <div class="col-md-9">

                {{-- Success Messages --}}
                @include('includes.successMessages')

                <div class="pull-right">
                    <a href="/admin/students/create" class="btn btn-success">+ Add New Student</a>
                    <div class="clearfix" style="height: 10px;"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Student Number</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($students->count() > 0)
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->code}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->surname}}</td>
                                    <td>
                                        <a href="/admin/students/{{$student->_id}}" data-method="DELETE" class="rest btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6">Student is not found</td></tr>
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
