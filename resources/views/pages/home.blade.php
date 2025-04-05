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
        <section x-ref="splide" class="splide border-b-8 border-[#003768]">
            <div class="splide__track">
                <div class="splide__list">
                    <div
                        class="splide__slide bg-no-repeat bg-cover bg-center h-[300px] md:h-[700px] border-b-8 border-[#003768] grid grid-cols-1 grid-rows-1">
                        <div class="bg-no-repeat bg-cover bg-center h-[725px]"
                            style="background-image: url('/images/slideshow-placeholder-1.jpg')">
                            <div class="content-box mr-auto h-full flex justify-start items-center">
                                <p class="text-8xl font-bold text-white w-1/2">FOR MORE RELAXING DAYS OFF</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="splide__slide bg-no-repeat bg-cover bg-center h-[300px] md:h-[700px] border-b-8 border-[#003768] grid grid-cols-1 grid-rows-1">
                        <div class="bg-no-repeat bg-cover bg-center h-[725px]"
                            style="background-image: url('/images/slideshow-placeholder-2.jpg')">
                            <div class="content-box ml-auto h-full flex justify-end items-center">
                                <p class="text-8xl font-bold text-white w-1/2">SMART INSURANCE SOLUTIONS FOR YOUR DAYS ON
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <main>
        <section>
            <div class="mt-14 mb-12">
                <h2 class="text-center">PRIMARY INDUSTRIES</h2>
                <hr class="mx-auto border-2 border-black w-12 mt-6">
            </div>
            <div class="text-white flex gap-[2px]">
                <div class="w-1/4 grid grid-cols-1 grid-rows-1">
                    <img src="/images/primary-placeholder-1.jpg" alt=""
                        class="w-full h-full col-start-1 row-start-1">
                    <div class="col-start-1 row-start-1 mt-auto flex justify-between m-4">
                        <h3>Oil And Gas</h3>
                        <a href="" class="block underline">View Details</a>
                    </div>
                </div>
                <div class="w-1/4 grid grid-cols-1 grid-rows-1">
                    <img src="/images/primary-placeholder-1.jpg" alt=""
                        class="w-full h-full col-start-1 row-start-1">
                    <div class="col-start-1 row-start-1 mt-auto flex justify-between m-4">
                        <h3>Oil And Gas</h3>
                        <a href="" class="block underline">View Details</a>
                    </div>
                </div>
                <div class="w-1/4 grid grid-cols-1 grid-rows-1">
                    <img src="/images/primary-placeholder-1.jpg" alt=""
                        class="w-full h-full col-start-1 row-start-1">
                    <div class="col-start-1 row-start-1 mt-auto flex justify-between m-4">
                        <h3>Oil And Gas</h3>
                        <a href="" class="block underline">View Details</a>
                    </div>
                </div>
                <div class="w-1/4 grid grid-cols-1 grid-rows-1">
                    <img src="/images/primary-placeholder-1.jpg" alt=""
                        class="w-full h-full col-start-1 row-start-1">
                    <div class="col-start-1 row-start-1 mt-auto flex justify-between m-4">
                        <h3>Oil And Gas</h3>
                        <a href="" class="block underline">View Details</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-4 content-box flex justify-evenly gap-12 px-14">
            <div class="w-1/2">
                <img src="/images/about-placeholder.png" alt="">
            </div>
            <div class="w-1/2 px-8 py-8">
                <h2 class="text-5xl">ABOUT US</h2>
                <div class="mt-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, pariatur saepe velit inventore quam
                        perspiciatis odio, praesentium amet commodi vero quo ipsa tempora quaerat dolorum quos alias, minima
                        excepturi ad.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate omnis pariatur est commodi, unde
                        quidem soluta nisi a, laboriosam repellendus atque consequatur dicta ipsa adipisci temporibus
                        maiores
                        ullam. Praesentium, officia!</p>
                </div>
                <div class="flex gap-8 mt-12 text-xl">
                    <a href="" class="btn bg-brand-lime text-white">Get Started</a>
                    <a href="" class="btn bg-black text-white">Read More</a>
                </div>
            </div>
        </section>
        <section class="py-12 my-8 bg-no-repeat bg-cover bg-center h-[725px] bg-blend-multiply bg-black/50 text-white"
            style="background-image: url('/images/business-placeholder-1.jpg')">
            <div class="mb-12">
                <h2 class="text-center">BUSINESS INSURANCE</h2>
                <hr class="mx-auto border-2 border-white w-10 mt-6">
            </div>
            <div class="content-box flex">
                <div class="w-1/4 px-12 border-r border-white flex flex-col gap-y-12 justify-center">
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                </div>

                <div class="w-1/4 px-12 border-r border-white flex flex-col gap-y-12 justify-center">
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                </div>

                <div class="w-1/4 px-12 border-r border-white flex flex-col gap-y-12 justify-center">
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                </div>

                <div class="w-1/4 px-12 border-r border-white flex flex-col gap-y-12 justify-center">
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                    <div>
                        <div class="w-fit mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round"
                                        d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                                    <path
                                        d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                                    <path
                                        d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                                    <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center">Workers' Compensation</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="my-8 content-box">
            <div class="mt-4 mb-12">
                <h2 class="text-center">PERSONAL INSURANCE</h2>
                <hr class="mx-auto border-2 border-brand-lime w-10 mt-6">
            </div>
            <div class="grid grid-cols-4 grid-rows-1 gap-4">
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
            </div>
            <div class="grid grid-cols-3 grid-rows-1 gap-4 mt-4">
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
                <div class="bg-gray-100 p-8 flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round"
                                d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29c-1.49 1.49-2.096 3.635-2.29 5.653m7.943-7.943a18.998 18.998 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654c-1.49 1.49-3.635 2.095-5.653 2.29m0 0a19.003 19.003 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a18.998 18.998 0 0 1 .015-3.228m5.903 5.903L8.077 16.02" />
                            <path
                                d="M14.995 8.252a6.47 6.47 0 0 0-.867-3.001a6.489 6.489 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943" />
                            <path
                                d="M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15" />
                            <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2" />
                        </g>
                    </svg>
                    <p class="text-center">Personal Auto</p>
                </div>
            </div>
        </section>
        <section>
            <img class="w-full h-full" src="/images/map-placeholder.jpg" alt="">
        </section>
    </main>
@endsection
