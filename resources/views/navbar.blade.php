<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel Refresh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
        <li><a href="{{ route('countries.index') }}">Countries</a></li>
        <li><a href="{{ route('postcodes.index') }}">Postcodes</a></li>
      </ul>
      {{-- <ul class="nav navbar-nav navbar-right">
        <a href="#" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>
      </ul> --}}
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>