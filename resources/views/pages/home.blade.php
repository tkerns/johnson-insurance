@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>

    <style>
        .splide__pagination__page.is-active {
            background: #333;
        }
    </style>

    <div x-data="{
        init() {
            new Splide(this.$refs.splide, {
                perPage: 1,
                autoplay: true,
                interval: 5000,
                speed: 2000,
                rewind: true,
                type: 'fade',
                pauseOnHover: false,
                pauseOnFocus: false,
            }).mount()
        },
    }">
        <section x-ref="splide" class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide bg-no-repeat bg-cover bg-center h-[400px] md:h-[725px] relative"
                        style="background-image: url('/images/homepage-header-1.jpg')">
                        <div class="content-box mr-auto h-full flex justify-center lg:justify-start items-center">
                            <p class="text-4xl md:text-7xl lg::text-8xl font-bold text-white w-1/2">FOR MORE RELAXING DAYS
                                OFF</p>
                        </div>
                        <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 bottom-0"
                            width="100px" height="auto">
                    </div>

                    <div class="splide__slide bg-no-repeat bg-cover bg-center h-[400px] md:h-[725px] relative"
                        style="background-image: url('/images/homepage-header-2.jpg')">
                        <div class="content-box ml-auto h-full flex justify-center lg:justify-end items-center">
                            <p class="text-4xl md:text-7xl lg::text-8xl font-bold text-white w-1/2">SMART INSURANCE
                                SOLUTIONS FOR YOUR DAYS ON
                            </p>
                        </div>
                        <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 bottom-0"
                            width="100px" height="auto">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <main>
        <section>
            <div class="mt-14 mb-12">
                <h2 class="text-4xl text-center">PRIMARY INDUSTRIES</h2>
                <hr class="mx-auto border-2 border-black w-12 mt-6">
            </div>
            <div class="text-white flex flex-col md:flex-row gap-[2px]">
                <div class="holder relative md:w-1/4 h-[250px] md:h-[500px] flex md:flex-col lg:flex-row items-end md:items-start lg:items-end justify-between md:justify-end lg:justify-between p-4 bg-no-repeat bg-cover bg-center bg-blend-multiply hover:bg-brand-lime transition duration-300"
                    style="background-image: url('/images/welding.jpg')">
                    <h3 class="industry text-shadow-dark mb-0">Construction</h3>
                    <a href="/industries/#construction" class="industry text-shadow-dark extended-link underline text-right">View Details</a>
                </div>
                <div class="holder relative md:w-1/4 h-[250px] md:h-[500px] flex md:flex-col lg:flex-row items-end md:items-start lg:items-end justify-between md:justify-end lg:justify-between p-4 bg-no-repeat bg-cover bg-center bg-blend-multiply hover:bg-brand-lime transition duration-300"
                    style="background-image: url('/images/taps.jpg')">
                    <h3 class="industry text-shadow-dark mb-0">Commercial Buildings & Restaurants</h3>
                    <a href="/industries/#restaurant" class="industry text-shadow-dark extended-link underline text-right">View Details</a>
                </div>
                <div class="holder relative md:w-1/4 h-[250px] md:h-[500px] flex md:flex-col lg:flex-row items-end md:items-start lg:items-end justify-between md:justify-end lg:justify-between p-4 bg-no-repeat bg-cover bg-center bg-blend-multiply hover:bg-brand-lime transition duration-300"
                    style="background-image: url('/images/plane.jpg')">
                    <h3 class="industry text-shadow-dark mb-0">Lodge & Guiding Businesses</h3>
                    <a href="/industries/#lodge-guide" class="industry text-shadow-dark extended-link underline text-right">View Details</a>
                </div>
                <div class="holder relative md:w-1/4 h-[250px] md:h-[500px] flex md:flex-col lg:flex-row items-end md:items-start lg:items-end justify-between md:justify-end lg:justify-between p-4 bg-no-repeat bg-cover bg-center bg-blend-multiply hover:bg-brand-lime transition duration-300"
                    style="background-image: url('/images/driver.jpg')">
                    <h3 class="industry text-shadow-dark mb-0">Oil And Gas</h3>
                    <a href="/industries/#oil-gas" class="industry text-shadow-dark extended-link underline text-right">View Details</a>
                </div>
            </div>
        </section>
        <section class="my-4 content-box flex flex-col lg:flex-row items-center justify-evenly gap-8 md:px-14 py-8">
            <div class="lg:w-1/2">
                <img src="/images/about-placeholder.png" alt="">
            </div>
            <div class="lg:w-1/2 md:px-8 py-8">
                <h2 class="text-5xl">ABOUT US</h2>
                <div class="mt-12">
                    <p>Johnson Insurance Group was founded by husband and wife Blaine & Annie Johnson. We are lifelong and
                        diehard Alaskans, and we formed our agency with a goal of providing the best insurance service and
                        products to the businesses and individuals that make our state a cut above the rest. </p>
                    <p>We strive to be the best. Growing up in hard-working family owned and operated businesses has
                        instilled in us an entrepreneurial spirit and a desire to build a business based on honesty, hard
                        work, and doing right by our clients, every time.</p>
                </div>
                <div class="flex flex-col md:flex-row gap-8 mt-12 text-xl">
                    <a href="/contact" class="btn bg-brand-lime text-white">Get Started</a>
                    <a href="/about" class="btn bg-black text-white">Read More</a>
                    <a href="/news" class="btn bg-brand-lime text-white">News</a>
                </div>
            </div>
        </section>
        <section class="py-12 my-8 bg-no-repeat bg-cover bg-center bg-blend-multiply bg-black/50 text-white"
            style="background-image: url('/images/business-bg.jpg')">
            <div class="mb-4">
                <h2 class="text-4xl text-center">BUSINESS INSURANCE</h2>
                <hr class="mx-auto border-2 border-white w-10 mt-6">
            </div>
            <div class="content-box flex flex-col sm:flex-row">
                <div class="sm:w-1/3 py-8 border-white flex flex-col flex-wrap gap-y-16 justify-evenly">
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/workers-comp.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#workers-comp" class="extended-link text-center">Workers' Compensation</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/general-liability.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#general" class="extended-link text-center">General Liability</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/commercial-property.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#property" class="extended-link text-center">Commercial Property</a>
                    </div>
                </div>
                <div class="sm:w-1/3 py-8 sm:border-x border-white flex flex-col flex-wrap gap-y-16 justify-evenly">
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4 mt-6">
                            <img src="/images/icons/auto-trucking.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#auto" class="extended-link text-center">Commercial Auto & Trucking</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/employment.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#employment" class="extended-link text-center">Employment
                            Practices</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/cyber-liability.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#cyber" class="extended-link text-center">Cyber Liability</a>
                    </div>
                </div>
                <div class="sm:w-1/3 py-8 border-white flex flex-col flex-wrap gap-y-16 justify-evenly">
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/umbrella.png" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#umbrella" class="extended-link text-center">Commercial Umbrella</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/environment.svg" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#environment" class="extended-link text-center">Environmental Liability</a>
                    </div>
                    <div class="flex flex-col justify-center relative">
                        <div class="w-fit mx-auto mb-4">
                            <img src="/images/icons/plus.svg" alt="" width="80" height="80">
                        </div>
                        <a href="/business/#more" class="extended-link text-center">Additional Commercial Insurance Products</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-8 content-box">
            <div class="mt-4 mb-12">
                <h2 class="text-4xl text-center">PERSONAL INSURANCE</h2>
                <hr class="mx-auto border-2 border-brand-lime w-10 mt-6">
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-rows-1 gap-4">
                <div
                    class="holder bg-gray-100 p-8 py-10 flex flex-col items-center justify-center relative text-brand-lime hover:bg-brand-lime hover:text-white">
                    <img class="cutout absolute bottom-0 right-0" src="/images/puzzle.svg" alt="" width="50px"
                        height="50px">
                        <img class="icon" src="/images/icons/homeowner-lime.png" alt="" width="80" height="80">
                    <a href="/personal/#homeowner" class="mt-8 extended-link text-black hover:text-white">Homeowner's
                        Insurance</a>
                </div>
                <div
                    class="holder bg-gray-100 p-8 py-10 flex flex-col items-center justify-center relative text-brand-lime hover:bg-brand-lime hover:text-white">
                    <img class="cutout absolute bottom-0 right-0" src="/images/puzzle.svg" alt="" width="50px"
                        height="50px">
                        <img class="icon" src="/images/icons/personal-auto-lime.png" alt="" width="80" height="80">
                    <a href="/personal/#auto" class="mt-8 extended-link text-black hover:text-white">Personal Auto</a>
                </div>
                <div
                class="md:col-span-2 lg:col-span-1 w-full md:w-1/2 mx-auto lg:w-full holder bg-gray-100 p-8 py-10 flex flex-col items-center justify-center relative text-brand-lime hover:bg-brand-lime hover:text-white">
                <img class="cutout absolute bottom-0 right-0" src="/images/puzzle.svg" alt="" width="50px"
                    height="50px">
                    <img class="icon" src="/images/icons/personal-umbrella-lime.png" alt="" width="80" height="80">
                <a href="/personal/#umbrella" class="mt-8 extended-link text-black hover:text-white">Personal
                    Umbrella</a>
            </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 grid-rows-1 gap-4 mt-4">
                <div
                class="holder bg-gray-100 p-8 py-10 flex flex-col items-center justify-center relative text-brand-lime hover:bg-brand-lime hover:text-white">
                <img class="cutout absolute bottom-0 right-0" src="/images/puzzle.svg" alt="" width="50px"
                    height="50px">
                    <img class="icon" src="/images/icons/watercraft-lime.png" alt="" width="80" height="80">
                <a href="/personal/#marine" class="mt-8 extended-link text-black hover:text-white">Watercraft</a>
            </div>
                <div
                    class="holder bg-gray-100 p-8 py-10 flex flex-col items-center justify-center relative text-brand-lime hover:bg-brand-lime hover:text-white">
                    <img class="cutout absolute bottom-0 right-0" src="/images/puzzle.svg" alt="" width="50px"
                        height="50px">
                        <img class="icon" src="/images/icons/rv-lime.png" alt="" width="80" height="80">
                    <a href="/personal/#rv" class="mt-8 extended-link text-black hover:text-white">RV</a>
                </div>
            </div>
        </section>
        <section>
            <a target="_blank"
                href="https://www.google.com/maps/dir//Johnson+Insurance+Group+35440+Kenai+Spur+Hwy+Soldotna,+AK+99669/@60.4935451,-151.0666124,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x56c66166ba70ee8b:0xe8f106a88588d0f5">
                <img class="w-full h-full" src="/images/map-placeholder.jpg" alt="">
                <span class="sr-only">Click here for Google Maps directions to our office</span>
            </a>
        </section>
    </main>
@endsection
