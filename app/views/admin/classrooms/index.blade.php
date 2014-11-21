<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Classrooms</title>

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

                @include('includes.admin.sidebarMenu', ['sm' => 'classrooms'])

            </div>

            <!-- content -->
            <div class="col-md-9">

                {{-- Success Messages --}}
                @include('includes.successMessages')

                <div class="pull-right">
                    <a href="/admin/classrooms/create" class="btn btn-success">+ Add Classroom/Floor</a>
                    <div class="clearfix" style="height: 10px;"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Floor Code</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($classrooms->count() > 0)
                            @foreach ($classrooms as $classroom)
                                <tr>
                                    <td>{{$classroom->code}}</td>
                                    <td>{{$classroom->type == 0 ? '' : $classroom->parent_code}}</td>
                                    <td>{{$classroom->name}}</td>
                                    <td>{{$classroom->type == 0 ? 'Floor' : 'Classroom'}}</td>
                                    <td>
                                        <a href="/admin/classrooms/{{$classroom->_id}}" data-method="DELETE" class="rest btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6">Classroom is not found</td></tr>
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
