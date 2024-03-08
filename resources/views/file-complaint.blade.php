@extends('layouts.app')

@section('content')
    <div>
        <div class="bg-gray-200 w-full my-10 mx-auto p-6 lg:p-8">
            <div id="loader"
                 class="hidden fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="flex flex-col items-center">
                    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
                    <p class="mt-4 text-white">Processing...</p>
                </div>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <div
                    class="scale-100 p-6 flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="lg:py-2 px-4 mx-auto max-w-screen-md">
                        <div>
                            <img id="app-Logo" class="rounded-[2.5rem]" src="{{asset('images/BitcoinScamsPage.jpg')}}">
                        </div>
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                            Are you a scam victim?</h2>
                        <p class="mb-2 lg:mb-4 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                            Do not be quiet about it. We are here to help you!</p>
                        <div class="space-y-8">
                            Cryptocurrency scam victim, Binary Options scam Victim,
                            Forex trading scam victim, Wire fraud scam victim, Online investment
                            scam victim and other types of Online financial scams which you happen
                            to be a victim of.
                        </div>
                        </br>
                        <div class="space-y-8">
                            If you’re worried about a potential scam, or you think you may have been contacted by a
                            fraudster, you can report it to us
                            Call us on 0800 111 6768 or use our  contact form to get in touch.
                            If you’ve already invested in a scam, it’s important to remember that fraudsters may try to
                            target you again, or sell your details to other criminals.
                            The follow-up scam may be completely different, or it may be related to the previous fraud.
                            It may include an offer to get your money back or an offer to buy back the investment after
                            you pay a fee.
                        </div>
                        </br>
                        <div class="space-y-8">
                            If you are a victim of any of the above listed types of scams, Lodge
                            your complaint with us today. Our recovery experts and investigators
                            will help trace, investigate and recover your money.
                        </div>
                    </div>
                </div>
                <div
                    class="scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                            File a complaint - Report the scam</h2>
                        <form id="file-complaint-form" class="space-y-8 pt-10">
                            @csrf
                            <div id="alert-2"
                                 class="hidden flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                 role="alert">
                                <div class="ms-3 text-sm font-medium">
                                    An error occurred while processing the data!
                                </div>
                            </div>
                            <div id="alert-3"
                                 class="hidden flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                                 role="alert">
                                <div class="text-sm font-medium whitespace-normal">
                                    Application submitted successfully!<br>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div>
                                    <x-input-label for="full_name" :value="__('Full Name')"/>
                                    <x-text-input id="full_name" placeholder="John Doe" name="full_name" type="text"
                                                  class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('full_name')"/>
                                </div>
                                <div>
                                    <x-input-label for="country" :value="__('Country')"/>
                                    <x-text-input id="country" name="country" type="text" class="mt-1 block w-full"
                                                  required autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div>
                                    <x-input-label for="email" :value="__('Email')"/>
                                    <x-text-input id="email" placeholder="example@gmail.com" name="email" type="text"
                                                  class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                                </div>
                                <div>
                                    <x-input-label for="phone_number" :value="__('Phone Number')"/>
                                    <x-text-input id="phone_number" placeholder="+1 234 555 5555" name="phone_number"
                                                  type="text"
                                                  class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div>
                                    <x-input-label for="lost_amount" :value="__('Total Amount Lost')"/>
                                    <x-text-input id="lost_amount"
                                                  placeholder="i.e USD200.000 EUR50.00"
                                                  name="lost_amount" type="text" class="mt-1 block w-full" required
                                                  autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('lost_amount')"/>
                                </div>
                                <div>
                                    <x-input-label for="deposit_method" :value="__('Deposit Method')"/>
                                    <x-text-input id="deposit_method" name="deposit_method" type="text"
                                                  class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('deposit_method')"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div>
                                    <x-input-label for="transaction_date" :value="__('Date of scam transaction')"/>
                                    <input type="date" id="transaction_date"
                                                  name="transaction_date" type="text" class="mt-1 block w-full rounded-[0.5rem]" required
                                                  autofocus autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('transaction_date')"/>
                                </div>
                                <div>
                                    <x-input-label for="wallet_addresses" :value="__('All wallet addresses involved')"/>
                                    <x-text-input id="wallet_addresses" placeholder="John Doe" name="wallet_addresses"
                                                  type="text" class="mt-1 block w-full" required autofocus
                                                  autocomplete="off"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('wallet_addresses')"/>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="message" :value="__('Describe what happened')"/>
                                <textarea id="message" rows="6" name="message"
                                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                          placeholder="Enter your message..."></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('message')"/>
                            </div>
                            <button type="submit"
                                    class="text-white float-right bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 pb-3 me-2 my-2 dark:bg-red-800 dark:hover:bg-red-800 focus:outline-none dark:focus:ring-red-800">
                                {{ __('File Complaint') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="module">
    var validator = null;
    $(document).ready(function(){
        var loader = $('#loader');
        var fileComplaintForm = $('#file-complaint-form');
        if (fileComplaintForm.length) {
            validator = fileComplaintForm.validate({
                rules: {
                    full_name: {
                        check_fname: true,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone_number: {
                        required: true,
                        check_phone: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    lost_amount: {
                        required: true
                    },
                    deposit_method: {
                        required: true
                    },
                    transaction_date: {
                        required: true
                    },
                    wallet_addresses: {
                        required: true
                    },
                    message: {
                        required: true
                    },
                },
                messages: {
                    full_name: {
                        required: 'Complete the field!',
                        check_fname: 'Name should only contain characters'
                    },
                    phone_number: {
                        required: 'Complete the field!',
                        check_phone: 'Invalid Phone number'
                    },
                    email: {
                        required: 'Complete the field!',
                        email: 'Please enter valid email!',
                    },
                    lost_amount: {
                        required: 'Complete the field!',
                    },
                    deposit_method: {
                        required: 'Complete the field!',
                    },
                    transaction_date: {
                        required: 'Complete the field!',
                    },
                    wallet_addresses: {
                        required: 'Complete the field!',
                    },
                    message: {
                        required: 'Complete the field!',
                    },
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
                submitHandler: function(form, event) {
                    event.preventDefault();
                    let formData = new FormData(form);

                    loader.removeClass('hidden');
                    if (!$('#alert-2').hasClass('hidden')) {
                        $('#alert-2').addClass('hidden');
                    }
                    $.ajax({
                        type: "post",
                        url: "{{ route('file-complaint.reportScam') }}",
                        data: formData,
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.status === 200) {
                                if (!$('#alert-2').hasClass('hidden')) {
                                    $('#alert-2').addClass('hidden');
                                }
                                setTimeout(() => {
                                    $('#alert-3').removeClass('hidden');
                                    fileComplaintForm.find(':input').val('').trigger('change');
                                    validator.resetForm();
                                    document.documentElement.scrollIntoView({behavior: 'smooth'});
                                    loader.addClass('hidden');
                                    setTimeout(() => {
                                        $('#alert-3').addClass('hidden');
                                    }, 3000);
                                }, 3000);
                            } else {
                                setTimeout(() => {
                                    loader.addClass('hidden');
                                }, 3000);
                                $('#alert-2').removeClass('hidden');
                            }                        },
                        error: function (response) {
                            var res = response.responseJSON;
                            setTimeout(() => {
                                $('#alert-2').removeClass('hidden');
                                fileComplaintForm.validate().showErrors(res.errors);
                                loader.addClass('hidden');
                            }, 3000);
                        }
                    });
                }
            });
        };

        $.validator.addMethod("check_fname", function () {
            var pattern = /^[a-zA-Z\s]*$/;
            var fname = $("#full_name").val();
            if (pattern.test(fname)) {
                return true;
            }
        });
        $.validator.addMethod("check_phone", function () {
            var pattern = /^(\+\d{1,})?[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{4}[\(\)\.\- ]{0,}$/;
            var phone = $("#phone_number").val();
            if (pattern.test(phone)) {
                return true;
            }
            return false;
        });
    });
</script>
