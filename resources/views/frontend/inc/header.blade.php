<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ route('home') }}">Job Portal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">All Jobs</a>
                        </li>
                        @auth
                        <li class="nav-item ml-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                            <button class="btn btn-warning" type="submit">Sign Out</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item ml-4">
                            <a class="btn btn-info" href="{{ route('login') }}">Sign In</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="btn btn-outline-warning" href="{{ route('register') }}">Sign Up</a>
                        </li>
                        @endauth
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" id="searchKeyword" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="searchId">Search</button>
                      </form>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</header>