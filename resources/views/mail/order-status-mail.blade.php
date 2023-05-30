@component('mail::message')
# Order Status

Dear User.
Your order status is : {{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
