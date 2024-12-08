<x-layout-main>
    <div>
        <x-slot name='bread'>
            bread
        </x-slot>
        <x-slot name='theMenu'>

        </x-slot>

        <div class="flex flex-col items-start w-full">
            <h1 class="py-2 text-2xl font-bold">Image Galeri</h1>
            <div id="media_media" class="flex flex-col items-start w-full gap-3">
                <div class="w-full">
                    <button id="btnnnnn"
                        class="flex flex-row justify-start gap-2 p-2 text-white bg-orange-700 focus:outline-2">

                        <svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M4 30.016q0 0.832 0.576 1.408t1.44 0.576h16.992q1.824 0 3.488-0.704t2.88-1.92 1.92-2.88 0.704-3.488q0-2.272-1.088-4.224t-2.912-3.232v-7.552l-8-8h-13.984q-0.832 0-1.44 0.608t-0.576 1.408v28zM8 28v-24h10.016v6.016h5.984v4.096q-0.576-0.128-0.992-0.128-1.824 0-3.488 0.736t-2.88 1.92-1.92 2.848-0.704 3.52q0 2.72 1.504 4.992h-7.52zM18.016 23.008q0-2.080 1.44-3.52t3.552-1.472 3.52 1.472 1.472 3.52-1.472 3.552-3.52 1.44-3.552-1.44-1.44-3.552zM20 24h2.016v2.016h1.984v-2.016h2.016v-1.984h-2.016v-2.016h-1.984v2.016h-2.016v1.984z">
                            </path>
                        </svg>
                        Media
                    </button>
                </div>
                <div class="w-full p-3 bg-white md:w-1/2">
                    <div class="tampilin_img">
                    </div>
                    <form action="{{ route('media.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <button type="submit" class="px-4 py-2 bg-orange-700">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full p-2 mt-2 bg-white">
                <div class="flex flex-row flex-wrap justify-start w-full gap-3 p-4 bg-orange-50">
                    @forelse ($gambar as $gb)
                        <div class="h-full p-2 bg-white rounded-md">
                            <div class="w-32 h-32 overflow-hidden gambarrrrrrr">
                                <img src="{{ asset($gb->image_thumb) }}" alt=""
                                    class="block object-cover w-full h-full">
                            </div>
                            <div class="flex flex-row items-center justify-center gap-4">
                                <form action="{{ route('media.destroy', $gb->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="tombolex">
                                        <i class="fa-solid fa-x"></i>
                                    </button>

                                </form>
                            </div>
                        </div>


                        {{-- Modal Preview Gambar --}}
                        <div class="modal_biasa">
                            <button class="penutup_an">
                                <svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" id="cross" class="icon glyph"
                                    style="z-index: -1">
                                    <path
                                        d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z">
                                    </path>
                                </svg>

                            </button>
                            <div class="w-full h-full p-6">
                                <img src="{{ asset($gb->image) }}" alt=""
                                    class="block object-contain w-full h-full">
                            </div>
                        </div>

                    @empty
                        <div class="w-40 h-40 overflow-hidden bg-white rounded-md ">
                            <a href="#" class="w-full h-full p-6">
                                belum ada gambar
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-layout-main>
