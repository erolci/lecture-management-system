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
