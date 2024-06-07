<div class="flex flex-col justify-center items-center">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <section class="flex flex-col justify-center .items-center">
        <h1 class="text-2xl font-medium capitalize text-zinc-600 text-center">Good day, {{$user[0]->name}}</h1>
        
        <svg  class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
        </svg>

        <blockquote class="text-gray-400 text-2xl w-[500px] flex gap-5 my-3 justify-center items-center">
            <p class="text-center">
                {{$saying->content}}
                <br>
                    ~ {{$saying->author}}
            </p>
        </blockquote>

        <div class="flex justify-end flex-end text-gray-400">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
        </div>
        </section>

    <main class="bg-white mt-5 rounded-md h-[fit] lg:w-[600px] flex flex-start flex-col .container">
      <livewire:collection-display color="bg-yellow" method="ongoing"  />
      <livewire:collection-display color="bg-green" method="completed"  />
      <livewire:collection-display color="bg-gray" method="paused"  />
        {{-- display section --}}
        {{-- <section class="flex-1">
           @if ($view == 'ongoing')
               <section class="py-2 px-4 font-bold ">
                    <h2 class="text-lg .underline text-slate-700 ">Ongoing</h2>

                    <div class="mt-3">
                        <div class="shadow-md w-[300px] h-[200px] p-2 px-4">
                            <h3 class="mb-4 capitalize text-md">Donation to orphanage</h3> <hr>
                            <p class="mt-5">Started: 14th Jan 2024</p>
                            <p>Payments today: </p>
                            <p>Amount today: </p>
                            <p>Total: </p>
                        </div>
                    </div>
               </section>
            @elseif ($view == 'completed')
               <article>
                    <p>Completed</p>
               </article>

            @elseif ($view == 'paused')
               <article>
                    <p>Paused</p>
               </article>

            @else
               <div>Something</div>
           @endif
        </section> --}}
    </main>
</div>
