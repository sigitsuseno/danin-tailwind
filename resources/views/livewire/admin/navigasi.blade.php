<div>
    <div class="flex items-center w-full pt-16 h-52">
        <div class="w-[270px] mx-auto md:w-[300px] xl:w-[350px]">
            <a href="/" class="w-2/3 md:w-1/2">
                <img src="{{ asset('asset/img/logo-leter.png') }}" alt="">
            </a>
            <div class="mt-5 text-center">
                <span class="text-[20px] font-medium ">Produsen Pie Susu Asli</span> <br>
                <span class="text-[16px] font-medium ">Open for franchise & private
                    labels</span>
            </div>
        </div>
    </div>
    <nav
        class="relative flex items-center justify-between w-full p-4 transition duration-500 rounded-md shadow-lg h-14 mt-7 hover:bg-orange-200">
        <div class="flex gap-4">
            <button id="tomb_menu"
                class="lg:hidden px-5 py-2 bg-[brown] text-[white] font-bold tracking-wide hover:bg-[#701c11] cursor-pointer transition duration-500 rounded-lg">
                Menu
            </button>
            <ul
                class="mau turun absolute z-20 top-[100%] bg-orange-200 lg:bg-transparent lg:relative lg:flex lg:justify-start lg:align-middle lg:gap-3 xl:gap-8 p-2">

                <li class="flex items-center h-14">
                    <a href="{{ url('pages/' . ($navis[1] ? $navis[1]->slug : '')) }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[1] ? $navis[1]->nama : 'Pie Susu' }}
                    </a>
                </li>
                <li class="flex items-center h-14">
                    <a href="{{ url('pages/' . ($navis[2] ? $navis[2]->slug : '')) }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[2] ? $navis[2]->nama : 'Special' }}
                    </a>
                </li>
                <li class="flex items-center h-14">
                    <a href="{{ url('/produks') }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[3] ? $navis[3]->nama : 'Produk' }}
                    </a>
                </li>
                <li class="flex items-center h-14">
                    <a href="{{ url('pages/' . ($navis[4] ? $navis[4]->slug : '')) }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[4] ? $navis[4]->nama : 'Jajanan' }}
                    </a>
                </li>
                <li class="flex items-center h-14">
                    <a href="{{ url('pages/' . ($navis[5] ? $navis[5]->slug : '')) }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[5]
                            ? $navis[5]->nama
                            : 'Danin
                                                                                                                                                                                                                                                                                                Store' }}
                    </a>
                </li>
                <li class="flex items-center h-14">
                    <a href="{{ url('pages/' . ($navis[6] ? $navis[6]->slug : '')) }}"
                        class="px-3 py-2 hover:bg-[brown] transition duration-500 rounded-lg block w-full hover:text-white">{{ $navis[6]
                            ? $navis[6]->nama
                            : 'Toko
                                                                                                                                                                                                                                                                                                Rekanan' }}
                    </a>
                </li>


            </ul>
        </div>

        <div class="flex gap-3">
            <a href="https://wa.me/6282225403629"
                class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                <img src="/asset/img/whatsapp-svgrepo-com.svg" alt="" class="object-contain w-full h-full">
            </a>
            <a href="https://www.instagram.com/piesusudanin/"
                class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                <img src="/asset/img/instagram-svgrepo-com.svg" alt="" class="object-contain w-full h-full">
            </a>
            <a href="https://www.facebook.com/piesusu.darin"
                class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                <img src="/asset/img/facebook-svgrepo-com.svg" alt="" class="object-contain w-full h-full">
            </a>
            <a href="https://www.youtube.com/watch?v=oIEm8bJP0LE"
                class="w-8 h-8 p-1 overflow-hidden transition duration-500 hover:bg-white hover:rounded-lg">
                <img src="/asset/img/youtube-svgrepo-com.svg" alt="" class="object-contain w-full h-full">
            </a>
        </div>

    </nav>
</div>
