<x-app>
    <x-slot:title>
        RepCollect | Sign Up
    </x-slot>

    <section class="flex flex-col gap-2 rounded-md p-1 px-10 w-[450px] shadow-md md:w-[600px] lg:px-0 lg:mx-0 lg:justify-center lg:items-center ">
        <div class="lg:w-[500px] text-neutral">
            <div class="mb-6 lg:mb-8 flex items-center gap-2 mt-12 lg:mt-20">
                <h2 class="text-sm font-bold md:text-md lg:text-lg gradient-text"> <a href="{{route('home')}}">RepCollect</a></h2> |
                <span>Sign up</span>
            </div>

            <div class="text-gray-600 ">
                <h1 class="text-lg font-bold md:text-xl lg:text-2xl">Get Started Now</h1>
                <p class="mb-10 text-sm lg:text-lg">Enter your credentials to access your account</p>
                 @if($errors->any())
                <div>
                    @foreach ($errors->all() as $error )
                    <p class='text-destructive'>* {{$error}}</p>
                    @endforeach
                </div>
                @endif
                <a href="{{route('auth.google')}}" class="border border-slate-300 p-1 rounded-md flex gap-3 items-center justify-center font-bold text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
                <path d="M23.5 13.2607C23.5 12.4482 23.4271 11.667 23.2917 10.917H12.5V15.3493H18.6667C18.401 16.7816 17.5938 17.9951 16.3802 18.8076V21.6826H20.0833C22.25 19.6878 23.5 16.7503 23.5 13.2607Z" fill="#4285F4"/>
                <path d="M12.5003 24.458C15.5941 24.458 18.1878 23.432 20.0837 21.682L16.3805 18.807C15.3545 19.4945 14.042 19.9007 12.5003 19.9007C9.51595 19.9007 6.98991 17.8851 6.08887 15.1768H2.26074V18.1455C4.14616 21.8903 8.02116 24.458 12.5003 24.458Z" fill="#34A853"/>
                <path d="M6.08887 15.1774C5.8597 14.4899 5.72949 13.7555 5.72949 13.0003C5.72949 12.2451 5.8597 11.5107 6.08887 10.8232V7.85449H2.26074C1.45866 9.45122 1.04129 11.2135 1.04199 13.0003C1.04199 14.8493 1.4847 16.5993 2.26074 18.1462L6.08887 15.1774Z" fill="#FBBC05"/>
                <path d="M12.5003 6.09928C14.1826 6.09928 15.693 6.67741 16.8805 7.81283L20.167 4.52637C18.1826 2.67741 15.5889 1.54199 12.5003 1.54199C8.02116 1.54199 4.14616 4.1097 2.26074 7.85449L6.08887 10.8232C6.98991 8.11491 9.51595 6.09928 12.5003 6.09928Z" fill="#EA4335"/>
                </svg> Sign up with Google
                </a>
                <div class="relative flex flex-col  justify-center">
                    <hr class="h-px mt-8 bg-neutral dark:bg-gray-700">
                    <span class="absolute right-[50%] top-[20px] px-1 shadow-xl rounded-md font-medium">or</span>
                </div>
            </div>
        </div>

        <form action="{{route('register')}}" class="md:w-[500px] text-neutral" method="POST">
            @csrf
            <div class="my-5 flex flex-col">
                <label for="email" class="text-sm text-gray-600 font-semibold">Email address</label>
                <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                    <x-icons.mail-small class="text-gray-400" />
                    <input class="outline-none p-2 lg:w-full placeholder:text-sm lg:placeholder:text-md flex-1" type="email" id="email" name="email" placeholder="example@gmail.com">
                </div>
            </div>

            <div class="my-5 flex flex-col">
                <label for="password" class="text-sm  text-gray-600 font-semibold">Password</label>
                <div class="flex gap-2 outline-none border border-gray-300 rounded-md px-2 items-center">
                    <x-icons.lock class="text-gray-400"/>
                    <input class="outline-none p-2 flex-1" type="password" id="password" name="password" placeholder="••••••••••">
                </div>
                {{-- <a href="#" class="text-sm font-bold text-gray-700 text-right">Forgot password?</a> --}}
            </div>

            <div class="mt-10 .flex mb-10">
                <x-ui.button size="default" variant="default" className="bg-gradient-to-r from-brand-blue to-brand-teal text-white px-2 py-4 h-auto text-lg">
                    Sign Up <div wire:loading> | Signing up...</div>
                </x-ui.button>
            </div>
            <p class="text-sm text-brand-dark font-bold  mb-[20px]">Already have an account? <a  class='text-brand-teal text-sm' href="<?php echo route('login') ?>">Sign In</a></p>
        </form>
    </section>
</x-app>
