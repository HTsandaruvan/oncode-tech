<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10) ? true : false"
    :class="{ 'bg-black shadow-lg': open || scrolled, 'bg-black/90': !open && !scrolled }"
    class="fixed w-full z-50 transition-all duration-500 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <!-- Logo Image -->
                    <img src="{{ asset('images/oncode-logo.png') }}" alt="Oncode Tech Solution Logo"
                        class="h-10 md:h-12 mr-2">
                    <!-- Text Logo (fallback) -->
                    <span class="text-2xl font-bold text-amber-50 hidden md:block">
                        <span class="text-white">Oncode Tech Solution</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/"
                    class="text-white hover:text-orange-400 px-3 py-2 font-medium transition duration-300">Home</a>
                <a href="services"
                    class="text-white hover:text-orange-400 px-3 py-2 font-medium transition duration-300">Services</a>
                <a href="projects"
                    class="text-white hover:text-orange-400 px-3 py-2 font-medium transition duration-300">Projects</a>
                <a href="about"
                    class="text-white hover:text-orange-400 px-3 py-2 font-medium transition duration-300">About</a>
                <a href="contact"
                    class="text-white hover:text-orange-400 px-3 py-2 font-medium transition duration-300">Contact</a>

                <a href="contact"
                    class="ml-4 px-6 py-2 bg-red-400 text-white font-medium hover:bg-red-500 rounded-full transition duration-300">Get
                    Quote</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-orange-400 focus:outline-none transition duration-300">
                    <svg class="h-6 w-6" :class="{ 'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'hidden': !open, 'block': open }" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="open" @click.away="open = false" class="md:hidden bg-black shadow-lg rounded-b-lg">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/"
                class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-orange-400 hover:bg-gray-900">Home</a>
            <a href="services"
                class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-orange-400 hover:bg-gray-900">Services</a>
            <a href="projects"
                class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-orange-400 hover:bg-gray-900">Projects</a>
            <a href="about"
                class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-orange-400 hover:bg-gray-900">About</a>
            <a href="contact"
                class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-orange-400 hover:bg-gray-900">Contact</a>

            <a href="contact"
                class="block px-3 py-2 mt-4 bg-orange-400 text-black font-medium hover:bg-orange-400-dark rounded-full text-center">Get
                Quote</a>
        </div>
    </div>
</nav>
