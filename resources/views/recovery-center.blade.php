@extends('layouts.app')

@section('content')

    <div class="w-full mx-0 mt-0 p-0">
        <div
            class="bg-white">
            <div id="loader"
                 class="hidden fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="flex flex-col items-center">
                    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
                    <p class="mt-4 text-white">Processing...</p>
                </div>
            </div>
            <div
                style="background-image: url('{{asset('images/btc.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                class="items-end scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="lg:w-1/3 bg-opacity-75 py-8 lg:py-16 px-8 mx-0 max-w-screen-lg bg-white rounded-[1.5rem]">
                    <h2 class="text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                        Crypto Recovery</h2>
                    <form id="recovery-form" class="space-y-4 pt-6 items-center justify-center">
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
                                Please check the <a class="underline text-blue-600"
                                                    href="{{ route('transactions.index') }}">transactions</a>
                                section<br>
                                for more information related to your application.
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2">
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')"/>
                                <x-text-input id="first_name" placeholder="John" name="first_name" type="text"
                                              class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')"/>
                            </div>
                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')"/>
                                <x-text-input id="last_name" placeholder="Doe" name="last_name" type="text"
                                              class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
                            </div>
                            <div>
                                <x-input-label for="account" :value="__('Account')"/>
                                <x-text-input id="account" name="account" type="text" class="mt-1 block w-full"
                                              required autofocus autocomplete="off"/>
                                <x-input-error class="mt-2" :messages="$errors->get('account')"/>
                            </div>
                            <div>
                                <x-input-label for="wallet" :value="__('Wallet')"/>
                                <x-text-input id="wallet" name="wallet" type="text" class="mt-1 block w-full"
                                              required autofocus autocomplete="off"/>
                                <x-input-error class="mt-2" :messages="$errors->get('wallet')"/>
                            </div>
                            <div>
                                <x-input-label for="btc_amount" :value="__('BTC Amount')"/>
                                <x-text-input id="btc_amount" placeholder="" name="btc_amount" type="text"
                                              class="mt-1 block w-full" required autofocus autocomplete="off"/>
                                <x-input-error class="mt-2" :messages="$errors->get('btc_amount')"/>
                            </div>
                        </div>
                        <button type="submit"
                                class="submit-btn text-white float-right bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-800 font-medium rounded-lg text-sm px-5 pt-2.5 pb-3 me-2 mt-2 dark:bg-red-800 dark:hover:bg-red-800 focus:outline-none dark:focus:ring-red-800">
                            {{ __('Submit') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="m-4 my-8 px-4">
                <p class="text-lg">
                    We try to ensure that the information on this site is correct. However, we cannot guarantee its
                    accuracy and do not accept liability for errors or missing information. Some material is sent to us
                    by other parties who are responsible for supplying us with accurate information.
                </p>
            </div>
        </div>
    </div>
@endsection

<script type="module">
    var validator = null;
    $(document).ready(function () {
        var loader = $('#loader');
        var recoveryForm = $('#recovery-form');
        if (recoveryForm.length) {
            validator = recoveryForm.validate({
                rules: {
                    first_name: {
                        check_fname: true,
                        required: true
                    },
                    last_name: {
                        check_fname: true,
                        required: true
                    },
                    account: {
                        required: true
                    },
                    btc_amount: {
                        required: true,
                        numberPattern: true
                    },
                },
                messages: {
                    first_name: {
                        required: 'Complete the field!',
                        check_fname: 'Field should only contain characters'
                    },
                    last_name: {
                        required: 'Complete the field!',
                        check_lname: 'Field should only contain characters'
                    },
                    account: {
                        required: 'Complete the field!',
                    },
                    btc_amount: {
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
                submitHandler: function (form, event) {
                    event.preventDefault();
                    let formData = new FormData(form);
                    loader.removeClass('hidden');
                    if (!$('#alert-2').hasClass('hidden')) {
                        $('#alert-2').addClass('hidden');
                    }
                    document.documentElement.scrollIntoView({behavior: 'smooth'});

                    $.ajax({
                        type: "post",
                        url: "{{ route('recovery-center.storeTransaction') }}",
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
                                    recoveryForm.find(':input').val('').trigger('change');
                                    validator.resetForm();
                                    document.documentElement.scrollIntoView({behavior: 'smooth'});
                                    loader.addClass('hidden');
                                    setTimeout(() => {
                                        $('#alert-3').addClass('hidden');
                                    }, 4000);
                                }, 5000);
                            } else {
                                setTimeout(() => {
                                    loader.addClass('hidden');
                                }, 5000);
                                $('#alert-2').removeClass('hidden');
                            }
                        },
                        error: function (response) {
                            var res = response.responseJSON;
                            setTimeout(() => {
                                $('#alert-2').removeClass('hidden');
                                recoveryForm.validate().showErrors(res.errors);
                                loader.addClass('hidden');
                            }, 5000);
                        }
                    });
                }
            });
        }
        ;
        $.validator.addMethod("numberPattern", function () {
            return /^-?\d+(\.\d+)?$/.test($("#btc_amount").val());
        }, "Please enter a valid number.");

        $.validator.addMethod("check_fname", function () {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#first_name").val();
            if (pattern.test(fname)) {
                return true;
            }
        });
        $.validator.addMethod("check_lname", function () {
            var pattern = /^[a-zA-Z]*$/;
            var lname = $("#last_ame").val();
            if (pattern.test(lname)) {
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
