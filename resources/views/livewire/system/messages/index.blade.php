<x-content-page>
    <x-slot name="session_title">Lista de Mensagens</x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 p-2">
        @for ($i = 0;$i < 4;$i++)
        <a href="{{ route('system.ministeries.show',1) }}" class="rounded-lg overflow-hidden bg-slate-800 text-white p-2 hover:scale-105 transition-transform">
            <div class="p-1">
                <div class="font-semibold text-center truncate">{{ __('Mensagem') }}</div>
            </div>
            <div class="h-44 bg-center bg-cover rounded-md" style="background-image: url({{ asset('build/assets/thumbnail.ab524728.png')}})"></div>
        </a>
        @endfor
    </div>
</x-content-page>
