<div class="size-full bg-slate-200 flex justify-center items-center">
    <div class="h-4/5 w-4/5 bg-white flex items-center rounded-md overflow-hidden">
        
        {{-- Image Side --}}
        <div class="max-sm:hidden md:w-1/2 h-full">
            <img class="size-full object-cover object-center" src="https://wallpapercave.com/wp/wp14262529.jpg"
                alt="">
        </div>

        {{-- Signup Form --}}
        <div class="max-sm:w-full md:w-1/2 h-full flex justify-center items-start px-10 flex-col">
            <h1 class=" text-xl font-bold">Sing Up</h1>
            <p class="text-sm font-light  mt-3">Enter your email and password to Register</p>
            <div class="w-full h-auto flex gap-y-1 flex-col mt-5">
                <label class=" font-semibold " for="">Name</label>
                <input wire:model='name' class="py-2 px-4 border rounded-sm outline-none border-gray-300"
                    type="text">
                <p class="text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="w-full h-auto flex gap-y-1 flex-col mt-5">
                <label class=" font-semibold " for="">Email</label>
                <input wire:model='email' class="py-2 px-4 border rounded-sm outline-none border-gray-300"
                    type="text">
                <p class="text-red-500">
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div x-data="{ open: false }" class="w-full h-auto flex gap-y-1 flex-col mt-5">

                <label class=" font-semibold ">Password</label>
                <div class="w-full h-full relative">
                    <input wire:model='password' class="py-2 px-4 w-full border rounded-sm outline-none border-gray-300"
                        :type="open ? 'text' : 'password'">

                    <div @click="open = !open"
                        class="w-full h-auto absolute flex top-1/2 -translate-y-1/2 items-center justify-end px-5">
                        <iconify-icon :icon="open ? 'tabler:eye' : 'tabler:eye-off'"></iconify-icon>
                    </div>
                </div>

                <p class="text-red-500">
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>

            </div>
            <button wire:click='save' class="w-full py-2 rounded-sm text-white font-semibold bg-blue-600 mt-6">Sign
                Up</button>
            <p class="text-sm mt-3">Already have on account? <a class="text-sm text-blue-600" wire:navigate
                    href="/login">Login</a></p>
        </div>
        
    </div>
</div>
