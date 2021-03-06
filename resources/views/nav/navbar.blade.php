

{{-- new nav bar--}}

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog">Post</a>


                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about_url')}}">about</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li><a href="/home">Dashaboard {{ Auth::user()->super }}</a> </li>
                ||
                  @can('sup-only',Auth::user())
                    <li><a href="/super">Super</a> </li>
@endcan




                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown"  aria-expanded="false" >
                            <i class="fa fa-bell" style="color: white;"></i>
                        </a>
                      <?php
                        $user = App\User::find(1);

                        foreach ($user->notifications as $notification) {
                            echo $notification->type;
                        }
                        ?>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                          @foreach(auth()->user()->notifications as $notification)
                            <a class="dropdown-item" href="#">
{{ $notification->data['details'] }}
                            </a>
@endforeach

                        </div>
                    </li>


                @endguest
            </ul>
        </div>
    </div>
</nav>
