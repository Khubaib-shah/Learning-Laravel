@if (session('message'))
    <div x-data="{ show: false }" x-init="
                            show = true;
                            setTimeout(() => show = false, 3000);
                        " x-show="show" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-500" x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-full opacity-0"
        class="bg-green-500 text-white px-4 py-2 rounded shadow-md fixed top-0 left-1/2 transform -translate-x-1/2 mt-2">
        {{ session('message') }}
    </div>
@endif