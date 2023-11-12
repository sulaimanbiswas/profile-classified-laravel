@extends('layouts.website')

@section('heads')
    <title>Home - Page</title>
    <link href="{{ asset('website/plugins/splide/splide.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="flex flex-col gap-6 mb-10">
        <div class="bg-slate-200 p-3 rounded-lg">
            <div
                class="grid grid-flow-row-dense grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-12 items-start justify-between gap-10 py-2">
                <div class="col-span-1 xl:col-span-2">
                    <img class="w-full" src="{{ asset('website/images/profile.jpg') }}" width={200} height={200}
                        alt="" />
                </div>
                <div class="col-span-1 xl:col-span-10 divide-y divide-solid divide-black flex flex-col gap-2">
                    <div class="flex justify-between items-start pr-3 ">
                        <div class="flex flex-col gap-1">
                            <h1 class="text-2xl font-semibold hover:text-primary cursor-pointer">
                                Bella
                            </h1>
                            <p>A Divine Nuru Treatment</p>
                        </div>
                        <button class="flex justify-start items-center gap-1 text-primary bg-white p-1 rounded-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <path
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.6 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                            <span class="font-semibold">Favourite</span>
                        </button>
                    </div>
                    <div class="flex flex-col gap-1 pt-1.5">
                        <p class="flex items-center gap-1">
                            <span>Active</span>
                            <span>Last active today</span>
                        </p>
                        <p class="flex items-center gap-1">
                            <span>New York, NY, US</span>
                        </p>
                        <p class="flex items-center gap-1">
                            <span>Woman</span>
                        </p>
                        <p>
                            My name is Bella. I am 5ft6, 110 pounds, former gymnast and certified massage therapist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-slate-200">
            <section class="splide" aria-label="Slide Container Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <img src="{{ asset('website/images/profile.jpg') }}">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <img src="{{ asset('website/images/profile.jpg') }}">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="container px-2 md:px-10 lg:px-60 mx-auto ">
            <div class="flex flex-col gap-6">
                <h1 class="text-2xl font-semibold text-center">
                    About Bella
                </h1>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod
                    distinctio repellat facere mollitia nobis est quam eveniet
                    voluptate? Reprehenderit veniam optio facilis sint. Quidem
                    eaque, officia illo est earum culpa! Nam laboriosam cumque
                    dignissimos atque nisi iste aspernatur excepturi dicta!
                </p>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod
                    distinctio repellat facere mollitia nobis est quam eveniet
                    voluptate? Reprehenderit veniam optio facilis sint. Quidem
                    eaque, officia illo est earum culpa! Nam laboriosam cumque
                    dignissimos atque nisi iste aspernatur excepturi dicta!
                </p>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod
                    distinctio repellat facere mollitia nobis est quam eveniet
                    voluptate? Reprehenderit veniam optio facilis sint. Quidem
                    eaque, officia illo est earum culpa! Nam laboriosam cumque
                    dignissimos atque nisi iste aspernatur excepturi dicta!
                </p>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod
                    distinctio repellat facere mollitia nobis est quam eveniet
                    voluptate? Reprehenderit veniam optio facilis sint. Quidem
                    eaque, officia illo est earum culpa! Nam laboriosam cumque
                    dignissimos atque nisi iste aspernatur excepturi dicta!
                </p>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod
                    distinctio repellat facere mollitia nobis est quam eveniet
                    voluptate? Reprehenderit veniam optio facilis sint. Quidem
                    eaque, officia illo est earum culpa! Nam laboriosam cumque
                    dignissimos atque nisi iste aspernatur excepturi dicta!
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
            <div class="bg-slate-100 p-3 rounded-lg ">
                <div class="flex flex-wrap gap-8 p-4">
                    <div class="">
                        <h4 class="text-base font-bold">Based in</h4>
                        <a href="#" class="hover:underline">
                            Manhattan, New York, United States
                        </a>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Caters to</h4>
                        <p>Men and Women</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Last active</h4>
                        <p>Today</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Gender</h4>
                        <p class="flex gap-1 items-center">
                            <span>Woman (She)</span>
                        </p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Age</h4>
                        <p>30s</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Body Type</h4>
                        <p>Curvy and Busty</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Height</h4>
                        <p>160 / 5'3"</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Cup Size</h4>
                        <p>DD</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Hair Colour</h4>
                        <p>Brunette</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Shoe Size</h4>
                        <p>8.5</p>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">Eye Colour</h4>
                        <p>Hazel</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-100 p-3 rounded-lg">
                <div class="flex flex-col  gap-2 p-4">
                    <h3 class="text-xl font-bold">Availability</h3>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex flex-col gap-0">
                            <span class="text-base">SUN</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">MON</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">TUE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">WED</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">THU</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">FRI</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-0">
                            <span class="text-base">SAT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <p>By APPOINTMENT ONLY !</p>
                        <p>I’m available between 10 am and 9pm.</p>
                        <p>Website: marina-manhattan.com</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-100 p-3 rounded-lg">
                <div class="flex flex-col gap-2 p-4">
                    <h3 class="text-xl font-bold">Incall</h3>
                    <div class="flex flex-col gap-6">
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Erotic Playtime Tease/Edge RATED R
                                </h4>
                                <p class="text-xs">
                                    I recommend you ask me all about it😈
                                </p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$600</span>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Erotic Nuru B2B Playtime RATED R
                                </h4>
                                <p class="text-xs">
                                    I recommend you ask me all about it😈
                                </p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$700</span>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Nuru/teasing and edging
                                </h4>
                                <p class="text-xs">Erotic Nuru tease/ edge</p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$400</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-100 p-3 rounded-lg">
                <div class="flex flex-col gap-2 p-4">
                    <h3 class="text-xl font-bold">OutCall</h3>
                    <div class="flex flex-col gap-6">
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Erotic Playtime Tease/Edge RATED R
                                </h4>
                                <p class="text-xs">
                                    I recommend you ask me all about it😈
                                </p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$600</span>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Erotic Nuru B2B Playtime RATED R
                                </h4>
                                <p class="text-xs">
                                    I recommend you ask me all about it😈
                                </p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$700</span>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="text-base font-bold">
                                    Nuru/teasing and edging
                                </h4>
                                <p class="text-xs">Erotic Nuru tease/ edge</p>
                            </div>
                            <div class="flex gap-1">
                                <span class="">US</span>
                                <span class="font-bold">$400</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-primary border-b-4 flex justify-between items-center">
            <h2 class="text-2xl font-semibold">Contact</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
            <div class="flex flex-col gap-4">
                <p>I'm flattered you're considering spending time with me!</p>
                <p>
                    For questions: contact@experiencemolly.com <br /> Booking:
                    www.experiencemolly.com
                </p>
                <p>
                    For the purposes of safety and safety only, be prepared to
                    engage in a moderate screening process. Please know that I take
                    your privacy very seriously.
                </p>
            </div>
            <div class="">
                <div class="bg-slate-100 rounded-lg grid grid-cols-1 divide-y-2 divide-slate-400/25">
                    <div class="px-4 py-2 flex justify-between flex-wrap">
                        <div class="flex items-center gap-2 font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path
                                    d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                            </svg>
                            <span>Website</span>
                        </div>
                        <a class="hover:underline" href="https://mobile.twitter.com/riley_tantra33">
                            https://mobile.twitter.com/riley_tantra33
                        </a>
                    </div>
                    <div class="px-4 py-2 flex justify-between flex-wrap">
                        <div class="flex items-center gap-2 font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                            </svg>
                            <span>Email</span>
                        </div>
                        <a class="hover:underline" href="mailto:rileylovesnyc@gmail.com">
                            rileylovesnyc@gmail.com
                        </a>
                    </div>
                    <div class="px-4 py-2 flex justify-between flex-wrap">
                        <div class="flex items-center gap-2 font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                            <span>WhatsApp</span>
                        </div>
                        <a class="hover:underline" href="000000000000">
                            000000000000
                        </a>
                    </div>
                    <div class="px-4 py-2 flex justify-between flex-wrap">
                        <div class="flex items-center gap-2 font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                            <span>Twitter</span>
                        </div>
                        <a class="hover:underline" href="@Riley_Tantra33">
                            @Riley_Tantra33
                        </a>
                    </div>
                    <div class="px-4 py-2 flex justify-between flex-wrap">
                        <div class="flex items-center gap-2 font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                            </svg>
                            <span>Onlyfans</span>
                        </div>
                        <a class="hover:underline" href="@rileystar33">
                            @rileystar33
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('website/plugins/splide/splide.min.js') }}"></script>
    <script>
        new Splide('.splide', {
            perPage: 6,
            gap: '1rem',
            autoplay: true,
            breakpoints: {
                990: {
                    perPage: 4,
                },
                640: {
                    perPage: 2,
                },
            },
        }).mount();
    </script>
@endsection
