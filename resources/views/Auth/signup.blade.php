<x-guest-layout>
    <div class="w-full max-w-md bg-white/80 dark:bg-[#3E2723]/90 rounded-[2.5rem] p-10 shadow-2xl shadow-[#8D6E63]/30 border border-[#F5EFE6] dark:border-[#5D4037]">

        <h1 class="text-3xl font-bold text-[#4E342E] dark:text-[#FDF8F5] mb-2">Join the Brew</h1>
        <p class="text-[#6D4C41] dark:text-[#A1887F] text-sm mb-8">CREATE YOUR ACCOUNT</p>

        <form action="{{ route('signupcomplete') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="full_name" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Full Name</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('full_name') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="full_name"
                        id="full_name"
                        required
                        placeholder="Full Name"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        value="{{ old('full_name') }}"
                    >
                </div>
                @error('full_name')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="username" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Username</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('username') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="username"
                        id="username"
                        required
                        placeholder="Username"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        value="{{ old('username') }}"
                    >
                </div>
                @error('username')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Email</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('email') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        required
                        placeholder="Email address"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        value="{{ old('email') }}"
                    >
                </div>
                @error('email')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Phone</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('phone') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        required
                        placeholder="Phone number"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        value="{{ old('phone') }}"
                    >
                </div>
                @error('phone')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Password</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('password') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        placeholder="Create password"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                    >
                </div>
                @error('password')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Confirm Password</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 border border-[#D7CCC8] dark:border-[#5D4037] rounded-2xl px-4 py-3 shadow-sm @error('password_confirmation') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        required
                        placeholder="Confirm password"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                    >
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full py-3 bg-[#4E342E] text-white font-bold rounded-2xl hover:bg-[#3E2723] transition duration-200 shadow-md shadow-[#4E342E]/30">
                SIGNUP
            </button>

        </form>
        <p class="text-center text-[#6D4C41] dark:text-[#A1887F] text-sm mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="text-[#4E342E] dark:text-[#FDF8F5] font-bold hover:underline">SignIn</a>
        </p>
        <p class="text-center text-[#6D4C41] dark:text-[#A1887F] text-sm mt-6">
            <a href="/" class="text-[#4E342E] dark:text-[#FDF8F5] font-bold hover:underline">Back to Home &lt;-</a>
        </p>
    </div>
</x-guest-layout>
