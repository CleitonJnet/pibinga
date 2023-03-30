<x-guest-layout>
    <x-slot name="title">Ministérios</x-slot>
    <div class="header-session"><h1>MINISTÉRIOS</h1></div>
    <section class="page">
        <div class="page-ministries">
            <div class="container">

                @foreach ($ministeries as $ministery)
                <a href="{{ route('ministery',$ministery->id) }}" style="background-image: url({{ asset($ministery->image) }})" class="ministery"> <div class="legend-title">{{ $ministery->name }}</div><div class="legend-content">{{ $ministery->description }}</div> <img src="{{ asset('img/corner-dots.svg') }}" alt="..."></a>
                @endforeach

            </div>
        </div>
    </section>
</x-guest-layout>
