<main class=".bg-primary border border-gray-400 mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-col px-2">
        <header class="flex gap-2 text-brand-blue font-semibold items-center py-4 px-4">
           <x-icons.squigglydollarsign />
            <h2 class="text-xl .text-brand-teal border-r-2 border-brand-teal pr-4">Collections</h2>
            <a href="{{route('me.create')}}" class="flex gap-2 font-normal items-center text-sm .text-brand-blue" wire:navigate>
                <x-icons.rounded-plus />
                 Create a new collection
            </a>
        </header>
        <hr>
        <livewire:collection-display color="yellow" type="ongoing" :items="$ongoing" :svg="$ongoingIcon">
        </livewire:collection-display>
        <livewire:collection-display color="green" type="completed" :items="$completed" :svg="$completedIcon" color="yellow" />
        <livewire:collection-display color="gray" type="paused" :items="$paused" :svg="$pausedIcon"  color="gray"/>
</main>


