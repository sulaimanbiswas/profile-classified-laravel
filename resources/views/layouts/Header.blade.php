<nav>
    <div class="bg-slate-900">
        <div class="container px-2 md:px-10 lg:px-40 mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start gap-10">
                    <div class="">
                        <a href="/">
                            <img src="{{ asset('website/images/logo.png') }}" width="200" height="100"
                                alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="flex text-white gap-1 ">
                    <a class="hover:text-primary" href='/login'> Login </a>/
                    <a class="hover:text-primary" href='/register'> Register </a>
                </div>
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
