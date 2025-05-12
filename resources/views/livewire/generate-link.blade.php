<div class="flex justify-center items-center h-[500px]">
    <section x-data = "{ copied: false }" class="shadow-md .bg-primary lg:w-[500px] py-10 rounded-md px-6 text-neutral">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
            <h2 class="text-2xl text-neutral">Generated Link</h2>
        </div>
        <p class="text-sm pl-10 .w-2/3 lg:w-full">Your link has been generated. Share with anyone to receive payments</p>
        <div class="rounded-md my-2 ml-10 w-fit flex">
            <input class="border px-2 .text-secondary rounded-md w-[300px] lg:w-[400px] outline-none" type="text" id='link' x-ref='linkToCopy' value="{{url("/pay/$link")}}" readonly>
        </div>

        <div class="ml-10 flex gap-5 mt-10">
            <button class="bg-secondary text-primary rounded-md p-2 text-sm hover:bg-gray-200 gap-2 flex" x-on:click="
                $refs.linkToCopy.select();
                document.execCommand('copy');
                copied = true
            ">
                Copy to Clipboard <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
            </button>
            <button class="text-sm hover:text-gray-500" x-on:click="$wire.proceed()">
                Done
            </button>

            </div>
            <p class="px-10 mt-5 text-brand-teal" x-show="copied">Copied to clipboard!</p>
</section>
</div>
