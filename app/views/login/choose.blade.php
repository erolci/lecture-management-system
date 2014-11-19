<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Choose Login Type</title>

  @include('includes.head')

</head>
<body>

    <div class="container layout-login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <h3 class="text-center">Choose Login Type</h3>

                <br />

                <a href="{{ url('studentLogin') }}" class="btn btn-primary btn-lg btn-block">Student Login</a>
                <a href="{{ url('adminLogin') }}" class="btn btn-warning btn-lg btn-block">Admin Login</a>

            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
