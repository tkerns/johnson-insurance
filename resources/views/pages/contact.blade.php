@extends('layouts.main')
@section('content')
    <div class="h-[550px] bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('/images/inside-header.jpg')">
        <div class="h-full content-box text-white ml-auto flex flex-col justify-center items-center">
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <h1 class="text-center my-8">CONTACT</h1>
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 -bottom-1" width="100px"
                height="auto">
        </div>
    </div>
    <main class="my-16 content-box flex flex-col md:flex-row justify-evenly items-center gap-12">
        <div>
            <h2>
                Johnson Insurance Group
            </h2>
            <p>
                <br>
                35440 Kenai Spur Hwy
                <br>
                Soldotna, AK 99669
            </p>
            <p>
                Office <a class="font-bold hover:text-brand-lime focus:text-brand-lime" href="tel:907-308-2302">(907)
                    308-2302</a>
                <br>
                Annie Johnson <a class="font-bold hover:text-brand-lime focus:text-brand-lime" href="tel:907-398-8899">(907)
                    398-8899</a>
                <br>
                Blaine Johnson <a class="font-bold hover:text-brand-lime focus:text-brand-lime"
                    href="tel:907-398-9777">(907) 398-9777</a>
                <br>
                Fax <span class="font-bold">(866) 422-8350</span>
            </p>
            <p class="font-bold">
                <a class="hover:text-brand-lime focus:text-brand-lime"
                    href="mailto:annie@johnsoninsuranceak.com">annie@johnsoninsuranceak.com</a>
                <br>
                <a class="hover:text-brand-lime focus:text-brand-lime"
                    href="mailto:blaine@johnsoninsuranceak.com">blaine@johnsoninsuranceak.com</a>
            </p>
        </div>
        <div class="w-full md:w-1/2 flex">
            <iframe class="w-full"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9903.739567306724!2d-151.0684194451314!3d60.49223976251432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8f106a88588d0f5!2sJohnson%20Insurance%20Group!5e0!3m2!1sen!2sus!4v1672343177754!5m2!1sen!2sus"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" data-ruffle-polyfilled=""></iframe>
        </div>
    </main>
@endsection
