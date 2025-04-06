<header>
    <div class="content-box flex gap-4 justify-between">
        <div>
            <img src="/images/logo.png" alt="Johnson Insurance Group" width="380px" height="auto">
        </div>
        <nav>
            <div class="flex justify-end gap-3 mb-4">
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white" href="/contact">Contact Us</a>
                <a class="block px-5 py-2 border-2 border-brand-lime hover:bg-brand-lime focus:bg-brand-lime hover:text-white focus:text-white" href="https://johnsoninsuranceak.epaypolicy.com/">Pay My Bill</a>
            </div>
            <ul class="flex justify-between w-full gap-8 text-xl font-semibold">
                <li class="hover:underline hover:text-brand-lime">
                    <a href="/">Home</a>
                </li>
                <li x-data='{openBusiness:false}'>
                    <button class="hover:underline hover:text-brand-lime flex items-center gap-2" @click="openBusiness = !openBusiness">
                        Business Insurance
                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="M36 18L24 30L12 18" />
                        </svg>
                    </button>
                    <ul x-cloak x-show="openBusiness" class="absolute z-20 bg-white p-4 shadow-lg mt-2 rounded-md flex flex-col gap-2">
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/workers-comp">Workers' Compensation</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/general-liability">General Liability</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/commercial-property">Commercial Property</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/auto-trucking">Commercial Auto & Trucking</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/equipment">Equipment Insurance</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/ocean-marine">Ocean Marine</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/aviation">Aviation</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/umbrella">Commercial Umbrella</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/professional-liability">Professional Liability</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/liquor">Liquor Liability</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/employment-practices">Employment Practices</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/business/cyber-liability">Cyber Liability</a>
                        </li>
                    </ul>
                </li>
                <li x-data='{openPersonal:false}'>
                    <button class="hover:underline hover:text-brand-lime flex items-center gap-2" @click="openPersonal = !openPersonal">
                        Personal Insurance
                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="M36 18L24 30L12 18" />
                        </svg>
                    </button>
                    <ul x-cloak x-show="openPersonal" class="absolute z-20 bg-white p-4 shadow-lg mt-2 rounded-md flex flex-col gap-2">
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/homeowners">Homeowner's Insurance</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/auto">Personal Auto</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/watercraft">Watercraft</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/snowmachine">Snowmachine</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/atv">ATV</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/rv">RV</a>
                        </li>
                        <li class="hover:underline hover:text-brand-lime">
                            <a href="/personal/umbrella">Personal Umbrella</a>
                        </li>
                    </ul>
                </li>
                <li class="hover:underline hover:text-brand-lime">
                    <a href="/customer-service">Customer Service</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
