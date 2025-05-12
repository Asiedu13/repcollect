<section class='gap-5 .cursor-pointer'>
    <p class=" py-4 px-5 rounded-md font-bold .text-neutral flex items-center gap-2 .shadow-md capitalize text-lg lg:px-10">
        {!! $svg !!}
       {{$type}} •
       <span class=".text-accent text-sm lowercase ">
           {{count($items)}} collection{{count($items) > 1 ? "s": " "}}
       </span>
    </p>
        <section class="">
            <div class="w-[inherit] h-[200px] px-5 overflow-y-auto lg:px-10 ">
                @if ( !is_null($items) && count($items) > 0)
                    @foreach ($items as $item )
                        <div wire:key="{{$item->id}}" class="flex gap-2 items-center">
                            <a class="border-b-2 .border-accent h-[50px] flex items-center p-2 flex-1 justify-between text-neutral w-full .capitalize " href="{{route('collect', $item->link->link)}}" class="capitalize">
                                <p class="truncate w-2/4 lg:w-2/3"> {{$item->title}} </p>
                                <div class="text-sm font-bold .text-accent">
                                <span class=".text-neutral"> {{$item->payCount ? $item->payCount : "0" }} paid </span> • <span class="text-neutral"> {{$item->currency}} {{$item->sum ? $item->sum :  "0"}} </span>
                                </div>
                            </a>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg> --}}
                        </div>
                    @endforeach
                @else
                    <h2 class="text-lg px-[100px] .text-accent font-bold py-10 text-center">No collection at the moment</h2>
                @endif
            </div>
        </section>
</section>
