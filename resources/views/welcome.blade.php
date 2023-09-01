<x-app-layout>

    <x-header />

    <main class="container flex flex-col justify-center items-center gap-[20px] mt-32">
        @foreach($articles as $article)
            <article class="bg-white shadow-md rounded-xl py-3 px-5 w-[700px] space-y-12">
                <section id="top" class="justify-between">
                    <div class="flex items-center space-x-3">
                        <img class="w-14 h-14 rounded-full" src="{{ $article->getAuthor()->avatar }}" alt="article_creator">
                        <div>
                            <h1 class="font-medium text-[19px]"><span>@</span>{{ $article->getAuthor()->name }}</h1>
                            <p class="text-[#0F1419] opacity-[42%]">{{ $article->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </section>
                <section id="body" class="space-y-3">
                    <h1 class="text-[22px] font-medium">{{ $article->title }}</h1>
                    <p class="opacity-[90%] break-words">
                        {{ $article->subtitle }}
                    </p>
                </section>
                <section id="bottom" class="flex justify-end items-center">
                    <a href="{{ route('article', $article->id) }}" class="text-blue-500">Читать полностью</a>
                </section>
            </article>
        @endforeach
    </main>

</x-app-layout>
