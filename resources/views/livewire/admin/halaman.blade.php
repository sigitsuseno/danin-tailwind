<div class="flex flex-col w-full gap-4 p-2 md:flex-row">

    <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
        <h2 class="pb-4 mb-3 text-lg font-bold border-b border-orange-950">Tambah Page</h2>
        <div class="flex items-center justify-center w-full border border-dashed rounded-lg h-28 border-orange-950">
            @if ($gambar)
                <img src="" alt="" class="object-contain w-full h-full">
            @else
                <button wire:click="handleButton('bukamodal')"> Tambah Gambar </button>
            @endif
        </div>
        @if ($handle == 'bukamodal')
            <x-modale>
                <div class="w-[450px] bg-white">
                    test
                </div>
            </x-modale>
        @endif
        <form>
            <div class="flex flex-col items-baseline gap-3 mb-3">
                <input type="text" id="gambar" accept="image/*"
                    class="px-4 py-1.5 rounded-lg bg-orange-50 border w-full">
            </div>
            <div class="flex flex-col mb-3">
                <label for="name" class="w-full">Nama Halaman :</label>
                <input type="text" id="name" class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
            </div>
            <div class="flex flex-col mb-3">
                <label for="bagian" class="w-full">Bagian :</label>
                <input type="text" id="bagian" class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
            </div>

            <div class="flex flex-col mb-3">
                <label for="select" class="w-full">Layout Name :</label>
                <select id="select" class="px-4 py-2 border rounded-lg bg-orange-50 ">

                    <option value="1colom">1 colom</option>
                    <option value="2colom">2 colom</option>
                    <option value="3colom">3 colom</option>
                    <option value="2colom_event">2 colom sama</option>
                </select>
            </div>
            <div class="flex flex-col mb-3">
                <label for="xcksapd" class="w-full">Layout Name :</label>
                <input type="text" id="xcksapd" class="px-4 py-1.5 rounded-lg bg-orange-50 border ">
            </div>
        </form>
    </div>
    <div class="w-full p-3 bg-white rounded-lg shadow-md md:w-1/2">
        <h2 class="pb-4 mb-3 text-lg font-bold border-b border-orange-950">List Page</h2>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Halaman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            . . .
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-4 py-1 text-white bg-orange-700 rounded-lg ">...</button>
                            <button class="px-4 py-1 text-white bg-orange-700 rounded-lg ">...</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
