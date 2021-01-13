<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Blog</title>
    </head>
    <body style="background-color: #eee">
      <!-- Right Nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark p-4 mb-3 ">
            <div class="container-fluid">
              <a class="navbar-brand  text-white " href="{{ route('home') }}">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item  mx-3">
                    <a class="nav-link  text-white" href="{{ route('dashboard') }}">DashBoard</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link  text-white" href="{{ route('post') }}">Posts</a>
                  </li>
                </ul>
                <!-- Left Nav -->

                <div class="container">
                <ul class="navbar-nav float-end">
                    @if(auth()->user())
                    <li class="nav-item mx-3">
                        <a class="nav-link  text-white " aria-current="page" href="{{ route('profile',auth()->user()->name) }}">{{ auth()->user()->name }}</a>
                    </li>

                    <li class="nav-item mx-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link bg-dark border-0 text-white" type="submit" href="{{ route('logout') }}">Logout</button>
                        </form>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('register') }}">Register</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link  text-white" href="{{ route('login') }}">Login</a>
                    </li>

                    @endif

                </ul>
              </div>

              </div>
            </div>
          </nav>
          @yield('content')




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- JQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </body>
</html>
