<div>
    {{-- Stop trying to control. --}}
    <nav x-data="{open: false}" class="w-full py-4 bg-white/95 backdrop-blur-sm fixed top-0 z-50 border-b">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold gradient-text">RepCollect</a>
                </div>
                {{--                {/* Desktop Navigation */}--}}
                @guest
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#features" class="text-gray-600 hover:text-brand-blue transition duration-200">Features</a>
                        <a href="#how-it-works" class="text-gray-600 hover:text-brand-blue transition duration-200">How It Works</a>

                        <x-ui.button className="ml-2 py-2" variant="outline" size="sm">
                            <a href="{{route('login')}}">Log in</a>
                        </x-ui.button>

                        <x-ui.button className="bg-gradient-to-r from-brand-blue to-brand-teal text-white py-2" size="sm">
                            <a href="{{route('register')}}">Get Started</a>
                        </x-ui.button>
                    </div>
                @endguest

                {{--                {/* Mobile Menu Button */}--}}
                @guest
                    <div class="md:hidden" @click="open = ! open">
                        <x-ui.button
                            variant="ghost"
                            size="icon"
                            aria-label="Toggle Menu"
                        >
                            <div x-show="open">
                                <x-icons.x size={24} />
                            </div>
                            <div x-show="!open">
                                <x-icons.menu size={24} />
                            </div>
                        </x-ui.button>
                    </div>
                </div>
            @endguest
            {{--            {/* Mobile Navigation */}--}}
            @guest
                <div x-show="open" @click.outside="open = false" class="md:hidden absolute top-16 left-0 right-0 bg-white shadow-lg z-50 p-4 border-t">
                        <div class="flex flex-col space-y-3">
                            <a href="#features"
                               class="text-gray-600 hover:text-brand-blue py-2 px-4"
                               x-on:click="open=false">
                                Features
                            </a>
                            <a
                                href="#how-it-works"
                                class="text-gray-600 hover:text-brand-blue py-2 px-4"
                                x-on:click="open= false"
                            >
                                How It Works
                            </a>

                            <div class="pt-2 flex flex-col space-y-2">
                                <x-ui.button className="something" variant="outline">Log In</x-ui.button>
                                <x-ui.button className="bg-gradient-to-r from-brand-blue to-brand-teal text-white">
                                    Get Started
                                </x-ui.button>
                            </div>
                        </div>
                </div>
            @endguest

            @auth
                <div x-data="{profileOpen: false}">
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="dropbtn inline-flex justify-center w-full rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" @click.outside="profileOpen = false" @click="profileOpen = !profileOpen">
                                <div class="relative">
                                    <img class="inline-block h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile image">
                                    <span class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full ring-2 ring-white bg-green-400"></span>
                                </div>
                            </button>
                        </div>

                        <div x-show="profileOpen" id="myDropdown" class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Item 1</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-1">Item 2</a>
                                <hr class="my-1">
                                <div class="px-4 pt-2 pb-1 text-xs text-gray-500 uppercase tracking-wider">Notifications</div>

                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">
                                    <p class="font-semibold text-gray-800">New direct message</p>
                                    <p class="text-xs text-gray-600 truncate">You have a new message from <span class="font-medium">Alice Wonderland</span>.</p>
                                    <p class="text-xs text-blue-500 mt-0.5">2 minutes ago</p>
                                </a>

                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 bg-blue-50" role="menuitem" tabindex="-1">
                                    <p class="font-semibold text-gray-800">Project Update</p>
                                    <p class="text-xs text-gray-600">Task 'UI Design' in 'Phoenix Project' has been updated.</p>
                                    <p class="text-xs text-blue-500 mt-0.5">1 hour ago</p>
                                </a>

                                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">
                                    <p class="font-semibold text-red-600">Action Required: Payment Failed</p>
                                    <p class="text-xs text-gray-600">Your recent payment for subscription could not be processed.</p>
                                    <p class="text-xs text-blue-500 mt-0.5">1 day ago</p>
                                </a>

                                <div class="px-4 py-2">
                                    <button type="button" class="w-full text-center text-sm text-blue-600 hover:text-blue-800 font-medium py-1">
                                        View all notifications
                                    </button>
                                </div>
                                <hr class="my-1">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-2">
                                    Logout
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
</div>
