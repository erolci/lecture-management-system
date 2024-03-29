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

            <div class="col-md-3">

                @include('includes.admin.sidebarMenu', ['sm' => 'lessons'])

            </div>

            <!-- content -->
            <div class="col-md-9">

                <form class="form-horizontal" method="post" action="/admin/lessons">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Add New Lesson</legend>

                    {{-- Error Messages --}}
                    @include('includes.errorMessages')

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="code">Code</label>
                      <div class="col-md-4">
                      <input id="code" name="code" type="text" placeholder="Lesson code" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="name">Name</label>
                      <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="Lesson name" class="form-control input-md" required="">

                      </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="day">Day</label>
                      <div class="col-md-4">
                        <select id="day" name="day" class="form-control">
                          <option value="1">Monday</option>
                          <option value="2">Tuesday</option>
                          <option value="3">Wednesday</option>
                          <option value="4">Thursday</option>
                          <option value="5">Friday</option>
                          <option value="6">Saturday</option>
                          <option value="7">Sunday</option>
                        </select>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="hour">Hour</label>
                      <div class="col-md-4">
                      <input id="hour" name="hour" type="text" placeholder="Lesson hour" class="form-control input-md mask-time" required="">

                      </div>
                    </div>

                    <!-- Multiple Checkboxes (inline) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">Is Mandatory</label>
                      <div class="col-md-4">
                        <label class="checkbox-inline" for="is_mandatory" style="line-height: 1.3;">
                          <input type="checkbox" name="is_mandatory" id="is_mandatory" value="1">
                          Yes
                        </label>
                      </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-8">
                        <a href="/admin/lessons" class="btn btn-danger">Cancel</a>
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
