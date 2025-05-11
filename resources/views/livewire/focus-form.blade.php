<x-ui.container>
<div class="flex justify-center items-center my-5">
    <section class="flex flex-col gap-2 justify-center .items-center rounded-md p-1 lg:w-2/4 .w-[500px] shadow-md">
        <x-ui.container>
            <div class="min-w-[300px] max-w-[500px]">
                <livewire:utils.return-nav styles="m-0" />
                <div class="mt-12 mb-14 flex items-center gap-2">
                    <h2 class="text-lg font-bold .text-gray-70 gradient-text"><a href="{{route("dashboard")}}" wire:navigate></a> RepCollect</h2> | <span>Let's Organize Collections</span>
                </div>

                <div>
                    <h1 class="text-2xl font-bold text-gray-700">Create A Cause For Collection</h1>
                    <p class=".mb-10">Where leaders, business owners and representatives can streamline the process of collecting payments for goods, group projects, class resources and more. </p>
                </div>
            </div>
            <form wire:submit="save" class=".min-w-[300px] .max-w-[500px]">
            @csrf
            <div class="my-5 flex flex-col">
                <label for="title" class="text-sm font-semibold text-gray-600">Title <sup class="text-red-600">*</sup>
                </label>
                <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                    <input wire:model.live="title" class="flex-1 outline-none p-2" type="text" id="title" name="title" placeholder="Eg. Sophomore year project work">
                </div>
            </div>

            <div class="my-5 flex flex-col">
                <label for="description" class="text-sm font-semibold text-gray-600">Description  <sup class="text-red-600 text-md">*</sup></label>
                <p>
                    @error('description')
                        <span class="text-red-500 text-sm"> {{$message}} </span>
                    @enderror</p>
                <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                    <textarea wire:model.live="description" class="flex-1 outline-none .border-2 rounded-md my-1 border-gray-400 .rounded-md p-2" type="text" id="description" name="description" placeholder="Brief description of the collection reason..."> </textarea>
                </div>
            </div>

            <div class="my-5 flex flex-col">
                <label for="amount" class="text-sm font-semibold .text-gray-600">Amount (GHS) </label>
                <p class="text-gray-400 text-sm">Automatically set as the min amount anyone can pay</p>
                 <p>
                    @error('amount')
                        <span class="text-red-500 text-sm"> {{$message}} </span>
                    @enderror
                </p>
                <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                    <input wire:model.live="amount" class="flex-1 outline-none p-2" type="number" id="amount" name="amount" placeholder="150">
                </div>
            </div>

             <div class="my-5 flex flex-col">
                <label for="desired_amount" class="text-sm font-semibold .text-gray-600">Desired Amount (GHS) </label>
                 <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                     <input wire:model.live="desired_amount" class="flex-1 outline-none p-2" type="number" id="desired_amount" name="desired_amount" placeholder="2500">
                 </div>
            </div>

            <div class="mt-10 mb-10">
                <x-ui.button size="default" variant="default" className="bg-gradient-to-r from-brand-blue to-brand-teal text-white p-1 h-[40px] rounded-md flex justify-center items-center w-full text-sm gap-5"> Create Collection Point
                     <div wire:loading>
                        <div class="relative w-8 h-8">
                            <div class="absolute left-0 bottom-0 w-full h-4 .bg-white rounded-b-full animate-move"></div>
                             <div class="absolute left-1/2 top-0 transform -translate-x-1/2 bg-red-500 w-2 h-2 rounded-full animate-spin"></div>
                        </div>
                     </div>
                </x-ui.button>
            </div>
            <p class="text-sm .font-bold .text-gray-700 mb-[20px]"><b>Terms</b>  and <b>Conditions</b>  apply
            </p>
        </form>
        </x-ui.container>

    </section>
</div>
</x-ui.container>
