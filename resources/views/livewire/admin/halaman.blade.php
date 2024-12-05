<div class="flex flex-col w-full gap-4 p-2 md:flex-row">

    <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
        <h2 class="pb-4 mb-3 text-lg font-bold border-b border-orange-950">Tambah Page</h2>
        {{-- <div class="w-full overflow-x-auto">
            @php
                $jh = count($halamans);
            @endphp
            @if ($jh)
                <div
                    class="flex items-center justify-center w-20 h-20 mb-4 border border-dashed rounded-lg border-orange-950">
                    <img alt="">
                </div>
            @endif


            <div
                class="flex items-center justify-center w-20 h-20 mb-4 border border-dashed rounded-lg border-orange-950">
                <button wire:click="handleButton('bukamodal')"> Tambah Gambar </button>
            </div>
        </div>
        @if ($handle == 'bukamodal')
            <x-modale>
                <div class="relative flex items-center justify-center w-full h-screen ">

                    <button wire:click='tutupModal()'
                        class="absolute px-3 py-1.5 bg-orange-200 rounded-lg right-4 top-4">
                        <i class="fa-solid fa-x"></i>
                    </button>

                    <div class="w-full p-2 bg-white rounded-lg md:w-1/2">
                        <div class="w-full p-3 bg-white ">
                            <div class="tampilin_img">
                            </div>
                            <form>
                                <div class="prefffff">
                                    <img alt="" class="object-cover w-full h-full gggg">
                                </div>
                                <input id="in_gam" name="image" type="file" class="w-full mb-4">

                                <div class="mb-3">
                                    <label for="name">Nama Image</label>
                                    <input id="name" name="name" type="text"
                                        class="w-full px-4 py-1.5 rounded-md bg-orange-50 border">
                                </div>
                                <div class="text-end">
                                    <button class="px-4 py-2 bg-orange-700">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </x-modale>
        @endif --}}
        <form wire:submit.prevent='create'>
            <div class="mb-3">
                <div class="flex flex-row items-center gap-4 ">
                    <div class="w-1/2 h-24 overflow-hidden border border-orange-900 border-dashed rounded-lg">
                        @if ($gambar)
                            <img src="{{ $gambar->temporaryUrl() }}" alt="" class="object-cover w-full h-full">
                        @endif
                    </div>
                    <input wire:model='gambar' type="file" class="w-1/2">
                </div>
                @error('gambar')
                    <span class="text-sm text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="flex flex-col mb-3">
                <label for="nama" class="w-full">Nama Halaman :</label>
                <input wire:model='nama' type="text" id="nama"
                    class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
                @error('nama')
                    <span class="text-sm text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="flex flex-col mb-3">
                <label for="select" class="w-full">Posisi :</label>
                <select wire:model.live='posisi' id="select" class="px-4 py-2 border rounded-lg bg-orange-50 ">

                    <option>Pilih</option>
                    @foreach ($posisis as $posi)
                        <option value="{{ $posi->value }}">{{ $posi->name }}</option>
                    @endforeach

                </select>
                @error('posisi')
                    <span class="text-sm text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            @if ($posisi == 'sub')
                <div class="flex flex-col mb-3">
                    <label for="danin_id" class="w-full">Sub dari :</label>
                    <select wire:model='danin_id' id="danin_id" class="px-4 py-2 border rounded-lg bg-orange-50 ">

                        <option>Pilih</option>
                        @foreach ($halamans as $hal)
                            <option value="{{ $hal->id }}">{{ $hal->nama }}</option>
                        @endforeach

                    </select>
                    @error('posisi')
                        <span class="text-sm text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            @endif

            <div class="flex flex-col mb-3">
                <label for="kode" class="w-full">Kode HTML :</label>
                <textarea wire:model='kode' rows="4" type="text" id="kode"
                    class="px-4 py-1.5 rounded-lg bg-orange-50 border "></textarea>
                @error('kode')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="flex flex-col mb-3">
                <label for="informasi" class="w-full">Konten :</label>
                <textarea wire:model='informasi' rows="4" type="text" id="informasi"
                    class="px-4 py-1.5 rounded-lg bg-orange-50 border "></textarea>
                @error('informasi')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="text-end">
                <button class="px-4 py-2 bg-orange-600 rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
    <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
        <div class="flex flex-row gap-4 pb-4 mb-3 font-bold border-b border-orange-950">
            <h2 wire:click='handleButton("list-page")' class="text-lg cursor-pointer">List Page</h2>
            <h2 wire:click='handleButton("list-sub")' class="text-lg cursor-pointer">List Sub</h2>
        </div>

        @if ($handle == 'list-page')
            <div class="w-full h-full">
                <div
                    class="flex flex-row items-center justify-between w-full gap-4 px-2 py-1 bg-orange-100 border border-b-orange-950">
                    <div class="w-3/12">
                        Gambar
                    </div>
                    <div class="w-4/12">
                        Nama Halaman
                    </div>
                    <div class="w-3/12">
                        test
                    </div>
                    <div class="w-2/12">
                        test
                    </div>
                </div>

                @forelse ($halamans as $hal)
                    <div class="flex flex-row items-center justify-between w-full gap-4 p-2 border-b">
                        <div class="w-3/12">
                            <div class="w-full h-full overflow-hidden">
                                <img src="{{ asset('storage/image/' . $hal->gambar) }}" alt="">
                            </div>
                        </div>
                        <div class="w-4/12">
                            {{ $hal->nama }}
                        </div>
                        <div class="w-3/12">
                            {{ $hal->posisi }}
                        </div>
                        <div class="relative w-2/12">

                            <button wire:click='menuOpen()' class="px-2 py-1 text-white bg-orange-700 rounded-lg ">
                                Menu
                            </button>

                            @if ($handle_sub == 'bukabu')
                                <div class="absolute top-[110%] right-0 flex flex-col gap-1">
                                    <button class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Edit
                                    </button>
                                    <a href="{{ url('dashboard/pages/' . $hal->id) }}"
                                        class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Komponen
                                    </a>
                                    <button wire:click='delete' class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Hapus
                                    </button>
                                </div>
                            @endif

                        </div>
                    </div>

                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th colspan="4" scope="row"
                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                            Belum ada data
                        </th>

                    </tr>
                @endforelse

            </div>
        @elseif ($handle == 'list-sub')
            <div class="w-full h-full">
                <div
                    class="flex flex-row items-center justify-between w-full gap-4 px-2 py-1 bg-orange-100 border border-b-orange-950">
                    <div class="w-3/12">
                        Gambar
                    </div>
                    <div class="w-4/12">
                        Nama Halaman
                    </div>
                    <div class="w-3/12">
                        test
                    </div>
                    <div class="w-2/12">
                        test
                    </div>
                </div>

                @forelse ($hal_sub as $sub)
                    <div class="flex flex-row items-center justify-between w-full gap-4 p-2 border-b">
                        <div class="w-3/12">
                            <div class="w-full h-full overflow-hidden">
                                <img src="{{ asset('storage/image/' . $sub->gambar) }}" alt="">
                            </div>
                        </div>
                        <div class="w-4/12">
                            {{ $sub->nama }}
                        </div>
                        <div class="w-3/12">
                            {{ $sub->posisi }}
                        </div>
                        <div class="relative w-2/12">

                            <button wire:click='menuOpen()' class="px-2 py-1 text-white bg-orange-700 rounded-lg ">
                                Menu
                            </button>

                            @if ($handle_sub == 'bukabu')
                                <div class="absolute top-[110%] right-0 flex flex-col gap-1">
                                    <button class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Edit
                                    </button>
                                    <a href="{{ url('dashboard/pages/' . $sub->id) }}"
                                        class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Komponen
                                    </a>
                                    <button wire:click='delete'
                                        class="px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                        Hapus
                                    </button>
                                </div>
                            @endif

                        </div>
                    </div>

                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th colspan="4" scope="row"
                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                            Belum ada data
                        </th>

                    </tr>
                @endforelse

            </div>
        @endif



    </div>
</div>
