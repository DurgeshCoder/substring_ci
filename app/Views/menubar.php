<!-- Navbar -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="<?= base_url('/') ?>" class="text-white font-bold text-xl">Substring Technologies</a>

        <!-- Mobile Menu (Always visible) -->
        <div class="md:hidden">
            <button type="button" class="text-white hover:text-blue-200 focus:outline-none" id="mobileMenuButton">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu (Hidden on smaller screens) -->
        <div class="hidden md:flex space-x-4" id="desktopMenu">
            <a href="<?= base_url('/') ?>" class="text-white hover:text-blue-200">Home</a>
            <a href="<?= base_url('/about') ?>" class="text-white hover:text-blue-200">About</a>
            <a href="<?= base_url('/services') ?>" class="text-white hover:text-blue-200">Services</a>
            <a href="<?= base_url('/contact-us') ?>" class="text-white hover:text-blue-200">Contact</a>
        </div>
    </div>

    <!-- Mobile Menu (Hidden on larger screens) -->
    <div class="md:hidden hidden" id="mobileMenu">
        <a href="#" class="block text-white hover:text-blue-200 py-2">Home</a>
        <a href="#" class="block text-white hover:text-blue-200 py-2">About</a>
        <a href="#" class="block text-white hover:text-blue-200 py-2">Services</a>
        <a href="#" class="block text-white hover:text-blue-200 py-2">Contact</a>
    </div>
</nav>