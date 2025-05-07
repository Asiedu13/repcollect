<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Powerful Features for <span class="gradient-text">Payment Tracking</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Everything you need to create, share, and track payment links in one simple platform
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-landing.feature-card title="Custom Payment Links"
                description="Create branded payment links with your own text and custom amounts in seconds.">
                    <x-icons.link class="h-6 w-6 text-brand-blue" />
                </x-landing.feature-card>

                <x-landing.feature-card
                title="Real-time Analytics"
                description="Track every payment with detailed analytics and insights on your dashboard."
                >
                    <x-icons.bar-chart-column class="h-6 w-6 text-brand-teal" />
                </x-landing.feature-card>

                <x-landing.feature-card
                title="Payment History"
                description="View complete payment history with timestamps and customer details."
                >
                    <x-icons.clock class="h-6 w-6 text-purple-600" />
                </x-landing.feature-card>

                <x-landing.feature-card
                title="Secure Transactions"
                description="Bank-level security ensures all payments and data are fully protected."
                >
                    <x-icons.shield class="h-6 w-6 text-blue-600" />
                </x-landing.feature-card>

                <x-landing.feature-card
                title="Share Anywhere"
                description="Share payment links on social media, email, text, or any platform instantly."
                >
                    <x-icons.globe class="h-6 w-6 text-green-600" />
                </x-landing.feature-card>

                <x-landing.feature-card
                title="Multiple Currencies"
                description="Accept payments in multiple currencies to reach global customers."
                >
                    <x-icons.dollar-sign class="h-6 w-6 text-amber-600" />
                </x-landing.feature-card>
            </div>
        </div>
    </section>
</div>
