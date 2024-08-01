<div class="size-full bg-slate-200 flex flex-col items-center slide-gradient py-7 gap-y-6">
    <div class="h-20 w-[90%] bg-white/40 backdrop-blur-md rounded-xl">
        <div class="size-full max-w-[1209px] mx-auto flex justify-between items-center">
            <div class="w-auto h-full flex justify-center text-white items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M125.295 40.728C159.804 25.158 206.27 16 256.5 16s96.466 9.159 130.748 24.748C420.143 55.706 448 80 448 112v.03c-.011 5.533-3.098 13.89-12.295 24.22c-8.995 10.102-22.617 20.658-40.273 30.264C360.162 185.702 310.794 200 256 200s-104.162-14.298-139.432-33.486c-17.656-9.606-31.278-20.162-40.273-30.264C67.081 125.901 64 117.532 64 112c0-32.428 28.246-56.36 61.295-71.272" />
                    <path fill="currentColor"
                        d="M410.724 194.623c14.213-7.731 26.834-18.379 37.276-29.599V258c0 5.532-3.081 11.901-12.295 22.25c-8.995 10.102-22.617 20.658-40.273 30.264C360.162 329.702 310.794 344 256 344s-104.162-14.298-139.432-33.486c-17.656-9.606-31.278-20.162-40.273-30.264C67.081 269.901 64 263.532 64 258v-92.976c10.442 11.22 23.063 21.868 37.276 29.599C141.286 216.39 195.918 232 256 232s114.714-15.61 154.724-37.377" />
                    <path fill="currentColor"
                        d="M64 309.024V400c0 32.224 28.004 56.169 60.928 71.134C159.297 486.756 205.653 496 256 496s96.703-9.244 131.072-24.866C419.996 456.169 448 432.224 448 400v-90.976c-10.442 11.22-23.063 21.868-37.276 29.599C370.714 360.39 316.082 376 256 376s-114.714-15.61-154.724-37.377C87.063 330.892 74.442 320.244 64 309.024" />
                </svg>
                <h3 class="text-3xl font-semibold">Dash</h3>
            </div>

            <button wire:click='logout'
                class="px-4 py-2 bg-white hover:bg-white/60 text-slate-900 rounded-md flex justify-center items-center">
                Logout
            </button>
        </div>
    </div>

    <div class="size-full bg-white/50 backdrop-blur-md w-[90%] mx-auto rounded-xl flex flex-col gap-y-4 items-center justify-center">
        <h3 class="text-3xl text-white">Hi {{auth()->user()->name}}!</h3>
        <p class="text-sm text-slate-600">Welcome Back..</p>
    </div>
</div>
