<div class="flex flex-col w-full gap-4">
    <div class="mb-4">
        <h2 class="text-2xl ">Daftar User</h2>
    </div>
    <section class="flex flex-col w-full gap-4">
        <div class="p-3 bg-white">
            <div class="flex flex-row w-full gap-2 bg-orange-400 rounded-lg">
                <div class="w-[15%] bg-orange-400 px-2 py-1.5">
                    Nama

                </div>
                <div class="w-[15%] bg-orange-400 px-2 py-1.5">
                    Username
                </div>
                <div class="w-[30%] bg-orange-400 px-2 py-1.5 hidden md:block">
                    Email
                </div>
                <div class="w-[20%] bg-orange-400 px-2 py-1.5">
                    Password
                </div>
                <div class="w-[20%] bg-orange-400 px-2 py-1.5">
                    handle
                </div>
            </div>
            @if ($tombol == 'default')
                @foreach ($users as $user)
                    <div class="flex flex-row items-center w-full gap-3 bg-white border-b rounded-lg">
                        <div class="w-[15%] bg-white px-2 py-1">
                            {{ $user->name }}
                        </div>
                        <div class="w-[15%] bg-white px-2 py-1">
                            {{ $user->username }}
                        </div>
                        <div class="w-[30%] bg-white px-2 py-1 hidden md:block">
                            {{ $user->email }}
                        </div>
                        <div class="w-[20%] bg-white px-2 py-1">
                            * * * * *
                        </div>
                        <div class="w-[20%] bg-white px-2 py-1">
                            <div class="flex flex-row w-full gap-2">
                                <button wire:click='edit({{ $user->id }})'
                                    class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Edit</button>
                                <button wire:click.prevent='delete({{ $user->id }})'
                                    wire:confirm="Yakin akan menghapus user {{ $user->name }} ? "
                                    class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Del</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif ($tombol == 'edit_user')
                @foreach ($users as $user)
                    @if ($user->id == $id_user)
                        <form>
                            <div class="flex flex-row items-center w-full gap-3 bg-white border-b rounded-lg">
                                <div class="w-[15%] bg-white px-2 py-1">
                                    <input wire:model='name' type="text"
                                        class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                                </div>
                                <div class="w-[15%] bg-white px-2 py-1">
                                    <input wire:model='username' type="text"
                                        class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                                </div>
                                <div class="w-[30%] bg-white px-2 py-1 hidden md:block">
                                    <input wire:model='email' type="email"
                                        class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                                </div>
                                <div class="w-[20%] bg-white px-2 py-1">
                                    <input wire:model='password' type="password"
                                        class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                                </div>
                                <div class="w-[20%] bg-white px-2 py-1">
                                    <div class="flex flex-row w-full gap-2">
                                        <button
                                            class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Simpan</button>
                                        <button wire:click.prevent='cansel()'
                                            class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="flex flex-row items-center w-full gap-3 bg-white border-b rounded-lg">
                            <div class="w-[15%] bg-white px-2 py-1">
                                {{ $user->name }}
                            </div>
                            <div class="w-[15%] bg-white px-2 py-1">
                                {{ $user->username }}
                            </div>
                            <div class="w-[30%] bg-white px-2 py-1 hidden md:block">
                                {{ $user->email }}
                            </div>
                            <div class="w-[20%] bg-white px-2 py-1">
                                * * * * *
                            </div>
                            <div class="w-[20%] bg-white px-2 py-1">
                                <div class="flex flex-row w-full gap-2">
                                    <button wire:click='edit({{ $user->id }})'
                                        class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Edit</button>
                                    <button wire:click.prevent='delete({{ $user->id }})'
                                        wire:confirm="Yakin akan menghapus user {{ $user->name }} ? "
                                        class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Del</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            @endif

            @if ($buat == 'buat_user')
                <form wire:submit='save'>
                    <div class="flex flex-row items-center w-full gap-3 bg-white border-b rounded-lg">
                        <div class="w-[15%] bg-white px-2 py-1">
                            <input wire:model='name' type="text" class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                            @error('name')
                                <span class="text-sm text-orange-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-[15%] bg-white px-2 py-1">
                            <input wire:model='username' type="text"
                                class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                            @error('username')
                                <span class="text-sm text-orange-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-[30%] bg-white px-2 py-1 hidden md:block">
                            <input wire:model='email' type="text" class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                            @error('email')
                                <span class="text-sm text-orange-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-[20%] bg-white px-2 py-1">
                            <input wire:model='password' type="password"
                                class="w-full px-3 py-1 bg-orange-100 rounded-lg">
                            @error('password')
                                <span class="text-sm text-orange-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-[20%] bg-white px-2 py-1">
                            <div class="flex flex-row w-full gap-2">
                                <button
                                    class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Simpan</button>
                                <button wire:click.prevent='cansel()'
                                    class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <div class="flex flex-row items-center w-full gap-3 bg-white border-b rounded-lg">

                    <div class="w-full px-2 py-1 bg-white">
                        <div class="flex flex-row justify-center w-full gap-2">
                            <button wire:click.prevent='create()'
                                class="px-2 py-1 border border-orange-800 rounded-lg hover:bg-orange-800 hover:text-white">Buat
                                User</button>
                        </div>
                    </div>
                </div>
            @endif

        </div>



    </section>
</div>
