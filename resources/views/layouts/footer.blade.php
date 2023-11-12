<footer class="bg-gray-900 mt-10">
    <div class="container px-2 md:px-10 lg:px-40  mx-auto">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('website/images/logo.png') }}" class="h-12 me-3" alt="" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-3 text-sm font-semibold uppercase text-white">Importent Links</h2>
                        <ul class=" text-gray-400 font-medium flex flex-col gap-2">
                            <li class="">
                                <a href="/" class="hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="/profile" class="hover:underline">Profile</a>
                            </li>
                            <li>
                                <a href="/" class="hover:underline">location</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 text-sm font-semibold uppercase text-white">Blogs</h2>
                        <ul class=" text-gray-400 font-medium flex flex-col gap-2">
                            <li class="">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 text-sm font-semibold  uppercase text-white">Legal</h2>
                        <ul class=" text-gray-400 font-medium flex flex-col gap-2">
                            <li class="">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center text-gray-400">© <?php echo date('Y'); ?> <a href="/"
                        class="hover:underline">Profile Classified</a>. - All rights reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium  text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
