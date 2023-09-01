<header class="container">
    <nav class="py-8 flex justify-between items-center">
        <a href="/" class="py-6 px-10 bg-blue-400 rounded-xl xxs:hidden" id="brand"></a>
        <ul class="xxxs:hidden">
            <li class="flex items-center space-x-8">
                @if(request()->routeIs('welcome'))
                    <x-icons.home-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium sm:hidden">Лента</h1>
                @elseif(request()->routeIs('article'))
                    <x-icons.article-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium sm:hidden">Запись</h1>
                @endif
            </li>
        </ul>

        <ul class="hidden xxxs:block xxxs:mx-8">
            <li class="flex items-center space-x-8">
                @if(request()->routeIs('welcome'))
                    <x-icons.home-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium">Лента</h1>
                @elseif(request()->routeIs('article'))
                    <x-icons.article-icon class="h-8 w-8" />
                    <h1 class="text-2xl font-medium">Запись</h1>
                @endif
            </li>
        </ul>

        @auth
            <ul>
                <li>
                    <img src="{{ Auth::user()->avatar }}" class="w-10 h-10 rounded-full xxxs:hidden" alt="profile_image">
                </li>
            </ul>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="bg-blue-400 py-3 px-7 rounded-xl text-white duration-300 hover:opacity-[80%]">Log In</a>
        @endguest
    </nav>
</header>
