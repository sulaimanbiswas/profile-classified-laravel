@extends('layouts.website')

@section('heads')
    <title>Login - Page</title>
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center flex-1">
        <div class="w-full m-auto bg-white rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="/">
                    <img src="{{ asset('website/images/logo.png') }}" alt="" class="w-56 h-14 mx-auto mb-2 " />
                </a>
                <h3 class="font-semibold text-white text-xl mb-1">
                    Let's Get Started Freelancer
                </h3>
            </div>
            <form class="p-6 flex flex-col gap-2">
                <div class="">
                    <label for="email" class="mb-2 block text-sm font-medium">
                        Email
                    </label>
                    <input type="email" id="email"
                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                        placeholder="Enter Email" required />
                </div>
                <div class="">
                    <label for="password" class="mb-2 block text-sm font-medium">
                        Password
                    </label>
                    <input type="password" id="password"
                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                        placeholder="Enter Password" required />
                </div>
                <div class="flex items-center mt-2">
                    <input type="checkbox" name="" id="tramsCondition" class="accent-primary" />
                    <label for="tramsCondition" class="ml-2 text-sm text-slate-500 font-medium">
                        Remember me
                    </label>
                </div>
                <div
                    class="mt-2 bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md w-full ">
                    <button>Login</button>
                </div>
                <p>
                    Don't have an account?
                    <a href="/register" class="hover:text-primary no-underline">
                        Sign up
                    </a>
                </p>
            </form>
            <div class="flex justify-center mb-6">

            </div>
        </div>
    </div>
@endsection
