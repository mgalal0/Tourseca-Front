<!-- Search Container with Background Effects -->
<div class="relative w-full max-w-6xl mx-auto px-4 py-6 ">
    <!-- Glassmorphism Search Bar -->
    <div class="hidden md:block bg-white/90 backdrop-blur-lg rounded-[30px] p-3 shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_8px_40px_rgba(200,230,119,0.3)] transition-all duration-500 border border-white/20">        <!-- Search Form -->
        <form class="flex items-center gap-3 px-3">
            <!-- Destination Select -->
            <div class="relative flex-1 group">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6">
                    <svg class="w-full h-full text-[#06414A] group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <select class="w-full appearance-none bg-transparent pl-12 pr-10 py-4 text-[#06414A] font-medium border-2 border-transparent focus:border-[#C8E677] rounded-2xl cursor-pointer outline-none transition-all duration-300 hover:bg-[#f8faf1]">
                    <option value="cairo">Cairo</option>
                    <option value="luxor">Luxor</option>
                    <option value="alexandria">Alexandria</option>
                    <option value="aswan">Aswan</option>
                </select>
                <!-- Custom Dropdown Arrow -->
                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none group-hover:translate-y-[-45%] transition-transform duration-300">
                    <svg class="w-5 h-5 text-[#06414A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            <!-- Date Picker -->
            <div class="relative flex-1 group">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6">
                    <svg class="w-full h-full text-[#06414A] group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                </div>
                <input type="date" class="w-full bg-transparent pl-12 pr-6 py-4 text-[#06414A] font-medium border-2 border-transparent focus:border-[#C8E677] rounded-2xl outline-none transition-all duration-300 hover:bg-[#f8faf1] cursor-pointer">
            </div>

            <!-- Duration Select -->
            <div class="relative flex-1 group">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6">
                    <svg class="w-full h-full text-[#06414A] group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <select class="w-full appearance-none bg-transparent pl-12 pr-10 py-4 text-[#06414A] font-medium border-2 border-transparent focus:border-[#C8E677] rounded-2xl cursor-pointer outline-none transition-all duration-300 hover:bg-[#f8faf1]">
                    <option value="">Duration</option>
                    <option value="3">3 Days</option>
                    <option value="5">5 Days</option>
                    <option value="7">7 Days</option>
                    <option value="10">10 Days</option>
                </select>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none group-hover:translate-y-[-45%] transition-transform duration-300">
                    <svg class="w-5 h-5 text-[#06414A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            <!-- Price Range Select -->
            <div class="relative flex-1 group">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6">
                    <svg class="w-full h-full text-[#06414A] group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <select class="w-full appearance-none bg-transparent pl-12 pr-10 py-4 text-[#06414A] font-medium border-2 border-transparent focus:border-[#C8E677] rounded-2xl cursor-pointer outline-none transition-all duration-300 hover:bg-[#f8faf1]">
                    <option value="">Price Range</option>
                    <option value="budget">Budget ($)</option>
                    <option value="comfort">Comfort ($$)</option>
                    <option value="luxury">Luxury ($$$)</option>
                </select>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none group-hover:translate-y-[-45%] transition-transform duration-300">
                    <svg class="w-5 h-5 text-[#06414A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            <!-- Search Button -->
            <button class="bg-gradient-to-r from-[#C8E677] to-[#9BE677] hover:from-[#d4f281] hover:to-[#a7f281] text-[#06414A] px-8 py-4 rounded-2xl font-medium transition-all duration-300 flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-[#C8E677] focus:ring-offset-2">
                <span>Search</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
        </form>
    </div>

    <!-- Mobile Filters -->
    <div class="md:hidden flex justify-center gap-4 mt-6">
        <button class="flex-1 bg-white/80 backdrop-blur-md rounded-xl py-3 px-6 font-medium text-[#06414A] shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 border border-white/20">
            <span class="flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                </svg>
                Filter
            </span>
        </button>
        <button class="flex-1 bg-white/80 backdrop-blur-md rounded-xl py-3 px-6 font-medium text-[#06414A] shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 border border-white/20">
            <span class="flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"/>
                </svg>
                Sort
            </span>
        </button>
    </div>
</div>

<style>
/* Custom date input styling */
input[type="date"]::-webkit-calendar-picker-indicator {
    background: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%2306414A' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
    width: 20px;
    height: 20px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

input[type="date"]::-webkit-calendar-picker-indicator:hover {
    transform: translateY(-2px);
}

/* Smooth hover transition for selects */
select:hover + div svg {
    transform: translateY(-2px);
}

/* Custom scrollbar for dropdowns */
select::-webkit-scrollbar {
    width: 8px;
}

select::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

select::-webkit-scrollbar-thumb {
    background: #C8E677;
    border-radius: 4px;
}

select::-webkit-scrollbar-thumb:hover {
    background: #9BE677;
}


</style>

<!-- Optional JavaScript for enhanced interactions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effect to select dropdowns
    const selects = document.querySelectorAll('select');
    selects.forEach(select => {
        select.addEventListener('mouseover', function() {
            this.nextElementSibling.querySelector('svg').style.transform = 'translateY(-2px) rotate(180deg)';
        });
        select.addEventListener('mouseout', function() {
            this.nextElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
        });
    });

    // Add ripple effect to buttons
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            let x = e.clientX - e.target.offsetLeft;
            let y = e.clientY - e.target.offsetTop;
            
            let ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            
            this.appendChild(ripple);
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});
</script>