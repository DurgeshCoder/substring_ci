<!-- Navbar -->
<nav class="bg-white border-b dark:border-0 shadow-lg dark:bg-gray-800 dark:text-blue-50 p-4 fixed-top ">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="<?= base_url('/') ?>"
           class="text-blue-900  dark:text-blue-50 font-bold text-xl md:text-xl xl:text-2xl">Substring
            Technologies</a>

        <!-- Mobile Menu (Always visible) -->
        <div class="md:hidden">
            <button type="button" class="text-blue-900 hover:text-blue-500 focus:outline-none font-bold mt-2"
                    id="mobileMenuButton">
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu (Hidden on smaller screens) -->
        <div class="hidden md:flex space-x-4 xl:space-x-8" id="desktopMenu">
            
            <a href="<?= base_url('/') ?>" class="text-blue-900   dark:text-blue-50   font-bold">Home</a>
            <a href="<?= base_url('/#services') ?>" class="text-blue-900   dark:text-blue-50   font-bold">Services</a>
            <a target="_blank" href="https://learncodewithdurgesh.com/courses"
               class="text-blue-900   dark:text-blue-50   font-bold">Courses</a>
            <a href="<?= base_url('/#recent-blog-posts') ?>"
               class="text-blue-900   dark:text-blue-50   font-bold">Blogs</a>
<!--                        <a href="-->
<!--            --><?php //= base_url('/training') ?><!--" class="text-blue-900    dark:text-blue-50  font-bold">Training</a>-->
            <!--            <a href="-->
            <?php //= base_url('/') ?><!--" class="text-blue-900    dark:text-blue-50 font-bold">Gallery</a>-->
            <a href="<?= base_url('/about') ?>" class="text-blue-900    dark:text-blue-50  font-bold">AboutUs</a>
            <a href="<?= base_url('/#contact') ?>" class="text-blue-900    dark:text-blue-50  font-bold">ContactUs</a>

            <!-- Dark mode switcher -->
            <button
                    id="theme-toggle"
                    type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm "
            >
                <svg
                        id="theme-toggle-dark-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                    ></path>
                </svg>
                <svg
                        id="theme-toggle-light-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
            <!-- Dark mode switcher end -->
            <!--            <a href="-->
            <?php //= base_url('/contact-us') ?><!--" class=" text-blue-900 hover:text-blue-500 font-bold">Get Started</a>-->
        </div>
    </div>

    <!-- Mobile Menu (Hidden on larger screens) -->
    <div class="md:hidden bg-white shadow-lg rounded-4 mt-6 hidden text-center p-2 min-vh-75 " id="mobileMenu">
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="#" class="block text-blue-900 py-2">Home</a>
        </div>
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="<?= base_url('/#services') ?>" class="block text-blue-900 py-2">Services</a>
        </div>
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a target="_blank" href="https://learncodewithdurgesh.com/courses"
               class="block text-blue-900  py-2">Courses</a>
        </div>
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="<?= base_url('/#recent-blog-posts') ?>" class="block text-blue-900  py-2">Blogs</a>
        </div>
        <!--        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">-->
        <!--            <a href="#" class="block text-blue-900  py-2">Gallery</a>-->
        <!--        </div>-->
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="<?= base_url('/about') ?>" class="block text-blue-900 hover:text-blue-500 py-2">AboutUs</a>
        </div>
        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 text-center mx-auto">
            <a href="<?= base_url('/#contact') ?>" class="block text-blue-900 py-2">ContactUs</a>
        </div>
        <!--        <div class="w-50 bg-white shadow-lg rounded-2 mt-6 mb-5 text-center mx-auto">-->
        <!--            <a href="#" class="block text-blue-900  py-2">Get Started</a>-->
        <!--        </div>-->
    </div>
</nav>





