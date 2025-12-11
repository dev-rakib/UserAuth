<x-guest-layout>
            <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-between gap-4">
                        
                        <div class="flex items-center">
                            <a href="{{ url('/') }}" class="text-xl font-extrabold text-[#4E342E] dark:text-[#D7CCC8] hover:text-[#3E2723] dark:hover:text-[#FDF8F5] transition duration-200">
                                UserAuth
                            </a>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            @auth
                                <a
                                    href="{{ route('dashboard') }}"
                                    class="inline-block px-6 py-3 bg-[#4E342E] text-white font-bold rounded-2xl transition duration-200 shadow-md shadow-[#4E342E]/30 
                                            hover:bg-[#3E2723] hover:scale-105"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="inline-block px-6 py-3 rounded-2xl border-2 border-[#8D6E63] font-bold transition duration-200 
                                            text-[#4E342E] dark:text-[#D7CCC8] hover:bg-[#8D6E63]/20 hover:scale-105"
                                >
                                    Log in
                                </a>

                                @if (Route::has('signup'))
                                    <a
                                        href="{{ route('signup') }}"
                                        class="inline-block px-6 py-3 bg-[#4E342E] text-white font-bold rounded-2xl transition duration-200 shadow-md shadow-[#4E342E]/30 
                                                hover:bg-[#3E2723] hover:scale-105"
                                    >
                                        Signup
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </nav>
                @endif
            </header>
            

            <div class="w-full max-w-lg mx-auto p-4 sm:p-6 md:p-8">
                <div class="bg-white dark:bg-[#3E2723] rounded-[2.5rem] shadow-2xl shadow-[#8D6E63]/30 p-8 sm:p-12 text-center border border-[#F5EFE6] dark:border-[#5D4037]">

                    <h1 class="text-4xl font-extrabold mb-3 text-[#4E342E] dark:text-[#FDF8F5]">
                        Welcome to UserAuth!
                    </h1>

                    <p class="text-lg text-[#5D4037] dark:text-[#D7CCC8] mb-6">
                        A simple, beautiful authentication system built with Laravel.
                    </p>
                    
                    <div class="border-t border-[#D7CCC8] dark:border-[#5D4037] pt-6">
                        <p class="text-sm font-semibold text-[#8D6E63] dark:text-[#A1887F]">
                            Made by Rakib Chowdhury
                        </p>
                    </div>
                    
                </div>
            </div>
            @if (Route::has('login'))
                <div class="h-14.5 hidden lg:block"></div>
            @endif
</x-guest-layout>
