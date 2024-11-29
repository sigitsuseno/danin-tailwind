<x-layout-main>
    <div>
        <x-slot name='bread'>
            bread
        </x-slot>
        <x-slot name='theMenu'>

        </x-slot>

        <div class="flex flex-col items-start w-full">
            <h1 class="py-2 text-2xl font-bold">Image Galeri</h1>
            <div id="media_media" class="relative flex flex-row items-center gap-3">
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
                <input hidden type="file">
                <div class="tampilin_img">
                </div>
            </div>
            <div class="w-full p-2 mt-2 bg-white">
                <div class="flex flex-row flex-wrap justify-start w-full gap-3 p-4 bg-orange-50">
                    <div class="w-40 h-40 overflow-hidden bg-white rounded-md ">
                        <a href="#" class="w-full h-full">
                            <img src="" alt="" class="object-cover w-full h-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-main>
