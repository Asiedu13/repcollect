<main class="container ">
    <header class=" overflow-hidden px-[50px] pt-[50px] relative lg:pt-0">
        <section class="flex flex-col justify-between items-center w-[inherit] lg:h-[550px] lg:flex-row">
            <section class="flex flex-col justify-between w-[inherit] text-secondary font-sans">
                <h1 class="text-sm lg:text-2xl font-medium text-primary-hover">RepCollect</h1>
                {{-- <p class="text-4xl lg:text-5xl font-bold my-2">Be Safe.</p>
                <p class="text-4xl font-bold my-2 lg:text-5xl">Be Organized.</p>
                <p class="text-5xl font-bold my-2">Be Transparent.</p> --}}
                <p class="text-2xl lg:text-4xl lg:w-2/4">
                    No more chasing people down or struggling to keep track
                </p>
                <p class="mt-5  lg:w-2/4">
                    —let us handle the finances while you focus on making a difference.
                </p>
                @guest
                    <section class='flex .justify-center items-center mt-[40px] gap-5'>
                        <a href="register" class="bg-accent text-white py-1 px-2 rounded-md font-semibold .text-gray-600">Register account</a>
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
                <livewire:utils.individual-collection />
            </div>
       </section>

    </header>
    <section class="mx-[50px] mt-20 h-fit">
        <h2 class="text-2xl font-medium lg:font-normal lg:text-4xl">Who is this for?</h2>
        <p class="mb-20 ">Some plenty things bi</p>
        <section class=" grid grid-cols-1 gap-20 lg:grid-cols-3 lg:mt-[100px] lg:gap-10">
            <section class="text-secondary h-[500px] w-3/4 bg-primary rounded-lg shadow-md flex relative lg:h-[440px] ">
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
                    <img class="absolute right-0 left-[140px] bottom-[200px] -z-10 lg:left-10 lg:w-[280px] lg:h-[200px] lg:bottom-[300px]" src="/images/student-girl-edited.png" alt="Student girl with afro smiling with books in hand">
            </section>

            <section class="text-secondary w-3/4 bg-primary mix-blend-darken rounded-lg shadow-md flex relative self-end justify-end">
                <img class="absolute right-0 left-[140px] bottom-36 -z-10 lg:left-10 lg:w-[350px] lg:h-[300px] lg:bottom-[260px] " src="/images/business-owner.png" alt="Student girl with afro smiling with books in hand">
                <div class="h-fit rounded-lg bg-primary mix-blend- .relative py-10 px-10 ">
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
                    <div class="w-full h-fit rounded-lg relative py-10 px-10 ">
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
                        <img class="absolute .grayscale rounded-md right-0 left-[140px] bottom-36 -z-10 lg:left-10 lg:w-[300px] lg:h-[320px] lg:-right-20 lg:bottom-[270px]" src="/images/students-rehashing-theater-class.png" alt="Student girl with afro smiling with books in hand">
                </section>
        </section>
    </section>

    <section class="mx-[50px] mt-20 .flex grid lg:grid-cols-2 .h-[500px] lg:h-fit overflow-clip">
        <div class="flex-1">
            <livewire:utils.dummy-focus-form />
        </div>
        <div class=".flex-1 grid .grid-cols-1 place-self-center">
            <livewire:utils.feature-intro pstyle="w-4/5" heading="Setup collection in minutes" description="Whether you're raising funds for a group project, organizing resources for a class, or supporting a social cause, getting started has never been easier. Create your collection with just a few clicks, set your target amount, and share it with your community. Track contributions in real-time, keep everything transparent, and meet your goals faster." />

            <livewire:utils.feature-intro pstyle="w-4/5" heading="Share your link, reach your goal" description="Once your collection is set up, spreading the word is simple. Generate a unique link for your campaign and share it across any platform—social media, messaging apps, or emails. Your supporters can contribute with just a click, making it easier for everyone to pitch in, no matter where they are." />
        </div>
    </section>
    {{-- Automated Email support --}}
    <section class="mx-[50px]">
        <livewire:utils.feature-intro heading="Stay Informed Every Step of the Way" description="We believe in keeping everyone in the loop. As a contributor, you’ll receive real-time email updates for every key moment—whether it's a confirmation of your payment, the collection reaching its goal, or funds being disbursed for the cause. Creators can also send a personal appreciation message, letting you know how much your support means. Stay connected and feel confident that your contributions are making an impact." />
    </section>
    {{-- Donations card --}}
    <section class="mt-28 lg:mx-[auto] lg:h-[300px] lg:w-3/4 bg-white rounded-xl shadow-md  overflow-clip lg:flex">
        <div class="px-5 lg:px-[50px]">
            <div class="flex">
                <b class="bg-secondary text-primary rounded-full p-2 mt-5 text-sm">Coming soon</b>
            </div>
            <livewire:utils.feature-intro otherStyles="lg:mt-5" pstyle="w-3/4" heading="RepCollect Donations" description="RepCollect Donations is coming soon to make giving easier, more transparent, and impactful. Join our waiting list to be the first to know when we launch and help bring change where it’s needed most! " />
            <div class="border rounded-full py-1 pr-1 pl-4 lg:w-4/5 flex lg:items-center .justify-center mt-5">
                <input class="w-full outline-none" type="text">
                <button class="bg-secondary text-primary rounded-full w-1/4 text-sm lg:py-2">Join waiting list</button>
            </div>
        </div>
        <div class="mt-5 lg:mt-0">
            <img src="/images/children.jpg" />
        </div>

    </section>

    {{-- FAQs --}}
    <section class="mt-[100px] mx-[50px] text-secondary">
        <livewire:utils.feature-intro heading="Frequently asked questions" description="We’re here to help! Find answers to common questions about RepCollect below." />
        <section class="grid gap-10 grid-cols-1 lg:grid-cols-3">
            <section class="mt-[20px] text-secondary">
                <h3 class="text-xl lg:text-2xl font-bold">How can I get a refund?</h3>
                <p class="w-4/4">If a payment was made in error or a refund is required, you can request it through your transaction history. Simply select the payment, follow the refund instructions, and our team will process it promptly.</p>
            </section>
            <section class="mt-[20px]">
                <h3 class="text-xl lg:text-2xl font-bold">Should I always confirm transactions?</h3>
                <p class="w-4/4">Yes! Before finalizing any payment, double-check the amount and recipient details. This helps prevent errors and ensures your funds go exactly where they’re needed.</p>
            </section>

            <section class="mt-[20px]">
                <h3 class="text-xl lg:text-2xl font-bold">Can I track my donations?</h3>
                <p class="w-4/4">Absolutely! RepCollect will provide real-time tracking, so you can monitor the progress of your contributions and see the impact they’re making.</p>
            </section>
        </section>
    </section>
</main>
