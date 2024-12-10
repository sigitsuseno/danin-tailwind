<div class="container px-2 py-3 mx-auto md:px-0">
    <section class="w-full h-[200px] md:h-[600px] overflow-hidden rounded-xl mb-3 md:mb-6 relative shadow-md">
        <img src="{{ asset('storage/image/' . ($danin_menu[3] ? $danin_menu[3]->gambar : 'default.png')) }}"
            alt="" class="object-cover w-full h-full">
    </section>
    <div class="w-full my-12">
        <div class="my-4 text-4xl text-center text-orange-900 ghr">
            @if ($danin_menu[3])
                {{ $danin_menu[3]->informasi }}
            @endif
        </div>
        <img src="{{ asset('/img/under.png') }}" alt="" class="w-40 m-auto md:w-48">
    </div>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

        @forelse ($danin_produk as $danPro)
            <div class="w-full p-2 text-center bg-white rounded-xl">
                <a href="{{ url('produks/' . $danPro->slug) }}"
                    class="block w-full overflow-hidden bg-white rounded-xl h-72">
                    <img src="{{ asset('storage/image/' . $danPro->gambar) }}" alt=""
                        class="object-cover w-full h-full transition-transform hover:scale-110">
                </a>
                <h3 class="py-2 text-xl font-bold">{{ $danPro->nama }}</h3>
            </div>
        @empty
            <div class="w-full text-4xl text-center">Nantikan Produk dari kami</div>
        @endforelse

    </div>
</div>
