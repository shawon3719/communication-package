@component('mail::message')

There is a new message from {{$name}}
<br>
Email: {{$email}}
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
