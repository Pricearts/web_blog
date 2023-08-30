<x-app-layout>

    <x-header />

    <main class="container flex flex-col justify-center items-center gap-[20px] mt-16">
        <article class="bg-white shadow-md rounded-xl py-3 px-5 w-[700px]">
            <section id="article" class="space-y-12">
                <section id="top" class="justify-between">
                    <div class="flex items-center space-x-3">
                        <img class="w-14 h-14 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                        <div>
                            <h1 class="font-medium text-[19px]">@ntsg</h1>
                            <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                        </div>
                    </div>
                </section>
                <section id="body" class="space-y-3">
                    <h1 class="text-[22px] font-medium">Как заставить себя работать?</h1>
                    <p class="opacity-[90%] break-words">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </section>
                <section id="bottom" class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <div class="flex items-center space-x-2 opacity-[56%]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                            </svg>
                            <span>2</span>
                        </div>
                        <div class="flex items-center space-x-2 opacity-[56%]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            </svg>
                            <span>2</span>
                        </div>
                    </div>
                </section>
            </section>
            <section id="comments" class="mt-12 space-y-5">
                <article id="comment">
                    <div class="flex space-x-3">
                        <img class="w-12 h-12 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                        <div class="space-y-1">
                            <h1 class="font-medium text-[17px]">@ntsg</h1>
                            <p class="text-[#0F1419] opacity-[86%]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit habitant pellentesque morbi ame
                            </p>
                            <div class="flex items-center space-x-4">
                                <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                                <button class="text-blue-500">Ответить</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="comment">
                    <div class="flex space-x-3">
                        <img class="w-12 h-12 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                        <div class="space-y-1">
                            <h1 class="font-medium text-[17px]">@ntsg</h1>
                            <p class="text-[#0F1419] opacity-[86%]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit habitant pellentesque morbi ame
                            </p>
                            <div class="flex items-center space-x-4">
                                <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                                <button class="text-blue-500">Ответить</button>
                            </div>
                        </div>
                    </div>

                    <article id="sub_comment" class="ml-12 mt-9">
                        <div class="flex space-x-3">
                            <img class="w-12 h-12 rounded-full" src="https://tailwindcss.com/_next/static/media/sarah-dayan.de9b3815.jpg" alt="article_creator">
                            <div class="space-y-1">
                                <h1 class="font-medium text-[17px]">@ntsg</h1>
                                <p class="text-[#0F1419] opacity-[86%]">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit habitant pellentesque morbi ame
                                </p>
                                <div class="flex items-center space-x-4">
                                    <p class="text-[#0F1419] opacity-[42%]">3 часа назад</p>
                                    <button class="text-blue-500">Ответить</button>
                                </div>
                            </div>
                        </div>
                    </article>
                </article>
            </section>
        </article>
    </main>

</x-app-layout>
