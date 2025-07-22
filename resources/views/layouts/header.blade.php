<header>
    <div class="content-box flex gap-4 justify-between items-center">
        <div class="w-3/4 md:w-[380px]">
            <img src="/images/logo.webp" alt="Johnson Insurance Group" width="380px" height="auto">
        </div>
        <nav class="hidden md:block">
            <div class="flex justify-end gap-3 mb-4">
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white"
                    href="/contact">Contact Us</a>
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white"
                    href="https://johnsoninsuranceak.epaypolicy.com/">Pay My Bill</a>
            </div>
            <ul class="flex justify-between w-full gap-4 xl:gap-8 text-xl font-semibold">
                @include('layouts.menu-items')
            </ul>
        </nav>
        <nav class="block md:hidden" x-data='{open:false}'>
            <button @click="open=!open" :aria-expanded="open ? 'true' : 'false'" aria-controls="mobile-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M0 3.75A.75.75 0 0 1 .75 3h14.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 3.75ZM0 8a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 8Zm.75 3.5a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 0-1.5H.75Z"
                        clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Open Menu</span>
            </button>
            <div id="mobile-menu" x-trap="open" :class="open ? 'translate-x-0' : '-translate-x-full'"
                class="fixed h-screen left-0 top-0 bg-white p-8 pt-16 border-r-2 border-black text-black w-3/4 transition-transform duration-700 z-20">
                <div :class="open ? '' : 'hidden'">
                    <button class="fixed right-4 top-4" @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00000"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z">
                            </path>
                        </svg>
                        <span class="sr-only">Close Menu.</span>
                    </button>
                    <img class="mb-8" src="/images/logo.webp" alt="Johnson Insurance Group" width="2000px"
                        height="auto">
                    <ul class="flex flex-col gap-4 text-xl">
                        @include('layouts.menu-items')
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
