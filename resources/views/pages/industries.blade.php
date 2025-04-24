@extends('layouts.main')
@section('content')
    <div class="h-[550px] bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('/images/inside-header.jpg')">
        <div class="h-full content-box text-white ml-auto flex flex-col justify-center items-center">
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <h1 class="text-center my-8">PRIMARY INDUSTRIES</h1>
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 -bottom-1" width="100px"
                height="auto">
        </div>
    </div>
    <main class="mt-10 content-box">
        <section id="restaurant">
            <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                <div>
                    <h2>Insurance Solutions for Restaurants</h2>
                    <p>Whether you run a cozy café, a fine dining restaurant, or a bustling food truck, at <span
                            class="font-bold">
                            Johnson Insurance
                            Group
                        </span>, we offer tailored <span class="font-bold">Property & Casualty Insurance</span> to protect
                        your business, employees, and
                        customers.</p>
                    <p>Our comprehensive restaurant insurance packages cover:</p>
                    <ul class="list-disc pl-4 mb-3">
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Property Coverage</a> – Protects your building, equipment, and
                            inventory from fire, theft, or damage.
                        </li>
                        <li>
                            <a href="/business/#general" class="font-bold">General Liability</a> – Covers accidents and injuries that may occur
                            on your property.
                        </li>
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Business Interruption</a> – Helps keep your business running during
                            unexpected closures or disruptions.
                        </li>
                        <li>
                            <a href="/business/#workers-comp" class="font-bold hover:underline focus:underline">Workers’ Compensation</a> – Provides coverage for employees in case
                            of injury or illness on the job.
                        </li>
                        <li>
                            <span class="font-bold">Liquor Liability</span> – Protects against risks associated with serving
                            alcohol.
                        </li>
                        <li>
                            <a href="/business/#cyber" class="font-bold hover:underline focus:underline">Cyber Liability</a> – Safeguards your business from digital threats,
                            especially if you manage customer data or take online orders.
                        </li>
                    </ul>
                </div>
                <img src="/images/taps.webp" alt="">
            </div>
        </section>
        <hr class="my-12 border-2 border-brand-lime">
        <section id="construction">
            <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                <img src="/images/welding.webp" alt="">
                <div>
                    <h2>Insurance Solutions for Construction Companies</h2>
                    <p>At <span class="font-bold">Johnson Insurance Group</span>, we understand that construction businesses
                        face unique risks every day,
                        from job site accidents to workplace injuries. That’s why we offer comprehensive <span
                            class="font-bold">insurance solutions</span>
                        designed specifically for the needs of the construction industry.</p>
                    <p>Our policies can protect your business and employees with coverage options including:</p>
                    <ul class="list-disc pl-4 mb-3">
                        <li>
                            <a href="/business/#general" class="font-bold hover:underline focus:underline">General Liability</a> – Covers injuries, accidents, or property
                            damage that may occur on the job site, along with products and completed operations liability.
                        </li>
                        <li>
                            <a href="/business/#workers-comp" class="font-bold hover:underline focus:underline">Workers’ Compensation</a> – Provides financial protection for
                            employees injured while working, ensuring their medical bills and lost wages are covered.
                        </li>
                        <li>
                            <span class="font-bold">Builder’s Risk Insurance</span> – Protects your ongoing construction
                            projects from risks like fire, wind damage, or theft.
                        </li>
                        <li>
                            <a href="/business/#auto" class="font-bold hover:underline focus:underline">Commercial Auto Insurance</a> – Covers vehicles used for business
                            purposes, including pickups, private passenger vehicles or heavy trucks.
                        </li>
                        <li>
                            <span class="font-bold">Equipment Insurance</span> – Protects your tools, machinery, and
                            equipment from loss, theft, or damage on the job site.
                        </li>
                        <li>
                            <a href="/business/#pro" class="font-bold hover:underline focus:underline">Contractor’s Professional Liability</a> – Covers claims related to
                            errors, omissions, or negligence in your professional services.
                        </li>
                        <li>
                            <a href="/business/#umbrella" class="font-bold hover:underline focus:underline">Umbrella Insurance</a> – Provides extra liability coverage above and
                            beyond your standard policies to ensure greater protection.
                        </li>
                    </ul>
                </div>
            </div>
            <p>We work closely with construction companies to create custom insurance plans that address your specific
                needs, helping you manage risks and focus on growing your business.</p>
            <p>Let us help you safeguard your projects, equipment, and team so you can continue building a stronger future!
            </p>
        </section>
        <hr class="my-12 border-2 border-brand-lime">
        <section id="oil-gas">
            <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                <div>
                    <h2>Insurance Solutions for the Oil and Gas Industry</h2>
                    <p>The many Alaskan businesses that support the <span class="font-bold">oil and gas industry</span> face
                        some of the most complex and
                        high-risk operations. From offshore drilling to transportation, equipment, and environmental
                        concerns, we provide tailored insurance solutions designed to meet the unique needs of this vital
                        sector.</p>
                    <p>Our specialized coverage includes:</p>
                    <ul class="list-disc pl-4 mb-3">
                        <li>
                            <a href="/business/#general" class="font-bold hover:underline focus:underline">General Liability Insurance</a> – Protects against bodily injury,
                            property damage, and environmental harm resulting from your operations.
                        </li>
                        <li>
                            <a href="/business/#environment" class="font-bold hover:underline focus:underline">Pollution Liability</a> – Essential for addressing the environmental
                            risks associated with oil and gas operations, including spills and contamination.
                        </li>
                        <li>
                            <a href="/business/#workers-comp" class="font-bold hover:underline focus:underline">Workers’ Compensation</a> – Provides protection for employees injured
                            in high-risk environments, ensuring medical expenses and lost wages are covered.
                        </li>
                        <li>
                            <span class="font-bold">Offshore Insurance</span> – Covers risks associated with offshore
                            drilling rigs, platforms, and other maritime operations.
                        </li>
                        <li>
                            <span class="font-bold">Equipment Breakdown Insurance</span> – Protects your critical equipment
                            and machinery from unexpected breakdowns that could halt operations.
                        </li>
                        <li>
                            <a href="/business/#umbrella" class="font-bold hover:underline focus:underline">Umbrella Liability Insurance</a> – Offers additional liability
                            coverage to protect your business beyond the limits of your standard policies.
                        </li>
                    </ul>
                </div>
                <img src="/images/driver.webp" alt="">
            </div>
            <p>
                With vast experience in the oil and gas industry, we partner with you to ensure your assets, operations, and
                workforce are properly protected. From upstream to downstream operations, we provide insurance solutions
                that address every phase of your business.
            </p>
            <p>Let us help you minimize risks and keep your business running smoothly in one of the most challenging
                industries.</p>
        </section>
        <hr class="my-12 border-2 border-brand-lime">
        <section id="commercial">
            <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                <img src="/images/storefront.webp" alt="">
                <div>
                    <h2>Insurance for Commercial Buildings in Alaska</h2>
                    <p>From harsh weather conditions to the logistical complexities of remote locations, if you own a
                        <span class="font-bold">commercial building</span> in Alaska, at <span class="font-bold">Johnson
                            Insurance Group</span> we know it’s essential to have the right
                        coverage to protect your investment.
                    </p>
                    <p>Our <span class="font-bold">commercial building insurance</span> policies are designed to provide
                        comprehensive protection for businesses of all sizes, including:</p>
                    <ul class="list-disc pl-4 mb-3">
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Property Insurance</a> – Protects your building, equipment, and
                            inventory from damage caused by fire, theft, vandalism, or severe weather events, including
                            Alaska's extreme cold, snow, and ice.
                        </li>
                        <li>
                            <a href="/business/#general" class="font-bold hover:underline focus:underline">General Liability Insurance</a> – Covers accidents, injuries, or
                            property damage that may occur on your commercial property, helping protect you from potential
                            lawsuits.
                        </li>
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Business Interruption Insurance</a> – Helps replace lost income and
                            cover operating expenses in case of a covered event that temporarily halts your business
                            operations.
                        </li>
                        <li>
                            <a href="/business/#workers-comp" class="font-bold hover:underline focus:underline">Workers’ Compensation Insurance</a> – Provides coverage for employees
                            who are injured while working on your property, including medical expenses and lost wages.
                        </li>
                        <li>
                            <span class="font-bold">Equipment Breakdown Insurance</span> – Covers unexpected equipment
                            failures that could disrupt your operations and cause costly downtime.
                        </li>
                        <li>
                            <span class="font-bold">Flood Insurance</span> – Protects your building from flood damage, a
                            necessary coverage given Alaska’s coastal and flood-prone areas.
                        </li>
                        <li>
                            <span class="font-bold">Wind and Hail Coverage</span> – Essential for protection against damage
                            caused by high winds, hail, or snowstorms, which are common in Alaskan weather.
                        </li>
                        <li>
                            <a href="/business/#umbrella" class="font-bold hover:underline focus:underline">Umbrella Insurance</a> – Provides additional liability coverage
                            beyond the limits of your standard policies, ensuring you have extra protection in case of major
                            claims.
                        </li>
                    </ul>
                </div>
            </div>
            <p>We work with business owners across Alaska to create customized insurance plans that address the specific
                needs of their commercial properties. Whether you're in Anchorage, Fairbanks, or here on the Kenai
                Peninsula, we can help you ensure your building and operations are fully protected.</p>
            <p>Let us help you safeguard your commercial property against Alaska's unique risks so you can focus on growing
                your business.</p>
        </section>
        <hr class="my-12 border-2 border-brand-lime">
        <section id="lodge-guide">
            <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                <div>
                    <h2>Insurance Solutions for Alaska Lodges and Guides</h2>
                    <p>Owning and operating a lodge or guiding business in Alaska comes with its own set of unique
                        challenges. From the rugged terrain and unpredictable weather to the specialized equipment and
                        activities, at <span class="font-bold">Johnson Insurance Group</span> we provide tailored insurance
                        solutions to ensure that your business, staff, and guests are fully protected.</p>
                    <p>Our <span class="font-bold">Alaska lodge and guide insurance</span> packages cover a variety of
                        needs, including:</p>
                    <ul class="list-disc pl-4 mb-3">
                        <li>
                            <a href="/business/#general" class="font-bold hover:underline focus:underline">General Liability Insurance</a> – Protects against injuries or
                            accidents that may occur on your property or during guided activities, such as fishing, hiking,
                            or wildlife tours.
                        </li>
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Property Insurance</a> – Covers your lodge, equipment, and
                            furnishings from damage due to fire, theft, other risks associated with Alaska’s extreme weather
                            conditions.
                        </li>
                        <li>
                            <a href="/business/#property" class="font-bold hover:underline focus:underline">Business Interruption Insurance</a> – Helps replace lost income and
                            cover operating expenses if your business is temporarily shut down due to a covered event, such
                            as severe weather or property damage.
                        </li>
                        <li>
                            <a href="/business/#workers-comp" class="font-bold hover:underline focus:underline">Workers’ Compensation Insurance</a> – Provides coverage for your
                            employees in case of injury or illness while working in the field or on the property, ensuring
                            medical expenses and lost wages are covered.
                        </li>
                        <li>
                            <span class="font-bold">Equipment Insurance</span> – Covers your specialized equipment, such as
                            boats, ATVs, snowmobiles, and gear, from loss or damage.
                        </li>
                        <li>
                            <span class="font-bold">Liquor Liability Insurance</span> – If you serve alcohol, this coverage
                            protects against the risks associated with serving alcohol to your guests.
                        </li>
                        <li>
                            <a href="/business/#umbrella" class="font-bold hover:underline focus:underline">Umbrella Insurance</a> – Provides additional liability protection
                            beyond the limits of your standard policies, ensuring you’re covered for larger claims.
                        </li>
                    </ul>
                </div>
                <img src="/images/plane.webp" alt="">
            </div>
            <p>Running a lodge or guiding business in Alaska is a unique adventure, and we’re here to make sure your
                business is prepared for whatever comes your way. Our team works closely with you to design a comprehensive
                insurance plan that fits the needs of your operation, helping you focus on providing unforgettable
                experiences for your guests.</p>
        </section>
        <hr class="my-12 border-2 border-brand-lime">
    </main>
@endsection
