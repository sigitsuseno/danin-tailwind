<div class="container px-2 py-3 mx-auto md:px-0">

    <section class="w-full h-[200px] md:h-[600px] overflow-hidden rounded-xl mb-3 md:mb-6 relative shadow-md">
        <img src="{{ asset('storage/image/' . $danin_page->gambar) }}" alt="" class="object-cover w-full h-full">
    </section>
    <section class="flex flex-col w-full py-8">
        <h1 class="text-4xl md:text-[4rem] text-center ghr text-orange-950 mb-4">

            @if (str_word_count($danin_page->nama) < 2)
                <div class="tracking-widest">
                    {{ $danin_page->nama }}
                </div>
            @else
                {{ $danin_page->nama }}
            @endif
        </h1>
        <img src="{{ asset('/img/under.png') }}" alt="" class="w-40 m-auto md:w-48">

    </section>


    @if ($danin_page->danin_id)
        <div class="flex flex-col items-center w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full md:w-1/2">
                @if ($danin_page->informasi)
                    <p class="py-8 text-center">
                        {{ $danin_page->informasi }}
                    </p>
                @endif
            </div>
            <div class="flex flex-col w-full md:w-1/2">
                test
            </div>
        </div>
    @else
        <!-- untuk Halaman danin -->
        <section class="flex flex-col w-full py-8">
            @if ($danin_page->informasi)
                <p class="py-8 text-center">
                    {{ $danin_page->informasi }}
                </p>
            @endif
            <div class="grid w-full grid-cols-2 gap-3 md:grid-cols-4">

                @forelse ($danin_page->daninSubs as $dpsub)
                    <div class="relative w-full overflow-hidden bg-white rounded-xl aspect-square">

                        <a href="{{ $dpsub->slug }}" class="w-full h-full">
                            <img src="{{ asset('storage/image/' . $dpsub->gambar) }}" alt="">
                            <h2
                                class="absolute left-0 right-0 px-4 py-1 font-bold text-center text-white bg-orange-600 bottom-2">
                                {{ $dpsub->nama }}
                            </h2>
                        </a>

                    </div>
                @empty
                @endforelse
            </div>
        </section>
    @endif



</div>
