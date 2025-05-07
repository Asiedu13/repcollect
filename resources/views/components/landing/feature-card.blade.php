<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
{{--    TODO: Tag some as coming soon --}}
    <div class="bg-white rounded-xl p-6 shadow-sm border hover:shadow-md transition-shadow duration-300">
        <div class="rounded-full bg-gradient-to-br from-brand-blue/20 to-brand-teal/20 p-3 inline-block mb-4">
            <div>
                {{$slot}}
            </div>
        </div>
        <h3 class="text-xl font-semibold mb-2">{{$attributes['title']}}</h3>
        <p class="text-gray-600">{{$attributes['description']}}</p>
    </div>
</div>
