<x-layout-main>

    <x-slot name='bread'>

    </x-slot>
    <x-slot name='theMenu'>
        Komponen Halaman
    </x-slot>

    <div class="w-full">

        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">

                @livewire('admin.page-component', ['id_id' => $dari_danin->id])
            </div>
            <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
                <div class="py-2 border-b">
                    Buat Komponen
                </div>
                <div class="py-2">
                    <div class="flex flex-row items-center justify-start">
                        <h3 class="w-4/12 py-2">Nama Halaman :</h3>
                        <p>{{ $dari_danin->nama }}</p>
                    </div>
                    <div class="flex flex-row items-center justify-start">
                        <h3 class="w-4/12 py-2">Posisi :</h3>
                        <p>{{ $dari_danin->posisi }}</p>
                    </div>
                </div>
            </div>

        </div>



    </div>

</x-layout-main>
