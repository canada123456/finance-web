@extends('layouts.app')

@section('content')
    <div class="relative h-full">
        <div id="loader" class="hidden fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="flex flex-col items-center">
                <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
                <p class="mt-4 text-white">Processing...</p>
            </div>
        </div>
        <section class="absolute z-0 top-10 bg-red-700 w-full my-14 h-[500px]">
        </section>
        <div class="w-full p-6 lg:p-8 absolute">
            <div class="border-2 lg:mx-80 bg-gray-300 rounded-[2.5rem] border-gray-50 shadow-lg flex justify-center">
                <div
                    class="p-10 dark:ring-1 w-full sdark:ring-inset dark:ring-white/5 rounded-lg dark:shadow-none transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="lg:py-2 max-w-screen-md">
                        <form id="subscribe-form"
                              class="space-y-4">
                            @csrf
                            <div id="alert-2" class="hidden flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-300 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <div class="ms-3 text-sm font-medium">
                                    An error occurred while processing the data!
                                </div>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                            <div id="alert-3" class="hidden flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ms-3 text-sm font-medium">Thank you for contacting us!</div>
                                <button type="button" class="dismiss-btn ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
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
                            <div class="sm:col-span-2">
                                <x-input-label for="message" :value="__('Message')"/>
                                <textarea id="message" rows="6" name="message"
                                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                          placeholder="Enter your message..."></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('message')"/>
                            </div>
                            <button type="submit"
                                    class="text-white float-right bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 pb-3 me-2 my-2 dark:bg-red-800 dark:hover:bg-red-800 focus:outline-none dark:focus:ring-red-800">
                                {{ __('Contact Us') }}
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
        var loader = $('#loader')
        var subscribeForm = $('#subscribe-form');
        if (subscribeForm.length) {
            validator = subscribeForm.validate({
                rules: {
                    full_name: {
                        check_fname: true,
                        required: true
                    },
                    country: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    phone_number: {
                        required: true,
                        check_phone: true,
                        minlength: 10,
                        maxlength: 11
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
                    country: {
                        required: 'Complete the field!',
                    },
                    phone_number: {
                        required: 'Complete the field!',
                        check_phone: 'Invalid Phone number'
                    },
                    email: {
                        required: 'Complete the field!',
                        email: 'Please enter valid email!',
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
                    document.documentElement.scrollIntoView({ behavior: 'smooth' });
                    $.ajax({
                        type: "post",
                        url: "{{ route('contact-us.subscribe') }}",
                        data: formData,
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        loader: $(this),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if(response.status === 200){
                                $('#alert-3').removeClass('hidden');
                                subscribeForm.find(':input').val('').trigger('change');
                                validator.resetForm();
                                setTimeout(()=>{
                                    $('#alert-3').addClass('hidden');
                                    window.location.href = '{{route('home')}}'
                                }, 3000);
                            }else{
                                $('#alert-2').removeClass('hidden');
                            }
                            loader.addClass('hidden');
                        },
                        error: function (response) {
                            var res = response.responseJSON;
                            subscribeForm.validate().showErrors(res.errors);
                            loader.addClass('hidden');
                            $('#alert-2').removeClass('hidden');
                        }
                    });
                }
            });
        };

        $.validator.addMethod("check_fname", function () {
            var pattern = /^[a-zA-Z\s,.'-]*$/;
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
