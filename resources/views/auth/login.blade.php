<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('login') }}" method="post" class="bg-white shadow-md rounded-xl py-8 px-16 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                    Username
                </label>
                <input type="text" value="{{ old('name') }}" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="name" name="name" placeholder="Username">
            </div>
            <div class="mb-6">
                <label for="pswd" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                    Password
                </label>
                <input type="password" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none" id="pswd" name="password" placeholder="Password">
            </div>
            <div class="flex justify-center mb-6">
                <button type="submit" class="py-2 bg-blue-400 text-white w-full rounded-xl duration-300 hover:bg-opacity-[80%]">Log In</button>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-rose-500 opacity-[90%] text-center mb-4">{{ $error }}</p>
                @endforeach
            @endif
            <div class="flex justify-center items-center space-x-4 mb-4">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" class="block text-blue-500 opacity-[80%] font-normal">Remember Me</label>
            </div>
            <div class="flex justify-center items-center space-x-4">
                <a href="{{ route('register') }}" class="text-blue-500 opacity-[80%] font-normal duration-300 hover:opacity-[56%]">Dont have account?</a>
            </div>
        </form>
    </div>
</x-app-layout>
