<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('register') }}" method="post" class="bg-white shadow-md rounded-xl py-8 px-16 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                    Username
                </label>
                <input type="text" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none @error('name') ring-rose-400 @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Username">
                @error('name')
                <p class="text-rose-500 opacity-[90%] text-center my-3">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="pswd" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                    Password
                </label>
                <input type="password" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none @error('password') ring-rose-400 @enderror" id="pswd" name="password" placeholder="Password">
            </div>
            <div class="mb-6">
                <label for="pswd" class="block text-blue-500 opacity-[80%] font-normal mb-2">
                    Confirm your password
                </label>
                <input type="password" class="appearance-none border border-slate-300 border-opacity-[56%] rounded-xl w-full py-2 px-3 duration-300 hover:border-blue-400 focus:border-blue-400 focus:ring-0 text-gray-700 leading-tight outline-none @error('password') ring-rose-400 @enderror" id="pswd" name="password_confirmation" placeholder="Password Confirmation">
                @error('password')
                <p class="text-rose-500 opacity-[90%] text-center my-3">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-center mb-6">
                <button type="submit" class="py-2 bg-blue-400 text-white w-full rounded-xl duration-300 hover:bg-opacity-[80%]">Log In</button>
            </div>
            <div class="flex justify-center items-center space-x-4">
                <a href="{{ route('login') }}" class="text-blue-500 opacity-[80%] font-normal duration-300 hover:opacity-[56%]">Already have account?</a>
            </div>
        </form>
    </div>
</x-app-layout>
