@extends('layouts.app')

@section('content')
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full lg:mx-8">
            <section id="recovery-center" class="mt-10 text-gray-900">
                <div class="ml-4 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">
                        Helping people access cash
                    </h2>
                    <hr class="border-2">
                    <p class="my-4 font-medium">We are committed to making sure people can access the cash they need.
                        Read how new legislation has given us powers to act where we find or anticipate significant
                        impacts on consumers’ ability to access cash.</p>
                    <p class="my-4 text-2xl font-bold">Our new powers to protect access to cash</p>
                    <p class="my-2 ml-4">The Treasury published a <a class="text-blue-700 underline inline-flex">Cash Access
                            Policy
                            Statement
                            <svg class="w-4 h-4 mt-1 text-blue-700 ml-1" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                            </svg>
                        </a>
                        on 18 August 2023. We published
                        our own Policy Statement on the same day, which sets out our overall approach to cash access in
                        the
                        UK (including how we've considered the Treasury’s Policy Statement), as well as next steps.
                    </p>
                    <p class="my-3 ml-4">
                        The Financial Services & Markets Act received Royal Assent on 29 June 2023. When Schedule 8 is
                        commenced, it will provide a framework within which we will seek to ensure the reasonable
                        provision of cash withdrawal and deposit services for personal and business current accounts
                        across the UK. The Act gives us new powers, in particular to act where we find or anticipate
                        there will be shortages in cash access services which would have significant impacts on local
                        areas.
                    </p>
                    <p class="my-3 ml-4">Before we make any rules under these new powers, we will conduct a public
                        consultation, including a cost-benefit analysis.</p>
                    <p class="my-3 ml-4">We welcome that, ahead of legislation, firms and the Cash Action Group, have
                        appointed LINK as an independent body to assess the needs of local communities and direct cash
                        solutions. We will continue to monitor how this initiative develops and use what we learn to
                        inform our proposed future regulatory regime.</p>
                    <p class="my-3 ml-4">We will continue to publish <a class="text-blue-700 underline">updates</a> on access
                        to cash coverage to inform our policy
                        work and to ensure we can act quickly if we see problems emerging. More on our research and data
                        publications is set out below.</p>

                    <p class="my-4 text-2xl font-bold">Why access to cash is important</p>
                    <p class="my-3 ml-4">Our Financial Lives 2022 survey found that 6% of adults in the UK used cash to pay
                        for everything or most things over the 12 months since May 2021, with this figure increasing
                        (9%) for those in vulnerable circumstances.</p>
                    <p class="my-3 ml-4"><a class="text-blue-700 underline">Our data</a> shows that most people
                        currently have reasonable access to cash. As of Q2 2022, 95.1% of the UK population are within 1
                        mile of a free-to-use cash withdrawal point, such as cash machines, Post Office branches or
                        bank/building society branches, and 99.7% of the UK population are within 3 miles of a
                        free-to-use cash access point.</p>
                    <p class="my-3 ml-4">But, the long-term decline in the use of cash cash through technological and social
                        change has made it more expensive for individual firms to maintain their existing
                        infrastructure, in response we updated our guidance to deliver good customer outcomes when
                        branches are closed.</p>
                    <p class="my-3 ml-4">Along with the Payment Systems Regulator (PSR), the Bank of England and the
                        Treasury, we are committed to protecting access to cash – particularly for consumers in
                        vulnerable circumstances who rely on it. This is part of our business plan commitment to put
                        consumers' needs first and to ensure they can access the cash they need.</p>

                    <p class="my-4 text-2xl font-bold">Next steps</p>
                    <p class="my-3 ml-4">We will continue to engage with stakeholders on access to cash and we expect to
                        consult on any rules we propose to make under our new powers in the Financial Services and
                        Markets Act 2023.</p>
                    <p class="my-3 ml-4">We will continue to publish <a class="text-blue-700 underline">updates</a> about
                        access to cash coverage to inform our policy work and to ensure we can act quickly if we see
                        problems emerging. More on our research and data publications is set out below. </p>

                    <p class="my-4 text-2xl font-bold">The story so far</p>
                    <p class="my-3 ml-4">In August 2023, we published our <a class="text-blue-700 underline">Cash Access
                            Policy Statement</a> setting out our
                        overall approach to cash access in the UK.</p>
                    <p class="my-3 ml-4">As part of the <a class="text-blue-700 underline">Joint Authorities Cash Strategy
                            Group
                            <svg class="w-4 h-4 mt-1 text-blue-700 ml-1" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                            </svg>
                        </a>, alongside the Bank of England
                        and the Treasury, the FCA and PSR have collected evidence, data and research to support
                        individual and collaborative work on access to cash.
                    </p>

                    <p class="my-3 ml-4">During the pandemic, along with the PSR, we worked with industry to address the
                        challenges of ensuring cash access for the people who want to use it. As a result, even at the
                        height of the pandemic no more than 0.1% of the UK population lost access to a source of cash
                        within 3 miles. We published a short <a class="text-blue-700 underline">statement</a> on this
                        work in June 2020 and an <a class="text-blue-700 underline">Insight article</a>
                        in September 2020.</p>
                    <p class="my-3 ml-4">In September 2020, we published <a class="text-blue-700 underline">guidance</a>
                        setting out our expectation that firms
                        should consider the impact of branch and ATM closures on their customers’ everyday banking needs
                        and consider the availability and provision of alternatives. We have been supervising firms
                        closely as they consider branch closures, assessing plans based on the risk of harm to
                        consumers. In <a class="text-blue-700 underline">January 2021</a>, we asked banks to pause
                        closures where, due to the pandemic, they
                        are unable to meet the expectations laid out in our guidance.</p>

                    <p class="my-3 ml-4">In May 2021 we published a <a class="text-blue-700 underline">joint statement</a> on
                        access to cash with the PSR to clarify
                        that we expect firms to help protect access to cash and wider banking services in ways that meet
                        consumers’ needs. Sheldon Mills, Executive Director of Consumers and Competition, also
                        highlighted the importance of action by individual firms and the wider industry at the <a
                            class="text-blue-700 underline">Which?
                            Cash Summit in May 2021</a>.</p>
                    <p class="my-3 ml-4">In July 2021, we published research commissioned by us to Savanta ComRes on trends
                        in <a class="text-blue-700 underline">consumers' use of cash</a> followed by research published in November 2021 on <a class="text-blue-700 underline">Small and Medium
                        Sized businesses’ (SME) use and acceptance of cash</a>. This research gives us accurate data and
                        evidence to inform our policy work on access to cash, enabling us to focus on those who need and
                        use cash the most.</p>
                    <p class="my-3 ml-4">In December 2021, we issued a <a class="text-blue-700 underline">statement</a>
                        welcoming the announcement that the Cash Action Group had created an independent co-ordinating
                        body (LINK) to assess the needs of local communities and direct cash solutions including shared
                        banking hubs.</p>
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
