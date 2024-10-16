<main class=".container ">
    <header class=" overflow-hidden px-[50px] pt-[50px] relative lg:pt-0">
        <section class="flex flex-col justify-between items-center w-[inherit] lg:h-[550px] lg:flex-row">
            <section class="flex flex-col justify-between w-[inherit] text-secondary font-sans">
                <h1 class="text-2xl font-medium text-primary-hover">RepCollect</h1>
                {{-- <p class="text-4xl lg:text-5xl font-bold my-2">Be Safe.</p>
                <p class="text-4xl font-bold my-2 lg:text-5xl">Be Organized.</p>
                <p class="text-5xl font-bold my-2">Be Transparent.</p> --}}
                <p class="text-4xl w-2/4">
                    No more chasing people down or struggling to keep track
                </p>
                {{-- <p class="mt-5">Start 
                    <span class="mx-1 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-accent relative inline-block">
                        <b class=".bg-accent relative text-white p-1 rounded-md ">tracking</b> 
                    </span>
                    payments and group collections today in three easy steps
                </p> --}}
                <p class="mt-5 w-2/4">
                    {{-- Streamline the payment process for group projects and social causes, ensuring transparency, efficiency, and harmony among participants --}}
                    —let us handle the finances while you focus on making a difference.
                </p>
                @guest
                    <section class='flex .justify-center items-center mt-[40px] gap-5'>
                        <a href="register" class="bg-secondary text-accent py-1 px-2 rounded-md font-semibold .text-gray-600">Register account</a>
                        <a href="login" class="bg-primary-light py-1 px-2 rounded-md font-semibold text-primary-normal">Log in to account</a>
                    </section>
                @endguest

                @auth
                    <section class='flex .justify-center items-center mt-[40px] gap-5'>
                        <a href="{{route('dashboard')}}"> 
                            <p class="bg-primary-hove py-1 px-4 rounded-md font-semibold text-accent flex justify-center items-center gap-4 shadow-md"> {{$username}}  <span class="relative flex h-3 w-3">
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
    <section class="mx-[50px] mt-20">
        {{-- <livewire:utils.feature-intro pstyle="w-2/5" heading="Who is this for?" description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab vitae illum est recusandae adipisci laudantium autem dolorem accusamus repellendus! Debitis, in soluta quod consequatur eum ducimus ut. Nisi nam consequatur adipisci illum in, libero nesciunt facere obcaecati vel vero architecto, unde voluptatum quo inventore esse quod, pariatur labore vitae."  /> --}}
        <h2 class="text-4xl .font-bold mb-3">Who is this for?</h2>
        <section class="mt-[100px] flex flex-col gap-20">
            <section class="text-secondary w-3/4 bg-primary rounded-lg shadow-md flex relative ">
                <div class="w-full h-[300px] rounded-lg relative py-10 px-10 ">
                    <h3 class="font-bold text-2xl">Students / Student Leaders</h3>
                    <h4 class="font-medium mb-5">Pains</h4>
                    <ul class="list-disc px-[20px] leading-7">
                        <li>Missed deadlines and payments affecting project timelines</li>
                        <li>Strained relationships within the group due to financial issues
                        </li>
                        <li>Difficulty in tracking contributions ensuring fairness in payment distribution
                        </li>
                    </ul>
                </div>
                    <img class="absolute right-0 .left-[300px] bottom-10 z-10 w-[350px] h-[400px]" src="/images/student-girl-edited.png" alt="Student girl with afro smiling with books in hand">
            </section>

            <section class="text-secondary w-3/4 bg-primary rounded-lg shadow-md flex relative self-end justify-end">
                <img class="absolute -left-[250px] bottom-0 z-10 .w-[450px] h-[400px]" src="/images/business-owner.png" alt="Student girl with afro smiling with books in hand">
                <div class="h-[300px] rounded-lg .relative py-10 px-10 ">
                    <h3 class="font-bold text-2xl">Business Owners</h3>
                    <h4 class="font-medium mb-5">Pains</h4>
                    <ul class="list-disc px-[20px] leading-7">
                        <li>Loss of sales due to stockouts or late deliveries
                        </li>
                        <li>Loss of revenue due inaccurate tracking of payment for many orders
                        </li>
                        <li>Increased stress rates from juggling multiple orders without clarity</li>
                    </ul>
                </div>
            </section>

            <section class="mt-[100px] flex flex-col gap-20">
                <section class="text-secondary w-3/4 bg-primary rounded-lg shadow-md flex relative .overflow-hidden ">
                    <div class="w-full h-[300px] rounded-lg relative py-10 px-10 ">
                        <h3 class="font-bold text-2xl">Social Groups</h3>
                        <h4 class="font-medium mb-5">Pains</h4>
                        <ul class="list-disc px-[20px] leading-7">
                            <li>Chasing members for overdue contributions.</li>
                            <li>Strained relationships within the group due to financial issues
                            </li>
                            <li> Struggling to keep track of who has paid and who hasn't.
                            </li>
                        </ul>
                    </div>
                        <img class="absolute grayscale rounded-md -right-20 .left-[300px] bottom-5 z-10 w-[450px] h-[450px]" src="/images/students-rehashing-theater-class.png" alt="Student girl with afro smiling with books in hand">
                </section>
        </section>
    </section>

    <section class="mx-[50px] mt-20 flex h-[500px] overflow-clip">
        <div class="flex-1">
            <livewire:utils.dummy-focus-form />
        </div>
        <div class="flex-1 place-self-center">
            <livewire:utils.feature-intro pstyle="w-4/5" heading="Setup collection in minutes" description="Whether you're raising funds for a group project, organizing resources for a class, or supporting a social cause, getting started has never been easier. Create your collection with just a few clicks, set your target amount, and share it with your community. Track contributions in real-time, keep everything transparent, and meet your goals faster." />

            <livewire:utils.feature-intro pstyle="w-4/5" heading="Share your link, reach your goal" description="Once your collection is set up, spreading the word is simple. Generate a unique link for your campaign and share it across any platform—social media, messaging apps, or emails. Your supporters can contribute with just a click, making it easier for everyone to pitch in, no matter where they are." />
        </div>
    </section>
    {{-- Automated Email support --}}
    <section class="mx-[50px]">
        <livewire:utils.feature-intro heading="Stay Informed Every Step of the Way" description="We believe in keeping everyone in the loop. As a contributor, you’ll receive real-time email updates for every key moment—whether it's a confirmation of your payment, the collection reaching its goal, or funds being disbursed for the cause. Creators can also send a personal appreciation message, letting you know how much your support means. Stay connected and feel confident that your contributions are making an impact." />
    </section>
    {{-- Donations card --}}
    <section class="mt-28 mx-[auto] h-[300px] w-3/4 bg-white rounded-xl shadow-md  overflow-clip flex">
        <div class="px-[50px]">
            <div class="flex">
                <b class="bg-secondary text-primary rounded-full p-2 mt-5 text-sm">Coming soon</b>
            </div>
            <livewire:utils.feature-intro otherStyles="mt-5" pstyle="w-3/4" heading="RepCollect Donations" description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab vitae illum est recusandae adipisci laudantium autem dolorem accusamus repellendus! " />
            <div class="border rounded-full py-1 pr-1 pl-4 w-4/5 flex items-center .justify-center mt-5">
                <input class="w-full outline-none" type="text">
                <button class="bg-secondary text-primary rounded-full w-2/4 text-sm py-2">Join waiting list</button>
            </div>
            
        </div>
        <div>
            <img src="/images/children.jpg" />
        </div>
            
    </section>

    {{-- FAQs --}}
    <section class="mt-[100px] mx-[50px]">
        <livewire:utils.feature-intro heading="Frequently asked questions" description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ab vitae illum est recusandae adipisci laudantium autem dolorem accusamus repellendus! " />
        <section class="grid gap-10 grid-cols-3">
            <section class="mt-[20px]">
                <h3 class="text-2xl font-bold">How can I get money back?</h3>
                <p class="w-4/4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae labore odio, velit id repudiandae animi laborum, impedit vitae modi a voluptate vel ullam veritatis quod beatae aperiam consectetur eos voluptatum.</p>
            </section>
            <section class="mt-[20px]">
                <h3 class="text-2xl font-bold">Should I always confirm transactions?</h3>
                <p class="w-4/4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae labore odio, velit id repudiandae animi laborum, impedit vitae modi a voluptate vel ullam veritatis quod beatae aperiam consectetur eos voluptatum.</p>
            </section>

            <section class="mt-[20px]">
                <h3 class="text-2xl font-bold">Should I always confirm transactions?</h3>
                <p class="w-4/4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae labore odio, velit id repudiandae animi laborum, impedit vitae modi a voluptate vel ullam veritatis quod beatae aperiam consectetur eos voluptatum.</p>
            </section>
        </section>
    </section>
</main>