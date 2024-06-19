<div>   
    {{-- Logo, Tips and Options bar (till i know what to put there) --}}
        <section  class="grid grid-cols-2 min-h-screen">
            <section class=".flex-1 flex flex-col min-h-screen justify-center items-center">
                <header class="text-center">
                    <h1 class="text-3xl">RepCollect</h1>
                </header>
                
                
                <article class="flex items-center gap-5 bg-white rounded-md px-2 py-5 my-5 w-[400px]">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hash"><line x1="4" x2="20" y1="9" y2="9"/><line x1="4" x2="20" y1="15" y2="15"/><line x1="10" x2="8" y1="3" y2="21"/><line x1="16" x2="14" y1="3" y2="21"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Tip 2</h3>
                        <p class="w-[300px] text-sm">Clearly communicate the purpose and provide regular updates to ensure transparency and build trust with contributors.</p>
                    </div>
                </article>

                <address class="rounded-md w-[400px] h-[300px] bg-gray-700 text-slate-300 px-6 py-2 ">
                    {{-- Collection info such as name(title), collection number(with collection type), collector, date created, total amount collected --}}
                    <h3 class="underline">Info and Stats</h3>
                </address>

                {{-- back to dashboard goes here with arrow --}}
                <nav class="text-gray-400 flex gap-2 mt-4">
                    <svg class="animate-slideLeft" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg>
                    <a href="{{route('dashboard')}}" wire:navigate>
                        <p>Back to dashboard</p>
                    </a>
                </nav>
            </section>
            
            {{-- Individual collection --}}
            <section class="flex-1 bg-white rounded-md my-5 p-4">
                <p>Table with data and more stats</p>
            </section>
        </section>
    {{-- </div> --}}
</div>
