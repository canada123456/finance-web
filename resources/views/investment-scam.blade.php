@extends('layouts.app')

@section('content')
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full lg:mx-10">
            <section id="recovery-center" class="mt-10 text-gray-900">
                <div class="ml-4 font-light sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">
                        Crypto investment scams
                    </h2>
                    <hr class="border-2">
                    <p class="my-4 font-medium">Find out how crypto investment scams work, how to avoid them and what to
                        do if you’re scammed.</p>
                </div>
            </section>
            <section id="cards" class="mt-5 pb-5">
                <h2 class="ml-4 mb-4 text-2xl tracking-tight font-normal dark:text-white">
                    How crypto investment scams work
                </h2>
                <div class="mx-4">
                    <p class="mb-2">Crypto investment scams are on the rise. In fact, reports to us about these scams
                        have more than doubled since 2020, so it’s important to know what to look out for.
                        Fraudsters tend to advertise on social media, often using images of celebrities to promote the
                        fake investments. But they may also target people searching for investments online, through
                        search engines like Google and Bing.
                        <br><br>
                        The scam adverts often link to professional-looking websites, where fraudsters may manipulate
                        software to fake prices and investment returns. Once you’ve invested, the scammers may act
                        quickly, closing your account and taking your money. Or they may continue the pretence, to
                        encourage others to invest. You may not even realise you’ve invested in a scam until you try to
                        sell your investment.
                    </p>
                </div>
                <h2 class="ml-4 mt-12 mb-4 text-2xl tracking-tight font-normal dark:text-white">
                    How to protect yourself from scams
                </h2>
                <div class="mx-4 w-3/4 border border-red-600 rounded-[1.5rem] border-2 py-auto">
                    <p class="mb-2 py-2 px-2">Most crypto-related activities aren’t regulated in the UK. This means that
                        if you
                        invest in crypto, you generally won't have access to the Financial Ombudsman Service if you want
                        to complain.
                        You also won't be protected by the Financial Services Compensation Scheme (FSCS) if the firm
                        goes out of business. This means it’s unlikely you’d get your money back.
                    </p>
                </div>

                <div class="my-8  mx-6 w-3/4 px-2">
                    <ol class="relative border-s border-red-600 dark:border-gray-700">
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-red-600 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                            <time
                                class="mb-1 text-lg font-normal leading-none text-white border-2 bg-red-600 rounded-full py-2 px-4">
                                1
                            </time>
                            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">Watch out for the
                                warning signs</h3>
                            <p class="mt-4 mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                            <ul class="list-disc ml-4 mb-2">
                                <li>
                                    Have you been contacted out of the blue?
                                </li>
                                <li>
                                    Are you being pressured to invest quickly?
                                </li>
                                <li>
                                    Are you being promised investment returns that sound unrealistic?
                                </li>
                            </ul>
                            If you answer
                            'yes' to any of these questions, be extremely cautious. Remember, if an investment
                            opportunity sounds too good to be true, then it probably is. </p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-red-600 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time
                                class="mb-1 text-lg font-normal leading-none text-white border-2 bg-red-600 rounded-full py-2 px-4 dark:text-gray-500">
                                2
                            </time>
                            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">Check our Financial
                                Services Register</h3>
                            <p class="mt-4 text-base font-normal text-gray-900 dark:text-gray-400">Firms offering crypto
                                products in the UK must be registered with us or have permission to promote them. Our FS
                                Register will show you which firms are registered, and which firms are operating without
                                permission.
                            <ul class="list-disc ml-4 my-2">
                                <li>
                                    Search for the firm by name, or by using its firm reference number (FRN).
                                </li>
                                <li>
                                    If the firm is registered, check what activities and services it has permission for.
                                </li>
                                <li>
                                    Check the firm's contact details and make sure they match the contact details you've
                                    been given.
                                </li>
                                <li>
                                    If you can’t find a firm on the FS Register, it’s unlikely the firm has permission
                                    to offer you crypto products and <b>you should avoid using the firm</b>.
                                </li>
                            </ul>
                            <x-nav-link :href="route('firms.individuals-authorized')" role="button"
                                        class="text-white bg-red-600 hover:bg-red-900 focus:ring-red-200 font-medium rounded-lg text-lg px-5 pb-3 me-2 dark:bg-red-200 dark:hover:bg-red-200 dark:focus:ring-red-200">
                                {{ __('Search the FS Register') }}
                            </x-nav-link>
                            </p><p class="mt-4">
                                <b>But remember, just because a firm is registered, doesn’t mean you’ll have access to
                                    the FSCS or the Financial Ombudsman if something goes wrong. </b>
                            </p>
                        </li>
                    </ol>


                </div>

                <h2 class="ml-4 mt-12 mb-4 text-2xl tracking-tight font-normal dark:text-white">
                    If you've been scammed
                </h2>
                <div class="mx-2 w-3/4 py-auto">
                    <p class="mb-2 py-2 px-2">If you’re worried about a potential scam, or you think you may have been
                        contacted by a fraudster, you can report it to us
                        Call us on 0800 111 6768 or use our <a class="text-blue-700 underline" href="{{route('file-complaint.report')}}">contact form</a> to get in touch.
                        <br><br>
                        If you’ve already invested in a scam, it’s important to remember that fraudsters may try to
                        target you again, or sell your details to other criminals.
                        <br><br>
                        The follow-up scam may be completely different, or it may be related to the previous fraud. It
                        may include an offer to get your money back or an offer to buy back the investment after you pay
                        a fee.</p>
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
</script>
