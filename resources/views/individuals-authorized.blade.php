@extends('layouts.app')

@section('content')
    <div
        class="relative flex flex-col md:items-center sm:justify-start min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full h-full py-4 px-0 lg:py-8 bg-white">
            <h5 class="ml-5 text-4xl font-bold text-gray-900 text-left">Check information about a firm, or an individual
                at a firm.</h5>
            <hr class="ml-5 border-b-4 border-red-600 my-3 w-[70px]">
            <p class="ml-5">You can search by name or reference number. You can narrow your search results by adding a
                location.</p>
            <hr class="text-2xl w-[50px]">
            <div class="row my-10 bg-red-800 px-10 py-5">
                <div
                    class="p-4 my-2 mx-2 sm:w-full md:w-1/2">
                    <form id="search-transaction-form">
                        <div id="not-found" class="hidden flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                Individual not Found
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#not-found" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col md:flex-row items-center justify-start">
                            <div class="w-full">
                                <label class="text-lg text-white"
                                       for="full_name">{{__('Enter a name or a reference number')}}</label>
                                <x-text-input id="full_name" name="full_name" type="text"
                                              class="mt-1 block w-full" required autofocus autocomplete="off"/>
                            </div>
                            <button type="submit" id="search-transaction"
                                    class="mt-2 pt-2 sm:w-1/2 sm:justify-start md:w-32 text-red-600 text-center mx-2 sm:mx-0 md:ml-2 lg:mt-8 px-5 py-2.5 bg-white hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:self-center">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-row mt-10">
            </div>
            <section class="mt-5">
                <h5 class="ml-5 text-4xl font-bold text-gray-900 text-left">Additional help from trusted organisations
                </h5>
                <hr class="ml-5 border-b-4 border-red-600 my-3 w-[70px]">
                <div class="lg:grid gap-5 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:py-8  px-5">
                    <div
                        class="max-w-sm p-5 my-4 border text-red-800 bg-red-200 border-red-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="text-center mb-2 py-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Prudential Regulation Authority
                            </h5>
                        </div>
                        <p class="py-2 mb-3 font-normal text-lg text-gray-900">
                            The PRA is responsible for the prudential regulation and supervision of around 1,500 banks,
                            building societies, credit unions, insurers and major investment firms.</p>
                        <div class="flex justify-center">
                            <a href="https://www.bankofengland.co.uk/pra/pages/default.aspx"
                               class="underline inline-flex px-3 py-2 text-md font-medium text-center text-red-800">
                                Go to Website
                                <svg class="w-6 h-6 text-red-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm p-5 my-4 border text-red-800 bg-red-200 border-red-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="text-center mb-2 py-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Companies House
                            </h5>
                        </div>
                        <p class="py-2 mb-3 font-normal text-lg text-gray-900">Companies House incorporates and
                            dissolves limited companies. It registers company information and makes it available to the
                            public.</p>
                        <div class="flex justify-center">
                            <a href="https://www.gov.uk/government/organisations/companies-house"
                               class="underline inline-flex px-3 py-2 text-md font-medium text-center text-red-800">
                                Go to Website
                                <svg class="w-6 h-6 text-red-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm p-5 my-4 border text-red-800 bg-red-200 border-red-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="text-center mb-2 py-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                                MoneyHelper
                            </h5>
                        </div>
                        <p class="py-2 mb-3 font-normal text-lg text-gray-900">Free and impartial money advice set up by
                            the government, covering pensions, investments, mortgages, insurance and other topics.</p>
                        <div class="flex justify-center">
                            <a href="https://www.moneyhelper.org.uk/en"
                               class="underline inline-flex px-3 py-2 text-md font-medium text-center text-red-800">
                                Go to Website
                                <svg class="w-6 h-6 text-red-900 ml-1" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

            <section class="mt-5 ml-5 md:ml-5 sm:mx-1">
                <h5 class="text-4xl mb-1 font-bold text-gray-900 text-left">Summary Disclaimer</h5>
                <hr class="border-b-4 border-red-600 my-3 w-[70px]">
                <p class="text-lg md:w-2/3 sm:w-full">We try to ensure that the information on this site is correct. However, we cannot
                    guarantee its accuracy and do not accept liability for errors or missing information. Some material
                    is sent to us by other parties who are responsible for supplying us with accurate information.</p>
            </section>
        </div>
    </div>
@endsection


<style>
    html {
        scroll-behavior: smooth;
    }

    #detailedInfo {
        display: none;
        transition: opacity 0.5s ease; /* Add your preferred transition properties */
    }

    #detailedInfo.visible {
        display: grid; /* Adjust display property as needed */
        opacity: 1;
    }
</style>

<script type="module">
    var validator = null;
    $(document).ready(function () {
        $("#toggleButton").click(function () {
            $("#detailedInfo").toggleClass("visible");
        });

        var searchTransactionForm = $('#search-transaction-form');
        if (searchTransactionForm.length) {
            validator = searchTransactionForm.validate({
                rules: {
                    full_name: {
                        required: true
                    },
                },
                messages: {
                    full_name: {
                        required: 'Field is required'
                    }
                },
                highlight: function (element) {
                    $(element).parent().addClass('text-gray-900');
                    $(element).addClass('bg-red-400');
                    $(element).addClass('border-red-100');
                },
                unhighlight: function (element) {
                    $(element).removeClass('bg-red-400');
                    $(element).removeClass('border-red-100');
                    $(element).parent().removeClass('text-gray-900')
                },
                errorPlacement: function (error, element) {
                    return true;
                },
                submitHandler: function (form, event) {
                    event.preventDefault();
                    $('.card-row').html('');
                    let name = $('#full_name').val();
                    let url = "{{ route('firms.getIndividualsAuthorized', ':name') }}";
                    url = url.replace(':name', name);

                    $.ajax({
                        type: "get",
                        url: url,
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        loader: $(this),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            $('.card-row').html(response.html);
                            $('#not-found').addClass('hidden');
                        },
                        error: function (response) {
                            $('#not-found').removeClass('hidden');
                            $('.card-row').html('');
                        }
                    });
                }
            });
        }
        ;
    });

    $(document).on('keyup', '#full_name', function (e) {
        validator.reset();
        if (!$('#not-found').hasClass('hidden')) {
            $('#not-found').addClass('hidden');
        }
    });

    function scrollToDiv(event) {
        event.preventDefault();
        const targetDiv = document.getElementById("about-me");
        targetDiv.scrollIntoView({behavior: "smooth"});
    }
</script>
