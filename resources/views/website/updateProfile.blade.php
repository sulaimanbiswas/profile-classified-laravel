@extends('layouts.user')

@section('heads')
    <title>Home - Page</title>
@endsection

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 flex flex-col gap-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">User</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Update
                                Profile</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="grid grid-cols-2 gap-4 ">
                <div class="flex flex-col gap-4">
                    <div
                        class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <form class="p-3 flex flex-col gap-2 w-full">
                            <h2 class="text-2xl ">Personal Information</h2>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <label htmlFor="name" class="mb-2 block text-sm font-medium">
                                        Full Name
                                    </label>
                                    <input type="text" id="name"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        placeholder="ex. John Doe" />
                                </div>

                                <div class="">
                                    <label htmlFor="age" class="mb-2 block text-sm font-medium">
                                        Age
                                    </label>
                                    <input type="number" id="age"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        placeholder="ex. 21" min={21} />
                                </div>

                                <div class="">
                                    <label htmlFor="gender" class="mb-2 block text-sm font-medium">
                                        Gender
                                    </label>

                                    <select name="gender"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        id="gender">
                                        <option value="" class="hidden">
                                            Select Gender
                                        </option>
                                        <option value="">Man</option>
                                        <option value="">Woman</option>
                                    </select>
                                </div>

                                <div class="">
                                    <label htmlFor="bodyType" class="mb-2 block text-sm font-medium">
                                        Body Type
                                    </label>

                                    <select name="bodyType"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        id="bodyType">
                                        <option value="" class="hidden">
                                            Select Gender
                                        </option>
                                        <option value="">Man</option>
                                        <option value="">Woman</option>
                                    </select>
                                </div>

                                <div class="">
                                    <label htmlFor="height" class="mb-2 block text-sm font-medium">
                                        Height
                                    </label>

                                    <select name="height"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        id="height">
                                        <option value="" class="hidden">
                                            Select Gender
                                        </option>
                                        <option value="">Man</option>
                                        <option value="">Woman</option>
                                    </select>
                                </div>

                                <div class="">
                                    <label htmlFor="hairColor" class="mb-2 block text-sm font-medium">
                                        Hair Color
                                    </label>

                                    <select name="hairColor"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        id="hairColor">
                                        <option value="" class="hidden">
                                            Select Gender
                                        </option>
                                        <option value="">Man</option>
                                        <option value="">Woman</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label htmlFor="eyeColor" class="mb-2 block text-sm font-medium">
                                        Eye Color
                                    </label>

                                    <select name="eyeColor"
                                        class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                        id="eyeColor">
                                        <option value="" class="hidden">
                                            Select Gender
                                        </option>
                                        <option value="">Man</option>
                                        <option value="">Woman</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label htmlFor="caters" class="mb-2 block text-sm font-medium">
                                        Caters to
                                    </label>
                                    <div class="flex items-center gap-4 mt-4 ml-2">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="men"
                                                class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                            <label htmlFor="men" class="ml-2 text-sm text-slate-500 font-medium">
                                                Men
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="women"
                                                class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                            <label htmlFor="women" class="ml-2 text-sm text-slate-500 font-medium">
                                                Women
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <label htmlFor="availability" class="mb-2 block text-sm font-medium">
                                    Availability
                                </label>
                                <div class="flex flex-wrap items-center gap-4 mt-4 ml-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="sun"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="sun" class="ml-2 text-sm text-slate-500 font-medium">
                                            SUN
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="mon"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="mon" class="ml-2 text-sm text-slate-500 font-medium">
                                            MON
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="tue"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="tue" class="ml-2 text-sm text-slate-500 font-medium">
                                            TUE
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="wed"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="wed" class="ml-2 text-sm text-slate-500 font-medium">
                                            WED
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="thu"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="thu" class="ml-2 text-sm text-slate-500 font-medium">
                                            THU
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="fri"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="fri" class="ml-2 text-sm text-slate-500 font-medium">
                                            FRI
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="sat"
                                            class="checkbox checkbox-xs checkbox-primary rounded-none" />
                                        <label htmlFor="sat" class="ml-2 text-sm text-slate-500 font-medium">
                                            SAT
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="mt-2 bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md  ">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <div
                        class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <form class="p-3 flex flex-col gap-3 w-full">
                            <h2 class="text-2xl ">About You</h2>
                            <textarea id="myeditorinstance"></textarea>
                            <div class="flex justify-end">
                                <button
                                    class="mt-2 bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md  ">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div
                        class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <form class="p-6 flex flex-col gap-3 w-full">
                            <h2 class="text-2xl ">Address</h2>
                            <div class="">
                                <label htmlFor="streetAddress" class="mb-2 block text-sm font-medium">
                                    Street Address
                                </label>
                                <input type="text" id="streetAddress"
                                    class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. 123 Main St" />
                            </div>
                            <div class="grid grid-flow-row-dense grid-cols-5 gap-3">
                                <div class="col-span-2">
                                    <div class="">
                                        <label htmlFor="state" class="mb-2 block text-sm font-medium">
                                            State
                                        </label>

                                        <select name="state"
                                            class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                            id="state">
                                            <option value="" class="hidden">
                                                Select Gender
                                            </option>
                                            <option value="">Man</option>
                                            <option value="">Woman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="">
                                        <label htmlFor="city" class="mb-2 block text-sm font-medium">
                                            City
                                        </label>

                                        <select name="city"
                                            class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                            id="city">
                                            <option value="" class="hidden">
                                                Select Gender
                                            </option>
                                            <option value="">Man</option>
                                            <option value="">Woman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <div class="">
                                        <label htmlFor="zipCode" class="mb-2 block text-sm font-medium">
                                            Zip Code
                                        </label>
                                        <input type="text" id="zipCode"
                                            class="block w-full rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                            placeholder="ex. 00000" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="mt-2 bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md  ">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <div
                        class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <form class="p-6 flex flex-col gap-3 w-full">
                            <h2 class="text-2xl ">Contact Information</h2>
                            <div class="flex items-center justify-between">
                                <label htmlFor="website" class="w-1/4 mb-2 block text-sm font-medium">
                                    Website
                                </label>
                                <input type="text" id="website"
                                    class="w-3/4 block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. www.domain.com" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label htmlFor="email" class="w-1/4 mb-2 block text-sm font-medium">
                                    Email
                                </label>
                                <input type="email" id="email"
                                    class="w-3/4 block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. user@domain.com" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label htmlFor="whatsApp" class="w-1/4 mb-2 block text-sm font-medium">
                                    WhatsApp
                                </label>
                                <input type="text" id="whatsApp"
                                    class="w-3/4 block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. +1(000)000-0000" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label htmlFor="twitter" class="w-1/4 mb-2 block text-sm font-medium">
                                    Twitter
                                </label>
                                <input type="text" id="twitter"
                                    class="w-3/4 block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. @username" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label htmlFor="onlyfans" class="w-1/4 mb-2 block text-sm font-medium">
                                    Onlyfans
                                </label>
                                <input type="text" id="onlyfans"
                                    class="w-3/4 block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. @username" />
                            </div>
                            <div class="">
                                <label htmlFor="contactDescription" class="w-full mb-2 block text-sm font-medium">
                                    Contact Description
                                </label>
                                <textarea type="text" id="contactDescription"
                                    class="w-full block rounded border-[1px] p-2.5 dark:bg-slate-800/60 dark:border-slate-700/50 focus:outline-none focus:border-primary"
                                    placeholder="ex. Description" rows={5}></textarea>
                            </div>

                            <div class="flex justify-end">
                                <button
                                    class="mt-2 bg-primary text-white text-center font-medium hover:text-black hover:bg-white border-2 border-transparent hover:border-primary  px-4 py-1.5 rounded-md  ">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('website/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#myeditorinstance'), {
                placeholder: 'Type the content here!'
            }).create('<p>Hello world!</p>')
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
