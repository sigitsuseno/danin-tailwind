<div class="sc_wrapper">
    <header class="header">
        <div class="header_img">
            @if ($slide_depan)
                <img src="{{ asset('storage/image/' . $slide_depan->gambar) }}" alt="">
            @endif
        </div>
        <div class="logo">
            <img src="{{ asset('/asset/img/logo-leter.png') }}" alt="">
        </div>

        @if ($slide_depan)
            {!! $slide_depan->kode !!}
        @endif

        {{-- <div class="header_text">
            <h1 class="mt-4 text-xl text-center">Produsen Pie Susu Original</h1>
            <p class="mt-1 text-sm text-center">Penyedia kue kering high quality untuk kebutuhan supplier, acara
                special dan parsel eksklusif yang
                elegan
            </p>
        </div> --}}
    </header>

    @forelse ($slide_depan->daninSubs as $sub)
        <section class="{{ $sub->kode }}">
            <div class="img_sect">
                <img src="{{ asset('/storage/image/' . $sub->gambar) }}" alt="">
            </div>
            <div class="expl_sect">
                <div class="expl_head">
                    <span>{{ $sub->nama }}</span>
                </div>
                <div class="expl_text">
                    <p>{{ $sub->informasi }}
                    </p>
                </div>
                <div class="expl_ico">

                    @foreach ($sub->images as $img)
                        <a href="{{ $img->link }}" class="iccset">
                            <img src="{{ asset($img->image) }}" alt="">
                        </a>
                    @endforeach

                </div>
            </div>
        </section>
    @empty
    @endforelse
    <!--
    <section class="link_case_kiri">
        <div class="img_sect">
            <img src="{{ asset('img/nastar.jpg') }}" alt="">
        </div>
        <div class="expl_sect">
            <div class="expl_head">
                <span>About Us</span>
            </div>
            <div class="expl_text">
                <p>Kenali kami lebih dekat dan pelajari apa yang kami lakukan -- ayo terhubung dan berkembang
                    bersa!
                </p>
            </div>
            <div class="expl_ico">
                <a href="" class="iccset">
                    <img src="/img/fb.png" alt="">
                </a>
                <a href="" class="iccset">
                    <img src="/img/ig.png" alt="">
                </a>
                <a href="" class="iccset">
                    <img src="/img/yt.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="link_case_kanan">
        <div class="img_sect">
            <img src="{{ asset('img/nastar.jpg') }}" alt="">
        </div>
        <div class="expl_sect">
            <div class="expl_head">
                <span>About Us</span>
            </div>
            <div class="expl_text">
                <p>Lihat ulasan dari pelanggan kami, jangan ragu untuk menghubungi, kami selalu siap memberi solusi terbaik.
                </p>
            </div>
            <div class="expl_ico">
                <a href="#" class="iccset">
                    <img src="/img/ggl.png" alt="">
                </a>
                <a href="#" class="iccset">
                    <img src="/img/wa.png" alt="">
                </a>

            </div>
        </div>
    </section>
    <section class="link_case_kiri">
        <div class="img_sect">
            <img src="{{ asset('img/nastar.jpg') }}" alt="">
        </div>
        <div class="expl_sect">
            <div class="expl_head">
                <span>About sss Us</span>
            </div>
            <div class="expl_text">
                <p>Kenali kami lebih dekat dan pelajari apa yang kami lakukan -- ayo terhubung dan berkembang
                    bersa!
                </p>
            </div>
            <div class="expl_i">
                <a href="" class="iccs">
                    <img src="{{ asset('img/sp.png') }}" alt="">
                </a>
                <a href="" class="icc">
                    <img src="{{ asset('img/gf.png') }}" alt="">
                </a>
                <a href="" class="icc">
                    <img src="{{ asset('img/gbf.png') }}" alt="">
                </a>
                <a href="" class="icc">
                    <img src="{{ asset('img/psd.png') }}" alt="">
                </a>
            </div>
        </div>
    </section>
    -->

    <div class="h-14">
        .
    </div>

</div>
