<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <nav x-data="{open: false}" class="w-full py-4 bg-white/95 backdrop-blur-sm fixed top-0 z-50 border-b">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold gradient-text">RepCollect</a>
                </div>
{{--                {/* Desktop Navigation */}--}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-brand-blue transition duration-200">Features</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-brand-blue transition duration-200">How It Works</a>
                    <a href="#pricing" class="text-gray-600 hover:text-brand-blue transition duration-200">Pricing</a>

                    <x-ui.button class="ml-2" variant="outline" size="sm">Login </x-ui.button>
                    <x-ui.button class="bg-gradient-to-r from-brand-blue to-brand-teal text-white" size="sm"> Get Started </x-ui.button>
                </div>

{{--                {/* Mobile Menu Button */}--}}
                <div class="md:hidden"  @click="open = ! open">
                    <x-ui.button
                        variant="ghost"
                        size="icon"
                        aria-label="Toggle Menu"
                    >
{{--                    {isMenuOpen ? <X size={24} /> : <Menu size={24} />}--}}
                        <div x-show="open">
                            <x-icons.x size={24} />
                        </div>
                        <div x-show="!open">
                            <x-icons.menu size={24} />
                        </div>
                    </x-ui.button>
                </div>
            </div>

{{--            {/* Mobile Navigation */}--}}
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
                    <a
                        href="#pricing"
                        class="text-gray-600 hover:text-brand-blue py-2 px-4"
                        x-on:click="open=false"
                    >
                    Pricing
                    </a>
                    <div class="pt-2 flex flex-col space-y-2">
                        <x-ui.button variant="outline">Log In</x-ui.button>
                        <x-ui.button class="bg-gradient-to-r from-brand-blue to-brand-teal text-white"
                                >
                        Get Started
                        </x-ui.button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
