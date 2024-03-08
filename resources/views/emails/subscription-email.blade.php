@component('mail::message')
    New subscription received!

    Subscriber Information:
    - Name: {{ $subscription->full_name }}
    - Email: {{ $subscription->email }}
    - Phone-Number: {{ $subscription->phone_number }}
    @if($subscription->message)
    - Message: {{ $subscription->message }}
    @endif

    Thanks for subscribing!

    Regards,
    {{ config('app.name') }}
@endcomponent
