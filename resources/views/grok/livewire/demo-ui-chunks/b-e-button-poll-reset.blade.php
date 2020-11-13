
<div wire:poll.5s>
    {{--    wire:poll.5s sez, re-render this blade once every 5 seconds (defaults to 2s)--}}
    {{--    https://laravel-livewire.com/docs/2.x/polling --}}
    <x-jet-action-section>

        <x-slot name="title">
           BE Button Poll Reset
        </x-slot>

        <x-slot name="description">
            This basically shows polling where something auto-increments with a button's ability to resent the counter.
            <p>
                Note: the <code>'div wire:poll'</code> must be outside the x-jet-action-section...
            </p>
        </x-slot>

        <x-slot name="content">
            <div class="max-w-xl text-sm text-gray-600">
                <div class="text-gray-700">Last updated: {{now()}}</div>
                <div>Count: <span class="text-red-800 text-xl">{{$count}}</span></div>
                <div class="text-gray-300">(count is any public var we add to the livewire controller class)</div>

            </div>

            <div class="mt-5">
                <x-jet-button wire:click="doClick()" wire:loading.attr="disabled">
                    Reset
                </x-jet-button>
            </div>

        </x-slot>

</x-jet-action-section>
</div>
