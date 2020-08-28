<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome To GainYourCode
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Computer Networks</a>
                    <a href="https://laracasts.com">Computer Vision</a>
                    <a href="https://laravel-news.com">Algorithms</a>
                    <a href="https://blog.laravel.com">Computer Architecture</a>
                    <a href="https://nova.laravel.com">Android App Development</a>
                    <a href="https://forge.laravel.com">Digital Electronics</a>
                    <a href="https://vapor.laravel.com">Operating System</a>
                    <a href="https://github.com/laravel/laravel">Theory Of Computation</a>
                </div>
            </div>
        </div>