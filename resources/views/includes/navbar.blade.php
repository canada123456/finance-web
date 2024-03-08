<header class="sticky top-0 z-50">
    <nav class="bg-gray-800 border-gray-200 px-0 py-0 dark:bg-gray-800 flex flex-wrap h-[60px]">
        <div class="bg-white w-1/5 h-full flex justify-center items-start">
            <a href="{{ route('home') }}" class="flex">
                <x-app-logo class="w-[90px] h-[40px]"></x-app-logo>
            </a>
        </div>
        <div class="bg-gray-400 sm:pl-3 w-4/5 h-full justify-start items-center">
            <p class="text-2xl text-white sm:ml-3 lg:ml-10 my-2 py-1 whitespace-nowrap">FCA Cryptocurrency Recovery Solutions</p>
        </div>
    </nav>
    <nav class="sticky top-0 z-50 bg-red-800 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap md:justify-between sm:justify-end sm:items-end mx-auto max-w-screen-xl">
            <div class="flex items-center ml-auto lg:order-2">
                <x-dropdown-link :href="route('contact-us.index')" role="button" :active="request()->routeIs('contact-us.index')" class="text-red-700 bg-white hover:bg-red-200 focus:ring-red-200 font-medium rounded-lg text-sm px-5 py-2.5 pb-3 me-2 my-2 dark:bg-red-200 dark:hover:bg-red-200 dark:focus:ring-red-200">
                    {{ __('Contact Us') }}
                </x-dropdown-link>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-red-700 bg-white rounded-lg lg:hidden hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-200 dark:text-red-700 dark:hover:bg-white dark:focus:ring-white" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="md:ml-20 hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="h-[60px] inline-flex items-center justify-center px-auto pt-1 hover:-translate-y-1 hover:scale-105 border-b border-transparent hover:border-b-transparent text-md font-medium leading-5 text-gray-300 hover:text-white hover:border-white focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out" type="button">Firms
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                            <ul class="whitespace-nowrap mr-2 py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <x-responsive-nav-link :href="route('firms.authorization')" :active="request()->routeIs('firms.authorization')">
                                        {{ __('Authorization') }}
                                    </x-responsive-nav-link>
                                </li>
                                <li>
                                    <x-responsive-nav-link :href="route('firms.individuals-authorized')" :active="request()->routeIs('firms.individuals-authorized')">
                                        {{ __('Individuals Authorized') }}
                                    </x-responsive-nav-link>
                                </li>
                                <li>
                                    <x-responsive-nav-link :href="route('firms.fees-and-levies')" :active="request()->routeIs('firms.fees-and-levies')">
                                        {{ __('Fees and Levies') }}
                                    </x-responsive-nav-link>
                                </li>
                                <li>
                                    <x-responsive-nav-link :href="route('firms.access-to-cash')" :active="request()->routeIs('firms.access-to-cash')">
                                        {{ __('Helping people access cash') }}
                                    </x-responsive-nav-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="complaint-dropdown-btn" data-dropdown-toggle="complaint-dropdown" class="h-[60px] inline-flex items-center justify-center px-auto pt-1 hover:-translate-y-1 hover:scale-105 border-b border-transparent hover:border-b-transparent text-md font-medium leading-5 text-gray-300 hover:text-white hover:border-white focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out" type="button">
                            File Complaint
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="complaint-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                            <ul class="whitespace-nowrap mr-2 py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <x-responsive-nav-link :href="route('file-complaint.investment-scam')" :active="request()->routeIs('file-complaint.investment-scam')">
                                        {{ __('Investment Scam') }}
                                    </x-responsive-nav-link>
                                </li>
                                <li>
                                    <x-responsive-nav-link :href="route('file-complaint.report')" :active="request()->routeIs('file-complaint.report')">
                                        {{ __('File Complaint') }}
                                    </x-responsive-nav-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <x-nav-link :href="route('transactions.index')" :active="request()->routeIs('transactions.index')">
                            {{ __('Transactions') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('recovery-center.index')" :active="request()->routeIs('recovery-center.index')">
                            {{ __('Recovery Center') }}
                        </x-nav-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>

</script>
