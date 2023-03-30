<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-lg border border-white/20" style="box-shadow: 0 0 25px 4px rgb(25, 0, 25);">
            @isset($session_title)
            <div class="bg-sky-900 text-white p-3 flex justify-between items-center">
                <div class="font-bold text-lg">{{ $session_title }}</div>
                <div><a href="{{ route($route) }}" class="text-sm bg-slate-900 hover:bg-slate-800 focus:bg-black px-6 py-2 rounded-md">Novo</a></div>
            </div>
            @endif
            <div class="bg-white">{{ $slot }}</div>
        </div>
    </div>
</div>
