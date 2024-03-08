@extends('layouts.app')

@section('content')
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full lg:mx-8">
            <section id="recovery-center" class="mt-10 text-gray-900">
                <div class="ml-4 font-light sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">
                        Fees and levies
                    </h2>
                    <hr class="border-2">
                    <p class="my-4 font-medium">
                        Find out about the fees we charge and what they cover, and the levies we collect for
                        organisations that are part of the regulatory system.</p>
                </div>
            </section>
            <section id="cards" class="mt-5 pb-5">
                <div class="ml-12">
                    <p class="mb-2">We are independent of Government. To finance our work we charge fees to:</p>
                    <ul class="list-disc ml-6">
                        <li>
                            the firms we authorise
                        </li>
                        <li>
                            some other bodies such as recognised investment exchanges or registered firms
                        </li>
                    </ul>
                </div>
                <div class="ml-12 my-5">
                    <p class="mb-2">There are 3 types of fee:</p>
                    <ul class="list-disc ml-6">
                        <li>
                            <a class="text-blue-700 underline">application</a> - when you ask us to authorise your firm
                        </li>
                        <li>
                            <a class="text-blue-700 underline">change to permissions</a> - when you want to change a
                            permission for an authorised
                            activity
                        </li>
                        <li>
                            <a class="text-blue-700 underline">annual</a>(periodic) - which is payable each year
                        </li>
                    </ul>
                </div>
                <div class="ml-12 mb-5">
                    <p class="mb-2">We also collect fees and levies to pay for the costs of the:</p>
                    <ul class="list-disc ml-6">
                        <li>
                            <a class="text-blue-700 underline  my-1 inline-flex">Payment Systems Regulator
                                <svg class="w-4 h-4 mt-1 text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-700 underline my-1 inline-flex">Prudential Regulation Authority
                                <svg class="w-4 h-4 mt-1 text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-700 underline  my-1 inline-flex">Financial Ombudsman Service
                                <svg class="w-4 h-4 mt-1 text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-700 underline  my-1 inline-flex">Financial Services Compensation Scheme
                                <svg class="w-4 h-4 mt-1  text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-700 underline my-1 inline-flex">Money and Pensions Service
                                <svg class="w-4 h-4 mt-1  text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                            (Financial Guidance levies)
                        </li>
                        <li>
                            <a class="text-blue-700 underline my-1 inline-flex">Financial Reporting Council
                                <svg class="w-4 h-4 mt-1 text-gray-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <p>Illegal Money Lending Team</p>
                        </li>
                        <li>
                            <p>Economic Crime Levy (ECL)</p>
                        </li>
                    </ul>
                    <p class="mt-4">You can find our rules on fees in the <a class="text-blue-700 underline">Fees
                            Manual</a> section of the Handbook.</p>
                </div>
                <div class="ml-12 my-5">
                    <p class="mb-2 text-2xl font-medium">Fees to apply for authorisation</p>
                    <p class="my-2">If you wish to register with us or get authorised, we will charge you an application
                        fee.</p>
                    <p class="my-2">
                        The fee is not refundable, even if your application is unsuccessful.
                    </p>
                    <p class="my-2">
                        If you apply to be authorised, the amount of the fee will depend on the:</p>
                    <ul class="list-disc ml-6">
                        <li>
                            <p>regulated activities your firm wishes to carry on</p>
                        </li>
                        <li>
                            <p>complexity of your application</p>
                        </li>
                    </ul>
                    <p class="my-2">There are 10 fee categories – see <a class="text-blue-700 underline">application
                            fees</a> for more information, including the price of each category.</p>
                </div>

                <div class="ml-12 my-5">
                    <p class="mb-2 text-2xl font-medium">Fees to change permissions</p>
                    <p class="my-2">We charge a fee to change (vary) a permission, for example, where a firm wants to
                        start arranging mortgages.</p>
                    <p class="my-2">
                        If the change puts you in an additional fee-block from your existing one, we will charge you 50%
                        of the relevant <a class="text-blue-700 underline">authorisation application fee</a>.
                    </p>
                    <p class="my-2">If the change in permission does not put you into an additional fee-block, the fee
                        will be a Category 2 charge. </p>
                    <p class="my-2">We will not charge you if you wish to reduce your permissions. </p>
                    <p class="my-2">If you believe you should not be charged, or that you are being charged the
                        incorrect amount, please call us on 0300 500 0597 and do not pay the fee until your concern has
                        been resolved.</p>
                </div>

                <div class="ml-12 my-5">
                    <p class="mb-2 text-2xl font-medium">Annual fees</p>
                    <p class="my-2 font-bold">How we calculate your fee </p>
                    <p class="my-2">
                        The amount we charge you will depend on:
                    </p>
                    <ul class="list-disc ml-6">
                        <li>
                            <p>the type of regulated activities your firm carries out (fee-blocks)</p>
                        </li>
                        <li>
                            <p>the extent of your firm’s activities (amount of business undertaken)</p>
                        </li>
                        <li>
                            <p>how much it costs us to regulate these types of activities</p>
                        </li>
                    </ul>
                    <p class="my-2">Fee rates can change each year, depending on firm population and size. For an
                        explanation of fee changes, please see our <a class="text-blue-700 underline">fee rate
                            movements</a> page.</p>
                    <p class="my-2">Read more information about <a class="text-blue-700 underline"> how we calculate
                            your fees</a>.</p>

                    <p class="my-2 font-bold">How and when we collect your fees </p>
                    <p class="my-2">
                        We will invoice you from July onwards each year. We will issue a single invoice covering your
                        FCA fee plus fees and levies for any other regulatory organisations, as appropriate.
                    </p>
                    <p class="my-2">Where your total fees exceed £50,000 in the previous year, we will invoice you for
                        50% of that fee, payable by 1st April. This is called our ‘on account’ fee.</p>
                    <p class="my-2 font-bold">When to pay</p>
                    <p class="my-2">You must pay by the due date, which is usually 30 days from the date of the invoice we send you.</p>
                    <p class="my-2 font-bold">How to pay</p>
                    <p class="my-2">Find out <a class="text-blue-700 underline"> how to pay</a>.</p>
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
