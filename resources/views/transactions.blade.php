@extends('layouts.app')

@section('content')
    <div
        class="relative flex flex-col md:items-center sm:justify-start min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl md:mx-auto sm:mx-10 p-4 px-0 lg:p-8 bg-gray-100">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Search transactions</h5>
            <div
                class="sm:w-full md:w-[500px] p-4 my-2 mx-2 sm:mx-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <form id="search-transaction-form">
                    <x-input-error id="not-found" class="hidden mt-2" :messages="'Transaction not Found'"/>
                    <div class="flex flex-col md:flex-row items-center justify-start">
                        <div class="w-full">
                            <input type="text" name="transaction_id" id="transaction_id" autocomplete="off"
                                   class="my-4 bg-gray-50 border focus:ring-0 outline-none text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white mb-2"
                                   placeholder="Enter the transaction id" required/>
                        </div>
                        <button type="submit" id="search-transaction"
                                class="sm:w-full md:w-32 text-white text-center mx-2 sm:mx-0 md:ml-2 mt-2 px-5 py-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:self-center">
                            Search
                        </button>
                    </div>
                </form>
            </div>


        </div>
        <div class="card-row my-10">
        </div>
        <section class="px-5 py-5 bg-white text-gray-900">
            <div class="ml-4 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">
                    Information for victims of financial crime
                </h2>
                <div class="mx-4 w-3/4 border-t-4 bg-gray-200 border-red-600 rounded-[1.5rem] py-4">
                    <p class="mb-2 py-6 px-2">If you're a victim of a potential crime we’re investigating, we may ask
                        you to be a witness. Find out what this means and what may happen next.</p>
                    <hr class="border-2 w-[70px] border-red-600 mx-4">
                </div>
                <p class="my-4 font-medium">When we investigate financial crime, we often get in touch with victims to
                    find out if they can give us more information.
                    <br><br>
                    If you're contacted by one of our investigators, they’ll ask you for some personal details,
                    including your contact details. This is just so we can contact you during the investigation.</p>
                <p class="my-4 text-md font-bold">We always make sure that these details are kept safe and that victims
                    are treated fairly, with dignity and respect, following the <a class="underline inline-flex">Government’s
                        Code
                        of Practice.
                        <svg class="w-5 h-5 text-gray-900 ml-1 mt-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                        </svg>
                    </a>
                </p>
                <p class="my-4 text-2xl font-bold">Interviews with the FCA</p>
                <p class="my-3 ml-4">
                    Once you’ve contacted us, we’ll try to speak to you as soon as possible. This will often be by phone
                    in the first instance.
                    <br><br>
                    If you have important information that we may need in court, we may need to interview you at our
                    offices or at your home. We usually record all formal interviews, so we have an accurate account of
                    the conversation.</p>

                <p class="my-4 text-2xl font-bold">Compulsory interviews </p>
                <p class="my-3 ml-4">Most interviews will be on a voluntary basis.
                    <br><br>
                    But we do also have powers to compel information and documents. This means you’d have to give us the
                    information if we asked. We often do this if the information or documents are confidential.
                    <br><br>
                    On the rare occasions when we need to use these powers, we’ll send you a formal notice saying so.
                </p>

                <p class="my-4 text-2xl font-bold">Giving a witness statement</p>
                <p class="my-3 ml-4">If you have important information, we may ask you to make a witness statement. If
                    we do, one of our investigators will ask you questions and put what you say into a formal statement.
                    <br><br>
                    This might be part of an interview, or after you’ve been interviewed.
                    <br><br>
                    We’ll always make sure you’re clear about the process, by:
                <ul class="list-disc ml-8">
                    <li>explaining the purpose of the witness statement</li>
                    <li>making sure that you read and understand your draft statement</li>
                    <li>explaining what it means when you sign the statement</li>
                </ul>
                </p>
                <p class="ml-4">
                    <br>
                    Don’t be afraid to tell the investigator if you’re unhappy or want to change something in your
                    statement.
                    <br><br>
                    When you sign a witness statement, you’re saying that it’s a true account of what you’ve said. You
                    won’t
                    be able to change it once you’ve signed it, so make sure you’re completely happy with it.
                    <br><br>
                    If you want to add more information to the statement later, or make something clearer, we can take
                    another witness statement for you.
                </p>
                <p class="my-4 text-2xl font-bold">Giving evidence in court</p>
                <p class="my-3 ml-4">
                    If the case is brought to court, you may need to give evidence during a trial.
                    <br><br>
                    Giving evidence in court can be a stressful experience, so we try to make sure you feel supported at
                    all stages.
                    <br><br>
                    We’ll give you as much notice as possible of court dates. But these dates can change. If that
                    happens, we’ll let you know as soon as we can.
                    <br><br>
                    Please try and avoid any big commitments (such as holidays) around the time when you’re likely to
                    give evidence. And let us know if anything comes up that might clash with the date.
                </p>
                <p class="my-4 text-2xl font-bold">During the court case</p>
                <p class="my-3 ml-4">
                    To help you prepare, we’ll explain the process of giving evidence, including what happens in court,
                    and any rules you’ll have to follow.
                    <br><br>
                    An FCA witness liaison officer will make sure you’re kept informed about the progress of the case.
                    They’ll also be around to support you if you have any questions on the day. <br><br>
                    You can claim certain expenses for giving evidence. Your witness liaison office will let you know
                    what this involves and what you can claim for.
                </p>
                <p class="my-4 text-2xl font-bold">Support giving evidence</p>
                <p class="my-3 ml-4">
                    If you’re a young or vulnerable witness, then we can ask the court for special measures to help you
                    give evidence.
                    <br><br>
                    This might include giving your evidence via live video link, so you don’t need to see, the
                    defendant. Or the court may put screens around the witness box, so you can’t see the defendant when
                    you give evidence.
                </p>
            </div>
        </section>
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
                    transaction_id: {
                        required: true
                    },
                },
                messages: {
                    transaction_id: {
                        required: 'Transaction Id is required'
                    }
                },
                highlight: function (element) {
                    $(element).parent().addClass('text-red-600');
                    $(element).addClass('bg-red-50');
                    $(element).addClass('border-red-500');
                },
                unhighlight: function (element) {
                    $(element).removeClass('bg-red-50');
                    $(element).removeClass('border-red-500');
                    $(element).parent().removeClass('text-red-600')
                },
                errorPlacement: function (error, element) {
                    return true;
                },
                submitHandler: function (form, event) {
                    event.preventDefault();
                    $('.card-row').html('');
                    let wallet = $('#transaction_id').val();
                    let url = "{{ route('transactions.getTransactionData', ':wallet') }}";
                    url = url.replace(':wallet', wallet);

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

    $(document).on('keyup', '#transaction_id', function (e) {
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
