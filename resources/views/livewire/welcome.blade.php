<main class=".container">
    <header class="overflow-hidden px-[100px] pt-[50px] .border border-red-200 relative lg:pt-0">
        <section class="flex flex-col justify-between items-center w-[inherit] lg:h-[550px] lg:flex-row">
            <section class="flex flex-col justify-between w-[inherit] text-slate-600">
                <h1 class="text-3xl font-medium text-gray-500">RepCollect</h1>
                <p class="text-5xl font-bold my-2">Be Safe.</p>
                <p class="text-5xl font-bold my-2">Be Organized.</p>
                <p class="text-5xl font-bold my-2">Be Transparent.</p>
                <p class="mt-5">Start <b class="bg-green-400 text-white p-1 rounded-md ">tracking</b> payments and group collections today in three easy steps</p>
                @guest
                    <section class='flex .justify-center items-center mt-[40px] gap-5'>
                        <a href="register" class="bg-gray-600 text-white py-1 px-2 rounded-md font-semibold .text-gray-600">Register account</a>
                        <a href="login" class="bg-white py-1 px-2 rounded-md font-semibold text-gray-600">Log in to account</a>
                    </section>
                @endguest

                @auth
                    <section class='flex .justify-center items-center mt-[40px] gap-5'>
                        <a href="{{route('dashboard')}}"> 
                            <p class="bg-white py-1 px-4 rounded-md font-semibold text-gray-600 flex justify-center items-center gap-4 shadow-md"> {{$username}}  <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                                </span>
                            </p> 
                        </a>
                    </section>
                @endauth
            </section>
            <div class="w-[500px] my-[40px] self-start flex .flex-col gap-10 ">
                <!-- <p class="text-gray-700 font-bold flex items-center gap-2">Steps <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hash"><line x1="4" x2="20" y1="9" y2="9"/><line x1="4" x2="20" y1="15" y2="15"/><line x1="10" x2="8" y1="3" y2="21"/><line x1="16" x2="14" y1="3" y2="21"/></svg>  </p> -->
                <!-- <ol class="mx-[20px] z-10 bg-white p-2 rounded-md shadow-md">
                    <li class="flex gap-2">1. Create a link <a href="{{route('me.create')}}" class="bg-blue-400 text-white text-sm p-1 rounded-md w-[120px] flex gap-2 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                        Create a link</a> </li>
                    <li class=".flex gap-5 relative">2. Fill in details</li>
                    <li>3. Share payment link</li>
                </ol> -->
                <livewire:utils.individual-collection />
            </div>
       </section>
      
    </header>        
</main>