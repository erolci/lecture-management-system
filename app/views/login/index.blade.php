<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>LMS - Login</title>

  @include('includes.head')

</head>
<body>

    <div class="container layout-login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">

                        {{-- Error Messages --}}
                        @include('includes.errorMessages')

                        {{
                            Form::open(
                            [
                                'url'    => url('login'),
                                'method' => 'POST',
                                'id'     => 'loginForm'
                            ])
                        }}

                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ ($loginType == 2) ? 'Student Number' : 'Username' }}" name="username" type="text" required="required">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required="required">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>

                        {{ Form::hidden('type', $loginType) }}
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
