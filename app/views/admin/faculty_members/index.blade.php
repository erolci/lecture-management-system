<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Faculty Members</title>

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

                @include('includes.admin.sidebarMenu', ['sm' => 'faculty_members'])

            </div>

            <!-- content -->
            <div class="col-md-9">

                {{-- Success Messages --}}
                @include('includes.successMessages')

                <div class="pull-right">
                    <a href="/admin/faculty_members/create" class="btn btn-success">+ Add Faculty Member</a>
                    <div class="clearfix" style="height: 10px;"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>E-Mail</th>
                            <th>Started Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($facultyMembers->count() > 0)
                            @foreach ($facultyMembers as $facultyMember)
                                <tr>
                                    <td>{{$facultyMember->code}}</td>
                                    <td>{{$facultyMember->name}}</td>
                                    <td>{{$facultyMember->surname}}</td>
                                    <td>{{$facultyMember->mail}}</td>
                                    <td>{{$facultyMember->started_date}}</td>
                                    <td>
                                        <a href="/admin/faculty_members/{{$facultyMember->_id}}" data-method="DELETE" class="rest btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6">Faculty member is not found</td></tr>
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
