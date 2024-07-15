<header>
    <section>
        <div class="bg-color-page">
            <div class="width-container">
                <section class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo DC">
                </section>

                <section class="navbar">
                    <nav>
                        <ul>
                            @foreach ($navComics as $link)
                                <li class="{{$link['active']? 'active' : ''}}">
                                    <a href="\">{{ $link['name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
    </section>
</header>
