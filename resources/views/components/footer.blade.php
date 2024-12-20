<footer class="px-2 py-4 mt-5 bg-orange-200 border md:px-0">
    <div class="container p-2 mx-auto">
        <div class="flex flex-col justify-between gap-3 md:flex-row">
            <div class="w-full md:w-1/3 md:h-[150px] flex items-center justify-start">
                <a href="/" class="w-4/6">
                    @if ($set_ing)
                        <img src="{{ asset('storage/' . $set_ing->logo) }}" alt="">
                    @endif
                </a>
            </div>
            <div class="w-full md:w-1/3 md:h-[150px] flex items-center md:justify-center">
                <div class="flex items-center justify-center gap-3">
                    <a href="https://wa.me/6282225403629" target="_blank"
                        class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                        <img src="/asset/img/whatsapp-svgrepo-com.svg" alt=""
                            class="object-contain w-full h-full">
                    </a>
                    <a href="https://www.instagram.com/piesusudanin/" target="_blank"
                        class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                        <img src="/asset/img/instagram-svgrepo-com.svg" alt=""
                            class="object-contain w-full h-full">
                    </a>
                    <a href="https://www.facebook.com/piesusu.darin" target="_blank"
                        class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                        <img src="/asset/img/facebook-svgrepo-com.svg" alt=""
                            class="object-contain w-full h-full">
                    </a>
                    <a href="https://www.youtube.com/watch?v=oIEm8bJP0LE" target="_blank"
                        class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                        <img src="/asset/img/youtube-svgrepo-com.svg" alt=""
                            class="object-contain w-full h-full">
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 md:h-[150px] flex items-center justify-center">
                <div class="footer_contact">
                    <span>Alamat :</span>
                    <p>{{ $set_ing->alamat }}</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="w-full h-10 text-center bg-[brown] text-white flex items-center justify-center">
    &copy;2024 <a href="/">{{ $set_ing->nama_web }}</a>
</div>
