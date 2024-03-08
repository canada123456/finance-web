@foreach($individuals as $individual)
    <div class="card-info row my-4">
        <button id="toggleButton"
            class="border-l-2 border-red-600 hover:border-l-4 mx-5">
        <div
            class="md:grid md:grid-cols-5 gap-1 sm:inline-grid max-w-7xl bg-white relative overflow-x-auto shadow-md sm:rounded-lg py-4">
            <div class="col-span-2 rounded-lg dark:bg-gray-800">
                <div class="inline-flex pl-4">
                    <div
                        class="relative top-10 w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="dark" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                         aria-labelledby="about-tab">
                        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            {{$individual->full_name}}
                        </h2>
                        <p class="mb-3 text-gray-500 dark:text-gray-400">
                            Reference Number: {{$individual->reference_number}}
                        </p>
                        <h3 class="mb-3 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Known as:
                        </h3>
                        <h3 class="mb-3 text-xl font-medium tracking-tight text-gray-900 dark:text-white">
                            {{$individual->known_as}}
                        </h3>
                        <h3 class="mb-3 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Previous Names:
                        </h3>
                        <h3 class="mb-3 text-xl font-medium tracking-tight text-gray-900 dark:text-white">
                            Mr {{$individual->previous_name}}
                        </h3>
                    </div>
                </div>
                <div class="h-[40px] w-[300px] bg-gray-200 rounded-r-[2.5rem] mb-4 text-center flex justify-center">
                    <p class="text-md inline-flex my-auto">Certified / assessed by firm
                        <svg class="pl-1 w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm9.4-5.5a1 1 0 1 0 0 2 1 1 0 1 0 0-2ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4c0-.6-.4-1-1-1h-2Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </p>
                </div>
                <div class="h-[40px] w-2/3 bg-gray-200 rounded-r-[2.5rem] mb-4 text-center flex justify-center">
                    <p class="text-md inline-flex my-auto">Approved by regulator
                        <svg class="pl-1 w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm9.4-5.5a1 1 0 1 0 0 2 1 1 0 1 0 0-2ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4c0-.6-.4-1-1-1h-2Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </p>
                </div>
            </div>
            <div class="col-span-2 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                     aria-labelledby="about-tab">
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        {{$individual->full_name}} is connected to
                    </h2>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">
                        {{$individual->connection}}
                    </p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400 inline-flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-7 pr-2 h-7">
                            <path fill-rule="evenodd"
                                  d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        {{$individual->address}}
                    </p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">
                        {{$individual->firm_name}}
                    </p>
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        View all record for all connected firms and roles
                    </h2>
                </div>
            </div>
            <div class="col-span-1 rounded-lg dark:bg-gray-800 dark:border-gray-700 my-auto">
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                     aria-labelledby="about-tab">
                    <svg class="w-15 h-15 text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m9 5 7 7-7 7"/>
                    </svg>
                </div>
            </div>
        </div>
    </button>
        <div id="detailedInfo"
         class="ml-8 border-t-2 grid grid-cols-5 gap-1 max-w-7xl bg-white relative overflow-x-auto shadow-md sm:rounded-lg py-4 transition ease-in-out duration-500 hidden">
        <h1>Here is the info i want to toggle</h1>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
    </div>
    </div>
@endforeach
<style>
    #detailedInfo {
        display: none;
        transition: opacity 0.5s ease; /* Add your preferred transition properties */
    }
    #detailedInfo.visible {
        display: grid; /* Adjust display property as needed */
        opacity: 1;
    }
</style>
