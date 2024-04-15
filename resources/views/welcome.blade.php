@extends('layouts.app')

@section('content')
    <div
        class="w-full relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-8xl bg-gray-100">
            <section class="h-[80vh] bg-white dark:bg-gray-900 rounded-[1rem]">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Welcome to Cryptocurrency Recovery Solutions
                        </h2>
                        <hr class="border-b-4 border-red-600">
                        <h4 class="pt-2 mb-4 text-xl tracking-tight font-medium text-gray-900 dark:text-white">
                            We oversee the implementation of cryptocurrency recovery systems to safeguard investors and maintain market integrity in the UK
                        </h4>
                    </div>
                </div>
            </section>
            <section
                class="px-6 px-2 mt-5 rounded-[1rem] dark:bg-gray-900">
                <div class="px-2">
                    <h2 class="text-2xl py-2">What we do</h2>
                    <p class="text-lg">We're committed to protecting costumers, enhancing market integrity,
                        and promoting competition in the interests of consumers.</p>
                </div>
                <div class="lg:grid gap-5 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:py-8  px-5">
                    <div
                        class="bg-white max-w-sm p-5 my-4 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 py-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                About us
                            </h5>
                        </div>
                        <hr class="border-b-4 border-red-600 my-4">
                        <p class="py-2 mb-3 font-normal text-gray-700 dark:text-gray-400">We aim to support a healthy
                            and
                            successful financial
                       
                    <div
                        class="sm:my-4 bg-white my-4 max-w-sm p-5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 py-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Recovery Center
                            </h5>
                        </div>
                        <hr class="border-b-4 border-red-600 my-4">
                        <p class="py-2 mb-3 font-normal text-gray-700 dark:text-gray-400">Have your say on our live
                            consultations,
                            or browse our final rules and other resources.</p>
                        <div class="flex justify-end">
                            <a href="#recovery-center" onclick="scrollToDiv(event)"
                               class="inline-flex px-3 py-2 my-4 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Read more
                                <svg class="w-6 h-6 pt-1 text-white dark:text-white" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="sm:my-4 bg-white my-4 max-w-sm p-5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 py-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Reviews
                            </h5>
                        </div>
                        <hr class="border-b-4 border-red-600 my-4">
                    class="flex justify-end">
                            <a href="#reviews" onclick="scrollToDiv(event)"
                               class="inline-flex px-3 py-2 my-4 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Read more
                                <svg class="w-6 h-6 pt-1 text-white dark:text-white" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            </a>+
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="px-6 px-2 mt-5 dark:bg-gray-900">
                <div class="px-2">
                    <h2 class="text-2xl py-2">Our Strategy in action</h2>
                    <p class="text-lg">We take an assertive and innovative approach to preventing serious hahrm, setting
                        higher
                        standarts, and promoting positive change in financial services.</p>
                </div>
                <div class="lg:grid gap-10 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:py-8 px-5">
                    <div
                        class=y-2 mb-3 font-normal text-2xl text-gray-700 dark:text-gray-400">Making Buy Now
                                Pay later terms clearer</p>
                            <hr class="border-b-4 border-red-600 my-4">
                        </div>
                    </div>
                    <div
                        class="my-4 bg-white max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="w-full rounded-t-lg h-2/3" src="{{asset('images/about-5-image.png')}}">
                        </div>
                        <div class="p-5">
                            <p class="py-2 mb-3 font-normal text-2xl text-gray-700 dark:text-gray-400">Raising standards
                                in new firms and promotions</p>
                            <hr class="border-b-4 border-red-600 my-4">
                        </div>
                    </div>
                    <div
                        class="my-4 bg-white max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="w-full rounded-t-lg h-2/3" src="{{asset('images/about-6-img.png')}}">
                        </div>
            </section>
            <section id="about-us" class="px-6 mt-5 bg-white dark:bg-gray-900">
                <h1 class="w-full text-center text-3xl font-extrabold mt-4 pt-6">About the FCA Recovery Solutions</h1>
                <div
                    class="gap-16 items-center pb-8 pt-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:py-8 lg:px-6">
                    <div class="col-span-2 font-medium text-gray-900 sm:text-lg dark:text-gray-400">
                        <p class="mb-1">We regulate the conduct of nearly 45,000 businesses in the UK to ensure that
                            financial
                            markets work well. Find out more about our role.</p>
                        <h2 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                            Role</h2>
                        <p class="mb-4">Financial markets must be honest, competitive and fair so consumers get a fair
                            deal. We work to ensure these markets work well for individuals, for businesses, and for the
                            growth and competitiveness of the UK economy. </p>

                        <p>We do this by:</p>
                        <ul class="list-disc ml-4 mb-4">
                            <li>regulating the conduct of nearly 45,000 businesses</li>
                            <li>prudentially supervising around 44,000 firms</li>
                            <li>setting specific standards for around 17,000 firms</li>
                        </ul>
                    ss the UK with a head office in London, offices in Leeds and Edinburgh and
                            colleagues in Belfast and Cardiff.</p>
                    </div>
                    <div class="mt-8">
                        <img id="first-about" class="full rounded-lg h-full"
                             src="{{asset('images/about-us-first.jpg')}}">
                    </div>
                </div>
                  class="gap-16 items-center px-6 mx-auto max-w-screen-xl lg:px-6">
                    <h2 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">Why we do
                        it</h2>
                    <p class="mb-1">Financial services play a critical role in the lives of everyone in the UK, from
                        junior ISAs to pensions, direct debits to credit cards, loans to investments. </p>
                    <p class="mb-1">How well financial markets work has a fundamental impact on us all.</p>
                    <p class="mb-1">UK financial services employ over 1.1 million people and, alongside related
                        professional services, contribute an estimated £100 billion in tax per year.</p>
                    <p class="mb-1">Based on our policy and enforcement work, we estimate that we add at least £11 of
                        benefits to consumers and small businesses for every £1 we spend.</p>
                    <p class="mb-1">If UK markets work well, competitively and fairly they benefit customers, staff and
                        shareholders, and maintain confidence in the UK as a global financial centre.</p>
                </div>
                <div
                    class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:py-8 lg:px-6 mb-4">
                    <div class="mt-8">
                        <img id="first-about" class="w-full h-3/4 pb-10 rounded-lg"
                             src="{{asset('images/cntSign.png')}}">
                    </div>
                    <div class="col-span-2 font-medium text-gray-900 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">How we
                            operate</h2>
                        <p class="mb-4">Our strategic objective is to make sure relevant markets function well. We’ve
                            outlined how we'll achieve this in our 3-year Strategy.</p>
                        <p>Our operational objectives are to:</p>
                        <ul class="list-disc ml-4 mb-4">
                            <li>protect consumers from bad conduct</li>
                            <li>protect the integrity of the UK financial system</li>
                            <li>promote effective competition in the interests of consumers</li>
                   
                        <p class="mb-4">
                            To advance our objectives, we work with the Prudential Regulation Authority (PRA), the
                            prudential regulator of around 1,500 banks, building societies, credit unions, insurers and
                            major investment firms. We also work alongside other regulators, UK organisations and
                            government departments, and regularly engage with a wide range of international counterparts
                            and stakeholders.</p>
                        <p class="mb-4">
                            We have a large and growing remit and our annual perimeter report sets out what we do and
                            don’t regulate.

                            We consider the principles of good regulation when carrying out our work. We also consider
                            the importance of tackling financial crime, taking into account the nature, size and
                            complexity of firms.</p>
                    </div>
                </div>
            <o assets.</p>

                <div
                    class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:px-6 md:grid-cols-2 sm:grid-cols-1 sm:mx-auto">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <div
                            class="my-4 bg-white max-w-sm p-5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                <h5 class="mb-2 py-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Technology and Expertise
                                </h5>
                            </div>
                            <hr class="border-b-4 border-red-600 my-4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">At the heart of our recovery center
                                lies a state-of-the-art technological infrastructure, meticulously designed to navigate
                                the complexities of blockchain networks. Our team of seasoned experts, comprising
                                blockchain analysts, cybersecurity specialists, and legal professionals, harnesses their
                                collective expertise to undertake the most challenging cases in the crypto sphere.</p>
                        </div>
                    </div>
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <div
                            class="my-4 bg-white max-w-sm p-5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                <h5 class="mb-2 py-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Comprehensive Recovery Services
                                </h5>
                            </div>
                            <hr class="border-b-4 border-red-600 my-4">
                            <p class="py-2 mb-3 font-normal text-gray-700 dark:text-gray-400">No matter the nature of
                                your crypto predicament – whether it's a compromised wallet, lost private keys, or
                                fraudulent transactions – We have the acumen and tools to recover what's rightfully
                                yours. We specialize in salvaging a diverse array of digital assets, including but not
                                limited to Bitcoin, Ethereum, Ripple, Litecoin, and various altcoins.</p>
                        </div>
                    </div>
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <div
                            class="my-4 bg-white max-w-sm p-5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                <h5 class="mb-2 py-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Proven Track Record
                                </h5>
                            </div>
                            <hr class="border-b-4 border-red-600 my-4">
                            <p class="py-2 mb-3 font-normal text-gray-700 dark:text-gray-400">Our track record speaks
                                for itself – countless success stories attest to our unwavering commitment to retrieving
                                lost crypto assets for our clients. Through meticulous analysis, relentless pursuit, and
                                strategic collaboration with law enforcement agencies, we have consistently delivered
                                results that exceed expectations.</p>
                        </div>
                    </div>
                </div>
                <p class="mx-6 text-md pb-10">
                    The relentless pursuit of recovery sets us apart. We leave no stone unturned in our efforts to track
                    down and reclaim your lost crypto assets. Our team is adept at navigating the complexities of the
                    blockchain, following digital trails, and collaborating with law enforcement agencies when
                    necessary. This collaborative approach ensures that we maximize our resources and increase the
                    likelihood of a successful recovery.
                    <br><br>
                    Navigating the legal landscape of cryptocurrency can indeed be daunting, and that's why our legal
                    team plays a crucial role in our recovery process. Whether it involves dealing with regulatory
                    issues, coordinating with authorities, or addressing legal complexities surrounding your crypto
                    assets, we have the expertise to guide you through every step. Our commitment to transparency and
                    ethical practices ensures that our clients are not only recovering their assets but doing so in a
                    manner that upholds legal standards and safeguards their interests.
                    <br><br>
                    In essence, our crypto recovery center is a beacon of hope for those who have experienced the
                    distress of losing their digital assets. With a blend of expertise, dedication, and a commitment to
                    legal integrity, we stand as your trusted partner in the journey to reclaim what rightfully belongs
                    to you in the world of cryptocurrency.
                </p>
            </section>
            <section id="reviews" class="mt-20 pb-5 bg-white dark:bg-gray-900">
                <h1 class="mt-4 pt-6 text-center mb-0 text-3xl font-extrabold">Reviews</h1>
                <div
                    class="gap-16 items-center pb-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:px-6">
                    <div class="flex flex-col gap-3 mt-14">
                        <div class="flex flex-col gap-4 bg-gray-400 p-7 px-6 rounded-[2.5rem]">
                            <!-- Profile and Rating -->
                            <div class="flex justify justify-between">
                                <div class="flex gap-2">
                                    <div
                                        class="w-7 h-7 text-center font-bold border-2 border-red-600 rounded-full bg-red-500">
                                        J
                                    </div>
                                    <span class="font-bold">John Doe</span>
                                </div>
                                <div class="flex p-1 gap-1 text-orange-300">
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>Their team's expertise and swift action not only restored my lost assets but also
                                provided me with unparalleled support throughout the process. I highly recommend their
                                services to anyone in need of crypto recovery. Truly impressive
                            </div>
                            <div class="flex justify-end">
                                <span>Feb 13, 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mt-14">
                        <div class="flex flex-col gap-4 bg-gray-400 p-7 px-6 rounded-[2.5rem]">
                            <!-- Profile and Rating -->
                            <div class="flex justify justify-between">
                                <div class="flex gap-2">
                                    <div
                                        class="w-7 h-7 text-center font-bold border-2 border-red-600 rounded-full bg-red-500">
                                        J
                                    </div>
                                    <span class="font-bold">Jess Hopkins</span>
                                </div>
                                <div class="flex p-1 gap-1 text-orange-300">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div>From the first consultation to the successful recovery, their team exhibited a deep
                                understanding of blockchain technology and navigated the legal complexities seamlessly.
                                I'm grateful for their dedication and highly recommend their services.
                            </div>
                            <div class="flex justify-end">
                                <span>Feb 03, 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mt-14">
                        <div class="flex flex-col gap-4 bg-gray-400 p-4 px-6 rounded-[2.5rem]">
                            <!-- Profile and Rating -->
                            <div class="flex justify justify-between">
                                <div class="flex gap-2">
                                    <div
                                        class="mt-2 w-7 h-7 text-center font-bold border-2 border-red-600 rounded-full bg-red-500">
                                        A
                                    </div>
                                    <span class="font-bold pt-2">Alice Banks</span>
                                </div>
                                <div class="flex p-1 gap-1 text-orange-300">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div>Facing a fraudulent transaction left me feeling helpless, but their proven track record
                                and strategic collaboration with law enforcement agencies turned the situation around.
                                Their rigorous security protocols instilled confidence, and their legal assistance
                                ensured a smooth resolution.
                            </div>
                            <div class="flex justify-end">
                                <span>Jan 17, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<script type="module">
    function scrollToDiv(event) {
        event.preventDefault(); // Prevent default anchor behavior

        // Get the target div element
        const targetDiv = document.getElementById("about-me");

        // Scroll to the target div
        targetDiv.scrollIntoView({behavior: "smooth"});
    }

    $(document).ready(function () {
        console.log(1);
    })

</script>
