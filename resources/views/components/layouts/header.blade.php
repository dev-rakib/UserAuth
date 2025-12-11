<header class="fixed top-0 left-0 right-0 w-full bg-white dark:bg-[#3E2723] shadow-lg shadow-[#8D6E63]/20 py-4 px-6 sm:px-8 z-50">
    <div class="flex items-center justify-between max-w-7xl mx-auto">
        
        <div class="header-left">
            <a href="{{ route('dashboard') }}">
                <span class="text-2xl font-extrabold text-[#4E342E] dark:text-[#FDF8F5]">UserAuth ☕</span>
            </a>
        </div>

        <div class="header-right relative" x-data="{ open: false }">
            
            <button @click="open = !open" 
                class="profile-button p-2 rounded-lg bg-[#EFEBE9] dark:bg-[#5D4037] text-[#4E342E] dark:text-[#FDF8F5] transition duration-150 hover:bg-[#D7CCC8]">
                <span class="px-2 font-medium">{{$title}}</span>
            </button>

            <!-- Dynamic Dropdown -->
            <div x-show="open"
                 x-cloak
                 @click.away="open = false"
                 x-transition
                 class="dropdown-menu absolute right-0 mt-3 w-48 bg-white dark:bg-[#4E342E] rounded-xl shadow-2xl border border-[#D7CCC8] dark:border-[#5D4037] py-2">

                <!-- SLOT GOES HERE -->
                {{ $slot }}

                <a href="#" 
                class="block px-4 py-2 text-sm text-[#5D4037] dark:text-[#FDF8F5] hover:bg-[#F5EFE6] rounded-lg mx-1">
                    Settings
                </a>

                <div class="border-t border-[#D7CCC8] dark:border-[#5D4037] my-2"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-100 rounded-lg mx-1">
                        Logout
                    </button>
                </form>

            </div>
        </div>
    </div>
</header>
