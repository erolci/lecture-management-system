<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Add new classroom/floor</title>

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

                <form class="form-horizontal" method="post" action="/admin/classrooms">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Add New Classroom/Floor</legend>

                    {{-- Error Messages --}}
                    @include('includes.errorMessages')

                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="type">Type</label>
                      <div class="col-md-4">
                        <select id="type" name="type" class="form-control">
                            <option value="0" selected="selected">Floor</option>
                            <option value="1">Classroom</option>
                        </select>
                      </div>
                    </div>

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

                    <!-- Select Basic -->
                    <div class="form-group floor-selectbox hide">
                      <label class="col-md-4 control-label" for="parent_code">Floor</label>
                      <div class="col-md-4">
                        <select id="parent_code" name="parent_code" class="form-control">
                            @if ($floors)
                                @foreach ($floors as $floor)
                                    <option value="{{ $floor->code }}">{{ $floor->name }}</option>
                                @endforeach
                            @endif
                        </select>
                      </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-8">
                        <a href="/admin/classrooms" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>

                    </fieldset>
                </form>


            </div>

        </div>

    </div>

    <script>
    $(function() {

        $('#type').on('change', function() {

            var type = $(this).find(':selected').val();

            if (type == 0) $('.floor-selectbox').addClass('hide');
            if (type == 1) $('.floor-selectbox').removeClass('hide');
        });
    });
    </script>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
