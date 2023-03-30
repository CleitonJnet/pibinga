<x-guest-layout>
    <div class="header-session"><h1>TITULO DO EVENTO</h1></div>


    <section class="page">
        <div class="container">
            <div class="grid gap-8">
                <div class="grid grid-cols-12 rounded-lg overflow-hidden">
                    <div class="col-span-4 h-[26rem] bg-center bg-cover relative" style="background-image: url({{ asset('img/events/aniversario.jpg') }});">
                        <div class="backdrop-blur-sm flex justify-center items-center absolute w-full h-full"><img src="{{ asset('img/events/aniversario.jpg') }}" alt="..." class="max-h-full max-w-full"></div>
                    </div>
                    <div class="col-span-8 bg-slate-900/80 p-4">
                        <div class="h-full w-full bg-slate-100 rounded-md px-6 pb-6 relative">
                            <div class="bg-slate-900/80 rounded-b-xl text-white text-xl pb-2 w-80 text-center" style="margin-left: calc( 50% - 320px/2 )">
                                <div class="font-bold mb-1">28 de agosto de 2022</div>
                                <div class="text-sm italic">das 19:00 às 21:00</div>
                            </div>
                            <div class="">
                                <strong>Descrição:</strong>
                                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id unde dolore enim dolorum repellat officia, doloremque harum cum aperiam? Officia, similique. Quis adipisci perferendis quibusdam dolores perspiciatis, nam libero pariatur.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden bg-slate-900/80 p-4">
                    <div class="h-full w-full bg-slate-100 rounded-md px-6 pb-6 relative">
                        <div class="bg-slate-900/80 rounded-b-xl text-white text-lg pb-1 w-80 text-center" style="margin-left: calc( 50% - 320px/2 )">
                            <div class="mb-1">Programação:</div>
                        </div>

                        <div class="">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
