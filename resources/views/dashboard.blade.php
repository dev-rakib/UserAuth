<x-app-layout>
    <x-layouts.header title="Profile">
        <a href="{{ route('profile', ['id'=> Auth::id() ]) }}" 
        class="block px-4 py-2 text-sm text-[#5D4037] dark:text-[#FDF8F5] hover:bg-[#F5EFE6] rounded-lg mx-1">
            Profile
        </a>
    </x-layouts.header>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000,
            });
        </script>
    @endif
    <div class="max-w-6xl mx-auto mt-25 mb-20 px-6">
        <h1 class="text-3xl font-bold mb-6 text-[#4E342E] dark:text-[#FDF8F5]">
            Welcome Back, {{ $user->full_name }}!
        </h1>
        
        <div class="p-8 bg-white dark:bg-[#3E2723] rounded-[2.5rem] shadow-2xl shadow-[#8D6E63]/20">
            <p class="text-lg text-[#5D4037] dark:text-[#D7CCC8]">
                This is your scrollable dashboard content area. The header and nav remain fixed.
            </p>

            @foreach ($users as $user)
                <x-info-div>ID: {{ $user->id }}: {{ $user->full_name }}</x-info-div>
            @endforeach
            
        </div>
    </div>

    <x-layouts.navbar/>
</x-app-layout>