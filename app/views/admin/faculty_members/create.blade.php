<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Add new faculty member</title>

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

                <form class="form-horizontal" method="post" action="/admin/faculty_members">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Add New Faculty Member</legend>

                    {{-- Error Messages --}}
                    @include('includes.errorMessages')

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="code">Code</label>
                      <div class="col-md-4">
                      <input id="code" name="code" type="text" placeholder="Code" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="name">Name</label>
                      <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="surname">Surname</label>
                      <div class="col-md-4">
                      <input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="mail">E-Mail</label>
                      <div class="col-md-4">
                      <input id="mail" name="mail" type="text" placeholder="E-mail address" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Date input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="started_date">Start Date</label>
                      <div class="col-md-4">
                      <input id="started_date" name="started_date" type="text" placeholder="" class="form-control input-md mask-date" required="">

                      </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-8">
                        <a href="/admin/faculty_members" class="btn btn-danger">Cancel</a>
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
