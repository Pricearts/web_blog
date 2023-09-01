<x-app-layout>

    <x-header />

    <main class="flex flex-col justify-center items-center mt-32 xs:grid xs:grid-cols-1 gap-[20px]">
        @foreach($articles as $article)
            <article class="bg-white shadow-md rounded-xl py-3 px-5 w-[700px] xs:w-[500px] space-y-12">
                <section id="top" class="justify-between">
                    <div class="flex items-center space-x-3">
                        <img class="w-14 h-14 xs:w-10 xs:h-10 rounded-full" src="{{ $article->getAuthor()->avatar }}" alt="article_creator">
                        <div>
                            <h1 class="font-medium text-[19px] xs:text-[16px]"><span>@</span>{{ $article->getAuthor()->name }}</h1>
                            <p class="text-[#0F1419] opacity-[42%] xs:text-[15px]">{{ $article->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </section>
                <section id="body" class="space-y-3">
                    <h1 class="text-[22px] xs:text-[18px] font-medium">{{ $article->title }}</h1>
                    <p class="opacity-[90%] xs:text-[14px] break-words">
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
