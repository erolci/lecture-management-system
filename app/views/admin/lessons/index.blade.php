<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Admin Dashboard</title>

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

            @include('includes.admin.sidebarMenu', ['sm' => 'lessons'])

            <!-- content -->
            <div class="col-md-9">

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
                    @if ($lessons)
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{$lesson->code}}</td>
                                <td>{{$lesson->name}}</td>
                                <td>{{$lesson->isMandatory ? 'Yes' : 'No'}}</td>
                                <td>{{$lesson->day}}</td>
                                <td>{{$lesson->hour}}</td>
                                <td>actions</td>
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
