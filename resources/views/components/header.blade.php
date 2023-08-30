<header class="container">
    <nav class="py-8 flex justify-between items-center">
        <a href="/" class="py-6 px-16 bg-blue-400 rounded-xl" id="brand"></a>
        <ul>
            <li class="flex items-center space-x-8">
                @if(request()->routeIs('welcome'))
                    <x-icons.home-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium">Лента</h1>
                @elseif(request()->routeIs('article'))
                    <x-icons.article-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium">Как заставить себя работать?</h1>
                @endif
            </li>
        </ul>

        @auth
            <ul class="inline-flex gap-[35px] items-center">
                <li>
                    <img src="{{ Auth::user()->avatar }}" class="w-14 h-14 rounded-full" alt="profile_image">
                </li>
            </ul>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="bg-blue-400 py-3 px-7 rounded-xl text-white duration-300 hover:opacity-[80%]">Log In</a>
        @endguest
    </nav>
</header>
