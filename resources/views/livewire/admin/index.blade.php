<div>
    <main class="container mt-16">
        <div class="flex justify-between items-center">
            <h1 class="text-[22px] font-bold opacity-[80%]">Статьи</h1>
            <div>
                <button wire:click="toggleModal" class="bg-blue-400 text-white rounded-xl py-2 px-4 duration-300 hover:bg-opacity-[70%]">Новая запись</button>
                @if($showModal)
                    <div class="fixed top-0 left-0 w-full h-full bg-gray-900 opacity-50 z-40 transition-opacity" wire:click="$set('showModal', false)"></div>

                    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50 transition-opacity duration-500">
                        <div class="bg-white rounded-lg w-11/12 md:w-9/12 lg:w-8/12 xl:w-7/12 2xl:w-6/12 max-w-screen-sm">
                            <div class="border-b px-4 py-2 flex justify-between items-center">
                                <h3 class="font-semibold text-lg">Modal Title</h3>
                                <button wire:click="toggleModal">×</button>
                            </div>
                            <div class="p-4">
                                <form action="{{ route('dash.auth.process') }}" method="post" class="bg-white shadow-md rounded-xl py-8 px-16 pb-8 mb-4">
                                    @csrf
                                    <h1 class="text-center text-blue-500 mb-6 text-[22px]">Создание новой записи</h1>
                                    <div class="mb-4">
                                        <label for="title" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Заголовок
                                        </label>
                                        <input type="text" value="{{ old('title') }}" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="title" name="title" placeholder="Заголовок">
                                    </div>
                                    <div class="mb-4">
                                        <label for="subtitle" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Краткое описание
                                        </label>
                                        <input type="text" value="{{ old('subtitle') }}" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="subtitle" name="subtitle" placeholder="Краткое описание">
                                    </div>
                                    <div class="mb-4">
                                        <label for="content" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                                            Контент
                                        </label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none"></textarea>
                                    </div>
                                    <div class="flex justify-center mb-6">
                                        <button type="submit" class="py-2 bg-blue-400 text-white w-full rounded-xl duration-300 hover:bg-opacity-[80%]">Создать статью</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <section id="articles" class="mt-8 space-y-8">
            <article class="border border-slate-300 py-3 px-4 rounded-xl border-opacity-[76%] w-full flex items-center justify-between">
                <section id="start" class="flex items-center space-x-4">
                    <img class="w-14 h-14 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                    <div>
                        <h1 class="font-medium text-[19px]">@ntsg</h1>
                        <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                    </div>
                </section>
                <section id="center">
                    <h1 class="font-medium opacity-[90%] text-[18px]">Лучшая разработка</h1>
                    <p class="text-[16px] opacity-[70%]">Lorem ispum dolor sit amet...</p>
                </section>
                <section id="end" class="flex items-center space-x-4">
                    <a href="#" class="text-blue-500">Редактировать</a>
                    <a href="#" class="text-rose-500">Удалить</a>
                </section>
            </article>
            <article class="border border-slate-300 py-3 px-4 rounded-xl border-opacity-[76%] w-full flex items-center justify-between">
                <section id="start" class="flex items-center space-x-4">
                    <img class="w-14 h-14 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                    <div>
                        <h1 class="font-medium text-[19px]">@ntsg</h1>
                        <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                    </div>
                </section>
                <section id="center">
                    <h1 class="font-medium opacity-[90%] text-[18px]">Лучшая разработка</h1>
                    <p class="text-[16px] opacity-[70%]">Lorem ispum dolor sit amet...</p>
                </section>
                <section id="end" class="flex items-center space-x-4">
                    <a href="#" class="text-blue-500">Редактировать</a>
                    <a href="#" class="text-rose-500">Удалить</a>
                </section>
            </article>
            <article class="border border-slate-300 py-3 px-4 rounded-xl border-opacity-[76%] w-full flex items-center justify-between">
                <section id="start" class="flex items-center space-x-4">
                    <img class="w-14 h-14 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                    <div>
                        <h1 class="font-medium text-[19px]">@ntsg</h1>
                        <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                    </div>
                </section>
                <section id="center">
                    <h1 class="font-medium opacity-[90%] text-[18px]">Лучшая разработка</h1>
                    <p class="text-[16px] opacity-[70%]">Lorem ispum dolor sit amet...</p>
                </section>
                <section id="end" class="flex items-center space-x-4">
                    <a href="#" class="text-blue-500">Редактировать</a>
                    <a href="#" class="text-rose-500">Удалить</a>
                </section>
            </article>
        </section>
    </main>
</div>
