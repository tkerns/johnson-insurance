@extends('layouts.main')
@section('content')
    <div class="h-[550px] bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('/images/inside-header.jpg')">
        <div class="h-full content-box text-white ml-auto flex flex-col justify-center items-center">
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <h1 class="text-center my-8">BUSINESS INSUANCE</h1>
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 bottom-0" width="100px"
                height="auto">
        </div>
    </div>
    <main class="mt-10 content-box grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <section id="workers-comp" class="flex flex-col">
            <img class="w-full" src="/images/business-1.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Worker's Compensation</h2>
                <p>If your business is currently in the Assigned Risk Pool for Workers’ Compensation coverage, you’re likely
                    facing higher premiums due to claims experience, audit challenges, or limited options. But there’s good
                    news — it doesn’t have to stay that way!</p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <p>
                            At Johnson Insurance Group, we specialize in helping businesses like yours transition out of the
                            Assigned Risk Pool and into the voluntary insurance market. By combining loss control
                            strategies, claims
                            management, and monitoring your experience modification rate (EMR), we can work together to
                            reduce
                            premiums and enhance your company’s safety record.
                        </p>
                        <h3>What We Offer:</h3>
                        <ul class="list-disc pl-4 mb-3 mb-3">
                            <li><span class="font-bold">Safety Record Improvement:</span> Our expert guidance helps you
                                identify and address workplace hazards, reducing the frequency and severity of claims.</li>
                            <li><span class="font-bold">Aggressive Marketing:</span> We use our extensive network to
                                advocate on your behalf and secure the best coverage options at competitive rates.</li>
                            <li><span class="font-bold">Claims Management:</span> We work with you to manage and mitigate
                                claims, ensuring your business stays on track for the best possible outcomes.</li>
                            <li><span class="font-bold">Experience Modification Rate Monitoring:</span> We help monitor and
                                improve your EMR, which directly impacts your premiums.</li>
                        </ul>
                        <p>
                            Don’t let your business remain stuck with high Workers’ Compensation premiums. Let us help you
                            get your safety record on track and guide you towards more affordable options.
                        </p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">
                            Contact us today to discuss how we can help reduce your premiums and improve your bottom line!
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="general" class="flex flex-col">
            <img class="w-full" src="/images/business-2.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>General Liability</h2>
                {{-- <h3>Protect Your Business with a Competitively Priced Commercial General Liability Policy
                </h3> --}}
                <p>In today’s competitive business landscape, having the right Commercial General Liability (CGL) coverage
                    is essential — but it also needs to be affordable. A competitively priced policy is not only crucial for
                    maintaining comprehensive protection, but it also helps you stay ahead of your competitors by
                    controlling costs and ensuring that your business is fully covered.</p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <h3>
                            Why Choose a Competitively Priced CGL Policy?
                        </h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Stay Within Budget:</span> A well-priced policy helps you balance
                                the need
                                for robust coverage with the financial realities of running your business.</li>
                            <li><span class="font-bold">Minimize Overpaying:</span> Without the right expertise, businesses
                                often
                                overpay for coverage they don’t need or end up with gaps in their protection. A
                                competitively priced
                                policy ensures you get the coverage you need at the right cost.</li>
                            <li><span class="font-bold">Gain a Competitive Advantage:</span> By maintaining an affordable
                                CGL
                                policy, you can allocate resources to other areas of your business, such as growth,
                                marketing, and
                                innovation, helping you stay competitive.</li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p>
                            At Johnson Insurance Group, we understand that a competitive price doesn’t mean compromising on
                            quality.
                            We work with you to:
                        </p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Tailored Protection:</span> With the right endorsements and policy
                                adjustments, you can broaden your coverage to ensure it matches the specific needs of your
                                business,
                                mitigating risks in areas that could otherwise be overlooked.</li>
                            <li><span class="font-bold">Analyze Your Current Policy:</span> We review your existing policy
                                to ensure
                                you’re not overpaying for coverage you don’t need and that you’re not missing out on
                                necessary
                                protections.</li>
                            <li><span class="font-bold">Negotiate Competitive Rates:</span> With our industry knowledge and
                                relationships, we can help secure affordable rates that give you the protection you need at
                                a price
                                that works for your business.</li>
                        </ul>
                        <p class="font-bold">
                            Don’t settle for high premiums that eat into your profits! Let us help you get the best possible
                            Commercial General Liability policy at a price that supports your business’s bottom line.
                        </p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">
                            Contact us today for a free review of your CGL coverage and pricing options!
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="property" class="flex flex-col">
            <img class="w-full" src="/images/business-3.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Commercial Property</h2>
                {{-- <h3>Protect Your Business with Comprehensive Commercial Property Insurance</h3> --}}
                <p>A Commercial Property Policy is a critical component of protecting your business assets, offering
                    coverage for damage to your building and contents from covered causes of loss, such as fire, windstorms,
                    theft, or vandalism. But did you know that your protection doesn’t have to stop there?</p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <h3>Broaden Your Coverage with a Commercial Package Policy:</h3>
                        <p>While a basic property policy covers damage to your building and equipment, you can enhance your
                            coverage
                            with additional forms under a Commercial Package Policy. This allows you to safeguard against a
                            wide
                            range of potential business disruptions.</p>
                        <h3>What You Can Add to Your Coverage:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li>Business Interruption: Protection against lost income due to events that cause a temporary
                                halt in
                                your business activities, ensuring you can continue paying bills and salaries even if your
                                operations are disrupted.</li>
                            <li>Additional Perils: With the right endorsements, you can protect your business against other
                                risks
                                such as flooding, earthquakes, or vandalism — expanding your coverage to address specific
                                needs.
                            </li>
                        </ul>
                        <h3>Why You Need a Commercial Property Policy:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Comprehensive Protection:</span> Your business is built on physical
                                assets,
                                and protecting them ensures you can recover quickly after a disaster.</li>
                            <li><span class="font-bold">Risk Management:</span> Adding forms for business interruption and
                                equipment
                                breakdown can prevent financial strain and operational delays when the unexpected happens.
                            </li>
                            <li><span class="font-bold">Peace of Mind:</span> Knowing that your business is well-covered
                                from a wide
                                range of potential risks gives you the confidence to focus on growth.</li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p class="font-bold">
                            At Johnson Insurance Group, we specialize in creating customized Commercial Property Policies
                            that align
                            with your specific business needs. We’ll work with you to:
                        </p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Assess Your Risk:</span> Understand your unique exposures and help
                                you
                                select the right coverage forms to protect your property and assets.</li>
                            <li><span class="font-bold">Expand Your Coverage:</span> Tailor a Commercial Package Policy that
                                includes additional protections like business interruption, equipment breakdown, and more.
                            </li>
                            <li><span class="font-bold">Keep it Competitive:</span> With our industry and market knowledge,
                                we can
                                help secure affordable rates that give you the protection you need at a price that works for
                                your
                                business.</li>
                        </ul>
                        <p class="font-bold">Don’t wait until disaster strikes! Make sure your property and business are
                            fully
                            protected with a comprehensive Commercial Property Policy.</p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">Contact us today for a policy
                            review and learn how we can help safeguard your
                            business.
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="auto" class="flex flex-col">
            <img class="w-full" src="/images/business-4.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Commercial Auto and Trucking</h2>
                {{-- <h3>Protect Your Business with a Comprehensive Auto Insurance Policy</h3> --}}
                <p>
                    Having a competitive commercial auto policy is essential for protecting your operations and employees.
                    Auto insurance isn’t just for vehicles on the road — it provides crucial liability protection for injury
                    or property damage caused by a vehicle accident, coverage against uninsured motorists, and protection
                    for physical damage to your vehicles.
                </p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <h3>Why Your Business Needs Auto Coverage:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Liability Protection:</span> If your employees are driving personal
                                vehicles
                                for business purposes, your business could still be liable for damages if an accident
                                occurs. A
                                robust auto policy covers injury or property damage that happens while conducting
                                business-related
                                activities.</li>
                            <li><span class="font-bold">Uninsured Motorist Coverage:</span> If an accident involves an
                                uninsured or
                                underinsured motorist, this coverage protects your business from financial loss and ensures
                                you’re
                                not left exposed.</li>
                            <li><span class="font-bold">Physical Damage Coverage:</span> Coverage for physical damage to
                                company-owned vehicles, or rented vehicles used for business purposes to ensure you’re
                                covered for
                                repair costs.</li>
                        </ul>
                        <h3>A Competitive Auto Policy is Crucial for Your Business:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Comprehensive Protection:</span> Whether your business owns
                                vehicles
                                or
                                employees use their personal cars for work, a competitive auto policy protects against a
                                wide range
                                of risks, ensuring your business stays secure.</li>
                            <li><span class="font-bold">Peace of Mind:</span> Knowing you have the right auto coverage in
                                place
                                helps you avoid the financial burden and legal complications that can arise from accidents
                                or
                                injuries involving vehicles.</li>
                            <li><span class="font-bold">Affordable & Tailored Coverage:</span> We work with you to find the
                                best
                                coverage options that fit your needs and budget, ensuring you have the protection you need
                                without
                                overpaying.</li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p class="font-bold">
                            At Johnson Insurance Group, we offer customized auto insurance policies that fit the unique
                            needs of
                            your business. We can help:
                        </p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Review Your Existing Coverage:</span> Ensure you’re fully protected
                                in case
                                of any vehicle-related accidents, whether employees use personal or company vehicles.</li>
                            <li><span class="font-bold">Navigate Coverage:</span> We’ll help you understand the best
                                options, from
                                liability protection to physical damage coverage and uninsured motorists.</li>
                            <li><span class="font-bold">Find a Competitive Policy:</span> We leverage our industry
                                relationships to
                                secure a policy that gives you the protection you need at a competitive price.</li>
                        </ul>
                        <p class="font-bold">Don’t leave your business exposed! A comprehensive and competitively priced
                            auto policy
                            ensures you’re protected against unexpected vehicle-related risks.</p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">Contact us today for a free
                            review of your business’s auto insurance needs!
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="equipment" class="flex flex-col">
            <img class="w-full" src="/images/business-5.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Equipment Insurance</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section id="marine" class="flex flex-col">
            <img class="w-full" src="/images/business-6.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Ocean Marine</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section id="aviation" class="flex flex-col">
            <img class="w-full" src="/images/business-7.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Aviation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section id="umbrella" class="flex flex-col">
            <img class="w-full" src="/images/business-8.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Commercial Umbrella</h2>
                {{-- <h3>Protect Your Business with Commercial Umbrella Insurance</h3> --}}
                <p>Every business faces risks — some expected, others unforeseen. While your primary insurance policies
                    offer valuable protection, they may not always be enough in the event of a serious claim. </p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <p><span class="font-bold">Commercial Umbrella Insurance</span> provides an extra layer of coverage
                            that kicks in when your existing policies (like
                            General Liability, Auto, or Employers' Liability) have reached their limits.</p>
                        <h3>Why Your Business Needs Commercial Umbrella Insurance:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Extended Coverage Limits:</span> Commercial Umbrella Insurance
                                increases
                                the coverage limits of your existing policies, giving you more financial protection in case
                                of major
                                claims or lawsuits.</li>
                            <li><span class="font-bold">Protection Across Multiple Policies:</span> Whether it’s a
                                liability claim,
                                an auto accident, or an employee injury, your umbrella policy can cover a range of risks,
                                ensuring
                                you have comprehensive protection.</li>
                            <li><span class="font-bold">Cost-Effective Risk Management:</span> Adding an umbrella policy
                                can
                                provide higher coverage limits at a relatively low cost, helping you manage large risks
                                without
                                significantly increasing your premiums.</li>
                        </ul>
                        <h3>Key Benefits of Commercial Umbrella Insurance:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Broader Protection:</span> Umbrella insurance extends coverage to
                                multiple
                                areas, including property damage, bodily injury, and even certain legal expenses not covered
                                under
                                your primary policies.</li>
                            <li><span class="font-bold">Peace of Mind:</span> Knowing you have extra protection beyond your
                                standard coverage helps ensure your business can weather large, unexpected claims without
                                financial
                                strain.</li>
                            <li><span class="font-bold">Legal and Settlement Costs:</span> Umbrella coverage can help cover
                                the
                                high costs of legal fees, settlements, or judgments resulting from serious claims, reducing
                                the
                                financial burden on your business.</li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p>At Johnson Insurance Group, we understand that your business faces unique risks. That’s why we
                            offer
                            tailored <span class="font-bold">Commercial Umbrella Insurance</span> to help provide:</p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Comprehensive Coverage:</span> We’ll assess your business needs and
                                recommend an umbrella policy that enhances your current coverage, protecting against
                                unforeseen
                                risks.</li>
                            <li><span class="font-bold">Affordability:</span> Umbrella policies are often more
                                cost-effective than
                                you think, and we’ll work to ensure you get the best coverage at a competitive rate.</li>
                        </ul>
                        <p>
                            <span class="font-bold">Don’t risk your business’s financial future.</span> Ensure you have the
                            added
                            protection you need with <span class="font-bold">Commercial Umbrella Insurance</span>.
                        </p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">
                            Contact us today to learn how an umbrella policy can safeguard your business against unexpected
                            risks
                            and liabilities.
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="pro-liability" class="flex flex-col">
            <img class="w-full" src="/images/business-9.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Professional Liability</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section id="liquor" class="flex flex-col">
            <img class="w-full" src="/images/business-10.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Liquor Liability</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero rem nemo pariatur labore nisi
                    et, perspiciatis laudantium aliquid minima quisquam! Fugiat nisi veritatis culpa debitis earum assumenda
                    quasi sunt!</p>
            </div>
        </section>
        <section id="employment" class="flex flex-col">
            <img class="w-full" src="/images/business-11.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Employment Practices</h2>
                <h3>Protect Your Business with Employment Practices Liability Insurance (EPLI)</h3>
                <p>In today’s litigious environment, it’s essential to have the right protections in place to defend your
                    business from employee-related lawsuits.</p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <p><span class="font-bold">General Liability Insurance</span>
                            doesn’t cover issues like
                            discrimination, wrongful termination, or harassment, but
                            <span class="font-bold">Employment Practices Liability Insurance (EPLI)</span>
                            is designed specifically to protect your business from these employment-related risks.
                        </p>
                        <h3>Why Your Business Needs EPLI:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Coverage for Employment-Related Lawsuits:</span> EPLI protects your
                                business from lawsuits and claims related to discrimination, wrongful termination, sexual
                                harassment, retaliation, and other workplace issues.</li>
                            <li><span class="font-bold">Rising Litigation Risks:</span> As the legal landscape becomes more
                                complex, businesses are increasingly exposed to employment-related lawsuits. Without EPLI,
                                the costs
                                of defending and settling these claims can be financially devastating.</li>
                            <li><span class="font-bold">Protect Your Reputation:</span> A lawsuit can harm not only your
                                finances
                                but also your business reputation. EPLI helps mitigate the risks of negative publicity and
                                ensures
                                that you can focus on business operations instead of legal battles.</li>
                        </ul>
                        <h3>Key Benefits of Employment Practices Liability Insurance:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Legal Defense Coverage:</span> EPLI helps cover legal fees,
                                settlements,
                                and judgments related to employment lawsuits, which can otherwise be costly and
                                time-consuming.</li>
                            <li><span class="font-bold">Peace of Mind:</span> With EPLI in place, you have the confidence
                                that your
                                business is protected from the financial fallout of employee claims, allowing you to focus
                                on growth
                                and operations.</li>
                            <li><span class="font-bold">Customizable Coverage:</span> EPLI policies can be tailored to meet
                                the
                                unique needs of your business, ensuring you have the right level of protection for your
                                workforce
                                and operations. </li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p>At Johnson Insurance Group, we understand the importance of having strong protections in place
                            for your
                            business. Our team can help you:</p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Review Your Existing Policies:</span> We’ll assess whether your
                                current
                                coverage adequately addresses employment-related risks.</li>
                            <li><span class="font-bold">Tailor a Policy to Fit Your Needs:</span> Whether you have a few
                                employees
                                or a large workforce, we can help you design an EPLI policy that fits your specific risks.
                            </li>
                            <li><span class="font-bold">Help Manage Risk:</span> We offer expert guidance on best practices
                                for
                                risk management, reducing the likelihood of employment disputes before they arise.</li>
                        </ul>
                        <p>
                            <span class="font-bold">In today’s increasingly litigious society, don't leave your business
                                vulnerable.</span> Protect your company, assets, and reputation with comprehensive <span
                                class="font-bold">Employment Practices Liability Insurance</span>.
                        </p>
                        <a class="font-bold hover:underline focus:underline">
                            Contact us today to learn more about how EPLI can protect your business from employee-related
                            lawsuits.
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="cyber" class="flex flex-col">
            <img class="w-full" src="/images/business-12.jpg" alt="">
            <div class="p-8 border-b-2 border-l-2 border-r-2 border-black h-full">
                <h2>Cyber Liability</h2>
                <h3>Protect Your Business with Cyber Liability Insurance</h3>
                <p>
                    In today’s digital age, cyber threats are more prevalent than ever. From data breaches and hacking
                    attempts to ransomware attacks, businesses are increasingly vulnerable to cyber risks.
                </p>
                <div x-data="{ open: false }">
                    <button x-on:click="open = true" x-cloak x-show="!open" type="button" class="underline">
                        See More
                    </button>
                    <div x-cloak x-collapse x-show="open">
                        <p><span class="font-bold">Cyber Liability Insurance</span> is essential for safeguarding your
                            company against the financial consequences of a cyber
                            attack and ensuring your business stays resilient in the face of ever-evolving digital threats.
                        </p>
                        <h3>Why Your Business Needs Cyber Liability Insurance:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Data Breach Coverage:</span> If your business experiences a data
                                breach,
                                Cyber Liability Insurance helps cover the costs of notification, credit monitoring, legal
                                fees, and
                                regulatory fines.</li>
                            <li><span class="font-bold">Ransomware & Cyber Extortion:</span> With the rise in ransomware
                                attacks,
                                this coverage helps protect your business from the costs associated with a cyber extortion
                                event,
                                including ransom payments and recovery efforts.</li>
                            <li><span class="font-bold">Business Interruption:</span> Cyber incidents can bring your
                                business to a
                                halt. Cyber Liability Insurance can cover lost income and the costs of restoring your
                                operations.
                            </li>
                            <li><span class="font-bold">Third-Party Claims:</span> If a data breach or cyber attack affects
                                your
                                clients or partners, you could be liable for the resulting damages. This insurance helps
                                protect
                                your business against third-party claims.</li>
                        </ul>
                        <h3>Key Benefits of Cyber Liability Insurance:</h3>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Financial Protection:</span> It covers the costs associated with
                                cyber
                                incidents, including legal fees, public relations efforts, customer notification, and
                                regulatory
                                fines.</li>
                            <li><span class="font-bold">Reputation Management:</span> A data breach or cyber attack can
                                damage your
                                brand. Cyber Liability Insurance helps you manage and recover from the reputational fallout.
                            </li>
                            <li><span class="font-bold">Compliance Assistance:</span> Many businesses must comply with data
                                protection regulations, such as GDPR or CCPA. Cyber Liability Insurance helps ensure
                                compliance and
                                protects against fines for non-compliance.</li>
                        </ul>
                        <h3>How We Can Help:</h3>
                        <p>At Johnson Insurance Group, we help businesses protect themselves from the growing risk of cyber
                            threats.
                            Our team can:</p>
                        <ul class="list-disc pl-4 mb-3">
                            <li><span class="font-bold">Tailor a Cyber Liability Policy:</span> We offer customized Cyber
                                Liability
                                policies that address your specific digital risks and help protect your business assets.
                            </li>
                            <li><span class="font-bold">Affordable & Tailored Coverage:</span> We work with you to find the
                                best
                                coverage options that fit your needs and budget, ensuring you have the protection you need
                                without
                                overpaying.</li>
                        </ul>
                        <p>
                            <span class="font-bold">Don’t wait for a cyber incident to happen.</span> Protect your business
                            from
                            the financial and reputational damage that can result from cyber threats.
                        </p>
                        <a href="/contact" class="font-bold hover:underline focus:underline">
                            Contact us today for a review of your current cyber coverage and to learn how Cyber Liability
                            Insurance
                            can safeguard your business from digital risks.
                        </a>
                        <button x-on:click="open = false" type="button" class="block mt-3 underline">
                            See Less
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
