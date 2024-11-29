<x-layout-main>
    <div>
        <x-slot name='bread'>
            bread
        </x-slot>
        <x-slot name='theMenu'>

        </x-slot>

        <div class="w-full">
            @livewire('layout.layout-manager')
        </div>
    </div>
</x-layout-main>
