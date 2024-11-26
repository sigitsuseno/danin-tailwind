<div>
    <x-slot name='bread'>
        SETTING WEBSITE
    </x-slot>
    <x-slot name='theMenu'>
        Menu
    </x-slot>
    <div class="w-full md:w-8/12">

        <form>

            <div class="grid grid-cols-2 gap-4">
                <div class="mb-3">

                    <label for="app_logo"
                        class="flex items-center justify-center w-full border border-dashed rounded-md h-28 border-sky-900">
                        Logo Website
                    </label>
                    <input id="app_logo" type="file" accept="imange/jpg" hidden>
                </div>
                <div class="mb-3">

                    <label for="app_fav"
                        class="flex items-center justify-center w-full border border-dashed rounded-md h-28 border-sky-900">
                        Icon Website
                    </label>
                    <input id="app_fav" type="file" accept="imange/jpg" hidden>
                </div>

            </div>


            <div class="md:grid md:grid-cols-[200px,1fr] items-center">
                <label for="nama_website">Nama Website</label>
                <input type="text" class="" id="nama_website">
            </div>
        </form>
    </div>
</div>
