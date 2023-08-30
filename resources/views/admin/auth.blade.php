<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('dash.auth.process') }}" method="post" class="bg-white shadow-md rounded-xl py-8 px-16 pb-8 mb-4">
            @csrf
            <h1 class="text-center text-blue-500 mb-6 text-[22px]">Авторизируйтесь в панеле</h1>
            <div class="mb-6">
                <input type="password" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="pswd" name="password" placeholder="Password">
            </div>
            @error('password')
                <p class="text-rose-500 opacity-[90%] text-center mb-4">{{ $message }}</p>
            @enderror
            <div class="flex justify-center mb-6">
                <button type="submit" class="py-2 bg-blue-400 text-white w-full rounded-xl duration-300 hover:bg-opacity-[80%]">Log In</button>
            </div>
        </form>
    </div>
</x-app-layout>
