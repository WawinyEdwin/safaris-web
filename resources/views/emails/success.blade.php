@component('mail::message')

#Thank you for using our service 

Dear {{$email}},

One of our representatives will be reaching out soon to help you make arrangements for your booking.
We are glad that you choose our service, expect to hear from us within 24hrs.

@component('mail::button', ['url' => 'https://safarisweb.herokuapp.com'])
Explore More
@endcomponent

Thanks, <br>
{{ config('app.name')}}

@endcomponent