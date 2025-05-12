<div class=".bg-primary .text-secondary border border-neutral w-[700px] h-fit py-5 rounded-md">
    {{-- The whole world belongs to you. --}}
      <header x-data="{show: false}" class="flex justify-between text-neutral font-semibold items-center py-4 px-4">
            <section class="flex gap-2">
                <a href="{{route('home')}}" wire:navigate>
                    <h2 class="text-xl gradient-text border-r-2 border-neutral pr-4">RepCollect</h2>
                </href>
                <a class="flex gap-2 font-normal items-center text-sm" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-banknote"><rect width="20" height="12" x="2" y="6" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
                    Payments
                </a>
            </section>
            <section  class="bg-red-200 text-red-500 py-2 px-4 rounded-md flex gap-2 items-center">
                <a href="#">Report collection </a>
                <svg @click.outside="show=false" @click="show = !show" class="hover:text-destructive hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="14" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>

            </section>
            <article x-show="show" class="absolute right-24 top-20 bg-white py-4 px-4 rounded-md w-[400px] shadow-xl ">
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
                    <p class="mt-2">
                     All reports are confidential and will be reviewed by our team.
                    </p>
            </article>
        </header>
        <hr>

        <header class="mx-4 my-2 .h-[150px]">
            <h2 class="text-2xl text-neutral font-bold"> {{$focus->title}} </h2>
            <div>
                <span class="text-sm text-neutral"> Created by {{$creator->name}} </span>
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
            <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                <input wire:model.live="payerName" class="flex-1 outline-none p-2" type="text" id="name" name="name"  placeholder="Eg. John Doe">
            </div>
            <p>
                @error('payerName')
                    <span class="text-red-500 text-sm"> {{$message}} </span>
                @enderror
            </p>
        </div>

        <div class="my-5 flex flex-col">
            <label for="email" class="text-sm font-semibold text-neutral">Email <sup class="text-red-600">*</sup>
            </label>
            <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                <input wire:model.live="email" class="flex-1 outline-none p-2" type="email" id="payerEmail" name="email" placeholder="example@gmail.com">
            </div>
            <p>
                @error('payerEmail')
                    <span class="text-red-500 text-sm"> {{$message}} </span>
                @enderror
            </p>
        </div>

        <div class="my-5 flex flex-col">
            <label for="contact" class="text-sm font-semibold text-neutral">Contact {{"(MOMO)"}} <sup class="text-red-600">*</sup>
            </label>
            <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                <input wire:model.live="payerContact" class="flex-1 outline-none p-2" type="text" id="payerContact" name="payerContact" placeholder="0245584914">
            </div>
            <p>
                @error('payerContact')
                    <span class="text-red-500 text-sm"> {{$message}} </span>
                @enderror
            </p>
        </div>
         <div class="my-5 flex flex-col">
            <label for="contact" class="text-sm font-semibold text-neutral">Amount <sup class="text-red-600">*</sup>
            </label>
             <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                 <input  wire:model.live="payerAmount" class="flex-1 outline-none p-2" type="number" min="{{$min}}" id="payerAmount" name="payerAmount" placeholder="100">
             </div>
            <p>
                @error('payerAmount')
                    <span class="text-red-500 text-sm"> {{$message}} </span>
                @enderror
            </p>
        </div>

        <div class="mt-10 flex mb-10">
                <button @click="showModal = true" class="bg-gradient-to-r from-brand-blue to-brand-teal text-white p-1 h-[40px] rounded-md flex justify-center items-center w-full text-sm gap-5"> Proceed to payment
                     <div wire:loading>
                        <div class="relative w-8 h-8">
                            <div class="absolute left-0 bottom-0 w-full h-4 .bg-primary rounded-b-full animate-move"></div>
                             <div class="absolute left-1/2 top-0 transform -translate-x-1/2 bg-red-500 w-2 h-2 rounded-full animate-spin"></div>
                        </div>

                     </div>
                </button>
        </div>
            <p class="text-sm .font-bold text-neutral mb-[20px]"><b>Thank you! ❤️</b> </p>
    </form>
</div>
