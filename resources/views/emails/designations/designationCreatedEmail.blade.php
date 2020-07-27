@component('mail::message')
{{--# Introduction--}}

{{--The body of your message.--}}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}


Code : {{$code}}<br>
Name: {{$name}}<br>
Desc: {{$descriptions}}<br>
Date: {{$date}}<br>
<br>
Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
