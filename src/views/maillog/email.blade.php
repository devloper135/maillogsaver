@component('mail::message')
# Introduction
There is new mail from {{ $maillog->name }}
<br>
Message: {{ $maillog->message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
