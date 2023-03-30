<x-guest-layout>
    <x-slot name="title">Eventos</x-slot>
    <div class="header-session"><h1>NOSSOS EVENTOS</h1></div>
    <section class="events-all page">
        <div class="container">
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-9">
                    <div class="grid gap-4">
                        @for ($i = 1; $i <= 4; $i++)
                        <a href="{{ route('event') }}" class="grid grid-cols-12 h-48 transition hover:scale-105 rounded-lg overflow-hidden shadow-lg hover:shadow-fuchsia-900 bg-sky-100 z-50">
                            <div class="col-span-3 h-48 border-r-4 border-white border-dashed bg-center bg-cover relative" style="background-image: url({{ asset('img/events/aniversario.jpg') }});">
                                <div class="backdrop-blur-sm flex justify-center items-center absolute w-full h-full"><img src="{{ asset('img/events/aniversario.jpg') }}" alt="..." class="max-h-full max-w-full"></div>
                            </div>
                            <div class="col-span-9 h-48 bg-slate-500/50 p-1">
                                <div class="bg-white grid grid-cols-12 h-full w-full rounded-md">
                                    <div class="col-span-3 flex justify-center items-center">
                                        <div class="text-center bg-slate-700 rounded-lg px-6 py-2 text-white">
                                            <div class="text-sm">2022</div>
                                            <div class="text-3xl font-bold">28</div>
                                            <div class="text-sm">Agosto</div>
                                        </div>
                                    </div>
                                    <div class="col-span-9 flex items-center">
                                        <div>
                                            <div class="text-xl" style="font-family: Vollkorn-SemiBold;">TITULO DO EVENTO</div>
                                            <div class="text-white py-1 px-4 bg-sky-900 rounded-md text-sm">(21) 97276-5535 || secretaria@pibinga.org.br</div>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>

                <div class="col-span-3">
                    <div class="grid gap-4 bg-white/50 backdrop-blur-sm p-2 rounded-lg" style="box-shadow: 0 10px 20px 2px rgba(0, 0, 0,.5)">
                        <h2 class="text-center text-lg pt-4">EVENTOS REALIZADOS</h2>
                        <hr>
                        @for ($i = 1;$i <= 3; $i++)
                        <a href="{{ route('activity') }}" class="h-52 bg-cover bg-center relative rounded-md overflow-hidden" style="background-image: url({{ asset('img/news/1.JPG') }});">
                            <div class="backdrop-blur-sm flex justify-center items-center absolute w-full h-full top-0 rounded-md overflow-hidden"><img src="{{ asset('img/news/1.JPG') }}" alt="..." class="max-h-full max-w-full"></div>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
