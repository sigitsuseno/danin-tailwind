<div class="w-full">

    <div class="flex flex-col w-full gap-4 md:flex-row">
        <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">

            <div>
                <div>

                    {{-- <button x-on:click="open = ! open" class="px-4 py-2 bg-orange-500 rounded-lg"> Tambah Gambar </button> --}}
                    @if ($handle == 'default')
                        <button wire:click='handleButton("dibuka")'
                            class="px-4 py-2 text-white bg-orange-500 rounded-lg "> Tambah
                            Component
                        </button>
                    @endif

                </div>
                @if ($handle == 'dibuka')
                    <x-modale>
                        <div>
                            <div class="relative flex items-center justify-center w-full h-screen ">

                                <button wire:click='handleButton("default")'
                                    class="absolute px-3 py-1.5 bg-orange-200 rounded-lg right-4 top-4">
                                    <i class="fa-solid fa-x"></i>
                                </button>

                                <div class="w-full p-2 bg-white rounded-lg md:w-1/2">
                                    <div class="flex flex-row flex-wrap justify-start w-full gap-3 p-4 bg-orange-50">
                                        @forelse ($galeri_gambar as $gambar_gg)
                                            <div class="h-full p-2 bg-white rounded-md">
                                                <div class="w-24 h-24 overflow-hidden gambarrrrrrr">
                                                    <img src="{{ asset($gambar_gg->image_thumb) }}" alt=""
                                                        class="block object-cover w-full h-full">
                                                </div>
                                                <div class="flex flex-row items-center justify-center gap-4">
                                                    <button wire:click='gambarTerpilih({{ $gambar_gg->id }})'
                                                        type="submit" class="tombolex">
                                                        Pilih
                                                    </button>
                                                </div>
                                            </div>
                                        @empty
                                            Belum ada gambar
                                        @endforelse

                                    </div>
                                </div>

                            </div>
                        </div>
                    </x-modale>
                @endif

            </div>

            @if ($handle == 'buatComponen')

                <div class="pt-6">
                    <form>
                        <div class="mb-3">
                            <div class="w-24 h-24 overflow-hidden border border-orange-900 rounded-lg">
                                @if ($image)
                                    <img src="{{ asset($image) }}" alt="" class="object-cover w-full h-full">
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="name" class="w-full">Nama :</label>
                            <input wire:model='name' type="text" id="name"
                                class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
                            @error('name')
                                <span class="text-sm text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="link" class="w-full">Link :</label>
                            <input wire:model='link' type="text" id="link"
                                class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
                            @error('link')
                                <span class="text-sm text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button wire:click.prevent='saveComponent()'
                                class="px-4 py-2 text-white bg-orange-500 rounded-lg">
                                Save
                                Component
                            </button>
                        </div>
                    </form>
                </div>
            @elseif ($handle == 'editComponen')
                <div class="pt-6">
                    <form>
                        <div class="mb-3">
                            <div class="w-24 h-24 overflow-hidden border border-orange-900 rounded-lg">
                                @if ($image)
                                    <img src="{{ asset($image) }}" alt="" class="object-cover w-full h-full">
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="name" class="w-full">Nama :</label>
                            <input wire:model='name' type="text" id="name"
                                class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
                            @error('name')
                                <span class="text-sm text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="link" class="w-full">Link :</label>
                            <input wire:model='link' type="text" id="link"
                                class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
                            @error('link')
                                <span class="text-sm text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button wire:click.prevent='saveRemove()'
                                class="px-4 py-1.5 text-white bg-red-900 rounded-lg">

                                Remove
                            </button>
                            <button wire:click.prevent='simpanEdit()'
                                class="px-4 py-1.5 text-white bg-orange-500 rounded-lg">
                                Save
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            @endif

        </div>
        <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
            <div class="py-2 border-b">
                Buat Komponen
            </div>
            <div class="py-2">
                <div class="flex flex-row items-center justify-start">
                    <h3 class="w-4/12 py-2">Nama Halaman :</h3>
                    <p>{{ $galGam->nama }}</p>
                </div>
                <div class="flex flex-row items-center justify-start">
                    <h3 class="w-4/12 py-2">Posisi :</h3>
                    <p>{{ $galGam->posisi }}</p>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="grid grid-cols-[1.5rem,3rem,1fr,4rem] items-center gap-2">
                    @forelse ($galGam->images as $dni)
                        <div>
                            {{ $loop->iteration }}
                        </div>
                        <div class="w-10 h-10 overflow-hidden ">
                            <img src="{{ asset($dni->image) }}" alt="" class="object-cover w-full h-full">
                        </div>
                        <div>
                            {{ $dni->link }}
                        </div>
                        <div>
                            <button wire:click='editComponent({{ $dni->id }})'
                                class="px-2 py-1 bg-orange-500 rounded-lg"><i class="fa-regular fa-pen-to-square"></i> /
                                <i class="fa-solid fa-x"></i></button>

                        </div>
                    @empty
                        <div>
                            Belum ada Komponen
                        </div>
                    @endforelse


                </div>
            </div>
        </div>

    </div>
</div>
