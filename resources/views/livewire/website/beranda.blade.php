<div>
    <section class="container px-2 py-3 mx-auto md:px-0">
        <div class="w-full h-[200px] md:h-[500px] overflow-hidden rounded-xl mb-3 md:mb-6 relative shadow-md">
            <img src="{{ asset('storage/image/' . ($beranda[1] ? $beranda[1]->gambar : 'default.png')) }}" alt=""
                class="object-cover w-full h-full">
            <a href="{{ url('pages/' . ($beranda[1] ? $beranda[1]->slug : '')) }}"
                class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                {{ $beranda[1] ? $beranda[1]->nama : 'Pie Susu' }}
            </a>
        </div>
        <div class="w-full h-full gap-6 mt-5 md:flex">
            <div class="w-full h-[200px] md:w-1/2 md:h-[500px] overflow-hidden rounded-xl mb-3 relative shadow-md">
                <img src="{{ asset('storage/image/' . ($beranda[2] ? $beranda[2]->gambar : 'default.png')) }}"
                    alt="" class="object-cover w-full h-full">
                <a href="{{ url('pages/' . ($beranda[2] ? $beranda[2]->slug : '')) }}"
                    class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                    {{ $beranda[2] ? $beranda[2]->nama : 'Special' }}
                </a>
            </div>
            <div class="flex flex-col gap-6 md:w-1/2 md:h-[500px]">
                <div class="w-full h-[200px] md:h-full overflow-hidden rounded-xl relative shadow-md mt-3 md:mt-0">
                    <img src="{{ asset('storage/image/' . ($beranda[3] ? $beranda[3]->gambar : 'default.png')) }}"
                        alt="" class="object-cover w-full h-full">
                    <a href="{{ url('/pages/daftar-produk') }}"
                        class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                        {{ $beranda[3] ? $beranda[3]->nama : 'Produk' }}
                    </a>
                </div>
                <div class="w-full h-[200px] md:h-full overflow-hidden rounded-xl relative shadow-md">
                    <img src="{{ asset('storage/image/' . ($beranda[4] ? $beranda[4]->gambar : 'default.png')) }}"
                        alt="" class="object-cover w-full h-full">
                    <a href="{{ url('pages/' . ($beranda[4] ? $beranda[4]->slug : '')) }}"
                        class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                        {{ $beranda[4] ? $beranda[4]->nama : 'Jajanan' }}
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-6 mt-5 md:flex-row">
            <div class="w-full h-[200px] md:h-[300px]  overflow-hidden rounded-xl relative shadow-md">
                <img src="{{ asset('storage/image/' . ($beranda[5] ? $beranda[5]->gambar : 'default.png')) }}"
                    alt="" class="object-cover w-full h-full">
                <a href="{{ url('pages/' . ($beranda[5] ? $beranda[5]->slug : '')) }}"
                    class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                    {{ $beranda[5] ? $beranda[5]->nama : 'Danin Store' }}
                </a>
            </div>
            <div class="w-full h-[200px] md:h-[300px]  overflow-hidden rounded-xl relative shadow-md">
                <img src="{{ asset('storage/image/' . ($beranda[6] ? $beranda[6]->gambar : 'default.png')) }}"
                    alt="" class="object-cover w-full h-full">
                <a href="{{ url('pages/' . ($beranda[6] ? $beranda[6]->slug : '')) }}"
                    class="absolute top-0 left-0 p-3 text-xl text-white bg-opacity-50 rounded-br-xl lg:text-4xl lg:pb-5 bg-amber-400">
                    {{ $beranda[6] ? $beranda[6]->nama : 'Toko Rekanan' }}
                </a>
            </div>
        </div>
    </section>
    <section class="mt-6">
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@piesusudarin" data-unique-id="piesusudarin"
            data-embed-from="embed_page" data-embed-type="creator"
            style=" min-width:288px; overflow:-moz-hidden-unscrollable">
            <section> <a target="_blank" href="https://www.tiktok.com/@piesusudarin?refer=creator_embed">@dani.pie79</a>
            </section>
        </blockquote>
        <script async src="https://www.tiktok.com/embed.js"></script>
    </section>
    <section class="mt-6">
        <div class="w-full lg:w-[780px] mx-auto">
            <div class="mapswrapper"><iframe class="w-full h-[400px]" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=pie%20susu%20darin&zoom=10&maptype=roadmap"></iframe><a
                    href="https://www.taxuni.com/i9-form/">I9 Form</a>
                <style>
                    .mapswrapper {
                        background: #fff;
                        position: relative
                    }

                    .mapswrapper iframe {
                        border: 0;
                        position: relative;
                        z-index: 2
                    }

                    .mapswrapper a {
                        color: rgba(0, 0, 0, 0);
                        position: absolute;
                        left: 0;
                        top: 0;
                        z-index: 0
                    }
                </style>
            </div>
        </div>
    </section>
</div>
