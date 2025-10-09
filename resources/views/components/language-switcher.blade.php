@php
    $currentLocale = app()->getLocale();
    $availableLocales = config('app.available_locales');
    
    $flags = [
        'az' => '<img src="' . asset('images/Flag_of_Azerbaijan.svg') . '" alt="Azerbaijan" class="w-5 h-5 rounded-sm object-cover">',
        'en' => '<img src="' . asset('images/Flag_of_the_United_Kingdom.svg') . '" alt="United Kingdom" class="w-5 h-5 rounded-sm object-cover">',
        'ru' => '<img src="' . asset('images/Flag_of_Russia.svg') . '" alt="Russia" class="w-5 h-5 rounded-sm object-cover">',
    ];
    
    $getCurrentFlag = $flags[$currentLocale] ?? '🌐';
@endphp

<div class="language-switcher relative inline-block">
    <div class="dropdown">
        <button class="dropdown-toggle flex items-center space-x-2 px-3 py-2 text-sm font-medium text-white hover:text-[#1E9BF0] focus:outline-none" 
                type="button" 
                onclick="toggleDropdown()">
            <span class="flag-icon">
                {!! $getCurrentFlag !!}
            </span>
            <span>{{ $availableLocales[$currentLocale] }}</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        
        <div id="languageDropdown" class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 hidden z-50">
            <div class="py-1">
                @foreach($availableLocales as $locale => $name)
                    @php
                        $localeFlag = $flags[$locale] ?? '🌐';
                    @endphp
                    <a href="{{ route('locale.switch', $locale) }}" 
                       class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ $currentLocale == $locale ? 'bg-gray-50 font-medium' : '' }}">
                        <span class="flag-icon">
                            {!! $localeFlag !!}
                        </span>
                        <span>{{ $name }}</span>
                        @if($currentLocale == $locale)
                            <svg class="w-4 h-4 ml-auto text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
function toggleDropdown() {
    const dropdown = document.getElementById('languageDropdown');
    dropdown.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('languageDropdown');
    const button = event.target.closest('.dropdown-toggle');
    
    if (!button && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});
</script>

<style>
.language-switcher .dropdown-menu {
    min-width: 160px;
}

.flag-icon {
    font-size: 1.2em;
}

.flag-icon img {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
</style>