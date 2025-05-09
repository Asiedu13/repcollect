<div class="mt-10">
    {{-- Logo, Tips and Options bar (till i know what to put there) --}}
        <section  class="grid grid-cols-1 lg:grid-cols-2 min-h-screen relative">
            {{-- back to dashboard goes here with arrow --}}
           <livewire:utils.return-nav styles="lg:hidden" />
            <section class="flex flex-col min-h-screen order-2 lg:order-1 lg:justify-center lg:items-center">
                <header class=" mt-2 lg:mt-0 lg:text-center">
                    <h1 class="text-3xl hidden gradient-text lg:block">RepCollect</h1>
                </header>
                <article class="flex items-center gap-5 bg-secondary rounded-md px-2 py-5 my-5 min-w-[400px] lg:w-[400px] text-gray-400">
                    <div class="absolute opacity-40 .text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="104" height="104" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hash"><line x1="4" x2="20" y1="9" y2="9"/><line x1="4" x2="20" y1="15" y2="15"/><line x1="10" x2="8" y1="3" y2="21"/><line x1="16" x2="14" y1="3" y2="21"/></svg>
                    </div>
                    <div class="text-primary z-10 pl-16">
                        <h3 class="text-lg font-semibold text-primary">Tip 2</h3>
                        <p class="min-w-[300px] text-sm">Clearly communicate the purpose and provide regular updates to ensure transparency and build trust with contributors.</p>
                    </div>
                </article>

                {{-- Other collection --}}
                <section class="rounded-md min-w-[400px] max-h-[300px] .bg-secondary. border border-gray-400 .text-secondary px-4 pt-2 pb-10">
                    <header class="my-5">
                        <h2 class="text-lg font-semibold">Other Collections</h2>
                    </header>
                    <hr>
                  <ul class="max-h-[200px]">
                    {{-- use this one for the component --}}
                    @forelse ($otherCollections as $collection )
                        <li>
                            <a class=".border-2 h-[50px] rounded-md my-2 flex items-center p-2 flex-1 justify-between" href="{{route('collect', $collection->link)}}" wire:navigate class="capitalize">
                                <p class="max-w-[180px] truncate"> {{$collection->title}} </p>
                                <div class="text-sm font-bold .text-secondary ">
                                    <span class="text-slate-500"> {{count($collection->transactions)}} paid </span> • <span class="text-brand-teal"> {{$collection->currency}} {{number_format($collection->sum)}}.00 </span>
                                </div>
                            </a>
                        </li>
                    @empty
                        <div class="flex flex-col items-center py-5">
                            <p class="flex-1 font-medium text-xl .text-gray-400">No other collections</p>
                        </div>
                    @endforelse
                  </ul>
                </section>

                {{-- back to dashboard goes here with arrow --}}
                <livewire:utils.return-nav />

            </section>

            {{-- Individual collection --}}
            <section  class="flex-1 .bg-primary border border-neutral lg:w-full rounded-md my-5 lg:order-1">
                <div class="flex gap-2 text-neutral font-semibold items-center py-2 px-4 justify-between">

                    <div class="flex gap-2 text-brand-blue">
                        <a href="{{route('home')}}" class="flex gap-2 font-normal items-center text-sm gradient-text border-gray-400 border-r-2 pr-4">
                        RepCollect
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                        <h2 class="text-sm font-normal">Collections</h2>
                    </div>

                    <a href="{{route('me.generate', $theOne->link)}}" class="inset-0.5 .bg-primary text-neutral rounded-md p-2 text-sm transition-all hover:bg-secondary hover:text-primary gap-2 flex text-right" wire:navigate>
                        Get payment link
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen"><rect width="8" height="4" x="8" y="2" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5.5"/><path d="M4 13.5V6a2 2 0 0 1 2-2h2"/><path d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
                    </a>
                </div>

                <hr>

                <section class="px-4 py-4">
                    <header class="py-4 text-gray-700 flex flex-col gap-3 lg:flex-row">
                        <div class="flex-1">
                            <h2 class="capitalize text-2xl text-neutral font-medium max-h-[100px] w-5/6 truncate"> {{$theOne->title}} </h2>
                            <p class="text-sm px-1 text-neutral my-2 max-h-[50px] .text-wrap max-w-[250px] truncate">{{$theOne->description}}</p>
                        </div>

                        <div class=".max-w-[600px] flex-1 .w-fit .w-[600px] max-h-[inherit] h-[inherit] overflow-clip text-neutral">
                            <b class="text-neutral text-lg">Goal: <span>{{$theOne->currency}} {{number_format($theOne->desired_amount)}}.00 </span></b> <br>
                            <b class="text-brand-teal text-2xl ">Current: <span>{{$theOne->currency}}  {{number_format($transactionsSum)}}.00</span></b>
                            <p class="text-sm font-semibold .text-accent">{{number_format($nOfPaymentsAtBase)}}  more payment{{$nOfPaymentsAtBase > 1 ? 's': ''}} at base price ({{$theOne->currency}} {{number_format($theOne->cost)}}.00 )</p>
                        </div>
                    </header>
                    <hr>
                    <section  x-data="{settingsShow: false}" class="mt-5">
                        <nav class="flex .gap-2 mx-3 border-b-2 border-accent">
                            <button @click="settingsShow = false" :class="settingsShow ? 'border-b-0': 'border-b-2 border-accent' " class="bg-transparent z-10 text-sm text-neutral font-semibold py-2 px-5 ">Payments</button>
                            <button @click="settingsShow = true" :class="! settingsShow ? 'border-b-0': 'border-b-2 border-accent' " class="bg-transparent z-10 text-sm text-neutral font-semibold py-2 px-5 ">Settings</button>
                        </nav>
                        <section x-show="! settingsShow" class="overflow-y-auto h-[400px] max-h-[400px] rounded-lg p-3">
                            @forelse ($transactions as $transaction )
                                <div class="my-2">
                                    <a class="border-2 border-accent rounded-md h-[50px] flex items-center px-2 py-2 flex-1 justify-between text-neutral" href="#" class="capitalize">
                                    <p class="text-neutral">{{$transaction->payer_name}} </p>
                                    <div class="text-sm font-bold ">
                                        <span class="capitalize">{{$transaction->payment_type}}</span>
                                        •
                                    <span class="text-brand-teal">{{$theOne->currency}} {{number_format($transaction->amount_paid)}}.00 </span>
                                    </div>
                                    </a>
                                </div>
                            @empty
                                <div class="max-h-[300px] h-[400px] flex justify-center items-center">
                                    <p class="text-center text-gray-400 font-semibold text-2xl">No transactions at the moment</p>
                                </div>
                            @endforelse
                        </section>
                        <section x-show="settingsShow" class="lg:overflow-y-auto lg:h-[400px] lg:max-h-[400px] rounded-lg p-3">
                            <livewire:individual-collection-settings :collection="$theOne" />
                        </section>
                </section>
            </section>
        </section>
        </section>
</div>
