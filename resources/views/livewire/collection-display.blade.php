<section class='.flex .justify-center .items-center .mt-[80px] gap-5 .cursor-pointer'>
    <p class="bg-white py-1 px-4 rounded-md font-semibold text-gray-600 flex justify-center items-center gap-4 shadow-md capitalize">   
        <span class="relative flex h-3 w-3">
            <span class="relative inline-flex rounded-full h-3 w-3 bg-{{$color}}-500"></span>
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-{{$color}}-400 opacity-75"></span>
        </span>{{$type}}</p> 
        <section class="">
            <div class="w-[inherit] h-[200px] text-center ">
                @if (count($items) > 0)
                    @foreach ($items as $item )
                        <div wire:key="{{$item->id}}">
                            <a href="{{route('collect', $item->paymentLink->link)}}" class=".capitalize">
                            {{$item->paymentLink->link}}
                            </a>
                        </div>
                    @endforeach
                @else
                    <h2 class="text-lg text-gray-300 font-bold py-10">No collection at the moment</h2>
                @endif
            </div>
        </section>
</section>
