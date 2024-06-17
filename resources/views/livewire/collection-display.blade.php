<section class='.flex .justify-center .items-center .mt-[80px] gap-5 .cursor-pointer'>
    <p class="bg-white py-4 px-10 rounded-md font-bold text-gray-600 flex .justify-center items-center gap-2 .shadow-md capitalize text-{{$color}}-500 text-lg"> 
        {!! $svg !!} 
       {{$type}}
        {{-- <span class="relative flex h-3 w-3">
            <span class="relative inline-flex rounded-full h-3 w-3 bg-{{$color}}-500"></span>
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-{{$color}}-400 opacity-75"></span>
        </span> --}}
    </p> 
        <section class="">
           
            <div class="w-[inherit] h-[200px] .text-center px-10 overflow-y-scroll">
                @if (count($items) > 0)
                    @foreach ($items as $item )
                        <div wire:key="{{$item->id}}">
                            <a class="border-b-2 .shadow-md h-[50px] flex items-center p-2 flex justify-between text-slate-500 " href="{{route('collect', $item->paymentLink->link)}}" class="capitalize">
                                <p> {{$item->title}} </p>
                                <div class="text-sm font-bold text-gray-500 ">
                                    <span class="text-pink-400"> 21 pays </span> • <span class="text-green-500"> $100.00 </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h2 class="text-lg text-gray-300 font-bold py-10 text-center">No collection at the moment</h2>
                @endif
            </div>
        </section>
</section>
