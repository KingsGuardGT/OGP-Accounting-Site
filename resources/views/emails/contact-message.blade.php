@component('mail::message')
# New Contact Message

From: {{ $name }} <{{ $emailAddress }}>

Message:

{{ $bodyMessage }}

@endcomponent
