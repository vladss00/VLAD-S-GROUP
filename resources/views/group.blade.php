    <x-layout>
        <div class="max-w-6xl w-full bg-white shadow-2xl rounded-2xl p-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">🌟 Our Crazyyy Group 🌟</h1>

        <div class="grid md:grid-cols-20 gap-20">
            @foreach($members as $member)
                <div x-data="{ open: false }"
                     :class="open 
                        ? 'col-span-2 scale-200 border-indigo-400 shadow-2xl z-10' 
                        : 'scale-200'"
                     class="relative bg-gray-50 border border-gray-200 rounded-xl shadow-md transition-all duration-500 ease-in-out p-6 hover:shadow-xl">

                    <!-- Avatar + Name -->
                    <div class="flex items-center space-x-4">
                        @if(!empty($member['image']))
                            <img src="{{ $member['image'] }}" 
                                 alt="{{ $member['name'] }}" 
                                 class="w-14 h-14 rounded-full object-cover border-2 border-indigo-300 shadow-sm">
                        @else
                            <div class="w-14 h-14 bg-indigo-200 rounded-full flex items-center justify-center text-indigo-700 font-bold text-xl">
                                {{ substr($member['name'], 0, 1) }}
                            </div>
                        @endif

                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">{{ $member['name'] }}</h2>
                            <button @click="open = !open"
                                    class="mt-1 text-sm text-blue-600 hover:text-blue-800 font-medium focus:outline-none transition">
                                <span x-show="!open">Show Details</span>
                                <span x-show="open">Hide Details</span>
                            </button>
                        </div>
                    </div>

                    <!-- Details Section -->
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform -translate-y-3 scale-95"
                         x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-400"
                         x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 transform -translate-y-3 scale-95"
                         class="mt-6 p-5 bg-indigo-50 rounded-lg text-gray-700 space-y-4">

                        <!-- Role -->
                        <p class="flex items-center">
                            <span class="text-indigo-900 font-semibold mr-10">🎯 Role:</span>
                            {{ $member['role'] ?? 'Member' }}
                        </p>
                        <div class="flex space-x-4">
                            @if(!empty($member['about']))
                                <a href="{{ $member['about'] }}" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800">📖About me</a>
                            @endif
                        </div>
                        <!-- Social -->
                        <div class="flex space-x-4">
                            @if(!empty($member['facebook']))
                                <a href="{{ $member['facebook'] }}" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800">🌐 Facebook</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </x-layout>
    
    