@extends('layouts.website')

@section('heads')
    <title>Home - Page</title>
@endsection

@section('content')
    <div class="">
        <div class="bg-slate-200 p-3 rounded-lg">
            <div
                class="grid grid-flow-row-dense grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-12 items-center justify-between gap-3 py-2">
                <div class="col-span-1 xl:col-span-3">
                    <input type="text" name=""
                        class="text-slate-900 border-2 border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-primary w-full"
                        placeholder="what are you looking for ?" />
                </div>
                <div class="col-span-1 xl:col-span-2">
                    <select name="" id=""
                        class="text-slate-900 border-2 border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:border-primary w-full">
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                    </select>
                </div>
                <div class="col-span-1 xl:col-span-2">
                    <select name="" id=""
                        class="text-slate-900 border-2 border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:border-primary w-full">
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                    </select>
                </div>
                <div class="col-span-1 xl:col-span-2">
                    <select name="" id=""
                        class="text-black border-2 border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:border-primary w-full">
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                    </select>
                </div>
                <div class="col-span-1 xl:col-span-2">
                    <select name="" id=""
                        class="text-black border-2 border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:border-primary w-full">
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                        <option value="volvo">All Categories</option>
                    </select>
                </div>
                <div class="col-span-1 xl:col-span-1">
                    <button
                        class="bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md w-full ">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 md:mt-8">
        <div class="">
            <div class="border-primary border-b-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-slate-900">
                    Featured Profiles
                </h2>
                <a href="#" class="flex items-center gap-2 text-slate-900 hover:text-primary">
                    <span>See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                </a>
            </div>
            <div class="mt-4 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-4 md:mt-8">
        <div class="">
            <div class="border-primary border-b-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-slate-900">
                    Latest Profile
                </h2>
                <a href="#" class="flex items-center gap-2 text-slate-900 hover:text-primary">
                    <span>See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                </a>
            </div>
            <div class="mt-4 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card" href="/profile">
                    <div class="bg-gray-100 p-4 rounded-lg h-full">
                        <div class="">
                            <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={500} height={400}
                                alt="" />
                        </div>
                        <div class="mt-2">
                            <h1 class="card-title text-xl font-semibold hover:text-primary">
                                Jhon Doe
                            </h1>
                            <small class="italic text-gray-500 font-semibold">
                                React Developer
                            </small>
                            <p class="text-gray-950">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptatum.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
