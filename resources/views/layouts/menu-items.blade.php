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
    <ul x-cloak x-show="openBusiness" @click.outside="openBusiness=false" class="absolute z-20 bg-white p-4 shadow-lg mt-2 rounded-md flex flex-col gap-2">
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#workers-comp">Workers' Compensation</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#general">General Liability</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#property">Commercial Property</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#auto">Commercial Auto & Trucking</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#employment">Employment Practices</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#cyber">Cyber Liability</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#umbrella">Commercial Umbrella</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#environment">Environmental Liability</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/business/#more">Additional Commercial Insurance Products</a>
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
    <ul x-cloak x-show="openPersonal" @click.outside="openPersonal=false" class="absolute z-20 bg-white p-4 shadow-lg mt-2 rounded-md flex flex-col gap-2">
        <li class="hover:underline hover:text-brand-lime">
            <a href="/personal/#homeowner">Homeowner's Insurance</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/personal/#auto">Personal Auto</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/personal/#umbrella">Personal Umbrella</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/personal/#marine">Watercraft</a>
        </li>
        <li class="hover:underline hover:text-brand-lime">
            <a href="/personal/#rv">RV</a>
        </li>
    </ul>
</li>
{{-- <li class="hover:underline hover:text-brand-lime">
    <a href="/customer-service">Customer Service</a>
</li> --}}
<li class="hover:underline hover:text-brand-lime">
    <a href="/industries">Primary Industries</a>
</li>
