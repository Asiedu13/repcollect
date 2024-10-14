<div class="bg-primary border border-neutral w-[700px] h-fit py-5 rounded-md">
    {{-- The whole world belongs to you. --}}
      <header x-data="{show: false}" class="flex justify-between text-neutral font-semibold items-center py-4 px-4">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg> --}}
            <section class="flex gap-2">
                <a href="{{route('home')}}" wire:navigate> 
                    <h2 class="text-xl border-r-2 border-neutral pr-4">RepCollect</h2> 
                </href>
                <a class="flex gap-2 font-normal items-center text-sm text-sky-500" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-banknote"><rect width="20" height="12" x="2" y="6" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
                    Payments
                </a>
            </section>
            <section  class="bg-red-200 text-red-500 py-2 px-4 rounded-md flex gap-2 items-center">
                <a href="#">Report collection </a>

                <svg @click="show = !show" class="hover:text-red-600 hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="14" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>

            </section>
            <article x-show="show" class="absolute right-24 top-20 bg-primary py-4 px-4 rounded-md w-[400px] shadow-xl ">
                <header class="my-2">
                    <h2>Why Report This Collection?</h2>
                </header>
                <hr>
                <p class="font-normal mt-2">
                        Reporting a campaign helps maintain the integrity of our platform. Please report this collection if you believe it violates our guidelines or involves any of the following:
                    </p>
                    <ul class="font-medium list-disc px-4">
                        <li>Suspected fraud or misuse of funds.</li>
                        <li>Inaccurate or misleading information.</li>
                        <li>Violations of RepCollect terms of service.</li>
                        <li>Unauthorized fundraising on behalf of others.</li>
                        <li>Identity theft or impersonation.</li>
                    </ul>
                    <p class="mt-2 text-accent">
                     All reports are confidential and will be reviewed by our team.
                    </p>
            </article>
        </header>
        <hr>

        <header class="mx-4 my-2 h-[150px]">
            <h2 class="text-2xl text-neutral font-bold"> {{$focus->title}} </h2>
            <div>
                <span class="text-sm text-neutral tracking-wider"> Created by {{$creator->name}} </span>
                {{-- TODO: Add phone number --}}
            </div>
            <p class="text-neutral">
                {{$focus->description}}
            </p>
        </header>
        <hr>
    <form wire:submit="redirectToGateway" class="mx-4">
        <div class="my-5 flex flex-col">
            <label for="name" class="text-sm font-semibold text-neutral">Name <sup class="text-red-600">*</sup>
            </label>
            <input wire:model.live="payerName" class="outline-none bg-transparent text-neutral border-b-2 border-gray-400 .rounded-md py-2" type="text" id="name" name="name" placeholder="Eg. John Doe">
            <p>
                @error('payerName')
                    <span class="text-red-500 text-sm"> {{$message}} </span>   
                @enderror
            </p>
        </div>

        <div class="my-5 flex flex-col">
            <label for="email" class="text-sm font-semibold text-neutral">Email <sup class="text-red-600">*</sup>
            </label>
            <input wire:model.live="payerEmail" class="outline-none bg-transparent text-neutral border-b-2 border-gray-400 .rounded-md py-2" type="text" id="payerEmail" name="payerEmail" placeholder="example@gmail.com">
            <p>
                @error('payerEmail')
                    <span class="text-red-500 text-sm"> {{$message}} </span>   
                @enderror
            </p>
        </div>

        <div class="my-5 flex flex-col">
            <label for="contact" class="text-sm font-semibold text-neutral">Contact {{"(MOMO)"}} <sup class="text-red-600">*</sup>
            </label>
            <input wire:model.live="payerContact" class="outline-none bg-transparent text-neutral border-b-2 border-gray-400 .rounded-md py-2" type="text" id="payerContact" name="payerContact" placeholder="0245584914">
            <p>
                @error('payerContact')
                    <span class="text-red-500 text-sm"> {{$message}} </span>   
                @enderror
            </p>
        </div>
         <div class="my-5 flex flex-col">
            <label for="contact" class="text-sm font-semibold text-neutral">Amount <sup class="text-red-600">*</sup>
            </label>
            <input wire:model.live="payerAmount" class="outline-none bg-transparent text-neutral border-b-2 border-gray-400 .rounded-md py-2" type="number" min="{{$min}}" id="payerAmount" name="payerAmount" placeholder="100">
            <p>
                @error('payerAmount')
                    <span class="text-red-500 text-sm"> {{$message}} </span>   
                @enderror
            </p>
        </div>

        <div  class="mt-10 flex mb-10">
                <button @click="showModal = true" class="bg-gray-600 p-1 h-[40px] rounded-md text-white flex justify-center items-center w-[100%] text-sm gap-5 hover:bg-gray-700"> Proceed to payment
                     <div wire:loading>
                        <div class="relative w-8 h-8">
                            <div class="absolute left-0 bottom-0 w-full h-4 bg-white rounded-b-full animate-move"></div>
                             <div class="absolute left-1/2 top-0 transform -translate-x-1/2 bg-red-500 w-2 h-2 rounded-full animate-spin"></div>
                        </div>

                     </div>
                </button>
 

        </div>
            <p class="text-sm .font-bold text-neutral mb-[20px]">  <b>Thank you! ❤️</b>
                {{-- <a  class='text-purple-500 text-sm' href="<?php echo route('login') ?>">Sign In</a> --}}
            </p>
    </form>
</div>