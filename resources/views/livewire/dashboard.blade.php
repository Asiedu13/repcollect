<main class="bg-primary border border-neutral mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-col px-2">
        <header class="flex gap-2 text-neutral font-semibold items-center py-4 px-4">
           <x-icons.squigglydollarsign />
            <h2 class="text-xl border-r-2 border-accent pr-4">Collections</h2>
            <a href="{{route('me.create')}}" class="flex gap-2 font-normal items-center text-sm text-accent" wire:navigate>
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


