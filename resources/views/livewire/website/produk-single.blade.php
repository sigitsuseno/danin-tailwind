<div class="container px-2 py-8 mx-auto md:px-0">

    <div class="flex flex-col gap-4 md:flex-row">

        <div class="flex flex-col w-full md:w-8/12">

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

            <div class="flex flex-col w-full gap-4 md:flex-row">
                <div class="w-full md:w-5/12 h-60">
                    <section class="relative w-full mb-3 overflow-hidden shadow-md h-52 md:h-60 rounded-xl md:mb-6">
                        <img src="{{ asset('storage/image/' . $danin_page->gambar) }}" alt=""
                            class="object-cover w-full h-full">
                    </section>
                </div>

                <div class="flex flex-col w-full md:w-7/12">
                    <p>
                        {{ $danin_page->informasi }}
                    </p>

                </div>

            </div>
        </div>
        <div class="w-full p-2 md:w-4/12">
            <div class="flex flex-col w-full px-4 pb-3 mb-4 bg-orange-300 rounded-xl">
                <h3 class="py-2 mb-3 text-2xl font-bold border-b">Dapatkan Produk</h3>


                <div class="flex flex-col w-full rounded-lg bg-orange-50">
                    <a href="https://wa.me/6282225403629"
                        class="px-4 py-1.5 hover:bg-orange-200 rounded-lg flex flex-row items-center gap-4">
                        <div class="w-12 h-12 overflow-hidden">
                            <img src="/image/wa.png" alt="">
                        </div>
                        <p class="text-xl font-bold">Hubungi Customer Care Kami</p>
                    </a>

                </div>

            </div>

            <div class="flex flex-col w-full px-4 pb-3 bg-orange-300 rounded-xl">
                <h3 class="py-2 mb-3 text-2xl font-bold border-b">Produk Terkait</h3>

                @forelse ($danin_produk as $list_p)
                    @if ($list_p->nama != $danin_page->nama)
                        <div class="flex flex-col w-full rounded-lg bg-orange-50">
                            <a href="#" class="px-4 py-1.5 hover:bg-orange-200 rounded-lg">
                                {{ $list_p->nama }}
                            </a>
                        </div>
                    @endif
                @empty

                    <div class="flex flex-col w-full rounded-lg bg-orange-50">
                        test
                    </div>
                @endforelse
            </div>

        </div>

    </div>

</div>
