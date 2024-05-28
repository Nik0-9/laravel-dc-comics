<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <a href="{{route('home')}}">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo" class="w-75 p-2">
            </a>
        </div>
        <div id="nav-header">
            <ul class="d-flex">
                <li>
                    @foreach($nav_links as $key => $value)
                        <a href="#" class="text-uppercase after ps-2">
                            {{$value}}
                        </a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</header>