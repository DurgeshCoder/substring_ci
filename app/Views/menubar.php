<!-- Navbar -->
<nav class="bg-white p-4 fixed-top ">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="<?= base_url('/') ?>" class="text-blue-900 font-bold text-xl md:text-xl xl:text-2xl">Substring Technologies</a>

        <!-- Mobile Menu (Always visible) -->
        <div class="md:hidden">
            <button type="button" class="text-blue-900 hover:text-blue-500 focus:outline-none font-bold mt-2" id="mobileMenuButton">
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop Menu (Hidden on smaller screens) -->
        <div class="hidden md:flex space-x-4 xl:space-x-8" id="desktopMenu">
            <a href="<?= base_url('/') ?>" class="text-blue-900  font-bold">Home</a>
            <a href="<?= base_url('/about') ?>" class="text-blue-900  font-bold">Services</a>
            <a href="<?= base_url('/services') ?>" class="text-blue-900  font-bold">Development</a>
            <a href="<?= base_url('/contact-us') ?>" class="text-blue-900  font-bold">Training</a>
            <a href="<?= base_url('/') ?>" class="text-blue-900 font-bold">Gallery</a>
            <a href="<?= base_url('/about') ?>" class="text-blue-900  font-bold">AboutUs</a>
            <a href="<?= base_url('/services') ?>" class="text-blue-900  font-bold">ContactUs</a>
<!--            <a href="--><?php //= base_url('/contact-us') ?><!--" class=" text-blue-900 hover:text-blue-500 font-bold">Get Started</a>-->
        </div>
    </div>

    <!-- Mobile Menu (Hidden on larger screens) -->
    <div class="md:hidden bg-white shadow-lg rounded-4 mt-6 hidden text-center p-2 min-vh-75 " id="mobileMenu">
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="#" class="block text-blue-900 py-2">Home</a>
        </div>
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="<?= base_url('/about') ?>" class="block text-blue-900 py-2">Services</a>
        </div>
            <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="#" class="block text-blue-900  py-2">Development</a>
            </div>
                <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="#" class="block text-blue-900  py-2">Training</a>
                </div>
                    <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="#" class="block text-blue-900  py-2">Gallery</a>
                    </div>
                        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="<?= base_url('/about') ?>" class="block text-blue-900 hover:text-blue-500 py-2">AboutUs</a>
                        </div>
                            <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
        <a href="#" class="block text-blue-900 py-2">ContactUs</a>
                            </div>
                                <div class="w-50 bg-white shadow-lg rounded-2 mt-6 mb-5 text-center mx-auto">
        <a href="#" class="block text-blue-900  py-2">Get Started</a>
                                </div>
    </div>
</nav>





