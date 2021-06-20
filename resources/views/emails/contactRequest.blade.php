@component('mail::message')

Thank you for contacting us Ms/Mr {{ $contactRequest->name }} <br />
Phone Number: {{ $contactRequest->phone }}

@component('mail::panel')
<h3>Your message is:</h3><i>{{ $contactRequest->message }}</i>
@endcomponent
<br />
@component('mail::button', ['url' => 'http://www.aurasjobs.ro'])
Go to website
@endcomponent
<br />
<br />
We will get back to you shortly<br />
Follow us on facebook at <a href="https://www.facebook.com/aurasjobs.ro" rel="noreferrer">@aurasjobs.ro</a><br />
{{ config('app.name') }} team <br />
@endcomponent
