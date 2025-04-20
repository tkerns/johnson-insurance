@extends('layouts.main')
@section('content')
    <div class="h-[550px] bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('/images/inside-header.jpg')">
        <div class="h-full content-box text-white ml-auto flex flex-col justify-center items-center">
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <h1 class="text-center my-8">PERSONAL INSURANCE</h1>
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 bottom-0" width="100px"
                height="auto">
        </div>
    </div>
    <main class="mt-10 content-box grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-1.jpg" alt="">
            <div class="p-8">
                <h2>Homeowner's Insurance</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-2.jpg" alt="">
            <div class="p-8">
                <h2>Personal Auto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-3.jpg" alt="">
            <div class="p-8">
                <h2>Watercraft</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-4.jpg" alt="">
            <div class="p-8">
                <h2>Snowmachine</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-5.jpg" alt="">
            <div class="p-8">
                <h2>RV</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-6.jpg" alt="">
            <div class="p-8">
                <h2>ATV</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section class="flex flex-col border-2 border-black">
            <img class="w-full h-full" src="/images/personal-7.jpg" alt="">
            <div class="p-8">
                <h2>Personal Umbrella</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
    </main>
@endsection
