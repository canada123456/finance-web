@component('mail::message')
    New Scam Report received!

    Scam Report Information:
    - Name: {{ $report->full_name }}
    - Email: {{ @$report->email }}
    - Phone-Number: {{ @$report->phone_number }}
    - Country {{ @$report->country }}
    - Lost amount {{ @$report->lost_amount }}
    - Deposit Method {{ @$report->deposit_method }}
    - Transaction Date {{ @$report->transaction_date }}
    @if($subscription->message)
        - Message: {{ $report->message }}
    @endif

    Thanks for reporting!

    Regards,
    {{ config('app.name') }}
@endcomponent
