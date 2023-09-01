<div>
    <main class="flex flex-col justify-center items-center gap-[20px] mt-16 xs:grid xs:grid-cols-1">
        <article class="bg-white shadow-md rounded-xl py-3 px-5 w-[700px] xs:w-[500px]">
            <section id="article" class="space-y-12">
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
                        {{ $article->content }}
                    </p>
                </section>
            </section>
            <section id="comments" class="mt-12 space-y-5">
            @auth()
                <section id="create-comment">
                    <form wire:submit.prevent="storeComment">
                        <div class="flex items-center space-x-4">
                            <input type="text" wire:model="commentContent" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" placeholder="Post comment...">
                            <button type="submit" class="py-2 bg-blue-400 text-white px-6 rounded-xl duration-300 hover:bg-opacity-[80%]">Post</button>
                        </div>
                        @error('commentContent')
                            <p class="text-rose-400 mt-2 text-center">{{ $message }}</p>
                        @enderror
                    </form>
                </section>
            @endauth
            @forelse($article->getComments as $comment)
                    <article id="comment">
                        <div class="flex space-x-3">
                            <img class="w-12 h-12 rounded-full" src="{{ $comment->getUser()->avatar }}" alt="article_creator">
                            <div class="space-y-1">
                                <h1 class="font-medium text-[17px]"><span>@</span>{{ $comment->getUser()->name }}</h1>
                                <p class="text-[#0F1419] opacity-[86%]">
                                    {{ $comment->content }}
                                </p>
                                <div class="flex items-center space-x-4">
                                    <p class="text-[#0F1419] opacity-[42%]">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                        <h1></h1>
                @endforelse
            </section>
        </article>
    </main>
</div>
