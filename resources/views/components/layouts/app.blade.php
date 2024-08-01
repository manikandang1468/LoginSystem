<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Login System' }}</title>
    
    @vite('resources/css/app.css')
</head>

<body>

    <div class="w-screen h-dvh">
        {{ $slot }}

        {{-- Notification Toster --}}
        @if (Session::has('message'))
            <div x-data="HandleMessage" :class="open ? 'block':'hidden'"
                class="absolute top-4 right-5 w-auto h-12 bg-emerald-400 rounded-md flex justify-center items-center px-3 text-white gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 16 16">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M14.25 8.75c-.5 2.5-2.385 4.854-5.03 5.38A6.25 6.25 0 0 1 3.373 3.798C5.187 1.8 8.25 1.25 10.75 2.25" />
                        <path d="m5.75 7.75l2.5 2.5l6-6.5" />
                    </g>
                </svg>
                {{ Session::get('message') }}
            </div>
        @endif
    </div>

    {{-- Iconify Script --}}
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>

    {{-- Notification Script --}}
    <script>
        function HandleMessage() {
            return {
                open: true,

                init() {
                    setTimeout(() => {
                        this.open = false
                    }, 1200);
                }
            }
        }
    </script>
</body>

</html>
