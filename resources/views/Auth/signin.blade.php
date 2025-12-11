<x-guest-layout>
    <div class="w-full max-w-md bg-white/80 dark:bg-[#3E2723]/90 rounded-[2.5rem] p-10 shadow-2xl shadow-[#8D6E63]/30 border border-[#F5EFE6] dark:border-[#5D4037]">

        <h1 class="text-3xl font-bold text-[#4E342E] dark:text-[#FDF8F5] mb-2">Welcome Back</h1>
        <p class="text-[#6D4C41] dark:text-[#A1887F] text-sm mb-8">Grab a coffee and log into your account.</p>

        <form action="{{ route('signincomplete') }}" method="POST" class="space-y-6">
            {{-- CRITICAL FIX: Add the CSRF token for security --}}
            @csrf

            <div>
                <label for="email" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Email</label>
                {{-- IMPROVEMENT: Add error highlighting --}}
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('email') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="email"
                        name="email"
                        id="email" {{-- IMPROVEMENT: Added id for accessibility --}}
                        required
                        placeholder="Enter email"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        value="{{ old('email') }}" {{-- IMPROVEMENT: Retain old input on validation failure --}}
                        autofocus {{-- UX: Automatically focus the first input --}}
                    >
                </div>
                {{-- IMPROVEMENT: Display validation error message --}}
                @error('email')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Password</label>
                {{-- IMPROVEMENT: Add error highlighting --}}
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('password') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="password"
                        id="password" {{-- IMPROVEMENT: Added id for accessibility --}}
                        required
                        placeholder="Enter password"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                    >
                </div>
                {{-- IMPROVEMENT: Display validation error message --}}
                @error('password')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center pt-1">
                <input type="checkbox" name="remember" id="remember" class="mr-3 rounded border-[#8D6E63] text-[#4E342E] dark:bg-[#3E2723] focus:ring-[#8D6E63]">
                <label for="remember" class="text-[#6D4C41] dark:text-[#A1887F] text-sm">Keep me logged in</label> {{-- IMPROVEMENT: Added label for checkbox --}}
            </div>

            <button
                type="submit"
                class="w-full py-3 bg-[#4E342E] text-white font-bold rounded-2xl hover:bg-[#3E2723] transition duration-200 shadow-md shadow-[#4E342E]/30">
                SIGNIN
            </button>

        </form>
        
        {{-- RECOMMENDATION: If you have non-field-specific errors (e.g., failed authentication), display them here. --}}
        @if ($errors->has('login_error'))
            <p class="text-center text-red-500 dark:text-red-400 text-sm mt-3 font-medium">{{ $errors->first('login_error') }}</p>
        @endif


        <p class="text-center text-[#795548] dark:text-[#A1887F] text-sm mt-5 hover:underline font-medium">
            <a href="#" class="text-[#795548] dark:text-[#A1887F] hover:underline">Forgot Password?</a>
        </p>

        <p class="text-center text-[#6D4C41] dark:text-[#A1887F] text-sm mt-5">
            Don’t Have an account?
            <a href="{{ route('signup') }}" class="text-[#4E342E] dark:text-[#FDF8F5] font-bold hover:underline">SignUp</a>
        </p>
        <p class="text-center text-[#6D4C41] dark:text-[#A1887F] text-sm mt-6">
            <a href="/" class="text-[#4E342E] dark:text-[#FDF8F5] font-bold hover:underline">Back to Home &lt;-</a>
        </p>

    </div>
</x-guest-layout>