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
        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full md:w-1/2">
                @if ($danin_page->informasi)
                    <p class="py-8 text-justify">
                        {{ $danin_page->informasi }}

                    </p>
                @endif
            </div>
            <div class="flex flex-col w-full py-8 md:w-1/2">
                <h3 class="text-4xl font-extrabold text-center tgr">Hubungi Kami :</h3>
                <a href="{{ $danin_page->kode }}"
                    class="w-[380px] mx-auto px-4 py-1.5 hover:bg-orange-200 rounded-lg flex flex-row justify-center items-center gap-4">
                    <div class="w-12 h-12 overflow-hidden">
                        <img src="/image/wa.png" alt="">
                    </div>
                    <p class="text-xl font-bold">Customer Care Kami</p>
                </a>
            </div>
        </div>
    @else
        <!-- untuk Halaman danin -->
        <section class="flex flex-col w-full py-4">
            @if ($danin_page->informasi)
                <p class="pb-12 text-center">
                    {{ $danin_page->informasi }}
                </p>
            @endif
            @forelse ($danin_page->daninSubs as $dpsub)
                <div class="grid w-full grid-cols-1 gap-4 p-3 py-3 bg-white md:grid-cols-2 rounded-xl">

                    <div class="relative w-full overflow-hidden bg-white rounded-xl md:h-80 h-60">
                        <a href="{{ $dpsub->slug }}" class="w-full h-full overflow-hidden">
                            <img src="{{ asset('storage/image/' . $dpsub->gambar) }}" alt=""
                                class="object-cover w-full h-full">
                            <h2
                                class="absolute left-0 right-0 px-4 py-1 font-bold text-center text-white bg-orange-600 bottom-2">
                                {{ $dpsub->nama }}
                            </h2>
                        </a>
                    </div>
                    <div class="relative w-full overflow-hidden bg-white rounded-xl md:h-80 h-60">
                        <h3 class="mb-4 text-2xl">{{ $dpsub->nama }}</h3>
                        <p class="text-ellipsis">{{ $dpsub->informasi }}</p>
                    </div>
                </div>
            @empty
                <div class="text-center"> Belum Ada</div>
            @endforelse
        </section>
    @endif



</div>
