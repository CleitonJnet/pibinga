<x-content-page route="system.ministeries.create">
    <x-slot name="session_title">Lista de Ministérios</x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 p-2">
        @foreach ($ministeries as $ministery)
        <a href="{{ route('system.ministeries.show',$ministery->id) }}" class="rounded-lg overflow-hidden bg-slate-800 text-white p-2 hover:scale-105 transition-transform">
            <div class="p-1">
                <div class="font-semibold text-center truncate">{{ $ministery->name }}</div>
            </div>
            <div class="h-44 bg-center bg-cover rounded-md" style="background-image: url({{ asset($ministery->image)}})"></div>
        </a>
        @endforeach

        <div class="col-span-full">{{ $ministeries->links() }}</div>
    </div>
</x-content-page>
