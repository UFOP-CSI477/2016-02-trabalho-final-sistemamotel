<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Motel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <style>
    body,html{
      background-color: #333333;
      color: white;
      height: 100%;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      background-color: #990000;
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      background-color: #333333;
      color: white;
      padding: 15px;
      height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #000000;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #990000;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {
        height:auto;}
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">SisMotel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->nome }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="/apartamentos">Apartamentos</a></p>
        <p><a href="/hospedagens">Hospedagens</a></p>
        <p><a href="/produtos">Produtos</a></p>
        <p><a href="/users">Users</a></p>
      </div>

      <div class="col-sm-10 text-left">

        @if(Session::has('error'))
          <div class="alert alert-danger">  {{Session::get('error')}} </div>
        @endif

        @if(Session::has('info'))
          <div class="alert alert-info">  {{Session::get('info')}} </div>
        @endif

        @if(Session::has('warning'))
          <div class="alert alert-warning">  {{Session::get('warning')}} </div>
        @endif

        @yield('conteudo')

      </div>
    </div>
  </div>

  <!-- <footer class="container-fluid text-center"></footer> -->
  <footer class="container-fluid text-center">
    <p>Rafael Rusth Formagini Dornellas - 13.2.8569 </br>
      Gildomar Gonçalves Dias - 14.2.8596 </br>
      © Sistema Motel. Todos os direitos reservados.</p>
  </footer>

  <!-- Scripts -->
  <script src="/js/app.js"></script>

</body>
</html>
