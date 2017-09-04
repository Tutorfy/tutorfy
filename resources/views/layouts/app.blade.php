<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap and Font-awesome update to s3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cloudfront.schoolbytes.education/assets/admin_v2/css/font-awesome-light.css">
    <link rel="stylesheet" href="https://cloudfront.schoolbytes.education/assets/admin_v2/css/font-awesome-regular.css">
    <link rel="stylesheet" href="https://cloudfront.schoolbytes.education/assets/admin_v2/css/font-awesome-solid.css">
    <link rel="stylesheet" href="https://cloudfront.schoolbytes.education/assets/admin_v2/css/font-awesome-core.css">
    <style>

        html {
          position: relative;
          min-height: 100%;
        }
        body {
            background-color: #fff;
          /* Margin bottom by footer height */
          margin-bottom: 60px;
        }
        .footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          background-color: transparent;
        }
        .container .text-muted {
            margin: 20px 0;
        }
        .help-block {
            width: 100%;
            color: #E74C3C;
        }
        .mb-2-5 {
            margin-bottom: .90rem !important;
        }
        .navbar {
            padding: .5rem 0;
        }
        .nav-link {
          color: #292b2c;
        }
        li.profile-card:last-child .card {
          border-bottom: none;
        }
        .login-card {
          border: none !important;
        }
        .card-profileimg {
          margin-right: 10px;
          width: 48px;
          display: inline-block;
          height: 48px;
        }
        .text-muted-nm {
          margin: 0;
        }
        .text-muted-sm {
          margin-top: 0;
          color: #636c72!important;
          margin-bottom: .5rem;
        }
        .nav {
          margin-top: 1.80rem;
        }
        .list-group-item {
          padding: .75rem .80rem !important;
        }
        .card {
          border: none;
          border-radius: 0;
          border-bottom: 1px solid rgba(0,0,0,.15);
          margin-top: .45rem !important;
          padding-bottom: .45rem !important;
          margin-bottom: 0 !important;
        }
        .round {
          border-radius: 49.9%;
        }
        .list-group-icon {
  display:inline;

}
    </style>
  </head>
</head>
<body>
    <div class="container">
        @guest

        @else
        <nav class="navbar navbar-toggleable-md navbar-light">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Tutorfy</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        @endguest

        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Tutorfy</p>
        </div>
    </footer>

    <!-- Modals -->
    @yield('modals')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
