@component('mail::message')

We have a new candidate!

Name: {{ $candidate->name }} <br />
Department: {{ $candidate->department }} <br />
Email: {{ $candidate->email }} <br />
Phone Number: {{ $candidate->phone }}

@if($candidate->message)
@component('mail::panel')
<h3>His message is:</h3><i>{{ $candidate->message }}</i>
@endcomponent
@endif
<p><a href="http://aurasjobs.ro/uploads/candidates/{{$candidate->cv}}" target="_blank" rel="noreferrer">Click here to download application CV</a></p>
@if($candidate->identificationDocument)
<p><a href="http://aurasjobs.ro/uploads/candidates/{{$candidate->identificationDocument}}" target="_blank" rel="noreferrer">Click here to download candidate`s ID or passport</a></p>
@endif
@component('mail::button', ['url' => 'http://www.aurasjobs.ro'])
Go to website
@endcomponent
<br />
<br />
We will get back to you shortly<br />
Follow us on facebook at <a href="https://www.facebook.com/aurasjobs.ro" rel="noreferrer">@aurasjobs.ro</a><br />
{{ config('app.name') }} team <br />
@endcomponent
