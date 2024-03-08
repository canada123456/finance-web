@extends('layouts.app')

@section('content')
    <div
        class="relative w-full sm:flex sm:justify-center sm:items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="mt-10 bg-gray-100">
            <section id="recovery-center" class="w-full bg-gray-200 dark:bg-gray-900">
                <div
                    style="background-image: url('{{asset('images/redbg.png')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                    class="h-[400px] gap-16 items-center py-8 w-full lg:grid lg:grid-cols-2 lg:px-6">
                    <div class=" ml-4 font-light text-white sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">
                            Authorisation
                        </h2>
                        <hr class="border-2">
                        <p class="my-4">
                            Most firms providing financial services need to be authorised by us or registered with us.
                            Find out how to apply, get support if you're newly authorised, and view other tasks for
                            authorised firms.</p>
                    </div>
                </div>
            </section>
            <section id="cards" class="mt-20 pb-5 bg-white dark:bg-gray-900">
                <h1 class="mt-4 pt-6 text-center mb-4 text-3xl font-bold">How to get authorised</h1>
                <div
                    class="gap-16 mt-2 sm:flex-col sm:justify-center items-center pb-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:px-6">
                    <div
                        class="max-w-sm p-5 sm:mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The
                                authorisation process</h5>
                        </a>
                        <hr class="border-red-600 border-2 mb-10 mt-8">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Understand the stages of becoming
                            authorised or registered, and our expectations of applicants.</p>
                    </div>
                    <div
                        class="max-w-sm p-5 sm:mb-4  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2  text-2xl font-bold tracking-tight text-gray-900 dark:text-white">UK
                                wholesale markets</h5>
                        </a>
                        <hr class="border-red-600 border-2 mb-10 mt-8">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Before applying to do business in
                            the UK's financial markets, check if you meet our criteria for extra support.</p>
                    </div>
                    <div
                        class="max-w-sm p-5 sm:mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Preparing
                                your financials</h5>
                        </a>
                        <hr class="border-red-600 border-2 mb-10 mt-8">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Make sure you submit high quality
                            financial information to prevent delays to your firm's application.</p>
                    </div>
                </div>
            </section>

            <section id="guidance" class="mt-20 pb-5 mb-10 bg-white dark:bg-gray-900">
                <h1 class="mx-6 mt-4 pt-6 text-left mb-2 text-3xl font-medium">Application guidance by firm</h1>
                <p class="mx-6 py-2 text-left mb-4 text-3xl font-light">Select your type of firm or business model below
                    – we have pages for each type of application, to
                    read alongside our page about the authorisation process.</p>
                <div
                    class="gap-16 mt-0 items-center pb-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:px-6">
                    <div
                        class="max-w-sm mt-0 p-5 bg-white border-t-4 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Wholesale
                            Markets</h5>
                        <hr class="border-red-600 border-2 mb-6 mt-8">
                        <ul class="py-2 text-lg">
                            <li class="pb-4 hover:underline">
                                <a>
                                    Buy and sellside firms
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Authorised and Recognised Funds
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Credit rating agencies
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Trade repositories
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Securisation repositories
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Data reporting servies and providers
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="max-w-sm mt-0 p-5 bg-white border-t-4 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Credit and
                            mortgage brokers</h5>
                        <hr class="border-red-600 border-2 mb-6 mt-8">
                        <ul class="py-2 text-lg">
                            <li class="pb-4 hover:underline">
                                <a>
                                    Primary credit brokers
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Motor dealers
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Vets and dentists
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Gyms and golf clubs
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Secondary credit brokers
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Mortgage brokers
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="max-w-sm p-5 bg-white border-t-4 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Lenders and other consumer finance</h5>
                        <hr class="border-red-600 border-2 mb-6 mt-8">
                        <ul class="py-2 text-lg">
                            <li class="pb-4 hover:underline">
                                <a>
                                    Consumer credit lenders and hirers
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Home finance providers
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Debt firms
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Claims management companies
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Credit reference agencies
                                </a>
                            </li>
                            <li class="pb-4 hover:underline">
                                <a>
                                    Credit information services providers
                                </a>
                            </li>
                        </ul>
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
</script>
