@extends('layouts.main')
@section('content')
    <div class="h-[550px] bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('/images/inside-header.jpg')">
        <div class="h-full content-box text-white ml-auto flex flex-col justify-center items-center">
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <h1 class="text-center my-8">ABOUT</h1>
            <hr class="mx-auto border-2 border-brand-lime w-24">
            <img src="/images/puzzle2.svg" alt="" class="md:w-[200px] absolute right-0 bottom-0" width="100px"
                height="auto">
        </div>
    </div>
    <main class="mt-10 content-box">
        <section class="flex flex-col md:flex-row gap-12">
            <div class="md:w-3/4">
                <h2>About Us</h2>
                <p>
                    At <span class="font-bold">Johnson Insurance Group</span>, we pride ourselves on offering personalized
                    service and expert guidance for both
                    <span class="font-bold">commercial</span> and <span class="font-bold">personal</span> insurance needs.
                    Founded
                    in 2013 by <span class="font-bold">Blaine & Annie Johnson</span>, lifelong Alaskans with a
                    passion for supporting the insurance needs of the businesses and individuals that make our state truly
                    unique. With a commitment to providing top-tier service, our team of experienced agents consistently
                    prioritizes your insurance needs, ensuring you receive the highest level of customer care.
                </p>
                <p>
                    Each growing up in hard-working, family-owned businesses, Blaine and Annie have instilled a strong sense
                    of
                    honesty, integrity, and hard work into the foundation of our agency, always striving to do right by our
                    clients.
                </p>
                <p>
                    When we're not meeting with clients or analyzing policies, you can find us enjoying the outdoors,
                    whether
                    it’s fly fishing on the Kenai River or exploring the Alaskan wilderness.
                </p>
                <p>
                    We look forward to learning your story and competing for your business. Thank you for considering us as
                    your trusted insurance partner!
                </p>
                <p class="font-bold">
                    - Blaine & Annie Johnson
                </p>
            </div>
            <div class="sm:w-1/2 md:w-1/4 mx-auto flex flex-col sm:flex-row md:flex-col gap-12 justify-center">
                <img class="md:ml-auto border-8 border-brand-lime" src="/images/annie-johnson.jpg" alt="">
                <img class="md:ml-auto border-8 border-brand-lime" src="/images/blaine-johnson.jpeg" alt="">
            </div>
        </section>
        <section class="mt-16">
            <h2 class="text-center mb-8">The Johnson Insurance Group Difference</h2>
            <h3>We Are Here to Make a Difference in the Insurance Industry in Alaska</h3>
            <p>
                At Johnson Insurance Group, we believe that your insurance experience should not be dictated by your
                premium. We are committed to offering more than just a policy — we deliver <span class="font-bold">
                    year-round quality customer
                    service
                </span>, personalized attention, and proactive support that puts your business first.
            </p>
            <p>
                We do not believe:
            </p>
            <ul class="list-disc ml-6 mb-6">
                <li>Your insurance premium should determine the level of service you receive.</li>
                <li>Phone calls and messages should go unreturned.</li>
                <li>The only time you should hear from your agent is when the renewal bill is due.</li>
            </ul>
            <p>
                Instead, we focus on delivering insurance products backed by strong and reputable carriers, aggressive
                marketing to secure the best pricing, and <span class="font-bold">exceptional customer service</span> to
                ensure that your coverage evolves
                with your business needs every year.
            </p>
            <h3>Why Understanding Your Insurance Matters</h3>
            <p>
                The biggest risk to any business is <span class="font-bold">not understanding their insurance
                    program.</span>
                A lack of understanding can
                lead to:
            </p>
            <ul class="font-bold list-disc ml-6 mb-6">
                <li>Uncovered claims</li>
                <li>Surprise audit bills</li>
                <li>Duplications in coverage</li>
            </ul>
            <p>
                Where do your insurance premium dollars go? Are they being used effectively to protect your business? We
                help you understand your insurance program to ensure you’re getting the best value and protection.
            </p>
            <h3>Our Approach to Service</h3>
            <p>If you're ready for a different kind of insurance service, here’s how we can help:</p>
            <ul class="list-disc ml-6 mb-6">
                <li>
                    <h4>Initial Coverage Review and Risk Consultation:</h4>
                    <p>
                        We assist in identifying hazards to insure and work with your carriers to design a proactive plan
                        that aims to prevent claims before they happen.
                    </p>
                </li>
                <li>
                    <h4>Annual Competitive Marketing Analysis:</h4>
                    <p>We conduct a comprehensive review of your insurance program each year to ensure you continue to
                        receive the best value for your coverage. We shop for the most competitive rates and deliver
                        transparent options.</p>
                </li>
                <li>
                    <h4>Insurance Services Timeline:</h4>
                    <p>We understand life gets busy. That’s why we’ll work with you to develop a client service timeline.
                        This way, we’ll schedule calls at times that work best for you, and you’ll always know the status of
                        the renewal marketing process. We’ll eliminate the guesswork and last-minute scrambling from your
                        insurance experience.</p>
                </li>
                <li>
                    <h4>Certificates of Insurance:</h4>
                    <p>Certificates of Insurance are vital for your business operations and contractor relations. We
                        prioritize these requests, ensuring quick, accurate turnaround to keep your operations moving
                        smoothly.</p>
                </li>
            </ul>
            <h3>Our Promise to You</h3>
            <p>
                No matter what your insurance needs are, we promise to deliver <span class="font-bold">timely service</span>
                and <span class="font-bold">actionable plans</span> to
                enhance your insurance program. We’ll work with you to create a custom plan that not only protects your
                business but also keeps you informed, in control, and confident in your coverage.
            </p>
            <p>
                If you’re ready to experience a different level of service, <a href="/contact"
                    class="underline font-bold">contact us today</a> to see what a difference we can make for you.
            </p>
        </section>
    </main>
@endsection
