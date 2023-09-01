<div>
    <main class="container mt-16">
        <div class="flex justify-between xs:justify-center items-center">
            <h1 class="text-[22px] font-bold opacity-[80%] xs:hidden">Статьи</h1>
            <div>
                <button wire:click="toggleModal" class="bg-blue-400 text-white rounded-xl py-2 px-4 duration-300 hover:bg-opacity-[70%]">Новая запись</button>
                @if($showModal)
                    <div class="fixed top-0 left-0 w-full h-full bg-gray-900 opacity-50 z-40 transition-opacity" wire:click="$set('showModal', false)"></div>

                    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50 transition-opacity duration-500">
                        <div class="bg-white rounded-lg w-11/12 md:w-9/12 lg:w-8/12 xl:w-7/12 2xl:w-6/12 max-w-screen-sm">
                            <div class="border-b px-4 py-2 flex justify-end items-end">
                                <button wire:click="toggleModal">×</button>
                            </div>
                            <div class="p-4">
                                <form wire:submit.prevent="storeArticle" method="post" class="bg-white shadow-md rounded-xl py-8 px-16 pb-8 mb-4">
                                    @csrf
                                    <h1 class="text-center text-blue-500 mb-6 text-[22px]">@if($isCreate) Создание новой записи @else Обновление записи @endif</h1>
                                    <div class="mb-4">
                                        <label for="title" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Заголовок
                                        </label>
                                        <input type="text" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="title" wire:model="articleData.title" placeholder="Заголовок">
                                        @error('articleData.title')
                                            <p class="text-rose-400 mt-2 text-center">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="subtitle" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Краткое описание
                                        </label>
                                        <input type="text" value="{{ old('subtitle') }}" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="subtitle" wire:model="articleData.subtitle" placeholder="Краткое описание">
                                        @error('articleData.subtitle')
                                        <p class="text-rose-400 mt-2 text-center">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="content" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Контент
                                        </label>
                                        <textarea wire:model="articleData.content" id="content" cols="30" rows="10" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none"></textarea>
                                        @error('articleData.content')
                                        <p class="text-rose-400 mt-2 text-center">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex justify-center mb-6">
                                        <button wire:loading.attr="disabled" type="submit" class="py-2 bg-blue-400 text-white w-full rounded-xl duration-300 hover:bg-opacity-[80%]">
                                            <span wire:loading.remove>@if($isCreate) Создать @else Обновить @endif</span>
                                            <span wire:loading>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                   <path d="M12 3a9 9 0 1 0 9 9"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <section id="articles" class="mt-8 space-y-8">
            @foreach($articles as $article)
                <article class="border border-slate-300 py-3 px-4 rounded-xl border-opacity-[76%] w-full flex justify-between medium:flex medium:flex-col medium:space-y-4">
                    <section id="start" class="flex items-center space-x-4">
                        <img class="w-14 h-14 xs:w-8 xs:h-8 rounded-full xxs:hidden" src="{{ $article->getAuthor()->avatar }}" alt="article_creator">
                        <div>
                            <h1 class="font-medium text-[19px] xs:text-[16px]"><span>@</span>{{ $article->getAuthor()->name }}</h1>
                            <h1 class="font-normal text-[16px] xs:text-[14px] break-all">{{ $article->title }}</h1>
                            <p class="text-[#0F1419] opacity-[42%] xs:text-[13px]">{{ $article->created_at->diffForHumans() }}</p>
                        </div>
                    </section>
                    <section id="end" class="flex xxs:flex-col medium:justify-between xxs:justify-center items-center space-x-4">
                        <button wire:click="edit({{ $article }})" class="text-blue-500">Редактировать</button>
                        <button wire:click="destroy({{ $article }})" class="text-rose-500">Удалить</button>
                    </section>
                </article>
            @endforeach
        </section>
    </main>
</div>
