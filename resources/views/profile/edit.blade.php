<x-guest-layout>
    <div class="w-full max-w-md bg-white/80 dark:bg-[#3E2723]/90 rounded-[2.5rem] p-10 shadow-2xl shadow-[#8D6E63]/30 border border-[#F5EFE6] dark:border-[#5D4037]">

        <h1 class="text-3xl font-bold text-[#4E342E] dark:text-[#FDF8F5] mb-2">Edit Account</h1>
        <p class="text-[#6D4C41] dark:text-[#A1887F] text-sm mb-8">
            EDITING ACCOUNT ID: {{ $user->id }} | {{ $user->full_name }}
        </p>

        <!-- PATCH request -->
        <form action="{{ route('updateprofile', $user->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- Full Name -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Full Name</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('full_name') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="full_name"
                        value="{{ old('full_name', $user->full_name) }}"
                        required
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] 
                               outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        placeholder="Full Name"
                    >
                </div>
                @error('full_name')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Username -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Username</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('username') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="username"
                        value="{{ old('username', $user->username) }}"
                        required
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] 
                               outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        placeholder="Username"
                    >
                </div>
                @error('username')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Email</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('email') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        required
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] 
                               outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        placeholder="Email address"
                    >
                </div>
                @error('email')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Phone</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('phone') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone', $user->phone) }}"
                        required
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] 
                               outline-none placeholder-[#8D6E63] dark:placeholder-[#A1887F]"
                        placeholder="Phone number"
                    >
                </div>
                @error('phone')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Old Password</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('old_password') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="old_password"
                        placeholder="Enter old password"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none"
                    >
                </div>
                @error('old_password')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- (Optional) Change Password -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">New Password (optional)</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('password') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="password"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none"
                        placeholder="Leave blank to keep current password"
                    >
                </div>
                @error('password')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="text-[#5D4037] dark:text-[#D7CCC8] text-sm font-semibold">Confirm New Password</label>
                <div class="flex items-center mt-2 bg-[#FDF8F5] dark:bg-[#4E342E]/70 
                            border border-[#D7CCC8] dark:border-[#5D4037] 
                            rounded-2xl px-4 py-3 shadow-sm 
                            @error('password_confirmation') border-red-500 dark:border-red-400 @enderror">
                    <input
                        type="password"
                        name="password_confirmation"
                        class="w-full bg-transparent text-[#4E342E] dark:text-[#FDF8F5] outline-none"
                        placeholder="Confirm new password"
                    >
                </div>
                @error('password_confirmation')
                <p class="text-red-500 dark:text-red-400 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Save button -->
            <button
                type="submit"
                class="w-full py-3 bg-[#4E342E] text-white font-bold rounded-2xl 
                       hover:bg-[#3E2723] transition duration-200 shadow-md shadow-[#4E342E]/30">
                UPDATE ACCOUNT
            </button>

        </form>
        <!-- Delete Account Button -->
        <form action="{{ route('deleteprofile', $user->id) }}" method="POST" id="deleteForm" class="mt-4">
            @csrf
            @method('DELETE')

            <button
                type="button"
                onclick="confirmDelete()"
                class="w-full py-3 bg-red-600 text-white font-bold rounded-2xl 
                    hover:bg-red-700 transition duration-200 shadow-md shadow-red-300">
                DELETE ACCOUNT
            </button>
        </form>

        <p class="text-center text-[#6D4C41] dark:text-[#A1887F] text-sm mt-6">
            <a href="{{ route('profile', $user->id) }}" class="text-[#4E342E] dark:text-[#FDF8F5] font-bold hover:underline">
                Back to Profile &lt;-
            </a>
        </p>
    </div>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            })
        }
    </script>
</x-guest-layout>
