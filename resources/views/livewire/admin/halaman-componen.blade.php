<div class="flex flex-col w-full gap-4 md:flex-row">
    <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
        <div class="py-2 border-b">
            Buat Komponen
        </div>

        <div class="py-2">
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

                @forelse ($hal_com as $hal)
                    <div class="relative flex flex-row items-center justify-between w-full gap-4 p-2 border-b ">
                        <div class="w-3/12">
                            <div class="w-full overflow-hidden h-[50px]">
                                <img src="{{ asset('storage/image/' . $hal->gambar) }}" alt=""
                                    class="object-cover w-full h-full">
                            </div>
                        </div>
                        <div class="w-4/12">
                            {{ $hal->nama }}
                        </div>
                        <div class="w-3/12">
                            {{ $hal->posisi }}
                        </div>
                        <div class="w-2/12 ">

                            <a href="{{ url('dashboard/pages/component/' . $hal->id) }}"
                                class="block w-full px-2 py-1 text-white bg-orange-500 rounded-lg ">
                                Komponen
                            </a>

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

        </div>
    </div>

</div>
