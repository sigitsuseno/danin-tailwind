<div>
    <div class="p-2 my-2 border-top border-bottom">
        PENGATURAN WEBSITE
        <button wire:click='edit' class="px-4 py-1.5 rounded-lg bg-orange-500" style="margin-left: 2rem">Update</button>
    </div>
    <form wire:submit='setPengaturan'>
        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="w-full p-4 bg-white rounded-lg md:w-1/2 ">
                <div class="flex flex-col w-full gap-4 mb-4">
                    <div class="flex flex-col w-full gap-4 md:flex-row">
                        <div class="w-3/12">
                        </div>
                        <div
                            class="flex items-center justify-center w-9/12 overflow-hidden border border-orange-900 border-dashed rounded-lg h-36">
                            <div>
                                @if ($logo)
                                    <img src="{{ $logo->temporaryUrl() }}" alt=""
                                        class="object-cover w-full h-full">
                                @else
                                    @if ($settings)
                                        <img src="{{ asset('storage/' . $settings->logo) }}" alt=""
                                            class="object-cover w-full h-full">
                                    @else
                                        Logo
                                    @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-4 md:flex-row">
                        <label for="logo" class="w-3/12 ">
                            <div class="">Logo
                                <span>:</span>
                            </div>
                        </label>
                        <div class="w-9/12">

                            <input wire:model='logo' type="file" accept="image/*" id="logo"
                                class="block w-full px-1 py-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">

                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full gap-4 mb-4">
                    <div class="flex flex-col w-full gap-4 md:flex-row">
                        <div class="w-3/12">
                        </div>
                        <div
                            class="flex items-center justify-center w-9/12 overflow-hidden border border-orange-900 border-dashed rounded-lg h-36">
                            <div>
                                @if ($fav_icon)
                                    <img src="{{ $fav_icon->temporaryUrl() }}" alt=""
                                        class="object-cover w-full h-full">
                                @else
                                    @if ($settings)
                                        <img src="{{ asset('storage/' . $settings->fav_icon) }}" alt=""
                                            class="object-cover w-full h-full">
                                    @else
                                        favicon
                                    @endif

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-4 md:flex-row">
                        <label for="fav_icon" class="w-3/12">
                            <div class="d-flex justify-content-between align-items-center">Favicon
                                <span>:</span>
                            </div>
                        </label>
                        <div class="w-9/12">
                            <div>
                                <input wire:model='fav_icon' type="file" accept="image/*" id="fav_icon"
                                    class="block w-full px-1 py-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="nama_web" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Nama Web
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='nama_web' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="nama_web">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="no_hp" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Nomer HP
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='no_hp' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="no_hp">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="alamat" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Alamat
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <textarea wire:model='alamat' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="alamat" rows="4"></textarea>
                    </div>
                </div>
            </div>


            <div class="w-full p-4 bg-white rounded-lg md:w-1/2 ">
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_fb" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Facebook
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_fb' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_fb">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_ig" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Instagram
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_ig' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_ig">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_yt" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Youtube
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_yt' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_yt">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_tiktok" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Tiktok
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_tiktok' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_tiktok">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_shopee" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Shopee
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_shopee' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_shopee">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="id_tokped" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">Tokopedia
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='id_tokped' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="id_tokped">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 mb-4 md:flex-row">
                    <label for="medsos_1" class="w-3/12">
                        <div class="d-flex justify-content-between align-items-center">GoFood
                            <span>:</span>
                        </div>
                    </label>
                    <div class="w-9/12">
                        <input wire:model='medsos_1' type="text" {{ $mauEdit == 'edit' ? '' : 'readonly' }}
                            class="px-3 py-1.5 bg-orange-50 border w-full rounded-lg" id="medsos_1">
                    </div>
                </div>
                <div class="text-end">
                    <button class="px-4 py-1.5 bg-orange-500 rounded-lg">Simpan</button>
                </div>
            </div>
        </div>

    </form>

</div>
