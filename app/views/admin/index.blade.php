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

            <!-- navbar -->
            <div class="layout-navbar">
              <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                    <span class="sr-only">Toggle</span>
                  </button>
                  <a href="/" class="navbar-brand">Learning Management System</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                  <ul class="nav navbar-nav navbar-right">
                    <li>
                        @if (Auth::admin()->check())
                        <a href="/admin">Dashboard</a>
                        @else
                        <a href="/student">Dashboard</a>
                        @endif
                    </li>
                    <li><a href="/logout">Exit</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </nav><!-- /navbar -->
            </div>

        </div>

        <div class="row">

            <!-- sidebar -->
            <div class="col-md-3">
            das
            </div>

            <!-- content -->
            <div class="col-md-9">
            dadsa
            </div>

        </div>

    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>
</html>
