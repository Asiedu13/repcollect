{{-- Individual collection --}}
<section class="flex-1 .col-span-2 bg-white rounded-md my-5 w-2/4 .px-4 absolute right-5 shadow-lg">
    <div class="flex gap-2 .text-gray-600 text-gray-500 font-semibold items-center py-2 px-4 justify-between">

        <div class="flex gap-2">
            <a href="{{route('home')}}" class="flex gap-2 font-normal items-center text-sm text-gray-500 border-gray-400 border-r-2  pr-4">RepCollect </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
            <h2 class="text-sm font-normal">Collections</h2>
        </div>
                    {{-- <a href="{{route('pay', $theOne->link)}}">Copy link</a> --}}
            <input class="border px-2 rounded-md w-[100px] outline-none invisible" type="text" id='link' x-ref='linkCopy' value="#" readonly>
            <a href="{{route('login')}}" class="bg-gray-600 text-white rounded-md p-2 text-sm hover:bg-gray-500 gap-2 flex text-right" wire:navigate> 
                Get payment link
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen"><rect width="8" height="4" x="8" y="2" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5.5"/><path d="M4 13.5V6a2 2 0 0 1 2-2h2"/><path d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
            </a>
    </div>
    <hr>

     <section class="px-4 py-4">
        <header class="py-4 text-gray-700 flex">
            <div class="">
                <h2 class="capitalize text-2xl text-sky-500 font-medium"> Campus Farming: Grow and Give Back </h2>
                <p class="text-sm px-1 text-gray-500 my-2 max-h-[80px] w-3/4">  Establishing an organic garden on campus where students can grow their own produce and donate a portion of the harvest to local food banks, promoting sustainable food practices. </p>
            </div>

            <div class="max-w-[600px] w-[600px] max-h-[inherit] h-[inherit] overflow-clip .border-2">
                <b class="text-green-400 .text-gray-600 text-lg">Goal: <span>GHS 1000.00 </span></b> <br>
                <b class=".text-green-400 text-gray-600 text-2xl ">Current: <span>GHS 20.00</span></b>
                <p class="text-sm font-semibold text-orange-300 "> 100  more payments at base price (GHS 10.00 )</p>
            </div>
        </header>
        <hr>
        <section class="mt-5">
            <h3 class="text-sm text-gray-600 font-semibold">Payments made</h3>
            <section class="overflow-y-auto h-[400px] max-h-[400px] ">
                <div class="my-2">
                    <a class="border-2 rounded-md .shadow-md h-[50px] flex items-center px-2 py-2 flex-1 justify-between  text-gray-400 .capitalize " href="#" class="capitalize">
                        <p class="text-slate-500"> Frank Anison </p>
                        <div class="text-sm font-bold text-gray-400 ">
                            <span class="text-slate-500 capitalize"> Momo </span>•<span class="text-green-500"> GHS 20.00 </span>
                        </div>
                    </a>
                </div>
            </section>
        </section>
    </section>
    <div class="text-right px-6 relative">
                {{-- Could be a pause collection button --}}
                {{-- <button class="text-white text-sm border-1 bg-red-500 border-red-500 w-fit rounded-md p-1">
                    End collection
                </button> --}}
        <button class="text-red-500 text-sm border-red-500 w-fit rounded-md py-1 hover:underline">
            Want to stop collecting money for this cause?
        </button>
                {{-- <p class="text-gray-600 text-sm">Stop collecting money for this cause</p> --}}
    </div>
</section>