<header>
    <div class="content-box flex gap-4 justify-between">
        <div>
            <img src="/images/logo.png" alt="Johnson Insurance Group" width="380px" height="auto">
        </div>
        <nav class="hidden md:block">
            <div class="flex justify-end gap-3 mb-4">
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white" href="/contact">Contact Us</a>
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white" href="https://johnsoninsuranceak.epaypolicy.com/">Pay My Bill</a>
            </div>
            <ul class="flex justify-between w-full gap-8 text-xl font-semibold">
                @include('layouts.menu-items')
            </ul>
        </nav>
        <nav class="block md:hidden" x-data='{open:false}'>
            <button @click="open=!open">
                Menu
            </button>
            <div  :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed h-screen left-0 top-0 bg-white p-8 pt-16 border-r-2 border-black text-black w-3/4 transition-transform duration-700 z-20">
                <img class="mb-8" src="/images/logo.png" alt="Johnson Insurance Group" width="2000px" height="auto">
                <ul class="flex flex-col gap-4 text-xl">
                @include('layouts.menu-items')
                </ul>
            </div>
        </nav>
    </div>
</header>
