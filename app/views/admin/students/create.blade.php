<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Add new student</title>

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

                <form class="form-horizontal" method="post" action="/admin/students">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Add New Student</legend>

                    {{-- Error Messages --}}
                    @include('includes.errorMessages')

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="code">Student Number</label>
                      <div class="col-md-4">
                      <input id="code" name="code" type="text" placeholder="Number" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="name">Name</label>
                      <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="Student name" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="surname">Surname</label>
                      <div class="col-md-4">
                      <input id="surname" name="surname" type="text" placeholder="Student surname" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password">Password</label>
                      <div class="col-md-4">
                      <input id="password" name="password" type="password" placeholder="Student password" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-8">
                        <a href="/admin/students" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>

                    </fieldset>
                </form>


            </div>

        </div>

    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
